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
<!-- ADD NEW USER -->
	<div class="container" style="margin-left:5px;width:95%;height:auto;margin-top:25px;">
		<div class="row">
				<h3>	
<form id="formfilter">				
				<div style="margin-left:15px;">
				<table class="table table-hover" cellpadding="0" cellspacing="0" style="border:0;">				
						<tr>
									<td><label style="width:70px;">LEVEL&nbsp;NAME&nbsp;:</label></td>
									<td>
										<select class="input-small" id="usrfrom_sc" name="usrfrom_sc" style="width:220px;">
										<option value="">-- ALL --</option>
										<?
										#	$qvusrrom = mysql_query("SELECT userlevel_id,userlevel_name FROM ITH_USERLEVEL GROUP BY userlevel_id ASC");
											$qvusrrom = mysql_query("SELECT DISTINCT ITH_USER.userlevel_id, ITH_USERLEVEL.userlevel_name FROM ITH_USER
											JOIN ITH_USERLEVEL ON ITH_USERLEVEL.userlevel_id = ITH_USER.userlevel_id 
											WHERE ITH_USER.nama_jabatan != 'STORE' AND ITH_USER.userlevel_id NOT IN('3','8','99') ORDER BY userlevel_id ASC");
											$rvusrfromx = mysql_fetch_object($qvusrrom);											
											if(($rvusrfromx->userlevel_id=='1')||($rvusrfromx->userlevel_id=='1000')||($rvusrfromx->userlevel_id=='1001')){												
										?>											
											<option value="<?='1'?>"><?='USER RSC'?></option>	
											<option value="<?='1000'?>"><?='ADVISOR/MGR/SUB MGR'?></option>	
										
										<? }else if(($rvusrfromx->userlevel_id!='1')||($rvusrfromx->userlevel_id!='1000')||($rvusrfromx->userlevel_id!='1001')){	
											while($rvusrfrom = mysql_fetch_object($qvusrrom)){?>												
											<option value="<?=$rvusrfrom->userlevel_id?>"><?=ucwords(strtoupper($rvusrfrom->userlevel_name))?></option>											
											<?}?>	
										<?}?>	
										<?
										$qvusrromz = mysql_query("SELECT DISTINCT ITH_USER.userlevel_id, ITH_USERLEVEL.userlevel_name FROM ITH_USER
											JOIN ITH_USERLEVEL ON ITH_USERLEVEL.userlevel_id = ITH_USER.userlevel_id 
											WHERE ITH_USER.nama_jabatan != 'STORE' AND ITH_USER.userlevel_id NOT IN('1','99','1000','1001') ORDER BY userlevel_id ASC");
										while($rvusrfroms = mysql_fetch_object($qvusrromz)){?>
										<option value="<?=$rvusrfroms->userlevel_id?>"><?=ucwords(strtoupper($rvusrfroms->userlevel_name))?></option>	
										<? } ?>	
										</select>
									</td>
									
									<td><label style="width:70px;"></label></td>
									<td>
										<a href='<?="http://".$_SERVER['SERVER_NAME']."/index.php?view=new_user"?>' target='_parent'><img src='img/adduser.jpg' alt='' height='20' width='40'></img></a>
									</td>									
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
					<div class="checkbox" style="display:none;">
						<label>
							<input type="checkbox" id="onlyForMe"> Only For me
						</label>
					</div>
				</div>
				<div class="input-prepend pull-right" style="margin-top:-50px;">
						<span class="add-on"><i class="icon-search"></i></span>
						<input class="span2" id="prependedInput" style="width:250px;" type="text" name="pencarian" placeholder="Search By Ticket ID, Subject or Store">
				</div>
		
			<div style="margin-left:15px;margin-top:-50px;font-family:Arial,Helvetica,sans-serif;font-size: 13px;">
					<font size="4">&nbsp;List User</font>
					 <!--<a href="#dialog-mprdetail" id="0" class="btn tambah" data-toggle="modal">
							<i class="icon-plus"></i> New Data
					</a>-->
					 <br>
				<center>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="background-color:#909090;color:#fff;border-color:white;width:5px;text-align:center;">User<br>NIK</th>
											<th style="background-color:#909090;color:#fff;border-color:white;width:80px;text-align:center;">User<br>Name</th>
											<th style="background-color:#909090;color:#fff;border-color:white;width:20px;text-align:center;">User<br>Email</th>		
										<!--	<th style="background-color:#909090;color:#fff;border-color:white;width:20px;text-align:center;">Nama<br>Atasan</th>
											<th style="background-color:#909090;color:#fff;border-color:white;width:20px;text-align:center;">Dept.Head<br>Name</th>-->
											<th style="background-color:#909090;color:#fff;border-color:white;width:20px;text-align:center;">Jabatan<br>Name</th>
											<th style="background-color:#909090;color:#fff;border-color:white;width:20px;text-align:center;">Level<br>Name</th>
											<th style="background-color:#909090;color:#fff;border-color:white;width:20px;text-align:center;">RSC<br>Name</th>
											<th style="background-color:#909090;color:#fff;border-color:white;width:20px;text-align:center;">User<br>Status</th>
											
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
						d.usrfrom = $('#usrfrom_sc').val();
						d.filter = filter;
						d.query=document.getElementById("prependedInput").value;						
						d.forMe = document.getElementById('onlyForMe').checked;
					},
					draw: 1

				},
				columns: [
					{"data": "userNik"},
					{"data": "userName"},
					{"data": "userMail"},		
				/*	{"data": "namaAtasan"},
					{"data": "namaDepthead"}, */
					{"data": "namaJabatan"},
					{"data": "",
						"bSortable": false,

					  "mRender": function(data, type, full) {
						var link = "";
						var levelName = full.levelName;
						if(full.levelName=='STORE'){
							link ="<center><font size='2' color='#333'>USER</font></center>";
						}	
						if(full.levelName=='AM(AREA MANAGER)'){
							link ="<center><font size='2' color='#333'>AM(AREA MANAGER)</font></center>";
						}	
						if(full.levelName=='ROM(REGIONAL OPERATION MANAGER)'){
							link ="<center><font size='2' color='#333'>ROM(REGIONAL OPERATION MANAGER)</font></center>";
						}	
						if(full.levelName=='IT pic'){
							link ="<center><font size='2' color='#333'>IT PIC</font></center>";
						}	
						if(full.levelName=='FSD pic'){
							link ="<center><font size='2' color='#333'>FSD PIC</font></center>";
						}	
						if(full.levelName=='SDD pic'){
							link ="<center><font size='2' color='#333'>SDD PIC</font></center>";
						}	
						if(full.levelName=='IT Admin'){
							link ="<center><font size='2' color='#333'>IT ADMIN</font></center>";
						}	
						if(full.levelName=='FSD Admin'){
							link ="<center><font size='2' color='#333'>FSD ADMIN</font></center>";
						}	
						if(full.levelName=='SDD Admin'){
							link ="<center><font size='2' color='#333'>SDD ADMIN</font></center>";
						}	
						if(full.levelName=='OPR Admin'){
							link ="<center><font size='2' color='#333'>OPR ADMIN</font></center>";
						}	
						if(full.levelName=='Sub Manager'){
							link ="<center><font size='2' color='#333'>SUB MANAGER</font></center>";
						}	
						if(full.namaJabatan=='ADVISOR'){
							link ="<center><font size='2' color='#333'>ADVISOR</font></center>";
						}	
						if(full.userNik=='010641'){
							link ="<center><font size='2' color='#333'>MANAGER</font></center>";
						}	
						
								
						return link;
					  }},
					{"data": "rscName"},	
					{"data": "",
						"bSortable": false,
					  "mRender": function(data, type, full) {
						var link = "";
						var outletCode = full.outletCode;
						if(full.userStatus=='AKTIF'){
							link ="<font size='2' color='blue'>AKTIF</font>";
						}	
						if(full.userStatus=='NON AKTIF'){
							link ="<font size='2' color='red'>NON AKTIF</font>";
						}	
						return link;
					  }},				
					{"data": "",
						"bSortable": false,

					  "mRender": function(data, type, full) {
						var link = "";
						var userNik = full.userNik;
						/*  var link = "<a href='<?="http://".$_SERVER['SERVER_NAME']."/index.php?view=comment&pid="?>"+full.ticketId+"<?="&uid=".$_SESSION['user_nik']?>' title='Ticket ID: "+full.ticketId+"' target='_parent'>"
								+"<img src='img/Readmore1.png' alt='' height='50' width='50'></img>"
								+"</a>"+"<br>"+"<a href='<?="http://".$_SERVER['SERVER_NAME']."/index.php?view="?>"+via+"<?="&pid="?>"+full.ticketId+"<?="&uid=".$_SESSION['user_nik']?>' title='Ticket ID: "+full.ticketId+"' target='_parent'>"
								+"<img src='img/editx.png' alt='' height='30' width='50'></img></a>";	*/
  						   var link = "<a href='<?="http://".$_SERVER['SERVER_NAME']."/index.php?view=comment&pid="?>"+full.ticketId+"<?="&uid=".$_SESSION['user_nik']?>' title='Ticket ID: "+full.ticketId+"' target='_parent'>"
								+"<img src='img/Readmore1.png' alt='' height='50' width='50'></img>"
								+"</a>";
								
						return link;
					  }},
					{"data": "",
						"bSortable": false,

					  "mRender": function(data, type, full) {
						var via="new_user";
						var link = "";
						var userNik = full.userNik;
  						/*   var link = "<a href='<?="http://".$_SERVER['SERVER_NAME']."/index.php?view="?>"+via+"<?="&pid="?>"+full.outletCode+"<?="&uid="?>"+full.outletCode+"' title='Outlet Code: "+full.outletCode+"' target='_parent'>"
								+"<img src='img/editx.png' alt='' height='30' width='50'></img></a>";  	*/
							var link = "<a href='<?="http://".$_SERVER['SERVER_NAME']."/index.php?view="?>"+via+"<?="&pid="?>"+full.userNik+"<?="&uid="?>"+full.userNik+"' title='Outlet Code: "+full.outletCode+"' target='_parent'>"
								+"<img src='img/editx.png' alt='' height='30' width='50'></img></a>";
								
						return link;
					  }
					}
				/*	{"data": "userdepartemen_id"},
					{"data": "udept_id"},
					{"data": "nik_atasan"},
					{"data": "nama_atasan"},
					{"data": "nama_jabatan"},
					{"data": "departemen_id"},
					{"data": "nama_departemen"}
					*/
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
	<script>
	$(function(){
    areafrom_sc={
        '0001':{
            '001':'AREA I-1',
            '002':'AREA I-2',
            '003':'AREA I-3',
            '004':'AREA I-4',
            '005':'AREA I-5',
            '006':'AREA I-6',
            '007':'AREA I-7',
            '008':'AREA I-8'
        /*  '009':'AREA I-9' */
        },
        '0002':{
            '001':'AREA II-1',
            '002':'AREA II-2',
            '003':'AREA II-3',
            '004':'AREA II-4',
            '005':'AREA II-5',
            '006':'AREA II-6',
            '007':'AREA II-7',
            '008':'AREA II-8'
        /*  '009':'AREA II-9' */
        },
        '0003a':{
            '001':'AREA III-1',
            '002':'AREA III-2',
            '003':'AREA III-3',
            '004':'AREA III-4',
            '005':'AREA III-5',
            '006':'AREA III-6',
            '007':'AREA III-7'
         /* '008':'AREA IIIa-8',
            '009':'AREA IIIa-9' */
        },
        '0003b':{
            '008':'AREA III-8',
            '009':'AREA III-9',
            '010':'AREA III-10',
            '011':'AREA III-11',
            '012':'AREA III-12'
		/*	'006':'AREA IIIb-6',
            '007':'AREA IIIb-7',
            '008':'AREA IIIb-8',
            '009':'AREA IIIb-9' */
        },
        '0004':{
            '001':'AREA IV-1',
            '002':'AREA IV-2',
            '003':'AREA IV-3',
            '004':'AREA IV-4',
            '005':'AREA IV-5',
            '006':'AREA IV-6',
            '007':'AREA IV-7',
            '008':'AREA IV-8'
        /*  '009':'AREA IV-9' */
        },
        '0005':{
            '001':'AREA V-1',
            '002':'AREA V-2',
            '003':'AREA V-3',
            '004':'AREA V-4',
            '005':'AREA V-5',
            '006':'AREA V-6',
            '007':'AREA V-7',
            '008':'AREA V-8'
        /*  '009':'AREA V-9' */
        },
        '0006':{
            '001':'AREA VI-1',
            '002':'AREA VI-2',
            '003':'AREA VI-3',
            '004':'AREA VI-4',
            '005':'AREA VI-5'
        /*  '006':'AREA VI-6',
            '007':'AREA VI-7',
            '008':'AREA VI-8',
            '009':'AREA VI-9' */
        },
        '0007':{
            '001':'AREA VII-1',
            '002':'AREA VII-2',
            '003':'AREA VII-3',
            '004':'AREA VII-4'
        /*  '005':'AREA VII-5',
            '006':'AREA VII-6',
            '007':'AREA VII-7',
            '008':'AREA VII-8',
            '009':'AREA VII-9' */
        },
       '0008':{
            '001':'AREA VIII-1',
            '002':'AREA VIII-2',
            '003':'AREA VIII-3',
            '004':'AREA VIII-4',
            '005':'AREA VIII-5'
        /*  '006':'AREA VIII-6',
            '007':'AREA VIII-7',
            '008':'AREA VIII-8',
            '009':'AREA VIII-9' */
        },
       '0009':{
            '001':'AREA IX-1',
            '002':'AREA IX-2',
            '003':'AREA IX-3',
            '004':'AREA IX-4',
			/*,
            '005':'AREA IX-5',
            '006':'AREA IX-6',
            '007':'AREA IX-7',
            '008':'AREA IX-8',
            '009':'AREA IX-9'*/
        }
    };
    areato_sc={
        '0001':{
            '001':'AREA I-1',
            '002':'AREA I-2',
            '003':'AREA I-3',
            '004':'AREA I-4',
            '005':'AREA I-5',
            '006':'AREA I-6',
            '007':'AREA I-7',
            '008':'AREA I-8'
        /*  '009':'AREA I-9' */
        },
        '0002':{
            '001':'AREA II-1',
            '002':'AREA II-2',
            '003':'AREA II-3',
            '004':'AREA II-4',
            '005':'AREA II-5',
            '006':'AREA II-6',
            '007':'AREA II-7',
            '008':'AREA II-8'
        /*  '009':'AREA II-9' */
        },
        '0003a':{
            '001':'AREA III-1',
            '002':'AREA III-2',
            '003':'AREA III-3',
            '004':'AREA III-4',
            '005':'AREA III-5',
            '006':'AREA III-6',
            '007':'AREA III-7'
         /* '008':'AREA IIIa-8',
            '009':'AREA IIIa-9' */
        },
        '0003b':{
            '008':'AREA III-8',
            '009':'AREA III-9',
            '010':'AREA III-10',
            '011':'AREA III-11',
            '012':'AREA III-12'
		/*	'006':'AREA IIIb-6',
            '007':'AREA IIIb-7',
            '008':'AREA IIIb-8',
            '009':'AREA IIIb-9' */
        },
        '0004':{
            '001':'AREA IV-1',
            '002':'AREA IV-2',
            '003':'AREA IV-3',
            '004':'AREA IV-4',
            '005':'AREA IV-5',
            '006':'AREA IV-6',
            '007':'AREA IV-7',
            '008':'AREA IV-8'
        /*  '009':'AREA IV-9' */
        },
        '0005':{
            '001':'AREA V-1',
            '002':'AREA V-2',
            '003':'AREA V-3',
            '004':'AREA V-4',
            '005':'AREA V-5',
            '006':'AREA V-6',
            '007':'AREA V-7',
            '008':'AREA V-8'
        /*  '009':'AREA V-9' */
        },
        '0006':{
            '001':'AREA VI-1',
            '002':'AREA VI-2',
            '003':'AREA VI-3',
            '004':'AREA VI-4',
            '005':'AREA VI-5'
        /*  '006':'AREA VI-6',
            '007':'AREA VI-7',
            '008':'AREA VI-8',
            '009':'AREA VI-9' */
        },
        '0007':{
            '001':'AREA VII-1',
            '002':'AREA VII-2',
            '003':'AREA VII-3',
            '004':'AREA VII-4'
        /*  '005':'AREA VII-5',
            '006':'AREA VII-6',
            '007':'AREA VII-7',
            '008':'AREA VII-8',
            '009':'AREA VII-9' */
        },
       '0008':{
            '001':'AREA VIII-1',
            '002':'AREA VIII-2',
            '003':'AREA VIII-3',
            '004':'AREA VIII-4',
            '005':'AREA VIII-5'
        /*  '006':'AREA VIII-6',
            '007':'AREA VIII-7',
            '008':'AREA VIII-8',
            '009':'AREA VIII-9' */
        },
       '0009':{
            '001':'AREA IX-1',
            '002':'AREA IX-2',
            '003':'AREA IX-3',
            '004':'AREA IX-4'
			/*,
            '005':'AREA IX-5',
            '006':'AREA IX-6',
            '007':'AREA IX-7',
            '008':'AREA IX-8',
            '009':'AREA IX-9'*/
        }
    };
    
    $('#romfrom_sc').on('change', function(){
        $('#areafrom_sc').html('');
        $('#areato_sc').html('');
        $.each(areafrom_sc[$(this).val()], function(k, v){
            $('<option></option>').val(k).text(v)
            .appendTo($('#areafrom_sc'));
        });
        $.each(areato_sc[$(this).val()], function(k, v){
            $('<option></option>').val(k).text(v)
            .appendTo($('#areato_sc'));
        });
    });
});
	</script>
	<!--?="SELECT DISTINCT ITU.user_nik,ITU.user_realname,ITU.user_email,
ITU.usergroup_id,ITUG.usergroup_name,ITU.usersubgroup_id,ITUG.usersubgroup_name,
ITU.userdepartemen_id,ITU.udept_id,ITU.nik_atasan,ITU.nama_atasan,ITU.nama_jabatan,ITU.departemen_id,ITD.nama_departemen,
ITU.userlevel_id, ITL.userlevel_name
FROM ITH_USER ITU
JOIN ITH_USERGROUP ITUG ON ITUG.usergroup_kd = ITU.usergroup_id AND ITUG.usersubgroup_kd = ITU.usersubgroup_id
JOIN ITH_DEPARTEMEN ITD ON ITD.kode_departemen = ITU.departemen_id
JOIN ITH_USERLEVEL ITL ON ITL.userlevel_id = ITU.userlevel_id
WHERE ITU.udept_id = 'STORE' ".$queryAnd."
GROUP BY  ITU.usergroup_id, ITU.usersubgroup_id, ITU.USER_REALNAME 
ORDER BY ITU.usergroup_id, ITU.usersubgroup_id, ITU.USER_REALNAME ASC"?-->
<?
#@session_destroy();
koneksi_tutup();
?>