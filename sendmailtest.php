<?
#$myLink = $_SERVER['PHP_SELF'];
$myLink = '/eoss';
$myServer = $_SERVER["SERVER_NAME"].'/eoss';
#$newid = '003370119-038792';
$newid = '003370119-038787';
$uid = '002509';
				/* Send Mail From User/Store Ticket Created */
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
						$mail->Port       	 = 465;     
						$mail->Username   	 = 'system.servicedesk@ffi.co.id';  
						$mail->Password   	 = 'Kfc_System';      	
						
						$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
						$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDU ANGGA'); 	
						#$mail->AddCC('pandu.angga@ffi.co.id', 'PANDU ANGGA');	
						$mail->AddCC('mantechno2020@gmail.com','MANTECHNO');
						
							
							$cdate = date('j F Y');
							$ctime = date('H:i');
							
						
						
						$mail->Subject    = "[E-OPERATION SUPPORT PROGRAM].SEND_TEST_MAIL : TEST SEND EMAIL";
						$mail->AltBody    = "TEST SEND EMAIL"; 	
						$mail->Body = "
						(1)Tiket yang anda buat sudah dikerjakan oleh PIC,berikut infonya :<br>
							<ul>
								<li>Request ID : $newid</li>
								<li>Request By : AYAM BULUNGAN JAKARTA</li>
								<li>Ticket Create date : $cdate.$ctime</li>
														
							</ul>
						
						<br>
							
							Please Click In Here (<a href='http://$myServer/?m=notifmail&a=sendauth&pid=$newid&uid=$uid'>Silahkan Di Klik</a>)
				
						<br><br><br>
						Regards,<br><br>
						Admin Servicedesk";					
						#} 
						if(!$mail->Send()) 
						{
							#if(!$mail->Mailer()) {
							echo "Pesan Gagal:<br> " . $mail->ErrorInfo;
							#echo "<meta http-equiv=Refresh content=0;url=index.php>";
						} else {
							echo "Pesan Terkirim."; exit;
							#echo "<meta http-equiv=Refresh content=0;url=index.php>"; 
						}	
?>