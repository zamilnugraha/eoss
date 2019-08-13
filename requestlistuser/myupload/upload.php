<?
include( 'function.php');
// settings
$max_file_size = 1024*200; // 200kb
$valid_exts = array('jpeg', 'jpg', 'png', 'gif');
// thumbnail sizes
//$sizes = array(100 => 100, 150 => 150, 250 => 250);
$sizes = array(142 => 95, 300 => 201);
//$sizes = array(270 => 150, 1350 => 750);


//$upload_filelocation = '../../../uploaded/mediarelations/data_'.$id_mediarelation.'/';


if ($_SERVER['REQUEST_METHOD'] == 'POST' AND isset($_FILES['image'])) {
	//if( $_FILES['image']['size'] < $max_file_size ){
	if(( $_FILES['image']['size'] < $max_file_size )||( $_FILES['image']['size'] >= $max_file_size )){
		// get file extension
		$host = "172.16.8.101";
		$user = "transcp_iml";
		$pass = "g4r4m4s1n";
		$dbName = "transmediamprsdb"; mysql_connect($host, $user, $pass);	mysql_select_db($dbName)
		or die ("Connect Failed !! : ".mysql_error());
		$id_mediarelation	= $_POST['id_mediarelation'];
		
		$ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
	//	$thumbwidth = '270'; $thumbheight = '150';
	//	$width = '1350'; $height = '750';		
		$thumbwidth = '142'; $thumbheight = '95';
		$width = '300'; $height = '201';		
		$upload_thumbfilerealname= $thumbwidth.'x'.$thumbheight.'_'.$_FILES['image']['name'];
		$upload_thumbfilename= $thumbwidth.'x'.$thumbheight.'_'.$_FILES['image']['name'];
		$upload_filelocation = '../../../uploaded/mediarelations/data_'.$id_mediarelation.'/';
		$upload_filerealname =  $width.'x'.$height.'_'.$_FILES["image"]["name"];
		$upload_filesize = $_FILES["image"]["size"];
		$special = array('/','!','&','*',' ','-','#');
		$new_file_name = strtolower(str_replace(' ',' ',str_replace($special,'',$upload_filerealname)));

		if (in_array($ext, $valid_exts)) {
			/* resize image */
			foreach ($sizes as $w => $h) {
				$files[] = resize($w, $h);
				$con = mysql_connect('172.16.8.101','transcp_iml','g4r4m4s1n');
				mysql_select_db('transmediamprsdb',$con);
				mysql_query("UPDATE tblmediarelation SET 
				upload_thumbfilerealname='$upload_thumbfilerealname',
				upload_thumbfilename='$upload_thumbfilename',
				upload_thumbfilesize='$upload_thumbfilesize',
				upload_thumbfilelocation='$upload_thumbfilelocation',
				upload_filerealname='$upload_filerealname', upload_filename='$new_file_name', 
				upload_filelocation='$upload_filelocation', upload_filesize='$upload_filesize' WHERE id_mediarelation='$id_mediarelation' ");
			}
			$msg = 'File Has Been Uploaded, Please Taken "Refresh Button"';
		} else {
			$msg = 'Unsupported file';
		}
	} else{
		$msg = 'Please upload image smaller than 200KB';
	}
}
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>MPR Upload</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="wrap">
		<?php if(isset($msg)): ?>
			<p class='alert'><?php echo $msg ?></p>
		<?php endif ?>
		
		<!-- file uploading form 
		<form id="myForm" action="" method="post" enctype="multipart/form-data">
			<label>
				<span>Choose image</span>
				<input type="file" name="image" accept="image/*" />
			</label>
			<input type="submit" value="Upload" />
		</form> -->
		
		<!--?php
		// show image thumbnails
		if(isset($files)){
			foreach ($files as $image) {
			//	echo "<img class='img' src='{$image}' /><br /><br />";
				echo "<img class='img' src='uploads/data_1/$new_file_name' /><br /><br />";
			}
		}
		?-->
<? //echo "<meta http-equiv=Refresh content=2;url=http://mpr.transtv.co.id/admin.php>";  ?>
	</div>
</body>
</html>