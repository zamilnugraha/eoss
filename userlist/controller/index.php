<?php
require '../koneksi.php';
@session_start();
koneksi_buka();

$usrfrom="'1','2','21','22','23','24','100','101','102','103','1000','1001','1002','1003','1004'";
#$areafrom="'001','002','003','004','005','006','007','008','009'";
#$areato="'001','002','003','004','005','006','007','008','009'";

$queryAnd="";

if($_GET['usrfrom'] !=""){
	$queryAnd=$queryAnd." AND ITH_USER.userlevel_id IN('".$_GET['usrfrom']."')\n";
	//$queryAnd=$queryAnd." and ITH_TICKET_HEADER.ticketstatus_id IN ('".$_GET['status']."')\n";
}

if($_GET['query'] !=""){
	$queryAnd=$queryAnd." AND (ITH_USER.user_realname LIKE '%".$_GET['query']."%' 
	OR ITH_USER.user_nik = '".$_GET['query']."')\n";
}

$query="SELECT DISTINCT ITH_USER.user_nik,ITH_USER.user_realname,ITH_USER.user_email,
ITH_USER.usergroup_id,ITH_USER.usersubgroup_id,
ITH_USER.userdepartemen_id,ITH_USER.udept_id,ITH_USER.nik_atasan,ITH_USER.nama_atasan,ITH_USER.user_deptheadname,
ITH_USER.nama_jabatan,ITH_USER.departemen_id,
ITH_DEPARTEMEN.nama_departemen, ITH_USER.user_status,
ITH_USER.userlevel_id, ITH_USERLEVEL.userlevel_name, ITH_USERRSC.userrsc_name
FROM ITH_USER
JOIN ITH_DEPARTEMEN ON ITH_DEPARTEMEN.kode_departemen = ITH_USER.departemen_id
JOIN ITH_USERLEVEL ON ITH_USERLEVEL.userlevel_id = ITH_USER.userlevel_id
JOIN ITH_USERRSC ON ITH_USERRSC.userrsc_code = ITH_USER.userrsc_code
WHERE ITH_USER.nama_jabatan != 'STORE' ".$queryAnd."
GROUP BY  ITH_USER.userdepartemen_id, ITH_USER.udept_id, ITH_USER.USER_REALNAME 
ORDER BY ITH_USER.userdepartemen_id, ITH_USER.udept_id, ITH_USER.USER_REALNAME ASC";				
//echo $query;				

$data = array();
if($_GET['filter']=='true'){
	//echo $query;
	$result = mysql_query($query);
	while ($row = mysql_fetch_object( $result ) ) {
		$data[] = array(
			'userNik'		=>$row->user_nik,
			'userName'		=>$row->user_realname,
			'userMail'		=>$row->user_email,			
			'namaAtasan'	=>$row->nama_atasan,
			'namaDepthead'	=>$row->user_deptheadname,
			'namaJabatan'	=>$row->nama_jabatan,
			'levelName'		=>$row->userlevel_name,			
			'rscName'		=>$row->userrsc_name,			
			'userStatus'	=>$row->user_status,			
			'detail'		=>'detail',
			'action'		=>'action'	
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