(function($) {
	$(document).ready(function(e) {

		var main = "rinventorydetail.data.php";
		$('input:text[name=pencarian]').on('input',function(e){
			var v_cari = $('input:text[name=pencarian]').val();
			
				$.post(main, {cari: v_cari} ,function(data) {
			} else {

		$('.ubah, .tambah').live("click", function(){
			var url = "rinventorydetail.form.php";

			id_reqinventory = this.id;
			if(id_reqinventory != 0) {
			$.post(url, {id: id_reqinventory} ,function(data) {
		});
		$('.hapus').live("click", function(){
			var url = "rinventorydetail.input.php";
			id_reqinventory = this.id;
			var answer = confirm("Apakah anda ingin menghapus data ini?");
			if (answer) {
				$.post(url, {hapus: id_reqinventory} ,function() {
		$('.halaman').live("click", function(event){
			$.post(main, {halaman: kd_hal} ,function(data) {
		$("#simpan-rinventorydetail").bind("click", function(event) {
			var url = "rinventorydetail.input.php";
				$("#data-rinventorydetail").load(main);
				$('#dialog-rinventorydetail').modal('hide');
		});
}) (jQuery);