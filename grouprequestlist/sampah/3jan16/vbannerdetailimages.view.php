<?php

require 'koneksi.php';
koneksi_buka();

$id_mediarelation = $_POST['id'];
#$data = mysql_fetch_array(mysql_query("SELECT * FROM video_detail WHERE id_videodetail=".$id_videodetail"));

if($id_mediarelation> 0) { 
	$id_mediarelation	= $_POST['id'];
	$title_mediarelation = $_POST['title_mediarelation'];
	$descr_mediarelation = $_POST['descr_mediarelation'];
	
	$created_date = date('j F Y');
	$updated_date = date('j F Y');
	$created_by = $_SESSION['nik'];
	$updated_by = $_SESSION['nik'];
	
} else {
	$id_mediarelation	= "";
	$title_mediarelation = "";
	$descr_mediarelation = "";
	
	$created_date = "";
	$updated_date = "";
	$created_by = "";
	$updated_by = "";
}



?>

<script type="text/javascript" src="scripts/jquery.min.js"></script>

<script type="text/javascript" src="scripts/jquery.form.js"></script>



<style>



body

{

font-family:arial;

}

.preview

{

width:200px;

border:solid 1px #dedede;

padding:10px;

}

#preview

{

color:#cc0000;

font-size:12px

}



</style>



<script type="text/javascript" src="./js/flowplayer-3.2.6.min.js"></script>	
<script type="text/javascript" src="./js/jquery.js"></script>

		<?php

		$qvimg = mysql_query("SELECT *	FROM tblmediarelation WHERE id_mediarelation = '".$id_mediarelation."'");
		$rvimg = mysql_fetch_object($qvimg);
		$bloc = 'http://'.$_SERVER['SERVER_NAME'].'/transmediamprx/uploaded/mediarelations/data_'.$id_mediarelation.'/'.$rvimg->upload_filename;
		$thumb = 'http://'.$_SERVER['SERVER_NAME'].'/transmediamprx/uploaded/mediarelations/data_'.$id_mediarelation.'/'.$rvimg->upload_thumbfilename;
		$nofile = 'http://'.$_SERVER['SERVER_NAME'].'/transmediamprx/mycpanel/images/nouploaded.png';
		$title = $rvimg->title_mediarelation;		
		?>
		
		<?php if($rvimg->upload_filename==''){?>
		<center><img src="<?php echo $nofile; ?>" width="30%" height="30%" title="No File Images Uploaded"></img></center>
		<?php }else { ?>
		<center>
		<script>
			function basicPopup(url) {
				popupWindow = window.open(url,'popUpWindow','height=auto,width=800px,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes')
			}
			function closeWin() {
				myWindow.close();
			}
		</script>
			<?php 
				$pdf = 'http://'.$_SERVER['SERVER_NAME'].'/transmediamprx/images/pdf_icon.png';
			?>
				<a href="#" style="position:relative;margin-left:5px;" onclick="return basicPopup('<?=$bloc;?>')" title="<?=$rvimg->title_mediarelation;?>">
					<center><img src="<?=$thumb;?>" width="auto" height="auto" title="<?=$title;?>"></img></center>
				</a>
		</center>
		<?php } ?>

<br><hr>
<div style="font-size:12px;"><strong>Please Upload File Image In Here. Thankyou</strong></div>
				 
		<form id="myForm" action="myupload/upload.php" method="post" enctype="multipart/form-data">
			<label>
				<span>Choose image</span>
				 <input type="hidden" name="id_mediarelation" value="<?php echo $id_mediarelation; ?>" >
				<input type="file" name="image" style="width:200px;" accept="image/*" />
			</label>
			<input type="submit" value="Upload" />
		</form>
<hr>
<?php
koneksi_tutup();
?>