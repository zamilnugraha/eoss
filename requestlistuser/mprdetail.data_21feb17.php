<?php
require 'koneksi.php';
koneksi_buka();
#$kunci = $_GET['kunci'];
@session_start();
$udept = $_SESSION['user_departemen'];
 		$pid = $_GET['pid']; $uid = $_GET['username'];$support=$_POST['support']; echo $support;
?>
<!--<script>
window.top.location.href = "http://localhost/index.php?view"; 
</script>-->
<? 
if(isset($_POST['cari'])){
?>
<table class="table table-condensed table-bordered table-hover" cellpadding="0" cellspacing="0" style="">
<thead>
	<tr>
		<!--<th style="width:5px">No</th>-->
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
		<!--? if($_SESSION['user_level']!= 1){?-->	
			<th style="background-color:#909090;color:#fff;border-color:white;width:20px">Action</th>
		<!--? } ?-->	
	</tr>
</thead>
<tbody>

	<?php 
		$i = 1;
		$jml_per_halaman = 5;
		
		if($_SESSION['user_level'] == 1){
		$qcekdept = mysql_query("SELECT kode_departemen, nama_departemen FROM ith_departemen WHERE nama_departemen='$udept'");
		$rcekdept = mysql_fetch_object($qcekdept);
		$mydeptkd = $rcekdept->kode_departemen;
			if($_POST['statusticket_sc']=='6'){
				$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name 
				FROM ITH_TICKET_HEADER 
				LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
				 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
				 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik								 
				WHERE 
				ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]' AND ITH_USER.user_realname!='Administrator'
				AND ITH_TICKET_HEADER.ticketstatus_id IN ('1','2','3','0','5')
				ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));
			}elseif($_POST['statusticket_sc']=='1'){
				$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name 
				FROM ITH_TICKET_HEADER 
				LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
				 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
				 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik								 
				WHERE 
				ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]' AND ITH_USER.user_realname!='Administrator'
				AND ITH_TICKET_HEADER.ticketstatus_id ='1'
				ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));
			}elseif($_POST['statusticket_sc']=='2'){
				$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name 
				FROM ITH_TICKET_HEADER 
				LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
				 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
				 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik								 
				WHERE 
				ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]' AND ITH_USER.user_realname!='Administrator'
				AND ITH_TICKET_HEADER.ticketstatus_id ='2'
				ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));
			}elseif($_POST['statusticket_sc']=='3'){
				$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name 
				FROM ITH_TICKET_HEADER 
				LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
				 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
				 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik								 
				WHERE 
				ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]' AND ITH_USER.user_realname!='Administrator'
				AND ITH_TICKET_HEADER.ticketstatus_id ='3'
				ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));
			}elseif($_POST['statusticket_sc']=='0'){
				$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name 
				FROM ITH_TICKET_HEADER 
				LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
				 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
				 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik								 
				WHERE 
				ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]' AND ITH_USER.user_realname!='Administrator'
				AND ITH_TICKET_HEADER.ticketstatus_id ='5'
				ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));
			}elseif($_POST['statusticket_sc']=='5'){
				$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name 
				FROM ITH_TICKET_HEADER 
				LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
				 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
				 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik								 
				WHERE 
				ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]' AND ITH_USER.user_realname!='Administrator'
				AND ITH_TICKET_HEADER.ticketstatus_id ='5'
				ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));
			}	
		}elseif(($_SESSION['user_level'] == 99)||($_SESSION['user_level'] == 1000)||
		($_SESSION['user_level'] == 1001)){
			if($_POST['statusticket_sc']=='6'){
				$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name	 
				FROM ITH_TICKET_HEADER 
				LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
				 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
				 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
				 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id	
				WHERE ITH_TICKET_HEADER.ticket_udeptid IN('1','2','3') AND ITH_TICKET_HEADER.ticketstatus_id IN ('1','2','3','0','5')
				ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));			
			}elseif($_POST['statusticket_sc']=='1'){
				$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name	 
				FROM ITH_TICKET_HEADER 
				LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
				 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
				 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
				 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id	
				WHERE ITH_TICKET_HEADER.ticket_udeptid IN('1','2','3') AND ITH_TICKET_HEADER.ticketstatus_id = '1'
				ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));			
			}elseif($_POST['statusticket_sc']=='2'){
				$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name	 
				FROM ITH_TICKET_HEADER 
				LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
				 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
				 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
				 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id	
				WHERE ITH_TICKET_HEADER.ticket_udeptid IN('1','2','3') AND ITH_TICKET_HEADER.ticketstatus_id = '2'
				ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));			
			}elseif($_POST['statusticket_sc']=='3'){
				$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name	 
				FROM ITH_TICKET_HEADER  
				LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
				 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
				 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
				 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id	
				WHERE ITH_TICKET_HEADER.ticket_udeptid IN('1','2','3') AND ITH_TICKET_HEADER.ticketstatus_id = '3'
				ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));			
			}elseif($_POST['statusticket_sc']=='0'){
				$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name	 
				FROM ITH_TICKET_HEADER 
				LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
				 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
				 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
				 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id	
				WHERE ITH_TICKET_HEADER.ticket_udeptid IN('1','2','3') AND ITH_TICKET_HEADER.ticketstatus_id = '0'
				ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));			
			}elseif($_POST['statusticket_sc']=='5'){
				$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name FROM ITH_TICKET_HEADER 
				LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
				 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
				 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
				 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id	
				WHERE ITH_TICKET_HEADER.ticket_udeptid IN('1','2','3') AND ITH_TICKET_HEADER.ticketstatus_id = '5'
				ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));			
			}
			
		}elseif(($_SESSION['user_level'] == 100)){
			if($_POST['statusticket_sc']=='6'){
				$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name	 
				FROM ITH_TICKET_HEADER 
				LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
				 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
				 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
				 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id	
				WHERE ITH_TICKET_HEADER.ticket_udeptid = '1' AND ITH_TICKET_HEADER.ticketstatus_id IN ('1','2','3','0','5')
				ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));			
			}elseif($_POST['statusticket_sc']=='1'){
				$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name	 
				FROM ITH_TICKET_HEADER 
				LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
				 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
				 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
				WHERE ITH_TICKET_HEADER.ticket_udeptid = '1' AND ITH_TICKET_HEADER.ticketstatus_id = '1'
				ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));			
			}elseif($_POST['statusticket_sc']=='2'){
				$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name	 
				FROM ITH_TICKET_HEADER 
				LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
				 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
				 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
				 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id	
				WHERE ITH_TICKET_HEADER.ticket_udeptid = '1' AND ITH_TICKET_HEADER.ticketstatus_id = '2'
				ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));			
			}elseif($_POST['statusticket_sc']=='3'){
				$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name	 
				FROM ITH_TICKET_HEADER 
				LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
				 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
				 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
				WHERE ITH_TICKET_HEADER.ticket_udeptid = '1' AND ITH_TICKET_HEADER.ticketstatus_id = '3'
				ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));			
			}elseif($_POST['statusticket_sc']=='0'){
				$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name	 
				FROM ITH_TICKET_HEADER 
				LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
				 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
				 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
				 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id	
				WHERE ITH_TICKET_HEADER.ticket_udeptid = '1' AND ITH_TICKET_HEADER.ticketstatus_id = '0'
				ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));			
			}elseif($_POST['statusticket_sc']=='5'){
				$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name	 
				FROM ITH_TICKET_HEADER 
				LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
				 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
				 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
				 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id	
				WHERE ITH_TICKET_HEADER.ticket_udeptid = '1' AND ITH_TICKET_HEADER.ticketstatus_id = '5'
				ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));			
			}	
		}elseif(($_SESSION['user_level'] == 101)){
			if($_POST['statusticket_sc']=='6'){
				$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name	 
				FROM ITH_TICKET_HEADER 
				LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
				 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
				 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
				 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id	
				WHERE ITH_TICKET_HEADER.ticket_udeptid IN('2','3') AND ITH_TICKET_HEADER.ticketstatus_id IN ('1','2','3','0','5')
				ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));			
			}elseif($_POST['statusticket_sc']=='1'){
				$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name	 
				FROM ITH_TICKET_HEADER 
				LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
				 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
				 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
				 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id	
				WHERE ITH_TICKET_HEADER.ticket_udeptid IN('2','3') AND ITH_TICKET_HEADER.ticketstatus_id = '1'
				ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));			
			}elseif($_POST['statusticket_sc']=='2'){
				$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name	 
				FROM ITH_TICKET_HEADER 
				LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
				 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
				 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
				 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id	
				WHERE ITH_TICKET_HEADER.ticket_udeptid IN('2','3') AND ITH_TICKET_HEADER.ticketstatus_id = '2'
				ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));			
			}elseif($_POST['statusticket_sc']=='3'){
				$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name	 
				FROM ITH_TICKET_HEADER 
				LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
				 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
				 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
				WHERE ITH_TICKET_HEADER.ticket_udeptid IN('2','3') AND ITH_TICKET_HEADER.ticketstatus_id = '3'
				ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));			
			}elseif($_POST['statusticket_sc']=='0'){
				$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name	 
				FROM ITH_TICKET_HEADER 
				LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
				 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
				 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
				 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id	
				WHERE ITH_TICKET_HEADER.ticket_udeptid IN('2','3') AND ITH_TICKET_HEADER.ticketstatus_id = '0'
				ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));			
			}elseif($_POST['statusticket_sc']=='5'){
				$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name	 
				FROM ITH_TICKET_HEADER 
				LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
				 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
				 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
				 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id	
				WHERE ITH_TICKET_HEADER.ticket_udeptid IN('2','3') AND ITH_TICKET_HEADER.ticketstatus_id = '5'
				ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));			
			}
		}elseif(($_SESSION['user_level'] == 102)){
			if($_POST['statusticket_sc']=='6'){
				$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name	 
				FROM ITH_TICKET_HEADER 
				LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
				 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
				 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
				 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id	
				WHERE ITH_TICKET_HEADER.ticket_udeptid ='4' AND ITH_TICKET_HEADER.ticketstatus_id IN ('1','2','3','0','5')
				ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));			
			}elseif($_POST['statusticket_sc']=='1'){
				$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name	 
				FROM ITH_TICKET_HEADER 
				LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
				 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
				 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
				 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id	
				WHERE ITH_TICKET_HEADER.ticket_udeptid ='4' AND ITH_TICKET_HEADER.ticketstatus_id = '1'
				ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));			
			}elseif($_POST['statusticket_sc']=='2'){
				$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name	 
				FROM ITH_TICKET_HEADER 
				LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
				 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
				 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
				 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id	
				WHERE ITH_TICKET_HEADER.ticket_udeptid ='4' AND ITH_TICKET_HEADER.ticketstatus_id = '2'
				ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));			
			}elseif($_POST['statusticket_sc']=='3'){
				$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name	 
				FROM ITH_TICKET_HEADER 
				LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
				 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
				 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
				 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id	
				WHERE ITH_TICKET_HEADER.ticket_udeptid ='4' AND ITH_TICKET_HEADER.ticketstatus_id = '3'
				ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));			
			}elseif($_POST['statusticket_sc']=='0'){
				$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name	 
				FROM ITH_TICKET_HEADER 
				LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
				 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
				 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
				 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id	
				WHERE ITH_TICKET_HEADER.ticket_udeptid ='4' AND ITH_TICKET_HEADER.ticketstatus_id = '0'
				ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));			
			}elseif($_POST['statusticket_sc']=='5'){
				$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name	 
				FROM ITH_TICKET_HEADER 
				LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
				 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
				 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
				 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id	
				WHERE ITH_TICKET_HEADER.ticket_udeptid ='4' AND ITH_TICKET_HEADER.ticketstatus_id = '5'
				ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));			
			}			##echo "jumlah data";
		}
		$jml_halaman = ceil($jml_data / $jml_per_halaman);
		###echo "<br>Jumlah Data = ".$jml_data.'<br>';

		// query pada saat mode pencarian
		if(isset($_POST['cari']) or isset($_POST['romfrom_sc']) or isset($_POST['romto_sc']) or isset($_POST['areafrom_sc']) or isset($_POST['areato_sc']) 
		or isset($_POST['storefrom_sc']) or isset($_POST['storeto_sc']) or isset($_POST['dtfrom_sc']) or isset($_POST['dtto_sc']) 
		or isset($_POST['statusticket_sc']) or isset($_POST['supportby_sc']) AND isset($_POST['halaman'])) 
		{
						$kunci = $_POST['cari'];
						$halaman = $_POST['halaman'];

						$i = ($halaman - 1) * $jml_per_halaman  + 1;
						
						//filter ROM From & ROM To
						if(($_POST['romfrom_sc'] !='' )||($_POST['romto_sc'] !='' )){
							$romfrom = $_POST['romfrom_sc'];
							$romto = $_POST['romto_sc'];
							$romfromto_query = " AND (ITH_USER.usergroup_id BETWEEN '$_POST[romfrom_sc]' AND '$_POST[romto_sc]')";							
						}
						
						//filter Area From & Area To
						if(($_POST['areafrom_sc'] !='' )||($_POST['areato_sc'] !='' )){
							$areafrom = $_POST['areafrom_sc'];
							$areato = $_POST['areato_sc'];
							$areafromto_query = " AND (ITH_USER.usersubgroup_id BETWEEN '$_POST[areafrom_sc]' AND '$_POST[areato_sc]')";
						}
						
						//filter Store From & Store To
						if(($_POST['storefrom_sc'] !='' )||($_POST['storeto_sc'] !='' )){
							$storefrom = $_POST['storefrom_sc'];
							$storeto = $_POST['storeto_sc'];
							$storefromto_query = " AND (ITH_USER.userstore_id BETWEEN '$_POST[storefrom_sc]' AND '$_POST[storeto_sc]')";
						}
												
						//filter Date From
						if(($_POST['dtfrom_sc'] !='' )||($_POST['dtto_sc'] !='' )){
							$dtfrom = $_POST['dtfrom_sc'];
							$dtto = $_POST['dtto_sc'];
							#$dtfromto_query = " AND (ITH_TICKET_HEADER.ticket_createdate BETWEEN '$_POST[dtfrom_sc]' AND '$_POST[dtto_sc]')";
							$dtfromto_query = " AND (STR_TO_DATE(ITH_TICKET_HEADER.ticket_createdate,'%d/%m/%Y') BETWEEN STR_TO_DATE('$_POST[dtfrom_sc]','%d/%m/%Y') AND STR_TO_DATE('$_POST[dtto_sc]','%d/%m/%Y'))";
							
						}
												
						//filter Status Ticket
						if($_POST['statusticket_sc'] !='' ){
							$statusticket = $_POST['statusticket_sc'];
							$tktsts_query = " AND ITH_TICKET_HEADER.ticketstatus_id = '$statusticket'";
							$tkts = "dan Ticket Status = $statusticket";
							$_SESSION['statusticket'] = $statusticket;
						}
						//filter Support By
						if($_POST['supportby_sc'] !='' ){
							$supportby = $_POST['supportby_sc'];
							$supportby_query = " AND ITH_TICKET_HEADER.ticket_udeptid = '$supportby'";
							$supportbyx = "dan Support By = $supportby";
						}
						if($_POST['supportby_sc'] =='7' ){
							$supportby = $_POST['supportby_sc'];
							$supportby_query = " AND ITH_TICKET_HEADER.ticket_udeptid IN ('2','3')";
							$supportbyx = "dan Support By = $supportby";
							
						}
				if(($_SESSION['user_level'] == 1)){		
					if($_POST['statusticket_sc']=='6'){	
						$query = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name	 
								FROM ITH_TICKET_HEADER 
								LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
								LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
								LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
								LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
								LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id	
								WHERE ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]' AND ITH_TICKET_HEADER.ticketstatus_id IN ('1','2','3','0','5')  
								AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
								$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
								ORDER BY ITH_TICKET_HEADER.ticket_no ASC");
					/*		
						echo "SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name FROM ITH_TICKET_HEADER 
								LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
								LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
								LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
								LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
								WHERE ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]' AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%')
								OR (ITH_TICKET_HEADER.ticket_subject LIKE '%$kunci%') $romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
								ORDER BY ITH_TICKET_HEADER.ticket_no ASC";	
					*/					
					}elseif($_POST['statusticket_sc']=='1'){	
						$query = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name	 
								FROM ITH_TICKET_HEADER
								LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
								LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
								LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
								LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
								LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id	
								WHERE ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]' 
								AND ITH_TICKET_HEADER.ticketstatus_id = '1'	AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
								$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
								ORDER BY ITH_TICKET_HEADER.ticket_no ASC");
					/*		
						echo "SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name FROM ITH_TICKET_HEADER 
								LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
								LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
								LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
								LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
								WHERE ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]' AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%')
								OR (ITH_TICKET_HEADER.ticket_subject LIKE '%$kunci%') $romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
								ORDER BY ITH_TICKET_HEADER.ticket_no ASC";	
					*/		
					}elseif($_POST['statusticket_sc']=='2'){	
						$query = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name	 
								FROM ITH_TICKET_HEADER
								LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
								LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
								LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
								LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
								LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id	
								WHERE ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]' 
								AND ITH_TICKET_HEADER.ticketstatus_id = '2'	AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
								$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
								ORDER BY ITH_TICKET_HEADER.ticket_no ASC");
					/*		
						echo "SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name FROM ITH_TICKET_HEADER 
								LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
								LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
								LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
								LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
								WHERE ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]' AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%')
								OR (ITH_TICKET_HEADER.ticket_subject LIKE '%$kunci%') $romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
								ORDER BY ITH_TICKET_HEADER.ticket_no ASC";	
					*/					
					}elseif($_POST['statusticket_sc']=='3'){	
						$query = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name	 
								FROM ITH_TICKET_HEADER
								LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
								LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
								LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
								LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
								LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id	
								WHERE ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]' 
								AND ITH_TICKET_HEADER.ticketstatus_id = '3'	AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
								$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
								ORDER BY ITH_TICKET_HEADER.ticket_no ASC");
					/*		
						echo "SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name FROM ITH_TICKET_HEADER 
								LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
								LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
								LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
								LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
								WHERE ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]' AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%')
								OR (ITH_TICKET_HEADER.ticket_subject LIKE '%$kunci%') $romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
								ORDER BY ITH_TICKET_HEADER.ticket_no ASC";	
					*/		
					}elseif($_POST['statusticket_sc']=='0'){	
						$query = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name	 
								FROM ITH_TICKET_HEADER
								LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
								LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
								LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
								LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
								LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id	
								WHERE ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]' 
								AND ITH_TICKET_HEADER.ticketstatus_id = '0'	AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
								$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
								ORDER BY ITH_TICKET_HEADER.ticket_no ASC");
					/*		
						echo "SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name FROM ITH_TICKET_HEADER 
								LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
								LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
								LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
								LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
								WHERE ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]' AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%')
								OR (ITH_TICKET_HEADER.ticket_subject LIKE '%$kunci%') $romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
								ORDER BY ITH_TICKET_HEADER.ticket_no ASC";	
					*/		
					}elseif($_POST['statusticket_sc']=='5'){	
						$query = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name	 
								FROM ITH_TICKET_HEADER
								LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
								LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
								LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
								LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
								LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id	
								WHERE ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]' 
								AND ITH_TICKET_HEADER.ticketstatus_id = '5'	AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
								$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
								ORDER BY ITH_TICKET_HEADER.ticket_no ASC");
					/*		
						echo "SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name FROM ITH_TICKET_HEADER 
								LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
								LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
								LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
								LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
								WHERE ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]' AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%')
								OR (ITH_TICKET_HEADER.ticket_subject LIKE '%$kunci%') $romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
								ORDER BY ITH_TICKET_HEADER.ticket_no ASC";	
					*/		
					}
				}elseif(($_SESSION['user_level'] != 1)){		
					
					/**
					if(isset($_POST['cari'])&&(isset($_POST['halaman']))) {
						$halaman = $_POST['halaman'];
						$i = ($halaman - 1) * $jml_per_halaman  + 1;				
						$query = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name FROM ITH_TICKET_HEADER 
								LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
								LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
								LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
								LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
								WHERE ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]' AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
								$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
								ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman");
						
						
						echo "SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name FROM ITH_TICKET_HEADER 
								LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
								LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
								LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
								LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
								WHERE (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%')
								$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
								ORDER BY ITH_TICKET_HEADER.ticket_no ASC";		
						
						echo 'Halaman = '.$halaman.'<br>i = '.$i.'<br>Jumlah Halaman = '.$jml_per_halaman;
						
					}else{
					**/	
					if($_POST['statusticket_sc']=='6'){
						$query = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name	 
								FROM ITH_TICKET_HEADER
								LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
								LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
								LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
								LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
								LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id	
								WHERE (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
								AND ITH_TICKET_HEADER.ticketstatus_id IN ('1','2','3','0','5')
								$supportby_query $romfromto_query $areafromto_query $storefromto_query $dtfromto_query 
								ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT 0, $jml_per_halaman");
						/***
						echo "<br>SELECT ITH_TICKET_HEADERYY.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name FROM ITH_TICKET_HEADER 
								LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
								LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
								LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
								LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
								WHERE (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
								AND ITH_TICKET_HEADER.ticketstatus_id IN ('1','2','3','0','5')
								$supportby_query $romfromto_query $areafromto_query $storefromto_query $dtfromto_query
								ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT 0, $jml_per_halaman";	
						#echo "<br>Support By : ".$supportby;								
						#echo "<br>Status Tiket : ".$statusticket;	
						***/
					}elseif($_POST['statusticket_sc']=='1'){
						$query = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name	 
								FROM ITH_TICKET_HEADER
								LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
								LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
								LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
								LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
								LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id	
								WHERE (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
								AND ITH_TICKET_HEADER.ticketstatus_id IN ('1')
								$supportby_query $romfromto_query $areafromto_query $storefromto_query $dtfromto_query 
								ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT 0, $jml_per_halaman");
						/***
						echo "<br>SELECT ITH_TICKET_HEADERYY.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name FROM ITH_TICKET_HEADER 
								LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
								LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
								LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
								LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
								WHERE (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
								AND ITH_TICKET_HEADER.ticketstatus_id IN ('1')
								$supportby_query $romfromto_query $areafromto_query $storefromto_query $dtfromto_query
								ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT 0, $jml_per_halaman";	
						#echo "<br>Support By : ".$supportby;								
						#echo "<br>Status Tiket : ".$statusticket;	
						***/
					}elseif($_POST['statusticket_sc']=='2'){
						$query = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name	 
								FROM ITH_TICKET_HEADER
								LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
								LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
								LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
								LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
								LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id	
								WHERE (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
								AND ITH_TICKET_HEADER.ticketstatus_id IN ('2')
								$supportby_query $romfromto_query $areafromto_query $storefromto_query $dtfromto_query 
								ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT 0, $jml_per_halaman");
						/***
						echo "<br>SELECT ITH_TICKET_HEADERYY.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name FROM ITH_TICKET_HEADER 
								LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
								LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
								LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
								LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
								WHERE (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
								AND ITH_TICKET_HEADER.ticketstatus_id IN ('2')
								$supportby_query $romfromto_query $areafromto_query $storefromto_query $dtfromto_query
								ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT 0, $jml_per_halaman";	
						#echo "<br>Support By : ".$supportby;								
						#echo "<br>Status Tiket : ".$statusticket;	
						***/
					}elseif($_POST['statusticket_sc']=='3'){
						$query = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name	 
								FROM ITH_TICKET_HEADER
								LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
								LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
								LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
								LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
								LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id	
								WHERE (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
								AND ITH_TICKET_HEADER.ticketstatus_id IN ('3')
								$supportby_query $romfromto_query $areafromto_query $storefromto_query $dtfromto_query 
								ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT 0, $jml_per_halaman");
						/***
						echo "<br>SELECT ITH_TICKET_HEADERYY.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name FROM ITH_TICKET_HEADER 
								LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
								LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
								LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
								LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
								WHERE (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
								AND ITH_TICKET_HEADER.ticketstatus_id IN ('3')
								$supportby_query $romfromto_query $areafromto_query $storefromto_query $dtfromto_query
								ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT 0, $jml_per_halaman";	
						#echo "<br>Support By : ".$supportby;								
						#echo "<br>Status Tiket : ".$statusticket;	
						***/
					}elseif($_POST['statusticket_sc']=='0'){
						$query = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name	 
								FROM ITH_TICKET_HEADER
								LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
								LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
								LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
								LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
								LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id	
								WHERE (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
								AND ITH_TICKET_HEADER.ticketstatus_id IN ('0')
								$supportby_query $romfromto_query $areafromto_query $storefromto_query $dtfromto_query 
								ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT 0, $jml_per_halaman");
						/***
						echo "<br>SELECT ITH_TICKET_HEADERYY.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name FROM ITH_TICKET_HEADER 
								LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
								LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
								LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
								LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
								WHERE (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
								AND ITH_TICKET_HEADER.ticketstatus_id IN ('0')
								$supportby_query $romfromto_query $areafromto_query $storefromto_query $dtfromto_query
								ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT 0, $jml_per_halaman";	
						#echo "<br>Support By : ".$supportby;								
						#echo "<br>Status Tiket : ".$statusticket;	
						***/
					}elseif($_POST['statusticket_sc']=='5'){
						$query = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name	 
								FROM ITH_TICKET_HEADER
								LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
								LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
								LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
								LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
								LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id	
								WHERE (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
								AND ITH_TICKET_HEADER.ticketstatus_id IN ('5')
								$supportby_query $romfromto_query $areafromto_query $storefromto_query $dtfromto_query 
								ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT 0, $jml_per_halaman");
						/***
						echo "<br>SELECT ITH_TICKET_HEADERYY.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name FROM ITH_TICKET_HEADER 
								LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
								LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
								LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
								LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
								WHERE (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
								AND ITH_TICKET_HEADER.ticketstatus_id IN ('5')
								$supportby_query $romfromto_query $areafromto_query $storefromto_query $dtfromto_query
								ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT 0, $jml_per_halaman";	
						#echo "<br>Support By : ".$supportby;								
						#echo "<br>Status Tiket : ".$statusticket;	
						***/
					}	
					#}	
						
				}						

		// query jika nomor halaman sudah ditentukan								
		/*if(isset($_POST['cari'])) {
			$kunci = $_POST['cari'];
			echo "<strong>Hasil pencarian untuk kata kunci $kunci</strong>";
			$query = mysql_query("SELECT ITH_TICKET.*, ITH_USER.user_realname FROM ITH_TICKET_HEADER 
			LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
			 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET.ticketsubcategory2_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
			 LEFT JOIN ITH_USER ON ITH_TICKET.ticket_createby = ITH_USER.user_nik									 
			WHERE ITH_TICKET.ticket_id LIKE '%$kunci%' OR ITH_TICKET.ticket_subject LIKE '$kunci%' OR ITH_USER.user_realname LIKE '%$kunci%' AND 
			ITH_TICKET.ticket_createby='$_SESSION[user_realname]'");*/
		} elseif(isset($_POST['halaman'])) {
		#} elseif((isset($_POST['cari']))OR(isset($_POST['halaman']))) {
			$halaman = $_POST['halaman'];
			$i = ($halaman - 1) * $jml_per_halaman  + 1;
			$query = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name	 
			FROM ITH_TICKET_HEADER
			LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
			 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
			 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
			 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id	
			WHERE ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]' AND ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%' OR ITH_TICKET_HEADER.ticket_subject LIKE '$kunci%' 
			OR ITH_USER.user_realname LIKE '%$kunci%' AND 
			ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]' 
			ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman");
			#echo "TEST";
		}else{
			if(($_SESSION['user_level'] == 1)){
			$mydatex = date('d/m/Y', strtotime('today - 30 days'));
			$mydate = (explode("/",$mydatex));
			$dayf = $mydate[0];
			$monthf   = $mydate[1];
			$yearf  = $mydate[2];	
			$dfdefault = $dayf.'/'.$monthf.'/'.$yearf;
			
			$datenowx = date('d/m/Y');			
			$datenow = (explode("/",$datenowx));	
			$dayt = $datenow[0];
			$montht   = $datenow[1];
			$yeart  = $datenow[2];	
			$dtdefault = $dayt.'/'.$montht.'/'.$yeart;		
			
			#$dfdefault = '01/01/2017';
			#$dtdefault = '01/02/2017';
			$query = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name	 
								FROM ITH_TICKET_HEADER
								LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id 
								LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code 
								LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik 
								LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id	
								WHERE ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]' AND ITH_USER.user_realname!='Administrator' 								
								AND ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%'
								AND STR_TO_DATE(ITH_TICKET_HEADER.ticket_createdate,'%d/%m/%Y') 
								BETWEEN STR_TO_DATE('$dfdefault','%d/%m/%Y') AND STR_TO_DATE('$dtdefault','%d/%m/%Y') 
								ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT 0, $jml_per_halaman");		
			#echo 'Level = '.$_SESSION['user_level'].'Hello<br>NIK ='.$_SESSION['user_nik'];
			/*
			echo "SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name FROM ITH_TICKET_HEADER 
			LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
			 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
			 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik								 
			WHERE 
			ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]' AND ITH_USER.user_realname!='Administrator' 
			AND (ITH_TICKET_HEADER.ticket_createdate BETWEEN '$dfdefault' AND '$dtdefault')
			ORDER BY ITH_TICKET_HEADER.ticket_no DESC";		
			*/
			#echo "<br>mydatex = ".$mydatex.'<br>mydate = '.$mydate.'<br>datenowx = '.$datenowx.'<br>datenow = '.$datenow;
			
			#echo "<br>mydatex = ".$mydatex;
			##echo "<br>monthf = ".$monthf.'-dayf = '.$dayf.'-yearf = '.$yearf;
			#echo "<br>montht = ".$montht.'-dayt = '.$dayt.'-yeart = '.$yeart;
			
			}elseif(($_SESSION['user_level'] != 1)){
			$mydatex = date('d/m/Y', strtotime('today - 30 days'));
			$mydate = (explode("/",$mydatex));
			$dayf = $mydate[0];
			$monthf   = $mydate[1];
			$yearf  = $mydate[2];	
			$dfdefault = $dayf.'/'.$monthf.'/'.$yearf;
			
			$datenowx = date('d/m/Y');			
			$datenow = (explode("/",$datenowx));	
			$dayt = $datenow[0];
			$montht   = $datenow[1];
			$yeart  = $datenow[2];	
			$dtdefault = $dayt.'/'.$montht.'/'.$yeart;	
				
				$query = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, 
				ITH_DEPARTEMEN.nama_departemen, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name	FROM ITH_TICKET_HEADER 
				LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
				 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
				 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik		
				 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen				 
				 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id	
				WHERE ITH_TICKET_HEADER.ticket_udeptid = '$_SESSION[udeptid]' AND STR_TO_DATE(ITH_TICKET_HEADER.ticket_createdate,'%d/%m/%Y') BETWEEN STR_TO_DATE('$dfdefault','%d/%m/%Y') AND STR_TO_DATE('$dtdefault','%d/%m/%Y') 
				ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT 0, $jml_per_halaman");
				#echo "Hai";
			#echo 'Level = '.$_SESSION['user_level'].'Hello Admin<br>NIK ='.$_SESSION['user_nik'];	
			/**
			echo "SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name FROM ITH_TICKET_HEADER 
			LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
			 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
			 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik								 
			WHERE STR_TO_DATE(ITH_TICKET_HEADER.ticket_createdate,'%d/%m/%Y') BETWEEN STR_TO_DATE('$dfdefault','%d/%m/%Y') AND STR_TO_DATE('$dtdefault','%d/%m/%Y') 
			ORDER BY ITH_TICKET_HEADER.ticket_no DESC";	
			**/
			/***
			echo "SELECT ITH_TICKET_HEADERZz.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, 
				ITH_DEPARTEMEN.nama_departemen	FROM ITH_TICKET_HEADER 
				LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
				 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
				 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik		
				 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen				 
				WHERE ITH_TICKET_HEADER.ticket_udeptid = '$_SESSION[udeptid]' AND STR_TO_DATE(ITH_TICKET_HEADER.ticket_createdate,'%d/%m/%Y') BETWEEN STR_TO_DATE('$dfdefault','%d/%m/%Y') AND STR_TO_DATE('$dtdefault','%d/%m/%Y') 
				ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT 0, $jml_per_halaman";
			***/	
			}			
		}
		
		while($dtmyticket = mysql_fetch_object($query)) 
		{
			#$done = 'http://'.$_SERVER['SERVER_NAME'].':85/datatable/requestlist/images/done.png';	
			#$nofile = 'http://'.$_SERVER['SERVER_NAME'].':85/datatable/requestlist/images/nouploaded.png';	
	?>

	<tr style="display:show;">
		<!--<td><!?=$i;?></td>	-->	
		<td><?=$dtmyticket->ticket_createdate;?></td>		
		<td><?=$dtmyticket->ticket_createtime;?></td>		
		<td><?=$dtmyticket->ticket_id;?></td>		
		<td><?=ucwords(strtolower($dtmyticket->user_realname));?></td>	
		<td><?=$dtmyticket->ticket_subject;?></td>				
		<!--<td><!?='-'?></td>		
		<td><!?='-'?></td>-->		
		<?			
			if($dtmyticket->ticketstatus_id=='0'){
		?>
		<td>
			<a href="<?='http://'.$_SERVER['SERVER_NAME'].'/index.php?view=updateuserrespond&pid='.$dtmyticket->ticket_id.'&uid='.$_SESSION['user_nik']?>" title="Ticket ID: <?=$dtmyticket->ticket_id?>" target="_parent">
				<img src="img/myeditx.png" alt="" height="30" width="50"></img>
			</a>
		</td>	
		<? }elseif($dtmyticket->ticketreferencestatus_id=='1'){
		?>
		<td>
			<a href="<?='http://'.$_SERVER['SERVER_NAME'].'/index.php?view=updateuserrespond&pid='.$dtmyticket->ticket_id.'&uid='.$_SESSION['user_nik']?>" title="Ticket ID: <?=$dtmyticket->ticket_id?>" target="_parent">
				<img src="img/reference.png" alt="" height="30" width="50"></img>
			</a>
		</td>	
		<? } ?>
		<td><center>	
		<?if($dtmyticket->ticketstatus_id=='1'){ //Open Status ?> 
		<?='<center><font color="red">'.ucfirst(strtolower($dtmyticket->ticketstatus_name)).'</font></center>';?>
		<?}elseif($dtmyticket->ticketstatus_id=='0'){ //Solved Status ?>
		<?='<center><font color="blue">'.ucfirst(strtolower($dtmyticket->ticketstatus_name)).'</font></center>';?>
		<?}elseif($dtmyticket->ticketstatus_id=='2'){ //On Process Status?>
		<?='<center><font color="Green">'.ucfirst(strtolower($dtmyticket->ticketstatus_name)).'</font></center>';?>
		<?}elseif($dtmyticket->ticketstatus_id=='3'){ //Cancel Status?>
		<?='<center><font color="#000">'.ucfirst(strtolower($dtmyticket->ticketstatus_name)).'</font></center>';?>
		<?}elseif($dtmyticket->ticketstatus_id=='5'){ //Close Status?>
		<?='<center><font color="#000">'.ucfirst(strtolower($dtmyticket->ticketstatus_name)).'</font></center>';?>
		<?}?></center>	
		</td>	
		 <? if($dtmyticket->ticket_viaby!='By Web'){?>
			<td><?=$dtmyticket->ticket_viaby;?></td>
		 <? }elseif(($dtmyticket->ticket_viaby=='By Web')||($dtmyticket->ticket_viaby=='')){?>
			<td><?='By Web';?></td>
		 <? } ?>	
		 <td><center>
			<?if($dtmyticket->ticket_udeptid=='1'){ // Support By IT ?> 
			<?='<font color="brown">IT'.ucfirst(strtolower($dtmyticket->nama_departemen)).'</font>';?>
			<?}elseif($dtmyticket->ticket_udeptid=='2'){ //Support By FSD EAST ?>
			<?='<font color="blue">FSD EAST'.ucfirst(strtolower($dtmyticket->nama_departemen)).'</font>';?>
			<?}elseif($dtmyticket->ticket_udeptid=='3'){ //Support By FSD WEST?>
			<?='<font color="Green">FSD WEST'.ucfirst(strtolower($dtmyticket->nama_departemen)).'</font>';?>
			<?}elseif($dtmyticket->ticket_udeptid=='4'){ //Support By SDD?>
			<?='<font color="#000">SDD'.ucfirst(strtolower($dtmyticket->nama_departemen)).'</font>';?>
			<?}elseif($dtmyticket->ticket_udeptid=='7'){ //Support By FSD EAST AND FSD WEST?>
			<?='<font color="#000">FSD EAST AND FSD WEST'.ucfirst(strtolower($dtmyticket->nama_departemen)).'</font>';?>
			<?}?></center>	
		</td>		
		<!-- <td><a href="<?='http://'.$_SERVER['SERVER_NAME'].'/index.php?view=comment&pid='.$dtmyticket->ticket_id.'&uid='.$_SESSION['user_nik']?>" title="Ticket ID: <?=$dtmyticket->ticket_id?>" target="_parent">Readmore</a></td> -->		
		<td><a href="<?='http://'.$_SERVER['SERVER_NAME'].'/index.php?view=comment&pid='.$dtmyticket->ticket_id.'&uid='.$_SESSION['user_nik']?>" title="Ticket ID: <?=$dtmyticket->ticket_id?>" target="_parent">
		<img src="img/Readmore1.png" alt="" height="50" width="50"></img>
		</a></td>		
					<? if($_SESSION['user_level']!= 1){?>					
						<? 	if($dtmyticket->ticket_viaby!='Via Web'){ ?>		
								<? if(($dtmyticket->ticketstatus_id == '1')||($dtmyticket->ticketstatus_id == '2')){ ?>
								<td><a href="<?='http://'.$_SERVER['SERVER_NAME'].'/index.php?view=update&pid='.$dtmyticket->ticket_id.'&uid='.$_SESSION['user_nik']?>" title="Ticket ID: <?=$dtmyticket->ticket_id?>" target="_parent">
								<img src="img/editx.png" alt="" height="30" width="50"></img></a></td>		
								<?}elseif(($dtmyticket->ticketstatus_id == '0')||($dtmyticket->ticketstatus_id == '3')){?>
								<td></td>		
								<? } ?>
						<? }elseif($dtmyticket->ticket_viaby=='Via Web'){ ?>
							<? if(($dtmyticket->ticketstatus_id == '1')||($dtmyticket->ticketstatus_id == '2')){ ?>
							<td><a href="<?='http://'.$_SERVER['SERVER_NAME'].'/index.php?view=updateforuser&pid='.$dtmyticket->ticket_id.'&uid='.$_SESSION['user_nik']?>" title="Ticket ID: <?=$dtmyticket->ticket_id?>" target="_parent">
							<img src="img/editx.png" alt="" height="30" width="50"></img></a></td>								
							<?}elseif(($dtmyticket->ticketstatus_id == '0')||($dtmyticket->ticketstatus_id == '3')){?>
								<td></td>		
								<? } ?>							
						<? } ?>
					<? } ?>
			
		<?php  $i++;	
		}
	?>
	</tr>
</tbody>

</table>
<? }elseif(!isset($_POST['cari'])) { ?>
	<? if(!isset($_POST['halaman'])){ ?>
		Silahkan anda Filter Dahulu sebelum data akan ditampilkan. Terimaksih..
	<!--? }elseif(isset($_POST['halaman'])){ ?-->
	<? }elseif(isset($_POST['halaman']) or (isset($_POST['cari']) or isset($_POST['romfrom_sc']) or isset($_POST['romto_sc']) 
					or isset($_POST['areafrom_sc']) 
					or isset($_POST['areato_sc']) 
					or isset($_POST['storefrom_sc']) or isset($_POST['storeto_sc']) or isset($_POST['dtfrom_sc']) or 
					isset($_POST['dtto_sc']) 
					or isset($_POST['statusticket_sc']) or isset($_POST['supportby_sc']))){ ?>
		<!--?='ini halaman ='.$_POST['halaman'].'<br>';?--->
	
			<table class="table table-condensed table-bordered table-hover" cellpadding="0" cellspacing="0" style="">
			<thead>
				<tr>
					<!--<th style="width:5px">No</th>-->
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
					<? if($_SESSION['user_level']!= 1){?>	
						<th style="background-color:#909090;color:#fff;border-color:white;width:20px">Action</th>
					<? } ?>	
				</tr>
			</thead>
			<tbody>
					<? 
					#if(isset($_POST['halaman'])) {
					if(!isset($_POST['cari']) or !isset($_POST['romfrom_sc']) or !isset($_POST['romto_sc']) or !isset($_POST['areafrom_sc']) 
					or !isset($_POST['areato_sc']) 
					or !isset($_POST['storefrom_sc']) or !isset($_POST['storeto_sc']) or !isset($_POST['dtfrom_sc']) or !isset($_POST['dtto_sc']) 
					or !isset($_POST['statusticket_sc']) or !isset($_POST['supportby_sc']) AND !isset($_POST['halaman'])) 
					{
									$kunci = $_POST['cari'];
									$halaman = $_POST['halaman'];

									$i = ($halaman - 1) * $jml_per_halaman  + 1;
									
									//filter ROM From & ROM To
									if(($_POST['romfrom_sc'] !='' )||($_POST['romto_sc'] !='' )){
										$romfrom = $_POST['romfrom_sc'];
										$romto = $_POST['romto_sc'];
										$romfromto_query = " AND (ITH_USERGROUP.usergroup_id BETWEEN '$_POST[romfrom_sc]' AND '$_POST[romto_sc]')";							
									}
									
									//filter Area From & Area To
									if(($_POST['areafrom_sc'] !='' )||($_POST['areato_sc'] !='' )){
										$areafrom = $_POST['areafrom_sc'];
										$areato = $_POST['areato_sc'];
										$areafromto_query = " AND (ITH_USERGROUP.usersubgroup_id BETWEEN '$_POST[areafrom_sc]' AND '$_POST[areato_sc]')";
									}
									
									//filter Store From & Store To
									if(($_POST['storefrom_sc'] !='' )||($_POST['storeto_sc'] !='' )){
										$storefrom = $_POST['storefrom_sc'];
										$storeto = $_POST['storeto_sc'];
										$storefromto_query = " AND (ITH_USERGROUP.userstore_id BETWEEN '$_POST[storefrom_sc]' AND '$_POST[storeto_sc]')";
									}
															
									//filter Date From
									if(($_POST['dtfrom_sc'] !='' )||($_POST['dtto_sc'] !='' )){
										$dtfrom = $_POST['dtfrom_sc'];
										$dtto = $_POST['dtto_sc'];
										#$dtfromto_query = " AND (ITH_TICKET_HEADER.ticket_createdate BETWEEN '$_POST[dtfrom_sc]' AND '$_POST[dtto_sc]')";
										$dtfromto_query = " AND (STR_TO_DATE(ITH_TICKET_HEADER.ticket_createdate,'%d/%m/%Y') BETWEEN STR_TO_DATE('$_POST[dtfrom_sc]','%d/%m/%Y') AND STR_TO_DATE('$_POST[dtto_sc]','%d/%m/%Y'))";
										
									}
															
									//filter Status Ticket
									if($_POST['statusticket_sc'] !='' ){
										$statusticket = $_POST['statusticket_sc'];
										$tktsts_query = " AND ITH_TICKET_HEADER.ticketstatus_id = '$statusticket'";
										$tkts = "dan Ticket Status = $statusticket";
										$_SESSION['statusticket'] = $statusticket;
									}
									
									//filter Support By
									if($_POST['supportby_sc'] !='' ){
										$supportby = $_POST['supportby_sc'];
										$supportby_query = " AND ITH_TICKET_HEADER.ticket_udeptid = '$supportby'";
										$supportbyx = "dan Ticket Status = $supportby";
									}
									
					#$i = 1;
					#$jml_per_halaman = 5;
						$halaman = $_POST['halaman']; $jml_per_halaman = 5;	
						$i = ($halaman - 1) * $jml_per_halaman  + 0;
					
					if($_SESSION['user_level'] == 1){
					$qcekdept = mysql_query("SELECT kode_departemen, nama_departemen FROM ith_departemen WHERE nama_departemen='$udept'");
					$rcekdept = mysql_fetch_object($qcekdept);
					$mydeptkd = $rcekdept->kode_departemen;
						$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name 
						FROM ITH_TICKET_HEADER 
						LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
						 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
						 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
						 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id						 
						WHERE 
						ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]' AND ITH_USER.user_realname!='Administrator' 
						 AND ITH_TICKET_HEADER.ticketstatus_id = '1'
						ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));
						
					}elseif(($_SESSION['user_level'] == 99)||($_SESSION['user_level'] == 1000)||($_SESSION['user_level'] == 1001)){
						if($_SESSION['statusticket']=='6'){	
							$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
							 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id
							WHERE ITH_TICKET_HEADER.ticket_udeptid IN ('1','2','3')
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC")); 
							###echo "<br>Jumlah Data II = ".$jml_data.'<br>';								
						}elseif($_SESSION['statusticket']=='1'){	
							$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
							WHERE ITH_TICKET_HEADER.ticket_udeptid IN ('1','2','3') AND ITH_TICKET_HEADER.ticketstatus_id = '1'
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));
							###echo "<br>Jumlah Data II = ".$jml_data.'<br>';
						}elseif($_SESSION['statusticket']=='2'){	
							$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
							 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id
							WHERE ITH_TICKET_HEADER.ticket_udeptid IN ('1','2','3') AND ITH_TICKET_HEADER.ticketstatus_id = '2'
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));
							###echo "<br>Jumlah Data II = ".$jml_data.'<br>';
						}elseif($_SESSION['statusticket']=='3'){	
							$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
							WHERE ITH_TICKET_HEADER.ticket_udeptid IN ('1','2','3') AND ITH_TICKET_HEADER.ticketstatus_id = '3'
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));
							###echo "<br>Jumlah Data II = ".$jml_data.'<br>';
						}elseif($_SESSION['statusticket']=='0'){	
							$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
							 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id
							WHERE ITH_TICKET_HEADER.ticket_udeptid IN ('1','2','3') AND ITH_TICKET_HEADER.ticketstatus_id = '0'
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));
							###echo "<br>Jumlah Data II = ".$jml_data.'<br>';
						}elseif($_SESSION['statusticket']=='5'){	
							$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
							 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id
							WHERE ITH_TICKET_HEADER.ticket_udeptid IN ('1','2','3') AND ITH_TICKET_HEADER.ticketstatus_id = '5'
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));	
							###echo "<br>Jumlah Data II = ".$jml_data.'<br>';		
						}
				}elseif(($_SESSION['user_level'] == 100)){
						if($_SESSION['statusticket']=='6'){	
							$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
							WHERE ITH_TICKET_HEADER.ticket_udeptid = '1'
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC")); 
							###echo "<br>Jumlah Data II = ".$jml_data.'<br>';								
						}elseif($_SESSION['statusticket']=='1'){	
							$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
							 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id
							WHERE ITH_TICKET_HEADER.ticket_udeptid = '1' AND ITH_TICKET_HEADER.ticketstatus_id = '1'
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));
							###echo "<br>Jumlah Data II = ".$jml_data.'<br>';
						}elseif($_SESSION['statusticket']=='2'){	
							$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
							WHERE ITH_TICKET_HEADER.ticket_udeptid = '1' AND ITH_TICKET_HEADER.ticketstatus_id = '2'
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));
							###echo "<br>Jumlah Data II = ".$jml_data.'<br>';
						}elseif($_SESSION['statusticket']=='3'){	
							$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
							 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id
							WHERE ITH_TICKET_HEADER.ticket_udeptid = '1' AND ITH_TICKET_HEADER.ticketstatus_id = '3'
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));
							###echo "<br>Jumlah Data II = ".$jml_data.'<br>';
						}elseif($_SESSION['statusticket']=='0'){	
							$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
							WHERE ITH_TICKET_HEADER.ticket_udeptid = '1' AND ITH_TICKET_HEADER.ticketstatus_id = '0'
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));
							###echo "<br>Jumlah Data II = ".$jml_data.'<br>';
						}elseif($_SESSION['statusticket']=='5'){	
							$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
							 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id
							WHERE ITH_TICKET_HEADER.ticket_udeptid = '1' AND ITH_TICKET_HEADER.ticketstatus_id = '5'
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));	
							###echo "<br>Jumlah Data II = ".$jml_data.'<br>';		
						}	
				}elseif(($_SESSION['user_level'] == 101)){
						if($_SESSION['statusticket']=='6'){	
							$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
							WHERE ITH_TICKET_HEADER.ticket_udeptid IN ('2','3')
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC")); 
							###echo "<br>Jumlah Data II = ".$jml_data.'<br>';								
						}elseif($_SESSION['statusticket']=='1'){	
							$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
							 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id
							WHERE ITH_TICKET_HEADER.ticket_udeptid IN ('2','3') AND ITH_TICKET_HEADER.ticketstatus_id = '1'
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));
							###echo "<br>Jumlah Data II = ".$jml_data.'<br>';
						}elseif($_SESSION['statusticket']=='2'){	
							$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
							 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id
							WHERE ITH_TICKET_HEADER.ticket_udeptid IN ('2','3') AND ITH_TICKET_HEADER.ticketstatus_id = '2'
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));
							###echo "<br>Jumlah Data II = ".$jml_data.'<br>';
						}elseif($_SESSION['statusticket']=='3'){	
							$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
							 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id
							WHERE ITH_TICKET_HEADER.ticket_udeptid IN ('2','3') AND ITH_TICKET_HEADER.ticketstatus_id = '3'
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));
							###echo "<br>Jumlah Data II = ".$jml_data.'<br>';
						}elseif($_SESSION['statusticket']=='0'){	
							$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
							 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id
							WHERE ITH_TICKET_HEADER.ticket_udeptid IN ('2','3') AND ITH_TICKET_HEADER.ticketstatus_id = '0'
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));
							###echo "<br>Jumlah Data II = ".$jml_data.'<br>';
						}elseif($_SESSION['statusticket']=='5'){	
							$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
							 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id
							WHERE ITH_TICKET_HEADER.ticket_udeptid IN ('2','3') AND ITH_TICKET_HEADER.ticketstatus_id = '5'
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));	
							###echo "<br>Jumlah Data II = ".$jml_data.'<br>';		
						}
				}elseif(($_SESSION['user_level'] == 102)){
						if($_SESSION['statusticket']=='6'){	
							$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
							 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id
							WHERE ITH_TICKET_HEADER.ticket_udeptid = '4'
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC")); 
							###echo "<br>Jumlah Data II = ".$jml_data.'<br>';								
						}elseif($_SESSION['statusticket']=='1'){	
							$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
							 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id
							WHERE ITH_TICKET_HEADER.ticket_udeptid = '4' AND ITH_TICKET_HEADER.ticketstatus_id = '1'
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));
							###echo "<br>Jumlah Data II = ".$jml_data.'<br>';
						}elseif($_SESSION['statusticket']=='2'){	
							$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
							WHERE ITH_TICKET_HEADER.ticket_udeptid = '4' AND ITH_TICKET_HEADER.ticketstatus_id = '2'
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));
							###echo "<br>Jumlah Data II = ".$jml_data.'<br>';
						}elseif($_SESSION['statusticket']=='3'){	
							$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
							 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id
							WHERE ITH_TICKET_HEADER.ticket_udeptid = '4' AND ITH_TICKET_HEADER.ticketstatus_id = '3'
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));
							###echo "<br>Jumlah Data II = ".$jml_data.'<br>';
						}elseif($_SESSION['statusticket']=='0'){	
							$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
							 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id
							WHERE ITH_TICKET_HEADER.ticket_udeptid = '4' AND ITH_TICKET_HEADER.ticketstatus_id = '0'
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));
							###echo "<br>Jumlah Data II = ".$jml_data.'<br>';
						}elseif($_SESSION['statusticket']=='5'){	
							$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
							WHERE ITH_TICKET_HEADER.ticket_udeptid = '4' AND ITH_TICKET_HEADER.ticketstatus_id = '5'
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));	
							###echo "<br>Jumlah Data II = ".$jml_data.'<br>';		
						}	
									}
					$jml_halaman = ceil($jml_data / $jml_per_halaman);
				###	echo "<br>Jumlah Data II New = ".$jml_data.'<br>';
					
							if(($_SESSION['user_level'] == 1)){	
							    if($_SESSION['statusticket']=='6'){
									$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id
											WHERE ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]'  
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') AND ITH_TICKET_HEADER.ticketstatus_id IN ('1','2','3','0','5')
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
											$supportby_query
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC");
								/*		
									echo "SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											WHERE ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]' AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%')
											OR (ITH_TICKET_HEADER.ticket_subject LIKE '%$kunci%') $romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC";	
								*/		
							    }elseif($_SESSION['statusticket']=='1'){
									$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id
											WHERE ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]'  
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											AND ITH_TICKET_HEADER.ticketstatus_id = '1'
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
											$supportby_query
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC");
								/*		
									echo "SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											WHERE ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]' AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%')
											OR (ITH_TICKET_HEADER.ticket_subject LIKE '%$kunci%') $romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC";	
								*/		
							    }elseif($_SESSION['statusticket']=='2'){
									$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id
											WHERE ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]'  
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											AND ITH_TICKET_HEADER.ticketstatus_id = '2'
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
											$supportby_query
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC");
								/*		
									echo "SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											WHERE ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]' AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%')
											OR (ITH_TICKET_HEADER.ticket_subject LIKE '%$kunci%') $romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC";	
								*/		
							    }elseif($_SESSION['statusticket']=='3'){
									$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id
											WHERE ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]'  
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											AND ITH_TICKET_HEADER.ticketstatus_id = '3'
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
											$supportby_query
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC");
								/*		
									echo "SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											WHERE ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]' AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%')
											OR (ITH_TICKET_HEADER.ticket_subject LIKE '%$kunci%') $romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC";	
								*/		
							    }elseif($_SESSION['statusticket']=='0'){
									$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id
											WHERE ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]'  
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											AND ITH_TICKET_HEADER.ticketstatus_id = '0'
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
											$supportby_query
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC");
								/*		
									echo "SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											WHERE ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]' AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%')
											OR (ITH_TICKET_HEADER.ticket_subject LIKE '%$kunci%') $romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC";	
								*/		
							    }elseif($_SESSION['statusticket']=='5'){
									$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id
											WHERE ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]'  
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											AND ITH_TICKET_HEADER.ticketstatus_id = '5'
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
											$supportby_query
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC");
								/*		
									echo "SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											WHERE ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]' AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%')
											OR (ITH_TICKET_HEADER.ticket_subject LIKE '%$kunci%') $romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC";	
								*/		
								}
							}elseif(($_SESSION['user_level'] != 1)){	
								#$i = 1;
								#$jml_per_halaman = 5;		
								#$jml_halaman = ceil($jml_data / $jml_per_halaman);
								#$i = ($halaman - 1) * $jml_per_halaman  + 1;								
								$halaman = $_POST['halaman']; $jml_per_halaman = 5;	
								$i = ($halaman - 1) * $jml_per_halaman  + 1;							
								/*
								if($_POST['statusticket_sc'] !='' ){
									$statusticketx = $_POST['statusticket_sc'];
									$tktsts_query = " AND ITH_TICKET_HEADER.ticketstatus_id = '$statusticketx'";
									$tkts = "dan Ticket Status = $statusticketx";
								}								
								*//**
								if(isset($_POST['cari'])&&(isset($_POST['halaman']))) {
									$halaman = $_POST['halaman'];
									$i = ($halaman - 1) * $jml_per_halaman  + 1;				
									$query = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											WHERE ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]' AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
											ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman");
									
									
									echo "SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											WHERE (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%')
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC";		
									
									echo 'Halaman = '.$halaman.'<br>i = '.$i.'<br>Jumlah Halaman = '.$jml_per_halaman;
									
								}else{
								**/	
								if(($_SESSION['user_level'] == 100)){
									if($_SESSION['statusticket']=='6'){
									$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id
											WHERE ITH_TICKET_HEADER.ticket_udeptid='1' AND ITH_TICKET_HEADER.ticketstatus_id IN ('1','2','3','0','5') 
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
											$supportby_query									
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC LIMIT 0, $jml_per_halaman");
								/***	echo "<br>TEST SELECT ITH_TICKET_HEADERXx.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											WHERE ITH_TICKET_HEADER.ticket_udeptid='1' AND ITH_TICKET_HEADER.ticketstatus_id IN ('1','2','3','0','5') 
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query 
											$supportby_query									
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC LIMIT 0, $jml_per_halaman";
											echo "<br>Status Tiket = ".$_SESSION['statusticket'].'<br>';
											echo "<br>Jumlah Data II News = ".$jml_data.'<br>';
								***/			
									}elseif($_SESSION['statusticket']=='1'){
									$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id
											WHERE ITH_TICKET_HEADER.ticket_udeptid='1' AND ITH_TICKET_HEADER.ticketstatus_id='1'
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
											$supportby_query									
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC LIMIT 0, $jml_per_halaman");
								/***		echo "<br>SELECT ITH_TICKET_HEADERXx.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											WHERE ITH_TICKET_HEADER.ticket_udeptid='1' AND ITH_TICKET_HEADER.ticketstatus_id='1'
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query 
											$supportby_query									
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC LIMIT 0, $jml_per_halaman";
										echo "<br>Status Tiket = ".$_POST['statusticket_sc'].'<br>';
										echo "<br>Jumlah Data II News = ".$jml_data.'<br>';
								***/		
									}elseif($_SESSION['statusticket']=='2'){
									$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id
											WHERE ITH_TICKET_HEADER.ticket_udeptid='1' AND ITH_TICKET_HEADER.ticketstatus_id='2'
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
											$supportby_query									
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC LIMIT 0, $jml_per_halaman");
								/***		echo "<br>SELECT ITH_TICKET_HEADERXx.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											WHERE ITH_TICKET_HEADER.ticket_udeptid='1' AND ITH_TICKET_HEADER.ticketstatus_id='2'
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query 
											$supportby_query									
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC LIMIT 0, $jml_per_halaman";
										echo "<br>Status Tiket = ".$_SESSION['statusticket'].'<br>';
										echo "<br>Jumlah Data II News = ".$jml_data.'<br>';
								***/		
									}elseif($_SESSION['statusticket']=='3'){
									$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id
											WHERE ITH_TICKET_HEADER.ticket_udeptid='1' AND ITH_TICKET_HEADER.ticketstatus_id='3'
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
											$supportby_query									
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC LIMIT 0, $jml_per_halaman");
								/***		echo "<br>SELECT ITH_TICKET_HEADERXx.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											WHERE ITH_TICKET_HEADER.ticket_udeptid='1' AND ITH_TICKET_HEADER.ticketstatus_id='3'
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query 
											$supportby_query									
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC LIMIT 0, $jml_per_halaman";
										echo "<br>Status Tiket = ".$_SESSION['statusticket'].'<br>';
										echo "<br>Jumlah Data II News = ".$jml_data.'<br>';
								***/		
									}elseif($_SESSION['statusticket']=='0'){
									$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id
											WHERE ITH_TICKET_HEADER.ticket_udeptid='1' AND ITH_TICKET_HEADER.ticketstatus_id='0'
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
											$supportby_query									
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC LIMIT 0, $jml_per_halaman");
								/***		echo "<br>SELECT ITH_TICKET_HEADERXx.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											WHERE ITH_TICKET_HEADER.ticket_udeptid='1' AND ITH_TICKET_HEADER.ticketstatus_id='0'
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query 
											$supportby_query									
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC LIMIT 0, $jml_per_halaman";
										echo "<br>Status Tiket = ".$_SESSION['statusticket'].'<br>';
										echo "<br>Jumlah Data II News = ".$jml_data.'<br>';
								***/		
									}elseif($_SESSION['statusticket']=='5'){
									$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id
											WHERE ITH_TICKET_HEADER.ticket_udeptid='1' AND ITH_TICKET_HEADER.ticketstatus_id='5'
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
											$supportby_query									
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC LIMIT 0, $jml_per_halaman");
								/***		echo "<br>SELECT ITH_TICKET_HEADERXx.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											WHERE ITH_TICKET_HEADER.ticket_udeptid='1' AND ITH_TICKET_HEADER.ticketstatus_id='5'
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query 
											$supportby_query									
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC LIMIT 0, $jml_per_halaman";
										echo "<br>Status Tiket = ".$_SESSION['statusticket'].'<br>';
										echo "<br>Jumlah Data II News = ".$jml_data.'<br>';
								***/		
									}		
								}elseif(($_SESSION['user_level'] == 101)){
									if($_SESSION['statusticket']=='6'){
									$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id
											WHERE ITH_TICKET_HEADER.ticket_udeptid IN('2','3') AND ITH_TICKET_HEADER.ticketstatus_id IN ('1','2','3','0','5') 
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
											$supportby_query									
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC LIMIT 0, $jml_per_halaman");
								/***	echo "<br>TEST SELECT ITH_TICKET_HEADERXx.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											WHERE ITH_TICKET_HEADER.ticket_udeptid IN('2','3') AND ITH_TICKET_HEADER.ticketstatus_id IN ('1','2','3','0','5') 
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query 
											$supportby_query									
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC LIMIT 0, $jml_per_halaman";
											echo "<br>Status Tiket = ".$_SESSION['statusticket'].'<br>';
											echo "<br>Jumlah Data II News = ".$jml_data.'<br>';
								***/			
									}elseif($_SESSION['statusticket']=='1'){
									$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id
											WHERE ITH_TICKET_HEADER.ticket_udeptid IN('2','3') AND ITH_TICKET_HEADER.ticketstatus_id='1'
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
											$supportby_query									
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC LIMIT 0, $jml_per_halaman");
								/***		echo "<br>SELECT ITH_TICKET_HEADERXx.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											WHERE ITH_TICKET_HEADER.ticket_udeptid IN('2','3') AND ITH_TICKET_HEADER.ticketstatus_id='1'
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query 
											$supportby_query									
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC LIMIT 0, $jml_per_halaman";
										echo "<br>Status Tiket = ".$_POST['statusticket_sc'].'<br>';
										echo "<br>Jumlah Data II News = ".$jml_data.'<br>';
								***/		
									}elseif($_SESSION['statusticket']=='2'){
									$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id
											WHERE ITH_TICKET_HEADER.ticket_udeptid IN('2','3') AND ITH_TICKET_HEADER.ticketstatus_id='2'
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
											$supportby_query									
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC LIMIT 0, $jml_per_halaman");
								/***		echo "<br>SELECT ITH_TICKET_HEADERXx.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											WHERE ITH_TICKET_HEADER.ticket_udeptid IN('2','3') AND ITH_TICKET_HEADER.ticketstatus_id='2'
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query 
											$supportby_query									
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC LIMIT 0, $jml_per_halaman";
										echo "<br>Status Tiket = ".$_SESSION['statusticket'].'<br>';
										echo "<br>Jumlah Data II News = ".$jml_data.'<br>';
								***/		
									}elseif($_SESSION['statusticket']=='3'){
									$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id
											WHERE ITH_TICKET_HEADER.ticket_udeptid IN('2','3') AND ITH_TICKET_HEADER.ticketstatus_id='3'
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
											$supportby_query									
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC LIMIT 0, $jml_per_halaman");
								/***		echo "<br>SELECT ITH_TICKET_HEADERXx.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											WHERE ITH_TICKET_HEADER.ticket_udeptid IN('2','3') AND ITH_TICKET_HEADER.ticketstatus_id='3'
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query 
											$supportby_query									
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC LIMIT 0, $jml_per_halaman";
										echo "<br>Status Tiket = ".$_SESSION['statusticket'].'<br>';
										echo "<br>Jumlah Data II News = ".$jml_data.'<br>';
								***/		
									}elseif($_SESSION['statusticket']=='0'){
									$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id
											WHERE ITH_TICKET_HEADER.ticket_udeptid IN('2','3') AND ITH_TICKET_HEADER.ticketstatus_id='0'
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
											$supportby_query									
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC LIMIT 0, $jml_per_halaman");
								/***		echo "<br>SELECT ITH_TICKET_HEADERXx.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											WHERE ITH_TICKET_HEADER.ticket_udeptid IN('2','3') AND ITH_TICKET_HEADER.ticketstatus_id='0'
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query 
											$supportby_query									
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC LIMIT 0, $jml_per_halaman";
										echo "<br>Status Tiket = ".$_SESSION['statusticket'].'<br>';
										echo "<br>Jumlah Data II News = ".$jml_data.'<br>';
								***/		
									}elseif($_SESSION['statusticket']=='5'){
									$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id
											WHERE ITH_TICKET_HEADER.ticket_udeptid IN('2','3') AND ITH_TICKET_HEADER.ticketstatus_id='5'
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
											$supportby_query									
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC LIMIT 0, $jml_per_halaman");
								/***		echo "<br>SELECT ITH_TICKET_HEADERXx.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											WHERE ITH_TICKET_HEADER.ticket_udeptid IN('2','3') AND ITH_TICKET_HEADER.ticketstatus_id='5'
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query 
											$supportby_query									
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC LIMIT 0, $jml_per_halaman";
										echo "<br>Status Tiket = ".$_SESSION['statusticket'].'<br>';
										echo "<br>Jumlah Data II News = ".$jml_data.'<br>';
								***/		
									}		
								}elseif(($_SESSION['user_level'] == 102)){
									if($_SESSION['statusticket']=='6'){
									$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id
											WHERE ITH_TICKET_HEADER.ticket_udeptid='4' AND ITH_TICKET_HEADER.ticketstatus_id IN ('1','2','3','0','5') 
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
											$supportby_query									
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC LIMIT 0, $jml_per_halaman");
								/***	echo "<br>TEST SELECT ITH_TICKET_HEADERXx.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											WHERE ITH_TICKET_HEADER.ticket_udeptid='4' AND ITH_TICKET_HEADER.ticketstatus_id IN ('1','2','3','0','5') 
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query 
											$supportby_query									
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC LIMIT 0, $jml_per_halaman";
											echo "<br>Status Tiket = ".$_SESSION['statusticket'].'<br>';
											echo "<br>Jumlah Data II News = ".$jml_data.'<br>';
								***/			
									}elseif($_SESSION['statusticket']=='1'){
									$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id
											WHERE ITH_TICKET_HEADER.ticket_udeptid='4' AND ITH_TICKET_HEADER.ticketstatus_id='1'
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
											$supportby_query									
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC LIMIT 0, $jml_per_halaman");
								/***		echo "<br>SELECT ITH_TICKET_HEADERXx.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											WHERE ITH_TICKET_HEADER.ticket_udeptid='4' AND ITH_TICKET_HEADER.ticketstatus_id='1'
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query 
											$supportby_query									
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC LIMIT 0, $jml_per_halaman";
										echo "<br>Status Tiket = ".$_POST['statusticket_sc'].'<br>';
										echo "<br>Jumlah Data II News = ".$jml_data.'<br>';
								***/		
									}elseif($_SESSION['statusticket']=='2'){
									$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id
											WHERE ITH_TICKET_HEADER.ticket_udeptid='4' AND ITH_TICKET_HEADER.ticketstatus_id='2'
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
											$supportby_query									
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC LIMIT 0, $jml_per_halaman");
								/***		echo "<br>SELECT ITH_TICKET_HEADERXx.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											WHERE ITH_TICKET_HEADER.ticket_udeptid='4' AND ITH_TICKET_HEADER.ticketstatus_id='2'
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query 
											$supportby_query									
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC LIMIT 0, $jml_per_halaman";
										echo "<br>Status Tiket = ".$_SESSION['statusticket'].'<br>';
										echo "<br>Jumlah Data II News = ".$jml_data.'<br>';
								***/		
									}elseif($_SESSION['statusticket']=='3'){
									$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id
											WHERE ITH_TICKET_HEADER.ticket_udeptid='4' AND ITH_TICKET_HEADER.ticketstatus_id='3'
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
											$supportby_query									
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC LIMIT 0, $jml_per_halaman");
								/***		echo "<br>SELECT ITH_TICKET_HEADERXx.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											WHERE ITH_TICKET_HEADER.ticket_udeptid='4' AND ITH_TICKET_HEADER.ticketstatus_id='3'
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query 
											$supportby_query									
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC LIMIT 0, $jml_per_halaman";
										echo "<br>Status Tiket = ".$_SESSION['statusticket'].'<br>';
										echo "<br>Jumlah Data II News = ".$jml_data.'<br>';
								***/		
									}elseif($_SESSION['statusticket']=='0'){
									$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id											
											WHERE ITH_TICKET_HEADER.ticket_udeptid='4' AND ITH_TICKET_HEADER.ticketstatus_id='0'
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
											$supportby_query									
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC LIMIT 0, $jml_per_halaman");
								/***		echo "<br>SELECT ITH_TICKET_HEADERXx.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											WHERE ITH_TICKET_HEADER.ticket_udeptid='4' AND ITH_TICKET_HEADER.ticketstatus_id='0'
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query 
											$supportby_query									
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC LIMIT 0, $jml_per_halaman";
										echo "<br>Status Tiket = ".$_SESSION['statusticket'].'<br>';
										echo "<br>Jumlah Data II News = ".$jml_data.'<br>';
								***/		
									}elseif($_SESSION['statusticket']=='5'){
									$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id
											WHERE ITH_TICKET_HEADER.ticket_udeptid='4' AND ITH_TICKET_HEADER.ticketstatus_id='5'
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
											$supportby_query									
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC LIMIT 0, $jml_per_halaman");
								/***		echo "<br>SELECT ITH_TICKET_HEADERXx.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											WHERE ITH_TICKET_HEADER.ticket_udeptid='4' AND ITH_TICKET_HEADER.ticketstatus_id='5'
											AND (ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%') 
											$romfromto_query $areafromto_query $storefromto_query $dtfromto_query 
											$supportby_query									
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC LIMIT 0, $jml_per_halaman";
										echo "<br>Status Tiket = ".$_SESSION['statusticket'].'<br>';
										echo "<br>Jumlah Data II News = ".$jml_data.'<br>';
								***/		
									}									}
								#	echo "<br>(1).ticketstatus_id =".$statusticketx;		
								/*	echo "<br>SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.usersubgroup2_name FROM ITH_TICKET_HEADER 
											LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
											LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
											LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik	
											LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
											WHERE ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]' AND ITH_TICKET_HEADER.ticketstatus_id = '1'								
											ORDER BY ITH_TICKET_HEADER.ticket_no ASC LIMIT 0, $jml_per_halaman"; */
								#}	
							#	echo "<br>Jumlah Per Halamannya = ".$jml_per_halaman;
							#	echo "<br>Jumlah Datanya = ".$jml_data;
							}						

					// query jika nomor halaman sudah ditentukan								
					/*if(isset($_POST['cari'])) {
						$kunci = $_POST['cari'];
						echo "<strong>Hasil pencarian untuk kata kunci $kunci</strong>";
						$query = mysql_query("SELECT ITH_TICKET.*, ITH_USER.user_realname FROM ITH_TICKET_HEADER 
						LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
						 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET.ticketsubcategory2_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
						 LEFT JOIN ITH_USER ON ITH_TICKET.ticket_createby = ITH_USER.user_nik									 
						WHERE ITH_TICKET.ticket_id LIKE '%$kunci%' OR ITH_TICKET.ticket_subject LIKE '$kunci%' OR ITH_USER.user_realname LIKE '%$kunci%' AND 
						ITH_TICKET.ticket_createby='$_SESSION[user_realname]'");*/
					}					
					#} elseif((isset($_POST['cari']))OR(isset($_POST['halaman']))) {
					/**
					if(isset($_POST['cari']) or isset($_POST['romfrom_sc']) or isset($_POST['romto_sc']) or isset($_POST['areafrom_sc']) 
					or isset($_POST['areato_sc']) 
					or isset($_POST['storefrom_sc']) or isset($_POST['storeto_sc']) or isset($_POST['dtfrom_sc']) or isset($_POST['dtto_sc']) 
					or isset($_POST['statusticket_sc']) AND isset($_POST['halaman'])) 
					{
									$kunci = $_POST['cari'];
									$halaman = $_POST['halaman'];

									$i = ($halaman - 1) * $jml_per_halaman  + 1;
									
									//filter ROM From & ROM To
									if(($_POST['romfrom_sc'] !='' )||($_POST['romto_sc'] !='' )){
										$romfrom = $_POST['romfrom_sc'];
										$romto = $_POST['romto_sc'];
										$romfromto_query = " AND (ITH_USERGROUP.usergroup_id BETWEEN '$_POST[romfrom_sc]' AND '$_POST[romto_sc]')";							
									}
									
									//filter Area From & Area To
									if(($_POST['areafrom_sc'] !='' )||($_POST['areato_sc'] !='' )){
										$areafrom = $_POST['areafrom_sc'];
										$areato = $_POST['areato_sc'];
										$areafromto_query = " AND (ITH_USERGROUP.usersubgroup_id BETWEEN '$_POST[areafrom_sc]' AND '$_POST[areato_sc]')";
									}
									
									//filter Store From & Store To
									if(($_POST['storefrom_sc'] !='' )||($_POST['storeto_sc'] !='' )){
										$storefrom = $_POST['storefrom_sc'];
										$storeto = $_POST['storeto_sc'];
										$storefromto_query = " AND (ITH_USERGROUP.userstore_id BETWEEN '$_POST[storefrom_sc]' AND '$_POST[storeto_sc]')";
									}
															
									//filter Date From
									if(($_POST['dtfrom_sc'] !='' )||($_POST['dtto_sc'] !='' )){
										$dtfrom = $_POST['dtfrom_sc'];
										$dtto = $_POST['dtto_sc'];
										#$dtfromto_query = " AND (ITH_TICKET_HEADER.ticket_createdate BETWEEN '$_POST[dtfrom_sc]' AND '$_POST[dtto_sc]')";
										$dtfromto_query = " AND (STR_TO_DATE(ITH_TICKET_HEADER.ticket_createdate,'%d/%m/%Y') BETWEEN STR_TO_DATE('$_POST[dtfrom_sc]','%d/%m/%Y') AND STR_TO_DATE('$_POST[dtto_sc]','%d/%m/%Y'))";
										
									}
															
									//filter Status Ticket
									if($_POST['statusticket_sc'] !='' ){
										$statusticket = $_POST['statusticket_sc'];
										$tktsts_query = " AND ITH_TICKET_HEADER.ticketstatus_id = '$statusticket'";
										$tkts = "dan Ticket Status = $statusticket";
									}	
						**/			
						$halaman = $_POST['halaman']; $jml_per_halaman = 5;	
						$i = ($halaman - 1) * $jml_per_halaman  + 1;
						

					if(($_SESSION['user_level'] == 100)){	
						$halaman = $_POST['halaman']; $jml_per_halaman = 5;	
						$i = ($halaman - 1) * $jml_per_halaman  + 1;
						
						if($_SESSION['statusticket']=='6'){
							$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, 
							ITH_DEPARTEMEN.nama_departemen FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik		
							 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen		
							 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id							 
							WHERE ITH_TICKET_HEADER.ticket_udeptid='1' AND  ITH_TICKET_HEADER.ticketstatus_id IN ('1','2','3','0','5') 											
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman");
						/***	
							echo "<br>TEST II SELECT ITH_TICKET_HEADERz.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, 
							ITH_DEPARTEMEN.nama_departemen FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik		
							 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen							 
							WHERE ITH_TICKET_HEADER.ticket_udeptid='1'  ITH_TICKET_HEADER.ticketstatus_id IN ('1','2','3','0','5') 											
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman";	

							echo '<br>Tiket Status = '.$_SESSION['statusticket'].'<br>';
							echo "<br>Jumlah Data II News_2 = ".$jml_data.'<br>';
						***/	
						}elseif($_SESSION['statusticket']=='1'){
							$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, 
							ITH_DEPARTEMEN.nama_departemen, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik		
							 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen		
							 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id							 
							WHERE ITH_TICKET_HEADER.ticket_udeptid='1' AND  ITH_TICKET_HEADER.ticketstatus_id = '1'										
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman");
						/***	
							echo "<br>SELECT ITH_TICKET_HEADERz.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, 
							ITH_DEPARTEMEN.nama_departemen FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik		
							 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen							 
							WHERE ITH_TICKET_HEADER.ticket_udeptid='1' AND  ITH_TICKET_HEADER.ticketstatus_id = '1' 											
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman";					

							echo '<br>Tiket Status = '.$_SESSION['statusticket'].'<br>';
							echo "<br>Jumlah Data II News_2 = ".$jml_data.'<br>';
						***/	
						}elseif($_SESSION['statusticket']=='2'){
							$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, 
							ITH_DEPARTEMEN.nama_departemen, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik		
							 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen	
							 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id							 
							WHERE ITH_TICKET_HEADER.ticket_udeptid='1' AND  ITH_TICKET_HEADER.ticketstatus_id = '2'										
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman");
						/***	
							echo "<br>SELECT ITH_TICKET_HEADERz.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, 
							ITH_DEPARTEMEN.nama_departemen FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik		
							 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen							 
							WHERE ITH_TICKET_HEADER.ticket_udeptid='1' AND  ITH_TICKET_HEADER.ticketstatus_id = '2' 											
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman";					

							echo '<br>Tiket Status = '.$_SESSION['statusticket'].'<br>';
							echo "<br>Jumlah Data II News_2 = ".$jml_data.'<br>';
						***/	
						}elseif($_SESSION['statusticket']=='3'){
							$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, 
							ITH_DEPARTEMEN.nama_departemen, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik		
							 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen	
							 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id							 
							WHERE ITH_TICKET_HEADER.ticket_udeptid='1' AND  ITH_TICKET_HEADER.ticketstatus_id = '3'										
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman");
						/***	
							echo "<br>SELECT ITH_TICKET_HEADERz.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, 
							ITH_DEPARTEMEN.nama_departemen FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik		
							 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen							 
							WHERE ITH_TICKET_HEADER.ticket_udeptid='1' AND  ITH_TICKET_HEADER.ticketstatus_id = '3' 											
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman";					

							echo '<br>Tiket Status = '.$_SESSION['statusticket'].'<br>';
							echo "<br>Jumlah Data II News_2 = ".$jml_data.'<br>';
						***/	
						}elseif($_SESSION['statusticket']=='0'){
							$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, 
							ITH_DEPARTEMEN.nama_departemen, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik		
							 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen		
							 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id							 
							WHERE ITH_TICKET_HEADER.ticket_udeptid='1' AND  ITH_TICKET_HEADER.ticketstatus_id = '0'										
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman");
						/***	
							echo "<br>SELECT ITH_TICKET_HEADERz.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, 
							ITH_DEPARTEMEN.nama_departemen FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik		
							 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen							 
							WHERE ITH_TICKET_HEADER.ticket_udeptid='1' AND  ITH_TICKET_HEADER.ticketstatus_id = '0' 											
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman";					

							echo '<br>Tiket Status = '.$_SESSION['statusticket'].'<br>';
							echo "<br>Jumlah Data II News_2 = ".$jml_data.'<br>';
						***/	
						}elseif($_SESSION['statusticket']=='5'){
							$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, 
							ITH_DEPARTEMEN.nama_departemen, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik		
							 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen	
							 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id							 
							WHERE ITH_TICKET_HEADER.ticket_udeptid='1' AND  ITH_TICKET_HEADER.ticketstatus_id = '5'										
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman");
						/***	
							echo "<br>SELECT ITH_TICKET_HEADERz.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, 
							ITH_DEPARTEMEN.nama_departemen FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik		
							 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen							 
							WHERE ITH_TICKET_HEADER.ticket_udeptid='1' AND  ITH_TICKET_HEADER.ticketstatus_id = '5' 											
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman";					

							echo '<br>Tiket Status = '.$_SESSION['statusticket'].'<br>';
							echo "<br>Jumlah Data II News_2 = ".$jml_data.'<br>';
						***/	
						}
					}elseif(($_SESSION['user_level'] == 101)){	
						$halaman = $_POST['halaman']; $jml_per_halaman = 5;	
						$i = ($halaman - 1) * $jml_per_halaman  + 1;					
					if($_SESSION['statusticket']=='6'){
							$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, 
							ITH_DEPARTEMEN.nama_departemen, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik		
							 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen	
							 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id							 
							WHERE ITH_TICKET_HEADER.ticket_udeptid IN('2','3') AND  ITH_TICKET_HEADER.ticketstatus_id IN ('1','2','3','0','5') 											
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman");
						/***	
							echo "<br>TEST II SELECT ITH_TICKET_HEADERz.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, 
							ITH_DEPARTEMEN.nama_departemen FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik		
							 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen							 
							WHERE ITH_TICKET_HEADER.ticket_udeptid IN('2','3') AND ITH_TICKET_HEADER.ticketstatus_id IN ('1','2','3','0','5') 											
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman";	

							echo '<br>Tiket Status = '.$_SESSION['statusticket'].'<br>';
							echo "<br>Jumlah Data II News_2 = ".$jml_data.'<br>';
						***/	
						}elseif($_SESSION['statusticket']=='1'){
							$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, 
							ITH_DEPARTEMEN.nama_departemen, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik		
							 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen	
							 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id							 
							WHERE ITH_TICKET_HEADER.ticket_udeptid IN('2','3') AND ITH_TICKET_HEADER.ticketstatus_id = '1'										
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman");
						/***	
							echo "<br>SELECT ITH_TICKET_HEADERz.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, 
							ITH_DEPARTEMEN.nama_departemen FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik		
							 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen							 
							WHERE ITH_TICKET_HEADER.ticket_udeptid IN('2','3') AND ITH_TICKET_HEADER.ticketstatus_id = '1' 											
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman";					

							echo '<br>Tiket Status = '.$_SESSION['statusticket'].'<br>';
							echo "<br>Jumlah Data II News_2 = ".$jml_data.'<br>';
						***/	
						}elseif($_SESSION['statusticket']=='2'){
							$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, 
							ITH_DEPARTEMEN.nama_departemen, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik		
							 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen		
							 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id							 
							WHERE ITH_TICKET_HEADER.ticket_udeptid IN('2','3') AND  ITH_TICKET_HEADER.ticketstatus_id = '2'										
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman");
						/***	
							echo "<br>SELECT ITH_TICKET_HEADERz.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, 
							ITH_DEPARTEMEN.nama_departemen FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik		
							 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen							 
							WHERE ITH_TICKET_HEADER.ticket_udeptid IN('2','3') AND  ITH_TICKET_HEADER.ticketstatus_id = '2' 											
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman";					

							echo '<br>Tiket Status = '.$_SESSION['statusticket'].'<br>';
							echo "<br>Jumlah Data II News_2 = ".$jml_data.'<br>';
						***/	
						}elseif($_SESSION['statusticket']=='3'){
							$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, 
							ITH_DEPARTEMEN.nama_departemen, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik		
							 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen	
							 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id							 
							WHERE ITH_TICKET_HEADER.ticket_udeptid IN('2','3') AND  ITH_TICKET_HEADER.ticketstatus_id = '3'										
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman");
						/***	
							echo "<br>SELECT ITH_TICKET_HEADERz.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, 
							ITH_DEPARTEMEN.nama_departemen FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik		
							 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen							 
							WHERE ITH_TICKET_HEADER.ticket_udeptid IN('2','3') AND  ITH_TICKET_HEADER.ticketstatus_id = '3' 											
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman";					

							echo '<br>Tiket Status = '.$_SESSION['statusticket'].'<br>';
							echo "<br>Jumlah Data II News_2 = ".$jml_data.'<br>';
						***/	
						}elseif($_SESSION['statusticket']=='0'){
							$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, 
							ITH_DEPARTEMEN.nama_departemen, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik		
							 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen		
							 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id							 
							WHERE ITH_TICKET_HEADER.ticket_udeptid IN('2','3') AND  ITH_TICKET_HEADER.ticketstatus_id = '0'										
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman");
						/***	
							echo "<br>SELECT ITH_TICKET_HEADERz.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, 
							ITH_DEPARTEMEN.nama_departemen FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik		
							 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen							 
							WHERE ITH_TICKET_HEADER.ticket_udeptid IN('2','3') AND  ITH_TICKET_HEADER.ticketstatus_id = '0' 											
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman";					

							echo '<br>Tiket Status = '.$_SESSION['statusticket'].'<br>';
							echo "<br>Jumlah Data II News_2 = ".$jml_data.'<br>';
						***/	
						}elseif($_SESSION['statusticket']=='5'){
							$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, 
							ITH_DEPARTEMEN.nama_departemen, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik		
							 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen		
							 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id							 
							WHERE ITH_TICKET_HEADER.ticket_udeptid IN('2','3') AND  ITH_TICKET_HEADER.ticketstatus_id = '5'										
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman");
						/***	
							echo "<br>SELECT ITH_TICKET_HEADERz.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, 
							ITH_DEPARTEMEN.nama_departemen FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik		
							 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen							 
							WHERE ITH_TICKET_HEADER.ticket_udeptid IN('2','3') AND  ITH_TICKET_HEADER.ticketstatus_id = '5' 											
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman";					

							echo '<br>Tiket Status = '.$_SESSION['statusticket'].'<br>';
							echo "<br>Jumlah Data II News_2 = ".$jml_data.'<br>';
						***/	
						}	
						
				}elseif(($_SESSION['user_level'] == 102)){	
						$halaman = $_POST['halaman']; $jml_per_halaman = 5;	
						$i = ($halaman - 1) * $jml_per_halaman  + 1;					
						if($_SESSION['statusticket']=='6'){
							$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, 
							ITH_DEPARTEMEN.nama_departemen, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik		
							 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen							 
							 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id		
							WHERE ITH_TICKET_HEADER.ticket_udeptid='4' AND  ITH_TICKET_HEADER.ticketstatus_id IN ('1','2','3','0','5') 											
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman");
						/***	
							echo "<br>TEST II SELECT ITH_TICKET_HEADERz.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, 
							ITH_DEPARTEMEN.nama_departemen FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik		
							 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen							 
							WHERE ITH_TICKET_HEADER.ticket_udeptid='4'  ITH_TICKET_HEADER.ticketstatus_id IN ('1','2','3','0','5') 											
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman";	

							echo '<br>Tiket Status = '.$_SESSION['statusticket'].'<br>';
							echo "<br>Jumlah Data II News_2 = ".$jml_data.'<br>';
						***/	
						}elseif($_SESSION['statusticket']=='1'){
							$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, 
							ITH_DEPARTEMEN.nama_departemen, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik		
							 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen							 
							 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id		
							WHERE ITH_TICKET_HEADER.ticket_udeptid='4' AND  ITH_TICKET_HEADER.ticketstatus_id = '1'										
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman");
						/***	
							echo "<br>SELECT ITH_TICKET_HEADERz.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, 
							ITH_DEPARTEMEN.nama_departemen FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik		
							 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen							 
							WHERE ITH_TICKET_HEADER.ticket_udeptid='4' AND  ITH_TICKET_HEADER.ticketstatus_id = '1' 											
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman";					

							echo '<br>Tiket Status = '.$_SESSION['statusticket'].'<br>';
							echo "<br>Jumlah Data II News_2 = ".$jml_data.'<br>';
						***/	
						}elseif($_SESSION['statusticket']=='2'){
							$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, 
							ITH_DEPARTEMEN.nama_departemen, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik		
							 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen							 
							 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id		
							WHERE ITH_TICKET_HEADER.ticket_udeptid='4' AND  ITH_TICKET_HEADER.ticketstatus_id = '2'										
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman");
						/***	
							echo "<br>SELECT ITH_TICKET_HEADERz.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, 
							ITH_DEPARTEMEN.nama_departemen FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik		
							 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen							 
							WHERE ITH_TICKET_HEADER.ticket_udeptid='4' AND  ITH_TICKET_HEADER.ticketstatus_id = '2' 											
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman";					

							echo '<br>Tiket Status = '.$_SESSION['statusticket'].'<br>';
							echo "<br>Jumlah Data II News_2 = ".$jml_data.'<br>';
						***/	
						}elseif($_SESSION['statusticket']=='3'){
							$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, 
							ITH_DEPARTEMEN.nama_departemen, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik		
							 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen							 
							 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id
							 WHERE ITH_TICKET_HEADER.ticket_udeptid='4' AND  ITH_TICKET_HEADER.ticketstatus_id = '3'										
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman");
						/***	
							echo "<br>SELECT ITH_TICKET_HEADERz.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, 
							ITH_DEPARTEMEN.nama_departemen FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik		
							 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen							 
							WHERE ITH_TICKET_HEADER.ticket_udeptid='4' AND  ITH_TICKET_HEADER.ticketstatus_id = '3' 											
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman";					

							echo '<br>Tiket Status = '.$_SESSION['statusticket'].'<br>';
							echo "<br>Jumlah Data II News_2 = ".$jml_data.'<br>';
						***/	
						}elseif($_SESSION['statusticket']=='0'){
							$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, 
							ITH_DEPARTEMEN.nama_departemen, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik		
							 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen			
							 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id									
							WHERE ITH_TICKET_HEADER.ticket_udeptid='4' AND  ITH_TICKET_HEADER.ticketstatus_id = '0'										
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman");
						/***	
							echo "<br>SELECT ITH_TICKET_HEADERz.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, 
							ITH_DEPARTEMEN.nama_departemen FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik		
							 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen							 
							WHERE ITH_TICKET_HEADER.ticket_udeptid='4' AND  ITH_TICKET_HEADER.ticketstatus_id = '0' 											
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman";					

							echo '<br>Tiket Status = '.$_SESSION['statusticket'].'<br>';
							echo "<br>Jumlah Data II News_2 = ".$jml_data.'<br>';
						***/	
						}elseif($_SESSION['statusticket']=='5'){
							$queryx = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, 
							ITH_DEPARTEMEN.nama_departemen, ITH_TICKETREFERENCESTATUS.ticketreferencestatus_name FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik		
							 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen	
							 LEFT JOIN ITH_TICKETREFERENCESTATUS ON ITH_TICKET_HEADER.ticketreferencestatus_id = ITH_TICKETREFERENCESTATUS.ticketreferencestatus_id							 
							WHERE ITH_TICKET_HEADER.ticket_udeptid='4' AND  ITH_TICKET_HEADER.ticketstatus_id = '5'										
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman");
						/***	
							echo "<br>SELECT ITH_TICKET_HEADERz.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, 
							ITH_DEPARTEMEN.nama_departemen FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
							 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
							 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik		
							 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen							 
							WHERE ITH_TICKET_HEADER.ticket_udeptid='4' AND  ITH_TICKET_HEADER.ticketstatus_id = '5' 											
							$romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
							$supportby_query
							ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman";					

							echo '<br>Tiket Status = '.$_SESSION['statusticket'].'<br>';
							echo "<br>Jumlah Data II News_2 = ".$jml_data.'<br>';
						***/	
						}
				
					}	

						
					
					#}
					##}
					?>
					<? 		while($dtmyticketx = mysql_fetch_object($queryx)) 
					{
						#$done = 'http://'.$_SERVER['SERVER_NAME'].':85/datatable/requestlist/images/done.png';	
						#$nofile = 'http://'.$_SERVER['SERVER_NAME'].':85/datatable/requestlist/images/nouploaded.png';	
				?>

				<tr>
					<!--<td><!?=$i;?></td>	-->	
					<td><?=$dtmyticketx->ticket_createdate;?></td>		
					<td><?=$dtmyticketx->ticket_createtime;?></td>		
					<td><?=$dtmyticketx->ticket_id;?></td>		
					<td><?=ucwords(strtolower($dtmyticketx->user_realname));?></td>		
					<td><?=$dtmyticketx->ticket_subject;?></td>
					<!--<td><!?='-'?></td>		
							<td><!?='-'?></td>-->		
						<?			
							if($dtmyticketx->ticketstatus_id=='0'){
						?>
						<td>
							<a href="<?='http://'.$_SERVER['SERVER_NAME'].'/index.php?view=updateuserrespond&pid='.$dtmyticketx->ticket_id.'&uid='.$_SESSION['user_nik']?>" title="Ticket ID: <?=$dtmyticketx->ticket_id?>" target="_parent">
								<img src="img/myeditx.png" alt="" height="30" width="50"></img>
							</a>
						</td>	
						<? }elseif($dtmyticketx->ticketreferencestatus_id=='1'){
						?>
						<td>
							<a href="<?='http://'.$_SERVER['SERVER_NAME'].'/index.php?view=updateuserrespond&pid='.$dtmyticketx->ticket_id.'&uid='.$_SESSION['user_nik']?>" title="Ticket ID: <?=$dtmyticketx->ticket_id?>" target="_parent">
								<img src="img/reference.png" alt="" height="30" width="50"></img>
							</a>
						</td>	
						<? } ?>
					<td><center>					
					<?if($dtmyticketx->ticketstatus_id=='1'){ //Open Status ?> 
					<?='<font color="brown">'.ucfirst(strtolower($dtmyticketx->ticketstatus_name)).'</font>';?>
					<?}elseif($dtmyticketx->ticketstatus_id=='0'){ //Solved Status ?>
					<?='<font color="blue">'.ucfirst(strtolower($dtmyticketx->ticketstatus_name)).'</font>';?>
					<?}elseif($dtmyticketx->ticketstatus_id=='2'){ //On Process Status?>
					<?='<font color="Green">'.ucfirst(strtolower($dtmyticketx->ticketstatus_name)).'</font>';?>
					<?}elseif($dtmyticketx->ticketstatus_id=='3'){ //Cancel Status?>
					<?='<font color="#000">'.ucfirst(strtolower($dtmyticketx->ticketstatus_name)).'</font>';?>
					<?}elseif($dtmyticketx->ticketstatus_id=='5'){ //Close Status?>
					<?='<font color="#000">'.ucfirst(strtolower($dtmyticketx->ticketstatus_name)).'</font>';?>
					<?}?></center>	
					</td>	
					 <? if($dtmyticketx->ticket_viaby!='By Web'){?>
						<td><?=$dtmyticketx->ticket_viaby;?></td>
					 <? }elseif(($dtmyticketx->ticket_viaby=='By Web')||($dtmyticketx->ticket_viaby=='')){?>
						<td><?='By Web';?></td>
					 <? } ?>	
					 <td>	<center>		
						<?if($dtmyticketx->ticket_udeptid=='1'){ // Support By IT ?> 
						<?='<font color="brown">'.ucfirst(strtoupper($dtmyticketx->nama_departemen)).'</font>';?>
						<?}elseif($dtmyticketx->ticket_udeptid=='2'){ //Support By FSD EAST ?>
						<?='<font color="brown">'.ucfirst(strtoupper($dtmyticketx->nama_departemen)).'</font>';?>
						<?}elseif($dtmyticketx->ticket_udeptid=='3'){ //Support By FSD WEST?>
						<?='<font color="brown">'.ucfirst(strtoupper($dtmyticketx->nama_departemen)).'</font>';?>
						<?}elseif($dtmyticketx->ticket_udeptid=='4'){ //Support By SDD?>
						<?='<font color="brown">'.ucfirst(strtoupper($dtmyticketx->nama_departemen)).'</font>';?>
						<?}elseif($dtmyticketx->ticket_udeptid=='7'){ //Support By FSD EAST AND FSD WEST?>
						<?='<font color="brown">'.ucfirst(strtoupper($dtmyticketx->nama_departemen)).'</font>';?>
						<?}?></center>		
					</td>		
					<td><a href="<?='http://'.$_SERVER['SERVER_NAME'].'/index.php?view=comment&pid='.$dtmyticketx->ticket_id.'&uid='.$_SESSION['user_nik']?>" title="Ticket ID: <?=$dtmyticketx->ticket_id?>" target="_parent">
					<img src="img/Readmore1.png" alt="" height="30" width="50"></img>
					</a></td>	
					<? if($_SESSION['user_level']!= 1){?>					
						<? 	if($dtmyticketx->ticket_viaby!='Via Web'){ ?>		
								<? if(($dtmyticketx->ticketstatus_id == '1')||($dtmyticketx->ticketstatus_id == '2')){ ?>
								<td><a href="<?='http://'.$_SERVER['SERVER_NAME'].'/index.php?view=update&pid='.$dtmyticketx->ticket_id.'&uid='.$_SESSION['user_nik']?>" title="Ticket ID: <?=$dtmyticketx->ticket_id?>" target="_parent">
								<img src="img/editx.png" alt="" height="30" width="50"></img></a></td>		
								<?}elseif(($dtmyticketx->ticketstatus_id == '0')||($dtmyticketx->ticketstatus_id == '3')){?>
								<td></td>		
								<? } ?>
						<? }elseif($dtmyticketx->ticket_viaby=='Via Web'){ ?>
							<? if(($dtmyticketx->ticketstatus_id == '2')){ ?>
							<td><a href="<?='http://'.$_SERVER['SERVER_NAME'].'/index.php?view=updateforuser&pid='.$dtmyticketx->ticket_id.'&uid='.$_SESSION['user_nik']?>" title="Ticket ID: <?=$dtmyticketx->ticket_id?>" target="_parent">
							<img src="img/editx.png" alt="" height="30" width="50"></img></a></td>								
							<?}elseif(($dtmyticketx->ticketstatus_id == '0')||($dtmyticketx->ticketstatus_id == '3')){?>
								<td></td>		
								<? } ?>							
						<? } ?>
					<? } ?>
						
						<?php  $i++;	
					}
				?>
				</tr>
			</tbody>
			</table>
	<? } ?>
