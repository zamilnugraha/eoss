<?
		if (count($error) == 0) 
		{
			$cone =  mysql_connect('localhost','usrservicedesk','kfc14022');
					mysql_select_db('servicedesk',$cone);
			
			$pid = $_GET['pid'];
			$uid = $_GET['username'];			
			$ticketdetail_pichandleby = $_POST['ticketdetail_pichandleby'];
			$ticketdetail_pichandleby2 = $_POST['ticketdetail_pichandleby2'];
			$ticketdetail_pichandleby3 = $_POST['ticketdetail_pichandleby3'];
			
		$qCekStatusapprvl = mysql_query("SELECT ticket_id, ticketstatus_id,
							ticketapproval_id1, ticketapproval_by1, ticketapprovalstatus_id,
							ticketapproval_id2, ticketapproval_by2, ticketapprovalstatus_id2,
							ticketapproval_id3, ticketapproval_by3, ticketapprovalstatus_id3 FROM ITH_TICKET_HEADER
							WHERE ticket_id = '".$_GET['pid']."'"); 
		$rCekStatusapprvl = mysql_fetch_object($qCekStatusapprvl);

	/* ###################################### AREA MANAGER APPROVAL (REQUEST EQUIPMENT) ###################################################### */		
	/* AM APPROVAL */	
		if($rCekStatusapprvl->ticketapprovalstatus_id=='2') //status approval AM sebelum diapprove
		{
			echo "<hr><br>AM APPROVAL ";
			if($rCekStatusapprvl->ticketstatus_id=='1') //Status Awal Tiket masih Open
			{ 
				$kdtipebrg = $_POST['kdtipebrg'];
				$ticketapprovalstatus_id1 = $_POST['ticketapprovalstatus_id'];
				$ticketapproval_createdate1= date('d/m/Y');
				$ticketapproval_createtime1= date('H:i');
				$ticketnote_apprvl1 = $_POST['ticket_notestatusapp1'];

				$qcekticketproblem = mysql_query("SELECT ticket_problem FROM ITH_TICKET_HEADER WHERE ticket_id = '$pid'");
				$rcekticketproblem = mysql_fetch_object($qcekticketproblem);
				$ticket_problem = $rcekticketproblem->ticket_problem;
				
				$qcekname = mysql_query("SELECT user_nik, user_realname FROM ITH_USER WHERE user_nik = '$ticketdetail_pichandleby'");
				$rcekname = mysql_fetch_object($qcekname);
				$ticketchoosepic_to2 = $rcekname->user_realname;
				$qcekname2 = mysql_query("SELECT user_nik, user_realname FROM ITH_USER WHERE user_nik = '$ticketdetail_pichandleby2'");
				$rcekname2 = mysql_fetch_object($qcekname2);
				$ticketchoosepic_to3 = $rcekname2->user_realname;
				$qcekname3 = mysql_query("SELECT user_nik, user_realname FROM ITH_USER WHERE user_nik = '$ticketdetail_pichandleby3'");
				$rcekname3 = mysql_fetch_object($qcekname3);
				$ticketchoosepic_to4 = $rcekname3->user_realname;
		
				#$ticketnote_apprvl2 = $_POST['ticketnote_picto2'];

				$ticket_apprvlbynik = $_SESSION['user_nik'];
				$ticket_apprvlbyname = $_SESSION['user_realname'];
				$ticket_apprvlbylevel = $_SESSION['user_level'];
				
				if($_POST['ticketapprovalstatus_id']=='1') /* Jika Tiket Disetujui oleh AM */
				{
				$qCekROM = mysql_query("SELECT nik_atasan, nama_atasan FROM ITH_USER WHERE user_nik = '".$_SESSION['user_nik']."'");
				$rCekROM = mysql_fetch_object($qCekROM);
				
				$insertTicketcheckapprvl1b = $ith->runQuery("
					UPDATE ITH_TICKET_HEADER SET 
					ticketstatus_id = '2',
					ticketapprovalstatus_id = '1',
					ticket_notestatusapp1 = '".$_POST['ticket_notestatusapp1']."',
					ticketapprovalstatus_id2 = '2',
					ticketapproval_id2 = '".$rCekROM->nik_atasan."',
					ticketapproval_by2 = '".$rCekROM->nama_atasan."',
					ticketapproval_createdate1 = '$ticketapproval_createdate1',
					ticketapproval_createtime1 = '$ticketapproval_createtime1'
					WHERE ticket_id = '$pid'
				");
				/**
				echo "<hr><br>  <b>Jika Tiket Disetujui oleh AM</b>
					<br>UPDATE ITH_TICKET_HEADER SET 
					<br>ticketstatus_id = '2',
					<br>ticketapprovalstatus_id = '".$_POST['ticketapprovalstatus_id']."',
					<br>ticket_notestatusapp1 = '".$_POST['ticket_notestatusapp1']."',
					<br>ticketapprovalstatus_id2 = '2',
					<br>ticketapproval_id2 = '".$rCekROM->nik_atasan."',
					<br>ticketapproval_by2 = '".$rCekROM->nama_atasan."',
					<br>ticketapproval_createdate1 = '$ticketapproval_createdate1',
					<br>ticketapproval_createtime1 = '$ticketapproval_createtime1'
					<br>WHERE ticket_id = '$pid'
				";
				**/
				$insertTicketcheckapprvl2b = $ith->runQuery("
					UPDATE ITH_TICKET_DETAIL SET 
					ticketdetailstatus_id = '2',
					ticketnote_apprvl1 = '".$_POST['ticket_notestatusapp1']."'
					WHERE ticketdetail_id = '$pid'
				");
				/**
				echo "<hr>
					<br>UPDATE ITH_TICKET_DETAIL SET 
					<br>ticketdetailstatus_id = '2',
					<br>ticketnote_apprvl1 = '".$_POST['ticket_notestatusapp1']."'
					<br>WHERE ticketdetail_id = '$pid'";
				**/	
					/* INSERT INTO LOG APPROVAL FROM AM */
						$ticketapproval_createdate1= date('d/m/Y');
						$ticketapproval_createtime1= date('H:i');						
						
						$updateTicketcheckapprvl3b = $ith->runQuery("
						UPDATE ITH_LOGAPPROVAL SET
							ticketapproval_subject = '".$_POST['ticket_notestatusapp1']."',	
							ticketstatusapproval_activity = '1',	
							ticketapproval_createddate = '$ticketapproval_createdate1',
							ticketapproval_createdtime = '$ticketapproval_createtime1',
							ticketapproval_createdby = '".$_SESSION['user_realname']."'
							WHERE  ticket_id = '$pid' AND ticketapproval_bynik ='".$_SESSION['user_nik']."'		
							");	
						$updateTicketcheckapprvl3bx = $ith->runQuery("
							INSERT ITH_LOGAPPROVAL(
							logapproval_id,ticket_id,ticketapproval_bynik, ticketapproval_by,ticketstatusapproval_activity,ticketapproval_subject,
							ticketapproval_note,
							ticketapproval_createddate,ticketapproval_createdtime,ticketapproval_createdby
							)VALUES(						
							 '0','$pid','".$_SESSION['nik_atasan']."','".$_SESSION['nama_atasan']."','2','Menunggu Persetujuan untuk tiket $pid',
							 'Menunggu Persetujuan untuk tiket $pid','$ticketapproval_createdate1','$ticketapproval_createtime1','".$_SESSION['user_realname']."')						
							");	
							
						$updateTicketcheckapprvlareamgr = $ith->runQuery("
							UPDATE ITH_TIPEBARANG_KODE SET
							ticketapprovalstatusid_am = '1',	
							ticketapprovalbynik_am = '".$_SESSION['user_nik']."',	
							ticketapprovalbyname_am = '".$_SESSION['user_realname']."',	
							ticketapprovaldate_am = '$ticketapproval_createdate1',
							ticketapprovaltime_am = '$ticketapproval_createtime1',
							ticketapprovalstatusid_rom = '1',
							ticketapprovalbynik_rom = '".$_SESSION['nik_atasan']."',
							ticketapprovalbyname_rom = '".$_SESSION['nama_atasan']."'
							WHERE  ticket_id = '$pid' AND kode_tipebrg ='".$_POST['kdtipebrg']."'		
							");		
					/**		
						echo "<hr>
							<br>UPDATE ITH_LOGAPPROVAL SET
							<br>ticketapproval_subject =  '".$_POST['ticket_notestatusapp1']."',		
							<br>ticketstatusapproval_activity = '$ticketapprovalstatus_id1',	
							<br>ticketapproval_createddate = '$ticketapproval_createdate1',
							<br>ticketapproval_createdtime = '$ticketapproval_createtime1',
							<br>ticketapproval_createdby = '".$_SESSION['user_realname']."'	
							<br>WHERE  ticket_id = '$pid' AND ticketapproval_by = '".$_SESSION['user_realname']."'
						";	
						echo "<br><br>
							INSERT ITH_LOGAPPROVAL(
							<br>logapproval_id,ticket_id,ticketapproval_bynik, ticketapproval_by,ticketstatusapproval_activity,ticketapproval_subject,
							<br>ticketapproval_note,
							<br>ticketapproval_createddate,ticketapproval_createdtime,ticketapproval_createdby
							<br>)VALUES(						
							<br> '0','$pid','".$_SESSION['nik_atasan']."','".$_SESSION['nama_atasan']."','2','Menunggu Persetujuan untuk tiket $pid',
							<br> 'Menunggu Persetujuan untuk tiket $pid','$ticketapproval_createdate1','$ticketapproval_createtime1','".$_SESSION['user_realname']."')";
					**/						
					/* INSERT INTO LOG REPORT FROM AM */
						
						$insertTicketcheckapprvl3b = $ith->runQuery("
							INSERT INTO ITH_LOGREPORT(
							logreport_id,
							ticket_id,
							ticketrespond_by,
							ticketstatus_report,
							ticketreport_subject,
							ticketreport_note,
							ticketreport_createddate,
							ticketreport_createdtime,
							ticketreport_createdby
							)VALUES(
							'0',
							'$pid',
							'".$_SESSION['user_realname']."',
							'1',
							'".$_POST['ticket_notestatusapp1']."',
							'$ticket_problem',
							'$ticketapproval_createdate1',
							'$ticketapproval_createtime1',
							'".$_SESSION['user_realname']."'		
							)
							");		
						$insertTicketcheckapprvl3bx = $ith->runQuery("
							INSERT INTO ITH_LOGREPORT(
							logreport_id,
							ticket_id,
							ticketrespond_by,
							ticketstatus_report,
							ticketreport_subject,
							ticketreport_note,
							ticketreport_createddate,
							ticketreport_createdtime,
							ticketreport_createdby
							)VALUES(
							'0',
							'$pid',
							'".$_SESSION['nama_atasan']."',
							'2',
							'Menunggu Persetujuan untuk tiket $pid',
							'$ticket_problem',
							'$ticketapproval_createdate1',
							'$ticketapproval_createtime1',
							'".$_SESSION['user_realname']."'		
							)
							");		
					/**
						echo "<hr>
							<br>INSERT INTO ITH_LOGREPORT(
							<br>logreport_id,
							<br>ticket_id,
							<br>ticketrespond_by,
							<br>ticketstatus_report,
							<br>ticketreport_subject,
							<br>ticketreport_note,
							<br>ticketreport_createddate,
							<br>ticketreport_createdtime,
							<br>ticketreport_createdby
							<br>)VALUES(
							<br>'',
							<br>'$pid',
							<br>'$ticket_apprvlbyname',
							<br>'$ticketapprovalstatus_id1',
							<br>'$ticketnote_apprvl1',
							<br>'$ticket_problem',
							<br>'$ticketapproval_createdate1',
							<br>'$ticketapproval_createtime1',
							<br>'".$_SESSION['user_realname']."'					
							<br>)
						";	
						echo "<br><br>
							INSERT INTO ITH_LOGREPORT(
							<br>logreport_id,
							<br>ticket_id,
							<br>ticketrespond_by,
							<br>ticketstatus_report,
							<br>ticketreport_subject,
							<br>ticketreport_note,
							<br>ticketreport_createddate,
							<br>ticketreport_createdtime,
							<br>ticketreport_createdby
							<br>)VALUES(
							<br>'',
							<br>'$pid',
							<br>'".$_SESSION['nama_atasan']."',
							<br>'2',
							<br>'Menunggu Persetujuan untuk tiket $pid ',
							<br>'$ticket_problem',
							<br>'$ticketapproval_createdate1',
							<br>'$ticketapproval_createtime1',
							<br>'".$_SESSION['user_realname']."'		
							<br>)";
						echo "<hr><br><br>";
					**/				
				}elseif($_POST['ticketapprovalstatus_id']=='0') /* Jika Tiket Tidak Disetujui oleh AM */
				{
					
					$insertTicketcheckapprvl1b = $ith->runQuery("
					UPDATE ITH_TICKET_HEADER SET 
					ticketstatus_id = '2',
					ticketapprovalstatus_id = '0',
					ticket_notestatusapp1 = '".$_POST['ticket_notestatusapp1']."',
					ticketapproval_createdate1 = '$ticketapproval_createdate1',
					ticketapproval_createtime1 = '$ticketapproval_createtime1'
					WHERE ticket_id = '$pid'
					");		
				
					/**
					echo "<hr><br><b>Jika Tiket Tidak Disetujui oleh AM</b>
						<br>UPDATE ITH_TICKET_HEADER SET 
						<br>ticketstatus_id = '2',
						<br>ticketapprovalstatus_id = '".$_POST['ticketapprovalstatus_id']."',
						<br>ticket_notestatusapp1 = '".$_POST['ticket_notestatusapp1']."',
						<br>ticketapproval_createdate1 = '$ticketapproval_createdate1',
						<br>ticketapproval_createtime1 = '$ticketapproval_createtime1'
						<br>WHERE ticket_id = '$pid'";
					}
					**/
				}
					
			} /* if($rCekStatusapprvl->ticketstatus_id=='1') //Status Awal Tiket masih Open */
		## exit;	
	/* #################################### REGIONAL OPR MANAGER (ROM) APPROVAL (REQUEST EQUIPMENT) ########################################### */	
		/*  ROM APPROVAL */	
		
		#}elseif($rCekStatusapprvl->ticketapprovalstatus_id2=='1') //status approval AM sesudah diapprove, dan status approval ROM sebelum diapprove
		}elseif(($rCekStatusapprvl->ticketapprovalstatus_id2=='2')&&($rCekStatusapprvl->ticketapprovalstatus_id=='1')) //status approval AM sesudah diapprove, dan status approval ROM sebelum diapprove
		{
			echo "<hr><br>ROM APPROVAL ";
			if($rCekStatusapprvl->ticketstatus_id=='2') //Status Tiket sudah On Process
			{ 
				$ticketapprovalstatus_id2 = $_POST['ticketapprovalstatus_id2'];
				$ticketapproval_createdate2= date('d/m/Y');
				$ticketapproval_createtime2= date('H:i');
				$ticketnote_apprvl2 = $_POST['ticket_notestatusapp2'];

				$qcekticketproblem = mysql_query("SELECT ticket_problem FROM ITH_TICKET_HEADER WHERE ticket_id = '$pid'");
				$rcekticketproblem = mysql_fetch_object($qcekticketproblem);
				$ticket_problem = $rcekticketproblem->ticket_problem;
				
				$qcekname = mysql_query("SELECT user_nik, user_realname FROM ITH_USER WHERE user_nik = '$ticketdetail_pichandleby'");
				$rcekname = mysql_fetch_object($qcekname);
				$ticketchoosepic_to2 = $rcekname->user_realname;
				$qcekname2 = mysql_query("SELECT user_nik, user_realname FROM ITH_USER WHERE user_nik = '$ticketdetail_pichandleby2'");
				$rcekname2 = mysql_fetch_object($qcekname2);
				$ticketchoosepic_to3 = $rcekname2->user_realname;
				$qcekname3 = mysql_query("SELECT user_nik, user_realname FROM ITH_USER WHERE user_nik = '$ticketdetail_pichandleby3'");
				$rcekname3 = mysql_fetch_object($qcekname3);
				$ticketchoosepic_to4 = $rcekname3->user_realname;
		
				#$ticketnote_apprvl2 = $_POST['ticketnote_picto2'];

				$ticket_apprvlbynik = $_SESSION['user_nik'];
				$ticket_apprvlbyname = $_SESSION['user_realname'];
				$ticket_apprvlbylevel = $_SESSION['user_level'];

				$ticket_apprvlbynik = $_SESSION['user_nik'];
				$ticket_apprvlbyname = $_SESSION['user_realname'];
				$ticket_apprvlbylevel = $_SESSION['user_level'];
				
				if($_POST['ticketapprovalstatus_id2']=='1') /* Jika Tiket Disetujui oleh ROM */
				{	
					/* Cek Harga Jika Penuhi Syarat Berlaku */
					$qCekHargaForApproval = mysql_query("SELECT ticket_id, ticketstatus_id,
														ticketapprovalstatus_id, ticketapproval_id1, ticketapproval_by1, ticket_notestatusapp1,ticketapproval_createdate1,ticketapproval_createtime1, 
														ticketapprovalstatus_id2, ticketapproval_id2, ticketapproval_by2, ticket_notestatusapp2,ticketapproval_createdate2,ticketapproval_createtime2,
														ticketapprovalstatus_id3, ticketapproval_id3, ticketapproval_by3, ticket_notestatusapp3,ticketapproval_createdate3,ticketapproval_createtime3
														FROM ITH_TICKET_HEADER WHERE ticket_id = '$pid'");
					$rCekHargaForApproval = mysql_fetch_object($qCekHargaForApproval);
					if($rCekHargaForApproval->ticket_notestatusapp3 == 'Request Ini Perlu Persetujuan Dari GM OPERATION Terlebih Dahulu, Karena Harga Per Item Melebihi Batas Nilai Yang Telah Ditentukan. Terimakasih')
					{	
						$insertTicketcheckapprvl1b = $ith->runQuery("
							UPDATE ITH_TICKET_HEADER SET 
							ticketstatus_id = '2',
							ticketapprovalstatus_id2 = '1',
							ticket_notestatusapp2 = '".$_POST['ticket_notestatusapp2']."',
							ticketapprovalstatus_id3 = '2',
							ticketapproval_id3 = '".$_SESSION['nik_atasan']."',
							ticketapproval_by3 = '".$_SESSION['nama_atasan']."',
							ticketapproval_createdate2 = '$ticketapproval_createdate2',
							ticketapproval_createtime2 = '$ticketapproval_createtime2'
							WHERE ticket_id = '$pid'
						");
						$insertTicketcheckapprvl2b = $ith->runQuery("
							UPDATE ITH_TICKET_DETAIL SET 
							ticketdetailstatus_id = '2',
							ticketnote_apprvl2 = '".$_POST['ticket_notestatusapp2']."'
							WHERE ticketdetail_id = '$pid'
						");	
							/* UPDATE LOG APPROVAL FROM ROM */
							$ticketapproval_createdate2= date('d/m/Y');
							$ticketapproval_createtime2= date('H:i');						
							$updateTicketcheckapprvl3b = $ith->runQuery("
							UPDATE ITH_LOGAPPROVAL SET
								ticketapproval_subject = '".$_POST['ticket_notestatusapp2']."',		
								ticketstatusapproval_activity = '".$_POST['ticketapprovalstatus_id2']."',	
								ticketapproval_createddate = '$ticketapproval_createdate2',
								ticketapproval_createdtime = '$ticketapproval_createtime2',
								ticketapproval_createdby = '".$_SESSION['user_realname']."'	
								WHERE ticket_id = '$pid' AND ticketapproval_bynik ='".$_SESSION['user_nik']."'			
								");		
								
							/* INSERT INTO LOG APPROVAL FROM ROM */	
							$updateTicketcheckapprvl3bx2 = $ith->runQuery("
							INSERT ITH_LOGAPPROVAL(
							logapproval_id,ticket_id,ticketapproval_bynik, ticketapproval_by,ticketstatusapproval_activity,ticketapproval_subject,
							ticketapproval_note,
							ticketapproval_createddate,ticketapproval_createdtime,ticketapproval_createdby
							)VALUES(						
							 '0','$pid','".$_SESSION['nik_atasan']."','".$_SESSION['nama_atasan']."','2','Menunggu Persetujuan untuk tiket $pid',
							 'Menunggu Persetujuan untuk tiket $pid','$ticketapproval_createdate2','$ticketapproval_createtime2','".$_SESSION['user_realname']."')						
							");								
							
							/* INSERT INTO LOG REPORT FROM ROM */	
							$insertTicketcheckapprvl3b = $ith->runQuery("
							INSERT INTO ITH_LOGREPORT(
							logreport_id,
							ticket_id,
							ticketrespond_by,
							ticketstatus_report,
							ticketreport_subject,
							ticketreport_note,
							ticketreport_createddate,
							ticketreport_createdtime,
							ticketreport_createdby
							)VALUES(
							'0',
							'$pid',
							'".$_SESSION['user_realname']."',
							'1',
							'".$_POST['ticket_notestatusapp2']."',
							'$ticket_problem',
							'$ticketapproval_createdate2',
							'$ticketapproval_createtime2',
							'".$_SESSION['user_realname']."'		
							)
							");									
							/* INSERT INTO LOG REPORT FROM GM OPR */
							$insertTicketcheckapprvl3b = $ith->runQuery("
								INSERT INTO ITH_LOGREPORT(
								logreport_id,
								ticket_id,
								ticketrespond_by,
								ticketstatus_report,
								ticketreport_subject,
								ticketreport_note,
								ticketreport_createddate,
								ticketreport_createdtime,
								ticketreport_createdby
								)VALUES(
								'0',
								'$pid',
								'".$_SESSION['nama_atasan']."',
								'2',
								'Menunggu Persetujuan untuk tiket $pid',
								'$ticket_problem',
								'$ticketapproval_createdate2',
								'$ticketapproval_createtime2',
								'".$_SESSION['user_realname']."'		
								)
								");	
								
					/* Cek Harga Jika tidak Penuhi Syarat Berlaku */				
					}elseif($rCekHargaForApproval->ticket_notestatusapp3 != 'Request Ini Perlu Persetujuan Dari GM OPERATION Terlebih Dahulu, Karena Harga Per Item Melebihi Batas Nilai Yang Telah Ditentukan. Terimakasih')
					{
						$insertTicketcheckapprvl1b = $ith->runQuery("
							UPDATE ITH_TICKET_HEADER SET 
							ticketstatus_id = '2',
							ticketapprovalstatus_id2 = '1',
							ticket_notestatusapp2 = '".$_POST['ticket_notestatusapp2']."',
							ticketapproval_createdate2 = '$ticketapproval_createdate2',
							ticketapproval_createtime2 = '$ticketapproval_createtime2'
							WHERE ticket_id = '$pid'");						
					
						$insertTicketcheckapprvl2b = $ith->runQuery("
							UPDATE ITH_TICKET_DETAIL SET 
							ticketdetailstatus_id = '2',
							ticketnote_apprvl2 = '".$_POST['ticket_notestatusapp2']."'
							WHERE ticketdetail_id = '$pid'
						");	
							/* UPDATE LOG APPROVAL FROM ROM */
							$ticketapproval_createdate2= date('d/m/Y');
							$ticketapproval_createtime2= date('H:i');						
							$updateTicketcheckapprvl3b = $ith->runQuery("
							UPDATE ITH_LOGAPPROVAL SET
								ticketapproval_subject = '".$_POST['ticket_notestatusapp2']."',		
								ticketstatusapproval_activity = '".$_POST['ticketapprovalstatus_id2']."',	
								ticketapproval_createddate = '$ticketapproval_createdate2',
								ticketapproval_createdtime = '$ticketapproval_createtime2',
								ticketapproval_createdby = '".$_SESSION['user_realname']."'	
								WHERE  ticket_id = '$pid' AND ticketapproval_by = '".$_SESSION['user_realname']."'		
								");		
								
									/* INSERT INTO LOG REPORT FROM ROM */	
									$insertTicketcheckapprvl3b = $ith->runQuery("
									INSERT INTO ITH_LOGREPORT(
									logreport_id,
									ticket_id,
									ticketrespond_by,
									ticketstatus_report,
									ticketreport_subject,
									ticketreport_note,
									ticketreport_createddate,
									ticketreport_createdtime,
									ticketreport_createdby
									)VALUES(
									'0',
									'$pid',
									'".$_SESSION['user_realname']."',
									'1',
									'".$_POST['ticket_notestatusapp2']."',
									'$ticket_problem',
									'$ticketapproval_createdate2',
									'$ticketapproval_createtime2',
									'".$_SESSION['user_realname']."'		
									)
									");				
					}			
					
				}elseif($_POST['ticketapprovalstatus_id2']=='0') /* Jika Tiket Disetujui oleh ROM */
				{				
					$insertTicketcheckapprvl1b = $ith->runQuery("
						UPDATE ITH_TICKET_HEADER SET 
						ticketstatus_id = '2',
						ticketapprovalstatus_id2 = '0',
						ticketapproval_createdate2 = '$ticketapproval_createdate2',
						ticketapproval_createtime2 = '$ticketapproval_createtime2'
						WHERE ticket_id = '$pid'
					");

					$insertTicketcheckapprvl2b = $ith->runQuery("
						UPDATE ITH_TICKET_DETAIL SET 
						ticketdetailstatus_id = '2',
						ticketnote_apprvl2 = '".$_POST['ticket_notestatusapp2']."'
						WHERE ticketdetail_id = '$pid'
					");	
							/* INSERT INTO LOG APPROVAL FROM ROM */
							$ticketapproval_createdate2= date('d/m/Y');
							$ticketapproval_createtime2= date('H:i');						
							$updateTicketcheckapprvl3b = $ith->runQuery("
							UPDATE ITH_LOGAPPROVAL SET
								ticketapproval_subject = '".$_POST['ticket_notestatusapp2']."',		
								ticketstatusapproval_activity = '".$_POST['ticketapprovalstatus_id2']."',	
								ticketapproval_createddate = '$ticketapproval_createdate2',
								ticketapproval_createdtime = '$ticketapproval_createtime2',
								ticketapproval_createdby = '".$_SESSION['user_realname']."'	
								WHERE  ticket_id = '$pid' AND ticketapproval_by = '".$_SESSION['user_realname']."'		
								");		
								
							/* INSERT INTO LOG REPORT FROM ROM */
							$insertTicketcheckapprvl3b = $ith->runQuery("
								INSERT INTO ITH_LOGREPORT(
								logreport_id,
								ticket_id,
								ticketrespond_by,
								ticketstatus_report,
								ticketreport_subject,
								ticketreport_note,
								ticketreport_createddate,
								ticketreport_createdtime,
								ticketreport_createdby
								)VALUES(
								'0',
								'$pid',
								'".$_SESSION['nama_atasan']."',
								'2',
								'Menunggu Persetujuan untuk tiket $pid',
								'$ticket_problem',
								'$ticketapproval_createdate2',
								'$ticketapproval_createtime2',
								'".$_SESSION['user_realname']."'		
								)
								");				
								
										
				}
						/**
						$insertTicketcheckapprvl1bz = $ith->runQuery("
						UPDATE ITH_TICKET_HEADER SET 
						ticketstatus_id = '2',
						ticketapprovalstatus_id2 = '1',
						ticketapproval_createdate2 = '$ticketapproval_createdate2',
						ticketapproval_createtime2 = '$ticketapproval_createtime2'
						WHERE ticket_id = '$pid'
						");
						**/
			}
		#}
	/* ######################################## GMO APPROVAL (REQUEST EQUIPMENT) ###################################################### */			
		/*  GM APPROVAL */	
		
		#}elseif($rCekStatusapprvl->ticketapprovalstatus_id2=='1') //status approval AM sesudah diapprove, dan status approval ROM sebelum diapprove
		}elseif(($rCekStatusapprvl->ticketapprovalstatus_id3=='2')&&($rCekStatusapprvl->ticketapprovalstatus_id2=='1')&&
		($rCekStatusapprvl->ticketapprovalstatus_id=='1')) 
		//status approval AM sesudah diapprove, dan status approval ROM sudah diapprove tetapi GMO belum melakukan approval
		{
			echo "<hr><br>GMO APPROVAL ";
			if($rCekStatusapprvl->ticketstatus_id=='2') //Status Tiket sudah On Process
			{ 
				$ticketapprovalstatus_id3 = $_POST['ticketapprovalstatus_id3'];
				$ticketapproval_createdate3= date('d/m/Y');
				$ticketapproval_createtime3= date('H:i');
				$ticketnote_apprvl3 = $_POST['ticket_notestatusapp3'];

				$qcekticketproblem = mysql_query("SELECT ticket_problem FROM ITH_TICKET_HEADER WHERE ticket_id = '$pid'");
				$rcekticketproblem = mysql_fetch_object($qcekticketproblem);
				$ticket_problem = $rcekticketproblem->ticket_problem;
				
				$qcekname = mysql_query("SELECT user_nik, user_realname FROM ITH_USER WHERE user_nik = '$ticketdetail_pichandleby'");
				$rcekname = mysql_fetch_object($qcekname);
				$ticketchoosepic_to2 = $rcekname->user_realname;
				$qcekname2 = mysql_query("SELECT user_nik, user_realname FROM ITH_USER WHERE user_nik = '$ticketdetail_pichandleby2'");
				$rcekname2 = mysql_fetch_object($qcekname2);
				$ticketchoosepic_to3 = $rcekname2->user_realname;
				$qcekname3 = mysql_query("SELECT user_nik, user_realname FROM ITH_USER WHERE user_nik = '$ticketdetail_pichandleby3'");
				$rcekname3 = mysql_fetch_object($qcekname3);
				$ticketchoosepic_to4 = $rcekname3->user_realname;
		
				#$ticketnote_apprvl2 = $_POST['ticketnote_picto2'];

				$ticket_apprvlbynik = $_SESSION['user_nik'];
				$ticket_apprvlbyname = $_SESSION['user_realname'];
				$ticket_apprvlbylevel = $_SESSION['user_level'];

				$ticket_apprvlbynik = $_SESSION['user_nik'];
				$ticket_apprvlbyname = $_SESSION['user_realname'];
				$ticket_apprvlbylevel = $_SESSION['user_level'];
				
				if($_POST['ticketapprovalstatus_id3']=='1') /* Jika Tiket Disetujui oleh GMO */
				{	
					/* Cek Harga Jika Penuhi Syarat Berlaku */
					$qCekHargaForApproval = mysql_query("SELECT ticket_id, ticketstatus_id,
														ticketapprovalstatus_id, ticketapproval_id1, ticketapproval_by1, ticket_notestatusapp1,ticketapproval_createdate1,ticketapproval_createtime1, 
														ticketapprovalstatus_id2, ticketapproval_id2, ticketapproval_by2, ticket_notestatusapp2,ticketapproval_createdate2,ticketapproval_createtime2,
														ticketapprovalstatus_id3, ticketapproval_id3, ticketapproval_by3, ticket_notestatusapp3,ticketapproval_createdate3,ticketapproval_createtime3
														FROM ITH_TICKET_HEADER WHERE ticket_id = '$pid'");
					$rCekHargaForApproval = mysql_fetch_object($qCekHargaForApproval);
					if($rCekHargaForApproval->ticket_notestatusapp3 == 'Request Ini Perlu Persetujuan Dari GM OPERATION Terlebih Dahulu, Karena Harga Per Item Melebihi Batas Nilai Yang Telah Ditentukan. Terimakasih')
					{	
						$insertTicketcheckapprvl1b = $ith->runQuery("
							UPDATE ITH_TICKET_HEADER SET 
							ticketstatus_id = '2',
							ticketapprovalstatus_id3 = '1',
							ticket_notestatusapp3 = '".$_POST['ticket_notestatusapp3']."',
							ticketapproval_createdate3 = '$ticketapproval_createdate3',
							ticketapproval_createtime3 = '$ticketapproval_createtime3'
							WHERE ticket_id = '$pid'
						");
						$insertTicketcheckapprvl4b = $ith->runQuery("
							UPDATE ITH_TICKET_DETAIL SET 
							ticketdetailstatus_id = '2',
							ticketnote_apprvl3 = '".$_POST['ticket_notestatusapp3']."'
							WHERE ticketdetail_id = '$pid'
						");	
							/* UPDATE LOG APPROVAL FROM ROM */
							$ticketapproval_createdate3= date('d/m/Y');
							$ticketapproval_createtime3= date('H:i');						
							$updateTicketcheckapprvl4b = $ith->runQuery("
							UPDATE ITH_LOGAPPROVAL SET
								ticketapproval_subject = '".$_POST['ticket_notestatusapp3']."',		
								ticketstatusapproval_activity = '".$_POST['ticketapprovalstatus_id3']."',	
								ticketapproval_createddate = '$ticketapproval_createdate3',
								ticketapproval_createdtime = '$ticketapproval_createtime3',
								ticketapproval_createdby = '".$_SESSION['user_realname']."'	
								WHERE  ticket_id = '$pid' AND ticketapproval_by = '".$_SESSION['user_realname']."'		
								");		
								
							/* INSERT INTO LOG REPORT FROM GMO */	
							$insertTicketcheckapprvl4b1 = $ith->runQuery("
							INSERT INTO ITH_LOGREPORT(
							logreport_id,
							ticket_id,
							ticketrespond_by,
							ticketstatus_report,
							ticketreport_subject,
							ticketreport_note,
							ticketreport_createddate,
							ticketreport_createdtime,
							ticketreport_createdby
							)VALUES(
							'0',
							'$pid',
							'".$_SESSION['user_realname']."',
							'1',
							'".$_POST['ticket_notestatusapp3']."',
							'$ticket_problem',
							'$ticketapproval_createdate3',
							'$ticketapproval_createtime3',
							'".$_SESSION['user_realname']."'		
							)
							");	
								
					/* Cek Harga Jika tidak Penuhi Syarat Berlaku */				
					}elseif($rCekHargaForApproval->ticket_notestatusapp3 != 'Request Ini Perlu Persetujuan Dari GM OPERATION Terlebih Dahulu, Karena Harga Per Item Melebihi Batas Nilai Yang Telah Ditentukan. Terimakasih')
					{
						$insertTicketcheckapprvl1b = $ith->runQuery("
							UPDATE ITH_TICKET_HEADER SET 
							ticketstatus_id = '2',
							ticketapprovalstatus_id3 = '1',
							ticket_notestatusapp3 = '".$_POST['ticket_notestatusapp3']."',
							ticketapproval_createdate3 = '$ticketapproval_createdate3',
							ticketapproval_createtime3 = '$ticketapproval_createtime3'
							WHERE ticket_id = '$pid'");						
					
						$insertTicketcheckapprvl3b2 = $ith->runQuery("
							UPDATE ITH_TICKET_DETAIL SET 
							ticketdetailstatus_id = '2',
							ticketnote_apprvl3 = '".$_POST['ticket_notestatusapp3']."'
							WHERE ticketdetail_id = '$pid'
						");	
							/* UPDATE LOG APPROVAL FROM GMO */
							$ticketapproval_createdate3= date('d/m/Y');
							$ticketapproval_createtime3= date('H:i');						
							$updateTicketcheckapprvl3b = $ith->runQuery("
							UPDATE ITH_LOGAPPROVAL SET
								ticketapproval_subject = '".$_POST['ticket_notestatusapp3']."',		
								ticketstatusapproval_activity = '".$_POST['ticketapprovalstatus_id3']."',	
								ticketapproval_createddate = '$ticketapproval_createdate3',
								ticketapproval_createdtime = '$ticketapproval_createtime3',
								ticketapproval_createdby = '".$_SESSION['user_realname']."'	
								WHERE  ticket_id = '$pid' AND ticketapproval_by = '".$_SESSION['user_realname']."'		
								");		
								
									/* INSERT INTO LOG REPORT FROM ROM */	
									$insertTicketcheckapprvl3b3 = $ith->runQuery("
									INSERT INTO ITH_LOGREPORT(
									logreport_id,
									ticket_id,
									ticketrespond_by,
									ticketstatus_report,
									ticketreport_subject,
									ticketreport_note,
									ticketreport_createddate,
									ticketreport_createdtime,
									ticketreport_createdby
									)VALUES(
									'0',
									'$pid',
									'".$_SESSION['user_realname']."',
									'1',
									'".$_POST['ticket_notestatusapp3']."',
									'$ticket_problem',
									'$ticketapproval_createdate3',
									'$ticketapproval_createtime3',
									'".$_SESSION['user_realname']."'		
									)
									");				
					}			
					
				}elseif($_POST['ticketapprovalstatus_id3']=='0') /* Jika Tiket Disetujui oleh GMO */
				{				
					$insertTicketcheckapprvl1b = $ith->runQuery("
						UPDATE ITH_TICKET_HEADER SET 
						ticketstatus_id = '2',
						ticketapprovalstatus_id3 = '0',
						ticketapproval_createdate3 = '$ticketapproval_createdate3',
						ticketapproval_createtime3 = '$ticketapproval_createtime3'
						WHERE ticket_id = '$pid'
					");

					$insertTicketcheckapprvl2b3 = $ith->runQuery("
						UPDATE ITH_TICKET_DETAIL SET 
						ticketdetailstatus_id = '2',
						ticketnote_apprvl3 = '".$_POST['ticket_notestatusapp3']."'
						WHERE ticketdetail_id = '$pid'
					");	
							/* INSERT INTO LOG APPROVAL FROM ROM */
							$ticketapproval_createdate3= date('d/m/Y');
							$ticketapproval_createtime3= date('H:i');						
							$updateTicketcheckapprvl3b4 = $ith->runQuery("
							UPDATE ITH_LOGAPPROVAL SET
								ticketapproval_subject = '".$_POST['ticket_notestatusapp3']."',		
								ticketstatusapproval_activity = '".$_POST['ticketapprovalstatus_id3']."',	
								ticketapproval_createddate = '$ticketapproval_createdate3',
								ticketapproval_createdtime = '$ticketapproval_createtime3',
								ticketapproval_createdby = '".$_SESSION['user_realname']."'	
								WHERE  ticket_id = '$pid' AND ticketapproval_by = '".$_SESSION['user_realname']."'		
								");		
								
							/* INSERT INTO LOG REPORT FROM GMO */
							$insertTicketcheckapprvl3b5 = $ith->runQuery("
								INSERT INTO ITH_LOGREPORT(
								logreport_id,
								ticket_id,
								ticketrespond_by,
								ticketstatus_report,
								ticketreport_subject,
								ticketreport_note,
								ticketreport_createddate,
								ticketreport_createdtime,
								ticketreport_createdby
								)VALUES(
								'0',
								'$pid',
								'".$_SESSION['user_realname']."',
								'2',
								'".$_POST['ticket_notestatusapp3']."',
								'$ticket_problem',
								'$ticketapproval_createdate3',
								'$ticketapproval_createtime3',
								'".$_SESSION['user_realname']."'		
								)
								");		
								
								$cone =  mysql_connect('localhost','usrservicedesk','kfc14022');
										 mysql_select_db('servicedesk',$cone);

								$kodecabang = $_SESSION['user_nik'];
								$departemen = '00099';
								$bln = date('m'); $taun = date('y');
								$noreq = $bln.$taun.'/'.$rNextToTiketIDX;
								#$noreq = '';
								#$reqdate = date('d-M-Y');
					
								#$reqdate = '';
								#$reqdate = date('d/M/Y');
								#$recvdate = '-';
								#$forfsddate = '-';								
								$recvdate = date('d-M-Y');
								$forfsddate = date('d-M-Y');

								
					
								$qCekTiketID2 = mysql_query("SELECT ticket_id,kuantitas,kode_tipebarang,request_by 
															 FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$_GET['pid']."'");
								while($rCekTiketID2 = mysql_fetch_object($qCekTiketID2))
								{							
								
									$conninsToRequestMagicWarehouse = oci_connect('fsd', 'fsd', 'localhost:1521/XE') or die;	
									
									$qCekDataMagix = "SELECT DISTINCT FSDORDEC_TEMP.NO_PERMINTAAN, FSDORDEC_TEMP.TGL_PERMINTAAN, 
													  FSDORDEC_TEMP.TGL_BUAT_FSD, FSDORDEC_TEMP.KODE_BARANG, FSDORDEC_TEMP.NO_TAGING, 
													  FSDBRGEQ.NAMA_BARANG,
													  FSDORDEC_TEMP.JUMLAH_PERMINTAAN, FSDORDEC_TEMP.JUMLAH_ORDER, FSDORDEC_TEMP.KIRIM_DARI_STOK, FSDORDEC_TEMP.TGL_DISETUJUI, 
													  FSDORDEC_TEMP.NOMOR_RO, FSDORDEC_TEMP.STATUS_PERMINTAAN
													  FROM FSDORDEC_TEMP 
													  JOIN FSDBRGEQ ON FSDORDEC_TEMP.KODE_BARANG = FSDBRGEQ.KODE_BARANG
													  WHERE FSDBRGEQ.KODE_BARANG = '".$rCekTiketID2->kode_tipebarang."'";  
									$objParseCekDataMagix = oci_parse ($conninsToRequestMagicWarehouse, $qCekDataMagix);  
															   oci_execute ($objParseCekDataMagix,OCI_DEFAULT);
									$objResultCekDataMagix = oci_fetch_object($objParsenamabrg,OCI_BOTH);										
									$insToRequestMagicWarehouse = "INSERT INTO FSDORDEC(KODE_CABANG,DEPARTEMEN,NO_PERMINTAAN,TGL_PERMINTAAN,TGL_TERIMA_FSD,TGL_BUAT_FSD,KODE_BARANG,JUMLAH_PERMINTAAN) 
																	VALUES ('".$rCekTiketID2->request_by."', '".$departemen."', '".$objResultCekDataMagix->NO_PERMINTAAN."', '".$objResultCekDataMagix->TGL_PERMINTAAN."', '".$recvdate."', '".$forfsddate."', '".$rCekTiketID2->kode_tipebarang."', '".$rCekTiketID2->kuantitas."')";
							
									$compiledinsToRequestMagicWarehouse = oci_parse($conninsToRequestMagicWarehouse,$insToRequestMagicWarehouse);			
										    oci_execute($compiledinsToRequestMagicWarehouse); 	
								}				
				}
						/**
						$insertTicketcheckapprvl1bz = $ith->runQuery("
						UPDATE ITH_TICKET_HEADER SET 
						ticketstatus_id = '2',
						ticketapprovalstatus_id2 = '1',
						ticketapproval_createdate2 = '$ticketapproval_createdate2',
						ticketapproval_createtime2 = '$ticketapproval_createtime2'
						WHERE ticket_id = '$pid'
						");
						**/
			} #exit;
	#include_once ('mailer_reqapprvlsubmgrfrom.php');
		}
	/*===============================================================================================================*/		
				header ("Location: index.php?view=message&pid=$pid&uid=$ticket_apprvlbynik");
		}else {
				# $_SESSION['msgerror'] = $error;
				header ("Location: index.php?view=message&pid=$pid&uid=$ticket_apprvlbynik");
		} break;
?>