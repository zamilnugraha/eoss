<?php
require 'koneksi.php';
koneksi_buka();
@session_start();
$q = $_GET['q'];
$z = $_GET['z'];
$tp = $_GET['tp'];

			//include("koneksi.php");
						
?>
	<div class="control-group">
		<label class="control-label" for="items_id">Meeting Rooms Available</label>
			<div class="controls">
			<?php
				echo '<select class="input-medium" style="width:220px;"  name="items_id">';
					
					#$qcatid = mysql_query("SELECT id_items_conditions, items_conditions_name, items_conditions_descr FROM items_conditions ORDER BY id_items_conditions ASC");
					$query = mysql_query("SELECT id_items,items_name,items_descr,total_person FROM list_inventory 
						WHERE NOT id_items IN
						(
							SELECT items_id
							FROM request_inventory 
							WHERE 
							(
								 (
								('".$q."' > START AND '".$q."' < END) 
								OR ('".$z."' > START AND '".$z."' < END)
								 )

							OR ('".$q."' <= START AND '".$z."'>= END)
							)
						) AND '".$tp."' <= total_person");
					
						while($show=mysql_fetch_array($query)){
						?>
						<option value="<?php echo $show['id_items']; ?>" >
						<?php echo $show['items_name']; echo ' (Max '; echo $show['total_person']; echo' Person )'; ?>
						</option>
						<?php  
						}
					
					
				echo'</select>';
	?>
			</div>
	</div>
	<?php
		
				

koneksi_tutup();
?>					