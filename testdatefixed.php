<?
	$cone =  mysql_connect('localhost','usrservicedesk','kfc14022');
			mysql_select_db('servicedesk',$cone);
/* 
21/01/2019
22/02/2019
28/02/2019
21/02/2019
19/02/2019
17/02/2019
14/02/2019
15/02/2019
16/04/2019
25/04/2019
14/04/2019
27/02/2019
24/04/2019
26/04/2019
05/04/2019
15/04/2019
11/04/2019
10/04/2019
27/03/2019
03/04/2019
08/04/2019
04/04/2019
03/03/2019
26/02/2019
11/03/2019
18/02/2019
22/01/2019
06/04/2019
22/03/2019
25/03/2019
31/03/2019
13/04/2019
*/
// 21/01/2019
$dateAwal2a = '21/01/2019';
$date2a = DateTime::createFromFormat('d/m/Y',$dateAwal2a)->format('d-m-Y');
if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
$date3a = date_create($date2a);
date_add($date3a, date_interval_create_from_date_string('+7 days'));
$date3xa = date_format($date3a, 'd/m/Y');
echo "<br>".$dateAwal2a.' + 7 hari = '.$date3xa.'<hr>';

	$qCekStoreKode = mysql_query("SELECT ITH_TICKET_HEADER.ticket_createdate,ITH_TICKET_HEADER.ticket_createtime,
								  ITH_TICKET_HEADER.ticket_createby,ITH_TICKET_HEADER.ticketstatus_id,
                            	  ITH_TICKET_HEADER.ticket_id,ITH_TICKET_HEADER.ticket_udeptid,ITH_TICKET_HEADER.ticket_problem,
								  ITH_TICKET_HEADER.ticket_subject,ITH_TICKET_HEADER.notifemailloop,
								  ITH_USER.user_nik, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name	
								  FROM ITH_TICKET_HEADER 
								  JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
								  JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
								  WHERE ITH_TICKET_HEADER.ticket_udeptid = '8' 
								  AND ticket_createby = '0208'
								  AND ITH_TICKET_HEADER.ticketstatus_id = '1' AND
								  STR_TO_DATE(ticket_createdate,'%d/%m/%Y') BETWEEN STR_TO_DATE('01/01/2019','%d/%m/%Y') 
								  AND STR_TO_DATE('30/04/2019','%d/%m/%Y')");
	while($rCekStoreKode = mysql_fetch_object($qCekStoreKode))
	{
		
	}	

?>