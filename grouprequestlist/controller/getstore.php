<?php
require '../koneksi.php';
koneksi_buka();
@session_start();

$queryAnd="";
$areafrom="";
$areato="";
$store="";
$romTo="";
if($_GET['areaFrom'] !=""){
	if($_GET['areaTo'] !="" && $_GET['areaTo']  !=null){
		$queryAnd = $queryAnd." AND usersubgroup_id BETWEEN '".$_GET['areaFrom']."' AND '".$_GET['areaTo']."'\n";
	}else{
		$queryAnd = $queryAnd." AND usersubgroup_id = '".$_GET['areaFrom']."'\n";
	}
}
if($_GET['store'] != ""){
	$queryAnd = $queryAnd." AND user_nik = '".$_GET['store']."'\n";
}

if(isset($_GET['romTo'])){
	$queryAnd = $queryAnd." AND usergroup_id BETWEEN '".$_GET['romFrom']."' AND '".$_GET['romTo']."'\n";
}else{
	$queryAnd = $queryAnd." AND usergroup_id BETWEEN '".$_GET['romFrom']."' AND '".$_GET['romFrom']."'\n";
}

$query = "SELECT usergroup_id,usersubgroup_id,user_nik,user_realname, udept_id FROM ITH_USER 
			WHERE udept_id='STORE' ".$queryAnd." 
			GROUP BY user_realname, usersubgroup_id ASC";
echo $query;
$result = mysql_query($query);
$combo = "<option value=''>-- ALL --</option>";
while ($row = mysql_fetch_object( $result ) ) {
	$combo = $combo." <option value='".$row->user_nik."'>".$row->user_realname."</option>";
}
echo $combo;
?>