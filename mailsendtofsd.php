<?php //if (empty($_BASE_PATH)) {header("location:index.php");}
@session_start();
require_once('_includes.php');
$userlevel=$_SESSION['user_level'];
 ?>
<link type="text/css" href="css/custom.css" rel="stylesheet" />
<!--<link href="requestlist/css/bootstrap.min.css" rel="stylesheet" media="screen">-->
<? if(($userlevel == 3)||($userlevel == 4)||($userlevel == 8)){ /* Approval */?>
<div id="content" style="height:560px;margin-top:100px;">
	<div class="header" style="display:none;">
	<? 
		$qCekStatusApproval = mysql_query("SELECT ticketapprovalstatusid_am FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$_GET['pid']."'");
		$rCekStatusApproval = mysql_fetch_object($qCekStatusApproval);
	?>
	  <? if(($rCekStatusApproval->ticketapprovalstatusid_am=='0')&&($rCekStatusApproval->ticketapprovalstatusid_am=='1')){ ?>	
	  <h3>Approval / Rejection Page</h3>
	  <? }elseif($rCekStatusApproval->ticketapprovalstatusid_am=='0'){ ?>	
	  <h3>Rejection Page</h3>
 	  <? }elseif($rCekStatusApproval->ticketapprovalstatusid_am=='1'){ ?>	
	  <h3>Approval Page</h3>
	  <? } ?>
    </div>
    <div class="body" style="height:500px;">
        
		<div style="text-align:center;margin-top:100px;color:#fff;font-size:14pt;margin-top:300px;"> 
			<!--<b>Terimakasih sudah memberikan Approval untuk permasalahan ini.</b><br>-->
			<b>ACTION TAKEN. THANK YOU !!!</b><br>
			<br>
			<!--
			<button onclick="location.href = 'http://servicedesk.ffi.co.id:85/helpdesk1/index.php?m=login';" id="myButton" class="submit-btn">OK</button>&nbsp;
			-->
			<!--<button onclick="location.href = 'http://localhost/index.php?m=login';" id="myButton" class="submit-btn">OK</button>&nbsp;-->
			<!--<button onclick="location.href = '?view=home&pid=<?=$_GET['pid'];?>&uid=<?=$_SESSION['user_nik'];?>';" id="myButton" class="submit-btn">OK</button>&nbsp;
			--><button onclick="location.href = '?m=info&pid=<?=$_GET['pid'];?>&uid=<?=$_SESSION['user_nik'];?>';" id="myButton" class="submit-btn">OK</button>&nbsp;
		</div>
		
		<div><br></div>
		<div><br></div>
		
    </div>
</div>
<? }elseif(($userlevel == 1000)||($userlevel == 1001)){ /* Approval */?>
<div id="content" style="height:560px;margin-top:100px;">
	<div class="header">
	<? 
		$qCekStatusApproval = mysql_query("SELECT ticketapprovalstatusid_gmo FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$_GET['pid']."'");
		$rCekStatusApproval = mysql_fetch_object($qCekStatusApproval);
	?>
	  <? if(($rCekStatusApproval->ticketapprovalstatusid_gmo=='0')&&($rCekStatusApproval->ticketapprovalstatusid_gmo=='1')){ ?>	
	  <h3>ALREADY REQUEST APPROVED</h3>
	  <? }elseif($rCekStatusApproval->ticketapprovalstatusid_am=='0'){ ?>	
	  <h3>Rejection Page</h3>
 	  <? }elseif($rCekStatusApproval->ticketapprovalstatusid_am=='1'){ ?>	
	  <h3>Approval Page</h3>
	  <? } ?>
    </div>
    <div class="body" style="height:500px;">
        
		<div style="text-align:center;margin-top:100px;color:#fff;font-size:14pt;margin-top:300px;"> 
			<!--<b>Terimakasih sudah memberikan Approval untuk permasalahan ini.</b><br>-->
			<b>ACTION TAKEN. THANK YOU !!!</b><br>
			<br>
			<!--
			<button onclick="location.href = 'http://servicedesk.ffi.co.id:85/helpdesk1/index.php?m=login';" id="myButton" class="submit-btn">OK</button>&nbsp;
			-->
			<!--<button onclick="location.href = 'http://localhost/index.php?m=login';" id="myButton" class="submit-btn">OK</button>&nbsp;-->
			<!--<button onclick="location.href = '?view=home&pid=<?=$_GET['pid'];?>&uid=<?=$_SESSION['user_nik'];?>';" id="myButton" class="submit-btn">OK</button>&nbsp;
			--><button onclick="location.href = '?m=info&pid=<?=$_GET['pid'];?>&uid=<?=$_SESSION['user_nik'];?>';" id="myButton" class="submit-btn">OK</button>&nbsp;
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
			<!--<button onclick="location.href = 'http://localhost/index.php?m=login';" id="myButton" class="submit-btn">OK</button>&nbsp;
			--><button onclick="location.href = '?m=info&pid=<?=$_GET['pid'];?>&uid=<?=$_SESSION['user_nik'];?>';" id="myButton" class="submit-btn">OK</button>&nbsp;
		</div>
		
		<div><br></div>
		<div><br></div>
		
    </div>
</div>
<? } ?>