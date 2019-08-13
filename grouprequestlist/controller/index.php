<?php
require '../koneksi.php';
koneksi_buka();
$datefrom="";
$dateto="";
$status="'1','2','3','0','5'";
//$statusAprvl="'0','1'";
$supportBy="'1','2','3','4','7'";
$queryAnd="";
$areafrom="";
$areato="";
$store="";
$romTo="";

		$qcekpichandle = mysql_query("SELECT ticketdetail_pichandleby, ticketdetail_pichandleby2, ticketdetail_pichandleby3, 
		ticketdetail_pichandleby4, ticketdetail_pichandleby5, ticketdetail_pichandleby6	FROM ITH_TICKET_DETAIL 
		WHERE 
		ticketdetail_pichandleby = '".$_SESSION['user_id']."' OR
		ticketdetail_pichandleby2 = '".$_SESSION['user_id']."' OR
		ticketdetail_pichandleby3 = '".$_SESSION['user_id']."' OR
		ticketdetail_pichandleby4 = '".$_SESSION['user_id']."' OR
		ticketdetail_pichandleby5 = '".$_SESSION['user_id']."' OR
		ticketdetail_pichandleby6 = '".$_SESSION['user_id']."'
		");
		$rcekpichandle = mysql_fetch_object($qcekpichandle);
		if(
			($_SESSION['user_id'] == $rcekpichandle->ticketdetail_pichandleby) ||
			($_SESSION['user_id'] == $rcekpichandle->ticketdetail_pichandleby2) ||
			($_SESSION['user_id'] == $rcekpichandle->ticketdetail_pichandleby3) ||
			($_SESSION['user_id'] == $rcekpichandle->ticketdetail_pichandleby4) ||
			($_SESSION['user_id'] == $rcekpichandle->ticketdetail_pichandleby5) ||
			($_SESSION['user_id'] == $rcekpichandle->ticketdetail_pichandleby6)
		  )
		{
					if($_GET['datefrom']!="" && $_GET['dateto']!=""){
						$queryAnd =$queryAnd." and STR_TO_DATE(ITH_TICKET_HEADER.ticket_createdate, '%d/%m/%Y') between STR_TO_DATE('".$_GET['datefrom']."', '%d/%m/%Y') and STR_TO_DATE('".$_GET['dateto']."', '%d/%m/%Y')\n";
					}
					if($_GET['status'] !=""){
						$queryAnd=$queryAnd." and ITH_TICKET_HEADER.ticketstatus_id IN ('".$_GET['status']."')\n";
					}
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

					if($_GET['forMe'] == "true"){
						if($_SESSION['user_level']<=1000){
						#if(($_SESSION['user_level']==3)||($_SESSION['user_level']==4)||($_SESSION['user_level']==8)){
							$queryAnd=$queryAnd." and (ITH_TICKET_DETAIL.ticketdetail_pichandleby IN ('".$_SESSION['user_id']."') OR ITH_TICKET_DETAIL.ticketdetail_pichandleby2 IN ('".$_SESSION['user_id']."')
							OR ITH_TICKET_DETAIL.ticketdetail_pichandleby3 IN ('".$_SESSION['user_id']."') OR ITH_TICKET_DETAIL.ticketdetail_pichandleby4 IN ('".$_SESSION['user_id']."'))\n";
						}
					}

					if($_GET['query'] !=""){
						$queryAnd=$queryAnd." and (ITH_TICKET_HEADER.ticket_id LIKE '%".$_GET['query']."%' 
						OR ITH_TICKET_HEADER.ticket_createby LIKE '%".$_GET['query']."%' 
						OR ITH_TICKET_HEADER.ticket_subject LIKE '%".$_GET['query']."%'
						OR ITH_USER.user_realname LIKE '%".$_GET['query']."%')\n";
					}
				/*
					if($_GET['areaFrom'] !=""){
						if($_GET['areaTo'] !="" && $_GET['areaTo']  !=null){
							$queryAnd = $queryAnd." AND ITH_USER.usersubgroup_id BETWEEN '".$_GET['areaFrom']."' AND '".$_GET['areaTo']."'\n";
						}else{
							$queryAnd = $queryAnd." AND ITH_USER.usersubgroup_id = '".$_GET['areaFrom']."'\n";
						}
					}
				
					if(isset($_GET['romTo'])){
						$queryAnd = $queryAnd." AND ITH_USER.usergroup_id BETWEEN '".$_GET['romFrom']."' AND '".$_GET['romTo']."'\n";
					}else{
						$queryAnd = $queryAnd." AND ITH_USER.usergroup_id BETWEEN '".$_GET['romFrom']."' AND '".$_GET['romFrom']."'\n";
					}	
				*/	
					if($_GET['store'] != ""){
						$queryAnd = $queryAnd." AND ITH_USER.user_nik = '".$_GET['store']."'\n";
					}				
					
				$query = "SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_DEPARTEMEN.nama_departemen, 
				app.ticketstatusapproval_activity, app.statusApproval, act.statusActivity, act.statusActivityID 
				, (case when ITH_TICKET_HEADER.ticketapproval_id1 = '".$_SESSION['user_id']."' then 1 
					when ITH_TICKET_HEADER.ticketapproval_id2 = '".$_SESSION['user_id']."' then 1 
					when ITH_TICKET_HEADER.ticketapproval_id3 = '".$_SESSION['user_id']."' then 1 
					when ITH_TICKET_HEADER.ticketapproval_id4 = '".$_SESSION['user_id']."' then 1 
					else 0 end
				) as myApproval, 

				(CASE WHEN DT.ticketdetail_pichandleby = '".$_SESSION['user_id']."' THEN 1 
					WHEN DT.ticketdetail_pichandleby2 = '".$_SESSION['user_id']."' THEN 1 
					WHEN DT.ticketdetail_pichandleby3 = '".$_SESSION['user_id']."' THEN 1 
					WHEN DT.ticketdetail_pichandleby4 = '".$_SESSION['user_id']."' THEN 1 
					ELSE 0 END
				) AS myPIC,	
				ITHUX.user_realname PicName1,
				ITHUX2.user_realname PicName2,
				ITHUX3.user_realname PicName3,
				ITHUX4.user_realname PicName4,							
				ITH_LOGAPPROVAL.ticketstatusapproval_activity, ITH_TICKETSTATUSAPRVL.ticketstatusapproval_name
				FROM ITH_TICKET_HEADER 
				LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
				LEFT JOIN ITH_TICKET_DETAIL DT ON DT.ticketdetail_id = ITH_TICKET_HEADER.ticket_id
				 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
				 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik

				 LEFT JOIN ITH_USER ITHUX ON DT.ticketdetail_pichandleby = ITHUX.user_nik
				 LEFT JOIN ITH_USER ITHUX2 ON DT.ticketdetail_pichandleby2 = ITHUX2.user_nik
				 LEFT JOIN ITH_USER ITHUX3 ON DT.ticketdetail_pichandleby3 = ITHUX3.user_nik
				 LEFT JOIN ITH_USER ITHUX4 ON DT.ticketdetail_pichandleby4 = ITHUX4.user_nik				
				 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen
				 LEFT JOIN ITH_LOGAPPROVAL ON ITH_TICKET_HEADER.ticket_id = ITH_LOGAPPROVAL.ticket_id
				 LEFT JOIN ITH_TICKETSTATUSAPRVL ON ITH_LOGAPPROVAL.ticketstatusapproval_activity = ITH_TICKETSTATUSAPRVL.ticketstatusapproval_id
				LEFT JOIN (
					SELECT il.ticket_id, il.ticketstatusapproval_activity, sts.ticketstatusapproval_name statusApproval 
					, MAX(STR_TO_DATE(CONCAT(il.ticketapproval_createddate, ' ', il.ticketapproval_createdtime), '%d/%m/%Y %h:%i')) 
					FROM ITH_LOGAPPROVAL il
					LEFT JOIN ITH_TICKETSTATUSAPRVL sts ON sts.ticketstatusapproval_id=il.ticketstatusapproval_activity
					WHERE il.ticketapproval_bynik = '".$_SESSION['user_id']."' 
					GROUP BY il.ticket_id
					ORDER BY STR_TO_DATE(CONCAT(il.ticketapproval_createddate, ' ', il.ticketapproval_createdtime), '%d/%m/%Y %h:%i') DESC
				) app on app.ticket_id= ITH_TICKET_HEADER.ticket_id
				LEFT JOIN (
					SELECT ilr.ticket_id, ilr.ticketstatus_report, stsx.ticketstatus_name statusActivity, stsx.ticketstatusfrompic_id  statusActivityID  
					, MAX(STR_TO_DATE(CONCAT(ilr.ticketreport_createddate, ' ', ilr.ticketreport_createdtime), '%d/%m/%Y %h:%i')) 
					FROM ITH_LOGREPORT ilr
					LEFT JOIN ITH_TICKETSTATUS stsx ON stsx.ticketstatusfrompic_id=ilr.ticketstatus_report
					LEFT JOIN ITH_USER ithu ON ithu.user_realname=ilr.ticketrespond_by
					WHERE ilr.ticketrespond_by = '".$_SESSION['user_realname']."' 
					GROUP BY ilr.ticket_id
					ORDER BY STR_TO_DATE(CONCAT(ilr.ticketreport_createddate, ' ', ilr.ticketreport_createdtime), '%d/%m/%Y %h:%i') DESC
				) act ON act.ticket_id= ITH_TICKET_HEADER.ticket_id				
				WHERE 1=1 ".$queryAnd."
				GROUP BY ITH_TICKET_HEADER.ticket_id
				ORDER BY STR_TO_DATE(ITH_TICKET_HEADER.ticket_createdate, '%d/%m/%Y') DESC";
				
		}elseif(
			($_SESSION['user_id'] != $rcekpichandle->ticketdetail_pichandleby) ||
			($_SESSION['user_id'] != $rcekpichandle->ticketdetail_pichandleby2) ||
			($_SESSION['user_id'] != $rcekpichandle->ticketdetail_pichandleby3) ||
			($_SESSION['user_id'] != $rcekpichandle->ticketdetail_pichandleby4) ||
			($_SESSION['user_id'] != $rcekpichandle->ticketdetail_pichandleby5) ||
			($_SESSION['user_id'] != $rcekpichandle->ticketdetail_pichandleby6)
		  )
		  {
					if($_GET['datefrom']!="" && $_GET['dateto']!=""){
						$queryAnd =$queryAnd." and STR_TO_DATE(ITH_TICKET_HEADER.ticket_createdate, '%d/%m/%Y') between STR_TO_DATE('".$_GET['datefrom']."', '%d/%m/%Y') and STR_TO_DATE('".$_GET['dateto']."', '%d/%m/%Y')\n";
					}
					if($_GET['status'] !=""){
						$queryAnd=$queryAnd." and ITH_TICKET_HEADER.ticketstatus_id IN ('".$_GET['status']."')\n";
					}
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

					if($_GET['forMe'] == "true"){
						if($_SESSION['user_level']<=1000){
						#if(($_SESSION['user_level']==3)||($_SESSION['user_level']==4)||($_SESSION['user_level']==8)){
						#	$queryAnd=$queryAnd." AND (ITH_TICKET_HEADER.ticketapproval_id1 IN ('".$_SESSION['user_id']."') OR ITH_TICKET_HEADER.ticketapproval_id2 IN ('".$_SESSION['user_id']."')
						#	OR ITH_TICKET_HEADER.ticketapproval_id3 IN ('".$_SESSION['user_id']."') OR ITH_TICKET_HEADER.ticketapproval_id4 IN ('".$_SESSION['user_id']."'))\n";
						$queryAnd=$queryAnd." AND ((ITH_TICKET_HEADER.ticketapproval_id1 IN ('".$_SESSION['user_id']."') OR ITH_TICKET_HEADER.ticketapproval_id2 IN ('".$_SESSION['user_id']."') OR ITH_TICKET_HEADER.ticketapproval_id3 IN ('".$_SESSION['user_id']."') OR ITH_TICKET_HEADER.ticketapproval_id4 IN ('".$_SESSION['user_id']."'))
								OR (DT.ticketdetail_pichandleby IN('".$_SESSION['user_id']."') OR DT.ticketdetail_pichandleby2 IN('".$_SESSION['user_id']."') OR DT.ticketdetail_pichandleby3 IN('".$_SESSION['user_id']."') OR DT.ticketdetail_pichandleby4 IN('".$_SESSION['user_id']."')))\n";
						}
					}

					if($_GET['query'] !=""){
						$queryAnd=$queryAnd." and (ITH_TICKET_HEADER.ticket_id LIKE '%".$_GET['query']."%' 
						OR ITH_TICKET_HEADER.ticket_createby LIKE '%".$_GET['query']."%' 
						OR ITH_TICKET_HEADER.ticket_subject LIKE '%".$_GET['query']."%'
						OR ITH_USER.user_realname LIKE '%".$_GET['query']."%')\n";
					}
				/*	if($_GET['areaFrom'] !=""){
						if($_GET['areaTo'] !="" && $_GET['areaTo']  !=null){
							$queryAnd = $queryAnd." AND ITH_USER.usersubgroup_id BETWEEN '".$_GET['areaFrom']."' AND '".$_GET['areaTo']."'\n";
						}else{
							$queryAnd = $queryAnd." AND ITH_USER.usersubgroup_id = '".$_GET['areaFrom']."'\n";
						}
					}
					if($_GET['store'] != ""){
						$queryAnd = $queryAnd." AND ITH_USER.user_nik = '".$_GET['store']."'\n";
					}
				
					if(isset($_GET['romTo'])){
						$queryAnd = $queryAnd." AND ITH_USER.usergroup_id BETWEEN '".$_GET['romFrom']."' AND '".$_GET['romTo']."'\n";
					}else{
						$queryAnd = $queryAnd." AND ITH_USER.usergroup_id BETWEEN '".$_GET['romFrom']."' AND '".$_GET['romFrom']."'\n";
					}	
				*/
				
				$query = "SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_DEPARTEMEN.nama_departemen, app.ticketstatusapproval_activity, app.statusApproval, act.statusActivity, act.statusActivityID 
				, (case when ITH_TICKET_HEADER.ticketapproval_id1 = '".$_SESSION['user_id']."' then 1 
					when ITH_TICKET_HEADER.ticketapproval_id2 = '".$_SESSION['user_id']."' then 1 
					when ITH_TICKET_HEADER.ticketapproval_id3 = '".$_SESSION['user_id']."' then 1 
					when ITH_TICKET_HEADER.ticketapproval_id4 = '".$_SESSION['user_id']."' then 1 
					else 0 end
				) as myApproval, 
				ITH_TICKET_HEADER.ticketapprovalstatus_id,ITH_TICKET_HEADER.ticketapprovalstatus_id2, ITH_TICKET_HEADER.ticketapprovalstatus_id3,
				(CASE WHEN DT.ticketdetail_pichandleby = '".$_SESSION['user_id']."' THEN 1 
					WHEN DT.ticketdetail_pichandleby2 = '".$_SESSION['user_id']."' THEN 1 
					WHEN DT.ticketdetail_pichandleby3 = '".$_SESSION['user_id']."' THEN 1 
					WHEN DT.ticketdetail_pichandleby4 = '".$_SESSION['user_id']."' THEN 1 
					ELSE 0 END
				) AS myPIC,	
				ITHUX.user_realname PicName1,
				ITHUX2.user_realname PicName2,
				ITHUX3.user_realname PicName3,
				ITHUX4.user_realname PicName4,							
				ITH_LOGAPPROVAL.ticketstatusapproval_activity, ITH_TICKETSTATUSAPRVL.ticketstatusapproval_name
				FROM ITH_TICKET_HEADER 
				LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
				LEFT JOIN ITH_TICKET_DETAIL DT ON DT.ticketdetail_id = ITH_TICKET_HEADER.ticket_id
				 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
				 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik

				 LEFT JOIN ITH_USER ITHUX ON DT.ticketdetail_pichandleby = ITHUX.user_nik
				 LEFT JOIN ITH_USER ITHUX2 ON DT.ticketdetail_pichandleby2 = ITHUX2.user_nik
				 LEFT JOIN ITH_USER ITHUX3 ON DT.ticketdetail_pichandleby3 = ITHUX3.user_nik
				 LEFT JOIN ITH_USER ITHUX4 ON DT.ticketdetail_pichandleby4 = ITHUX4.user_nik				
				 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen
				 LEFT JOIN ITH_LOGAPPROVAL ON ITH_TICKET_HEADER.ticket_id = ITH_LOGAPPROVAL.ticket_id
				 LEFT JOIN ITH_TICKETSTATUSAPRVL ON ITH_LOGAPPROVAL.ticketstatusapproval_activity = ITH_TICKETSTATUSAPRVL.ticketstatusapproval_id
				LEFT JOIN (
					SELECT il.ticket_id, il.ticketstatusapproval_activity, sts.ticketstatusapproval_name statusApproval 
					, MAX(STR_TO_DATE(CONCAT(il.ticketapproval_createddate, ' ', il.ticketapproval_createdtime), '%d/%m/%Y %h:%i')) 
					FROM ITH_LOGAPPROVAL il
					LEFT JOIN ITH_TICKETSTATUSAPRVL sts ON sts.ticketstatusapproval_id=il.ticketstatusapproval_activity
					WHERE il.ticketapproval_bynik = '".$_SESSION['user_id']."' 
					GROUP BY il.ticket_id
					ORDER BY STR_TO_DATE(CONCAT(il.ticketapproval_createddate, ' ', il.ticketapproval_createdtime), '%d/%m/%Y %h:%i') DESC
				) app on app.ticket_id= ITH_TICKET_HEADER.ticket_id
				LEFT JOIN (
					SELECT ilr.ticket_id, ilr.ticketstatus_report, stsx.ticketstatus_name statusActivity, stsx.ticketstatusfrompic_id  statusActivityID  
					, MAX(STR_TO_DATE(CONCAT(ilr.ticketreport_createddate, ' ', ilr.ticketreport_createdtime), '%d/%m/%Y %h:%i')) 
					FROM ITH_LOGREPORT ilr
					LEFT JOIN ITH_TICKETSTATUS stsx ON stsx.ticketstatusfrompic_id=ilr.ticketstatus_report
					LEFT JOIN ITH_USER ithu ON ithu.user_realname=ilr.ticketrespond_by
					WHERE ilr.ticketrespond_by = '".$_SESSION['user_realname']."' 
					GROUP BY ilr.ticket_id
					ORDER BY STR_TO_DATE(CONCAT(ilr.ticketreport_createddate, ' ', ilr.ticketreport_createdtime), '%d/%m/%Y %h:%i') DESC
				) act ON act.ticket_id= ITH_TICKET_HEADER.ticket_id				
				WHERE 1=1 ".$queryAnd."
				GROUP BY ITH_TICKET_HEADER.ticket_id
				ORDER BY STR_TO_DATE(ITH_TICKET_HEADER.ticket_createdate, '%d/%m/%Y') DESC";	
				/**
				$query = "SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_DEPARTEMEN.nama_departemen, app.ticketstatusapproval_activity, app.statusApproval, act.statusActivity, act.statusActivityID 
				, (CASE WHEN ITH_TICKET_HEADER.ticketapproval_id1 = '027873' THEN 1 
					WHEN ITH_TICKET_HEADER.ticketapproval_id2 = '027873' THEN 1 
					WHEN ITH_TICKET_HEADER.ticketapproval_id3 = '027873' THEN 1 
					WHEN ITH_TICKET_HEADER.ticketapproval_id4 = '027873' THEN 1 
					ELSE 0 END
				) AS myApproval, 
				ITH_TICKET_HEADER.ticketapprovalstatus_id,ITH_TICKET_HEADER.ticketapprovalstatus_id2, ITH_TICKET_HEADER.ticketapprovalstatus_id3,
				(CASE WHEN DT.ticketdetail_pichandleby = '027873' THEN 1 
					WHEN DT.ticketdetail_pichandleby2 = '027873' THEN 1 
					WHEN DT.ticketdetail_pichandleby3 = '027873' THEN 1 
					WHEN DT.ticketdetail_pichandleby4 = '027873' THEN 1 
					ELSE 0 END
				) AS myPIC,	
				ITHUX.user_realname PicName1,
				ITHUX2.user_realname PicName2,
				ITHUX3.user_realname PicName3,
				ITHUX4.user_realname PicName4,							
				ITH_LOGAPPROVAL.ticketstatusapproval_activity, ITH_TICKETSTATUSAPRVL.ticketstatusapproval_name
				FROM ITH_TICKET_HEADER 
				LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
				LEFT JOIN ITH_TICKET_DETAIL DT ON DT.ticketdetail_id = ITH_TICKET_HEADER.ticket_id
				 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
				 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik

				 LEFT JOIN ITH_USER ITHUX ON DT.ticketdetail_pichandleby = ITHUX.user_nik
				 LEFT JOIN ITH_USER ITHUX2 ON DT.ticketdetail_pichandleby2 = ITHUX2.user_nik
				 LEFT JOIN ITH_USER ITHUX3 ON DT.ticketdetail_pichandleby3 = ITHUX3.user_nik
				 LEFT JOIN ITH_USER ITHUX4 ON DT.ticketdetail_pichandleby4 = ITHUX4.user_nik				
				 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen
				 LEFT JOIN ITH_LOGAPPROVAL ON ITH_TICKET_HEADER.ticket_id = ITH_LOGAPPROVAL.ticket_id
				 LEFT JOIN ITH_TICKETSTATUSAPRVL ON ITH_LOGAPPROVAL.ticketstatusapproval_activity = ITH_TICKETSTATUSAPRVL.ticketstatusapproval_id
				LEFT JOIN (
					SELECT il.ticket_id, il.ticketstatusapproval_activity, sts.ticketstatusapproval_name statusApproval 
					, MAX(STR_TO_DATE(CONCAT(il.ticketapproval_createddate, ' ', il.ticketapproval_createdtime), '%d/%m/%Y %h:%i')) 
					FROM ITH_LOGAPPROVAL il
					LEFT JOIN ITH_TICKETSTATUSAPRVL sts ON sts.ticketstatusapproval_id=il.ticketstatusapproval_activity
					WHERE il.ticketapproval_bynik = '027873' 
					GROUP BY il.ticket_id
					ORDER BY STR_TO_DATE(CONCAT(il.ticketapproval_createddate, ' ', il.ticketapproval_createdtime), '%d/%m/%Y %h:%i') DESC
				) app ON app.ticket_id= ITH_TICKET_HEADER.ticket_id
				LEFT JOIN (
					SELECT ilr.ticket_id, ilr.ticketstatus_report, stsx.ticketstatus_name statusActivity, stsx.ticketstatusfrompic_id  statusActivityID  
					, MAX(STR_TO_DATE(CONCAT(ilr.ticketreport_createddate, ' ', ilr.ticketreport_createdtime), '%d/%m/%Y %h:%i')) 
					FROM ITH_LOGREPORT ilr
					LEFT JOIN ITH_TICKETSTATUS stsx ON stsx.ticketstatusfrompic_id=ilr.ticketstatus_report
					LEFT JOIN ITH_USER ithu ON ithu.user_realname=ilr.ticketrespond_by
					WHERE ilr.ticketrespond_by = 'ROBERT SAM KURNIADI' 
					GROUP BY ilr.ticket_id
					ORDER BY STR_TO_DATE(CONCAT(ilr.ticketreport_createddate, ' ', ilr.ticketreport_createdtime), '%d/%m/%Y %h:%i') DESC
				) act ON act.ticket_id= ITH_TICKET_HEADER.ticket_id				
				WHERE 1=1 
				AND STR_TO_DATE(ITH_TICKET_HEADER.ticket_createdate, '%d/%m/%Y') BETWEEN STR_TO_DATE('13/12/2018', '%d/%m/%Y') AND STR_TO_DATE('13/12/2018', '%d/%m/%Y')
				AND ITH_TICKET_HEADER.ticketstatus_id IN ('2')
				AND ITH_TICKET_HEADER.ticket_udeptid IN ('2','3')
				GROUP BY ITH_TICKET_HEADER.ticket_id
				ORDER BY STR_TO_DATE(ITH_TICKET_HEADER.ticket_createdate, '%d/%m/%Y') DESC;";	
				**/
		  }	  
		    
	
