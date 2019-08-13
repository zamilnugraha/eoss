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
	$cug = $data['cug'];	
	$items_id = $data['items_id'];
	$pic_name = $data['pic_name'];
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
	$cug = '';	
	$items_id = '';		
	$pic_name = '';		
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
	
  if (start=="" && end=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari 
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function(start,end) 
	  {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) 
		{
		  document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
		}
	  }
	
  xmlhttp.open("GET","showUser.php?q="+start+"&z="+end,true);
  
  xmlhttp.send();
}

function showUser1(end,start) 
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
  xmlhttp.onreadystatechange=function(end,start) 
	  {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) 
		{
		  document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
		}
	  }
	
  xmlhttp.open("GET","showUser.php?q="+start+"&z="+end,true);
  
  xmlhttp.send();
}

</script>

<form name="myForm" class="form-horizontal" id="form-bagiandetail" >

	<div class="control-group">
		<label class="control-label" for="title">Subject</label>
		<div class="controls">
			<input type="text" id="title" class="input-large" name="title" value="<?php echo $title ?>" placeholder="Please fill in the subject field">
			<input type="hidden" id="user_name" class="input-medium" name="user_name" value="<?php echo $_SESSION[user_realname] ?>" placeholder="isikan Nama Peminjam" readonly>
			<input type="hidden" id="user_nik" class="input-medium" name="user_nik" value="<?php echo $_SESSION[nik] ?>" placeholder="isikan Nik Peminjam" readonly>
			<input type="hidden" id="user_telpon" class="input-medium" name="user_telpon" value="<?php echo $_SESSION[telpon] ?>" placeholder="isikan telpon Peminjam" readonly>
		</div>
	</div>
	<div class="control-group">
			<label class="control-label" for="pic_name">Person in Charge (PIC)</label>
			<div class="controls">
				<select class="input-medium" style="width:220px;"  name="pic_name">
					<?php 
					$con = mysql_connect("172.16.8.101","transcp_iml","g4r4m4s1n");
					mysql_select_db("fullcalendar",$con);
					@session_start();
					$qpicid = mysql_query("SELECT user_realname,departemen FROM vw_kary_loginx WHERE departemen = '".$_SESSION['departemen']."' ORDER by user_realname ASC");
					//$rpicid = mysql_fetch_object($qpicid);
					if($id_reqinventory > 0) {
					$con = mysql_connect("172.16.8.101","transcp_iml","g4r4m4s1n");
					mysql_select_db("fullcalendar",$con);
					@session_start();
					$qcatid2 = mysql_query("SELECT pic_name FROM vw_request_inventory_pic WHERE id_reqinventory= '".$id_reqinventory."' AND pic_name = '".$pic_name."' ");
					$rpicid2 = mysql_fetch_object($qpicid2);
						echo "<option value= '$rpicid2->pic_name'> $rpicid2->pic_name</option>";
					}
					while ($rpicid3 = mysql_fetch_object($qpicid)) 
					{
						echo "<option value= '$rpicid3->user_realname'> $rpicid3->user_realname ($rpicid3->departemen)</option>";
					}
					?>
					<!--?php 
					$con = mysql_connect("172.16.8.245:8326","mmit","g4r4m4s1n");
					mysql_select_db("teams",$con);
					@session_start();
					$qpicid = mysql_query("SELECT * FROM vw_kary_loginx");
					//$rpicid = mysql_fetch_object($qpicid);
					if($id_reqinventory > 0) {
					$con = mysql_connect("172.16.8.101","transcp_iml","g4r4m4s1n");
					mysql_select_db("fullcalendar",$con);
					@session_start();
					$qcatid2 = mysql_query("SELECT pic_name FROM vw_request_inventory_pic WHERE id_reqinventory= '".$id_reqinventory."' AND pic_name = '".$pic_name."' ");
					$rpicid2 = mysql_fetch_object($qpicid2);
						echo "<option value= '$rpicid2->pic_name'> $rpicid2->pic_name</option>";
					}
					while ($rpicid3 = mysql_fetch_object($qpicid)) 
					{
						echo "<option value= '$rpicid3->nama'> $rpicid3->nama ($rpicid3->departemen)</option>";
					}
					?-->
				</select>
			</div>
	</div>	
	
	<!--<div class="control-group">	
			<div id="txtHintPic"></div>
	</div>-->
	
	<div class="control-group">	
		<label class="control-label" for="date_request">Request Date</label>
		<div class="controls">
			<input type="text" id="date_request" class="input-medium" name="date_request" value="<?php echo date('F j, Y'); ?>" readonly>
		</div>
	</div>		
	
	<div class="control-group">
		<label class="control-label" for="start">Start Meeting</label>
		<div class="controls">
			<input type="text" id="start" class="input-large" name="start" 
			value="<?php echo $start ?>" placeholder="Please Choose Start Date & Time"
			onchange="showUser1(this.value,document.getElementById('end').value,this)">
		</div>
	</div>		
	
	<div class="control-group">
		<label class="control-label" for="end">End Meeting</label>
		<div class="controls">
			<input type="text" id="end" class="input-large" name="end" 
			value="<?php echo $end ?>" placeholder="Please Choose End Date & Time"
			onchange="showUser(document.getElementById('start').value,this)">
		</div>
	</div>	
					
	<div class="control-group">
			<div id="txtHint"></div>
	</div>
					
	<div class="control-group">
		<label class="control-label" for="kebutuhan_descr">Meeting Description</label>
		<div class="controls">
			<textarea id="kebutuhan_descr" name="kebutuhan_descr" placeholder="Please Describe Your Meeting Topic, e.g., This Meeting Discuss About Planning Project Or Project Progress and Etc "><?php echo $kebutuhan_descr ?></textarea>
		</div>
	</div>
	
</form>

<?php
#@session_destroy();
	koneksi_tutup();
?>

