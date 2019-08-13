<?php
require '../koneksi.php';
@session_start();
koneksi_buka();
$datefrom="";
$dateto="";
$status="'1','2','3','0','5'";
$supportBy="'1','2','3','4','7'";
$queryAnd="";

/*
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$start = $time;
*/

if($_GET['datefrom']!="" && $_GET['dateto']!=""){
	$queryAnd =$queryAnd." and STR_TO_DATE(ITH_TICKET_HEADER.ticket_createdate, '%d/%m/%Y') between STR_TO_DATE('".$_GET['datefrom']."', '%d/%m/%Y') and STR_TO_DATE('".$_GET['dateto']."', '%d/%m/%Y')\n";
}
if($_GET['status'] !=""){
	$queryAnd=$queryAnd." and ITH_TICKET_HEADER.ticketstatus_id IN ('".$_GET['status']."')\n";
}else{
	$queryAnd=$queryAnd." and ITH_TICKET_HEADER.ticketstatus_id IN ('0','1','2','3','5')\n";
}	
/*
if($_GET['supportBy'] !=""){
	if($_GET['supportBy'] !="6"){
		if($_GET['supportBy'] !="7"){
			$supportBy=$_GET['supportBy'];
		}else{
			$supportBy="'2','3'";
		}
		
	}
	$queryAnd=$queryAnd." and ITH_TICKET_HEADER.ticket_udeptid IN ('".$supportBy."')\n";
}
*/
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
if($_GET['forMe'] == "true"){
	if($_SESSION['user_level']<1000){
		$queryAnd=$queryAnd." AND (DT.ticketdetail_pichandleby IN ('".$_SESSION['user_id']."') OR DT.ticketdetail_pichandleby2 IN ('".$_SESSION['user_id']."')
		OR DT.ticketdetail_pichandleby3 IN ('".$_SESSION['user_id']."') OR DT.ticketdetail_pichandleby4 IN ('".$_SESSION['user_id']."'))\n";
	}else{
		$queryAnd=$queryAnd." AND (ITH_TICKET_HEADER.ticketapproval_id1 IN ('".$_SESSION['user_id']."') OR ITH_TICKET_HEADER.ticketapproval_id2 IN ('".$_SESSION['user_id']."')
		OR ITH_TICKET_HEADER.ticketapproval_id3 IN ('".$_SESSION['user_id']."') OR ITH_TICKET_HEADER.ticketapproval_id4 IN ('".$_SESSION['user_id']."'))\n";
	}
}
if($_GET['query'] !=""){
	$queryAnd=$queryAnd." AND (ITH_TICKET_HEADER.ticket_id LIKE '%".$_GET['query']."%' 
	OR ITH_TICKET_HEADER.ticket_createby LIKE '%".$_GET['query']."%' 
	OR ITH_TICKET_HEADER.ticket_subject LIKE '%".$_GET['query']."%'
	OR ITH_USER.user_realname LIKE '%".$_GET['query']."%')\n";
}
$query = "SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_DEPARTEMEN.nama_departemen, app.ticketstatusapproval_activity, app.statusApproval 
				, (case when ITH_TICKET_HEADER.ticketapproval_id1 = '".$_SESSION['user_id']."' then 1 
					when ITH_TICKET_HEADER.ticketapproval_id2 = '".$_SESSION['user_id']."' then 1 
					when ITH_TICKET_HEADER.ticketapproval_id3 = '".$_SESSION['user_id']."' then 1 
					when ITH_TICKET_HEADER.ticketapproval_id4 = '".$_SESSION['user_id']."' then 1 
					else 0 end
				) as myApproval, 
				ITH_TICKET_HEADER.ticketapprovalstatus_id,ITH_TICKET_HEADER.ticketapprovalstatus_id2, ITH_TICKET_HEADER.ticketapprovalstatus_id3				
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
					WHERE il.ticketapproval_bynik = '".$_SESSION['user_id']."' 
					GROUP BY il.ticket_id
					ORDER BY STR_TO_DATE(CONCAT(il.ticketapproval_createddate, ' ', il.ticketapproval_createdtime), '%d/%m/%Y %h:%i') DESC

				) app on app.ticket_id= ITH_TICKET_HEADER.ticket_id
				WHERE 1=1 ".$queryAnd."
				GROUP BY ITH_TICKET_HEADER.ticket_id
				ORDER BY STR_TO_DATE(ITH_TICKET_HEADER.ticket_createdate, '%d/%m/%Y') DESC";
//echo $query;				

$data = array();
if($_GET['filter']=='true'){
	//echo $query;
	$result = mysql_query($query);
	while ($row = mysql_fetch_object( $result ) ) {
		$data[] = array(
			'date'				=>$row->ticket_createdate,
			'time'			=>$row->ticket_createtime,
			'ticketId'			=>$row->ticket_id,
			'requestBy'		=>$row->user_realname,
			'subject'	=>$row->ticket_subject,
			'status'			=>$row->ticketstatus_name,
			'reqVia'		=>$row->ticket_viaby,
			'supportBy'		=>$row->nama_departemen,
			'detail'		=>'detail',
			'action'				=>'action',
			'statusApprovalId' =>$row->ticketstatusapproval_activity,
			'statusApproval' => $row->statusApproval,
			'myApproval' => $row->myApproval,
			'AprvlStsId' => $row->ticketapprovalstatus_id,
			'AprvlStsId2' => $row->ticketapprovalstatus_id2,
			'AprvlStsId3' => $row->ticketapprovalstatus_id3,
			'unik1' => $row->ticketapproval_id1,
			'unik2' => $row->ticketapproval_id2,
			'unik3' => $row->ticketapproval_id3,
			'unik4' => $row->ticketapproval_id4,			
			'reffid' => $row->ticketreference_id,			
			'stsreffd' => $row->ticketreferencestatus_id			
		);
	}
}
$arr['aaData']=$data;
/*array('date' => 1, 'time' => 2, 'ticketId' => 3, 'requestBy' => 4, 'subject' => 5
, 'status' => 1, 'reqVia' => 2, 'supportBy' => 3, 'detail' => 4, 'action' => 5);
*/
$myJSON = json_encode($arr);

echo $myJSON;
/*
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$finish = $time;
$total_time = round(($finish - $start), 4);
echo "Selesai dalam ".$total_time." detik";
*/

?>