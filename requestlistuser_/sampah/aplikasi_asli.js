(function($) {
	$(document).ready(function(e) {
		var id_reqinventory = 0;
		var main = "rinventorydetail.data.php";		$("#data-rinventorydetail").load(main);
		$('input:text[name=pencarian]').on('input',function(e){
			var v_cari = $('input:text[name=pencarian]').val();
						if(v_cari!="") {
				$.post(main, {cari: v_cari} ,function(data) {					$("#data-rinventorydetail").html(data).show();				});
			} else {				$("#data-rinventorydetail").load(main);			}		});

		$('.ubah, .tambah').live("click", function(){
			var url = "rinventorydetail.form.php";

			id_reqinventory = this.id;
			if(id_reqinventory != 0) {				$("#myModalLabel").html("Ubah ReQuest Data Detail");			} else {				$("#myModalLabel").html("Add ReQuest Data Detail");			}
			$.post(url, {id: id_reqinventory} ,function(data) {				$(".modal-body").html(data).show();			});
		});						$('.view').live("click", function(){			var url = "rinventorydetail.view.php";			id_reqinventory = this.id;			if(id_reqinventory != 0) {				$("#myModalLabelview").html("View ReQuest Data Detail");			} 			$.post(url, {id: id_reqinventory} ,function(data) {				$(".modal-body-view").html(data).show();			});		});			$('.upload').live("click", function(){			var url = "rinventorydetail.upload.php";			id_reqinventory = this.id;			if(id_reqinventory != 0) {				$("#myModalLabelupload").html("Upload Thumbnail Detail");			} 			$.post(url, {id: id_reqinventory} ,function(data) {				$(".modal-body-upload").html(data).show();			});		});						$('.viewbanner').live("click", function(){			var url = "vbannerdetail.view.php";			id_reqinventory = this.id;			if(id_reqinventory != 0) {				$("#myModalLabelvbanner").html("View Image Detail");			} 			$.post(url, {id: id_reqinventory} ,function(data) {				$(".modal-body-vbanner").html(data).show();			});		});				$('.viewplay').live("click", function(){			var url = "vplaydetail.view.php";			id_reqinventory = this.id;			if(id_reqinventory != 0) {				$("#myModalLabelvplay").html("Video Play Detail");			} 			$.post(url, {id: id_reqinventory} ,function(data) {				$(".modal-body-vplay").html(data).show();			});		});					$('.uploadvdo').live("click", function(){			var url = "videodetailvdo.upload.php";			id_reqinventory = this.id;			if(id_reqinventory != 0) {				$("#myModalLabeluploadvdo").html("Upload Video Detail");			} 			$.post(url, {id: id_reqinventory} ,function(data) {				$(".modal-body-uploadvdo").html(data).show();			});		});				
		$('.hapus').live("click", function(){
			var url = "rinventorydetail.input.php";
			id_reqinventory = this.id;
			var answer = confirm("Apakah anda ingin menghapus data ini?");
			if (answer) {
				$.post(url, {hapus: id_reqinventory} ,function() {					$("#data-rinventorydetail").load(main);				});			}		});
		$('.halaman').live("click", function(event){			kd_hal = this.id;
			$.post(main, {halaman: kd_hal} ,function(data) {				$("#data-rinventorydetail").html(data).show();			});		});	
		$("#simpan-rinventorydetail").bind("click", function(event) {			
			var url = "rinventorydetail.input.php";			var v_title = $('input:text[name=title]').val();			var v_user_name = $('input:text[name=user_name]').val();			var v_user_nik = $('input:text[name=user_nik]').val();			var v_user_telpon = $('input:text[name=user_telpon]').val();			var v_items_id = $('select[name=items_id]').val();			var v_pic_name = $('select[name=pic_name]').val();			var v_date_request = $('input:text[name=date_request]').val();			var v_start = $('input:text[name=start]').val();			var v_end = $('input:text[name=end]').val();			var v_kebutuhan_descr = $('textarea[name=kebutuhan_descr]').val();			var v_approval_name = $('select[name=approval_name]').val();									if(v_title==0||v_start==0||v_end==0||v_items_id==1)			{								alert("Please fill in the empty !!!");			}			else{						$.post(url, {title: v_title, user_name: v_user_name, user_nik: v_user_nik, user_telpon: v_user_telpon, items_id: v_items_id, pic_name: v_pic_name, date_request: v_date_request, start: v_start, end: v_end, kebutuhan_descr: v_kebutuhan_descr, approval_name: v_approval_name, id: id_reqinventory} ,function() {
				$("#data-rinventorydetail").load(main);
				$('#dialog-rinventorydetail').modal('hide');				$('#dialog-rinventorydetailview').modal('hide');				$('#dialog-rinventorydetailupload').modal('hide');				$('#dialog-rinventorydetailuploadvdo').modal('hide');				$('#dialog-vplaydetailview').modal('hide');				$('#dialog-vbannerdetailview').modal('hide');				$("#myModalLabel").html("Add Data rinventorydetail");				$("#myModalLabelview").html("View Data Detail");				$("#myModalLabelupload").html("Upload Image Detail");				$("#myModalLabeluploadvdo").html("Upload Video Detail");				$("#myModalLabelvplay").html("View Video Play");				$("#myModalLabelvbanner").html("View Banner Play");							}); };
		});	});
}) (jQuery);