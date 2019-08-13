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