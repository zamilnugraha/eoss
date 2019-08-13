<?php

require 'koneksi.php';

koneksi_buka();
 

?>

<table class="table table-condensed table-bordered table-hover" cellpadding="0" cellspacing="0">
<thead>
	<tr>
		<th style="width:20px"><center>#</center></th>
		<th style="width:120px"><center>Talent Name</center></th>
		<th style="width:230px"><center>Talent Information</center></th>

		<th style="width:80px"><center>Picture</center></th>
		<th style="width:80px"><center>Gallery</center></th>
		<th style="width:80px"><center>Video</center></th>
		<th style="width:120px">Option</th>
	</tr>
</thead>
<tbody>
	<?php 
		$i = 1;
		$jml_per_halaman = 3; 
		$jml_data = mysql_num_rows(mysql_query("SELECT * FROM vw_tsearchdata"));
		$jml_halaman = ceil($jml_data / $jml_per_halaman);

		// query pada saat mode pencarian
		if(isset($_POST['cari']) or isset($_POST['category_sc']) or isset($_POST['televisi_sc']) or isset($_POST['prodyear_sc']) or isset($_POST['prodyear_sc2']) AND
		isset($_POST['halaman'])) 
		{
						$kunci = $_POST['cari'];
						$halaman = $_POST['halaman'];
						$i = ($halaman - 1) * $jml_per_halaman  + 1;
						//filter category
						if($_POST['category_sc'] !=0 ){
							$katagori = $_POST['category_sc'];
							$cate_query = " AND b.id_categories = '$katagori' ";
							if($katagori == '1'){
								$cat = "dan category = Drama";
							}elseif($katagori == '2'){
								$cat = "dan category = Documentary / Feature";
							}elseif($katagori == '3'){
								$cat = "dan category = Variety / Reality";
							}elseif($katagori == '4'){
								$cat = "dan category = Entertainment";
							}elseif($katagori == '5'){
								$cat = "dan category = Children";
							}elseif($katagori == '6'){
								$cat = "dan category = Religious";
							}elseif($katagori == '7'){
								$cat = "dan category = TheaterTrans";
							}elseif($katagori == '8'){
								$cat = "dan category = Tv Movie";
							}
						}
						else{
							$cate_query = "";
						}
						//filter Production Year 1
						if($_POST['prodyear_sc'] !='' ){
							$prodyear = $_POST['prodyear_sc'];
							$pyear_query = " AND (production_year >= '$prodyear'";
							$pyr = "dan production year = $prodyear";
						}
						else{
							$pyear_query = "";
						}	

						//filter Production Year 2
						if($_POST['prodyear_sc2'] !='' ){
							$prodyear2 = $_POST['prodyear_sc2'];
							$pyear_query2 = " AND production_year <= '$prodyear2')";
							$pyr = "dan production year = $prodyear2";
						}
						else{
							$pyear_query2 = "";
						}

						//filter Televisi
						if($_POST['televisi_sc'] !='' ){
							$televisi = $_POST['televisi_sc'];
							$tv_query = " AND tv_station = '$televisi' ";
							$tv = "dan televisi = $televisi";

						}
						else{
							$tv_query = "";
						}
						
						
						echo "<strong>Hasil pencarian untuk kata kunci $kunci $cat $pyr $tv </strong>";
					/**	echo "<strong>Hasil pencarian untuk kata kunci $kunci $cat $pyr $tv </strong>
						<br>SELECT a.id_talentdetail AS id_talentdetail, a.talent_name AS talent_name,  b.categories_name AS categories_name, 
						a.season AS season, a.category_type AS category_type, a.total_episode AS total_episode, a.duration AS duration, a.production_year AS production_year, a.description AS description, 
						a.tv_station AS tv_station, a.picture_name AS picture_name,
						a.gallery_name AS gallery_name,a.gallery_name2 AS gallery_name2,a.gallery_name3 AS gallery_name3, 
						a.vdo_gallery1_name AS vdo_gallery1_name,a.vdo_gallery2_name AS vdo_gallery2_name,a.vdo_gallery3_name AS vdo_gallery3_name 			
						FROM talent_detail a
						LEFT JOIN categories_programs b ON a.program_id = b.id_categories
						WHERE (a.talent_name LIKE '$kunci%') $tv_query $cate_query $pyear_query $pyear_query2 LIMIT 0, $jml_per_halaman";  **/
						

		$query = mysql_query("SELECT * FROM vw_tsearchdata	WHERE (talent_name LIKE '$kunci%') $tv_query $cate_query $pyear_query $pyear_query2 
		ORDER BY id_talentdetail ASC");

			
		// query jika nomor halaman sudah ditentukan

		} elseif(isset($_POST['halaman'])) 
		{
			$halaman = $_POST['halaman'];
			$i = ($halaman - 1) * $jml_per_halaman  + 1;
			$query = mysql_query("SELECT * FROM vw_tsearchdata LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman");
			
		/*	echo "
			SELECT a.id_talentdetail AS id_talentdetail, a.talent_name AS talent_name ,  b.categories_name AS categories_name, 
			a.season AS season, a.total_episode AS total_episode, a.duration AS duration, a.production_year AS production_year, a.description AS description, 
			a.tv_station AS tv_station, a.picture_name AS picture_name, 
			a.gallery_name AS gallery_name,a.gallery_name2 AS gallery_name2,a.gallery_name3 AS gallery_name3, 
			a.vdo_gallery1_name AS vdo_gallery1_name,a.vdo_gallery2_name AS vdo_gallery2_name,a.vdo_gallery3_name AS vdo_gallery3_name	
			FROM talent_detail a
			LEFT JOIN categories_programs b ON a.program_id = b.id_categories ORDER BY id_talentdetail DESC
			LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman"; */
			
		} else {
			$query = mysql_query("SELECT * FROM vw_tsearchdata LIMIT 0, $jml_per_halaman");
			
	/*		echo "SELECT a.id_talentdetail AS id_talentdetail, a.talent_name AS talent_name ,  b.categories_name AS categories_name, 
			a.season AS season, a.category_type AS category_type, a.total_episode AS total_episode, a.duration AS duration, a.production_year AS production_year, a.description AS description, 
			a.tv_station AS tv_station, a.picture_name AS picture_name, 
			a.gallery_name AS gallery_name,a.gallery_name2 AS gallery_name2,a.gallery_name3 AS gallery_name3, 
			a.vdo_gallery1_name AS vdo_gallery1_name,a.vdo_gallery2_name AS vdo_gallery2_name,a.vdo_gallery3_name AS vdo_gallery3_name	
			FROM talent_detail a
			LEFT JOIN categories_programs b ON a.program_id = b.id_categories LIMIT 0, $jml_per_halaman"; */
		}
				
		while($data = mysql_fetch_array($query)) 
		{
		$output_dir = 'http://'.$_SERVER['SERVER_NAME'].'/transmediatalent/dc9144e0ece8bcd25dd3a4dcb7b305a3/picture/bg/data_'.$data['id_talentdetail'].'/';
		$output_dirx = 'http://'.$_SERVER['SERVER_NAME'].'/transmediatalent/dc9144e0ece8bcd25dd3a4dcb7b305a3/picture/nobg/data_'.$data['id_talentdetail'].'/';
		$output_dirgallery = 'http://'.$_SERVER['SERVER_NAME'].'/transmediatalent/dc9144e0ece8bcd25dd3a4dcb7b305a3/picture/gallery/data_'.$data['id_talentdetail'].'/';
		$outputvdo_dir = 'http://'.$_SERVER['SERVER_NAME'].'/transmediatalent/mycpanel/talentdetail/img/checklist.png';	
	?>
	<tr>
		<td><?php #echo $i 
		echo $data['id_talentdetail']?></td>
		<td><?php echo $data['talent_name']?><br>
			<div style="float:right;margin-top:10px;">
			<a href="#dialog-talentdetailview" id="<?php echo $data['id_talentdetail'] ?>" class="view" data-toggle="modal" title="View Data">
			Description
			</a>
			</div>
		</td>
		<td>
		<?php 
		echo '<b>Tgl Lahir : </b>'.$data['dob'].'<br><b>Tinggi Badan : </b>'.$data['tinggibadan_name'].' Cm<br><b>Berat Badan : </b>'.$data['beratbadan_name'].' Kg<br><b>Ukuran Sepatu : </b>'.$data['ukuransepatu_name'].'<br><b>Ukuran Baju : </b>'.$data['ukuranbaju_name'].' (&nbsp;'.$data['ukuranbaju_desc'].' size )<br><b>Bakat : </b>'.$data['skill_name'].'  <br>'?></td>
		
<!-- START Upload Big Banner Talent Detail -->
		<?php if($data['picture_name']!=''){?>
		<td>
			<a href="#dialog-progbannerdetailview" id="<?php echo $data['id_talentdetail'] ?>" class="viewbanner" data-toggle="modal" title="View Big Frame With Using Background">
			<img src="<?php echo $output_dir.$data['picture_name'] ?>" width="75" height="75"><br>
			<a href="#dialog-progbannerdetailviewnobg" id="<?php echo $data['id_talentdetail'] ?>" class="viewbannernobg" data-toggle="modal" title="View Banner Without Background">
			<img src="<?php echo $output_dirx.$data['picture_namex'] ?>" width="75" height="75">
		</td>
		<?php }else{ ?>
		<td>
		
		<?php //include "myupload/index.php"; ?>
					
				<!-- upload DATA -->	
				<head>
				<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
				<script src="http://malsup.github.com/jquery.form.js"></script>
				<style>
				/*form { display: block; margin: 20px auto; background: #fff; border-radius: 10px; padding: 15px  width:5px;}*/
				#progress { position:relative; width:150px; border: 1px solid #ddd; padding: 1px; border-radius: 3px; }
				#bar { background-color: #B4F5B4; width:0%; height:20px; border-radius: 3px; }
				#percent { position:absolute; display:inline-block; top:3px; left:48%; }
				</style>
				</head>
				<body>

				<?php 
				$host = "172.16.8.132";
				$user = "transcp_iml";
				$pass = "g4r4m4s1n";
				$dbName = "transcp_talentdb";
				mysql_connect($host, $user, $pass);
				mysql_select_db($dbName)
				or die ("Connect Failed !! : ".mysql_error());

				?>
				<form id="myForm" action="myupload/upload.php" method="post" enctype="multipart/form-data" style="width:10%;">
				<!-- Browse File-->
					 <input type="hidden" name="id_talentdetail" value="<?php echo $data['id_talentdetail']; ?>" >
					 <input type="file"  size="60" name="myfile" style="width:200px;">
				  
				 <div id="progress">
						<div id="bar"></div>
						<div id="percent">0%</div >
				</div>

					 <input type="submit" value="Upload" style="width:50px;">
				 </form>
				<br/>
					
				<div id="message"></div>


				<script>
				$(document).ready(function()
				{

					var options = { 
					beforeSend: function() 
					{
						$("#progress").show();
						//clear everything
						$("#bar").width('0%');
						$("#message").html("");
						$("#percent").html("0%");
					},
					uploadProgress: function(event, position, total, percentComplete) 
					{
						$("#bar").width(percentComplete+'%');
						$("#percent").html(percentComplete+'%');

					
					},
					success: function(data) 
					{
						$("#bar").width('100%');
						$("#percent").html('100%');
					},
					complete: function(response) 
					{
						$("#message").html("<font color='blue'>"+response.responseText+"</font>");
					},
					error: function()
					{
						$("#message").html("<font color='red'> ERROR: unable to upload files</font>");

					}
					 
				}; 

					 $("#myForm").ajaxForm(options);

				});

				</script>
				</body>		
				<!-- END UPLOAD DATA -->	
				<!-- PROSES UPLOAD DATA -->	
				<?php
				$host = "172.16.8.132";
				$user = "transcp_iml";
				$pass = "g4r4m4s1n";
				$dbName = "transcp_talentdb";	

				mysql_connect($host, $user, $pass);
				mysql_select_db($dbName)
				or die ("Connect Failed !! : ".mysql_error());

				//$id_talentdetail	= $_POST['id_talentdetail'];
				$id_talentdetail	= $data['id_talentdetail'];

				$output_dir = '../../dc9144e0ece8bcd25dd3a4dcb7b305a3/picture/bg/data_'.$data['id_talentdetail'].'/';
				$picture_name = $_FILES["myfile"]["name"];
				$picture_size = $_FILES["myfile"]["size"];
				$picture_location = '../../dc9144e0ece8bcd25dd3a4dcb7b305a3/picture/bg/data_'.$data['id_talentdetail'].'/';

				if(isset($_FILES["myfile"]))
				{
					//Filter the file types , if you want.
					if ($_FILES["myfile"]["error"] > 0)
					{
					  echo "Error: " . $_FILES["file"]["error"] . "<br>";
					}
					else
					{
						//move the uploaded file to uploads folder;
					if(move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir. $_FILES["myfile"]["name"]))
					{
						mysql_query("UPDATE talent_detail SET picture_name='$picture_name', picture_location='$picture_location', picture_size='$picture_size' WHERE id_talentdetail='".$data['id_talentdetail']."' ");
						
					}else{
						echo "Gagal Uplaod";
					}
					 echo "Uploaded File :".$_FILES["myfile"]["name"];
					 echo "<br>"; echo $output_dir;
					 echo " <meta http-equiv=\"refresh\" content=\"0\" href=\"talentdetail.data.php\" /> ";
						echo "<meta http-equiv=Refresh content=2;url=talentdetail.data.php>"; 
					}

				}
				?>
				<!-- END PROSES UPLOAD DATA -->	
		</td>
		<?php } ?>
		
<!-- END Upload Big Banner Talent Detail -->		
		
<!-- START Picture gallery1/gallery2/gallery3 Talent Detail -->
		<?php if(($data['gallery_name']!='')&&($data['gallery_name2']=='')&&($data['gallery_name3']=='')){?>
		<td>
				<center><a href="#dialog-progbannerdetailviewgallery1" id="<?php echo $data['id_talentdetail'] ?>" class="viewbannergallery1" data-toggle="modal" title="View Thumbnail Gallery I Detail">
				<img src="<?php echo $output_dirgallery.$data['gallery_name'] ?>" width="25%" height="25%"></img></a></center>
				<br><br>
				<a href="#dialog-talentdetailuploadgallery2" id="<?php echo $data['id_talentdetail'] ?>" class="uploadgallery2" data-toggle="modal" title="Upload Thumbnail Gallery II Detail">
				<center><img src="img/no_upload.png" width="25%" height="25%"></center>			
				<br><br>
				<a href="#dialog-talentdetailuploadgallery3" id="<?php echo $data['id_talentdetail'] ?>" class="uploadgallery3" data-toggle="modal" title="Upload Thumbnail Gallery III Detail">
				<center><img src="img/no_upload.png" width="25%" height="25%"></center>			
		</td>		
		<?php }elseif(($data['gallery_name']!='')&&($data['gallery_name2']!='')&&($data['gallery_name3']=='')){?>
		<td>
				<center><a href="#dialog-progbannerdetailviewgallery1" id="<?php echo $data['id_talentdetail'] ?>" class="viewbannergallery1" data-toggle="modal" title="View Thumbnail Gallery I Detail">
				<img src="<?php echo $output_dirgallery.$data['gallery_name'] ?>" width="25%" height="25%"></img></center>
				<br><br>
				<center><a href="#dialog-progbannerdetailviewgallery2" id="<?php echo $data['id_talentdetail'] ?>" class="viewbannergallery2" data-toggle="modal" title="View Thumbnail Gallery II Detail">
				<img src="<?php echo $output_dirgallery.$data['gallery_name2'] ?>" width="25%" height="25%"></center>		
				<br><br>
				<a href="#dialog-talentdetailuploadgallery3" id="<?php echo $data['id_talentdetail'] ?>" class="uploadgallery3" data-toggle="modal" title="Upload Thumbnail Gallery III Detail">
				<center><img src="img/no_upload.png" width="25%" height="25%"></center>			
		</td>		
		<?php }elseif(($data['gallery_name']=='')&&($data['gallery_name2']!='')&&($data['gallery_name3']=='')){?>
		<td>
				<a href="#dialog-talentdetailuploadgallery1" id="<?php echo $data['id_talentdetail'] ?>" class="uploadgallery1" data-toggle="modal" title="Upload Thumbnail Gallery I Detail">
				<center><img src="img/no_upload.png" width="25%" height="25%"></center>			
				<br><br>
				<center><a href="#dialog-progbannerdetailviewgallery2" id="<?php echo $data['id_talentdetail'] ?>" class="viewbannergallery2" data-toggle="modal" title="View Thumbnail Gallery II Detail">
				<img src="<?php echo $output_dirgallery.$data['gallery_name2'] ?>" width="25%" height="25%"></img></center>
				<br><br>
				<a href="#dialog-talentdetailuploadgallery3" id="<?php echo $data['id_talentdetail'] ?>" class="uploadgallery3" data-toggle="modal" title="Upload Thumbnail Gallery III Detail">
				<center><img src="img/no_upload.png" width="25%" height="25%"></center>			
		</td>	
		<?php }elseif(($data['gallery_name']=='')&&($data['gallery_name2']!='')&&($data['gallery_name3']!='')){?>
		<td>
				<a href="#dialog-talentdetailuploadgallery1" id="<?php echo $data['id_talentdetail'] ?>" class="uploadgallery1" data-toggle="modal" title="Upload Thumbnail Gallery I Detail">
				<center><img src="img/no_upload.png" width="25%" height="25%"></center>			
				<br><br>
				<center><a href="#dialog-progbannerdetailviewgallery2" id="<?php echo $data['id_talentdetail'] ?>" class="viewbannergallery2" data-toggle="modal" title="View Thumbnail Gallery II Detail">
				<img src="<?php echo $output_dirgallery.$data['gallery_name2'] ?>" width="25%" height="25%"></img></center>
				<br><br>
				<a href="#dialog-progbannerdetailviewgallery3" id="<?php echo $data['id_talentdetail'] ?>" class="viewbannergallery3" data-toggle="modal" title="View Thumbnail Gallery III Detail">
				<img src="<?php echo $output_dirgallery.$data['gallery_name3'] ?>" width="25%" height="25%"></img>				
		</td>
		<?php }elseif(($data['gallery_name']=='')&&($data['gallery_name2']=='')&&($data['gallery_name3']!='')){?>
		<td>
				<a href="#dialog-talentdetailuploadgallery1" id="<?php echo $data['id_talentdetail'] ?>" class="uploadgallery1" data-toggle="modal" title="Upload Thumbnail Gallery I Detail">
				<center><img src="img/no_upload.png" width="25%" height="25%"></center>	
				<br><br>
				<a href="#dialog-talentdetailuploadgallery2" id="<?php echo $data['id_talentdetail'] ?>" class="uploadgallery2" data-toggle="modal" title="Upload Thumbnail Gallery II Detail">
				<center><img src="img/no_upload.png" width="25%" height="25%"></center>			
				<br><br>
				<center><a href="#dialog-progbannerdetailviewgallery3" id="<?php echo $data['id_talentdetail'] ?>" class="viewbannergallery3" data-toggle="modal" title="View Thumbnail Gallery III Detail">
				<img src="<?php echo $output_dirgallery.$data['gallery_name3'] ?>" width="25%" height="25%"></img></center>	
		</td>			
		<?php }elseif(($data['gallery_name']!='')&&($data['gallery_name2']=='')&&($data['gallery_name3']!='')){?>
		<td>
				<center><a href="#dialog-progbannerdetailview" id="<?php echo $data['id_talentdetail'] ?>" class="viewbanner" data-toggle="modal" title="View Thumbnail Gallery I Detail">
				<img src="<?php echo $output_dirgallery.$data['gallery_name'] ?>" width="25%" height="25%"></img></center>
				<br><br>
				<a href="#dialog-talentdetailuploadgallery2" id="<?php echo $data['id_talentdetail'] ?>" class="uploadgallery2" data-toggle="modal" title="Upload Thumbnail Gallery II Detail">
				<center><img src="img/no_upload.png" width="25%" height="25%"></center>			
				<br><br>
				<center><a href="#dialog-progbannerdetailviewgallery3" id="<?php echo $data['id_talentdetail'] ?>" class="viewbannergallery3" data-toggle="modal" title="View Thumbnail Gallery III Detail">
				<img src="<?php echo $output_dirgallery.$data['gallery_name3'] ?>" width="25%" height="25%"></img></center>
		</td>
		<?php }elseif(($data['gallery_name']!='')||($data['gallery_name2']!='')||($data['gallery_name3']!='')){?>		
		<td>
				<center><a href="#dialog-progbannerdetailviewgallery1" id="<?php echo $data['id_talentdetail'] ?>" class="viewbannergallery1" data-toggle="modal" title="View Thumbnail Gallery I Detail">
				<img src="<?php echo $output_dirgallery.$data['gallery_name'] ?>" width="25%" height="25%"></img></center>
				<br><br>
				<center><a href="#dialog-progbannerdetailviewgallery2" id="<?php echo $data['id_talentdetail'] ?>" class="viewbannergallery2" data-toggle="modal" title="View Thumbnail Gallery II Detail">
				<img src="<?php echo $output_dirgallery.$data['gallery_name2'] ?>" width="25%" height="25%" style="margin-top:-50px;"></img></center>
				<br><br>
				<center><a href="#dialog-progbannerdetailviewgallery3" id="<?php echo $data['id_talentdetail'] ?>" class="viewbannergallery3" data-toggle="modal" title="View Thumbnail Gallery III Detail">
				<img src="<?php echo $output_dirgallery.$data['gallery_name3'] ?>" width="25%" height="25%" style="margin-top:-90px;"></img></center>
		</td>		
		<?php }else{ ?>
		<td>
				<a href="#dialog-talentdetailuploadgallery1" id="<?php echo $data['id_talentdetail'] ?>" class="uploadgallery1" data-toggle="modal" title="Upload Thumbnail Gallery I Detail">
				<center><img src="img/no_upload.png" width="25%" height="25%"></center>
				<br><br>
				<a href="#dialog-talentdetailuploadgallery2" id="<?php echo $data['id_talentdetail'] ?>" class="uploadgallery2" data-toggle="modal" title="Upload Thumbnail Gallery II Detail">
				<center><img src="img/no_upload.png" width="25%" height="25%"></center>
				<br><br>
				<a href="#dialog-talentdetailuploadgallery3" id="<?php echo $data['id_talentdetail'] ?>" class="uploadgallery3" data-toggle="modal" title="Upload Thumbnail Gallery III Detail">
				<center><img src="img/no_upload.png" width="25%" height="25%"></center>		
		</td>		
		<?php } ?>
<!-- END Picture gallery1/gallery2/gallery3 Talent Detail -->
		
<!-- START Video gallery1/gallery2/gallery3 Talent Detail -->
		<?php if(($data['vdo_gallery1_name']!='')&&($data['vdo_gallery2_name']=='')&&($data['vdo_gallery3_name']=='')){?>
		<td>
				<center><a href="#dialog-progplaydetailviewgallery1" id="<?php echo $data['id_talentdetail'] ?>" class="viewplaygallery1" data-toggle="modal" title="View Video Play">
				<img src="<?php echo $output_dirgallery ?>" width="25%" height="25%"></img></a></center>
				<br><br>
				<a href="#dialog-talentdetailuploadvdogallery2" id="<?php echo $data['id_talentdetail'] ?>" class="uploadvdogallery2" data-toggle="modal" title="Upload Video Gallery II Detail">
				<center><img src="img/no_upload.png" width="25%" height="25%"></center>
				<br><br>
				<a href="#dialog-talentdetailuploadvdogallery3" id="<?php echo $data['id_talentdetail'] ?>" class="uploadvdogallery3" data-toggle="modal" title="Upload Video Gallery II Detail">
				<center><img src="img/no_upload.png" width="25%" height="25%"></center>	
		</td>		
		<?php }elseif(($data['vdo_gallery1_name']!='')&&($data['vdo_gallery2_name']!='')&&($data['vdo_gallery3_name']=='')){?>
		<td>
				<center><a href="#dialog-progplaydetailviewgallery1" id="<?php echo $data['id_talentdetail'] ?>" class="viewplaygallery1" data-toggle="modal" title="View Video I Play">
				<img src="<?php echo $output_dirgallery ?>" width="25%" height="25%"></img></a></center>
				<br><br>
				<center><a href="#dialog-progplaydetailviewgallery2" id="<?php echo $data['id_talentdetail'] ?>" class="viewplaygallery2" data-toggle="modal" title="View Video II Play">
				<img src="<?php echo $output_dirgallery ?>" width="25%" height="25%"></img></a></center>
				<br><br>
				<a href="#dialog-talentdetailuploadvdogallery3" id="<?php echo $data['id_talentdetail'] ?>" class="uploadvdogallery3" data-toggle="modal" title="Upload Video Gallery III Detail">
				<center><img src="img/no_upload.png" width="25%" height="25%"></center>	
		</td>		
		<?php }elseif(($data['vdo_gallery1_name']=='')&&($data['vdo_gallery2_name']!='')&&($data['vdo_gallery3_name']=='')){?>
		<td>
				<a href="#dialog-talentdetailuploadvdogallery1" id="<?php echo $data['id_talentdetail'] ?>" class="uploadvdogallery1" data-toggle="modal" title="Upload Video Gallery I Detail">
				<center><img src="img/no_upload.png" width="25%" height="25%"></center>		
				<br><br>
				<center><a href="#dialog-progplaydetailviewgallery2" id="<?php echo $data['id_talentdetail'] ?>" class="viewplaygallery2" data-toggle="modal" title="View Video II Play">
				<img src="<?php echo $outputvdo_dir ?>" width="25%" height="25%"></img></a></center>	
				<br><br>
				<a href="#dialog-talentdetailuploadvdogallery3" id="<?php echo $data['id_talentdetail'] ?>" class="uploadvdogallery3" data-toggle="modal" title="Upload Video Gallery III Detail">
				<center><img src="img/no_upload.png" width="25%" height="25%"></center>			
		</td>	
		<?php }elseif(($data['vdo_gallery1_name']=='')&&($data['vdo_gallery2_name']!='')&&($data['vdo_gallery3_name']!='')){?>
		<td>
				<a href="#dialog-talentdetailuploadvdogallery1" id="<?php echo $data['id_talentdetail'] ?>" class="uploadvdogallery1" data-toggle="modal" title="Upload Video Gallery I Detail">
				<center><img src="img/no_upload.png" width="25%" height="25%"></center>			
				<br><br>
				<center><a href="#dialog-progplaydetailviewgallery2" id="<?php echo $data['id_talentdetail'] ?>" class="viewplaygallery2" data-toggle="modal" title="View Video II Play">
				<img src="<?php echo $output_dirgallery ?>" width="25%" height="25%"></img></a></center>	
				<br><br>
				<center><a href="#dialog-progplaydetailviewgallery3" id="<?php echo $data['id_talentdetail'] ?>" class="viewplaygallery3" data-toggle="modal" title="View Video III Play">
				<img src="<?php echo $outputvdo_dir ?>" width="25%" height="25%"></img></a></center>				
		</td>
		<?php }elseif(($data['vdo_gallery1_name']=='')&&($data['vdo_gallery2_name']=='')&&($data['vdo_gallery3_name']!='')){?>
		<td>
				<a href="#dialog-talentdetailuploadvdogallery1" id="<?php echo $data['id_talentdetail'] ?>" class="uploadvdogallery1" data-toggle="modal" title="Upload Video Gallery I Detail">
				<center><img src="img/no_upload.png" width="25%" height="25%"></center>			
				<br><br>
				<a href="#dialog-talentdetailuploadvdogallery2" id="<?php echo $data['id_talentdetail'] ?>" class="uploadvdogallery2" data-toggle="modal" title="Upload Video Gallery II Detail">
				<center><img src="img/no_upload.png" width="25%" height="25%"></center>				
				<br><br>
				<center><a href="#dialog-progplaydetailviewgallery2" id="<?php echo $data['id_talentdetail'] ?>" class="viewplaygallery2" data-toggle="modal" title="View Video II Play">
				<img src="<?php echo $outputvdo_dir ?>" width="25%" height="25%"></img></a></center>		
		</td>			
		<?php }elseif(($data['vdo_gallery1_name']!='')&&($data['vdo_gallery2_name']=='')&&($data['vdo_gallery3_name']!='')){?>
		<td>
				<center><a href="#dialog-progplaydetailviewgallery1" id="<?php echo $data['id_talentdetail'] ?>" class="viewplaygallery1" data-toggle="modal" title="View Video I Play">
				<img src="<?php echo $output_dirgallery ?>" width="25%" height="25%"></img></a></center>		
				<br><br>
				<a href="#dialog-talentdetailuploadvdogallery2" id="<?php echo $data['id_talentdetail'] ?>" class="uploadvdogallery2" data-toggle="modal" title="Upload Video Gallery II Detail">
				<center><img src="img/no_upload.png" width="25%" height="25%"></center>					
				<br><br>
				<center><a href="#dialog-progplaydetailviewgallery3" id="<?php echo $data['id_talentdetail'] ?>" class="viewplaygallery3" data-toggle="modal" title="View Video III Play">
				<img src="<?php echo $outputvdo_dir ?>" width="25%" height="25%"></img></a></center>			
		</td>
		<?php }elseif(($data['vdo_gallery1_name']!='')||($data['vdo_gallery2_name']!='')||($data['vdo_gallery3_name']!='')){?>		
		<td>
				<center><a href="#dialog-progplaydetailviewgallery1" id="<?php echo $data['id_talentdetail'] ?>" class="viewplaygallery1" data-toggle="modal" title="View Video I Play">
				<img src="<?php echo $outputvdo_dir ?>" width="25%" height="25%"></img></a></center>		
				<br><br>
				<center><a href="#dialog-progplaydetailviewgallery2" id="<?php echo $data['id_talentdetail'] ?>" class="viewplaygallery2" data-toggle="modal" title="View Video II Play">
				<img src="<?php echo $outputvdo_dir ?>" width="25%" height="25%"></img></a></center>				
				<br><br>
				<center><a href="#dialog-progplaydetailviewgallery3" id="<?php echo $data['id_talentdetail'] ?>" class="viewplaygallery3" data-toggle="modal" title="View Video III Play">
				<img src="<?php echo $outputvdo_dir ?>" width="25%" height="25%"></img></a></center>		
		</td>		
		<?php }else{ ?>
		<td>
				<a href="#dialog-talentdetailuploadvdogallery1" id="<?php echo $data['id_talentdetail'] ?>" class="uploadvdogallery1" data-toggle="modal" title="Upload Video Gallery I Detail">
				<center><img src="img/no_upload.png" width="25%" height="25%"></center>	
				<br><br>
				<a href="#dialog-talentdetailuploadvdogallery2" id="<?php echo $data['id_talentdetail'] ?>" class="uploadvdogallery2" data-toggle="modal" title="Upload Video Gallery II Detail">
				<center><img src="img/no_upload.png" width="25%" height="25%"></center>	
				<br><br>
				<a href="#dialog-talentdetailuploadvdogallery3" id="<?php echo $data['id_talentdetail'] ?>" class="uploadvdogallery3" data-toggle="modal" title="Upload Video Gallery III Detail">
				<center><img src="img/no_upload.png" width="25%" height="25%"></center>			
		</td>		
		<?php } ?>
<!-- END Video gallery1/gallery2/gallery3 Talent Detail -->

		
		<td>
			<a href="#dialog-talentdetail" id="<?php echo $data['id_talentdetail'] ?>" class="ubah" data-toggle="modal" title="Update data">
				<i class="icon-pencil"></i>
			</a>				
			<a href="#dialog-talentdetailview" id="<?php echo $data['id_talentdetail'] ?>" class="view" data-toggle="modal" title="View Data">
				<i class="icon-search"></i>
			</a>		
			<?php if($data['picture_name']!=''){?>
						<a href="#dialog-talentdetailupload" id="<?php echo $data['id_talentdetail'] ?>" class="upload" data-toggle="modal" title="Upload Picture" >
							<i class="icon-upload"></i>	
						</a>							
						<a href="#dialog-talentdetailuploadvdo" id="<?php echo $data['id_talentdetail'] ?>" class="uploadvdo" data-toggle="modal" title="Upload Video" >
							<i class="icon-upload"></i>	
						</a>					
						<?php } ?>
			<a href="#" id="<?php echo $data['id_talentdetail'] ?>" class="hapus" title="Delete Data">
			<i class="icon-trash"></i>
			</a>	
		</td>
	</tr>
	<?php
		$i++;
		
	}
	?>
</tbody>
</table> 

<?php 
if(!isset($_POST['cari'])) 
#if(isset($_POST['cari']) or isset($_POST['category_sc']) or isset($_POST['televisi_sc']) or isset($_POST['prodyear_sc']) or isset($_POST['prodyear_sc2']))
{ ?>
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
		<li class="halaman" id="<?php echo $jml_halaman ?>"><a href="#">last</a></li>
  </ul>

</div>
<?php } ?>

<?php 
koneksi_tutup(); 
?>
