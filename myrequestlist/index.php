<?php 

// memanggil berkas koneksi.php
require 'koneksi.php';
koneksi_buka();
@session_start();

?>



<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="utf-8">

	<title>Service Desk</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="">

	<meta name="author" content="">



	<link rel="shortcut icon" href="favicon.png"/>

	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

</head>
<body style="background-color:#fff;">

<!-- DatePicker -->
<!--<link rel="stylesheet" href="datepicker/base/jquery.ui.all.css" type="text/css">
 <script type="text/javascript" src="datepicker/jquery.js"></script>
 <script type="text/javascript" src="datepicker/jquery.ui.core.js"></script>
 <script type="text/javascript" src="datepicker/jquery.ui.datepicker.js"></script>
 <script type="text/javascript" src="datepicker/jquery.ui.widget.js"></script>
 <link rel="stylesheet" type="text/css" href="datep/jquery.datetimepicker.css"/>		

 <script src="datep/jquery.js"></script>
<script src="datep/jquery.datetimepicker.js"></script>-->
<script type="text/javascript" src="scripts/jquery.min.js"></script>
<script type="text/javascript" src="scripts/jquery.form.js"></script>
<?php 
	//$datenow = date('YY "/" MM "/" DD');
	//$hitdatenow = $datenow + 6;
	$datenow = '-1970/01/01';
	$hitdatenow = '+1970/01/08';
?>
<?php //if (empty($_BASE_PATH)) {header("location:index.php");} 

$ticket_id = $_GET['pid'];
$ticketdetail_id = $_GET['pid'];
$userlevel=$_SESSION['user_level'];?>
<!--<script>

		jQuery('#date_from').datepicker({
			//mask:'9999/19/39 29:59',
			//mask:'39 19 9999 29:59',
			changeMonth: true,
			changeYear: true ,
			//dateFormat: 'd MM yy',
			//formatDate:'d.m.Y',
			///dateFormat: 'd MM yy',
			timepicker:false,
			//dateFormat: 'j F Y',
			//timeFormat: 'hh:mm',
			/*
			onGenerate:function( ct ){
			jQuery(this).find('.xdsoft_date.xdsoft_weekend')			
			.addClass('xdsoft_disabled');
			},
			weekends:['01.08.2014','02.08.2014','03.08.2014','04.08.2014','05.08.2014','06.08.2014'],
			*/			
			//formatDate:'Y/m/d',
			// formatDate:'DD.MM.YYYY',
			// format:'d m Y',
			 format:'j F Y',
			 //minDate:'-1970/01/01',//yesterday is minimum date(for today use 0 or -1970/01/01)
			// maxDate:'+1970/01/08'//tommorow is maximum date calendar
			});   
</script>
<script>
		jQuery('#date_to').datepicker({
			changeMonth: true,
			changeYear: true ,
			timepicker:false,
			 format:'j F Y',
			});   
</script>-->

<!--<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">-->

<!-- jQuery Code executes on Date Format option ----->

<script>
$(document).ready(function() {
// Datepicker Popups calender to Choose date.
	$(function() {
	$("#datepicker").datepicker();
	// Pass the user selected date format.
		//$("#format").change(function() {
			//$("#datepicker").datepicker("option", "dateFormat", $(this).val());
		//}
		);
	});
});
</script>
<script>
$(document).ready(function() {
// Datepicker Popups calender to Choose date.
	$(function() {
	$("#datepicker2").datepicker();
	// Pass the user selected date format.
		//$("#format").change(function() {
			//$("#datepicker").datepicker("option", "dateFormat", $(this).val());
		//}
		);
	});
});
</script>
<style>
button.filter {
    background: #ff9900;
    border: 2px solid white;
    border-radius: 11px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 1);
    color: black;
    cursor: pointer;
    font-size: 10pt;
    font-weight: bold;
    padding: 5px 10px;
    text-shadow: 0 1px 1px white;
}
</style>

	<div class="container" style="margin-left:5px;width:95%;height:auto;margin-top:25px;">
		<div class="row">
				<h3>	
