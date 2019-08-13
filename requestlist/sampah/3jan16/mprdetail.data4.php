<?php
require 'koneksi.php';
koneksi_buka();
#$kunci = $_GET['kunci'];
@session_start();
?>


<table class="table table-condensed table-bordered table-hover" cellpadding="0" cellspacing="0" style="">
<thead>
	<tr>
		<th style="width:5px">No</th>
		<th style="width:200px">Date Req.</th>
		<th style="width:20px">Ticket ID</th>		
		<th style="width:20px">Request By</th>
		<th style="width:20px">Group</th>
		<th style="width:20px">Sub</th>
		<th style="width:20px">Title</th>
		<th style="width:20px">Status</th>
		<th style="width:15px">Detail</th>

	</tr>
</thead>
<tbody>

	<?php 
		$i = 1;
		$jml_per_halaman = 5;
		$jml_data = mysql_num_rows(mysql_query("SELECT * FROM ith_ticket WHERE ticket_createby='$_SESSION[user_realname]' ORDER BY ticket_id DESC"));
		$jml_halaman = ceil($jml_data / $jml_per_halaman);

		// query pada saat mode pencarian
		if(isset($_POST['cari']) or isset($_POST['romfrom_sc']) or isset($_POST['romto_sc']) or isset($_POST['areafrom_sc']) or isset($_POST['areato_sc']) or isset($_POST['storefrom_sc']) or isset($_POST['storeto_sc'])
			or isset($_POST['datefrom_sc']) or isset($_POST['dateto_sc']) AND
		isset($_POST['halaman'])) 
		{
						$kunci = $_POST['cari'];
						$halaman = $_POST['halaman'];
						$i = ($halaman - 1) * $jml_per_halaman  + 1;
						//filter ROM From
						if($_POST['romfrom_sc'] !='' ){
							$romfrom = $_POST['romfrom_sc'];
							$romfrom_query = " AND (ITH_USERGROUP.usergroup_name LIKE '%$_POST[romfrom_sc]%' ";
							if($_POST['romfrom_sc'] = 'Rom I-1'){
								$romf = "dan rom(From) Name = ROM I-1";
							}elseif($_POST['romfrom_sc'] = 'Rom I-2'){
								$romf = "dan rom(From) Name = ROM I-2";			
							}
						}
						else{
							$romfrom_query = "";
						}
						//filter ROM To
						if($_POST['romto_sc'] != '' ){
							$romto = $_POST['romto_sc'];
							$romto_query = " OR ITH_USERGROUP.usergroup_name LIKE '%$_POST[romto_sc]%') ";
							if($_POST['romto_sc'] = 'Rom I-1'){
								$romt = "dan rom(To) Name = ROM I-1";
							}elseif($_POST['romto_sc'] = 'Rom I-2'){
								$romt = "dan rom(To) Name = ROM I-2";			
							}
						}
						else{
							$romto_query = "";
						}
						
						//filter Area From
						if($_POST['areafrom_sc'] != '' ){
							$areafrom = $_POST['areafrom_sc'];
							$areafrom_query = " AND (ITH_USERGROUP.usersubgroup_name LIKE '%$areafrom%' ";
							if($areafrom == 'Area I-1'){
								$areaf = "dan area(From) Name = Area I-1";
							}elseif($areafrom == 'Area I-2'){
								$areaf = "dan area(From) Name = Area I-2";			
							}
						}
						else{
							$areafrom_query = "";
						}
						//filter ROM To
						if($_POST['areato_sc'] != '' ){
							$areato = $_POST['areato_sc'];
							$areato_query = " OR ITH_USERGROUP.usersubgroup_name LIKE '%$areato%') ";
							if($areato == 'Area I-1'){
								$areat = "dan area(To) Name = Area I-1";
							}elseif($areato == 'Area I-2'){
								$areat = "dan area(To) Name = Area I-2";			
							}
						}
						else{
							$areato_query = "";
						}
						
						//filter Store From
						if($_POST['storefrom_sc'] != '' ){
							$storefrom = $_POST['storefrom_sc'];
							$storefrom_query = " AND (ITH_USERGROUP.userstore_name LIKE '%$storefrom%' ";
							if($storefrom == 'Store I-1'){
								$storef = "dan area(From) Name = Store I-1";
							}elseif($storefrom == 'Store I-2'){
								$storef = "dan area(From) Name = Store I-2";			
							}
						}
						else{
							$storefrom_query = "";
						}
						//filter Store To
						if($_POST['storeto_sc'] !='' ){
							$storeto = $_POST['storeto_sc'];
							$storeto_query = " OR ITH_USERGROUP.userstore_name LIKE '%$storeto%')";
							if($storeto == 'Store I-1'){
								$storet = "dan Store(To) Name = Store I-1";
							}elseif($storeto == 'Store I-2'){
								$storet = "dan Store(To) Name = Store I-2";			
							}
						}
						else{
							$storeto_query = "";
						}
						
						//filter Date From
						if($_POST['dtfrom_sc'] !='' ){
							$datefrom = $_POST['dtfrom_sc'];
							$dtfrom_query = " AND (ITH_TICKET.ticket_createdate >= '$datefrom'";
							$dtf = "dan Date From = $datefrom";
						}
						else{
							$dtfrom_query = "";
						}	

						//filter Date To
						if($_POST['dtto_sc'] !='' ){
							$dateto = $_POST['dtto_sc'];
							$dtto_query2 = " AND ITH_TICKET.ticket_createdate <= '$dateto')";
							$dtt = "dan Date To = $dateto";
						}
						else{
							$dtto_query2 = "";
						}
						
						//filter Status Ticket
						if($_POST['statusticket_sc'] !='' ){
							$statusticket = $_POST['statusticket_sc'];
							$tktsts_query = " AND ITH_TICKET.ticketstatus_id = '$statusticket'";
							$tkts = "dan Ticket Status = $statusticket";
						}
						else{
							$tktsts_query = "";
						}
						
						
						echo "<br><strong>Hasil pencarian untuk kata kunci $kunci $romfrom $romto $areafrom $areato $storefrom $storeto $datefrom $dateto $statusticket </strong>";
					/**	echo "<strong>Hasil pencarian untuk kata kunci $kunci $cat $pyr $tv </strong>
						<br>SELECT a.id_programdetail AS id_programdetail, a.program_title AS program_title,  b.categories_name AS categories_name, 
						a.season AS season, a.category_type AS category_type, a.total_episode AS total_episode, a.duration AS duration, a.production_year AS production_year, a.description AS description, 
						a.tv_station AS tv_station, a.picture_name AS picture_name,
						a.pict_eps1_name AS pict_eps1_name,a.pict_eps2_name AS pict_eps2_name,a.pict_eps3_name AS pict_eps3_name, 
						a.vdo_eps1_name AS vdo_eps1_name,a.vdo_eps2_name AS vdo_eps2_name,a.vdo_eps3_name AS vdo_eps3_name 			
						FROM program_detail a
						LEFT JOIN categories_programs b ON a.program_id = b.id_categories
						WHERE (a.program_title LIKE '$kunci%') $tv_query $cate_query $pyear_query $pyear_query2 LIMIT 0, $jml_per_halaman";  **/
						
		
						$query = mysql_query("SELECT ITH_TICKET.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.userstore_name FROM ITH_TICKET 
								LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
								LEFT JOIN ITH_TICKETCATEGORY ON ITH_TICKET.ticketcategory_id = ITH_TICKETCATEGORY.ticketcategory_id
								LEFT JOIN ITH_USER ON ITH_TICKET.ticket_createby = ITH_USER.user_id	
								LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
								WHERE (ITH_TICKET.ticket_subject LIKE '%$kunci%') $romfrom_query $romto_query $areafrom_query $areato_query $storefrom_query $storeto_query $dtfrom_query $dtto_query 
								$tktsts_query AND ITH_TICKET.ticket_createby='$_SESSION[user_nik]'
								ORDER BY ITH_TICKET.ticket_createdate ASC");
						/*		
							echo "<br>SELECT ITH_TICKET.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.userstore_name FROM ITH_TICKET 
								LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
								LEFT JOIN ITH_TICKETCATEGORY ON ITH_TICKET.ticketcategory_id = ITH_TICKETCATEGORY.ticketcategory_id
								LEFT JOIN ITH_USER ON ITH_TICKET.ticket_createby = ITH_USER.user_id	
								LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
								WHERE (ITH_TICKET.ticket_subject LIKE '%$kunci%') $romfrom_query $romto_query $areafrom_query $areato_query $storefrom_query $storeto_query $dtfrom_query $dtto_query 
								$tktsts_query AND ITH_TICKET.ticket_createby='$_SESSION[user_nik]'
								ORDER BY ITH_TICKET.ticket_createdate ASC";		*/							
							echo "<br>SELECT ITH_TICKET.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.userstore_name FROM ITH_TICKET 
								LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
								LEFT JOIN ITH_TICKETCATEGORY ON ITH_TICKET.ticketcategory_id = ITH_TICKETCATEGORY.ticketcategory_id
								LEFT JOIN ITH_USER ON ITH_TICKET.ticket_createby = ITH_USER.user_id	
								LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
								WHERE (ITH_TICKET.ticket_subject LIKE '%$kunci%') $romfrom_query $romto_query
								ORDER BY ITH_TICKET.ticket_createdate ASC";									

		// query jika nomor halaman sudah ditentukan								
		/*if(isset($_POST['cari'])) {
			$kunci = $_POST['cari'];
			echo "<strong>Hasil pencarian untuk kata kunci $kunci</strong>";
			$query = mysql_query("SELECT ITH_TICKET.*, ITH_USER.user_realname FROM ITH_TICKET 
			LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
			 LEFT JOIN ITH_TICKETCATEGORY ON ITH_TICKET.ticketcategory_id = ITH_TICKETCATEGORY.ticketcategory_id
			 LEFT JOIN ITH_USER ON ITH_TICKET.ticket_createby = ITH_USER.user_id									 
			WHERE ITH_TICKET.ticket_id LIKE '%$kunci%' OR ITH_TICKET.ticket_subject LIKE '$kunci%' OR ITH_USER.user_realname LIKE '%$kunci%' AND 
			ITH_TICKET.ticket_createby='$_SESSION[user_realname]'");*/
		} elseif(isset($_POST['halaman'])) {
			$halaman = $_POST['halaman'];
			$i = ($halaman - 1) * $jml_per_halaman  + 1;
			$query = mysql_query("SELECT ITH_TICKET.*, ITH_USER.user_realname FROM ITH_TICKET 
			LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
			 LEFT JOIN ITH_TICKETCATEGORY ON ITH_TICKET.ticketcategory_id = ITH_TICKETCATEGORY.ticketcategory_id
			 LEFT JOIN ITH_USER ON ITH_TICKET.ticket_createby = ITH_USER.user_id									 
			WHERE ITH_TICKET.ticket_id LIKE '%$kunci%' OR ITH_TICKET.ticket_subject LIKE '$kunci%' OR ITH_USER.user_realname LIKE '%$kunci%' AND 
			ITH_TICKET.ticket_createby='$_SESSION[user_realname]'
			ORDER BY ITH_TICKET.ticket_id DESC LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman");
		}else{
			$query = mysql_query("SELECT ITH_TICKET.*, ITH_USER.user_realname FROM ITH_TICKET 
			LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
			 LEFT JOIN ITH_TICKETCATEGORY ON ITH_TICKET.ticketcategory_id = ITH_TICKETCATEGORY.ticketcategory_id
			 LEFT JOIN ITH_USER ON ITH_TICKET.ticket_createby = ITH_USER.user_id								 
			WHERE ITH_TICKET.ticket_id LIKE '%$kunci%' OR ITH_TICKET.ticket_subject LIKE '$kunci%' OR ITH_USER.user_realname LIKE '%$kunci%' AND 
			ITH_TICKET.ticket_createby='$_SESSION[user_realname]'
			ORDER BY ITH_TICKET.ticket_id DESC LIMIT 0, $jml_per_halaman");
		}

		while($data = mysql_fetch_object($query)) 
		{
			$done = 'http://'.$_SERVER['SERVER_NAME'].':85/datatable/requestlist/images/done.png';	
			$nofile = 'http://'.$_SERVER['SERVER_NAME'].':85/datatable/requestlist/images/nouploaded.png';	
	?>

	<tr>
		<td><?=$i?></td>		
		<td><?=$data->ticket_createdate?></td>		
		<td><?=$data->ticket_id?></td>		
		<td><?=$data->user_realname?></td>		
		<td><?='-'?></td>		
		<td><?='-'?></td>		
		<td><?=$data->ticket_subject?></td>	
		<td><?=$data->ticketstatus_name?></td>	
		<td><button href="#">Readmore</button></td>		
		

				
					
			
				
			<?php  $i++;	
		}
	?>

</tbody>

</table>



<?php if(!isset($_POST['cari'])) { ?>

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