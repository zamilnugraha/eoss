<?
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
	
					#$newid = $_GET['pid'];
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

					$cone =  mysql_connect('localhost','usrservicedesk','kfc14022');
								 mysql_select_db('servicedesk',$cone);
					
				#	$qCekDataX = mysql_query("SELECT * FROM ITH_TICKET_HEADER WHERE ticket_id = '".$newid."'");
					$qCekDataX = mysql_query("SELECT ticket_createdate,ticket_createtime,ticket_createby,ticketstatus_id, ticket_id,ticket_udeptid,
					                          ticket_subject,notifemailloop FROM ITH_TICKET_HEADER WHERE ticket_udeptid = '8' 
											  LIMIT 1 ORDER BY ticket_id ASC");	
					$rCekDataX = mysql_fetch_object($qCekDataX);


					$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
					$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDU ANGGA'); 
					$mail->AddCC('mantechno2020@gmail.com', 'MANTECHNO');			
				#	$mail->AddCCProg1('wilujeng.lestari@ffi.co.id','ARYN');
								#	$mail->AddCCProg2('uu.budhi@ffi.co.id','UU BUDHI');
					

				$mail->Subject    = "[MAIL REMINDER].REMIND-MAIL-TO_STORE : $rCekDataX->ticket_subject";
				$mail->AltBody    = "$rCekDataX->ticket_subject"; 
																
				$qCekReqByName = mysql_query("SELECT ITH_TICKET_HEADER.ticket_id, ITH_USER.user_nik, ITH_USER.user_realname 
											  FROM ITH_TICKET_HEADER 
											  JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
											   where ITH_TICKET_HEADER.ticket_id = '".$rCekDataX->ticket_id."'");	
				$rCekReqByName	= mysql_fetch_object($qCekReqByName);		
														
				#$mail->Body .= "									
				$bodymail1 .= "									
				<br>Mohon Di Update Statusnya Dari Open Menjadi Close, Bila Pekerjaan ini Sudah Selesai.<br>
				Berikut Data Lengkapnya :<br>
							<ul>
								<li>Nomor Tiket : $rCekDataX->ticket_id</li>
								<li>Judul : $rCekDataX->ticket_subject</li>
								<li>Status : Open</li>
								<li>Ticket Dibuat Tanggal : $rCekDataX->ticket_createdate</li>																		
							</ul>
							<hr>
							Catatan :	<br>$rCekDataX->ticket_problem<br><br>
							<hr>
							Silahkan Klik Link ini untuk melihatnya : (<a href='http://192.168.10.31/reminder/index.php?view=home&pid=50220419-0108995&uid=004570'>Click Here</a>)
							<br><br>Regards,<br><br>
							$ticket_createbyname";
						#	$allbodymail = $bodymail1.$bodymail2.$bodymail3.$bodymail3;
							$allbodymail = $bodymail1.$bodymail2.$bodymail3;
							$mail->Body .= $allbodymail;				
				if(!$mail->Send()) 
				{
					/* OFFLINE */
					echo "SENDMAIL ERROR SENT !!! ";	
				###	echo "<br>".$mail->ErrorInfo; #exit;
				###	include_once('mailsendtoarea.php');
				##	header ("Location: index.php?view=storemessagefailed&pid=$newid");		
				#	header ("Location: index.php?view=sendmailtoarea&status=sendfailed&pid=$newid");	
				} else {
					/* ONLINE */
					echo "SENDMAIL SUCCESSFULLY SENT !!! ";				
				##	header ("Location: index.php?view=storemessage");
				#	header ("Location: index.php?view=sendmailtoarea&status=sendsuccess&pid=$newid");
				#	header ("Location: index.php?view=storemessage");
				}
?>				