//echo $query;				


	$data = array();
	if($_GET['filter']=='true'){
		//echo $query;
		$result = mysql_query($query);
		while ($row = mysql_fetch_object( $result ) ) {
			$data[] = array(
				'dateTime'				=>'Date : '.$row->ticket_createdate.'<br>Time : '.$row->ticket_createtime,
			/*	'time'			=>$row->ticket_createtime, */
				'ticketId'			=>$row->ticket_id,
				'requestBy'		=>$row->user_realname,
				'subject'	=>$row->ticket_subject,
				'status'			=>$row->ticketstatus_name,
				'reqVia'		=>$row->ticket_viaby,
			//	'statusAprvl'		=>$row->ticketstatusapproval_name,
				'supportBy'		=>$row->nama_departemen,
				'detail'		=>'detail',
				'action'				=>'action',
				'statusApprovalId' =>$row->ticketstatusapproval_activity,
				'statusApproval' => $row->statusApproval,
				'myApproval' => $row->myApproval,
				'AprvlStsId' => $row->ticketapprovalstatus_id,
				'AprvlStsId2' => $row->ticketapprovalstatus_id2,
				'AprvlStsId3' => $row->ticketapprovalstatus_id3,				
				'statusActivity' => $row->statusActivity,
				'statusActivityId' => $row->statusActivityID,
				'Apps1' => $row->ticketapproval_by1,
				'Apps2' => $row->ticketapproval_by2,
				'Apps3' => $row->ticketapproval_by3,
				'Apps4' => $row->ticketapproval_by4,
				'Pic1' => $row->PicName1,
				'Pic2' => $row->PicName2,
				'Pic3' => $row->PicName3,
				'Pic4' => $row->PicName4,
				'ticketRef'=>$row->ticketreferencestatus_id,
				'ticketRefID'=>$row->ticketreference_id
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