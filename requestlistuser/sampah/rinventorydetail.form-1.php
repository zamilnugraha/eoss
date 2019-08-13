<?php
require 'koneksi.php';
koneksi_buka();
@session_start();
	$id_reqinventory = $_POST['id'];
	$created_date = date('Y-m-d');
	$updated_date = date('Y-m-d');
	$created_by = $_SESSION['nik'];
	$updated_by = $_SESSION['nik'];
$data = mysql_fetch_array(mysql_query("SELECT * FROM vw_request_inventory WHERE id_reqinventory=".$id_reqinventory.""));
if($id_reqinventory > 0) { 
	$title = $data['title'];
	$user_name = $data['user_name'];
	$user_nik = $data['user_nik'];	
	$user_telpon = $data['user_telpon'];	
	$items_id = $data['items_id'];
	#$items_conditions_id = $data['items_conditions_id'];
	#$items_status_id = $data['items_status_id'];
	$date_request = $data['date_request'];
	$start = $data['start'];
	$end = $data['end'];
	$kebutuhan_descr = $data['kebutuhan_descr'];

} else {
	$title = '';
	$user_name = '';	
	$user_nik = '';	
	$user_telpon = '';	
	$items_id = '';		
	#$items_conditions_id = '';
	#$items_status_id = '';
	$date_request = '';	
	$start = '';
	$end = '';
	$kebutuhan_descr = '';
}
?>

<script type="text/javascript" src="scripts/jquery.min.js"></script>
<script type="text/javascript" src="scripts/jquery.form.js"></script>



<script type="text/javascript" >

 $(document).ready(function() { 

		

            $('#photoimg').live('change', function()			{ 

			           $("#preview").html('');

			    $("#preview").html('<img src="loader.gif" alt="Uploading...."/>');

			$("#imageform").ajaxForm({

						target: '#preview'

		}).submit();

		

			});

        }); 

</script>
<!-- DatePicker -->
<link rel="stylesheet" href="datepicker/base/jquery.ui.all.css" type="text/css">
 <script type="text/javascript" src="datepicker/jquery.js"></script>
 <script type="text/javascript" src="datepicker/jquery.ui.core.js"></script>
 <script type="text/javascript" src="datepicker/jquery.ui.datepicker.js"></script>
 <script type="text/javascript" src="datepicker/jquery.ui.widget.js"></script>
 <link rel="stylesheet" type="text/css" href="datep/jquery.datetimepicker.css"/>		
<!-- <script type="text/javascript">
 $(function() {
  $( "#start" ).datepicker({
   changeMonth: true,
   changeYear: true ,
   dateFormat: 'd MM yy'
  });   
 });
 </script>
 
 <script type="text/javascript">
 $(function() {
  $( "#end" ).datepicker({
   changeMonth: true,
   changeYear: true ,
   dateFormat: 'd MM yy'
  });   
 });
 </script>-->
 <script src="datep/jquery.js"></script>
<script src="datep/jquery.datetimepicker.js"></script>
<?php 
	//$datenow = date('YY "/" MM "/" DD');
	//$hitdatenow = $datenow + 6;
	$datenow = '-1970/01/01';
	$hitdatenow = '+1970/01/08';
?>
<script>

		jQuery('#start').datetimepicker({
			//mask:'9999/19/39 29:59',
			//mask:'39 19 9999 29:59',
			changeMonth: true,
			changeYear: true ,
			//dateFormat: 'd MM yy',
			formatDate:'d.m.Y',
			//dateFormat: 'j F Y',
			timeFormat: 'hh:mm',
			/*
			onGenerate:function( ct ){
			jQuery(this).find('.xdsoft_date.xdsoft_weekend')			
			.addClass('xdsoft_disabled');
			},
			weekends:['01.08.2014','02.08.2014','03.08.2014','04.08.2014','05.08.2014','06.08.2014'],
			*/			
			 formatDate:'Y/m/d',
			 minDate:'-1970/01/01',//yesterday is minimum date(for today use 0 or -1970/01/01)
			 maxDate:'+1970/01/08'//tommorow is maximum date calendar
			});   

		jQuery('#end').datetimepicker({
			//mask:'9999/19/39 29:59',
			//mask:'39 19 9999 29:59',
			changeMonth: true,
			changeYear: true ,
			//dateFormat: 'd MM yy',
			formatDate:'d.m.Y',
			//dateFormat: 'j F Y',
			timeFormat: 'hh:mm',
			 formatDate:'Y/m/d',
			 minDate:'-1970/01/01',//yesterday is minimum date(for today use 0 or -1970/01/01)
			 maxDate:'+1970/01/08'//tommorow is maximum date calendar
		});

