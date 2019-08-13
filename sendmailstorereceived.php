<? 
					/* START SEND NOTIF MAIL TO FSD */
						###header ("Location: index.php?view=sendmailtogmo&status=sendsuccess&pid=$pid");	
											
						error_reporting(E_STRICT);
						date_default_timezone_set('America/Toronto');
						require_once('email/class.phpmailer.php');
						$mail             = new PHPMailer();

						$mail->IsSMTP();
						$mail->SMTPDebug  = 1;           
						$mail->SMTPKeepAlive = false;                                     
						$mail->SMTPAuth   	 = true;       
						$mail->Mailer 		 = 'smtp';   
						$mail->SMTPSecure    = 'ssl';
						$mail->Host       	 = 'mail.ffi.co.id';     
						#$mail->Host       	 = '117.54.9.179';     
						#$mail->Host       	 = '192.168.10.10';     
						$mail->Port       	 = 465;                  
						$mail->Username   	 = 'system.servicedesk@ffi.co.id';  
						$mail->Password   	 = 'Kfc_System';      
										
						$newid = '003370519-040270';
						$usrid = $_SESSION['user_id'];
						#$usridx = $_GET['uid'];
						$usridx = '0316';
						#$cdate = date('j F Y');
						#$cdate = date('d F Y');
															
						$cdate3a = date('j')+1;
						$cdate3b = date('F');
						$cdate3c = date('Y');			
						$cdate = $cdate3a.'&nbsp;'.$cdate3b.'&nbsp;'.$cdate3c;

															$cone =  mysql_connect('localhost','usrservicedesk','kfc14022');
																		 mysql_select_db('servicedesk',$cone);
															
															$qCekDataX = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.* FROM ITH_TICKET_HEADER 
																					  JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
																					  WHERE ITH_TICKET_HEADER.ticket_id = '".$newid."'");
															$rCekDataX = mysql_fetch_object($qCekDataX);


															$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
															$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDU ANGGA'); 
															$mail->AddCC('mantechno2020@gmail.com', 'MANTECHNO');		
															$mail->AddCCProg1('wilujeng.lestari@ffi.co.id','ARYN');
															
															$cone =  mysql_connect('localhost','usrservicedesk','kfc14022');
																	 mysql_select_db('servicedesk',$cone);
																
													
																	$myServer = $_SERVER["SERVER_NAME"].'/eoss';							
																	$qCekDataTicketHeader = mysql_query("SELECT ticket_id,ticket_subject,ticket_problem,ticket_createby 
																										 FROM ITH_TICKET_HEADER WHERE ticket_id = '".$newid."'");	
																	$rCekDataTicketHeader = mysql_fetch_object($qCekDataTicketHeader);	
																	$subjectTicketStoreReq2 = $rCekDataTicketHeader->ticket_subject;
																	$reasonTicketStoreReq2 = $rCekDataTicketHeader->ticket_problem;	
																	$qCekDataStorenya2 = mysql_query("SELECT user_nik,user_realname FROM ITH_USER 
																									  WHERE user_nik = '".$rCekDataTicketHeader->ticket_createby."'");		
																	$rCekDataStorenya2 = mysql_fetch_object($qCekDataStorenya2);
																	$storeNameRequest2 = $rCekDataStorenya2->user_realname;	
																	
																	$mail->Subject    = "[E-OPERATION SUPPORT PROGRAM].RECEIVED-BY-STORE-X : $subjectTicketStoreReq2";
																	$mail->AltBody    = "$subjectTicketStoreReq2"; 
																	
																	$qCekReqByName = mysql_query("SELECT ITH_TICKET_HEADER.ticket_id, ITH_TICKET_HEADER.ticket_subject,
																									  ITH_USER.user_nik, ITH_USER.user_realname, ITH_TICKET_HEADER.ticket_createdate 
																									  FROM ITH_TICKET_HEADER 
																									  JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
																									  WHERE ITH_TICKET_HEADER.ticket_id = '".$newid."'");	
																	$rCekReqByName	= mysql_fetch_object($qCekReqByName);		
																	$pid =	$_GET['pid'];															
																	$bodymail1 .= "									
																		<br>This is a request by A1 : $rCekReqByName->user_realname For Your Approval With Details as Follows :<br>
																			<ul>
																				<li>Request ID : $pid</li>
																				<li>Subject : $rCekReqByName->ticket_subject</li>
																				<li>Category : Equipment</li>
																				<li>Ticket Status : On Process</li>
																				<li>Team Operational Approval Status : Approved</li>
																				<li>Ticket Create date : $rCekReqByName->ticket_createdate</li>";											
																	$qCekDataYangDiApprovedTestAZ = mysql_query("SELECT ticket_id, kode_tipebrg, request_by, kuantitas, nama_tipebarang, ticketapprovalstatusid_gmo, 
																												ticketapprovalstatusid_rom, ticketapprovalstatusid_am,keterangan,
																												tickettransferto_outletname,tickettransferto_outletcode,received_by,received_date 
																												FROM ITH_TIPEBARANG_KODE 
																												WHERE ticket_id = '".$newid."' AND
																												tickettransferto_outletcode = '".$usridx."'");
																	while($rCekDataYangDiApprovedTestAZ = mysql_fetch_object($qCekDataYangDiApprovedTestAZ))
																	{
																	/**
																		$allItemName = preg_replace('/[^A-Za-z0-9\  ]/', '', $rCekDataYangDiApprovedTestAA->nama_tipebarang);
																		$qtyItemXY = $rCekDataYangDiApprovedTestAA->kuantitas.' Unit<br>';			
																			$bodymail2 .= "																		
																					<li>Item Name  : $allItemName</li> 
																					<li>The amount of goods  : $qtyItemXY</li>";
																	**/
																			$allItemName = preg_replace('/[^A-Za-z0-9\  ]/', '', $rCekDataYangDiApprovedTestAZ->nama_tipebarang);
																			$transferToOutletName = preg_replace('/[^A-Za-z0-9\  ]/', '', $rCekDataYangDiApprovedTestAZ->tickettransferto_outletname);
																			$transferToOutletNames = ucwords(strtolower($transferToOutletName));
																			$receivedbyName = preg_replace('/[^A-Za-z0-9\  ]/', '', $rCekDataYangDiApprovedTestAZ->received_by);
																			$receivedbyNames = ucwords(strtolower($receivedbyName));
																			$receivedDate = $rCekDataYangDiApprovedTestAZ->received_date;
																			$qtyItemXY = $rCekDataYangDiApprovedTestAZ->kuantitas.' Unit';			
																			if($rCekDataYangDiApprovedTestAZ->keterangan == 'MOVE TO OTHER STORE')
																			{
																				$bodymail2 .= "																		
																							<li>Item Name   : $allItemName</li>
																							<li>Transfer To : $transferToOutletNames</li>
																							<li>Received Date : $receivedDate</li>
																							<li>Received By : $receivedbyNames</li>";
																			}elseif($rCekDataYangDiApprovedTestAZ->keterangan == 'MOVE TO WAREHOUSE'){
																				$bodymail2 .= "																		
																							<li>Item Name   : $allItemName</li>
																							<li>Transfer To : Warehouse</li>";
																			}															
																	}
																		
																		$bodymail3 .= "																		
																			</ul>
																		<hr>
																		Reason / Justification :	<br>$reasonTicketStoreReq2<br><br>
																		<hr>
																			For Action, Please Click In Here (<a href='http://$myServer/?m=notifmail&a=sendauth&pid=$pid&uid=001484'>Click Here</a>)
																		<br><br>Regards,<br><br>
																		$storeNameRequest2";
																		$allbodymail = $bodymail1.$bodymail2.$bodymail3;
																		$mail->Body .= $allbodymail;															
																												
															if(!$mail->Send()) 
															{
																/* OFFLINE */	
															header ("Location: index.php?view=message&pid=$newid");
															} else {
																/* ONLINE */			
																header ("Location: index.php?view=message&pid=$newid");
															}
?>