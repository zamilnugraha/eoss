<? 
$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
@session_start();
$ticket_id = $_GET['pid'];
$ticketdetail_id = $_GET['pid'];
$username = $_GET['username'];
$usrlevel = $_SESSION['user_level'];
$usrnik = $_SESSION['user_nik'];
?>
<link type="text/css" href="css/custom.css" rel="stylesheet" />
<link href="requestlist/css/bootstrap.min.css" rel="stylesheet" media="screen">


      <form action="index.php?m=form&a=ncapsubmgr&pid=<?=$_GET['pid']?>" method="post" enctype="multipart/form-data" id="form1" name="form1">
        <table width="100%" border="0">
		
		
		  <?#if($_SESSION['user_level']=='1001'){?><!-- Level MGR -->
          <tr>
            <td valign="top">Description<span class="note">*</span></td>
			<?
			if($ticketdetail_id!='') {
					$qreqnoteaprvlx = mysql_query("SELECT ticketnote_picto2 FROM ith_logreport WHERE ticket_id = '$_GET[pid]' AND ticketapproval_bynik1 = '$usrnik' ");	
				#	$qreqnoteaprvlx = mysql_query("SELECT ticketnote_picto2 FROM ith_logreport WHERE ticket_id = 'VUNWzo' AND ticketapproval_bynik1='010579'");	
					$rreqnoteaprvlx = mysql_fetch_object($qreqnoteaprvlx);
			?>
				<?if(($rreqnoteaprvlx->ticketnote_picto2!='')){?>
				
					<td valign="top"><textarea name="ticketnote_picto2" id="ticketnote_picto2" rows="15" value="<?=$rreqnoteaprvlx->ticketnote_picto2;?>" class="input"><?=$rreqnoteaprvlx->ticketnote_picto2;?></textarea></td>
				<?}else{?>
					<td valign="top"><textarea name="ticketnote_picto2" id="ticketnote_picto2" rows="15" class="input"></textarea></td>
				<? } ?>	
			<? } ?>
          </tr>	
		  	  
		  
		
		  <?#if($_SESSION['user_level']=='1001'){?><!-- Level MGR -->
		  <tr>
            <td valign="top">PIC-I :  <span class="note" style="color:red;">*</span></td>
            <td valign="top">
				<select class="input-medium" style="width:320px;" name="ticketdetail_pichandleby">	
				<?
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
					$qvaprvl1cxz1 = mysql_query("SELECT ticketdetail_pichandleby, ticketdetail_pichandleby2,
					ticketdetail_pichandleby3 FROM ITH_TICKET_DETAIL WHERE ticketdetail_id = '$_GET[pid]'");	
					$rvaprvl1cxz1 = mysql_fetch_object($qvaprvl1cxz1);	
				/*	$qvaprvl1ax = mysql_query("SELECT user_nik, user_realname,userdepartemen_id FROM ITH_USER WHERE udept_id = '$_SESSION[udeptid]' AND
					user_nik != '$_SESSION[udeptid]' ORDER BY user_realname ASC");	*/
					$qvaprvl1ax = mysql_query("SELECT user_nik, user_realname,userdepartemen_id FROM ITH_USER WHERE udept_id = '$_SESSION[udeptid]' 
					ORDER BY user_realname ASC");			
				#if($rvaprvl1cxz1->ticketdetail_pichandleby!='') {
				if($ticketdetail_id!='') {
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con);
					//@session_start();
					$qvaprvl1a = mysql_query("SELECT ITD.*, ITHU.user_realname AS uname1, ITHU2.user_realname AS uname2, ITHU3.user_realname AS uname3 
								FROM ITH_TICKET_DETAIL ITD
								LEFT JOIN ITH_USER ITHU ON ITD.ticketdetail_pichandleby = ITHU.user_nik
								LEFT JOIN ITH_USER ITHU2 ON ITD.ticketdetail_pichandleby2 = ITHU2.user_nik
								LEFT JOIN ITH_USER ITHU3 ON ITD.ticketdetail_pichandleby3 = ITHU3.user_nik
								WHERE ITD.ticketdetail_id = '$_GET[pid]' AND ITD.ticketdetail_pichandleby != '$_SESSION[user_nik]' 							
								");
					$rvaprvl1a = mysql_fetch_object($qvaprvl1a);
						echo "<option value= '(NULL)'> - </option>";
						echo "<option value= '$rvaprvl1a->ticketdetail_pichandleby' style=background:red;color:#fff;> $rvaprvl1a->uname1</option>";
						#echo "<option value= 'test' style=background:red;color:#fff;> test</option>";
				}
				echo "<option value= '(NULL)'> - </option>";
				while($rvaprvl1ax = mysql_fetch_object($qvaprvl1ax)) 
				//$uname1x = ucwords(strtolower($rvaprvl1a->user_realname));
				{
						echo "<option value= '$rvaprvl1ax->user_nik'>$rvaprvl1ax->user_realname ($rvaprvl1ax->userdepartemen_id)</option>";
				}
				?>
				</select>			
			 </td>
          </tr>	
		  <tr>
            <td valign="top">PIC-II :  <span class="note" style="color:red;display:none;">*</span></td>
            <td valign="top">
				<select class="input-medium" style="width:320px;" name="ticketdetail_pichandleby2">	
				<?
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
					$qvaprvl1cxz2 = mysql_query("SELECT ticketdetail_pichandleby, ticketdetail_pichandleby2,
					ticketdetail_pichandleby3 FROM ITH_TICKET_DETAIL
					WHERE ticketdetail_id = '$_GET[pid]'");	
					$rvaprvl1cxz2 = mysql_fetch_object($qvaprvl1cxz2);	
					$qvaprvl1bx = mysql_query("SELECT user_nik, user_realname,userdepartemen_id FROM ITH_USER WHERE udept_id = '$_SESSION[udeptid]' AND
					user_nik != '$_SESSION[udeptid]' ORDER BY user_realname ASC");	
				/*	$qvaprvl1bx = mysql_query("SELECT user_nik, user_realname,userdepartemen_id FROM ITH_USER WHERE udept_id = '$_SESSION[udeptid]' 
					ORDER BY user_realname ASC");		*/				
			#	if($rvaprvl1cxz2->ticketdetail_pichandleby2!='') {
				if($ticketdetail_id!='') {
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con);
					//@session_start();
					$qvaprvl1b = mysql_query("SELECT ITD.*, ITHU.user_realname AS uname1, ITHU2.user_realname AS uname2, ITHU3.user_realname AS uname3 
								FROM ITH_TICKET_DETAIL ITD
								LEFT JOIN ITH_USER ITHU ON ITD.ticketdetail_pichandleby = ITHU.user_nik
								LEFT JOIN ITH_USER ITHU2 ON ITD.ticketdetail_pichandleby2 = ITHU2.user_nik
								LEFT JOIN ITH_USER ITHU3 ON ITD.ticketdetail_pichandleby3 = ITHU3.user_nik
								WHERE ITD.ticketdetail_id = '$_GET[pid]' AND ITD.ticketdetail_pichandleby2 != '$_SESSION[user_nik]'								
								");
					$rvaprvl1b= mysql_fetch_object($qvaprvl1b);
						echo "<option value= '(NULL)'> - </option>";
						echo "<option value= '$rvaprvl1b->ticketdetail_pichandleby2' style=background:red;color:#fff;> $rvaprvl1b->uname2</option>";
						#echo "<option value= 'test' style=background:red;color:#fff;> test</option>";
				}
				echo "<option value= '(NULL)'> - </option>";
				while($rvaprvl1bx = mysql_fetch_object($qvaprvl1bx)) 
				//$uname1x = ucwords(strtolower($rvaprvl1a->user_realname));
				{
						echo "<option value= '$rvaprvl1bx->user_nik'>$rvaprvl1bx->user_realname ($rvaprvl1bx->userdepartemen_id)</option>";
				}
				?>
				</select>			
			 </td>
          </tr>	
		  <tr>
            <td valign="top">PIC-III :  <span class="note" style="color:red;display:none;">*</span></td>
            <td valign="top">
				<select class="input-medium" style="width:320px;" name="ticketdetail_pichandleby3">	
				<?
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
					/*		*/
					$qvaprvl1cxz3 = mysql_query("SELECT ticketdetail_pichandleby, ticketdetail_pichandleby2,
					ticketdetail_pichandleby3 FROM ITH_TICKET_DETAIL
					WHERE ticketdetail_id = '$_GET[pid]'");		
					$rvaprvl1cxz3 = mysql_fetch_object($qvaprvl1cxz3);			
					$qvaprvl1cx = mysql_query("SELECT user_nik, user_realname,userdepartemen_id FROM ITH_USER WHERE udept_id = '$_SESSION[udeptid]' AND
					user_nik != '$_SESSION[udeptid]' ORDER BY user_realname ASC");	
				/*	$qvaprvl1cx = mysql_query("SELECT user_nik, user_realname,userdepartemen_id FROM ITH_USER WHERE udept_id = '$_SESSION[udeptid]' 
					ORDER BY user_realname ASC");		*/					
				#if($rvaprvl1cxz3->ticketdetail_pichandleby3!='') {
				if($ticketdetail_id!='') {
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con);
					//@session_start();
					$qvaprvlcx2 = mysql_query("SELECT ITD.*, ITHU.user_realname AS uname1, ITHU2.user_realname AS uname2, ITHU3.user_realname AS uname3 
								FROM ITH_TICKET_DETAIL ITD
								LEFT JOIN ITH_USER ITHU ON ITD.ticketdetail_pichandleby = ITHU.user_nik
								LEFT JOIN ITH_USER ITHU2 ON ITD.ticketdetail_pichandleby2 = ITHU2.user_nik
								LEFT JOIN ITH_USER ITHU3 ON ITD.ticketdetail_pichandleby3 = ITHU3.user_nik
								WHERE ITD.ticketdetail_id = '$_GET[pid]' AND ITD.ticketdetail_pichandleby3 != '$_SESSION[user_nik]' 								
								");
					$rvaprvlcx2 = mysql_fetch_object($qvaprvlcx2);
						echo "<option value= '(NULL)'> - </option>";
						echo "<option value= '$rvaprvlcx2->ticketdetail_pichandleby3' style=background:red;color:#fff;> $rvaprvlcx2->uname3</option>";
						#echo "<option value= 'test' style=background:red;color:#fff;> test</option>";
				}
				echo "<option value= '(NULL)'> - </option>";
				while($rvaprvlcx = mysql_fetch_object($qvaprvl1cx)) 
				//$uname1x = ucwords(strtolower($rvaprvl1a->user_realname));
				{
						echo "<option value= '$rvaprvlcx->user_nik'>$rvaprvlcx->user_realname ($rvaprvlcx->userdepartemen_id)</option>";
				}
				?>
				</select>			
			 </td>
          </tr>	

			
			<? #} ?>		  
          <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="button" id="button" value="Submit" class="submit-btn">&nbsp;
            <input type="reset" name="button2" id="button2" value="Clear" class="submit-btn"></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><span class="note" style="color:red;">*wajib diisi</span></td>
          </tr>
          <tr>
            <td colspan="2">
			<?php
            	if ($_SESSION['msgerror']) {
					$error = implode("<br/>",$_SESSION['msgerror']);
					echo '<div class="error">'.$error.'</div>';
					unset($_SESSION['msgerror']);
				}
			?>
			</td>
          </tr>		  
		</table>
	  </form>	  
<? ?>
<script type="text/javascript" src="jquery/jquery.validate.min.js"></script>
<script type="text/javascript">
//add by aryn
	$(document).ready(function() {
			$('#form1').validate({
				rules: {
				 ticket_problem: { 
						required: true 
	        } 
				
				},
				messages: {
					ticket_type: {
						required: "Type Harus Dipilih"
						
					},
					ticket_subject: {
						required: "Subject Harus Diisi"
						
					},
					ticket_problem: {
						required: "Desc Harus Diisi"
						
					}
					
				}
			});
		});
</script>		