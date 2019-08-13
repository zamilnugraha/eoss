<?php
	/*if(($category=='1')||($category=='2')||($category=='5')||($category=='6')||($category=='7')||($category=='8')
								||($category=='35')||($category=='36')||($category=='37'))
	{ */
	error_reporting(E_STRICT);
		date_default_timezone_set('America/Toronto');
		require_once('email/class.phpmailer.php');
		$mail             = new PHPMailer();

		$mail->IsSMTP();
		$mail->SMTPDebug  = 1;           
		$mail->SMTPKeepAlive = false;                                     
		$mail->SMTPAuth   	 = true;       
		$mail->Mailer 		 = 'smtp';   
		$mail->SMTPSecure    = 'ssl';
		$mail->Host       	 = 'mail.ffi.co.id';     
		#$mail->Host       	 = '117.54.9.179';     
		#$mail->Host       	 = '192.168.10.10';     
		$mail->Port       	 = 465;                  
		$mail->Username   	 = 'system.servicedesk@ffi.co.id';  
		$mail->Password   	 = 'Kfc_System';      
	
			
			$usrid = $_SESSION['user_id'];
			$usrname = $_SESSION['user_realname'];	
			$usrnik = $_SESSION['user_nik'];
			$usrmail = $_SESSION['user_email'];
			$usrdept = $_SESSION['user_departemen'];
			$usrlvl = $_SESSION['user_level'];
			$ugroupid = $_SESSION['ugroupid'];
			$usubgroupid = $_SESSION['usubgroupid'];
			$usrnikatasan = $_SESSION['nik_atasan'];
			#$cdate = date('j F Y');
			#$cdate = date('d F Y');
			
			$cdate3a = date('j')+1;
			$cdate3b = date('F');
			$cdate3c = date('Y');			
			$cdate = $cdate3a.'&nbsp;'.$cdate3b.'&nbsp;'.$cdate3c;
			
			$qCekDataX = mysql_query("SELECT ticket_createdate FROM ITH_TICKET_HEADER WHERE ticket_id = '".$newid."'");
			$rCekDataX = mysql_fetch_object($qCekDataX);
	/***		
		$qcekusrrom = mysql_query("SELECT user_nik, user_realname, userlevel_id, userdepartemen_id, udept_id, 
		usergroup_id, usersubgroup_id, user_email FROM ITH_USER 
		WHERE usergroup_id = '$ugroupid' AND usersubgroup_id IN ('-','$usubgroupid') AND userlevel_id = '8'");
		$rcekusrrom = mysql_fetch_object($qcekusrrom);
		
		$qcekusrarea = mysql_query("SELECT user_nik, user_realname, userlevel_id, userdepartemen_id, udept_id, 
		usergroup_id, usersubgroup_id, user_email FROM ITH_USER 
		WHERE usergroup_id = '$ugroupid' AND usersubgroup_id IN ('-','$usubgroupid') AND userlevel_id = '3'");
		$rcekusrarea = mysql_fetch_object($qcekusrarea);
	***/
	###$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
	###$mail->AddAddress($_SESSION['user_email'], $_SESSION['user_realname']);
	
	/* Mail Sent User Rom & Area */
	###$mail->AddCCRom($rcekusrrom->user_email, $rcekusrrom->user_realname); 
	###$mail->AddCCArea($rcekusrarea->user_email, $rcekusrarea->user_realname); 

						$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
						$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDU ANGGA'); 	
						$mail->AddCC('mantechno2020@gmail.com','MANTECHNO');
					#	$mail->AddCCProg1('aron@ffi.co.id','SHAN ARON');	
					#	$mail->AddCCProg2('wilujeng.lestari@ffi.co.id','Aryn');	
						
	/* Mail Sent User Rom & Area */
	/*
	$mail->AddCCProg1('system.servicedesk@ffi.co.id','Admin ServiceDesk');	
	$mail->AddCCProg2('pandu.angga@ffi.co.id','Panduga');		
	$mail->AddCCProg3('wilujeng.lestari@ffi.co.id','Aryn');		
	*/	
	#$mail->AddCCProg1('system.servicedesk@ffi.co.id','Admin ServiceDesk');	
	##$mail->AddCCProg1('achmad.wahyudin@ffi.co.id','A.Wahyudin');	
	#$mail->AddCCProg1('rian@ffi.co.id','Setyanto Anggoro');	
	###$mail->AddCCProg1('pandu.angga@ffi.co.id','Panduga');		
	#$mail->AddCCProg4('wilujeng.lestari@ffi.co.id','Aryn');		

	/*
	$qvuser = mysql_query("SELECT 
	ticket_id,ticket_subject, ticket_problem, user_realname 
	FROM VW_ITH_TICKET_HEADER WHERE ticket_id = '$_GET[pid]'
	");
	$rvuser = mysql_fetch_object($qvuser);
	$nikpicto = $rvpic->ticketchoosepic_nikto2;
	$picto = $rvpic->ticketchoosepic_to2;	
	$nikatasan = $rvpic->ticketapproval_bynik1;
	$nameatasan = $rvpic->ticketapproval_by1;
	*/
	###$myLink = $_SERVER['PHP_SELF'];
	$myServer = $_SERVER["SERVER_NAME"].'/eoss';
	#if($rcekusr->user_email!=''){
	
	$objConnectx = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
