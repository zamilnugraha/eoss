<script>
    $(document).ready(function() {
		var filter = false;
		var params= $("#formfilter").serialize();
		var login = "<?=$_SESSION['user_level']?>";
		var uname = "<?=$_SESSION['user_realname']?>";
		var usrnik = "<?=$_SESSION['user_nik']?>";
        myTable = $('#dataTables-example').DataTable({
                responsive: true,
				iDisplayLength: 8,
				iDisplayStart: 0,
				bLengthChange:false,
				bInfo: false,
				bProcessing: true,
				deferLoading: 0, // here
				bFilter: false,
				ajax: {
					url: "controller/index.php", // Change this URL to where your json data comes from
					type: "GET", // This is the default value, could also be POST, or anything you want.
					data: function(d) {
						d.romFrom = "<?=$_SESSION['ugroupid']?>";
						if("<?=$userlevel?>"=='3'){
							d.areaFrom = "<?=$_SESSION['usubgroupid']?>";
							d.areaTo = "<?=$_SESSION['usubgroupid']?>";
						}else{
							d.areaFrom = $('#areafrom_sc').val();
							d.areaTo = $('#areato_sc').val();
						}
						d.romTo = $('#romto_sc').val()==""?"<?=$_SESSION['ugroupid']?>":$('#romto_sc').val();
						d.datefrom = $('input:text[name=dtfrom_sc]').val();
						d.dateto = $('input:text[name=dtto_sc]').val();
						d.status = $('#statusticket_sc').val();
						//d.statusAprvl = $('#statusaprvl_sc').val();
						d.supportBy = $('#supportby_sc').val();
						d.store = $('#storefrom_sc').val();
						d.filter = filter;
						d.query=document.getElementById("prependedInput").value;	
						d.forMe = document.getElementById('onlyForMe').checked;
					},
					draw: 1

				},
				columns: [
					{"data": "date"},
					{"data": "time"},
				/*	{"data": "ticketId"}, */
					{"data": "",
						"bSortable": false,
					  "mRender": function(data, type, full) {
						  if(full.ticketRefID != ''){
							var link = ""+full.ticketId+"<br>(Ticket Ref : <div style=color:red> "+full.ticketRefID+"</div>)";
						  }else if(full.ticketRefID == ''){
							var link = ""+full.ticketId+"<br>(Ticket Ref : <div style=color:red> n/a </div>)";
						  }	
						return link;
					  }},				
					{"data": "requestBy"},
					{"data": "subject"},
					{"data": "status"},
					{"data": "reqVia"},
					{"data": "supportBy"},			

					{"data": "",
						"bSortable": false,
					  "mRender": function(data, type, full) {
						 var via="updateforuser";
						//  var via="updateforuserapppic";
						//  var via="home";
						  //alert(full.reqVia);
						  if(full.reqVia!='Via Web'){
							 via="update";
							 // via="home";
						  }
						  
						  var link = "";
							 link ="<a href='<?="http://".$_SERVER['SERVER_NAME']."/eoss/index.php?view=comment&pid="?>"+full.ticketId+"<?="&uid=".$_SESSION['user_id']?>' title='Ticket ID: "+full.ticketId+"' target='_parent'>"
								+"<img src='img/Readmore1.png' alt='' height='50' width='50'></img>"
								+"</a>";					
					
						return link;
					  }
					},
					
					/* ################################################# APPROVAL KOLOM ##################################################################### */
					{"data": "",
						"bSortable": false,
					  "mRender": function(data, type, full) {
						 var via="updateforuser";
						//  var via="updateforuserapppic";
						//  var via="home";
						  //alert(full.reqVia);
						  if(full.reqVia!='Via Web'){
							 via="update";
							 // via="home";
						  }
						  
						  var link = "";
						
						/* APPROVAL BY ROM */  
						/*
						if((login==8) && (full.AprvlStsId3 ==1 && full.AprvlStsId2 ==2 && full.AprvlStsId ==2) && (full.Apps1 == uname || full.Apps2 == uname || full.Apps3 == uname || full.Apps4 == uname || full.Apps5 == uname) && (full.status=='On Process')){							  
							 link ="<a href='<?="http://".$_SERVER['SERVER_NAME']."/index.php?view=comment&pid="?>"+full.ticketId+"<?="&uid=".$_SESSION['user_id']?>' title='Ticket ID: "+full.ticketId+"' target='_parent'>"
								+"<img src='img/Readmore1.png' alt='' height='50' width='50'></img>"
								+"</a>";
						}else if((login==8) && (full.AprvlStsId3 ==1 && full.AprvlStsId2 ==2 && full.AprvlStsId ==2) && (full.Pic1 == uname || full.Pic2 == uname || full.Pic3 == uname) && (full.status=='On Process')){							  
						  link ="<a href='<?="http://".$_SERVER['SERVER_NAME']."/index.php?view=comment&pid="?>"+full.ticketId+"<?="&uid=".$_SESSION['user_id']?>' title='Ticket ID: "+full.ticketId+"' target='_parent'>"
								+"<img src='img/Readmore1.png' alt='' height='50' width='50'></img>"
								+"</a>";	
						*/
							/* ROM MENJADI APPROVAL (STATUS TICKET ON PROCESS, DAN AREA MANAGER TIKET TIDAK DIAPPROVAL) */
							//if((login==8) && (full.Apps1 == uname || full.Apps2 == uname || full.Apps3 == uname || full.Apps4 == uname || full.Apps5 == uname) && (full.status=='On Process') && ((full.AprvlStsId2== 2 && full.AprvlStsId== 0))){							  
							if((login==8) && (full.Apps1 == uname || full.Apps2 == uname || full.Apps3 == uname || full.Apps4 == uname || full.Apps5 == uname) && ((full.AprvlStsId2== 2 && full.AprvlStsId== 0))){							  
								 link ="<center><a href='#' title='Ticket ID:&nbsp;" +full.ticketId+ "' style='pointer-event:none;cursor:not-allowed;'>"
									+"<img src='img/unapproved.png' alt='' height='30' width='50' style='opacity:0.3;' title='UnApproval By : "+full.Apps1+"'></img></a></center>";
									
							/* ROM MENJADI APPROVAL (STATUS TICKET ON PROCESS, DAN MENUNGGU AREA MANAGER MELAKUKAN APPROVAL) */
							}else if((login==8) && (full.Apps1 == uname || full.Apps2 == uname || full.Apps3 == uname || full.Apps4 == uname || full.Apps5 == uname) && (full.status=='On Process') && ((full.AprvlStsId2== 2 && full.AprvlStsId== 1))){							  
								 link ="<center><a href='<?="http://".$_SERVER['SERVER_NAME']."/eoss/index.php?view=home&pid="?>"+full.ticketId+"<?="&uid=".$_SESSION['user_id']?>' title='Ticket ID:&nbsp;" +full.ticketId+ "' target='_parent'>"
									+"<img src='img/goapps2.png' alt='' height='30' width='50' title='Aprvl : "+uname+"'></img></a></center>";
							
							/* ROM MENJADI APPROVAL (STATUS TICKET ON PROCESS AND STATUS DI APPROVAL OLEH ROM) */
							}else if((login==8) && (full.Apps1 == uname || full.Apps2 == uname || full.Apps3 == uname || full.Apps4 == uname || full.Apps5 == uname) && (full.status=='On Process') && ((full.AprvlStsId2== 1 && full.AprvlStsId== 1))){						  
								 link ="<center><a href='<?="http://".$_SERVER['SERVER_NAME']."/eoss/index.php?view=home&pid="?>"+full.ticketId+"<?="&uid=".$_SESSION['user_id']?>' title='Ticket ID:&nbsp;" +full.ticketId+ "' target='_parent'>"
									+"<img src='img/approveds.png' alt='' height='30' width='50' title='Aprvl : "+uname+"'></img></a></center>";
									
							/* ROM MENJADI APPROVAL (STATUS TICKET ON PROCESS AND STATUS TIDAK DI APPROVAL OLEH ROM) */
							}else if((login==8) && (full.Apps1 == uname || full.Apps2 == uname || full.Apps3 == uname || full.Apps4 == uname || full.Apps5 == uname) && (full.status=='On Process') && ((full.AprvlStsId2== 0 && full.AprvlStsId== 1))){						  
								 link ="<center><a href='<?="http://".$_SERVER['SERVER_NAME']."/eoss/index.php?view=home&pid="?>"+full.ticketId+"<?="&uid=".$_SESSION['user_id']?>' title='Ticket ID:&nbsp;" +full.ticketId+ "' target='_parent'>"
									+"<img src='img/unapproved.png' alt='' height='30' width='50' title='Aprvl : "+uname+"'></img></a></center>";
									
						/* APPROVAL AREA MANAGER /
							/* AREA MGR MENJADI APPROVAL (STATUS TICKET OPEN) */
							}else if((login==3) && (full.Apps1 == uname || full.Apps2 == uname || full.Apps3 == uname || full.Apps4 == uname || full.Apps5 == uname) && (full.status=='Open') && (full.AprvlStsId== 2)){							  
								 link ="<center><a href='<?="http://".$_SERVER['SERVER_NAME']."/eoss/index.php?view=home&pid="?>"+full.ticketId+"<?="&uid=".$_SESSION['user_id']?>' title='Ticket ID:&nbsp;" +full.ticketId+ "' target='_parent'>"
									+"<img src='img/goapps2.png' alt='' height='30' width='50' title='Aprvl By : "+uname+"'></img></a></center>";
							
							/* AREA MGR MENJADI APPROVAL (STATUS TICKET ON PROCESS AND STATUS DI APPROVAL OLEH AREA MGR) */
							}else if((login==3) && (full.Apps1 == uname || full.Apps2 == uname || full.Apps3 == uname || full.Apps4 == uname || full.Apps5 == uname) && (full.status=='On Process') && (full.AprvlStsId== 1)){							  
								 link ="<center><a href='<?="http://".$_SERVER['SERVER_NAME']."/eoss/index.php?view=home&pid="?>"+full.ticketId+"<?="&uid=".$_SESSION['user_id']?>' title='Ticket ID:&nbsp;" +full.ticketId+ "' target='_parent'>"
									+"<img src='img/approveds.png' alt='' height='30' width='50' title='Aprvl By : "+uname+"'></img></a></center>";
									
							/* AREA MGR MENJADI APPROVAL (STATUS TICKET ON PROCESS AND STATUS TIDAK DI APPROVAL OLEH AREA MGR) */
							}else if((login==3) && (full.Apps1 == uname || full.Apps2 == uname || full.Apps3 == uname || full.Apps4 == uname || full.Apps5 == uname) && (full.status=='On Process') && (full.AprvlStsId== 0)){							  
								 link ="<center><a href='<?="http://".$_SERVER['SERVER_NAME']."/eoss/index.php?view=home&pid="?>"+full.ticketId+"<?="&uid=".$_SESSION['user_id']?>' title='Ticket ID:&nbsp;" +full.ticketId+ "' target='_parent'>"
									+"<img src='img/unapproved.png' alt='' height='30' width='50' title='UnAprvl By : "+uname+"'></img></a></center>";
							
							/* AREA MGR MENJADI PIC */
							}else if((login==3) && (full.Pic1 == uname || full.Pic2 == uname || full.Pic3 == uname) && (full.status=='Open')){							  
							  link ="<a href='<?="http://".$_SERVER['SERVER_NAME']."/eoss/index.php?view="?>"+via+"<?="&pid="?>"+full.ticketId+"<?="&uid=".$_SESSION['user_id']?>' title='Ticket ID: "+full.ticketId+"' target='_parent'>"
									+"A2 <img src='img/editx.png' alt='' height='30' width='50' title='PIC : "+uname+"'></img></a>";	
								
 						}else if((login==3) && (full.ticketRef == 1) && (full.status=='Open')){							  
							  link ="";
  					    }else{
							 link ="";
						}
					
						return link;
					  }
					},
					
					/* ################################################# AM PIC KOLOM ######################################################################## */
					{"data": "",
						"bSortable": false,
						"mRender": function(data, type, full) {
						 var via="updateforuser";
						//  var via="updateforuserapppic";
						//  var via="home";
						  //alert(full.reqVia);
						  if(full.reqVia!='Via Web'){
							 via="update";
							 // via="home";
						  }
						  
						  var link = "";
						/*   23 Juli2018 */
						/*	if((login ==3) && (full.Apps1 == uname || full.Apps2 == uname || full.Apps3 == uname || full.Apps4 == uname) && (full.statusApprovalId ==2 || full.statusApprovalId ==0) && full.myApproval==1 && (full.status=='On Process')){							  
								 link ="<a href='<?="http://".$_SERVER['SERVER_NAME']."/index.php?view=home&pid="?>"+full.ticketId+"<?="&uid=".$_SESSION['user_nik']?>' title='Ticket ID:&nbsp;" +full.ticketId+ "' target='_parent'>"
									+"B1 <img src='img/editx.png' alt='' height='30' width='50' title='"+full.Apps1+"'></img></a>";
							} */
							if((login ==3) && (full.Pic1 == uname || full.Pic2 == uname || full.Pic3 == uname || full.Pic4 == uname) && (full.statusActivityId ==2 || full.statusActivityId ==4) && (full.status=='On Process')){							  
							  link ="<a href='<?="http://".$_SERVER['SERVER_NAME']."/index.php?view="?>"+via+"<?="&pid="?>"+full.ticketId+"<?="&uid=".$_SESSION['user_nik']?>' title='Ticket ID: "+full.ticketId+"' target='_parent'>"
									+"B2 <img src='img/editx.png' alt='' height='30' width='50' title='"+full.Apps1+"'></img></a>";
							}	
							if((login==3) && (full.ticketRef == 1) && (full.status=='Open')){							  
							/*  link ="<a href='<?="http://".$_SERVER['SERVER_NAME']."/index.php?view=updateuserrespond&pid="?>"+full.ticketId+"<?="&uid=".$_SESSION['user_nik']?>' title='Ticket ID: <?=$dtmyticket->ticket_id?>' target='_parent'>"
								+"<img src='img/reference.png' alt='' height='30' width='50'></img></a>";	*/							  
							  link ="<a href='<?="http://".$_SERVER['SERVER_NAME']."/index.php?view=home&pid="?>"+full.ticketId+"<?="&uid=".$_SESSION['user_nik']?>' title='Ticket ID: <?=$dtmyticket->ticket_id?>' target='_parent'>"
								+"<img src='img/reference.png' alt='' height='30' width='50'></img></a>";	
							}								
						/* 23 Juli2018 */
						if((login==8) && (full.AprvlStsId3 ==1 && full.AprvlStsId2 ==2 && full.AprvlStsId ==2) && (full.Apps1 == uname || full.Apps2 == uname || full.Apps3 == uname || full.Apps4 == uname || full.Apps5 == uname) && (full.status=='On Process')){							  
							 link ="<a href='<?="http://".$_SERVER['SERVER_NAME']."/index.php?view=home&pid="?>"+full.ticketId+"<?="&uid=".$_SESSION['user_id']?>' title='Ticket ID:&nbsp;" +full.ticketId+ "' target='_parent'>"
								+"B3 <img src='img/editx.png' alt='' height='30' width='50' title='Aprvl : "+uname+"'></img></a>";
						}else if((login==8) && (full.AprvlStsId3 ==1 && full.AprvlStsId2 ==2 && full.AprvlStsId ==2) && (full.Pic1 == uname || full.Pic2 == uname || full.Pic3 == uname) && (full.status=='On Process')){							  
						  link ="<a href='<?="http://".$_SERVER['SERVER_NAME']."/index.php?view="?>"+via+"<?="&pid="?>"+full.ticketId+"<?="&uid=".$_SESSION['user_id']?>' title='Ticket ID: "+full.ticketId+"' target='_parent'>"
								+"B4 <img src='img/editx.png' alt='' height='30' width='50' title='PIC : "+uname+"'></img></a>";	
						}		
						return link;
					  }
					}					
				],
				order: [[ 0, "asc" ]]
        });
		$("#klikfilter").click(function(){
			filter=true;
			//alert($('#statusticket_sc').val());
			var newUrl = 'controller/index.php';
			$('#dataTables-example').dataTable()._fnAjaxUpdate();
		});
		$("#prependedInput").change(function(){
			filter=true;
			//alert($('#statusticket_sc').val());
			var newUrl = 'controller/index.php';
			$('#dataTables-example').dataTable()._fnAjaxUpdate();
		});
		$("#onlyForMe").change(function(){
			filter=true;
			//alert($('#onlyForMe').val());
			var newUrl = 'controller/index.php';
			$('#dataTables-example').dataTable()._fnAjaxUpdate();
		});		
		$("#areafrom_sc").change(function(){
			$('#loading-indicator').show();
			var params="?";
			params += "romFrom="+$('#romfrom_sc').val();
			params += "&romTo="+$('#romto_sc').val()==""?$('#romfrom_sc').val():$('#romto_sc').val();
			params += "&areaFrom="+$('#areafrom_sc').val();
			params += "&areaTo="+$('#areato_sc').val();
			$.ajax({
			  url: "controller/getstore.php"+params,
			  dataType : "html",
			  type: 'GET',
			  success:function(data){
				  $("#storefrom_sc").html(data);
				  $('#loading-indicator').hide();
			  }
			});
		});
		$("#areato_sc").change(function(){
			$('#loading-indicator').show();
			var params="?";
			params += "romFrom="+$('#romfrom_sc').val();
			params += "&romTo="+$('#romto_sc').val()==""?$('#romfrom_sc').val():$('#romto_sc').val();
			params += "&areaFrom="+$('#areafrom_sc').val();
			params += "&areaTo="+$('#areato_sc').val();
			$.ajax({
			  url: "controller/getstore.php"+params,
			  dataType : "html",
			  type: 'GET',
			  success:function(data){
				  $("#storefrom_sc").html(data);
				  $('#loading-indicator').hide();
			  }
			});
		});
    });
    </script>