<? } ?>

<!--?php if(isset($_POST['cari']) or (isset($_POST['statusticket_sc']))) { ?-->
<?php if(isset($_POST['cari'])) { ?>

<div class="pagination pagination-right">

	<?php

		$halaman_sekarang = $_POST['halaman']; 
		$nextpage = $halaman_sekarang + 1;
		$lastpage = $halaman_sekarang - 1;
		$statusticket_sc = $_POST['statusticket_sc'];
		
		$mynextpage = $nextpage.'&statusticket_sc='.$statusticket_sc;
		$mylastpage = $lastpage.'&statusticket_sc='.$statusticket_sc;
		
		$next = $halaman_sekarang + 1;		
		$prev = $halaman_sekarang - 1;
		##$next = $mypage;				
		##$prev = $mylastpage;
		$acuan= ceil($halaman_sekarang/10);
		$mod = ceil($jml_halaman/10);
		
		/*
		$next = $mypage;				
		$prev = $mylastpage;
		$acuanx = ceil($halaman_sekarang/10);
		$acuan= $acuanx.'&statusticket_sc='.$statusticket_sc;
		$modx = ceil($jml_halaman/10);
		$mod = $modx.'&statusticket_sc='.$statusticket_sc;
		*/
	?>

  <ul>

  		<li class="halaman" id="1"><a href="#">first</a></li>

	<?php

		if($halaman_sekarang != $jml_halaman ){	

  			echo '<li class="halaman" id="'.$next.'"><a href="#">next &raquo;</a></li>';

		}

		if($jml_halaman > 10){
	
			if($halaman_sekarang > 10){

	  			echo '<li class="halaman" id="1"><a href="#" title="id=1">1</a></li>';

				echo '<li class="halaman" id="2"><a href="#">2...</a></li>';

			}

			

			if($acuan <= 1){ $awalan = 1; }

			else{ $awalan = $acuan*10-10; }

				

			$ahiran = $awalan + 11;

			if($ahiran > $jml_halaman)

				$ahiran = $jml_halaman ;

			

				for($i = $awalan; $i <= $ahiran; $i++) {

					echo '<li class="halaman" id="'.$i.'"><a href="#">'.$i.'</a></li>';

				} 

				

			if($acuan  != ceil($jml_halaman/10) ){

				echo '<li class="halaman" id="'.($jml_halaman-1).'"><a href="#">...'.($jml_halaman-1).'</a></li>';

				echo '<li class="halaman" id="'.$jml_halaman.'"><a href="#">'.$jml_halaman.'</a></li>';



			}

		}

		else{

			for($i = 1; $i <= $jml_halaman; $i++) {

				echo '<li class="halaman" id="'.$i.'"><a href="#">'.$i.'</a></li>';

			} 

		}

		if($halaman_sekarang > 1 ){

			echo '<li class="halaman" id="'.$prev.'"><a href="#">&laquo; previous</a></li>';

		}

	?>
		<li class="halaman" id="<?php echo $jml_halaman ?>"><a href="#">last</a></li>
  </ul>

</div>
<!--?php }elseif(!isset($_POST['cari']) or (!isset($_POST['statusticket_sc']))) { ?-->
<?php }elseif(!isset($_POST['cari'])) { ?>

<div class="pagination pagination-right">

	<?php

		$halaman_sekarang = $_POST['halaman']; 

		$next = $halaman_sekarang + 1;

		$prev = $halaman_sekarang - 1;

		$acuan= ceil($halaman_sekarang/10);

		$mod = ceil($jml_halaman/10);

	?>

  <ul>

  		<li class="halaman" id="1"><a href="#">firstXX</a></li>

	<?php

		if($halaman_sekarang != $jml_halaman ){	

  			echo '<li class="halaman" id="'.$next.'"><a href="#">next &raquo;</a></li>';

		}

		if($jml_halaman > 10){

			if($halaman_sekarang > 10){

	  			echo '<li class="halaman" id="1"><a href="#">1</a></li>';

				echo '<li class="halaman" id="2"><a href="#">2...</a></li>';

			}

			

			if($acuan <= 1){ $awalan = 1;}

			else{ $awalan = $acuan*10-10; }

				

			$ahiran = $awalan + 11;

			if($ahiran > $jml_halaman)

				$ahiran = $jml_halaman ;

			

				for($i = $awalan; $i <= $ahiran; $i++) {

					echo '<li class="halaman" id="'.$i.'"><a href="#">'.$i.'</a></li>';

				} 

				

			if($acuan  != ceil($jml_halaman/10) ){

				echo '<li class="halaman" id="'.($jml_halaman-1).'&statusticket_sc='.$_POST['statusticket_sc'].'"><a href="#">...'.($jml_halaman-1).'</a></li>';

				echo '<li class="halaman" id="'.$jml_halaman.'&statusticket_sc='.$_POST['statusticket_sc'].'"><a href="#">'.$jml_halaman.'</a></li>';



			}

		}

		else{

			for($i = 1; $i <= $jml_halaman; $i++) {

				echo '<li class="halaman" id="'.$i.'"><a href="#">'.$i.'</a></li>';

			} 

		}

		if($halaman_sekarang > 1 ){

			echo '<li class="halaman" id="'.$prev.'"><a href="#">&laquo; previous</a></li>';

		}

	?>
		<li class="halaman" id="<?php echo $jml_halaman ?>"><a href="#">last</a></li>
  </ul>

</div>
<?php } ?>

<?php 
koneksi_tutup(); 
?>