											<style>
												table.blueTable {
												  border: 1px solid #1C6EA4;
												  background-color: #EEEEEE;
												  width: 100%;
												  text-align: left;
												  border-collapse: collapse;
												  overflow-x:scroll;height:20px;
												  position:relative;
												}
												table.blueTable td, table.blueTable th {
												  border: 1px solid #AAAAAA;
												  padding: 3px 2px;	
												}
												table.blueTable tbody td {
												  font-size: 13px;
												}
												table.blueTable tr:nth-child(even) {
												  background: #D0E4F5;
												}
												table.blueTable thead {
												  background: #1C6EA4;
												  background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  border-bottom: 2px solid #444444;
												}
												table.blueTable thead th {
												  font-size: 12px;
												  text-align:center;
												  font-weight: bold;
												  color: #FFFFFF;
												  border-left: 2px solid #D0E4F5;
												}
												table.blueTable thead th:first-child {
												  border-left: none;
												}

												table.blueTable tfoot {
												  font-size: 14px;
												  font-weight: bold;
												  color: #FFFFFF;
												  background: #D0E4F5;
												  background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  border-top: 2px solid #444444;
												}
												table.blueTable tfoot td {
												  font-size: 14px;
												}
												table.blueTable tfoot .links {
												  text-align: right;
												}
												table.blueTable tfoot .links a{
												  display: inline-block;
												  background: #1C6EA4;
												  color: #FFFFFF;
												  padding: 2px 8px;
												  border-radius: 5px;
												}			
											</style>
											<script src="./js/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('input[type="checkbox"]').click(function()
	{
		var inputValue = $(this).attr("value");
		var targetFsd = $("." + inputValue);
		$(".fsd").not(targetFsd).hide();
		$(targetFsd).show();
	});
});
</script>
<script src="../jquery/jquery.min.js"></script>
<script src="./js/jquery-1.9.1.js.download"></script>
<script>
	$(document).ready(function()
	{
		$("#prepdumbequipmentsrc").on("keyup", function() 
		{
			var value = $(this).val().toLowerCase();
			$("#myCodesprepdumbEQ tr").filter(function() 
			{
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			});
		});
	});
</script>

<script type="text/javascript">
$(window).load(function()
{      
	$(document).ready(function() 
	{
		$("input<?='#textseqprepdumb'.$rvSCat["KODE_BARANG"];?>").on("keyup blur", function() 
		{
			if( this.value != "")
			{
				$("<?='#cekseqprepdumb'.$rvSCat["KODE_BARANG"];?>").show();
				$("input<?='#cekseqprepdumb'.$rvSCat["KODE_BARANG"];?>").prop("checked", this.value != "");						
			}else{
				$("<?='#cekseqprepdumb'.$rvSCat["KODE_BARANG"];?>").show();
				$("input<?='#cekseqprepdumb'.$rvSCat["KODE_BARANG"];?>").prop("checked", this.value != "");						
			}	
			/* $("#boxcheck").hide();*/
		});
		// don't allow user to manually change the checkbox
		$("input<?='#cekseqprepdumb'.$rvSCat["KODE_BARANG"];?>").click(function() 
		{
			$("<?='#cekseqprepdumb'.$rvSCat["KODE_BARANG"];?>").show();
																			return false;
		});
	});
});
</script>  
<script src="./js/jquery.min.js.download"></script>		