<?php
require 'koneksi.php';
koneksi_buka();

$id_mediapartner = $_POST['id'];
$data = mysql_fetch_array(mysql_query("SELECT * FROM tblmediapartner WHERE id_mediapartner =".$id_mediapartner.""));

if($id_mediapartner > 0) { 
	$title_mediapartner = $data['title_mediapartner'];
	$descr_mediapartner =  $data['descr_mediapartner'];

} else {
	$title_mediapartner = '';
	$descr_mediapartner = '';
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

<table class="table table-condensed table-bordered table-hover" style="margin-left:5px;width: 95%;" cellpadding="0" cellspacing="0">
<thead>
	<tr>
		<!--<th style="width:5px">No</th>-->
		<th style="width:100px">Description Detail</th>
	</tr>
</thead>
<tbody>
<tr>
		<!--<td><!?php echo $i ?></td>-->
		<td>
		<table><tr>
		
		<?php 
		//echo '<th>Subject </th>';
		//echo '<th>Deskripsi </th>'; 
		?>
		</tr>
		<tr>
		<?php 
			//echo '<td>'.$data['title_mediapartner'].'</td>';
			echo '<td>'.$data['descr_mediapartner'].'</td>';
		?>
		<!--?php 
		//echo '<b><u>'.$data['title'].'</u></b><br>'.$data['kebutuhan_descr'] 
		echo 'Meeting Name : <b>'.ucwords($data['title']).'</b><br>';
		echo 'Deskripsi : <b>'.ucwords($data['kebutuhan_descr']).'</b><br>';
		echo 'Request By : <b>'.ucwords($data['request_by']).'</b><br>';
		echo 'Start Time Of Meeting : <b>'.ucwords($data['starttime_available']).'</b><br>';
		echo 'End Time Of Meeting: <b>'.ucwords($data['endtime_available']).'</b><br>';
		?-->	
		
		</tr></table>
		</td>
		
</tr>		
</tbody>
</table>

<?php
	koneksi_tutup();
?>



