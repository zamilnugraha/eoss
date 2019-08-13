<?php
require 'koneksi.php';
koneksi_buka();
@session_start();
	$id_mediarelation = $_POST['id'];
	$created_date = date('Y-m-d');
	$updated_date = date('Y-m-d');
	$created_by = $_SESSION['nik'];
	$updated_by = $_SESSION['nik'];
$data = mysql_fetch_array(mysql_query("SELECT * FROM tblmediarelation WHERE id_mediarelation=".$id_mediarelation.""));
if($id_mediarelation > 0) { 

	$title_mediarelation = $data['title_mediarelation'];	
	$descr_mediarelation = $data['descr_mediarelation'];
	$mpr_cat = $data['mpr_cat'];
	$media_name = $data['media_name'];	
	$date_print = $data['date_print'];
	$page_article = $data['page_article'];
	$url = $data['url'];
	$grafik_month = $data['grafik_month'];
	$grafik_year = $data['grafik_year'];
	$telephone = $data['telephone'];
	$fax = $data['fax'];
	$email = $data['email'];
	$email_others = $data['email_others'];
	$mpr_jenismedia = $data['mpr_jenismedia'];
	$mpr_lokasimedia = $data['mpr_lokasimedia'];
	
} else {
	$title_mediarelation = '';
	$descr_mediarelation = '';	
	$mpr_cat = '';	
	$media_name = '';	
	$date_print = '';	
	$page_article = '';		
	$url = '';		
	$grafik_month = '';	
	$grafik_year = '';
	$telephone = '';
	$fax = '';
	$email = '';
	$email_others = '';
	$mpr_jenismedia = '';
	$mpr_lokasimedia = '';
}
?>

<script type="text/javascript" src="scripts/jquery.min.js"></script>
<script type="text/javascript" src="scripts/jquery.form.js"></script>

<!-- DatePicker -->
<link rel="stylesheet" href="datepicker/base/jquery.ui.all.css" type="text/css">
 <script type="text/javascript" src="datepicker/jquery.js"></script>
 <script type="text/javascript" src="datepicker/jquery.ui.core.js"></script>
 <script type="text/javascript" src="datepicker/jquery.ui.datepicker.js"></script>
 <script type="text/javascript" src="datepicker/jquery.ui.widget.js"></script>
 <link rel="stylesheet" type="text/css" href="datep/jquery.datetimepicker.css"/>		

 <script src="datep/jquery.js"></script>
<script src="datep/jquery.datetimepicker.js"></script>
<?php 
	//$datenow = date('YY "/" MM "/" DD');
	//$hitdatenow = $datenow + 6;
	$datenow = '-1970/01/01';
	$hitdatenow = '+1970/01/08';
?>

<script>
		jQuery('#date_print').datetimepicker({
			changeMonth: true,
			changeYear: true ,
			timepicker:false,
		    format:'j F Y'
			});   
</script>
<script type="text/javascript" src="js/js.php"></script>
<script language="javascript" type="text/javascript" src="js/tiny_mce/tiny_mce.js"></script>
<script language="javascript" type="text/javascript" src="js/tiny_mce/tiny_mce_config.js"></script>
	<script>
		function closePopup() {
				closepopupWindow = window.close();                                                 
			}
		</script>	
<form name="myForm" class="form-horizontal" id="form-bagiandetail" style="margin-left:-15px;overflow:auto;height:395px;">

	<div class="control-group">
		<label class="control-label" for="title_mediarelation">Subject</label>
		<div class="controls">
			<input type="text" id="title_mediarelation" class="input-large" name="title_mediarelation" style="width:320px;" value="<?php echo $title_mediarelation ?>" placeholder="Please fill in the Title Subject field">
		</div>
	</div>			
<!--
	<div class="control-group" style="margin-top:-20px;">
		<label class="control-label" for="descr_mediarelation">Description</label>
		<div class="controls">
			<textarea id="descr_mediarelation" name="descr_mediarelation" placeholder="Please Fill Your Description" style="width:320px;"><?php echo $descr_mediarelation ?></textarea>
		</div>
	</div>