/*	$qceknamabrg1 = "SELECT FSDMSTTRX_STORENEW.GROUP_CODE, FSDMSTTRX_STORENEW.ITEM_CODE,
					FSDBRGEQASSET_NEW.ITEM_NAME,
					FSDMSTTRX_STORENEW.ITEM_BRAND, FSDMSTTRX_STORENEW.ITEM_MODEL, 
					FSDBRTAG.NO_TAGING,
					FSDMSTTRX_STORENEW.NILAI_BUKU, 
					FSDMSTTRX_STORENEW.UMUR_BUKU,FSDMSTTRX_STORENEW.OUTLET_CODE, 
					FSDHRGER.HARGA_TERAKHIR
					FROM FSDMSTTRX_STORENEW 
					JOIN FSDBRGEQASSET_NEW ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE	
					JOIN FSDBRTAG ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRTAG.KODE_BARANG		
					JOIN FSDHRGER ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDHRGER.KODE_BARANG_EQ
					WHERE FSDMSTTRX_STORENEW.EQTYPECODE = 'EQ0001'
					AND FSDBRTAG.NO_TAGING = '".$value_cek1areplace."'";  
*/	$qceknamabrg1 = "SELECT FSDMSTTRX_STORENEW.GROUP_CODE, FSDMSTTRX_STORENEW.ITEM_CODE,
					FSDBRGEQASSET_NEW.ITEM_NAME,
					FSDMSTTRX_STORENEW.ITEM_BRAND, FSDMSTTRX_STORENEW.ITEM_MODEL, 
					FSDBRGEQASSET_NEW.NOMOR_TAGING,
					FSDMSTTRX_STORENEW.NILAI_BUKU, 
					FSDMSTTRX_STORENEW.UMUR_BUKU,FSDMSTTRX_STORENEW.OUTLET_CODE, 
					FSDBRGEQASSET_NEW.ITEM_PRICE AS HARGA_TERAKHIR
					FROM FSDMSTTRX_STORENEW 
					JOIN FSDBRGEQASSET_NEW ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE	
					WHERE FSDMSTTRX_STORENEW.EQTYPECODE = 'EQ0001'
					AND FSDBRGEQASSET_NEW.NOMOR_TAGING = '".$value_cek1areplace."'";  
	$objParsenamabrg1 = oci_parse ($objConnectx, $qceknamabrg1);  
					   oci_execute ($objParsenamabrg1,OCI_DEFAULT);
	while($objResultnamabrg1 = oci_fetch_array($objParsenamabrg1,OCI_BOTH))
	{
		#$namabarangs1a = preg_replace('/[^A-Za-z0-9\  ]/', '', $objResultnamabrg1['ITEM_NAME']);
		$namabarangs1a = $objResultnamabrg1['ITEM_NAME'];
	}
