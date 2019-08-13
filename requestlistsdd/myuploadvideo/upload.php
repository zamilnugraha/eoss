<?php
$host = "172.16.8.198";
$user = "transcp_iml";
$pass = "g4r4m4s1n";
$dbName = "transcp_transmedianewdb";	
	
mysql_connect($host, $user, $pass);
mysql_select_db($dbName)
or die ("Connect Failed !! : ".mysql_error());

$id_videodetail	= $_POST['id_videodetail'];


	$qcekid = mysql_query("SELECT id_videodetail FROM video_detail ORDER BY id_videodetail DESC LIMIT 1");
	$rcekid = mysql_fetch_object($qcekid);
	$id_videodetailx = $rcekid->id_videodetail;

$video_realname = $_FILES["myfile"]["name"];
#$picture_name = $_FILES["myfile"]["name"];
$video_size = $_FILES["myfile"]["size"];
$qcekvtype = mysql_query("SELECT a.video_id_detail AS my_id, a.id_videodetail AS id_videodetail, a.video_title AS video_title, a.shoot_location AS shoot_location,
			a.catprogram_id AS catprogram_id, a.description AS description, a.video_source AS video_source,
			a.shoot_year AS shoot_year, a.aspect_ratio AS aspect_ratio, a.keyword AS keyword,
			c.program_title AS program_title, a.episode_number AS episode_number,
			a.episode_title AS episode_title, b.categories_name AS categories_program_name, e.catfootages_name AS categories_footage_name,
			d.name AS vtype_name, a.picture_name AS picture_name, a.picture_size AS picture, 
			a.picture_location AS picture_location,a.vtype_id AS vtype_id,a.video_name AS video_name
			FROM video_detail a
			LEFT JOIN categories_programs b ON a.catprogram_id = b.id_categories
			LEFT JOIN program_detail c ON a.program_title_id = c.id_programdetail
			LEFT JOIN video_type d ON a.vtype_id = d.id_videotype
			LEFT JOIN categories_footages e ON a.catfootage_id = e.id_catfootages
			WHERE a.id_videodetail = '".$id_videodetail."' ");
$data = mysql_fetch_array($qcekvtype);
		
$output_dir = '../../../dc9144e0ece8bcd25dd3a4dcb7b305a3/video_videodetail/'.strtolower($data['vtype_name']).'/data_'.$id_videodetail.'/';		
$video_location = 'http://'.$_SERVER['SERVER_NAME'].'/transmedianew/dc9144e0ece8bcd25dd3a4dcb7b305a3/picture_videodetail/'.strtolower($data['vtype_name']).'/data_'.$id_videodetail.'/';

$data_id = 'data_'.$id_videodetail;

$qcekfilename = mysql_query("SELECT video_id_detail FROM video_detail WHERE id_videodetail = '".$id_videodetail."'");
$rcekfilename = mysql_fetch_array($qcekfilename);
##$renamefile = $rcekfilename['video_id_detail'].'_'.$id_videodetail.'.png';

$special = array('/','!','&','*',' ','-','#');
$new_file_name = strtolower(str_replace(' ',' ',str_replace($special,'',$video_realname)));
#$new_file_name = rename($picture_realname, $renamefile);;

/*
$special = array('/','!','&','*',' ','-');

$new_file_name = str_replace(' ',' ',str_replace($special,'',$file_name));
echo '['.$new_file_name.']';

$path= "uploads/File/".$new_file_name;
*/

if(isset($_FILES["myfile"]))
{
	//Filter the file types , if you want.
	if ($_FILES["myfile"]["error"] > 0)
	{
	  echo "Error: " . $_FILES["file"]["error"] . "<br>";
	}
	else
	{
		//move the uploaded file to uploads folder;
    if(move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir. $new_file_name))
	{
		
		mysql_query("UPDATE video_detail SET data_id ='$data_id', video_realname='$video_realname', video_name='$new_file_name', video_location='$video_location', video_size='$video_size' WHERE id_videodetail='$id_videodetail' ");

		
    }else{
		echo "Gagal Uplaod";
	}
   	 echo "Uploaded File :".$_FILES["myfile"]["name"];
   	 echo "<br>"; echo $output_dir;
	 echo "<meta http-equiv=Refresh content=2;url=../videodetail.data.php>"; 
	}

}
?>