<? 
$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
@session_start();
$ticket_id = $_GET['pid'];
$ticketdetail_id = $_GET['pid'];
$username = $_GET['username'];
$usrlevel = $_SESSION['user_level'];
?>
<link type="text/css" href="css/custom.css" rel="stylesheet" />
<link href="requestlist/css/bootstrap.min.css" rel="stylesheet" media="screen">
      <form action="index.php?m=form&a=ncappic&pid=<?=$_GET['pid']?>" method="post" enctype="multipart/form-data" id="form1" name="form1">
        <table width="100%" border="0">
		  <? 
			$qcekappby = mysql_query("SELECT ticketdetail_pichandleby, ticketdetail_pichandleby2, ticketdetail_pichandleby3 
			FROM ITH_TICKET_DETAIL WHERE ticketdetail_id = '$ticket_id'");
			$rcekappby = mysql_fetch_object($qcekappby);
			if($rcekappby->ticketdetail_pichandleby== $_SESSION['user_nik']){
		  ?>	  
				  <tr>
					<td valign="top">Descriptions<span class="note">*</span></td>
					<td valign="top"><textarea name="ticket_solution" id="ticket_solution" rows="15" class="input"></textarea></td>
				  </tr>	
				 <tr>
					<td width="25%" style="margin-top:100px;">Referensi Tiket ID <span class="note" style="color:red;">*</span></td>
					<td width="76%" style="margin-top:100px;"><input type="text" name="ticketreference_id" id="ticketreference_id" class="required" style="width:30%;" value="<?=$pid?>" readonly>
					<p style="color:red;"><?php echo ($error['ticketreference_id']) ? $error['ticketreference_id'] : ''; ?></p></td>
				  </tr>					  
				 <tr>
					<td valign="top">Status Request From PIC I :  <span class="note" style="color:red;">*</span></td>
					<td valign="top">
						<select class="input-medium" style="width:320px;" name="ticketstatusfrompic_id" >	
						<?
							$con = mysql_connect("localhost","usrservicedesk","kfc14022");
							mysql_select_db("servicedesk",$con); //@session_start();
							$qvcat = mysql_query("SELECT ticketstatus_id, ticketstatus_name	FROM ITH_TICKETSTATUS
							WHERE ticketstatus_id NOT IN ('1','3','4','5') ORDER by ticketstatus_id ASC");	
						if($ticket_id!='') {
							$con = mysql_connect("localhost","usrservicedesk","kfc14022");
							mysql_select_db("servicedesk",$con);
							//@session_start();
							$qvcat2 = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.* FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKETSTATUS.ticketstatus_id = ITH_TICKET_HEADER.ticketstatus_id
							WHERE ITH_TICKET_HEADER.ticket_id= '$_GET[pid]'");
							$rvcat2 = mysql_fetch_object($qvcat2);
								echo "<option value= '$rvcat2->ticketstatus_id' style=background:red;color:#fff;> $rvcat2->ticketstatus_name</option>";
								#echo "<option value= 'test' style=background:red;color:#fff;> test</option>";
						}
						
						while($rvcat = mysql_fetch_object($qvcat)) 
						{
								echo "<option value= '$rvcat->ticketstatus_id'> $rvcat->ticketstatus_name</option>";
						}
						?>
						</select>			
					 </td>
				  </tr>			  
			<? }elseif($rcekappby->ticketdetail_pichandleby2== $_SESSION['user_nik']){ ?>
				  <tr>
					<td valign="top">Description<span class="note">*</span></td>
					<td valign="top"><textarea name="ticket_solution2" id="ticket_solution2" rows="15" class="input"></textarea></td>
				  </tr>	
			
				 <tr>
					<td valign="top">Status Request From PIC II :  <span class="note" style="color:red;">*</span></td>
					<td valign="top">
						<select class="input-medium" style="width:320px;" name="ticketstatusfrompic2_id" >	
						<?
							$con = mysql_connect("localhost","usrservicedesk","kfc14022");
							mysql_select_db("servicedesk",$con); //@session_start();
							$qvcat = mysql_query("SELECT ticketstatus_id, ticketstatus_name	FROM ITH_TICKETSTATUS
							WHERE ticketstatus_id NOT IN ('3','4') ORDER by ticketstatus_id ASC");	
						if($ticket_id!='') {
							$con = mysql_connect("localhost","usrservicedesk","kfc14022");
							mysql_select_db("servicedesk",$con);
							//@session_start();
							$qvcat2 = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.* FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKETSTATUS.ticketstatus_id = ITH_TICKET_HEADER.ticketstatus_id
							WHERE ITH_TICKET_HEADER.ticket_id= '$_GET[pid]'");
							$rvcat2 = mysql_fetch_object($qvcat2);
								echo "<option value= '$rvcat2->ticketstatus_id' style=background:red;color:#fff;> $rvcat2->ticketstatus_name</option>";
								#echo "<option value= 'test' style=background:red;color:#fff;> test</option>";
						}
						
						while($rvcat = mysql_fetch_object($qvcat)) 
						{
								echo "<option value= '$rvcat->ticketstatus_id'> $rvcat->ticketstatus_name</option>";
						}
						?>
						</select>			
					 </td>
				  </tr>				
			<? }elseif($rcekappby->ticketdetail_pichandleby3== $_SESSION['user_nik']){ ?>
				  <tr>
					<td valign="top">Description<span class="note">*</span></td>
					<td valign="top"><textarea name="ticket_solution3" id="ticket_solution3" rows="15" class="input"></textarea></td>
				  </tr>	
			
				 <tr>
					<td valign="top">Status Request From PIC III  :  <span class="note" style="color:red;">*</span></td>
					<td valign="top">
						<select class="input-medium" style="width:320px;" name="ticketstatusfrompic3_id" >	
						<?
							$con = mysql_connect("localhost","usrservicedesk","kfc14022");
							mysql_select_db("servicedesk",$con); //@session_start();
							$qvcat = mysql_query("SELECT ticketstatus_id, ticketstatus_name	FROM ITH_TICKETSTATUS
							WHERE ticketstatus_id NOT IN ('3','4') ORDER by ticketstatus_id ASC");				
						if($ticket_id!='') {
							$con = mysql_connect("localhost","usrservicedesk","kfc14022");
							mysql_select_db("servicedesk",$con);
							//@session_start();
							$qvcat2 = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.* FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKETSTATUS.ticketstatus_id = ITH_TICKET_HEADER.ticketstatus_id
							WHERE ITH_TICKET_HEADER.ticket_id= '$_GET[pid]'");
							$rvcat2 = mysql_fetch_object($qvcat2);
								echo "<option value= '$rvcat2->ticketstatus_id' style=background:red;color:#fff;> $rvcat2->ticketstatus_name</option>";
								#echo "<option value= 'test' style=background:red;color:#fff;> test</option>";
						}
						
						while($rvcat = mysql_fetch_object($qvcat)) 
						{
								echo "<option value= '$rvcat->ticketstatus_id'> $rvcat->ticketstatus_name</option>";
						}
						?>
						</select>			
					 </td>
				  </tr>				
			<? } ?>
		 
		  <tr style="display:none;">
            <td valign="top">PIC :  <span class="note" style="color:red;">*</span></td>
            <td valign="top">
				<select class="input-medium" style="width:320px;" name="ticketdetail_pichandleby3">	
				<?
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
					$qvaprvl1a = mysql_query("SELECT user_id, user_realname FROM ITH_USER WHERE userlevel_id = '$_SESSION[user_level]' AND udept_id = '$_SESSION[udeptid]' ORDER BY user_realname ASC");				
				if($ticketdetail_id!='') {
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con);
					//@session_start();
					$qvaprvl1b = mysql_query("SELECT ITD.*, ITHU.user_realname AS uname1, ITHU2.user_realname AS uname2, ITHU3.user_realname AS uname3 
								FROM ITH_TICKET_DETAIL ITD
								LEFT JOIN ITH_USER ITHU ON ITD.ticketdetail_pichandleby = ITHU.user_nik
								LEFT JOIN ITH_USER ITHU2 ON ITD.ticketdetail_pichandleby2 = ITHU2.user_nik
								LEFT JOIN ITH_USER ITHU3 ON ITD.ticketdetail_pichandleby3 = ITHU3.user_nik
								WHERE ITD.ticketdetail_id = '$_GET[pid]'								
								");
					$rvaprvl1b = mysql_fetch_object($qvaprvl1b);
						echo "<option value= '$rvaprvl1b->ticketdetail_pichandleby2' style=background:red;color:#fff;> $rvaprvl1b->uname2</option>";
						#echo "<option value= 'test' style=background:red;color:#fff;> test</option>";
				}
				
				while($rvaprvl1a = mysql_fetch_object($qvaprvl1a)) 
				//$uname1x = ucwords(strtolower($rvaprvl1a->user_realname));
				{
						echo "<option value= '$rvaprvl1a->user_id'>$rvaprvl1a->user_realname</option>";
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