/*	$qceknamabrg2 = "SELECT FSDMSTTRX_STORENEW.GROUP_CODE, FSDMSTTRX_STORENEW.ITEM_CODE,
					FSDBRGEQASSET_NEW.ITEM_NAME,
					FSDMSTTRX_STORENEW.ITEM_BRAND, FSDMSTTRX_STORENEW.ITEM_MODEL, 
					FSDBRTAG.NO_TAGING,
					FSDMSTTRX_STORENEW.NILAI_BUKU, 
					FSDMSTTRX_STORENEW.UMUR_BUKU,FSDMSTTRX_STORENEW.OUTLET_CODE, 
					FSDHRGER.HARGA_TERAKHIR
					FROM FSDMSTTRX_STORENEW 
					JOIN FSDBRGEQASSET_NEW ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE	
					JOIN FSDBRTAG ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRTAG.KODE_BARANG		
					JOIN FSDHRGER ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDHRGER.KODE_BARANG_EQ
					WHERE FSDMSTTRX_STORENEW.EQTYPECODE = 'EQ0002'
					AND FSDBRTAG.NO_TAGING = '".$value_cek1areplace2."'"; 
*/
	$qceknamabrg2 = "SELECT FSDMSTTRX_STORENEW.GROUP_CODE, FSDMSTTRX_STORENEW.ITEM_CODE,
					FSDBRGEQASSET_NEW.ITEM_NAME,
					FSDMSTTRX_STORENEW.ITEM_BRAND, FSDMSTTRX_STORENEW.ITEM_MODEL, 
					FSDBRGEQASSET_NEW.NOMOR_TAGING,
					FSDMSTTRX_STORENEW.NILAI_BUKU, 
					FSDMSTTRX_STORENEW.UMUR_BUKU,FSDMSTTRX_STORENEW.OUTLET_CODE, 
					FSDBRGEQASSET_NEW.ITEM_PRICE AS HARGA_TERAKHIR
					FROM FSDMSTTRX_STORENEW 
					JOIN FSDBRGEQASSET_NEW ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE	
					WHERE FSDMSTTRX_STORENEW.EQTYPECODE = 'EQ0002'
					AND FSDBRGEQASSET_NEW.NOMOR_TAGING = '".$value_cek1areplace2."'";  
	$objParsenamabrg2 = oci_parse ($objConnectx, $qceknamabrg2);  
					   oci_execute ($objParsenamabrg2,OCI_DEFAULT);
	while($objResultnamabrg2 = oci_fetch_array($objParsenamabrg2,OCI_BOTH))
	{
		$namabarangs2a = preg_replace('/[^A-Za-z0-9\  ]/', '', $objResultnamabrg2['ITEM_NAME']);
	}
/*	$qceknamabrg3 = "SELECT FSDMSTTRX_STORENEW.GROUP_CODE, FSDMSTTRX_STORENEW.ITEM_CODE,
					FSDBRGEQASSET_NEW.ITEM_NAME,
					FSDMSTTRX_STORENEW.ITEM_BRAND, FSDMSTTRX_STORENEW.ITEM_MODEL, 
					FSDBRTAG.NO_TAGING,
					FSDMSTTRX_STORENEW.NILAI_BUKU, 
					FSDMSTTRX_STORENEW.UMUR_BUKU,FSDMSTTRX_STORENEW.OUTLET_CODE, 
					FSDHRGER.HARGA_TERAKHIR
					FROM FSDMSTTRX_STORENEW 
					JOIN FSDBRGEQASSET_NEW ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE	
					JOIN FSDBRTAG ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRTAG.KODE_BARANG		
					JOIN FSDHRGER ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDHRGER.KODE_BARANG_EQ
					WHERE FSDMSTTRX_STORENEW.EQTYPECODE = 'EQ0003'
					AND FSDBRTAG.NO_TAGING = '".$value_cek1areplace3."'";   
*/
$qceknamabrg3 = "SELECT FSDMSTTRX_STORENEW.GROUP_CODE, FSDMSTTRX_STORENEW.ITEM_CODE,
					FSDBRGEQASSET_NEW.ITEM_NAME,
					FSDMSTTRX_STORENEW.ITEM_BRAND, FSDMSTTRX_STORENEW.ITEM_MODEL, 
					FSDBRGEQASSET_NEW.NOMOR_TAGING,
					FSDMSTTRX_STORENEW.NILAI_BUKU, 
					FSDMSTTRX_STORENEW.UMUR_BUKU,FSDMSTTRX_STORENEW.OUTLET_CODE, 
					FSDBRGEQASSET_NEW.ITEM_PRICE AS HARGA_TERAKHIR
					FROM FSDMSTTRX_STORENEW 
					JOIN FSDBRGEQASSET_NEW ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE	
					WHERE FSDMSTTRX_STORENEW.EQTYPECODE = 'EQ0003'
					AND FSDBRGEQASSET_NEW.NOMOR_TAGING = '".$value_cek1areplace3."'";  
	$objParsenamabrg3 = oci_parse ($objConnectx, $qceknamabrg3);  
					   oci_execute ($objParsenamabrg3,OCI_DEFAULT);
	while($objResultnamabrg3 = oci_fetch_array($objParsenamabrg3,OCI_BOTH))
	{
		$namabarangs3a = preg_replace('/[^A-Za-z0-9\  ]/', '', $objResultnamabrg3['ITEM_NAME']);
	}
	#$qtycold = $_POST['textseqcold'][$value_cek1a];
	#$qtyheat = $_POST['textseqheat'][$value_cek2a];
	#$qtyfoodprocessing = $_POST['textseqfoodprocessing'][$value_cek3a];
