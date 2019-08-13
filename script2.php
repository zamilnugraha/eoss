	/* #################################### REGIONAL OPR MANAGER (ROM) APPROVAL (REQUEST EQUIPMENT) ########################################### */	
		/*  ROM APPROVAL */	
		
		#}elseif($rCekStatusapprvl->ticketapprovalstatus_id2=='1') //status approval AM sesudah diapprove, dan status approval ROM sebelum diapprove
		}elseif(($rCekStatusapprvl->ticketapprovalstatus_id=='1')||($rCekStatusapprvl->ticketapprovalstatus_id2=='2')) //status approval AM sesudah diapprove, dan status approval ROM sebelum diapprove
		{
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
				
				if($_POST['ticketapprovalstatus_id']=='1') /* Jika Tiket Disetujui oleh AM */
				{				
					$insertTicketcheckapprvl1b = $ith->runQuery("
						UPDATE ITH_TICKET_HEADER SET 
						ticketstatus_id = '2',
						ticketapprovalstatus_id2 = '1',
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
								'',
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
				}elseif($_POST['ticketapprovalstatus_id']=='0') /* Jika Tiket Disetujui oleh AM */
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
								'',
								'$pid',
								'".$_SESSION['user_realname']."',
								'2',
								'".$_POST['ticket_notestatusapp2']."',
								'$ticket_problem',
								'$ticketapproval_createdate2',
								'$ticketapproval_createtime2',
								'".$_SESSION['user_realname']."'					
								)
								");				
				}
						$insertTicketcheckapprvl1bz = $ith->runQuery("
						UPDATE ITH_TICKET_HEADER SET 
						ticketstatus_id = '2',
						ticketapprovalstatus_id2 = '1',
						ticketapproval_createdate2 = '$ticketapproval_createdate2',
						ticketapproval_createtime2 = '$ticketapproval_createtime2'
						WHERE ticket_id = '$pid'
					");
			}
		#}
	/* ######################################## GM APPROVAL (REQUEST EQUIPMENT) ###################################################### */			
		/*  GM APPROVAL */	
		
		#}elseif($rCekStatusapprvl->ticketapprovalstatus_id2=='1') //status approval AM sesudah diapprove, dan status approval ROM sebelum diapprove
		}elseif($rCekStatusapprvl->ticketapprovalstatus_id2=='1') //status approval AM sesudah diapprove, dan status approval ROM sudah diapprove dan GM belum di approve
		{
			if($rCekStatusapprvl->ticketstatus_id=='2') //Status Tiket sudah On Process
			{ 
				$ticketapprovalstatus_idxx = $_POST['ticketapprovalstatus_id'];
				$ticketapproval_createdate= date('d/m/Y');
				$ticketapproval_createtime= date('H:i');
				$ticketnote_apprvl = $_POST['ticketnote_picto2'];

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
		
				$ticketnote_apprvl2 = $_POST['ticketnote_picto2'];

				$ticket_apprvlbynik = $_SESSION['user_nik'];
				$ticket_apprvlbyname = $_SESSION['user_realname'];
				$ticket_apprvlbylevel = $_SESSION['user_level'];
				
				$insertTicketcheckapprvl1b = $ith->runQuery("
					UPDATE ITH_TICKET_HEADER SET 
					ticketstatus_id = '2',
					ticketapprovalstatus_id3 = '$ticketapprovalstatus_idxx',
					ticketapproval_createdate2 = '$ticketapproval_createdate',
					ticketapproval_createtime2 = '$ticketapproval_createtime'
					WHERE ticket_id = '$pid'
				");

				$insertTicketcheckapprvl2b = $ith->runQuery("
					UPDATE ITH_TICKET_DETAIL SET 
					ticketdetailstatus_id = '2',
					ticketnote_apprvl = '$ticketnote_apprvl'
					WHERE ticketdetail_id = '$pid'
				");	
			}
						/* INSERT INTO LOG APPROVAL FROM MGR FSD */
						$ticketapproval_createdate= date('d/m/Y');
						$ticketapproval_createtime= date('H:i');				
						$updateTicketcheckapprvl3b = $ith->runQuery("
						UPDATE ITH_LOGAPPROVAL SET
							ticketapproval_subject = '$ticketnote_apprvl2',		
							ticketstatusapproval_activity = '$ticketapprovalstatus_id',	
							ticketapproval_createddate = '$ticketapproval_createdate',
							ticketapproval_createdtime = '$ticketapproval_createtime',
							ticketapproval_createdby = '$_SESSION[user_realname]'	
							WHERE  ticket_id = '$pid' AND ticketapproval_by = '$_SESSION[user_realname]'		
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
							'',
							'$pid',
							'$ticket_apprvlbyname',
							'$ticketapprovalstatus_id',
							'$ticketnote_apprvl2',
							'$ticket_problem',
							'$ticketapproval_createdate',
							CURTIME(),
							'$_SESSION[user_realname]'					
							)
							");			
		}