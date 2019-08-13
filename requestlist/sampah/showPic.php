<?php
//require 'koneksi.php';
$link = mysql_connect("172.16.8.245:8326","mmit","g4r4m4s1n");

if (!$link) {
    die('Could not connect: ' . mysql_error());
}

//mysql_select_db('fullcalendar'); 
mysql_select_db('teams'); 
//koneksi_buka();
@session_start();
$p = $_GET['p'];


			//include("koneksi.php");
						
?>
	<div class="control-group">
		<label class="control-label" for="pic_cug">Pic Cug</label>
			<div class="controls">
			<?php
				echo '<select class="input-medium" style="width:220px;"  name="pic_cug">';
					
					#$qcatid = mysql_query("SELECT id_items_conditions, items_conditions_name, items_conditions_descr FROM items_conditions ORDER BY id_items_conditions ASC");
					$query = mysql_query("SELECT * FROM vw_kary_loginx WHERE user_realname = '".$p."'");
					
						while($show=mysql_fetch_array($query)){
						?>
						<option value="<?php echo $show['cug']; ?>" >
						<?php echo $show['cug']; ?>
						</option>
						<?php  
						}
					
					
				echo'</select>';
	?>
			</div>
	</div>
	<?php
		
				

//koneksi_tutup();
?>					