<?phprequire 'koneksi.php';koneksi_buka();$id_mediapartner = $_POST['id'];#$data = mysql_fetch_array(mysql_query("SELECT * FROM video_detail WHERE id_videodetail=".$id_videodetail"));if($id_mediapartner> 0) { 	$id_mediapartner	= $_POST['id'];	$title_mediapartner = $_POST['title_mediapartner'];	$descr_mediapartner = $_POST['descr_mediapartner'];		$created_date = date('j F Y');	$updated_date = date('j F Y');	$created_by = $_SESSION['nik'];	$updated_by = $_SESSION['nik'];} else {	$id_mediapartner	= "";	$title_mediapartner = "";	$descr_mediapartner = "";		$created_date = "";	$updated_date = "";	$created_by = "";	$updated_by = "";}?><script type="text/javascript" src="scripts/jquery.min.js"></script><script type="text/javascript" src="scripts/jquery.form.js"></script><style>body{font-family:arial;}.preview{width:200px;border:solid 1px #dedede;padding:10px;}#preview{color:#cc0000;font-size:12px}</style><script type="text/javascript" src="./js/flowplayer-3.2.6.min.js"></script>	<script type="text/javascript" src="./js/jquery.js"></script>		<?php		$qvplay = mysql_query("SELECT *	FROM tblmediapartner WHERE id_mediapartner = '".$id_mediapartner."'");		$rvplay = mysql_fetch_array($qvplay);		$bloc = 'http://'.$_SERVER['SERVER_NAME'].':81/transmediamprs/images/mediapartner/data_'.$id_mediapartner.'/'.$rvplay['upload_filename'];		?>		<img src="<?php echo $bloc ?>"></img><br><hr><div style="font-size:12px;"><strong>Please Upload File (PDF/Image) In Here. Thankyou</strong></div>				<form id="myForm" action="myupload/upload.php" method="post" enctype="multipart/form-data" style="width:10%;">				<!-- Browse File-->					 <input type="hidden" name="id_mediapartner" value="<?php echo $id_mediapartner; ?>" >					 <input type="file"  size="60" name="myfile" style="width:200px;">				 <div id="progress">						<div id="bar"></div>						<div id="percent">0%</div >				</div>					 <input type="submit" value="Upload" style="width:50px;">				 </form>	<hr><?phpkoneksi_tutup();?>