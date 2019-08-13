<?php
$host = "172.16.8.132";
$user = "transcp_iml";
$pass = "g4r4m4s1n";
$dbName = "transcp_talentdb";
mysql_connect($host, $user, $pass);
mysql_select_db($dbName)
or die ("Connect Failed !! : ".mysql_error());

$id_talentdetail	= $_POST['id_talentdetail'];


	$qcekid = mysql_query("SELECT id_talentdetail FROM talent_detail ORDER BY id_talentdetail DESC LIMIT 1");
	$rcekid = mysql_fetch_object($qcekid);
	$id_talentdetailx = $rcekid->id_talentdetail;
	

$output_dir = '../../../dc9144e0ece8bcd25dd3a4dcb7b305a3/picture/gallery/data_'.$id_talentdetail.'/';
$gallery_name3 = $_FILES["myfile"]["name"];
$gallery_size3 = $_FILES["myfile"]["size"];
$gallery_location3 = '/dc9144e0ece8bcd25dd3a4dcb7b305a3/picture/gallery/data_'.$id_talentdetail.'/';

if(isset($_FILES["myfile"])){
	//Filter the file types , if you want.
	if ($_FILES["myfile"]["error"] > 0)
	{
	  echo "Error: " . $_FILES["file"]["error"] . "<br>";
	}
	else
	{
		//move the uploaded file to uploads folder;
    if(move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir. $gallery_name3))
	{		
		mysql_query("UPDATE talent_detail SET gallery_name3='$gallery_name3', gallery_location3='$gallery_location3', gallery_size3='$gallery_size3' WHERE id_talentdetail='$id_talentdetail' ");
    }else{
		echo "Gagal Uplaod";
	}
   	 echo "Uploaded File :".$_FILES["myfile"]["name"];
   	 echo "<br>"; echo $output_dir;
	 echo "<meta http-equiv=Refresh content=2;url=../talentdetail.data.php>"; 
	}

}
?>