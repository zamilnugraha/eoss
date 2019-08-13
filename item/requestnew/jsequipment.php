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
</script><script src="../jquery/jquery.min.js"></script>
<script src="./js/jquery-1.9.1.js.download"></script>
<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ COLD EQUIPMENT @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
<script>
	$(document).ready(function()
	{
		$("#coldequipmentsrc").on("keyup", function() 
		{
			var value = $(this).val().toLowerCase();
			$("#myCodescoldEQ tr").filter(function() 
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
		$("input<?='#textseqcold'.$rvSCat["KODE_BARANG"];?>").on("keyup blur", function() 
		{
			if( this.value != "")
			{
				$("<?='#cekseqcold'.$rvSCat["KODE_BARANG"];?>").show();
				$("input<?='#cekseqcold'.$rvSCat["KODE_BARANG"];?>").prop("checked", this.value != "");						
			}else{
				$("<?='#cekseqcold'.$rvSCat["KODE_BARANG"];?>").show();
				$("input<?='#cekseqcold'.$rvSCat["KODE_BARANG"];?>").prop("checked", this.value != "");						
			}	
		/* $("#boxcheck").hide();*/

		});

		// don't allow user to manually change the checkbox
		$("input<?='#cekseqcold'.$rvSCat["KODE_BARANG"];?>").click(function() 
		{
			$("<?='#cekseqcold'.$rvSCat["KODE_BARANG"];?>").show();
			return false;
		});
	});
});
</script>
<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ HEAT EQUIPMENT @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->

<script>
$(document).ready(function()
{
	$("#heatequipmentsrc").on("keyup", function() 
	{
		var value = $(this).val().toLowerCase();
		$("#myCodesheatEQ tr").filter(function() 
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
		$("input<?='#textseqheat'.$rvSCat["KODE_BARANG"];?>").on("keyup blur", function() 
		{
			if( this.value != "")
			{
				$("<?='#cekseqheat'.$rvSCat["KODE_BARANG"];?>").show();
				$("input<?='#cekseqheat'.$rvSCat["KODE_BARANG"];?>").prop("checked", this.value != "");						
			}else{
				$("<?='#cekseqheat'.$rvSCat["KODE_BARANG"];?>").show();
				$("input<?='#cekseqheat'.$rvSCat["KODE_BARANG"];?>").prop("checked", this.value != "");						
			}	
		/* $("#boxcheck").hide();*/

		});

		// don't allow user to manually change the checkbox
		$("input<?='#cekseqheat'.$rvSCat["KODE_BARANG"];?>").click(function() 
		{
			$("<?='#cekseqheat'.$rvSCat["KODE_BARANG"];?>").show();
			return false;
		});
	});
});
</script>
<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->