<form id="formfilter">				
				<div style="margin-left:15px;">
				<table class="table table-hover" cellpadding="0" cellspacing="0" style="border:0;display:none;">				
				<?if(($userlevel=='4')||($userlevel=='99')||($userlevel=='1001')||($userlevel=='1000')||($userlevel=='7')||
				($userlevel=='21')||($userlevel=='22')||($userlevel=='23')||($userlevel=='24')||
				($userlevel=='100')||($userlevel=='101')||($userlevel=='102')){ /* ROM */ ?>
						<tr>
									<td><label style="width:70px;">ROM :</label></td>
									<td>
										<select class="input-small" name="romfrom_sc" style="width:220px;">
										<option value="">-- ALL --</option>
										<?
											$qvromfrom = mysql_query("SELECT usergroup_kd,usergroup_name FROM ITH_USERGROUP_REGION");
											while($rvromfrom = mysql_fetch_object($qvromfrom)){
										?>											
											<option value="<?=$rvromfrom->usergroup_kd?>"><?=ucwords(strtolower($rvromfrom->usergroup_name))?></option>											
										<?}?>	
										</select>
									</td>
									<td style="margin-left:0px;"><label style="width:50px;">To :</label></td>
									<td>
										<select class="input-small" name="romto_sc" style="width:220px;">
											<option value="">-- ALL --</option>
										<?
											$qvromto = mysql_query("SELECT usergroup_kd,usergroup_name FROM ITH_USERGROUP_REGION");
											while($rvromto = mysql_fetch_object($qvromto)){
										?>											
											<option value="<?=$rvromto->usergroup_kd?>"><?=ucwords(strtolower($rvromto->usergroup_name))?></option>											
										<?}?>
										</select>
									</td>
						</tr>
						
						<tr>
									<td><label style="width:70px;">AREA :</label></td>
									<td>
										<select class="input-small" name="areafrom_sc" style="width:220px;">
											<option value="">-- ALL --</option>
										<?
											$qvareafrom = mysql_query("SELECT usersubgroup_kd,usersubgroup_name FROM ITH_USERGROUP_AREA");
											while($rvareafrom = mysql_fetch_object($qvareafrom)){
										?>											
											<option value="<?=$rvareafrom->usersubgroup_kd?>"><?=ucwords(strtolower($rvareafrom->usersubgroup_name))?></option>											
										<?}?>
										</select>
									</td>
									<td style="margin-left:0px;"><label style="width:50px;">To :</label></td>
									<td>
										<select class="input-small" name="areato_sc" style="width:220px;">
											<option value="">-- ALL --</option>
										<?
											$qvareato = mysql_query("SELECT usersubgroup_kd,usersubgroup_name FROM ITH_USERGROUP_AREA");
											while($rvareato = mysql_fetch_object($qvareato)){
										?>											
											<option value="<?=$rvareato->usersubgroup_kd?>"><?=ucwords(strtolower($rvareato->usersubgroup_name))?></option>											
										<?}?>
										</select>
										</select>
									</td>
						</tr>
				
						<tr>
									<td><label style="width:70px;">STORE :</label></td>
									<td>
										<select class="input-small" name="storefrom_sc" style="width:220px;">
											<option value="">-- ALL --</option>
										<?
											$qvstorefrom = mysql_query("SELECT usersubgroup2_kd,usersubgroup2_name FROM ITH_USERGROUP_STORE");
											while($rvstorefrom = mysql_fetch_object($qvstorefrom)){
										?>											
											<option value="<?=$rvstorefrom->usersubgroup2_kd?>"><?=ucwords(strtolower($rvstorefrom->usersubgroup2_name))?></option>											
										<?}?>
										</select>
									</td>
									<td style="margin-left:0px;"><label style="width:50px;">To :</label></td>
									<td>
										<select class="input-small" name="storeto_sc" style="width:220px;">
											<option value="">-- ALL --</option>
										<?
											$qvstoreto = mysql_query("SELECT usersubgroup2_kd,usersubgroup2_name FROM ITH_USERGROUP_STORE");
											while($rvstoreto = mysql_fetch_object($qvstoreto)){
										?>											
											<option value="<?=$rvstoreto->usersubgroup2_kd?>"><?=ucwords(strtolower($rvstoreto->usersubgroup2_name))?></option>											
										<?}?>
										</select>
									</td>
						</tr>	
				<?}elseif($userlevel=='3'){ /* AREA */ ?>						
						<!--<tr>
									<td><label style="width:70px;">AREA :</label></td>
									<td>
										<select class="input-small" name="areafrom_sc" style="width:220px;">
											<option value="">-- ALL --</option>
											<option value="0001">AREA I-1</option>
											<option value="0002">AREA I-2</option>
										</select>
									</td>
									<td style="margin-left:0px;"><label style="width:50px;">To :</label></td>
									<td>
										<select class="input-small" name="areato_sc" style="width:220px;">
											<option value="">-- ALL --</option>
											<option value="0001">AREA I-1</option>
											<option value="0002">AREA I-2</option>
										</select>
									</td>
						</tr>-->
				
						<tr>
									<td><label style="width:70px;">STORE :</label></td>
									<td>
										<select class="input-small" name="storefrom_sc" style="width:220px;">
											<option value="">-- ALL --</option>
											<option value="0001">STORE I-1</option>
											<option value="0002">STORE I-2</option>
										</select>
									</td>
									<!--<td style="margin-left:0px;"><label style="width:50px;display:none;">To :</label></td>
									<td>
										<select class="input-small" name="storeto_sc" style="width:220px;display:none;">
											<option value="">-- ALL --</option>
											<option value="0001">STORE I-1</option>
											<option value="0002">STORE I-2</option>
										</select>
									</td>--> 
								<td><label style="width:80px; margin-left:0px;">Status :</label></td>
								<td>
									<select class="input-small" name="statusticket_sc" style="width:150px;">
										<option value="6">-- ALL --</option>										
										<option value="1">Open</option>
										<option value="2">On Process</option>
										<option value="3">Cancel</option>
										<option value="0">Solved</option>
										<option value="5">Closed</option>
										
									</select>
								</td>
							<td><label style="width:80px; margin-left:0px;">Support By :</label></td>
							<td><select class="input-small" id="supportby_sc" name="supportby_sc" style="width:120px;">
										<option value="6">-- ALL --</option>
										<option value="1">ITD</option>
										<option value="7">FSD ALL</option>
										<option value="2">FSD EAST</option>
										<option value="3">FSD WEST</option>
										<option value="4">SDD</option>
							</select>
							</td>								
						</tr>	
				<?}elseif(($userlevel=='2')||($userlevel=='1')){ /* Store */ ?>	
						<!--<tr>
									<td><label style="width:70px;">STORE :</label></td>
									<td>
										<select class="input-small" name="storefrom_sc" style="width:220px;">
											<option value="">-- ALL --</option>
											<option value="0001">STORE I-1</option>
											<option value="0002">STORE I-2</option>
										</select>
									</td>
									<td style="margin-left:0px;"><label style="width:50px;">To :</label></td>
									<td>
										<select class="input-small" name="storeto_sc" style="width:220px;">
											<option value="">-- ALL --</option>
											<option value="0001">STORE I-1</option>
											<option value="0002">STORE I-2</option>
										</select>
									</td>
						</tr>	-->
				<?}elseif($userlevel=='7'){ /* RSC */?>
						<tr>
									<td><label style="width:70px;">RSC :</label></td>
									<td>
										<select class="input-small" name="romfrom_sc" style="width:220px;">
											<option value="">-- ALL --</option>
											<option value="0001">RSC I-1</option>
											<option value="0002">RSC I-2</option>
										</select>
									</td>
									<td style="margin-left:0px;"><label style="width:50px;">To :</label></td>
									<td>
										<select class="input-small" name="romto_sc" style="width:220px;">
											<option value="">-- ALL --</option>
											<option value="0001">RSC I-1</option>
											<option value="0002">RSC I-2</option>
										</select>
									</td>
						</tr>
						
						<tr>
									<td><label style="width:70px;">DEPT :</label></td>
									<td>
										<select class="input-small" name="areafrom_sc" style="width:220px;">
											<option value="">-- ALL --</option>
											<option value="0001">DEPT I-1</option>
											<option value="0002">DEPT I-2</option>
										</select>
									</td>
									<td style="margin-left:0px;"><label style="width:50px;">To :</label></td>
									<td>
										<select class="input-small" name="areato_sc" style="width:220px;">
											<option value="">-- ALL --</option>
											<option value="0001">DEPT I-1</option>
											<option value="0002">DEPT I-2</option>
										</select>
									</td>
						</tr>
				
						<tr>
									<td><label style="width:70px;">SUB DEPT :</label></td>
									<td>
										<select class="input-small" name="storefrom_sc" style="width:220px;">
											<option value="">-- ALL --</option>
											<option value="0001">SUB&nbsp;DEPT I-1</option>
											<option value="0002">SUB&nbsp;DEPT I-2</option>
										</select>
									</td>
									<td style="margin-left:0px;"><label style="width:50px;">To :</label></td>
									<td>
										<select class="input-small" name="storeto_sc" style="width:220px;">
											<option value="">-- ALL --</option>
											<option value="0001">SUB&nbsp;DEPT I-1</option>
											<option value="0002">SUB&nbsp;DEPT I-2</option>
										</select>
									</td>
						</tr>	
				<?}elseif($userlevel=='5'){?>						
						<tr>
									<td><label style="width:70px;">DEPT :</label></td>
									<td>
										<select class="input-small" name="areafrom_sc" style="width:220px;">
											<option value="">-- ALL --</option>
											<option value="0001">DEPT I-1</option>
											<option value="0002">DEPT I-2</option>
										</select>
									</td>
									<td style="margin-left:0px;"><label style="width:50px;">To :</label></td>
									<td>
										<select class="input-small" name="areato_sc" style="width:220px;">
											<option value="">-- ALL --</option>
											<option value="0001">DEPT I-1</option>
											<option value="0002">DEPT I-2</option>
										</select>
									</td>
						</tr>
				
						<tr>
									<td><label style="width:70px;">SUB&nbsp;DEPT&nbsp;:</label></td>
									<td>
										<select class="input-small" name="storefrom_sc" style="width:220px;">
											<option value="">-- ALL --</option>
											<option value="0001">SUB&nbsp;DEPT I-1</option>
											<option value="0002">SUB&nbsp;DEPT I-2</option>
										</select>
									</td>
									<td style="margin-left:0px;"><label style="width:50px;">To :</label></td>
									<td>
										<select class="input-small" name="storeto_sc" style="width:220px;">
											<option value="">-- ALL --</option>
											<option value="0001">SUB&nbsp;DEPT I-1</option>
											<option value="0002">SUB&nbsp;DEPT I-2</option>
										</select>
									</td>
						</tr>		
				<?}elseif(($userlevel=='6')){?>	
						<tr>
									<td><label style="width:70px;">SUB&nbsp;DEPT&nbsp;:</label></td>
									<td>
										<select class="input-small" name="storefrom_sc" style="width:220px;">
											<option value="">-- ALL --</option>
											<option value="0001">SUB&nbsp;DEPT I-1</option>
											<option value="0002">SUB&nbsp;DEPT I-2</option>
										</select>
									</td>
									<td style="margin-left:0px;"><label style="width:50px;">To :</label></td>
									<td>
										<select class="input-small" name="storeto_sc" style="width:220px;">
											<option value="">-- ALL --</option>
											<option value="0001">SUB&nbsp;DEPT I-1</option>
											<option value="0002">SUB&nbsp;EPT I-2</option>
										</select>
									</td>
						</tr>	
				<? } ?>
				</table>
				<table class="table table-hover" cellpadding="0" cellspacing="0" style="border:0;">
				<?
				#$mydate = date('d/m/Y', strtotime('today - 02 days'));
				$mydate = date('d/m/Y', strtotime('today - 30 days'));
				/*$mydate = date('d/m/Y', strtotime('today + 30 days'));*/
				$datenow = date('d/m/Y');
				#$mydate = '01/01/2017';
				#$datenow = '01/02/2017';
				?>					
				<tr>
					<td><label style="width:30px;">Date&nbsp;Req:</label></td>
					<td><p id="dtfrom_sc" name="dtfrom_sc" style="font-size:10pt;">
							&nbsp;&nbsp; &nbsp;<input type="text" id="dtfrom_sc" name="dtfrom_sc" class="date start" style="margin-left:15px;width:60%;" value="<?=$mydate?>"/>  							
					</p></td>
					
					<td style="width:30px;margin-left:0px;"><label>To :</label></td>
							<td><p id="dtto_sc" name="dtto_sc" style="font-size:10pt;">
							&nbsp;&nbsp; &nbsp;<input type="text" id="dtto_sc" name="dtto_sc" class="date end" style="margin-left:-35px;width:80%;" value="<?=$datenow?>"/>
							</p></td>
					  <script type="text/javascript" src="../jquery/jquery.min.v11.js"></script>

					  <script type="text/javascript" src="js/jquery.timepicker.js"></script>
					  <link rel="stylesheet" type="text/css" href="js/jquery.timepicker.css" />

					  <script type="text/javascript" src="js/lib/bootstrap-datepicker.js"></script>
					  <link rel="stylesheet" type="text/css" href="js/lib/bootstrap-datepicker.css" />

					  <script type="text/javascript" src="js/lib/site.js"></script>
					  <link rel="stylesheet" type="text/css" href="js/lib/site.css" />
						<!--<script src="http://jonthornton.github.io/Datepair.js/dist/datepair.js"></script>
						<script src="http://jonthornton.github.io/Datepair.js/dist/jquery.datepair.js"></script>-->
						<script src="js/datepair.js"></script>
						<script src="js/jquery.datepair.js"></script>
						<script>
							/*$('#datefrom_sc .time').timepicker({
								'showDuration': true,
								'timeFormat': 'g:ia'
							});*/ 

							$('#dtfrom_sc .date').datepicker({
								/*'format': 'd MM yyyy',*/
								'format': 'dd/mm/yyyy',
								'autoclose': true
							});

							$('#dtfrom_sc').datepair();
						</script>
						<script>
							/*$('#dateto_sc .time').timepicker({
								'showDuration': true,
								'timeFormat': 'g:ia'
							});	*/

							$('#dtto_sc .date').datepicker({
								/*'format': 'd MM yyyy',*/
								'format': 'dd/mm/yyyy',
								'autoclose': true
							});

							$('#dtto_sc').datepair();
						</script>
						<?if($userlevel!='3'){?>
							
							<td><label style="width:50px; margin-left:0px;">Status :</label></td>
							<td>
									<select class="input-small" id="statusticket_sc" name="statusticket_sc" style="width:130px;">
									<option value="">-- ALL --</option>										
										<option value="1">Open</option>
										<option value="2">On Process</option>										
										<option value="0">Solved</option>
										<option value="5">Closed</option>
										<option value="3">Cancel</option>
									</select>
							</td>	
							<td><label style="width:50px; margin-left:0px;">Support By :</label></td>
							<td>
								<? if($_SESSION['udeptid']=='IT'){?>
								<select class="input-small" id="supportby_sc" name="supportby_sc" style="width:120px;" readonly>
										<option value="1">ITD</option>
								</select>		
								<? }elseif($_SESSION['udeptid']=='FSD'){?>
								<select class="input-small" id="supportby_sc" name="supportby_sc" style="width:120px;" readonly>								
										<option value="7">FSD ALL</option>				
										<option value="2" <?=($_SESSION['user_departemen']=='FSD EAST'?"selected":"")?>>FSD EAST</option>									
										<option value="3" <?=($_SESSION['user_departemen']=='FSD WEST'?"selected":"")?>>FSD WEST</option>
								</select>		
								<? }elseif($_SESSION['udeptid']=='SDD'){?>
								<select class="input-small" id="supportby_sc" name="supportby_sc" style="width:120px;" readonly>
										<option value="4">SDD</option>
								</select>	
								<? }elseif($_SESSION['udeptid']=='OPR'){?>
								<select class="input-small" id="supportby_sc" name="supportby_sc" style="width:120px;" readonly>
										<option value="5">OPR</option>
								</select>										
								<? }elseif($_SESSION['udeptid']=='GENERAL MANAGER'){?>
								<select class="input-small" id="supportby_sc" name="supportby_sc" style="width:120px;">
										<option value="6">ALL</option>
										<option value="1">ITD</option>
										<option value="7">ALL FSD</option>										
										<option value="2">FSD EAST</option>
										<option value="3">FSD WEST</option>
										<option value="4">SDD</option>
								</select>	
								<? }elseif($_SESSION['udeptid']=='ADVISOR'){?>
								<select class="input-small" id="supportby_sc" name="supportby_sc" style="width:120px;">
										<option value="6">ALL</option>
										<option value="1">ITD</option>
										<option value="7">ALL FSD</option>										
										<option value="2">FSD EAST</option>
										<option value="3">FSD WEST</option>
										<option value="4">SDD</option>
								</select>	
								<? }elseif($_SESSION['udeptid']=='CHIEF MARKETING OFFICER'){?>
								<select class="input-small" id="supportby_sc" name="supportby_sc" style="width:120px;">
										<option value="7">ALL FSD</option>										
										<option value="2">FSD EAST</option>
										<option value="3">FSD WEST</option>
										<option value="4">SDD</option>
								</select>	
								<? } ?>	
							</td>	
													
						<? } ?>		
					
           <!-- <td><label style="width:80px; margin-left:0px;">Support By :</label></td>
			<td><select name="support" id="support" style="width:120px">
				<option	value=""> ALL </option>
				<option	value="IT"> IT </option>
				<option	value="High"> FSD EAST </option>
				<option	value="Medium"> FSD WEST </option>
				<option	value="FSD"> FSD ALL </option>
				<option	value="SDD"> SDD </option>
			</select>
			</td>-->
			

				</tr>				
				</table>
				
				<table class="table table-condensed table-bordered table-hover" cellpadding="0" cellspacing="0" style="">
				<tr>
							<td>							
								<!--<input style=" height:30px;width:40px;margin-top:-12px;" type="button" id="filter" class="filter" value="Submit" />-->
								<center><!--<button id="klikfilter" class="filter" value="Submit">Display</button>-->
								<a href="javascript:void(0)" id="klikfilter" class="filter-button" id="klikfilter" >Display</a>
								</center>
							</td>
						</tr>
				</table>
			
				</div>	   
				</form>
				<br>
				<style>
				input.span2, textarea.span2, .uneditable-input.span2 {
					width: 150px;
				}
				</style>
				<div class="input-prepend pull-right" style="margin-top:-50px; width:45%;">
					<? if(($_SESSION['user_level']=='100')||($_SESSION['user_level']=='101')||
						($_SESSION['user_level']=='102')||($_SESSION['user_level']=='103')||
						($_SESSION['user_level']=='104'))
						{?>
					<div class="checkbox" style="display:none;">
						<label>
							<input type="checkbox" id="onlyForMe"> Only For me
						</label>
					</div>					
					<?}else{?>
					<div class="checkbox">
						<label>
							<input type="checkbox" id="onlyForMe"> Only For me
						</label>
					</div>
					<? } ?>
				</div>
				<div class="input-prepend pull-right" style="margin-top:-50px;">
						<span class="add-on"><i class="icon-search"></i></span>
						<input class="span2" id="prependedInput" style="width:250px;" type="text" name="pencarian" placeholder="Search By Ticket ID, Subject or Store">
				</div>
		
			<div style="margin-left:15px;margin-top:-50px;font-family:Arial,Helvetica,sans-serif;font-size: 13px;">
					<!--<font size="4">&nbsp;List Request</font>-->
					<font size="4">&nbsp;Daftar PeLaporan</font>
					 <!--<a href="#dialog-mprdetail" id="0" class="btn tambah" data-toggle="modal">
							<i class="icon-plus"></i> New Data
					</a>-->
					 <br>
				<center>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="background-color:#909090;color:#fff;border-color:white;width:5px;text-align:center;">Date</th>
											<th style="background-color:#909090;color:#fff;border-color:white;width:5px;text-align:center;">Time</th>
											<th style="background-color:#909090;color:#fff;border-color:white;width:20px;text-align:center;">Ticket ID</th>		
											<th style="background-color:#909090;color:#fff;border-color:white;width:80px;text-align:center;">Req.By</th>
											<!--<th style="width:20px">Group</th>
											<th style="width:20px">Sub</th>-->
											<th style="background-color:#909090;color:#fff;border-color:white;width:180px;text-align:center;">Subject</th>
											<th style="background-color:#909090;color:#fff;border-color:white;width:20px;text-align:center;">Status</th>
											<th style="background-color:#909090;color:#fff;border-color:white;width:20px;text-align:center;">Req.Via</th>
											<th style="background-color:#909090;color:#fff;border-color:white;width:20px;text-align:center;">Support<br>By</th>
											<th style="background-color:#909090;color:#fff;border-color:white;width:20px">Detail</th>
											
												<th style="background-color:#909090;color:#fff;border-color:white;width:20px">Action</th>
											
                                        </tr>
                                    </thead>
                                    
                                        
                                    </tbody>
                                </table>
                            </center>
			</div>		
				</h3>
				<div id="data-mprdetailx" style="font-family:Arial,Helvetica,sans-serif;font-size: 14px;margin-left:20px;"></div>
				
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
		</div>
