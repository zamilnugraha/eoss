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
		
		if(isset($_POST['cari'])) {
			$kunci = $_POST['cari'];
			echo "<strong>Hasil pencarian untuk kata kunci $kunci</strong>";
			$query = mysql_query("SELECT ITH_TICKET.*, ITH_USER.user_realname FROM ITH_TICKET 
			LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
			 LEFT JOIN ITH_TICKETCATEGORY ON ITH_TICKET.ticketcategory_id = ITH_TICKETCATEGORY.ticketcategory_id
			 LEFT JOIN ITH_USER ON ITH_TICKET.ticket_createby = ITH_USER.user_id									 
			WHERE ITH_TICKET.ticket_id LIKE '%$kunci%' OR ITH_TICKET.ticket_subject LIKE '$kunci%' OR ITH_USER.user_realname LIKE '%$kunci%' AND 
			ITH_TICKET.ticket_createby='$_SESSION[user_realname]'");
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