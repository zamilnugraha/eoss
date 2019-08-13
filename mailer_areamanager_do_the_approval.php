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
						$mail->AddCCProg1('wilujeng.lestari@ffi.co.id','Aryn');	
						
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
	/**$qceknamabrg1 = "SELECT DISTINCT FSDSGROUP.KODE_GROUP, FSDSGROUP.NAMA_GROUP, FSDBRGEQ.KODE_BARANG, 
					FSDBRGEQ.NAMA_BARANG,FSDBRGEQ.MODEL,FSDBRGEQ.MERK_BARANG,
					FSDHRGER.HARGA_RATA2, FSDHRGER.HARGA_TERAKHIR
					from FSDBRGEQ
					JOIN FSDSGROUP ON FSDBRGEQ.KODE_GRUP = FSDSGROUP.KODE_GROUP
					JOIN FSDHRGER ON FSDBRGEQ.KODE_BARANG = FSDHRGER.KODE_BARANG_EQ
					WHERE FSDBRGEQ.KODE_BARANG = '".$value_cek1a."'";  **/
	$qceknamabrg1 = "SELECT FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE AS KODE_BARANG,
					FSDBRGEQASSET_NEW.ITEM_NAME AS NAMA_BARANG,FSDBRGEQASSET_NEW.ITEM_BRAND AS MERK_BARANG,
					FSDBRGEQASSET_NEW.ITEM_MODEL AS MODEL,
					FSDBRGEQASSET_NEW.ITEM_PRICE AS HARGA_TERAKHIR
					FROM FSDBRGEQ_NEW
					JOIN FSDSGROUP ON FSDBRGEQ_NEW.GROUP_CODE = FSDSGROUP.KODE_GROUP
					JOIN FSDBRGEQASSET_NEW ON FSDBRGEQ_NEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
					JOIN FSDEQTYPE_NEW ON FSDBRGEQ_NEW.EQTYPECODE = FSDEQTYPE_NEW.EQTYPECODE
					WHERE FSDEQTYPE_NEW.EQTYPECODE = 'EQ0001' AND FSDBRGEQ_NEW.ITEM_CODE = '".$value_cek1a."'";  
	$objParsenamabrg1 = oci_parse ($objConnectx, $qceknamabrg1);  
					   oci_execute ($objParsenamabrg1,OCI_DEFAULT);
	while($objResultnamabrg1 = oci_fetch_array($objParsenamabrg1,OCI_BOTH))
	{
		$namabarangs1a = preg_replace('/[^A-Za-z0-9\  ]/', '', $objResultnamabrg1['NAMA_BARANG']);
	}
	/**$qceknamabrg2 = "SELECT DISTINCT FSDSGROUP.KODE_GROUP, FSDSGROUP.NAMA_GROUP, FSDBRGEQ.KODE_BARANG, 
					FSDBRGEQ.NAMA_BARANG,FSDBRGEQ.MODEL,FSDBRGEQ.MERK_BARANG,
					FSDHRGER.HARGA_RATA2, FSDHRGER.HARGA_TERAKHIR
					from FSDBRGEQ
					JOIN FSDSGROUP ON FSDBRGEQ.KODE_GRUP = FSDSGROUP.KODE_GROUP
					JOIN FSDHRGER ON FSDBRGEQ.KODE_BARANG = FSDHRGER.KODE_BARANG_EQ
					WHERE FSDBRGEQ.KODE_BARANG = '".$value_cek2a."'";  **/
	$qceknamabrg2 = "SELECT FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE AS KODE_BARANG,
					FSDBRGEQASSET_NEW.ITEM_NAME AS NAMA_BARANG,FSDBRGEQASSET_NEW.ITEM_BRAND AS MERK_BARANG,
					FSDBRGEQASSET_NEW.ITEM_MODEL AS MODEL,
					FSDBRGEQASSET_NEW.ITEM_PRICE AS HARGA_TERAKHIR
					FROM FSDBRGEQ_NEW
					JOIN FSDSGROUP ON FSDBRGEQ_NEW.GROUP_CODE = FSDSGROUP.KODE_GROUP
					JOIN FSDBRGEQASSET_NEW ON FSDBRGEQ_NEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
					JOIN FSDEQTYPE_NEW ON FSDBRGEQ_NEW.EQTYPECODE = FSDEQTYPE_NEW.EQTYPECODE
					WHERE FSDEQTYPE_NEW.EQTYPECODE = 'EQ0002' AND FSDBRGEQ_NEW.ITEM_CODE = '".$value_cek2a."'";  					
	$objParsenamabrg2 = oci_parse ($objConnectx, $qceknamabrg2);  
					   oci_execute ($objParsenamabrg2,OCI_DEFAULT);
	while($objResultnamabrg2 = oci_fetch_array($objParsenamabrg2,OCI_BOTH))
	{
		$namabarangs2a = preg_replace('/[^A-Za-z0-9\  ]/', '', $objResultnamabrg2['NAMA_BARANG']);
	}
	/**$qceknamabrg3 = "SELECT DISTINCT FSDSGROUP.KODE_GROUP, FSDSGROUP.NAMA_GROUP, FSDBRGEQ.KODE_BARANG, 
					FSDBRGEQ.NAMA_BARANG,FSDBRGEQ.MODEL,FSDBRGEQ.MERK_BARANG,
					FSDHRGER.HARGA_RATA2, FSDHRGER.HARGA_TERAKHIR
					from FSDBRGEQ
					JOIN FSDSGROUP ON FSDBRGEQ.KODE_GRUP = FSDSGROUP.KODE_GROUP
					JOIN FSDHRGER ON FSDBRGEQ.KODE_BARANG = FSDHRGER.KODE_BARANG_EQ
					WHERE FSDBRGEQ.KODE_BARANG = '".$value_cek3a."'";  **/
	$qceknamabrg3 = "SELECT FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE AS KODE_BARANG,
					FSDBRGEQASSET_NEW.ITEM_NAME AS NAMA_BARANG,FSDBRGEQASSET_NEW.ITEM_BRAND AS MERK_BARANG,
					FSDBRGEQASSET_NEW.ITEM_MODEL AS MODEL,
					FSDBRGEQASSET_NEW.ITEM_PRICE AS HARGA_TERAKHIR
					FROM FSDBRGEQ_NEW
					JOIN FSDSGROUP ON FSDBRGEQ_NEW.GROUP_CODE = FSDSGROUP.KODE_GROUP
					JOIN FSDBRGEQASSET_NEW ON FSDBRGEQ_NEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
					JOIN FSDEQTYPE_NEW ON FSDBRGEQ_NEW.EQTYPECODE = FSDEQTYPE_NEW.EQTYPECODE
					WHERE FSDEQTYPE_NEW.EQTYPECODE = 'EQ0003' AND FSDBRGEQ_NEW.ITEM_CODE = '".$value_cek3a."'"; 					
	$objParsenamabrg3 = oci_parse ($objConnectx, $qceknamabrg3);  
					   oci_execute ($objParsenamabrg3,OCI_DEFAULT);
	while($objResultnamabrg3 = oci_fetch_array($objParsenamabrg3,OCI_BOTH))
	{
		$namabarangs3a = preg_replace('/[^A-Za-z0-9\  ]/', '', $objResultnamabrg3['NAMA_BARANG']);
	}
	$qtycold = $_POST['textseqcold'][$value_cek1a];
	$qtyheat = $_POST['textseqheat'][$value_cek2a];
	$qtyfoodprocessing = $_POST['textseqfoodprocessing'][$value_cek3a];

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
			<li>Quantity Requested 1 : $qtycold Unit</li>
			<li>Item Name 2 : $namabarangs2a</li>
			<li>Quantity Requested 2 : $qtyheat Unit</li>
			<li>Item Name 3 : $namabarangs3a</li>
			<li>Quantity Requested 3 : $qtyfoodprocessing Unit</li>
		</ul>
	<hr>
	Reason / Justification :	<br>$ticket_problem<br><br>
	<hr>
	For Approval, Please Click in here (<a href='http://$myServer/?m=notifmail&a=sendauth&pid=$newid&uid=$usrnikatasan'>Click In Here</a>)	
	<br><br>
	Regards,<br><br>
	$ticket_createbyname
	";		
			
	#} 
				if(!$mail->Send()) 
				{
				  #if(!$mail->Mailer()) {
				###  echo "Pesan Gagal Kirim Email:<br> " . $mail->ErrorInfo; exit;
				##header ("Location: index.php?view=storemessagefailed&pid=$newid");
				##  header ("Location: index.php?view=storemessagefailed&pid=$newid");
				#header ("Location: index.php?view=storemessage");
				  #exit;
				#  echo "<meta http-equiv=Refresh content=0;url=index.php>";
				} else {
				###  echo "Pesan Terkirim.";  exit;
				##header ("Location: index.php?view=storemessage");
				##  header ("Location: index.php?view=storemessage");
				# header ("Location: index.php?view=storemessagefailed&pid=$newid");
				#	echo "<meta http-equiv=Refresh content=0;url=index.php>"; 
				}			
	
?>	
	
