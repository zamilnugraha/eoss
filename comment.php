<?php //if (empty($_BASE_PATH)) {header("location:index.php");} 

$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
$ticket_id = $_GET['pid'];
$ticketdetail_id = $_GET['pid'];
$userlevel=$_SESSION['user_level'];?>
<!-- <link href="requestlist/css/bootstrap.min.css" rel="stylesheet" media="screen">-->
<? if($_GET['uid']=='001484'){?>
<style>
#nav-content .box2 {
    background-color: 	;
    background-image: url("images/gradient1.gif");
    background-position: left center;
    background-repeat: repeat-x;
    border-bottom: 1px solid #dfdfdf;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    border-left: 1px solid #dfdfdf;
    border-right: 1px solid #dfdfdf;
    padding: 4px 10px;
}
</style>
<div id="nav-content" style="margin-top:10px; width:5%;display:none;">
	<!--<div class="box">--><div>
	<a href="javascript:history.go(-1)" title="back"><img src="images/back.gif" border="0" alt="back" /></a>
	</div>
</div>

<div id="content" style="margin-top:50px;">
	<div class="header">
	<?if($userlevel=='99'||$userlevel=='99'||$userlevel=='1000'||$userlevel=='21'||$userlevel=='22'||$userlevel=='23'||$userlevel=='24'||
	 $userlevel=='100'||$userlevel=='101'||$userlevel=='102'||$userlevel=='103'){ ?>
	  <h3>Maintenance Details</h3>	
	<?}elseif($userlevel=='1001'||$userlevel=='1002'||$userlevel=='1003'||$userlevel=='1004'){ ?>  
	  <h3>Maintenance Details</h3>
	<?}elseif($userlevel=='1'||$userlevel=='2'||$userlevel=='3'||$userlevel=='4'||$userlevel=='5'||$userlevel=='6'){ ?>  
	  <h3>Request Detail</h3>
	<? } ?>
    </div>
    <div class="body"> 
    	<table class="table table-hover" cellpadding="0" cellspacing="0" style="">
			<tbody>
				<tr>
				<? 
					 $query = mysql_query("SELECT * FROM VW_ITH_TICKET_HEADER WHERE ticket_id ='$_GET[pid]'");
					 $dtmyticket = mysql_fetch_object($query);
				?>
				
					<td style="width:100px">
						<table>
							<tr><th style="border:0;color:#ffffff;">Ticket&nbsp;By  </th><th style="border:0;color:#ffffff;">:</th><td style="border:0;color:#000000;">
							<input type="text" value="<?=$dtmyticket->user_realname;?>" style="width:auto;" readonly></td></tr>
							<tr><th style="border:0;color:#ffffff;">Tiket&nbsp;ID  </th><th style="border:0;color:#ffffff;">:</th><td style="border:0;color:#000000;">
							<input type="text" value="<?=$_GET['pid'];?>" style="width:auto;" readonly></td></tr>
							<tr><th style="border:0;color:#ffffff;">Ticket&nbsp;Date  </th><th style="border:0;color:#ffffff;">:</th><td style="border:0;color:#000000;">
							<input type="text" value="<?=$dtmyticket->ticket_createdate;?>" style="width:auto;" readonly></td></tr>					
							<tr><th style="border:0;color:#ffffff;">Ticket&nbsp;Time  </th><th style="border:0;color:#ffffff;">:</th><td style="border:0;color:#000000;">
							<input type="text" value="<?=$dtmyticket->ticket_createtime;?>" style="width:auto;" readonly></td></tr>	
							<tr><th style="border:0;color:#ffffff;">Ticket&nbsp;Via  </th><th style="border:0;color:#ffffff;">:</th><td style="border:0;color:#000000;">
							<?if($dtmyticket->ticket_viaby=='By Phone'){?>
							<input type="text" value="<?=$dtmyticket->ticket_viaby;?>" style="width:auto;color:green;" readonly>
							<?}elseif($dtmyticket->ticket_viaby=='By Email'){?>
							<input type="text" value="<?=$dtmyticket->ticket_viaby;?>" style="width:auto;color:blue;" readonly>
							<?}elseif(($dtmyticket->ticket_viaby=='By Web')||($dtmyticket->ticket_viaby=='Via Web')){?>
							<input type="text" value="<?=$dtmyticket->ticket_viaby;?>" style="width:auto;color:black;" readonly>							
							<? } ?>
							</td></tr>	

							<? 
							$qcektipebrg = mysql_query("SELECT ITH_TICKET_HEADER.ticket_id, ITH_TICKET_HEADER.kode_tipebrg FROM ITH_TICKET_HEADER 
															JOIN ITH_TIPEBRG ON ITH_TICKET_HEADER.kode_tipebrg = ITH_TIPEBRG.kode_tipebrg
															WHERE ITH_TICKET_HEADER.kode_tipebrg != '' AND ITH_TICKET_HEADER.ticket_id = '$_GET[pid]'");
							$rcektipebrg = mysql_fetch_object($qcektipebrg);	
								if($rcektipebrg->kode_tipebrg == 'FSDBRGEQ') /* EQUIPMENT INFO DI TIKET DETAIL */
								#if($rcektipebrg->kode_tipebrg == 'FSDBRGEQREQINFO') /* EQUIPMENT INFO DI TIKET DETAIL */
							    {	
							?>
									<tr style="display:none;"><th style="border:0;color:#ffffff;">Item Name  </th><th style="border:0;color:#ffffff;">:</th><td style="border:0;color:#000000;">
									<?  							

									$qvSCat = mysql_query("SELECT DISTINCT ticket_id, no_permintaan, request_by, kode_tipebarang, kode_tipebarang_sw, kode_tipebarang_sp,
									kuantitas, nama_tipebarang, nama_tipebarang_sw, nama_tipebarang_sp
									FROM ITH_TIPEBARANG_KODE
									WHERE ticket_id = '$_GET[pid]'");
									while($rvSCat = mysql_fetch_array($qvSCat)) {
										$namatipebrgx = preg_replace('/[^A-Za-z0-9\  ]/', '', $rvSCat['nama_tipebarang']);

									?>  							
										<? if($rvSCat['kuantitas']!=''){?>
											<input type="text" value="<?=$rvSCat['kode_tipebarang'].'&nbsp;-&nbsp;'.$namatipebrgx.' : '.$rvSCat['kuantitas'].' Unit';?>" style="width:300%;color:blue;" readonly>
										<? } ?>
									<?  } ?>
								
							<?  }elseif($rcektipebrg->kode_tipebrg == 'FSDBRGSW') /* SMALLWARE INFO DI TIKET DETAIL */
							    { ?>
									<tr style="display:none;"><th style="border:0;color:#ffffff;">Item Name  </th><th style="border:0;color:#ffffff;">:</th><td style="border:0;color:#000000;">
									<?  							

									$qvSCat = mysql_query("SELECT DISTINCT ticket_id, no_permintaan, request_by, kode_tipebarang, 
									kode_tipebarang_sw, kode_tipebarang_sp,
									kuantitas, nama_tipebarang, nama_tipebarang_sw, nama_tipebarang_sp
									FROM ITH_TIPEBARANG_KODE
									WHERE ticket_id = '$_GET[pid]'");
									while($rvSCat = mysql_fetch_array($qvSCat)) {
										$namatipebrgx = preg_replace('/[^A-Za-z0-9\  ]/', '', $rvSCat['nama_tipebarang']);

									?>  							
										<? if($rvSCat['kuantitas']!=''){?>
											<input type="text" value="<?=$rvSCat['kode_tipebarang_sw'].'&nbsp;-&nbsp;'.$namatipebrgx.' : '.$rvSCat['kuantitas'].' Unit';?>" style="width:300%;color:blue;" readonly>
										<? } ?>
									<?  } #} ?>									
							<?  }elseif($rcektipebrg->kode_tipebrg == 'FSDBRGSP') /* SPAREPART INFO DI TIKET DETAIL */
							    { ?>
									<tr style="display:none;"><th style="border:0;color:#ffffff;">Item Name  </th><th style="border:0;color:#ffffff;">:</th><td style="border:0;color:#000000;">
									<?  							

									$qvSCat = mysql_query("SELECT DISTINCT ticket_id, no_permintaan, request_by, kode_tipebarang, 
									kode_tipebarang_sw, kode_tipebarang_sp,
									kuantitas, nama_tipebarang, nama_tipebarang_sw, nama_tipebarang_sp
									FROM ITH_TIPEBARANG_KODE
									WHERE ticket_id = '$_GET[pid]'");
									while($rvSCat = mysql_fetch_array($qvSCat)) {
										$namatipebrgx = preg_replace('/[^A-Za-z0-9\  ]/', '', $rvSCat['nama_tipebarang']);

									?>  							
										<? if($rvSCat['kuantitas']!=''){?>
											<input type="text" value="<?=$rvSCat['kode_tipebarang_sw'].'&nbsp;-&nbsp;'.$namatipebrgx.' : '.$rvSCat['kuantitas'].' Unit';?>" style="width:300%;color:blue;" readonly>
										<? } ?>
									<?  }  ?>									
							<?  } ?>
								</tr>
						</table>
					</td>
					
					<td style="width:500px">
						<table>
							<tr><th style="border:0;color:#ffffff;">Ticket&nbsp;For</th><th style="border:0;color:#ffffff;">:</th><td style="border:0;color:#000000;">
							<input type="text" value="<?=$dtmyticket->nama_departemen;?>" style="width:auto;" readonly></td></tr>
							<tr><th style="border:0;color:#ffffff;">Ticket&nbsp;Type  </th><th style="border:0;color:#ffffff;">:</th><td style="border:0;color:#000000;">
							<input type="text" value="<?=$dtmyticket->statuslaporan_name;?>" style="width:auto;" readonly></td></tr>
							
							<? if(($_SESSION['user_departemen']=='FSD WEST')||($_SESSION['user_departemen']=='FSD EAST')||($_SESSION['namajabatan']=='STORE')){ ?>
								<tr style="display:none;"><th style="border:0;color:#ffffff;">Category</th><th style="border:0;color:#ffffff;">:</th><td style="border:0;color:#000000;">
								<input type="text" value="<?=$dtmyticket->ticketsubcategory2_name;?>" style="width:155%;" readonly></td></tr>
								<tr><th style="border:0;color:#ffffff;">Category</th><th style="border:0;color:#ffffff;">:</th><td style="border:0;color:#000000;">
									<!--?
										$qcektipebrgs = mysql_query("SELECT kode_tipebrg FROM ITH_TICKET_HEADER where ticket_id = '$_GET[pid]'");
										$rcektipebrgs = mysql_fetch_object($qcektipebrgs);
										if($rcektipebrgs->kode_tipebrg=='RQS-03-000112'){ 
									?>
											<input type="text" value="<!?=ucwords(strtolower("COLD EQUIPMENT"));?>" style="width:auto;color:black;" readonly>
									<!?	}elseif($rcektipebrgs->kode_tipebrg=='RQS-03-000113'){  ?>
											<input type="text" value="<!?=ucwords(strtolower("HEAT EQUIPMENT"));?>" style="width:auto;color:black;" readonly>
									<!?	}elseif($rcektipebrgs->kode_tipebrg=='RQS-03-000114'){ ?>
											<input type="text" value="<!?=ucwords(strtolower("FOOD PROCESSING EQUIPMENT"));?>" style="width:auto;color:black" readonly>
									<!?	}
									?-->
									<? 
										$qcektipebrgs = mysql_query("SELECT kode_tipebrg, keterangan FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$_GET['pid']."'");
										$rcektipebrgs = mysql_fetch_object($qcektipebrgs);
										$keterangan = ucwords(strtolower($rcektipebrgs->keterangan));
									?>
									<? if(($rcektipebrgs->kode_tipebrg = 'RQS-03-000112')||($rcektipebrgs->kode_tipebrg = 'RQS-03-000113')||($rcektipebrgs->kode_tipebrg = 'RQS-03-000114')){?>
										<input type="text" value="<?="Request New Item";?>" style="width:auto;color:black;" readonly>
									<? }elseif(($rcektipebrgs->kode_tipebrg = 'RQS-03-000112replace')||($rcektipebrgs->kode_tipebrg = 'RQS-03-000113replace')||($rcektipebrgs->kode_tipebrg = 'RQS-03-000114replace')){?>
										<input type="text" value="<?="Request Replace Item";?>" style="width:auto;color:blue;" readonly>
									<? } ?></td>									
							<td style="border:0;text-align:right;"><center>
								<b>Report : </b><a href="myreportcetak.php?pid=<?=$ticket_id?>" title="MS.Excell Format File" value="Print">
								<img src="images\xls.png" alt="" width="20%" height="auto" ></img>
								</a>
								<? if(($_SESSION['user_level']=='101')||($_SESSION['user_level']=='102')||($_SESSION['user_level']=='103')){?>
								<a href="pdf/genratepdf.php?ticketID=<?=$ticket_id?>" target="_blank" title="PDF Format File" value="Print">
								<img src="images\pdfnew2.png" alt="" width="18%" height="auto" ></img>
								</a>
								<? } ?>
								<? if(($_SESSION['user_level']=='100')){?>
								<a href="pdf/genratepdfapproval.php?ticketID=<?=$ticket_id?>" target="_blank" title="PDF Format File" value="Print">
								<img src="images\pdfnew2.png" alt="" width="18%" height="auto" ></img>
								</a>
								<? } ?>
								</center>								
							</td>									
								</tr>
							<? }else{ ?>
								<tr><th style="border:0;color:#ffffff;">Category  </th><th style="border:0;color:#ffffff;">:</th><td style="border:0;color:#000000;">
								<!--<input type="text" value="<!?=$dtmyticket->ticketsubcategory2_name;?>" style="width:155%;" readonly></td>-->
									<? 
										$qcektipebrgs = mysql_query("SELECT kode_tipebrg, keterangan FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$_GET['pid']."'");
										$rcektipebrgs = mysql_fetch_object($qcektipebrgs);
										$keterangan = ucwords(strtolower($rcektipebrgs->keterangan));
									?>
									<? if(($rcektipebrgs->kode_tipebrg = 'RQS-03-000112')||($rcektipebrgs->kode_tipebrg = 'RQS-03-000113')||($rcektipebrgs->kode_tipebrg = 'RQS-03-000114')){?>
										<input type="text" value="<?="Request New Item";?>" style="width:auto;color:black;" readonly>
									<? }elseif(($rcektipebrgs->kode_tipebrg = 'RQS-03-000112replace')||($rcektipebrgs->kode_tipebrg = 'RQS-03-000113replace')||($rcektipebrgs->kode_tipebrg = 'RQS-03-000114replace')){?>
										<input type="text" value="<?="Request Replace Item";?>" style="width:auto;color:blue;" readonly>
									<? } ?></td>								
								<td style="border:0;text-align:right;"><center>
								<b>Report : </b><a href="myreportcetak.php?pid=<?=$ticket_id?>" title="MS.Excell Format File" value="Print">
								<img src="images\xls.png" alt="" width="20%" height="auto" ></img>
								</a>
								<? if(($_SESSION['user_level']=='101')||($_SESSION['user_level']=='102')||($_SESSION['user_level']=='103')){?>
								<a href="pdf/genratepdf.php?ticketID=<?=$ticket_id?>" target="_blank" title="PDF Format File" value="Print">
								<img src="images\pdfnew2.png" alt="" width="18%" height="auto" ></img>
								</a>
								<? } ?>
								<? if(($_SESSION['user_level']=='100')){?>
								<a href="pdf/genratepdfapproval.php?ticketID=<?=$ticket_id?>" target="_blank" title="PDF Format File" value="Print">
								<img src="images\pdfnew2.png" alt="" width="18%" height="auto" ></img>
								</a>
								<? } ?>
								</center>								
							</td>
								</tr>
							<? } ?>
							<tr>
							<th style="border:0;color:#ffffff;">Skala Priority  </th><th style="border:0;color:#ffffff;">:</th><td style="border:0;color:#000000;">
							<!--?if($dtmyticket->ticketpriority_id=='1'){?-->
							<? 
								$qCekSLA = mysql_query("SELECT ticketpriority_id,ticket_defaultsla FROM ITH_TICKET_HEADER 
											WHERE ticket_id = '$_GET[pid]'");
								$rCekSLA = mysql_fetch_object($qCekSLA); 
							?>
							<?if($rCekSLA->ticket_defaultsla=='1'){?>
							<input type="text" value="<?='High';?>" style="width:auto;color:red;" readonly>
							<?}elseif($rCekSLA->ticketpriority_id=='2'){?>
							<input type="text" value="<?='Medium';?>" style="width:auto;color:blue;" readonly>
							<?}elseif($rCekSLA->ticketpriority_id=='3'){?>
							<input type="text" value="<?='Low';?>" style="width:auto;color:black;" readonly>							
							<? }else{ ?>
							<input type="text" value="<?='High';?>" style="width:auto;color:red;" readonly>	
							<? } ?>
							</td>
							<!--?if($dtmyticket->ticketpriority_id==''){?>
							<th style="border:0;color:#ffffff;">Time&nbsp;Finish&nbsp;:
							<td style="border:0;color:#000000;">
							<input type="text" value="<!?='-';?>" style="width:150%;color:red;margin-left:-50px;" readonly>
							</td></th>	
							<!?}elseif($dtmyticket->ticketpriority_id!=''){?>							
							<th style="border:0;color:#ffffff;">Time&nbsp;Finish&nbsp;:
							<td style="border:0;color:#000000;"> 
							<!? 
								$qcektd = mysql_query("SELECT * FROM ITH_TICKETPRIORITY WHERE ticketpriority_id = '$dtmyticket->ticketpriority_id'");
								$rcektd = mysql_fetch_object($qcektd); 
								$nextTimeHour = (substr($dtmyticket->ticket_createtime,0,2))+$rcektd->ticketpriority_hour;							
								$timefinished = $dtmyticket->ticket_createtime+$nextTimeHour;
								$nextTimeMinutes = substr($dtmyticket->ticket_createtime,2);
								$totalTimeFinished = $nextTimeHour.$nextTimeMinutes;
								$TimeInterval = $nextTimeHour-(substr($dtmyticket->ticket_createtime,0,2));
							?>
							<input type="text" value="<!?=$totalTimeFinished;?>" style="width:150%;color:red;margin-left:-50px;" readonly>
							</td></th>
							<!? } ?-->
							</tr>			
							<tr>
							<th style="border:0;color:#ffffff;">Ticket&nbsp;Status  </th><th style="border:0;color:#ffffff;">:</th>
							<td style="border:0;color:#000000;">
							<?if($dtmyticket->ticketstatus_id=='1'){?>
							<input type="text" value="<?=$dtmyticket->ticketstatus_name;?>" style="width:auto;color:red;" readonly>
							<?}elseif($dtmyticket->ticketstatus_id=='2'){?>
							<input type="text" value="<?=$dtmyticket->ticketstatus_name;?>" style="width:auto;color:orange;" readonly>
							<?}elseif($dtmyticket->ticketstatus_id=='3'){?>
							<input type="text" value="<?=$dtmyticket->ticketstatus_name;?>" style="width:auto;color:black;" readonly>
							<?}elseif($dtmyticket->ticketstatus_id=='0'){?>
							<input type="text" value="<?=$dtmyticket->ticketstatus_name;?>" style="width:auto;color:blue;" readonly>
							<?}elseif($dtmyticket->ticketstatus_id=='5'){?>
							<input type="text" value="<?=$dtmyticket->ticketstatus_name;?>" style="width:auto;color:black;" readonly>
							<? } ?>
							</td>
								<? 
									$qcekbeforeReffTicket = mysql_query("SELECT ticketreferencestatus_id, ticketreference_id FROM ITH_TICKET_HEADER
									WHERE ticket_id = '".$_GET['pid']."'");
									$rcekbeforeReffTicket = mysql_fetch_object($qcekbeforeReffTicket);
									if($rcekbeforeReffTicket->ticketreference_id!=''){
								?>									
									<th style="border:0;color:#ffffff;">Ref&nbsp;ID</th>
									<td style="border:0;color:#000000;"><input type="text" value="<?=$rcekbeforeReffTicket->ticketreference_id;?>" style="width:160px;color:blue;margin-left:-30px;" readonly></td>
									<? }elseif($rcekbeforeReffTicket->ticketreference_id==''){ ?>		
									<th style="border:0;color:#ffffff;">Ticket&nbsp;Ref&nbsp;ID</th><th style="border:0;color:#ffffff;">:</th>
									<td style="border:0;color:#000000;"><input type="text" value="<?='-';?>" style="width:10px;color:blue;" readonly></td>									
									<? } ?>	
							</tr>			
						</table>  
					</td>
				</tr>
			</tbody>
		</table>
		<table class="table table-condensed table-bordered table-hover" cellpadding="0" cellspacing="0" style="">
		<tbody>
				<tr>
					<td style="width:200px">
						<table style="border:0;color:#000000;">
						
							<tr><th style="font-weight:normal;border:0;"><font color="#ffffff"><b>Ticket&nbsp;Subject : </b></font><br> <?=$dtmyticket->ticket_subject;?></th></tr>
							<tr><th style="border:0;color:#ffffff;">Ticket&nbsp;Description  </th></tr>						
							<tr><td style="border:0;color:#000000;"><?=$dtmyticket->ticket_problem;?></td></tr>											
						</table>  
					</td>				
				</tr>
		</tbody>		
		</table>			
<!-- ################################################ PERMINTAAN BARANG DARI CABANG ############################################################# -->
<!--? include("reqstore_admin.php");?-->
<? 
	$qCekTipeKodeBarang = mysql_query("SELECT DISTINCT * FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$_GET['pid']."'");
	$rCekTipeKodeBarang = mysql_fetch_object($qCekTipeKodeBarang);
?>

	<? if(($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000112move")&&($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000113move")&&
		  ($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000114move")){ ?>
			<? include("reqstore_admin_movement.php");?>
	<? }elseif($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000112move"){ ?>
			<? include("reqstore_admin_movement.php");?>
	<? }elseif($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000113move"){ ?>
			<? include("reqstore_admin_movement.php");?>
	<? }elseif($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000114move"){ ?>
			<? include("reqstore_admin_movement.php");?>
	<? }else{ ?>
			<? include("reqstore_admin.php");?>
	<? } ?>


<!-- ################################################## APPROVAL TRACKING ###################################################################### -->

<!-- ############################################################################################################################################ -->								
<!-- ################################################## ACTIVITY TRACKING ####################################################################### -->

		<!--? 
			$qCekTicketReffIDnya = mysql_query("SELECT ticketreferencestatus_id FROM ITH_TICKET_HEADER WHERE ticket_id = '".$_GET['pid']."'");
			$rCekTicketReffIDnya = mysql_fetch_object($qCekTicketReffIDnya);
		?-->
		<!--? if($rCekTicketReffIDnya->ticketreferencestatus_id!='1'){ ?>
			<p><!? /* include('approval_activity_tracking.php');*/ include('activity_tracking.php');?></p>
		<!--? }elseif($rCekTicketReffIDnya->ticketreferencestatus_id=='1'){ ?>
			<p><!--? /* include('approval_activity_tracking.php');*/ include('activity_trackingticketreff.php');?></p>
		<!--? } ?-->	

		<? 
			$qCekTicketReffIDnya = mysql_query("SELECT ticketreferencestatus_id FROM ITH_TICKET_HEADER WHERE ticket_id = '".$_GET['pid']."'");
			$rCekTicketReffIDnya = mysql_fetch_object($qCekTicketReffIDnya);
		?>
		<? if($rCekTicketReffIDnya->ticketreferencestatus_id!='1'){ ?>
			<? if($_GET['uid']!='001484'){?>
			<p>
				<? include('activity_tracking_magic.php');?>
			</p>
			<? }elseif($_GET['uid']=='001484'){?>
			<p>
				<?# include('activity_tracking_magicfsd.php');?>
				<? include('sequenceactivitiesfsd.php');?>
			</p>
			<? } ?>
		<? }elseif($rCekTicketReffIDnya->ticketreferencestatus_id=='1'){ ?>
			<p><? /* include('approval_activity_tracking.php');*/ include('activity_trackingticketreff.php');?></p>
		<? } ?>			
<!-- ############################################################################################################################################ -->								

					<br>		

<br> 
<div style="display:none;">
		<?
			$qcekimg = mysql_query("SELECT * FROM ITH_LOGUPLOADIMG where ticket_id = '$_GET[pid]'");
			$rcekimg = mysql_fetch_object($qcekimg);
			if($rcekimg->id_img ==''){
		?>
			<font color="#ffffff"><b><u>Image Uploaded By Store/User</u><br><center>Sorry, No Image Uploaded.</b></center></font>
		<? }else{ ?>
			<b><font color="Red">Image Uploaded By PIC</font></b>
			<link rel="stylesheet" href="css/w3.css">
			<center>	
					<table border="0" style="margin-top:20px;">
					<tr>
					<? 
						$qgetimg = mysql_query("SELECT * FROM ITH_LOGUPLOADIMG where ticket_id = '$_GET[pid]'");
						while($rgetimg = mysql_fetch_object($qgetimg)){
					?>
					<td> 
					<center><img src="<?="http://".$_SERVER['SERVER_NAME']."/".$rgetimg->img_location.$rgetimg->img_name;?>" style="height:120px;width:120px;margin-right:5px;margin-bottom:0px;" onclick="document.getElementById('<?=$rgetimg->id_img?>').style.display='block'"></img></center>
					</td>
					
				
					
					  <div id="<?=$rgetimg->id_img?>" class="w3-modal" onclick="this.style.display='none'">
						<span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
						<div class="w3-modal-content w3-animate-zoom" style="margin-top:-90px;">
						  <img src="<?='http://localhost/eoss/'.$rgetimg->img_location.$rgetimg->img_name?>" style="width:80%;margin-top:30px;margin-left:50px;">
						</div>
					  </div>
					  
					<? } ?>
					</tr>
					</table>
			</center>			
		<? } ?>
		<br> <br> <br> <br> <br> <br> 
		<?
			$qcekimg = mysql_query("SELECT * FROM ITH_LOGUPLOADIMGPIC where ticket_id = '$_GET[pid]'");
			$rcekimg = mysql_fetch_object($qcekimg);
			if($rcekimg->id_img ==''){
		?>
			<font color="#ffffff"><b><u>Image Uploaded By PIC</u><br><center>Sorry, No Image Uploaded.</b></center></font>
		<? }else{ ?>
			<b><font color="Blue">Image Uploaded By PIC</font></b>
			<link rel="stylesheet" href="css/w3.css">
			<div style="overflow-y:auto; width:100%;"> 
			<center>	
					<table border="0" style="margin-top:20px;">
					<tr>
					<? 
						$qgetimg = mysql_query("SELECT * FROM ITH_LOGUPLOADIMGPIC where ticket_id = '$_GET[pid]'");
						while($rgetimg = mysql_fetch_object($qgetimg)){
					?>
					<td>
					<center><img src="<?="http://".$_SERVER['SERVER_NAME']."/".$rgetimg->img_location.$rgetimg->img_name;?>" style="height:120px;width:120px;margin-right:5px;margin-bottom:0px;" onclick="document.getElementById('<?=$rgetimg->id_img?>').style.display='block'"></img></center>
					</td>
					
				
					
					  <div id="<?=$rgetimg->id_img?>" class="w3-modal" onclick="this.style.display='none'">
						<span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
						<div class="w3-modal-content w3-animate-zoom" style="margin-top:-90px;">
						  <img src="<?="http://".$_SERVER['SERVER_NAME']."/".$rgetimg->img_location.$rgetimg->img_name?>" style="width:80%;margin-top:30px;margin-left:50px;">
						</div>
					  </div>
					  
					<? } ?>
					</tr>
					</table>
			</center></div>			
		<? } ?>
		</br>		
	</div>
</div>
		<? 
			$pid = $_GET['pid']; $uid = $_GET['uid'];
		/*	$qcekstsapprvl = mysql_query("SELECT ticketapprovalstatus_id,ticketapprovalstatus_id2,ticketapprovalstatus_id3 FROM ITH_TICKET_HEADER
			WHERE ticket_id = '$pid'"); */
			$qcekstsapprvl = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_DEPARTEMEN.nama_departemen, app.ticketstatusapproval_activity, app.statusApproval, act.statusActivity, act.statusActivityID 
				, (case when ITH_TICKET_HEADER.ticketapproval_id1 = '".$_SESSION['user_nik']."' then 1 
					when ITH_TICKET_HEADER.ticketapproval_id2 = '".$_SESSION['user_nik']."' then 1 
					when ITH_TICKET_HEADER.ticketapproval_id3 = '".$_SESSION['user_nik']."' then 1 
					when ITH_TICKET_HEADER.ticketapproval_id4 = '".$_SESSION['user_nik']."' then 1 
					else 0 end
				) as myApproval, 

				(CASE WHEN DT.ticketdetail_pichandleby = '".$_SESSION['user_nik']."' THEN 1 
					WHEN DT.ticketdetail_pichandleby2 = '".$_SESSION['user_nik']."' THEN 1 
					WHEN DT.ticketdetail_pichandleby3 = '".$_SESSION['user_nik']."' THEN 1 
					WHEN DT.ticketdetail_pichandleby4 = '".$_SESSION['user_nik']."' THEN 1 
					ELSE 0 END
				) AS myPIC,	
				ITHUX.user_nik PicNik1,
				ITHUX2.user_nik PicNik2,
				ITHUX3.user_nik PicNik3,
				ITHUX4.user_nik PicNik4,					
				ITH_LOGAPPROVAL.ticketstatusapproval_activity, ITH_TICKETSTATUSAPRVL.ticketstatusapproval_name
				FROM ITH_TICKET_HEADER 
				LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
				LEFT JOIN ITH_TICKET_DETAIL DT ON DT.ticketdetail_id = ITH_TICKET_HEADER.ticket_id
				 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
				 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik

				 LEFT JOIN ITH_USER ITHUX ON DT.ticketdetail_pichandleby = ITHUX.user_nik
				 LEFT JOIN ITH_USER ITHUX2 ON DT.ticketdetail_pichandleby2 = ITHUX2.user_nik
				 LEFT JOIN ITH_USER ITHUX3 ON DT.ticketdetail_pichandleby3 = ITHUX3.user_nik
				 LEFT JOIN ITH_USER ITHUX4 ON DT.ticketdetail_pichandleby4 = ITHUX4.user_nik				
				 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen
				 LEFT JOIN ITH_LOGAPPROVAL ON ITH_TICKET_HEADER.ticket_id = ITH_LOGAPPROVAL.ticket_id
				 LEFT JOIN ITH_TICKETSTATUSAPRVL ON ITH_LOGAPPROVAL.ticketstatusapproval_activity = ITH_TICKETSTATUSAPRVL.ticketstatusapproval_id
				LEFT JOIN (
					SELECT il.ticket_id, il.ticketstatusapproval_activity, sts.ticketstatusapproval_name statusApproval 
					, MAX(STR_TO_DATE(CONCAT(il.ticketapproval_createddate, ' ', il.ticketapproval_createdtime), '%d/%m/%Y %h:%i')) 
					FROM ITH_LOGAPPROVAL il
					LEFT JOIN ITH_TICKETSTATUSAPRVL sts ON sts.ticketstatusapproval_id=il.ticketstatusapproval_activity
					WHERE il.ticketapproval_bynik = '".$_SESSION['user_nik']."' 
					GROUP BY il.ticket_id
					ORDER BY STR_TO_DATE(CONCAT(il.ticketapproval_createddate, ' ', il.ticketapproval_createdtime), '%d/%m/%Y %h:%i') DESC
				) app on app.ticket_id= ITH_TICKET_HEADER.ticket_id
				LEFT JOIN (
					SELECT ilr.ticket_id, ilr.ticketstatus_report, stsx.ticketstatus_name statusActivity, stsx.ticketstatusfrompic_id  statusActivityID  
					, MAX(STR_TO_DATE(CONCAT(ilr.ticketreport_createddate, ' ', ilr.ticketreport_createdtime), '%d/%m/%Y %h:%i')) 
					FROM ITH_LOGREPORT ilr
					LEFT JOIN ITH_TICKETSTATUS stsx ON stsx.ticketstatusfrompic_id=ilr.ticketstatus_report
					LEFT JOIN ITH_USER ithu ON ithu.user_realname=ilr.ticketrespond_by
					WHERE ilr.ticketrespond_by = '".$_SESSION['user_realname']."' 
					GROUP BY ilr.ticket_id
					ORDER BY STR_TO_DATE(CONCAT(ilr.ticketreport_createddate, ' ', ilr.ticketreport_createdtime), '%d/%m/%Y %h:%i') DESC
				) act ON act.ticket_id= ITH_TICKET_HEADER.ticket_id				
				WHERE ITH_TICKET_HEADER.ticket_id = '".$_GET['pid']."'");
			$rcekstsapprvl = mysql_fetch_object($qcekstsapprvl);
		#	echo "<br><b>User Level = ".$_SESSION['user_level'].'<br>';	
		#	echo "<br>Approval Status AM = ".$rcekstsapprvl->ticketapprovalstatus_id;
		#	echo "<br>Approval Status ROM = ".$rcekstsapprvl->ticketapprovalstatus_id2;
		#	echo "<br>Approval Status GMO = ".$rcekstsapprvl->ticketapprovalstatus_id3;
			#if(($rcekstsapprvl->ticketapprovalstatus_id3=='2')||($rcekstsapprvl->ticketapprovalstatus_id2=='2')||($rcekstsapprvl->ticketapprovalstatus_id=='2')){
		/*	if((($rcekstsapprvl->ticketapproval_by3== $_SESSION['user_realname'])||($rcekstsapprvl->ticketapproval_by2==$_SESSION['user_realname'])||($rcekstsapprvl->ticketapproval_by1==$_SESSION['user_realname']))
			&&(($rcekstsapprvl->ticketapprovalstatus_id3=='2')||($rcekstsapprvl->ticketapprovalstatus_id2=='2')||($rcekstsapprvl->ticketapprovalstatus_id=='2')))
			{
		*/		
		###echo "<br>".$rcekstsapprvl->ticketapprovalstatus_id;
		?>
		<table width="100%">
		<?
			if(($rcekstsapprvl->ticketapprovalstatus_id=='2'))
			{
		?>		
					
						<? if($_SESSION['user_level']==3){ ?><br>
							<?
								$qCekStatusApprovelAM = mysql_query("SELECT ticketapprovalstatus_id FROM ITH_TICKET_HEADER 
																	 WHERE ticket_id = '".$_GET['pid']."'");
								$rCekStatusApprovelAM = mysql_fetch_object($qCekStatusApprovelAM);
								if($rCekStatusApprovelAM->ticketapprovalstatus_id=='2'){	
							?>						
									<tr><th style="border:0;color:#ffffff;">Please Apporval This Ticket For Area Manager (AM) </th></tr>
									<tr><th style="border:0;color:#ffffff;"></th></tr>						
									<tr><td style="border:0;">
									<? 
									$qCekTipeKodeBarang = mysql_query("SELECT DISTINCT * FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$_GET['pid']."'");
									$rCekTipeKodeBarang = mysql_fetch_object($qCekTipeKodeBarang);
									?>
									<? if(($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000112move")&&($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000113move")&&
										  ($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000114move")){ ?>
											<? include("problem_checkapprovalareamanager_mail_movement.php");?>
									<? }elseif($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000112move"){ ?>
											<? include("problem_checkapprovalareamanager_mail_movement.php");?>
									<? }elseif($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000113move"){ ?>
											<? include("problem_checkapprovalareamanager_mail_movement.php");?>
									<? }elseif($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000114move"){ ?>
											<? include("problem_checkapprovalareamanager_mail_movement.php");?>
									<? }else{ ?> 
											<? include("problem_checkapprovalareamanager_mail.php");?>
									<? } ?>								
									<? /*include("problem_checkapprovalsubmgr.php");
									include("problem_checkapprovalareamanager_mail.php");*/ 
									?>
									</td></tr>	
							<? }elseif($rCekStatusApprovelAM->ticketapprovalstatus_id=='1'){ ?>	
								<? #echo "<br>".$rCekStatusApprovelAM->ticketapprovalstatus_id; ?>
									<center><image src="images/approveds2.png" style="text-align:center;background:(#7fd9fc, #6576aa);"></image><br>
									<font color="#ffffff"><b>Sorry X1, you have approved this ticket. thank you for your participation</b></center></font>
							<? } ?>	
						<? } ?>	
	<?      }elseif(($rcekstsapprvl->ticketapprovalstatus_id2=='2')&&($rcekstsapprvl->ticketapprovalstatus_id=='1'))
		    {
	?>							
						<? if($_SESSION['user_level']==3){ ?><br>
							<? 
								$qCekStatusApprovelAM2 = mysql_query("SELECT ticketapprovalstatus_id FROM ITH_TICKET_HEADER 
																	 WHERE ticket_id = '".$_GET['pid']."'");
								$rCekStatusApprovelAM2 = mysql_fetch_object($qCekStatusApprovelAM2);
								if($rCekStatusApprovelAM2->ticketapprovalstatus_id=='1'){
							?>	
								<center><image src="images/approveds2.png" style="text-align:center;background:(#7fd9fc, #6576aa);"></image><br>
								<font color="#ffffff"><b>A1 Sorry, you have approved this ticket. thank you for your participation</b></center></font>							
							<? } ?>
						<? }elseif($_SESSION['user_level']==8){ ?><br>
						<? 
							#echo "<br>MY TEST";
							#echo "<br><b>User Level = ".$_SESSION['user_level'].'<br>';	
							#echo "<br>Approval Status ROM = ".$rcekstsapprvl->ticketapprovalstatus_id2;
						?>
							<?
								$qCekStatusApprovelROM = mysql_query("SELECT ticketapprovalstatus_id2 FROM ITH_TICKET_HEADER 
																WHERE ticket_id = '".$_GET['pid']."'");
								$rCekStatusApprovelROM = mysql_fetch_object($qCekStatusApprovelROM);
								if($rCekStatusApprovelROM->ticketapprovalstatus_id2=='2'){	
							?>							
							
							<tr><th style="border:0;color:#ffffff;"><font color="#ffffff"><b>Please Apporval This Ticket For Regional Operation Manager (ROM)</b></font></th></tr>
							<tr><th style="border:0;color:#ffffff;"></th></tr>						
							<tr><td style="border:0;">
							<!--? include("problem_checkapprovalregionalmanager_mail.php");?-->
									<? 
									$qCekTipeKodeBarang = mysql_query("SELECT DISTINCT * FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$_GET['pid']."'");
									$rCekTipeKodeBarang = mysql_fetch_object($qCekTipeKodeBarang);
									?>
									<? if(($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000112move")&&($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000113move")&&
										  ($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000114move")){ ?>
											<? include("problem_checkapprovalregionalmanager_mail_movement.php");?>
									<? }elseif($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000112move"){ ?>
											<? include("problem_checkapprovalregionalmanager_mail_movement.php");?>
									<? }elseif($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000113move"){ ?>
											<? include("problem_checkapprovalregionalmanager_mail_movement.php");?>
									<? }elseif($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000114move"){ ?>
											<? include("problem_checkapprovalregionalmanager_mail_movement.php");?>
									<? }else{ ?> 
											<? include("problem_checkapprovalregionalmanager_mail.php");?>
									<? } ?>										
							</td></tr>	
							<? }elseif($rCekStatusApprovelROM->ticketapprovalstatus_id=='1'){ ?>	
									<center><image src="images/approveds2.png" style="text-align:center;background:(#7fd9fc, #6576aa);"></image><br>
									<font color="#ffffff"><b>Sorry X2, you have approved this ticket. thank you for your participation</b></center></font>
							<? } ?>	
						<? } ?>	
	<?      }elseif(($rcekstsapprvl->ticketapprovalstatus_id3=='2')&&($rcekstsapprvl->ticketapprovalstatus_id2=='1')&&($rcekstsapprvl->ticketapprovalstatus_id=='1'))
		    {
	?>							
						<? if($_SESSION['user_level']==1000){ ?><br>
							<? 
								$qCekStatusApprovelGMOFromROM = mysql_query("SELECT ticket_id,kode_tipebarang,kuantitas,
																			ticketapprovalstatusid_rom,ticketapprovalbynik_rom,ticketapprovalbyname_rom,ticketapprovaldate_rom,ticketapprovaltime_rom,
																			ticketapprovalstatusid_am,ticketapprovalbynik_am,ticketapprovalbyname_am,ticketapprovaldate_am,ticketapprovaltime_am,
																			ticketapprovalstatusid_gmo,ticketapprovalbynik_gmo,ticketapprovalbyname_gmo,ticketapprovaldate_gmo,ticketapprovaltime_gmo
																			FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$_GET['pid']."'");
								$rCekStatusApprovelGMOFromROM = mysql_fetch_object($qCekStatusApprovelGMOFromROM);							
								if($rCekStatusApprovelGMOFromROM->ticketapprovalstatusid_gmo!='-')
								{
							?>							
								<?
									$qCekStatusApprovelGMO = mysql_query("SELECT ticketapprovalstatus_id3 FROM ITH_TICKET_HEADER 
																		  WHERE ticket_id = '".$_GET['pid']."'");
									$rCekStatusApprovelGMO = mysql_fetch_object($qCekStatusApprovelGMO);
									if($rCekStatusApprovelGMO->ticketapprovalstatus_id3=='2'){	
								?>							
										<tr><th style="border:0;color:#fff;"><font color="#ffffff"><b>Please Apporval This Ticket For GM Operation (GMO)</b></font></th></tr>
										<tr><th style="border:0;color:#fff;"></th></tr>						
										<tr><td style="border:0;">
										<!--? include("problem_checkapprovalgmo_mail.php");?-->
									<? 
									$qCekTipeKodeBarang = mysql_query("SELECT DISTINCT * FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$_GET['pid']."'");
									$rCekTipeKodeBarang = mysql_fetch_object($qCekTipeKodeBarang);
									?>
									<? if(($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000112move")&&($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000113move")&&
										  ($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000114move")){ ?>
											<? include("problem_checkapprovalgmo_mail_movement.php");?>
									<? }elseif($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000112move"){ ?>
											<? include("problem_checkapprovalgmo_mail_movement.php");?>
									<? }elseif($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000113move"){ ?>
											<? include("problem_checkapprovalgmo_mail_movement.php");?>
									<? }elseif($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000114move"){ ?>
											<? include("problem_checkapprovalgmo_mail_movement.php");?>
									<? }else{ ?> 
											<? include("problem_checkapprovalgmo_mail.php");?>
									<? } ?>											
										</td></tr>	
								<? }elseif($rCekStatusApprovelGMO->ticketapprovalstatus_id3=='1'){ ?>	
										<center><image src="images/approveds2.png" style="text-align:center;background:(#7fd9fc, #6576aa);"></image><br>
										<font color="#ffffff"><b>Sorry X3, you have approved this ticket. thank you for your participation</b></center></font>
								<? } ?>									
							<? }elseif($rCekStatusApprovelGMOFromROM->ticketapprovalstatusid_gmo=='-'){ ?>	
									<!--<center><image src="images/forbidden_3d2.png" style="width:20%;height:auto;text-align:center;background:(#7fd9fc, #6576aa);"></image><br>
										<font color="#ffffff"><b>Sorry, you don't have access for approval. thank you.</b></center></font>
									-->
								<?
									$qCekStatusApprovelGMO = mysql_query("SELECT ticketapprovalstatus_id3 FROM ITH_TICKET_HEADER 
																		  WHERE ticket_id = '".$_GET['pid']."'");
									$rCekStatusApprovelGMO = mysql_fetch_object($qCekStatusApprovelGMO);
									if($rCekStatusApprovelGMO->ticketapprovalstatus_id3=='2'){	
								?>							
										<tr><th style="border:0;color:#fff;"><font color="#ffffff"><b>Please Apporval This Ticket For GM Operation (GMO)</b></font></th></tr>
										<tr><th style="border:0;color:#ffffff;"></th></tr>						
										<tr><td style="border:0;"><? include("problem_checkapprovalgmo_mail.php");?></td></tr>	
								<? }elseif($rCekStatusApprovelGMO->ticketapprovalstatus_id3=='1'){ ?>	
										<center><image src="images/approveds2.png" style="text-align:center;background:(#7fd9fc, #6576aa);"></image><br>
										<font color="#ffffff"><b>Sorry X4, you have approved this ticket. thank you for your participation</b></center></font>
								<? }else{ ?>	
									<center><image src="images/forbidden_3d2.png" style="width:20%;height:auto;text-align:center;background:(#7fd9fc, #6576aa);"></image><br>
										<font color="#ffffff"><b>Sorry X5, you don't have access for approval. thank you.</b></center></font>
								
								<? } ?>										
							<? } ?>									
						<? } ?>	
					</table> 
		<? } ?>			
		<!-- SEBELUM ADA TIKET REFERENSI -->			
		<? 
			#}elseif(($rcekstsapprvl->ticketapprovalstatus_id3=='1')||($rcekstsapprvl->ticketapprovalstatus_id2=='2')||($rcekstsapprvl->ticketapprovalstatus_id=='2')){
			if((($rcekstsapprvl->PicNik3 == $uid)||($rcekstsapprvl->PicNik2 == $uid)||($rcekstsapprvl->PicNik1 == $uid))&&($rcekstsapprvl->ticketstatus_id=='2')){
		?>		
					<table>
						<tr><th style="border:0;color:#ffffff;">Please Go To Action For This Request</th></tr>
						<tr><th style="border:0;color:#ffffff;"></th></tr>			
						<tr><td style="border:0;"><? include("problem_checkapprovalpic.php");?></td></tr>	
					</table>
					
		<!-- SETELAH ADA TIKET REFERENSI -->			
		<?
			#}elseif(($rcekstsapprvl->ticketapprovalstatus_id3=='1')||($rcekstsapprvl->ticketapprovalstatus_id2=='2')||($rcekstsapprvl->ticketapprovalstatus_id=='2')){
			}elseif((($rcekstsapprvl->PicNik3 == $uid)||($rcekstsapprvl->PicNik2 == $uid)||($rcekstsapprvl->PicNik1 == $uid))&&($rcekstsapprvl->ticketstatus_id=='2')&&($rcekstsapprvl->ticketreferencestatus_id=='1')){
		?>		
					<table>
						<tr><th style="border:0;color:#ffffff;">Please Go To Action For This Request</th></tr>
						<tr><th style="border:0;color:#ffffff;"></th></tr>			
						<tr><td style="border:0;"><? include("problem_checkapprovalpic.php");?></td></tr>	
					</table> 
		<?
		#	}elseif(($rcekstsapprvl->ticketapprovalstatus_id3=='1')||($rcekstsapprvl->ticketapprovalstatus_id2=='1')||($rcekstsapprvl->ticketapprovalstatus_id=='1')){
			}elseif(($rcekstsapprvl->ticketapprovalstatus_id3=='1')){
		?>		
					<!--<center><image src="images/approveds2.png" style="text-align:center;background:(#7fd9fc, #6576aa);"></image><br>
					<font color="#ffffff"><b>Sorry X6, you have approved this ticket. thank you for your participation</b></center></font>-->
					<!-- ###################################### ASSIGNMENT FROM AREA MANAGER TO OPR TECHNICIAN ###################################### -->
					<!--? include("reqstore_admin.php");?-->
					<? 
						$qCekTipeKodeBarang = mysql_query("SELECT DISTINCT * FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$_GET['pid']."' AND ticket_needassist = 'YES'");
						$rCekTipeKodeBarang = mysql_fetch_object($qCekTipeKodeBarang);
					?>	
						<!-- ASSIGNMENT FROM FSD MGR -->
						<? if($_GET['uid']=='001484'){ ?>
							<? if($rCekTipeKodeBarang->transfer_date==''){ ?>
								<? if($rCekTipeKodeBarang->ticket_needassist=='YES'){ //NEED FSD TECHNICIAN ASSIST ?> 
										<br><!--NEED FSD TECHNICIAN ASSIST--><? #include("reqstore_admin_movement_transfer3.php");?>
										<? if($rCekTipeKodeBarang->ticketapprovalstatusid_gmo=='2'){ ?>
										<br><!--NEED FSD TECHNICIAN ASSIST--><? include("reqstore_admin_movement_transfer4.php");?>	
										<? }elseif($rCekTipeKodeBarang->ticketapprovalstatusid_gmo=='1'){ ?>
											<center><image src="images/approveds2.png" style="text-align:center;background:(#7fd9fc, #6576aa);"></image><br>
											<font color="#ffffff"><b>Sorry, You Have Assigned Technician.<br>Thankyou For Your Participation</b></center></font>
										<? } ?>
								<? } ?>
								
							<? }elseif($rCekTipeKodeBarang->transfer_date!=''){ ?>
								
									<center><image src="images/approveds2.png" style="text-align:center;background:(#7fd9fc, #6576aa);"></image><br>
									<font color="#ffffff"><b>Sorry, You Have Assigned Technician.<br>Thankyou For Your Participation</b></center></font>
								
							<? } ?>	
						<? } ?>								
					<? 
						$qCekTipeKodeBarang2 = mysql_query("SELECT DISTINCT * FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$_GET['pid']."' AND ticket_needassist = 'NO'");
						$rCekTipeKodeBarang2 = mysql_fetch_object($qCekTipeKodeBarang2);
					?>		
						<!-- ASSIGNMENT FROM AREA MGR -->
						<? if(($_SESSION['user_level']=='3')&&($_GET['uid']!='001484')){ ?>					
							<? if($rCekTipeKodeBarang2->transfer_date=='') { ?>
								<? if($rCekTipeKodeBarang2->ticket_needassist=='NO'){ //NEED FSD TECHNICIAN ASSIST ?> 
										<br><!--NEED FSD TECHNICIAN ASSIST--><? #include("reqstore_admin_movement_transfer3.php");?>
										<? include("reqstore_admin_movement_transfer3.php");?>	
								<? } ?>
							<? }elseif($rCekTipeKodeBarang2->transfer_date!=''){ ?>
								<center><image src="images/approveds2.png" style="text-align:center;background:(#7fd9fc, #6576aa);"></image><br>
								<font color="#ffffff"><b>Sorry, You Have Approved This Ticket And You Have Assigned Technician.<br>Thankyou For Your Participation</b></center></font>
							<? } ?>					
						<? } ?>								
					
					<!-- HAS BEEN APPROVAL FROM GMO -->	
					<? if(($_GET['uid']=='027873')){ ?>
									<div style="color:#fff;font-weight:bold;"><center><image src="./images/approveds2.png"></image><br>
									Sorry, You Have Approved This Ticket. Thankyou For Your Participation</center></div>
					<? } ?>
										
						
					
		
					
		<?
			}
		?>

</div>
<!--<script type="text/javascript">
function checkHandle(obj) {
	var sel = obj.val();
	if (sel == 2) {$('#handleby').show();}
	else {$('#handleby').hide();}
}
</script> -->
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
					ticketuserfeedback_id: {
						required: "Feed Back ini Harus Dipilih"
						
					}
					
				}
			});
		});
</script>		
<? }elseif($_GET['uid']!='001484'){?>

    <? include('updateuser_respondetransfer_comment.php');?>
<? } ?>	