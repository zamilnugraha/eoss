<?
/* Notif Email Reminder For Cron Job Linux/Windows */
	$cone =  mysql_connect('localhost','usrservicedesk','kfc14022');
			mysql_select_db('servicedesk',$cone);
	$yearNow = date('Y');
	$timeNow = date('Y-m-d H:i:s'); /* 2018-05-03 11:04:40 */
		
	$qCekStoreKode = mysql_query("SELECT DISTINCT ITH_LOGREPORT.ticket_id, ITH_LOGREPORT.ticketrespond_by, USRPIC.user_nik, ITH_LOGREPORT.ticketstatus_report,
									ITH_TICKET_HEADER.ticket_subject, ITH_TICKET_HEADER.ticket_createdate, ITH_TICKET_HEADER.ticket_createby,
									ITH_TICKET_HEADER.ticketstatus_id, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKET_HEADER.notifemailloop,
									ITH_TICKET_HEADER.ticket_udeptid, USRPIC.user_realname AS picname, USRSTORE.user_realname AS storename
									FROM ITH_LOGREPORT 
									LEFT JOIN ITH_TICKET_HEADER ON ITH_LOGREPORT.ticket_id = ITH_TICKET_HEADER.ticket_id 
									LEFT JOIN ITH_USER USRSTORE ON ITH_TICKET_HEADER.ticket_createby = USRSTORE.user_realname
									LEFT JOIN ITH_USER USRPIC ON ITH_LOGREPORT.ticketrespond_by = USRPIC.user_realname
									LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
									WHERE ITH_TICKET_HEADER.ticketstatus_id = '2' AND USRPIC.udept_id = 'IT'");
	while($rCekStoreKode = mysql_fetch_object($qCekStoreKode))
	{
	
		if($rCekStoreKode->notifemailloop=='')
		{
			$notifmailloop_awal = 0;
			$notifmailloop_x = $notifmailloop_awal + 1;
			###$mydate = date('d/m/Y', strtotime('today + 7 days'));
			#$dateRange = $rCekStoreKode->ticket_createdate + 7;
			$dateRangeStart = substr($rCekStoreKode->ticket_createdate,0,-8);
			$dateRangeEnd = substr($rCekStoreKode->ticket_createdate,0,-8) + 7;
			$updateData = mysql_query("UPDATE ITH_TICKET_HEADER SET notifemailloop = '".$notifmailloop_x."' 
									   WHERE ticket_udeptid = '8' AND ticket_createby = '".$rCekStoreKode->ticket_createby."'");
			$insDataLog = mysql_query("INSERT INTO ITH_NOTIFEMAILLOOP 
			                           (ticket_id, ticket_udeptid,ticket_createdate,ticketstatus_id,
									   notifemailnumber,ticket_handleby,ticket_notifmessage) 
									   VALUES('".$rCekStoreKode->ticket_id."','".$rCekStoreKode->ticket_udeptid."',
									   '".$rCekStoreKode->ticket_createdate."','".$rCekStoreKode->ticketstatus_id."',
									   '".$notifmailloop_x."','".$rCekStoreKode->ticket_createby."','SENDMAIL SUCCESSFULLY SENT !!!')");	
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
						
						$storeName = strtoupper($rCekStoreKode->storename);
						$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
						$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDU ANGGA'); 
						$mail->AddCC('mantechno2020@gmail.com', 'MANTECHNO');				
					if($rCekStoreKode->notifemailloop=='')
					{													
						$mail->Subject    = "[PIC MAIL REMINDER].FIRST-REMINDER-TO-$storeName";
					}elseif($rCekStoreKode->notifemailloop=='1')
					{													
						$mail->Subject    = "[PIC MAIL REMINDER].SECOND-REMINDER-TO-$storeName";
					}elseif($rCekStoreKode->notifemailloop=='2')
					{													
						$mail->Subject    = "[PIC MAIL REMINDER].THIRD-REMINDER-TO-$storeName";
					}elseif($rCekStoreKode->notifemailloop=='3')
					{													
						$mail->Subject    = "[PIC MAIL REMINDER].FORTH-REMINDER-TO-$storeName";
					}elseif($rCekStoreKode->notifemailloop=='4')
					{													
						$mail->Subject    = "[PIC MAIL REMINDER].FIFTH-REMINDER-TO-$storeName";
					}elseif($rCekStoreKode->notifemailloop=='5')
					{													
						$mail->Subject    = "[PIC MAIL REMINDER].SIXTH-REMINDER-TO-$storeName";
					}elseif($rCekStoreKode->notifemailloop=='6')
					{													
						$mail->Subject    = "[PIC MAIL REMINDER].SEVENTH-REMINDER-TO-$storeName";
					}elseif($rCekStoreKode->notifemailloop=='7')
					{													
						$mail->Subject    = "[PIC MAIL REMINDER].EIGHT-REMINDER-TO-$storeName";
					}elseif($rCekStoreKode->notifemailloop=='8')
					{													
						$mail->Subject    = "[PIC MAIL REMINDER].NINTH-REMINDER-TO-$storeName";
					}elseif($rCekStoreKode->notifemailloop=='9')
					{													
						$mail->Subject    = "[PIC MAIL REMINDER].TENTH-REMINDER-TO-$storeName";
					}elseif($rCekStoreKode->notifemailloop=='10')
					{													
						$mail->Subject    = "[PIC MAIL REMINDER].ELEVENTH-REMINDER-TO-$storeName";
					}
						$mail->AltBody    = "$rCekStoreKode->ticket_subject"; 
						
						$mail->Body .= "									
															
						<br>Mohon Di Update Statusnya Dari On Process Menjadi Solved, Bila Pekerjaan ini Sudah Selesai.<br>
						Berikut Data Lengkapnya :<br>
						<ul>
							<li>Nomor Tiket : $rCekStoreKode->ticket_id</li>
							<li>Nama Store : $storeName</li>
							<li>Judul : $rCekStoreKode->ticket_subject</li>
							<li>Status : $rCekStoreKode->ticketstatus_name</li>
							<li>Ticket Dibuat Tanggal : $rCekStoreKode->ticket_createdate</li>																		
							<li>Nama PIC : $rCekStoreKode->picname</li>																		
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
			$dateRangeStart = substr($rCekStoreKode->ticket_createdate,0,-8);
			$dateRangeEnd = substr($rCekStoreKode->ticket_createdate,0,-8) + 7;
			$updateData = mysql_query("UPDATE ITH_TICKET_HEADER SET notifemailloop = '".$notifmailloop_x."' 
									   WHERE ticket_udeptid = '8' AND ticket_createby = '".$rCekStoreKode->ticket_createby."'");	
			$insDataLog = mysql_query("UPDATE ITH_NOTIFEMAILLOOP SET notifemailnumber = '".$notifmailloop_x."'
									    WHERE ticket_udeptid = '8' AND ticket_handleby = '".$rCekStoreKode->ticket_createby."'");		
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
					$storeName = strtoupper($rCekStoreKode->storename);
						$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
						$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDU ANGGA'); 
						$mail->AddCC('mantechno2020@gmail.com', 'MANTECHNO');			

					if($rCekStoreKode->notifemailloop=='')
					{													
						$mail->Subject    = "[PIC MAIL REMINDER].FIRST-REMINDER-TO-$storeName";
					}elseif($rCekStoreKode->notifemailloop=='1')
					{													
						$mail->Subject    = "[PIC MAIL REMINDER].SECOND-REMINDER-TO-$storeName";
					}elseif($rCekStoreKode->notifemailloop=='2')
					{													
						$mail->Subject    = "[PIC MAIL REMINDER].THIRD-REMINDER-TO-$storeName";
					}elseif($rCekStoreKode->notifemailloop=='3')
					{													
						$mail->Subject    = "[PIC MAIL REMINDER].FORTH-REMINDER-TO-$storeName";
					}elseif($rCekStoreKode->notifemailloop=='4')
					{													
						$mail->Subject    = "[PIC MAIL REMINDER].FIFTH-REMINDER-TO-$storeName";
					}elseif($rCekStoreKode->notifemailloop=='5')
					{													
						$mail->Subject    = "[PIC MAIL REMINDER].SIXTH-REMINDER-TO-$storeName";
					}elseif($rCekStoreKode->notifemailloop=='6')
					{													
						$mail->Subject    = "[PIC MAIL REMINDER].SEVENTH-REMINDER-TO-$storeName";
					}elseif($rCekStoreKode->notifemailloop=='7')
					{													
						$mail->Subject    = "[PIC MAIL REMINDER].EIGHT-REMINDER-TO-$storeName";
					}elseif($rCekStoreKode->notifemailloop=='8')
					{													
						$mail->Subject    = "[PIC MAIL REMINDER].NINTH-REMINDER-TO-$storeName";
					}elseif($rCekStoreKode->notifemailloop=='9')
					{													
						$mail->Subject    = "[PIC MAIL REMINDER].TENTH-REMINDER-TO-$storeName";
					}elseif($rCekStoreKode->notifemailloop=='10')
					{													
						$mail->Subject    = "[MAIL REMINDER].ELEVENTH-REMINDER-TO-$storeName";
					}
						$mail->AltBody    = "$rCekStoreKode->ticket_subject"; 
						
						$mail->Body .= "									
															
						<br>Mohon Di Update Statusnya Dari On Process Menjadi Solved, Bila Pekerjaan ini Sudah Selesai.<br>
						Berikut Data Lengkapnya :<br>
						<ul>
							<li>Nomor Tiket : $rCekStoreKode->ticket_id</li>
							<li>Nama Store : $storeName</li>
							<li>Judul : $rCekStoreKode->ticket_subject</li>
							<li>Status : $rCekStoreKode->ticketstatus_name</li>
							<li>Ticket Dibuat Tanggal : $rCekStoreKode->ticket_createdate</li>																		
							<li>Nama PIC : $rCekStoreKode->picname</li>																		
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