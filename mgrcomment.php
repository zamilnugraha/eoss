<?php //if (empty($_BASE_PATH)) {header("location:index.php");} 
$userlevel=$_SESSION['user_level'];?>
<link href="requestdetail/css/bootstrap.min.css" rel="stylesheet" media="screen">
<div id="nav-content">
	<div class="box"><a href="javascript:history.go(-1)" title="back"><img src="images/back.gif" border="0" alt="back" /></a></div>
</div>
<div id="content">
	<div class="header">
	  <h3>Response & Details For Approval</h3>
    </div>
    <div class="body"> 
    	<table class="table table-condensed table-bordered table-hover" cellpadding="0" cellspacing="0" style="">
			<tbody>
				<tr>
				<? 
				$query = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_DEPARTEMEN.nama_departemen FROM ITH_TICKET_HEADER 
						LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
						 LEFT JOIN ITH_TICKETCATEGORY ON ITH_TICKET_HEADER.ticketcategory_id = ITH_TICKETCATEGORY.ticketcategory_id
						 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_id								 
						 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_type = ITH_DEPARTEMEN.kode_departemen								 
						WHERE ITH_TICKET_HEADER.ticket_id ='$_GET[pid]'");
					

					$dtmyticket = mysql_fetch_object($query);
					
				?>
				
					<td style="width:200px">
						<table>
							<tr><th style="border:0;">Req.By  </th><th style="border:0;">:</th><td style="border:0;"><?=$dtmyticket->user_realname;?></td></tr>
							<tr><th style="border:0;">Date Request  </th><th style="border:0;">:</th><td style="border:0;"><?=$dtmyticket->ticket_createdate;?></td></tr>						
							<tr><th style="border:0;">Time Request  </th><th style="border:0;">:</th><td style="border:0;"><?=$dtmyticket->ticket_createtime.'&nbsp;WIB';?></td></tr>						
						</table>
					</td>
					<td style="width:200px">
						<table>
							<tr><th style="border:0;">Ticket ID  </th><th style="border:0;">:</th><td style="border:0;"><?=$_GET['pid']?></td></tr>
							<tr><th style="border:0;">Status Request  </th><th style="border:0;">:</th><td style="border:0;"><?=$dtmyticket->ticketstatus_name;?></td></tr>						
							<tr><th style="border:0;">Request To  </th><th style="border:0;">:</th><td style="border:0;"><?=$dtmyticket->nama_departemen;?></td></tr>						
						</table>  
					</td>
				</tr>
			</tbody>
		</table>
		<table class="table table-condensed table-bordered table-hover" cellpadding="0" cellspacing="0" style="">
		<tbody>
				<tr>
					<td style="width:200px">
						<table>
							<tr><th style="font-weight:normal;"><b>Ticket Subject : </b> <?=$dtmyticket->ticket_subject;?></th></tr>
							<tr><th style="border:0;">Description  </th></tr>						
							<tr><td style="border:0;"><?=$dtmyticket->ticket_problem;?></td></tr>						
											
						</table>  
					</td>				
				</tr>
		</tbody>		
		</table>
		<?if($userlevel=='1001'){ ?>
		<table class="table table-condensed table-bordered table-hover" cellpadding="0" cellspacing="0" style="">
		<tbody>
				<tr>
					<td style="width:200px">
						<table>
							<tr><th style="border:0;">Do You Want Approval This Ticket ? </th></tr>
							<tr><th style="border:0;"></th></tr>						
							<tr><td style="border:0;"><? include("problem_checkapproval.php");?></td></tr>						
											
						</table>  
					</td>				
				</tr>
		</tbody>		
		</table>
		<? }elseif($userlevel=='1'){ ?>
		
		<?}?>
	</div>
</div>
<!--<script type="text/javascript">
function checkHandle(obj) {
	var sel = obj.val();
	if (sel == 2) {$('#handleby').show();}
	else {$('#handleby').hide();}
}
</script> -->