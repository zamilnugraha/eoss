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
			
			/***
			$cdate3x = date('j');
			$cdate3b = date('F');
			$cdate3c = date('Y');
			if($cdate3c=2019)
			{
				if($cdate3b='Februari')
				{
					if($cdate3x=28)
					{
						$cdate3a = date('j')+0;
					}else{
						$cdate3a = date('j')+1;
					}	
				}	
			}elseif($cdate3c=2020)
			{
				if($cdate3b='Februari')
				{
					if($cdate3x=29)
					{
						$cdate3a = date('j')+0;
					}else{
						$cdate3a = date('j')+1;
					}	
				}
			}	
			#$cdate3a = date('j');
			***/
			$cdate3a = date('j')+1;
			$cdate3b = date('F');
			$cdate3c = date('Y');			
			$cdate3 = $cdate3a.'&nbsp;'.$cdate3b.'&nbsp;'.$cdate3c;
			$cdate1 = date('j F Y');
			$cdate2 = date('d F Y');
			
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
	


	$mail->Subject    = "[E-OPERATION SUPPORT PROGRAM].TEST_SEND_MAIL : TEST MAIL";
	$mail->AltBody    = "TEST MAIL"; 
	
	$mail->Body = "
	Thank you for making a request in this servicedesk application, the info is as follows :<br>
		<ul>

			<li>Status : Open</li>
			<li>Date-1 : $cdate1</li>
			<li>Date-2 : $cdate2</li>
			<li>Date-3 : $cdate3</li>
		</ul>
	<hr>
	Reason / Justification :	<br>$ticket_problem<br><br>
	<hr>
	Please Click In Here (<a href='http://$myServer/?m=notifmail&a=sendauth&pid=$newid&uid=$usrnikatasan'>Click In Here</a>)	
	<br><br>
	Regards,<br><br>
	$ticket_createbyname
	";		
			
	#} 
	 if(!$mail->Send()) {
				#if(!$mail->Mailer()) {
				  echo "Pesan Gagal:<br> " . $mail->ErrorInfo;
				 # echo "<meta http-equiv=Refresh content=0;url=index.php>";
				} else {
				  echo "Pesan Terkirim.";
				#	echo "<meta http-equiv=Refresh content=0;url=index.php>"; 
				}			
	
?>	
	
