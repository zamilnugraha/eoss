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
			$cdate = date('j F Y');
			$approvalstatus_am = $_POST['TICKETAPPROVALSTATUSID_AM'];
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
	
	#if($rcekusr->user_email!=''){
	
	$objConnectx = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
	$qceknamabrg1 = "SELECT DISTINCT FSDSGROUP.KODE_GROUP, FSDSGROUP.NAMA_GROUP, FSDBRGEQ.KODE_BARANG, 
					FSDBRGEQ.NAMA_BARANG,FSDBRGEQ.MODEL,FSDBRGEQ.MERK_BARANG,
					FSDHRGER.HARGA_RATA2, FSDHRGER.HARGA_TERAKHIR
					from FSDBRGEQ
					JOIN FSDSGROUP ON FSDBRGEQ.KODE_GRUP = FSDSGROUP.KODE_GROUP
					JOIN FSDHRGER ON FSDBRGEQ.KODE_BARANG = FSDHRGER.KODE_BARANG_EQ
					WHERE FSDBRGEQ.KODE_BARANG = '".$value_cek1a."'";  
	$objParsenamabrg1 = oci_parse ($objConnectx, $qceknamabrg1);  
					   oci_execute ($objParsenamabrg1,OCI_DEFAULT);
	while($objResultnamabrg1 = oci_fetch_array($objParsenamabrg1,OCI_BOTH))
	{
		$namabarangs1a = preg_replace('/[^A-Za-z0-9\  ]/', '', $objResultnamabrg1['NAMA_BARANG']);
	}
	$qceknamabrg2 = "SELECT DISTINCT FSDSGROUP.KODE_GROUP, FSDSGROUP.NAMA_GROUP, FSDBRGEQ.KODE_BARANG, 
					FSDBRGEQ.NAMA_BARANG,FSDBRGEQ.MODEL,FSDBRGEQ.MERK_BARANG,
					FSDHRGER.HARGA_RATA2, FSDHRGER.HARGA_TERAKHIR
					from FSDBRGEQ
					JOIN FSDSGROUP ON FSDBRGEQ.KODE_GRUP = FSDSGROUP.KODE_GROUP
					JOIN FSDHRGER ON FSDBRGEQ.KODE_BARANG = FSDHRGER.KODE_BARANG_EQ
					WHERE FSDBRGEQ.KODE_BARANG = '".$value_cek2a."'";  
	$objParsenamabrg2 = oci_parse ($objConnectx, $qceknamabrg2);  
					   oci_execute ($objParsenamabrg2,OCI_DEFAULT);
	while($objResultnamabrg2 = oci_fetch_array($objParsenamabrg2,OCI_BOTH))
	{
		$namabarangs2a = preg_replace('/[^A-Za-z0-9\  ]/', '', $objResultnamabrg2['NAMA_BARANG']);
	}
	$qceknamabrg3 = "SELECT DISTINCT FSDSGROUP.KODE_GROUP, FSDSGROUP.NAMA_GROUP, FSDBRGEQ.KODE_BARANG, 
					FSDBRGEQ.NAMA_BARANG,FSDBRGEQ.MODEL,FSDBRGEQ.MERK_BARANG,
					FSDHRGER.HARGA_RATA2, FSDHRGER.HARGA_TERAKHIR
					from FSDBRGEQ
					JOIN FSDSGROUP ON FSDBRGEQ.KODE_GRUP = FSDSGROUP.KODE_GROUP
					JOIN FSDHRGER ON FSDBRGEQ.KODE_BARANG = FSDHRGER.KODE_BARANG_EQ
					WHERE FSDBRGEQ.KODE_BARANG = '".$value_cek3a."'";  
	$objParsenamabrg3 = oci_parse ($objConnectx, $qceknamabrg3);  
					   oci_execute ($objParsenamabrg3,OCI_DEFAULT);
	while($objResultnamabrg3 = oci_fetch_array($objParsenamabrg3,OCI_BOTH))
	{
		$namabarangs3a = preg_replace('/[^A-Za-z0-9\  ]/', '', $objResultnamabrg3['NAMA_BARANG']);
	}
	
		$conex =  mysql_connect('localhost','usrservicedesk','kfc14022');
				 mysql_select_db('servicedesk',$conex);				
		$qCekDataStorenya2 = mysql_query("SELECT user_nik,user_realname FROM ITH_USER WHERE user_nik = '".$rCekDataToINSmySQL->request_by."'");		
		$rCekDataStorenya2 = mysql_fetch_object($qCekDataStorenya2);
		$storeNameRequest2 = $rCekDataStorenya2->user_realname;		
		$qCekDatainfoTicket2 = mysql_query("SELECT ticket_id,ticket_subject,ticket_problem FROM ITH_TICKET_HEADER 
											WHERE ticket_id = '".$_GET['pid']."'");		
		$rCekDatainfoTicket2 = mysql_fetch_object($qCekDatainfoTicket2);
		$subjectTicketStoreReq2 = $rCekDatainfoTicket2->ticket_subject;
		$reasonTicketStoreReq2 = $rCekDatainfoTicket2->ticket_problem;
		
		$qCekDataitemReq = mysql_query("SELECT ticket_id, no_permintaan,kode_tipebarang,nama_tipebarang,kuantitas FROM ITH_TIPEBARANG_KODE 
										WHERE ticket_id = '".$_GET['pid']."'");
		$rCekDataitemReq = mysql_fetch_object($qCekDataitemReq);
		
	$qtycold = $_POST['textseqcold'][$value_cek1a];
	$qtyheat = $_POST['textseqheat'][$value_cek2a];
	$qtyfoodprocessing = $_POST['textseqfoodprocessing'][$value_cek3a];

	$mail->Subject    = "[E-OPERATION SUPPORT PROGRAM].APPROVAL-FOR-ROM : $subjectTicketStoreReq2";
	$mail->AltBody    = "$subjectTicketStoreReq2"; 
	
	$mail->Body = "
	Thank you for making a request in this servicedesk application, the info is as follows :<br>
		<ul>
			<li>Request ID : $pid</li>
			<li>Request By : AYAM BULUNGAN JAKARTA</li>
			<li>Subject : $subjectTicketStoreReq2</li>
			<li>Category : Equipment</li>
			<li>Ticket Status : On Process</li>
			<li>Area Manager Approval Status : Approved</li>
			<li>Ticket Create date : $cdate</li>
			<li>Item Name 1 : $namabarangs1a</li>
			<li>The amount of goods 1 : $qtycold Unit</li>
			<li>Item Name 2 : $namabarangs2a</li>
			<li>The amount of goods 2 : $qtyheat Unit</li>
			<li>Item Name 3 : $namabarangs3a</li>
			<li>The amount of goods 3 : $qtyfoodprocessing Unit</li>
		</ul>
	<hr>
	Reason / Justification :	<br>$reasonTicketStoreReq<br><br>
	<hr>
		Please do the an approval <br> Please Click In Here (<a href='http://localhost/eoss/?view=home&pid=$pid&uid=$usrnikatasan&userloginstatus_id=1'>Click In Here</a>)
	
	
	Regards,<br><br>
	$ticket_createbyname
	";		
			
	#} 
	 if(!$mail->Send()) {
				#if(!$mail->Mailer()) {
				  echo "Pesan Gagal:<br> " . $mail->ErrorInfo;
				  echo "<meta http-equiv=Refresh content=0;url=index.php>";
				} else {
				  echo "Pesan Terkirim.";
					echo "<meta http-equiv=Refresh content=0;url=index.php>"; 
				}			
	
?>	
	
