<?php
require '../koneksi.php';
koneksi_buka();
@session_start();
$datefrom="";
$dateto="";
$status="'1','2','3','0','5'";
#$supportBy="'1','2','3','4','7'";
$supportBy="'1','2','3','4','7','5','8','9','10'";
$queryAnd="";
if($_GET['datefrom']!="" && $_GET['dateto']!=""){
	$queryAnd =$queryAnd." and STR_TO_DATE(ITH_TICKET_HEADER.ticket_createdate, '%d/%m/%Y') between STR_TO_DATE('".$_GET['datefrom']."', '%d/%m/%Y') and STR_TO_DATE('".$_GET['dateto']."', '%d/%m/%Y')\n";
}
if($_GET['status'] !=""){
	$queryAnd=$queryAnd." and ITH_TICKET_HEADER.ticketstatus_id IN ('".$_GET['status']."')\n";
}
/**
if($_GET['supportBy'] !=""){
	if($_GET['supportBy'] !="6"){
		if($_GET['supportBy'] !="7"){
			$supportBy=$_GET['supportBy'];
		}else{
			$supportBy="'2','3'";
		}
	}
	$queryAnd=$queryAnd." and ITH_TICKET_HEADER.ticket_udeptid IN (".$supportBy.")\n";
}
**/
if($_GET['supportBy'] !=""){
	if($_GET['supportBy'] =="1"){
		$supportBy="'1'";
	}elseif($_GET['supportBy'] =="2"){
		$supportBy="'2'";
	}elseif($_GET['supportBy'] =="3"){
		$supportBy="'3'";
	}elseif($_GET['supportBy'] =="7"){
		$supportBy="'2','3'";
	}elseif($_GET['supportBy'] =="4"){
		$supportBy="'4'";
	}elseif($_GET['supportBy'] =="5"){
		$supportBy="'5'";
	}elseif($_GET['supportBy'] =="8"){
		$supportBy="'8'";
	}elseif($_GET['supportBy'] =="10"){
		$supportBy="'5','8'";
	}elseif($_GET['supportBy'] =="9"){
		$supportBy="'9'";
	}
	$queryAnd=$queryAnd." AND ITH_TICKET_HEADER.ticket_udeptid IN (".$supportBy.")\n";
}
if($_GET['ticket_id'] !=""){
	$queryAnd=" AND ITH_TICKET_HEADER.ticket_id LIKE '%".$_GET['ticket_id']."%'\n";
}
if($_GET['ticket_subject'] !=""){
	$queryAnd=" and ITH_TICKET_HEADER.ticket_subject LIKE '%".$_GET['ticket_subject']."%'\n";
}
/*
$query = "SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_DEPARTEMEN.nama_departemen
				FROM ITH_TICKET_HEADER 
				LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
				 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
				 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
				 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen
				WHERE ITH_TICKET_HEADER.ticket_createby='".$_SESSION['user_nik']."' ".$queryAnd."
				GROUP BY ITH_TICKET_HEADER.ticket_id
				ORDER BY ITH_TICKET_HEADER.ticket_createdate, ITH_TICKET_HEADER.ticket_createtime DESC";
*/

$query = "SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_DEPARTEMEN.nama_departemen,
				ITH_TIPEBARANG_KODE.tickettransferto_outletcode, ITH_TIPEBARANG_KODE.tickettransferto_outletname,
                ITH_TIPEBARANG_KODE.transfer_date, ITH_TIPEBARANG_KODE.transfer_by, ITH_TIPEBARANG_KODE.storetransfer_createddate,
                ITH_TIPEBARANG_KODE.storetransfer_createdby, ITH_TIPEBARANG_KODE.keterangan, ITH_TIPEBARANG_KODE.ticket_needassist,
				ITH_TIPEBARANG_KODE.pic_name,ITH_TICKET_HEADER.ticket_udeptid,ITH_USER.userstoregroup_id	
				FROM ITH_TICKET_HEADER 
				LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
				 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
				 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
				 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen
				 LEFT JOIN ITH_TIPEBARANG_KODE ON ITH_TICKET_HEADER.ticket_id = ITH_TIPEBARANG_KODE.ticket_id
				WHERE (ITH_TICKET_HEADER.ticket_createby='".$_SESSION['user_nik']."' 
				OR ITH_USER.userstoregroup_id = '".$_SESSION['userstoregroup_id']."' OR ticket_udeptid = '3'
				OR ITH_TIPEBARANG_KODE.tickettransferto_outletcode = '".$_SESSION['user_nik']."') ".$queryAnd."
				GROUP BY ITH_TICKET_HEADER.ticket_id
				ORDER BY ITH_TICKET_HEADER.ticket_createdate, ITH_TICKET_HEADER.ticket_createtime DESC";

//echo $query;				

$data = array();
if($_GET['filter']=='true'){
	//echo $query;				
	$result = mysql_query($query);
	while ($row = mysql_fetch_object( $result ) ) {
		$data[] = array(
			'dateTime'				=>$row->ticket_createdate.'-'.$row->ticket_createtime,
		/*	'time'			=>$row->ticket_createtime, */
			'ticketId'			=>$row->ticket_id,
			'requestByNik'		=>$row->ticket_createby,
			'requestBy'		=>$row->user_realname,
			'subject'	=>$row->ticket_subject,
			'status'			=>$row->ticketstatus_name,
			'reqVia'		=>$row->ticket_viaby,
			'supportBy'		=>$row->nama_departemen,
			'transferToStore' =>$row->tickettransferto_outletcode,
			'transferDate' =>$row->transfer_date,
			'transferBy' =>$row->transfer_by,
			'transferStoreBy' =>$row->storetransfer_createdby,
			'keteranganTransfer' =>$row->keterangan,
			'ticketNeedAssist' =>$row->ticket_needassist,
			'statusApprovalAm' =>$row->ticketapprovalstatus_id,
			'statusApprovalRom' =>$row->ticketapprovalstatus_id2,
			'statusApprovalGmo' =>$row->ticketapprovalstatus_id3,
			'detail'		=>'detail',
			'action'				=>'action',
			'ticketRef'=>$row->ticketreferencestatus_id,
			'ticketRefID'=>$row->ticketreference_id,
			'picName'=>$row->pic_name,
			'ticketUdeptId'=>$row->ticket_udeptid,
			'ustStoreGroupId'=>$row->userstoregroup_id
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