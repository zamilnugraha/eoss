<?php
$host = "172.16.8.101";
$user = "transcp_iml";
$pass = "g4r4m4s1n";
$dbName = "transmediamprsdb";	
	
mysql_connect($host, $user, $pass);
mysql_select_db($dbName)
or die ("Connect Failed !! : ".mysql_error());

$id_mediarelation	= $_POST['id_mediarelation'];


	$qcekid = mysql_query("SELECT id_mediarelation FROM tblmediarelation ORDER BY id_mediarelation DESC LIMIT 1");
	$rcekid = mysql_fetch_object($qcekid);
	$id_mediarelationx = $rcekid->id_mediarelation;
	
$output_dir = '../../../uploaded/mediarelations/data_'.$id_mediarelation.'/';
$upload_filepdfrealname = $_FILES["myfile"]["name"];
#$picture_name = $_FILES["myfile"]["name"];
$upload_filepdfsize = $_FILES["myfile"]["size"];
$qcekvtype = mysql_query("SELECT * FROM tblmediarelation WHERE id_mediarelation = '".$id_mediarelation."' ");
$data = mysql_fetch_array($qcekvtype);
		
$upload_filepdflocation = 'http://'.$_SERVER['SERVER_NAME'].'/transmediamprx/uploaded/mediarelations/data_'.$id_mediarelation.'/';

$data_id = 'data_'.$id_mediarelation;

$qcekfilename = mysql_query("SELECT id_mediarelation FROM tblmediarelation WHERE id_mediarelation = '".$id_mediarelation."'");
$rcekfilename = mysql_fetch_array($qcekfilename);
##$renamefile = $rcekfilename['video_id_detail'].'_'.$id_mediarelation.'.png';

$special = array('/','!','&','*',' ','-','#');
$new_file_name = strtolower(str_replace(' ',' ',str_replace($special,'',$upload_filepdfrealname)));
#$new_file_name = rename($upload_filerealname, $renamefile);;

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
		mysql_query("UPDATE tblmediarelation SET upload_filepdfrealname='$upload_filepdfrealname', upload_filepdfname='$new_file_name', 
		upload_filepdflocation='$upload_filepdflocation', upload_filepdfsize='$upload_filepdfsize' WHERE id_mediarelation='$id_mediarelation' ");		
    }else{
		echo "Gagal Uplaod";
	}
   	 echo "Uploaded File :".$_FILES["myfile"]["name"];
   	 echo "<br>"; echo $output_dir;
	// echo "<meta http-equiv=Refresh content=2;url=../mprdetail.data.php>"; 
	}

}
?>