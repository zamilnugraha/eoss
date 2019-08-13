<?php 

// memanggil berkas koneksi.php
require 'koneksi.php';
koneksi_buka();
@session_start();

?>



<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="utf-8">

	<title>Meeting Rooms Reservation</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="">

	<meta name="author" content="">



	<link rel="shortcut icon" href="favicon.png"/>

	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

</head>
<body>

	<div class="container" style="margin-left:25px;width:88%;height:auto;margin-top:-5px;">
		<div class="row">
			<h3>
			<div class="input-prepend pull-right">
					<span class="add-on"><i class="icon-search"></i></span>
					<input class="span2" id="prependedInput" type="text" name="pencarian" placeholder="Pencarian..">
				</div><br>
				   
		<div style="margin-left:5px;">
				<font size="4">&nbsp;Items Info Detail</font>
				<a href="#dialog-rinventorydetail" id="0" class="btn tambah" data-toggle="modal">
					<i class="icon-plus"></i> Add Items Detail
				</a><br>
		</div>		
			</h3>
			<div id="data-rinventorydetail"></div>
	</div>
<!--</div>-->



<div id="dialog-rinventorydetail" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel">Add Ticket Detail</h3>
	</div>
	<div class="modal-body"></div>
	<div class="modal-footer">
	
		<button id="simpan-rinventorydetail" class="btn btn-success" onClick="sukses()">Simpan</button>
		<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
	</div>
</div>

<!--
<div id="dialog-rinventorydetailview" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabelview" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabelview">Add Ticket Detail</h3>
	</div>
	<div class="modal-body-view" style="position:relative;overflow-y:auto;max-height:400px;padding:15px;"></div>
	<div class="modal-footer">
		<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
	</div>
</div>
-->

<div id="dialog-rinventorydetailview" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabelview" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabelview">Add Items Detail</h3>
	</div>
	<div class="modal-body-view"></div>
	<div class="modal-footer">
		<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
	</div>
</div>

<div id="dialog-progbannerdetailview" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabelvbanner" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabelvbanner">Add Items Detail</h3>
	</div>
	<div class="modal-body-vbanner"></div>
	<div class="modal-footer">
		<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
	</div>
</div>

<div id="dialog-rinventorydetailupload" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabelupload" aria-hidden="true">

	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabelupload">Add Items Detail</h3>
	</div>

	<div class="modal-body-upload"></div>
	<div class="modal-footer">

		<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
	</div>
</div>

<div id="dialog-vbannerdetailview" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabelvbanner" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabelvbanner">View Banner Detail</h3>
	</div>
	<div class="modal-body-vbanner" style="position:relative;overflow-y:auto;max-height:400px;padding:15px;"></div>
	<div class="modal-footer">
		<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
	</div>
</div>

<div id="dialog-rinventorydetailuploadvdo" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabeluploadvdo" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabeluploadvdo">Add Items Detail</h3>
	</div>
	<div class="modal-body-uploadvdo"></div>
	<div class="modal-footer">
		<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
	</div>
</div>

	
<script src="jquery-1.8.3.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="aplikasi.js"></script>



</body>

</html>

<?
#@session_destroy();
koneksi_tutup();
?>