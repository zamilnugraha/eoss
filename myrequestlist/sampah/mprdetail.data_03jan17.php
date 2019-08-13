<?php
require 'koneksi.php';
koneksi_buka();
#$kunci = $_GET['kunci'];
@session_start();
 		
?>
<!--<script>
window.top.location.href = "http://localhost:85/helpdesk1/index.php?view"; 
</script>-->

<table class="table table-condensed table-bordered table-hover" cellpadding="0" cellspacing="0" style="">
<thead>
	<tr>
		<!--<th style="width:5px">No</th>-->
		<th style="width:110px">Date Req.</th>
		<th style="width:20px">Ticket ID</th>		
		<th style="width:20px">Request By</th>
		<!--<th style="width:20px">Group</th>
		<th style="width:20px">Sub</th>-->
		<th style="width:80px">Title</th>
		<th style="width:20px">Status</th>
		<th style="width:20px">Detail</th>

	</tr>
</thead>
<tbody>

	<?php 

		$i = 1;
		$jml_per_halaman = 5;
		if($_SESSION['user_level'] == 1){
			$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name FROM ITH_TICKET_HEADER 
			LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
			 LEFT JOIN ITH_TICKETCATEGORY ON ITH_TICKET_HEADER.ticketcategory_id = ITH_TICKETCATEGORY.ticketcategory_id
			 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_id								 
			WHERE 
			ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]' AND ITH_USER.user_realname!='Administrator'
			ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));
		}elseif($_SESSION['user_level'] == 99){
			$jml_data = mysql_num_rows(mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name FROM ITH_TICKET_HEADER 
			LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
			 LEFT JOIN ITH_TICKETCATEGORY ON ITH_TICKET_HEADER.ticketcategory_id = ITH_TICKETCATEGORY.ticketcategory_id
			 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_id		
			ORDER BY ITH_TICKET_HEADER.ticket_no DESC"));
		}
		$jml_halaman = ceil($jml_data / $jml_per_halaman);

		// query pada saat mode pencarian
		if(isset($_POST['cari']) or isset($_POST['romfrom_sc']) or isset($_POST['romto_sc']) or isset($_POST['areafrom_sc']) or isset($_POST['areato_sc']) or isset($_POST['storefrom_sc']) or isset($_POST['storeto_sc']) or isset($_POST['dtfrom_sc']) or isset($_POST['dtto_sc']) or isset($_POST['statusticket_sc']) AND isset($_POST['halaman'])) 
		{
						$kunci = $_POST['cari'];
						$halaman = $_POST['halaman'];

						$i = ($halaman - 1) * $jml_per_halaman  + 1;
						
						//filter ROM From & ROM To
						if(($_POST['romfrom_sc'] !='' )||($_POST['romto_sc'] !='' )){
							$romfrom = $_POST['romfrom_sc'];
							$romto = $_POST['romto_sc'];
							$romfromto_query = " AND (ITH_USERGROUP.usergroup_id BETWEEN '$_POST[romfrom_sc]' AND '$_POST[romto_sc]')";							
						}
						
						//filter Area From & Area To
						if(($_POST['areafrom_sc'] !='' )||($_POST['areato_sc'] !='' )){
							$areafrom = $_POST['areafrom_sc'];
							$areato = $_POST['areato_sc'];
							$areafromto_query = " AND (ITH_USERGROUP.usersubgroup_id BETWEEN '$_POST[areafrom_sc]' AND '$_POST[areato_sc]')";
						}
						
						//filter Store From & Store To
						if(($_POST['storefrom_sc'] !='' )||($_POST['storeto_sc'] !='' )){
							$storefrom = $_POST['storefrom_sc'];
							$storeto = $_POST['storeto_sc'];
							$storefromto_query = " AND (ITH_USERGROUP.userstore_id BETWEEN '$_POST[storefrom_sc]' AND '$_POST[storeto_sc]')";
						}
												
						//filter Date From
						if(($_POST['dtfrom_sc'] !='' )||($_POST['dtto_sc'] !='' )){
							$dtfrom = $_POST['dtfrom_sc'];
							$dtto = $_POST['dtto_sc'];
							$dtfromto_query = " AND (ITH_TICKET_HEADER.ticket_createdate BETWEEN '$_POST[dtfrom_sc]' AND '$_POST[dtto_sc]')";
							
						}
												
						//filter Status Ticket
						if($_POST['statusticket_sc'] !='' ){
							$statusticket = $_POST['statusticket_sc'];
							$tktsts_query = " AND ITH_TICKET_HEADER.ticketstatus_id = '$statusticket'";
							$tkts = "dan Ticket Status = $statusticket";
						}
								
						$query = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.userstore_name FROM ITH_TICKET_HEADER 
								LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
								LEFT JOIN ITH_TICKETCATEGORY ON ITH_TICKET_HEADER.ticketcategory_id = ITH_TICKETCATEGORY.ticketcategory_id
								LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_id	
								LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
								WHERE ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]' AND (ITH_TICKET_HEADER.ticket_subject LIKE '%$kunci%') $romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
								ORDER BY ITH_TICKET_HEADER.ticket_no ASC");
					/*			
						echo "SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.ticketstatus_name, ITH_USER.user_realname, ITH_USERGROUP.usergroup_name, ITH_USERGROUP.usersubgroup_name, ITH_USERGROUP.userstore_name FROM ITH_TICKET_HEADER 
								LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
								LEFT JOIN ITH_TICKETCATEGORY ON ITH_TICKET_HEADER.ticketcategory_id = ITH_TICKETCATEGORY.ticketcategory_id
								LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_id	
								LEFT JOIN ITH_USERGROUP ON ITH_USER.userlevel_id = ITH_USERGROUP.userlevel_id
								WHERE (ITH_TICKET_HEADER.ticket_subject LIKE '%$kunci%') $romfromto_query $areafromto_query $storefromto_query $dtfromto_query $tktsts_query
								ORDER BY ITH_TICKET_HEADER.ticket_createdate ASC";		
					*/						

		// query jika nomor halaman sudah ditentukan								
		/*if(isset($_POST['cari'])) {
			$kunci = $_POST['cari'];
			echo "<strong>Hasil pencarian untuk kata kunci $kunci</strong>";
			$query = mysql_query("SELECT ITH_TICKET.*, ITH_USER.user_realname FROM ITH_TICKET_HEADER 
			LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
			 LEFT JOIN ITH_TICKETCATEGORY ON ITH_TICKET.ticketcategory_id = ITH_TICKETCATEGORY.ticketcategory_id
			 LEFT JOIN ITH_USER ON ITH_TICKET.ticket_createby = ITH_USER.user_id									 
			WHERE ITH_TICKET.ticket_id LIKE '%$kunci%' OR ITH_TICKET.ticket_subject LIKE '$kunci%' OR ITH_USER.user_realname LIKE '%$kunci%' AND 
			ITH_TICKET.ticket_createby='$_SESSION[user_realname]'");*/
		} elseif(isset($_POST['halaman'])) {
			$halaman = $_POST['halaman'];
			$i = ($halaman - 1) * $jml_per_halaman  + 1;
			$query = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name FROM ITH_TICKET_HEADER 
			LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
			 LEFT JOIN ITH_TICKETCATEGORY ON ITH_TICKET_HEADER.ticketcategory_id = ITH_TICKETCATEGORY.ticketcategory_id
			 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_id									 
			WHERE ITH_TICKET_HEADER.ticket_id LIKE '%$kunci%' OR ITH_TICKET_HEADER.ticket_subject LIKE '$kunci%' OR ITH_USER.user_realname LIKE '%$kunci%' AND 
			ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]'
			ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT ".(($halaman - 1) * $jml_per_halaman).", $jml_per_halaman");
		}else{
			if(($_SESSION['user_level'] == 1)){
			/*$mydatex = date('d/m/Y', strtotime('today - 02 days'));
			$mydate = (explode("/",$mydatex));
			$dayf = $mydate[0];
			$monthf   = $mydate[1];
			$yearf  = $mydate[2];	
			$dfdefault = $dayf.'/'.$monthf.'/'.$yearf;
			
			$datenowx = date('d/m/Y');			
			$datenow = (explode("/",$datenowx));	
			$dayt = $datenow[0];
			$montht   = $datenow[1];
			$yeart  = $datenow[2];	
			$dtdefault = $dayt.'/'.$montht.'/'.$yeart;		
			*/
			$dfdefault = '01/01/2017';
			$dtdefault = '01/02/2017';
			$query = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name FROM ITH_TICKET_HEADER 
			LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
			 LEFT JOIN ITH_TICKETCATEGORY ON ITH_TICKET_HEADER.ticketcategory_id = ITH_TICKETCATEGORY.ticketcategory_id
			 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_id								 
			WHERE 
			ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]' AND ITH_USER.user_realname!='Administrator' 
			AND (ITH_TICKET_HEADER.ticket_createdate BETWEEN '$dfdefault' AND '$dtdefault')
			ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT 0, $jml_per_halaman");		
			#echo 'Level = '.$_SESSION['user_level'].'Hello<br>NIK ='.$_SESSION['user_nik'];	
			
			echo "SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name FROM ITH_TICKET_HEADER 
			LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
			 LEFT JOIN ITH_TICKETCATEGORY ON ITH_TICKET_HEADER.ticketcategory_id = ITH_TICKETCATEGORY.ticketcategory_id
			 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_id								 
			WHERE 
			ITH_TICKET_HEADER.ticket_createby='$_SESSION[user_nik]' AND ITH_USER.user_realname!='Administrator' 
			AND (ITH_TICKET_HEADER.ticket_createdate BETWEEN '$dfdefault' AND '$dtdefault')
			ORDER BY ITH_TICKET_HEADER.ticket_no DESC";			
			#echo "<br>mydatex = ".$mydatex.'<br>mydate = '.$mydate.'<br>datenowx = '.$datenowx.'<br>datenow = '.$datenow;
			
			echo "<br>mydatex = ".$mydatex;
			echo "<br>monthf = ".$monthf.'-dayf = '.$dayf.'-yearf = '.$yearf;
			echo "<br>montht = ".$montht.'-dayt = '.$dayt.'-yeart = '.$yeart;
			
			}elseif(($_SESSION['user_level'] == 99)||($_SESSION['user_level'] == 1001)){
			$mydatex = date('d/m/Y', strtotime('today - 30 days'));
			$mydate = (explode(" ",$mydatex));	
			$datenowx = date('d/m/Y');			
			$datenow = (explode(" ",$datenowx));		
			$query = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name FROM ITH_TICKET_HEADER 
			LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
			 LEFT JOIN ITH_TICKETCATEGORY ON ITH_TICKET_HEADER.ticketcategory_id = ITH_TICKETCATEGORY.ticketcategory_id
			 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_id								 
			WHERE ITH_TICKET_HEADER.ticket_createdate BETWEEN '$mydate' AND '$datenow'
			ORDER BY ITH_TICKET_HEADER.ticket_no DESC LIMIT 0, $jml_per_halaman");
			#echo 'Level = '.$_SESSION['user_level'].'Hello Admin<br>NIK ='.$_SESSION['user_nik'];			
			}
			
		}
		
		while($dtmyticket = mysql_fetch_object($query)) 
		{
			#$done = 'http://'.$_SERVER['SERVER_NAME'].':85/datatable/requestlist/images/done.png';	
			#$nofile = 'http://'.$_SERVER['SERVER_NAME'].':85/datatable/requestlist/images/nouploaded.png';	
	?>

	<tr>
		<!--<td><!?=$i;?></td>	-->	
		<td><?=$dtmyticket->ticket_createdate.'<br>'.$dtmyticket->ticket_createtime;?></td>		
		<td><?=$dtmyticket->ticket_id;?></td>		
		<td><?=$dtmyticket->user_realname;?></td>		
		<!--<td><!?='-'?></td>		
		<td><!?='-'?></td>-->		
		<td><?=$dtmyticket->ticket_subject;?></td>	
		<td>
		<?if($dtmyticket->ticketstatus_id=='1'){ //Open Status ?> 
		<?='<font color="red"><b>'.$dtmyticket->ticketstatus_name.'</b></font>';?>
		<?}elseif($dtmyticket->ticketstatus_id=='0'){ //Solved Status ?>
		<?='<font color="blue"><b>'.$dtmyticket->ticketstatus_name.'</b></font>';?>
		<?}elseif($dtmyticket->ticketstatus_id=='2'){ //On Process Status?>
		<?='<font color="orange"><b>'.$dtmyticket->ticketstatus_name.'</b></font>';?>
		<?}elseif($dtmyticket->ticketstatus_id=='3'){ //Return Status?>
		<?='<font color="Green"><b>'.$dtmyticket->ticketstatus_name.'</b></font>';?>
		<?}?>
		</td>	
		
		<td><a href="<?='http://'.$_SERVER['SERVER_NAME'].':85/helpdesk1/index.php?view=comment&pid='.$dtmyticket->ticket_id?>" title="Ticket ID: <?=$dtmyticket->ticket_id?>" target="_parent">Readmore</a></td>		
		

				
					
			
				
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