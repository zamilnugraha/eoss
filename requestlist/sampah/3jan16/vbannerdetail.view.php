<?
require 'koneksi.php';
$id_mediarelation = $_POST['id'];
if($id_mediarelation> 0) { 
} else {
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
		$qvmediarelations = mysql_query("SELECT *	FROM tblmediarelation WHERE id_mediarelation = '".$id_mediarelation."'");
