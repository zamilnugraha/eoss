<html>
<head>
<title>Test Sending Email</title>
</head>
<body>

<?php

error_reporting(E_ALL);
error_reporting(E_STRICT);

date_default_timezone_set('America/Toronto');

require_once('../class.phpmailer.php');

$mail             = new PHPMailer();

$body             = file_get_contents('contents.html');
$body             = eregi_replace("[\]",'',$body);

$mail->IsSMTP(); 
$mail->Host       = "mail.transtv.co.id";
$mail->SMTPDebug  = 2;                     
                                       
                                         
$mail->SMTPAuth   = true;                 
$mail->SMTPSecure = "ssl";                 
$mail->Host       = "smtp.gmail.com";     
$mail->Port       = 465;                  
$mail->Username   = "b2239rf@gmail.com";  
$mail->Password   = "pasword2239";           

$mail->SetFrom('b2239rf@gmail.com', 'b2239rf');
#$mail->SetFrom('dagung@transtv.co.id', 'panduga');
#$mail->SetAddress('panduga@transtv.co.id', "panduga", "panduga");
$mail->AddReplyTo("panduga@transtv.co.id","panduga");

$mail->Subject    = "Test Send Email";

$mail->AltBody    = "Testing"; 

$mail->MsgHTML($body);

$address = "panduga@transtv.co.id";
#$address = "dagung@transtv.co.id";
$mail->AddAddress($address, "Panduga");

#$mail->AddAttachment("images/phpmailer.gif");      // attachment
#$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}

?>

</body>
</html>