-->	
	<div class="control-group" style="margin-top:-20px;">
		<label class="control-label" for="descr_mediarelation">Description</label>
		<div class="controls">
			<textarea id="descr_mediarelation" name="descr_mediarelation" placeholder="Please Fill Your Description" style="width:320px;"><?php echo $descr_mediarelation ?></textarea>
		</div>
	</div>
	
	<div class="control-group" style="margin-top:-20px;">
			<label class="control-label" for="mpr_cat">Categories</label>
			<div class="controls">
				<select class="input-medium" style="width:320px;" name="mpr_cat">	
				<?
					$con = mysql_connect("172.16.8.101","transmedia_iml","g4r4m4s1n");
					mysql_select_db("transmediamprsdb",$con); //@session_start();
					$qvcat = mysql_query("SELECT mpr_cat,mpr_catname,mpr_bagianname FROM tblmprcat WHERE mpr_bagianname='Media Relation' AND mpr_cat !='9' ORDER by mpr_cat ASC");				
				if($id_mediarelation > 0) {
					$con = mysql_connect("172.16.8.101","transmedia_iml","g4r4m4s1n");
					mysql_select_db("transmediamprsdb",$con);
					//@session_start();
					$qvcat2 = mysql_query("SELECT * FROM vw_tblmediarelation WHERE id_mediarelation= '".$id_mediarelation."'");
					$rvcat2 = mysql_fetch_object($qvcat2);
						echo "<option value= '$rvcat2->mpr_cat' style=background:red;color:#fff;> $rvcat2->mpr_catname ($rvcat2->mpr_bagianname)</option>";
				}
				
				while($rvcat = mysql_fetch_object($qvcat)) 
				{
						echo "<option value= '$rvcat->mpr_cat'> $rvcat->mpr_catname ($rvcat->mpr_bagianname)</option>";
				}
				?>
				</select>
			</div>
	</div>				

	<div class="control-group" style="margin-top:-20px;">
		<label class="control-label" for="media_name">Media Name</label>
		<div class="controls">
			<input type="text" id="media_name" class="input-large" name="media_name" style="width:320px;" value="<?php echo $media_name ?>" placeholder="Please fill in the user name field">
		</div>
	</div>	
	
	<div class="control-group" style="margin-top:-20px;">
		<label class="control-label" for="date_print">Date Print</label>
		<div class="controls">
			<input type="text" id="date_print" class="input-large" name="date_print" style="width:320px;" value="<?php echo $date_print ?>" placeholder="Please Choose Date Request">
		</div>
	</div>		

	<div class="control-group" style="margin-top:-20px;">
		<label class="control-label" for="page_article">Page Article</label>
		<div class="controls">
			<input type="text" id="page_article" class="input-large" name="page_article" style="width:320px;" value="<?php echo $page_article ?>" placeholder="Please fill in the user name field">
		</div>
	</div>	
	
	<div class="control-group" style="margin-top:-20px;">
		<label class="control-label" for="url">URL</label>
		<div class="controls">
			<input type="text" id="url" class="input-large" name="url" style="width:320px;" value="<?php echo 'http://'.$url ?>" placeholder="Please fill in the user name field">
		</div>
	</div>		
	
	<div class="control-group" style="margin-top:-20px;">
		<label class="control-label" for="telephone">No.Telp</label>
		<div class="controls">
			<input type="text" id="telephone" class="input-large" name="telephone" style="width:320px;" value="<?php echo $telephone ?>" placeholder="Please fill in the No Telephone field">
		</div>
	</div>	
	
	<div class="control-group" style="margin-top:-20px;">
		<label class="control-label" for="fax">fax</label>
		<div class="controls">
			<input type="text" id="fax" class="input-large" name="fax" style="width:320px;" value="<?php $fax ?>" placeholder="Please fill in the fax field">
		</div>
	</div>	
	
	<div class="control-group" style="margin-top:-20px;">
		<label class="control-label" for="email">Email</label>
		<div class="controls">
			<input type="text" id="email" class="input-large" name="email" style="width:320px;" value="<?php $email ?>" placeholder="Please fill in the email field">
		</div>
	</div>	
	
	<div class="control-group" style="margin-top:-20px;">
		<label class="control-label" for="email_others">Email Others</label>
		<div class="controls">
			<input type="text" id="email_others" class="input-large" name="email_others" style="width:320px;" value="<?php $email_others ?>" placeholder="Please fill in the email others field">
		</div>
	</div>	
	<div class="control-group" style="margin-top:-20px;">
			<label class="control-label" for="mpr_jenismedia">Jenis Media</label>
			<div class="controls">
				<select class="input-medium" style="width:320px;" name="mpr_jenismedia">	
				<?
					$con = mysql_connect("172.16.8.101","transmedia_iml","g4r4m4s1n");
					mysql_select_db("transmediamprsdb",$con); //@session_start();
					$qvcat = mysql_query("SELECT mpr_jenismedia,jenis_media FROM tbljenismediacat ORDER by mpr_jenismedia ASC");				
				if($id_mediarelation > 0) {
					$con = mysql_connect("172.16.8.101","transmedia_iml","g4r4m4s1n");
					mysql_select_db("transmediamprsdb",$con);
					//@session_start();
					$qvcat2 = mysql_query("SELECT * FROM vw_tblmediarelation WHERE id_mediarelation= '".$id_mediarelation."'");
					$rvcat2 = mysql_fetch_object($qvcat2);
						echo "<option value= '$rvcat2->mpr_jenismedia' style=background:red;color:#fff;> $rvcat2->jenis_media</option>";
				}
				
				while($rvcat = mysql_fetch_object($qvcat)) 
				{
						echo "<option value= '$rvcat->mpr_jenismedia'> $rvcat->jenis_media</option>";
				}
				?>
				</select>
			</div>
	</div>			
	
	<div class="control-group" style="margin-top:-20px;">
			<label class="control-label" for="mpr_lokasimedia">Lokasi Media</label>
			<div class="controls">
				<select class="input-medium" style="width:320px;" name="mpr_lokasimedia">	
				<?
					$con = mysql_connect("172.16.8.101","transmedia_iml","g4r4m4s1n");
					mysql_select_db("transmediamprsdb",$con); //@session_start();
					$qvcat = mysql_query("SELECT mpr_lokasimedia,lokasi_media FROM tbllokasimedia WHERE mpr_lokasimedia!='0' ORDER by mpr_lokasimedia ASC");				
				if($id_mediarelation > 0) {
					$con = mysql_connect("172.16.8.101","transmedia_iml","g4r4m4s1n");
					mysql_select_db("transmediamprsdb",$con);
					//@session_start();
					$qvcat2 = mysql_query("SELECT * FROM vw_tblmediarelation WHERE id_mediarelation= '".$id_mediarelation."'");
					$rvcat2 = mysql_fetch_object($qvcat2);
						echo "<option value= '$rvcat2->mpr_lokasimedia' style=background:red;color:#fff;> $rvcat2->lokasi_media</option>";
				}
				
				while($rvcat = mysql_fetch_object($qvcat)) 
				{
						echo "<option value= '$rvcat->mpr_lokasimedia'> $rvcat->lokasi_media</option>";
				}
				?>
				</select>
			</div>
	</div>				

		
</form>

<?php
#@session_destroy();
	koneksi_tutup();
?>

