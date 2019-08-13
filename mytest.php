<?php
require '../koneksi.php';
@session_start();
koneksi_buka();



$queryAnd="";



if($_GET['query'] !=""){
	$queryAnd=$queryAnd." AND (ITH_USER.user_nik = '".$_GET['query']."')\n";
}

$query="SELECT user_nik, user_realname FROM ITH_USER
WHERE udept_id = 'STORE' ".$queryAnd."";				
//echo $query;				

$data = array();
if($_GET['filter']=='true'){
	//echo $query;
	$result = mysql_query($query);
	while ($row = mysql_fetch_object( $result ) ) {
		$data[] = array(
			'outletName'			=>$row->user_realname,
			'action'				=>'action'	
		);
	}
}
$arr['aaData']=$data;
/*array('date' => 1, 'time' => 2, 'ticketId' => 3, 'requestBy' => 4, 'subject' => 5
, 'status' => 1, 'reqVia' => 2, 'supportBy' => 3, 'detail' => 4, 'action' => 5);
*/
$myJSON = json_encode($arr);

echo $myJSON;
?>