/***
	$mail->Subject    = "[E-OPERATION SUPPORT PROGRAM].APPROVAL-FOR-AREA-MANAGER : $ticket_subject";
	$mail->AltBody    = "$ticket_subject"; 
	
	$mail->Body = "
	This is a request by : $ticket_createbyname For Your Approval with details as follows :<br>
		<ul>
			<li>Request ID : $newid</li>
			<li>Category : Equipment</li>
			<li>Subject : $ticket_subject</li>
			<li>Status : Open</li>
			<li>Ticket Create date : $cdate</li>
			<li>Item Name 1 : $namabarangs1a</li>
			<li>Item Name 2 : $namabarangs2a</li>
			<li>Item Name 3 : $namabarangs3a</li>
		</ul>
	<hr>
	Reason / Justification :	<br>$ticket_problem<br><br>
	<hr>
	For Approval, Please Click in here (<a href='http://$myServer/?m=notifmail&a=sendauth&pid=$newid&uid=$usrnikatasan'>Click In Here</a>)	
	<br><br>
	Regards,<br><br>
	$ticket_createbyname
	";		
***/
					$cone =  mysql_connect('localhost','usrservicedesk','kfc14022');
								 mysql_select_db('servicedesk',$cone);
					
					$qCekDataX = mysql_query("SELECT * FROM ITH_TICKET_HEADER WHERE ticket_id = '".$newid."'");
					$rCekDataX = mysql_fetch_object($qCekDataX);
					
				$mail->Subject    = "[E-OPERATION SUPPORT PROGRAM].APPROVAL-FOR-AREA-MANAGER : $rCekDataX->ticket_subject";
				$mail->AltBody    = "$rCekDataX->ticket_subject"; 
																
				$qCekReqByName = mysql_query("SELECT ITH_TICKET_HEADER.ticket_id, ITH_USER.user_nik, ITH_USER.user_realname 
											  FROM ITH_TICKET_HEADER 
											  JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
											   where ITH_TICKET_HEADER.ticket_id = '".$newid."'");	
				$rCekReqByName	= mysql_fetch_object($qCekReqByName);		
														
				#$mail->Body .= "									
				$bodymail1 .= "									
				<br>This is a request by : $rCekReqByName->user_realname For Your Approval with details as follows :<br>
				<ul>
					<li>Request ID : $newid</li>
					<li>Category : Equipment</li>
					<li>Subject : $rCekDataX->ticket_subject</li>
					<li>Status : Open</li>
					<li>Ticket Create date : $cdate</li>";
				$qCekDataYangDiApprovedTest = mysql_query("SELECT * FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$newid."'
															AND ticketapprovalstatusid_am ='2'");
				while($rCekDataYangDiApprovedTest = mysql_fetch_object($qCekDataYangDiApprovedTest))
				{
					$allItemName = preg_replace('/[^A-Za-z0-9\  ]/', '', $rCekDataYangDiApprovedTest->nama_tipebarang);
					$qtyItemXY = $rCekDataYangDiApprovedTest->kuantitas.' <br>';			
					$bodymail2 .= "																		
									<li>Item Name  : $allItemName</li> ";
				}				
					$bodymail3 .= "
																		
							</ul>
							<hr>
							Reason / Justification :	<br>$rCekDataX->ticket_problem<br><br>
							<hr>
							For Approval, Please Click In Here (<a href='http://$myServer/?m=notifmail&a=sendauth&pid=$newid&uid=$usrnikatasan'>Click Here</a>)
							<br><br>Regards,<br><br>
							$rCekReqByName->user_realname";
						#	$allbodymail = $bodymail1.$bodymail2.$bodymail3.$bodymail3;
							$allbodymail = $bodymail1.$bodymail2.$bodymail3;
							$mail->Body .= $allbodymail;		
	#} 
	/**
			if(!$mail->Send()) {
				#if(!$mail->Mailer()) {
				  echo "Pesan Gagal:<br> " . $mail->ErrorInfo;
				  echo "<meta http-equiv=Refresh content=0;url=index.php>";
				} else {
				  echo "Pesan Terkirim.";
					echo "<meta http-equiv=Refresh content=0;url=index.php>"; 
				}			
	**/
				if(!$mail->Send()) 
				{
				  #if(!$mail->Mailer()) {
				###  echo "Pesan Gagal Kirim Email:<br> " . $mail->ErrorInfo; exit;
				header ("Location: index.php?view=storemessagefailed&pid=$newid");
				##  header ("Location: index.php?view=storemessagefailed&pid=$newid");
				#header ("Location: index.php?view=storemessage");
				  #exit;
				#  echo "<meta http-equiv=Refresh content=0;url=index.php>";
				} else {
				###  echo "Pesan Terkirim.";  exit;
				header ("Location: index.php?view=storemessage");
				##  header ("Location: index.php?view=storemessage");
				# header ("Location: index.php?view=storemessagefailed&pid=$newid");
				#	echo "<meta http-equiv=Refresh content=0;url=index.php>"; 
				}	
?>	
	
