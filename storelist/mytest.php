<?php 

// memanggil berkas koneksi.php
require 'koneksi.php';
koneksi_buka();
@session_start();

?>



<!DOCTYPE html>

<html lang="en">


	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

<body style="background-color:#fff;">

<!-- DatePicker -->
<!--<link rel="stylesheet" href="datepicker/base/jquery.ui.all.css" type="text/css">
 <script type="text/javascript" src="datepicker/jquery.js"></script>
 <script type="text/javascript" src="datepicker/jquery.ui.core.js"></script>
 <script type="text/javascript" src="datepicker/jquery.ui.datepicker.js"></script>
 <script type="text/javascript" src="datepicker/jquery.ui.widget.js"></script>
 <link rel="stylesheet" type="text/css" href="datep/jquery.datetimepicker.css"/>		

 <script src="datep/jquery.js"></script>
<script src="datep/jquery.datetimepicker.js"></script>-->
<script type="text/javascript" src="scripts/jquery.min.js"></script>
<script type="text/javascript" src="scripts/jquery.form.js"></script>

<style>
button.filter {
    background: #ff9900;
    border: 2px solid white;
    border-radius: 11px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 1);
    color: black;
    cursor: pointer;
    font-size: 10pt;
    font-weight: bold;
    padding: 5px 10px;
    text-shadow: 0 1px 1px white;
}
</style>

	<div class="container" style="margin-left:25px;width:55%;height:auto;margin-top:25px;">
		<div class="row">
				<h3>	

				<br>
				<style>
				input.span2, textarea.span2, .uneditable-input.span2 {
					width: 150px;
				}
				</style>
				
				<div class=" pull-right" style="margin-top:-50px;">
						<span class="add-on"><i class="icon-search"></i></span>
						<input class="span2" id="prependedInput" style="width:250px;" type="text" name="pencarian" oninput="myFunction()">
				</div>
		
			<div style="margin-left:15px;margin-top:-100px;font-family:Arial,Helvetica,sans-serif;font-size: 13px;">
					
				<center>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
											<th style="background-color:#909090;color:#fff;border-color:white;width:80px;text-align:center;">Outlet<br>Name</th>
											
                                        </tr>
                                    </thead>
                                    
                                        
                                    </tbody>
                                </table>
                            </center>
			</div>		
				</h3>
			
				
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
		</div>
<!--</div>-->




	
<script src="jquery-1.8.3.min.js"></script>

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<!--<script src="aplikasi.js"></script>-->


<link href="css/jquery.dataTables.css" rel="stylesheet" media="screen">
</body>

</html>
<script>
function myFunction() {
    $(document).ready(function() {
		var filter = false;
        myTable = $('#dataTables-example').DataTable({
                responsive: true,
				iDisplayLength: 1,
				iDisplayStart: 0,
				bLengthChange:false,
				bInfo: false,
				bProcessing: true,
				deferLoading: 0, // here
				bFilter: false,
				page:false,
				ajax: {
					url: "controller/mytest.php", // Change this URL to where your json data comes from
					type: "GET", // This is the default value, could also be POST, or anything you want.
					data: function(d) {
						d.filter = filter;
						d.query=document.getElementById("prependedInput").value;
					},
					draw: 1

				},
				columns: [
					{"data": "outletName"}
										
				]
        });
		$("#prependedInput").change(function(){
			filter=true;
			//alert($('#statusticket_sc').val());
			var newUrl = 'controller/mytest.php';
			$('#dataTables-example').dataTable()._fnAjaxUpdate();
		});
    });
}	
    </script>
	
<?
#@session_destroy();
koneksi_tutup();
?>