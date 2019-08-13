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


</table>




<?php 
koneksi_tutup(); 
?>