<?php
require 'koneksi.php';
koneksi_buka();
@session_start();

if(isset($_POST['hapus'])) {
//$id_before = $_POST['hapus']-1;
	mysql_query("DELETE FROM request_inventory WHERE id_reqinventory=".$_POST['hapus']);
	//mysql_query("ALTER TABLE request_inventory AUTO_INCREMENT = ".$id_before);
}else{
	$id_reqinventory	= $_POST['id'];
	//$title = $_POST['title'];
	
	$user_name = $_POST['user_name'];
	$user_nik = $_POST['user_nik'];	
	$user_telpon = $_POST['user_telpon'];	
	$items_id = $_POST['items_id'];
	$date_request = date('j F Y');
	$start = $_POST['start'];
	$end = $_POST['end'];
	$kebutuhan_descr = $_POST['kebutuhan_descr'];
	$approval_name = $_POST['approval_name'];
	
	$created_date = date('j F Y');
	$updated_date = date('j F Y');
	$created_by = $_SESSION['nik'];
	$updated_by = $_SESSION['nik'];
	
	
	$qcekid = mysql_query("SELECT id_reqinventory FROM request_inventory ORDER BY id_reqinventory DESC LIMIT 1");
	$rcekid = mysql_fetch_object($qcekid);
	$id_reqinventoryx = $rcekid->id_reqinventory + 1;
	
	
	$qcview = "SELECT items_id,start,end 
			FROM vw_request_inventory
			WHERE (items_id = '".$items_id."')
			AND 
			(
			  (
				(DATE_FORMAT('".$start."', '%d %M %Y %H:%i') > start AND DATE_FORMAT('".$start."', '%d %M %Y %H:%i') < end) OR 
				(DATE_FORMAT('".$end."', '%d %M %Y %H:%i') > start AND DATE_FORMAT('".$end."', '%d %M %Y %H:%i') < end)
			  )
				OR (DATE_FORMAT('".$start."', '%d %M %Y %H:%i') <= start AND DATE_FORMAT('".$end."', '%d %M %Y %H:%i') >= end)
			)";
	$rcview=mysql_query($qcview);		
	if(mysql_num_rows($rcview)>0)
	{
		echo "Gagal";	
		
	}else{		
			
			//if(($title!="")||($start!="")||($end!="")) {
			if($id_reqinventory == 0) {		
				mysql_query("INSERT INTO request_inventory (id_reqinventory,title,user_name,user_nik,user_telpon,
				items_id,date_request,start,end,kebutuhan_descr,approval_name,
				created_date,created_by,updated_date,updated_by) VALUES 
				('','$title','$user_name','$user_nik','$user_telpon','$items_id',
				'$date_request','$start','$end','$kebutuhan_descr','Belum Dikonfirmasi',
				'$created_date','$created_by','','-')");
				
				mysql_query("UPDATE list_inventory SET start = '$start', end = '$end', request_date='$date_request', request_by = '$user_name',
				items_status_id = '3',
				updated_date = '$updated_date',updated_by = '$updated_by' WHERE starttime_available = RIGHT('$start', 5)");
				
				mkdir('../dc9144e0ece8bcd25dd3a4dcb7b305a3/data_'.$id_reqinventoryx, 0777);
				//mkdir('../../dc9144e0ece8bcd25dd3a4dcb7b305a3/video_videodetail/footages/data_'.$id_videodetailx, 0777);
				
			} else {
				mysql_query("UPDATE request_inventory SET items_id = '$items_id', title = '$title', user_name = '$user_name', 
				user_telpon = '$user_telpon',date_request = '$date_request',start = '$start',end = '$end', 
				updated_date = '$updated_date',updated_by = '$updated_by' WHERE id_reqinventory = $id_reqinventory");				
				
				mysql_query("UPDATE list_inventory SET start = '$start', end = '$end', request_date='$date_request', request_by = '$user_name',
				items_status_id = '2',
				updated_date = '$updated_date',updated_by = '$updated_by' WHERE starttime_available = RIGHT('$start', 5)");			
				}
		   // }	
	}	
}
?>
<?php
$con = mysql_connect("172.16.8.101","transcp_iml","g4r4m4s1n");
mysql_select_db("fullcalendar",$con);
	if(!$con){
		echo "Something Problem";

	}
	$qview = mysql_query("SELECT * FROM request_inventory ORDER BY id_reqinventory ASC") or die(mysql_error());
	//$rview = mysql_fetch_array($qview);
	
	//$encode = array("")
	// generate to json file from php //
	
	if($qview)
	{
		$rviews = array();
			if(mysql_num_rows($qview))
			{
				while($rview = mysql_fetch_assoc($qview)) 
				{
					$rviews[] = $rview;
				}					
			}
			echo json_encode(array('request_inventory'=>$rviews));
	}	
$fp = fopen("json/events_2x.json","w");
//fwrite($fp,$xml->asXML());
fwrite($fp,json_encode($rviews));
fclose($fp);	
?>
<?
#@session_destroy();
koneksi_tutup();
?>

