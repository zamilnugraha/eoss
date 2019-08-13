<?
/* Notif Email Reminder For Cron Job Linux/Windows */
	$cone =  mysql_connect('localhost','usrservicedesk','kfc14022');
			mysql_select_db('servicedesk',$cone);
	$yearNow = date('Y');
	$timeNow = date('Y-m-d H:i:s'); /* 2018-05-03 11:04:40 */
		
	$qCekStoreKode = mysql_query("SELECT ITH_TICKET_HEADER.ticket_createdate,ITH_TICKET_HEADER.ticket_createtime,
											  ITH_TICKET_HEADER.ticket_createby,ITH_TICKET_HEADER.ticketstatus_id,
                            				  ITH_TICKET_HEADER.ticket_id,ITH_TICKET_HEADER.ticket_udeptid,ITH_TICKET_HEADER.ticket_problem,
											  ITH_TICKET_HEADER.ticket_subject,ITH_TICKET_HEADER.notifemailloop,
											  ITH_USER.user_nik, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name	
											  FROM ITH_TICKET_HEADER 
											  JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											  JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
											  WHERE ITH_TICKET_HEADER.ticket_udeptid = '8' AND ITH_TICKET_HEADER.ticketstatus_id = '1'
                                              ");
	while($rCekStoreKode = mysql_fetch_object($qCekStoreKode))
	{
	
		if($rCekStoreKode->notifemailloop=='')
		{
			$notifmailloop_awal = 0;
			$notifmailloop_x = $notifmailloop_awal + 1;
			###$mydate = date('d/m/Y', strtotime('today + 7 days'));
			#$dateRange = $rCekStoreKode->ticket_createdate + 7;
		#	$notifemaillastdate = substr($rCekStoreKode->ticket_createdate,0,-8).'/'.substr($rCekStoreKode->ticket_createdate,0,-5).'/'.substr($rCekStoreKode->ticket_createdate,0,0);
		#	$notifemailnextdate = substr($rCekStoreKode->ticket_createdate,0,-8) + 7 .'/'.substr($rCekStoreKode->ticket_createdate,0,-5).'/'.substr($rCekStoreKode->ticket_createdate,0,0);
			$notifemaillastdate = date('d/m/Y');
			$notifemailnextdate = date('d/m/Y', strtotime('today + 7 days'));
			$updateData = mysql_query("UPDATE ITH_TICKET_HEADER SET notifemailloop = '".$notifmailloop_x."',
										notifemaillastdate = '".$notifemaillastdate."', notifemailnextdate = '".$notifemailnextdate."'
									    WHERE ticket_udeptid = '8' AND ticketstatus_id = '1' AND ticket_createby = '".$rCekStoreKode->ticket_createby."'");	


			/** REMAIND SEND MAIL TO STORE **/	
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
						
						$storeName = strtoupper($rCekStoreKode->user_realname);
						$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
						$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDU ANGGA'); 
						$mail->AddCC('mantechno2020@gmail.com', 'MANTECHNO');				
					if($rCekStoreKode->notifemailloop=='')
					{													
						$mail->Subject    = "[MAIL REMINDER].FIRST-REMINDER-TO-$storeName";
						$insDataLog = mysql_query("INSERT INTO ITH_NOTIFEMAILLOOP 
												   (ticket_id, ticket_udeptid,ticket_createdate,ticketstatus_id,
												   notifemailnumber,ticket_handleby,ticket_notifmessage,notifemaillastdate,notifemailnextdate) 
												   VALUES('".$rCekStoreKode->ticket_id."','".$rCekStoreKode->ticket_udeptid."',
												   '".$rCekStoreKode->ticket_createdate."','".$rCekStoreKode->ticketstatus_id."',
												   '".$notifmailloop_x."','".$rCekStoreKode->ticket_createby."','FIRST REMINDER SENDMAIL SUCCESSFULLY SENT !!!',
												   '".$notifemaillastdate."','".$notifemailnextdate."')");							
					}elseif($rCekStoreKode->notifemailloop=='1')
					{													
						$mail->Subject    = "[MAIL REMINDER].SECOND-REMINDER-TO-$storeName";
						$insDataLog = mysql_query("INSERT INTO ITH_NOTIFEMAILLOOP 
												   (ticket_id, ticket_udeptid,ticket_createdate,ticketstatus_id,
												   notifemailnumber,ticket_handleby,ticket_notifmessage,notifemaillastdate,notifemailnextdate) 
												   VALUES('".$rCekStoreKode->ticket_id."','".$rCekStoreKode->ticket_udeptid."',
												   '".$rCekStoreKode->ticket_createdate."','".$rCekStoreKode->ticketstatus_id."',
												   '".$notifmailloop_x."','".$rCekStoreKode->ticket_createby."','SECOND REMINDER SENDMAIL SUCCESSFULLY SENT !!!',
												   '".$notifemaillastdate."','".$notifemailnextdate."')");							
					}elseif($rCekStoreKode->notifemailloop=='2')
					{													
						$mail->Subject    = "[MAIL REMINDER].THIRD-REMINDER-TO-$storeName";
						$insDataLog = mysql_query("INSERT INTO ITH_NOTIFEMAILLOOP 
												   (ticket_id, ticket_udeptid,ticket_createdate,ticketstatus_id,
												   notifemailnumber,ticket_handleby,ticket_notifmessage,notifemaillastdate,notifemailnextdate) 
												   VALUES('".$rCekStoreKode->ticket_id."','".$rCekStoreKode->ticket_udeptid."',
												   '".$rCekStoreKode->ticket_createdate."','".$rCekStoreKode->ticketstatus_id."',
												   '".$notifmailloop_x."','".$rCekStoreKode->ticket_createby."','THIRD REMINDER SENDMAIL SUCCESSFULLY SENT !!!',
												   '".$notifemaillastdate."','".$notifemailnextdate."')");						
					}elseif($rCekStoreKode->notifemailloop=='3')
					{													
						$mail->Subject    = "[MAIL REMINDER].FOURTH-REMINDER-TO-$storeName";
						$insDataLog = mysql_query("INSERT INTO ITH_NOTIFEMAILLOOP 
												   (ticket_id, ticket_udeptid,ticket_createdate,ticketstatus_id,
												   notifemailnumber,ticket_handleby,ticket_notifmessage,notifemaillastdate,notifemailnextdate) 
												   VALUES('".$rCekStoreKode->ticket_id."','".$rCekStoreKode->ticket_udeptid."',
												   '".$rCekStoreKode->ticket_createdate."','".$rCekStoreKode->ticketstatus_id."',
												   '".$notifmailloop_x."','".$rCekStoreKode->ticket_createby."','FOURTH REMINDER SENDMAIL SUCCESSFULLY SENT !!!',
												   '".$notifemaillastdate."','".$notifemailnextdate."')");						
					}elseif($rCekStoreKode->notifemailloop=='4')
					{													
						$mail->Subject    = "[MAIL REMINDER].FIFTH-REMINDER-TO-$storeName";
						$insDataLog = mysql_query("INSERT INTO ITH_NOTIFEMAILLOOP 
												   (ticket_id, ticket_udeptid,ticket_createdate,ticketstatus_id,
												   notifemailnumber,ticket_handleby,ticket_notifmessage,notifemaillastdate,notifemailnextdate) 
												   VALUES('".$rCekStoreKode->ticket_id."','".$rCekStoreKode->ticket_udeptid."',
												   '".$rCekStoreKode->ticket_createdate."','".$rCekStoreKode->ticketstatus_id."',
												   '".$notifmailloop_x."','".$rCekStoreKode->ticket_createby."','FIFTH REMINDER SENDMAIL SUCCESSFULLY SENT !!!',
												   '".$notifemaillastdate."','".$notifemailnextdate."')");							
					}elseif($rCekStoreKode->notifemailloop=='5')
					{													
						$mail->Subject    = "[MAIL REMINDER].SIXTH-REMINDER-TO-$storeName";
						$insDataLog = mysql_query("INSERT INTO ITH_NOTIFEMAILLOOP 
												   (ticket_id, ticket_udeptid,ticket_createdate,ticketstatus_id,
												   notifemailnumber,ticket_handleby,ticket_notifmessage,notifemaillastdate,notifemailnextdate) 
												   VALUES('".$rCekStoreKode->ticket_id."','".$rCekStoreKode->ticket_udeptid."',
												   '".$rCekStoreKode->ticket_createdate."','".$rCekStoreKode->ticketstatus_id."',
												   '".$notifmailloop_x."','".$rCekStoreKode->ticket_createby."','SIXTH REMINDER SENDMAIL SUCCESSFULLY SENT !!!',
												   '".$notifemaillastdate."','".$notifemailnextdate."')");							
					}elseif($rCekStoreKode->notifemailloop=='6')
					{													
						$mail->Subject    = "[MAIL REMINDER].SEVENTH-REMINDER-TO-$storeName";
						$insDataLog = mysql_query("INSERT INTO ITH_NOTIFEMAILLOOP 
												   (ticket_id, ticket_udeptid,ticket_createdate,ticketstatus_id,
												   notifemailnumber,ticket_handleby,ticket_notifmessage,notifemaillastdate,notifemailnextdate) 
												   VALUES('".$rCekStoreKode->ticket_id."','".$rCekStoreKode->ticket_udeptid."',
												   '".$rCekStoreKode->ticket_createdate."','".$rCekStoreKode->ticketstatus_id."',
												   '".$notifmailloop_x."','".$rCekStoreKode->ticket_createby."','SEVENTH REMINDER SENDMAIL SUCCESSFULLY SENT !!!',
												   '".$notifemaillastdate."','".$notifemailnextdate."')");							
					}elseif($rCekStoreKode->notifemailloop=='7')
					{													
						$mail->Subject    = "[MAIL REMINDER].EIGHT-REMINDER-TO-$storeName";
						$insDataLog = mysql_query("INSERT INTO ITH_NOTIFEMAILLOOP 
												   (ticket_id, ticket_udeptid,ticket_createdate,ticketstatus_id,
												   notifemailnumber,ticket_handleby,ticket_notifmessage,notifemaillastdate,notifemailnextdate) 
												   VALUES('".$rCekStoreKode->ticket_id."','".$rCekStoreKode->ticket_udeptid."',
												   '".$rCekStoreKode->ticket_createdate."','".$rCekStoreKode->ticketstatus_id."',
												   '".$notifmailloop_x."','".$rCekStoreKode->ticket_createby."','EIGHT REMINDER SENDMAIL SUCCESSFULLY SENT !!!',
												   '".$notifemaillastdate."','".$notifemailnextdate."')");							
					}elseif($rCekStoreKode->notifemailloop=='8')
					{													
						$mail->Subject    = "[MAIL REMINDER].NINTH-REMINDER-TO-$storeName";
						$insDataLog = mysql_query("INSERT INTO ITH_NOTIFEMAILLOOP 
												   (ticket_id, ticket_udeptid,ticket_createdate,ticketstatus_id,
												   notifemailnumber,ticket_handleby,ticket_notifmessage,notifemaillastdate,notifemailnextdate) 
												   VALUES('".$rCekStoreKode->ticket_id."','".$rCekStoreKode->ticket_udeptid."',
												   '".$rCekStoreKode->ticket_createdate."','".$rCekStoreKode->ticketstatus_id."',
												   '".$notifmailloop_x."','".$rCekStoreKode->ticket_createby."','NINTH REMINDER SENDMAIL SUCCESSFULLY SENT !!!',
												   '".$notifemaillastdate."','".$notifemailnextdate."')");							
					}elseif($rCekStoreKode->notifemailloop=='9')
					{													
						$mail->Subject    = "[MAIL REMINDER].TENTH-REMINDER-TO-$storeName";
						$insDataLog = mysql_query("INSERT INTO ITH_NOTIFEMAILLOOP 
												   (ticket_id, ticket_udeptid,ticket_createdate,ticketstatus_id,
												   notifemailnumber,ticket_handleby,ticket_notifmessage,notifemaillastdate,notifemailnextdate) 
												   VALUES('".$rCekStoreKode->ticket_id."','".$rCekStoreKode->ticket_udeptid."',
												   '".$rCekStoreKode->ticket_createdate."','".$rCekStoreKode->ticketstatus_id."',
												   '".$notifmailloop_x."','".$rCekStoreKode->ticket_createby."','TENTH REMINDER SENDMAIL SUCCESSFULLY SENT !!!',
												   '".$notifemaillastdate."','".$notifemailnextdate."')");						
					}elseif($rCekStoreKode->notifemailloop=='10')
					{													
						$mail->Subject    = "[MAIL REMINDER].ELEVENTH-REMINDER-TO-$storeName";
						$insDataLog = mysql_query("INSERT INTO ITH_NOTIFEMAILLOOP 
												   (ticket_id, ticket_udeptid,ticket_createdate,ticketstatus_id,
												   notifemailnumber,ticket_handleby,ticket_notifmessage,notifemaillastdate,notifemailnextdate) 
												   VALUES('".$rCekStoreKode->ticket_id."','".$rCekStoreKode->ticket_udeptid."',
												   '".$rCekStoreKode->ticket_createdate."','".$rCekStoreKode->ticketstatus_id."',
												   '".$notifmailloop_x."','".$rCekStoreKode->ticket_createby."','ELEVENTH REMINDER SENDMAIL SUCCESSFULLY SENT !!!',
												   '".$notifemaillastdate."','".$notifemailnextdate."')");						
					}
						$mail->AltBody    = "$rCekStoreKode->ticket_subject"; 
						
						$mail->Body .= "									
															
						<br>Mohon Di Update Statusnya Dari Open Menjadi Close, Bila Pekerjaan ini Sudah Selesai.<br>
						Berikut Data Lengkapnya :<br>
						<ul>
							<li>Nomor Tiket : $rCekStoreKode->ticket_id</li>
							<li>Nama Store : $storeName</li>
							<li>Judul : $rCekStoreKode->ticket_subject</li>
							<li>Status : $rCekStoreKode->ticketstatus_name</li>
							<li>Ticket Dibuat Tanggal : $rCekStoreKode->ticket_createdate</li>																		
						</ul>
						<br>
						Catatan :	<br>$rCekStoreKode->ticket_problem<br><br>
						<br>
						Silahkan Klik Link ini untuk melihatnya : (<a href='http://192.168.10.31/reminder/index.php?view=home&pid=$rCekStoreKode->ticket_id&uid=$rCekStoreKode->user_nik'>Click Here</a>)
						<br><br>Regards,<br><br>
						ADMIN SERVICEDESK<hr>";		
				
			/** ##########################################  **/			
		}elseif($rCekStoreKode->notifemailloop!='')
		{		
	
			$notifmailloop_x = $rCekStoreKode->notifemailloop + 1;
		#	$notifemaillastdate = substr($rCekStoreKode->ticket_createdate,0,-8).'/'.substr($rCekStoreKode->ticket_createdate,0,-5).'/'.substr($rCekStoreKode->ticket_createdate,0,0);
		#	$notifemailnextdate = substr($rCekStoreKode->ticket_createdate,0,-8) + 7 .'/'.substr($rCekStoreKode->ticket_createdate,0,-5).'/'.substr($rCekStoreKode->ticket_createdate,0,0);
		#	$notifemaillastdate = date('d/m/Y');
		#	$notifemaillastdate = $rCekStoreKode->notifemailnextdate;		
		#	$notifemaillastdate = $rCekStoreKode->notifemaillastdate;
			$notifemaillastdate = date('d/m/Y');
			$notifemailnextdate = date('d/m/Y', strtotime('today + 7 days'));
		
			$updateData = mysql_query("UPDATE ITH_TICKET_HEADER SET notifemailloop = '".$notifmailloop_x."',
										notifemaillastdate = '".$notifemaillastdate."', notifemailnextdate = '".$notifemailnextdate."'
									    WHERE ticket_udeptid = '8' AND ticketstatus_id = '1' AND ticket_createby = '".$rCekStoreKode->ticket_createby."'");	
			/** REMAIND SEND MAIL TO STORE **/	
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
					$storeName = strtoupper($rCekStoreKode->user_realname);
						$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
						$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDU ANGGA'); 
						$mail->AddCC('mantechno2020@gmail.com', 'MANTECHNO');			
					/***
						$qcekDate = mysql_query("SELECT notifemaillastdate,notifemailnextdate FROM ITH_NOTIFEMAILLOOP 
												 WHERE ticket_udeptid = '8' AND ticketstatus_id = '1'");
						while($rcekDate = mysql_fetch_object($qcekDate))
						{		
						$insDataLog2 = mysql_query("UPDATE ITH_NOTIFEMAILLOOP SET 
									   notifemaillastdate = '".$rcekDate->notifemailnextdate."'
									    WHERE ticket_udeptid = '8' AND ticketstatus_id = '1' 
										AND ticket_handleby = '".$rCekStoreKode->ticket_createby."'");						
						$updateData2 = mysql_query("UPDATE ITH_TICKET_HEADER SET 
										notifemaillastdate = '".$rcekDate->notifemailnextdate."'
									    WHERE ticket_udeptid = '8' AND ticketstatus_id = '1'");							
						}
					***/
					
					if($rCekStoreKode->notifemailloop=='')
					{													
						$mail->Subject    = "[MAIL REMINDER].FIRST-REMINDER-TO-$storeName";
						$qcekDateX = mysql_query("SELECT notifemaillastdate,notifemailnextdate FROM ITH_NOTIFEMAILLOOP 
												 WHERE ticket_udeptid = '8' AND ticketstatus_id = '1'");
						while($rcekDateX = mysql_fetch_object($qcekDateX))
						{				
						$notifemailnextdateX = date($rcekDateX->notifemaillastdate,strtotime('today + 7 days'));
						$insDataLog = mysql_query("UPDATE ITH_NOTIFEMAILLOOP SET notifemailnumber = '".$notifmailloop_x."',
									   notifemailnextdate = '".$notifemailnextdateX."',
									   ticket_notifmessage = 'FIRST REMINDER SENDMAIL SUCCESSFULLY SENT !!!'
									    WHERE ticket_udeptid = '8' AND ticketstatus_id = '1' AND ticket_handleby = '".$rCekStoreKode->ticket_createby."'");		
						}
					}elseif($rCekStoreKode->notifemailloop=='1')
					{													
					    #$notifemailnextdate = date($notifemaillastdate,strtotime('today + 7 days'));
						$mail->Subject    = "[MAIL REMINDER].SECOND-REMINDER-TO-$storeName";
					#	$qcekDateX = mysql_query("SELECT notifemaillastdate,notifemailnextdate FROM ITH_NOTIFEMAILLOOP 
					#							 WHERE ticket_udeptid = '8' AND ticketstatus_id = '1'");
					#	while($rcekDateX = mysql_fetch_object($qcekDateX))
					#	{				
						$notifemaillastdate = date('d/m/Y');
						$notifemailnextdate = date('d/m/Y', strtotime('today + 7 days'));					
						$notifemailnextdateX = date($rcekDateX->notifemaillastdate,strtotime('today + 7 days'));
						$insDataLog = mysql_query("UPDATE ITH_NOTIFEMAILLOOP SET notifemailnumber = '".$notifmailloop_x."',
									    notifemaillastdate = '".$notifemaillastdate."', notifemailnextdate = '".$notifemailnextdate."',
									   ticket_notifmessage = 'SECOND REMINDER SENDMAIL SUCCESSFULLY SENT !!!'
									    WHERE ticket_udeptid = '8' AND ticketstatus_id = '1' AND ticket_handleby = '".$rCekStoreKode->ticket_createby."'");		
					#	}
					}elseif($rCekStoreKode->notifemailloop=='2')
					{					
						$notifemailnextdate = date($notifemaillastdate,strtotime('today + 7 days'));
						$mail->Subject    = "[MAIL REMINDER].THIRD-REMINDER-TO-$storeName";
					#	$qcekDateX = mysql_query("SELECT notifemaillastdate,notifemailnextdate FROM ITH_NOTIFEMAILLOOP 
					#							 WHERE ticket_udeptid = '8' AND ticketstatus_id = '1'");
					#	while($rcekDateX = mysql_fetch_object($qcekDateX))
					#	{				
						$notifemaillastdate = date('d/m/Y');
						$notifemailnextdate = date('d/m/Y', strtotime('today + 7 days'));
					#	$notifemailnextdateX = date($rcekDateX->notifemaillastdate,strtotime('today + 7 days'));
						$insDataLog = mysql_query("UPDATE ITH_NOTIFEMAILLOOP SET notifemailnumber = '".$notifmailloop_x."',
									   notifemaillastdate = '".$notifemaillastdate."', notifemailnextdate = '".$notifemailnextdate."',
									   ticket_notifmessage = 'THIRD REMINDER SENDMAIL SUCCESSFULLY SENT !!!'
									    WHERE ticket_udeptid = '8' AND ticketstatus_id = '1' AND ticket_handleby = '".$rCekStoreKode->ticket_createby."'");		
						#}				
					}elseif($rCekStoreKode->notifemailloop=='3')
					{													
					#	$notifemailnextdate = date($notifemaillastdate,strtotime('today + 7 days'));			
						$notifemaillastdate = date('d/m/Y');
						$notifemailnextdate = date('d/m/Y', strtotime('today + 7 days'));					
						$mail->Subject    = "[MAIL REMINDER].FOURTH-REMINDER-TO-$storeName";
						$insDataLog = mysql_query("UPDATE ITH_NOTIFEMAILLOOP SET notifemailnumber = '".$notifmailloop_x."',
									   notifemaillastdate = '".$notifemaillastdate."', notifemailnextdate = '".$notifemailnextdate."',
									   ticket_notifmessage = 'FOURTH REMINDER SENDMAIL SUCCESSFULLY SENT !!!'
									    WHERE ticket_udeptid = '8' AND ticketstatus_id = '1' AND ticket_handleby = '".$rCekStoreKode->ticket_createby."'");						
					}elseif($rCekStoreKode->notifemailloop=='4')
					{		
						#$notifemailnextdate = date($notifemaillastdate,strtotime('today + 7 days'));
					#	$qcekDateX = mysql_query("SELECT notifemaillastdate,notifemailnextdate FROM ITH_NOTIFEMAILLOOP 
					#							 WHERE ticket_udeptid = '8' AND ticketstatus_id = '1'");
					#	while($rcekDateX = mysql_fetch_object($qcekDateX))
					#	{				
						$notifemaillastdate = date('d/m/Y');
						$notifemailnextdate = date('d/m/Y', strtotime('today + 7 days'));						
						$mail->Subject    = "[MAIL REMINDER].FIFTH-REMINDER-TO-$storeName";
						$insDataLog = mysql_query("UPDATE ITH_NOTIFEMAILLOOP SET notifemailnumber = '".$notifmailloop_x."',
									   notifemaillastdate = '".$notifemaillastdate."', notifemailnextdate = '".$notifemailnextdate."',
									   ticket_notifmessage = 'FIFTH REMINDER SENDMAIL SUCCESSFULLY SENT !!!'
									    WHERE ticket_udeptid = '8' AND ticketstatus_id = '1' AND ticket_handleby = '".$rCekStoreKode->ticket_createby."'");						
					}elseif($rCekStoreKode->notifemailloop=='5')
					{				
					#	$notifemailnextdate = date($notifemaillastdate,strtotime('today + 7 days'));			
						$notifemaillastdate = date('d/m/Y');
						$notifemailnextdate = date('d/m/Y', strtotime('today + 7 days'));					
						$mail->Subject    = "[MAIL REMINDER].SIXTH-REMINDER-TO-$storeName";
						$insDataLog = mysql_query("UPDATE ITH_NOTIFEMAILLOOP SET notifemailnumber = '".$notifmailloop_x."',
									   notifemaillastdate = '".$notifemaillastdate."', notifemailnextdate = '".$notifemailnextdate."',
									   ticket_notifmessage = 'SIXTH REMINDER SENDMAIL SUCCESSFULLY SENT !!!'
									    WHERE ticket_udeptid = '8' AND ticketstatus_id = '1' AND ticket_handleby = '".$rCekStoreKode->ticket_createby."'");						
					}elseif($rCekStoreKode->notifemailloop=='6')
					{		
					#	$notifemailnextdate = date($notifemaillastdate,strtotime('today + 7 days'));			
						$notifemaillastdate = date('d/m/Y');
						$notifemailnextdate = date('d/m/Y', strtotime('today + 7 days'));
						$mail->Subject    = "[MAIL REMINDER].SEVENTH-REMINDER-TO-$storeName";						
						$insDataLog = mysql_query("UPDATE ITH_NOTIFEMAILLOOP SET notifemailnumber = '".$notifmailloop_x."',
									   notifemaillastdate = '".$notifemaillastdate."', notifemailnextdate = '".$notifemailnextdate."',
									   ticket_notifmessage = 'SEVENTH REMINDER SENDMAIL SUCCESSFULLY SENT !!!'
									    WHERE ticket_udeptid = '8' AND ticketstatus_id = '1' AND ticket_handleby = '".$rCekStoreKode->ticket_createby."'");						
					}elseif($rCekStoreKode->notifemailloop=='7')
					{	
					#	$notifemailnextdate = date($notifemaillastdate,strtotime('today + 7 days'));			
						$notifemaillastdate = date('d/m/Y');
						$notifemailnextdate = date('d/m/Y', strtotime('today + 7 days'));	
						$mail->Subject    = "[MAIL REMINDER].EIGHT-REMINDER-TO-$storeName";
						$insDataLog = mysql_query("UPDATE ITH_NOTIFEMAILLOOP SET notifemailnumber = '".$notifmailloop_x."',
									   notifemaillastdate = '".$notifemaillastdate."', notifemailnextdate = '".$notifemailnextdate."',
									   ticket_notifmessage = 'EIGHT REMINDER SENDMAIL SUCCESSFULLY SENT !!!'
									    WHERE ticket_udeptid = '8' AND ticketstatus_id = '1' AND ticket_handleby = '".$rCekStoreKode->ticket_createby."'");						
					}elseif($rCekStoreKode->notifemailloop=='8')
					{	
					#	$notifemailnextdate = date($notifemaillastdate,strtotime('today + 7 days'));			
						$notifemaillastdate = date('d/m/Y');
						$notifemailnextdate = date('d/m/Y', strtotime('today + 7 days'));	
						$mail->Subject    = "[MAIL REMINDER].NINTH-REMINDER-TO-$storeName";
						$insDataLog = mysql_query("UPDATE ITH_NOTIFEMAILLOOP SET notifemailnumber = '".$notifmailloop_x."',
									   notifemaillastdate = '".$notifemaillastdate."', notifemailnextdate = '".$notifemailnextdate."',
									   ticket_notifmessage = 'NINTH REMINDER SENDMAIL SUCCESSFULLY SENT !!!'
									    WHERE ticket_udeptid = '8' AND ticketstatus_id = '1' AND ticket_handleby = '".$rCekStoreKode->ticket_createby."'");						
					}elseif($rCekStoreKode->notifemailloop=='9')
					{	
					#	$notifemailnextdate = date($notifemaillastdate,strtotime('today + 7 days'));			
						$notifemaillastdate = date('d/m/Y');
						$notifemailnextdate = date('d/m/Y', strtotime('today + 7 days'));	
						$mail->Subject    = "[MAIL REMINDER].TENTH-REMINDER-TO-$storeName";
						$insDataLog = mysql_query("UPDATE ITH_NOTIFEMAILLOOP SET notifemailnumber = '".$notifmailloop_x."',
									   notifemaillastdate = '".$notifemaillastdate."', notifemailnextdate = '".$notifemailnextdate."',
									   ticket_notifmessage = 'TENTH REMINDER SENDMAIL SUCCESSFULLY SENT !!!'
									    WHERE ticket_udeptid = '8' AND ticketstatus_id = '1' AND ticket_handleby = '".$rCekStoreKode->ticket_createby."'");						
					}elseif($rCekStoreKode->notifemailloop=='10')
					{		
					#	$notifemailnextdate = date($notifemaillastdate,strtotime('today + 7 days'));			
						$notifemaillastdate = date('d/m/Y');
						$notifemailnextdate = date('d/m/Y', strtotime('today + 7 days'));	
						$mail->Subject    = "[MAIL REMINDER].ELEVENTH-REMINDER-TO-$storeName";
						$insDataLog = mysql_query("UPDATE ITH_NOTIFEMAILLOOP SET notifemailnumber = '".$notifmailloop_x."',
									   notifemaillastdate = '".$notifemaillastdate."', notifemailnextdate = '".$notifemailnextdate."',
									   ticket_notifmessage = 'ELEVENTH REMINDER SENDMAIL SUCCESSFULLY SENT !!!'
									    WHERE ticket_udeptid = '8' AND ticketstatus_id = '1' AND ticket_handleby = '".$rCekStoreKode->ticket_createby."'");						
					}
						$mail->AltBody    = "$rCekStoreKode->ticket_subject"; 
						
						$mail->Body .= "									
															
						<br>Mohon Di Update Statusnya Dari Open Menjadi Close, Bila Pekerjaan ini Sudah Selesai.<br>
						Berikut Data Lengkapnya :<br>
						<ul>
							<li>Nomor Tiket : $rCekStoreKode->ticket_id</li>
							<li>Nama Store : $storeName</li>
							<li>Judul : $rCekStoreKode->ticket_subject</li>
							<li>Status : $rCekStoreKode->ticketstatus_name</li>
							<li>Ticket Dibuat Tanggal : $rCekStoreKode->ticket_createdate</li>																		
						</ul>
						<br>
						Catatan :	<br>$rCekStoreKode->ticket_problem<br><br>
						<br>
						Silahkan Klik Link ini untuk melihatnya : (<a href='http://192.168.10.31/reminder/index.php?view=home&pid=$rCekStoreKode->ticket_id&uid=$rCekStoreKode->user_nik'>Click Here</a>)
						<br><br>Regards,<br><br>
						ADMIN SERVICEDESK<hr>";		

			/** ##########################################  **/										   
		}
						if(!$mail->Send()) 
						{
							/* OFFLINE */
							echo "ERROR !!! ";
						} else {
							/* ONLINE */
							echo "SUCCESSFULLY !!! ";#	exit;
						}
	}
					
?>	