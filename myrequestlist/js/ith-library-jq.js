//library depend on jquery
function emptyField(obj) {
	for (x in obj) {
		$('#'+obj[x]).val('');
	}
}

function open_pending_ticket(obj) {
	var pid = obj.attr('href').substr(1);
	
	$.ajax ({
		url: 'index.php?m=form&a=opt&pid='+pid,
		type: 'POST',
		cache: false,
		success: function(response) {
			var temp = response.split(';;');
			obj.find('img').attr('src',temp[0]);
			obj.attr('title',temp[1]);
		}
	});
}