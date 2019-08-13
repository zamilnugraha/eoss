<?php
function resize($width, $height){
	
	/* Get original image x y*/
	list($w, $h) = getimagesize($_FILES['image']['tmp_name']);
	/* calculate new image size with ratio */
	$ratio = max($width/$w, $height/$h);
	$h = ceil($height / $ratio);
	$x = ($w - $width / $ratio) / 2;
	$w = ceil($width / $ratio);
	/* new file name */
	//$id_mediarelation	= $_GET['id_mediarelation'];
	$host = "172.16.8.101";
	$user = "transcp_iml";
	$pass = "g4r4m4s1n";
	$dbName = "transmediamprsdb"; mysql_connect($host, $user, $pass); mysql_select_db($dbName)
	or die ("Connect Failed !! : ".mysql_error());
	$id_mediarelation	= $_POST['id_mediarelation'];
	//$id_mediarelation	= '28';
	$path = '../../../uploaded/mediarelations/data_'.$id_mediarelation.'/'.$width.'x'.$height.'_'.$_FILES['image']['name'];

	/* read binary data from image file */
	$imgString = file_get_contents($_FILES['image']['tmp_name']);

	/* create image from string */
	$image = imagecreatefromstring($imgString);
	$tmp = imagecreatetruecolor($width, $height);
	imagecopyresampled($tmp, $image,
  	0, 0,
  	$x, 0,
  	$width, $height,
  	$w, $h);
	/* Save image */
	switch ($_FILES['image']['type']) {
		case 'image/jpeg':
			imagejpeg($tmp, $path, 100);
			break;
		case 'image/png':
			imagepng($tmp, $path, 0);
			break;
		case 'image/gif':
			imagegif($tmp, $path);
			break;
		default:
			exit;
			break;
	}
	return $path;
	/* cleanup memory */
	imagedestroy($image);
	imagedestroy($tmp);
}
?>