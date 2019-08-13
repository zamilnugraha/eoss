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
$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
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
				<div style="margin-left:15px;">
				<table class="table table-hover" cellpadding="0" cellspacing="0" style="border:0;display:none;">				
				<!--?if(($userlevel=='4')||($userlevel=='99')||($userlevel=='1001')||($userlevel=='1000')||
				($userlevel=='21')||($userlevel=='22')||($userlevel=='23')||($userlevel=='24')||
				($userlevel=='100')||($userlevel=='101')||($userlevel=='102')){ /* ROM */ ?-->
				<?if(($userlevel=='4')){ /* ROM */ ?>
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
										<option value="">-- ALL --</option>
										<option value="0">Solved</option>
										<option value="1">Open</option>
										<option value="2">On Process</option>
										<option value="3">Return</option>
										<option value="4">Cancel</option>
									</select>
								</td>
							<td><label style="width:80px; margin-left:0px;">Support By :</label></td>
							<td><select class="input-small" name="supportby_sc" style="width:120px;">
										<option value="">-- ALL --</option>
										<option value="1">IT</option>
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
							<td><label style="width:80px; margin-left:0px;">Status :</label></td>
							<td>
									<select class="input-small" name="statusticket_sc" style="width:150px;">
										<option value="">-- ALL --</option>
										<option value="0">Solved</option>
										<option value="1">Open</option>
										<option value="2">On Process</option>
										<option value="3">Cancel</option>
									</select>
							</td>
							<td><label style="width:80px; margin-left:0px;">Support By :</label></td>
							<td><select class="input-small" name="supportby_sc" style="width:120px;">
										<option value="">-- ALL --</option>
										<option value="1">IT</option>
										<option value="7">FSD ALL</option>
										<option value="2">FSD EAST</option>
										<option value="3">FSD WEST</option>
										<option value="4">SDD</option>
							</select>
							</td>								
						<? } ?>		
				</tr>				
				</table>
				
				<table class="table table-condensed table-bordered table-hover" cellpadding="0" cellspacing="0" style="">
				<tr>
							<td>							
								<!--<input style=" height:30px;width:40px;margin-top:-12px;" type="button" id="filter" class="filter" value="Submit" />-->
								<center><button id="filter" class="filter" value="Submit">Display</button></center>
							</td>
						</tr>
				</table>
			
				</div>	   <br>
				<style>
				input.span2, textarea.span2, .uneditable-input.span2 {
					width: 150px;
				}
				</style>
				<div class="input-prepend pull-right" style="margin-top:-50px;">
						<span class="add-on"><i class="icon-search"></i></span>
						<input class="span2" id="prependedInput" type="text" name="pencarian" placeholder="Search By Ticket ID..">
				</div>
		
			<div style="margin-left:15px;margin-top:-50px;font-family:Arial,Helvetica,sans-serif;font-size: 13px;">
					<font size="4">&nbsp;List Request (Group)</font>
					 <!--<a href="#dialog-mprdetail" id="0" class="btn tambah" data-toggle="modal">
							<i class="icon-plus"></i> New Data
					</a>-->
					 <br>
			</div>		
				</h3>
				<div id="data-mprdetail" style="font-family:Arial,Helvetica,sans-serif;font-size: 14px;margin-left:20px;"></div>
		</div>
<!--</div>-->




	
<script src="jquery-1.8.3.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="aplikasi.js"></script>



</body>

</html>

<?
#@session_destroy();
koneksi_tutup();
?>