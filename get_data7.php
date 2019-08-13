<?php
$cone =  mysql_connect('localhost','usrservicedesk','kfc14022');
mysql_select_db('servicedesk',$cone);

$searchTerm = $_GET['nik'];

$select =mysql_query("SELECT * FROM ITH_USER WHERE user_nik = '".$searchTerm."'");
while ($row=mysql_fetch_array($select)) 
{
 $data[] = $row['user_realname'];
}
//return json data
echo json_encode($data);
?>