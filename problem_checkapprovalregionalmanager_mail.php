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

										<th width="20%" style="color:#ffffff;">Name Of<br>Goods Ordered</th>
										<th width="10%" style="color:#ffffff;">Date Of<br>Request</th>										
										<th width="10%" style="color:#ffffff;display:none;">Item<br>PriceX</th>											
										<th width="10%" style="color:#ffffff;display:none;">Value<br>ParameterX</th>										
										<th width="10%" style="color:#ffffff;">Quantity<br>Requested</th>			
										<th width="22%" style="color:#ffffff;">Regional Operation Manager<br>Approval</th>							
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
																	AND JUMLAH_PERMINTAAN IS NOT NULL order by FSDORDEC.TGL_PERMINTAAN DESC";  
																
													$qCekStatusTiketStore = mysql_query("SELECT ticket_id, ticketstatus_id, ticketapprovalstatus_id, ticketapprovalstatus_id2, ticketapprovalstatus_id3 
																						FROM ITH_TICKET_HEADER WHERE ticket_id = '".$_GET['pid']."'");
													$rCekStatusTiketStore = mysql_fetch_object($qCekStatusTiketStore);
													#if(($rCekStatusTiketStore->ticketapprovalstatus_id!='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id2!='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id3!='1'))
													#{	
													if(($rCekStatusTiketStore->ticketstatus_id='1')||($rCekStatusTiketStore->ticketstatus_id='2'))
													{	
													### if(($rCekStatusTiketStore->ticketapprovalstatus_id!='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id2!='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id3!='1'))
														if($rCekStatusTiketStore->ticketapprovalstatus_id2!='1')
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
																								AND ITH_TIPEBARANG_KODE.TICKETAPPROVALSTATUSID_AM != '0'
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
														}elseif($rCekStatusTiketStore->ticketapprovalstatus_id2=='1')
														{
																#	echo "<br>TEST-2....";
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
														}
													}															
																	#while($rvSCatShowEQ = oci_fetch_array($qobjParseShowEQ,OCI_BOTH))  
																	while($rvCekDataEQx = mysql_fetch_array($qvCekDataEQx))  
																	{  
																	?>  												
																	<tr>	
																		<td width="20%">
																		<div style="margin-left:20px;"><?=$rvCekDataEQx["KODE_TIPEBARANG"].' - '.$rvCekDataEQx["NAMA_TIPEBARANG"];?>
																		</div>
																		  <br> 
																		  <? 
																			$objConnectReplaceCekItem = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
																		   $qvSCatReplaceCekItem = "SELECT FSDBRGEQASSET_NEW.ITEM_NAME
																					 FROM FSDMSTTRX_STORENEW 
																					 JOIN FSDBRGEQASSET_NEW ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE																			 
																					 WHERE FSDMSTTRX_STORENEW.OUTLET_CODE = '".$rvCekDataEQx['TICKET_CREATEBY']."' 
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
																					 WHERE FSDMSTTRX_STORENEW.OUTLET_CODE = '".$rvCekDataEQx['TICKET_CREATEBY']."' AND 
																					 FSDMSTTRX_STORENEW.ITEM_CODE = '".$rvCekDataEQx["KODE_TIPEBARANG"]."' 
																					 AND FSDBRGEQASSET_NEW.ITEM_NAME LIKE '%OLD'";
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
																					<li><b> Book Value : <font color="orange"><?='<strong>Rp.&nbsp;'.number_format($rvSCatReplaceOldItem->NILAIBUKUOLDITEM, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?></font></b></li>
																						<? } ?>
																					<? 
																						$qCekStatusKeteranganData = mysql_query("SELECT DISTINCT keterangan FROM ITH_TIPEBARANG_KODE 
																																 WHERE ticket_id = '".$_GET['pid']."' AND kode_tipebarang = '".$rvCekDataEQx["KODE_TIPEBARANG"]."'");
																						$detailmyticketKeteranganData = mysql_fetch_object($qCekStatusKeteranganData);
																						$subkalimat = ucwords(strtolower(substr($detailmyticketKeteranganData->keterangan,8)));
																					?>
																					<? if($detailmyticketKeteranganData->keterangan=='MOVE TO WAREHOUSE'){ ?>
																						<li><b> Move To : <font color="orange"><?=$subkalimat;?> </b></font></li>
																					<? }elseif($detailmyticketKeteranganData->keterangan=='MOVE TO OTHER STORE'){ ?>
																						<li><b> Move To : <font color="orange"><?=$subkalimat;?> </b></font></li>
																					<? } ?>																	   
																			<? } ?>	
																	  
																			<? 
																				$qvSCatReplace2 = "SELECT DISTINCT 
																					 FSDMSTTRX_STORENEW.ITEM_CODE_REPLACE AS ITEMCODEREPLACE, 
																					 FSDBRGEQASSET_NEW2.ITEM_NAME AS ITEMNAMEREPLACE,
																					 FSDBRGEQASSET_NEW.NOMOR_TAGING AS NOTAGREPLACE, 
																					 FSDMSTTRX_STORENEW.ITEM_MODEL AS ITEMMODELREPLACE,
																					 FSDMSTTRX_STORENEW.ITEM_BRAND AS ITEMBRANDREPLACE,
																					 FSDMSTTRX_STORENEW.UMUR_BUKU AS UMURBUKUREPLACE,
																					 FSDMSTTRX_STORENEW.NILAI_BUKU AS NILAIBUKUREPLACE,
																					 FSDMSTTRX_STORENEW.ITEM_PRICE AS ITEMPRICEREPLACE
																					 FROM FSDMSTTRX_STORENEW 
																					 JOIN FSDBRGEQASSET_NEW ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
																					 JOIN FSDBRGEQASSET_NEW FSDBRGEQASSET_NEW2 ON  FSDMSTTRX_STORENEW.ITEM_CODE_REPLACE = FSDBRGEQASSET_NEW2.ITEM_CODE
																					 WHERE FSDMSTTRX_STORENEW.OUTLET_CODE = '".$rvCekDataEQx['TICKET_CREATEBY']."' AND 
																					 FSDMSTTRX_STORENEW.ITEM_CODE = '".$rvCekDataEQx["KODE_TIPEBARANG"]."' AND FSDBRGEQASSET_NEW.ITEM_NAME LIKE '%OLD'";
																			$qobjParseReplace2 = oci_parse ($objConnectReplace, $qvSCatReplace2);  
																								 oci_execute ($qobjParseReplace2,OCI_DEFAULT); 	
																			while($rvSCatReplace2 = oci_fetch_object($qobjParseReplace2,OCI_BOTH))
																			{	
																			$jumlah_desimal  = "0";
																			$pemisah_desimal = ".";
																			$pemisah_ribuan  = ".";	
																			?>		
																			<br><b><u>REPLACEMENT ITEM : </u></b>
																			
																			<li><b> Item Info : <font color="orange"><?=$rvSCatReplace2->ITEMCODEREPLACE;?> - <?=$rvSCatReplace2->ITEMNAMEREPLACE;?></font></b></li>
																			<!--<li><b> Age		  : <font color="orange"><!?=$rvSCatReplace2->UMURBUKUREPLACE;?></font></b></li>
																			<li><b> Book Value: <font color="orange"><!?='<strong>Rp.&nbsp;'.number_format($rvSCatReplace2->NILAIBUKUREPLACE, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?></font></b></li>-->
																			<li><b> New Price: <font color="orange"><?='<strong>Rp.&nbsp;'.number_format($rvSCatReplace2->ITEMPRICEREPLACE, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?></font></b></li>
																			
																				<? } ?>	
																		  </ul>
																		  <? }elseif($cekItemName == 'NEW'){ ?>	
																		  
																		  <ul>
																		   <? 	$objConnectReplaceOldItem = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
																				$qvSCatReplaceOldItem = "SELECT DISTINCT 																			
																					 FSDMSTTRX_STORENEW.UMUR_BUKU AS UMURBUKUOLDITEM,
																					 FSDMSTTRX_STORENEW.NILAI_BUKU AS NILAIBUKUOLDITEM,
																					 FSDMSTTRX_STORENEW.ITEM_PRICE AS ITEMPRICEOLDITEM
																					 FROM FSDMSTTRX_STORENEW 
																					 JOIN FSDBRGEQASSET_NEW ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE																			 
																					 WHERE FSDMSTTRX_STORENEW.OUTLET_CODE = '".$rvCekDataEQx['TICKET_CREATEBY']."' AND 
																					 FSDMSTTRX_STORENEW.ITEM_CODE = '".$rvCekDataEQx["KODE_TIPEBARANG"]."' 
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
																					<li><b> Book Value : <font color="orange"><?='<strong>Rp.&nbsp;'.number_format($rvSCatReplaceOldItem->NILAIBUKUOLDITEM, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?></font></b></li>
																					<li><b> New Price : <font color="orange"><?='<strong>Rp.&nbsp;'.number_format($rvSCatReplaceOldItem->ITEMPRICEOLDITEM, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?></font></b></li>
																						<? } ?>
																					<? 
																						$qCekStatusKeteranganData = mysql_query("SELECT DISTINCT keterangan FROM ITH_TIPEBARANG_KODE 
																																 WHERE ticket_id = '".$_GET['pid']."' AND kode_tipebarang = '".$rvCekDataEQx["KODE_TIPEBARANG"]."'");
																						$detailmyticketKeteranganData = mysql_fetch_object($qCekStatusKeteranganData);
																						$subkalimat = ucwords(strtolower(substr($detailmyticketKeteranganData->keterangan,8)));
																					?>
																					<? if($detailmyticketKeteranganData->keterangan=='MOVE TO WAREHOUSE'){ ?>
																						<li><b> Move To : <font color="orange"><?=$subkalimat;?> </b></font></li>
																					<? }elseif($detailmyticketKeteranganData->keterangan=='MOVE TO OTHER STORE'){ ?>
																						<li><b> Move To : <font color="orange"><?=$subkalimat;?> </b></font></li>
																					<? } ?>																			   
																			  <? } ?>	
																			  </ul>
																			<? } ?>	
																		 <? } ?>																																					
																		</td>																
																		<td width="10%">
																			<center><?=$rvCekDataEQx["TICKET_CREATEDATE"];?></center>
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
																						$qCekParamColdEQPriceRom = mysql_query("SELECT KD_GRUP, VALUE_PARAMETER_ROM FROM ITH_PARAMETER WHERE KD_PARAMETERTYPE = 'param_0003'");
																						$rCekColdEQPriceRom = mysql_fetch_object($qCekParamColdEQPriceRom);	$jumlah_desimal  = "0"; $pemisah_desimal = "."; $pemisah_ribuan  = ".";	
																							echo "<center><strong> Rp.&nbsp;".number_format($rCekColdEQPriceRom->VALUE_PARAMETER_ROM, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-</strong></center>";
																					/* HEAT EQUIPMENT */
																					}elseif(($rvSCatCekHargaAkir['KODE_GRUP']=='031')||($rvSCatCekHargaAkir['KODE_GRUP']=='032')||
																					($rvSCatCekHargaAkir['KODE_GRUP']=='030')||($rvSCatCekHargaAkir['KODE_GRUP']=='015')||
																					($rvSCatCekHargaAkir['KODE_GRUP']=='017')||($rvSCatCekHargaAkir['KODE_GRUP']=='019')||
																					($rvSCatCekHargaAkir['KODE_GRUP']=='033')||($rvSCatCekHargaAkir['KODE_GRUP']=='041'))
																					{
																						#echo "<center>(Heat Equipment)</center>";
																						$qCekHeatEQParamPriceRom = mysql_query("SELECT KD_GRUP, VALUE_PARAMETER_ROM FROM ITH_PARAMETER WHERE KD_PARAMETERTYPE = 'param_0004'");
																						$rCekHeatEQParamPriceRom = mysql_fetch_object($qCekHeatEQParamPriceRom); $jumlah_desimal  = "0"; $pemisah_desimal = "."; $pemisah_ribuan  = ".";
																							echo "<center><strong> Rp.&nbsp;".number_format($rCekHeatEQParamPriceRom->VALUE_PARAMETER_ROM, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-</strong></center>";
																					/* FOOD PROCESSING EQUIPMENT */
																					}elseif(($rvSCatCekHargaAkir['KODE_GRUP']=='023')||($rvSCatCekHargaAkir['KODE_GRUP']=='025')||
																					($rvSCatCekHargaAkir['KODE_GRUP']=='041')||($rvSCatCekHargaAkir['KODE_GRUP']=='079')||
																					($rvSCatCekHargaAkir['KODE_GRUP']=='083')||($rvSCatCekHargaAkir['KODE_GRUP']=='088')||
																					($rvSCatCekHargaAkir['KODE_GRUP']=='090')||($rvSCatCekHargaAkir['KODE_GRUP']=='091')||
																					($rvSCatCekHargaAkir['KODE_GRUP']=='120')||($rvSCatCekHargaAkir['KODE_GRUP']=='121')||
																					($rvSCatCekHargaAkir['KODE_GRUP']=='122')||($rvSCatCekHargaAkir['KODE_GRUP']=='124')||
																					($rvSCatCekHargaAkir['KODE_GRUP']=='093')||($rvSCatCekHargaAkir['KODE_GRUP']=='117'))
																					{
																						$connOraCekParamPrice = oci_connect('fsd', 'fsd', 'localhost:1521/XE') or die;
																						/**
																						$qCekParamPrice = "SELECT KODE_GRUP, KODE_BARANG, NAMA_BARANG FROM FSDBRGEQ WHERE KODE_BARANG = '".$value_kdtipebrg."' 
																										   ORDER BY KODE_GRUP, KODE_BARANG, NAMA_BARANG ASC";														
																						$objParseCekParamPrice = oci_parse ($connOraCekParamPrice, $qCekParamPrice);  
																												 oci_execute ($objParseCekParamPrice,OCI_DEFAULT);
																						$objResultCekParamPrice = oci_fetch_object($objParseCekParamPrice,OCI_BOTH);	
																						***/
																						
																						$qvPembandingHargaAwal =  "SELECT DISTINCT FSDSGROUP.NAMA_GROUP, FSDBRGEQ.KODE_BARANG, 
																																	FSDBRGEQ.NAMA_BARANG, FSDHRGER.HARGA_RATA2, FSDHRGER.HARGA_TERAKHIR
																																	FROM FSDBRGEQ
																																	JOIN FSDSGROUP ON FSDBRGEQ.KODE_GRUP = FSDSGROUP.KODE_GROUP
																																	JOIN FSDHRGER ON FSDBRGEQ.KODE_BARANG = FSDHRGER.KODE_BARANG_EQ
																																	WHERE FSDBRGEQ.KODE_BARANG = '".$rvCekDataEQx["KODE_TIPEBARANG"]."'";														
																						$qobjParsePembandingHargaAwal = oci_parse ($connOraCekParamPrice, $qvPembandingHargaAwal);  
																									 oci_execute ($qobjParsePembandingHargaAwal,OCI_DEFAULT);   
																						$rvPembandingHargaAwal = oci_fetch_object($qobjParsePembandingHargaAwal,OCI_BOTH);
																						
																						$qCekFoodProcessingEQParamPriceRom = mysql_query("SELECT KD_GRUP, VALUE_PARAMETER_ROM FROM ITH_PARAMETER WHERE KD_PARAMETERTYPE = 'param_0005'");
																						$rCekFoodProcessingEQParamPriceRom = mysql_fetch_object($qCekFoodProcessingEQParamPriceRom); $jumlah_desimal  = "0"; $pemisah_desimal = "."; $pemisah_ribuan  = ".";
																					
																						#if(($rvPembandingHargaAwal-> HARGA_TERAKHIR >= $rCekFoodProcessingEQParamPriceRom->VALUE_PARAMETER_ROM)||
																						#   ($rvPembandingHargaAwal-> HARGA_TERAKHIR == $rCekFoodProcessingEQParamPriceRom->VALUE_PARAMETER_ROM))
																						#{	
																						#	echo "<center><strong> Rp.&nbsp;".number_format($rCekFoodProcessingEQParamPriceRom->VALUE_PARAMETER_ROM, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-</strong></center>";
																						#}elseif(($rvPembandingHargaAwal-> HARGA_TERAKHIR < $rCekParamPriceRom->VALUE_PARAMETER_ROM))
																						#{
																						#	echo "<center><strong> Rp.&nbsp;".number_format($rCekFoodProcessingEQParamPriceRom->VALUE_PARAMETER_ROM, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-</strong></center>";
																						#}else{
																							echo "<center><strong> Rp.&nbsp;".number_format($rCekFoodProcessingEQParamPriceRom->VALUE_PARAMETER_ROM, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-</strong></center>";
																						#}	
																						#echo "<center>(Food Processing Equipment)</center>";
																					}																				
																				?>
																				
																			<?  }elseif($rvSCatCekHargaAkir['KODE_GRUP'] == $rCekParamPriceRom->KD_GRUP)
																				{ //Kode Grup Termasuk didalam kode grup di Value Parameter ?>
																				
																					<?
																					
																					$qCekHargaAkirZZ = "SELECT DISTINCT FSDSGROUP.NAMA_GROUP, FSDBRGEQ.KODE_BARANG, 
																						FSDBRGEQ.NAMA_BARANG,FSDBRGEQ.MODEL,FSDBRGEQ.MERK_BARANG,
																						FSDHRGER.HARGA_RATA2, FSDHRGER.HARGA_TERAKHIR,FSDBRGEQ.KODE_GRUP
																						from FSDBRGEQ
																						JOIN FSDSGROUP ON FSDBRGEQ.KODE_GRUP = FSDSGROUP.KODE_GROUP
																						JOIN FSDHRGER ON FSDBRGEQ.KODE_BARANG = FSDHRGER.KODE_BARANG_EQ
																						WHERE FSDBRGEQ.KODE_BARANG = '".$rvCekDataEQx["KODE_TIPEBARANG"]."'";  
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
																		<center><?=$rvCekDataEQx["KUANTITAS"].'&nbsp;<br><b>UNITS</b>';?></center><br>																	
																		</td>
																		<td width="22%">								
																			<? if($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='2'){ ?>																		
																				<?='&nbsp;&nbsp;<b>Approval Status :</b>&nbsp;&nbsp;Not Yet Responded.';?><br>
																			<? }elseif($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='1'){ ?>																		
																				<?='&nbsp;&nbsp;<b>Approval Status :</b>&nbsp;&nbsp;Approved.';?><br>
																			<? }elseif($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='0'){ ?>																		
																				<?='&nbsp;&nbsp;<b>Approval Status :</b>&nbsp;&nbsp;Not Approved';?><br>
																			<? } ?>																
																																				
																			<?='&nbsp;&nbsp;<b>Approval By :</b> '.$rvCekDataEQx["TICKETAPPROVALBYNAME_ROM"];?><br>																	
																			<?='&nbsp;&nbsp;<b>Approval Date :</b> '.$rvCekDataEQx["TICKETAPPROVALDATE_ROM"];?><br>																	
																			<?='&nbsp;&nbsp;<b>Approval Time :</b> '.$rvCekDataEQx["TICKETAPPROVALTIME_ROM"];?>
																		</td>
																		<td width="25%">
																						<input type="hidden" name="kdtipebrg[]" id="<?='kdtipebrg'.$rvCekDataEQx["KODE_TIPEBARANG"];?>" value="<?=$rvCekDataEQx["KODE_TIPEBARANG"]?>"></input>
																						<? 
																						#	$qCekStatusAreaMgrX = mysql_query("SELECT TICKET_ID,KODE_TIPEBARANG,TICKETAPPROVALSTATUSID_AM FROM ITH_TIPEBARANG_KODE 
																						#	WHERE TICKET_ID = '".$_GET['pid']."' AND KODE_TIPEBARANG = '".$rvCekDataEQx["KODE_TIPEBARANG"]."'");
																							$qCekStatusAreaMgrX = mysql_query("SELECT TICKET_ID,KODE_TIPEBARANG,TICKETAPPROVALSTATUSID_AM,TICKETAPPROVALSTATUSID_ROM FROM ITH_TIPEBARANG_KODE 
																							WHERE TICKET_ID = '".$_GET['pid']."' AND KODE_TIPEBARANG = '".$rvCekDataEQx["KODE_TIPEBARANG"]."'");
																							$rCekStatusAreaMgrX = mysql_fetch_object($qCekStatusAreaMgrX);
																							
																							if(($rCekStatusAreaMgrX->KODE_TIPEBARANG == $rvCekDataEQx["KODE_TIPEBARANG"])&&(($rCekStatusAreaMgrX->TICKETAPPROVALSTATUSID_AM=='0')&&($rCekStatusAreaMgrX->TICKETAPPROVALSTATUSID_ROM=='-'))){ 
																						?>		
																							
																							&nbsp;<font color="red"><b>X1 SORRY, THIS ITEM WAS NOT APPROVED BY (AREA MANAGER/AM)</b></font>	
																							<input type="hidden" name="aprvlstsidrom[<?=$rvCekDataEQx["KODE_TIPEBARANG"];?>]" id="<?='aprvlstsidrom'.$rvCekDataEQx["KODE_TIPEBARANG"];?>" value="<?='-'?>" style="display:none;" checked>&nbsp;<?='-'?>&nbsp;
																						<?
																							}elseif(($rCekStatusAreaMgrX->KODE_TIPEBARANG == $rvCekDataEQx["KODE_TIPEBARANG"])&&(($rCekStatusAreaMgrX->TICKETAPPROVALSTATUSID_AM=='1')&&($rCekStatusAreaMgrX->TICKETAPPROVALSTATUSID_ROM=='-'))){ 
																						?>
																							<font color="red"><b>X2 SORRY..., THE PRICE OF<br>THIS ITEM IS BELOW<br>THE PARAMETER PRICE</b></font>	
																								<input type="radio" name="aprvlstsidrom[<?=$rvCekDataEQx["KODE_TIPEBARANG"];?>]" id="<?='aprvlstsidrom'.$rvCekDataEQx["KODE_TIPEBARANG"];?>" value="<?='-'?>" style="pointer-events:none;display:none;" checked>&nbsp;<!--?='Disapprove'?-->&nbsp;																			<?
																							}elseif(($rCekStatusAreaMgrX->KODE_TIPEBARANG == $rvCekDataEQx["KODE_TIPEBARANG"])&&($rCekStatusAreaMgrX->TICKETAPPROVALSTATUSID_AM=='2')){
																							#if($rCekStatusAreaMgrX->TICKETAPPROVALSTATUSID_AM=='2'){
																						?>		
																						&nbsp;<b>For Action :</b>
																											<input type="radio" name="aprvlstsidrom[<?=$rvCekDataEQx["KODE_TIPEBARANG"];?>]" id="<?='aprvlstsidrom'.$rvCekDataEQx["KODE_TIPEBARANG"];?>" value="<?='0'?>">&nbsp;<?='Disapprove'?>&nbsp;
																											<input type="radio" name="aprvlstsidrom[<?=$rvCekDataEQx["KODE_TIPEBARANG"];?>]" id="<?='aprvlstsidrom'.$rvCekDataEQx["KODE_TIPEBARANG"];?>" value="<?='1'?>">&nbsp;<?='Approved'?>&nbsp;	
																						<?
																							}elseif(($rCekStatusAreaMgrX->KODE_TIPEBARANG == $rvCekDataEQx["KODE_TIPEBARANG"])&&($rCekStatusAreaMgrX->TICKETAPPROVALSTATUSID_AM=='2')){
																							#if($rCekStatusAreaMgrX->TICKETAPPROVALSTATUSID_AM=='2'){
																						?>		
																						&nbsp;<b>For Action :</b>
																											<input type="radio" name="aprvlstsidrom[<?=$rvCekDataEQx["KODE_TIPEBARANG"];?>]" id="<?='aprvlstsidrom'.$rvCekDataEQx["KODE_TIPEBARANG"];?>" value="<?='0'?>">&nbsp;<?='Disapprove'?>&nbsp;
																											<input type="radio" name="aprvlstsidrom[<?=$rvCekDataEQx["KODE_TIPEBARANG"];?>]" id="<?='aprvlstsidrom'.$rvCekDataEQx["KODE_TIPEBARANG"];?>" value="<?='1'?>">&nbsp;<?='Approved'?>&nbsp;	
																																															
																																															
																						<? }elseif(($rCekStatusAreaMgrX->KODE_TIPEBARANG == $rvCekDataEQx["KODE_TIPEBARANG"])&&(($rCekStatusAreaMgrX->TICKETAPPROVALSTATUSID_AM=='1')&&($rCekStatusAreaMgrX->TICKETAPPROVALSTATUSID_ROM=='2'))){ ?>		
																						<? #}elseif($rCekStatusAreaMgrX->TICKETAPPROVALSTATUSID_AM=='1'){ ?>		
																						&nbsp;<b>For Action :</b>	<br>																									
																											<input type="radio" name="aprvlstsidrom[<?=$rvCekDataEQx["KODE_TIPEBARANG"];?>]" id="<?='aprvlstsidrom'.$rvCekDataEQx["KODE_TIPEBARANG"];?>" value="<?='0'?>">&nbsp;<?='Disapprove'?>&nbsp;
																											<input type="radio" name="aprvlstsidrom[<?=$rvCekDataEQx["KODE_TIPEBARANG"];?>]" id="<?='aprvlstsidrom'.$rvCekDataEQx["KODE_TIPEBARANG"];?>" value="<?='1'?>">&nbsp;<?='Approved'?>&nbsp;																						
																						<? }elseif(($rCekStatusAreaMgrX->KODE_TIPEBARANG == $rvCekDataEQx["KODE_TIPEBARANG"])&&($rCekStatusAreaMgrX->TICKETAPPROVALSTATUSID_AM=='0')){ ?>		
																						<? #}elseif($rCekStatusAreaMgrX->TICKETAPPROVALSTATUSID_AM=='1'){ ?>		
																									<font color="red"><b><center>SORRY, THIS ITEM WAS NOT APPROVED BY (AREA MANAGER/AM)</center></b></font>																							
																											<input type="radio" name="aprvlstsidrom[<?=$rvCekDataEQx["KODE_TIPEBARANG"];?>]" id="<?='aprvlstsidrom'.$rvCekDataEQx["KODE_TIPEBARANG"];?>" value="<?='-'?>" style="pointer-events:none;display:none;" checked>&nbsp;<!--?='Disapprove'?-->&nbsp;
																											
																										
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

