
<?php
$cone =  mysql_connect('localhost','usrservicedesk','kfc14022');
		 mysql_select_db('servicedesk',$cone);
// Get search term
#$searchTerm = $_GET['name'];
$searchTerm = $_GET['myCountry'];

// Get matched data from skills table
$query = $db->query("SELECT user_nik, user_realname FROM ITH_USER WHERE user_realname LIKE '%".$searchTerm."%' AND nama_jabatan = 'STORE'");

// Generate skills data array
$skillData = array();
if($query->num_rows > 0){
    while($row = $query->fetch_array()){
        $data['user_nik'] = $row['user_nik'];
        $data['user_realname'] = $row['user_realname'];
        array_push($skillData, $data);
    }
}

// Return results as json encoded array
echo json_encode($skillData);

?>