<?php
require '../koneksi.php';
@session_start();
koneksi_buka();
/***
$romfrom="'0001','0002','0003A','0003B','0004','0005','0006','0007','0008','0009'";
$areafrom="'001','002','003','004','005','006','007','008','009'";
$areato="'001','002','003','004','005','006','007','008','009'";
*/
$queryAnd="";

/***
if($_GET['romfrom'] !=""){
	$queryAnd=$queryAnd." AND ITH_USER.usergroup_id IN('".$_GET['romfrom']."')\n";
	//$queryAnd=$queryAnd." and ITH_TICKET_HEADER.ticketstatus_id IN ('".$_GET['status']."')\n";
}
***/
/*else{
	$queryAnd=$queryAnd." AND ITU.usergroup_id IN ('".$romto."')\n";
}	*/
/***
if(($_GET['areafrom'] !="")&&($_GET['areato'] !="")){
	#$queryAnd=$queryAnd." AND (ITH_USER.usersubgroup_id IN ('".$_GET['areafrom']."') OR ITH_USER.usersubgroup_id = '".$_GET['areato']."')\n";
	$queryAnd=$queryAnd." AND (ITH_USER.usersubgroup_id >= '".$_GET['areafrom']."' AND ITH_USER.usersubgroup_id <= '".$_GET['areato']."')\n";
}
***/
/*else{
	$queryAnd=$queryAnd." AND (ITU.usersubgroup_id IN ('".$areafrom."')\n";
}*/
/*
if($_GET['areato'] !=""){
	$queryAnd=$queryAnd." OR ITU.usersubgroup_id = '".$_GET['areato']."')\n";
}*/
/*else{
	$queryAnd=$queryAnd." OR ITU.usersubgroup_id IN ('".$areato."'))\n";
}	*/

if($_GET['query'] !=""){
	$queryAnd=$queryAnd." AND (ITH_PARAMETER.name_parameter LIKE '%".$_GET['query']."%' 
	OR ITH_PARAMETER.value_parameter = '".$_GET['query']."')\n";
}
/*
$query = "SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_DEPARTEMEN.nama_departemen, app.ticketstatusapproval_activity, app.statusApproval 
				, (case when ITH_TICKET_HEADER.ticketapproval_id1 = '".$_SESSION['user_nik']."' then 1 
					when ITH_TICKET_HEADER.ticketapproval_id2 = '".$_SESSION['user_nik']."' then 1 
					when ITH_TICKET_HEADER.ticketapproval_id3 = '".$_SESSION['user_nik']."' then 1 
					when ITH_TICKET_HEADER.ticketapproval_id4 = '".$_SESSION['user_nik']."' then 1 
					else 0 end
				) as myApproval
				FROM ITH_TICKET_HEADER 
				LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
				LEFT JOIN ITH_TICKET_DETAIL DT ON DT.ticketdetail_id = ITH_TICKET_HEADER.ticket_id
				 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
				 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
				 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen
				LEFT JOIN (
					SELECT il.ticket_id, il.ticketstatusapproval_activity, sts.ticketstatusapproval_name statusApproval 
					, MAX(STR_TO_DATE(CONCAT(il.ticketapproval_createddate, ' ', il.ticketapproval_createdtime), '%d/%m/%Y %h:%i')) 
					FROM ITH_LOGAPPROVAL il
					LEFT JOIN ITH_TICKETSTATUSAPRVL sts ON sts.ticketstatusapproval_id=il.ticketstatusapproval_activity
					WHERE il.ticketapproval_bynik = '".$_SESSION['user_nik']."' 
					GROUP BY il.ticket_id
					ORDER BY STR_TO_DATE(CONCAT(il.ticketapproval_createddate, ' ', il.ticketapproval_createdtime), '%d/%m/%Y %h:%i') DESC

				) app on app.ticket_id= ITH_TICKET_HEADER.ticket_id
				WHERE 1=1 ".$queryAnd."
				GROUP BY ITH_TICKET_HEADER.ticket_id
				ORDER BY STR_TO_DATE(ITH_TICKET_HEADER.ticket_createdate, '%d/%m/%Y') DESC";
*/
$query="SELECT DISTINCT id_parameter,kd_parametertype,kd_grup,name_grup,value_parameter FROM ITH_PARAMETER 
		WHERE 1=1 ".$queryAnd." ORDER BY id_parameter ASC";				
//echo $query;				

$data = array();
if($_GET['filter']=='true'){
	//echo $query;
	$result = mysql_query($query);
	while ($row = mysql_fetch_object( $result ) ) {
		$data[] = array(
			'idParameter'		=>$row->id_parameter,
			'kdParameter'		=>$row->kd_parametertype,
			'kdGrup'			=>$row->kd_grup,	
			'nameGrup'			=>$row->name_grup,	
			'valueParameter'	=>$row->value_parameter,	
			'action'			=>'action'	
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