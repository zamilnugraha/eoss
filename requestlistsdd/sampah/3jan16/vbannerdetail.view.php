<?
require 'koneksi.php';koneksi_buka();
$id_mediarelation = $_POST['id'];#$data = mysql_fetch_array(mysql_query("SELECT * FROM video_detail WHERE id_videodetail=".$id_videodetail"));
if($id_mediarelation> 0) { 	$id_mediarelation	= $_POST['id'];	$title_mediarelation = $_POST['title_mediarelation'];	$descr_mediarelation = $_POST['descr_mediarelation'];		$created_date = date('j F Y');	$updated_date = date('j F Y');	$created_by = $_SESSION['nik'];	$updated_by = $_SESSION['nik'];	
} else {	$id_mediarelation	= "";	$title_mediarelation = "";	$descr_mediarelation = "";		$created_date = "";	$updated_date = "";	$created_by = "";	$updated_by = "";
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
		<?
		$qvmediarelations = mysql_query("SELECT *	FROM tblmediarelation WHERE id_mediarelation = '".$id_mediarelation."'");		//$rvplay = mysql_fetch_array($qvplay);		$rvmediarelations = mysql_fetch_object($qvmediarelations);	//	$bloc = 'http://'.$_SERVER['SERVER_NAME'].'/transmediamprx/uploaded/mediarelations/data_'.$id_mediarelation.'/'.$rvplay->upload_filepdfname;		$thumb = 'http://'.$_SERVER['SERVER_NAME'].'/transmediamprx/uploaded/mediarelations/data_'.$id_mediarelation.'/'.$rvmediarelations->upload_thumbfilename;		$nofile = 'http://'.$_SERVER['SERVER_NAME'].'/transmediamprx/mycpanel/images/nouploaded.png';		$title = $rvmediaexposure->title_mediarelation;				?>				<? if($rvmediarelations->upload_filepdfname==''){?>		<center><img src="<? echo $nofile; ?>" width="30%" height="30%" title="No File PDF Uploaded"></img></center>		<? }else { ?>		<center>			<? 				$unduh = 'http://'.$_SERVER['SERVER_NAME'].'/transmediamprx/uploaded/mediarelations/data_'.$rvmediarelations->id_mediarelation.'/'.$rvmediarelations->upload_filepdfname;							$pdf = 'http://'.$_SERVER['SERVER_NAME'].'/transmediamprx/images/pdf_icon.png';			?>				<script>															function basicPopup(url) {					popupWindow = window.open(url,'popUpWindow','height=auto,width=900px,left=50,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes')				}			</script>														&nbsp;						<a href="#" onclick="return basicPopup('<? echo $unduh; ?>')" title="<?=$rvmediarelations->title_mediarelation;?>" style="position:relative;margin-left:5px;">				<img src="<?=$pdf; ?>" width="30%" height="30%" title="View Pdf" style="margin-top:5px;"></img>			</a>		</center>		<? } ?>
<br><hr><div style="font-size:12px;"><strong>Please Upload File PDF In Here. Thankyou</strong></div>				 		<form id="myForm" action="myupload/uploadpdf.php" method="post" enctype="multipart/form-data">			<label>				<span>Choose File PDF</span>				 <input type="hidden" name="id_mediarelation" value="<? echo $id_mediarelation; ?>" >				<!--<input type="file" name="image" accept="image/*" />-->				<input type="file"  size="60" name="myfile" style="width:200px;" accept="pdf/*">			</label>			<input type="submit" value="Upload" />		</form><hr><?koneksi_tutup();?>