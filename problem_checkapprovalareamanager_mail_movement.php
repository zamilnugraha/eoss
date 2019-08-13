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
										<th width="20%" style="color:#ffffff;">Item Request Name</th>
										<th width="10%" style="color:#ffffff;">Date Of<br>Request</th>										
										<th width="10%" style="color:#ffffff;display:none;">Item<br>Price</th>											
										<th width="10%" style="color:#ffffff;display:none;">Value<br>Parameter</th>											
										<th width="10%" style="color:#ffffff;">Transfer<br>To</th>				
										<th width="22%" style="color:#ffffff;">Area Manager<br>Approval</th>							
										<th width="25%" style="color:#ffffff;">Action</th>					
								</tr>													
							</thead>
						</table>							
							<div style="width:100%; height:auto; overflow:auto;position:relative;color:#000000;">
								<form name="myForm" id="myForm" target="_myFrame" action="index.php?m=form&a=ncapsubmgr&pid=<?=$_GET['pid']?>" method="POST">							
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
																	AND JUMLAH_PERMINTAAN IS NOT NULL order by FSDORDEC.TGL_PERMINTAAN ASC";  
																
													$qCekStatusTiketStore = mysql_query("SELECT ticket_id, ticketstatus_id, ticketapprovalstatus_id, ticketapprovalstatus_id2, ticketapprovalstatus_id3 
																						FROM ITH_TICKET_HEADER WHERE ticket_id = '".$_GET['pid']."'");
													$rCekStatusTiketStore = mysql_fetch_object($qCekStatusTiketStore);
													#if(($rCekStatusTiketStore->ticketapprovalstatus_id!='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id2!='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id3!='1'))
													#{	
													if(($rCekStatusTiketStore->ticketstatus_id='1')||($rCekStatusTiketStore->ticketstatus_id='2'))
													{	
														###if(($rCekStatusTiketStore->ticketapprovalstatus_id!='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id2!='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id3!='1'))
														if($rCekStatusTiketStore->ticketapprovalstatus_id!='1')
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
																								ITH_TIPEBARANG_KODE.TICKETAPPROVALDATE_AM,ITH_TIPEBARANG_KODE.TICKETAPPROVALTIME_AM,
																								ITH_TIPEBARANG_KODE.TICKETAPPROVALSTATUSID_ROM, ITH_TIPEBARANG_KODE.TICKETAPPROVALBYNIK_ROM, 
																								ITH_TIPEBARANG_KODE.TICKETAPPROVALBYNAME_ROM,
																								ITH_TIPEBARANG_KODE.TICKETAPPROVALDATE_ROM,ITH_TIPEBARANG_KODE.TICKETAPPROVALTIME_ROM,
																								ITH_TIPEBARANG_KODE.TICKETAPPROVALSTATUSID_GMO, ITH_TIPEBARANG_KODE.TICKETAPPROVALBYNIK_GMO, 
																								ITH_TIPEBARANG_KODE.TICKETAPPROVALBYNAME_GMO,
																								ITH_TIPEBARANG_KODE.TICKETAPPROVALDATE_GMO,ITH_TIPEBARANG_KODE.TICKETAPPROVALTIME_GMO,
																								ITH_TICKET_HEADER.TICKET_CREATEBY,
																								ITH_TIPEBARANG_KODE.KETERANGAN,
																								ITH_TIPEBARANG_KODE.TICKET_NEEDASSIST,
																								ITH_TIPEBARANG_KODE.TICKETTRANSFERTO_OUTLETCODE,
																								ITH_TIPEBARANG_KODE.TICKETTRANSFERTO_OUTLETNAME
																								FROM ITH_TIPEBARANG_KODE 
																								JOIN ITH_TICKET_HEADER ON ITH_TIPEBARANG_KODE.TICKET_ID = ITH_TICKET_HEADER.TICKET_ID
																								JOIN ITH_USER ON ITH_TICKET_HEADER.TICKET_CREATEBY = ITH_USER.USER_NIK
																								WHERE ITH_TIPEBARANG_KODE.TICKET_ID  = '".$_GET['pid']."'
																								GROUP BY ITH_TIPEBARANG_KODE.TICKET_ID, ITH_TIPEBARANG_KODE.NO_PERMINTAAN,
																								ITH_TICKET_HEADER.TICKET_CREATEDATE,ITH_TICKET_HEADER.TICKET_CREATETIME,
																								ITH_USER.USER_REALNAME,
																								ITH_TIPEBARANG_KODE.REQUEST_BY, ITH_TIPEBARANG_KODE.KODE_TIPEBRG, 
																								ITH_TIPEBARANG_KODE.KODE_TIPEBARANG, ITH_TIPEBARANG_KODE.KUANTITAS, 
																								ITH_TIPEBARANG_KODE.NAMA_TIPEBARANG,
																								ITH_TIPEBARANG_KODE.TICKETAPPROVALSTATUSID_AM, ITH_TIPEBARANG_KODE.TICKETAPPROVALBYNIK_AM, 
																								ITH_TIPEBARANG_KODE.TICKETAPPROVALBYNAME_AM,
																								ITH_TIPEBARANG_KODE.TICKETAPPROVALDATE_AM,ITH_TIPEBARANG_KODE.TICKETAPPROVALTIME_AM,
																								ITH_TIPEBARANG_KODE.TICKETAPPROVALSTATUSID_ROM, ITH_TIPEBARANG_KODE.TICKETAPPROVALBYNIK_ROM, 
																								ITH_TIPEBARANG_KODE.TICKETAPPROVALBYNAME_ROM,
																								ITH_TIPEBARANG_KODE.TICKETAPPROVALDATE_ROM,ITH_TIPEBARANG_KODE.TICKETAPPROVALTIME_ROM,
																								ITH_TIPEBARANG_KODE.TICKETAPPROVALSTATUSID_GMO, ITH_TIPEBARANG_KODE.TICKETAPPROVALBYNIK_GMO, 
																								ITH_TIPEBARANG_KODE.TICKETAPPROVALBYNAME_GMO,
																								ITH_TIPEBARANG_KODE.TICKETAPPROVALDATE_GMO,ITH_TIPEBARANG_KODE.TICKETAPPROVALTIME_GMO
																								ORDER BY ITH_TIPEBARANG_KODE.TICKET_ID, ITH_TIPEBARANG_KODE.NO_PERMINTAAN,
																								ITH_TICKET_HEADER.TICKET_CREATEDATE,ITH_TICKET_HEADER.TICKET_CREATETIME,
																								ITH_USER.USER_REALNAME,
																								ITH_TIPEBARANG_KODE.REQUEST_BY, ITH_TIPEBARANG_KODE.KODE_TIPEBRG, 
																								ITH_TIPEBARANG_KODE.KODE_TIPEBARANG, ITH_TIPEBARANG_KODE.KUANTITAS, 
																								ITH_TIPEBARANG_KODE.NAMA_TIPEBARANG,
																								ITH_TIPEBARANG_KODE.TICKETAPPROVALSTATUSID_AM, ITH_TIPEBARANG_KODE.TICKETAPPROVALBYNIK_AM, 
																								ITH_TIPEBARANG_KODE.TICKETAPPROVALBYNAME_AM,
																								ITH_TIPEBARANG_KODE.TICKETAPPROVALDATE_AM,ITH_TIPEBARANG_KODE.TICKETAPPROVALTIME_AM,
																								ITH_TIPEBARANG_KODE.TICKETAPPROVALSTATUSID_ROM, ITH_TIPEBARANG_KODE.TICKETAPPROVALBYNIK_ROM, 
																								ITH_TIPEBARANG_KODE.TICKETAPPROVALBYNAME_ROM,
																								ITH_TIPEBARANG_KODE.TICKETAPPROVALDATE_ROM,ITH_TIPEBARANG_KODE.TICKETAPPROVALTIME_ROM,
																								ITH_TIPEBARANG_KODE.TICKETAPPROVALSTATUSID_GMO, ITH_TIPEBARANG_KODE.TICKETAPPROVALBYNIK_GMO, 
																								ITH_TIPEBARANG_KODE.TICKETAPPROVALBYNAME_GMO,
																								ITH_TIPEBARANG_KODE.TICKETAPPROVALDATE_GMO,ITH_TIPEBARANG_KODE.TICKETAPPROVALTIME_GMO ASC");
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
																	
													###	}elseif(($rCekStatusTiketStore->ticketapprovalstatus_id3=='1')||($rCekStatusTiketStore->ticketapprovalstatus_id2=='1')||($rCekStatusTiketStore->ticketapprovalstatus_id=='1'))
														}elseif($rCekStatusTiketStore->ticketapprovalstatus_id=='1')
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
																	WHERE FSDORDEC_TEMP.NO_PERMINTAAN = '".$_GET['pid']."'
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
														}
													}															
																	#while($rvSCatShowEQ = oci_fetch_array($qobjParseShowEQ,OCI_BOTH))  
																	while($rvCekDataEQx = mysql_fetch_array($qvCekDataEQx))  
																	{  
																	?>  												
																	<tr>												
																		<td width="20%">
																		<div style="margin-left:20px;color:brown;font-weight:bold;"><?=$rvCekDataEQx["KODE_TIPEBARANG"].' - '.$rvCekDataEQx["NAMA_TIPEBARANG"];?></div>
																		 <br> 
																		<? /* Cek Store From ? */
																		$qCekStoreFromNewItem = mysql_query("SELECT user_nik,user_realname,userstoregroup_id FROM ITH_USER WHERE user_nik = '".$rvCekDataEQx['TICKET_CREATEBY']."'");
																		$rCekStoreFromNewItem= mysql_fetch_object($qCekStoreFromNewItem);
																		$qCekStoreFromNameNewItem = mysql_query("SELECT user_nik,user_realname FROM ITH_USER WHERE user_nik = '".$rCekStoreFromNewItem->userstoregroup_id."'");
																		$rCekStoreFromNameNewItem = mysql_fetch_object($qCekStoreFromNameNewItem);
																		#echo '<br>Store From Name = '.$rCekStoreFromNameNewItem->user_realname;	
																		?>																	 
																		  <? 
																			$objConnectReplaceCekItem = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
																		   $qvSCatReplaceCekItem = "SELECT FSDBRGEQASSET_NEW.ITEM_NAME
																					 FROM FSDMSTTRX_STORENEW 
																					 JOIN FSDBRGEQASSET_NEW ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE																			 
																					 WHERE 
																					 ((FSDMSTTRX_STORENEW.OUTLET_CODE = '".$rvCekDataEQx['TICKET_CREATEBY']."')OR(FSDMSTTRX_STORENEW.OUTLET_CODE = '".$rCekStoreFromNameNewItem->user_nik."')) 
																					 AND FSDMSTTRX_STORENEW.ITEM_CODE = '".$rvCekDataEQx["KODE_TIPEBARANG"]."' ";
																			$qobjParseReplaceCekItem = oci_parse ($objConnectReplaceCekItem, $qvSCatReplaceCekItem);  
																								 oci_execute ($qobjParseReplaceCekItem,OCI_DEFAULT); 	
																			while($rvSCatReplaceCekItem = oci_fetch_object($qobjParseReplaceCekItem,OCI_BOTH))
																			{	
																				$cekItemName = substr($rvSCatReplaceCekItem->ITEM_NAME,-3);
																		  ?>
																			
																		  <? if($cekItemName == 'OLD'){ ?>	
																		
																		  <ul>
																		   <? 	$objConnectReplaceOldItem = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
																				$qvSCatReplaceOldItem = "SELECT DISTINCT 																			
																					 FSDMSTTRX_STORENEW.UMUR_BUKU AS UMURBUKUOLDITEM,
																					 FSDMSTTRX_STORENEW.NILAI_BUKU AS NILAIBUKUOLDITEM
																					 FROM FSDMSTTRX_STORENEW 
																					 JOIN FSDBRGEQASSET_NEW ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE																			 
																					 WHERE 
																					 ((FSDMSTTRX_STORENEW.OUTLET_CODE = '".$rvCekDataEQx['TICKET_CREATEBY']."')OR(FSDMSTTRX_STORENEW.OUTLET_CODE = '".$rCekStoreFromNameNewItem->user_nik."'))   
																					 AND FSDMSTTRX_STORENEW.ITEM_CODE = '".$rvCekDataEQx["KODE_TIPEBARANG"]."' 
																					 AND FSDBRGEQASSET_NEW.ITEM_NAME LIKE '%OLD'";
																				$qobjParseReplaceOldItem = oci_parse ($objConnectReplaceOldItem, $qvSCatReplaceOldItem);  
																								 oci_execute ($qobjParseReplaceOldItem,OCI_DEFAULT); 	
																				while($rvSCatReplaceOldItem = oci_fetch_object($qobjParseReplaceOldItem,OCI_BOTH))
																				{	
																			$jumlah_desimal  = "0";
																			$pemisah_desimal = ".";
																			$pemisah_ribuan  = ".";	
																		   ?>
																			
																			<li><b> Book Age : <font color="brown"><?=$rvSCatReplaceOldItem->UMURBUKUOLDITEM?></font></b></li> 
																			<li><b> Book Value : <font color="brown"><?='<strong>Rp.&nbsp;'.number_format($rvSCatReplaceOldItem->NILAIBUKUOLDITEM, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?></font></b></li>
																			<!--? 
																				$qCekStatusKeteranganData = mysql_query("SELECT DISTINCT keterangan FROM ITH_TIPEBARANG_KODE 
																														 WHERE ticket_id = '".$_GET['pid']."' AND kode_tipebarang = '".$rvCekDataEQx["KODE_TIPEBARANG"]."'");
																				$detailmyticketKeteranganData = mysql_fetch_object($qCekStatusKeteranganData);
																				$subkalimat = ucwords(strtolower(substr($detailmyticketKeteranganData->keterangan,8)));
																			?-->
																			<!--? if($detailmyticketKeteranganData->keterangan=='MOVE TO WAREHOUSE'){ ?>
																				<li><b> Move To : <font color="brown"><!--?=$subkalimat;?> </b></font></li>
																			<!--? }elseif($detailmyticketKeteranganData->keterangan=='MOVE TO OTHER STORE'){ ?>
																				<li><b> Move To : <font color="brown"><!--?=$subkalimat;?> </b></font></li>
																			<!--? } ?-->																		   
																   
																			<? } ?>	
																	  
																			<?  $objConnectReplace = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
																				$qvSCatReplace2 = "SELECT DISTINCT 
																					 FSDMSTTRX_STORENEW.ITEM_CODE_REPLACE AS ITEMCODEREPLACE, 
																					 FSDBRGEQASSET_NEW2.ITEM_NAME AS ITEMNAMEREPLACE,
																					 FSDBRGEQASSET_NEW.NOMOR_TAGING AS NOTAGGING, 
																					 FSDBRGEQASSET_NEW2.NOMOR_TAGING AS NOTAGREPLACE, 
																					 FSDMSTTRX_STORENEW.ITEM_MODEL AS ITEMMODELREPLACE,
																					 FSDMSTTRX_STORENEW.ITEM_BRAND AS ITEMBRANDREPLACE,
																					 FSDMSTTRX_STORENEW.UMUR_BUKU AS UMURBUKUREPLACE,
																					 FSDMSTTRX_STORENEW.NILAI_BUKU AS NILAIBUKUREPLACE,
																					 FSDMSTTRX_STORENEW.ITEM_PRICE AS ITEMPRICEREPLACE
																					 FROM FSDMSTTRX_STORENEW 
																					 JOIN FSDBRGEQASSET_NEW ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
																					 JOIN FSDBRGEQASSET_NEW FSDBRGEQASSET_NEW2 ON  FSDMSTTRX_STORENEW.ITEM_CODE_REPLACE = FSDBRGEQASSET_NEW2.ITEM_CODE
																					 WHERE 
																					 ((FSDMSTTRX_STORENEW.OUTLET_CODE = '".$rvCekDataEQx['TICKET_CREATEBY']."')OR(FSDMSTTRX_STORENEW.OUTLET_CODE = '".$rCekStoreFromNameNewItem->user_nik."')) 
																					 AND FSDMSTTRX_STORENEW.ITEM_CODE = '".$rvCekDataEQx["KODE_TIPEBARANG"]."' AND FSDBRGEQASSET_NEW.ITEM_NAME LIKE '%OLD'";
																			$qobjParseReplace2 = oci_parse ($objConnectReplace, $qvSCatReplace2);  
																								 oci_execute ($qobjParseReplace2,OCI_DEFAULT); 	
																			while($rvSCatReplace2 = oci_fetch_object($qobjParseReplace2,OCI_BOTH))
																			{	
																			$jumlah_desimal  = "0";
																			$pemisah_desimal = ".";
																			$pemisah_ribuan  = ".";	
																			?>		
																				<? if(($rvCekDataEQx["KETERANGAN"] =='ADDING REQUEST')||($rvCekDataEQx["KETERANGAN"] =='REPLACEMENT REQUEST')){ ?>																			
																					<br><b><u>REPLACEMENT ITEM : </u></b>
																					
																					<li><b> Item Info : <font color="brown"><?=$rvSCatReplace2->ITEMCODEREPLACE;?> - <?=$rvSCatReplace2->ITEMNAMEREPLACE;?></font></b></li>
																					<!--<li><b> Age		  : <font color="brown"><!?=$rvSCatReplace2->UMURBUKUREPLACE;?></font></b></li>
																					<li><b> Book Value: <font color="brown"><!?='<strong>Rp.&nbsp;'.number_format($rvSCatReplace2->NILAIBUKUREPLACE, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?></font></b></li>-->
																					<li><b> New Price: <font color="brown"><?='<strong>Rp.&nbsp;'.number_format($rvSCatReplace2->ITEMPRICEREPLACE, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?></font></b></li>
																				<? }elseif(($rvCekDataEQx["KETERANGAN"] =='MOVE TO OTHER STORE')||($rvCekDataEQx["KETERANGAN"] =='MOVE TO WAREHOUSE')){ ?>	
																					<li><b> Tagging Number: <font color="brown"><?=$rvSCatReplace2->NOTAGGING?></font></b></li>
																				<? } ?>	
																		  <? } ?>	
																		  </ul>
																		  <? }elseif($cekItemName == 'NEW'){ ?>	
																		  
																		  <ul>
																		   <? 	$objConnectReplaceOldItem = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
																				$qvSCatReplaceOldItem = "SELECT DISTINCT 																			
																					 FSDMSTTRX_STORENEW.UMUR_BUKU AS UMURBUKUOLDITEM,
																					 FSDMSTTRX_STORENEW.NILAI_BUKU AS NILAIBUKUOLDITEM,
																					 FSDMSTTRX_STORENEW.ITEM_PRICE AS ITEMPRICEOLDITEM,
																					 FSDBRGEQASSET_NEW.NOMOR_TAGING
																					 FROM FSDMSTTRX_STORENEW 
																					 JOIN FSDBRGEQASSET_NEW ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE																			 
																					 WHERE 
																					 ((FSDMSTTRX_STORENEW.OUTLET_CODE = '".$rvCekDataEQx['TICKET_CREATEBY']."')OR(FSDMSTTRX_STORENEW.OUTLET_CODE = '".$rCekStoreFromNameNewItem->user_nik."'))																					 
																					 AND FSDMSTTRX_STORENEW.ITEM_CODE = '".$rvCekDataEQx["KODE_TIPEBARANG"]."' 
																					 AND FSDBRGEQASSET_NEW.ITEM_NAME LIKE '%NEW'";
																				$qobjParseReplaceOldItem = oci_parse ($objConnectReplaceOldItem, $qvSCatReplaceOldItem);  
																								 oci_execute ($qobjParseReplaceOldItem,OCI_DEFAULT); 	
																				while($rvSCatReplaceOldItem = oci_fetch_object($qobjParseReplaceOldItem,OCI_BOTH))
																				{	
																			$jumlah_desimal  = "0";
																			$pemisah_desimal = ".";
																			$pemisah_ribuan  = ".";	
																		   ?>
																				<?
																					$con =  mysql_connect("localhost","usrservicedesk","kfc14022");
																							mysql_select_db("servicedesk",$con); //@session_start();	
																					$qvCekDataEQ = mysql_query("SELECT DISTINCT ticket_id,kode_tipebrg
																						                            FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$_GET['pid']."'");
																					$rvCekDataEQ = mysql_fetch_object($qvCekDataEQ);	
																					if(($rvCekDataEQ->kode_tipebrg=='RQS-03-000112replace')||($rvCekDataEQ->kode_tipebrg=='RQS-03-000113replace')||
																					   ($rvCekDataEQ->kode_tipebrg=='RQS-03-000114replace')||($rvCekDataEQ->kode_tipebrg=='RQS-03-000112move')||
																					   ($rvCekDataEQ->kode_tipebrg=='RQS-03-000113move')||($rvCekDataEQ->kode_tipebrg=='RQS-03-000114move'))
																					{		
																			  	?>																				
																			<li><b> Book Age : <?=$rvSCatReplaceOldItem->UMURBUKUOLDITEM?></b></li> 
																			<li><b> Book Value : <font color="brown"><?='<strong>Rp.&nbsp;'.number_format($rvSCatReplaceOldItem->NILAIBUKUOLDITEM, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?></font></b></li>
																						<? if(($rvCekDataEQx["KETERANGAN"] =='ADDING REQUEST')||($rvCekDataEQx["KETERANGAN"] =='REPLACEMENT REQUEST')){ ?>																		
																							<li><b> New Price : <font color="brown"><?='<strong>Rp.&nbsp;'.number_format($rvSCatReplaceOldItem->ITEMPRICEOLDITEM, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?></font></b></li>
																						<? }elseif(($rvCekDataEQx["KETERANGAN"] =='MOVE TO OTHER STORE')){ ?>
																							<li><b> Tagging Number : <font color="brown"><?=$rvSCatReplaceOldItem->NOMOR_TAGING;?></font></b></li>
																						<?  } ?>
																				<?  } ?>
																			<!--? 
																				$qCekStatusKeteranganData = mysql_query("SELECT DISTINCT keterangan FROM ITH_TIPEBARANG_KODE 
																														 WHERE ticket_id = '".$_GET['pid']."' AND kode_tipebarang = '".$rvCekDataEQx["KODE_TIPEBARANG"]."'");
																				$detailmyticketKeteranganData = mysql_fetch_object($qCekStatusKeteranganData);
																				$subkalimat = ucwords(strtolower(substr($detailmyticketKeteranganData->keterangan,8)));
																			?-->
																			<!--? if($detailmyticketKeteranganData->keterangan=='MOVE TO WAREHOUSE'){ ?>
																				<li><b> Move To : <font color="brown"><!--?=$subkalimat;?> </b></font></li>
																			<!--? }elseif($detailmyticketKeteranganData->keterangan=='MOVE TO OTHER STORE'){ ?>
																				<li><b> Move To : <font color="brown"><!--?=$subkalimat;?> </b></font></li>
																			<!--? } ?-->																		   
																		   
																			  <? } ?>	
																		  </ul>
																			<? } ?>	
																		 <? } ?>																																					
																		</td>																
																		<td width="10%"> 
																			<center><b><?=$rvCekDataEQx["TICKET_CREATEDATE"];?></b></center>
																		</td>
																		<?
																			$Koneks = oci_connect('fsd', 'fsd', 'localhost:1521/XE');
																			$qCekHargaAkir = "SELECT DISTINCT FSDSGROUP.NAMA_GROUP, FSDBRGEQ.KODE_BARANG, 
																						FSDBRGEQ.NAMA_BARANG,FSDBRGEQ.MODEL,FSDBRGEQ.MERK_BARANG,
																						FSDHRGER.HARGA_RATA2, FSDHRGER.HARGA_TERAKHIR,FSDBRGEQ.KODE_GRUP
																						from FSDBRGEQ
																						JOIN FSDSGROUP ON FSDBRGEQ.KODE_GRUP = FSDSGROUP.KODE_GROUP
																						JOIN FSDHRGER ON FSDBRGEQ.KODE_BARANG = FSDHRGER.KODE_BARANG_EQ
																						WHERE FSDBRGEQ.KODE_BARANG = '".$rvCekDataEQx["KODE_TIPEBARANG"]."'";  
																			$qobjParseCekHargaAkir = oci_parse ($Koneks, $qCekHargaAkir);  
																									 oci_execute ($qobjParseCekHargaAkir,OCI_DEFAULT);	
																			while($rvSCatCekHargaAkir = oci_fetch_array($qobjParseCekHargaAkir,OCI_BOTH))
																			{	
																				$jumlah_desimal  = "0";	$pemisah_desimal = "."; $pemisah_ribuan  = ".";	
																		?>										
																		<td width="10%" style="display:none;">	
																			
																			<center><?='<strong>Rp.&nbsp;'.number_format($rvSCatCekHargaAkir["HARGA_TERAKHIR"], $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?></center><br>	
																		</td>
																		<td width="10%" style="display:none;"> 	
																			<!--? 
																				$mySqlKoneks = mysql_connect("localhost","usrservicedesk","kfc14022");
																							   mysql_select_db("servicedesk",$con); //@session_start();
																				$qCekValueParameter = mysql_query("SELECT kd_grup,name_grup,value_parameter_rom, value_parameter_gmo
																												   FROM ITH_PARAMETER WHERE kd_grup='".$rvSCatCekHargaAkir['KODE_GRUP']."'");		
																				while($rCekValueParameter = mysql_fetch_array($qCekValueParameter))
																				{ $jumlah_desimal  = "0";	$pemisah_desimal = "."; $pemisah_ribuan  = ".";	
																			?-->	
																			<!--<center><!--?='<strong>Rp.&nbsp;'.number_format($rCekValueParameter["value_parameter_rom"], $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?></center><br>														
																			<!--?  } ?-->
																			<? 
																				$mySqlKoneks = mysql_connect("localhost","usrservicedesk","kfc14022");
																				$qCekParamPriceRom = mysql_query("SELECT KD_GRUP, VALUE_PARAMETER_ROM FROM ITH_PARAMETER");
																				$rCekParamPriceRom = mysql_fetch_object($qCekParamPriceRom);														
																				if($rvSCatCekHargaAkir['KODE_GRUP'] != $rCekParamPriceRom->KD_GRUP)
																				{ //Kode Grup Tidak Termasuk didalam kode grup di Value Parameter																			
																			?>
																				<? 
																					/* COLD EQUIPMENT */
																					if(($rvSCatCekHargaAkir['KODE_GRUP']=='027')||($rvSCatCekHargaAkir['KODE_GRUP']=='039')||
																					($rvSCatCekHargaAkir['KODE_GRUP']=='042')||($rvSCatCekHargaAkir['KODE_GRUP']=='043')||
																					($rvSCatCekHargaAkir['KODE_GRUP']=='050')||($rvSCatCekHargaAkir['KODE_GRUP']=='067'))
																					{
																						$qCekParamColdEQPriceRom = mysql_query("SELECT KD_GRUP, VALUE_PARAMETER_ROM FROM ITH_PARAMETER WHERE KD_GRUP = 'CEQ'");
																						$rCekColdEQPriceRom = mysql_fetch_object($qCekParamColdEQPriceRom);	$jumlah_desimal  = "0"; $pemisah_desimal = "."; $pemisah_ribuan  = ".";	
																							echo "<center><strong> Rp.&nbsp;".number_format($rCekColdEQPriceRom->VALUE_PARAMETER_ROM, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-</strong></center>";
																					}elseif(($rvSCatCekHargaAkir['KODE_GRUP']=='031')||($rvSCatCekHargaAkir['KODE_GRUP']=='032')||
																					($rvSCatCekHargaAkir['KODE_GRUP']=='030')||($rvSCatCekHargaAkir['KODE_GRUP']=='015')||
																					($rvSCatCekHargaAkir['KODE_GRUP']=='017')||($rvSCatCekHargaAkir['KODE_GRUP']=='019')||
																					($rvSCatCekHargaAkir['KODE_GRUP']=='033')||($rvSCatCekHargaAkir['KODE_GRUP']=='041'))
																					{
																						#echo "<center>(Heat Equipment)</center>";
																						$qCekHeatEQParamPriceRom = mysql_query("SELECT KD_GRUP, VALUE_PARAMETER_ROM FROM ITH_PARAMETER WHERE KD_GRUP = 'HEQ'");
																						$rCekHeatEQParamPriceRom = mysql_fetch_object($qCekHeatEQParamPriceRom); $jumlah_desimal  = "0"; $pemisah_desimal = "."; $pemisah_ribuan  = ".";
																							echo "<center><strong> Rp.&nbsp;".number_format($rCekHeatEQParamPriceRom->VALUE_PARAMETER_ROM, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-</strong></center>";
																					}elseif(($rvSCatCekHargaAkir['KODE_GRUP']=='023')||($rvSCatCekHargaAkir['KODE_GRUP']=='025')||
																					($rvSCatCekHargaAkir['KODE_GRUP']=='041')||($rvSCatCekHargaAkir['KODE_GRUP']=='079')||
																					($rvSCatCekHargaAkir['KODE_GRUP']=='083')||($rvSCatCekHargaAkir['KODE_GRUP']=='088')||
																					($rvSCatCekHargaAkir['KODE_GRUP']=='090')||($rvSCatCekHargaAkir['KODE_GRUP']=='091')||
																					($rvSCatCekHargaAkir['KODE_GRUP']=='120')||($rvSCatCekHargaAkir['KODE_GRUP']=='121')||
																					($rvSCatCekHargaAkir['KODE_GRUP']=='122')||($rvSCatCekHargaAkir['KODE_GRUP']=='124')||
																					($rvSCatCekHargaAkir['KODE_GRUP']=='093')||($rvSCatCekHargaAkir['KODE_GRUP']=='117'))
																					{
																						#echo "<center>(Food Processing Equipment)</center>";
																						$qCekFoodProcessingEQParamPriceRom = mysql_query("SELECT KD_GRUP, VALUE_PARAMETER_ROM FROM ITH_PARAMETER WHERE KD_GRUP = 'FEQ'");
																						$rCekFoodProcessingEQParamPriceRom = mysql_fetch_object($qCekFoodProcessingEQParamPriceRom); $jumlah_desimal  = "0"; $pemisah_desimal = "."; $pemisah_ribuan  = ".";
																							echo "<center><strong> Rp.&nbsp;".number_format($rCekFoodProcessingEQParamPriceRom->VALUE_PARAMETER_ROM, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-</strong></center>";
																					}																				
																				?>
																				
																			<?  }elseif($rvSCatCekHargaAkir['KODE_GRUP'] == $rCekParamPriceRom->KD_GRUP)
																				{ //Kode Grup Termasuk didalam kode grup di Value Parameter ?>
																				
																					<?
																					
																				/*	$qCekHargaAkirZZ = "SELECT DISTINCT FSDSGROUP.NAMA_GROUP, FSDBRGEQ.KODE_BARANG, 
																						FSDBRGEQ.NAMA_BARANG,FSDBRGEQ.MODEL,FSDBRGEQ.MERK_BARANG,
																						FSDHRGER.HARGA_RATA2, FSDHRGER.HARGA_TERAKHIR,FSDBRGEQ.KODE_GRUP
																						from FSDBRGEQ
																						JOIN FSDSGROUP ON FSDBRGEQ.KODE_GRUP = FSDSGROUP.KODE_GROUP
																						JOIN FSDHRGER ON FSDBRGEQ.KODE_BARANG = FSDHRGER.KODE_BARANG_EQ
																						WHERE FSDBRGEQ.KODE_BARANG = '".$rvCekDataEQx["KODE_TIPEBARANG"]."'";  
																				*/	$qCekHargaAkirZZ = "SELECT ITEM_CODE, ITEM_NAME, ITEM_BRAND, ITEM_MODEL,  ITEM_PRICE
																						FROM FSDBRGEQASSET_NEW
																						WHERE ITEM_CODE = '".$rvCekDataEQx["KODE_TIPEBARANG"]."'";  
																					$qobjParseCekHargaAkirZZ = oci_parse ($Koneks, $qCekHargaAkirZZ);  
																											 oci_execute ($qobjParseCekHargaAkirZZ,OCI_DEFAULT);	
																					while($rvSCatCekHargaAkirZZ = oci_fetch_array($qobjParseCekHargaAkirZZ,OCI_BOTH))
																					{					
																						
																						$mySqlKoneks = mysql_connect("localhost","usrservicedesk","kfc14022");
																						mysql_select_db("servicedesk",$con); //@session_start();
																						$qCekValueParameter = mysql_query("SELECT kd_grup,name_grup,value_parameter_rom, value_parameter_gmo
																													   FROM ITH_PARAMETER WHERE kd_grup='".$rvSCatCekHargaAkirZZ['KODE_GRUP']."'");		
																						while($rCekValueParameter = mysql_fetch_array($qCekValueParameter))
																						{ $jumlah_desimal  = "0";	$pemisah_desimal = "."; $pemisah_ribuan  = ".";	
																						?>
																							
																							<center><?='<strong>Rp.&nbsp;'.number_format($rCekValueParameter["value_parameter_rom"], $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?></center><br>	
																					 <? } ?>
																				<?  } ?>
																			<?  } ?>
																		</td>	
																		<?  } ?>		
																		<td width="10%">																		
																			<? 																			
																				$cekItemName = ucwords(strtolower(substr($rvCekDataEQx["KETERANGAN"],8))); 
																			?>	
																			<? if($cekItemName=='Warehouse'){ ?>
																					<center><font color="brown"><b><?=$cekItemName;?></b></font></center><br>																	
																					<? if($rvCekDataEQx["TICKET_NEEDASSIST"]=='YES'){ ?>
																						<center><font color="#000"><b>By : </font><font color="brown"><?='FSD';?></b></font></center><br>
																					<? }elseif($rvCekDataEQx["TICKET_NEEDASSIST"]=='NO'){ ?>
																						<center><font color="#000"><b>By : </font><font color="brown"><?='OPR';?></b></font></center><br>
																					<? } ?>
																			<? }elseif($cekItemName=='Other Store'){ ?>
																					<center><font color="brown"><b><?=ucwords(strtoupper($rvCekDataEQx["TICKETTRANSFERTO_OUTLETNAME"]));?></b></font></center><br>																	
																					<? if($rvCekDataEQx["TICKET_NEEDASSIST"]=='YES'){ ?>
																						<center><font color="#000"><b>By : </font><font color="brown"><?='FSD';?></b></font></center><br>
																					<? }elseif($rvCekDataEQx["TICKET_NEEDASSIST"]=='NO'){ ?>
																						<center><font color="#000"><b>By : </font><font color="brown"><?='OPR';?></b></font></center><br>
																					<? } ?>
																			<? } ?>															
																		</td>

																		<td width="22%">								
																			<? if($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='2'){ ?>																		
																				<?='&nbsp;&nbsp;<b>Approval Status :<font color="brown">&nbsp;&nbsp;Not Yet Responded.';?></b></font><br>
																			<? }elseif($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='1'){ ?>																		
																				<?='&nbsp;&nbsp;<b>Approval Status :<font color="brown">&nbsp;&nbsp;Approved.';?></b></font><br>
																			<? }elseif($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='0'){ ?>																		
																				<?='&nbsp;&nbsp;<b>Approval Status :<font color="brown">&nbsp;&nbsp;Not Approved';?></b></font><br>
																			<? } ?>																
																																				
																			<?='&nbsp;&nbsp;<b>Approval By :</b> <font color="brown">'.$rvCekDataEQx["TICKETAPPROVALBYNAME_AM"];?></font><br>																	
																			<?='&nbsp;&nbsp;<b>Approval Date :</b> <font color="brown">'.$rvCekDataEQx["TICKETAPPROVALDATE_AM"];?></font><br>																	
																			<?='&nbsp;&nbsp;<b>Approval Time :</b> <font color="brown">'.$rvCekDataEQx["TICKETAPPROVALTIME_AM"];?></font>
																		</td>
																		<td width="25%"> 																								 
																						&nbsp;<b>For Action :</b><br>
																						<input type="hidden" name="kdtipebrg[]" id="<?='kdtipebrg'.$rvCekDataEQx["KODE_TIPEBARANG"];?>" value="<?=$rvCekDataEQx["KODE_TIPEBARANG"]?>"></input>
																						<? 
																							$qCekStatusAreaMgrX = mysql_query("SELECT TICKET_ID,KODE_TIPEBARANG,TICKETAPPROVALSTATUSID_AM FROM ITH_TIPEBARANG_KODE 
																							WHERE TICKET_ID = '".$_GET['pid']."' AND KODE_TIPEBARANG = '".$rvCekDataEQx["KODE_TIPEBARANG"]."'");
																							$rCekStatusAreaMgrX = mysql_fetch_object($qCekStatusAreaMgrX);
																							
																							if(($rCekStatusAreaMgrX->KODE_TIPEBARANG == $rvCekDataEQx["KODE_TIPEBARANG"])&&($rCekStatusAreaMgrX->TICKETAPPROVALSTATUSID_AM=='2')){
																							#if($rCekStatusAreaMgrX->TICKETAPPROVALSTATUSID_AM=='2'){
																						?>		
																										&nbsp;<input type="radio" name="aprvlstsidam[<?=$rvCekDataEQx["KODE_TIPEBARANG"];?>]" id="<?='aprvlstsidam'.$rvCekDataEQx["KODE_TIPEBARANG"];?>" value="<?='0'?>">&nbsp;<?='Disapprove'?>&nbsp;
																											<input type="radio" name="aprvlstsidam[<?=$rvCekDataEQx["KODE_TIPEBARANG"];?>]" id="<?='aprvlstsidam'.$rvCekDataEQx["KODE_TIPEBARANG"];?>" value="<?='1'?>">&nbsp;<?='Approved'?>&nbsp;	
																						<? }elseif(($rCekStatusAreaMgrX->KODE_TIPEBARANG == $rvCekDataEQx["KODE_TIPEBARANG"])&&($rCekStatusAreaMgrX->TICKETAPPROVALSTATUSID_AM=='1')){ ?>		
																						<? #}elseif($rCekStatusAreaMgrX->TICKETAPPROVALSTATUSID_AM=='1'){ ?>		
																																																
																										&nbsp;<input type="radio" name="aprvlstsidam[<?=$rvCekDataEQx["KODE_TIPEBARANG"];?>]" id="<?='aprvlstsidam'.$rvCekDataEQx["KODE_TIPEBARANG"];?>" value="<?='0'?>" style="pointer-events:none;">&nbsp;<?='Disapprove'?>&nbsp;
																											<input type="radio" name="aprvlstsidam[<?=$rvCekDataEQx["KODE_TIPEBARANG"];?>]" id="<?='aprvlstsidam'.$rvCekDataEQx["KODE_TIPEBARANG"];?>" value="<?='1'?>" style="pointer-events:none;" checked>&nbsp;<?='Approved'?>&nbsp;																						
																						<? }elseif(($rCekStatusAreaMgrX->KODE_TIPEBARANG == $rvCekDataEQx["KODE_TIPEBARANG"])&&($rCekStatusAreaMgrX->TICKETAPPROVALSTATUSID_AM=='0')){ ?>		
																						<? #}elseif($rCekStatusAreaMgrX->TICKETAPPROVALSTATUSID_AM=='1'){ ?>		
																																																
																										&nbsp;<input type="radio" name="aprvlstsidam[<?=$rvCekDataEQx["KODE_TIPEBARANG"];?>]" id="<?='aprvlstsidam'.$rvCekDataEQx["KODE_TIPEBARANG"];?>" value="<?='0'?>">&nbsp;<?='Disapprove'?>&nbsp;
																											<input type="radio" name="aprvlstsidam[<?=$rvCekDataEQx["KODE_TIPEBARANG"];?>]" id="<?='aprvlstsidam'.$rvCekDataEQx["KODE_TIPEBARANG"];?>" value="<?='1'?>">&nbsp;<?='Approved'?>&nbsp;																						
																						<? } ?>													
																								<script>
																								function check() {
																									document.getElementById("0").checked = true;
																								}
																								function uncheck() {
																									document.getElementById("0").checked = false;
																								}
																								</script>	
																																												
																							
																				<script type="text/javascript">
																					window.onload=function(){
																						//var auto = setTimeout(function(){ autoRefresh(); }, 100);

																						function submitform(){
																						  //alert('test');
																						  document.forms["myForm"].submit();
																						}

																						//function autoRefresh(){
																						//   clearTimeout(auto);
																						//   auto = setTimeout(function(){ submitform(); autoRefresh(); }, 10000);
																						//}
																					}
																				</script>	
																																									
																		</td>
																	</tr>	
																<? } ?>									

											
											<!-- SMALLWARE REQUEST ITEM -->	
											<? #} ?>	

									</tbody>
								</table>	
									<input type="submit" value="Submit" style="margin-left:1020px;" />																				
								</form>										
							</div>
						</div>			
                    


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

