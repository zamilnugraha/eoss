<? 
$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
@session_start();
$ticket_id = $_GET['pid'];
$ticketdetail_id = $_GET['pid'];
$username = $_GET['username'];
$usrlevel = $_SESSION['user_level'];
$usrnik = $_SESSION['user_nik'];
?>
<link type="text/css" href="css/custom.css" rel="stylesheet" />

                  <form class="mbr-form"  method="post" action="index.php?m=form&a=ncapsubmgr&pid=<?=$_GET['pid']?>" id="form1" name="form1" data-form-title="Mobirise Form" width="20%">
					<div class="row row-sm-offset">
		
							<script src="./js/jquery-1.12.4.min.js"></script>
						<table class="blueTable" border="1"> 
							<thead>
								<tr>
									<?  
										$objConnect = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
									?>														
									<!--
										<th width="7%">Request<br>Number</th>
										<th width="17%">Date Of<br>Request</th>
										<th width="20%">Order<br>Item Code</th>
										<th width="7%">Number Of<br>Requests</th>
										<th width="20%">Name Of<br>Goods Ordered</th>
										<th width="15%">Order&nbsp;Request Number&nbsp;/<br>Order&nbsp;Purchase Number</th>
										<th width="15%">Item<br>Status</th>
										<th width="10%" style="display:none;">STK<br>BARU</th>
										<th width="10%" style="display:none;">STK<br>BAIK</th>
										<th width="10%" style="display:none;">STK<br>LAMA</th>
										
										<th width="10%">Ticket<br>ID</th>
										<th width="7%">Request<br>Number</th>
										<th width="10%">Date Of<br>Request</th>
										<th width="20%">Name Of<br>Goods Ordered</th>
										<th width="20%">Detail<br>Information</th>									
									-->
										<th width="20%" style="color:#ffffff;">Name Of<br>Goods Ordered</th>
										<th width="10%" style="color:#ffffff;">Date Of<br>Request</th>										
										<th width="10%" style="color:#ffffff;">Amount<br>Item</th>					
										<th width="22%" style="color:#ffffff;">Area Manager<br>Approval</th>							
										<th width="11%" style="color:#ffffff;">Action</th>					
								</tr>													
							</thead>
						</table>							
							<div style="width:100%; height:150px; overflow:auto;position:relative;color:#000000;">
							
								<table class="blueTable" border="1">
									<tbody id="myCodes">
										<?  
											/**
											$qcektipebrg = mysql_query("SELECT ITH_TICKET_HEADER.ticket_id, ITH_TICKET_HEADER.kode_tipebrg FROM ITH_TICKET_HEADER 
																			JOIN ITH_TIPEBRG ON ITH_TICKET_HEADER.kode_tipebrg = ITH_TIPEBRG.kode_tipebrg
																			WHERE ITH_TICKET_HEADER.ticket_id = '".$_GET['pid']."'");
											**/
											$qcektipebrg = mysql_query("SELECT ITH_TIPEBARANG_KODE.TICKET_ID, ITH_TIPEBARANG_KODE.KODE_TIPEBRG, 
																		ITH_TIPEBRG.NAMA_TIPEBRG, ITH_TIPEBARANG_KODE.NO_PERMINTAAN FROM ITH_TIPEBARANG_KODE
																		JOIN ITH_TIPEBRG ON ITH_TIPEBARANG_KODE.KODE_TIPEBRG = ITH_TIPEBRG.KODE_TIPEBRG
																		WHERE ITH_TIPEBARANG_KODE.TICKET_ID = '".$_GET['pid']."'");
											$rcektipebrg = mysql_fetch_object($qcektipebrg);									
											$qcektipebrgdetail = mysql_query("SELECT DISTINCT ITH_TICKET_HEADER.ticket_id, ITH_TICKET_HEADER.kode_tipebrg 
																	FROM ITH_TICKET_HEADER 
																	JOIN ITH_TIPEBRG ON ITH_TICKET_HEADER.kode_tipebrg = ITH_TIPEBRG.kode_tipebrg
																	WHERE ITH_TICKET_HEADER.kode_tipebrg != ''
																	AND ITH_TICKET_HEADER.ticket_id = '".$_GET['pid']."'");
											$rcektipebrgdetail = mysql_fetch_object($qcektipebrgdetail);	
											
											/* EQUIPMENT REQUEST ITEM */
										/*	if(($rcektipebrg->kode_tipebrg=='RQS-03-000112')||($rcektipebrg->kode_tipebrg=='RQS-03-000113')||
												($rcektipebrg->kode_tipebrg=='RQS-03-000114')||($rcektipebrg->kode_tipebrg=='RQS-03-000115')||
												($rcektipebrg->kode_tipebrg=='RQS-03-000116')||($rcektipebrg->kode_tipebrg=='RQS-03-000117'))
											{
										*/		
												#echo "<br>TEST-X....";
												/**
												$qvCekDataEQ = mysql_query("SELECT DISTINCT ticket_id, no_permintaan, request_by, kode_tipebarang, kode_tipebarang_sw, kode_tipebarang_sp,
																	kuantitas, nama_tipebarang, nama_tipebarang_sw, nama_tipebarang_sp
																	FROM ITH_TIPEBARANG_KODE
																	WHERE ticket_id = '".$_GET['pid']."'");									
												**/
												$qvCekDataEQ = mysql_query("SELECT ITH_TIPEBARANG_KODE.TICKET_ID, ITH_TIPEBARANG_KODE.KODE_TIPEBRG, 
																		ITH_TIPEBRG.NAMA_TIPEBRG, ITH_TIPEBARANG_KODE.NO_PERMINTAAN FROM ITH_TIPEBARANG_KODE
																		JOIN ITH_TIPEBRG ON ITH_TIPEBARANG_KODE.KODE_TIPEBRG = ITH_TIPEBRG.KODE_TIPEBRG
																		WHERE ITH_TIPEBARANG_KODE.TICKET_ID = '".$_GET['pid']."'");
												$rvCekDataEQ = mysql_fetch_object($qvCekDataEQ);
																	
																	$objConnectShowEQ = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
																	$qShowEQ = "select FSDORDEC.NO_PERMINTAAN, FSDORDEC.TGL_PERMINTAAN, FSDORDEC.TGL_BUAT_FSD, FSDORDEC.KODE_BARANG, 
																	FSDBRGEQ.NAMA_BARANG,
																	FSDORDEC.JUMLAH_PERMINTAAN, FSDORDEC.JUMLAH_ORDER, FSDORDEC.KIRIM_DARI_STOK, FSDORDEC.TGL_DISETUJUI, 
																	FSDORDEC.NOMOR_RO, FSDORDEC.STATUS_PERMINTAAN
																	from FSDORDEC 
																	JOIN FSDBRGEQ ON FSDORDEC.KODE_BARANG = FSDBRGEQ.KODE_BARANG
																	where NO_PERMINTAAN = '".$rvCekDataEQ->NO_PERMINTAAN."'
																	AND JUMLAH_PERMINTAAN IS NOT NULL order by FSDORDEC.TGL_PERMINTAAN DESC";  
																
													$qCekStatusTiketStore = mysql_query("SELECT ticket_id, ticketstatus_id, ticketapprovalstatus_id, ticketapprovalstatus_id2, ticketapprovalstatus_id3 
																						FROM ITH_TICKET_HEADER WHERE ticket_id = '".$_GET['pid']."'");
													$rCekStatusTiketStore = mysql_fetch_object($qCekStatusTiketStore);
													#if(($rCekStatusTiketStore->ticketapprovalstatus_id!='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id2!='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id3!='1'))
													#{	
													if(($rCekStatusTiketStore->ticketstatus_id='1')||($rCekStatusTiketStore->ticketstatus_id='2'))
													{	
														if(($rCekStatusTiketStore->ticketapprovalstatus_id!='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id2!='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id3!='1'))
														{	
																	###echo "<br>TEST-1....";
																	##echo "<br> Tiket Status = ".$rCekStatusTiketStore->ticketstatus_id;
																	##echo "<br> Tiket Approval Status-1 = ".$rCekStatusTiketStore->ticketapprovalstatus_id;
																	$con = mysql_connect("localhost","usrservicedesk","kfc14022");
																				mysql_select_db("servicedesk",$con); //@session_start();	
																	/**
																	$qvCekDataEQ = mysql_query("SELECT DISTINCT ITH_TIPEBARANG_KODE.TICKET_ID, ITH_TIPEBARANG_KODE.KODE_TIPEBRG, 
																								ITH_TIPEBRG.NAMA_TIPEBRG, ITH_TIPEBARANG_KODE.NO_PERMINTAAN FROM ITH_TIPEBARANG_KODE
																								JOIN ITH_TIPEBRG ON ITH_TIPEBARANG_KODE.KODE_TIPEBRG = ITH_TIPEBRG.KODE_TIPEBRG
																								WHERE ITH_TIPEBARANG_KODE.TICKET_ID = '".$_GET['pid']."'");
																	**/
																	$qvCekDataEQx = mysql_query("SELECT DISTINCT ITH_TIPEBARANG_KODE.TICKET_ID, ITH_TIPEBARANG_KODE.NO_PERMINTAAN,
																								ITH_TICKET_HEADER.TICKET_CREATEDATE,ITH_TICKET_HEADER.TICKET_CREATETIME,
																								ITH_USER.USER_REALNAME,
																								ITH_TIPEBARANG_KODE.REQUEST_BY, ITH_TIPEBARANG_KODE.KODE_TIPEBRG, 
																								ITH_TIPEBARANG_KODE.KODE_TIPEBARANG, ITH_TIPEBARANG_KODE.KUANTITAS, 
																								ITH_TIPEBARANG_KODE.NAMA_TIPEBARANG,
																								ITH_TIPEBARANG_KODE.TICKETAPPROVALSTATUSID_AM, ITH_TIPEBARANG_KODE.TICKETAPPROVALBYNIK_AM, 
																								ITH_TIPEBARANG_KODE.TICKETAPPROVALBYNAME_AM,
																								ITH_TIPEBARANG_KODE.TICKETAPPROVALSTATUSID_ROM, ITH_TIPEBARANG_KODE.TICKETAPPROVALBYNIK_ROM, 
																								ITH_TIPEBARANG_KODE.TICKETAPPROVALBYNAME_ROM,
																								ITH_TIPEBARANG_KODE.TICKETAPPROVALSTATUSID_GMO, ITH_TIPEBARANG_KODE.TICKETAPPROVALBYNIK_GMO, 
																								ITH_TIPEBARANG_KODE.TICKETAPPROVALBYNAME_GMO
																								FROM ITH_TIPEBARANG_KODE 
																								JOIN ITH_TICKET_HEADER ON ITH_TIPEBARANG_KODE.TICKET_ID = ITH_TICKET_HEADER.TICKET_ID
																								JOIN ITH_USER ON ITH_TICKET_HEADER.TICKET_CREATEBY = ITH_USER.USER_NIK
																								WHERE ITH_TIPEBARANG_KODE.TICKET_ID  = '".$_GET['pid']."'");
																	###$rvCekDataEQ = mysql_fetch_object($qvCekDataEQ);												
																	#echo "<br>Nomer Permintaan : ".$rvCekDataEQ->no_permintaan;
																	$objConnectShowEQ = oci_connect('fsd', 'fsd', 'localhost:1521/XE');
																	/**
																	$qShowEQ = "SELECT DISTINCT FSDORDEC_TEMP.NO_PERMINTAAN, FSDORDEC_TEMP.TGL_PERMINTAAN, 
																	FSDORDEC_TEMP.TGL_BUAT_FSD, FSDORDEC_TEMP.KODE_BARANG, FSDORDEC_TEMP.NO_TAGING, 
																	FSDBRGEQ.NAMA_BARANG,
																	FSDORDEC_TEMP.JUMLAH_PERMINTAAN, FSDORDEC_TEMP.JUMLAH_ORDER, FSDORDEC_TEMP.KIRIM_DARI_STOK, FSDORDEC_TEMP.TGL_DISETUJUI, 
																	FSDORDEC_TEMP.NOMOR_RO, FSDORDEC_TEMP.STATUS_PERMINTAAN
																	FROM FSDORDEC_TEMP 
																	JOIN FSDBRGEQ ON FSDORDEC_TEMP.KODE_BARANG = FSDBRGEQ.KODE_BARANG
																	JOIN FSDNOTAG ON FSDORDEC_TEMP.KODE_BARANG = FSDNOTAG.KODE_BARANG
																	where FSDORDEC_TEMP.NO_PERMINTAAN = '".$rvCekDataEQ->no_permintaan."'
																	order by FSDORDEC_TEMP.TGL_PERMINTAAN DESC";  			
																	**/
																	$qShowEQ = "SELECT DISTINCT FSDORDEC_TEMP.NO_PERMINTAAN, FSDORDEC_TEMP.TGL_PERMINTAAN, 
																	FSDORDEC_TEMP.TGL_BUAT_FSD, FSDORDEC_TEMP.KODE_BARANG, FSDORDEC_TEMP.NO_TAGING, 
																	FSDBRGEQ.NAMA_BARANG,
																	FSDORDEC_TEMP.JUMLAH_PERMINTAAN, FSDORDEC_TEMP.JUMLAH_ORDER, FSDORDEC_TEMP.KIRIM_DARI_STOK, FSDORDEC_TEMP.TGL_DISETUJUI, 
																	FSDORDEC_TEMP.NOMOR_RO, FSDORDEC_TEMP.STATUS_PERMINTAAN
																	FROM FSDORDEC_TEMP 
																	JOIN FSDBRGEQ ON FSDORDEC_TEMP.KODE_BARANG = FSDBRGEQ.KODE_BARANG
																	WHERE FSDORDEC_TEMP.NO_PERMINTAAN = '".$rvCekDataEQ->NO_PERMINTAAN."'
																	GROUP BY FSDORDEC_TEMP.NO_PERMINTAAN, FSDORDEC_TEMP.TGL_PERMINTAAN, 
																	FSDORDEC_TEMP.TGL_BUAT_FSD, FSDORDEC_TEMP.KODE_BARANG, FSDORDEC_TEMP.NO_TAGING, 
																	FSDBRGEQ.NAMA_BARANG,
																	FSDORDEC_TEMP.JUMLAH_PERMINTAAN, FSDORDEC_TEMP.JUMLAH_ORDER, FSDORDEC_TEMP.KIRIM_DARI_STOK, FSDORDEC_TEMP.TGL_DISETUJUI, 
																	FSDORDEC_TEMP.NOMOR_RO, FSDORDEC_TEMP.STATUS_PERMINTAAN
																	ORDER BY FSDORDEC_TEMP.NO_PERMINTAAN, FSDORDEC_TEMP.TGL_PERMINTAAN, 
																	FSDORDEC_TEMP.TGL_BUAT_FSD, FSDORDEC_TEMP.KODE_BARANG, FSDORDEC_TEMP.NO_TAGING, 
																	FSDBRGEQ.NAMA_BARANG,
																	FSDORDEC_TEMP.JUMLAH_PERMINTAAN, FSDORDEC_TEMP.JUMLAH_ORDER, FSDORDEC_TEMP.KIRIM_DARI_STOK, FSDORDEC_TEMP.TGL_DISETUJUI, 
																	FSDORDEC_TEMP.NOMOR_RO, FSDORDEC_TEMP.STATUS_PERMINTAAN ASC";  
																	$qobjParseShowEQ = oci_parse ($objConnectShowEQ, $qShowEQ);  
																	oci_execute ($qobjParseShowEQ,OCI_DEFAULT);
																	
														}elseif(($rCekStatusTiketStore->ticketapprovalstatus_id3=='1')||($rCekStatusTiketStore->ticketapprovalstatus_id2=='1')||($rCekStatusTiketStore->ticketapprovalstatus_id=='1'))
														{
																	##echo "<br>TEST-2....";
																	#echo "<br>OP, AM Approval Done ....";
																	$con = mysql_connect("localhost","usrservicedesk","kfc14022");
																				mysql_select_db("servicedesk",$con); //@session_start();	
																	$qvCekDataEQ = mysql_query("SELECT DISTINCT ITH_TIPEBARANG_KODE.TICKET_ID, ITH_TIPEBARANG_KODE.KODE_TIPEBRG, 
																								ITH_TIPEBRG.NAMA_TIPEBRG, ITH_TIPEBARANG_KODE.NO_PERMINTAAN FROM ITH_TIPEBARANG_KODE
																								JOIN ITH_TIPEBRG ON ITH_TIPEBARANG_KODE.KODE_TIPEBRG = ITH_TIPEBRG.KODE_TIPEBRG
																								WHERE ITH_TIPEBARANG_KODE.TICKET_ID = '".$_GET['pid']."'");
																	$rvCekDataEQ = mysql_fetch_object($qvCekDataEQ);												
																	#echo "<br>Nomer Permintaan : ".$rvCekDataEQ->no_permintaan;
																	$objConnectShowEQ = oci_connect('fsd', 'fsd', 'localhost:1521/XE');
																	/**
																	$qShowEQ = "select DISTINCT FSDORDEC_TEMP.NO_PERMINTAAN, FSDORDEC_TEMP.TGL_PERMINTAAN, 
																	FSDORDEC_TEMP.TGL_BUAT_FSD, FSDORDEC_TEMP.KODE_BARANG, FSDORDEC_TEMP.NO_TAGING,
																	FSDBRGEQ.NAMA_BARANG,
																	FSDORDEC_TEMP.JUMLAH_PERMINTAAN, FSDORDEC_TEMP.JUMLAH_ORDER, FSDORDEC_TEMP.KIRIM_DARI_STOK, FSDORDEC_TEMP.TGL_DISETUJUI, 
																	FSDORDEC_TEMP.NOMOR_RO, FSDORDEC_TEMP.STATUS_PERMINTAAN
																	from FSDORDEC_TEMP 
																	JOIN FSDBRGEQ ON FSDORDEC_TEMP.KODE_BARANG = FSDBRGEQ.KODE_BARANG
																	JOIN FSDNOTAG ON FSDORDEC_TEMP.KODE_BARANG = FSDNOTAG.KODE_BARANG
																	where FSDORDEC_TEMP.NO_PERMINTAAN = '".$rvCekDataEQ->NO_PERMINTAAN."'
																	order by FSDORDEC_TEMP.TGL_PERMINTAAN DESC";  
																	**/
																	$qShowEQ = "SELECT DISTINCT FSDORDEC_TEMP.NO_PERMINTAAN, FSDORDEC_TEMP.TGL_PERMINTAAN, 
																	FSDORDEC_TEMP.TGL_BUAT_FSD, FSDORDEC_TEMP.KODE_BARANG, FSDORDEC_TEMP.NO_TAGING, 
																	FSDBRGEQ.NAMA_BARANG,
																	FSDORDEC_TEMP.JUMLAH_PERMINTAAN, FSDORDEC_TEMP.JUMLAH_ORDER, FSDORDEC_TEMP.KIRIM_DARI_STOK, FSDORDEC_TEMP.TGL_DISETUJUI, 
																	FSDORDEC_TEMP.NOMOR_RO, FSDORDEC_TEMP.STATUS_PERMINTAAN
																	FROM FSDORDEC_TEMP 
																	JOIN FSDBRGEQ ON FSDORDEC_TEMP.KODE_BARANG = FSDBRGEQ.KODE_BARANG
																	WHERE FSDORDEC_TEMP.NO_PERMINTAAN = '".$rvCekDataEQ->NO_PERMINTAAN."'
																	GROUP BY FSDORDEC_TEMP.NO_PERMINTAAN, FSDORDEC_TEMP.TGL_PERMINTAAN, 
																	FSDORDEC_TEMP.TGL_BUAT_FSD, FSDORDEC_TEMP.KODE_BARANG, FSDORDEC_TEMP.NO_TAGING, 
																	FSDBRGEQ.NAMA_BARANG,
																	FSDORDEC_TEMP.JUMLAH_PERMINTAAN, FSDORDEC_TEMP.JUMLAH_ORDER, FSDORDEC_TEMP.KIRIM_DARI_STOK, FSDORDEC_TEMP.TGL_DISETUJUI, 
																	FSDORDEC_TEMP.NOMOR_RO, FSDORDEC_TEMP.STATUS_PERMINTAAN
																	ORDER BY FSDORDEC_TEMP.NO_PERMINTAAN, FSDORDEC_TEMP.TGL_PERMINTAAN, 
																	FSDORDEC_TEMP.TGL_BUAT_FSD, FSDORDEC_TEMP.KODE_BARANG, FSDORDEC_TEMP.NO_TAGING, 
																	FSDBRGEQ.NAMA_BARANG,
																	FSDORDEC_TEMP.JUMLAH_PERMINTAAN, FSDORDEC_TEMP.JUMLAH_ORDER, FSDORDEC_TEMP.KIRIM_DARI_STOK, FSDORDEC_TEMP.TGL_DISETUJUI, 
																	FSDORDEC_TEMP.NOMOR_RO, FSDORDEC_TEMP.STATUS_PERMINTAAN ASC";  															
																	$qobjParseShowEQ = oci_parse ($objConnectShowEQ, $qShowEQ);  
																	oci_execute ($qobjParseShowEQ,OCI_DEFAULT);   													
														#}	
														}elseif
														((($rCekStatusTiketStore->ticketapprovalstatus_id=='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id2=='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id3=='1'))||
														(($rCekStatusTiketStore->ticketapprovalstatus_id=='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id2=='2')&&($rCekStatusTiketStore->ticketapprovalstatus_id3=='2'))||
														(($rCekStatusTiketStore->ticketapprovalstatus_id=='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id2=='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id3=='2'))||
														(($rCekStatusTiketStore->ticketapprovalstatus_id=='2')&&($rCekStatusTiketStore->ticketapprovalstatus_id2=='2')&&($rCekStatusTiketStore->ticketapprovalstatus_id3=='1'))||
														(($rCekStatusTiketStore->ticketapprovalstatus_id=='2')&&($rCekStatusTiketStore->ticketapprovalstatus_id2=='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id3=='1'))||
														(($rCekStatusTiketStore->ticketapprovalstatus_id=='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id2=='2')&&($rCekStatusTiketStore->ticketapprovalstatus_id3=='1')))
														{	
															#echo "<br>TEST-3....";
															#	echo "Test 2";										
																/*	$qShowEQ = "select FSDORDEC.NO_PERMINTAAN, FSDORDEC.TGL_PERMINTAAN, FSDORDEC.TGL_BUAT_FSD, FSDORDEC.KODE_BARANG, 
																	FSDBRGEQ.NAMA_BARANG,
																	FSDORDEC.JUMLAH_PERMINTAAN, FSDORDEC.JUMLAH_ORDER, FSDORDEC.KIRIM_DARI_STOK, FSDORDEC.TGL_DISETUJUI, 
																	FSDORDEC.NOMOR_RO, FSDORDEC.STATUS_PERMINTAAN
																	from FSDORDEC 
																	JOIN FSDBRGEQ ON FSDORDEC.KODE_BARANG = FSDBRGEQ.KODE_BARANG
																	where NO_PERMINTAAN = '$rvCekDataEQ->no_permintaan'
																	AND JUMLAH_PERMINTAAN IS NOT NULL order by FSDORDEC.TGL_PERMINTAAN DESC";  */
																	
															$qCNmrROEQ = "SELECT 
																		FSDORDEC.KODE_CABANG, MSTCBGDT.NAMA_CABANG, FSDORDEC.NO_PERMINTAAN, 
																		FSDORDEC.NOMOR_RO,FSDORDEC.TGL_PERMINTAAN, FSDORDEC.KODE_BARANG, 
																		FSDBRGEQ.NAMA_BARANG, FSDORDEC.JUMLAH_PERMINTAAN,FSDORDEC.STATUS_PERMINTAAN,FSDROEQC.STATUS
																		FROM FSDORDEC 
																		JOIN MSTCBGDT ON FSDORDEC.KODE_CABANG = MSTCBGDT.CABANG_HEADER
																		JOIN FSDBRGEQ ON FSDORDEC.KODE_BARANG = FSDBRGEQ.KODE_BARANG
																		JOIN FSDROEQC ON FSDORDEC.NOMOR_RO = FSDROEQC.NOMOR_RO
																		WHERE FSDORDEC.NO_PERMINTAAN =  '".$rvCekDataEQ->NO_PERMINTAAN."'";  
															$qobjParseCNmrROEQ = oci_parse ($objConnectShowEQ, $qCNmrROEQ);  
																			   oci_execute ($qobjParseCNmrROEQ,OCI_DEFAULT); 
															$rvCNmrROEQ = oci_fetch_array($qobjParseCNmrROEQ,OCI_BOTH);		
															if($rvCNmrROEQ['NOMOR_RO']==' ')
															{
																	#echo "<br>TIDAK ADA NOMOR RO";
																$con = mysql_connect("localhost","usrservicedesk","kfc14022");
																		mysql_select_db("servicedesk",$con); 	
																$qCekStatusTiketX = mysql_query("SELECT ticketstatus_id FROM ITH_TICKET_HEADER
																								WHERE ticket_id = '$_GET[pid]'");	
																$rCekStatusTiketX = mysql_fetch_object($qCekStatusTiketX);
																if($rCekStatusTiketX->ticketstatus_id=='2')
																{	 	#echo "ON PROCESS ZZZ";	 
																		echo "<br>TEST-4....";
																		#$objConnectShowEQ = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 											
																			$qShowEQ = "select FSDORDEC.NO_PERMINTAAN, FSDORDEC.TGL_PERMINTAAN, FSDORDEC.TGL_BUAT_FSD, FSDORDEC.KODE_BARANG, 
																			FSDBRGEQ.NAMA_BARANG,
																			FSDORDEC.JUMLAH_PERMINTAAN, FSDORDEC.JUMLAH_ORDER, FSDORDEC.KIRIM_DARI_STOK, FSDORDEC.TGL_DISETUJUI, 
																			FSDORDEC.NOMOR_RO, FSDORDEC.STATUS_PERMINTAAN,FSDROEQC.STATUS
																			from FSDORDEC 
																			JOIN FSDBRGEQ ON FSDORDEC.KODE_BARANG = FSDBRGEQ.KODE_BARANG
																			JOIN FSDROEQC ON FSDORDEC.NOMOR_RO = FSDROEQC.NOMOR_RO
																			where FSDORDEC.NO_PERMINTAAN =  '".$rvCekDataEQ->NO_PERMINTAAN."'";
																			$qobjParseShowEQ = oci_parse ($objConnectShowEQ, $qShowEQ);  
																				   oci_execute ($qobjParseShowEQ,OCI_DEFAULT); 															
																}													
															}elseif($rvCNmrROEQ['NOMOR_RO']!=' ')
															{	 
																$con = mysql_connect("localhost","usrservicedesk","kfc14022");
																					mysql_select_db("servicedesk",$con); //@session_start();												
																$qCekStatusTiketX = mysql_query("SELECT ticketstatus_id FROM ITH_TICKET_HEADER
																									WHERE ticket_id = '$_GET[pid]'");	
																$rCekStatusTiketX = mysql_fetch_object($qCekStatusTiketX);
																if($rCekStatusTiketX->ticketstatus_id=='2')
																{		#echo "<br>ON PROCESS";		
																		echo "<br>TEST-5....";
																		$qShowEQ = "select DISTINCT FSDORDEC.NO_PERMINTAAN, FSDORDEC.TGL_PERMINTAAN, FSDORDEC.TGL_BUAT_FSD, FSDORDEC.KODE_BARANG, 
																		FSDBRGEQ.NAMA_BARANG,
																		FSDORDEC.JUMLAH_PERMINTAAN, FSDORDEC.JUMLAH_ORDER, FSDORDEC.KIRIM_DARI_STOK, FSDORDEC.TGL_DISETUJUI, 
																		FSDORDEC.NOMOR_RO, FSDORDEC.STATUS_PERMINTAAN,FSDROEQC.STATUS
																		from FSDORDEC 
																		JOIN FSDBRGEQ ON FSDORDEC.KODE_BARANG = FSDBRGEQ.KODE_BARANG
																		JOIN FSDROEQC ON FSDORDEC.NOMOR_RO = FSDROEQC.NOMOR_RO
																		where FSDORDEC.NOMOR_RO = '".$rvCNmrROEQ['NOMOR_RO']."' order by FSDORDEC.TGL_PERMINTAAN DESC";
					
																		$qobjParseShowEQ = oci_parse ($objConnectShowEQ, $qShowEQ);  
																			   oci_execute ($qobjParseShowEQ,OCI_DEFAULT); 															
																}elseif(($rCekStatusTiketX->ticketstatus_id=='0')||($rCekStatusTiketX->ticketstatus_id=='5'))
																{    #echo "<br>SOLVED";			
																		echo "<br>TEST-6....";
																		$qShowEQ = "select DISTINCT FSDORDEC.KODE_CABANG, MSTCBGDT.NAMA_CABANG, FSDORDEC.NO_PERMINTAAN, FSDPOEQC.NO_PO,
																					FSDORDEC.NOMOR_RO,FSDORDEC.TGL_PERMINTAAN, FSDORDEC.KODE_BARANG, 
																					FSDBRGEQ.NAMA_BARANG, FSDORDEC.JUMLAH_PERMINTAAN, FSDORDEC.KIRIM_DARI_STOK,
																					FSDPREQC.NO_DELIVERY_ORDER, FSDPREQC.QTY, FSDPREQC.HARGA_BELI, FSDPREQC.MATA_UANG, FSDPREQC.TOTAL_BELI, FSDPREQC.TGL_RECEIVE, FSDPREQC.TGL_DO,
																					FSDKRMEQ.TGL_TRANSAKSI, FSDKRMEQ.QTY_KIRIM, FSDKRMEQ.JUMLAH_DITERIMA, 
																					FSDKRMEQ.NAMA_PENGIRIM, FSDKRMEQ.TANGGAL_KIRIM, FSDKRMEQ.NAMA_PENERIMA, FSDKRMEQ.TANGGAL_DITERIMA,
																					FSDKRMEQ.QTY_KIRIM_BARU, FSDKRMEQ.QTY_KIRIM_BAIK, FSDKRMEQ.HARGA_BARU, FSDKRMEQ.HARGA_BAIK,
																					FSDORDEC.STATUS_PERMINTAAN, FSDROEQC.STATUS, FSDKRMEQ.STATUS_KIRIM
																					from FSDORDEC
																					JOIN MSTCBGDT ON FSDORDEC.KODE_CABANG = MSTCBGDT.CABANG_HEADER
																					JOIN FSDBRGEQ ON FSDORDEC.KODE_BARANG = FSDBRGEQ.KODE_BARANG
																					JOIN FSDROEQC ON FSDORDEC.NOMOR_RO = FSDROEQC.NOMOR_RO
																					JOIN FSDPOEQC ON FSDORDEC.NOMOR_RO = FSDPOEQC.NO_RO
																					JOIN FSDPREQC ON FSDPOEQC.NO_PO = FSDPREQC.NO_PO
																					JOIN FSDKRMEQ ON FSDORDEC.NOMOR_RO = FSDKRMEQ.NO_RO
																					WHERE FSDORDEC.NOMOR_RO = '".$rvCNmrROEQ['NOMOR_RO']."'";
																		$qobjParseShowEQ = oci_parse ($objConnectShowEQ, $qShowEQ);  
																			   oci_execute ($qobjParseShowEQ,OCI_DEFAULT); 															
																}
															}
														}
													}															
																	#while($rvSCatShowEQ = oci_fetch_array($qobjParseShowEQ,OCI_BOTH))  
																	while($rvCekDataEQx = mysql_fetch_array($qvCekDataEQx))  
																	{  
																	?>  												
																	<tr>												
																		<td width="20%">
																		<center><?=$rvCekDataEQx["KODE_TIPEBARANG"].' - '.$rvCekDataEQx["NAMA_TIPEBARANG"];?>
																		<? 																	
																			$qcektipebrgsx = mysql_query("SELECT DISTINCT ITH_TIPEBARANG_KODE.TICKET_ID, ITH_TIPEBARANG_KODE.KODE_TIPEBRG, 
																										  ITH_TIPEBRG.NAMA_TIPEBRG FROM ITH_TIPEBARANG_KODE
																										  JOIN	ITH_TIPEBRG ON ITH_TIPEBARANG_KODE.KODE_TIPEBRG = ITH_TIPEBRG.KODE_TIPEBRG
																										  WHERE ITH_TIPEBARANG_KODE.TICKET_ID = '".$_GET['pid']."' 
																										  AND ITH_TIPEBARANG_KODE.KODE_TIPEBARANG = '".$rvCekDataEQx["KODE_TIPEBARANG"]."'");
																			while($rcektipebrgsx = mysql_fetch_object($qcektipebrgsx))
																			{																																	
																		?>	
																		<?='<br>('.$rcektipebrgsx->NAMA_TIPEBRG.')';?><br>
																		  <? } ?>																
																		</center>
																		</td>																
																		<td width="10%">
																			<center><?=$rvCekDataEQx["TICKET_CREATEDATE"];?></center>
																		</td>
																		<td width="10%">
																		
																		<center><?=$rvCekDataEQx["KUANTITAS"].'&nbsp;<b>UNITS</b>';?></center><br>
																	
																		</td>

																		<td width="22%">								
																			<? if($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='2'){ ?>																		
																				<?='&nbsp;&nbsp;<b>Approval Status :</b>&nbsp;&nbsp;Not Yet Responded.';?><br>
																			<? } ?>																
																																				
																			<?='&nbsp;&nbsp;<b>Approval By :</b> '.$rvCekDataEQx["TICKETAPPROVALBYNAME_AM"];?><br>																	
																			<?='&nbsp;&nbsp;<b>Approval Date :</b> '.$rvCekDataEQx["TICKETAPPROVALDATE_AM"];?><br>																	
																			<?='&nbsp;&nbsp;<b>Approval Time :</b> '.$rvCekDataEQx["TICKETAPPROVALTIME_AM"];?>
																		</td>
																		<td width="10%">	
																			<div style="margin-left:20px;" >
																					<a href="#" id="myBtn<?=$rvCekDataEQx["KODE_TIPEBARANG"]?>" title="Approval For Area Manager">Approval</a>																			
																					<div id="myModal<?=$rvCekDataEQx["KODE_TIPEBARANG"]?>" class="modal<?=$rvCekDataEQx["KODE_TIPEBARANG"]?>">
																					  <!-- Modal content -->
																						<div class="modal-content<?=$rvCekDataEQx["KODE_TIPEBARANG"]?>">
																							<span class="close<?=$rvCekDataEQx["KODE_TIPEBARANG"]?>">&times;</span>
																								<p>
																									<? include('saveapprovalareamanager.php');?>
																								</p>																
																						  </div>
																					</div>
																					<style>
																						body {font-family: Arial, Helvetica, sans-serif;}
																						.modal<?=$rvCekDataEQx["KODE_TIPEBARANG"]?> {
																							display: none; /* Hidden by default */
																							position: fixed; /* Stay in place */
																							z-index: none; /* Sit on top */
																							padding-top: 120px; /* Location of the box */
																							left: 0;
																							top: 0;
																							margin-left:20px;
																							width: 100%; /* Full width */
																							height: 100%; /* Full height */
																							overflow: auto; /* Enable scroll if needed */
																							background-color: rgb(0,0,0); /* Fallback color */
																							background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
																						}														
																						.modal-header<?=$rvCekDataEQx["KODE_TIPEBARANG"]?> {
																							background-color: #fefefe;
																							margin-left: 100px;
																							padding-left: 10px;
																							border: 1px solid #888;
																							width: 80%;
																						}			
																						.modal-body<?=$rvCekDataEQx["KODE_TIPEBARANG"]?> {
																							background-color: #fefefe;
																							margin-left: 100px;
																							padding-left: 10px;
																							border: 1px solid #888;
																							width: 80%;
																						}	
																						.modal-content<?=$rvCekDataEQx["KODE_TIPEBARANG"]?> {
																							background-color: #fefefe;
																							margin-left: 100px;
																							padding-left: 10px;
																							border: 1px solid #888;
																							width: 80%;
																						}
																						.modal-footer<?=$rvCekDataEQx["KODE_TIPEBARANG"]?> {
																							background-color: #fefefe;
																							margin-left: 100px;
																							padding-left: 10px;
																							border: 1px solid #888;
																							width: 80%;
																						}
																						.close<?=$rvCekDataEQx["KODE_TIPEBARANG"]?> {
																							color: #aaaaaa;
																							float: right;
																							font-size: 28px;
																							font-weight: bold;
																						}
																						.close<?=$rvCekDataEQx["KODE_TIPEBARANG"]?>:hover,
																						.close<?=$rvCekDataEQx["KODE_TIPEBARANG"]?>:focus {
																							color: #000;
																							text-decoration: none;
																							cursor: pointer;
																						}
																					</style>														
																					<script>
																					// Get the modal
																					var modal<?=$rvCekDataEQx["KODE_TIPEBARANG"]?> = document.getElementById('myModal<?=$rvCekDataEQx["KODE_TIPEBARANG"]?>');
																					// Get the button that opens the modal
																					var btn<?=$rvCekDataEQx["KODE_TIPEBARANG"]?> = document.getElementById("myBtn<?=$rvCekDataEQx["KODE_TIPEBARANG"]?>");
																					// Get the <span> element that closes the modal
																					var span<?=$rvCekDataEQx["KODE_TIPEBARANG"]?> = document.getElementsByClassName("close<?=$rvCekDataEQx["KODE_TIPEBARANG"]?>")[0];

																					// When the user clicks the button, open the modal 
																					btn<?=$rvCekDataEQx["KODE_TIPEBARANG"]?>.onclick = function() {
																						modal<?=$rvCekDataEQx["KODE_TIPEBARANG"]?>.style.display = "block";
																					}

																					// When the user clicks on <span> (x), close the modal
																					span<?=$rvCekDataEQx["KODE_TIPEBARANG"]?>.onclick = function() {
																						modal<?=$rvCekDataEQx["KODE_TIPEBARANG"]?>.style.display = "none";
																					}

																					// When the user clicks anywhere outside of the modal, close it
																					window.onclick = function(event) {
																						if (event.target == modal<?=$rvCekDataEQx["KODE_TIPEBARANG"]?>) {
																							modal<?=$rvCekDataEQx["KODE_TIPEBARANG"]?>.style.display = "none";
																						}
																					}
																					</script>
																			
																			</div>																			
																		</td>
																																	
																		
																	</tr>	
																<? } ?>									

											
											<!-- SMALLWARE REQUEST ITEM -->	
											<? #} ?>	

									</tbody>
								</table>								
							</div>
						</div>			
                    </form>	


<? ?>

<script type="text/javascript">
//add by aryn
	$(document).ready(function() {
			$('#form1').validate({
				rules: {
				/* ticketapprovalstatus_id: { 
						required: true 
				} 
				 ticketapprovalstatus_id2: { 
						required: true 
				} 
				 ticketapprovalstatus_id3: { 
						required: true 
				} */
				
				},
				messages: {			
					
					ticketapprovalstatus_id: {		
						required: "Status Approval Harus Dipilih"
					},
					ticketapprovalstatus_id2: {
						required: "Status Approval Harus Dipilih"
					},
					ticketapprovalstatus_id3: {
						required: "Status Approval Harus Dipilih"
					}					
				}
			});
		});
</script>	<script type="text/javascript" src="jquery/jquery.min.js"></script>
<script type="text/javascript" src="jquery/jquery.validate.min.js"></script>

