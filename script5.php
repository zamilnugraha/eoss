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
						}