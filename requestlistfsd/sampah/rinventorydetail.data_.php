<?php
require 'koneksi.php';
?>
<table class="table table-condensed table-bordered table-hover" cellpadding="0" cellspacing="0">
	<?php 
		$jml_data = mysql_num_rows(mysql_query("SELECT * FROM vw_request_inventory ORDER BY id_reqinventory ASC"));
		$jml_halaman = ceil($jml_data / $jml_per_halaman);
		// query pada saat mode pencarian
		if(isset($_POST['cari'])) {
			$kunci = $_POST['cari'];
			echo "<strong>Hasil pencarian untuk kata kunci $kunci</strong>";
			$query = mysql_query("SELECT * FROM vw_request_inventory WHERE user_name LIKE '%$kunci%' OR kebutuhan_descr LIKE '%$kunci%'");
		// query jika nomor halaman sudah ditentukan
		} elseif(isset($_POST['halaman'])) {
		while($data = mysql_fetch_array($query)) 
	?>
	<tr>
		<td><?php echo $i ?></td>
			<a href="#dialog-rinventorydetail" id="<?php echo $data['id_reqinventory'] ?>" class="ubah" data-toggle="modal">
	<?php
		$i++;
		}
	?>
</tbody>
</table>

<?php if(!isset($_POST['cari'])) { ?>
<!-- untuk menampilkan menu halaman -->
<div class="pagination pagination-right">
    <?php
	$halaman_sekarang = $_POST['halaman']; 
	$next = $halaman_sekarang + 1;
	$prev = $halaman_sekarang - 1;
	$acuan= ceil($halaman_sekarang/10);
	$mod = ceil($jml_halaman/10);
?>
  <ul>
  		<li class="halaman" id="1"><a href="#">first</a></li>
	<?php
		if($halaman_sekarang != $jml_halaman ){	
  			echo '<li class="halaman" id="'.$next.'"><a href="#">next &raquo;</a></li>';
		}
		if($jml_halaman > 10){
			if($halaman_sekarang > 10){
	  			echo '<li class="halaman" id="1"><a href="#">1</a></li>';
				echo '<li class="halaman" id="2"><a href="#">2...</a></li>';
			}
			
			if($acuan <= 1){ $awalan = 1;}
			else{ $awalan = $acuan*10-10; }
				
			$ahiran = $awalan + 11;
			if($ahiran > $jml_halaman)
				$ahiran = $jml_halaman ;
			
				for($i = $awalan; $i <= $ahiran; $i++) {
					echo '<li class="halaman" id="'.$i.'"><a href="#">'.$i.'</a></li>';
				} 
				
			if($acuan  != ceil($jml_halaman/10) ){
				echo '<li class="halaman" id="'.($jml_halaman-1).'"><a href="#">...'.($jml_halaman-1).'</a></li>';
				echo '<li class="halaman" id="'.$jml_halaman.'"><a href="#">'.$jml_halaman.'</a></li>';

			}
		}
		else{
			for($i = 1; $i <= $jml_halaman; $i++) {
				echo '<li class="halaman" id="'.$i.'"><a href="#">'.$i.'</a></li>';
			} 
		}
		if($halaman_sekarang > 1 ){
			echo '<li class="halaman" id="'.$prev.'"><a href="#">&laquo; previous</a></li>';
		}
	?>
</div>
<?php } ?>
<?php 