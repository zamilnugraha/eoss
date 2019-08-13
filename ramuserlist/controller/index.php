<?php
require '../koneksi.php';
@session_start();
koneksi_buka();

$romfrom="'0001','0002','0003','0004','0005','0006','0007','0008','0009'";
$areafrom="'001','002','003','004','005','006','007','008','009'";
$areato="'001','002','003','004','005','006','007','008','009'";

$queryAnd="";


if($_GET['romfrom'] !=""){
	$queryAnd=$queryAnd." AND ITH_USER.usergroup_id IN('".$_GET['romfrom']."')\n";
	//$queryAnd=$queryAnd." and ITH_TICKET_HEADER.ticketstatus_id IN ('".$_GET['status']."')\n";
}
/*else{
	$queryAnd=$queryAnd." AND ITU.usergroup_id IN ('".$romto."')\n";
}	*/

if(($_GET['areafrom'] !="")&&($_GET['areato'] !="")){
	$queryAnd=$queryAnd." AND (ITH_USER.usersubgroup_id >= '".$_GET['areafrom']."' AND ITH_USER.usersubgroup_id <= '".$_GET['areato']."')\n";
}

/*
if($_GET['query'] !=""){
	$queryAnd=$queryAnd." AND ITH_USER.user_realname LIKE '%".$_GET['query']."%' \n";
}
*/
if($_GET['query'] !=""){
	$queryAnd=$queryAnd." AND (ITH_USER.user_realname LIKE '%".$_GET['query']."%' 
	OR ITH_USER.user_nik = '".$_GET['query']."')\n";
}

$query="SELECT DISTINCT ITH_USER.user_nik,ITH_USER.user_realname,ITH_USER.user_email,
ITH_USER.usergroup_id,ITH_USERGROUP.usergroup_name,ITH_USER.usersubgroup_id,ITH_USERGROUP.usersubgroup_name,
ITH_USER.userdepartemen_id,ITH_USER.udept_id,ITH_USER.nik_atasan,ITH_USER.nama_atasan,ITH_USER.user_deptheadname,
ITH_USER.nama_jabatan,ITH_USER.departemen_id,ITH_USER.user_status,
ITH_DEPARTEMEN.nama_departemen,
ITH_USER.userlevel_id, ITH_USERLEVEL.userlevel_name
FROM ITH_USER
JOIN ITH_USERGROUP ON ITH_USERGROUP.usergroup_kd = ITH_USER.usergroup_id AND ITH_USERGROUP.usersubgroup_kd = ITH_USER.usersubgroup_id
JOIN ITH_DEPARTEMEN ON ITH_DEPARTEMEN.kode_departemen = ITH_USER.departemen_id
JOIN ITH_USERLEVEL ON ITH_USERLEVEL.userlevel_id = ITH_USER.userlevel_id
WHERE ITH_USER.udept_id != 'STORE' ".$queryAnd."
GROUP BY  ITH_USER.usergroup_id, ITH_USER.usersubgroup_id, ITH_USER.USER_REALNAME 
ORDER BY ITH_USER.usergroup_id, ITH_USER.usersubgroup_id, ITH_USER.USER_REALNAME ASC";				
//echo $query;				

$data = array();
if($_GET['filter']=='true'){
	//echo $query;
	$result = mysql_query($query);
	while ($row = mysql_fetch_object( $result ) ) {
		$data[] = array(
			'outletCode'				=>$row->user_nik,
			'outletName'			=>$row->user_realname,
			'outletMail'			=>$row->user_email,			
			'romCode'		=>$row->usergroup_id,
			'romName'	=>$row->usergroup_name,
			'areaCode'			=>$row->usersubgroup_id,
			'areaName'		=>$row->usersubgroup_name,
		/*	'usrdeptnameID'		=>$row->userdepartemen_id,
			'udeptID'		=>$row->udept_id, */
		/*	'nikAtasan'		=>$row->nik_atasan, */
			'namaAtasan'		=>$row->nama_atasan,
			'namaROM'		=>$row->user_deptheadname,
			'namaJabatan'		=>$row->nama_jabatan,
			'userStatus'		=>$row->user_status,
		/*	'deptID'		=>$row->departemen_id,
			'deptName'		=>$row->nama_departemen,*/
		/*	'levelID'		=>$row->userlevel_id, */
		/*	'levelName'		=>$row->userlevel_name, */
			
			'detail'		=>'detail',
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