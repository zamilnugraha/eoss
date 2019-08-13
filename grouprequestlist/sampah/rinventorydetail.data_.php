<?php
require 'koneksi.php';koneksi_buka();
?>
<table class="table table-condensed table-bordered table-hover" cellpadding="0" cellspacing="0"><thead>	<tr>		<th style="width:5px">No</th>		<th style="width:150px">Nama Program</th>		<th style="width:250px">Information</th>		<th style="width:10px">Option</th>	</tr></thead><tbody>
	<?php 		$i = 1;		$jml_per_halaman = 2;
		$jml_data = mysql_num_rows(mysql_query("SELECT * FROM vw_request_inventory ORDER BY id_reqinventory ASC"));
		$jml_halaman = ceil($jml_data / $jml_per_halaman);		
		// query pada saat mode pencarian
		if(isset($_POST['cari'])) {
			$kunci = $_POST['cari'];
			echo "<strong>Hasil pencarian untuk kata kunci $kunci</strong>";
			$query = mysql_query("SELECT * FROM vw_request_inventory WHERE user_name LIKE '%$kunci%' OR kebutuhan_descr LIKE '%$kunci%'");
		// query jika nomor halaman sudah ditentukan
		} elseif(isset($_POST['halaman'])) {			$halaman = $_POST['halaman'];			$i = ($halaman - 1) * $jml_per_halaman  + 1;			$query = mysql_query("SELECT * FROM vw_request_inventory LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman");		}else{			$query = mysql_query("SELECT * FROM vw_request_inventory LIMIT 0, $jml_per_halaman");		}
		while($data = mysql_fetch_array($query)) 		{		$output_dir = '../dc9144e0ece8bcd25dd3a4dcb7b305a3/rinventory_img/data_'.$data['id_reqinventory'].'/';		$output_dirx = '../dc9144e0ece8bcd25dd3a4dcb7b305a3/rinventory_img/data_'.$data['id_reqinventory'].'/';		$output_dirgallery = 'dc9144e0ece8bcd25dd3a4dcb7b305a3/rinventory_img/data_'.$data['id_reqinventory'].'/';		#$outputvdo_dir = 'http://'.$_SERVER['SERVER_NAME'].'/transmediatalent/mycpanel/staff/img/checklist.png';			##$outputvdo_dir = 'mycpanel/staff/img/checklist.png';	
	?>
	<tr>
		<td><?php echo $i ?></td>		<td><?php echo $data['nama_program'] ?></td>		<td>		<?php 		echo 'Peminjam : <b>'.$data['user_name'].'</b><br> Nik : <b>'.$data['user_nik'].'</b><br> Telpon : <b>'.$data['user_telpon'].'</b><br>		Tgl ReQ : <b>'.$data['date_request'].'</b><br> Tgl Pinjam : <b>'.$data['date_pinjam'].'</b><br> Tgl Selesai : <b>'.$data['date_selesai'].'</b><br>		Keperluan : <b>'.$data['kebutuhan_descr'].'</b><br> Created By : <b>'.$data['user_realname'].' ('.$data['createdby_nik'].' - '.$data['telpon'].')</b><br>';		?>		</td>		<!-- START Upload Big Banner Bagian Terkait Detail -->		<?php if($data['picture_items_name']!=''){?>		<td>			<a href="#dialog-progbannerdetailview" id="<?php echo $data['id_reqinventory'] ?>" class="viewbanner" data-toggle="modal" title="<?php echo $data['items_name'] ?>">			<center><img src="<?php echo $output_dir.$data['picture_items_name'] ?>" width="50%" height="50%"></center><br>		</td>		<?php }else{ ?>		<td>				<?php //include "myupload/index.php"; ?>									<!-- upload DATA -->					<head>				<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>				<script src="http://malsup.github.com/jquery.form.js"></script>				<style>				/*form { display: block; margin: 20px auto; background: #fff; border-radius: 10px; padding: 15px  width:5px;}*/				#progress { position:relative; width:150px; border: 1px solid #ddd; padding: 1px; border-radius: 3px; }				#bar { background-color: #B4F5B4; width:0%; height:20px; border-radius: 3px; }				#percent { position:absolute; display:inline-block; top:3px; left:48%; }				</style>				</head>				<body>				<?php 				$host = "172.16.8.132";				$user = "transcp_iml";				$pass = "g4r4m4s1n";				$dbName = "broadcastdb";				mysql_connect($host, $user, $pass);				mysql_select_db($dbName)				or die ("Connect Failed !! : ".mysql_error());				?>				<form id="myForm" action="myupload/upload.php" method="post" enctype="multipart/form-data" style="width:10%;">				<!-- Browse File-->					 <input type="hidden" name="id_reqinventory" value="<?php echo $data['id_reqinventory']; ?>" >					 <input type="file"  size="60" name="myfile" style="width:200px;">				  				 <div id="progress">						<div id="bar"></div>						<div id="percent">0%</div >				</div>					 <input type="submit" value="Upload" style="width:50px;">				 </form>				<br/>									<div id="message"></div>				<script>				$(document).ready(function()				{					var options = { 					beforeSend: function() 					{						$("#progress").show();						//clear everything						$("#bar").width('0%');						$("#message").html("");						$("#percent").html("0%");					},					uploadProgress: function(event, position, total, percentComplete) 					{						$("#bar").width(percentComplete+'%');						$("#percent").html(percentComplete+'%');										},					success: function(data) 					{						$("#bar").width('100%');						$("#percent").html('100%');					},					complete: function(response) 					{						$("#message").html("<font color='blue'>"+response.responseText+"</font>");					},					error: function()					{						$("#message").html("<font color='red'> ERROR: unable to upload files</font>");					}					 				}; 					 $("#myForm").ajaxForm(options);				});				</script>				</body>						<!-- END UPLOAD DATA -->					<!-- PROSES UPLOAD DATA -->					<?php				$host = "172.16.8.132";				$user = "transcp_iml";				$pass = "g4r4m4s1n";				$dbName = "broadcastdb";					mysql_connect($host, $user, $pass);				mysql_select_db($dbName)				or die ("Connect Failed !! : ".mysql_error());				//$id_reqinventory	= $_POST['id_reqinventory'];				$id_reqinventory	= $data['id_reqinventory'];				$output_dir = '/dc9144e0ece8bcd25dd3a4dcb7b305a3/rinventory_img/data_'.$data['id_reqinventory'].'/';				$picture_staffname = $_FILES["myfile"]["name"];				$picture_size = $_FILES["myfile"]["size"];				$picture_location = '/dc9144e0ece8bcd25dd3a4dcb7b305a3/rinventory_img/data_'.$data['id_reqinventory'].'/';				if(isset($_FILES["myfile"]))				{					//Filter the file types , if you want.					if ($_FILES["myfile"]["error"] > 0)					{					  echo "Error: " . $_FILES["file"]["error"] . "<br>";					}					else					{						//move the uploaded file to uploads folder;					if(move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir. $_FILES["myfile"]["name"]))					{						mysql_query("UPDATE request_inventory SET picture_items_name='$picture_items_name', 						picture_items_location='$picture_items_location', picture_items_size='$picture_items_size' 						WHERE id_reqinventory='".$data['id_reqinventory']."' ");											}else{						echo "Gagal Uplaod";					}					 echo "Uploaded File :".$_FILES["myfile"]["name"];					 echo "<br>"; echo $output_dir;					# echo " <meta http-equiv=\"refresh\" content=\"0\" href=\"linventory.data.php\" /> ";						#echo "<meta http-equiv=Refresh content=2;url=bagiandetail.data.php>"; 					}				}				?>				<!-- END PROSES UPLOAD DATA -->			</td>		<?php } ?>		<!-- END Upload Big Banner Bagian Terkait Detail -->						<td>
			<a href="#dialog-rinventorydetail" id="<?php echo $data['id_reqinventory'] ?>" class="ubah" data-toggle="modal">				<i class="icon-pencil"></i>			</a>					<a href="#" id="<?php echo $data['id_reqinventory'] ?>" class="hapus">				<i class="icon-trash"></i>			</a>		</td>	</tr>
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
	?>		<li class="halaman" id="<?php echo $jml_halaman ?>"><a href="#">last</a></li>  </ul>
</div>
<?php } ?>
<?php koneksi_tutup(); ?>
