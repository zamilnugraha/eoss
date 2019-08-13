<? 
$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
@session_start();
$pid = $_GET['pid'];
#$pid = '003330318-039203';

$username = $_GET['username'];
$usrlevel = $_SESSION['user_level'];
?>
<link type="text/css" href="css/custom.css" rel="stylesheet" />
<link href="requestlist/css/bootstrap.min.css" rel="stylesheet" media="screen">
      <form action="index.php?m=form&a=ufb&pid=<?=$_GET['pid']?>" method="post" enctype="multipart/form-data" id="form1" name="form1">
        <table width="100%" border="0">
		  <? 
			$qcekdatauser = mysql_query("SELECT ticket_id, ticket_subject, ticketstatus_id, ticket_problem FROM ITH_TICKET_HEADER WHERE ticket_id = '$pid'");
			$rcekdatauser = mysql_fetch_object($qcekdatauser);
			#if($rcekappby->ticketdetail_pichandleby== $_SESSION['user_nik']){
			#if($rcekdatauser->ticketstatus_id == '0'){	
		  ?>	  
				 <tr>
					<td width="25%" style="margin-top:100px;">Subject <span class="note" style="color:red;"></span></td>
					<td width="76%" style="margin-top:100px;"><input type="text" name="ticket_subject" id="ticket_subject" class="required" style="width:100%;" value="<?=$rcekdatauser->ticket_subject?>">
					<p style="color:red;"><?php echo ($error['ticket_subject']) ? $error['ticket_subject'] : ''; ?></p></td>
				  </tr>		  
			<!--	 <tr>
					<td width="25%" style="margin-top:100px;">Referensi Tiket ID <span class="note" style="color:red;">*</span></td>
					<td width="76%" style="margin-top:100px;"><input type="text" name="ticketreference_id" id="ticketreference_id" class="required" style="width:50%;" value="<?=$pid?>" readonly>
					<p style="color:red;"><!?php echo ($error['ticketreference_id']) ? $error['ticketreference_id'] : ''; ?></p></td>
				  </tr>		-->  
				 <!-- <tr>
					<td width="25%" style="margin-top:100px;">User Note </td>
					<td valign="top"><textarea name="ticketuserfeedback_notes" id="ticketuserfeedback_notes" rows="15" colspan="15" class="required"><!?=$rcekdatauser->ticketuserfeedback_notes?></textarea></td>
				  </tr>-->

			  
				 <tr>
					<td valign="top">Status Tiket :  <span class="note" style="color:red;">*</span></td>
					<td valign="top">
						<!--<select class="input-medium" style="width:320px;" name="ticketstatusfrompic_id" >-->	
						<select class="input-medium" style="width:320px;" name="ticketstatusfromuser_id">	
						<?
							$con = mysql_connect("localhost","usrservicedesk","kfc14022");
							mysql_select_db("servicedesk",$con); //@session_start();
							$qvcat = mysql_query("SELECT ticketstatus_id, ticketstatus_name	FROM ITH_TICKETSTATUS
							WHERE ticketstatus_id IN('3') ORDER by ticketstatus_id ASC");	
					/**	if($ticket_id!='') {
							$con = mysql_connect("localhost","usrservicedesk","kfc14022");
							mysql_select_db("servicedesk",$con);
							//@session_start();
							$qvcat2 = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.* FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKETSTATUS.ticketstatus_id = ITH_TICKET_HEADER.ticketstatus_id
							WHERE ITH_TICKET_HEADER.ticket_id= '$pid'");
							$rvcat2 = mysql_fetch_object($qvcat2);
								echo "<option value= '$rvcat2->ticketstatus_id' style=background:red;color:#fff;> $rvcat2->ticketstatus_name</option>";
								#echo "<option value= 'test' style=background:red;color:#fff;> test</option>";
						}
					**/	
						while($rvcat = mysql_fetch_object($qvcat)) 
						{
								echo "<option value= '$rvcat->ticketstatus_id'> $rvcat->ticketstatus_name</option>";
						}
						?>
						</select>			
					 </td>
				  </tr>			  
			  
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
		<? #} ?>		  
		</table>
	  </form>	  
<? ?>
<script type="text/javascript" src="jquery/jquery.validate.min.js"></script>
<script type="text/javascript">
//add by aryn
	$(document).ready(function() {
			$('#form1').validate({
				rules: {
				 ticket_problem: {required: true},
				 tglTerimaBrg: {required: false} 
				
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
					nama_penerima: {
						required: "Nama Penerima Harus Diisi"
						
					}
					
				}
			});
		});
</script>