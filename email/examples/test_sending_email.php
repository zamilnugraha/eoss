<?php


/** ======================================== Sending Email Respon Solving ===================================================== **/
#error_reporting(E_ALL);
error_reporting(E_STRICT);

date_default_timezone_set('America/Toronto');

require_once('../class.phpmailer.php');
#require_once('email/class.phpmailer.php');

$mail             = new PHPMailer();

##$body             = file_get_contents('contents.html');

#$mail->IsSMTP();
#$mail->SMTPDebug  = 1;           
$mail->SMTPKeepAlive = false;                                     
$mail->SMTPAuth   	 = false;       
$mail->Mailer 		 = "smtp";   
$mail->Host       	 = "172.16.8.160";     
$mail->Port       	 = 25;                  
$mail->Username   	 = "";  
$mail->Password   	 = "";    



  #$mail->AddReplyTo('panduga@transtv.co.id', 'Panduga'); //Cc to-1 : ('panduga_85@yahoo.com', 'Panduga')
  $mail->AddAddress('panduga@transtv.co.id', 'Panduga'); //sent to : ('panduga@transtv.co.id', 'panduga') 
	$mail->AddCC('prayuda@transtv.co.id', 'Prayuda'); //sent to : ('panduga@transtv.co.id', 'panduga') 
#	$mail->CC('prayuda@transtv.co.id', 'Prayuda'); //sent to : ('panduga@transtv.co.id', 'panduga') 
  $mail->SetFrom('prayuda@transtv.co.id', 'Prayuda'); //from : ('helpdesk@transtv.co.id', 'Helpdesk-Transtv')
	
	/* if(strlen($global_vars["mail_cc"]) > 0)
	   $this->SetAddress($global_vars["mail_cc"], $mail_cc); */
  
  $mail->Subject    = "Internet Lemot ( From : PANDU ANGGA PRATAMA-I)";
  $mail->AltBody    = "Solving Your Problem"; 

## $mail->MsgHTML(file_get_contents('contents.html')); //include file "content.html"


  
/** Write the body message **/
$mail->Body = "
<font size=2><strong>Subject : </strong></font><br><font color=blue size=2><strong>Internet Lemot&nbsp;( From :&nbsp;PANDU ANGGA PRATAMA )</strong></font> <br><br>
<hr>
<table border=0>
<tr><td><font size=3 color=blue><strong><u>Problem</u></strong></font></td></tr>

<tr><td><font size=2><strong>Ticket ID</strong></font></td>
<td><font size=2><strong>:</strong></font></td>
<td><font color=blue size=2><strong>12345678</strong></font></td></tr>

<tr><td><font size=2><strong>Subject</strong></font></td>
<td><font size=2><strong>:</strong></font></td>
<td><font color=blue size=2><strong>Internet Lemot</strong></font></td></tr>

<tr><td><font size=2><strong>Comment User</strong></font></td>
<td><font size=2><strong>:</strong></font></td>
<td><font color=blue size=2><strong>Mohon Dibantu Internet di Lt.7 Kok Lama banget yah?</strong></font></td></tr>

<tr><td><font size=2><strong>Request By </strong></font></td>
<td><font size=2><strong>:</strong></font></td>
<td><font color=blue size=2><strong>PANDU ANGGA PRATAMA</strong></font></td></tr>
</table><br><br>

<table border=0>
<tr><td><font size=3 color=blue><strong><u>Solution </u></strong></font></td></tr>

<tr><td><font size=2><strong>Ticket ID </strong></font></td>
<td><font size=2><strong>:</strong></font></td>
<td><font color=blue size=2><strong>12345678</strong></font></td></tr>

<tr><td><font size=2><strong>Re.Comment </strong></font></td>
<td><font size=2><strong>:</strong></font></td>
<td><font color=blue size=2><strong>Sudah diganti IP Default Gatewaynya.</strong></font></td></tr>

<tr>
<td><font size=2><strong>Handle By </strong></font></td>
<td><font size=2><strong>:</strong></font></td>
<td><font color=blue size=2><strong>Prayuda</strong></font></td></tr>
</table>

<br><br>

<font size=2><br><br><strong>Terimakasih,</strong>&nbsp;&nbsp;<u>06november2012</u></font><br><br>
<font size=3><strong>Regards, <br></strong></font>
<font size=2 color=black><strong>Prayuda</strong></font>";


if(!$mail->Send()) {
  echo "Pesan Gagal Dikirim, Karena: " . $mail->ErrorInfo;
} else {
  echo "Pesan Telah Terkirim";
}

/** =========================================================================================================================== **/	 

?>