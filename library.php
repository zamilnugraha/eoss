<?php
@session_start();
//require_once('includes/_con.php');

function get_name_category($id)
{
		$con = mssql_connect('sa','sa','transtvhelpdesk');
		mssql_select_db('MIS-APPBACKUP',$con);

		$resrow = '';
		$sql = 'SELECT ticketcategory_name FROM ITH_TICKETCATEGORY WHERE ticketcategory_id = "'.$id.'"';
		$qry = mssql_query($sql);
		$res = mssql_fetch_object($qry);

		if(mssql_num_rows($qry) > 0){
			
			$resrow .=	$res->ticketcategory_name;

		}else{
			$resrow .='';
		}
		return $resrow;

}

?>