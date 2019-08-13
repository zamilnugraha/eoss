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
<body style="background:url(http://localhost:85/datatable/requestlist/images/my-top2.jpg);">

<!-- DatePicker -->
<link rel="stylesheet" href="datepicker/base/jquery.ui.all.css" type="text/css">
 <script type="text/javascript" src="datepicker/jquery.js"></script>
 <script type="text/javascript" src="datepicker/jquery.ui.core.js"></script>
 <script type="text/javascript" src="datepicker/jquery.ui.datepicker.js"></script>
 <script type="text/javascript" src="datepicker/jquery.ui.widget.js"></script>
 <link rel="stylesheet" type="text/css" href="datep/jquery.datetimepicker.css"/>		

 <script src="datep/jquery.js"></script>
<script src="datep/jquery.datetimepicker.js"></script>
<script type="text/javascript" src="scripts/jquery.min.js"></script>
<script type="text/javascript" src="scripts/jquery.form.js"></script>
<?php 
	//$datenow = date('YY "/" MM "/" DD');
	//$hitdatenow = $datenow + 6;
	$datenow = '-1970/01/01';
	$hitdatenow = '+1970/01/08';
?>

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

<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
<!-- jQuery Code executes on Date Format option ----->
<script src="js/script.js"></script>
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
    background: rgba(0, 0, 0, 0) -moz-linear-gradient(center top , #eee, #fff) repeat scroll 0 0;
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

	<div class="container" style="margin-left:5px;width:95%;height:auto;margin-top:15px;">
		<div class="row">
				<h3>			
				<div style="margin-left:5px;">
				<table class="table table-condensed table-bordered table-hover" cellpadding="0" cellspacing="0" style="">
				<tr>
							<td><label style="width:90px;">ROM From :</label></td>
							<td>
								<select class="input-small" name="romfrom_sc">
									<option value="">-- ALL --</option>
									<option value="0001">ROM I-1</option>
									<option value="0002">ROM I-2</option>
								</select>
							</td>
							<td style="margin-left:20px;"><label style="width:90px;">&nbsp;&nbsp;&nbsp;&nbsp;ROM To :</label></td>
							<td>
								<select class="input-small" name="romto_sc">
									<option value="">-- ALL --</option>
									<option value="0001">ROM I-1</option>
									<option value="0002">ROM I-2</option>
								</select>
							</td>
				</tr>
				<tr>
							<td><label style="width:90px;">Area From :</label></td>
							<td>			
								<select class="input-small" name="areafrom_sc">								
									<option value="">-- ALL --</option>
									<option value="001">Area I-1</option>
									<option value="002">Area I-2</option>
								</select>
							</td>						
							<td style="margin-left:20px;"><label style="width:90px;">&nbsp;&nbsp;&nbsp;&nbsp;Area To :</label></td>
							<td>			
								<select class="input-small" name="areato_sc">
									<option value="">-- ALL --</option>
									<option value="001">Area I-1</option>
									<option value="002">Area I-2</option>
								</select>
							</td>
				</tr>			
				<tr>
							<td><label style="width:90px;">Store From :</label></td>
							<td>			
								<select class="input-small" name="storefrom_sc">						
									<option value="">-- ALL --</option>
									<option value="0228">Store I-1</option>
									<option value="0229">Store I-2</option>
								</select>
							</td>
							<td style="margin-left:20px;"><label style="width:90px;">&nbsp;&nbsp;&nbsp;&nbsp;Store To :</label></td>
							<td>			
								<select class="input-small" name="storeto_sc">
									<option value="">-- ALL --</option>
									<option value="0228">Store I-1</option>
									<option value="0229">Store I-2</option>
								</select>
							</td>
				</tr>
				
				
				<tr>	
				<td><label style="width:90px;">Status Ticket :</label></td>				
				<td>
									<select class="input-small" name="statusticket_sc">
										<option value="">-- ALL --</option>
										<option value="0">Solved</option>
										<option value="1">Open</option>
										<option value="2">On Process</option>
										<option value="3">Return</option>
										<option value="4">Cancel</option>
									</select>
								</td>
				<?
				#$mydate = date('d/m/Y', strtotime('today - 02 days'));
				$mydate = date('d/m/Y', strtotime('today - 30 days'));
				/*$mydate = date('d/m/Y', strtotime('today + 30 days'));*/
				$datenow = date('d/m/Y');
				#$mydate = '01/01/2017';
				#$datenow = '01/02/2017';
				?>				
							<td><p id="dtfrom_sc" name="dtfrom_sc" style="font-size:10pt;">
							&nbsp;&nbsp; Date  From :&nbsp;<input type="text" id="dtfrom_sc" name="dtfrom_sc" class="date start" style="margin-left:15px;width:48%;" value="<?=$mydate?>"/>  							
							</p></td>
				
							<td><p id="dtto_sc" name="dtto_sc" style="font-size:10pt;">
							&nbsp;&nbsp; To :&nbsp;<input type="text" id="dtto_sc" name="dtto_sc" class="date end" style="margin-left:15px;width:48%;" value="<?=$datenow?>"/>
							</p></td>
					
					  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

					  <script type="text/javascript" src="js/jquery.timepicker.js"></script>
					  <link rel="stylesheet" type="text/css" href="js/jquery.timepicker.css" />

					  <script type="text/javascript" src="js/lib/bootstrap-datepicker.js"></script>
					  <link rel="stylesheet" type="text/css" href="js/lib/bootstrap-datepicker.css" />

					  <script type="text/javascript" src="js/lib/site.js"></script>
					  <link rel="stylesheet" type="text/css" href="js/lib/site.css" />
						<script src="http://jonthornton.github.io/Datepair.js/dist/datepair.js"></script>
						<script src="http://jonthornton.github.io/Datepair.js/dist/jquery.datepair.js"></script>
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
				</tr>			
				</table>
				<table class="table table-condensed table-bordered table-hover" cellpadding="0" cellspacing="0" style="">
				<tr>
							<td>							
								<!--<input style=" height:30px;width:40px;margin-top:-12px;" type="button" id="filter" class="filter" value="Submit" />-->
								<center><button id="filter" class="filter" value="Submit">Submit</button></center>
							</td>
						</tr>
				</table>
			
				</div>	   <br>
				<div class="input-prepend pull-right" style="margin-top:-50px;">
						<span class="add-on"><i class="icon-search"></i></span>
						<input class="span2" id="prependedInput" type="text" name="pencarian" placeholder="Pencarian..">
				</div>
			<div style="margin-left:5px;margin-top:-50px;">
					<font size="4">&nbsp;List Request</font>

					
					 <!--<a href="#dialog-mprdetail" id="0" class="btn tambah" data-toggle="modal">
							<i class="icon-plus"></i> New Data
					</a>-->
					 <br>
			</div>		
				</h3>
				<div id="data-mprdetail"></div>
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