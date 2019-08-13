<?php //if (empty($_BASE_PATH)) {header("location:index.php");}
@session_start();
require_once('_includes.php');
$userlevel=$_SESSION['user_level'];
 ?>
<link type="text/css" href="css/custom.css" rel="stylesheet" />
<!--<link href="requestlist/css/bootstrap.min.css" rel="stylesheet" media="screen">-->
<? if(($userlevel == 1)||($userlevel == 1000)){ /* Approval */?>
<div id="content" style="height:560px;margin-top:100px;">
	<div class="header">
	
	  <!--<h3>Request Successfully Page</h3>-->
	
    </div>
    <div class="body" style="height:500px;">
        
		<div style="text-align:center;margin-top:300px;font-size:14pt;color:#fff;"> 
			<!--<b>Terimakasih sudah memberikan Approval untuk permasalahan ini.</b><br>-->
			<b>REQUEST SUCCESFULLY SUBMITTED !!!</b><br>
			<br>
			<!--
			<button onclick="location.href = 'http://servicedesk.ffi.co.id:85/helpdesk1/index.php?m=login';" id="myButton" class="submit-btn">OK</button>&nbsp;
			-->
			<!--<button onclick="location.href = 'http://localhost/index.php?m=login';" id="myButton" class="submit-btn">OK</button>&nbsp;-->
			<button onclick="location.href = '?view=list_request&pid=<?=$_GET['pid'];?>&uid=<?=$_SESSION['user_nik'];?>';" id="myButton" class="submit-btn">OK</button>&nbsp;
		</div>
		
		<div><br></div>
		<div><br></div>
		
    </div>
</div>
<? }elseif(($userlevel == 21)||($userlevel == 22)||($userlevel == 23)){ /* PIC */?>
<div id="content" style="height:560px;">
	<div class="header">
	  <h3>PIC Thankyou</h3>
    </div>
    <div class="body" style="height:500px;">
        
		<div style="text-align:center;margin-top:200px;"> 
			<b>Terimakasih sudah menghandle untuk permasalahan ini.</b>
			<br>
			<!--
			<button onclick="location.href = 'http://servicedesk.ffi.co.id:85/helpdesk1/index.php?m=login';" id="myButton" class="submit-btn">OK</button>&nbsp;
			-->
			<button onclick="location.href = 'http://localhost/index.php?m=login';" id="myButton" class="submit-btn">OK</button>&nbsp;
		</div>
		
		<div><br></div>
		<div><br></div>
		
    </div>
</div>
<? } ?>