<?
	$cone =  mysql_connect('localhost','usrservicedesk','kfc14022');
			mysql_select_db('servicedesk',$cone);
	$dateNowX = date('d/m/Y');
	$qCekStoreKode = mysql_query("SELECT ITH_TICKET_HEADER.ticket_createdate,ITH_TICKET_HEADER.ticket_createtime,
								  ITH_TICKET_HEADER.ticket_createby,ITH_TICKET_HEADER.ticketstatus_id,
                            	  ITH_TICKET_HEADER.ticket_id,ITH_TICKET_HEADER.ticket_udeptid,ITH_TICKET_HEADER.ticket_problem,
								  ITH_TICKET_HEADER.ticket_subject,ITH_TICKET_HEADER.notifemailloop,
								  ITH_USER.user_nik, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name	
								  FROM ITH_TICKET_HEADER 
								  JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
								  JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
								  WHERE ITH_TICKET_HEADER.ticket_udeptid IN('1','2','3')
								  AND ITH_TICKET_HEADER.ticketstatus_id = '0'
								  AND STR_TO_DATE(ITH_TICKET_HEADER.ticket_createdate,'%d/%m/%Y') 
								  BETWEEN STR_TO_DATE('01/01/2019','%d/%m/%Y') AND STR_TO_DATE('".$dateNowX."','%d/%m/%Y') 
								  ORDER BY STR_TO_DATE(ITH_TICKET_HEADER.ticket_createdate,'%d/%m/%Y') ASC");
	while($rCekStoreKode = mysql_fetch_object($qCekStoreKode))
	{		
		$date2a = DateTime::createFromFormat('d/m/Y',$rCekStoreKode->ticket_createdate)->format('d-m-Y');
		###echo '<br>'.substr($rCekStoreKode->ticket_createdate,3,-5);
		if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
		$date3a = date_create($date2a);
		date_add($date3a, date_interval_create_from_date_string('+7 days'));
		$date3xa = date_format($date3a, 'd/m/Y');
		$date3b = date_create($date2a);
		date_add($date3b, date_interval_create_from_date_string('+4 months'));
		$date3xb = date_format($date3b, 'd/m/Y');
		$date3c = date_create($date2a);
		date_add($date3c, date_interval_create_from_date_string('+3 months'));
		$date3xc = date_format($date3c, 'd/m/Y');
		$date3d = date_create($date2a);
		date_add($date3d, date_interval_create_from_date_string('+2 months'));
		$date3xd = date_format($date3d, 'd/m/Y');
		$date3e = date_create($date2a);
		date_add($date3e, date_interval_create_from_date_string('+1 months'));
		$date3xe = date_format($date3e, 'd/m/Y');
		$monthX = substr($rCekStoreKode->ticket_createdate,3,-5);
		$monthY = substr($rCekStoreKode->ticket_createdate,3,-5);
		$yearX = substr($rCekStoreKode->ticket_createdate,6,4);
		$dateNow = date('d/m/Y');
		if($rCekStoreKode->notifemailloop=='')
		{		
			#if($dateNow < $rCekStoreKode->ticket_createdate)
			#{
				###echo 'date now = '.$dateNow.' < tiket create date = '.$rCekStoreKode->ticket_createdate;
				if(($monthY==01)&&($yearX==2019))
				{
					$notifmailloop_awal = 0;
					$notifmailloop_x = $notifmailloop_awal + 1;
					/***
					echo '<br><font color="blue"><b>Ticket Create Date : </b></font>'.$rCekStoreKode->ticket_createdate;
					echo '<br>'.$monthX.' >> '.$monthY;
					echo '<br>'.$yearX.' >> '.$yearX;
					echo "<br>".$rCekStoreKode->ticket_createdate.' + 4 bulan = '.$date3xb.'<hr>';
					***/
					$updateData = mysql_query("UPDATE ITH_TICKET_HEADER SET notifemailloop = '".$notifmailloop_x."',
												notifemaillastdate = '".$rCekStoreKode->ticket_createdate."', notifemailnextdate = '".$date3xb."'
												WHERE ticket_id = '".$rCekStoreKode->ticket_id."' AND
												ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' 
												AND ticket_createby = '".$rCekStoreKode->ticket_createby."'");		
					$insDataLog = mysql_query("INSERT INTO ITH_NOTIFEMAILLOOP
												(ticket_id, ticket_udeptid,ticket_createdate,ticketstatus_id,
												notifemailnumber,ticket_handleby,ticket_notifmessage,notifemaillastdate,notifemailnextdate) 
												VALUES('".$rCekStoreKode->ticket_id."','".$rCekStoreKode->ticket_udeptid."',
												'".$rCekStoreKode->ticket_createdate."','".$rCekStoreKode->ticketstatus_id."',
												'".$notifmailloop_x."','".$rCekStoreKode->ticket_createby."','FIRST REMINDER SENDMAIL SUCCESSFULLY SENT !!!',
												'".$rCekStoreKode->ticket_createdate."','".$date3xb."')");												
				}elseif(($monthY==02)&&($yearX==2019))
				{
					$notifmailloop_awal = 0;
					$notifmailloop_x = $notifmailloop_awal + 1;				
					/***
					echo '<br><font color="blue"><b>Ticket Create Date : </b></font>'.$rCekStoreKode->ticket_createdate;
					echo '<br>'.$monthX.' >> '.$monthY;
					echo '<br>'.$yearX.' >> '.$yearX;
					echo "<br>".$rCekStoreKode->ticket_createdate.' + 7 hari = '.$date3xc.'<hr>';
					***/
					$updateData = mysql_query("UPDATE ITH_TICKET_HEADER SET notifemailloop = '".$notifmailloop_x."',
												notifemaillastdate = '".$rCekStoreKode->ticket_createdate."', notifemailnextdate = '".$date3xc."'
												WHERE ticket_id = '".$rCekStoreKode->ticket_id."' AND
												ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' 
												AND ticket_createby = '".$rCekStoreKode->ticket_createby."'");		
					$insDataLog = mysql_query("INSERT INTO ITH_NOTIFEMAILLOOP 
												(ticket_id, ticket_udeptid,ticket_createdate,ticketstatus_id,
												notifemailnumber,ticket_handleby,ticket_notifmessage,notifemaillastdate,notifemailnextdate) 
												VALUES('".$rCekStoreKode->ticket_id."','".$rCekStoreKode->ticket_udeptid."',
												'".$rCekStoreKode->ticket_createdate."','".$rCekStoreKode->ticketstatus_id."',
												'".$notifmailloop_x."','".$rCekStoreKode->ticket_createby."','FIRST REMINDER SENDMAIL SUCCESSFULLY SENT !!!',
												'".$rCekStoreKode->ticket_createdate."','".$date3xc."')");
				}elseif(($monthY==03)&&($yearX==2019))
				{
					$notifmailloop_awal = 0;
					$notifmailloop_x = $notifmailloop_awal + 1;				
					/***
					echo '<br><font color="blue"><b>Ticket Create Date : </b></font>'.$rCekStoreKode->ticket_createdate;
					echo '<br>'.$monthX.' >> '.$monthY;
					echo '<br>'.$yearX.' >> '.$yearX;
					echo "<br>".$rCekStoreKode->ticket_createdate.' + 7 hari = '.$date3xd.'<hr>';
					***/
					$updateData = mysql_query("UPDATE ITH_TICKET_HEADER SET notifemailloop = '".$notifmailloop_x."',
												notifemaillastdate = '".$rCekStoreKode->ticket_createdate."', notifemailnextdate = '".$date3xd."'
												WHERE ticket_id = '".$rCekStoreKode->ticket_id."' AND
												ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' 
												AND ticket_createby = '".$rCekStoreKode->ticket_createby."'");		
					$insDataLog = mysql_query("INSERT INTO ITH_NOTIFEMAILLOOP 
												(ticket_id, ticket_udeptid,ticket_createdate,ticketstatus_id,
												notifemailnumber,ticket_handleby,ticket_notifmessage,notifemaillastdate,notifemailnextdate) 
												VALUES('".$rCekStoreKode->ticket_id."','".$rCekStoreKode->ticket_udeptid."',
												'".$rCekStoreKode->ticket_createdate."','".$rCekStoreKode->ticketstatus_id."',
												'".$notifmailloop_x."','".$rCekStoreKode->ticket_createby."','FIRST REMINDER SENDMAIL SUCCESSFULLY SENT !!!',
												'".$rCekStoreKode->ticket_createdate."','".$date3xd."')");		
				}elseif(($monthY==04)&&($yearX==2019))
				{
					$notifmailloop_awal = 0;
					$notifmailloop_x = $notifmailloop_awal + 1;				
					/***
					echo '<br><font color="blue"><b>Ticket Create Date : </b></font>'.$rCekStoreKode->ticket_createdate;
					echo '<br>'.$monthX.' >> '.$monthY;
					echo '<br>'.$yearX.' >> '.$yearX;
					echo "<br>".$rCekStoreKode->ticket_createdate.' + 7 hari = '.$date3xe.'<hr>';
					***/
					$updateData = mysql_query("UPDATE ITH_TICKET_HEADER SET notifemailloop = '".$notifmailloop_x."',
												notifemaillastdate = '".$rCekStoreKode->ticket_createdate."', notifemailnextdate = '".$date3xe."'
												WHERE ticket_id = '".$rCekStoreKode->ticket_id."' AND
												ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' 
												AND ticket_createby = '".$rCekStoreKode->ticket_createby."'");		
					$insDataLog = mysql_query("INSERT INTO ITH_NOTIFEMAILLOOP 
												(ticket_id, ticket_udeptid,ticket_createdate,ticketstatus_id,
												notifemailnumber,ticket_handleby,ticket_notifmessage,notifemaillastdate,notifemailnextdate) 
												VALUES('".$rCekStoreKode->ticket_id."','".$rCekStoreKode->ticket_udeptid."',
												'".$rCekStoreKode->ticket_createdate."','".$rCekStoreKode->ticketstatus_id."',
												'".$notifmailloop_x."','".$rCekStoreKode->ticket_createby."','FIRST REMINDER SENDMAIL SUCCESSFULLY SENT !!!',
												'".$rCekStoreKode->ticket_createdate."','".$date3xe."')");		
				}elseif(($monthY==05)&&($yearX==2019))
				{
					$notifmailloop_awal = 0;
					$notifmailloop_x = $notifmailloop_awal + 1;				
					/***
					echo '<br><font color="blue"><b>Ticket Create Date : </b></font>'.$rCekStoreKode->ticket_createdate;
					echo '<br>'.$monthX.' >> '.$monthY;
					echo '<br>'.$yearX.' >> '.$yearX;
					echo "<br>".$rCekStoreKode->ticket_createdate.' + 7 hari = '.$date3xa.'<hr>';
					***/
					$updateData = mysql_query("UPDATE ITH_TICKET_HEADER SET notifemailloop = '".$notifmailloop_x."',
												notifemaillastdate = '".$rCekStoreKode->ticket_createdate."', notifemailnextdate = '".$date3xa."'
												WHERE ticket_id = '".$rCekStoreKode->ticket_id."' AND
												ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' 
												AND ticket_createby = '".$rCekStoreKode->ticket_createby."'");		
					$insDataLog = mysql_query("INSERT INTO ITH_NOTIFEMAILLOOP 
												(ticket_id, ticket_udeptid,ticket_createdate,ticketstatus_id,
												notifemailnumber,ticket_handleby,ticket_notifmessage,notifemaillastdate,notifemailnextdate) 
												VALUES('".$rCekStoreKode->ticket_id."','".$rCekStoreKode->ticket_udeptid."',
												'".$rCekStoreKode->ticket_createdate."','".$rCekStoreKode->ticketstatus_id."',
												'".$notifmailloop_x."','".$rCekStoreKode->ticket_createby."','FIRST REMINDER SENDMAIL SUCCESSFULLY SENT !!!',
												'".$rCekStoreKode->ticket_createdate."','".$date3xa."')");		
				}elseif(($monthY==06)&&($yearX==2019))
				{
					$notifmailloop_awal = 0;
					$notifmailloop_x = $notifmailloop_awal + 1;				
					/***
					echo '<br><font color="blue"><b>Ticket Create Date : </b></font>'.$rCekStoreKode->ticket_createdate;
					echo '<br>'.$monthX.' >> '.$monthY;
					echo '<br>'.$yearX.' >> '.$yearX;
					echo "<br>".$rCekStoreKode->ticket_createdate.' + 7 hari = '.$date3xa.'<hr>';
					***/
					$updateData = mysql_query("UPDATE ITH_TICKET_HEADER SET notifemailloop = '".$notifmailloop_x."',
												notifemaillastdate = '".$rCekStoreKode->ticket_createdate."', notifemailnextdate = '".$date3xa."'
												WHERE ticket_id = '".$rCekStoreKode->ticket_id."' AND
												ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' 
												AND ticket_createby = '".$rCekStoreKode->ticket_createby."'");		
					$insDataLog = mysql_query("INSERT INTO ITH_NOTIFEMAILLOOP 
												(ticket_id, ticket_udeptid,ticket_createdate,ticketstatus_id,
												notifemailnumber,ticket_handleby,ticket_notifmessage,notifemaillastdate,notifemailnextdate) 
												VALUES('".$rCekStoreKode->ticket_id."','".$rCekStoreKode->ticket_udeptid."',
												'".$rCekStoreKode->ticket_createdate."','".$rCekStoreKode->ticketstatus_id."',
												'".$notifmailloop_x."','".$rCekStoreKode->ticket_createby."','FIRST REMINDER SENDMAIL SUCCESSFULLY SENT !!!',
												'".$rCekStoreKode->ticket_createdate."','".$date3xa."')");		
				}elseif(($monthY==07)&&($yearX==2019))
				{
					$notifmailloop_awal = 0;
					$notifmailloop_x = $notifmailloop_awal + 1;				
					/***
					echo '<br><font color="blue"><b>Ticket Create Date : </b></font>'.$rCekStoreKode->ticket_createdate;
					echo '<br>'.$monthX.' >> '.$monthY;
					echo '<br>'.$yearX.' >> '.$yearX;
					echo "<br>".$rCekStoreKode->ticket_createdate.' + 7 hari = '.$date3xa.'<hr>';
					***/
					$updateData = mysql_query("UPDATE ITH_TICKET_HEADER SET notifemailloop = '".$notifmailloop_x."',
												notifemaillastdate = '".$rCekStoreKode->ticket_createdate."', notifemailnextdate = '".$date3xa."'
												WHERE ticket_id = '".$rCekStoreKode->ticket_id."' AND
												ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' 
												AND ticket_createby = '".$rCekStoreKode->ticket_createby."'");		
					$insDataLog = mysql_query("INSERT INTO ITH_NOTIFEMAILLOOP 
												(ticket_id, ticket_udeptid,ticket_createdate,ticketstatus_id,
												notifemailnumber,ticket_handleby,ticket_notifmessage,notifemaillastdate,notifemailnextdate) 
												VALUES('".$rCekStoreKode->ticket_id."','".$rCekStoreKode->ticket_udeptid."',
												'".$rCekStoreKode->ticket_createdate."','".$rCekStoreKode->ticketstatus_id."',
												'".$notifmailloop_x."','".$rCekStoreKode->ticket_createby."','FIRST REMINDER SENDMAIL SUCCESSFULLY SENT !!!',
												'".$rCekStoreKode->ticket_createdate."','".$date3xa."')");		
				}elseif(($monthY==08)&&($yearX==2019))
				{
					$notifmailloop_awal = 0;
					$notifmailloop_x = $notifmailloop_awal + 1;				
					/***
					echo '<br><font color="blue"><b>Ticket Create Date : </b></font>'.$rCekStoreKode->ticket_createdate;
					echo '<br>'.$monthX.' >> '.$monthY;
					echo '<br>'.$yearX.' >> '.$yearX;
					echo "<br>".$rCekStoreKode->ticket_createdate.' + 7 hari = '.$date3xa.'<hr>';
					***/
					$updateData = mysql_query("UPDATE ITH_TICKET_HEADER SET notifemailloop = '".$notifmailloop_x."',
												notifemaillastdate = '".$rCekStoreKode->ticket_createdate."', notifemailnextdate = '".$date3xa."'
												WHERE ticket_id = '".$rCekStoreKode->ticket_id."' AND
												ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' 
												AND ticket_createby = '".$rCekStoreKode->ticket_createby."'");		
					$insDataLog = mysql_query("INSERT INTO ITH_NOTIFEMAILLOOP 
												(ticket_id, ticket_udeptid,ticket_createdate,ticketstatus_id,
												notifemailnumber,ticket_handleby,ticket_notifmessage,notifemaillastdate,notifemailnextdate) 
												VALUES('".$rCekStoreKode->ticket_id."','".$rCekStoreKode->ticket_udeptid."',
												'".$rCekStoreKode->ticket_createdate."','".$rCekStoreKode->ticketstatus_id."',
												'".$notifmailloop_x."','".$rCekStoreKode->ticket_createby."','FIRST REMINDER SENDMAIL SUCCESSFULLY SENT !!!',
												'".$rCekStoreKode->ticket_createdate."','".$date3xa."')");		
				}elseif(($monthY==09)&&($yearX==2019))
				{
					$notifmailloop_awal = 0;
					$notifmailloop_x = $notifmailloop_awal + 1;				
					/***
					echo '<br><font color="blue"><b>Ticket Create Date : </b></font>'.$rCekStoreKode->ticket_createdate;
					echo '<br>'.$monthX.' >> '.$monthY;
					echo '<br>'.$yearX.' >> '.$yearX;
					echo "<br>".$rCekStoreKode->ticket_createdate.' + 7 hari = '.$date3xa.'<hr>';
					***/
					$updateData = mysql_query("UPDATE ITH_TICKET_HEADER SET notifemailloop = '".$notifmailloop_x."',
												notifemaillastdate = '".$rCekStoreKode->ticket_createdate."', notifemailnextdate = '".$date3xa."'
												WHERE ticket_id = '".$rCekStoreKode->ticket_id."' AND
												ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' 
												AND ticket_createby = '".$rCekStoreKode->ticket_createby."'");		
					$insDataLog = mysql_query("INSERT INTO ITH_NOTIFEMAILLOOP 
												(ticket_id, ticket_udeptid,ticket_createdate,ticketstatus_id,
												notifemailnumber,ticket_handleby,ticket_notifmessage,notifemaillastdate,notifemailnextdate) 
												VALUES('".$rCekStoreKode->ticket_id."','".$rCekStoreKode->ticket_udeptid."',
												'".$rCekStoreKode->ticket_createdate."','".$rCekStoreKode->ticketstatus_id."',
												'".$notifmailloop_x."','".$rCekStoreKode->ticket_createby."','FIRST REMINDER SENDMAIL SUCCESSFULLY SENT !!!',
												'".$rCekStoreKode->ticket_createdate."','".$date3xa."')");	
				}elseif(($monthY==10)&&($yearX==2019))
				{
					$notifmailloop_awal = 0;
					$notifmailloop_x = $notifmailloop_awal + 1;				
					/***
					echo '<br><font color="blue"><b>Ticket Create Date : </b></font>'.$rCekStoreKode->ticket_createdate;
					echo '<br>'.$monthX.' >> '.$monthY;
					echo '<br>'.$yearX.' >> '.$yearX;
					echo "<br>".$rCekStoreKode->ticket_createdate.' + 7 hari = '.$date3xa.'<hr>';
					***/
					$updateData = mysql_query("UPDATE ITH_TICKET_HEADER SET notifemailloop = '".$notifmailloop_x."',
												notifemaillastdate = '".$rCekStoreKode->ticket_createdate."', notifemailnextdate = '".$date3xa."'
												WHERE ticket_id = '".$rCekStoreKode->ticket_id."' AND
												ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' 
												AND ticket_createby = '".$rCekStoreKode->ticket_createby."'");		
					$insDataLog = mysql_query("INSERT INTO ITH_NOTIFEMAILLOOP 
												(ticket_id, ticket_udeptid,ticket_createdate,ticketstatus_id,
												notifemailnumber,ticket_handleby,ticket_notifmessage,notifemaillastdate,notifemailnextdate) 
												VALUES('".$rCekStoreKode->ticket_id."','".$rCekStoreKode->ticket_udeptid."',
												'".$rCekStoreKode->ticket_createdate."','".$rCekStoreKode->ticketstatus_id."',
												'".$notifmailloop_x."','".$rCekStoreKode->ticket_createby."','FIRST REMINDER SENDMAIL SUCCESSFULLY SENT !!!',
												'".$rCekStoreKode->ticket_createdate."','".$date3xa."')");		
				}elseif(($monthY==11)&&($yearX==2019))
				{
					$notifmailloop_awal = 0;
					$notifmailloop_x = $notifmailloop_awal + 1;				
					/***
					echo '<br><font color="blue"><b>Ticket Create Date : </b></font>'.$rCekStoreKode->ticket_createdate;
					echo '<br>'.$monthX.' >> '.$monthY;
					echo '<br>'.$yearX.' >> '.$yearX;
					echo "<br>".$rCekStoreKode->ticket_createdate.' + 7 hari = '.$date3xa.'<hr>';
					***/
					$updateData = mysql_query("UPDATE ITH_TICKET_HEADER SET notifemailloop = '".$notifmailloop_x."',
												notifemaillastdate = '".$rCekStoreKode->ticket_createdate."', notifemailnextdate = '".$date3xa."'
												WHERE ticket_id = '".$rCekStoreKode->ticket_id."' AND
												ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' 
												AND ticket_createby = '".$rCekStoreKode->ticket_createby."'");		
					$insDataLog = mysql_query("INSERT INTO ITH_NOTIFEMAILLOOP 
												(ticket_id, ticket_udeptid,ticket_createdate,ticketstatus_id,
												notifemailnumber,ticket_handleby,ticket_notifmessage,notifemaillastdate,notifemailnextdate) 
												VALUES('".$rCekStoreKode->ticket_id."','".$rCekStoreKode->ticket_udeptid."',
												'".$rCekStoreKode->ticket_createdate."','".$rCekStoreKode->ticketstatus_id."',
												'".$notifmailloop_x."','".$rCekStoreKode->ticket_createby."','FIRST REMINDER SENDMAIL SUCCESSFULLY SENT !!!',
												'".$rCekStoreKode->ticket_createdate."','".$date3xa."')");		
				}elseif(($monthY==12)&&($yearX==2019))
				{
					$notifmailloop_awal = 0;
					$notifmailloop_x = $notifmailloop_awal + 1;				
					/***
					echo '<br><font color="blue"><b>Ticket Create Date : </b></font>'.$rCekStoreKode->ticket_createdate;
					echo '<br>'.$monthX.' >> '.$monthY;
					echo '<br>'.$yearX.' >> '.$yearX;
					echo "<br>".$rCekStoreKode->ticket_createdate.' + 7 hari = '.$date3xa.'<hr>';
					***/
					$updateData = mysql_query("UPDATE ITH_TICKET_HEADER SET notifemailloop = '".$notifmailloop_x."',
												notifemaillastdate = '".$rCekStoreKode->ticket_createdate."', notifemailnextdate = '".$date3xa."'
												WHERE ticket_id = '".$rCekStoreKode->ticket_id."' AND
												ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' 
												AND ticket_createby = '".$rCekStoreKode->ticket_createby."'");		
					$insDataLog = mysql_query("INSERT INTO ITH_NOTIFEMAILLOOP 
												(ticket_id, ticket_udeptid,ticket_createdate,ticketstatus_id,
												notifemailnumber,ticket_handleby,ticket_notifmessage,notifemaillastdate,notifemailnextdate) 
												VALUES('".$rCekStoreKode->ticket_id."','".$rCekStoreKode->ticket_udeptid."',
												'".$rCekStoreKode->ticket_createdate."','".$rCekStoreKode->ticketstatus_id."',
												'".$notifmailloop_x."','".$rCekStoreKode->ticket_createby."','FIRST REMINDER SENDMAIL SUCCESSFULLY SENT !!!',
												'".$rCekStoreKode->ticket_createdate."','".$date3xa."')");		
				}
						/** SENDING EMAIL NOTIF REMINDER TO STORE **/
						error_reporting(E_STRICT);
						date_default_timezone_set('America/Toronto');
						require_once('email/class.phpmailer.php');
						$mail             = new PHPMailer();

						$mail->IsSMTP(); $mail->SMTPDebug = 1; $mail->SMTPKeepAlive = false; $mail->SMTPAuth = true;       
						$mail->Mailer  = 'smtp';  $mail->SMTPSecure = 'ssl';$mail->Host  = 'mail.ffi.co.id';     
						#$mail->Host = '117.54.9.179';  #$mail->Host = '192.168.10.10';     
						$mail->Port = 465; $mail->Username = 'system.servicedesk@ffi.co.id'; $mail->Password = 'Kfc_System'; 					

						$storeName = strtoupper($rCekStoreKode->user_realname);
						$ticketID = $rCekStoreKode->ticket_id;
						$subject = $rCekStoreKode->ticket_subject;
						$status = $rCekStoreKode->ticketstatus_name;
						$ticketDate = $rCekStoreKode->ticket_createdate;
						$problem = $rCekStoreKode->ticket_problem;
						$nikStore = $rCekStoreKode->user_nik;
						$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
						$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDUGA');
						$mail->AddCC('mantechno2020@gmail.com', 'MANTECHNO');
						$qCekUsrData = mysql_query("SELECT user_nik,userlevel_id,udept_id FROM ITH_USER 
												    WHERE user_nik = '".$rCekStoreKode->ticket_createby."'");
						$rCekUsrData = mysql_fetch_object($qCekUsrData);	
						if($rCekUsrData->udept_id=='STORE')
						{	
							$mail->Subject    = "[MAIL REMINDER STORE].FIRST-REMINDER-TO-$storeName";
						}elseif($rCekUsrData->udept_id!='STORE')
						{						
							$mail->Subject    = "[MAIL REMINDER USER].FIRST-REMINDER-TO-$storeName";	
						}
						$mail->AltBody    = "$rCekStoreKode->ticket_subject"; 
						
						$mail->Body .= "									
						<br>Dear Store $storeName,							
						<br>Mohon diupdate status pekerjaan untuk no tiket :<br>
						<ul>
							<li>Nomor Tiket : $ticketID</li><li>Nama Store : $storeName</li>
							<li>Judul : $subject</li><li>Status : $status</li><li>Ticket Dibuat Tanggal : $ticketDate</li>																		
						</ul><br>Catatan :	<br>$problem<br><br><br>
						<ul>
							<li><b>Apabila pekerjaan sudah selesai, mohon lakukan update status menjadi CLOSED</b></li>

						</ul><br>
						Silahkan Klik Link ini untuk melihatnya : (<a href='http://192.168.10.31/reminder/index.php?view=home&pid=$ticketID&uid=$nikStore'>Click Here</a>)
						<br><br>Regards,<br><br>
						ADMIN SERVICEDESK<hr>";	
						if(!$mail->Send()) 
						{
							/* OFFLINE */
							echo "ERROR !!! ";
						} else {
							/* ONLINE */
							echo "SUCCESSFULLY !!! ";#	exit;
						}						
		}elseif($rCekStoreKode->notifemailloop!='')
		{		
			
			if($rCekStoreKode->notifemailloop=='1')
			{
				$qCekNotifMailX = mysql_query("SELECT ticket_id, ticketstatus_id, ticket_createdate, 
											   notifemailnumber, notifemaillastdate, notifemailnextdate 
											   FROM ITH_NOTIFEMAILLOOPX WHERE ticket_id='".$rCekStoreKode->ticket_id."'");
				while($rCekNotifMailX = mysql_fetch_object($qCekNotifMailX))
				{	
					if($rCekNotifMailX->notifemailnextdate==$dateNow)
					{
						$notifmailloop_x = $rCekStoreKode->notifemailloop + 1;	
						$notifemaillastdate = date('d/m/Y');$notifemailnextdate = date('d/m/Y', strtotime('today + 7 days'));					
						$qCekNotifEmailReminderDate = mysql_query("SELECT notifemailloop,notifemaillastdate,notifemailnextdate
																   FROM ITH_TICKET_HEADER WHERE ticket_id ='".$rCekStoreKode->ticket_id."'");	
						$rCekNotifEmailReminderDate = mysql_fetch_object($qCekNotifEmailReminderDate);	
						 
						$dateloop2a = DateTime::createFromFormat('d/m/Y',$rCekNotifEmailReminderDate->notifemailnextdate)->format('d-m-Y');
						if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
						$dateloop3a = date_create($dateloop2a);
						date_add($dateloop3a, date_interval_create_from_date_string('+7 days'));
						$dateloop3xa = date_format($dateloop3a, 'd/m/Y');	
						
						$updateData = mysql_query("UPDATE ITH_TICKET_HEADER SET notifemailloop = '".$notifmailloop_x."',
												   notifemaillastdate = '".$rCekNotifEmailReminderDate->notifemailnextdate."', 
												   notifemailnextdate = '".$dateloop3xa."' WHERE ticket_id = '".$rCekStoreKode->ticket_id."' 
												   AND ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' 
												   AND ticket_createby = '".$rCekStoreKode->ticket_createby."'");	
							
						$insDataLog = mysql_query("UPDATE ITH_NOTIFEMAILLOOPX SET notifemailnumber = '".$notifmailloop_x."',
												   notifemaillastdate = '".$notifemaillastdate."', notifemailnextdate = '".$notifemailnextdate."',
												   ticket_notifmessage = 'FIRST REMINDER SENDMAIL SUCCESSFULLY SENT !!!'
												   WHERE ticket_id = '".$rCekStoreKode->ticket_id."' AND
												   ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' AND ticket_handleby = '".$rCekStoreKode->ticket_createby."'");		
						
						/** SENDING EMAIL NOTIF REMINDER TO STORE **/
						error_reporting(E_STRICT);
						date_default_timezone_set('America/Toronto');
						require_once('email/class.phpmailer.php');
						$mail             = new PHPMailer();

						$mail->IsSMTP(); $mail->SMTPDebug = 1; $mail->SMTPKeepAlive = false; $mail->SMTPAuth = true;       
						$mail->Mailer  = 'smtp';  $mail->SMTPSecure = 'ssl';$mail->Host  = 'mail.ffi.co.id';     
						#$mail->Host = '117.54.9.179';  #$mail->Host = '192.168.10.10';     
						$mail->Port = 465; $mail->Username = 'system.servicedesk@ffi.co.id'; $mail->Password = 'Kfc_System'; 					

						$storeName = strtoupper($rCekStoreKode->user_realname);
						$ticketID = $rCekStoreKode->ticket_id;
						$subject = $rCekStoreKode->ticket_subject;
						$status = $rCekStoreKode->ticketstatus_name;
						$ticketDate = $rCekStoreKode->ticket_createdate;
						$problem = $rCekStoreKode->ticket_problem;
						$nikStore = $rCekStoreKode->user_nik;
						$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
						$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDUGA');
						$mail->AddCC('mantechno2020@gmail.com', 'MANTECHNO');
						$qCekUsrData = mysql_query("SELECT user_nik,userlevel_id,udept_id FROM ITH_USER 
												    WHERE user_nik = '".$rCekStoreKode->ticket_createby."'");
						$rCekUsrData = mysql_fetch_object($qCekUsrData);	
						if($rCekUsrData->udept_id=='STORE')
						{	
							$mail->Subject    = "[MAIL REMINDER STORE].FIRST-REMINDER-TO-$storeName";
						}elseif($rCekUsrData->udept_id!='STORE')
						{						
							$mail->Subject    = "[MAIL REMINDER USER].FIRST-REMINDER-TO-$storeName";	
						}
						$mail->AltBody    = "$rCekStoreKode->ticket_subject"; 
						
						$mail->Body .= "									
						<br>Dear Store $storeName,							
						<br>Mohon diupdate status pekerjaan untuk no tiket :<br>
						<ul>
							<li>Nomor Tiket : $ticketID</li><li>Nama Store : $storeName</li>
							<li>Judul : $subject</li><li>Status : $status</li><li>Ticket Dibuat Tanggal : $ticketDate</li>																		
						</ul><br>Catatan :	<br>$problem<br><br><br>
						<ul>
							<li><b>Apabila pekerjaan sudah selesai, mohon lakukan update status menjadi CLOSED</b></li>

						</ul><br>
						Silahkan Klik Link ini untuk melihatnya : (<a href='http://192.168.10.31/reminder/index.php?view=home&pid=$ticketID&uid=$nikStore'>Click Here</a>)
						<br><br>Regards,<br><br>
						ADMIN SERVICEDESK<hr>";		

						if(!$mail->Send()) 
						{
							/* OFFLINE */
							echo "ERROR !!! ";
						} else {
							/* ONLINE */
							echo "SUCCESSFULLY !!! ";#	exit;
						}								
					}	
				}	
			}elseif($rCekStoreKode->notifemailloop=='2')
			{
				$qCekNotifMailX = mysql_query("SELECT ticket_id, ticketstatus_id, ticket_createdate, 
											   notifemailnumber, notifemaillastdate, notifemailnextdate 
											   FROM ITH_NOTIFEMAILLOOPX WHERE ticket_id='".$rCekStoreKode->ticket_id."'");
				while($rCekNotifMailX = mysql_fetch_object($qCekNotifMailX))
				{	
					if($rCekNotifMailX->notifemailnextdate==$dateNow)
					{
						$notifmailloop_x = $rCekStoreKode->notifemailloop + 1;	
						$notifemaillastdate = date('d/m/Y');$notifemailnextdate = date('d/m/Y', strtotime('today + 7 days'));					
						$qCekNotifEmailReminderDate = mysql_query("SELECT notifemailloop,notifemaillastdate,notifemailnextdate
																   FROM ITH_TICKET_HEADER WHERE ticket_id ='".$rCekStoreKode->ticket_id."'");	
						$rCekNotifEmailReminderDate = mysql_fetch_object($qCekNotifEmailReminderDate);	
						 
						$dateloop2a = DateTime::createFromFormat('d/m/Y',$rCekNotifEmailReminderDate->notifemailnextdate)->format('d-m-Y');
						if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
						$dateloop3a = date_create($dateloop2a);
						date_add($dateloop3a, date_interval_create_from_date_string('+7 days'));
						$dateloop3xa = date_format($dateloop3a, 'd/m/Y');	
						
						$updateData = mysql_query("UPDATE ITH_TICKET_HEADER SET notifemailloop = '".$notifmailloop_x."',
												   notifemaillastdate = '".$rCekNotifEmailReminderDate->notifemailnextdate."', 
												   notifemailnextdate = '".$dateloop3xa."' WHERE ticket_id = '".$rCekStoreKode->ticket_id."' 
												   AND ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' 
												   AND ticket_createby = '".$rCekStoreKode->ticket_createby."'");	
							
						$insDataLog = mysql_query("UPDATE ITH_NOTIFEMAILLOOPX SET notifemailnumber = '".$notifmailloop_x."',
												   notifemaillastdate = '".$notifemaillastdate."', notifemailnextdate = '".$notifemailnextdate."',
												   ticket_notifmessage = 'SECOND REMINDER SENDMAIL SUCCESSFULLY SENT !!!'
												   WHERE ticket_id = '".$rCekStoreKode->ticket_id."' AND
												   ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' AND ticket_handleby = '".$rCekStoreKode->ticket_createby."'");		
						
						/** SENDING EMAIL NOTIF REMINDER TO STORE **/
						error_reporting(E_STRICT);
						date_default_timezone_set('America/Toronto');
						require_once('email/class.phpmailer.php');
						$mail             = new PHPMailer();

						$mail->IsSMTP(); $mail->SMTPDebug = 1; $mail->SMTPKeepAlive = false; $mail->SMTPAuth = true;       
						$mail->Mailer  = 'smtp';  $mail->SMTPSecure = 'ssl';$mail->Host  = 'mail.ffi.co.id';     
						#$mail->Host = '117.54.9.179';  #$mail->Host = '192.168.10.10';     
						$mail->Port = 465; $mail->Username = 'system.servicedesk@ffi.co.id'; $mail->Password = 'Kfc_System'; 					

						$storeName = strtoupper($rCekStoreKode->user_realname);
						$ticketID = $rCekStoreKode->ticket_id;
						$subject = $rCekStoreKode->ticket_subject;
						$status = $rCekStoreKode->ticketstatus_name;
						$ticketDate = $rCekStoreKode->ticket_createdate;
						$problem = $rCekStoreKode->ticket_problem;
						$nikStore = $rCekStoreKode->user_nik;
						$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
						$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDUGA');
						$mail->AddCC('mantechno2020@gmail.com', 'MANTECHNO');
						$qCekUsrData = mysql_query("SELECT user_nik,userlevel_id,udept_id FROM ITH_USER 
												    WHERE user_nik = '".$rCekStoreKode->ticket_createby."'");
						$rCekUsrData = mysql_fetch_object($qCekUsrData);	
						if($rCekUsrData->udept_id=='STORE')
						{	
							$mail->Subject    = "[MAIL REMINDER STORE].SECOND-REMINDER-TO-$storeName";
						}elseif($rCekUsrData->udept_id!='STORE')
						{						
							$mail->Subject    = "[MAIL REMINDER USER].SECOND-REMINDER-TO-$storeName";	
						}
						$mail->AltBody    = "$rCekStoreKode->ticket_subject"; 
						
						$mail->Body .= "									
						<br>Dear Store $storeName,							
						<br>Mohon diupdate status pekerjaan untuk no tiket :<br>
						<ul>
							<li>Nomor Tiket : $ticketID</li><li>Nama Store : $storeName</li>
							<li>Judul : $subject</li><li>Status : $status</li><li>Ticket Dibuat Tanggal : $ticketDate</li>																		
						</ul><br>Catatan :	<br>$problem<br><br><br>
						<ul>
							<li><b>Apabila pekerjaan sudah selesai, mohon lakukan update status menjadi CLOSED</b></li>

						</ul><br>
						Silahkan Klik Link ini untuk melihatnya : (<a href='http://192.168.10.31/reminder/index.php?view=home&pid=$ticketID&uid=$nikStore'>Click Here</a>)
						<br><br>Regards,<br><br>
						ADMIN SERVICEDESK<hr>";		

						if(!$mail->Send()) 
						{
							/* OFFLINE */
							echo "ERROR !!! ";
						} else {
							/* ONLINE */
							echo "SUCCESSFULLY !!! ";#	exit;
						}								
					}	
				}	
			}elseif($rCekStoreKode->notifemailloop=='3')
			{
				$qCekNotifMailX = mysql_query("SELECT ticket_id, ticketstatus_id, ticket_createdate, 
											   notifemailnumber, notifemaillastdate, notifemailnextdate 
											   FROM ITH_NOTIFEMAILLOOPX WHERE ticket_id='".$rCekStoreKode->ticket_id."'");
				while($rCekNotifMailX = mysql_fetch_object($qCekNotifMailX))
				{	
					if($rCekNotifMailX->notifemailnextdate==$dateNow)
					{
						$notifmailloop_x = $rCekStoreKode->notifemailloop + 1;	
						$notifemaillastdate = date('d/m/Y');$notifemailnextdate = date('d/m/Y', strtotime('today + 7 days'));					
						$qCekNotifEmailReminderDate = mysql_query("SELECT notifemailloop,notifemaillastdate,notifemailnextdate
																   FROM ITH_TICKET_HEADER WHERE ticket_id ='".$rCekStoreKode->ticket_id."'");	
						$rCekNotifEmailReminderDate = mysql_fetch_object($qCekNotifEmailReminderDate);	
						 
						$dateloop2a = DateTime::createFromFormat('d/m/Y',$rCekNotifEmailReminderDate->notifemailnextdate)->format('d-m-Y');
						if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
						$dateloop3a = date_create($dateloop2a);
						date_add($dateloop3a, date_interval_create_from_date_string('+7 days'));
						$dateloop3xa = date_format($dateloop3a, 'd/m/Y');	
						
						$updateData = mysql_query("UPDATE ITH_TICKET_HEADER SET notifemailloop = '".$notifmailloop_x."',
												   notifemaillastdate = '".$rCekNotifEmailReminderDate->notifemailnextdate."', 
												   notifemailnextdate = '".$dateloop3xa."' WHERE ticket_id = '".$rCekStoreKode->ticket_id."' 
												   AND ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' 
												   AND ticket_createby = '".$rCekStoreKode->ticket_createby."'");	
							
						$insDataLog = mysql_query("UPDATE ITH_NOTIFEMAILLOOPX SET notifemailnumber = '".$notifmailloop_x."',
												   notifemaillastdate = '".$notifemaillastdate."', notifemailnextdate = '".$notifemailnextdate."',
												   ticket_notifmessage = 'THIRD REMINDER SENDMAIL SUCCESSFULLY SENT !!!'
												   WHERE ticket_id = '".$rCekStoreKode->ticket_id."' AND
												   ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' AND ticket_handleby = '".$rCekStoreKode->ticket_createby."'");		
						
						/** SENDING EMAIL NOTIF REMINDER TO STORE **/
						error_reporting(E_STRICT);
						date_default_timezone_set('America/Toronto');
						require_once('email/class.phpmailer.php');
						$mail             = new PHPMailer();

						$mail->IsSMTP(); $mail->SMTPDebug = 1; $mail->SMTPKeepAlive = false; $mail->SMTPAuth = true;       
						$mail->Mailer  = 'smtp';  $mail->SMTPSecure = 'ssl';$mail->Host  = 'mail.ffi.co.id';     
						#$mail->Host = '117.54.9.179';  #$mail->Host = '192.168.10.10';     
						$mail->Port = 465; $mail->Username = 'system.servicedesk@ffi.co.id'; $mail->Password = 'Kfc_System'; 					

						$storeName = strtoupper($rCekStoreKode->user_realname);
						$ticketID = $rCekStoreKode->ticket_id;
						$subject = $rCekStoreKode->ticket_subject;
						$status = $rCekStoreKode->ticketstatus_name;
						$ticketDate = $rCekStoreKode->ticket_createdate;
						$problem = $rCekStoreKode->ticket_problem;
						$nikStore = $rCekStoreKode->user_nik;
						$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
						$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDUGA');
						$mail->AddCC('mantechno2020@gmail.com', 'MANTECHNO');
						$qCekUsrData = mysql_query("SELECT user_nik,userlevel_id,udept_id FROM ITH_USER 
												    WHERE user_nik = '".$rCekStoreKode->ticket_createby."'");
						$rCekUsrData = mysql_fetch_object($qCekUsrData);	
						if($rCekUsrData->udept_id=='STORE')
						{	
							$mail->Subject    = "[MAIL REMINDER STORE].THIRD-REMINDER-TO-$storeName";
						}elseif($rCekUsrData->udept_id!='STORE')
						{						
							$mail->Subject    = "[MAIL REMINDER USER].THIRD-REMINDER-TO-$storeName";	
						}
						$mail->AltBody    = "$rCekStoreKode->ticket_subject"; 
						
						$mail->Body .= "									
						<br>Dear Store $storeName,							
						<br>Mohon diupdate status pekerjaan untuk no tiket :<br>
						<ul>
							<li>Nomor Tiket : $ticketID</li><li>Nama Store : $storeName</li>
							<li>Judul : $subject</li><li>Status : $status</li><li>Ticket Dibuat Tanggal : $ticketDate</li>																		
						</ul><br>Catatan :	<br>$problem<br><br><br>
						<ul>
							<li><b>Apabila pekerjaan sudah selesai, mohon lakukan update status menjadi CLOSED</b></li>

						</ul><br>
						Silahkan Klik Link ini untuk melihatnya : (<a href='http://192.168.10.31/reminder/index.php?view=home&pid=$ticketID&uid=$nikStore'>Click Here</a>)
						<br><br>Regards,<br><br>
						ADMIN SERVICEDESK<hr>";		

						if(!$mail->Send()) 
						{
							/* OFFLINE */
							echo "ERROR !!! ";
						} else {
							/* ONLINE */
							echo "SUCCESSFULLY !!! ";#	exit;
						}								
					}	
				}	
			}elseif($rCekStoreKode->notifemailloop=='4')
			{
				$qCekNotifMailX = mysql_query("SELECT ticket_id, ticketstatus_id, ticket_createdate, 
											   notifemailnumber, notifemaillastdate, notifemailnextdate 
											   FROM ITH_NOTIFEMAILLOOPX WHERE ticket_id='".$rCekStoreKode->ticket_id."'");
				while($rCekNotifMailX = mysql_fetch_object($qCekNotifMailX))
				{	
					if($rCekNotifMailX->notifemailnextdate==$dateNow)
					{
						$notifmailloop_x = $rCekStoreKode->notifemailloop + 1;	
						$notifemaillastdate = date('d/m/Y');$notifemailnextdate = date('d/m/Y', strtotime('today + 7 days'));					
						$qCekNotifEmailReminderDate = mysql_query("SELECT notifemailloop,notifemaillastdate,notifemailnextdate
																   FROM ITH_TICKET_HEADER WHERE ticket_id ='".$rCekStoreKode->ticket_id."'");	
						$rCekNotifEmailReminderDate = mysql_fetch_object($qCekNotifEmailReminderDate);	
						 
						$dateloop2a = DateTime::createFromFormat('d/m/Y',$rCekNotifEmailReminderDate->notifemailnextdate)->format('d-m-Y');
						if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
						$dateloop3a = date_create($dateloop2a);
						date_add($dateloop3a, date_interval_create_from_date_string('+7 days'));
						$dateloop3xa = date_format($dateloop3a, 'd/m/Y');	
						
						$updateData = mysql_query("UPDATE ITH_TICKET_HEADER SET notifemailloop = '".$notifmailloop_x."',
												   notifemaillastdate = '".$rCekNotifEmailReminderDate->notifemailnextdate."', 
												   notifemailnextdate = '".$dateloop3xa."' WHERE ticket_id = '".$rCekStoreKode->ticket_id."' 
												   AND ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' 
												   AND ticket_createby = '".$rCekStoreKode->ticket_createby."'");	
							
						$insDataLog = mysql_query("UPDATE ITH_NOTIFEMAILLOOPX SET notifemailnumber = '".$notifmailloop_x."',
												   notifemaillastdate = '".$notifemaillastdate."', notifemailnextdate = '".$notifemailnextdate."',
												   ticket_notifmessage = 'FOURTH REMINDER SENDMAIL SUCCESSFULLY SENT !!!'
												   WHERE ticket_id = '".$rCekStoreKode->ticket_id."' AND
												   ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' AND ticket_handleby = '".$rCekStoreKode->ticket_createby."'");		
						
						/** SENDING EMAIL NOTIF REMINDER TO STORE **/
						error_reporting(E_STRICT);
						date_default_timezone_set('America/Toronto');
						require_once('email/class.phpmailer.php');
						$mail             = new PHPMailer();

						$mail->IsSMTP(); $mail->SMTPDebug = 1; $mail->SMTPKeepAlive = false; $mail->SMTPAuth = true;       
						$mail->Mailer  = 'smtp';  $mail->SMTPSecure = 'ssl';$mail->Host  = 'mail.ffi.co.id';     
						#$mail->Host = '117.54.9.179';  #$mail->Host = '192.168.10.10';     
						$mail->Port = 465; $mail->Username = 'system.servicedesk@ffi.co.id'; $mail->Password = 'Kfc_System'; 					

						$storeName = strtoupper($rCekStoreKode->user_realname);
						$ticketID = $rCekStoreKode->ticket_id;
						$subject = $rCekStoreKode->ticket_subject;
						$status = $rCekStoreKode->ticketstatus_name;
						$ticketDate = $rCekStoreKode->ticket_createdate;
						$problem = $rCekStoreKode->ticket_problem;
						$nikStore = $rCekStoreKode->user_nik;
						$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
						$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDUGA');
						$mail->AddCC('mantechno2020@gmail.com', 'MANTECHNO');
						$qCekUsrData = mysql_query("SELECT user_nik,userlevel_id,udept_id FROM ITH_USER 
												    WHERE user_nik = '".$rCekStoreKode->ticket_createby."'");
						$rCekUsrData = mysql_fetch_object($qCekUsrData);	
						if($rCekUsrData->udept_id=='STORE')
						{	
							$mail->Subject    = "[MAIL REMINDER STORE].FOURTH-REMINDER-TO-$storeName";
						}elseif($rCekUsrData->udept_id!='STORE')
						{						
							$mail->Subject    = "[MAIL REMINDER USER].FOURTH-REMINDER-TO-$storeName";	
						}
						$mail->AltBody    = "$rCekStoreKode->ticket_subject"; 
						
						$mail->Body .= "									
						<br>Dear Store $storeName,							
						<br>Mohon diupdate status pekerjaan untuk no tiket :<br>
						<ul>
							<li>Nomor Tiket : $ticketID</li><li>Nama Store : $storeName</li>
							<li>Judul : $subject</li><li>Status : $status</li><li>Ticket Dibuat Tanggal : $ticketDate</li>																		
						</ul><br>Catatan :	<br>$problem<br><br><br>
						<ul>
							<li><b>Apabila pekerjaan sudah selesai, mohon lakukan update status menjadi CLOSED</b></li>

						</ul><br>
						Silahkan Klik Link ini untuk melihatnya : (<a href='http://192.168.10.31/reminder/index.php?view=home&pid=$ticketID&uid=$nikStore'>Click Here</a>)
						<br><br>Regards,<br><br>
						ADMIN SERVICEDESK<hr>";		

						if(!$mail->Send()) 
						{
							/* OFFLINE */
							echo "ERROR !!! ";
						} else {
							/* ONLINE */
							echo "SUCCESSFULLY !!! ";#	exit;
						}								
					}	
				}	
			}elseif($rCekStoreKode->notifemailloop=='5')
			{
				$qCekNotifMailX = mysql_query("SELECT ticket_id, ticketstatus_id, ticket_createdate, 
											   notifemailnumber, notifemaillastdate, notifemailnextdate 
											   FROM ITH_NOTIFEMAILLOOPX WHERE ticket_id='".$rCekStoreKode->ticket_id."'");
				while($rCekNotifMailX = mysql_fetch_object($qCekNotifMailX))
				{	
					if($rCekNotifMailX->notifemailnextdate==$dateNow)
					{
						$notifmailloop_x = $rCekStoreKode->notifemailloop + 1;	
						$notifemaillastdate = date('d/m/Y');$notifemailnextdate = date('d/m/Y', strtotime('today + 7 days'));					
						$qCekNotifEmailReminderDate = mysql_query("SELECT notifemailloop,notifemaillastdate,notifemailnextdate
																   FROM ITH_TICKET_HEADER WHERE ticket_id ='".$rCekStoreKode->ticket_id."'");	
						$rCekNotifEmailReminderDate = mysql_fetch_object($qCekNotifEmailReminderDate);	
						 
						$dateloop2a = DateTime::createFromFormat('d/m/Y',$rCekNotifEmailReminderDate->notifemailnextdate)->format('d-m-Y');
						if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
						$dateloop3a = date_create($dateloop2a);
						date_add($dateloop3a, date_interval_create_from_date_string('+7 days'));
						$dateloop3xa = date_format($dateloop3a, 'd/m/Y');	
						
						$updateData = mysql_query("UPDATE ITH_TICKET_HEADER SET notifemailloop = '".$notifmailloop_x."',
												   notifemaillastdate = '".$rCekNotifEmailReminderDate->notifemailnextdate."', 
												   notifemailnextdate = '".$dateloop3xa."' WHERE ticket_id = '".$rCekStoreKode->ticket_id."' 
												   AND ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' 
												   AND ticket_createby = '".$rCekStoreKode->ticket_createby."'");	
							
						$insDataLog = mysql_query("UPDATE ITH_NOTIFEMAILLOOPX SET notifemailnumber = '".$notifmailloop_x."',
												   notifemaillastdate = '".$notifemaillastdate."', notifemailnextdate = '".$notifemailnextdate."',
												   ticket_notifmessage = 'FIFTH REMINDER SENDMAIL SUCCESSFULLY SENT !!!'
												   WHERE ticket_id = '".$rCekStoreKode->ticket_id."' AND
												   ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' AND ticket_handleby = '".$rCekStoreKode->ticket_createby."'");		
						
						/** SENDING EMAIL NOTIF REMINDER TO STORE **/
						error_reporting(E_STRICT);
						date_default_timezone_set('America/Toronto');
						require_once('email/class.phpmailer.php');
						$mail             = new PHPMailer();

						$mail->IsSMTP(); $mail->SMTPDebug = 1; $mail->SMTPKeepAlive = false; $mail->SMTPAuth = true;       
						$mail->Mailer  = 'smtp';  $mail->SMTPSecure = 'ssl';$mail->Host  = 'mail.ffi.co.id';     
						#$mail->Host = '117.54.9.179';  #$mail->Host = '192.168.10.10';     
						$mail->Port = 465; $mail->Username = 'system.servicedesk@ffi.co.id'; $mail->Password = 'Kfc_System'; 					

						$storeName = strtoupper($rCekStoreKode->user_realname);
						$ticketID = $rCekStoreKode->ticket_id;
						$subject = $rCekStoreKode->ticket_subject;
						$status = $rCekStoreKode->ticketstatus_name;
						$ticketDate = $rCekStoreKode->ticket_createdate;
						$problem = $rCekStoreKode->ticket_problem;
						$nikStore = $rCekStoreKode->user_nik;
						$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
						$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDUGA');
						$mail->AddCC('mantechno2020@gmail.com', 'MANTECHNO');
						$qCekUsrData = mysql_query("SELECT user_nik,userlevel_id,udept_id FROM ITH_USER 
												    WHERE user_nik = '".$rCekStoreKode->ticket_createby."'");
						$rCekUsrData = mysql_fetch_object($qCekUsrData);	
						if($rCekUsrData->udept_id=='STORE')
						{	
							$mail->Subject    = "[MAIL REMINDER STORE].FIFTH-REMINDER-TO-$storeName";
						}elseif($rCekUsrData->udept_id!='STORE')
						{						
							$mail->Subject    = "[MAIL REMINDER USER].FIFTH-REMINDER-TO-$storeName";	
						}
						$mail->AltBody    = "$rCekStoreKode->ticket_subject"; 
						
						$mail->Body .= "									
						<br>Dear Store $storeName,							
						<br>Mohon diupdate status pekerjaan untuk no tiket :<br>
						<ul>
							<li>Nomor Tiket : $ticketID</li><li>Nama Store : $storeName</li>
							<li>Judul : $subject</li><li>Status : $status</li><li>Ticket Dibuat Tanggal : $ticketDate</li>																		
						</ul><br>Catatan :	<br>$problem<br><br><br>
						<ul>
							<li><b>Apabila pekerjaan sudah selesai, mohon lakukan update status menjadi CLOSED</b></li>

						</ul><br>
						Silahkan Klik Link ini untuk melihatnya : (<a href='http://192.168.10.31/reminder/index.php?view=home&pid=$ticketID&uid=$nikStore'>Click Here</a>)
						<br><br>Regards,<br><br>
						ADMIN SERVICEDESK<hr>";		

						if(!$mail->Send()) 
						{
							/* OFFLINE */
							echo "ERROR !!! ";
						} else {
							/* ONLINE */
							echo "SUCCESSFULLY !!! ";#	exit;
						}								
					}	
				}	
			}elseif($rCekStoreKode->notifemailloop=='6')
			{
				$qCekNotifMailX = mysql_query("SELECT ticket_id, ticketstatus_id, ticket_createdate, 
											   notifemailnumber, notifemaillastdate, notifemailnextdate 
											   FROM ITH_NOTIFEMAILLOOPX WHERE ticket_id='".$rCekStoreKode->ticket_id."'");
				while($rCekNotifMailX = mysql_fetch_object($qCekNotifMailX))
				{	
					if($rCekNotifMailX->notifemailnextdate==$dateNow)
					{
						$notifmailloop_x = $rCekStoreKode->notifemailloop + 1;	
						$notifemaillastdate = date('d/m/Y');$notifemailnextdate = date('d/m/Y', strtotime('today + 7 days'));					
						$qCekNotifEmailReminderDate = mysql_query("SELECT notifemailloop,notifemaillastdate,notifemailnextdate
																   FROM ITH_TICKET_HEADER WHERE ticket_id ='".$rCekStoreKode->ticket_id."'");	
						$rCekNotifEmailReminderDate = mysql_fetch_object($qCekNotifEmailReminderDate);	
						 
						$dateloop2a = DateTime::createFromFormat('d/m/Y',$rCekNotifEmailReminderDate->notifemailnextdate)->format('d-m-Y');
						if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
						$dateloop3a = date_create($dateloop2a);
						date_add($dateloop3a, date_interval_create_from_date_string('+7 days'));
						$dateloop3xa = date_format($dateloop3a, 'd/m/Y');	
						
						$updateData = mysql_query("UPDATE ITH_TICKET_HEADER SET notifemailloop = '".$notifmailloop_x."',
												   notifemaillastdate = '".$rCekNotifEmailReminderDate->notifemailnextdate."', 
												   notifemailnextdate = '".$dateloop3xa."' WHERE ticket_id = '".$rCekStoreKode->ticket_id."' 
												   AND ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' 
												   AND ticket_createby = '".$rCekStoreKode->ticket_createby."'");	
							
						$insDataLog = mysql_query("UPDATE ITH_NOTIFEMAILLOOPX SET notifemailnumber = '".$notifmailloop_x."',
												   notifemaillastdate = '".$notifemaillastdate."', notifemailnextdate = '".$notifemailnextdate."',
												   ticket_notifmessage = 'SIXTH REMINDER SENDMAIL SUCCESSFULLY SENT !!!'
												   WHERE ticket_id = '".$rCekStoreKode->ticket_id."' AND
												   ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' AND ticket_handleby = '".$rCekStoreKode->ticket_createby."'");		
						
						/** SENDING EMAIL NOTIF REMINDER TO STORE **/
						error_reporting(E_STRICT);
						date_default_timezone_set('America/Toronto');
						require_once('email/class.phpmailer.php');
						$mail             = new PHPMailer();

						$mail->IsSMTP(); $mail->SMTPDebug = 1; $mail->SMTPKeepAlive = false; $mail->SMTPAuth = true;       
						$mail->Mailer  = 'smtp';  $mail->SMTPSecure = 'ssl';$mail->Host  = 'mail.ffi.co.id';     
						#$mail->Host = '117.54.9.179';  #$mail->Host = '192.168.10.10';     
						$mail->Port = 465; $mail->Username = 'system.servicedesk@ffi.co.id'; $mail->Password = 'Kfc_System'; 					

						$storeName = strtoupper($rCekStoreKode->user_realname);
						$ticketID = $rCekStoreKode->ticket_id;
						$subject = $rCekStoreKode->ticket_subject;
						$status = $rCekStoreKode->ticketstatus_name;
						$ticketDate = $rCekStoreKode->ticket_createdate;
						$problem = $rCekStoreKode->ticket_problem;
						$nikStore = $rCekStoreKode->user_nik;
						$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
						$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDUGA');
						$mail->AddCC('mantechno2020@gmail.com', 'MANTECHNO');
						$qCekUsrData = mysql_query("SELECT user_nik,userlevel_id,udept_id FROM ITH_USER 
												    WHERE user_nik = '".$rCekStoreKode->ticket_createby."'");
						$rCekUsrData = mysql_fetch_object($qCekUsrData);	
						if($rCekUsrData->udept_id=='STORE')
						{	
							$mail->Subject    = "[MAIL REMINDER STORE].SIXTH-REMINDER-TO-$storeName";
						}elseif($rCekUsrData->udept_id!='STORE')
						{						
							$mail->Subject    = "[MAIL REMINDER USER].SIXTH-REMINDER-TO-$storeName";	
						}
						$mail->AltBody    = "$rCekStoreKode->ticket_subject"; 
						
						$mail->Body .= "									
						<br>Dear Store $storeName,							
						<br>Mohon diupdate status pekerjaan untuk no tiket :<br>
						<ul>
							<li>Nomor Tiket : $ticketID</li><li>Nama Store : $storeName</li>
							<li>Judul : $subject</li><li>Status : $status</li><li>Ticket Dibuat Tanggal : $ticketDate</li>																		
						</ul><br>Catatan :	<br>$problem<br><br><br>
						<ul>
							<li><b>Apabila pekerjaan sudah selesai, mohon lakukan update status menjadi CLOSED</b></li>

						</ul><br>
						Silahkan Klik Link ini untuk melihatnya : (<a href='http://192.168.10.31/reminder/index.php?view=home&pid=$ticketID&uid=$nikStore'>Click Here</a>)
						<br><br>Regards,<br><br>
						ADMIN SERVICEDESK<hr>";		

						if(!$mail->Send()) 
						{
							/* OFFLINE */
							echo "ERROR !!! ";
						} else {
							/* ONLINE */
							echo "SUCCESSFULLY !!! ";#	exit;
						}								
					}	
				}	
			}elseif($rCekStoreKode->notifemailloop=='7')
			{
				$qCekNotifMailX = mysql_query("SELECT ticket_id, ticketstatus_id, ticket_createdate, 
											   notifemailnumber, notifemaillastdate, notifemailnextdate 
											   FROM ITH_NOTIFEMAILLOOPX WHERE ticket_id='".$rCekStoreKode->ticket_id."'");
				while($rCekNotifMailX = mysql_fetch_object($qCekNotifMailX))
				{	
					if($rCekNotifMailX->notifemailnextdate==$dateNow)
					{
						$notifmailloop_x = $rCekStoreKode->notifemailloop + 1;	
						$notifemaillastdate = date('d/m/Y');$notifemailnextdate = date('d/m/Y', strtotime('today + 7 days'));					
						$qCekNotifEmailReminderDate = mysql_query("SELECT notifemailloop,notifemaillastdate,notifemailnextdate
																   FROM ITH_TICKET_HEADER WHERE ticket_id ='".$rCekStoreKode->ticket_id."'");	
						$rCekNotifEmailReminderDate = mysql_fetch_object($qCekNotifEmailReminderDate);	
						 
						$dateloop2a = DateTime::createFromFormat('d/m/Y',$rCekNotifEmailReminderDate->notifemailnextdate)->format('d-m-Y');
						if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
						$dateloop3a = date_create($dateloop2a);
						date_add($dateloop3a, date_interval_create_from_date_string('+7 days'));
						$dateloop3xa = date_format($dateloop3a, 'd/m/Y');	
						
						$updateData = mysql_query("UPDATE ITH_TICKET_HEADER SET notifemailloop = '".$notifmailloop_x."',
												   notifemaillastdate = '".$rCekNotifEmailReminderDate->notifemailnextdate."', 
												   notifemailnextdate = '".$dateloop3xa."' WHERE ticket_id = '".$rCekStoreKode->ticket_id."' 
												   AND ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' 
												   AND ticket_createby = '".$rCekStoreKode->ticket_createby."'");	
							
						$insDataLog = mysql_query("UPDATE ITH_NOTIFEMAILLOOPX SET notifemailnumber = '".$notifmailloop_x."',
												   notifemaillastdate = '".$notifemaillastdate."', notifemailnextdate = '".$notifemailnextdate."',
												   ticket_notifmessage = 'SEVENTH REMINDER SENDMAIL SUCCESSFULLY SENT !!!'
												   WHERE ticket_id = '".$rCekStoreKode->ticket_id."' AND
												   ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' AND ticket_handleby = '".$rCekStoreKode->ticket_createby."'");		
						
						/** SENDING EMAIL NOTIF REMINDER TO STORE **/
						error_reporting(E_STRICT);
						date_default_timezone_set('America/Toronto');
						require_once('email/class.phpmailer.php');
						$mail             = new PHPMailer();

						$mail->IsSMTP(); $mail->SMTPDebug = 1; $mail->SMTPKeepAlive = false; $mail->SMTPAuth = true;       
						$mail->Mailer  = 'smtp';  $mail->SMTPSecure = 'ssl';$mail->Host  = 'mail.ffi.co.id';     
						#$mail->Host = '117.54.9.179';  #$mail->Host = '192.168.10.10';     
						$mail->Port = 465; $mail->Username = 'system.servicedesk@ffi.co.id'; $mail->Password = 'Kfc_System'; 					

						$storeName = strtoupper($rCekStoreKode->user_realname);
						$ticketID = $rCekStoreKode->ticket_id;
						$subject = $rCekStoreKode->ticket_subject;
						$status = $rCekStoreKode->ticketstatus_name;
						$ticketDate = $rCekStoreKode->ticket_createdate;
						$problem = $rCekStoreKode->ticket_problem;
						$nikStore = $rCekStoreKode->user_nik;
						$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
						$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDUGA');
						$mail->AddCC('mantechno2020@gmail.com', 'MANTECHNO');
						$qCekUsrData = mysql_query("SELECT user_nik,userlevel_id,udept_id FROM ITH_USER 
												    WHERE user_nik = '".$rCekStoreKode->ticket_createby."'");
						$rCekUsrData = mysql_fetch_object($qCekUsrData);	
						if($rCekUsrData->udept_id=='STORE')
						{	
							$mail->Subject    = "[MAIL REMINDER STORE].SEVENTH-REMINDER-TO-$storeName";
						}elseif($rCekUsrData->udept_id!='STORE')
						{						
							$mail->Subject    = "[MAIL REMINDER USER].SEVENTH-REMINDER-TO-$storeName";	
						}
						$mail->AltBody    = "$rCekStoreKode->ticket_subject"; 
						
						$mail->Body .= "									
						<br>Dear Store $storeName,							
						<br>Mohon diupdate status pekerjaan untuk no tiket :<br>
						<ul>
							<li>Nomor Tiket : $ticketID</li><li>Nama Store : $storeName</li>
							<li>Judul : $subject</li><li>Status : $status</li><li>Ticket Dibuat Tanggal : $ticketDate</li>																		
						</ul><br>Catatan :	<br>$problem<br><br><br>
						<ul>
							<li><b>Apabila pekerjaan sudah selesai, mohon lakukan update status menjadi CLOSED</b></li>

						</ul><br>
						Silahkan Klik Link ini untuk melihatnya : (<a href='http://192.168.10.31/reminder/index.php?view=home&pid=$ticketID&uid=$nikStore'>Click Here</a>)
						<br><br>Regards,<br><br>
						ADMIN SERVICEDESK<hr>";		

						if(!$mail->Send()) 
						{
							/* OFFLINE */
							echo "ERROR !!! ";
						} else {
							/* ONLINE */
							echo "SUCCESSFULLY !!! ";#	exit;
						}								
					}	
				}	
			}elseif($rCekStoreKode->notifemailloop=='8')
			{
				$qCekNotifMailX = mysql_query("SELECT ticket_id, ticketstatus_id, ticket_createdate, 
											   notifemailnumber, notifemaillastdate, notifemailnextdate 
											   FROM ITH_NOTIFEMAILLOOPX WHERE ticket_id='".$rCekStoreKode->ticket_id."'");
				while($rCekNotifMailX = mysql_fetch_object($qCekNotifMailX))
				{	
					if($rCekNotifMailX->notifemailnextdate==$dateNow)
					{
						$notifmailloop_x = $rCekStoreKode->notifemailloop + 1;	
						$notifemaillastdate = date('d/m/Y');$notifemailnextdate = date('d/m/Y', strtotime('today + 7 days'));					
						$qCekNotifEmailReminderDate = mysql_query("SELECT notifemailloop,notifemaillastdate,notifemailnextdate
																   FROM ITH_TICKET_HEADER WHERE ticket_id ='".$rCekStoreKode->ticket_id."'");	
						$rCekNotifEmailReminderDate = mysql_fetch_object($qCekNotifEmailReminderDate);	
						 
						$dateloop2a = DateTime::createFromFormat('d/m/Y',$rCekNotifEmailReminderDate->notifemailnextdate)->format('d-m-Y');
						if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
						$dateloop3a = date_create($dateloop2a);
						date_add($dateloop3a, date_interval_create_from_date_string('+7 days'));
						$dateloop3xa = date_format($dateloop3a, 'd/m/Y');	
						
						$updateData = mysql_query("UPDATE ITH_TICKET_HEADER SET notifemailloop = '".$notifmailloop_x."',
												   notifemaillastdate = '".$rCekNotifEmailReminderDate->notifemailnextdate."', 
												   notifemailnextdate = '".$dateloop3xa."' WHERE ticket_id = '".$rCekStoreKode->ticket_id."' 
												   AND ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' 
												   AND ticket_createby = '".$rCekStoreKode->ticket_createby."'");	
							
						$insDataLog = mysql_query("UPDATE ITH_NOTIFEMAILLOOPX SET notifemailnumber = '".$notifmailloop_x."',
												   notifemaillastdate = '".$notifemaillastdate."', notifemailnextdate = '".$notifemailnextdate."',
												   ticket_notifmessage = 'EIGHTH REMINDER SENDMAIL SUCCESSFULLY SENT !!!'
												   WHERE ticket_id = '".$rCekStoreKode->ticket_id."' AND
												   ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' AND ticket_handleby = '".$rCekStoreKode->ticket_createby."'");		
						
						/** SENDING EMAIL NOTIF REMINDER TO STORE **/
						error_reporting(E_STRICT);
						date_default_timezone_set('America/Toronto');
						require_once('email/class.phpmailer.php');
						$mail             = new PHPMailer();

						$mail->IsSMTP(); $mail->SMTPDebug = 1; $mail->SMTPKeepAlive = false; $mail->SMTPAuth = true;       
						$mail->Mailer  = 'smtp';  $mail->SMTPSecure = 'ssl';$mail->Host  = 'mail.ffi.co.id';     
						#$mail->Host = '117.54.9.179';  #$mail->Host = '192.168.10.10';     
						$mail->Port = 465; $mail->Username = 'system.servicedesk@ffi.co.id'; $mail->Password = 'Kfc_System'; 					

						$storeName = strtoupper($rCekStoreKode->user_realname);
						$ticketID = $rCekStoreKode->ticket_id;
						$subject = $rCekStoreKode->ticket_subject;
						$status = $rCekStoreKode->ticketstatus_name;
						$ticketDate = $rCekStoreKode->ticket_createdate;
						$problem = $rCekStoreKode->ticket_problem;
						$nikStore = $rCekStoreKode->user_nik;
						$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
						$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDUGA');
						$mail->AddCC('mantechno2020@gmail.com', 'MANTECHNO');
						$qCekUsrData = mysql_query("SELECT user_nik,userlevel_id,udept_id FROM ITH_USER 
												    WHERE user_nik = '".$rCekStoreKode->ticket_createby."'");
						$rCekUsrData = mysql_fetch_object($qCekUsrData);	
						if($rCekUsrData->udept_id=='STORE')
						{	
							$mail->Subject    = "[MAIL REMINDER STORE].EIGHTH-REMINDER-TO-$storeName";
						}elseif($rCekUsrData->udept_id!='STORE')
						{						
							$mail->Subject    = "[MAIL REMINDER USER].EIGHTH-REMINDER-TO-$storeName";	
						}
						$mail->AltBody    = "$rCekStoreKode->ticket_subject"; 
						
						$mail->Body .= "									
						<br>Dear Store $storeName,							
						<br>Mohon diupdate status pekerjaan untuk no tiket :<br>
						<ul>
							<li>Nomor Tiket : $ticketID</li><li>Nama Store : $storeName</li>
							<li>Judul : $subject</li><li>Status : $status</li><li>Ticket Dibuat Tanggal : $ticketDate</li>																		
						</ul><br>Catatan :	<br>$problem<br><br><br>
						<ul>
							<li><b>Apabila pekerjaan sudah selesai, mohon lakukan update status menjadi CLOSED</b></li>

						</ul><br>
						Silahkan Klik Link ini untuk melihatnya : (<a href='http://192.168.10.31/reminder/index.php?view=home&pid=$ticketID&uid=$nikStore'>Click Here</a>)
						<br><br>Regards,<br><br>
						ADMIN SERVICEDESK<hr>";		

						if(!$mail->Send()) 
						{
							/* OFFLINE */
							echo "ERROR !!! ";
						} else {
							/* ONLINE */
							echo "SUCCESSFULLY !!! ";#	exit;
						}								
					}	
				}	
			}elseif($rCekStoreKode->notifemailloop=='9')
			{
				$qCekNotifMailX = mysql_query("SELECT ticket_id, ticketstatus_id, ticket_createdate, 
											   notifemailnumber, notifemaillastdate, notifemailnextdate 
											   FROM ITH_NOTIFEMAILLOOPX WHERE ticket_id='".$rCekStoreKode->ticket_id."'");
				while($rCekNotifMailX = mysql_fetch_object($qCekNotifMailX))
				{	
					if($rCekNotifMailX->notifemailnextdate==$dateNow)
					{
						$notifmailloop_x = $rCekStoreKode->notifemailloop + 1;	
						$notifemaillastdate = date('d/m/Y');$notifemailnextdate = date('d/m/Y', strtotime('today + 7 days'));					
						$qCekNotifEmailReminderDate = mysql_query("SELECT notifemailloop,notifemaillastdate,notifemailnextdate
																   FROM ITH_TICKET_HEADER WHERE ticket_id ='".$rCekStoreKode->ticket_id."'");	
						$rCekNotifEmailReminderDate = mysql_fetch_object($qCekNotifEmailReminderDate);	
						 
						$dateloop2a = DateTime::createFromFormat('d/m/Y',$rCekNotifEmailReminderDate->notifemailnextdate)->format('d-m-Y');
						if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
						$dateloop3a = date_create($dateloop2a);
						date_add($dateloop3a, date_interval_create_from_date_string('+7 days'));
						$dateloop3xa = date_format($dateloop3a, 'd/m/Y');	
						
						$updateData = mysql_query("UPDATE ITH_TICKET_HEADER SET notifemailloop = '".$notifmailloop_x."',
												   notifemaillastdate = '".$rCekNotifEmailReminderDate->notifemailnextdate."', 
												   notifemailnextdate = '".$dateloop3xa."' WHERE ticket_id = '".$rCekStoreKode->ticket_id."' 
												   AND ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' 
												   AND ticket_createby = '".$rCekStoreKode->ticket_createby."'");	
							
						$insDataLog = mysql_query("UPDATE ITH_NOTIFEMAILLOOPX SET notifemailnumber = '".$notifmailloop_x."',
												   notifemaillastdate = '".$notifemaillastdate."', notifemailnextdate = '".$notifemailnextdate."',
												   ticket_notifmessage = 'NINTH REMINDER SENDMAIL SUCCESSFULLY SENT !!!'
												   WHERE ticket_id = '".$rCekStoreKode->ticket_id."' AND
												   ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' AND ticket_handleby = '".$rCekStoreKode->ticket_createby."'");		
						
						/** SENDING EMAIL NOTIF REMINDER TO STORE **/
						error_reporting(E_STRICT);
						date_default_timezone_set('America/Toronto');
						require_once('email/class.phpmailer.php');
						$mail             = new PHPMailer();

						$mail->IsSMTP(); $mail->SMTPDebug = 1; $mail->SMTPKeepAlive = false; $mail->SMTPAuth = true;       
						$mail->Mailer  = 'smtp';  $mail->SMTPSecure = 'ssl';$mail->Host  = 'mail.ffi.co.id';     
						#$mail->Host = '117.54.9.179';  #$mail->Host = '192.168.10.10';     
						$mail->Port = 465; $mail->Username = 'system.servicedesk@ffi.co.id'; $mail->Password = 'Kfc_System'; 					

						$storeName = strtoupper($rCekStoreKode->user_realname);
						$ticketID = $rCekStoreKode->ticket_id;
						$subject = $rCekStoreKode->ticket_subject;
						$status = $rCekStoreKode->ticketstatus_name;
						$ticketDate = $rCekStoreKode->ticket_createdate;
						$problem = $rCekStoreKode->ticket_problem;
						$nikStore = $rCekStoreKode->user_nik;
						$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
						$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDUGA');
						$mail->AddCC('mantechno2020@gmail.com', 'MANTECHNO');
						$qCekUsrData = mysql_query("SELECT user_nik,userlevel_id,udept_id FROM ITH_USER 
												    WHERE user_nik = '".$rCekStoreKode->ticket_createby."'");
						$rCekUsrData = mysql_fetch_object($qCekUsrData);	
						if($rCekUsrData->udept_id=='STORE')
						{	
							$mail->Subject    = "[MAIL REMINDER STORE].NINTH-REMINDER-TO-$storeName";
						}elseif($rCekUsrData->udept_id!='STORE')
						{						
							$mail->Subject    = "[MAIL REMINDER USER].NINTH-REMINDER-TO-$storeName";	
						}
						$mail->AltBody    = "$rCekStoreKode->ticket_subject"; 
						
						$mail->Body .= "									
						<br>Dear Store $storeName,							
						<br>Mohon diupdate status pekerjaan untuk no tiket :<br>
						<ul>
							<li>Nomor Tiket : $ticketID</li><li>Nama Store : $storeName</li>
							<li>Judul : $subject</li><li>Status : $status</li><li>Ticket Dibuat Tanggal : $ticketDate</li>																		
						</ul><br>Catatan :	<br>$problem<br><br><br>
						<ul>
							<li><b>Apabila pekerjaan sudah selesai, mohon lakukan update status menjadi CLOSED</b></li>

						</ul><br>
						Silahkan Klik Link ini untuk melihatnya : (<a href='http://192.168.10.31/reminder/index.php?view=home&pid=$ticketID&uid=$nikStore'>Click Here</a>)
						<br><br>Regards,<br><br>
						ADMIN SERVICEDESK<hr>";		

						if(!$mail->Send()) 
						{
							/* OFFLINE */
							echo "ERROR !!! ";
						} else {
							/* ONLINE */
							echo "SUCCESSFULLY !!! ";#	exit;
						}								
					}	
				}	
			}elseif($rCekStoreKode->notifemailloop=='10')
			{
				$qCekNotifMailX = mysql_query("SELECT ticket_id, ticketstatus_id, ticket_createdate, 
											   notifemailnumber, notifemaillastdate, notifemailnextdate 
											   FROM ITH_NOTIFEMAILLOOPX WHERE ticket_id='".$rCekStoreKode->ticket_id."'");
				while($rCekNotifMailX = mysql_fetch_object($qCekNotifMailX))
				{	
					if($rCekNotifMailX->notifemailnextdate==$dateNow)
					{
						$notifmailloop_x = $rCekStoreKode->notifemailloop + 1;	
						$notifemaillastdate = date('d/m/Y');$notifemailnextdate = date('d/m/Y', strtotime('today + 7 days'));					
						$qCekNotifEmailReminderDate = mysql_query("SELECT notifemailloop,notifemaillastdate,notifemailnextdate
																   FROM ITH_TICKET_HEADER WHERE ticket_id ='".$rCekStoreKode->ticket_id."'");	
						$rCekNotifEmailReminderDate = mysql_fetch_object($qCekNotifEmailReminderDate);	
						 
						$dateloop2a = DateTime::createFromFormat('d/m/Y',$rCekNotifEmailReminderDate->notifemailnextdate)->format('d-m-Y');
						if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
						$dateloop3a = date_create($dateloop2a);
						date_add($dateloop3a, date_interval_create_from_date_string('+7 days'));
						$dateloop3xa = date_format($dateloop3a, 'd/m/Y');	
						
						$updateData = mysql_query("UPDATE ITH_TICKET_HEADER SET notifemailloop = '".$notifmailloop_x."',
												   notifemaillastdate = '".$rCekNotifEmailReminderDate->notifemailnextdate."', 
												   notifemailnextdate = '".$dateloop3xa."' WHERE ticket_id = '".$rCekStoreKode->ticket_id."' 
												   AND ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' 
												   AND ticket_createby = '".$rCekStoreKode->ticket_createby."'");	
							
						$insDataLog = mysql_query("UPDATE ITH_NOTIFEMAILLOOPX SET notifemailnumber = '".$notifmailloop_x."',
												   notifemaillastdate = '".$notifemaillastdate."', notifemailnextdate = '".$notifemailnextdate."',
												   ticket_notifmessage = 'TENTH REMINDER SENDMAIL SUCCESSFULLY SENT !!!'
												   WHERE ticket_id = '".$rCekStoreKode->ticket_id."' AND
												   ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' AND ticket_handleby = '".$rCekStoreKode->ticket_createby."'");		
						
						/** SENDING EMAIL NOTIF REMINDER TO STORE **/
						error_reporting(E_STRICT);
						date_default_timezone_set('America/Toronto');
						require_once('email/class.phpmailer.php');
						$mail             = new PHPMailer();

						$mail->IsSMTP(); $mail->SMTPDebug = 1; $mail->SMTPKeepAlive = false; $mail->SMTPAuth = true;       
						$mail->Mailer  = 'smtp';  $mail->SMTPSecure = 'ssl';$mail->Host  = 'mail.ffi.co.id';     
						#$mail->Host = '117.54.9.179';  #$mail->Host = '192.168.10.10';     
						$mail->Port = 465; $mail->Username = 'system.servicedesk@ffi.co.id'; $mail->Password = 'Kfc_System'; 					

						$storeName = strtoupper($rCekStoreKode->user_realname);
						$ticketID = $rCekStoreKode->ticket_id;
						$subject = $rCekStoreKode->ticket_subject;
						$status = $rCekStoreKode->ticketstatus_name;
						$ticketDate = $rCekStoreKode->ticket_createdate;
						$problem = $rCekStoreKode->ticket_problem;
						$nikStore = $rCekStoreKode->user_nik;
						$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
						$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDUGA');
						$mail->AddCC('mantechno2020@gmail.com', 'MANTECHNO');
						$qCekUsrData = mysql_query("SELECT user_nik,userlevel_id,udept_id FROM ITH_USER 
												    WHERE user_nik = '".$rCekStoreKode->ticket_createby."'");
						$rCekUsrData = mysql_fetch_object($qCekUsrData);	
						if($rCekUsrData->udept_id=='STORE')
						{	
							$mail->Subject    = "[MAIL REMINDER STORE].TENTH-REMINDER-TO-$storeName";
						}elseif($rCekUsrData->udept_id!='STORE')
						{						
							$mail->Subject    = "[MAIL REMINDER USER].TENTH-REMINDER-TO-$storeName";	
						}
						$mail->AltBody    = "$rCekStoreKode->ticket_subject"; 
						
						$mail->Body .= "									
						<br>Dear Store $storeName,							
						<br>Mohon diupdate status pekerjaan untuk no tiket :<br>
						<ul>
							<li>Nomor Tiket : $ticketID</li><li>Nama Store : $storeName</li>
							<li>Judul : $subject</li><li>Status : $status</li><li>Ticket Dibuat Tanggal : $ticketDate</li>																		
						</ul><br>Catatan :	<br>$problem<br><br><br>
						<ul>
							<li><b>Apabila pekerjaan sudah selesai, mohon lakukan update status menjadi CLOSED</b></li>

						</ul><br>
						Silahkan Klik Link ini untuk melihatnya : (<a href='http://192.168.10.31/reminder/index.php?view=home&pid=$ticketID&uid=$nikStore'>Click Here</a>)
						<br><br>Regards,<br><br>
						ADMIN SERVICEDESK<hr>";		

						if(!$mail->Send()) 
						{
							/* OFFLINE */
							echo "ERROR !!! ";
						} else {
							/* ONLINE */
							echo "SUCCESSFULLY !!! ";#	exit;
						}								
					}	
				}	
			}elseif($rCekStoreKode->notifemailloop=='11')
			{
				$qCekNotifMailX = mysql_query("SELECT ticket_id, ticketstatus_id, ticket_createdate, 
											   notifemailnumber, notifemaillastdate, notifemailnextdate 
											   FROM ITH_NOTIFEMAILLOOPX WHERE ticket_id='".$rCekStoreKode->ticket_id."'");
				while($rCekNotifMailX = mysql_fetch_object($qCekNotifMailX))
				{	
					if($rCekNotifMailX->notifemailnextdate==$dateNow)
					{
						$notifmailloop_x = $rCekStoreKode->notifemailloop + 1;	
						$notifemaillastdate = date('d/m/Y');$notifemailnextdate = date('d/m/Y', strtotime('today + 7 days'));					
						$qCekNotifEmailReminderDate = mysql_query("SELECT notifemailloop,notifemaillastdate,notifemailnextdate
																   FROM ITH_TICKET_HEADER WHERE ticket_id ='".$rCekStoreKode->ticket_id."'");	
						$rCekNotifEmailReminderDate = mysql_fetch_object($qCekNotifEmailReminderDate);	
						 
						$dateloop2a = DateTime::createFromFormat('d/m/Y',$rCekNotifEmailReminderDate->notifemailnextdate)->format('d-m-Y');
						if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
						$dateloop3a = date_create($dateloop2a);
						date_add($dateloop3a, date_interval_create_from_date_string('+7 days'));
						$dateloop3xa = date_format($dateloop3a, 'd/m/Y');	
						
						$updateData = mysql_query("UPDATE ITH_TICKET_HEADER SET notifemailloop = '".$notifmailloop_x."',
												   notifemaillastdate = '".$rCekNotifEmailReminderDate->notifemailnextdate."', 
												   notifemailnextdate = '".$dateloop3xa."' WHERE ticket_id = '".$rCekStoreKode->ticket_id."' 
												   AND ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' 
												   AND ticket_createby = '".$rCekStoreKode->ticket_createby."'");	
							
						$insDataLog = mysql_query("UPDATE ITH_NOTIFEMAILLOOPX SET notifemailnumber = '".$notifmailloop_x."',
												   notifemaillastdate = '".$notifemaillastdate."', notifemailnextdate = '".$notifemailnextdate."',
												   ticket_notifmessage = 'ELEVENTH REMINDER SENDMAIL SUCCESSFULLY SENT !!!'
												   WHERE ticket_id = '".$rCekStoreKode->ticket_id."' AND
												   ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' AND ticket_handleby = '".$rCekStoreKode->ticket_createby."'");		
						
						/** SENDING EMAIL NOTIF REMINDER TO STORE **/
						error_reporting(E_STRICT);
						date_default_timezone_set('America/Toronto');
						require_once('email/class.phpmailer.php');
						$mail             = new PHPMailer();

						$mail->IsSMTP(); $mail->SMTPDebug = 1; $mail->SMTPKeepAlive = false; $mail->SMTPAuth = true;       
						$mail->Mailer  = 'smtp';  $mail->SMTPSecure = 'ssl';$mail->Host  = 'mail.ffi.co.id';     
						#$mail->Host = '117.54.9.179';  #$mail->Host = '192.168.10.10';     
						$mail->Port = 465; $mail->Username = 'system.servicedesk@ffi.co.id'; $mail->Password = 'Kfc_System'; 					

						$storeName = strtoupper($rCekStoreKode->user_realname);
						$ticketID = $rCekStoreKode->ticket_id;
						$subject = $rCekStoreKode->ticket_subject;
						$status = $rCekStoreKode->ticketstatus_name;
						$ticketDate = $rCekStoreKode->ticket_createdate;
						$problem = $rCekStoreKode->ticket_problem;
						$nikStore = $rCekStoreKode->user_nik;
						$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
						$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDUGA');
						$mail->AddCC('mantechno2020@gmail.com', 'MANTECHNO');
						$qCekUsrData = mysql_query("SELECT user_nik,userlevel_id,udept_id FROM ITH_USER 
												    WHERE user_nik = '".$rCekStoreKode->ticket_createby."'");
						$rCekUsrData = mysql_fetch_object($qCekUsrData);	
						if($rCekUsrData->udept_id=='STORE')
						{	
							$mail->Subject    = "[MAIL REMINDER STORE].ELEVENTH-REMINDER-TO-$storeName";
						}elseif($rCekUsrData->udept_id!='STORE')
						{						
							$mail->Subject    = "[MAIL REMINDER USER].ELEVENTH-REMINDER-TO-$storeName";	
						}
						$mail->AltBody    = "$rCekStoreKode->ticket_subject"; 
						
						$mail->Body .= "									
						<br>Dear Store $storeName,							
						<br>Mohon diupdate status pekerjaan untuk no tiket :<br>
						<ul>
							<li>Nomor Tiket : $ticketID</li><li>Nama Store : $storeName</li>
							<li>Judul : $subject</li><li>Status : $status</li><li>Ticket Dibuat Tanggal : $ticketDate</li>																		
						</ul><br>Catatan :	<br>$problem<br><br><br>
						<ul>
							<li><b>Apabila pekerjaan sudah selesai, mohon lakukan update status menjadi CLOSED</b></li>

						</ul><br>
						Silahkan Klik Link ini untuk melihatnya : (<a href='http://192.168.10.31/reminder/index.php?view=home&pid=$ticketID&uid=$nikStore'>Click Here</a>)
						<br><br>Regards,<br><br>
						ADMIN SERVICEDESK<hr>";		

						if(!$mail->Send()) 
						{
							/* OFFLINE */
							echo "ERROR !!! ";
						} else {
							/* ONLINE */
							echo "SUCCESSFULLY !!! ";#	exit;
						}								
					}	
				}	
			}elseif($rCekStoreKode->notifemailloop=='12')
			{
				$qCekNotifMailX = mysql_query("SELECT ticket_id, ticketstatus_id, ticket_createdate, 
											   notifemailnumber, notifemaillastdate, notifemailnextdate 
											   FROM ITH_NOTIFEMAILLOOPX WHERE ticket_id='".$rCekStoreKode->ticket_id."'");
				while($rCekNotifMailX = mysql_fetch_object($qCekNotifMailX))
				{	
					if($rCekNotifMailX->notifemailnextdate==$dateNow)
					{
						$notifmailloop_x = $rCekStoreKode->notifemailloop + 1;	
						$notifemaillastdate = date('d/m/Y');$notifemailnextdate = date('d/m/Y', strtotime('today + 7 days'));					
						$qCekNotifEmailReminderDate = mysql_query("SELECT notifemailloop,notifemaillastdate,notifemailnextdate
																   FROM ITH_TICKET_HEADER WHERE ticket_id ='".$rCekStoreKode->ticket_id."'");	
						$rCekNotifEmailReminderDate = mysql_fetch_object($qCekNotifEmailReminderDate);	
						 
						$dateloop2a = DateTime::createFromFormat('d/m/Y',$rCekNotifEmailReminderDate->notifemailnextdate)->format('d-m-Y');
						if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
						$dateloop3a = date_create($dateloop2a);
						date_add($dateloop3a, date_interval_create_from_date_string('+7 days'));
						$dateloop3xa = date_format($dateloop3a, 'd/m/Y');	
						
						$updateData = mysql_query("UPDATE ITH_TICKET_HEADER SET notifemailloop = '".$notifmailloop_x."',
												   notifemaillastdate = '".$rCekNotifEmailReminderDate->notifemailnextdate."', 
												   notifemailnextdate = '".$dateloop3xa."' WHERE ticket_id = '".$rCekStoreKode->ticket_id."' 
												   AND ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' 
												   AND ticket_createby = '".$rCekStoreKode->ticket_createby."'");	
							
						$insDataLog = mysql_query("UPDATE ITH_NOTIFEMAILLOOPX SET notifemailnumber = '".$notifmailloop_x."',
												   notifemaillastdate = '".$notifemaillastdate."', notifemailnextdate = '".$notifemailnextdate."',
												   ticket_notifmessage = 'TWELFTH REMINDER SENDMAIL SUCCESSFULLY SENT !!!'
												   WHERE ticket_id = '".$rCekStoreKode->ticket_id."' AND
												   ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' AND ticket_handleby = '".$rCekStoreKode->ticket_createby."'");		
						
						/** SENDING EMAIL NOTIF REMINDER TO STORE **/
						error_reporting(E_STRICT);
						date_default_timezone_set('America/Toronto');
						require_once('email/class.phpmailer.php');
						$mail             = new PHPMailer();

						$mail->IsSMTP(); $mail->SMTPDebug = 1; $mail->SMTPKeepAlive = false; $mail->SMTPAuth = true;       
						$mail->Mailer  = 'smtp';  $mail->SMTPSecure = 'ssl';$mail->Host  = 'mail.ffi.co.id';     
						#$mail->Host = '117.54.9.179';  #$mail->Host = '192.168.10.10';     
						$mail->Port = 465; $mail->Username = 'system.servicedesk@ffi.co.id'; $mail->Password = 'Kfc_System'; 					

						$storeName = strtoupper($rCekStoreKode->user_realname);
						$ticketID = $rCekStoreKode->ticket_id;
						$subject = $rCekStoreKode->ticket_subject;
						$status = $rCekStoreKode->ticketstatus_name;
						$ticketDate = $rCekStoreKode->ticket_createdate;
						$problem = $rCekStoreKode->ticket_problem;
						$nikStore = $rCekStoreKode->user_nik;
						$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
						$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDUGA');
						$mail->AddCC('mantechno2020@gmail.com', 'MANTECHNO');
						$qCekUsrData = mysql_query("SELECT user_nik,userlevel_id,udept_id FROM ITH_USER 
												    WHERE user_nik = '".$rCekStoreKode->ticket_createby."'");
						$rCekUsrData = mysql_fetch_object($qCekUsrData);	
						if($rCekUsrData->udept_id=='STORE')
						{	
							$mail->Subject    = "[MAIL REMINDER STORE].TWELFTH-REMINDER-TO-$storeName";
						}elseif($rCekUsrData->udept_id!='STORE')
						{						
							$mail->Subject    = "[MAIL REMINDER USER].TWELFTH-REMINDER-TO-$storeName";	
						}
						$mail->AltBody    = "$rCekStoreKode->ticket_subject"; 
						
						$mail->Body .= "									
						<br>Dear Store $storeName,							
						<br>Mohon diupdate status pekerjaan untuk no tiket :<br>
						<ul>
							<li>Nomor Tiket : $ticketID</li><li>Nama Store : $storeName</li>
							<li>Judul : $subject</li><li>Status : $status</li><li>Ticket Dibuat Tanggal : $ticketDate</li>																		
						</ul><br>Catatan :	<br>$problem<br><br><br>
						<ul>
							<li><b>Apabila pekerjaan sudah selesai, mohon lakukan update status menjadi CLOSED</b></li>

						</ul><br>
						Silahkan Klik Link ini untuk melihatnya : (<a href='http://192.168.10.31/reminder/index.php?view=home&pid=$ticketID&uid=$nikStore'>Click Here</a>)
						<br><br>Regards,<br><br>
						ADMIN SERVICEDESK<hr>";		

						if(!$mail->Send()) 
						{
							/* OFFLINE */
							echo "ERROR !!! ";
						} else {
							/* ONLINE */
							echo "SUCCESSFULLY !!! ";#	exit;
						}								
					}	
				}	
			}elseif($rCekStoreKode->notifemailloop=='13')
			{
				$qCekNotifMailX = mysql_query("SELECT ticket_id, ticketstatus_id, ticket_createdate, 
											   notifemailnumber, notifemaillastdate, notifemailnextdate 
											   FROM ITH_NOTIFEMAILLOOPX WHERE ticket_id='".$rCekStoreKode->ticket_id."'");
				while($rCekNotifMailX = mysql_fetch_object($qCekNotifMailX))
				{	
					if($rCekNotifMailX->notifemailnextdate==$dateNow)
					{
						$notifmailloop_x = $rCekStoreKode->notifemailloop + 1;	
						$notifemaillastdate = date('d/m/Y');$notifemailnextdate = date('d/m/Y', strtotime('today + 7 days'));					
						$qCekNotifEmailReminderDate = mysql_query("SELECT notifemailloop,notifemaillastdate,notifemailnextdate
																   FROM ITH_TICKET_HEADER WHERE ticket_id ='".$rCekStoreKode->ticket_id."'");	
						$rCekNotifEmailReminderDate = mysql_fetch_object($qCekNotifEmailReminderDate);	
						 
						$dateloop2a = DateTime::createFromFormat('d/m/Y',$rCekNotifEmailReminderDate->notifemailnextdate)->format('d-m-Y');
						if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
						$dateloop3a = date_create($dateloop2a);
						date_add($dateloop3a, date_interval_create_from_date_string('+7 days'));
						$dateloop3xa = date_format($dateloop3a, 'd/m/Y');	
						
						$updateData = mysql_query("UPDATE ITH_TICKET_HEADER SET notifemailloop = '".$notifmailloop_x."',
												   notifemaillastdate = '".$rCekNotifEmailReminderDate->notifemailnextdate."', 
												   notifemailnextdate = '".$dateloop3xa."' WHERE ticket_id = '".$rCekStoreKode->ticket_id."' 
												   AND ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' 
												   AND ticket_createby = '".$rCekStoreKode->ticket_createby."'");	
							
						$insDataLog = mysql_query("UPDATE ITH_NOTIFEMAILLOOPX SET notifemailnumber = '".$notifmailloop_x."',
												   notifemaillastdate = '".$notifemaillastdate."', notifemailnextdate = '".$notifemailnextdate."',
												   ticket_notifmessage = 'THIRTEENTH REMINDER SENDMAIL SUCCESSFULLY SENT !!!'
												   WHERE ticket_id = '".$rCekStoreKode->ticket_id."' AND
												   ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' AND ticket_handleby = '".$rCekStoreKode->ticket_createby."'");		
						
						/** SENDING EMAIL NOTIF REMINDER TO STORE **/
						error_reporting(E_STRICT);
						date_default_timezone_set('America/Toronto');
						require_once('email/class.phpmailer.php');
						$mail             = new PHPMailer();

						$mail->IsSMTP(); $mail->SMTPDebug = 1; $mail->SMTPKeepAlive = false; $mail->SMTPAuth = true;       
						$mail->Mailer  = 'smtp';  $mail->SMTPSecure = 'ssl';$mail->Host  = 'mail.ffi.co.id';     
						#$mail->Host = '117.54.9.179';  #$mail->Host = '192.168.10.10';     
						$mail->Port = 465; $mail->Username = 'system.servicedesk@ffi.co.id'; $mail->Password = 'Kfc_System'; 					

						$storeName = strtoupper($rCekStoreKode->user_realname);
						$ticketID = $rCekStoreKode->ticket_id;
						$subject = $rCekStoreKode->ticket_subject;
						$status = $rCekStoreKode->ticketstatus_name;
						$ticketDate = $rCekStoreKode->ticket_createdate;
						$problem = $rCekStoreKode->ticket_problem;
						$nikStore = $rCekStoreKode->user_nik;
						$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
						$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDUGA');
						$mail->AddCC('mantechno2020@gmail.com', 'MANTECHNO');
						$qCekUsrData = mysql_query("SELECT user_nik,userlevel_id,udept_id FROM ITH_USER 
												    WHERE user_nik = '".$rCekStoreKode->ticket_createby."'");
						$rCekUsrData = mysql_fetch_object($qCekUsrData);	
						if($rCekUsrData->udept_id=='STORE')
						{	
							$mail->Subject    = "[MAIL REMINDER STORE].THIRTEENTH-REMINDER-TO-$storeName";
						}elseif($rCekUsrData->udept_id!='STORE')
						{						
							$mail->Subject    = "[MAIL REMINDER USER].THIRTEENTH-REMINDER-TO-$storeName";	
						}
						$mail->AltBody    = "$rCekStoreKode->ticket_subject"; 
						
						$mail->Body .= "									
						<br>Dear Store $storeName,							
						<br>Mohon diupdate status pekerjaan untuk no tiket :<br>
						<ul>
							<li>Nomor Tiket : $ticketID</li><li>Nama Store : $storeName</li>
							<li>Judul : $subject</li><li>Status : $status</li><li>Ticket Dibuat Tanggal : $ticketDate</li>																		
						</ul><br>Catatan :	<br>$problem<br><br><br>
						<ul>
							<li><b>Apabila pekerjaan sudah selesai, mohon lakukan update status menjadi CLOSED</b></li>

						</ul><br>
						Silahkan Klik Link ini untuk melihatnya : (<a href='http://192.168.10.31/reminder/index.php?view=home&pid=$ticketID&uid=$nikStore'>Click Here</a>)
						<br><br>Regards,<br><br>
						ADMIN SERVICEDESK<hr>";		

						if(!$mail->Send()) 
						{
							/* OFFLINE */
							echo "ERROR !!! ";
						} else {
							/* ONLINE */
							echo "SUCCESSFULLY !!! ";#	exit;
						}								
					}	
				}	
			}elseif($rCekStoreKode->notifemailloop=='14')
			{
				$qCekNotifMailX = mysql_query("SELECT ticket_id, ticketstatus_id, ticket_createdate, 
											   notifemailnumber, notifemaillastdate, notifemailnextdate 
											   FROM ITH_NOTIFEMAILLOOPX WHERE ticket_id='".$rCekStoreKode->ticket_id."'");
				while($rCekNotifMailX = mysql_fetch_object($qCekNotifMailX))
				{	
					if($rCekNotifMailX->notifemailnextdate==$dateNow)
					{
						$notifmailloop_x = $rCekStoreKode->notifemailloop + 1;	
						$notifemaillastdate = date('d/m/Y');$notifemailnextdate = date('d/m/Y', strtotime('today + 7 days'));					
						$qCekNotifEmailReminderDate = mysql_query("SELECT notifemailloop,notifemaillastdate,notifemailnextdate
																   FROM ITH_TICKET_HEADER WHERE ticket_id ='".$rCekStoreKode->ticket_id."'");	
						$rCekNotifEmailReminderDate = mysql_fetch_object($qCekNotifEmailReminderDate);	
						 
						$dateloop2a = DateTime::createFromFormat('d/m/Y',$rCekNotifEmailReminderDate->notifemailnextdate)->format('d-m-Y');
						if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
						$dateloop3a = date_create($dateloop2a);
						date_add($dateloop3a, date_interval_create_from_date_string('+7 days'));
						$dateloop3xa = date_format($dateloop3a, 'd/m/Y');	
						
						$updateData = mysql_query("UPDATE ITH_TICKET_HEADER SET notifemailloop = '".$notifmailloop_x."',
												   notifemaillastdate = '".$rCekNotifEmailReminderDate->notifemailnextdate."', 
												   notifemailnextdate = '".$dateloop3xa."' WHERE ticket_id = '".$rCekStoreKode->ticket_id."' 
												   AND ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' 
												   AND ticket_createby = '".$rCekStoreKode->ticket_createby."'");	
							
						$insDataLog = mysql_query("UPDATE ITH_NOTIFEMAILLOOPX SET notifemailnumber = '".$notifmailloop_x."',
												   notifemaillastdate = '".$notifemaillastdate."', notifemailnextdate = '".$notifemailnextdate."',
												   ticket_notifmessage = 'FOURTEENTH REMINDER SENDMAIL SUCCESSFULLY SENT !!!'
												   WHERE ticket_id = '".$rCekStoreKode->ticket_id."' AND
												   ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' AND ticket_handleby = '".$rCekStoreKode->ticket_createby."'");		
						
						/** SENDING EMAIL NOTIF REMINDER TO STORE **/
						error_reporting(E_STRICT);
						date_default_timezone_set('America/Toronto');
						require_once('email/class.phpmailer.php');
						$mail             = new PHPMailer();

						$mail->IsSMTP(); $mail->SMTPDebug = 1; $mail->SMTPKeepAlive = false; $mail->SMTPAuth = true;       
						$mail->Mailer  = 'smtp';  $mail->SMTPSecure = 'ssl';$mail->Host  = 'mail.ffi.co.id';     
						#$mail->Host = '117.54.9.179';  #$mail->Host = '192.168.10.10';     
						$mail->Port = 465; $mail->Username = 'system.servicedesk@ffi.co.id'; $mail->Password = 'Kfc_System'; 					

						$storeName = strtoupper($rCekStoreKode->user_realname);
						$ticketID = $rCekStoreKode->ticket_id;
						$subject = $rCekStoreKode->ticket_subject;
						$status = $rCekStoreKode->ticketstatus_name;
						$ticketDate = $rCekStoreKode->ticket_createdate;
						$problem = $rCekStoreKode->ticket_problem;
						$nikStore = $rCekStoreKode->user_nik;
						$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
						$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDUGA');
						$mail->AddCC('mantechno2020@gmail.com', 'MANTECHNO');
						$qCekUsrData = mysql_query("SELECT user_nik,userlevel_id,udept_id FROM ITH_USER 
												    WHERE user_nik = '".$rCekStoreKode->ticket_createby."'");
						$rCekUsrData = mysql_fetch_object($qCekUsrData);	
						if($rCekUsrData->udept_id=='STORE')
						{	
							$mail->Subject    = "[MAIL REMINDER STORE].FOURTEENTH-REMINDER-TO-$storeName";
						}elseif($rCekUsrData->udept_id!='STORE')
						{						
							$mail->Subject    = "[MAIL REMINDER USER].FOURTEENTH-REMINDER-TO-$storeName";	
						}
						$mail->AltBody    = "$rCekStoreKode->ticket_subject"; 
						
						$mail->Body .= "									
						<br>Dear Store $storeName,							
						<br>Mohon diupdate status pekerjaan untuk no tiket :<br>
						<ul>
							<li>Nomor Tiket : $ticketID</li><li>Nama Store : $storeName</li>
							<li>Judul : $subject</li><li>Status : $status</li><li>Ticket Dibuat Tanggal : $ticketDate</li>																		
						</ul><br>Catatan :	<br>$problem<br><br><br>
						<ul>
							<li><b>Apabila pekerjaan sudah selesai, mohon lakukan update status menjadi CLOSED</b></li>

						</ul><br>
						Silahkan Klik Link ini untuk melihatnya : (<a href='http://192.168.10.31/reminder/index.php?view=home&pid=$ticketID&uid=$nikStore'>Click Here</a>)
						<br><br>Regards,<br><br>
						ADMIN SERVICEDESK<hr>";		

						if(!$mail->Send()) 
						{
							/* OFFLINE */
							echo "ERROR !!! ";
						} else {
							/* ONLINE */
							echo "SUCCESSFULLY !!! ";#	exit;
						}								
					}	
				}	
			}elseif($rCekStoreKode->notifemailloop=='15')
			{
				$qCekNotifMailX = mysql_query("SELECT ticket_id, ticketstatus_id, ticket_createdate, 
											   notifemailnumber, notifemaillastdate, notifemailnextdate 
											   FROM ITH_NOTIFEMAILLOOPX WHERE ticket_id='".$rCekStoreKode->ticket_id."'");
				while($rCekNotifMailX = mysql_fetch_object($qCekNotifMailX))
				{	
					if($rCekNotifMailX->notifemailnextdate==$dateNow)
					{
						$notifmailloop_x = $rCekStoreKode->notifemailloop + 1;	
						$notifemaillastdate = date('d/m/Y');$notifemailnextdate = date('d/m/Y', strtotime('today + 7 days'));					
						$qCekNotifEmailReminderDate = mysql_query("SELECT notifemailloop,notifemaillastdate,notifemailnextdate
																   FROM ITH_TICKET_HEADER WHERE ticket_id ='".$rCekStoreKode->ticket_id."'");	
						$rCekNotifEmailReminderDate = mysql_fetch_object($qCekNotifEmailReminderDate);	
						 
						$dateloop2a = DateTime::createFromFormat('d/m/Y',$rCekNotifEmailReminderDate->notifemailnextdate)->format('d-m-Y');
						if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
						$dateloop3a = date_create($dateloop2a);
						date_add($dateloop3a, date_interval_create_from_date_string('+7 days'));
						$dateloop3xa = date_format($dateloop3a, 'd/m/Y');	
						
						$updateData = mysql_query("UPDATE ITH_TICKET_HEADER SET notifemailloop = '".$notifmailloop_x."',
												   notifemaillastdate = '".$rCekNotifEmailReminderDate->notifemailnextdate."', 
												   notifemailnextdate = '".$dateloop3xa."' WHERE ticket_id = '".$rCekStoreKode->ticket_id."' 
												   AND ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' 
												   AND ticket_createby = '".$rCekStoreKode->ticket_createby."'");	
							
						$insDataLog = mysql_query("UPDATE ITH_NOTIFEMAILLOOPX SET notifemailnumber = '".$notifmailloop_x."',
												   notifemaillastdate = '".$notifemaillastdate."', notifemailnextdate = '".$notifemailnextdate."',
												   ticket_notifmessage = 'FIFTEENTH REMINDER SENDMAIL SUCCESSFULLY SENT !!!'
												   WHERE ticket_id = '".$rCekStoreKode->ticket_id."' AND
												   ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' AND ticket_handleby = '".$rCekStoreKode->ticket_createby."'");		
						
						/** SENDING EMAIL NOTIF REMINDER TO STORE **/
						error_reporting(E_STRICT);
						date_default_timezone_set('America/Toronto');
						require_once('email/class.phpmailer.php');
						$mail             = new PHPMailer();

						$mail->IsSMTP(); $mail->SMTPDebug = 1; $mail->SMTPKeepAlive = false; $mail->SMTPAuth = true;       
						$mail->Mailer  = 'smtp';  $mail->SMTPSecure = 'ssl';$mail->Host  = 'mail.ffi.co.id';     
						#$mail->Host = '117.54.9.179';  #$mail->Host = '192.168.10.10';     
						$mail->Port = 465; $mail->Username = 'system.servicedesk@ffi.co.id'; $mail->Password = 'Kfc_System'; 					

						$storeName = strtoupper($rCekStoreKode->user_realname);
						$ticketID = $rCekStoreKode->ticket_id;
						$subject = $rCekStoreKode->ticket_subject;
						$status = $rCekStoreKode->ticketstatus_name;
						$ticketDate = $rCekStoreKode->ticket_createdate;
						$problem = $rCekStoreKode->ticket_problem;
						$nikStore = $rCekStoreKode->user_nik;
						$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
						$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDUGA');
						$mail->AddCC('mantechno2020@gmail.com', 'MANTECHNO');
						$qCekUsrData = mysql_query("SELECT user_nik,userlevel_id,udept_id FROM ITH_USER 
												    WHERE user_nik = '".$rCekStoreKode->ticket_createby."'");
						$rCekUsrData = mysql_fetch_object($qCekUsrData);	
						if($rCekUsrData->udept_id=='STORE')
						{	
							$mail->Subject    = "[MAIL REMINDER STORE].FIFTEENTH-REMINDER-TO-$storeName";
						}elseif($rCekUsrData->udept_id!='STORE')
						{						
							$mail->Subject    = "[MAIL REMINDER USER].FIFTEENTH-REMINDER-TO-$storeName";	
						}
						$mail->AltBody    = "$rCekStoreKode->ticket_subject"; 
						
						$mail->Body .= "									
						<br>Dear Store $storeName,							
						<br>Mohon diupdate status pekerjaan untuk no tiket :<br>
						<ul>
							<li>Nomor Tiket : $ticketID</li><li>Nama Store : $storeName</li>
							<li>Judul : $subject</li><li>Status : $status</li><li>Ticket Dibuat Tanggal : $ticketDate</li>																		
						</ul><br>Catatan :	<br>$problem<br><br><br>
						<ul>
							<li><b>Apabila pekerjaan sudah selesai, mohon lakukan update status menjadi CLOSED</b></li>

						</ul><br>
						Silahkan Klik Link ini untuk melihatnya : (<a href='http://192.168.10.31/reminder/index.php?view=home&pid=$ticketID&uid=$nikStore'>Click Here</a>)
						<br><br>Regards,<br><br>
						ADMIN SERVICEDESK<hr>";		

						if(!$mail->Send()) 
						{
							/* OFFLINE */
							echo "ERROR !!! ";
						} else {
							/* ONLINE */
							echo "SUCCESSFULLY !!! ";#	exit;
						}								
					}	
				}	
			}elseif($rCekStoreKode->notifemailloop=='16')
			{
				$qCekNotifMailX = mysql_query("SELECT ticket_id, ticketstatus_id, ticket_createdate, 
											   notifemailnumber, notifemaillastdate, notifemailnextdate 
											   FROM ITH_NOTIFEMAILLOOPX WHERE ticket_id='".$rCekStoreKode->ticket_id."'");
				while($rCekNotifMailX = mysql_fetch_object($qCekNotifMailX))
				{	
					if($rCekNotifMailX->notifemailnextdate==$dateNow)
					{
						$notifmailloop_x = $rCekStoreKode->notifemailloop + 1;	
						$notifemaillastdate = date('d/m/Y');$notifemailnextdate = date('d/m/Y', strtotime('today + 7 days'));					
						$qCekNotifEmailReminderDate = mysql_query("SELECT notifemailloop,notifemaillastdate,notifemailnextdate
																   FROM ITH_TICKET_HEADER WHERE ticket_id ='".$rCekStoreKode->ticket_id."'");	
						$rCekNotifEmailReminderDate = mysql_fetch_object($qCekNotifEmailReminderDate);	
						 
						$dateloop2a = DateTime::createFromFormat('d/m/Y',$rCekNotifEmailReminderDate->notifemailnextdate)->format('d-m-Y');
						if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
						$dateloop3a = date_create($dateloop2a);
						date_add($dateloop3a, date_interval_create_from_date_string('+7 days'));
						$dateloop3xa = date_format($dateloop3a, 'd/m/Y');	
						
						$updateData = mysql_query("UPDATE ITH_TICKET_HEADER SET notifemailloop = '".$notifmailloop_x."',
												   notifemaillastdate = '".$rCekNotifEmailReminderDate->notifemailnextdate."', 
												   notifemailnextdate = '".$dateloop3xa."' WHERE ticket_id = '".$rCekStoreKode->ticket_id."' 
												   AND ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' 
												   AND ticket_createby = '".$rCekStoreKode->ticket_createby."'");	
							
						$insDataLog = mysql_query("UPDATE ITH_NOTIFEMAILLOOPX SET notifemailnumber = '".$notifmailloop_x."',
												   notifemaillastdate = '".$notifemaillastdate."', notifemailnextdate = '".$notifemailnextdate."',
												   ticket_notifmessage = 'SIXTEENTH REMINDER SENDMAIL SUCCESSFULLY SENT !!!'
												   WHERE ticket_id = '".$rCekStoreKode->ticket_id."' AND
												   ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' AND ticket_handleby = '".$rCekStoreKode->ticket_createby."'");		
						
						/** SENDING EMAIL NOTIF REMINDER TO STORE **/
						error_reporting(E_STRICT);
						date_default_timezone_set('America/Toronto');
						require_once('email/class.phpmailer.php');
						$mail             = new PHPMailer();

						$mail->IsSMTP(); $mail->SMTPDebug = 1; $mail->SMTPKeepAlive = false; $mail->SMTPAuth = true;       
						$mail->Mailer  = 'smtp';  $mail->SMTPSecure = 'ssl';$mail->Host  = 'mail.ffi.co.id';     
						#$mail->Host = '117.54.9.179';  #$mail->Host = '192.168.10.10';     
						$mail->Port = 465; $mail->Username = 'system.servicedesk@ffi.co.id'; $mail->Password = 'Kfc_System'; 					

						$storeName = strtoupper($rCekStoreKode->user_realname);
						$ticketID = $rCekStoreKode->ticket_id;
						$subject = $rCekStoreKode->ticket_subject;
						$status = $rCekStoreKode->ticketstatus_name;
						$ticketDate = $rCekStoreKode->ticket_createdate;
						$problem = $rCekStoreKode->ticket_problem;
						$nikStore = $rCekStoreKode->user_nik;
						$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
						$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDUGA');
						$mail->AddCC('mantechno2020@gmail.com', 'MANTECHNO');
						$qCekUsrData = mysql_query("SELECT user_nik,userlevel_id,udept_id FROM ITH_USER 
												    WHERE user_nik = '".$rCekStoreKode->ticket_createby."'");
						$rCekUsrData = mysql_fetch_object($qCekUsrData);	
						if($rCekUsrData->udept_id=='STORE')
						{	
							$mail->Subject    = "[MAIL REMINDER STORE].SIXTEENTH-REMINDER-TO-$storeName";
						}elseif($rCekUsrData->udept_id!='STORE')
						{						
							$mail->Subject    = "[MAIL REMINDER USER].SIXTEENTH-REMINDER-TO-$storeName";	
						}
						$mail->AltBody    = "$rCekStoreKode->ticket_subject"; 
						
						$mail->Body .= "									
						<br>Dear Store $storeName,							
						<br>Mohon diupdate status pekerjaan untuk no tiket :<br>
						<ul>
							<li>Nomor Tiket : $ticketID</li><li>Nama Store : $storeName</li>
							<li>Judul : $subject</li><li>Status : $status</li><li>Ticket Dibuat Tanggal : $ticketDate</li>																		
						</ul><br>Catatan :	<br>$problem<br><br><br>
						<ul>
							<li><b>Apabila pekerjaan sudah selesai, mohon lakukan update status menjadi CLOSED</b></li>

						</ul><br>
						Silahkan Klik Link ini untuk melihatnya : (<a href='http://192.168.10.31/reminder/index.php?view=home&pid=$ticketID&uid=$nikStore'>Click Here</a>)
						<br><br>Regards,<br><br>
						ADMIN SERVICEDESK<hr>";		

						if(!$mail->Send()) 
						{
							/* OFFLINE */
							echo "ERROR !!! ";
						} else {
							/* ONLINE */
							echo "SUCCESSFULLY !!! ";#	exit;
						}								
					}	
				}	
			}elseif($rCekStoreKode->notifemailloop=='17')
			{
				$qCekNotifMailX = mysql_query("SELECT ticket_id, ticketstatus_id, ticket_createdate, 
											   notifemailnumber, notifemaillastdate, notifemailnextdate 
											   FROM ITH_NOTIFEMAILLOOPX WHERE ticket_id='".$rCekStoreKode->ticket_id."'");
				while($rCekNotifMailX = mysql_fetch_object($qCekNotifMailX))
				{	
					if($rCekNotifMailX->notifemailnextdate==$dateNow)
					{
						$notifmailloop_x = $rCekStoreKode->notifemailloop + 1;	
						$notifemaillastdate = date('d/m/Y');$notifemailnextdate = date('d/m/Y', strtotime('today + 7 days'));					
						$qCekNotifEmailReminderDate = mysql_query("SELECT notifemailloop,notifemaillastdate,notifemailnextdate
																   FROM ITH_TICKET_HEADER WHERE ticket_id ='".$rCekStoreKode->ticket_id."'");	
						$rCekNotifEmailReminderDate = mysql_fetch_object($qCekNotifEmailReminderDate);	
						 
						$dateloop2a = DateTime::createFromFormat('d/m/Y',$rCekNotifEmailReminderDate->notifemailnextdate)->format('d-m-Y');
						if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
						$dateloop3a = date_create($dateloop2a);
						date_add($dateloop3a, date_interval_create_from_date_string('+7 days'));
						$dateloop3xa = date_format($dateloop3a, 'd/m/Y');	
						
						$updateData = mysql_query("UPDATE ITH_TICKET_HEADER SET notifemailloop = '".$notifmailloop_x."',
												   notifemaillastdate = '".$rCekNotifEmailReminderDate->notifemailnextdate."', 
												   notifemailnextdate = '".$dateloop3xa."' WHERE ticket_id = '".$rCekStoreKode->ticket_id."' 
												   AND ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' 
												   AND ticket_createby = '".$rCekStoreKode->ticket_createby."'");	
							
						$insDataLog = mysql_query("UPDATE ITH_NOTIFEMAILLOOPX SET notifemailnumber = '".$notifmailloop_x."',
												   notifemaillastdate = '".$notifemaillastdate."', notifemailnextdate = '".$notifemailnextdate."',
												   ticket_notifmessage = 'SEVENTEENTH REMINDER SENDMAIL SUCCESSFULLY SENT !!!'
												   WHERE ticket_id = '".$rCekStoreKode->ticket_id."' AND
												   ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' AND ticket_handleby = '".$rCekStoreKode->ticket_createby."'");		
						
						/** SENDING EMAIL NOTIF REMINDER TO STORE **/
						error_reporting(E_STRICT);
						date_default_timezone_set('America/Toronto');
						require_once('email/class.phpmailer.php');
						$mail             = new PHPMailer();

						$mail->IsSMTP(); $mail->SMTPDebug = 1; $mail->SMTPKeepAlive = false; $mail->SMTPAuth = true;       
						$mail->Mailer  = 'smtp';  $mail->SMTPSecure = 'ssl';$mail->Host  = 'mail.ffi.co.id';     
						#$mail->Host = '117.54.9.179';  #$mail->Host = '192.168.10.10';     
						$mail->Port = 465; $mail->Username = 'system.servicedesk@ffi.co.id'; $mail->Password = 'Kfc_System'; 					

						$storeName = strtoupper($rCekStoreKode->user_realname);
						$ticketID = $rCekStoreKode->ticket_id;
						$subject = $rCekStoreKode->ticket_subject;
						$status = $rCekStoreKode->ticketstatus_name;
						$ticketDate = $rCekStoreKode->ticket_createdate;
						$problem = $rCekStoreKode->ticket_problem;
						$nikStore = $rCekStoreKode->user_nik;
						$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
						$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDUGA');
						$mail->AddCC('mantechno2020@gmail.com', 'MANTECHNO');
						$qCekUsrData = mysql_query("SELECT user_nik,userlevel_id,udept_id FROM ITH_USER 
												    WHERE user_nik = '".$rCekStoreKode->ticket_createby."'");
						$rCekUsrData = mysql_fetch_object($qCekUsrData);	
						if($rCekUsrData->udept_id=='STORE')
						{	
							$mail->Subject    = "[MAIL REMINDER STORE].SEVENTEENTH-REMINDER-TO-$storeName";
						}elseif($rCekUsrData->udept_id!='STORE')
						{						
							$mail->Subject    = "[MAIL REMINDER USER].SEVENTEENTH-REMINDER-TO-$storeName";	
						}
						$mail->AltBody    = "$rCekStoreKode->ticket_subject"; 
						
						$mail->Body .= "									
						<br>Dear Store $storeName,							
						<br>Mohon diupdate status pekerjaan untuk no tiket :<br>
						<ul>
							<li>Nomor Tiket : $ticketID</li><li>Nama Store : $storeName</li>
							<li>Judul : $subject</li><li>Status : $status</li><li>Ticket Dibuat Tanggal : $ticketDate</li>																		
						</ul><br>Catatan :	<br>$problem<br><br><br>
						<ul>
							<li><b>Apabila pekerjaan sudah selesai, mohon lakukan update status menjadi CLOSED</b></li>

						</ul><br>
						Silahkan Klik Link ini untuk melihatnya : (<a href='http://192.168.10.31/reminder/index.php?view=home&pid=$ticketID&uid=$nikStore'>Click Here</a>)
						<br><br>Regards,<br><br>
						ADMIN SERVICEDESK<hr>";		

						if(!$mail->Send()) 
						{
							/* OFFLINE */
							echo "ERROR !!! ";
						} else {
							/* ONLINE */
							echo "SUCCESSFULLY !!! ";#	exit;
						}								
					}	
				}	
			}elseif($rCekStoreKode->notifemailloop=='18')
			{
				$qCekNotifMailX = mysql_query("SELECT ticket_id, ticketstatus_id, ticket_createdate, 
											   notifemailnumber, notifemaillastdate, notifemailnextdate 
											   FROM ITH_NOTIFEMAILLOOPX WHERE ticket_id='".$rCekStoreKode->ticket_id."'");
				while($rCekNotifMailX = mysql_fetch_object($qCekNotifMailX))
				{	
					if($rCekNotifMailX->notifemailnextdate==$dateNow)
					{
						$notifmailloop_x = $rCekStoreKode->notifemailloop + 1;	
						$notifemaillastdate = date('d/m/Y');$notifemailnextdate = date('d/m/Y', strtotime('today + 7 days'));					
						$qCekNotifEmailReminderDate = mysql_query("SELECT notifemailloop,notifemaillastdate,notifemailnextdate
																   FROM ITH_TICKET_HEADER WHERE ticket_id ='".$rCekStoreKode->ticket_id."'");	
						$rCekNotifEmailReminderDate = mysql_fetch_object($qCekNotifEmailReminderDate);	
						 
						$dateloop2a = DateTime::createFromFormat('d/m/Y',$rCekNotifEmailReminderDate->notifemailnextdate)->format('d-m-Y');
						if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
						$dateloop3a = date_create($dateloop2a);
						date_add($dateloop3a, date_interval_create_from_date_string('+7 days'));
						$dateloop3xa = date_format($dateloop3a, 'd/m/Y');	
						
						$updateData = mysql_query("UPDATE ITH_TICKET_HEADER SET notifemailloop = '".$notifmailloop_x."',
												   notifemaillastdate = '".$rCekNotifEmailReminderDate->notifemailnextdate."', 
												   notifemailnextdate = '".$dateloop3xa."' WHERE ticket_id = '".$rCekStoreKode->ticket_id."' 
												   AND ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' 
												   AND ticket_createby = '".$rCekStoreKode->ticket_createby."'");	
							
						$insDataLog = mysql_query("UPDATE ITH_NOTIFEMAILLOOPX SET notifemailnumber = '".$notifmailloop_x."',
												   notifemaillastdate = '".$notifemaillastdate."', notifemailnextdate = '".$notifemailnextdate."',
												   ticket_notifmessage = 'EIGHTEENTH REMINDER SENDMAIL SUCCESSFULLY SENT !!!'
												   WHERE ticket_id = '".$rCekStoreKode->ticket_id."' AND
												   ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' AND ticket_handleby = '".$rCekStoreKode->ticket_createby."'");		
						
						/** SENDING EMAIL NOTIF REMINDER TO STORE **/
						error_reporting(E_STRICT);
						date_default_timezone_set('America/Toronto');
						require_once('email/class.phpmailer.php');
						$mail             = new PHPMailer();

						$mail->IsSMTP(); $mail->SMTPDebug = 1; $mail->SMTPKeepAlive = false; $mail->SMTPAuth = true;       
						$mail->Mailer  = 'smtp';  $mail->SMTPSecure = 'ssl';$mail->Host  = 'mail.ffi.co.id';     
						#$mail->Host = '117.54.9.179';  #$mail->Host = '192.168.10.10';     
						$mail->Port = 465; $mail->Username = 'system.servicedesk@ffi.co.id'; $mail->Password = 'Kfc_System'; 					

						$storeName = strtoupper($rCekStoreKode->user_realname);
						$ticketID = $rCekStoreKode->ticket_id;
						$subject = $rCekStoreKode->ticket_subject;
						$status = $rCekStoreKode->ticketstatus_name;
						$ticketDate = $rCekStoreKode->ticket_createdate;
						$problem = $rCekStoreKode->ticket_problem;
						$nikStore = $rCekStoreKode->user_nik;
						$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
						$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDUGA');
						$mail->AddCC('mantechno2020@gmail.com', 'MANTECHNO');
						$qCekUsrData = mysql_query("SELECT user_nik,userlevel_id,udept_id FROM ITH_USER 
												    WHERE user_nik = '".$rCekStoreKode->ticket_createby."'");
						$rCekUsrData = mysql_fetch_object($qCekUsrData);	
						if($rCekUsrData->udept_id=='STORE')
						{	
							$mail->Subject    = "[MAIL REMINDER STORE].EIGHTEENTH-REMINDER-TO-$storeName";
						}elseif($rCekUsrData->udept_id!='STORE')
						{						
							$mail->Subject    = "[MAIL REMINDER USER].EIGHTEENTH-REMINDER-TO-$storeName";	
						}
						$mail->AltBody    = "$rCekStoreKode->ticket_subject"; 
						
						$mail->Body .= "									
						<br>Dear Store $storeName,							
						<br>Mohon diupdate status pekerjaan untuk no tiket :<br>
						<ul>
							<li>Nomor Tiket : $ticketID</li><li>Nama Store : $storeName</li>
							<li>Judul : $subject</li><li>Status : $status</li><li>Ticket Dibuat Tanggal : $ticketDate</li>																		
						</ul><br>Catatan :	<br>$problem<br><br><br>
						<ul>
							<li><b>Apabila pekerjaan sudah selesai, mohon lakukan update status menjadi CLOSED</b></li>

						</ul><br>
						Silahkan Klik Link ini untuk melihatnya : (<a href='http://192.168.10.31/reminder/index.php?view=home&pid=$ticketID&uid=$nikStore'>Click Here</a>)
						<br><br>Regards,<br><br>
						ADMIN SERVICEDESK<hr>";		

						if(!$mail->Send()) 
						{
							/* OFFLINE */
							echo "ERROR !!! ";
						} else {
							/* ONLINE */
							echo "SUCCESSFULLY !!! ";#	exit;
						}								
					}	
				}	
			}elseif($rCekStoreKode->notifemailloop=='19')
			{
				$qCekNotifMailX = mysql_query("SELECT ticket_id, ticketstatus_id, ticket_createdate, 
											   notifemailnumber, notifemaillastdate, notifemailnextdate 
											   FROM ITH_NOTIFEMAILLOOPX WHERE ticket_id='".$rCekStoreKode->ticket_id."'");
				while($rCekNotifMailX = mysql_fetch_object($qCekNotifMailX))
				{	
					if($rCekNotifMailX->notifemailnextdate==$dateNow)
					{
						$notifmailloop_x = $rCekStoreKode->notifemailloop + 1;	
						$notifemaillastdate = date('d/m/Y');$notifemailnextdate = date('d/m/Y', strtotime('today + 7 days'));					
						$qCekNotifEmailReminderDate = mysql_query("SELECT notifemailloop,notifemaillastdate,notifemailnextdate
																   FROM ITH_TICKET_HEADER WHERE ticket_id ='".$rCekStoreKode->ticket_id."'");	
						$rCekNotifEmailReminderDate = mysql_fetch_object($qCekNotifEmailReminderDate);	
						 
						$dateloop2a = DateTime::createFromFormat('d/m/Y',$rCekNotifEmailReminderDate->notifemailnextdate)->format('d-m-Y');
						if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
						$dateloop3a = date_create($dateloop2a);
						date_add($dateloop3a, date_interval_create_from_date_string('+7 days'));
						$dateloop3xa = date_format($dateloop3a, 'd/m/Y');	
						
						$updateData = mysql_query("UPDATE ITH_TICKET_HEADER SET notifemailloop = '".$notifmailloop_x."',
												   notifemaillastdate = '".$rCekNotifEmailReminderDate->notifemailnextdate."', 
												   notifemailnextdate = '".$dateloop3xa."' WHERE ticket_id = '".$rCekStoreKode->ticket_id."' 
												   AND ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' 
												   AND ticket_createby = '".$rCekStoreKode->ticket_createby."'");	
							
						$insDataLog = mysql_query("UPDATE ITH_NOTIFEMAILLOOPX SET notifemailnumber = '".$notifmailloop_x."',
												   notifemaillastdate = '".$notifemaillastdate."', notifemailnextdate = '".$notifemailnextdate."',
												   ticket_notifmessage = 'NINTEENTH REMINDER SENDMAIL SUCCESSFULLY SENT !!!'
												   WHERE ticket_id = '".$rCekStoreKode->ticket_id."' AND
												   ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' AND ticket_handleby = '".$rCekStoreKode->ticket_createby."'");		
						
						/** SENDING EMAIL NOTIF REMINDER TO STORE **/
						error_reporting(E_STRICT);
						date_default_timezone_set('America/Toronto');
						require_once('email/class.phpmailer.php');
						$mail             = new PHPMailer();

						$mail->IsSMTP(); $mail->SMTPDebug = 1; $mail->SMTPKeepAlive = false; $mail->SMTPAuth = true;       
						$mail->Mailer  = 'smtp';  $mail->SMTPSecure = 'ssl';$mail->Host  = 'mail.ffi.co.id';     
						#$mail->Host = '117.54.9.179';  #$mail->Host = '192.168.10.10';     
						$mail->Port = 465; $mail->Username = 'system.servicedesk@ffi.co.id'; $mail->Password = 'Kfc_System'; 					

						$storeName = strtoupper($rCekStoreKode->user_realname);
						$ticketID = $rCekStoreKode->ticket_id;
						$subject = $rCekStoreKode->ticket_subject;
						$status = $rCekStoreKode->ticketstatus_name;
						$ticketDate = $rCekStoreKode->ticket_createdate;
						$problem = $rCekStoreKode->ticket_problem;
						$nikStore = $rCekStoreKode->user_nik;
						$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
						$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDUGA');
						$mail->AddCC('mantechno2020@gmail.com', 'MANTECHNO');
						$qCekUsrData = mysql_query("SELECT user_nik,userlevel_id,udept_id FROM ITH_USER 
												    WHERE user_nik = '".$rCekStoreKode->ticket_createby."'");
						$rCekUsrData = mysql_fetch_object($qCekUsrData);	
						if($rCekUsrData->udept_id=='STORE')
						{	
							$mail->Subject    = "[MAIL REMINDER STORE].NINTEENTH-REMINDER-TO-$storeName";
						}elseif($rCekUsrData->udept_id!='STORE')
						{						
							$mail->Subject    = "[MAIL REMINDER USER].NINTEENTH-REMINDER-TO-$storeName";	
						}
						$mail->AltBody    = "$rCekStoreKode->ticket_subject"; 
						
						$mail->Body .= "									
						<br>Dear Store $storeName,							
						<br>Mohon diupdate status pekerjaan untuk no tiket :<br>
						<ul>
							<li>Nomor Tiket : $ticketID</li><li>Nama Store : $storeName</li>
							<li>Judul : $subject</li><li>Status : $status</li><li>Ticket Dibuat Tanggal : $ticketDate</li>																		
						</ul><br>Catatan :	<br>$problem<br><br><br>
						<ul>
							<li><b>Apabila pekerjaan sudah selesai, mohon lakukan update status menjadi CLOSED</b></li>

						</ul><br>
						Silahkan Klik Link ini untuk melihatnya : (<a href='http://192.168.10.31/reminder/index.php?view=home&pid=$ticketID&uid=$nikStore'>Click Here</a>)
						<br><br>Regards,<br><br>
						ADMIN SERVICEDESK<hr>";		

						if(!$mail->Send()) 
						{
							/* OFFLINE */
							echo "ERROR !!! ";
						} else {
							/* ONLINE */
							echo "SUCCESSFULLY !!! ";#	exit;
						}								
					}	
				}	
			}elseif($rCekStoreKode->notifemailloop=='20')
			{
				$qCekNotifMailX = mysql_query("SELECT ticket_id, ticketstatus_id, ticket_createdate, 
											   notifemailnumber, notifemaillastdate, notifemailnextdate 
											   FROM ITH_NOTIFEMAILLOOPX WHERE ticket_id='".$rCekStoreKode->ticket_id."'");
				while($rCekNotifMailX = mysql_fetch_object($qCekNotifMailX))
				{	
					if($rCekNotifMailX->notifemailnextdate==$dateNow)
					{
						$notifmailloop_x = $rCekStoreKode->notifemailloop + 1;	
						$notifemaillastdate = date('d/m/Y');$notifemailnextdate = date('d/m/Y', strtotime('today + 7 days'));					
						$qCekNotifEmailReminderDate = mysql_query("SELECT notifemailloop,notifemaillastdate,notifemailnextdate
																   FROM ITH_TICKET_HEADER WHERE ticket_id ='".$rCekStoreKode->ticket_id."'");	
						$rCekNotifEmailReminderDate = mysql_fetch_object($qCekNotifEmailReminderDate);	
						 
						$dateloop2a = DateTime::createFromFormat('d/m/Y',$rCekNotifEmailReminderDate->notifemailnextdate)->format('d-m-Y');
						if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
						$dateloop3a = date_create($dateloop2a);
						date_add($dateloop3a, date_interval_create_from_date_string('+7 days'));
						$dateloop3xa = date_format($dateloop3a, 'd/m/Y');	
						
						$updateData = mysql_query("UPDATE ITH_TICKET_HEADER SET notifemailloop = '".$notifmailloop_x."',
												   notifemaillastdate = '".$rCekNotifEmailReminderDate->notifemailnextdate."', 
												   notifemailnextdate = '".$dateloop3xa."' WHERE ticket_id = '".$rCekStoreKode->ticket_id."' 
												   AND ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' 
												   AND ticket_createby = '".$rCekStoreKode->ticket_createby."'");	
							
						$insDataLog = mysql_query("UPDATE ITH_NOTIFEMAILLOOPX SET notifemailnumber = '".$notifmailloop_x."',
												   notifemaillastdate = '".$notifemaillastdate."', notifemailnextdate = '".$notifemailnextdate."',
												   ticket_notifmessage = 'TWENTIETH REMINDER SENDMAIL SUCCESSFULLY SENT !!!'
												   WHERE ticket_id = '".$rCekStoreKode->ticket_id."' AND
												   ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' AND ticket_handleby = '".$rCekStoreKode->ticket_createby."'");		
						
						/** SENDING EMAIL NOTIF REMINDER TO STORE **/
						error_reporting(E_STRICT);
						date_default_timezone_set('America/Toronto');
						require_once('email/class.phpmailer.php');
						$mail             = new PHPMailer();

						$mail->IsSMTP(); $mail->SMTPDebug = 1; $mail->SMTPKeepAlive = false; $mail->SMTPAuth = true;       
						$mail->Mailer  = 'smtp';  $mail->SMTPSecure = 'ssl';$mail->Host  = 'mail.ffi.co.id';     
						#$mail->Host = '117.54.9.179';  #$mail->Host = '192.168.10.10';     
						$mail->Port = 465; $mail->Username = 'system.servicedesk@ffi.co.id'; $mail->Password = 'Kfc_System'; 					

						$storeName = strtoupper($rCekStoreKode->user_realname);
						$ticketID = $rCekStoreKode->ticket_id;
						$subject = $rCekStoreKode->ticket_subject;
						$status = $rCekStoreKode->ticketstatus_name;
						$ticketDate = $rCekStoreKode->ticket_createdate;
						$problem = $rCekStoreKode->ticket_problem;
						$nikStore = $rCekStoreKode->user_nik;
						$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
						$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDUGA');
						$mail->AddCC('mantechno2020@gmail.com', 'MANTECHNO');
						$qCekUsrData = mysql_query("SELECT user_nik,userlevel_id,udept_id FROM ITH_USER 
												    WHERE user_nik = '".$rCekStoreKode->ticket_createby."'");
						$rCekUsrData = mysql_fetch_object($qCekUsrData);	
						if($rCekUsrData->udept_id=='STORE')
						{	
							$mail->Subject    = "[MAIL REMINDER STORE].TWENTIETH-REMINDER-TO-$storeName";
						}elseif($rCekUsrData->udept_id!='STORE')
						{						
							$mail->Subject    = "[MAIL REMINDER USER].TWENTIETH-REMINDER-TO-$storeName";	
						}
						$mail->AltBody    = "$rCekStoreKode->ticket_subject"; 
						
						$mail->Body .= "									
						<br>Dear Store $storeName,							
						<br>Mohon diupdate status pekerjaan untuk no tiket :<br>
						<ul>
							<li>Nomor Tiket : $ticketID</li><li>Nama Store : $storeName</li>
							<li>Judul : $subject</li><li>Status : $status</li><li>Ticket Dibuat Tanggal : $ticketDate</li>																		
						</ul><br>Catatan :	<br>$problem<br><br><br>
						<ul>
							<li><b>Apabila pekerjaan sudah selesai, mohon lakukan update status menjadi CLOSED</b></li>

						</ul><br>
						Silahkan Klik Link ini untuk melihatnya : (<a href='http://192.168.10.31/reminder/index.php?view=home&pid=$ticketID&uid=$nikStore'>Click Here</a>)
						<br><br>Regards,<br><br>
						ADMIN SERVICEDESK<hr>";		

						if(!$mail->Send()) 
						{
							/* OFFLINE */
							echo "ERROR !!! ";
						} else {
							/* ONLINE */
							echo "SUCCESSFULLY !!! ";#	exit;
						}								
					}	
				}	
			}elseif($rCekStoreKode->notifemailloop=='21')
			{
				$qCekNotifMailX = mysql_query("SELECT ticket_id, ticketstatus_id, ticket_createdate, 
											   notifemailnumber, notifemaillastdate, notifemailnextdate 
											   FROM ITH_NOTIFEMAILLOOPX WHERE ticket_id='".$rCekStoreKode->ticket_id."'");
				while($rCekNotifMailX = mysql_fetch_object($qCekNotifMailX))
				{	
					if($rCekNotifMailX->notifemailnextdate==$dateNow)
					{
						$notifmailloop_x = $rCekStoreKode->notifemailloop + 1;	
						$notifemaillastdate = date('d/m/Y');$notifemailnextdate = date('d/m/Y', strtotime('today + 7 days'));					
						$qCekNotifEmailReminderDate = mysql_query("SELECT notifemailloop,notifemaillastdate,notifemailnextdate
																   FROM ITH_TICKET_HEADER WHERE ticket_id ='".$rCekStoreKode->ticket_id."'");	
						$rCekNotifEmailReminderDate = mysql_fetch_object($qCekNotifEmailReminderDate);	
						 
						$dateloop2a = DateTime::createFromFormat('d/m/Y',$rCekNotifEmailReminderDate->notifemailnextdate)->format('d-m-Y');
						if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
						$dateloop3a = date_create($dateloop2a);
						date_add($dateloop3a, date_interval_create_from_date_string('+7 days'));
						$dateloop3xa = date_format($dateloop3a, 'd/m/Y');	
						
						$updateData = mysql_query("UPDATE ITH_TICKET_HEADER SET notifemailloop = '".$notifmailloop_x."',
												   notifemaillastdate = '".$rCekNotifEmailReminderDate->notifemailnextdate."', 
												   notifemailnextdate = '".$dateloop3xa."' WHERE ticket_id = '".$rCekStoreKode->ticket_id."' 
												   AND ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' 
												   AND ticket_createby = '".$rCekStoreKode->ticket_createby."'");	
							
						$insDataLog = mysql_query("UPDATE ITH_NOTIFEMAILLOOPX SET notifemailnumber = '".$notifmailloop_x."',
												   notifemaillastdate = '".$notifemaillastdate."', notifemailnextdate = '".$notifemailnextdate."',
												   ticket_notifmessage = 'TWENTY FIRST REMINDER SENDMAIL SUCCESSFULLY SENT !!!'
												   WHERE ticket_id = '".$rCekStoreKode->ticket_id."' AND
												   ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' AND ticket_handleby = '".$rCekStoreKode->ticket_createby."'");		
						
						/** SENDING EMAIL NOTIF REMINDER TO STORE **/
						error_reporting(E_STRICT);
						date_default_timezone_set('America/Toronto');
						require_once('email/class.phpmailer.php');
						$mail             = new PHPMailer();

						$mail->IsSMTP(); $mail->SMTPDebug = 1; $mail->SMTPKeepAlive = false; $mail->SMTPAuth = true;       
						$mail->Mailer  = 'smtp';  $mail->SMTPSecure = 'ssl';$mail->Host  = 'mail.ffi.co.id';     
						#$mail->Host = '117.54.9.179';  #$mail->Host = '192.168.10.10';     
						$mail->Port = 465; $mail->Username = 'system.servicedesk@ffi.co.id'; $mail->Password = 'Kfc_System'; 					

						$storeName = strtoupper($rCekStoreKode->user_realname);
						$ticketID = $rCekStoreKode->ticket_id;
						$subject = $rCekStoreKode->ticket_subject;
						$status = $rCekStoreKode->ticketstatus_name;
						$ticketDate = $rCekStoreKode->ticket_createdate;
						$problem = $rCekStoreKode->ticket_problem;
						$nikStore = $rCekStoreKode->user_nik;
						$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
						$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDUGA');
						$mail->AddCC('mantechno2020@gmail.com', 'MANTECHNO');
						$qCekUsrData = mysql_query("SELECT user_nik,userlevel_id,udept_id FROM ITH_USER 
												    WHERE user_nik = '".$rCekStoreKode->ticket_createby."'");
						$rCekUsrData = mysql_fetch_object($qCekUsrData);	
						if($rCekUsrData->udept_id=='STORE')
						{	
							$mail->Subject    = "[MAIL REMINDER STORE].TWENTY-FIRST-REMINDER-TO-$storeName";
						}elseif($rCekUsrData->udept_id!='STORE')
						{						
							$mail->Subject    = "[MAIL REMINDER USER].TWENTY-FIRST-REMINDER-TO-$storeName";	
							$mail->AltBody    = "$rCekStoreKode->ticket_subject"; 
							
							$mail->Body .= "									
							<br>Dear Store $storeName,							
							<br>Mohon diupdate status pekerjaan untuk no tiket :<br>
							<ul>
								<li>Nomor Tiket : $ticketID</li><li>Nama Store : $storeName</li>
								<li>Judul : $subject</li><li>Status : $status</li><li>Ticket Dibuat Tanggal : $ticketDate</li>																		
							</ul><br>Catatan :	<br>$problem<br><br><br>
							<ul>
								<li><b>Apabila pekerjaan sudah selesai, mohon lakukan update status menjadi CLOSED</b></li>

							</ul><br>
							Silahkan Klik Link ini untuk melihatnya : (<a href='http://192.168.10.31/reminder/index.php?view=home&pid=$ticketID&uid=$nikStore'>Click Here</a>)
							<br><br>Regards,<br><br>
							ADMIN SERVICEDESK<hr>";		

							if(!$mail->Send()) 
							{
								/* OFFLINE */
								echo "ERROR !!! ";
							} else {
								/* ONLINE */
								echo "SUCCESSFULLY !!! ";#	exit;
							}								
						}	
					}	
				}	
			}elseif($rCekStoreKode->notifemailloop=='22')
			{
				$qCekNotifMailX = mysql_query("SELECT ticket_id, ticketstatus_id, ticket_createdate, 
											   notifemailnumber, notifemaillastdate, notifemailnextdate 
											   FROM ITH_NOTIFEMAILLOOPX WHERE ticket_id='".$rCekStoreKode->ticket_id."'");
				while($rCekNotifMailX = mysql_fetch_object($qCekNotifMailX))
				{	
					if($rCekNotifMailX->notifemailnextdate==$dateNow)
					{
						$notifmailloop_x = $rCekStoreKode->notifemailloop + 1;	
						$notifemaillastdate = date('d/m/Y');$notifemailnextdate = date('d/m/Y', strtotime('today + 7 days'));					
						$qCekNotifEmailReminderDate = mysql_query("SELECT notifemailloop,notifemaillastdate,notifemailnextdate
																   FROM ITH_TICKET_HEADER WHERE ticket_id ='".$rCekStoreKode->ticket_id."'");	
						$rCekNotifEmailReminderDate = mysql_fetch_object($qCekNotifEmailReminderDate);	
						 
						$dateloop2a = DateTime::createFromFormat('d/m/Y',$rCekNotifEmailReminderDate->notifemailnextdate)->format('d-m-Y');
						if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
						$dateloop3a = date_create($dateloop2a);
						date_add($dateloop3a, date_interval_create_from_date_string('+7 days'));
						$dateloop3xa = date_format($dateloop3a, 'd/m/Y');	
						
						$updateData = mysql_query("UPDATE ITH_TICKET_HEADER SET notifemailloop = '".$notifmailloop_x."',
												   notifemaillastdate = '".$rCekNotifEmailReminderDate->notifemailnextdate."', 
												   notifemailnextdate = '".$dateloop3xa."' WHERE ticket_id = '".$rCekStoreKode->ticket_id."' 
												   AND ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' 
												   AND ticket_createby = '".$rCekStoreKode->ticket_createby."'");	
							
						$insDataLog = mysql_query("UPDATE ITH_NOTIFEMAILLOOPX SET notifemailnumber = '".$notifmailloop_x."',
												   notifemaillastdate = '".$notifemaillastdate."', notifemailnextdate = '".$notifemailnextdate."',
												   ticket_notifmessage = 'TWENTY SECOND REMINDER SENDMAIL SUCCESSFULLY SENT !!!'
												   WHERE ticket_id = '".$rCekStoreKode->ticket_id."' AND
												   ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' AND ticket_handleby = '".$rCekStoreKode->ticket_createby."'");		
						
						/** SENDING EMAIL NOTIF REMINDER TO STORE **/
						error_reporting(E_STRICT);
						date_default_timezone_set('America/Toronto');
						require_once('email/class.phpmailer.php');
						$mail             = new PHPMailer();

						$mail->IsSMTP(); $mail->SMTPDebug = 1; $mail->SMTPKeepAlive = false; $mail->SMTPAuth = true;       
						$mail->Mailer  = 'smtp';  $mail->SMTPSecure = 'ssl';$mail->Host  = 'mail.ffi.co.id';     
						#$mail->Host = '117.54.9.179';  #$mail->Host = '192.168.10.10';     
						$mail->Port = 465; $mail->Username = 'system.servicedesk@ffi.co.id'; $mail->Password = 'Kfc_System'; 					

						$storeName = strtoupper($rCekStoreKode->user_realname);
						$ticketID = $rCekStoreKode->ticket_id;
						$subject = $rCekStoreKode->ticket_subject;
						$status = $rCekStoreKode->ticketstatus_name;
						$ticketDate = $rCekStoreKode->ticket_createdate;
						$problem = $rCekStoreKode->ticket_problem;
						$nikStore = $rCekStoreKode->user_nik;
						$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
						$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDUGA');
						$mail->AddCC('mantechno2020@gmail.com', 'MANTECHNO');
						$qCekUsrData = mysql_query("SELECT user_nik,userlevel_id,udept_id FROM ITH_USER 
												    WHERE user_nik = '".$rCekStoreKode->ticket_createby."'");
						$rCekUsrData = mysql_fetch_object($qCekUsrData);	
						if($rCekUsrData->udept_id=='STORE')
						{	
							$mail->Subject    = "[MAIL REMINDER STORE].TWENTY-SECOND-REMINDER-TO-$storeName";
						}elseif($rCekUsrData->udept_id!='STORE')
						{						
							$mail->Subject    = "[MAIL REMINDER USER].TWENTY-SECOND-REMINDER-TO-$storeName";	
						}
						$mail->AltBody    = "$rCekStoreKode->ticket_subject"; 
						
						$mail->Body .= "									
						<br>Dear Store $storeName,							
						<br>Mohon diupdate status pekerjaan untuk no tiket :<br>
						<ul>
							<li>Nomor Tiket : $ticketID</li><li>Nama Store : $storeName</li>
							<li>Judul : $subject</li><li>Status : $status</li><li>Ticket Dibuat Tanggal : $ticketDate</li>																		
						</ul><br>Catatan :	<br>$problem<br><br><br>
						<ul>
							<li><b>Apabila pekerjaan sudah selesai, mohon lakukan update status menjadi CLOSED</b></li>

						</ul><br>
						Silahkan Klik Link ini untuk melihatnya : (<a href='http://192.168.10.31/reminder/index.php?view=home&pid=$ticketID&uid=$nikStore'>Click Here</a>)
						<br><br>Regards,<br><br>
						ADMIN SERVICEDESK<hr>";		

						if(!$mail->Send()) 
						{
							/* OFFLINE */
							echo "ERROR !!! ";
						} else {
							/* ONLINE */
							echo "SUCCESSFULLY !!! ";#	exit;
						}								
					}	
				}	
			}elseif($rCekStoreKode->notifemailloop=='23')
			{
				$qCekNotifMailX = mysql_query("SELECT ticket_id, ticketstatus_id, ticket_createdate, 
											   notifemailnumber, notifemaillastdate, notifemailnextdate 
											   FROM ITH_NOTIFEMAILLOOPX WHERE ticket_id='".$rCekStoreKode->ticket_id."'");
				while($rCekNotifMailX = mysql_fetch_object($qCekNotifMailX))
				{	
					if($rCekNotifMailX->notifemailnextdate==$dateNow)
					{
						$notifmailloop_x = $rCekStoreKode->notifemailloop + 1;	
						$notifemaillastdate = date('d/m/Y');$notifemailnextdate = date('d/m/Y', strtotime('today + 7 days'));					
						$qCekNotifEmailReminderDate = mysql_query("SELECT notifemailloop,notifemaillastdate,notifemailnextdate
																   FROM ITH_TICKET_HEADER WHERE ticket_id ='".$rCekStoreKode->ticket_id."'");	
						$rCekNotifEmailReminderDate = mysql_fetch_object($qCekNotifEmailReminderDate);	
						 
						$dateloop2a = DateTime::createFromFormat('d/m/Y',$rCekNotifEmailReminderDate->notifemailnextdate)->format('d-m-Y');
						if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
						$dateloop3a = date_create($dateloop2a);
						date_add($dateloop3a, date_interval_create_from_date_string('+7 days'));
						$dateloop3xa = date_format($dateloop3a, 'd/m/Y');	
						
						$updateData = mysql_query("UPDATE ITH_TICKET_HEADER SET notifemailloop = '".$notifmailloop_x."',
												   notifemaillastdate = '".$rCekNotifEmailReminderDate->notifemailnextdate."', 
												   notifemailnextdate = '".$dateloop3xa."' WHERE ticket_id = '".$rCekStoreKode->ticket_id."' 
												   AND ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' 
												   AND ticket_createby = '".$rCekStoreKode->ticket_createby."'");	
							
						$insDataLog = mysql_query("UPDATE ITH_NOTIFEMAILLOOPX SET notifemailnumber = '".$notifmailloop_x."',
												   notifemaillastdate = '".$notifemaillastdate."', notifemailnextdate = '".$notifemailnextdate."',
												   ticket_notifmessage = 'TWENTY THIRD REMINDER SENDMAIL SUCCESSFULLY SENT !!!'
												   WHERE ticket_id = '".$rCekStoreKode->ticket_id."' AND
												   ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' AND ticket_handleby = '".$rCekStoreKode->ticket_createby."'");		
						
						/** SENDING EMAIL NOTIF REMINDER TO STORE **/
						error_reporting(E_STRICT);
						date_default_timezone_set('America/Toronto');
						require_once('email/class.phpmailer.php');
						$mail             = new PHPMailer();

						$mail->IsSMTP(); $mail->SMTPDebug = 1; $mail->SMTPKeepAlive = false; $mail->SMTPAuth = true;       
						$mail->Mailer  = 'smtp';  $mail->SMTPSecure = 'ssl';$mail->Host  = 'mail.ffi.co.id';     
						#$mail->Host = '117.54.9.179';  #$mail->Host = '192.168.10.10';     
						$mail->Port = 465; $mail->Username = 'system.servicedesk@ffi.co.id'; $mail->Password = 'Kfc_System'; 					

						$storeName = strtoupper($rCekStoreKode->user_realname);
						$ticketID = $rCekStoreKode->ticket_id;
						$subject = $rCekStoreKode->ticket_subject;
						$status = $rCekStoreKode->ticketstatus_name;
						$ticketDate = $rCekStoreKode->ticket_createdate;
						$problem = $rCekStoreKode->ticket_problem;
						$nikStore = $rCekStoreKode->user_nik;
						$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
						$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDUGA');
						$mail->AddCC('mantechno2020@gmail.com', 'MANTECHNO');
						$qCekUsrData = mysql_query("SELECT user_nik,userlevel_id,udept_id FROM ITH_USER 
												    WHERE user_nik = '".$rCekStoreKode->ticket_createby."'");
						$rCekUsrData = mysql_fetch_object($qCekUsrData);	
						if($rCekUsrData->udept_id=='STORE')
						{	
							$mail->Subject    = "[MAIL REMINDER STORE].TWENTY-THIRD-REMINDER-TO-$storeName";
						}elseif($rCekUsrData->udept_id!='STORE')
						{						
							$mail->Subject    = "[MAIL REMINDER USER].TWENTY-THIRD-REMINDER-TO-$storeName";	
						}
						$mail->AltBody    = "$rCekStoreKode->ticket_subject"; 
						
						$mail->Body .= "									
						<br>Dear Store $storeName,							
						<br>Mohon diupdate status pekerjaan untuk no tiket :<br>
						<ul>
							<li>Nomor Tiket : $ticketID</li><li>Nama Store : $storeName</li>
							<li>Judul : $subject</li><li>Status : $status</li><li>Ticket Dibuat Tanggal : $ticketDate</li>																		
						</ul><br>Catatan :	<br>$problem<br><br><br>
						<ul>
							<li><b>Apabila pekerjaan sudah selesai, mohon lakukan update status menjadi CLOSED</b></li>

						</ul><br>
						Silahkan Klik Link ini untuk melihatnya : (<a href='http://192.168.10.31/reminder/index.php?view=home&pid=$ticketID&uid=$nikStore'>Click Here</a>)
						<br><br>Regards,<br><br>
						ADMIN SERVICEDESK<hr>";		

						if(!$mail->Send()) 
						{
							/* OFFLINE */
							echo "ERROR !!! ";
						} else {
							/* ONLINE */
							echo "SUCCESSFULLY !!! ";#	exit;
						}								
					}	
				}	
			}elseif($rCekStoreKode->notifemailloop=='24')
			{
				$qCekNotifMailX = mysql_query("SELECT ticket_id, ticketstatus_id, ticket_createdate, 
											   notifemailnumber, notifemaillastdate, notifemailnextdate 
											   FROM ITH_NOTIFEMAILLOOPX WHERE ticket_id='".$rCekStoreKode->ticket_id."'");
				while($rCekNotifMailX = mysql_fetch_object($qCekNotifMailX))
				{	
					if($rCekNotifMailX->notifemailnextdate==$dateNow)
					{
						$notifmailloop_x = $rCekStoreKode->notifemailloop + 1;	
						$notifemaillastdate = date('d/m/Y');$notifemailnextdate = date('d/m/Y', strtotime('today + 7 days'));					
						$qCekNotifEmailReminderDate = mysql_query("SELECT notifemailloop,notifemaillastdate,notifemailnextdate
																   FROM ITH_TICKET_HEADER WHERE ticket_id ='".$rCekStoreKode->ticket_id."'");	
						$rCekNotifEmailReminderDate = mysql_fetch_object($qCekNotifEmailReminderDate);	
						 
						$dateloop2a = DateTime::createFromFormat('d/m/Y',$rCekNotifEmailReminderDate->notifemailnextdate)->format('d-m-Y');
						if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
						$dateloop3a = date_create($dateloop2a);
						date_add($dateloop3a, date_interval_create_from_date_string('+7 days'));
						$dateloop3xa = date_format($dateloop3a, 'd/m/Y');	
						
						$updateData = mysql_query("UPDATE ITH_TICKET_HEADER SET notifemailloop = '".$notifmailloop_x."',
												   notifemaillastdate = '".$rCekNotifEmailReminderDate->notifemailnextdate."', 
												   notifemailnextdate = '".$dateloop3xa."' WHERE ticket_id = '".$rCekStoreKode->ticket_id."' 
												   AND ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' 
												   AND ticket_createby = '".$rCekStoreKode->ticket_createby."'");	
							
						$insDataLog = mysql_query("UPDATE ITH_NOTIFEMAILLOOPX SET notifemailnumber = '".$notifmailloop_x."',
												   notifemaillastdate = '".$notifemaillastdate."', notifemailnextdate = '".$notifemailnextdate."',
												   ticket_notifmessage = 'TWENTY FOURTH REMINDER SENDMAIL SUCCESSFULLY SENT !!!'
												   WHERE ticket_id = '".$rCekStoreKode->ticket_id."' AND
												   ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' AND ticket_handleby = '".$rCekStoreKode->ticket_createby."'");		
						
						/** SENDING EMAIL NOTIF REMINDER TO STORE **/
						error_reporting(E_STRICT);
						date_default_timezone_set('America/Toronto');
						require_once('email/class.phpmailer.php');
						$mail             = new PHPMailer();

						$mail->IsSMTP(); $mail->SMTPDebug = 1; $mail->SMTPKeepAlive = false; $mail->SMTPAuth = true;       
						$mail->Mailer  = 'smtp';  $mail->SMTPSecure = 'ssl';$mail->Host  = 'mail.ffi.co.id';     
						#$mail->Host = '117.54.9.179';  #$mail->Host = '192.168.10.10';     
						$mail->Port = 465; $mail->Username = 'system.servicedesk@ffi.co.id'; $mail->Password = 'Kfc_System'; 					

						$storeName = strtoupper($rCekStoreKode->user_realname);
						$ticketID = $rCekStoreKode->ticket_id;
						$subject = $rCekStoreKode->ticket_subject;
						$status = $rCekStoreKode->ticketstatus_name;
						$ticketDate = $rCekStoreKode->ticket_createdate;
						$problem = $rCekStoreKode->ticket_problem;
						$nikStore = $rCekStoreKode->user_nik;
						$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
						$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDUGA');
						$mail->AddCC('mantechno2020@gmail.com', 'MANTECHNO');
						$qCekUsrData = mysql_query("SELECT user_nik,userlevel_id,udept_id FROM ITH_USER 
												    WHERE user_nik = '".$rCekStoreKode->ticket_createby."'");
						$rCekUsrData = mysql_fetch_object($qCekUsrData);	
						if($rCekUsrData->udept_id=='STORE')
						{	
							$mail->Subject    = "[MAIL REMINDER STORE].TWENTY-FOURTH-REMINDER-TO-$storeName";
						}elseif($rCekUsrData->udept_id!='STORE')
						{						
							$mail->Subject    = "[MAIL REMINDER USER].TWENTY-FOURTH-REMINDER-TO-$storeName";	
						}
						$mail->AltBody    = "$rCekStoreKode->ticket_subject"; 
						
						$mail->Body .= "									
						<br>Dear Store $storeName,							
						<br>Mohon diupdate status pekerjaan untuk no tiket :<br>
						<ul>
							<li>Nomor Tiket : $ticketID</li><li>Nama Store : $storeName</li>
							<li>Judul : $subject</li><li>Status : $status</li><li>Ticket Dibuat Tanggal : $ticketDate</li>																		
						</ul><br>Catatan :	<br>$problem<br><br><br>
						<ul>
							<li><b>Apabila pekerjaan sudah selesai, mohon lakukan update status menjadi CLOSED</b></li>

						</ul><br>
						Silahkan Klik Link ini untuk melihatnya : (<a href='http://192.168.10.31/reminder/index.php?view=home&pid=$ticketID&uid=$nikStore'>Click Here</a>)
						<br><br>Regards,<br><br>
						ADMIN SERVICEDESK<hr>";		

						if(!$mail->Send()) 
						{
							/* OFFLINE */
							echo "ERROR !!! ";
						} else {
							/* ONLINE */
							echo "SUCCESSFULLY !!! ";#	exit;
						}								
					}	
				}	
			}elseif($rCekStoreKode->notifemailloop=='25')
			{
				$qCekNotifMailX = mysql_query("SELECT ticket_id, ticketstatus_id, ticket_createdate, 
											   notifemailnumber, notifemaillastdate, notifemailnextdate 
											   FROM ITH_NOTIFEMAILLOOPX WHERE ticket_id='".$rCekStoreKode->ticket_id."'");
				while($rCekNotifMailX = mysql_fetch_object($qCekNotifMailX))
				{	
					if($rCekNotifMailX->notifemailnextdate==$dateNow)
					{
						$notifmailloop_x = $rCekStoreKode->notifemailloop + 1;	
						$notifemaillastdate = date('d/m/Y');$notifemailnextdate = date('d/m/Y', strtotime('today + 7 days'));					
						$qCekNotifEmailReminderDate = mysql_query("SELECT notifemailloop,notifemaillastdate,notifemailnextdate
																   FROM ITH_TICKET_HEADER WHERE ticket_id ='".$rCekStoreKode->ticket_id."'");	
						$rCekNotifEmailReminderDate = mysql_fetch_object($qCekNotifEmailReminderDate);	
						 
						$dateloop2a = DateTime::createFromFormat('d/m/Y',$rCekNotifEmailReminderDate->notifemailnextdate)->format('d-m-Y');
						if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
						$dateloop3a = date_create($dateloop2a);
						date_add($dateloop3a, date_interval_create_from_date_string('+7 days'));
						$dateloop3xa = date_format($dateloop3a, 'd/m/Y');	
						
						$updateData = mysql_query("UPDATE ITH_TICKET_HEADER SET notifemailloop = '".$notifmailloop_x."',
												   notifemaillastdate = '".$rCekNotifEmailReminderDate->notifemailnextdate."', 
												   notifemailnextdate = '".$dateloop3xa."' WHERE ticket_id = '".$rCekStoreKode->ticket_id."' 
												   AND ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' 
												   AND ticket_createby = '".$rCekStoreKode->ticket_createby."'");	
							
						$insDataLog = mysql_query("UPDATE ITH_NOTIFEMAILLOOPX SET notifemailnumber = '".$notifmailloop_x."',
												   notifemaillastdate = '".$notifemaillastdate."', notifemailnextdate = '".$notifemailnextdate."',
												   ticket_notifmessage = 'TWENTY FIFTH REMINDER SENDMAIL SUCCESSFULLY SENT !!!'
												   WHERE ticket_id = '".$rCekStoreKode->ticket_id."' AND
												   ticket_udeptid IN('1','2','3') AND ticketstatus_id = '0' AND ticket_handleby = '".$rCekStoreKode->ticket_createby."'");		
						
						/** SENDING EMAIL NOTIF REMINDER TO STORE **/
						error_reporting(E_STRICT);
						date_default_timezone_set('America/Toronto');
						require_once('email/class.phpmailer.php');
						$mail             = new PHPMailer();

						$mail->IsSMTP(); $mail->SMTPDebug = 1; $mail->SMTPKeepAlive = false; $mail->SMTPAuth = true;       
						$mail->Mailer  = 'smtp';  $mail->SMTPSecure = 'ssl';$mail->Host  = 'mail.ffi.co.id';     
						#$mail->Host = '117.54.9.179';  #$mail->Host = '192.168.10.10';     
						$mail->Port = 465; $mail->Username = 'system.servicedesk@ffi.co.id'; $mail->Password = 'Kfc_System'; 					

						$storeName = strtoupper($rCekStoreKode->user_realname);
						$ticketID = $rCekStoreKode->ticket_id;
						$subject = $rCekStoreKode->ticket_subject;
						$status = $rCekStoreKode->ticketstatus_name;
						$ticketDate = $rCekStoreKode->ticket_createdate;
						$problem = $rCekStoreKode->ticket_problem;
						$nikStore = $rCekStoreKode->user_nik;
						$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
						$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDUGA');
						$mail->AddCC('mantechno2020@gmail.com', 'MANTECHNO');
						$qCekUsrData = mysql_query("SELECT user_nik,userlevel_id,udept_id FROM ITH_USER 
												    WHERE user_nik = '".$rCekStoreKode->ticket_createby."'");
						$rCekUsrData = mysql_fetch_object($qCekUsrData);	
						if($rCekUsrData->udept_id=='STORE')
						{	
							$mail->Subject    = "[MAIL REMINDER STORE].TWENTY-FIFTH-REMINDER-TO-$storeName";
						}elseif($rCekUsrData->udept_id!='STORE')
						{						
							$mail->Subject    = "[MAIL REMINDER USER].TWENTY-FIFTH-REMINDER-TO-$storeName";	
							$mail->AltBody    = "$rCekStoreKode->ticket_subject"; 
							
							$mail->Body .= "									
							<br>Dear Store $storeName,							
							<br>Mohon diupdate status pekerjaan untuk no tiket :<br>
							<ul>
								<li>Nomor Tiket : $ticketID</li><li>Nama Store : $storeName</li>
								<li>Judul : $subject</li><li>Status : $status</li><li>Ticket Dibuat Tanggal : $ticketDate</li>																		
							</ul><br>Catatan :	<br>$problem<br><br><br>
							<ul>
								<li><b>Apabila pekerjaan sudah selesai, mohon lakukan update status menjadi CLOSED</b></li>

							</ul><br>
							Silahkan Klik Link ini untuk melihatnya : (<a href='http://192.168.10.31/reminder/index.php?view=home&pid=$ticketID&uid=$nikStore'>Click Here</a>)
							<br><br>Regards,<br><br>
							ADMIN SERVICEDESK<hr>";		

							if(!$mail->Send()) 
							{
								/* OFFLINE */
								echo "ERROR !!! ";
							} else {
								/* ONLINE */
								echo "SUCCESSFULLY !!! ";#	exit;
							}								
						}//elseif($rCekUsrData->udept_id!='STORE')	
					} //if($rCekNotifMailX->notifemailnextdate==$dateNow)	
				} //while($rCekNotifMailX = mysql_fetch_object($qCekNotifMailX))	
			}	//elseif($rCekStoreKode->notifemailloop=='25')

		}//}elseif($rCekStoreKode->notifemailloop!='')
	}	

?>