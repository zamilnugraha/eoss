<?php


$host = "172.16.8.198";
$user = "transcp_iml";
$pass = "g4r4m4s1n";
$dbName = "transcp_transmedianewdb";
mysql_connect($host, $user, $pass);
mysql_select_db($dbName)
or die ("Connect Failed !! : ".mysql_error());

$id_programdetail	= $_POST['id_programdetail'];

$output_dir = '../../../dc9144e0ece8bcd25dd3a4dcb7b305a3/picture/data_'.$id_programdetail.'/';
$pict_eps2_realname = $_FILES["myfile"]["name"];
$pict_eps2_size = $_FILES["myfile"]["size"];
$pict_eps2_location = 'http://'.$_SERVER['SERVER_NAME'].'/transmedianew/dc9144e0ece8bcd25dd3a4dcb7b305a3/picture/data_'.$id_programdetail.'/';

$special = array('/','!','&','*',' ','-','#');
$new_file_name_eps2 = strtolower(str_replace(' ',' ',str_replace($special,'',$pict_eps2_realname)));

if(isset($_FILES["myfile"]))
{

	if ($_FILES["myfile"]["error"] > 0)
	{
	  echo "Error: " . $_FILES["file"]["error"] . "<br>";
	}
	else
	{

    if(move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir. $new_file_name_eps2))
	{
		
		mysql_query("UPDATE program_detail SET 
		pict_eps2_name='$new_file_name_eps2', 
		pict_eps2_location='$pict_eps2_location', 
		pict_eps2_size='$pict_eps2_size', 
		pict_eps2_realname='$pict_eps2_realname' 
		WHERE id_programdetail='$id_programdetail' ");

		
    }else{
		echo "Gagal Uplaod";
	}
   	 echo "Uploaded File :".$_FILES["myfile"]["name"];
   	 echo "<br>"; echo $output_dir;
	 echo "<meta http-equiv=Refresh content=2;url=../programdetail.data.php>"; 
	}

}
?>