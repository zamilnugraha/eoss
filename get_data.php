<?php
$kode = $_GET['kode'];
$conn = mysql_connect("192.168.9.179","usrservicedesk","kfc14022");
mysql_select_db("servicedesk");
 
$sql = "select user_nik,user_realname from ITH_USER where user_nik='".$kode."'";
$hs = mysql_query($sql);
$json = array();
while($rs = mysql_fetch_array($hs)){
	$json[] = array(
		'label' => $rs['user_nik'],
		'value' => $rs['user_nik'],
		'nama_brg' => $rs['user_realname']
	);
}
header("Content-Type: application/json");
echo json_encode($json);
