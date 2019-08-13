<?
								echo "<center><b><br>Cold EQ</b></center><hr>";
								echo "<br>Kode Item = ".$objResultCekParamPrice->KODE_BARANG;
								echo "<br>Nama Item = ".$objResultCekParamPrice->NAMA_BARANG;
								date_default_timezone_set('Asia/Jakarta'); 
								$ticketapproval_createdate1= date('d/m/Y');
								$ticketapproval_createtime1= date('H:i');
								$qCekValueParam = mysql_query("SELECT kd_parametertype,kd_grup,name_grup,value_parameter_rom FROM ITH_PARAMETER 
															   WHERE kd_parametertype = 'param_0003'");
								$rCekValueParam = mysql_fetch_object($qCekValueParam);
								if(($objResultCekParamPrice-> HARGA_TERAKHIR >= $rCekValueParam->value_parameter_rom)||($objResultCekParamPrice-> HARGA_TERAKHIR == $rCekValueParam->value_parameter_rom))
								{
									#echo "<br>Harga Terakhir >= Value Parameter";
									#echo "<br>Harga Terakhir == Value Parameter";
									#echo "<br><font color=blue>Oleh Sebab itu harus ada persetujuan(Approval) yg ditujukan ke ROM</font>";
								
								/** @@@@@ CEK JUMLAH ITEM COLD EQ REQUESTED YANG HARGA ITEM LEBIH BESAR ATAU SAMA DENGAN VALUE PARAM @@@@@@@ **/
								/**	$qCekJmlBrg = mysql_query("SELECT COUNT(ticket_id) AS Tbarang FROM ITH_TIPEBARANG_KODE 
															   WHERE ticket_id ='".$pid."' AND kode_tipebarang = '".$value_kdtipebrg."'");
								**/	
									$qCekJmlBrg = mysql_query("SELECT COUNT(ticket_id) AS Tbarang FROM ITH_TIPEBARANG_KODE 
															   WHERE ticket_id ='".$pid."'  
															   AND (kode_tipebrg='RQS-03-000112' OR kode_tipebrg='RQS-03-000112replace')
															   ORDER BY kode_tipebarang ASC");
									$rCekJmlBrg = mysql_fetch_object($qCekJmlBrg);
										/* Cek Jika Qty Item Hanya Satu Item */
										if($rCekJmlBrg->Tbarang==1)
										{
											#echo "<br>Jumlah Item = ".$rCekJmlBrg->Tbarang;	
											if($statusaprvl==0) // Ketika Satu Item Saja yang tidak diApproved/ Hanya satu item saja yg di Reject
											{													
												echo "<br>Ketika Status Tidak Diapproved dalam hanya Satu item saja.";
												
												/***
													$qCekJmlBrgXX = mysql_query("SELECT * FROM ITH_TIPEBARANG_KODE 
															   WHERE ticket_id ='".$pid."' 
															   AND (kode_tipebrg='RQS-03-000112' OR kode_tipebrg='RQS-03-000112replace')");
													$rCekJmlBrgXX = mysql_fetch_object($qCekJmlBrgXX);
																									
													$updateStatusTicketID = $ith->runQuery("
													UPDATE ITH_TICKET_HEADER SET 
													ticketstatus_id = '2',
													ticketapprovalstatus_id = '1',
													ticketapproval_id2 = '".$_SESSION['nik_atasan']."',
													ticketapproval_by2 = '".$_SESSION['nama_atasan']."',
													ticketapproval_createdate1 = '".$ticketapproval_createdate1."',
													ticketapproval_createtime1 = '".$ticketapproval_createtime1."',
													ticketapprovalstatus_id2 = '2'
													WHERE ticket_id = '".$pid."'");	
													
													$updateTicketcheckapprvlareamgr = $ith->runQuery("
													UPDATE ITH_TIPEBARANG_KODE SET
													ticketapprovalstatusid_am = '0',
													ticketapprovaldate_am = '".$ticketapproval_createdate1."',
													ticketapprovaltime_am = '".$ticketapproval_createtime1."',
													ticketapprovalstatusid_rom = '-',
													ticketapprovaldate_rom = '".$ticketapproval_createdate1."',
													ticketapprovaltime_rom = '".$ticketapproval_createtime1."',
													ticketapprovalstatusid_gmo = '-',
													ticketapprovaldate_gmo = '".$ticketapproval_createdate1."',
													ticketapprovaltime_gmo = '".$ticketapproval_createtime1."'													
													WHERE  ticket_id = '".$pid."' AND kode_tipebarang = '".$rCekJmlBrgXX->kode_tipebarang."'");	
												***/
													$qCekJmlBrgXX = mysql_query("SELECT * FROM ITH_TIPEBARANG_KODE 
															   WHERE ticket_id ='".$pid."' 
															   AND (kode_tipebrg='RQS-03-000112' OR kode_tipebrg='RQS-03-000112replace')
															   ORDER BY kode_tipebarang ASC");
													$rCekJmlBrgXX = mysql_fetch_object($qCekJmlBrgXX);
													
												echo "<br>UPDATE ITH_TICKET_HEADER SET 
													<br>ticketstatus_id = '2',
													<br>ticketapprovalstatus_id = '1',
													<br>ticketapproval_id2 = '".$_SESSION['nik_atasan']."',
													<br>ticketapproval_by2 = '".$_SESSION['nama_atasan']."',
													<br>ticketapproval_createdate1 = '".$ticketapproval_createdate1."',
													<br>ticketapproval_createtime1 = '".$ticketapproval_createtime1."',
													<br>ticketapprovalstatus_id2 = '2'
													<br>WHERE ticket_id = '".$pid."'";
												echo "<hr><br> X1 Nama Barang (COLD EQ) = ".$rCekJmlBrgXX->nama_tipebarang.'<hr>';	
												echo "<br>UPDATE ITH_TIPEBARANG_KODE SET
													<br>ticketapprovalstatusid_am = '0',
													<br>ticketapprovaldate_am = '".$ticketapproval_createdate1."',
													<br>ticketapprovaltime_am = '".$ticketapproval_createtime1."',
													<br>ticketapprovalstatusid_rom = '-',
													<br>ticketapprovaldate_rom = '".$ticketapproval_createdate1."',
													<br>ticketapprovaltime_rom = '".$ticketapproval_createtime1."',
													<br>ticketapprovalstatusid_gmo = '-',
													<br>ticketapprovaldate_gmo = '".$ticketapproval_createdate1."',
													<br>ticketapprovaltime_gmo = '".$ticketapproval_createtime1."'													
													<br>WHERE  ticket_id = '".$pid."' AND kode_tipebarang = '".$rCekJmlBrgXX->kode_tipebarang."'";
										
											}elseif($statusaprvl==1) // Ketika Satu Item Saja yang diApproved
											{													
												echo "<br>Ketika Status sudah Diapproved dalam satu item saja.";
												
												$qCekJmlBrgXX = mysql_query("SELECT * FROM ITH_TIPEBARANG_KODE 
															   WHERE ticket_id ='".$pid."' 
															   AND (kode_tipebrg='RQS-03-000112' OR kode_tipebrg='RQS-03-000112replace')
															   ORDER BY kode_tipebarang ASC");
												$rCekJmlBrgXX = mysql_fetch_object($qCekJmlBrgXX);
											/***		
												$updateStatusTicketID = $ith->runQuery("
												UPDATE ITH_TICKET_HEADER SET 
												ticketstatus_id = '2',
												ticketapprovalstatus_id = '1',
												ticketapproval_id2 = '".$_SESSION['nik_atasan']."',
												ticketapproval_by2 = '".$_SESSION['nama_atasan']."',												
												ticketapproval_createdate1 = '".$ticketapproval_createdate1."',
												ticketapproval_createtime1= '".$ticketapproval_createtime1."',
												ticketapprovalstatus_id2 = '2'
												WHERE ticket_id = '".$pid."'");	

												$updateTicketcheckapprvlareamgr = $ith->runQuery("
												UPDATE ITH_TIPEBARANG_KODE SET												
												ticketapprovalstatusid_am = '1',
												ticketapprovaldate_am = '".$ticketapproval_createdate1."',
												ticketapprovaltime_am = '".$ticketapproval_createtime1."',
												ticketapprovalstatusid_rom = '2',
												ticketapprovaldate_rom = '".$ticketapproval_createdate1."',
												ticketapprovaltime_rom = '".$ticketapproval_createtime1."',
												ticketapprovalbynik_rom = '".$_SESSION['nik_atasan']."',
												ticketapprovalbyname_rom = '".$_SESSION['nama_atasan']."'
												WHERE  ticket_id = '".$pid."' AND kode_tipebarang = '".$value_kdtipebrg."'");		
											***/
												echo "<br>
												<br>UPDATE ITH_TICKET_HEADER SET 
												<br>ticketstatus_id = '2',
												<br>ticketapprovalstatus_id = '1',
												<br>ticketapproval_id2 = '".$_SESSION['nik_atasan']."',
												<br>ticketapproval_by2 = '".$_SESSION['nama_atasan']."',												
												<br>ticketapproval_createdate1 = '".$ticketapproval_createdate1."',
												<br>ticketapproval_createtime1= '".$ticketapproval_createtime1."',
												<br>ticketapprovalstatus_id2 = '2'
												<br>WHERE ticket_id = '".$pid."'";
												echo "<hr><br> Nama Barang (COLD EQ) = ".$rCekJmlBrgXX->nama_tipebarang.'<hr>';
												echo "<br>UPDATE ITH_TIPEBARANG_KODE SET												
												<br>ticketapprovalstatusid_am = '1',
												<br>ticketapprovaldate_am = '".$ticketapproval_createdate1."',
												<br>ticketapprovaltime_am = '".$ticketapproval_createtime1."',
												<br>ticketapprovalstatusid_rom = '2',
												<br>ticketapprovaldate_rom = '".$ticketapproval_createdate1."',
												<br>ticketapprovaltime_rom = '".$ticketapproval_createtime1."',
												<br>ticketapprovalbynik_rom = '".$_SESSION['nik_atasan']."',
												<br>ticketapprovalbyname_rom = '".$_SESSION['nama_atasan']."'
												<br>WHERE  ticket_id = '".$pid."' AND kode_tipebarang = '".$value_kdtipebrg."'";
											
												/* !@!@!@!@!@!@!@!@!@!@!@!@!@!@@!!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@! */
											}
											echo "<br>$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$<br>";											/* Cek Jika Qty Item Hanya Satu Item */	
										}elseif($rCekJmlBrg->Tbarang > 1)
										{
											
											echo "<br>Jumlah Item = ".$rCekJmlBrg->Tbarang;	
											if($statusaprvl==0) // Ketika Lebih dari Satu Item yang tidak diApproved/ Lebih dari satu item yg di Reject
											{													
												echo "<br>Ketika Status Tidak Diapproved dalam Lebih dari Satu item.";
												echo "<br>kode barang = $value_kdtipebrg";	
												echo "<br>kode Item = ".$_GET['kodeitem'];
												$qCekJmlBrgXX = mysql_query("SELECT * FROM ITH_TIPEBARANG_KODE 
																		   WHERE ticket_id ='".$pid."'  
																		   AND (kode_tipebrg='RQS-03-000112' OR kode_tipebrg='RQS-03-000112replace')
																		   ORDER BY kode_tipebarang ASC");
												while($rCekJmlBrgXX = mysql_fetch_object($qCekJmlBrgXX))
												{												
												/***
													$updateStatusTicketID = $ith->runQuery("
													UPDATE ITH_TICKET_HEADER SET 
													ticketstatus_id = '2',
													ticketapprovalstatus_id = '1',
													ticketapproval_id2 = '".$_SESSION['nik_atasan']."',
													ticketapproval_by2 = '".$_SESSION['nama_atasan']."',													
													ticketapproval_createdate1 = '".$ticketapproval_createdate1."',
													ticketapproval_createtime1 = '".$ticketapproval_createtime1."',
													ticketapprovalstatus_id2 = '2'
													WHERE ticket_id = '".$pid."'");	

													$updateTicketcheckapprvlareamgr = $ith->runQuery("
													UPDATE ITH_TIPEBARANG_KODE SET
													ticketapprovalstatusid_am = '0',
													ticketapprovaldate_am = '".$ticketapproval_createdate1."',
													ticketapprovaltime_am = '".$ticketapproval_createtime1."',
													ticketapprovalstatusid_rom = '-',
													ticketapprovaldate_rom = '-',
													ticketapprovaltime_rom = '-',
													ticketapprovalstatusid_gmo = '-',
													ticketapprovaldate_gmo = '-',
													ticketapprovaltime_gmo = '-'											
													WHERE  ticket_id = '".$pid."' AND kode_tipebarang = '".$rCekJmlBrgXX->kode_tipebarang."'");	
												***/
	
													echo "<br>
													<br>UPDATE ITH_TICKET_HEADER SET 
													<br>ticketstatus_id = '2',
													<br>ticketapprovalstatus_id = '1',
													<br>ticketapproval_id2 = '".$_SESSION['nik_atasan']."',
													<br>ticketapproval_by2 = '".$_SESSION['nama_atasan']."',													
													<br>ticketapproval_createdate1 = '".$ticketapproval_createdate1."',
													<br>ticketapproval_createtime1 = '".$ticketapproval_createtime1."',
													<br>ticketapprovalstatus_id2 = '2'
													<br>WHERE ticket_id = '".$pid."'";
													
													echo "<hr><br>X2 Nama Barang (COLD EQ) = ".$rCekJmlBrgXX->nama_tipebarang.'<hr>';
													echo "<br><b><center>JUMLAH BARANG LEBIH DARI SATU ITEM</center></b>";
													echo "<br><b><center>CEK STATUS APPROVAL : $statusaprvl</center></b>";													

													if($value_kdtipebrg == $rCekJmlBrgXX->kode_tipebarang)
													{
														echo "<br><br><b>COLD EQ SUKSES STATUS NOT APPROVAED</b>";
													}elseif($value_kdtipebrg != $rCekJmlBrgXX->kode_tipebarang)	
													{
														echo "<br><br><b>COLD EQ GAGAL STATUS NOT APPROVAED</b>";
													}
													
													echo "<br>
													<br>UPDATE ITH_TIPEBARANG_KODE SET
													<br>ticketapprovalstatusid_am = '0',
													<br>ticketapprovaldate_am = '".$ticketapproval_createdate1."',
													<br>ticketapprovaltime_am = '".$ticketapproval_createtime1."',
													<br>ticketapprovalstatusid_rom = '-',
													<br>ticketapprovaldate_rom = '-',
													<br>ticketapprovaltime_rom = '-',
													<br>ticketapprovalstatusid_gmo = '-',
													<br>ticketapprovaldate_gmo = '-',
													<br>ticketapprovaltime_gmo = '-'											
													<br>WHERE  ticket_id = '".$pid."' AND kode_tipebarang = '".$rCekJmlBrgXX->kode_tipebarang."'";
													#}
												}
																								
											}elseif($statusaprvl==1) // Ketika Satu Item Saja yang diApproved
											{													
												echo "<br>Ketika Status sudah Diapproved dalam Lebih dari satu item.";
												echo "<br>kode Item = ".$_GET['kodeitem'];
												$qCekJmlBrgXX = mysql_query("SELECT * FROM ITH_TIPEBARANG_KODE 
																		   WHERE ticket_id ='".$pid."'  
																		   AND (kode_tipebrg='RQS-03-000112' OR kode_tipebrg='RQS-03-000112replace')
																		   ORDER BY kode_tipebarang ASC");
												while($rCekJmlBrgXX = mysql_fetch_object($qCekJmlBrgXX))
												{	
											/***	
												$updateStatusTicketID = $ith->runQuery("
												UPDATE ITH_TICKET_HEADER SET 
												ticketstatus_id = '2',
												ticketapprovalstatus_id = '1',
												ticketapproval_id2 = '".$_SESSION['nik_atasan']."',
												ticketapproval_by2 = '".$_SESSION['nama_atasan']."',												
												ticketapproval_createdate1 = '".$ticketapproval_createdate1."',
												ticketapproval_createtime1 = '".$ticketapproval_createtime1."',
												ticketapprovalstatus_id2 = '2'
												WHERE ticket_id = '".$pid."'");	

												$updateTicketcheckapprvlareamgr = $ith->runQuery("
												UPDATE ITH_TIPEBARANG_KODE SET												
												ticketapprovalstatusid_am = '1',
												ticketapprovaldate_am = '".$ticketapproval_createdate1."',
												ticketapprovaltime_am = '".$ticketapproval_createtime1."',
												ticketapprovalstatusid_rom = '2',
												ticketapprovaldate_rom = '".$ticketapproval_createdate1."',
												ticketapprovaltime_rom = '".$ticketapproval_createtime1."',
												ticketapprovalbynik_rom = '".$_SESSION['nik_atasan']."',
												ticketapprovalbyname_rom = '".$_SESSION['nama_atasan']."'
												WHERE  ticket_id = '".$pid."' AND kode_tipebarang = '".$rCekJmlBrgXX->kode_tipebarang."'");		
											***/	
													
												echo "<br>
												<br>UPDATE ITH_TICKET_HEADER SET 
												<br>ticketstatus_id = '2',
												<br>ticketapprovalstatus_id = '1',
												<br>ticketapproval_id2 = '".$_SESSION['nik_atasan']."',
												<br>ticketapproval_by2 = '".$_SESSION['nama_atasan']."',												
												<br>ticketapproval_createdate1 = '".$ticketapproval_createdate1."',
												<br>ticketapproval_createtime1 = '".$ticketapproval_createtime1."',
												<br>ticketapprovalstatus_id2 = '2'
												<br>WHERE ticket_id = '".$pid."'";
												echo "<hr><br>X3 Nama Barang (COLD EQ) = ".$rCekJmlBrgXX->nama_tipebarang.'<hr>';
												if($value_kdtipebrg == $rCekJmlBrgXX->kode_tipebarang)
												{
													echo "<br><br><b>COLD EQ SUKSES STATUS APPROVAED</b>";
												}elseif($value_kdtipebrg != $rCekJmlBrgXX->kode_tipebarang)	
												{
													echo "<br><br><b>COLD EQ GAGAL STATUS APPROVAED</b>";
												}												
												echo "<br>
												<br>UPDATE ITH_TIPEBARANG_KODE SET												
												<br>ticketapprovalstatusid_am = '1',
												<br>ticketapprovaldate_am = '".$ticketapproval_createdate1."',
												<br>ticketapprovaltime_am = '".$ticketapproval_createtime1."',
												<br>ticketapprovalstatusid_rom = '2',
												<br>ticketapprovaldate_rom = '".$ticketapproval_createdate1."',
												<br>ticketapprovaltime_rom = '".$ticketapproval_createtime1."',
												<br>ticketapprovalbynik_rom = '".$_SESSION['nik_atasan']."',
												<br>ticketapprovalbyname_rom = '".$_SESSION['nama_atasan']."'
												<br>WHERE  ticket_id = '".$pid."' AND kode_tipebarang = '".$rCekJmlBrgXX->kode_tipebarang."'";
												}
																					
											}											
											echo "<br>$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$<br>";											
												
										}			
								}elseif($objResultCekParamPrice-> HARGA_TERAKHIR < $rCekValueParam->value_parameter_rom)	
								{
									#echo "<br><font color=red><br>Harga Terakhir < Value Parameter</font>";		
									#echo "<br><font color=red>Oleh Sebab itu tidak ada persetujuan(Approval) yg ditujukan ke ROM</font>";
									
								/** @@@@@ CEK JUMLAH ITEM COLD EQ REQUESTED YANG HARGA ITEM LEBIH BESAR ATAU SAMA DENGAN VALUE PARAM @@@@@@@ **/
								/**	$qCekJmlBrg = mysql_query("SELECT COUNT(ticket_id) AS Tbarang FROM ITH_TIPEBARANG_KODE 
															   WHERE ticket_id ='".$pid."' AND kode_tipebarang = '".$value_kdtipebrg."'");
								**/	$qCekJmlBrg = mysql_query("SELECT COUNT(ticket_id) AS Tbarang FROM ITH_TIPEBARANG_KODE 
															   WHERE ticket_id ='".$pid."'");
									$rCekJmlBrg = mysql_fetch_object($qCekJmlBrg);
										/* Cek Jika Qty Item Hanya Satu Item */
										if($rCekJmlBrg->Tbarang==1)
										{
											echo "<br>Jumlah Item = ".$rCekJmlBrg->Tbarang;	
											if($statusaprvl==0) // Ketika Satu Item Saja yang tidak diApproved/ Hanya satu item saja yg di Reject
											{													
												echo "<br>Ketika Status Tidak Diapproved dalam hanya Satu item saja.";
												$qCekStatusItemReq = mysql_query("SELECT COUNT(ticketapprovalstatusid_am) as TapprlstatusAM FROM ITH_TIPEBARANG_KODE 
																				  WHERE ticket_id = '".$_GET['pid']."' AND ticketapprovalstatusid_am='1'");
												$rCekStatusItemReq = mysql_fetch_object($qCekStatusItemReq);												
												/***
													$updateStatusTicketID = $ith->runQuery("
													UPDATE ITH_TICKET_HEADER SET 
													ticketstatus_id = '3',
													ticketapprovalstatus_id = '1',
													ticketapproval_id2 = '".$_SESSION['nik_atasan']."',
													ticketapproval_by2 = '".$_SESSION['nama_atasan']."',													
													ticketapproval_createdate1 = '".$ticketapproval_createdate1."',
													ticketapproval_createtime1 = '".$ticketapproval_createtime1."',
													ticketapprovalstatus_id2 = '2'
													WHERE ticket_id = '".$pid."'");	
												***/	
													echo "<br>
													<br>UPDATE ITH_TICKET_HEADER SET 
													<br>ticketstatus_id = '3',
													<br>ticketapprovalstatus_id = '1',
													<br>ticketapproval_id2 = '".$_SESSION['nik_atasan']."',
													<br>ticketapproval_by2 = '".$_SESSION['nama_atasan']."',													
													<br>ticketapproval_createdate1 = '".$ticketapproval_createdate1."',
													<br>ticketapproval_createtime1 = '".$ticketapproval_createtime1."',
													<br>ticketapprovalstatus_id2 = '2'
													<br>WHERE ticket_id = '".$pid."'";

												if($rCekStatusItemReq->TapprlstatusAM!=0)
												{ /* Status Jadi Cancel */
												/**	$updateStatusTicketID = $ith->runQuery("
													UPDATE ITH_TICKET_HEADER SET 
													ticketstatus_id = '2',
													ticketapprovalstatus_id = '1'
													WHERE ticket_id = '".$pid."'");	**/													
												}elseif($rCekStatusItemReq->TapprlstatusAM==0)
												{ /* Status On Process */
												/**	$updateStatusTicketID = $ith->runQuery("
													UPDATE ITH_TICKET_HEADER SET 
													ticketstatus_id = '3',
													ticketapprovalstatus_id = '0'
													WHERE ticket_id = '".$pid."'");	**/													
												}
												/**
													$updateTicketcheckapprvlareamgr = $ith->runQuery("
													UPDATE ITH_TIPEBARANG_KODE SET
													ticketapprovalstatusid_am = '0',
													ticketapprovaldate_am = '".$ticketapproval_createdate1."',
													ticketapprovaltime_am = '".$ticketapproval_createtime1."',
													ticketapprovalstatusid_rom = '-',
													ticketapprovaldate_rom = '-',
													ticketapprovaltime_rom = '-',
													ticketapprovalstatusid_gmo = '-',
													ticketapprovaldate_gmo = '-',
													ticketapprovaltime_gmo = '-'													
													WHERE  ticket_id = '".$pid."' AND kode_tipebarang = '".$value_kdtipebrg."'");	
												**/
												$qCekJmlBrgXX = mysql_query("SELECT * FROM ITH_TIPEBARANG_KODE 
															   WHERE ticket_id ='".$pid."' 
															   AND (kode_tipebrg='RQS-03-000112' OR kode_tipebrg='RQS-03-000112replace')
															   ORDER BY kode_tipebarang ASC");
												$rCekJmlBrgXX = mysql_fetch_object($qCekJmlBrgXX);												
												echo "<hr><br> X4 Nama Barang (COLD EQ) = ".$rCekJmlBrgXX->nama_tipebarang.'<hr>';
												echo "<br>
												<br>UPDATE ITH_TIPEBARANG_KODE SET
												<br>ticketapprovalstatusid_am = '0',
												<br>ticketapprovaldate_am = '".$ticketapproval_createdate1."',
												<br>ticketapprovaltime_am = '".$ticketapproval_createtime1."',
												<br>ticketapprovalstatusid_rom = '-',
												<br>ticketapprovaldate_rom = '-',
												<br>ticketapprovaltime_rom = '-',
												<br>ticketapprovalstatusid_gmo = '-',
												<br>ticketapprovaldate_gmo = '-',
												<br>ticketapprovaltime_gmo = '-'													
												<br>WHERE  ticket_id = '".$pid."' AND kode_tipebarang = '".$rCekJmlBrgXX->kode_tipebarang."'";
																					
											}elseif($statusaprvl==1) // Ketika Satu Item Saja yang diApproved
											{	
												echo "<br>Cold EQ";
												echo "<br>Ketika Status sudah Diapproved dalam satu item saja.";
											/***	
												$updateStatusTicketID = $ith->runQuery("
												UPDATE ITH_TICKET_HEADER SET 
												ticketstatus_id = '2',
												ticketapprovalstatus_id = '1',
												ticketapproval_id2 = '".$_SESSION['nik_atasan']."',
												ticketapproval_by2 = '".$_SESSION['nama_atasan']."',												
												ticketapproval_createdate1 = '".$ticketapproval_createdate1."',
												ticketapproval_createtime1 = '".$ticketapproval_createtime1."',
												ticketapprovalstatus_id2 = '2'
												WHERE ticket_id = '".$pid."'");	

												$updateTicketcheckapprvlareamgr = $ith->runQuery("
												UPDATE ITH_TIPEBARANG_KODE SET												
												ticketapprovalstatusid_am = '1',
												ticketapprovaldate_am = '".$ticketapproval_createdate1."',
												ticketapprovaltime_am = '".$ticketapproval_createtime1."',
												ticketapprovalstatusid_rom = '-',
												ticketapprovaldate_rom = '-',
												ticketapprovaltime_rom = '-',
												ticketapprovalstatusid_gmo = '-',
												ticketapprovaldate_gmo = '-',
												ticketapprovaltime_gmo = '-'
												WHERE  ticket_id = '".$pid."' AND kode_tipebarang = '".$value_kdtipebrg."'");		
											***/
											
											/* INSERT INTO DATABASE FSDWAREHOUSE ORACLE */
												$cone =  mysql_connect('localhost','usrservicedesk','kfc14022');
														 mysql_select_db('servicedesk',$cone);
												$qCekTiketID2z = mysql_query("SELECT ticket_id,kuantitas,kode_tipebarang,no_permintaan,request_by 
																			 FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$_GET['pid']."'");
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
													
													/***
													$insToRequestMagicWarehouse = "INSERT INTO FSDORDEC(KODE_CABANG,DEPARTEMEN,NO_PERMINTAAN,TGL_PERMINTAAN,TGL_TERIMA_FSD,TGL_BUAT_FSD,KODE_BARANG,JUMLAH_PERMINTAAN, JUMLAH_ORDER, KETERANGAN, STATUS_PERMINTAAN) 
																					VALUES ('".$rCekTiketID2z->request_by."', '".$objResultCekDataMagix->DEPARTEMEN."', 
																					'".$objResultCekDataMagix->NO_PERMINTAAN."', '".$objResultCekDataMagix->TGL_PERMINTAAN."', 
																					'".$recvdate."', '".$forfsddate."', '".$rCekTiketID2z->kode_tipebarang."', 
																					'".$rCekTiketID2z->kuantitas."','0','REQUEST EQUIPMENT DARI STORE',' ')";
													***/
													
													echo "<hr><br> Data disimpan ke database oracle fsd warehouse TEST X1 CEQ
													<br>INSERT INTO FSDORDEC(KODE_CABANG,DEPARTEMEN,NO_PERMINTAAN,TGL_PERMINTAAN,TGL_TERIMA_FSD,TGL_BUAT_FSD,KODE_BARANG,JUMLAH_PERMINTAAN, JUMLAH_ORDER, KETERANGAN, STATUS_PERMINTAAN) 
													<br>VALUES ('".$rCekTiketID2z->request_by."', '".$objResultCekDataMagix->DEPARTEMEN."', 
													<br>'".$objResultCekDataMagix->NO_PERMINTAAN."', '".$objResultCekDataMagix->TGL_PERMINTAAN."', 
													<br>'".$recvdate."', '".$forfsddate."', '".$rCekTiketID2z->kode_tipebarang."', 
													<br>'".$rCekTiketID2z->kuantitas."','0','REQUEST EQUIPMENT DARI STORE',' ')";
													
													$compiledinsToRequestMagicWarehouse = oci_parse($conninsToRequestMagicWarehouse,$insToRequestMagicWarehouse);			
																						  oci_execute($compiledinsToRequestMagicWarehouse); 	
															
												}		
												/* !@!@!@!@!@!@!@!@!@!@!@!@!@!@@!!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@! */
											}
											echo "<br>$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$<br>";											/* Cek Jika Qty Item Hanya Satu Item */	
										}elseif($rCekJmlBrg->Tbarang > 1)
										{
											echo "<br>Jumlah Item Lebih Dari Satu Item";
											echo "<br>Jumlah Item = ".$rCekJmlBrg->Tbarang;	
											if($statusaprvl==0) // Ketika Lebih dari Satu Item yang tidak diApproved/ Lebih dari satu item yg di Reject
											{													
												$qCekJmlBrgXX = mysql_query("SELECT * FROM ITH_TIPEBARANG_KODE 
															   WHERE ticket_id ='".$pid."' 
															   AND (kode_tipebrg='RQS-03-000112' OR kode_tipebrg='RQS-03-000112replace')
															   ORDER BY kode_tipebarang ASC");
												while($rCekJmlBrgXX = mysql_fetch_object($qCekJmlBrgXX))
												{	
												/***
													$updateStatusTicketID = $ith->runQuery("
													UPDATE ITH_TICKET_HEADER SET 
													ticketstatus_id = '2',
													ticketapprovalstatus_id = '1',
													ticketapproval_id2 = '".$_SESSION['nik_atasan']."',
													ticketapproval_by2 = '".$_SESSION['nama_atasan']."',													
													ticketapproval_createdate1 = '".$ticketapproval_createdate1."',
													ticketapproval_createtime1 = '".$ticketapproval_createtime1."',
													ticketapprovalstatus_id2 = '2'
													WHERE ticket_id = '".$pid."'");	

													$updateTicketcheckapprvlareamgr = $ith->runQuery("
													UPDATE ITH_TIPEBARANG_KODE SET
													ticketapprovalstatusid_am = '0',
													ticketapprovaldate_am = '".$ticketapproval_createdate1."',
													ticketapprovaltime_am = '".$ticketapproval_createtime1."',
													ticketapprovalstatusid_rom = '-',
													ticketapprovaldate_rom = '-',
													ticketapprovaltime_rom = '-',
													ticketapprovalstatusid_gmo = '-',
													ticketapprovaldate_gmo = '-',
													ticketapprovaltime_gmo = '-'													
													WHERE  ticket_id = '".$pid."' AND kode_tipebarang = '".$rCekJmlBrgXX->kode_tipebarang."'");	
												***/
												echo "<br>
												<br>UPDATE ITH_TICKET_HEADER SET 
												<br>ticketstatus_id = '2',
												<br>ticketapprovalstatus_id = '1',
												<br>ticketapproval_id2 = '".$_SESSION['nik_atasan']."',
												<br>ticketapproval_by2 = '".$_SESSION['nama_atasan']."',													
												<br>ticketapproval_createdate1 = '".$ticketapproval_createdate1."',
												<br>ticketapproval_createtime1 = '".$ticketapproval_createtime1."',
												<br>ticketapprovalstatus_id2 = '2'
												<br>WHERE ticket_id = '".$pid."'";
												echo "<hr><br>X5 Nama Barang (COLD EQ) = ".$rCekJmlBrgXX->nama_tipebarang.'<hr>';
												echo "<br>
												<br>UPDATE ITH_TIPEBARANG_KODE SET
												<br>ticketapprovalstatusid_am = '0',
												<br>ticketapprovaldate_am = '".$ticketapproval_createdate1."',
												<br>ticketapprovaltime_am = '".$ticketapproval_createtime1."',
												<br>ticketapprovalstatusid_rom = '-',
												<br>ticketapprovaldate_rom = '-',
												<br>ticketapprovaltime_rom = '-',
												<br>ticketapprovalstatusid_gmo = '-',
												<br>ticketapprovaldate_gmo = '-',
												<br>ticketapprovaltime_gmo = '-'													
												<br>WHERE  ticket_id = '".$pid."' AND kode_tipebarang = '".$rCekJmlBrgXX->kode_tipebarang."'";
												}
												
												$qCekStatusItemReq = mysql_query("SELECT COUNT(ticketapprovalstatusid_am) as TapprlstatusAM FROM ITH_TICKET_HEADER 
																				  WHERE ticket_id = '".$_GET['pid']."' AND ticketapprovalstatusid_am='0'");
												$rCekStatusItemReq = mysql_fetch_object($qCekStatusItemReq);
												if($rCekStatusItemReq->TapprlstatusAM!='')
												{
												/***	
													$updateStatusTicketID = $ith->runQuery("
													UPDATE ITH_TICKET_HEADER SET 
													ticketstatus_id = '3',
													ticketapprovalstatus_id = '0',
													ticketapproval_id2 = '".$_SESSION['nik_atasan']."',
													ticketapproval_by2 = '".$_SESSION['nama_atasan']."',													
													ticketapproval_createdate1 = '".$ticketapproval_createdate1."',
													ticketapproval_createtime1 = '".$ticketapproval_createtime1."',
													ticketapprovalstatus_id2 = '2'
													WHERE ticket_id = '".$pid."'");	
												***/		
												}elseif($rCekStatusItemReq->TapprlstatusAM=='')
												{
												/***	
													$updateStatusTicketID = $ith->runQuery("
													UPDATE ITH_TICKET_HEADER SET 
													ticketstatus_id = '2',
													ticketapprovalstatus_id = '1',
													ticketapproval_id2 = '".$_SESSION['nik_atasan']."',
													ticketapproval_by2 = '".$_SESSION['nama_atasan']."',													
													ticketapproval_createdate1 = '".$ticketapproval_createdate1."',
													ticketapproval_createtime1 = '".$ticketapproval_createtime1."',
													ticketapprovalstatus_id2 = '2'
													WHERE ticket_id = '".$pid."'");	
												***/		
												}												
											}elseif($statusaprvl==1) // Ketika Satu Item Saja yang diApproved
											{		
												#echo "<br>Cold EQ";
												#echo "<br>Ketika Status sudah Diapproved dalam Lebih dari satu item.";
												$qCekJmlBrgXX = mysql_query("SELECT * FROM ITH_TIPEBARANG_KODE 
															   WHERE ticket_id ='".$pid."'");
												while($rCekJmlBrgXX = mysql_fetch_object($qCekJmlBrgXX))
												{	
												/***
												$updateStatusTicketID = $ith->runQuery("
												UPDATE ITH_TICKET_HEADER SET 
												ticketstatus_id = '2',
												ticketapprovalstatus_id = '1',
												ticketapproval_id2 = '".$_SESSION['nik_atasan']."',
												ticketapproval_by2 = '".$_SESSION['nama_atasan']."',												
												ticketapproval_createdate1 = '".$ticketapproval_createdate1."',
												ticketapproval_createtime1 = '".$ticketapproval_createtime1."',
												ticketapprovalstatus_id2 = '2'
												WHERE ticket_id = '".$pid."'");	

												$updateTicketcheckapprvlareamgr = $ith->runQuery("
												UPDATE ITH_TIPEBARANG_KODE SET												
												ticketapprovalstatusid_am = '1',
												ticketapprovaldate_am = '".$ticketapproval_createdate1."',
												ticketapprovaltime_am = '".$ticketapproval_createtime1."',
												ticketapprovalstatusid_rom = '-',
												ticketapprovaldate_rom = '-',
												ticketapprovaltime_rom = '-',
												ticketapprovalstatusid_gmo = '-',
												ticketapprovaldate_gmo = '-',
												ticketapprovaltime_gmo = '-'
												WHERE  ticket_id = '".$pid."' AND kode_tipebarang = '".$rCekJmlBrgXX->kode_tipebarang."'");		
												***/
												echo "<br>
												<br>UPDATE ITH_TICKET_HEADER SET 
												<br>ticketstatus_id = '2',
												<br>ticketapprovalstatus_id = '1',
												<br>ticketapproval_id2 = '".$_SESSION['nik_atasan']."',
												<br>ticketapproval_by2 = '".$_SESSION['nama_atasan']."',												
												<br>ticketapproval_createdate1 = '".$ticketapproval_createdate1."',
												<br>ticketapproval_createtime1 = '".$ticketapproval_createtime1."',
												<br>ticketapprovalstatus_id2 = '2'
												<br>WHERE ticket_id = '".$pid."'";
												echo "<hr><br>X6 Nama Barang (COLD EQ) = ".$rCekJmlBrgXX->nama_tipebarang.'<hr>';
												echo "<br>
												<br>UPDATE ITH_TIPEBARANG_KODE SET												
												<br>ticketapprovalstatusid_am = '1',
												<br>ticketapprovaldate_am = '".$ticketapproval_createdate1."',
												<br>ticketapprovaltime_am = '".$ticketapproval_createtime1."',
												<br>ticketapprovalstatusid_rom = '-',
												<br>ticketapprovaldate_rom = '-',
												<br>ticketapprovaltime_rom = '-',
												<br>ticketapprovalstatusid_gmo = '-',
												<br>ticketapprovaldate_gmo = '-',
												<br>ticketapprovaltime_gmo = '-'
												<br>WHERE  ticket_id = '".$pid."' AND kode_tipebarang = '".$rCekJmlBrgXX->kode_tipebarang."'";
												}
											
											/* INSERT INTO DATABASE FSDWAREHOUSE ORACLE */
												$cone =  mysql_connect('localhost','usrservicedesk','kfc14022');
														 mysql_select_db('servicedesk',$cone);
												$qCekTiketID2z = mysql_query("SELECT ticket_id,kuantitas,kode_tipebarang,no_permintaan,request_by 
																			 FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$_GET['pid']."' 
																			 AND ticketapprovalstatusid_am = '1");
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
													
													/***
													$insToRequestMagicWarehouse = "INSERT INTO FSDORDEC(KODE_CABANG,DEPARTEMEN,NO_PERMINTAAN,TGL_PERMINTAAN,TGL_TERIMA_FSD,TGL_BUAT_FSD,KODE_BARANG,JUMLAH_PERMINTAAN, JUMLAH_ORDER, KETERANGAN, STATUS_PERMINTAAN) 
																					VALUES ('".$rCekTiketID2z->request_by."', '".$objResultCekDataMagix->DEPARTEMEN."', 
																					'".$objResultCekDataMagix->NO_PERMINTAAN."', '".$objResultCekDataMagix->TGL_PERMINTAAN."', 
																					'".$recvdate."', '".$forfsddate."', '".$rCekTiketID2z->kode_tipebarang."', 
																					'".$rCekTiketID2z->kuantitas."','0','REQUEST EQUIPMENT DARI STORE',' ')";
													***/
													echo "<hr><br> Data disimpan ke database oracle fsd warehouse TEST X1 CEQ
													<br>INSERT INTO FSDORDEC(KODE_CABANG,DEPARTEMEN,NO_PERMINTAAN,TGL_PERMINTAAN,TGL_TERIMA_FSD,TGL_BUAT_FSD,KODE_BARANG,JUMLAH_PERMINTAAN, JUMLAH_ORDER, KETERANGAN, STATUS_PERMINTAAN) 
													<br>VALUES ('".$rCekTiketID2z->request_by."', '".$objResultCekDataMagix->DEPARTEMEN."', 
													<br>'".$objResultCekDataMagix->NO_PERMINTAAN."', '".$objResultCekDataMagix->TGL_PERMINTAAN."', 
													<br>'".$recvdate."', '".$forfsddate."', '".$rCekTiketID2z->kode_tipebarang."', 
													<br>'".$rCekTiketID2z->kuantitas."','0','REQUEST EQUIPMENT DARI STORE',' ')";
													
													$compiledinsToRequestMagicWarehouse = oci_parse($conninsToRequestMagicWarehouse,$insToRequestMagicWarehouse);			
																						  oci_execute($compiledinsToRequestMagicWarehouse); 	
												}
												/* !@!@!@!@!@!@!@!@!@!@!@!@!@!@@!!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@!@! */
										
											}											
											echo "<br>$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$<br>";											
										}			
									
								}	###exit;
?>