<?php //if (empty($_BASE_PATH)) {header("location:index.php");}
@session_start();
require_once('_includes.php');
$userlevel=$_SESSION['user_level'];
 ?>
<link type="text/css" href="css/custom.css" rel="stylesheet" />
<!--<link href="requestlist/css/bootstrap.min.css" rel="stylesheet" media="screen">-->

<? if(($userlevel == 8)){ /* SEND MAIL TO GMO FROM STORE REQUEST */?>	

	<!-- KETIKA STATUS KIRIM EMAIL HASILNYA GAGAL KIRIM -->
	<? if($_GET['status']=='sendfailed'){ ?>
		<div id="content" style="height:560px;margin-top:100px;">
			<div class="header">
			</div>
			<div class="body" style="height:500px;">				
				<div style="text-align:center;margin-top:200px;font-size:14pt;color:#fff;">	
				<? 
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
									
					$newid = $_GET['pid'];
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
														$mail->AddCCProg3('albertfla21@gmail.com','ZAMIL INDOCYBER');															
														
														$cone =  mysql_connect('localhost','usrservicedesk','kfc14022');
																 mysql_select_db('servicedesk',$cone);
															
														$qCekDataYangDiApproved = mysql_query("SELECT * FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$_GET['pid']."'
																							   AND ticketapprovalstatusid_rom ='1' AND ticketapprovalstatusid_am ='1'");
														while($rCekDataYangDiApproved = mysql_fetch_object($qCekDataYangDiApproved))
														{
															$kdtipebrgXY = $rCekDataYangDiApproved->kode_tipebarang;									
															$namabarangsXY = preg_replace('/[^A-Za-z0-9\  ]/', '', $rCekDataYangDiApproved->nama_tipebarang);
															$qtyItemXY = $rCekDataYangDiApproved->kuantitas.' <br>';	
															
																$connOraCekParamPrice = oci_connect('fsd', 'fsd', 'localhost:1521/XE') or die;
																$qCekParamPrice = "SELECT KODE_GRUP, KODE_BARANG, NAMA_BARANG FROM FSDBRGEQ 
																					WHERE KODE_BARANG = '".$kdtipebrgXY."' 
																				   ORDER BY KODE_GRUP, KODE_BARANG, NAMA_BARANG ASC";														
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
														}	
																$mail->Subject    = "[E-OPERATION SUPPORT PROGRAM].APPROVAL-FOR-GMO : $subjectTicketStoreReq2";
																$mail->AltBody    = "$subjectTicketStoreReq2"; 
																
																$qCekReqByName = mysql_query("SELECT ITH_TICKET_HEADER.ticket_id, ITH_USER.user_nik, ITH_USER.user_realname 
																							  FROM ITH_TICKET_HEADER 
																							  JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
																							  where ITH_TICKET_HEADER.ticket_id = '".$_GET['pid']."'");	
																$rCekReqByName	= mysql_fetch_object($qCekReqByName);		
														
																#$mail->Body .= "									
																$bodymail1 .= "									
																<br>This is request for equipment transfer by : $rCekReqByName->user_realname For Your Approval With Details as Follows :<br>
																	<ul>
																		<li>Request ID : $pid</li>
																		<li>Subject : $subjectTicketStoreReq2</li>
																		<li>Category : Equipment</li>
																		<li>Ticket Status : On Process</li>
																		<li>ROM Approval Status : Approved</li>
																		<li>Ticket Create date : $cdate</li>";
														$qCekDataYangDiApprovedTest = mysql_query("SELECT * FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$_GET['pid']."'
																							   AND ticketapprovalstatusid_rom ='1' AND ticketapprovalstatusid_am ='1'");
														while($rCekDataYangDiApprovedTest = mysql_fetch_object($qCekDataYangDiApprovedTest))
														{
															$allItemName = preg_replace('/[^A-Za-z0-9\  ]/', '', $rCekDataYangDiApprovedTest->nama_tipebarang);
															$qtyItemXY = $rCekDataYangDiApprovedTest->kuantitas.' Unit';			
																$bodymail2 .= "																		
																		<li>Item Name  : $allItemName</li> 
																		<li>The amount of goods  : $qtyItemXY </li>";
																		
																/* $bodymail3 .= "																		
																		<li>Item Name  : $allItemName</li> "; */
														}				
																$bodymail4 .= "
																		
																	</ul>
																<hr>
																Reason / Justification :	<br>$reasonTicketStoreReq2<br><br>
																<hr>
																	For Approval, Please Click In Here (<a href='http://$myServer/?m=notifmail&a=sendauth&pid=$pid&uid=$usrnikatasan'>Click Here</a>)
																<br><br>Regards,<br><br>
																$storeNameRequest2";
															#	$allbodymail = $bodymail1.$bodymail2.$bodymail3.$bodymail4;
																$allbodymail = $bodymail1.$bodymail2.$bodymail4;
																$mail->Body .= $allbodymail;
				if(!$mail->Send()) 
				{
					/* OFFLINE */			
				?>
				
					<?="<br>".$mail->ErrorInfo; #exit;?><br><br>
					<font color="#fff" style="font-weight:bold;text-align:center;">SORRY,MESSAGE NOT SEND (NOT SEND TO GMO)!!!</font><br>
					<b>PLEASE RESEND YOUR REQUEST, UNTIL SUCCESFULLY SUBMITED !!!</b><br>					
					<br>
					<button onclick="location.href = '?view=sendmailtogmo&status=resendprocess&pid=<?=$_GET['pid'];?>&uid=<?=$_SESSION['user_nik'];?>';" id="myButton" class="submit-btn">RESEND</button>&nbsp;
				</div>				
				<div><br></div>
				<div><br></div>	
				<? 
				} else {
					/* ONLINE */					
				##	header ("Location: index.php?view=storemessage");
					header ("Location: index.php?view=sendmailtogmo&status=resendsuccess&pid=$newid");
							
				?>
				<? } ?>	
			</div>
		</div>

	<!-- KETIKA STATUS KIRIM EMAIL HASILNYA SUKSES KIRIM -->		
	<? }elseif($_GET['status']=='sendsuccess'){ ?>
		<?php
		/*if(($category=='1')||($category=='2')||($category=='5')||($category=='6')||($category=='7')||($category=='8')
									||($category=='35')||($category=='36')||($category=='37'))
		{ */
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
										
														$newid = $_GET['pid'];
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
														$mail->AddCCProg3('albertfla21@gmail.com','ZAMIL INDOCYBER');

														$cone =  mysql_connect('localhost','usrservicedesk','kfc14022');
																 mysql_select_db('servicedesk',$cone);
															
														$qCekDataYangDiApproved = mysql_query("SELECT * FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$_GET['pid']."'
																							   AND ticketapprovalstatusid_rom ='1' AND ticketapprovalstatusid_am ='1'");
														while($rCekDataYangDiApproved = mysql_fetch_object($qCekDataYangDiApproved))
														{
															$kdtipebrgXY = $rCekDataYangDiApproved->kode_tipebarang;									
															$namabarangsXY = preg_replace('/[^A-Za-z0-9\  ]/', '', $rCekDataYangDiApproved->nama_tipebarang);
															$qtyItemXY = $rCekDataYangDiApproved->kuantitas.' <br>';	
															
																$connOraCekParamPrice = oci_connect('fsd', 'fsd', 'localhost:1521/XE') or die;
																$qCekParamPrice = "SELECT KODE_GRUP, KODE_BARANG, NAMA_BARANG FROM FSDBRGEQ 
																					WHERE KODE_BARANG = '".$kdtipebrgXY."' 
																				   ORDER BY KODE_GRUP, KODE_BARANG, NAMA_BARANG ASC";														
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
														}	
																$mail->Subject    = "[E-OPERATION SUPPORT PROGRAM].APPROVAL-FOR-GMO : $subjectTicketStoreReq2";
																$mail->AltBody    = "$subjectTicketStoreReq2"; 
																
																$qCekReqByName = mysql_query("SELECT ITH_TICKET_HEADER.ticket_id, ITH_USER.user_nik, ITH_USER.user_realname 
																							  FROM ITH_TICKET_HEADER 
																							  JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
																							  where ITH_TICKET_HEADER.ticket_id = '".$_GET['pid']."'");	
																$rCekReqByName	= mysql_fetch_object($qCekReqByName);		
														
																#$mail->Body .= "									
																$bodymail1 .= "									
																<br>This is request for equipment transfer by : $rCekReqByName->user_realname For Your Approval With Details as Follows :<br>
																	<ul>
																		<li>Request ID : $pid</li>
																		<li>Subject : $subjectTicketStoreReq2</li>
																		<li>Category : Equipment</li>
																		<li>Ticket Status : On Process</li>
																		<li>ROM Approval Status : Approved</li>
																		<li>Ticket Create date : $cdate</li>";
														$qCekDataYangDiApprovedTest = mysql_query("SELECT * FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$_GET['pid']."'
																							   AND ticketapprovalstatusid_rom ='1' AND ticketapprovalstatusid_am ='1'");
														while($rCekDataYangDiApprovedTest = mysql_fetch_object($qCekDataYangDiApprovedTest))
														{
														/**
															$allItemName = preg_replace('/[^A-Za-z0-9\  ]/', '', $rCekDataYangDiApprovedTest->nama_tipebarang);
															$qtyItemXY = $rCekDataYangDiApprovedTest->kuantitas.' Unit';			
																$bodymail2 .= "																		
																		<li>Item Name  : $allItemName</li> 
																		<li>The amount of goods  : $qtyItemXY </li>";
														**/
															$allItemName = preg_replace('/[^A-Za-z0-9\  ]/', '', $rCekDataYangDiApprovedTest->nama_tipebarang);
															$transferToOutletName = preg_replace('/[^A-Za-z0-9\  ]/', '', $rCekDataYangDiApprovedTest->tickettransferto_outletname);
															$transferToOutletNames = ucwords(strtolower($transferToOutletName));
															$qtyItemXY = $rCekDataYangDiApprovedTest->kuantitas.' Unit';			
															/***
															if($rCekDataYangDiApprovedTest->keterangan == 'MOVE TO OTHER STORE')
															{
																$bodymail2 .= "																		
																			<li>Item Name   : $allItemName</li>
																			<li>Transfer To : $transferToOutletNames</li>";
															}elseif($rCekDataYangDiApprovedTest->keterangan == 'MOVE TO WAREHOUSE'){
																$bodymail2 .= "																		
																			<li>Item Name   : $allItemName</li>
																			<li>Transfer To : Warehouse</li>";
															}elseif($rCekDataYangDiApprovedTest->keterangan == 'REPLACEMENT REQUEST'){
																$bodymail2 .= "																		
																		<li>Item Name  : $allItemName</li>";
															}elseif($rCekDataYangDiApprovedTest->keterangan == 'ADDING REQUEST'){
																$bodymail2 .= "																		
																		<li>Item Name  : $allItemName</li> 
																		<li>The amount of goods  : $qtyItemXY </li>";
															}	
															***/
															if(($rCekDataYangDiApprovedTest->keterangan == 'MOVE TO OTHER STORE')&&($rCekDataYangDiApprovedTest->ticket_needassist == 'YES'))
															{
																$bodymail2 .= "																		
																			<li>Item Name   : $allItemName</li>
																			<li>Transfer To : $transferToOutletNames</li>
																			<li>Assist By : FSD</li>";
															}elseif(($rCekDataYangDiApprovedTest->keterangan == 'MOVE TO OTHER STORE')&&($rCekDataYangDiApprovedTest->ticket_needassist == 'NO'))
															{
																$bodymail2 .= "																		
																			<li>Item Name   : $allItemName</li>
																			<li>Transfer To : $transferToOutletNames</li>
																			<li>Assist By : OPR</li>";
															}elseif(($rCekDataYangDiApprovedTest->keterangan == 'MOVE TO WAREHOUSE')&&($rCekDataYangDiApprovedTest->ticket_needassist == 'YES')){
																$bodymail2 .= "																		
																			<li>Item Name   : $allItemName</li>
																			<li>Transfer To : Warehouse</li>
																			<li>Assist By 	: FSD</li>";
															}elseif(($rCekDataYangDiApprovedTest->keterangan == 'MOVE TO WAREHOUSE')&&($rCekDataYangDiApprovedTest->ticket_needassist == 'NO')){
																$bodymail2 .= "																		
																			<li>Item Name   : $allItemName</li>
																			<li>Transfer To : Warehouse</li>
																			<li>Assist By 	: OPR</li>";
															}elseif($rCekDataYangDiApprovedTest->keterangan == 'REPLACEMENT REQUEST'){
																$bodymail2 .= "																		
																		<li>Item Name  : $allItemName</li>";
															}elseif($rCekDataYangDiApprovedTest->keterangan == 'ADDING REQUEST'){
																$bodymail2 .= "																		
																		<li>Item Name  : $allItemName</li> 
																		<li>The amount of goods  : $qtyItemXY </li>";
															}																
														}				
																$bodymail4 .= "
																		
																	</ul>
																<hr>
																Reason / Justification :	<br>$reasonTicketStoreReq2<br><br>
																<hr>
																	For Approval, Please Click In Here (<a href='http://$myServer/?m=notifmail&a=sendauth&pid=$pid&uid=$usrnikatasan'>Click Here</a>)
																<br><br>Regards,<br><br>
																$storeNameRequest2";
															#	$allbodymail = $bodymail1.$bodymail2.$bodymail3.$bodymail4;
																$allbodymail = $bodymail1.$bodymail2.$bodymail4;
																$mail->Body .= $allbodymail;
				if(!$mail->Send()) 
				{
		?>	
			<?="<br>".$mail->ErrorInfo; #exit;?><br><br>
			<b>SORRY,MESSAGE NOT SEND (NOT SEND TO GMO)!!!</b><br>
			<b>PLEASE RESEND YOUR REQUEST, UNTIL SUCCESFULLY SUBMITED !!!</b><br>					
			<br>
			<button onclick="location.href = '?view=sendmailtogmo&status=resendprocess&pid=<?=$_GET['pid'];?>&uid=<?=$_SESSION['user_nik'];?>';" id="myButton" class="submit-btn">RESEND</button>&nbsp;
			</div>				
			<div><br></div>
			<div><br></div>			
			<? }else{ ?>
			<div id="content" style="height:560px;margin-top:100px;">
				<div class="header">
				</div>
				<div class="body" style="height:500px;">
				<? 
					$cone =  mysql_connect('localhost','usrservicedesk','kfc14022');
							 mysql_select_db('servicedesk',$cone);
														
					$qCekDataX = mysql_query("SELECT ticketstatus_id FROM ITH_TICKET_HEADER WHERE ticket_id = '".$_GET['pid']."'");
					$rCekDataX = mysql_fetch_object($qCekDataX);	
					if($rCekDataX->ticketstatus_id=='2')
					{	
				?>	
					<div style="text-align:center;margin-top:300px;font-size:14pt;color:#fff;"> 
						<b>REQUEST SUCCESFULLY SUBMITTED !!!</b><br>
						<br>
						<!--<button onclick="location.href = '?m=info&pid=<!?=$_GET['pid'];?>&uid=<!?=$_SESSION['user_nik'];?>';" id="myButton" class="submit-btn">OK</button>&nbsp;-->
						<button onclick="location.href = '?view=comment&pid=<?=$_GET['pid'];?>&uid=<?=$_SESSION['user_nik'];?>';" id="myButton" class="submit-btn">OK</button>&nbsp;
					</div>
				<? 
					}elseif($rCekDataX->ticketstatus_id=='5'){
				?>		
					<div style="text-align:center;margin-top:300px;font-size:14pt;color:#fff;"> 
						<b>REQUEST SUCCESFULLY CLOSED !!!</b><br>
						<br>
						<!--<button onclick="location.href = '?m=info&pid=<!?=$_GET['pid'];?>&uid=<!?=$_SESSION['user_nik'];?>';" id="myButton" class="submit-btn">OK</button>&nbsp;-->
						<button onclick="location.href = '?view=comment&pid=<?=$_GET['pid'];?>&uid=<?=$_SESSION['user_nik'];?>';" id="myButton" class="submit-btn">OK</button>&nbsp;
					</div>
				<? } ?>		
					<div><br></div>
					<div><br></div>		
				</div>
			</div>
			   <? } //if(!$mail->Send())   ?>	
			   
	<!-- KETIKA STATUS KIRIM EMAIL HASILNYA MENCOBA UNTUK PROSES KIRIM ULANG KEMBALI -->	
	<? }elseif($_GET['status']=='resendprocess'){ ?>
		<div id="content" style="height:160px;margin-top:20px;">
			<div class="header">
			</div>
			<div class="body" style="height:100px;">				
				<div style="text-align:center;margin-top:10px;font-size:14pt;color:#fff;">		
		<?php
		
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
										
														$newid = $_GET['pid'];
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
														$mail->AddCCProg3('albertfla21@gmail.com','ZAMIL INDOCYBER');
														
														$cone =  mysql_connect('localhost','usrservicedesk','kfc14022');
																 mysql_select_db('servicedesk',$cone);
															
														$qCekDataYangDiApproved = mysql_query("SELECT * FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$_GET['pid']."'
																							   AND ticketapprovalstatusid_rom ='1' AND ticketapprovalstatusid_am ='1'");
														while($rCekDataYangDiApproved = mysql_fetch_object($qCekDataYangDiApproved))
														{
															$kdtipebrgXY = $rCekDataYangDiApproved->kode_tipebarang;									
															$namabarangsXY = preg_replace('/[^A-Za-z0-9\  ]/', '', $rCekDataYangDiApproved->nama_tipebarang);
															$qtyItemXY = $rCekDataYangDiApproved->kuantitas.' <br>';	
															
																$connOraCekParamPrice = oci_connect('fsd', 'fsd', 'localhost:1521/XE') or die;
																$qCekParamPrice = "SELECT KODE_GRUP, KODE_BARANG, NAMA_BARANG FROM FSDBRGEQ 
																					WHERE KODE_BARANG = '".$kdtipebrgXY."' 
																				   ORDER BY KODE_GRUP, KODE_BARANG, NAMA_BARANG ASC";														
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
														}	
																$mail->Subject    = "[E-OPERATION SUPPORT PROGRAM].APPROVAL-FOR-GMO : $subjectTicketStoreReq2";
																$mail->AltBody    = "$subjectTicketStoreReq2"; 
																
																$qCekReqByName = mysql_query("SELECT ITH_TICKET_HEADER.ticket_id, ITH_USER.user_nik, ITH_USER.user_realname 
																							  FROM ITH_TICKET_HEADER 
																							  JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
																							  where ITH_TICKET_HEADER.ticket_id = '".$_GET['pid']."'");	
																$rCekReqByName	= mysql_fetch_object($qCekReqByName);		
														
																#$mail->Body .= "									
																$bodymail1 .= "									
																<br>This is request for equipment transfer by : $rCekReqByName->user_realname For Your Approval With Details as Follows :<br>
																	<ul>
																		<li>Request ID : $pid</li>
																		<li>Subject : $subjectTicketStoreReq2</li>
																		<li>Category : Equipment</li>
																		<li>Ticket Status : On Process</li>
																		<li>ROM Approval Status : Approved</li>
																		<li>Ticket Create date : $cdate</li>";
														$qCekDataYangDiApprovedTest = mysql_query("SELECT * FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$_GET['pid']."'
																							   AND ticketapprovalstatusid_rom ='1' AND ticketapprovalstatusid_am ='1'");
														while($rCekDataYangDiApprovedTest = mysql_fetch_object($qCekDataYangDiApprovedTest))
														{
															$allItemName = preg_replace('/[^A-Za-z0-9\  ]/', '', $rCekDataYangDiApprovedTest->nama_tipebarang);
															$qtyItemXY = $rCekDataYangDiApprovedTest->kuantitas.' Unit';			
																$bodymail2 .= "																		
																		<li>Item Name  : $allItemName</li> 
																		<li>The amount of goods  : $qtyItemXY </li>";
																		
																/* $bodymail3 .= "																		
																		<li>Item Name  : $allItemName</li> "; */
														}				
																$bodymail4 .= "
																		
																	</ul>
																<hr>
																Reason / Justification :	<br>$reasonTicketStoreReq2<br><br>
																<hr>
																	For Approval, Please Click In Here (<a href='http://$myServer/?m=notifmail&a=sendauth&pid=$pid&uid=$usrnikatasan'>Click Here</a>)
																<br><br>Regards,<br><br>
																$storeNameRequest2";
															#	$allbodymail = $bodymail1.$bodymail2.$bodymail3.$bodymail4;
																$allbodymail = $bodymail1.$bodymail2.$bodymail4;
																$mail->Body .= $allbodymail;
				if(!$mail->Send()) 
				{
		?>	
					<?="<br>".$mail->ErrorInfo; #exit;?><br><br>
					<b>SORRY,MESSAGE NOT SEND (NOT SEND TO GMO) !!!</b><br>
					<b>PLEASE RESEND YOUR REQUEST, UNTIL SUCCESFULLY SUBMITED !!!</b><br>					
					<br>
					<button onclick="location.href = '?view=sendmailtogmo&status=resendprocess&pid=<?=$_GET['pid'];?>&uid=<?=$_SESSION['user_nik'];?>';" id="myButton" class="submit-btn">RESEND</button>&nbsp;
				</div>				
				<div><br></div>
				<div><br></div>	
				<? 
				} else {
					/* ONLINE */					
				##	header ("Location: index.php?view=storemessage");
					header ("Location: index.php?view=sendmailtogmo&status=resendsuccess&pid=$newid");
							
				?>
				<? } ?>	
			</div>
		</div>			   
	<? }elseif($_GET['status']=='resendfailed'){ ?>
		<div id="content" style="height:560px;margin-top:100px;">
			<div class="header">
			</div>
			<div class="body" style="height:500px;">				
				<div style="text-align:center;margin-top:300px;font-size:14pt;color:#fff;">					
					<b>SORRY,MESSAGE NOT SEND (NOT SEND TO GMO) !!!</b><br>
					<b>PLEASE RESEND YOUR REQUEST, UNTIL SUCCESFULLY SUBMITED !!!</b><br>					
					<br>
					<button onclick="location.href = '?view=sendmailtogmo&status=resendprocess&pid=<?=$_GET['pid'];?>&uid=<?=$_SESSION['user_nik'];?>';" id="myButton" class="submit-btn">RESEND</button>&nbsp;
				</div>				
				<div><br></div>
				<div><br></div>				
			</div>
		</div>

	<!-- KETIKA STATUS KIRIM EMAIL HASILNYA SUKSES KIRIM -->		
	<? }elseif($_GET['status']=='resendsuccess'){ ?>
		<div id="content" style="height:160px;margin-top:20px;">
			<div class="header">
			</div>
			<div class="body" style="height:100px;">				
				<div style="text-align:center;margin-top:10px;font-size:14pt;color:#fff;">		
		<?php
		
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
										
														$newid = $_GET['pid'];
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
														$mail->AddCCProg3('albertfla21@gmail.com','ZAMIL INDOCYBER');
														
														$cone =  mysql_connect('localhost','usrservicedesk','kfc14022');
																 mysql_select_db('servicedesk',$cone);
															
														$qCekDataYangDiApproved = mysql_query("SELECT * FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$_GET['pid']."'
																							   AND ticketapprovalstatusid_rom ='1' AND ticketapprovalstatusid_am ='1'");
														while($rCekDataYangDiApproved = mysql_fetch_object($qCekDataYangDiApproved))
														{
															$kdtipebrgXY = $rCekDataYangDiApproved->kode_tipebarang;									
															$namabarangsXY = preg_replace('/[^A-Za-z0-9\  ]/', '', $rCekDataYangDiApproved->nama_tipebarang);
															$qtyItemXY = $rCekDataYangDiApproved->kuantitas.' <br>';	
															
																$connOraCekParamPrice = oci_connect('fsd', 'fsd', 'localhost:1521/XE') or die;
																$qCekParamPrice = "SELECT KODE_GRUP, KODE_BARANG, NAMA_BARANG FROM FSDBRGEQ 
																					WHERE KODE_BARANG = '".$kdtipebrgXY."' 
																				   ORDER BY KODE_GRUP, KODE_BARANG, NAMA_BARANG ASC";														
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
														}	
																$mail->Subject    = "[E-OPERATION SUPPORT PROGRAM].APPROVAL-FOR-GMO : $subjectTicketStoreReq2";
																$mail->AltBody    = "$subjectTicketStoreReq2"; 
																
																$qCekReqByName = mysql_query("SELECT ITH_TICKET_HEADER.ticket_id, ITH_USER.user_nik, ITH_USER.user_realname 
																							  FROM ITH_TICKET_HEADER 
																							  JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
																							  where ITH_TICKET_HEADER.ticket_id = '".$_GET['pid']."'");	
																$rCekReqByName	= mysql_fetch_object($qCekReqByName);		
														
																#$mail->Body .= "									
																$bodymail1 .= "									
																<br>This is request for equipment transfer by : $rCekReqByName->user_realname For Your Approval With Details as Follows :<br>
																	<ul>
																		<li>Request ID : $pid</li>
																		<li>Subject : $subjectTicketStoreReq2</li>
																		<li>Category : Equipment</li>
																		<li>Ticket Status : On Process</li>
																		<li>ROM Approval Status : Approved</li>
																		<li>Ticket Create date : $cdate</li>";
														$qCekDataYangDiApprovedTest = mysql_query("SELECT * FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$_GET['pid']."'
																							   AND ticketapprovalstatusid_rom ='1' AND ticketapprovalstatusid_am ='1'");
														while($rCekDataYangDiApprovedTest = mysql_fetch_object($qCekDataYangDiApprovedTest))
														{
															$allItemName = preg_replace('/[^A-Za-z0-9\  ]/', '', $rCekDataYangDiApprovedTest->nama_tipebarang);
															$qtyItemXY = $rCekDataYangDiApprovedTest->kuantitas.' Unit';			
																$bodymail2 .= "																		
																		<li>Item Name  : $allItemName</li> 
																		<li>The amount of goods  : $qtyItemXY </li>";
																		
																/* $bodymail3 .= "																		
																		<li>Item Name  : $allItemName</li> "; */
														}				
																$bodymail4 .= "
																		
																	</ul>
																<hr>
																Reason / Justification :	<br>$reasonTicketStoreReq2<br><br>
																<hr>
																	For Approval, Please Click In Here (<a href='http://$myServer/?m=notifmail&a=sendauth&pid=$pid&uid=$usrnikatasan'>Click Here</a>)
																<br><br>Regards,<br><br>
																$storeNameRequest2";
															#	$allbodymail = $bodymail1.$bodymail2.$bodymail3.$bodymail4;
																$allbodymail = $bodymail1.$bodymail2.$bodymail4;
																$mail->Body .= $allbodymail;
				if(!$mail->Send()) 
				{
		?>	
					<b>SORRY,MESSAGE NOT SEND (NOT SEND TO GMO)!!!</b><br>
					<b>PLEASE RESEND YOUR REQUEST, UNTIL SUCCESFULLY SUBMITED !!!</b><br>					
					<br>
					<button onclick="location.href = '?view=sendmailtogmo&status=resendprocess&pid=<?=$_GET['pid'];?>&uid=<?=$_SESSION['user_nik'];?>';" id="myButton" class="submit-btn">RESEND</button>&nbsp;
				<? }else{ ?>	

						<b>REQUEST SUCCESFULLY SUBMITTED!!!</b><br>
						<br>
						<button onclick="location.href = '?m=info&pid=<?=$_GET['pid'];?>&uid=<?=$_SESSION['user_nik'];?>';" id="myButton" class="submit-btn">OK</button>&nbsp;
				</div>				
				<div><br></div>
				<div><br></div>	

			</div>
		</div>	
			   <? } //if(!$mail->Send())   ?>	
		
	<? } ?>
<? } ?>