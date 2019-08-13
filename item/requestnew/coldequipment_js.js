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