<!--</div>-->




	
<script src="jquery-1.8.3.min.js"></script>

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<!--<script src="aplikasi.js"></script>-->


<link href="css/jquery.dataTables.css" rel="stylesheet" media="screen">
</body>

</html>
<script>
    $(document).ready(function() {
		var filter = false;
		var params= $("#formfilter").serialize();
		var login = "<?=$_SESSION['user_level']?>";
        myTable = $('#dataTables-example').DataTable({
                responsive: true,
				iDisplayLength: 10,
				iDisplayStart: 0,
				bLengthChange:false,
				bInfo: false,
				bProcessing: true,
				deferLoading: 0, // here
				bFilter: false,
				ajax: {
					url: "controller/index.php", // Change this URL to where your json data comes from
					type: "GET", // This is the default value, could also be POST, or anything you want.
					data: function(d) {
						d.datefrom = $('input:text[name=dtfrom_sc]').val();
						d.dateto = $('input:text[name=dtto_sc]').val();
						d.status = $('#statusticket_sc').val();
						d.supportBy = $('#supportby_sc').val();
						d.filter = filter;
						d.query=document.getElementById("prependedInput").value;						
						d.forMe = document.getElementById('onlyForMe').checked;
					},
					draw: 1

				},
				columns: [
					{"data": "date"},
					{"data": "time"},
					{"data": "ticketId"},
					{"data": "requestBy"},
					{"data": "subject"},
					{"data": "status"},
					{"data": "reqVia"},
					{"data": "supportBy"},
					{"data": "",
						"bSortable": false,
					  "mRender": function(data, type, full) {
						  var link = "<a href='<?="http://".$_SERVER['SERVER_NAME']."/index.php?view=comment&pid="?>"+full.ticketId+"<?="&uid=".$_SESSION['user_nik']?>' title='Ticket ID: "+full.ticketId+"' target='_parent'>"
								+"<img src='img/Readmore1.png' alt='' height='50' width='50'></img>"
								+"</a>";
							
						if(login !=1 && login<1000  && (full.status=='On Process' || full.status=='Solved' || full.status=='Closed')){
							var link = "<a href='<?="http://".$_SERVER['SERVER_NAME']."/index.php?view=comment&pid="?>"+full.ticketId+"<?="&uid=".$_SESSION['user_nik']?>' title='Ticket ID: "+full.ticketId+"' target='_parent'>"
								+"<img src='img/Readmore1.png' alt='' height='50' width='50'></img>"
								+"</a>" + "<a href='<?="http://".$_SERVER['SERVER_NAME']."/pdf/genratepdf.php?ticketID="?>"+full.ticketId+"' title='Generate PDF Tiket ID: "+full.ticketId+"' target='_parent'>"
								+"&nbsp;<img src='img/pdfnew.png' alt='' height='40' width='40' target='_self'></img>"
								+"</a>";
						}	
						return link;
					  }},
					{"data": "",
						"bSortable": false,
					  "mRender": function(data, type, full) {
						  var via="updateforuser";
						  //alert(full.reqVia);
						  if(full.reqVia!='Via Web'){
							  via="update";
						  }
						  
						  var link = "";						 
					  
						  if(login !=1 && login<1000  && (full.status=='Open' || full.status=='On Process')){
						  link ="<a href='<?="http://".$_SERVER['SERVER_NAME']."/index.php?view="?>"+via+"<?="&pid="?>"+full.ticketId+"<?="&uid=".$_SESSION['user_nik']?>' title='Ticket ID: "+full.ticketId+"' target='_parent'>"
								+"<img src='img/editx.png' alt='' height='30' width='50'></img></a>";
						  }					 
						  if(login !=1 && login<=1000 && (full.ticketRef==1 && full.status=='Open') && (full.reffid!='')){							  
							  link ="<a href='<?="http://".$_SERVER['SERVER_NAME']."/index.php?view=updateuserrespond&pid="?>"+full.ticketId+"<?="&uid=".$_SESSION['user_nik']?>' title='Ticket ID: <?=$dtmyticket->ticket_id?>' target='_parent'>"
								+"<img src='img/reference.png' alt='' height='30' width='50'></img></a>";
						  }
						  /* MGR TIDAK DAPAT APPROVAL, SEBELUM AM DAN ROM MELAKUKAN APPROVAL */
						  if(login>=1000 && (full.statusApprovalId==2 && (full.status=='On Process')) && (full.reffid!='')){							  
							  link ="<a href='<?="http://".$_SERVER['SERVER_NAME']."/index.php?view=home&pid="?>"+full.ticketId+"<?="&uid=".$_SESSION['user_nik']?>' title='Ticket ID: <?=$dtmyticket->ticket_id?>' target='_parent'>"
								+"<img src='img/reference.png' alt='' height='30' width='50'></img></a>";
						  }
						  if(login==22 && (full.statusApprovalId==2 && (full.status=='On Process')) && (full.reffid!='')){							  
							  link ="<a href='<?="http://".$_SERVER['SERVER_NAME']."/index.php?view=home&pid="?>"+full.ticketId+"<?="&uid=".$_SESSION['user_nik']?>' title='Ticket ID: <?=$dtmyticket->ticket_id?>' target='_parent'>"
								+"<img src='img/reference.png' alt='' height='30' width='50'></img></a>";
						  }

						/*  if(login>=1000 && full.statusApprovalId ==2 && full.myApproval==1 && (full.status=='Open' || full.status=='On Process' || full.status=='Closed' || full.status=='Cancel' || full.status=='Cancel')){							  
							  link ="<a href='<?="http://".$_SERVER['SERVER_NAME']."/index.php?view=home&pid="?>"+full.ticketId+"<?="&uid=".$_SESSION['user_nik']?>' title='Ticket ID: <?=$dtmyticket->ticket_id?>' target='_parent'>"
								+"<img src='img/editx.png' alt='' height='30' width='50'></img></a>";
						  } */
 						  if(login>=1000 && full.statusApprovalId ==2 && full.myApproval==1 && (full.AprvlStsId3 ==1 && full.AprvlStsId2 ==1 && full.AprvlStsId ==2)){							  
							  link ="<a href='<?="http://".$_SERVER['SERVER_NAME']."/index.php?view=home&pid="?>"+full.ticketId+"<?="&uid=".$_SESSION['user_nik']?>' title='Ticket ID: <?=$dtmyticket->ticket_id?>' target='_parent'>"
								+"<img src='img/editx.png' alt='' height='30' width='50'></img></a>";
						  }
 
						return link;
					  }
					}
				],
				order: [[ 0, "asc" ]]
        });
		$("#klikfilter").click(function(){
			filter=true;
			//alert($('#statusticket_sc').val());
			var newUrl = 'controller/index.php';
			$('#dataTables-example').dataTable()._fnAjaxUpdate();
		});
		$("#prependedInput").change(function(){
			filter=true;
			//alert($('#statusticket_sc').val());
			var newUrl = 'controller/index.php';
			$('#dataTables-example').dataTable()._fnAjaxUpdate();
		});
		$("#onlyForMe").change(function(){
			filter=true;
			//alert($('#onlyForMe').val());
			var newUrl = 'controller/index.php';
			$('#dataTables-example').dataTable()._fnAjaxUpdate();
		});
    });
    </script>
	<style>
	.filter-button {
		background: #ff9900 none repeat scroll 0 0;
		border: 2px solid white;
		border-radius: 11px;
		box-shadow: 0 1px 3px rgba(0, 0, 0, 1);
		color: black;
		cursor: pointer;
		font-size: 12pt;
		font-weight: bold;
		padding: 5px 10px;
		text-decoration: none;
		text-shadow: 0 1px 1px white;
	}
	</style>
<?
#@session_destroy();
koneksi_tutup();
?>