$('#slider_example_1').timepicker({
	hourGrid: 4,
	minuteGrid: 10,
	timeFormat: 'hh:mm'
});

function showUser(start,end) 
{
	
  if (end=="" && start=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari 
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function(end_time,start_time) 
	  {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) 
		{
		  document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
		}
	  }
	
  xmlhttp.open("GET","showUser.php?q="+start+"&z="+end_time,true);
  
  xmlhttp.send();
}
</script>
<form class="form-horizontal" id="form-bagiandetail">

	<div class="control-group">
		<label class="control-label" for="title">Title Subject</label>
		<div class="controls">
			<input type="text" id="title" class="input-medium" name="title" value="<?php echo $title ?>" placeholder="isikan Nama title subject">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="user_name">Request By Name</label>
		<div class="controls">
			<!--<input type="text" id="user_name" class="input-medium" name="user_name" value="<!?php echo $user_name ?>" placeholder="isikan Nama Peminjam">-->
			<input type="text" id="user_name" class="input-medium" name="user_name" value="<?php echo $_SESSION[user_realname] ?>" placeholder="isikan Nama Peminjam" readonly>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="user_nik">Request By Nik</label>
		<div class="controls">
			<!--<input type="text" id="user_nik" class="input-medium" name="user_nik" value="<!--?php echo $user_nik ?>" placeholder="isikan Nik Peminjam">-->
			<input type="text" id="user_nik" class="input-medium" name="user_nik" value="<?php echo $_SESSION[nik] ?>" placeholder="isikan Nik Peminjam" readonly>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="user_telpon">Request By Phone</label>
		<div class="controls">
			<!--<input type="text" id="user_telpon" class="input-medium" name="user_telpon" value="<!?php echo $user_telpon ?>" placeholder="isikan telpon Peminjam">-->
			<input type="text" id="user_telpon" class="input-medium" name="user_telpon" value="<?php echo $_SESSION[telpon] ?>" placeholder="isikan telpon Peminjam" readonly>
		</div>
	</div>	
	
	
	<div class="control-group">
		<label class="control-label" for="date_request">Tgl Request</label>
		<div class="controls">
			<input type="text" id="date_request" class="input-medium" name="date_request" value="<?php echo date('j F Y'); ?>" readonly>
		</div>
	</div>		

	<div class="control-group">
		<label class="control-label" for="start">Tgl Start Room Reserve</label>
		<div class="controls">
			<input type="text" id="start" class="input-medium" name="start" value="<?php echo $start ?>" placeholder="Tanggal Start Room Reserve">
		</div>
	</div>		
	
	<div class="control-group">
		<label class="control-label" for="end">Tgl Finish Room Reserve</label>
		<div class="controls">
			<input type="text" id="end" class="input-medium" name="end" value="<?php echo $end ?>" placeholder="Tanggal Finish Room Reserve">
		</div>
	</div>	

	<div class="control-group">
			<label class="control-label" for="items_id">Meeting Rooms Available</label>
			<div class="controls">
				<select class="input-medium" style="width:220px;"  name="items_id">
					<?php 
					#$qcatid = mysql_query("SELECT id_items_conditions, items_conditions_name, items_conditions_descr FROM items_conditions ORDER BY id_items_conditions ASC");
					$qcatid = mysql_query("SELECT * FROM vw_list_inventory ORDER BY id_items ASC");
					$rcatid = mysql_fetch_object($qcatid);
					if($id_reqinventory > 0) {
							$qcatid2 = mysql_query("SELECT * FROM vw_request_inventory WHERE id_reqinventory = '".$id_reqinventory."'");
					$rcatid2 = mysql_fetch_object($qcatid2);
						echo "<option value= '$rcatid2->items_id'> $rcatid2->items_name ($rcatid2->total_person Person)</option>";
					}
					while ($rcatid3 = mysql_fetch_object($qcatid)) 
					{
						echo "<option value= '$rcatid3->id_items'> $rcatid3->items_name ($rcatid3->total_person Person)</option>";
					}
					?>
				</select>
			</div>
	</div>	
	
	<div class="control-group">
		<label class="control-label" for="kebutuhan_descr">Kebutuhan</label>
		<div class="controls">
			<textarea id="kebutuhan_descr" name="kebutuhan_descr" placeholder="isikan Kebutuhan Anda"><?php echo $kebutuhan_descr ?></textarea>
		</div>
	</div>		
</form>

<?php
#@session_destroy();
	koneksi_tutup();
?>

