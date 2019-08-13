<?
								#echo "<br>Food Processing EQ";
								#echo "<br>Kode Item = ".$objResultCekParamPrice->KODE_BARANG;
								#echo "<br>Nama Item = ".$objResultCekParamPrice->NAMA_BARANG;
								date_default_timezone_set('Asia/Jakarta'); 
								$ticketapproval_createdate1= date('d/m/Y');
								$ticketapproval_createtime1= date('H:i');
								$qCekValueParam = mysql_query("SELECT kd_parametertype,kd_grup,name_grup,value_parameter_gmo FROM ITH_PARAMETER 
															   WHERE kd_parametertype = 'param_0005'");
								$rCekValueParam = mysql_fetch_object($qCekValueParam);
								if(($objResultCekParamPrice-> HARGA_TERAKHIR >= $rCekValueParam->value_parameter_gmo)||($objResultCekParamPrice-> HARGA_TERAKHIR == $rCekValueParam->value_parameter_rom))
								{
									#echo "<br>Harga Terakhir >= Value Parameter";
									#echo "<br>Harga Terakhir == Value Parameter";
									#echo "<br><font color=blue>Oleh Sebab itu harus ada persetujuan(Approval) yg ditujukan ke ROM</font>";
								
								/** @@@@@ CEK JUMLAH ITEM FOOD PROCESSING EQ REQUESTED YANG HARGA ITEM LEBIH BESAR ATAU SAMA DENGAN VALUE PARAM @@@@@@@ **/
								/**	$qCekJmlBrg = mysql_query("SELECT COUNT(ticket_id) AS Tbarang FROM ITH_TIPEBARANG_KODE 
															   WHERE ticket_id ='".$pid."' AND kode_tipebarang = '".$value_kdtipebrg."'");
								**/	$qCekJmlBrg = mysql_query("SELECT COUNT(ticket_id) AS Tbarang FROM ITH_TIPEBARANG_KODE 
															   WHERE ticket_id ='".$pid."' 
															   AND (kode_tipebrg='RQS-03-000114' OR kode_tipebrg='RQS-03-000114replace')");
  								   $rCekJmlBrg = mysql_fetch_object($qCekJmlBrg);
										/* Cek Jika Qty Item Hanya Satu Item */
										if($rCekJmlBrg->Tbarang==1)
										{
											#echo "<br>Jumlah Item = ".$rCekJmlBrg->Tbarang;	
											if($statusaprvl=='-') // Ketika Satu Item Saja yang tidak diApproved/ Hanya satu item saja yg di Reject
											{													
												#echo "<br>Ketika Status Tidak Diapproved dalam hanya Satu item saja.";
												
													$updateStatusTicketID = $ith->runQuery("
													UPDATE ITH_TICKET_HEADER SET 
													ticketstatus_id = '2',
													ticketapprovalstatus_id2 = '1',
													ticketapprovalstatus_id3 = '2',
													ticketapproval_id3 = '".$_SESSION['nik_atasan']."',
													ticketapproval_by3 = '".$_SESSION['nama_atasan']."',													
													ticketapproval_createdate2 = '".$ticketapproval_createdate1."',
													ticketapproval_createtime2 = '".$ticketapproval_createtime1."'
													WHERE ticket_id = '".$pid."'");	

													$qCekJmlBrgXX = mysql_query("SELECT * FROM ITH_TIPEBARANG_KODE 
															   WHERE ticket_id ='".$pid."' AND kode_tipebarang = '".$value_kdtipebrg."'");
													$rCekJmlBrgXX = mysql_fetch_object($qCekJmlBrgXX);
													
													$updateTicketcheckapprvlareamgr = $ith->runQuery("
													UPDATE ITH_TIPEBARANG_KODE SET
													ticketapprovalstatusid_rom = '-',
													ticketapprovaldate_rom = '".$ticketapproval_createdate1."',
													ticketapprovaltime_rom = '".$ticketapproval_createtime1."',
													ticketapprovalstatusid_gmo = '-',
													ticketapprovaldate_gmo = '".$ticketapproval_createdate1."',
													ticketapprovaltime_gmo = '".$ticketapproval_createtime1."'											
													WHERE  ticket_id = '".$pid."' AND kode_tipebarang = '".$value_kdtipebrg."'");	
												
												/*
													echo "<br>Jumlah Item Hanya Satu Item dan Status DiRespond Untuk Tidak Disetujui<br>";
													echo "
													<br>UPDATE ITH_TICKET_HEADER SET 
													<br>ticketstatus_id = '2',
													<br>ticketapprovalstatus_id2 = '".$statusaprvl."',
													<br>ticketapprovalstatus_id3 = '2',
													<br>ticketapproval_id3 = '".$_SESSION['nik_atasan']."',
													<br>ticketapproval_by3 = '".$_SESSION['nama_atasan']."',													
													<br>ticketapproval_createdate2 = '".$ticketapproval_createdate1."',
													<br>ticketapproval_createtime2 = '".$ticketapproval_createdate1."'
													<br>WHERE ticket_id = '".$pid."'";	

													echo "
													<br><br>UPDATE ITH_TIPEBARANG_KODE SET
													<br>ticketapprovalstatusid_rom = '".$statusaprvl."',
													<br>ticketapprovaldate_rom = '".$ticketapproval_createdate1."',
													<br>ticketapprovaltime_rom = '".$ticketapproval_createtime1."',
													<br>ticketapprovalstatusid_gmo = '-',
													<br>ticketapprovaldate_gmo = '".$ticketapproval_createdate1."',
													<br>ticketapprovaltime_gmo = '".$ticketapproval_createtime1."'														
													<br>WHERE  ticket_id = '".$pid."',
													<br>AND kode_tipebarang = '".$value_kdtipebrg."'";	
												*/												
											}elseif($statusaprvl==0) // Ketika Satu Item Saja yang tidak diApproved/ Hanya satu item saja yg di Reject
											{													
												#echo "<br>Ketika Status Tidak Diapproved dalam hanya Satu item saja.";
												
													$updateStatusTicketID = $ith->runQuery("
													UPDATE ITH_TICKET_HEADER SET 
													ticketstatus_id = '2',
													ticketapprovalstatus_id2 = '0',
													ticketapprovalstatus_id3 = '2',
													ticketapproval_id3 = '".$_SESSION['nik_atasan']."',
													ticketapproval_by3 = '".$_SESSION['nama_atasan']."',													
													ticketapproval_createdate2 = '".$ticketapproval_createdate1."',
													ticketapproval_createtime2 = '".$ticketapproval_createtime1."'
													WHERE ticket_id = '".$pid."'");	
												$qCekStatusItemReq = mysql_query("SELECT COUNT(ticketapprovalstatusid_am) as TapprlstatusAM FROM ITH_TIPEBARANG_KODE 
																				  WHERE ticket_id = '".$_GET['pid']."' AND ticketapprovalstatusid_am='1'");
												$rCekStatusItemReq = mysql_fetch_object($qCekStatusItemReq);
												if($rCekStatusItemReq->TapprlstatusAM!=0)
												{ /* Status Jadi Cancel */
													$updateStatusTicketID = $ith->runQuery("
													UPDATE ITH_TICKET_HEADER SET 
													ticketapprovalstatus_id2 = '1',
													ticketapprovalstatus_id3 = '2'
													WHERE ticket_id = '".$pid."'");														
												}elseif($rCekStatusItemReq->TapprlstatusAM==0)
												{ /* Status On Process */
													$updateStatusTicketID = $ith->runQuery("
													UPDATE ITH_TICKET_HEADER SET 
													ticketapprovalstatus_id2 = '3',
													ticketapprovalstatus_id3 = '0'
													WHERE ticket_id = '".$pid."'");														
												}
												
													$qCekJmlBrgXX = mysql_query("SELECT * FROM ITH_TIPEBARANG_KODE 
															   WHERE ticket_id ='".$pid."' AND kode_tipebarang = '".$value_kdtipebrg."'");
													$rCekJmlBrgXX = mysql_fetch_object($qCekJmlBrgXX);
													
													$updateTicketcheckapprvlareamgr = $ith->runQuery("
													UPDATE ITH_TIPEBARANG_KODE SET
													ticketapprovalstatusid_rom = '0',
													ticketapprovaldate_rom = '".$ticketapproval_createdate1."',
													ticketapprovaltime_rom = '".$ticketapproval_createtime1."',
													ticketapprovalstatusid_gmo = '-',
													ticketapprovaldate_gmo = '".$ticketapproval_createdate1."',
													ticketapprovaltime_gmo = '".$ticketapproval_createtime1."'											
													WHERE  ticket_id = '".$pid."' AND kode_tipebarang = '".$value_kdtipebrg."'");	
												
												/*
													echo "<br>Jumlah Item Hanya Satu Item dan Status DiRespond Untuk Tidak Disetujui<br>";
													echo "
													<br>UPDATE ITH_TICKET_HEADER SET 
													<br>ticketstatus_id = '2',
													<br>ticketapprovalstatus_id2 = '".$statusaprvl."',
													<br>ticketapprovalstatus_id3 = '2',
													<br>ticketapproval_id3 = '".$_SESSION['nik_atasan']."',
													<br>ticketapproval_by3 = '".$_SESSION['nama_atasan']."',													
													<br>ticketapproval_createdate2 = '".$ticketapproval_createdate1."',
													<br>ticketapproval_createtime2 = '".$ticketapproval_createdate1."'
													<br>WHERE ticket_id = '".$pid."'";	

													echo "
													<br><br>UPDATE ITH_TIPEBARANG_KODE SET
													<br>ticketapprovalstatusid_rom = '".$statusaprvl."',
													<br>ticketapprovaldate_rom = '".$ticketapproval_createdate1."',
													<br>ticketapprovaltime_rom = '".$ticketapproval_createtime1."',
													<br>ticketapprovalstatusid_gmo = '-',
													<br>ticketapprovaldate_gmo = '".$ticketapproval_createdate1."',
													<br>ticketapprovaltime_gmo = '".$ticketapproval_createtime1."'														
													<br>WHERE  ticket_id = '".$pid."',
													<br>AND kode_tipebarang = '".$value_kdtipebrg."'";	
												*/												
											}elseif($statusaprvl==1) // Ketika Satu Item Saja yang diApproved
											{													
												#echo "<br>Ketika Status sudah Diapproved dalam satu item saja.";
											
												$updateStatusTicketID = $ith->runQuery("
												UPDATE ITH_TICKET_HEADER SET 
												ticketstatus_id = '2',
												ticketapprovalstatus_id2 = '1',
												ticketapprovalstatus_id3 = '2',
												ticketapproval_id3 = '".$_SESSION['nik_atasan']."',
												ticketapproval_by3 = '".$_SESSION['nama_atasan']."',												
												ticketapproval_createdate2 = '".$ticketapproval_createdate1."',
												ticketapproval_createtime2 = '".$ticketapproval_createtime1."'
												WHERE ticket_id = '".$pid."'");	

													$qCekJmlBrgXX = mysql_query("SELECT * FROM ITH_TIPEBARANG_KODE 
															   WHERE ticket_id ='".$pid."' AND kode_tipebarang = '".$value_kdtipebrg."'");
													$rCekJmlBrgXX = mysql_fetch_object($qCekJmlBrgXX);
													
												$updateTicketcheckapprvlareamgr = $ith->runQuery("
												UPDATE ITH_TIPEBARANG_KODE SET												
												ticketapprovalstatusid_rom = '1',
												ticketapprovaldate_rom = '".$ticketapproval_createdate1."',
												ticketapprovaltime_rom = '".$ticketapproval_createtime1."',
												ticketapprovalstatusid_gmo = '2',
												ticketapprovaldate_gmo = '".$ticketapproval_createdate1."',
												ticketapprovaltime_gmo = '".$ticketapproval_createtime1."',
												ticketapprovalbynik_gmo = '".$_SESSION['nik_atasan']."',
												ticketapprovalbyname_gmo = '".$_SESSION['nama_atasan']."'
												WHERE  ticket_id = '".$pid."' AND kode_tipebarang = '".$value_kdtipebrg."'");		
											/***			
												echo "<br>Jumlah Item hanya Satu Item dan Status DiRespond Untuk Disetujui<br>";
												echo " <br>
												UPDATE ITH_TICKET_HEADER SET 
												<br>ticketstatus_id = '2',
												<br>ticketapprovalstatus_id2 = '1',
												<br>ticketapprovalstatus_id3 = '2',
												<br>ticketapproval_id3 = '".$_SESSION['nik_atasan']."',
												<br>ticketapproval_by3 = '".$_SESSION['nama_atasan']."',
												<br>ticketapproval_createdate2 = '".$ticketapproval_createdate1."',
												<br>ticketapproval_createtime2= '".$ticketapproval_createtime1."'
												<br>WHERE ticket_id = '".$pid."'";	

												echo"
												<br><br>UPDATE ITH_TIPEBARANG_KODE SET
												<br>ticketapprovalstatusid_rom = '".$statusaprvl."',
												<br>ticketapprovaldate_rom = '".$ticketapproval_createdate1."',
												<br>ticketapprovaltime_rom = '".$ticketapproval_createtime1."',
												<br>ticketapprovalstatusid_gmo = '2',
												<br>ticketapprovaldate_gmo = '".$ticketapproval_createdate1."',
												<br>ticketapprovaltime_gmo = '".$ticketapproval_createtime1."',
												<br>ticketapprovalbynik_gmo = '".$_SESSION['nik_atasan']."',
												<br>ticketapprovalbyname_gmo = '".$_SESSION['nama_atasan']."'
												<br>WHERE  ticket_id = '".$pid."'
												<br>AND kode_tipebarang = '".$value_kdtipebrg."'";	
											***/
												/* !@!@!@!@!@!@!@!@!@!@!@!@!@!@@!!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@! */
												/* Send Mail To Regional Operation Manager */
											/**		error_reporting(E_STRICT);
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
												
														
														$usrid = $_SESSION['user_id'];
														$usrname = $_SESSION['user_realname'];	
														$usrnik = $_SESSION['user_nik'];
														$usrmail = $_SESSION['user_email'];
														$usrdept = $_SESSION['user_departemen'];
														$usrlvl = $_SESSION['user_level'];
														$ugroupid = $_SESSION['ugroupid'];
														$usubgroupid = $_SESSION['usubgroupid'];
														$usrnikatasan = $_SESSION['nik_atasan'];
														#$cdate = date('j F Y');
														$cdate3a = date('j')+1;
														$cdate3b = date('F');
														$cdate3c = date('Y');			
														$cdate = $cdate3a.'&nbsp;'.$cdate3b.'&nbsp;'.$cdate3c;									
														$approvalstatus_rom = $_POST['TICKETAPPROVALSTATUSID_ROM'];
														
														$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
														$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDU ANGGA'); 	
														$mail->AddCC('mantechno2020@gmail.com','MANTECHNO');	

														$cone =  mysql_connect('localhost','usrservicedesk','kfc14022');
																 mysql_select_db('servicedesk',$cone);
															
														$qCekDataYangDiApproved = mysql_query("SELECT * FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$_GET['pid']."'
																							   AND ticketapprovalstatusid_rom ='1' AND ticketapprovalstatusid_am ='1'");
														while($rCekDataYangDiApproved = mysql_fetch_object($qCekDataYangDiApproved))
														{
															$kdtipebrgXY = $rCekDataYangDiApproved->kode_tipebarang;									
															$namabarangsXY = preg_replace('/[^A-Za-z0-9\  ]/', '', $rCekDataYangDiApproved->nama_tipebarang);
															$qtyItemXY = $rCekDataYangDiApproved->kuantitas.' Unit<br>';	
															
																$connOraCekParamPrice = oci_connect('fsd', 'fsd', 'localhost:1521/XE') or die;
																$qCekParamPrice = "SELECT FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE AS KODE_BARANG,
																					FSDBRGEQASSET_NEW.ITEM_NAME AS NAMA_BARANG,FSDBRGEQASSET_NEW.ITEM_BRAND AS MERK_BARANG,
																					FSDBRGEQASSET_NEW.ITEM_MODEL AS MODEL,
																					FSDBRGEQASSET_NEW.ITEM_PRICE AS HARGA_TERAKHIR
																					FROM FSDBRGEQ_NEW
																					JOIN FSDSGROUP ON FSDBRGEQ_NEW.GROUP_CODE = FSDSGROUP.KODE_GROUP
																					JOIN FSDBRGEQASSET_NEW ON FSDBRGEQ_NEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
																					JOIN FSDEQTYPE_NEW ON FSDBRGEQ_NEW.EQTYPECODE = FSDEQTYPE_NEW.EQTYPECODE
																					WHERE FSDEQTYPE_NEW.EQTYPECODE = 'EQ0003' AND FSDBRGEQ_NEW.ITEM_CODE = '".$kdtipebrgXY."'";																				   
																$objParseCekParamPrice = oci_parse ($connOraCekParamPrice, $qCekParamPrice);  
																						 oci_execute ($objParseCekParamPrice,OCI_DEFAULT);
																$objResultCekParamPrice = oci_fetch_object($objParseCekParamPrice,OCI_BOTH);	
																
																$qvPembandingHargaAwal =  "SELECT DISTINCT FSDSGROUP.NAMA_GROUP, FSDBRGEQ.KODE_BARANG, 
																											FSDBRGEQ.NAMA_BARANG, FSDHRGER.HARGA_RATA2, FSDHRGER.HARGA_TERAKHIR
																											FROM FSDBRGEQ
																											JOIN FSDSGROUP ON FSDBRGEQ.KODE_GRUP = FSDSGROUP.KODE_GROUP
																											JOIN FSDHRGER ON FSDBRGEQ.KODE_BARANG = FSDHRGER.KODE_BARANG_EQ
																											WHERE FSDBRGEQ.KODE_BARANG = '".$kdtipebrgXY."'";														
																$qobjParsePembandingHargaAwal = oci_parse ($connOraCekParamPrice, $qvPembandingHargaAwal);  
																								oci_execute ($qobjParsePembandingHargaAwal,OCI_DEFAULT);   
																$rvPembandingHargaAwal = oci_fetch_object($qobjParsePembandingHargaAwal,OCI_BOTH); 	
														
																$myServer = $_SERVER["SERVER_NAME"].'/eoss';							
																$qCekDataTicketHeader = mysql_query("SELECT ticket_id,ticket_subject,ticket_problem,ticket_createby 
																									 FROM ITH_TICKET_HEADER WHERE ticket_id = '".$_GET['pid']."'");	
																$rCekDataTicketHeader = mysql_fetch_object($qCekDataTicketHeader);	
																$subjectTicketStoreReq2 = $rCekDataTicketHeader->ticket_subject;
																$reasonTicketStoreReq2 = $rCekDataTicketHeader->ticket_problem;	
																$qCekDataStorenya2 = mysql_query("SELECT user_nik,user_realname FROM ITH_USER 
																								  WHERE user_nik = '".$rCekDataTicketHeader->ticket_createby."'");		
																$rCekDataStorenya2 = mysql_fetch_object($qCekDataStorenya2);
																$storeNameRequest2 = $rCekDataStorenya2->user_realname;	
															
																$mail->Subject    = "[E-OPERATION SUPPORT PROGRAM].APPROVAL-FOR-GMO : $subjectTicketStoreReq2";
																$mail->AltBody    = "$subjectTicketStoreReq2"; 
																	
																$qCekReqByName = mysql_query("SELECT ITH_TICKET_HEADER.ticket_id, ITH_USER.user_nik, ITH_USER.user_realname 
																							  FROM ITH_TICKET_HEADER 
																							  JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
																							  where ITH_TICKET_HEADER.ticket_id = '".$_GET['pid']."'");	
																$rCekReqByName	= mysql_fetch_object($qCekReqByName);		

																$mail->Body .= "									
																<br>This is a request by : $rCekReqByName->user_realname For Your Approval With Details as Follows :<br>
																	<ul>
																		<li>Request ID : $pid</li>
																		<li>Subject : $subjectTicketStoreReq2</li>
																		<li>Category : Equipment</li>
																		<li>Ticket Status : On Process</li>
																		<li>Area Manager Approval Status : Approved</li>
																		<li>Ticket Create date : $cdate</li>
																		<li>Item Name  : $namabarangsXY</li>
																		<li>The amount of goods  : $qtyItemXY Unit</li>
																	</ul>
																<hr>
																Reason / Justification :	<br>$reasonTicketStoreReq2<br><br>
																<hr>
																	For Approval, Please Click In Here (<a href='http://$myServer/?m=notifmail&a=sendauth&pid=$pid&uid=$usrnikatasan'>Click Here</a>)
																<br><br>Regards,<br><br>
																$storeNameRequest2";
															
														}									
														if(!$mail->Send())
														{
															echo "Pesan Gagal:<br> " . $mail->ErrorInfo; #exit;
															#echo "<meta http-equiv=Refresh content=0;url=index.php?view=home&pid=$pid&uid=$uid>";
														}else{
															echo "Pesan Terkirim.";
															#echo "<meta http-equiv=Refresh content=0;url=index.php?view=home&pid=$pid&uid=$uid>"; 
														}	
													*/										
											}
											echo "<br>$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$<br>";											/* Cek Jika Qty Item Hanya Satu Item */	
										}elseif($rCekJmlBrg->Tbarang > 1)
										{
											echo "<br>Jumlah Item = ".$rCekJmlBrg->Tbarang;	
											if($statusaprvl=='-') // Ketika Lebih dari Satu Item yang tidak diApproved/ Lebih dari satu item yg di Reject
											{													
												#echo "<br>Ketika Status Tidak Diapproved dalam Lebih dari Satu item.";
												$qCekJmlBrgXX = mysql_query("SELECT * FROM ITH_TIPEBARANG_KODE 
															   WHERE ticket_id ='".$pid."'");
												while($rCekJmlBrgXX = mysql_fetch_object($qCekJmlBrgXX))
												{												
													$updateStatusTicketID = $ith->runQuery("
													UPDATE ITH_TICKET_HEADER SET 
													ticketstatus_id = '2',
													ticketapprovalstatus_id2 = '1',
													ticketapprovalstatus_id3 = '2',
													ticketapproval_id3 = '".$_SESSION['nik_atasan']."',
													ticketapproval_by3 = '".$_SESSION['nama_atasan']."',
													ticketapproval_createdate2 = '".$ticketapproval_createdate1."',
													ticketapproval_createtime2 = '".$ticketapproval_createtime1."'
													WHERE ticket_id = '".$pid."'");	
												
													$updateTicketcheckapprvlareamgr = $ith->runQuery("
													UPDATE ITH_TIPEBARANG_KODE SET
													ticketapprovalstatusid_rom = '-',
													ticketapprovaldate_rom = '".$ticketapproval_createdate1."',
													ticketapprovaltime_rom = '".$ticketapproval_createtime1."',
													ticketapprovalstatusid_gmo = '-',
													ticketapprovaldate_gmo = '-',
													ticketapprovaltime_gmo = '-'										
													WHERE  ticket_id = '".$pid."' AND kode_tipebarang = '".$rCekJmlBrgXX->kode_tipebarang."'");	
												}
												/*
													echo "<br>Jumlah Item Lebih dari Satu Item dan Status DiRespond Untuk Tidak Disetujui<br>";
													echo "
													<br>UPDATE ITH_TICKET_HEADER SET 
													<br>ticketstatus_id = '2',
													<br>ticketapprovalstatus_id2 = '".$statusaprvl."',
													<br>ticketapprovalstatus_id3 = '2',
													<br>ticketapproval_id3 = '".$_SESSION['nik_atasan']."',
													<br>ticketapproval_by3 = '".$_SESSION['nama_atasan']."',													
													<br>ticketapproval_createdate2 = '".$ticketapproval_createdate1."',
													<br>ticketapproval_createtime2 = '".$ticketapproval_createdate1."'
													<br>WHERE ticket_id = '".$pid."'";	

													echo "
													<br><br>UPDATE ITH_TIPEBARANG_KODE SET
													<br>ticketapprovalstatusid_rom = '".$statusaprvl."',
													<br>ticketapprovaldate_rom = '".$ticketapproval_createdate1."',
													<br>ticketapprovaltime_rom = '".$ticketapproval_createtime1."',
													<br>ticketapprovalstatusid_gmo = '-',
													<br>ticketapprovaldate_gmo = '-',
													<br>ticketapprovaltime_gmo = '-'													
													<br>WHERE  ticket_id = '".$pid."',
													<br>AND kode_tipebarang = '".$value_kdtipebrg."'";	
												*/												
											}elseif($statusaprvl==0) // Ketika Lebih dari Satu Item yang tidak diApproved/ Lebih dari satu item yg di Reject
											{													
												#echo "<br>Ketika Status Tidak Diapproved dalam Lebih dari Satu item.";
												
													$updateStatusTicketID = $ith->runQuery("
													UPDATE ITH_TICKET_HEADER SET 
													ticketstatus_id = '2',
													ticketapprovalstatus_id2 = '0',
													ticketapprovalstatus_id3 = '2',
													ticketapproval_id3 = '".$_SESSION['nik_atasan']."',
													ticketapproval_by3 = '".$_SESSION['nama_atasan']."',
													ticketapproval_createdate2 = '".$ticketapproval_createdate1."',
													ticketapproval_createtime2 = '".$ticketapproval_createtime1."'
													WHERE ticket_id = '".$pid."'");	
												$qCekStatusItemReq = mysql_query("SELECT COUNT(ticketapprovalstatusid_am) as TapprlstatusAM FROM ITH_TIPEBARANG_KODE 
																				  WHERE ticket_id = '".$_GET['pid']."' AND ticketapprovalstatusid_am='1'");
												$rCekStatusItemReq = mysql_fetch_object($qCekStatusItemReq);
												if($rCekStatusItemReq->TapprlstatusAM!=0)
												{ /* Status Jadi Cancel */
													$updateStatusTicketID = $ith->runQuery("
													UPDATE ITH_TICKET_HEADER SET 
													ticketapprovalstatus_id2 = '1',
													ticketapprovalstatus_id3 = '2'
													WHERE ticket_id = '".$pid."'");														
												}elseif($rCekStatusItemReq->TapprlstatusAM==0)
												{ /* Status On Process */
													$updateStatusTicketID = $ith->runQuery("
													UPDATE ITH_TICKET_HEADER SET 
													ticketapprovalstatus_id2 = '3',
													ticketapprovalstatus_id3 = '0'
													WHERE ticket_id = '".$pid."'");														
												}
												$qCekJmlBrgXX = mysql_query("SELECT * FROM ITH_TIPEBARANG_KODE 
															   WHERE ticket_id ='".$pid."'");
												while($rCekJmlBrgXX = mysql_fetch_object($qCekJmlBrgXX))
												{												
													$updateTicketcheckapprvlareamgr = $ith->runQuery("
													UPDATE ITH_TIPEBARANG_KODE SET
													ticketapprovalstatusid_rom = '0',
													ticketapprovaldate_rom = '".$ticketapproval_createdate1."',
													ticketapprovaltime_rom = '".$ticketapproval_createtime1."',
													ticketapprovalstatusid_gmo = '-',
													ticketapprovaldate_gmo = '-',
													ticketapprovaltime_gmo = '-'										
													WHERE  ticket_id = '".$pid."' AND kode_tipebarang = '".$rCekJmlBrgXX->kode_tipebarang."'");	
												}
												/*
													echo "<br>Jumlah Item Lebih dari Satu Item dan Status DiRespond Untuk Tidak Disetujui<br>";
													echo "
													<br>UPDATE ITH_TICKET_HEADER SET 
													<br>ticketstatus_id = '2',
													<br>ticketapprovalstatus_id2 = '".$statusaprvl."',
													<br>ticketapprovalstatus_id3 = '2',
													<br>ticketapproval_id3 = '".$_SESSION['nik_atasan']."',
													<br>ticketapproval_by3 = '".$_SESSION['nama_atasan']."',													
													<br>ticketapproval_createdate2 = '".$ticketapproval_createdate1."',
													<br>ticketapproval_createtime2 = '".$ticketapproval_createdate1."'
													<br>WHERE ticket_id = '".$pid."'";	

													echo "
													<br><br>UPDATE ITH_TIPEBARANG_KODE SET
													<br>ticketapprovalstatusid_rom = '".$statusaprvl."',
													<br>ticketapprovaldate_rom = '".$ticketapproval_createdate1."',
													<br>ticketapprovaltime_rom = '".$ticketapproval_createtime1."',
													<br>ticketapprovalstatusid_gmo = '-',
													<br>ticketapprovaldate_gmo = '-',
													<br>ticketapprovaltime_gmo = '-'													
													<br>WHERE  ticket_id = '".$pid."',
													<br>AND kode_tipebarang = '".$value_kdtipebrg."'";	
												*/												
											}elseif($statusaprvl==1) // Ketika Satu Item Saja yang diApproved
											{													
												##echo "<br>Ketika Status sudah Diapproved dalam Lebih dari satu item.";
												$qCekJmlBrgXX = mysql_query("SELECT * FROM ITH_TIPEBARANG_KODE 
															   WHERE ticket_id ='".$pid."'");
												while($rCekJmlBrgXX = mysql_fetch_object($qCekJmlBrgXX))
												{											
												$updateStatusTicketID = $ith->runQuery("
												UPDATE ITH_TICKET_HEADER SET 
												ticketstatus_id = '2',
												ticketapprovalstatus_id2 = '1',
												ticketapprovalstatus_id3 = '2',
												ticketapproval_id3 = '".$_SESSION['nik_atasan']."',
												ticketapproval_by3 = '".$_SESSION['nama_atasan']."',												
												ticketapproval_createdate2 = '".$ticketapproval_createdate1."',
												ticketapproval_createtime2 = '".$ticketapproval_createtime1."'
												WHERE ticket_id = '".$pid."'");	

												$updateTicketcheckapprvlareamgr = $ith->runQuery("
												UPDATE ITH_TIPEBARANG_KODE SET												
												ticketapprovalstatusid_rom = '1',
												ticketapprovaldate_rom = '".$ticketapproval_createdate1."',
												ticketapprovaltime_rom = '".$ticketapproval_createtime1."',
												ticketapprovalstatusid_gmo = '2',
												ticketapprovaldate_gmo = '".$ticketapproval_createdate1."',
												ticketapprovaltime_gmo = '".$ticketapproval_createtime1."',
												ticketapprovalbynik_gmo = '".$_SESSION['nik_atasan']."',
												ticketapprovalbyname_gmo = '".$_SESSION['nama_atasan']."'
												WHERE  ticket_id = '".$pid."' AND kode_tipebarang = '".$rCekJmlBrgXX->kode_tipebarang."'");		
												}
												/***		
												echo "<br>Jumlah Item Lebih dari Satu Item dan Status DiRespond Untuk Disetujui<br>";
												echo " <br>
												UPDATE ITH_TICKET_HEADER SET 
												<br>ticketstatus_id = '2',
												<br>ticketapprovalstatus_id2 = '1',
												<br>ticketapprovalstatus_id3 = '2',
												<br>ticketapproval_id3 = '".$_SESSION['nik_atasan']."',
												<br>ticketapproval_by3 = '".$_SESSION['nama_atasan']."',
												<br>ticketapproval_createdate2 = '".$ticketapproval_createdate1."',
												<br>ticketapproval_createtime2 = '".$ticketapproval_createtime1."'
												<br>WHERE ticket_id = '".$pid."'";	

												echo"
												<br><br>UPDATE ITH_TIPEBARANG_KODE SET
												<br>ticketapprovalstatusid_rom = '".$statusaprvl."',
												<br>ticketapprovaldate_rom = '".$ticketapproval_createdate1."',
												<br>ticketapprovaltime_rom = '".$ticketapproval_createtime1."',
												<br>ticketapprovalstatusid_gmo = '2',
												<br>ticketapprovaldate_gmo = '".$ticketapproval_createdate1."',
												<br>ticketapprovaltime_gmo = '".$ticketapproval_createtime1."',
												<br>ticketapprovalbynik_gmo = '".$_SESSION['nik_atasan']."',
												<br>ticketapprovalbyname_gmo = '".$_SESSION['nama_atasan']."'
												<br>WHERE  ticket_id = '".$pid."'
												<br>AND kode_tipebarang = '".$value_kdtipebrg."'";	
											***/	
												/* !@!@!@!@!@!@!@!@!@!@!@!@!@!@@!!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@! */
												/* Send Mail To Regional Operation Manager */
											/*		error_reporting(E_STRICT);
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
												
														
														$usrid = $_SESSION['user_id'];
														$usrname = $_SESSION['user_realname'];	
														$usrnik = $_SESSION['user_nik'];
														$usrmail = $_SESSION['user_email'];
														$usrdept = $_SESSION['user_departemen'];
														$usrlvl = $_SESSION['user_level'];
														$ugroupid = $_SESSION['ugroupid'];
														$usubgroupid = $_SESSION['usubgroupid'];
														$usrnikatasan = $_SESSION['nik_atasan'];
														#$cdate = date('j F Y');
														$cdate3a = date('j')+1;
														$cdate3b = date('F');
														$cdate3c = date('Y');			
														$cdate = $cdate3a.'&nbsp;'.$cdate3b.'&nbsp;'.$cdate3c;									
														$approvalstatus_rom = $_POST['TICKETAPPROVALSTATUSID_ROM'];
														
														$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
														$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDU ANGGA'); 	
														$mail->AddCC('mantechno2020@gmail.com','MANTECHNO');	

														$cone =  mysql_connect('localhost','usrservicedesk','kfc14022');
																 mysql_select_db('servicedesk',$cone);
															
														$qCekDataYangDiApproved = mysql_query("SELECT * FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$_GET['pid']."'
																							   AND ticketapprovalstatusid_rom ='1' AND ticketapprovalstatusid_am ='1'");
														while($rCekDataYangDiApproved = mysql_fetch_object($qCekDataYangDiApproved))
														{
															$kdtipebrgXY = $rCekDataYangDiApproved->kode_tipebarang;									
															$namabarangsXY = preg_replace('/[^A-Za-z0-9\  ]/', '', $rCekDataYangDiApproved->nama_tipebarang);
															$qtyItemXY = $rCekDataYangDiApproved->kuantitas.' Unit<br>';	
															
																$connOraCekParamPrice = oci_connect('fsd', 'fsd', 'localhost:1521/XE') or die;
																$qCekParamPrice = "SELECT FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE AS KODE_BARANG,
																					FSDBRGEQASSET_NEW.ITEM_NAME AS NAMA_BARANG,FSDBRGEQASSET_NEW.ITEM_BRAND AS MERK_BARANG,
																					FSDBRGEQASSET_NEW.ITEM_MODEL AS MODEL,
																					FSDBRGEQASSET_NEW.ITEM_PRICE AS HARGA_TERAKHIR
																					FROM FSDBRGEQ_NEW
																					JOIN FSDSGROUP ON FSDBRGEQ_NEW.GROUP_CODE = FSDSGROUP.KODE_GROUP
																					JOIN FSDBRGEQASSET_NEW ON FSDBRGEQ_NEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
																					JOIN FSDEQTYPE_NEW ON FSDBRGEQ_NEW.EQTYPECODE = FSDEQTYPE_NEW.EQTYPECODE
																					WHERE FSDEQTYPE_NEW.EQTYPECODE = 'EQ0003' AND FSDBRGEQ_NEW.ITEM_CODE = '".$kdtipebrgXY."'";																				   
																$objParseCekParamPrice = oci_parse ($connOraCekParamPrice, $qCekParamPrice);  
																						 oci_execute ($objParseCekParamPrice,OCI_DEFAULT);
																$objResultCekParamPrice = oci_fetch_object($objParseCekParamPrice,OCI_BOTH);	
																
																$qvPembandingHargaAwal =  "SELECT DISTINCT FSDSGROUP.NAMA_GROUP, FSDBRGEQ.KODE_BARANG, 
																											FSDBRGEQ.NAMA_BARANG, FSDHRGER.HARGA_RATA2, FSDHRGER.HARGA_TERAKHIR
																											FROM FSDBRGEQ
																											JOIN FSDSGROUP ON FSDBRGEQ.KODE_GRUP = FSDSGROUP.KODE_GROUP
																											JOIN FSDHRGER ON FSDBRGEQ.KODE_BARANG = FSDHRGER.KODE_BARANG_EQ
																											WHERE FSDBRGEQ.KODE_BARANG = '".$kdtipebrgXY."'";														
																$qobjParsePembandingHargaAwal = oci_parse ($connOraCekParamPrice, $qvPembandingHargaAwal);  
																								oci_execute ($qobjParsePembandingHargaAwal,OCI_DEFAULT);   
																$rvPembandingHargaAwal = oci_fetch_object($qobjParsePembandingHargaAwal,OCI_BOTH); 	
																														$myServer = $_SERVER["SERVER_NAME"].'/eoss';							
																$qCekDataTicketHeader = mysql_query("SELECT ticket_id,ticket_subject,ticket_problem,ticket_createby 
																									 FROM ITH_TICKET_HEADER WHERE ticket_id = '".$_GET['pid']."'");	
																$rCekDataTicketHeader = mysql_fetch_object($qCekDataTicketHeader);	
																$subjectTicketStoreReq2 = $rCekDataTicketHeader->ticket_subject;
																$reasonTicketStoreReq2 = $rCekDataTicketHeader->ticket_problem;	
																$qCekDataStorenya2 = mysql_query("SELECT user_nik,user_realname FROM ITH_USER 
																								  WHERE user_nik = '".$rCekDataTicketHeader->ticket_createby."'");		
																$rCekDataStorenya2 = mysql_fetch_object($qCekDataStorenya2);
																$storeNameRequest2 = $rCekDataStorenya2->user_realname;	
															
																$mail->Subject    = "[E-OPERATION SUPPORT PROGRAM].APPROVAL-FOR-GMO : $subjectTicketStoreReq2";
																$mail->AltBody    = "$subjectTicketStoreReq2"; 
																
																$qCekReqByName = mysql_query("SELECT ITH_TICKET_HEADER.ticket_id, ITH_USER.user_nik, ITH_USER.user_realname 
																							  FROM ITH_TICKET_HEADER 
																							  JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
																							  where ITH_TICKET_HEADER.ticket_id = '".$_GET['pid']."'");	
																$rCekReqByName	= mysql_fetch_object($qCekReqByName);						  
																$mail->Body .= "									
																<br>Thank you for making a request in this servicedesk application, the info is as follows :<br>
																	<ul>
																		<li>Request ID : $pid</li>
																		<li>Request By : $rCekReqByName->user_realname</li>
																		<li>Subject : $subjectTicketStoreReq2</li>
																		<li>Category : Equipment</li>
																		<li>Ticket Status : On Process</li>
																		<li>Area Manager Approval Status : Approved</li>
																		<li>Ticket Create date : $cdate</li>
																		<li>Item Name  : $namabarangsXY</li>
																		<li>The amount of goods  : $qtyItemXY Unit</li>
																	</ul>
																<hr>
																Reason / Justification :	<br>$reasonTicketStoreReq2<br><br>
																<hr>
																	For Your Approval (<a href='http://$myServer/?m=notifmail&a=sendauth&pid=$pid&uid=$usrnikatasan'>Click Here</a>)
																<br><br>Regards,<br><br>
																$storeNameRequest2";
															
														}									
														if(!$mail->Send())
														{
															echo "Pesan Gagal:<br> " . $mail->ErrorInfo; #exit;
															#echo "<meta http-equiv=Refresh content=0;url=index.php?view=home&pid=$pid&uid=$uid>";
														}else{
															echo "Pesan Terkirim.";
															#echo "<meta http-equiv=Refresh content=0;url=index.php?view=home&pid=$pid&uid=$uid>"; 
														}	
													*/																						
											}											
											echo "<br>$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$<br>";											}			
								}elseif($objResultCekParamPrice-> HARGA_TERAKHIR < $rCekValueParam->value_parameter_gmo)	
								{
									#echo "<br><font color=red><br>Harga Terakhir < Value Parameter</font>";		
									#echo "<br><font color=red>Oleh Sebab itu tidak ada persetujuan(Approval) yg ditujukan ke ROM</font>";
									
								/** @@@@@ CEK JUMLAH ITEM FOOD PROCESSING EQ REQUESTED YANG HARGA ITEM LEBIH BESAR ATAU SAMA DENGAN VALUE PARAM @@@@@@@ **/
								/**	$qCekJmlBrg = mysql_query("SELECT COUNT(ticket_id) AS Tbarang FROM ITH_TIPEBARANG_KODE 
															   WHERE ticket_id ='".$pid."' AND kode_tipebarang = '".$value_kdtipebrg."'");
								**/	$qCekJmlBrg = mysql_query("SELECT COUNT(ticket_id) AS Tbarang FROM ITH_TIPEBARANG_KODE 
															   WHERE ticket_id ='".$pid."'");
  								   $rCekJmlBrg = mysql_fetch_object($qCekJmlBrg);
										/* Cek Jika Qty Item Hanya Satu Item */
										if($rCekJmlBrg->Tbarang==1)
										{
											echo "<br>Jumlah Item = ".$rCekJmlBrg->Tbarang;	
											if($statusaprvl=='-') // Ketika Satu Item Saja yang tidak diApproved/ Hanya satu item saja yg di Reject
											{													
												#echo "<br>Ketika Status Tidak Diapproved dalam hanya Satu item saja.";
												
													$updateStatusTicketID = $ith->runQuery("
													UPDATE ITH_TICKET_HEADER SET 
													ticketstatus_id = '2',
													ticketapprovalstatus_id2 = '1',
													ticketapprovalstatus_id3 = '2',
													ticketapproval_id3 = '".$_SESSION['nik_atasan']."',
													ticketapproval_by3 = '".$_SESSION['nama_atasan']."',													
													ticketapproval_createdate2 = '".$ticketapproval_createdate1."',
													ticketapproval_createtime2 = '".$ticketapproval_createtime1."'
													WHERE ticket_id = '".$pid."'");	

													$updateTicketcheckapprvlareamgr = $ith->runQuery("
													UPDATE ITH_TIPEBARANG_KODE SET
													ticketapprovalstatusid_rom = '-',
													ticketapprovaldate_rom = '".$ticketapproval_createdate1."',
													ticketapprovaltime_rom = '".$ticketapproval_createtime1."',
													ticketapprovalstatusid_gmo = '-',
													ticketapprovaldate_gmo = '-',
													ticketapprovaltime_gmo = '-'													
													WHERE  ticket_id = '".$pid."' AND kode_tipebarang = '".$value_kdtipebrg."'");	
												
												/*
													echo "<br>Jumlah Item Hanya Satu Item dan Status DiRespond Untuk Tidak Disetujui";
													echo "
													<br>UPDATE ITH_TICKET_HEADER SET 
													<br>ticketstatus_id = '2',
													<br>ticketapprovalstatus_id2 = '".$statusaprvl."',
													<br>ticketapprovalstatus_id3 = '2',
													<br>ticketapproval_id3 = '".$_SESSION['nik_atasan']."',
													<br>ticketapproval_by3 = '".$_SESSION['nama_atasan']."',	
													<br>ticketapproval_createdate2 = '".$ticketapproval_createdate1."',
													<br>ticketapproval_createtime2 = '".$ticketapproval_createdate1."'
													<br>WHERE ticket_id = '".$pid."'";	

													echo "
													<br><br>UPDATE ITH_TIPEBARANG_KODE SET
													<br>ticketapprovalstatusid_rom = '".$statusaprvl."',
													<br>ticketapprovaldate_rom = '".$ticketapproval_createdate1."',
													<br>ticketapprovaltime_rom = '".$ticketapproval_createtime1."',
													<br>ticketapprovalstatusid_gmo = '-',
													<br>ticketapprovaldate_gmo = '-',
													<br>ticketapprovaltime_gmo = '-'											
													<br>WHERE  ticket_id = '".$pid."',
													<br>AND kode_tipebarang = '".$value_kdtipebrg."'";	
												*/												
											}elseif($statusaprvl==0) // Ketika Satu Item Saja yang tidak diApproved/ Hanya satu item saja yg di Reject
											{													
												#echo "<br>Ketika Status Tidak Diapproved dalam hanya Satu item saja.";
												
													$updateStatusTicketID = $ith->runQuery("
													UPDATE ITH_TICKET_HEADER SET 
													ticketstatus_id = '2',
													ticketapprovalstatus_id2 = '0',
													ticketapprovalstatus_id3 = '2',
													ticketapproval_id3 = '".$_SESSION['nik_atasan']."',
													ticketapproval_by3 = '".$_SESSION['nama_atasan']."',													
													ticketapproval_createdate2 = '".$ticketapproval_createdate1."',
													ticketapproval_createtime2 = '".$ticketapproval_createtime1."'
													WHERE ticket_id = '".$pid."'");	
												$qCekStatusItemReq = mysql_query("SELECT COUNT(ticketapprovalstatusid_am) as TapprlstatusAM FROM ITH_TIPEBARANG_KODE 
																				  WHERE ticket_id = '".$_GET['pid']."' AND ticketapprovalstatusid_am='1'");
												$rCekStatusItemReq = mysql_fetch_object($qCekStatusItemReq);
												if($rCekStatusItemReq->TapprlstatusAM!=0)
												{ /* Status Jadi Cancel */
													$updateStatusTicketID = $ith->runQuery("
													UPDATE ITH_TICKET_HEADER SET 
													ticketapprovalstatus_id2 = '2',
													ticketapprovalstatus_id = '1'
													WHERE ticket_id = '".$pid."'");														
												}elseif($rCekStatusItemReq->TapprlstatusAM==0)
												{ /* Status On Process */
													$updateStatusTicketID = $ith->runQuery("
													UPDATE ITH_TICKET_HEADER SET 
													ticketapprovalstatus_id2 = '3',
													ticketapprovalstatus_id = '0'
													WHERE ticket_id = '".$pid."'");														
												}
													$updateTicketcheckapprvlareamgr = $ith->runQuery("
													UPDATE ITH_TIPEBARANG_KODE SET
													ticketapprovalstatusid_rom = '0',
													ticketapprovaldate_rom = '".$ticketapproval_createdate1."',
													ticketapprovaltime_rom = '".$ticketapproval_createtime1."',
													ticketapprovalstatusid_gmo = '-',
													ticketapprovaldate_gmo = '-',
													ticketapprovaltime_gmo = '-'													
													WHERE  ticket_id = '".$pid."' AND kode_tipebarang = '".$value_kdtipebrg."'");	
												
												/*
													echo "<br>Jumlah Item Hanya Satu Item dan Status DiRespond Untuk Tidak Disetujui";
													echo "
													<br>UPDATE ITH_TICKET_HEADER SET 
													<br>ticketstatus_id = '2',
													<br>ticketapprovalstatus_id2 = '".$statusaprvl."',
													<br>ticketapprovalstatus_id3 = '2',
													<br>ticketapproval_id3 = '".$_SESSION['nik_atasan']."',
													<br>ticketapproval_by3 = '".$_SESSION['nama_atasan']."',	
													<br>ticketapproval_createdate2 = '".$ticketapproval_createdate1."',
													<br>ticketapproval_createtime2 = '".$ticketapproval_createdate1."'
													<br>WHERE ticket_id = '".$pid."'";	

													echo "
													<br><br>UPDATE ITH_TIPEBARANG_KODE SET
													<br>ticketapprovalstatusid_rom = '".$statusaprvl."',
													<br>ticketapprovaldate_rom = '".$ticketapproval_createdate1."',
													<br>ticketapprovaltime_rom = '".$ticketapproval_createtime1."',
													<br>ticketapprovalstatusid_gmo = '-',
													<br>ticketapprovaldate_gmo = '-',
													<br>ticketapprovaltime_gmo = '-'											
													<br>WHERE  ticket_id = '".$pid."',
													<br>AND kode_tipebarang = '".$value_kdtipebrg."'";	
												*/												
											}elseif($statusaprvl==1) // Ketika Satu Item Saja yang diApproved
											{													
												#echo "<br>Ketika Status sudah Diapproved dalam satu item saja.";
											
												$updateStatusTicketID = $ith->runQuery("
												UPDATE ITH_TICKET_HEADER SET 
												ticketstatus_id = '2',
												ticketapprovalstatus_id2 = '1',
												ticketapprovalstatus_id3 = '2',
												ticketapproval_id3 = '".$_SESSION['nik_atasan']."',
												ticketapproval_by3 = '".$_SESSION['nama_atasan']."',	
												ticketapproval_createdate2 = '".$ticketapproval_createdate1."',
												ticketapproval_createtime2 = '".$ticketapproval_createtime1."'
												WHERE ticket_id = '".$pid."'");	

												$updateTicketcheckapprvlareamgr = $ith->runQuery("
												UPDATE ITH_TIPEBARANG_KODE SET												
												ticketapprovalstatusid_rom = '1',
												ticketapprovaldate_rom = '".$ticketapproval_createdate1."',
												ticketapprovaltime_rom = '".$ticketapproval_createtime1."',
												ticketapprovalstatusid_gmo = '-',
												ticketapprovaldate_gmo = '-',
												ticketapprovaltime_gmo = '-'
												WHERE  ticket_id = '".$pid."' AND kode_tipebarang = '".$value_kdtipebrg."'");		
											/***			
												echo "<br>Jumlah Item hanya Satu Item dan Status DiRespond Untuk Disetujui<br>";
												echo " <br>
												UPDATE ITH_TICKET_HEADER SET 
												<br>ticketstatus_id = '2',
												<br>ticketapprovalstatus_id2 = '1',
												<br>ticketapprovalstatus_id3 = '2',
												<br>ticketapproval_id3 = '".$_SESSION['nik_atasan']."',
												<br>ticketapproval_by3 = '".$_SESSION['nama_atasan']."',
												<br>ticketapproval_createdate2 = '".$ticketapproval_createdate1."',
												<br>ticketapproval_createtime2 = '".$ticketapproval_createtime1."'
												<br>WHERE ticket_id = '".$pid."'";	

												echo"
												<br><br>UPDATE ITH_TIPEBARANG_KODE SET
												<br>ticketapprovalstatusid_rom = '".$statusaprvl."',
												<br>ticketapprovaldate_rom = '".$ticketapproval_createdate1."',
												<br>ticketapprovaltime_rom = '".$ticketapproval_createtime1."',
												<br>ticketapprovalstatusid_gmo = '-',
												<br>ticketapprovaldate_gmo = '-',
												<br>ticketapprovaltime_gmo = '-'
												<br>WHERE  ticket_id = '".$pid."'
												<br>AND kode_tipebarang = '".$value_kdtipebrg."'";	
											***/
											/* INSERT INTO DATABASE FSDWAREHOUSE ORACLE */
												$cone =  mysql_connect('localhost','usrservicedesk','kfc14022');
														 mysql_select_db('servicedesk',$cone);
												$qCekTiketID2z = mysql_query("SELECT ticket_id,kuantitas,kode_tipebarang,no_permintaan,request_by 
																			 FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$_GET['pid']."' 
																			 AND ticketapprovalstatusid_rom = '".$statusaprvl."'");
												while($rCekTiketID2z = mysql_fetch_object($qCekTiketID2z))
												{				
													echo "<hr><br>Kode Tipe Barang = ".$rCekTiketID2z->kode_tipebarang;
												
													$conninsToRequestMagicWarehouse = oci_connect('fsd', 'fsd', 'localhost:1521/XE') or die;	
													
													$qCekDataMagix = "SELECT DISTINCT FSDORDEC_TEMP.NO_PERMINTAAN, FSDORDEC_TEMP.TGL_PERMINTAAN, 
																		FSDORDEC_TEMP.TGL_BUAT_FSD, FSDORDEC_TEMP.KODE_BARANG, FSDORDEC_TEMP.NO_TAGING, 
																		FSDORDEC_TEMP.DEPARTEMEN, MSTDEPART.NAMA_DEPARTEMENT,
																		FSDBRGEQ.NAMA_BARANG,
																		FSDORDEC_TEMP.JUMLAH_PERMINTAAN, FSDORDEC_TEMP.JUMLAH_ORDER, FSDORDEC_TEMP.KIRIM_DARI_STOK, 
																		FSDORDEC_TEMP.TGL_DISETUJUI, 
																		FSDORDEC_TEMP.NOMOR_RO, FSDORDEC_TEMP.STATUS_PERMINTAAN
																		FROM FSDORDEC_TEMP 
																		JOIN FSDBRGEQ ON FSDORDEC_TEMP.KODE_BARANG = FSDBRGEQ.KODE_BARANG
																		JOIN MSTDEPART ON FSDORDEC_TEMP.DEPARTEMEN = MSTDEPART.KODE_DEPARTEMENT
																		WHERE FSDBRGEQ.KODE_BARANG = '".$rCekTiketID2z->kode_tipebarang."'
																		AND FSDORDEC_TEMP.NO_PERMINTAAN ='".$rCekTiketID2z->no_permintaan."'";
																		
													$objParseCekDataMagix = oci_parse ($conninsToRequestMagicWarehouse, $qCekDataMagix);  
																			   oci_execute ($objParseCekDataMagix,OCI_DEFAULT);
													$objResultCekDataMagix = oci_fetch_object($objParseCekDataMagix,OCI_BOTH);		
													$recvdate = date('d-M-Y');
													$forfsddate = date('d-M-Y');									
													
													
													$insToRequestMagicWarehouse = "INSERT INTO FSDORDEC(KODE_CABANG,DEPARTEMEN,NO_PERMINTAAN,TGL_PERMINTAAN,TGL_TERIMA_FSD,TGL_BUAT_FSD,KODE_BARANG,JUMLAH_PERMINTAAN, JUMLAH_ORDER, KETERANGAN, STATUS_PERMINTAAN) 
																					VALUES ('".$rCekTiketID2z->request_by."', '".$objResultCekDataMagix->DEPARTEMEN."', 
																					'".$objResultCekDataMagix->NO_PERMINTAAN."', '".$objResultCekDataMagix->TGL_PERMINTAAN."', 
																					'".$recvdate."', '".$forfsddate."', '".$rCekTiketID2z->kode_tipebarang."', 
																					'".$rCekTiketID2z->kuantitas."','0','REQUEST EQUIPMENT DARI STORE',' ')";
													/***
													echo "<hr><br> Data disimpan ke database oracle fsd warehouse TEST X1 FEQ
													<br>INSERT INTO FSDORDEC(KODE_CABANG,DEPARTEMEN,NO_PERMINTAAN,TGL_PERMINTAAN,TGL_TERIMA_FSD,TGL_BUAT_FSD,KODE_BARANG,JUMLAH_PERMINTAAN, JUMLAH_ORDER, KETERANGAN, STATUS_PERMINTAAN) 
													<br>VALUES ('".$rCekTiketID2z->request_by."', '".$objResultCekDataMagix->DEPARTEMEN."', 
													<br>'".$objResultCekDataMagix->NO_PERMINTAAN."', '".$objResultCekDataMagix->TGL_PERMINTAAN."', 
													<br>'".$recvdate."', '".$forfsddate."', '".$rCekTiketID2z->kode_tipebarang."', 
													<br>'".$rCekTiketID2z->kuantitas."','0','REQUEST EQUIPMENT DARI STORE',' ')";
													***/
													$compiledinsToRequestMagicWarehouse = oci_parse($conninsToRequestMagicWarehouse,$insToRequestMagicWarehouse);			
																						  oci_execute($compiledinsToRequestMagicWarehouse); 	
															
												} #exit;	
												/* !@!@!@!@!@!@!@!@!@!@!@!@!@!@@!!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@! */
												/* Send Mail To Regional Operation Manager */
											/**		error_reporting(E_STRICT);
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
												
														
														$usrid = $_SESSION['user_id'];
														$usrname = $_SESSION['user_realname'];	
														$usrnik = $_SESSION['user_nik'];
														$usrmail = $_SESSION['user_email'];
														$usrdept = $_SESSION['user_departemen'];
														$usrlvl = $_SESSION['user_level'];
														$ugroupid = $_SESSION['ugroupid'];
														$usubgroupid = $_SESSION['usubgroupid'];
														$usrnikatasan = $_SESSION['nik_atasan'];
														#$cdate = date('j F Y');
														$cdate3a = date('j')+1;
														$cdate3b = date('F');
														$cdate3c = date('Y');			
														$cdate = $cdate3a.'&nbsp;'.$cdate3b.'&nbsp;'.$cdate3c;									
														$approvalstatus_rom = $_POST['TICKETAPPROVALSTATUSID_ROM'];
														
														$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
														$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDU ANGGA'); 	
														$mail->AddCC('mantechno2020@gmail.com','MANTECHNO');	

														$cone =  mysql_connect('localhost','usrservicedesk','kfc14022');
																 mysql_select_db('servicedesk',$cone);
															
														$qCekDataYangDiApproved = mysql_query("SELECT * FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$_GET['pid']."'
																							   AND ticketapprovalstatusid_rom ='1' AND ticketapprovalstatusid_am ='1'");
														while($rCekDataYangDiApproved = mysql_fetch_object($qCekDataYangDiApproved))
														{
															$kdtipebrgXY = $rCekDataYangDiApproved->kode_tipebarang;									
															$namabarangsXY = preg_replace('/[^A-Za-z0-9\  ]/', '', $rCekDataYangDiApproved->nama_tipebarang);
															$qtyItemXY = $rCekDataYangDiApproved->kuantitas.' Unit<br>';	
															
																$connOraCekParamPrice = oci_connect('fsd', 'fsd', 'localhost:1521/XE') or die;
																$qCekParamPrice = "SELECT FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE AS KODE_BARANG,
																					FSDBRGEQASSET_NEW.ITEM_NAME AS NAMA_BARANG,FSDBRGEQASSET_NEW.ITEM_BRAND AS MERK_BARANG,
																					FSDBRGEQASSET_NEW.ITEM_MODEL AS MODEL,
																					FSDBRGEQASSET_NEW.ITEM_PRICE AS HARGA_TERAKHIR
																					FROM FSDBRGEQ_NEW
																					JOIN FSDSGROUP ON FSDBRGEQ_NEW.GROUP_CODE = FSDSGROUP.KODE_GROUP
																					JOIN FSDBRGEQASSET_NEW ON FSDBRGEQ_NEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
																					JOIN FSDEQTYPE_NEW ON FSDBRGEQ_NEW.EQTYPECODE = FSDEQTYPE_NEW.EQTYPECODE
																					WHERE FSDEQTYPE_NEW.EQTYPECODE = 'EQ0003' AND FSDBRGEQ_NEW.ITEM_CODE = '".$kdtipebrgXY."'";																				   
																$objParseCekParamPrice = oci_parse ($connOraCekParamPrice, $qCekParamPrice);  
																						 oci_execute ($objParseCekParamPrice,OCI_DEFAULT);
																$objResultCekParamPrice = oci_fetch_object($objParseCekParamPrice,OCI_BOTH);	
																
																$qvPembandingHargaAwal =  "SELECT DISTINCT FSDSGROUP.NAMA_GROUP, FSDBRGEQ.KODE_BARANG, 
																											FSDBRGEQ.NAMA_BARANG, FSDHRGER.HARGA_RATA2, FSDHRGER.HARGA_TERAKHIR
																											FROM FSDBRGEQ
																											JOIN FSDSGROUP ON FSDBRGEQ.KODE_GRUP = FSDSGROUP.KODE_GROUP
																											JOIN FSDHRGER ON FSDBRGEQ.KODE_BARANG = FSDHRGER.KODE_BARANG_EQ
																											WHERE FSDBRGEQ.KODE_BARANG = '".$kdtipebrgXY."'";														
																$qobjParsePembandingHargaAwal = oci_parse ($connOraCekParamPrice, $qvPembandingHargaAwal);  
																								oci_execute ($qobjParsePembandingHargaAwal,OCI_DEFAULT);   
																$rvPembandingHargaAwal = oci_fetch_object($qobjParsePembandingHargaAwal,OCI_BOTH); 	
																														$myServer = $_SERVER["SERVER_NAME"].'/eoss';							
																$qCekDataTicketHeader = mysql_query("SELECT ticket_id,ticket_subject,ticket_problem,ticket_createby 
																									 FROM ITH_TICKET_HEADER WHERE ticket_id = '".$_GET['pid']."'");	
																$rCekDataTicketHeader = mysql_fetch_object($qCekDataTicketHeader);	
																$subjectTicketStoreReq2 = $rCekDataTicketHeader->ticket_subject;
																$reasonTicketStoreReq2 = $rCekDataTicketHeader->ticket_problem;	
																$qCekDataStorenya2 = mysql_query("SELECT user_nik,user_realname FROM ITH_USER 
																								  WHERE user_nik = '".$rCekDataTicketHeader->ticket_createby."'");		
																$rCekDataStorenya2 = mysql_fetch_object($qCekDataStorenya2);
																$storeNameRequest2 = $rCekDataStorenya2->user_realname;	
															
																$mail->Subject    = "[E-OPERATION SUPPORT PROGRAM].REQUEST FOR-FROM-FSD : $subjectTicketStoreReq2";
																$mail->AltBody    = "$subjectTicketStoreReq2"; 
																
																$qCekReqByName = mysql_query("SELECT ITH_TICKET_HEADER.ticket_id, ITH_USER.user_nik, ITH_USER.user_realname 
																							  FROM ITH_TICKET_HEADER 
																							  JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
																							  where ITH_TICKET_HEADER.ticket_id = '".$_GET['pid']."'");	
																$rCekReqByName	= mysql_fetch_object($qCekReqByName);		

																$mail->Body .= "									
																<br>This is a request by : $rCekReqByName->user_realname For Your Approval With Details as Follows :<br>
																	<ul>
																		<li>Request ID : $pid</li>
																		<li>Subject : $subjectTicketStoreReq2</li>
																		<li>Category : Equipment</li>
																		<li>Ticket Status : On Process</li>
																		<li>Area Manager Approval Status : Approved</li>
																		<li>Ticket Create date : $cdate</li>
																		<li>Item Name  : $namabarangsXY</li>
																		<li>The amount of goods  : $qtyItemXY Unit</li>
																	</ul>
																<hr>
																Reason / Justification :	<br>$reasonTicketStoreReq2<br><br>
																<hr>
																	For Approval, Please Click In Here (<a href='http://$myServer/?m=notifmail&a=sendauth&pid=$pid&uid=$usrnikatasan'>Click Here</a>)
																<br><br>Regards,<br><br>
																$storeNameRequest2";
															#}
														}									
														if(!$mail->Send())
														{
															echo "Pesan Gagal:<br> " . $mail->ErrorInfo; #exit;
															#echo "<meta http-equiv=Refresh content=0;url=index.php?view=home&pid=$pid&uid=$uid>";
														}else{
															echo "Pesan Terkirim.";
															#echo "<meta http-equiv=Refresh content=0;url=index.php?view=home&pid=$pid&uid=$uid>"; 
														} 
													*/												
											}
											echo "<br>$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$<br>";											/* Cek Jika Qty Item Hanya Satu Item */	
										}elseif($rCekJmlBrg->Tbarang > 1)
										{
											#echo "<br>Jumlah Item = ".$rCekJmlBrg->Tbarang;	
											if($statusaprvl=='-') // Ketika Lebih dari Satu Item yang tidak diApproved/ Lebih dari satu item yg di Reject
											{													
												#echo "<br>Ketika Status Tidak Diapproved dalam Lebih dari Satu item.";
												$qCekJmlBrgXX = mysql_query("SELECT * FROM ITH_TIPEBARANG_KODE 
															   WHERE ticket_id ='".$pid."'");
												while($rCekJmlBrgXX = mysql_fetch_object($qCekJmlBrgXX))
												{												
													$updateStatusTicketID = $ith->runQuery("
													UPDATE ITH_TICKET_HEADER SET 
													ticketstatus_id = '2',
													ticketapprovalstatus_id2 = '1,
													ticketapprovalstatus_id3 = '2',
													ticketapproval_id3 = '".$_SESSION['nik_atasan']."',
													ticketapproval_by3 = '".$_SESSION['nama_atasan']."',	
													ticketapproval_createdate2 = '".$ticketapproval_createdate1."',
													ticketapproval_createtime2 = '".$ticketapproval_createtime1."'
													WHERE ticket_id = '".$pid."'");	
												
													$updateTicketcheckapprvlareamgr = $ith->runQuery("
													UPDATE ITH_TIPEBARANG_KODE SET
													ticketapprovalstatusid_rom = '-',
													ticketapprovaldate_rom = '".$ticketapproval_createdate1."',
													ticketapprovaltime_rom = '".$ticketapproval_createtime1."',
													ticketapprovalstatusid_gmo = '-',
													ticketapprovaldate_gmo = '-',
													ticketapprovaltime_gmo = '-'													
													WHERE  ticket_id = '".$pid."' AND kode_tipebarang = '".$rCekJmlBrgXX->kode_tipebarang."'");	
												}
												/*
													echo "<br>Jumlah Item Lebih dari Satu Item dan Status DiRespond Untuk Tidak Disetujui<br>";
													echo "
													<br>UPDATE ITH_TICKET_HEADER SET 
													<br>ticketstatus_id = '2',
													<br>ticketapprovalstatus_id2 = '".$statusaprvl."',
													<br>ticketapprovalstatus_id3 = '2',
													<br>ticketapproval_id3 = '".$_SESSION['nik_atasan']."',
													<br>ticketapproval_by3 = '".$_SESSION['nama_atasan']."',
													<br>ticketapproval_createdate2 = '".$ticketapproval_createdate1."',
													<br>ticketapproval_createtime2= '".$ticketapproval_createdate1."'
													<br>WHERE ticket_id = '".$pid."'";	

													echo "
													<br><br>UPDATE ITH_TIPEBARANG_KODE SET
													<br>ticketapprovalstatusid_rom = '".$statusaprvl."',
													<br>ticketapprovaldate_rom = '".$ticketapproval_createdate1."',
													<br>ticketapprovaltime_rom = '".$ticketapproval_createtime1."',
													<br>ticketapprovalstatusid_gmo = '-',
													<br>ticketapprovaldate_gmo = '-',
													<br>ticketapprovaltime_gmo = '-'													
													<br>WHERE  ticket_id = '".$pid."',
													<br>AND kode_tipebarang = '".$value_kdtipebrg."'";	
												*/												
											}elseif($statusaprvl==0) // Ketika Lebih dari Satu Item yang tidak diApproved/ Lebih dari satu item yg di Reject
											{													
												#echo "<br>Ketika Status Tidak Diapproved dalam Lebih dari Satu item.";
												
													$updateStatusTicketID = $ith->runQuery("
													UPDATE ITH_TICKET_HEADER SET 
													ticketstatus_id = '2',
													ticketapprovalstatus_id2 = '0',
													ticketapprovalstatus_id3 = '2',
													ticketapproval_id3 = '".$_SESSION['nik_atasan']."',
													ticketapproval_by3 = '".$_SESSION['nama_atasan']."',	
													ticketapproval_createdate2 = '".$ticketapproval_createdate1."',
													ticketapproval_createtime2 = '".$ticketapproval_createtime1."'
													WHERE ticket_id = '".$pid."'");	
												$qCekStatusItemReq = mysql_query("SELECT COUNT(ticketapprovalstatusid_am) as TapprlstatusAM FROM ITH_TIPEBARANG_KODE 
																				  WHERE ticket_id = '".$_GET['pid']."' AND ticketapprovalstatusid_am='1'");
												$rCekStatusItemReq = mysql_fetch_object($qCekStatusItemReq);
												if($rCekStatusItemReq->TapprlstatusAM!=0)
												{ /* Status Jadi Cancel */
													$updateStatusTicketID = $ith->runQuery("
													UPDATE ITH_TICKET_HEADER SET 
													ticketapprovalstatus_id2 = '2',
													ticketapprovalstatus_id = '1'
													WHERE ticket_id = '".$pid."'");														
												}elseif($rCekStatusItemReq->TapprlstatusAM==0)
												{ /* Status On Process */
													$updateStatusTicketID = $ith->runQuery("
													UPDATE ITH_TICKET_HEADER SET 
													ticketapprovalstatus_id2 = '3',
													ticketapprovalstatus_id = '0'
													WHERE ticket_id = '".$pid."'");														
												}
												$qCekJmlBrgXX = mysql_query("SELECT * FROM ITH_TIPEBARANG_KODE 
															   WHERE ticket_id ='".$pid."'");
												while($rCekJmlBrgXX = mysql_fetch_object($qCekJmlBrgXX))
												{												
													$updateTicketcheckapprvlareamgr = $ith->runQuery("
													UPDATE ITH_TIPEBARANG_KODE SET
													ticketapprovalstatusid_rom = '0',
													ticketapprovaldate_rom = '".$ticketapproval_createdate1."',
													ticketapprovaltime_rom = '".$ticketapproval_createtime1."',
													ticketapprovalstatusid_gmo = '-',
													ticketapprovaldate_gmo = '-',
													ticketapprovaltime_gmo = '-'													
													WHERE  ticket_id = '".$pid."' AND kode_tipebarang = '".$rCekJmlBrgXX->kode_tipebarang."'");	
												}
												/*
													echo "<br>Jumlah Item Lebih dari Satu Item dan Status DiRespond Untuk Tidak Disetujui<br>";
													echo "
													<br>UPDATE ITH_TICKET_HEADER SET 
													<br>ticketstatus_id = '2',
													<br>ticketapprovalstatus_id2 = '".$statusaprvl."',
													<br>ticketapprovalstatus_id3 = '2',
													<br>ticketapproval_id3 = '".$_SESSION['nik_atasan']."',
													<br>ticketapproval_by3 = '".$_SESSION['nama_atasan']."',
													<br>ticketapproval_createdate2 = '".$ticketapproval_createdate1."',
													<br>ticketapproval_createtime2= '".$ticketapproval_createdate1."'
													<br>WHERE ticket_id = '".$pid."'";	

													echo "
													<br><br>UPDATE ITH_TIPEBARANG_KODE SET
													<br>ticketapprovalstatusid_rom = '".$statusaprvl."',
													<br>ticketapprovaldate_rom = '".$ticketapproval_createdate1."',
													<br>ticketapprovaltime_rom = '".$ticketapproval_createtime1."',
													<br>ticketapprovalstatusid_gmo = '-',
													<br>ticketapprovaldate_gmo = '-',
													<br>ticketapprovaltime_gmo = '-'													
													<br>WHERE  ticket_id = '".$pid."',
													<br>AND kode_tipebarang = '".$value_kdtipebrg."'";	
												*/												
											}elseif($statusaprvl==1) // Ketika Satu Item Saja yang diApproved
											{													
												##echo "<br>Ketika Status sudah Diapproved dalam Lebih dari satu item.";
												$qCekJmlBrgXX = mysql_query("SELECT * FROM ITH_TIPEBARANG_KODE 
															   WHERE ticket_id ='".$pid."'");
												while($rCekJmlBrgXX = mysql_fetch_object($qCekJmlBrgXX))
												{										
												$updateStatusTicketID = $ith->runQuery("
												UPDATE ITH_TICKET_HEADER SET 
												ticketstatus_id = '2',
												ticketapprovalstatus_id2 = '1',
												ticketapprovalstatus_id3 = '2',
												ticketapproval_id3 = '".$_SESSION['nik_atasan']."',
												ticketapproval_by3 = '".$_SESSION['nama_atasan']."',
												ticketapproval_createdate2 = '".$ticketapproval_createdate1."',
												ticketapproval_createtime2 = '".$ticketapproval_createtime1."'
												WHERE ticket_id = '".$pid."'");	

												$updateTicketcheckapprvlareamgr = $ith->runQuery("
												UPDATE ITH_TIPEBARANG_KODE SET												
												ticketapprovalstatusid_rom = '1',
												ticketapprovaldate_rom = '".$ticketapproval_createdate1."',
												ticketapprovaltime_rom = '".$ticketapproval_createtime1."',
												ticketapprovalstatusid_gmo = '-',
												ticketapprovaldate_gmo = '-',
												ticketapprovaltime_gmo = '-'
												WHERE  ticket_id = '".$pid."' AND kode_tipebarang = '".$rCekJmlBrgXX->kode_tipebarang."'");		
												}
												/***			
												echo "<br>Jumlah Item Lebih dari Satu Item dan Status DiRespond Untuk Disetujui<br>";
												echo " <br>
												UPDATE ITH_TICKET_HEADER SET 
												<br>ticketstatus_id = '2',
												<br>ticketapprovalstatus_id2 = '1',
												<br>ticketapprovalstatus_id3 = '2',
												<br>ticketapproval_id3 = '".$_SESSION['nik_atasan']."',
												<br>ticketapproval_by3 = '".$_SESSION['nama_atasan']."',
												<br>ticketapproval_createdate2 = '".$ticketapproval_createdate1."',
												<br>ticketapproval_createtime2 = '".$ticketapproval_createtime1."'
												<br>WHERE ticket_id = '".$pid."'";	

												echo"
												<br><br>UPDATE ITH_TIPEBARANG_KODE SET
												<br>ticketapprovalstatusid_rom = '".$statusaprvl."',
												<br>ticketapprovaldate_rom = '".$ticketapproval_createdate1."',
												<br>ticketapprovaltime_rom = '".$ticketapproval_createtime1."',
												<br>ticketapprovalstatusid_gmo = '-',
												<br>ticketapprovaldate_gmo = '-',
												<br>ticketapprovaltime_gmo = '-'
												<br>WHERE  ticket_id = '".$pid."'
												<br>AND kode_tipebarang = '".$value_kdtipebrg."'";	
											***/
											/* INSERT INTO DATABASE FSDWAREHOUSE ORACLE */
												$cone =  mysql_connect('localhost','usrservicedesk','kfc14022');
														 mysql_select_db('servicedesk',$cone);
												$qCekTiketID2z = mysql_query("SELECT ticket_id,kuantitas,kode_tipebarang,no_permintaan,request_by 
																			 FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$_GET['pid']."' 
																			 AND ticketapprovalstatusid_rom = '".$statusaprvl."'");
												while($rCekTiketID2z = mysql_fetch_object($qCekTiketID2z))
												{				
													echo "<hr><br>Kode Tipe Barang = ".$rCekTiketID2z->kode_tipebarang;
												
													$conninsToRequestMagicWarehouse = oci_connect('fsd', 'fsd', 'localhost:1521/XE') or die;	
													
													$qCekDataMagix = "SELECT DISTINCT FSDORDEC_TEMP.NO_PERMINTAAN, FSDORDEC_TEMP.TGL_PERMINTAAN, 
																		FSDORDEC_TEMP.TGL_BUAT_FSD, FSDORDEC_TEMP.KODE_BARANG, FSDORDEC_TEMP.NO_TAGING, 
																		FSDORDEC_TEMP.DEPARTEMEN, MSTDEPART.NAMA_DEPARTEMENT,
																		FSDBRGEQ.NAMA_BARANG,
																		FSDORDEC_TEMP.JUMLAH_PERMINTAAN, FSDORDEC_TEMP.JUMLAH_ORDER, FSDORDEC_TEMP.KIRIM_DARI_STOK, 
																		FSDORDEC_TEMP.TGL_DISETUJUI, 
																		FSDORDEC_TEMP.NOMOR_RO, FSDORDEC_TEMP.STATUS_PERMINTAAN
																		FROM FSDORDEC_TEMP 
																		JOIN FSDBRGEQ ON FSDORDEC_TEMP.KODE_BARANG = FSDBRGEQ.KODE_BARANG
																		JOIN MSTDEPART ON FSDORDEC_TEMP.DEPARTEMEN = MSTDEPART.KODE_DEPARTEMENT
																		WHERE FSDBRGEQ.KODE_BARANG = '".$rCekTiketID2z->kode_tipebarang."'
																		AND FSDORDEC_TEMP.NO_PERMINTAAN ='".$rCekTiketID2z->no_permintaan."'";
																		
													$objParseCekDataMagix = oci_parse ($conninsToRequestMagicWarehouse, $qCekDataMagix);  
																			   oci_execute ($objParseCekDataMagix,OCI_DEFAULT);
													$objResultCekDataMagix = oci_fetch_object($objParseCekDataMagix,OCI_BOTH);		
													$recvdate = date('d-M-Y');
													$forfsddate = date('d-M-Y');									
													
													
													$insToRequestMagicWarehouse = "INSERT INTO FSDORDEC(KODE_CABANG,DEPARTEMEN,NO_PERMINTAAN,TGL_PERMINTAAN,TGL_TERIMA_FSD,TGL_BUAT_FSD,KODE_BARANG,JUMLAH_PERMINTAAN, JUMLAH_ORDER, KETERANGAN, STATUS_PERMINTAAN) 
																					VALUES ('".$rCekTiketID2z->request_by."', '".$objResultCekDataMagix->DEPARTEMEN."', 
																					'".$objResultCekDataMagix->NO_PERMINTAAN."', '".$objResultCekDataMagix->TGL_PERMINTAAN."', 
																					'".$recvdate."', '".$forfsddate."', '".$rCekTiketID2z->kode_tipebarang."', 
																					'".$rCekTiketID2z->kuantitas."','0','REQUEST EQUIPMENT DARI STORE',' ')";
													/***
													echo "<hr><br> Data disimpan ke database oracle fsd warehouse TEST X2 FEQ
													<br>INSERT INTO FSDORDEC(KODE_CABANG,DEPARTEMEN,NO_PERMINTAAN,TGL_PERMINTAAN,TGL_TERIMA_FSD,TGL_BUAT_FSD,KODE_BARANG,JUMLAH_PERMINTAAN, JUMLAH_ORDER, KETERANGAN, STATUS_PERMINTAAN) 
													<br>VALUES ('".$rCekTiketID2z->request_by."', '".$objResultCekDataMagix->DEPARTEMEN."', 
													<br>'".$objResultCekDataMagix->NO_PERMINTAAN."', '".$objResultCekDataMagix->TGL_PERMINTAAN."', 
													<br>'".$recvdate."', '".$forfsddate."', '".$rCekTiketID2z->kode_tipebarang."', 
													<br>'".$rCekTiketID2z->kuantitas."','0','REQUEST EQUIPMENT DARI STORE',' ')";
													***/
													$compiledinsToRequestMagicWarehouse = oci_parse($conninsToRequestMagicWarehouse,$insToRequestMagicWarehouse);			
																						  oci_execute($compiledinsToRequestMagicWarehouse); 	
															
												} #exit;		
												/* !@!@!@!@!@!@!@!@!@!@!@!@!@!@@!!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@! */
												/* Send Mail To Regional Operation Manager */
											/**		error_reporting(E_STRICT);
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
												
														
														$usrid = $_SESSION['user_id'];
														$usrname = $_SESSION['user_realname'];	
														$usrnik = $_SESSION['user_nik'];
														$usrmail = $_SESSION['user_email'];
														$usrdept = $_SESSION['user_departemen'];
														$usrlvl = $_SESSION['user_level'];
														$ugroupid = $_SESSION['ugroupid'];
														$usubgroupid = $_SESSION['usubgroupid'];
														$usrnikatasan = $_SESSION['nik_atasan'];
														#$cdate = date('j F Y');
														$cdate3a = date('j')+1;
														$cdate3b = date('F');
														$cdate3c = date('Y');			
														$cdate = $cdate3a.'&nbsp;'.$cdate3b.'&nbsp;'.$cdate3c;									
														$approvalstatus_rom = $_POST['TICKETAPPROVALSTATUSID_ROM'];
														
														$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
														$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDU ANGGA'); 	
														$mail->AddCC('mantechno2020@gmail.com','MANTECHNO');	

														$cone =  mysql_connect('localhost','usrservicedesk','kfc14022');
																 mysql_select_db('servicedesk',$cone);
															
														$qCekDataYangDiApproved = mysql_query("SELECT * FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$_GET['pid']."'
																							   AND ticketapprovalstatusid_rom ='1' AND ticketapprovalstatusid_am ='1'");
														while($rCekDataYangDiApproved = mysql_fetch_object($qCekDataYangDiApproved))
														{
															$kdtipebrgXY = $rCekDataYangDiApproved->kode_tipebarang;									
															$namabarangsXY = preg_replace('/[^A-Za-z0-9\  ]/', '', $rCekDataYangDiApproved->nama_tipebarang);
															$qtyItemXY = $rCekDataYangDiApproved->kuantitas.' Unit<br>';	
															
																$connOraCekParamPrice = oci_connect('fsd', 'fsd', 'localhost:1521/XE') or die;
																$qCekParamPrice = "SELECT FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE AS KODE_BARANG,
																					FSDBRGEQASSET_NEW.ITEM_NAME AS NAMA_BARANG,FSDBRGEQASSET_NEW.ITEM_BRAND AS MERK_BARANG,
																					FSDBRGEQASSET_NEW.ITEM_MODEL AS MODEL,
																					FSDBRGEQASSET_NEW.ITEM_PRICE AS HARGA_TERAKHIR
																					FROM FSDBRGEQ_NEW
																					JOIN FSDSGROUP ON FSDBRGEQ_NEW.GROUP_CODE = FSDSGROUP.KODE_GROUP
																					JOIN FSDBRGEQASSET_NEW ON FSDBRGEQ_NEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
																					JOIN FSDEQTYPE_NEW ON FSDBRGEQ_NEW.EQTYPECODE = FSDEQTYPE_NEW.EQTYPECODE
																					WHERE FSDEQTYPE_NEW.EQTYPECODE = 'EQ0003' AND FSDBRGEQ_NEW.ITEM_CODE = '".$kdtipebrgXY."'";																				   
																$objParseCekParamPrice = oci_parse ($connOraCekParamPrice, $qCekParamPrice);  
																						 oci_execute ($objParseCekParamPrice,OCI_DEFAULT);
																$objResultCekParamPrice = oci_fetch_object($objParseCekParamPrice,OCI_BOTH);	
																
																$qvPembandingHargaAwal =  "SELECT DISTINCT FSDSGROUP.NAMA_GROUP, FSDBRGEQ.KODE_BARANG, 
																											FSDBRGEQ.NAMA_BARANG, FSDHRGER.HARGA_RATA2, FSDHRGER.HARGA_TERAKHIR
																											FROM FSDBRGEQ
																											JOIN FSDSGROUP ON FSDBRGEQ.KODE_GRUP = FSDSGROUP.KODE_GROUP
																											JOIN FSDHRGER ON FSDBRGEQ.KODE_BARANG = FSDHRGER.KODE_BARANG_EQ
																											WHERE FSDBRGEQ.KODE_BARANG = '".$kdtipebrgXY."'";														
																$qobjParsePembandingHargaAwal = oci_parse ($connOraCekParamPrice, $qvPembandingHargaAwal);  
																								oci_execute ($qobjParsePembandingHargaAwal,OCI_DEFAULT);   
																$rvPembandingHargaAwal = oci_fetch_object($qobjParsePembandingHargaAwal,OCI_BOTH); 	
																														$myServer = $_SERVER["SERVER_NAME"].'/eoss';							
																$qCekDataTicketHeader = mysql_query("SELECT ticket_id,ticket_subject,ticket_problem,ticket_createby 
																									 FROM ITH_TICKET_HEADER WHERE ticket_id = '".$_GET['pid']."'");	
																$rCekDataTicketHeader = mysql_fetch_object($qCekDataTicketHeader);	
																$subjectTicketStoreReq2 = $rCekDataTicketHeader->ticket_subject;
																$reasonTicketStoreReq2 = $rCekDataTicketHeader->ticket_problem;	
																$qCekDataStorenya2 = mysql_query("SELECT user_nik,user_realname FROM ITH_USER 
																								  WHERE user_nik = '".$rCekDataTicketHeader->ticket_createby."'");		
																$rCekDataStorenya2 = mysql_fetch_object($qCekDataStorenya2);
																$storeNameRequest2 = $rCekDataStorenya2->user_realname;	
															
																$mail->Subject    = "[E-OPERATION SUPPORT PROGRAM].REQUEST FOR-FROM-FSD : $subjectTicketStoreReq2";
																$mail->AltBody    = "$subjectTicketStoreReq2"; 
																
																$qCekReqByName = mysql_query("SELECT ITH_TICKET_HEADER.ticket_id, ITH_USER.user_nik, ITH_USER.user_realname 
																							  FROM ITH_TICKET_HEADER 
																							  JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
																							  where ITH_TICKET_HEADER.ticket_id = '".$_GET['pid']."'");	
																$rCekReqByName	= mysql_fetch_object($qCekReqByName);		

																$mail->Body .= "									
																<br>This is a request by : $rCekReqByName->user_realname For Your Approval With Details as Follows :<br>
																	<ul>
																		<li>Request ID : $pid</li>
																		<li>Subject : $subjectTicketStoreReq2</li>
																		<li>Category : Equipment</li>
																		<li>Ticket Status : On Process</li>
																		<li>Area Manager Approval Status : Approved</li>
																		<li>Ticket Create date : $cdate</li>
																		<li>Item Name  : $namabarangsXY</li>
																		<li>The amount of goods  : $qtyItemXY Unit</li>
																	</ul>
																<hr>
																Reason / Justification :	<br>$reasonTicketStoreReq2<br><br>
																<hr>
																	For Approval, Please Click In Here (<a href='http://$myServer/?m=notifmail&a=sendauth&pid=$pid&uid=$usrnikatasan'>Click Here</a>)
																<br><br>Regards,<br><br>
																$storeNameRequest2";
														
														}									
														if(!$mail->Send())
														{
															echo "Pesan Gagal:<br> " . $mail->ErrorInfo; #exit;
															#echo "<meta http-equiv=Refresh content=0;url=index.php?view=home&pid=$pid&uid=$uid>";
														}else{
															echo "Pesan Terkirim.";
															#echo "<meta http-equiv=Refresh content=0;url=index.php?view=home&pid=$pid&uid=$uid>"; 
														}	
													*/											
											}											
											echo "<br>$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$<br>";											
										}			
									
								}
?>