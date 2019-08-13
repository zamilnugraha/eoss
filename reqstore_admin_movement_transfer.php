
<? 
			$cone =  mysql_connect('localhost','usrservicedesk','kfc14022');
					mysql_select_db('servicedesk',$cone);
					
	$qCekReffTicket = mysql_query("SELECT ticketreference_id, ticketreferencestatus_id FROM ITH_TICKET_HEADER 
	WHERE ticket_id = '".$_GET['pid']."'");
	$rCekReffTicket = mysql_fetch_object($qCekReffTicket);
	#if($rCekReffTicket->ticketreference_id=='')
	#if($rCekReffTicket->ticketreferencestatus_id=='1')
	if(($rCekReffTicket->ticketreferencestatus_id!='1')||($rCekReffTicket->ticketreferencestatus_id==' '))
	{ 

	/* ########################## REQUEST EQUIPMENT FROM STORE (BUKAN REFERENCE TIKET) ######################## */
?>

	
		<!--? if($dtmyticket->statuslaporan_name=='Request Store'){ ?-->
	<? 
			$qCekStatusLaporan = mysql_query("SELECT ITH_TICKET_HEADER.statuslaporan_id, ITH_STATUSLAPORAN.statuslaporan_name FROM ITH_TICKET_HEADER
			JOIN ITH_STATUSLAPORAN ON ITH_TICKET_HEADER.statuslaporan_id = ITH_STATUSLAPORAN.statuslaporan_id
			WHERE ITH_TICKET_HEADER.ticket_id = '".$_GET['pid']."'");
			$dtmyticket = mysql_fetch_object($qCekStatusLaporan);
	?>
	<? if($dtmyticket->statuslaporan_name=='Request')
	{ ?>
		<!--<font color="#ffffff"><b><u>REQUEST EQUIPMENT FROM STORE </u></b></font>-->
		<? 
			$qCekStatusKeteranganData = mysql_query("SELECT ITH_USER.user_realname, ITH_TIPEBARANG_KODE.keterangan,ITH_TIPEBARANG_KODE.ticket_id, 
										ITH_TIPEBARANG_KODE.tickettransferto_outletcode, ITH_TIPEBARANG_KODE.request_by
										FROM ITH_TIPEBARANG_KODE 
										JOIN ITH_USER ON ITH_TIPEBARANG_KODE.request_by = ITH_USER.user_nik
										WHERE ITH_TIPEBARANG_KODE.ticket_id = '".$_GET['pid']."'");
			$detailmyticketKeteranganData = mysql_fetch_object($qCekStatusKeteranganData);
		?>
		<? if($detailmyticketKeteranganData->keterangan=='ADDING REQUEST'){ ?>
			<font color="#ffffff"><b><u>REQUEST NEW EQUIPMENT FROM STORE </u></b></font>
		<? }elseif($detailmyticketKeteranganData->keterangan=='REPLACEMENT REQUEST'){ ?>
			<font color="#ffffff"><b><u>REQUEST EQUIPMENT REPLACEMENT FROM STORE </u></b></font>
		<? }elseif(($detailmyticketKeteranganData->keterangan=='MOVE TO WAREHOUSE')){ ?>
			<font color="#ffffff"><b><u>REQUEST EQUIPMENT MOVEMENT FROM STORE ZZZ </u></b></font>
		<? }elseif(($detailmyticketKeteranganData->keterangan=='MOVE TO OTHER STORE')&&($detailmyticketKeteranganData->request_by==$_GET['uid'])){ ?>
			<font color="#ffffff"><b><u>TRANFER MOVEMENT ITEM FROM STORE <?=$detailmyticketKeteranganData->user_realname?> </u></b></font>
		<? } ?>			
		<font color="#ffffff"><b><u>
		(
			<!--?
				$qcekrowtipebrgsx = mysql_query("SELECT COUNT(ITH_TIPEBARANG_KODE.TICKET_ID) TJUMLAH
											     FROM ITH_TIPEBARANG_KODE
											     JOIN ITH_TIPEBRG ON ITH_TIPEBARANG_KODE.KODE_TIPEBRG = ITH_TIPEBRG.KODE_TIPEBRG
											     WHERE ITH_TIPEBARANG_KODE.TICKET_ID = '".$_GET['pid']."'");
				$rcekrowtipebrgsx = mysql_fetch_object($qcekrowtipebrgsx);
				$qcektipebrgsx = mysql_query("SELECT DISTINCT ITH_TIPEBARANG_KODE.TICKET_ID, ITH_TIPEBARANG_KODE.KODE_TIPEBRG, ITH_TIPEBRG.NAMA_TIPEBRG FROM ITH_TIPEBARANG_KODE
											  JOIN	ITH_TIPEBRG ON ITH_TIPEBARANG_KODE.KODE_TIPEBRG = ITH_TIPEBRG.KODE_TIPEBRG
											  WHERE ITH_TIPEBARANG_KODE.TICKET_ID = '".$_GET['pid']."'");
				while($rcektipebrgsx = mysql_fetch_object($qcektipebrgsx)){
				
			?>
				<!--? if($rcekrowtipebrgsx->TJUMLAH==1){ ?-->
						<!--<font color="#ffffff"><!?=strtoupper($rcektipebrgsx->NAMA_TIPEBRG);?></font>-->
				<!--? }elseif($rcekrowtipebrgsx->TJUMLAH>1){ ?>
						<font color="#ffffff"><!?='-'.strtoupper($rcektipebrgsx->NAMA_TIPEBRG).'-';?></font>
				<!? } ?-->
			<!--? } ?-->
		<? 
			$connex = mysql_connect("localhost","usrservicedesk","kfc14022");
					  mysql_select_db("servicedesk",$con); //@session_start();	
			$qvCekDataHeaderEQx = mysql_query("SELECT DISTINCT TICKET_ID, TICKETTRANSFERTO_OUTLETCODE,
											   NO_PERMINTAAN,REQUEST_BY
											   FROM ITH_TIPEBARANG_KODE 
											   WHERE TICKET_ID  = '".$_GET['pid']."'");		
			$rvCekDataHeaderEQx = mysql_fetch_object($qvCekDataHeaderEQx);	
			echo 'Request Number : '.$rvCekDataHeaderEQx ->NO_PERMINTAAN;
		?>	
		) </u></b></font>
		<? if($rvCekDataHeaderEQx->REQUEST_BY == $_GET['uid']){ ?>
			<script src="jquery/jquery.min.js"></script>
			<!--<script>
				$(document).ready(function()
				{
					$("#equipmentsrc").on("keyup", function() 
					{
						var value = $(this).val().toLowerCase();
						$("#myCodes tr").filter(function() 
						{
							$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
						});
					});
					$("#smallwaresrc").on("keyup", function() 
					{
						var value = $(this).val().toLowerCase();
						$("#myCodes tr").filter(function() 
						{
							$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
						});
					});
					$("#sparepartsrc").on("keyup", function() 
					{
						var value = $(this).val().toLowerCase();
						$("#myCodes tr").filter(function() 
						{
							$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
						});
					});
				});
			</script>-->
			<style>
				table.blueTable 
				{
					border: 1px solid #1C6EA4; background-color: #EEEEEE; width: 100%;
					text-align: left; border-collapse: collapse; overflow-x:scroll;height:100px; position:relative;
				}
				table.blueTable td, table.blueTable th 
				{
					border: 1px solid #AAAAAA; padding: 3px 2px;				  
				}
				table.blueTable tbody td { font-size: 13px; }
				table.blueTable tr:nth-child(even) { background: #D0E4F5; }
				table.blueTable thead 
				{ 
					background: #1C6EA4; background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
					background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
					background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
					border-bottom: 2px solid #444444;
				}
				table.blueTable thead th 
				{
					font-size: 12px; text-align:center; font-weight: bold; color: #000; border-left: 2px solid #D0E4F5;
				}
				table.blueTable thead th:first-child { border-left: none; }
				table.blueTable tfoot 
				{ 
					font-size: 14px; font-weight: bold; color: #000; background: #D0E4F5;
					background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
					background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
					background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
					border-top: 2px solid #444444;
				}
				table.blueTable tfoot td { font-size: 14px; }
				table.blueTable tfoot .links { text-align: right; }
				table.blueTable tfoot .links a{ display: inline-block; background: #1C6EA4; color: #000; padding: 2px 8px; border-radius: 5px; }			
				</style>
				<!--<input id="equipmentsrc" type="text" placeholder="Search..">-->
					<form name="myForm" id="myForm" target="_myFrame" action="index.php?m=form&a=srvfb&pid=<?=$_GET['pid']?>" method="POST" height="auto">
					<table class="blueTable" border="1"> 
						<thead>
							<tr>
								<?  
									$objConnect = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
								?>														
									<th width="18%" style="color:#ffffff;">Item Request</th>
									<th width="7%" style="color:#ffffff;">Date Of<br>Request</th>									
									<!--<th width="5%" style="color:#ffffff;">Transfer<br>To</th>-->						
									<th width="25%" style="color:#ffffff;">Approval<br>Status</th>	
									<th width="7%" style="color:#ffffff;">Received<br>By</th>	
									<th width="26%" style="color:#ffffff;">Date<br>Received</th>							
									<!--<th width="20%" style="color:#ffffff;">Date<br>Input</th>-->										
									
							</tr>													
						</thead>
					</table>								
					<div style="width:100%; height:350px; overflow:auto;position:relative;color:#000000;">
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
																WHERE ITH_TIPEBARANG_KODE.TICKET_ID = '".$_GET['pid']."' 
																");
									$rcektipebrg = mysql_fetch_object($qcektipebrg);									
									$qcektipebrgdetail = mysql_query("SELECT DISTINCT ITH_TICKET_HEADER.TICKET_ID, ITH_TICKET_HEADER.KODE_TIPEBRG 
															FROM ITH_TICKET_HEADER 
															JOIN ITH_TIPEBRG ON ITH_TICKET_HEADER.KODE_TIPEBRG = ITH_TIPEBRG.KODE_TIPEBRG
															WHERE ITH_TICKET_HEADER.KODE_TIPEBRG != ''
															AND ITH_TIPEBARANG_KODE.TICKET_ID = '".$_GET['pid']."' 
															");
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
														/**	
															$objConnectShowEQ = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
															$qShowEQ = "select FSDORDEC.NO_PERMINTAAN, FSDORDEC.TGL_PERMINTAAN, FSDORDEC.TGL_BUAT_FSD, FSDORDEC.KODE_BARANG, 
															FSDBRGEQ.NAMA_BARANG,
															FSDORDEC.JUMLAH_PERMINTAAN, FSDORDEC.JUMLAH_ORDER, FSDORDEC.KIRIM_DARI_STOK, FSDORDEC.TGL_DISETUJUI, 
															FSDORDEC.NOMOR_RO, FSDORDEC.STATUS_PERMINTAAN
															from FSDORDEC 
															JOIN FSDBRGEQ ON FSDORDEC.KODE_BARANG = FSDBRGEQ.KODE_BARANG
															where NO_PERMINTAAN = '".$rvCekDataEQ->NO_PERMINTAAN."'
															AND JUMLAH_PERMINTAAN IS NOT NULL order by FSDORDEC.TGL_PERMINTAAN DESC";  
															$qobjParseShowEQ = oci_parse ($objConnectShowEQ, $qShowEQ);  
															oci_execute ($qobjParseShowEQ,OCI_DEFAULT);
														**/
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
																						ITH_TIPEBARANG_KODE.TICKETAPPROVALDATE_AM,ITH_TIPEBARANG_KODE.TICKETAPPROVALTIME_AM,
																						ITH_TIPEBARANG_KODE.TICKETAPPROVALSTATUSID_ROM, ITH_TIPEBARANG_KODE.TICKETAPPROVALBYNIK_ROM, 
																						ITH_TIPEBARANG_KODE.TICKETAPPROVALBYNAME_ROM,
																						ITH_TIPEBARANG_KODE.TICKETAPPROVALDATE_ROM,ITH_TIPEBARANG_KODE.TICKETAPPROVALTIME_ROM,
																						ITH_TIPEBARANG_KODE.TICKETAPPROVALSTATUSID_GMO, ITH_TIPEBARANG_KODE.TICKETAPPROVALBYNIK_GMO, 
																						ITH_TIPEBARANG_KODE.TICKETAPPROVALBYNAME_GMO,
																						ITH_TIPEBARANG_KODE.TICKETAPPROVALDATE_GMO,ITH_TIPEBARANG_KODE.TICKETAPPROVALTIME_GMO,
																						ITH_TICKET_HEADER.TICKET_CREATEBY,ITH_TIPEBARANG_KODE.KETERANGAN,
																						ITH_TIPEBARANG_KODE.TICKET_NEEDASSIST,
																						ITH_TIPEBARANG_KODE.TICKETTRANSFERTO_OUTLETCODE,
																						ITH_TIPEBARANG_KODE.TICKETTRANSFERTO_OUTLETNAME
																						FROM ITH_TIPEBARANG_KODE  
																						JOIN ITH_TICKET_HEADER ON ITH_TIPEBARANG_KODE.TICKET_ID = ITH_TICKET_HEADER.TICKET_ID
																						JOIN ITH_USER ON ITH_TICKET_HEADER.TICKET_CREATEBY = ITH_USER.USER_NIK
																						WHERE ITH_TIPEBARANG_KODE.TICKET_ID = '".$_GET['pid']."'");
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
															###echo "<br>TEST-2....";
															#echo "<br>OP, AM Approval Done ....";
														/***	
															$con = mysql_connect("localhost","usrservicedesk","kfc14022");
																		mysql_select_db("servicedesk",$con); //@session_start();	
															$qvCekDataEQ = mysql_query("SELECT DISTINCT ITH_TIPEBARANG_KODE.TICKET_ID, ITH_TIPEBARANG_KODE.KODE_TIPEBRG, 
																						ITH_TIPEBRG.NAMA_TIPEBRG, ITH_TIPEBARANG_KODE.NO_PERMINTAAN FROM ITH_TIPEBARANG_KODE
																						JOIN ITH_TIPEBRG ON ITH_TIPEBARANG_KODE.KODE_TIPEBRG = ITH_TIPEBRG.KODE_TIPEBRG
																						WHERE ITH_TIPEBARANG_KODE.TICKET_ID = '".$_GET['pid']."'");
															$rvCekDataEQ = mysql_fetch_object($qvCekDataEQ);												
														***/
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
														/***
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
														***/
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
																						ITH_TICKET_HEADER.TICKET_CREATEBY,ITH_TIPEBARANG_KODE.KETERANGAN,
																						ITH_TIPEBARANG_KODE.TICKET_NEEDASSIST,
																						ITH_TIPEBARANG_KODE.TICKETTRANSFERTO_OUTLETCODE,
																						ITH_TIPEBARANG_KODE.TICKETTRANSFERTO_OUTLETNAME
																						FROM ITH_TIPEBARANG_KODE  
																						JOIN ITH_TICKET_HEADER ON ITH_TIPEBARANG_KODE.TICKET_ID = ITH_TICKET_HEADER.TICKET_ID
																						JOIN ITH_USER ON ITH_TICKET_HEADER.TICKET_CREATEBY = ITH_USER.USER_NIK
																						WHERE ITH_TIPEBARANG_KODE.TICKET_ID = '".$_GET['pid']."'");
														
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
																<td width="18%">
																<div style="margin-left:20px;"><?=$rvCekDataEQx["KODE_TIPEBARANG"].' - '.$rvCekDataEQx["NAMA_TIPEBARANG"];?>
																</div>
																  
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
																	
																			<li><b> Book Age B1 : <?=$rvSCatReplaceOldItem->UMURBUKUOLDITEM?></b></li> 
																			<li><b> Book Value : <font color="orange"><?='<strong>Rp.&nbsp;'.number_format($rvSCatReplaceOldItem->NILAIBUKUOLDITEM, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?></font></b></li>
																			<!--<li><b> New Price : <font color="orange"><!?='<strong>Rp.&nbsp;'.number_format($rvSCatReplaceOldItem->ITEMPRICEOLDITEM, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?></font></b></li>-->
																		<? 
																			$qCekStatusKeteranganData = mysql_query("SELECT DISTINCT keterangan FROM ITH_TIPEBARANG_KODE 
																													 WHERE ticket_id = '".$_GET['pid']."' AND kode_tipebarang = '".$rvCekDataEQx["KODE_TIPEBARANG"]."'");
																			$detailmyticketKeteranganData = mysql_fetch_object($qCekStatusKeteranganData);
																			$subkalimat = ucwords(strtolower(substr($detailmyticketKeteranganData->keterangan,8)));
																		?>
																		<!--? if($detailmyticketKeteranganData->keterangan=='MOVE TO WAREHOUSE'){ ?-->
																			<!--<li><b> Move To : <font color="orange"><!?=$subkalimat;?> </b></font></li>-->
																		<!--? }elseif($detailmyticketKeteranganData->keterangan=='MOVE TO OTHER STORE'){ ?-->
																			<!--<li><b> Move To : <font color="orange"><!?=$subkalimat;?> </b></font></li>-->
																		<!--? } ?-->																		 
																	 <? } ?>	
																  </ul>
																  <? }elseif($cekItemName == 'NEW'){ ?>	
																	<ul style="margin-bottom:-5px;">
																   <? 	$objConnectReplaceOldItem = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
																		$qvSCatReplaceOldItem = "SELECT DISTINCT 																			
																			 FSDMSTTRX_STORENEW.UMUR_BUKU AS UMURBUKUOLDITEM,
																			 FSDMSTTRX_STORENEW.NILAI_BUKU AS NILAIBUKUOLDITEM,
																			 FSDMSTTRX_STORENEW.ITEM_PRICE AS ITEMPRICEOLDITEM,
																			 FSDBRGEQASSET_NEW.NOMOR_TAGING AS NOTAGINGITEM
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
																		<li><b> Book Age B2 : <?=$rvSCatReplaceOldItem->UMURBUKUOLDITEM?></b></li> 
																		<li><b> Book Value : <font color="orange"><?='<strong>Rp.&nbsp;'.number_format($rvSCatReplaceOldItem->NILAIBUKUOLDITEM, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?></font></b></li>
																		<!--<li><b> New Price Z : <font color="orange"><!?='<strong>Rp.&nbsp;'.number_format($rvSCatReplaceOldItem->ITEMPRICEOLDITEM, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?></font></b></li>-->
																		<li><b> Tagging Number : <font color="orange"><?=$rvSCatReplaceOldItem->NOTAGINGITEM?></font></b></li>
																			<? } ?>
																		<!--? 
																			$qCekStatusKeteranganData = mysql_query("SELECT DISTINCT keterangan FROM ITH_TIPEBARANG_KODE 
																													 WHERE ticket_id = '".$_GET['pid']."' AND kode_tipebarang = '".$rvCekDataEQx["KODE_TIPEBARANG"]."'");
																		    $detailmyticketKeteranganData = mysql_fetch_object($qCekStatusKeteranganData);
																			$subkalimat = ucwords(strtolower(substr($detailmyticketKeteranganData->keterangan,8)));
																		?>
																		<!--? if($detailmyticketKeteranganData->keterangan=='MOVE TO WAREHOUSE'){ ?>
																			<li><b> Move To : <font color="orange"><!--?=$subkalimat;?> </b></font></li>
																		<!--? }elseif($detailmyticketKeteranganData->keterangan=='MOVE TO OTHER STORE'){ ?>
																			<li><b> Move To : <font color="orange"><!--?=$subkalimat;?> </b></font></li>
																		<!--? } ?-->																	   
																	  <? } ?>	
																	  </ul>
																	<? } ?>	
																 <? } ?>	
																<? 
																	$objConnectReplace = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
																/*	$qvSCatReplace2 = "SELECT DISTINCT 
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
																			 WHERE FSDMSTTRX_STORENEW.OUTLET_CODE = '".$_SESSION['user_nik']."' AND 
																			 FSDMSTTRX_STORENEW.ITEM_CODE = '".$rvCekDataEQx["KODE_TIPEBARANG"]."' AND FSDBRGEQASSET_NEW.ITEM_NAME LIKE '%OLD'";
																*/	$qvSCatReplace2 = "SELECT DISTINCT 
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
																<div style="margin-top:-35px;"><b><u>REPLACEMENT ITEM : </u></b></div>
																<ul style="margin-bottom:-5px;">
																<li><b> <font color="orange"><?=$rvSCatReplace2->ITEMCODEREPLACE;?> - <?=$rvSCatReplace2->ITEMNAMEREPLACE;?></font></b></li>
																<!--<li><b> Age		  : <font color="orange"><!?=$rvSCatReplace2->UMURBUKUREPLACE;?></font></b></li>
																<li><b> Book Value: <font color="orange"><!?='<strong>Rp.&nbsp;'.number_format($rvSCatReplace2->NILAIBUKUREPLACE, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?></font></b></li>-->
																<!--<li><b> New Price X : <font color="orange"><!?='<strong>Rp.&nbsp;'.number_format($rvSCatReplace2->ITEMPRICEREPLACE, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?></font></b></li>-->
																<li><b> Tagging Number : <font color="orange"><?=$rvSCatReplace2->NOTAGREPLACE;?></font></b></li>
																</ul>
																	<? } ?>
																</td>																
																<td width="7%">
																	<center><?=$rvCekDataEQx["TICKET_CREATEDATE"];?></center>
																</td>

																<td width="25%">								
																	<? if($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='2'){ ?>																		
																		<?='&nbsp;&nbsp;<b>Approval Status :</b>&nbsp;&nbsp;Not Yet Responded.';?><br>
																	<? }elseif($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='1'){ ?>																		
																		<font color="blue"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp;Approved.</b>';?></font><br>
																	<? }elseif($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='-'){ ?>																		
																		<font color="orange"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp;Not Needed.</b>';?></font><br>
																	<? }elseif($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='0'){ ?>																		
																		<font color="red"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp;Disapproved.</b>';?></font><br>
																	<? } ?>																
																																		
																	<?='&nbsp;&nbsp;<b>Approval By :</b> '.$rvCekDataEQx["TICKETAPPROVALBYNAME_AM"];?><br>																	
																	<?='&nbsp;&nbsp;<b>Approval Date :</b> '.$rvCekDataEQx["TICKETAPPROVALDATE_AM"];?><br>																	
																	<?='&nbsp;&nbsp;<b>Approval Time :</b> '.$rvCekDataEQx["TICKETAPPROVALTIME_AM"];?><hr>
																<!--</td>
																<td width="20%">-->																	
																	<? if(($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='1')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='2')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]=='-')){ ?>																		
																		<font color="black"><?='&nbsp;&nbsp;<b>Approval Status :</b>&nbsp;&nbsp;Not Yet Responded.';?></font><br>																
																	<? }elseif(($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='0')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='2')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]=='-')){ ?>																		
																		<font color="orange"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp;Not Needed.</b>';?></font><br>																
																	<? }elseif(($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='0')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='-')){ ?>																		
																		<font color="orange"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp;Not Needed.</b>';?></font><br>
																	<? }elseif(($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='2')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='-')){ ?>																		
																		<font color="black"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp;-</b>';?></font><br>
																	<? }elseif($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='1'){ ?>																		
																		<font color="blue"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp;Approved.</b>';?></font><br>
																	<? }elseif((($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='1')||($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='-'))&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='1')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]=='1')){ ?>																		
																		<font color="blue"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp;Approved.</b>';?></font><br>	
																	<? }elseif($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='0'){ ?>																		
																		<font color="red"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp;Disapproved.</b>';?></font><br>
																	<? }else{ ?> <font color="orange"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp;Not Needed.</b>';?></font><br>	
																	<? } ?>																		
																	<?='&nbsp;&nbsp;<b>Approval By :</b> '.$rvCekDataEQx["TICKETAPPROVALBYNAME_ROM"];?><br>																	
																	<?='&nbsp;&nbsp;<b>Approval Date :</b> '.$rvCekDataEQx["TICKETAPPROVALDATE_ROM"];?><br>																	
																	<?='&nbsp;&nbsp;<b>Approval Time :</b> '.$rvCekDataEQx["TICKETAPPROVALTIME_ROM"];?><hr>
																<!--</td>
																<td width="20%">-->																	
																	<? if(($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]=='2')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='1')){ ?>																		
																		<font color="black"><?='&nbsp;&nbsp;<b>Approval Status :</b>&nbsp;&nbsp;Not Yet Responded.';?></font><br>																
																	<? }elseif(($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]=='2')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='0')){ ?>																		
																		<font color="orange"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp;Not Needed.</b>';?></font><br>																
																	<? }elseif(($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='0')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='0')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]=='-')){ ?>																		
																		<font color="orange"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp;Not Needed.</b>';?></font><br>
																	<? }elseif(($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='0')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='2')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]=='-')){ ?>																		
																		<font color="orange"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp;Not Needed</b>';?></font><br>
																	<? }elseif($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]=='1'){ ?>																		
																		<font color="blue"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp;Approved.</b>';?></font><br>
																	<? }elseif((($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='1')||($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='-'))&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='1')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]=='1')){ ?>																		
																		<font color="blue"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp;Approved.</b>';?></font><br>																	
																	<? }elseif($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]=='0'){ ?>																		
																		<font color="red"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp;Disapproved.</b>';?></font><br>
																	<? }elseif(($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]!='2')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]!='2')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]!='2')){ ?>
																		<font color="orange"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp; Not Needed</b>';?></font><br>																			
																	<? }elseif(($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='2')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='-')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]=='-')){ ?> 
																		 <font color="#000"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp; -</b>';?></font><br>																			
																	<? }elseif(($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='0')&&(($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='-')||($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='2'))&&
																	   (($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]=='2')||($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]=='-'))){ ?> 
																		 <font color="orange"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp; Not Needed</b>';?></font><br>																			
																	<? }else{ ?> <font color="#000"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp; -</b>';?></font><br>																			
																	<? } ?>																			
																	<?='&nbsp;&nbsp;<b>Approval By :</b> '.$rvCekDataEQx["TICKETAPPROVALBYNAME_GMO"];?><br>																	
																	<?='&nbsp;&nbsp;<b>Approval Date :</b> '.$rvCekDataEQx["TICKETAPPROVALDATE_GMO"];?><br>																	
																	<?='&nbsp;&nbsp;<b>Approval Time :</b> '.$rvCekDataEQx["TICKETAPPROVALTIME_GMO"];?>
																</td>																
																<td width="6%">																
																	<? 																			
																		$cekItemName = ucwords(strtolower(substr($rvCekDataEQx["KETERANGAN"],8))); 
																	?>	
																	<? if($cekItemName=='Warehouse'){ ?>
																			<center><font color="orange"><b><?=$cekItemName;?></b></font></center><br>																	
																			<? if($rvCekDataEQx["TICKET_NEEDASSIST"]=='YES'){ ?>
																				<center><font color="#000"><b><?='By : FSD';?></b></font></center><br>
																			<? }elseif($rvCekDataEQx["TICKET_NEEDASSIST"]=='NO'){ ?>
																				<center><font color="#000"><b><?='By : OPR';?></b></font></center><br>
																			<? } ?>
																	<? }elseif($cekItemName=='Other Store'){ ?>
																			<center><font color="brown"><b><?=ucwords(strtolower($rvCekDataEQx["TICKETTRANSFERTO_OUTLETNAME"]));?></b></font></center><br>																	
																			<? if($rvCekDataEQx["TICKET_NEEDASSIST"]=='YES'){ ?>
																				<center><font color="#000"><b><?='By : FSD';?></b></font></center><br>
																			<? }elseif($rvCekDataEQx["TICKET_NEEDASSIST"]=='NO'){ ?>
																				<center><font color="#000"><b><?='By : OPR';?></b></font></center><br>
																			<? } ?>
																	<? } ?>															
																</td>
																<td width="25%">
																<!--  <link href="./requestlistuser/css/bootstrap.min.css" rel="stylesheet" media="screen">
																-->														 
																<style>
																textarea, input[type="text"], input[type="password"], 
																input[type="datetime"], input[type="datetime-local"], input[type="date"], 
																input[type="month"], input[type="time"], input[type="week"], 
																input[type="number"], input[type="email"], input[type="url"],
																input[type="search"], input[type="tel"], input[type="color"], 
																.uneditable-input 
																{
																	background-color: #ffffff;
																	border: 1px solid #cccccc;
																	transition: border linear .2s, box-shadow linear .2s;
																}

																select, textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], 
																input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], 
																input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], 
																.uneditable-input 
																{
																	display: inline-block;
																	height: 20px;
																	padding: 4px 6px;
																	margin-bottom: 10px;
																	font-size: 16px;
																	font-family: Verdana,Helvetica,sans-serif;
																	line-height: 20px;
																	color: #555555;
																	border-radius: 4px;
																	vertical-align: middle;
																}																
																</style>
																  <script type="text/javascript" src="./requestlistuser/scripts/jquery.min.js"></script>
															  	  <script type="text/javascript" src="./requestlistuser/scripts/jquery.form.js"></script>																
																  <script type="text/javascript" src="./jquery/jquery.min.v11.js"></script>

																  <script type="text/javascript" src="./requestlistuser/js/jquery.timepicker.js"></script>
																  <link rel="stylesheet" type="text/css" href="./requestlistuser/js/jquery.timepicker.css" />

																  <script type="text/javascript" src="./requestlistuser/js/lib/bootstrap-datepicker.js"></script>
																  <link rel="stylesheet" type="text/css" href="./requestlistuser/js/lib/bootstrap-datepicker.css" />

																  <script type="text/javascript" src="./requestlistuser/js/lib/site.js"></script>
																  <link rel="stylesheet" type="text/css" href="./requestlistuser/js/lib/site.css" />
																	<!--<script src="http://jonthornton.github.io/Datepair.js/dist/datepair.js"></script>
																	<script src="http://jonthornton.github.io/Datepair.js/dist/jquery.datepair.js"></script>-->
																	<script src="./requestlistuser/js/datepair.js"></script>
																	<script src="./requestlistuser/js/jquery.datepair.js"></script>
																
																<? 
																	$qCekDataInputan = mysql_query("SELECT DISTINCT transfer_by, transfer_date, tickettransferto_outletcode, tickettransferto_outletname, ticket_needassist 
																									FROM ITH_TIPEBARANG_KODE 
																									WHERE ticket_id ='".$_GET['pid']."' 
																									AND kode_tipebarang = '".$rvCekDataEQx["KODE_TIPEBARANG"]."'");
																	while($rCekDataInputan = mysql_fetch_object($qCekDataInputan)){
																	$receivedbyName = preg_replace('/[^A-Za-z0-9\  ]/', '', $rCekDataInputan->transfer_by);
																	$receivedbyNames = ucwords(strtolower($receivedbyName));									
																?>

																		<? if($rCekDataInputan->transfer_date!='') { ?>
																		&nbsp;&nbsp;<b>Item&nbsp;Status &nbsp;:</b>&nbsp;&nbsp;<?='Transferred By FSD '.ucwords(strtolower($rCekDataInputan->tickettransferto_outletname))?><br>
																		&nbsp;&nbsp;<b>Transferred&nbsp;Date&nbsp;:</b>&nbsp;&nbsp;<?=$rCekDataInputan->transfer_date?><br>
																		&nbsp;&nbsp;<b>Transferred&nbsp;By&nbsp;:</b>&nbsp;&nbsp;<?=strtoupper($receivedbyNames)?>		
																		<? }elseif($rCekDataInputan->transfer_date=='') { ?>
																		&nbsp;&nbsp;<b>Item&nbsp;Status&nbsp;:</b>&nbsp;&nbsp;<?='Not Yet Responded'?><br>
																		&nbsp;&nbsp;<b>Transferred&nbsp;Date&nbsp;:</b>&nbsp;&nbsp;<?='-'?><br>
																		&nbsp;&nbsp;<b>Transferred&nbsp;By&nbsp;:</b>&nbsp;&nbsp;<?='-'?>		
																		<? } ?>
																	
																	<? } ?>																		
																</td>	
																<!--<td width="20%">TEST</td>-->	
															</tr>	
														<? } ?>									

									
									<!-- SMALLWARE REQUEST ITEM -->	
									<? #} ?>	

							</tbody>
						</table>
						<? if(($rCekDataInputan->transfer_date=='')&&($rCekDataInputan->ticket_needassist=='NO')){ ?>	
						<input type="submit" value="Submit" style="margin-left:1020px;" />	
						<? } ?>
					</form>	
					</div>	

		<? }elseif($rvCekDataHeaderEQx->REQUEST_BY != $_GET['uid']){ ?>
			
		
			<script src="jquery/jquery.min.js"></script>
			<!--<script>
				$(document).ready(function()
				{
					$("#equipmentsrc").on("keyup", function() 
					{
						var value = $(this).val().toLowerCase();
						$("#myCodes tr").filter(function() 
						{
							$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
						});
					});
					$("#smallwaresrc").on("keyup", function() 
					{
						var value = $(this).val().toLowerCase();
						$("#myCodes tr").filter(function() 
						{
							$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
						});
					});
					$("#sparepartsrc").on("keyup", function() 
					{
						var value = $(this).val().toLowerCase();
						$("#myCodes tr").filter(function() 
						{
							$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
						});
					});
				});
			</script>-->
			<style>
				table.blueTable 
				{
					border: 1px solid #1C6EA4; background-color: #EEEEEE; width: 100%;
					text-align: left; border-collapse: collapse; overflow-x:scroll;height:100px; position:relative;
				}
				table.blueTable td, table.blueTable th 
				{
					border: 1px solid #AAAAAA; padding: 3px 2px;				  
				}
				table.blueTable tbody td { font-size: 13px; }
				table.blueTable tr:nth-child(even) { background: #D0E4F5; }
				table.blueTable thead 
				{ 
					background: #1C6EA4; background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
					background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
					background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
					border-bottom: 2px solid #444444;
				}
				table.blueTable thead th 
				{
					font-size: 12px; text-align:center; font-weight: bold; color: #000; border-left: 2px solid #D0E4F5;
				}
				table.blueTable thead th:first-child { border-left: none; }
				table.blueTable tfoot 
				{ 
					font-size: 14px; font-weight: bold; color: #000; background: #D0E4F5;
					background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
					background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
					background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
					border-top: 2px solid #444444;
				}
				table.blueTable tfoot td { font-size: 14px; }
				table.blueTable tfoot .links { text-align: right; }
				table.blueTable tfoot .links a{ display: inline-block; background: #1C6EA4; color: #000; padding: 2px 8px; border-radius: 5px; }			
				</style>
				<!--<input id="equipmentsrc" type="text" placeholder="Search..">-->
				<div style="width:100%; height:auto; overflow:auto;position:relative;color:#000000;"> 
					<form name="myForm" id="myForm" target="_myFrame" action="index.php?m=form&a=strfb&pid=<?=$_GET['pid']?>&uid=<?=$_GET['uid']?>" method="POST" height="auto">
					<table class="blueTable" border="1"> 
						<thead>
							<tr>
								<?  
									$objConnect = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
								?>														
									<th width="18%" style="color:#ffffff;">Item Request</th>
									<th width="7%" style="color:#ffffff;">Date Of<br>Request</th>									
									<!--<th width="5%" style="color:#ffffff;">Transfer<br>To</th>-->						
									<th width="25%" style="color:#ffffff;">Approval<br>Status</th>	
									<th width="7%" style="color:#ffffff;">Transfer<br>To</th>	
									<th width="26%" style="color:#ffffff;">Transfer&nbsp;By And Date</th>							
									<!--<th width="20%" style="color:#ffffff;">Date<br>Input</th>-->										
									
							</tr>													
						</thead>
					</table>								
					<div style="width:100%; height:350px; overflow:auto;position:relative;color:#000000;">
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
																WHERE ITH_TIPEBARANG_KODE.TICKET_ID = '".$_GET['pid']."' 
																AND ITH_TIPEBARANG_KODE.TICKETTRANSFERTO_OUTLETCODE = '".$_GET['uid']."'");
									$rcektipebrg = mysql_fetch_object($qcektipebrg);									
									$qcektipebrgdetail = mysql_query("SELECT DISTINCT ITH_TICKET_HEADER.TICKET_ID, ITH_TICKET_HEADER.KODE_TIPEBRG 
															FROM ITH_TICKET_HEADER 
															JOIN ITH_TIPEBRG ON ITH_TICKET_HEADER.KODE_TIPEBRG = ITH_TIPEBRG.KODE_TIPEBRG
															WHERE ITH_TICKET_HEADER.KODE_TIPEBRG != ''
															AND ITH_TIPEBARANG_KODE.TICKET_ID = '".$_GET['pid']."' 
															AND ITH_TIPEBARANG_KODE.TICKETTRANSFERTO_OUTLETCODE = '".$_GET['uid']."'");
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
														/**	
															$objConnectShowEQ = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
															$qShowEQ = "select FSDORDEC.NO_PERMINTAAN, FSDORDEC.TGL_PERMINTAAN, FSDORDEC.TGL_BUAT_FSD, FSDORDEC.KODE_BARANG, 
															FSDBRGEQ.NAMA_BARANG,
															FSDORDEC.JUMLAH_PERMINTAAN, FSDORDEC.JUMLAH_ORDER, FSDORDEC.KIRIM_DARI_STOK, FSDORDEC.TGL_DISETUJUI, 
															FSDORDEC.NOMOR_RO, FSDORDEC.STATUS_PERMINTAAN
															from FSDORDEC 
															JOIN FSDBRGEQ ON FSDORDEC.KODE_BARANG = FSDBRGEQ.KODE_BARANG
															where NO_PERMINTAAN = '".$rvCekDataEQ->NO_PERMINTAAN."'
															AND JUMLAH_PERMINTAAN IS NOT NULL order by FSDORDEC.TGL_PERMINTAAN DESC";  
															$qobjParseShowEQ = oci_parse ($objConnectShowEQ, $qShowEQ);  
															oci_execute ($qobjParseShowEQ,OCI_DEFAULT);
														**/
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
																						ITH_TIPEBARANG_KODE.TICKETAPPROVALDATE_AM,ITH_TIPEBARANG_KODE.TICKETAPPROVALTIME_AM,
																						ITH_TIPEBARANG_KODE.TICKETAPPROVALSTATUSID_ROM, ITH_TIPEBARANG_KODE.TICKETAPPROVALBYNIK_ROM, 
																						ITH_TIPEBARANG_KODE.TICKETAPPROVALBYNAME_ROM,
																						ITH_TIPEBARANG_KODE.TICKETAPPROVALDATE_ROM,ITH_TIPEBARANG_KODE.TICKETAPPROVALTIME_ROM,
																						ITH_TIPEBARANG_KODE.TICKETAPPROVALSTATUSID_GMO, ITH_TIPEBARANG_KODE.TICKETAPPROVALBYNIK_GMO, 
																						ITH_TIPEBARANG_KODE.TICKETAPPROVALBYNAME_GMO,
																						ITH_TIPEBARANG_KODE.TICKETAPPROVALDATE_GMO,ITH_TIPEBARANG_KODE.TICKETAPPROVALTIME_GMO,
																						ITH_TICKET_HEADER.TICKET_CREATEBY,ITH_TIPEBARANG_KODE.KETERANGAN,
																						ITH_TIPEBARANG_KODE.TICKET_NEEDASSIST,
																						ITH_TIPEBARANG_KODE.TICKETTRANSFERTO_OUTLETCODE,
																						ITH_TIPEBARANG_KODE.TICKETTRANSFERTO_OUTLETNAME
																						FROM ITH_TIPEBARANG_KODE  
																						JOIN ITH_TICKET_HEADER ON ITH_TIPEBARANG_KODE.TICKET_ID = ITH_TICKET_HEADER.TICKET_ID
																						JOIN ITH_USER ON ITH_TICKET_HEADER.TICKET_CREATEBY = ITH_USER.USER_NIK
																						WHERE ITH_TIPEBARANG_KODE.TICKET_ID = '".$_GET['pid']."' AND
																						((ITH_TIPEBARANG_KODE.TICKETTRANSFERTO_OUTLETCODE ='".$_GET['uid']."' OR
																						ITH_TICKET_HEADER.TICKET_CREATEBY ='".$_SESSION['user_nik']."'))");
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
															###echo "<br>TEST-2....";
															#echo "<br>OP, AM Approval Done ....";
														/***	
															$con = mysql_connect("localhost","usrservicedesk","kfc14022");
																		mysql_select_db("servicedesk",$con); //@session_start();	
															$qvCekDataEQ = mysql_query("SELECT DISTINCT ITH_TIPEBARANG_KODE.TICKET_ID, ITH_TIPEBARANG_KODE.KODE_TIPEBRG, 
																						ITH_TIPEBRG.NAMA_TIPEBRG, ITH_TIPEBARANG_KODE.NO_PERMINTAAN FROM ITH_TIPEBARANG_KODE
																						JOIN ITH_TIPEBRG ON ITH_TIPEBARANG_KODE.KODE_TIPEBRG = ITH_TIPEBRG.KODE_TIPEBRG
																						WHERE ITH_TIPEBARANG_KODE.TICKET_ID = '".$_GET['pid']."'");
															$rvCekDataEQ = mysql_fetch_object($qvCekDataEQ);												
														***/
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
														/***
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
														***/
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
																						ITH_TICKET_HEADER.TICKET_CREATEBY,ITH_TIPEBARANG_KODE.KETERANGAN,
																						ITH_TIPEBARANG_KODE.TICKET_NEEDASSIST,
																						ITH_TIPEBARANG_KODE.TICKETTRANSFERTO_OUTLETCODE,
																						ITH_TIPEBARANG_KODE.TICKETTRANSFERTO_OUTLETNAME
																						FROM ITH_TIPEBARANG_KODE  
																						JOIN ITH_TICKET_HEADER ON ITH_TIPEBARANG_KODE.TICKET_ID = ITH_TICKET_HEADER.TICKET_ID
																						JOIN ITH_USER ON ITH_TICKET_HEADER.TICKET_CREATEBY = ITH_USER.USER_NIK
																						WHERE ITH_TIPEBARANG_KODE.TICKET_ID = '".$_GET['pid']."' AND
																						((ITH_TIPEBARANG_KODE.TICKETTRANSFERTO_OUTLETCODE ='".$_GET['uid']."' OR
																						ITH_TICKET_HEADER.TICKET_CREATEBY ='".$_SESSION['user_nik']."'))");
														
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
																<td width="18%">
																<div style="margin-left:20px;"><?=$rvCekDataEQx["KODE_TIPEBARANG"].' - '.$rvCekDataEQx["NAMA_TIPEBARANG"];?>
																</div>
																  
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
																	
																			<li><b> Book Age B1 : <?=$rvSCatReplaceOldItem->UMURBUKUOLDITEM?></b></li> 
																			<li><b> Book Value : <font color="orange"><?='<strong>Rp.&nbsp;'.number_format($rvSCatReplaceOldItem->NILAIBUKUOLDITEM, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?></font></b></li>
																			<!--<li><b> New Price : <font color="orange"><!?='<strong>Rp.&nbsp;'.number_format($rvSCatReplaceOldItem->ITEMPRICEOLDITEM, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?></font></b></li>-->
																		<? 
																			$qCekStatusKeteranganData = mysql_query("SELECT DISTINCT keterangan FROM ITH_TIPEBARANG_KODE 
																													 WHERE ticket_id = '".$_GET['pid']."' AND kode_tipebarang = '".$rvCekDataEQx["KODE_TIPEBARANG"]."'");
																			$detailmyticketKeteranganData = mysql_fetch_object($qCekStatusKeteranganData);
																			$subkalimat = ucwords(strtolower(substr($detailmyticketKeteranganData->keterangan,8)));
																		?>
																		<!--? if($detailmyticketKeteranganData->keterangan=='MOVE TO WAREHOUSE'){ ?-->
																			<!--<li><b> Move To : <font color="orange"><!?=$subkalimat;?> </b></font></li>-->
																		<!--? }elseif($detailmyticketKeteranganData->keterangan=='MOVE TO OTHER STORE'){ ?-->
																			<!--<li><b> Move To : <font color="orange"><!?=$subkalimat;?> </b></font></li>-->
																		<!--? } ?-->																		 
																	 <? } ?>	
																  </ul>
																  <? }elseif($cekItemName == 'NEW'){ ?>	
																	<ul style="margin-bottom:-5px;">
																   <? 	$objConnectReplaceOldItem = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
																		$qvSCatReplaceOldItem = "SELECT DISTINCT 																			
																			 FSDMSTTRX_STORENEW.UMUR_BUKU AS UMURBUKUOLDITEM,
																			 FSDMSTTRX_STORENEW.NILAI_BUKU AS NILAIBUKUOLDITEM,
																			 FSDMSTTRX_STORENEW.ITEM_PRICE AS ITEMPRICEOLDITEM,
																			 FSDBRGEQASSET_NEW.NOMOR_TAGING AS NOTAGINGITEM
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
																		<li><b> Book Age B2 : <?=$rvSCatReplaceOldItem->UMURBUKUOLDITEM?></b></li> 
																		<li><b> Book Value : <font color="orange"><?='<strong>Rp.&nbsp;'.number_format($rvSCatReplaceOldItem->NILAIBUKUOLDITEM, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?></font></b></li>
																		<!--<li><b> New Price Z : <font color="orange"><!?='<strong>Rp.&nbsp;'.number_format($rvSCatReplaceOldItem->ITEMPRICEOLDITEM, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?></font></b></li>-->
																		<li><b> Tagging Number : <font color="orange"><?=$rvSCatReplaceOldItem->NOTAGINGITEM?></font></b></li>
																			<? } ?>
																		<!--? 
																			$qCekStatusKeteranganData = mysql_query("SELECT DISTINCT keterangan FROM ITH_TIPEBARANG_KODE 
																													 WHERE ticket_id = '".$_GET['pid']."' AND kode_tipebarang = '".$rvCekDataEQx["KODE_TIPEBARANG"]."'");
																		    $detailmyticketKeteranganData = mysql_fetch_object($qCekStatusKeteranganData);
																			$subkalimat = ucwords(strtolower(substr($detailmyticketKeteranganData->keterangan,8)));
																		?>
																		<!--? if($detailmyticketKeteranganData->keterangan=='MOVE TO WAREHOUSE'){ ?>
																			<li><b> Move To : <font color="orange"><!--?=$subkalimat;?> </b></font></li>
																		<!--? }elseif($detailmyticketKeteranganData->keterangan=='MOVE TO OTHER STORE'){ ?>
																			<li><b> Move To : <font color="orange"><!--?=$subkalimat;?> </b></font></li>
																		<!--? } ?-->																	   
																	  <? } ?>	
																	  </ul>
																	<? } ?>	
																 <? } ?>	
																<? 
																	$objConnectReplace = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
																/*	$qvSCatReplace2 = "SELECT DISTINCT 
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
																			 WHERE FSDMSTTRX_STORENEW.OUTLET_CODE = '".$_SESSION['user_nik']."' AND 
																			 FSDMSTTRX_STORENEW.ITEM_CODE = '".$rvCekDataEQx["KODE_TIPEBARANG"]."' AND FSDBRGEQASSET_NEW.ITEM_NAME LIKE '%OLD'";
																*/	$qvSCatReplace2 = "SELECT DISTINCT 
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
																<div style="margin-top:-35px;"><b><u>REPLACEMENT ITEM : </u></b></div>
																<ul style="margin-bottom:-5px;">
																<li><b> <font color="orange"><?=$rvSCatReplace2->ITEMCODEREPLACE;?> - <?=$rvSCatReplace2->ITEMNAMEREPLACE;?></font></b></li>
																<!--<li><b> Age		  : <font color="orange"><!?=$rvSCatReplace2->UMURBUKUREPLACE;?></font></b></li>
																<li><b> Book Value: <font color="orange"><!?='<strong>Rp.&nbsp;'.number_format($rvSCatReplace2->NILAIBUKUREPLACE, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?></font></b></li>-->
																<!--<li><b> New Price X : <font color="orange"><!?='<strong>Rp.&nbsp;'.number_format($rvSCatReplace2->ITEMPRICEREPLACE, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?></font></b></li>-->
																<li><b> Tagging Number : <font color="orange"><?=$rvSCatReplace2->NOTAGREPLACE;?></font></b></li>
																</ul>
																	<? } ?>
																</td>																
																<td width="7%">
																	<center><?=$rvCekDataEQx["TICKET_CREATEDATE"];?></center>
																</td>

																<td width="25%">								
																	<? if($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='2'){ ?>																		
																		<?='&nbsp;&nbsp;<b>Approval Status :</b>&nbsp;&nbsp;Not Yet Responded.';?><br>
																	<? }elseif($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='1'){ ?>																		
																		<font color="blue"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp;Approved.</b>';?></font><br>
																	<? }elseif($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='-'){ ?>																		
																		<font color="orange"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp;Not Needed.</b>';?></font><br>
																	<? }elseif($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='0'){ ?>																		
																		<font color="red"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp;Disapproved.</b>';?></font><br>
																	<? } ?>																
																																		
																	<?='&nbsp;&nbsp;<b>Approval By :</b> '.$rvCekDataEQx["TICKETAPPROVALBYNAME_AM"];?><br>																	
																	<?='&nbsp;&nbsp;<b>Approval Date :</b> '.$rvCekDataEQx["TICKETAPPROVALDATE_AM"];?><br>																	
																	<?='&nbsp;&nbsp;<b>Approval Time :</b> '.$rvCekDataEQx["TICKETAPPROVALTIME_AM"];?><hr>
																<!--</td>
																<td width="20%">-->																	
																	<? if(($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='1')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='2')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]=='-')){ ?>																		
																		<font color="black"><?='&nbsp;&nbsp;<b>Approval Status :</b>&nbsp;&nbsp;Not Yet Responded.';?></font><br>																
																	<? }elseif(($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='0')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='2')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]=='-')){ ?>																		
																		<font color="orange"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp;Not Needed.</b>';?></font><br>																
																	<? }elseif(($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='0')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='-')){ ?>																		
																		<font color="orange"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp;Not Needed.</b>';?></font><br>
																	<? }elseif(($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='2')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='-')){ ?>																		
																		<font color="black"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp;-</b>';?></font><br>
																	<? }elseif($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='1'){ ?>																		
																		<font color="blue"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp;Approved.</b>';?></font><br>
																	<? }elseif((($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='1')||($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='-'))&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='1')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]=='1')){ ?>																		
																		<font color="blue"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp;Approved.</b>';?></font><br>	
																	<? }elseif($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='0'){ ?>																		
																		<font color="red"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp;Disapproved.</b>';?></font><br>
																	<? }else{ ?> <font color="orange"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp;Not Needed.</b>';?></font><br>	
																	<? } ?>																		
																	<?='&nbsp;&nbsp;<b>Approval By :</b> '.$rvCekDataEQx["TICKETAPPROVALBYNAME_ROM"];?><br>																	
																	<?='&nbsp;&nbsp;<b>Approval Date :</b> '.$rvCekDataEQx["TICKETAPPROVALDATE_ROM"];?><br>																	
																	<?='&nbsp;&nbsp;<b>Approval Time :</b> '.$rvCekDataEQx["TICKETAPPROVALTIME_ROM"];?><hr>
																<!--</td>
																<td width="20%">-->																	
																	<? if(($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]=='2')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='1')){ ?>																		
																		<font color="black"><?='&nbsp;&nbsp;<b>Approval Status :</b>&nbsp;&nbsp;Not Yet Responded.';?></font><br>																
																	<? }elseif(($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]=='2')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='0')){ ?>																		
																		<font color="orange"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp;Not Needed.</b>';?></font><br>																
																	<? }elseif(($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='0')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='0')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]=='-')){ ?>																		
																		<font color="orange"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp;Not Needed.</b>';?></font><br>
																	<? }elseif(($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='0')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='2')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]=='-')){ ?>																		
																		<font color="orange"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp;Not Needed</b>';?></font><br>
																	<? }elseif($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]=='1'){ ?>																		
																		<font color="blue"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp;Approved.</b>';?></font><br>
																	<? }elseif((($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='1')||($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='-'))&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='1')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]=='1')){ ?>																		
																		<font color="blue"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp;Approved.</b>';?></font><br>																	
																	<? }elseif($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]=='0'){ ?>																		
																		<font color="red"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp;Disapproved.</b>';?></font><br>
																	<? }elseif(($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]!='2')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]!='2')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]!='2')){ ?>
																		<font color="orange"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp; Not Needed</b>';?></font><br>																			
																	<? }elseif(($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='2')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='-')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]=='-')){ ?> 
																		 <font color="#000"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp; -</b>';?></font><br>																			
																	<? }elseif(($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='0')&&(($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='-')||($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='2'))&&
																	   (($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]=='2')||($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]=='-'))){ ?> 
																		 <font color="orange"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp; Not Needed</b>';?></font><br>																			
																	<? }else{ ?> <font color="#000"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp; -</b>';?></font><br>																			
																	<? } ?>																			
																	<?='&nbsp;&nbsp;<b>Approval By :</b> '.$rvCekDataEQx["TICKETAPPROVALBYNAME_GMO"];?><br>																	
																	<?='&nbsp;&nbsp;<b>Approval Date :</b> '.$rvCekDataEQx["TICKETAPPROVALDATE_GMO"];?><br>																	
																	<?='&nbsp;&nbsp;<b>Approval Time :</b> '.$rvCekDataEQx["TICKETAPPROVALTIME_GMO"];?>
																</td>																
																<td width="6%">																
																	<? 																			
																		$cekItemName = ucwords(strtolower(substr($rvCekDataEQx["KETERANGAN"],8))); 
																	?>	
																	<? if($cekItemName=='Warehouse'){ ?>
																			<center><font color="orange"><b><?=$cekItemName;?></b></font></center><br>																	
																			<? if($rvCekDataEQx["TICKET_NEEDASSIST"]=='YES'){ ?>
																				<center><font color="#000"><b><?='By : FSD';?></b></font></center><br>
																			<? }elseif($rvCekDataEQx["TICKET_NEEDASSIST"]=='NO'){ ?>
																				<center><font color="#000"><b><?='By : OPR';?></b></font></center><br>
																			<? } ?>
																	<? }elseif($cekItemName=='Other Store'){ ?>
																			<center><font color="brown"><b><?=ucwords(strtolower($rvCekDataEQx["TICKETTRANSFERTO_OUTLETNAME"]));?></b></font></center><br>																	
																			<? if($rvCekDataEQx["TICKET_NEEDASSIST"]=='YES'){ ?>
																				<center><font color="#000"><b><?='By : FSD';?></b></font></center><br>
																			<? }elseif($rvCekDataEQx["TICKET_NEEDASSIST"]=='NO'){ ?>
																				<center><font color="#000"><b><?='By : OPR';?></b></font></center><br>
																			<? } ?>
																	<? } ?>															
																</td>
																<td width="25%">
																<!--  <link href="./requestlistuser/css/bootstrap.min.css" rel="stylesheet" media="screen">
																-->														 
																<style>
																textarea, input[type="text"], input[type="password"], 
																input[type="datetime"], input[type="datetime-local"], input[type="date"], 
																input[type="month"], input[type="time"], input[type="week"], 
																input[type="number"], input[type="email"], input[type="url"],
																input[type="search"], input[type="tel"], input[type="color"], 
																.uneditable-input 
																{
																	background-color: #ffffff;
																	border: 1px solid #cccccc;
																	transition: border linear .2s, box-shadow linear .2s;
																}

																select, textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], 
																input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], 
																input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], 
																.uneditable-input 
																{
																	display: inline-block;
																	height: 20px;
																	padding: 4px 6px;
																	margin-bottom: 10px;
																	font-size: 16px;
																	font-family: Verdana,Helvetica,sans-serif;
																	line-height: 20px;
																	color: #555555;
																	border-radius: 4px;
																	vertical-align: middle;
																}																
																</style>
																  <script type="text/javascript" src="./requestlistuser/scripts/jquery.min.js"></script>
															  	  <script type="text/javascript" src="./requestlistuser/scripts/jquery.form.js"></script>																
																  <script type="text/javascript" src="./jquery/jquery.min.v11.js"></script>

																  <script type="text/javascript" src="./requestlistuser/js/jquery.timepicker.js"></script>
																  <link rel="stylesheet" type="text/css" href="./requestlistuser/js/jquery.timepicker.css" />

																  <script type="text/javascript" src="./requestlistuser/js/lib/bootstrap-datepicker.js"></script>
																  <link rel="stylesheet" type="text/css" href="./requestlistuser/js/lib/bootstrap-datepicker.css" />

																  <script type="text/javascript" src="./requestlistuser/js/lib/site.js"></script>
																  <link rel="stylesheet" type="text/css" href="./requestlistuser/js/lib/site.css" />
																	<!--<script src="http://jonthornton.github.io/Datepair.js/dist/datepair.js"></script>
																	<script src="http://jonthornton.github.io/Datepair.js/dist/jquery.datepair.js"></script>-->
																	<script src="./requestlistuser/js/datepair.js"></script>
																	<script src="./requestlistuser/js/jquery.datepair.js"></script>
																
																<? 
																	$qCekDataInputan = mysql_query("SELECT ITH_TIPEBARANG_KODE.transfer_by, ITH_TIPEBARANG_KODE.transfer_date, 
																									ITH_TIPEBARANG_KODE.received_by, ITH_TIPEBARANG_KODE.received_date, 
																									ITH_TIPEBARANG_KODE.tickettransferto_outletcode, ITH_TIPEBARANG_KODE.tickettransferto_outletname,
																									ITH_USER.user_realname	
																									FROM ITH_TIPEBARANG_KODE
																									JOIN ITH_USER ON ITH_TIPEBARANG_KODE.request_by = ITH_USER.user_nik	
																									WHERE ITH_TIPEBARANG_KODE.ticket_id ='".$_GET['pid']."' AND ITH_TIPEBARANG_KODE.request_by = '".$_GET['uid']."'");
																	$rCekDataInputan = mysql_fetch_object($qCekDataInputan);
																	$transferbyName = preg_replace('/[^A-Za-z0-9\  ]/', '', $rCekDataInputan->user_realname);
																	$transferbyNames = ucwords(strtolower($transferbyName));									
																?>
																<? if($rCekDataInputan->transfer_date==''){ ?>
																	<? 
																		$mydate = date('d/m/Y', strtotime('today - 30 days'));
																		#$mydate = date('d/m/Y');
																		/*$mydate = date('d/m/Y', strtotime('today + 30 days'));*/
																		$datenow = date('d/m/Y');
																	?>
																			
																		<input type="hidden" name="kdtipebrg[]" id="<?='kdtipebrg'.$rvCekDataEQx["KODE_TIPEBARANG"];?>" value="<?=$rvCekDataEQx["KODE_TIPEBARANG"]?>"></input>
																		<b>Transferred&nbsp;Date:</b>
																		<p name="dttransfer_sc[<?=$rvCekDataEQx["KODE_TIPEBARANG"];?>]" id="<?='dttransfer_sc'.$rvCekDataEQx["KODE_TIPEBARANG"];?>" style="font-size:10pt;margin-left:85px;margin-top:-17px;">
																				&nbsp;&nbsp; &nbsp;<input type="text" name="dttransfer_sc[<?=$rvCekDataEQx["KODE_TIPEBARANG"];?>]" id="<?='dttransfer_sc'.$rvCekDataEQx["KODE_TIPEBARANG"];?>" class="date start" style="margin-left:15px;width:60%;" value=""/> <!--?=$datenow?--> 							
																		</p>
																		<b>Transferred&nbsp;By:</b>
																		<p name="dttransfer_by[<?=$rvCekDataEQx["KODE_TIPEBARANG"];?>]" id="<?='dttransfer_by'.$rvCekDataEQx["KODE_TIPEBARANG"];?>" style="font-size:10pt;margin-left:85px;margin-top:-17px;">
																				&nbsp;&nbsp; &nbsp;<input type="text" name="dttransfer_by[<?=$rvCekDataEQx["KODE_TIPEBARANG"];?>]" id="<?='dttransfer_by'.$rvCekDataEQx["KODE_TIPEBARANG"];?>" style="margin-left:15px;width:60%;" value=""/>  							
																		</p>
																		<script>
																			/*$('#datefrom_sc .time').timepicker({
																				'showDuration': true,
																				'timeFormat': 'g:ia'
																			});*/ 

																			$('#<?='dttransfer_sc'.$rvCekDataEQx["KODE_TIPEBARANG"];?> .date').datepicker({
																				/*'format': 'd MM yyyy',*/
																				'format': 'dd/mm/yyyy',
																				'autoclose': true
																			});

																			$('#<?='dttransfer_sc'.$rvCekDataEQx["KODE_TIPEBARANG"];?>').datepair();
																		</script>
																<? }elseif($rCekDataInputan->transfer_date!=''){ ?>	
																	&nbsp;&nbsp;<b>Item&nbsp;Status&nbsp;:</b>&nbsp;&nbsp;<?='Transfer From Store '.ucwords(strtolower($rCekDataInputan->user_realname))?><br>
																	&nbsp;&nbsp;<b>Transferred&nbsp;Date&nbsp;:</b>&nbsp;&nbsp;<?=$rCekDataInputan->transfer_date?><br>
																	&nbsp;&nbsp;<b>Transferred&nbsp;By&nbsp;:</b>&nbsp;&nbsp;<?=strtoupper($transferbyNames)?>		
																<? } ?>			
																																			
																</td>	
																<!--<td width="20%">TEST</td>-->	
															</tr>	
														<? } ?>									

									
									<!-- SMALLWARE REQUEST ITEM -->	
									<? #} ?>	

							</tbody>
						</table>
						<? if($rCekDataInputan->received_date==''){ ?>	
						<input type="submit" value="Submit" style="margin-left:1020px;" />	
						<? } ?>
					</form>	
					</div>	
				</div>	
		<? } ?>		
		<!--? }elseif($dtmyticket->statuslaporan_name=='Problem Teknisi Store'){ ?-->
	<? }elseif($dtmyticket->statuslaporan_name=='Problem')
	{ ?>
		<b><u>PERMASALAHAN DARI CABANG (
			<?
				$qcektipebrgsx = mysql_query("SELECT kode_tipebrg FROM ITH_TICKET_HEADER where ticket_id = '$_GET[pid]'");
				$rcektipebrgsx = mysql_fetch_object($qcektipebrgsx);
				if($rcektipebrgsx->kode_tipebrg=='RQS-03-000112'){ 
			?>
				<?="EQUIPMENT";?>
			<?	}elseif($rcektipebrgsx->kode_tipebrg=='RQS-03-000113'){  ?>
				<?="SMALLWARE";?>
			<?	}elseif($rcektipebrgsx->kode_tipebrg=='RQS-03-000114'){ ?>
				<?="SPAREPART";?>
			<?	}
			?>
		)</u></b></center><br>		
			<script src="jquery/jquery.min.js"></script>
			<script>
				$(document).ready(function()
				{
					$("#equipmentsrc").on("keyup", function() 
					{
						var value = $(this).val().toLowerCase();
						$("#myCodes tr").filter(function() 
						{
							$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
						});
					});
					$("#smallwaresrc").on("keyup", function() 
					{
						var value = $(this).val().toLowerCase();
						$("#myCodes tr").filter(function() 
						{
							$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
						});
					});
					$("#sparepartsrc").on("keyup", function() 
					{
						var value = $(this).val().toLowerCase();
						$("#myCodes tr").filter(function() 
						{
							$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
						});
					});
				});
			</script>
			<style>
				table.blueTable 
				{
					border: 1px solid #1C6EA4; background-color: #EEEEEE; width: 100%;
					text-align: left; border-collapse: collapse; overflow-x:scroll;height:100px; position:relative;
				}
				table.blueTable td, table.blueTable th 
				{
					border: 1px solid #AAAAAA; padding: 3px 2px;				  
				}
				table.blueTable tbody td { font-size: 13px; }
				table.blueTable tr:nth-child(even) { background: #D0E4F5; }
				table.blueTable thead 
				{ 
					background: #1C6EA4; background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
					background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
					background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
					border-bottom: 2px solid #444444;
				}
				table.blueTable thead th 
				{
					font-size: 12px; text-align:center; font-weight: bold; color: #000; border-left: 2px solid #D0E4F5;
				}
				table.blueTable thead th:first-child { border-left: none; }
				table.blueTable tfoot 
				{ 
					font-size: 14px; font-weight: bold; color: #000; background: #D0E4F5;
					background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
					background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
					background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
					border-top: 2px solid #444444;
				}
				table.blueTable tfoot td { font-size: 14px; }
				table.blueTable tfoot .links { text-align: right; }
				table.blueTable tfoot .links a{ display: inline-block; background: #1C6EA4; color: #000; padding: 2px 8px; border-radius: 5px; }			
				</style>
				<input id="equipmentsrc" type="text" placeholder="Search..">
					<table class="blueTable" border="1"> 
						<thead>
							<tr>
								<?  
									$objConnect = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
								?>														
									<th width="7%">No&nbsp;Permasalahan</th>
									<th width="17%">Tgl&nbsp;Permasalahan</th>
									<th width="20%">Kode&nbsp;Barang</th>
									<th width="20%">Nama&nbsp;Barang</th>
									<!--<th width="15%">Jumlah<br>Permasal</th>-->
									<th width="10%" style="display:none;">STK<br>BARU</th>
									<th width="10%" style="display:none;">STK<br>BAIK</th>
									<th width="10%" style="display:none;">STK<br>LAMA</th>
							</tr>													
						</thead>
					</table>								
					<div style="width:100%; height:100px; overflow:auto;position:relative;">
						<table class="blueTable" border="1">
							<tbody id="myCodes">
								<?  
									$qcektipebrgdetail = mysql_query("SELECT ITH_TICKET_HEADER.ticket_id, ITH_TICKET_HEADER.kode_tipebrg 
															FROM ITH_TICKET_HEADER 
															JOIN ITH_TIPEBRG ON ITH_TICKET_HEADER.kode_tipebrg = ITH_TIPEBRG.kode_tipebrg
															WHERE ITH_TICKET_HEADER.kode_tipebrg != '' AND ITH_TICKET_HEADER.ticket_id = '".$_GET['pid']."'");
									$rcektipebrgdetail = mysql_fetch_object($qcektipebrgdetail);	
									if($rcektipebrgdetail->kode_tipebrg == 'FSDBRGEQ') /* EQUIPMENT INFO DI TIKET DETAIL */
									{
										echo "TEST PROBLEM-1";
										$qvCekDataEQ = mysql_query("SELECT DISTINCT ITH_TIPEBARANG_KODE.NO_PERMINTAAN, ITH_TIPEBARANG_KODE.KODE_TIPEBARANG, ITH_TIPEBARANG_KODE.KODE_TIPEBARANG_SW, 
														ITH_TIPEBARANG_KODE.NAMA_TIPEBARANG, ITH_TICKET_HEADER.ticket_createdate FROM ITH_TIPEBARANG_KODE 
														JOIN ITH_TICKET_HEADER ON ITH_TIPEBARANG_KODE.ticket_id = ITH_TICKET_HEADER.ticket_id
														WHERE ITH_TIPEBARANG_KODE.ticket_id = '".$_GET['pid']."' GROUP BY ITH_TIPEBARANG_KODE.KODE_TIPEBARANG ASC");														
										while($rvSCatShowEQ = mysql_fetch_array($qvCekDataEQ)){					
															
															?>  												
															<tr>												
																<td width="7%">
																	<center><?=$rvSCatShowEQ["NO_PERMINTAAN"];?></center>
																</td>
																<td width="17%">
																	<center><?=$rvSCatShowEQ["ticket_createdate"];?></center>
																</td>
																
																<td width="20%">
																<center><?=$rvSCatShowEQ["KODE_TIPEBARANG"];?></center>
																</td>														
																<td width="20%">
																<center><?=$rvSCatShowEQ["NAMA_TIPEBARANG"];?></center>
																</td>	
																<td width="15%">n/a</td>																
																<td width="15%">n/a</td>																	
															</tr>
														<? } ?>	
									<? }elseif($rcektipebrgdetail->kode_tipebrg == 'FSDBRGSW'){ 
										$qvCekDataSW = mysql_query("SELECT DISTINCT ITH_TIPEBARANG_KODE.NO_PERMINTAAN, ITH_TIPEBARANG_KODE.KODE_TIPEBARANG, ITH_TIPEBARANG_KODE.KODE_TIPEBARANG_SW, 
														ITH_TIPEBARANG_KODE.NAMA_TIPEBARANG, ITH_TICKET_HEADER.ticket_createdate FROM ITH_TIPEBARANG_KODE 
														JOIN ITH_TICKET_HEADER ON ITH_TIPEBARANG_KODE.ticket_id = ITH_TICKET_HEADER.ticket_id
														WHERE ITH_TIPEBARANG_KODE.ticket_id = '$_GET[pid]' GROUP BY ITH_TIPEBARANG_KODE.KODE_TIPEBARANG ASC");
															
														
															while($rvSCatShowSW = mysql_fetch_array($qvCekDataSW)){
															?>  												
															<tr>												
																<td width="7%">
																	<center><?=$rvSCatShowSW["NO_PERMINTAAN"];?></center>
																</td>
																<td width="17%">
																	<center><?=$rvSCatShowSW["ticket_createdate"];?></center>
																</td>
																<td width="20%">
																<center><?=$rvSCatShowSW["KODE_TIPEBARANG_SW"];?></center>
																</td>						
															<? 
															$objConnectx = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
															$qceknamabrg = "SELECT KODE_BARANG, NAMA_BARANG FROM FSDBRGSP 
															WHERE KODE_BARANG = '".$rvSCatShowSW["KODE_TIPEBARANG_SW"]."'";  
															$objParsenamabrg = oci_parse ($objConnectx, $qceknamabrg);  
															oci_execute ($objParsenamabrg,OCI_DEFAULT);
															while($objResultnamabrg = oci_fetch_array($objParsenamabrg,OCI_BOTH)){
															#$namabarangs = $objResultnamabrg['NAMA_BARANG'];
															$namabarangs = preg_replace('/[^A-Za-z0-9\  ]/', '', $objResultnamabrg['NAMA_BARANG']);
															?>																
																<td width="20%">
																	<center><?=$namabarangs;?>
																	<?
																	#echo "<br>SELECT KODE_BARANG, NAMA_BARANG FROM FSDBRGSP 
																	#	  <br>WHERE KODE_BARANG = '".$rvSCatShowSW["KODE_TIPEBARANG_SW"]."'";
																	?>
																	</center>
																</td>			
															<? } oci_close($objConnectx); ?>		
															</tr>
														<? } ?>										
										
									<? }elseif($rcektipebrgdetail->kode_tipebrg == 'FSDBRGSP'){ 
										$qvCekDataSP = mysql_query("SELECT DISTINCT ITH_TIPEBARANG_KODE.NO_PERMINTAAN, ITH_TIPEBARANG_KODE.KODE_TIPEBARANG, 
														ITH_TIPEBARANG_KODE.KODE_TIPEBARANG_SW, ITH_TIPEBARANG_KODE.KODE_TIPEBARANG_SP, 
														ITH_TIPEBARANG_KODE.NAMA_TIPEBARANG, ITH_TICKET_HEADER.ticket_createdate FROM ITH_TIPEBARANG_KODE 
														JOIN ITH_TICKET_HEADER ON ITH_TIPEBARANG_KODE.ticket_id = ITH_TICKET_HEADER.ticket_id
														WHERE ITH_TIPEBARANG_KODE.ticket_id = '".$_GET['pid']."' GROUP BY ITH_TIPEBARANG_KODE.KODE_TIPEBARANG ASC");														
										while($rvSCatShowSP = mysql_fetch_array($qvCekDataSP)){		
															?>  												
															<tr>												
																<td width="7%">
																	<center><?=$rvSCatShowSP["NO_PERMINTAAN"];?></center>
																</td>
																<td width="17%">
																	<center><?=$rvSCatShowSP["ticket_createdate"];?></center>
																</td>
																
																<td width="20%">
																<center><?=$rvSCatShowSP["KODE_TIPEBARANG_SP"];?></center>
																</td>														
																<td width="20%">
																<center><?=$rvSCatShowSP["NAMA_TIPEBARANG"];?></center>
																</td>														
															</tr>
														<? } ?>										
										

									<? } ?>	
													</tbody>
												</table>	
												</div>	<br>
	<? } ?>	
<? 
	#}elseif(($rCekReffTicket->ticketreferencestatus_id!='1')||($rCekReffTicket->ticketreferencestatus_id==' '))
	#}elseif(($rCekReffTicket->ticketreferencestatus_id!='1')||($rCekReffTicket->ticketreferencestatus_id==' '))
	}elseif($rCekReffTicket->ticketreferencestatus_id=='1')
	{
	/* ###################### REQUEST EQUIPMENT FROM STORE (REFERENCE TIKET/REF TIKET) ######################## */
?>
		
		<!--? if($dtmyticket->statuslaporan_name=='Request Store'){ ?-->
		<? if($dtmyticket->statuslaporan_name=='Request'){ ?>
				<? 
					$qCekStatusTicketReffx = mysql_query("SELECT ticket_id, ticketreference_id, ticketreferencestatus_id 
														 FROM ITH_TICKET_HEADER WHERE ticket_id = '".$_GET['pid']."'");
					$rCekStatusTicketReffx = mysql_fetch_object($qCekStatusTicketReffx);
					if($rCekStatusTicketReffx->ticketreferencestatus_id=='1'){
				?>					
					<b><u>REQUEST EQUIPMENT FROM STORE [REFERENCE TIKET : (<?='<font color="blue"><b>'.$rCekStatusTicketReffx->ticketreference_id.'</b></font>';?>)](
				<? } ?>	
			<?
				$qcektipebrgsx = mysql_query("SELECT kode_tipebrg FROM ITH_TICKET_HEADER where ticket_id = '$_GET[pid]'");
				$rcektipebrgsx = mysql_fetch_object($qcektipebrgsx);
				if($rcektipebrgsx->kode_tipebrg=='RQS-03-000112'){ 
			?>
				<?="EQUIPMENT";?>
			<?	}elseif($rcektipebrgsx->kode_tipebrg=='RQS-03-000113'){  ?>
				<?="SMALLWARE";?>
			<?	}elseif($rcektipebrgsx->kode_tipebrg=='RQS-03-000114'){ ?>
				<?="SPAREPART";?>
			<?	}
			?>
		)</u></b></center><br>		
			<script src="jquery/jquery.min.js"></script>
			<!--<script>
				$(document).ready(function()
				{
					$("#equipmentsrc").on("keyup", function() 
					{
						var value = $(this).val().toLowerCase();
						$("#myCodes tr").filter(function() 
						{
							$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
						});
					});
					$("#smallwaresrc").on("keyup", function() 
					{
						var value = $(this).val().toLowerCase();
						$("#myCodes tr").filter(function() 
						{
							$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
						});
					});
					$("#sparepartsrc").on("keyup", function() 
					{
						var value = $(this).val().toLowerCase();
						$("#myCodes tr").filter(function() 
						{
							$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
						});
					});
				});
			</script>-->
			<style>
				table.blueTable 
				{
					border: 1px solid #1C6EA4; background-color: #EEEEEE; width: 100%;
					text-align: left; border-collapse: collapse; overflow-x:scroll;height:100px; position:relative;
				}
				table.blueTable td, table.blueTable th 
				{
					border: 1px solid #AAAAAA; padding: 3px 2px;				  
				}
				table.blueTable tbody td { font-size: 13px; }
				table.blueTable tr:nth-child(even) { background: #D0E4F5; }
				table.blueTable thead 
				{ 
					background: #1C6EA4; background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
					background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
					background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
					border-bottom: 2px solid #444444;
				}
				table.blueTable thead th 
				{
					font-size: 12px; text-align:center; font-weight: bold; color: #000; border-left: 2px solid #D0E4F5;
				}
				table.blueTable thead th:first-child { border-left: none; }
				table.blueTable tfoot 
				{ 
					font-size: 14px; font-weight: bold; color: #000; background: #D0E4F5;
					background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
					background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
					background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
					border-top: 2px solid #444444;
				}
				table.blueTable tfoot td { font-size: 14px; }
				table.blueTable tfoot .links { text-align: right; }
				table.blueTable tfoot .links a{ display: inline-block; background: #1C6EA4; color: #000; padding: 2px 8px; border-radius: 5px; }			
				</style>
				<!--<input id="equipmentsrc" type="text" placeholder="Search..">-->
					<table class="blueTable" border="1"> 
						<thead>
							<tr>
								<?  
									$objConnect = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
								?>														
									<th width="7%">No<br>Permintaan...</th>
									<th width="17%">Tgl<br>Permintaan</th>
									<th width="20%">Kode<br>Barang Pesanan</th>
									<th width="20%">Nama<br>Barang Pesanan</th>
									<th width="15%">Jumlah<br>Permintaan</th>
									<th width="15%">Status<br>Barang</th>
									<th width="10%" style="display:none;">STK<br>BARU</th>
									<th width="10%" style="display:none;">STK<br>BAIK</th>
									<th width="10%" style="display:none;">STK<br>LAMA</th>
							</tr>													
						</thead>
					</table>								
					<div style="width:100%; height:100px; overflow:auto;position:relative;">
						<table class="blueTable" border="1">
							<tbody id="myCodes">
							<? 
								$qCekStatusTicket = mysql_query("SELECT ticketstatus_id, ticketreference_id
								FROM ITH_TICKET_HEADER WHERE ticket_id = '".$_GET['pid']."'");
								$rCekStatusTicket = mysql_fetch_object($qCekStatusTicket);
								if(($rCekStatusTicket->ticketstatus_id==1)&&($rCekStatusTicket->ticketreference_id=='')){ //STATUS OPEN DAN BELUM ADA TIKET REFERENCE
							?>
								
							<? }elseif(($rCekStatusTicket->ticketstatus_id==1)&&($rCekStatusTicket->ticketreference_id!='')){ //STATUS OPEN DAN SUDAH ADA TIKET REFERENCE ?>	
								
							
								<?  
									$qcektipebrg = mysql_query("SELECT ITH_TICKET_HEADER.ticket_id, ITH_TICKET_HEADER.kode_tipebrg FROM ITH_TICKET_HEADER 
																	JOIN ITH_TIPEBRG ON ITH_TICKET_HEADER.kode_tipebrg = ITH_TIPEBRG.kode_tipebrg
																	WHERE ITH_TICKET_HEADER.ticket_id = '$_GET[pid]'");
									$rcektipebrg = mysql_fetch_object($qcektipebrg);									
									$qcektipebrgdetail = mysql_query("SELECT DISTINCT ITH_TICKET_HEADER.ticket_id, ITH_TICKET_HEADER.kode_tipebrg 
															FROM ITH_TICKET_HEADER 
															JOIN ITH_TIPEBRG ON ITH_TICKET_HEADER.kode_tipebrg = ITH_TIPEBRG.kode_tipebrg
															WHERE ITH_TICKET_HEADER.kode_tipebrg != '' AND ITH_TICKET_HEADER.ticket_id = '$_GET[pid]'");
									$rcektipebrgdetail = mysql_fetch_object($qcektipebrgdetail);	
									if($rcektipebrgs->kode_tipebrg=='RQS-03-000112') /* EQUIPMENT INFO DI TIKET DETAIL */
									{
										$qvCekDataEQ = mysql_query("SELECT DISTINCT ticket_id, no_permintaan, request_by, kode_tipebarang, kode_tipebarang_sw, kode_tipebarang_sp,
															kuantitas, nama_tipebarang, nama_tipebarang_sw, nama_tipebarang_sp
															FROM ITH_TIPEBARANG_KODE
															WHERE ticket_id = '$_GET[pid]'");
															$rvCekDataEQ = mysql_fetch_object($qvCekDataEQ);
															
															$objConnectShowEQ = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
														/*	$qShowEQ = "select FSDORDEC.NO_PERMINTAAN, FSDORDEC.TGL_PERMINTAAN, FSDORDEC.TGL_BUAT_FSD, FSDORDEC.KODE_BARANG, 
															FSDBRGEQ.NAMA_BARANG,
															FSDORDEC.JUMLAH_PERMINTAAN, FSDORDEC.JUMLAH_ORDER, FSDORDEC.KIRIM_DARI_STOK, FSDORDEC.TGL_DISETUJUI, 
															FSDORDEC.NOMOR_RO, FSDORDEC.STATUS_PERMINTAAN
															from FSDORDEC 
															JOIN FSDBRGEQ ON FSDORDEC.KODE_BARANG = FSDBRGEQ.KODE_BARANG
															where NO_PERMINTAAN = '$rvCekDataEQ->no_permintaan'
															AND JUMLAH_PERMINTAAN IS NOT NULL order by FSDORDEC.TGL_PERMINTAAN DESC";  
														*/
											$qCekStatusTiketStore = mysql_query("SELECT ticket_id, ticketstatus_id, ticketapprovalstatus_id, ticketapprovalstatus_id2, ticketapprovalstatus_id3 
																				FROM ITH_TICKET_HEADER WHERE ticket_id = '$_GET[pid]'");
											$rCekStatusTiketStore = mysql_fetch_object($qCekStatusTiketStore);
											if(($rCekStatusTiketStore->ticketapprovalstatus_id!='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id2!='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id3!='1'))
											{	
															echo "<br>ZZZ....";
															$con = mysql_connect("localhost","usrservicedesk","kfc14022");
																		mysql_select_db("servicedesk",$con); //@session_start();	
															$qvCekDataEQ = mysql_query("SELECT DISTINCT ticket_id, no_permintaan, request_by, kode_tipebarang, kode_tipebarang_sw, kode_tipebarang_sp,
															kuantitas, nama_tipebarang, nama_tipebarang_sw, nama_tipebarang_sp
															FROM ITH_TIPEBARANG_KODE
															WHERE ticket_id = '$_GET[pid]'");
															$rvCekDataEQ = mysql_fetch_object($qvCekDataEQ);												
															#echo "<br>Nomer Permintaan : ".$rvCekDataEQ->no_permintaan;
															$objConnectShowEQ = oci_connect('fsd', 'fsd', 'localhost:1521/XE');
															$qShowEQ = "select DISTINCT FSDORDEC_TEMP.NO_PERMINTAAN, FSDORDEC_TEMP.TGL_PERMINTAAN, FSDORDEC_TEMP.TGL_BUAT_FSD, FSDORDEC_TEMP.KODE_BARANG, 
															FSDBRGEQ.NAMA_BARANG,
															FSDORDEC_TEMP.JUMLAH_PERMINTAAN, FSDORDEC_TEMP.JUMLAH_ORDER, FSDORDEC_TEMP.KIRIM_DARI_STOK, FSDORDEC_TEMP.TGL_DISETUJUI, 
															FSDORDEC_TEMP.NOMOR_RO, FSDORDEC_TEMP.STATUS_PERMINTAAN
															from FSDORDEC_TEMP 
															JOIN FSDBRGEQ ON FSDORDEC_TEMP.KODE_BARANG = FSDBRGEQ.KODE_BARANG
															where FSDORDEC_TEMP.NO_PERMINTAAN = '$rvCekDataEQ->no_permintaan'
															order by FSDORDEC_TEMP.TGL_PERMINTAAN DESC";  
															$qobjParseShowEQ = oci_parse ($objConnectShowEQ, $qShowEQ);  
															oci_execute ($qobjParseShowEQ,OCI_DEFAULT);   
											
											}elseif
											((($rCekStatusTiketStore->ticketapprovalstatus_id=='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id2=='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id3=='1'))||
											(($rCekStatusTiketStore->ticketapprovalstatus_id=='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id2=='2')&&($rCekStatusTiketStore->ticketapprovalstatus_id3=='2'))||
											(($rCekStatusTiketStore->ticketapprovalstatus_id=='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id2=='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id3=='2'))||
											(($rCekStatusTiketStore->ticketapprovalstatus_id=='2')&&($rCekStatusTiketStore->ticketapprovalstatus_id2=='2')&&($rCekStatusTiketStore->ticketapprovalstatus_id3=='1'))||
											(($rCekStatusTiketStore->ticketapprovalstatus_id=='2')&&($rCekStatusTiketStore->ticketapprovalstatus_id2=='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id3=='1'))||
											(($rCekStatusTiketStore->ticketapprovalstatus_id=='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id2=='2')&&($rCekStatusTiketStore->ticketapprovalstatus_id3=='1')))
											{	
														##echo "Test 2 REff Tiket";										
														/*	$qShowEQ = "select FSDORDEC.NO_PERMINTAAN, FSDORDEC.TGL_PERMINTAAN, FSDORDEC.TGL_BUAT_FSD, FSDORDEC.KODE_BARANG, 
															FSDBRGEQ.NAMA_BARANG,
															FSDORDEC.JUMLAH_PERMINTAAN, FSDORDEC.JUMLAH_ORDER, FSDORDEC.KIRIM_DARI_STOK, FSDORDEC.TGL_DISETUJUI, 
															FSDORDEC.NOMOR_RO, FSDORDEC.STATUS_PERMINTAAN
															from FSDORDEC 
															JOIN FSDBRGEQ ON FSDORDEC.KODE_BARANG = FSDBRGEQ.KODE_BARANG
															where NO_PERMINTAAN = '$rvCekDataEQ->no_permintaan'
															AND JUMLAH_PERMINTAAN IS NOT NULL order by FSDORDEC.TGL_PERMINTAAN DESC";  */
													$con = mysql_connect("localhost","usrservicedesk","kfc14022");
															mysql_select_db("servicedesk",$con); 	
													$qCekStatusTiketXX = mysql_query("SELECT ticketstatus_id FROM ITH_TICKET_HEADER
																					WHERE ticket_id = '".$_GET['pid']."'");	
													$rCekStatusTiketXX = mysql_fetch_object($qCekStatusTiketXX);
													if($rCekStatusTiketXX->ticketstatus_id=='1')
													{		
														##echo "<br>TIKET REFF OPEN";
														$qCNmrROEQ = "SELECT 
																	FSDORDEC_TEMP.KODE_CABANG, MSTCBGDT.NAMA_CABANG, FSDORDEC_TEMP.NO_PERMINTAAN, 
																	FSDORDEC_TEMP.NOMOR_RO,FSDORDEC_TEMP.TGL_PERMINTAAN, FSDORDEC_TEMP.KODE_BARANG, 
																	FSDBRGEQ.NAMA_BARANG, FSDORDEC_TEMP.JUMLAH_PERMINTAAN,FSDORDEC_TEMP.STATUS_PERMINTAAN,FSDROEQC.STATUS
																	FROM FSDORDEC_TEMP 
																	JOIN MSTCBGDT ON FSDORDEC_TEMP.KODE_CABANG = MSTCBGDT.CABANG_HEADER
																	JOIN FSDBRGEQ ON FSDORDEC_TEMP.KODE_BARANG = FSDBRGEQ.KODE_BARANG
																	JOIN FSDROEQC ON FSDORDEC_TEMP.NOMOR_RO = FSDROEQC.NOMOR_RO
																	WHERE FSDORDEC_TEMP.NO_PERMINTAAN = '$rvCekDataEQ->no_permintaan'";  												

														$qobjParseCNmrROEQ = oci_parse ($objConnectShowEQ, $qCNmrROEQ);  
																		   oci_execute ($qobjParseCNmrROEQ,OCI_DEFAULT); 
														$rvCNmrROEQ = oci_fetch_array($qobjParseCNmrROEQ,OCI_BOTH);	
													}elseif($rCekStatusTiketXX->ticketstatus_id=='2'){
														$qCNmrROEQ = "SELECT 
																	FSDORDEC.KODE_CABANG, MSTCBGDT.NAMA_CABANG, FSDORDEC.NO_PERMINTAAN, 
																	FSDORDEC.NOMOR_RO,FSDORDEC.TGL_PERMINTAAN, FSDORDEC.KODE_BARANG, 
																	FSDBRGEQ.NAMA_BARANG, FSDORDEC.JUMLAH_PERMINTAAN,FSDORDEC.STATUS_PERMINTAAN,FSDROEQC.STATUS
																	FROM FSDORDEC 
																	JOIN MSTCBGDT ON FSDORDEC.KODE_CABANG = MSTCBGDT.CABANG_HEADER
																	JOIN FSDBRGEQ ON FSDORDEC.KODE_BARANG = FSDBRGEQ.KODE_BARANG
																	JOIN FSDROEQC ON FSDORDEC.NOMOR_RO = FSDROEQC.NOMOR_RO
																	WHERE FSDORDEC.NO_PERMINTAAN = '$rvCekDataEQ->no_permintaan'";  
														$qobjParseCNmrROEQ = oci_parse ($objConnectShowEQ, $qCNmrROEQ);  
																		   oci_execute ($qobjParseCNmrROEQ,OCI_DEFAULT); 
														$rvCNmrROEQ = oci_fetch_array($qobjParseCNmrROEQ,OCI_BOTH);	
														
													}	
												if($rvCNmrROEQ['NOMOR_RO']==' '){
														#echo "<br>TIDAK ADA NOMOR RO";
													$con = mysql_connect("localhost","usrservicedesk","kfc14022");
															mysql_select_db("servicedesk",$con); 	
													$qCekStatusTiketX = mysql_query("SELECT ticketstatus_id FROM ITH_TICKET_HEADER
																					WHERE ticket_id = '$_GET[pid]'");	
													$rCekStatusTiketX = mysql_fetch_object($qCekStatusTiketX);
													if($rCekStatusTiketX->ticketstatus_id=='1')
													{	 	#echo "ON PROCESS ZZZ";	 
															#$objConnectShowEQ = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 											
																$qShowEQ = "select FSDORDEC_TEMP.NO_PERMINTAAN, FSDORDEC_TEMP.TGL_PERMINTAAN, FSDORDEC_TEMP.TGL_BUAT_FSD, FSDORDEC_TEMP.KODE_BARANG, 
																FSDBRGEQ.NAMA_BARANG,
																FSDORDEC_TEMP.JUMLAH_PERMINTAAN, FSDORDEC_TEMP.JUMLAH_ORDER, FSDORDEC_TEMP.KIRIM_DARI_STOK, FSDORDEC_TEMP.TGL_DISETUJUI, 
																FSDORDEC_TEMP.NOMOR_RO, FSDORDEC_TEMP.STATUS_PERMINTAAN,FSDROEQC.STATUS
																from FSDORDEC_TEMP 
																JOIN FSDBRGEQ ON FSDORDEC_TEMP.KODE_BARANG = FSDBRGEQ.KODE_BARANG
																JOIN FSDROEQC ON FSDORDEC_TEMP.NOMOR_RO = FSDROEQC.NOMOR_RO
																where FSDORDEC_TEMP.NO_PERMINTAAN = '$rvCekDataEQ->no_permintaan'";
																$qobjParseShowEQ = oci_parse ($objConnectShowEQ, $qShowEQ);  
																	   oci_execute ($qobjParseShowEQ,OCI_DEFAULT); 															
													}													
													if($rCekStatusTiketX->ticketstatus_id=='2')
													{	 	#echo "ON PROCESS ZZZ";	 
															#$objConnectShowEQ = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 											
																$qShowEQ = "select FSDORDEC.NO_PERMINTAAN, FSDORDEC.TGL_PERMINTAAN, FSDORDEC.TGL_BUAT_FSD, FSDORDEC.KODE_BARANG, 
																FSDBRGEQ.NAMA_BARANG,
																FSDORDEC.JUMLAH_PERMINTAAN, FSDORDEC.JUMLAH_ORDER, FSDORDEC.KIRIM_DARI_STOK, FSDORDEC.TGL_DISETUJUI, 
																FSDORDEC.NOMOR_RO, FSDORDEC.STATUS_PERMINTAAN,FSDROEQC.STATUS
																from FSDORDEC 
																JOIN FSDBRGEQ ON FSDORDEC.KODE_BARANG = FSDBRGEQ.KODE_BARANG
																JOIN FSDROEQC ON FSDORDEC.NOMOR_RO = FSDROEQC.NOMOR_RO
																where FSDORDEC.NO_PERMINTAAN = '$rvCekDataEQ->no_permintaan'";
																$qobjParseShowEQ = oci_parse ($objConnectShowEQ, $qShowEQ);  
																	   oci_execute ($qobjParseShowEQ,OCI_DEFAULT); 															
													}													
												}elseif($rvCNmrROEQ['NOMOR_RO']!=' '){	 
													$con = mysql_connect("localhost","usrservicedesk","kfc14022");
																		mysql_select_db("servicedesk",$con); //@session_start();												
													$qCekStatusTiketX = mysql_query("SELECT ticketstatus_id FROM ITH_TICKET_HEADER
																						WHERE ticket_id = '$_GET[pid]'");	
													$rCekStatusTiketX = mysql_fetch_object($qCekStatusTiketX);
													if($rCekStatusTiketX->ticketstatus_id=='2')
													{		#echo "<br>ON PROCESS";										
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
										
															
															while($rvSCatShowEQ = oci_fetch_array($qobjParseShowEQ,OCI_BOTH))  
															{  
															?>  												
															<tr>												
																<td width="7%">
																	<center><?=$rvSCatShowEQ["NO_PERMINTAAN"];?></center>
																</td>
																<td width="17%">
																	<center><?=$rvSCatShowEQ["TGL_PERMINTAAN"];?></center>
																</td>
																
																<td width="20%">
																<center><?=$rvSCatShowEQ["KODE_BARANG"];?></center>
																</td>														
																<td width="20%">
																<center><?=$rvSCatShowEQ["NAMA_BARANG"];?></center>
																</td>														
																<td width="15%">
																	<center><?=$rvSCatShowEQ["JUMLAH_PERMINTAAN"].' <b>UNIT A1</b>';?>
																	<? if($rvSCatShowEQ["NOMOR_RO"]!=''){ ?>
																		<br><?="<b>No.RO : ".$rvSCatShowEQ["NOMOR_RO"].'</b>';?>
																	<? }elseif($rvSCatShowEQ["NOMOR_RO"]==''){ ?>
																		<br><?="<b>No.RO : Belum Ada Nomor RO</b>";?>
																	<? } ?>																	
																	<? if($rvSCatShowEQ["NO_PO"]!=''){ ?>
																		<br><?="<b>No.PO : ".$rvSCatShowEQ["NO_PO"].'</b>';?>
																	<? }elseif($rvSCatShowEQ["NO_PO"]==''){ ?>
																		<br><?="<b>No.PO : - </b>";?>
																	<? } ?>
																	</center>
																</td>
																<!--<td width="15%">
																<center><!?if($rvSCatShowEQ["STATUS_PERMINTAAN"]=='S'){ echo "Barang Kirim Ke Store";
																}elseif($rvSCatShowEQ["STATUS_PERMINTAAN"]=='F'){ echo "Barang Masih ada diFSD";																	
																}elseif($rvSCatShowEQ["STATUS_PERMINTAAN"]=='X'){ echo "Barang Dalam Proses Procurement";																	
																}elseif($rvSCatShowEQ["STATUS_PERMINTAAN"]=='R'){ echo "Barang Sedang Dalam Proses FSD";
																}elseif($rvSCatShowEQ["STATUS_PERMINTAAN"]=='B'){ echo "Barang Belum Diterima Oleh Store";
																}elseif($rvSCatShowEQ["STATUS_PERMINTAAN"]=='O'){ echo "Barang Sudah Diterima Oleh Store";
																}elseif($rvSCatShowEQ["STATUS_PERMINTAAN"]==' '){ echo "Menunggu Persetujuan untuk tiket ".$_GET['pid'];
																}else{
																	echo "Menunggu Persetujuan dari Atasan FSD.";
																};?></center>																	
																</td>-->
																	<td width="15%">
																<center>
																<? #echo "NOMOR RO :".$rvSCatShowSW["NOMOR_RO"];
															#if($rvSCatShowSW["NOMOR_RO"]=='')
															#{	
																#echo "<br>TIDAK ADA NOMOR RO";
															#echo "<br>TEST NOMOR RO : ".$rvSCatShowSW["NOMOR_RO"];
															#	if($rvSCatShowSW["STATUS_PERMINTAAN"]=='R'){ echo "Barang Sedang Diproses FSD untuk Tutup Hari";														
															#	}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]=='D'){ echo "Barang Sudah Disetujui Oleh FSD MGR/SUB MGR";																
															#	}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]==' '){ echo "Menunggu Persetujuan untuk tiket ".$_GET['pid'];
															#	}	
															#}
															#elseif($rvSCatShowSW["NOMOR_RO"]!='')
															#{		
															$con = mysql_connect("localhost","usrservicedesk","kfc14022");		
															$qCekStatusTiketX = mysql_query("SELECT ticketstatus_id FROM ITH_TICKET_HEADER
																										WHERE ticket_id = '$_GET[pid]'");	
															$rCekStatusTiketX = mysql_fetch_object($qCekStatusTiketX);
															if($rCekStatusTiketX->ticketstatus_id=='1')
															{	/*echo "MENUNGGU DI ASSIGNMENT OLEH ADMIN X";*/echo "MENUNGGU PERSETUJUAN DARI AREA MANAGER";																	
															}elseif($rCekStatusTiketX->ticketstatus_id=='2')
															{	### echo "ON PROCESS<br>";		
															
																$qStatusKirimKeStore = "select STATUS_KIRIM from FSDKRMEQ where NO_RO = '".$rvSCatShowEQ['NOMOR_RO']."'";
																$qobjParseStatusKirimKeStore = oci_parse ($objConnectShowEQ, $qStatusKirimKeStore);  
																						  oci_execute ($qobjParseStatusKirimKeStore,OCI_DEFAULT);
																$rvStatusKirimKeStore = oci_fetch_array($qobjParseStatusKirimKeStore,OCI_BOTH);	
																			
																if(($rvStatusKirimKeStore['STATUS_KIRIM']=='K'))
																{		
																	 echo "Barang Dalam Proses Kirim Ke Store";	
																}elseif(($rvStatusKirimKeStore['STATUS_KIRIM']=='D'))
																{		
																	 echo "Barang Sudah Tiba Di Store";
																}else	
																			
																if($rvSCatShowEQ["KIRIM_DARI_STOK"]=='0')
																{

																			#echo "<br>";																				
																	#echo "<br>ADA NOMOR RO<br>";
																	$objConnectShowEQ = oci_connect('fsd', 'fsd', 'localhost:1521/XE');
																	if(($rvSCatShowEQ["STATUS_PERMINTAAN"]==' ')&&($rvSCatShowEQ["STATUS_KIRIM"]==''))
																	{
																		if($rvSCatShowEQ["STATUS_PERMINTAAN"]==' '){ echo "Menunggu Persetujuan untuk tiket ".$_GET['pid'];												
																		}elseif($rvSCatShowEQ["STATUS_PERMINTAAN"]=='D'){ echo "Barang Sudah Disetujui Oleh FSD MGR/SUB MGR";																
																		}elseif($rvSCatShowEQ["STATUS_PERMINTAAN"]=='R'){ echo "Barang Sedang Diproses FSD untuk Tutup Hari";}	
																	}elseif(($rvSCatShowEQ["STATUS_PERMINTAAN"]=='D')&&($rvSCatShowEQ["STATUS_KIRIM"]==''))
																	{
																		if($rvSCatShowEQ["STATUS_PERMINTAAN"]==' '){ echo "Menunggu Persetujuan untuk tiket ".$_GET['pid'];												
																		}elseif($rvSCatShowEQ["STATUS_PERMINTAAN"]=='D'){ echo "Barang Sudah Disetujui Oleh FSD MGR/SUB MGR";																
																		}elseif($rvSCatShowEQ["STATUS_PERMINTAAN"]=='R'){ echo "Barang Sedang Diproses FSD untuk Tutup Hari";}	
																	}elseif(($rvSCatShowEQ["STATUS_PERMINTAAN"]=='R')&&($rvSCatShowEQ["STATUS"]==' ')&&($rvSCatShowEQ["STATUS_KIRIM"]==''))
																	{
																		if($rvSCatShowEQ["STATUS"]==' '){ echo "Barang Sedang Diproses FSD untuk Tutup Hari";												
																		}elseif($rvSCatShowEQ["STATUS"]=='O'){ echo "Barang Sedang Proses Order";																
																		}elseif($rvSCatShowEQ["STATUS"]=='P'){ echo "Barang Sudah Proses DO Balik"; }
																	}elseif(($rvSCatShowEQ["STATUS_PERMINTAAN"]=='R')&&
																			(($rvSCatShowEQ["STATUS"]=='O')||($rvSCatShowEQ["STATUS"]=='P')||($rvSCatShowEQ["STATUS"]=='C'))
																			)
																	{	
																				
																			if($rvSCatShowEQ["STATUS"]==' '){ echo "Barang Sedang Diproses FSD untuk Tutup Hari";												
																			}elseif($rvSCatShowEQ["STATUS"]=='O') /* echo "X3<br>Barang Sedang Proses Pesan(Order) dari Gudang";*/ 
																			{	#echo "Barang Sedang Proses Pesan(Order) Ke Procurement A";
																				#echo "Barang Sedang Diproses oleh FSD untuk Receive PO";
																				echo "Barang Masih Diproses Oleh FSD untuk lebih lanjut";
																				$qShowStsBrgFrmProc = "select STATUS_BARANG from PROCPOEQC where NOMOR_RO = '".$rvSCatShowEQ["NOMOR_RO"]."'";
																				$qobjParseShowStsBrgFrmProc = oci_parse ($objConnectShowEQ, $qShowStsBrgFrmProc);  
																					   oci_execute ($qobjParseShowStsBrgFrmProc,OCI_DEFAULT); 	
																				$rvSCatShowStsBrgFrmProc = oci_fetch_array($qobjParseShowStsBrgFrmProc,OCI_BOTH);  																			
																				if($rvSCatShowStsBrgFrmProc['STATUS_BARANG']=='Barang Dalam Pemesanan')
																				{
																					echo "<br>Dan Saat ini Barang masih dalam Pemesanan";
																				}elseif($rvSCatShowStsBrgFrmProc['STATUS_BARANG']=='Barang Dikirim Ke FSD')
																				{
																					echo "<br>Dan Saat ini Barang dalam Proses Dikirim Ke FSD";	
																				}
																			}elseif($rvSCatShowEQ["STATUS"]=='P'){ echo "Barang Sudah Diterima Oleh Store (Proses DO Balik)";
																			}elseif($rvSCatShowEQ["STATUS"]=='C'){ echo "Barang Dibatalkan Pemesanannya";}
																			echo "<br>";
																										

																			#echo "<br>STATUS_KIRIM : ".$rvStatusKirimKeStore['STATUS_KIRIM'];
																		#	if(($rvStatusKirimKeStore['STATUS_KIRIM']=='K')||($rvStatusKirimKeStore['STATUS_KIRIM']=='D'))
																		##	if(($rvStatusKirimKeStore['STATUS_KIRIM']=='K'))
																		##	{		
																		##		if($rvStatusKirimKeStore["STATUS_KIRIM"]=='K'){ echo "Dan Barang Dalam Proses Kirim Ke Store A";														
																				#}elseif($rvStatusKirimKeStore["STATUS_KIRIM"]=='D'){ echo "Dan Barang Sudah Diterima Oleh Store";																
																		##		}	
																		##	}	echo "<br>";
																			
																	}
																							
																}	
																elseif($rvSCatShowEQ["KIRIM_DARI_STOK"]!='0')
																{
																	##echo "<br>ADA NOMOR RO<br>";
																	 
								
																		$objConnectShowEQ = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
																		if(($rvSCatShowEQ["STATUS_PERMINTAAN"]==' '))
																		{
																			if($rvSCatShowEQ["STATUS_PERMINTAAN"]==' '){ echo "Menunggu Persetujuan untuk tiket ".$_GET['pid'];												
																			}elseif($rvSCatShowEQ["STATUS_PERMINTAAN"]=='D'){ echo "Barang Sudah Disetujui Oleh FSD MGR/SUB MGR";																
																			}elseif($rvSCatShowEQ["STATUS_PERMINTAAN"]=='R'){ echo "Barang Sedang Diproses FSD untuk Tutup Hari";}	
																		
																		}elseif(($rvSCatShowEQ["STATUS_PERMINTAAN"]=='D'))
																		{   #echo "<br>STATUS_PERMINTAAN DISETUJUI<br>";
																			if($rvSCatShowEQ["STATUS_PERMINTAAN"]==' '){ echo "Menunggu Persetujuan untuk tiket ".$_GET['pid'];												
																			}elseif($rvSCatShowEQ["STATUS_PERMINTAAN"]=='D'){ echo "Barang Sudah Disetujui Oleh FSD MGR/SUB MGR";																
																			}elseif($rvSCatShowEQ["STATUS_PERMINTAAN"]=='R'){ echo "Barang Sedang Diproses FSD untuk Tutup Hari";}	
																		
																		}elseif(($rvSCatShowEQ["STATUS_PERMINTAAN"]=='R')&&($rvSCatShowEQ["STATUS"]==' '))
																		{
																			if($rvSCatShowEQ["STATUS"]==' '){ echo "Barang Sedang Diproses FSD untuk Tutup Hari";												
																			}elseif($rvSCatShowEQ["STATUS"]=='O'){ echo "X2<br>Barang Sedang Proses Pesan(Order) dari Gudang";																
																			}elseif($rvSCatShowEQ["STATUS"]=='P'){ echo "Barang Sudah Proses DO Balik";}
																		
																		##}elseif(($rvSCatShowSW["STATUS_PERMINTAAN"]=='R')&&
																		##		(($rvSCatShowSW["STATUS"]=='O')||($rvSCatShowSW["STATUS"]=='P')||($rvSCatShowSW["STATUS"]=='C'))&&
																		##		($rvSCatShowSW["STATUS_KIRIM"]==''))
																		##{
																			/**
																			if($rvSCatShowSW["STATUS"]==' '){ echo "Barang Sedang Diproses FSD untuk Tutup Hari";												
																			}elseif($rvSCatShowSW["STATUS"]=='O'){ echo "X3<br>Barang Sedang Proses Pesan(Order) dari Gudang";																
																			}elseif($rvSCatShowSW["STATUS"]=='P'){ echo "Barang Sudah Proses DO Balik";
																			}elseif($rvSCatShowSW["STATUS"]=='C'){ echo "Barang Dibatalkan Pemesanannya";}
																			**/
																		#}elseif(($rvSCatShowSW["STATUS_KIRIM"]!='')){
																		}elseif(($rvSCatShowEQ["STATUS_PERMINTAAN"]=='R')&&
																				(($rvSCatShowEQ["STATUS"]=='O')||($rvSCatShowEQ["STATUS"]=='P')||($rvSCatShowEQ["STATUS"]=='C'))
																				)
																		{	
																			if($rvSCatShowEQ["STATUS"]==' '){ echo "Barang Sedang Diproses FSD untuk Tutup Hari";												
																			}elseif($rvSCatShowEQ["STATUS"]=='O'){ echo "X3<br>Barang Sedang Proses Pesan(Order) dari Gudang";																
																			}elseif($rvSCatShowEQ["STATUS"]=='P'){ echo "Barang Sudah Diterima Oleh Store (Proses DO Balik)";
																			}elseif($rvSCatShowEQ["STATUS"]=='C'){ echo "Barang Dibatalkan Pemesanannya";}
																			echo "<br>";
																			#echo "<br>NOMOR RO : <b>".$rvSCatShowSW["NOMOR_RO"].'</b>';
																			#echo "<br>select STATUS_KIRIM from FSDKRMSW where NO_RO = '".$rvSCatShowSW['NOMOR_RO']."'";
																			##$objConnectShowSW = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
																			#$qStatusKirimKeStore = "select STATUS_KIRIM from FSDKRMSW where NO_RO = 'RO030318001'";
																			
																			$qStatusKirimKeStore = "select STATUS_KIRIM from FSDKRMEQ where NO_RO = '".$rvSCatShowEQ['NOMOR_RO']."'";
																			$qobjParseStatusKirimKeStore = oci_parse ($objConnectShowEQ, $qStatusKirimKeStore);  
																						  oci_execute ($qobjParseStatusKirimKeStore,OCI_DEFAULT);
																			$rvStatusKirimKeStore = oci_fetch_array($qobjParseStatusKirimKeStore,OCI_BOTH);	
																			#echo "<br>STATUS_KIRIM : ".$rvStatusKirimKeStore['STATUS_KIRIM'];
																		#	if(($rvStatusKirimKeStore['STATUS_KIRIM']=='K')||($rvStatusKirimKeStore['STATUS_KIRIM']=='D'))
																			if(($rvStatusKirimKeStore['STATUS_KIRIM']=='K'))
																			{		
																				if($rvStatusKirimKeStore["STATUS_KIRIM"]=='K'){ echo "Dan Barang Dalam Proses Kirim Ke Store B";														
																				#}elseif($rvStatusKirimKeStore["STATUS_KIRIM"]=='D'){ echo "Dan Barang Sudah Diterima Oleh Store";																
																				}	
																			}	echo "<br>";
																			
																		}	
																	

																}	
															#}	
															#}elseif(($rCekStatusTiketX->ticketstatus_id=='0')||($rCekStatusTiketX->ticketstatus_id=='5'))
															}elseif($rCekStatusTiketX->ticketstatus_id=='0')
															{
																##echo "<br>SOLVED ZZZ<br>";
																#if($rvSCatShowEQ["STATUS_KIRIM"]=='K'){ echo "BBB1....<br>Barang Proses Dikirim Ke Store";														
																#}elseif($rvSCatShowEQ["STATUS_KIRIM"]=='D'){ echo "Barang Sudah Diterima Oleh Store";																
																#}																	
																if($rvSCatShowEQ["KIRIM_DARI_STOK"]=='0') /* ORDER KE PROCUREMENT */
																{
																	##echo "<br>STOK TIDAK TERSEDIA DI GUDANG<br>";
																	##echo "<br>STATUS KIRIM : ".$rvSCatShowEQ["STATUS_KIRIM"];
																	
																/*	if(($rvSCatShowEQ["STATUS_PERMINTAAN"]=='R')&&
																			(($rvSCatShowEQ["STATUS"]=='O')||($rvSCatShowEQ["STATUS"]=='P')||($rvSCatShowEQ["STATUS"]=='C'))&&
																			($rvSCatShowEQ["STATUS_KIRIM"]=='D'))
																	{
																		if($rvSCatShowEQ["STATUS_KIRIM"]=='K'){ echo "Barang Proses Dikirim Ke Store";														
																		}elseif($rvSCatShowEQ["STATUS_KIRIM"]=='D'){ echo "Barang Sudah Diterima Oleh Store";																
																		}	
																	#}elseif(($rvSCatShowEQ["STATUS_KIRIM"]!='')){
																	}elseif(($rvSCatShowEQ["STATUS_PERMINTAAN"]=='R')&&
																			(($rvSCatShowEQ["STATUS"]=='O')||($rvSCatShowEQ["STATUS"]=='P')||($rvSCatShowEQ["STATUS"]=='C'))&&
																			($rvSCatShowEQ["STATUS_KIRIM"]=='K'))
																	{
																		if($rvSCatShowEQ["STATUS_KIRIM"]=='K'){ echo "Barang Proses Dikirim Ke Store";														
																		}elseif($rvSCatShowEQ["STATUS_KIRIM"]=='D'){ echo "Barang Sudah Diterima Oleh Store";																
																		}	
																	}	
																*/	
																	#	if($rvSCatShowEQ["STATUS_KIRIM"]=='K'){ echo "ZZ1....<br>Barang Proses Dikirim Ke Store";														
																		if($rvSCatShowEQ["STATUS_KIRIM"]=='K'){ echo "Barang Proses Dikirim Ke Store";														
																		}elseif($rvSCatShowEQ["STATUS_KIRIM"]=='D'){ echo "Barang Sudah Diterima Oleh Store";																
																		}																	
																}	
																elseif($rvSCatShowEQ["KIRIM_DARI_STOK"]!='0') /* ORDER KE GUDANG */
																{
																	#echo "<br>ADA NOMOR RO<br>";
																	 ##echo "<br>STOK TERSEDIA DI GUDANG<br>";
								
																		$objConnectShowEQ = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
																	if(($rvSCatShowEQ["STATUS_PERMINTAAN"]=='R')&&
																			(($rvSCatShowEQ["STATUS"]=='O')||($rvSCatShowEQ["STATUS"]=='P')||($rvSCatShowEQ["STATUS"]=='C'))&&
																			($rvSCatShowEQ["STATUS_KIRIM"]=='D'))
																	{
																		if($rvSCatShowEQ["STATUS_KIRIM"]=='K'){ echo "ZZ5....<br>Barang Proses Dikirim Ke Store";														
																		}elseif($rvSCatShowEQ["STATUS_KIRIM"]=='D'){ echo "Barang Sudah Diterima Oleh Store";																
																		}	
																	#}elseif(($rvSCatShowEQ["STATUS_KIRIM"]!='')){
																	}elseif(($rvSCatShowEQ["STATUS_PERMINTAAN"]=='R')&&
																			(($rvSCatShowEQ["STATUS"]=='O')||($rvSCatShowEQ["STATUS"]=='P')||($rvSCatShowEQ["STATUS"]=='C'))&&
																			($rvSCatShowEQ["STATUS_KIRIM"]=='K'))
																	{
																		if($rvSCatShowEQ["STATUS_KIRIM"]=='K'){ echo "ZZ4....<br>Barang Proses Dikirim Ke Store";														
																		}elseif($rvSCatShowEQ["STATUS_KIRIM"]=='D'){ echo "Barang Sudah Diterima Oleh Store";																
																		}	
																	}	
																}															
															}elseif($rCekStatusTiketX->ticketstatus_id=='5')
															{
																##echo "CLOSED<br>";
																if($rvSCatShowEQ["KIRIM_DARI_STOK"]=='0') /* ORDER KE PROCUREMENT */
																{
																	#echo "<br>STOK TIDAK TERSEDIA DI GUDANG<br>";
																	#echo "<br>ADA NOMOR RO<br>";
																/**	if(($rvSCatShowEQ["STATUS_PERMINTAAN"]=='R')&&
																			(($rvSCatShowEQ["STATUS"]=='O')||($rvSCatShowEQ["STATUS"]=='P')||($rvSCatShowEQ["STATUS"]=='C'))&&
																			($rvSCatShowEQ["STATUS_KIRIM"]=='D'))
																	{
																		if($rvSCatShowEQ["STATUS_KIRIM"]=='K'){ echo "ZZ3....<br>Barang Proses Dikirim Ke Store";														
																		}elseif($rvSCatShowEQ["STATUS_KIRIM"]=='D'){ echo "Barang Sudah Diterima Oleh Store";																
																		}	
																**/
																	#}elseif(($rvSCatShowEQ["STATUS_KIRIM"]!='')){
																/**	}elseif(($rvSCatShowEQ["STATUS_PERMINTAAN"]=='R')&&
																			(($rvSCatShowEQ["STATUS"]=='O')||($rvSCatShowEQ["STATUS"]=='P')||($rvSCatShowEQ["STATUS"]=='C'))&&
																			($rvSCatShowEQ["STATUS_KIRIM"]=='K'))
																	{
																		if($rvSCatShowEQ["STATUS_KIRIM"]=='K'){ echo "ZZ2....<br>Barang Proses Dikirim Ke Store";														
																		}elseif($rvSCatShowEQ["STATUS_KIRIM"]=='D'){ echo "Barang Sudah Diterima Oleh Store";																
																		}	
																	}	
																**/
																	echo "Barang Sudah Diterima Oleh Store<br>(Proses DO Balik)";																
																}	
																elseif($rvSCatShowEQ["KIRIM_DARI_STOK"]!='0') /* ORDER KE GUDANG */
																{
																	#echo "<br>ADA NOMOR RO<br>";
																	 ##echo "<br>STOK TERSEDIA DI GUDANG<br>";
								
																		$objConnectShowEQ = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
																	if(($rvSCatShowEQ["STATUS_PERMINTAAN"]=='R')&&
																			(($rvSCatShowEQ["STATUS"]=='O')||($rvSCatShowEQ["STATUS"]=='P')||($rvSCatShowEQ["STATUS"]=='C'))&&
																			($rvSCatShowEQ["STATUS_KIRIM"]==''))
																	{
																		if($rvSCatShowEQ["STATUS"]==' '){ echo "Barang Sedang Diproses FSD untuk Tutup Hari";												
																		}elseif($rvSCatShowEQ["STATUS"]=='O'){ /*echo "X1...Z<br>Barang Sedang Proses Order Ke Procurement";*/	echo "Barang Sedang Proses Order Ke Procurement";																
																		#}elseif($rvSCatShowEQ["STATUS"]=='O'){ echo "Barang Sedang Proses Order Ke Procurement";																
																		}elseif($rvSCatShowEQ["STATUS"]=='P'){ echo "Barang Sudah Proses DO Balik";
																		}elseif($rvSCatShowEQ["STATUS"]=='C'){ echo "Barang Dibatalkan Pemesanannya";}
																	#}elseif(($rvSCatShowEQ["STATUS_KIRIM"]!='')){
																	}elseif(($rvSCatShowEQ["STATUS_PERMINTAAN"]=='R')&&
																			(($rvSCatShowEQ["STATUS"]=='O')||($rvSCatShowEQ["STATUS"]=='P')||($rvSCatShowEQ["STATUS"]=='C'))&&
																			($rvSCatShowEQ["STATUS_KIRIM"]!=''))
																	{
																		if($rvSCatShowEQ["STATUS_KIRIM"]=='K'){ /* echo "ZZ1....<br>Barang Proses Dikirim Ke Store";*/ echo "Barang Proses Dikirim Ke Store";														
																		}elseif($rvSCatShowEQ["STATUS_KIRIM"]=='D'){ echo "Barang Sudah Diterima Oleh Store";																
																		}	
																	}	
																}																
															} 															
																?>
																</center>
																</td>														
															</tr>
														<? } ?>	
									<? }elseif($rcektipebrgs->kode_tipebrg=='RQS-03-000113')
									{ 

													$qCekStatusTiketStore = mysql_query("SELECT ticket_id, ticketstatus_id, ticketapprovalstatus_id, ticketapprovalstatus_id2, ticketapprovalstatus_id3 
																						FROM ITH_TICKET_HEADER WHERE ticket_id = '$_GET[pid]'");
													$rCekStatusTiketStore = mysql_fetch_object($qCekStatusTiketStore);
											
													if(($rCekStatusTiketStore->ticketapprovalstatus_id!='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id2!='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id3!='1'))
													{												

															$qvCekDataSW = mysql_query("SELECT DISTINCT ticket_id, no_permintaan, request_by, kode_tipebarang, kode_tipebarang_sw, kode_tipebarang_sp,
															kuantitas, nama_tipebarang, nama_tipebarang_sw, nama_tipebarang_sp
															FROM ITH_TIPEBARANG_KODE
															WHERE ticket_id = '$_GET[pid]'");
															$rvCekDataSW = mysql_fetch_object($qvCekDataSW);													
													
															$objConnectShowSW = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
															$qShowSW = "select FSDORDSC_TEMP.NO_PERMINTAAN, FSDORDSC_TEMP.TGL_PERMINTAAN, FSDORDSC_TEMP.TGL_BUAT_FSD, 
																	FSDORDSC_TEMP.KODE_BARANG, 
																	FSDBRGSP.NAMA_BARANG,
																	FSDORDSC_TEMP.JUMLAH_PERMINTAAN, FSDORDSC_TEMP.JUMLAH_ORDER, FSDORDSC_TEMP.KIRIM_DARI_STOK, FSDORDSC_TEMP.TGL_DISETUJUI, 
																	FSDORDSC_TEMP.NOMOR_RO, FSDORDSC_TEMP.STATUS_PERMINTAAN
																	from FSDORDSC_TEMP 
																	JOIN FSDBRGSP ON FSDORDSC_TEMP.KODE_BARANG = FSDBRGSP.KODE_BARANG
																	where NO_PERMINTAAN = '$rvCekDataSW->no_permintaan'
																	AND JUMLAH_PERMINTAAN IS NOT NULL order by FSDORDSC_TEMP.TGL_PERMINTAAN DESC";  
															$qobjParseShowSW = oci_parse ($objConnectShowSW, $qShowSW);  
																	oci_execute ($qobjParseShowSW,OCI_DEFAULT);  													
 
													#echo "Test 1";
													}elseif
													((($rCekStatusTiketStore->ticketapprovalstatus_id=='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id2=='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id3=='1'))||
													(($rCekStatusTiketStore->ticketapprovalstatus_id=='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id2=='2')&&($rCekStatusTiketStore->ticketapprovalstatus_id3=='2'))||
													(($rCekStatusTiketStore->ticketapprovalstatus_id=='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id2=='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id3=='2'))||
													(($rCekStatusTiketStore->ticketapprovalstatus_id=='2')&&($rCekStatusTiketStore->ticketapprovalstatus_id2=='2')&&($rCekStatusTiketStore->ticketapprovalstatus_id3=='1'))||
													(($rCekStatusTiketStore->ticketapprovalstatus_id=='2')&&($rCekStatusTiketStore->ticketapprovalstatus_id2=='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id3=='1'))||
													(($rCekStatusTiketStore->ticketapprovalstatus_id=='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id2=='2')&&($rCekStatusTiketStore->ticketapprovalstatus_id3=='1')))
													{

														#echo "Test 2";
															$qvCekDataSW = mysql_query("SELECT DISTINCT ticket_id, no_permintaan, request_by, kode_tipebarang, kode_tipebarang_sw, kode_tipebarang_sp,
															kuantitas, nama_tipebarang, nama_tipebarang_sw, nama_tipebarang_sp
															FROM ITH_TIPEBARANG_KODE
															WHERE ticket_id = '$_GET[pid]'");
															$rvCekDataSW = mysql_fetch_object($qvCekDataSW);													
														$objConnectShowSW = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
															#$qCekNomorROSW = "SELECT NOMOR_RO FROM FSDORDSC WHERE no_permintaan = '$rvCekDataSW->no_permintaan'";
															$qCekNomorROSW = "select FSDORDSC.KODE_CABANG, MSTCBGDT.NAMA_CABANG, FSDORDSC.NO_PERMINTAAN,
															FSDORDSC.NOMOR_RO,FSDORDSC.TGL_PERMINTAAN, FSDORDSC.KODE_BARANG, 
															FSDBRGSP.NAMA_BARANG, FSDORDSC.JUMLAH_PERMINTAAN, 
															FSDORDSC.STATUS_PERMINTAAN, FSDROSWC.STATUS, FSDORDSC.KIRIM_DARI_STOK
															from FSDORDSC
															JOIN MSTCBGDT ON FSDORDSC.KODE_CABANG = MSTCBGDT.CABANG_HEADER
															JOIN FSDBRGSP ON FSDORDSC.KODE_BARANG = FSDBRGSP.KODE_BARANG
															JOIN FSDROSWC ON FSDORDSC.NOMOR_RO = FSDROSWC.NO_RO
															WHERE FSDORDSC.NO_PERMINTAAN ='$rvCekDataSW->no_permintaan'";
															$qobjParseCekNomorROSW = oci_parse ($objConnectShowSW, $qCekNomorROSW);  
																				oci_execute ($qobjParseCekNomorROSW,OCI_DEFAULT); 
															$rvCekNomorROSW = oci_fetch_array($qobjParseCekNomorROSW,OCI_BOTH);
															#echo '<br>Nomor RO : '.$rvCekNomorROSW['NOMOR_RO'];
														#if($rvCekNomorROSW['KIRIM_DARI_STOK']=='0')
														#{	
															#echo "KIRIM_DARI_STOK(Ke Procurement) : ".$rvCekNomorROSW['KIRIM_DARI_STOK'];
														#}elseif($rvCekNomorROSW['KIRIM_DARI_STOK']!='0')
														#{
															#echo "KIRIM_DARI_STOK(Stok dari Gudang) : ".$rvCekNomorROSW['KIRIM_DARI_STOK'];	
															if($rvCekNomorROSW['NOMOR_RO']!='')
															{	
																##echo "<br>STATUS PERMINTAAN : ".$rvCekNomorROSW['STATUS_PERMINTAAN'].'<br>STATUS : '.$rvCekNomorROSW['STATUS'];
																##echo "<br>Nomor Permintaan : ".$rvCekDataSW->no_permintaan;
																$qvCekDataSW = mysql_query("SELECT DISTINCT ticket_id, no_permintaan, request_by, kode_tipebarang, kode_tipebarang_sw, kode_tipebarang_sp,
																kuantitas, nama_tipebarang, nama_tipebarang_sw, nama_tipebarang_sp
																FROM ITH_TIPEBARANG_KODE
																WHERE ticket_id = '$_GET[pid]'");
																$rvCekDataSW = mysql_fetch_object($qvCekDataSW);															
																$qCekNomorROSW2 = "select DISTINCT FSDORDSC.KODE_CABANG, MSTCBGDT.NAMA_CABANG, FSDORDSC.NO_PERMINTAAN,
																FSDORDSC.NOMOR_RO,FSDORDSC.TGL_PERMINTAAN, FSDORDSC.KODE_BARANG, 
																FSDBRGSP.NAMA_BARANG, FSDORDSC.JUMLAH_PERMINTAAN, 
																FSDORDSC.STATUS_PERMINTAAN, FSDROSWC.STATUS
																from FSDORDSC
																JOIN MSTCBGDT ON FSDORDSC.KODE_CABANG = MSTCBGDT.CABANG_HEADER
																JOIN FSDBRGSP ON FSDORDSC.KODE_BARANG = FSDBRGSP.KODE_BARANG
																JOIN FSDROSWC ON FSDORDSC.NOMOR_RO = FSDROSWC.NO_RO
																WHERE FSDORDSC.NO_PERMINTAAN ='$rvCekDataSW->no_permintaan'";
																$qobjParseCekNomorROSW2 = oci_parse ($objConnectShowSW, $qCekNomorROSW2);  
																					      oci_execute ($qobjParseCekNomorROSW2,OCI_DEFAULT); 
																$rvCekNomorROSW2 = oci_fetch_array($qobjParseCekNomorROSW2,OCI_BOTH);		
																##echo "<br>STATUS_PERMINTAAN : ".$rvCekNomorROSW2['STATUS_PERMINTAAN'];
																##echo "<br>STATUS RO : ".$rvCekNomorROSW2['STATUS'];	
																if(($rvCekNomorROSW2['STATUS_PERMINTAAN']=='R')&&($rvCekNomorROSW2['STATUS']==' '))	
																{
																	echo "<br>TEST R dan Blank";
																	$qvCekDataSW = mysql_query("SELECT DISTINCT ticket_id, no_permintaan, request_by, kode_tipebarang, kode_tipebarang_sw, kode_tipebarang_sp,
																	kuantitas, nama_tipebarang, nama_tipebarang_sw, nama_tipebarang_sp
																	FROM ITH_TIPEBARANG_KODE
																	WHERE ticket_id = '$_GET[pid]'");
																	$rvCekDataSW = mysql_fetch_object($qvCekDataSW);																		
																	$qShowSW = "select DISTINCT FSDORDSC_TEMP.NO_PERMINTAAN, FSDORDSC_TEMP.TGL_PERMINTAAN, FSDORDSC_TEMP.TGL_BUAT_FSD, 
																	FSDORDSC_TEMP.KODE_BARANG, 
																	FSDBRGSP.NAMA_BARANG,
																	FSDORDSC_TEMP.JUMLAH_PERMINTAAN, FSDORDSC_TEMP.JUMLAH_ORDER, FSDORDSC_TEMP.KIRIM_DARI_STOK, FSDORDSC_TEMP.TGL_DISETUJUI, 
																	FSDORDSC_TEMP.NOMOR_RO, FSDORDSC_TEMP.STATUS_PERMINTAAN
																	from FSDORDSC_TEMP 
																	JOIN FSDBRGSP ON FSDORDSC_TEMP.KODE_BARANG = FSDBRGSP.KODE_BARANG
																	where FSDORDSC_TEMP.NO_PERMINTAAN = '$rvCekDataSW->no_permintaan'
																	AND FSDORDSC_TEMP.JUMLAH_PERMINTAAN IS NOT NULL order by FSDORDSC_TEMP.TGL_PERMINTAAN DESC";
																	$qobjParseShowSW = oci_parse ($objConnectShowSW, $qShowSW);  
																	                   oci_execute ($qobjParseShowSW,OCI_DEFAULT);
																	#echo "TEST R DAN BLANK";
																}elseif(($rvCekNomorROSW2['STATUS_PERMINTAAN']=='R')&&($rvCekNomorROSW2['STATUS']=='O'))
																{
																	echo "TEST1";	
																	$qvCekDataSW = mysql_query("SELECT DISTINCT ticket_id, no_permintaan, request_by, kode_tipebarang, kode_tipebarang_sw, kode_tipebarang_sp,
																	kuantitas, nama_tipebarang, nama_tipebarang_sw, nama_tipebarang_sp
																	FROM ITH_TIPEBARANG_KODE
																	WHERE ticket_id = '$_GET[pid]'");
																	$rvCekDataSW = mysql_fetch_object($qvCekDataSW);																	
																	##echo "<br>TEST STATUS PERMINTAAN : R DAN Status RO : O";
																	$qShowSW = "select DISTINCT FSDORDSC.KODE_CABANG, MSTCBGDT.NAMA_CABANG, FSDORDSC.NO_PERMINTAAN,
																	FSDORDSC.NOMOR_RO,FSDORDSC.TGL_PERMINTAAN, FSDORDSC.KODE_BARANG, 
																	FSDBRGSP.NAMA_BARANG, FSDORDSC.JUMLAH_PERMINTAAN, 
																	FSDORDSC.STATUS_PERMINTAAN, FSDROSWC.STATUS
																	from FSDORDSC
																	JOIN MSTCBGDT ON FSDORDSC.KODE_CABANG = MSTCBGDT.CABANG_HEADER
																	JOIN FSDBRGSP ON FSDORDSC.KODE_BARANG = FSDBRGSP.KODE_BARANG
																	JOIN FSDROSWC ON FSDORDSC.NOMOR_RO = FSDROSWC.NO_RO
																	WHERE FSDORDSC.NO_PERMINTAAN = '$rvCekDataSW->no_permintaan'";														
																	$qobjParseShowSW = oci_parse ($objConnectShowSW, $qShowSW);  
																					   oci_execute ($qobjParseShowSW,OCI_DEFAULT); #echo "<br>Test 1";
																	#echo '<br>Nomor permintaan : '.$rvCekDataSW->no_permintaan;
																	#echo '<br>Nomor RO : '.$rvCekNomorROSW['NOMOR_RO'];
																}elseif(($rvCekNomorROSW2['STATUS_PERMINTAAN']=='R')&&($rvCekNomorROSW2['STATUS']=='P'))
																{
																	echo "<br>TEST R DAN P";	
																	$qvCekDataSW = mysql_query("SELECT DISTINCT ticket_id, no_permintaan, request_by, kode_tipebarang, kode_tipebarang_sw, kode_tipebarang_sp,
																	kuantitas, nama_tipebarang, nama_tipebarang_sw, nama_tipebarang_sp
																	FROM ITH_TIPEBARANG_KODE
																	WHERE ticket_id = '$_GET[pid]'");
																	$rvCekDataSW = mysql_fetch_object($qvCekDataSW);															
																	/*
																	$qShowSW = "SELECT FSDORDSC.KODE_CABANG, MSTCBGDT.NAMA_CABANG, FSDORDSC.NO_PERMINTAAN, FSDPOSWC.NO_PO,
																	FSDORDSC.NOMOR_RO,FSDORDSC.TGL_PERMINTAAN, FSDORDSC.KODE_BARANG, 
																	FSDBRGSP.NAMA_BARANG, FSDORDSC.JUMLAH_PERMINTAAN, 
																	FSDPRSWC.NO_DO, FSDPRSWC.QTY, FSDPRSWC.HARGA_BELI, FSDPRSWC.MATA_UANG, FSDPRSWC.TOTAL_BELI, FSDPRSWC.TGL_RECEIVE, FSDPRSWC.TGL_DO,
																	FSDKRMSW.TGL_TRANSAKSI, FSDKRMSW.QTY_KIRIM, FSDKRMSW.JUMLAH_DITERIMA, 
																	FSDKRMSW.NAMA_PENGIRIM, FSDKRMSW.TANGGAL_KIRIM, FSDKRMSW.NAMA_PENERIMA, FSDKRMSW.TANGGAL_DITERIMA,
																	FSDKRMSW.QTY_KIRIM_BARU, FSDKRMSW.QTY_KIRIM_BAIK, FSDKRMSW.HARGA_BARU, FSDKRMSW.HARGA_BAIK,
																	FSDORDSC.STATUS_PERMINTAAN, FSDROSWC.STATUS, FSDKRMSW.STATUS_KIRIM
																	FROM FSDORDSC
																	JOIN MSTCBGDT ON FSDORDSC.KODE_CABANG = MSTCBGDT.CABANG_HEADER
																	JOIN FSDBRGSP ON FSDORDSC.KODE_BARANG = FSDBRGSP.KODE_BARANG
																	JOIN FSDROSWC ON FSDORDSC.NOMOR_RO = FSDROSWC.NO_RO
																	JOIN FSDPOSWC ON FSDORDSC.NOMOR_RO = FSDPOSWC.NO_RO
																	JOIN FSDPRSWC ON FSDPOSWC.NO_PO = FSDPRSWC.NO_PO
																	JOIN FSDKRMSW ON FSDORDSC.NOMOR_RO = FSDKRMSW.NO_RO
																	WHERE FSDORDSC.NO_PERMINTAAN = '$rvCekDataSW->no_permintaan'";														
																	*/
																	$qShowSW = "select DISTINCT FSDORDSC.KODE_CABANG, MSTCBGDT.NAMA_CABANG, 
																	FSDORDSC.NO_PERMINTAAN,
																	FSDORDSC.NOMOR_RO,FSDORDSC.TGL_PERMINTAAN, FSDORDSC.KODE_BARANG, 
																	FSDBRGSP.NAMA_BARANG, FSDORDSC.JUMLAH_PERMINTAAN, 
																	FSDORDSC.STATUS_PERMINTAAN, FSDROSWC.STATUS
																	from FSDORDSC
																	JOIN MSTCBGDT ON FSDORDSC.KODE_CABANG = MSTCBGDT.CABANG_HEADER
																	JOIN FSDBRGSP ON FSDORDSC.KODE_BARANG = FSDBRGSP.KODE_BARANG
																	JOIN FSDROSWC ON FSDORDSC.NOMOR_RO = FSDROSWC.NO_RO
																	WHERE FSDORDSC.NO_PERMINTAAN = '$rvCekDataSW->no_permintaan'";
																	$qobjParseShowSW = oci_parse ($objConnectShowSW, $qShowSW);
																					   oci_execute ($qobjParseShowSW,OCI_DEFAULT);	
																}
															#echo "<br>Test 1X";	
															}elseif($rvCekNomorROSW['NOMOR_RO']=='')
															{		
																	$qvCekDataSW = mysql_query("SELECT DISTINCT ticket_id, no_permintaan, request_by, kode_tipebarang, kode_tipebarang_sw, kode_tipebarang_sp,
																	kuantitas, nama_tipebarang, nama_tipebarang_sw, nama_tipebarang_sp
																	FROM ITH_TIPEBARANG_KODE
																	WHERE ticket_id = '$_GET[pid]'");
																	$rvCekDataSW = mysql_fetch_object($qvCekDataSW);			
																	##echo "<br>XXX Nomor Permintaan : ".$rvCekDataSW->no_permintaan;	
																	$objConnectShowSW = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
																	#$qCekNomorROSW = "SELECT NOMOR_RO FROM FSDORDSC WHERE no_permintaan = '$rvCekDataSW->no_permintaan'";
																	/* $qCekKirimDariStok = "select FSDORDSC.KODE_CABANG, MSTCBGDT.NAMA_CABANG, FSDORDSC.NO_PERMINTAAN,
																	FSDORDSC.NOMOR_RO,FSDORDSC.TGL_PERMINTAAN, FSDORDSC.KODE_BARANG, 
																	FSDBRGSP.NAMA_BARANG, FSDORDSC.JUMLAH_PERMINTAAN, 
																	FSDORDSC.STATUS_PERMINTAAN, FSDROSWC.STATUS, FSDORDSC.KIRIM_DARI_STOK
																	from FSDORDSC
																	JOIN MSTCBGDT ON FSDORDSC.KODE_CABANG = MSTCBGDT.CABANG_HEADER
																	JOIN FSDBRGSP ON FSDORDSC.KODE_BARANG = FSDBRGSP.KODE_BARANG
																	JOIN FSDROSWC ON FSDORDSC.NOMOR_RO = FSDROSWC.NO_RO
																	WHERE FSDORDSC.NO_PERMINTAAN ='$rvCekDataSW->no_permintaan'";	*/																
																	$qCekKirimDariStok = "select DISTINCT FSDORDSC.NO_PERMINTAAN, FSDORDSC.TGL_PERMINTAAN, FSDORDSC.TGL_BUAT_FSD, 
																							FSDORDSC.KODE_BARANG, 
																							FSDBRGSP.NAMA_BARANG,
																							FSDORDSC.JUMLAH_PERMINTAAN, FSDORDSC.JUMLAH_ORDER, FSDORDSC.KIRIM_DARI_STOK, FSDORDSC.TGL_DISETUJUI, 
																							FSDORDSC.NOMOR_RO, FSDORDSC.STATUS_PERMINTAAN
																							from FSDORDSC 
																							JOIN FSDBRGSP ON FSDORDSC.KODE_BARANG = FSDBRGSP.KODE_BARANG
																							where FSDORDSC.NO_PERMINTAAN = '$rvCekDataSW->no_permintaan'
																							AND FSDORDSC.JUMLAH_PERMINTAAN IS NOT NULL order by FSDORDSC.TGL_PERMINTAAN DESC";
																	$qobjParseCekKirimDariStok = oci_parse ($objConnectShowSW, $qCekKirimDariStok);  
																						oci_execute ($qobjParseCekKirimDariStok,OCI_DEFAULT); 
																	$rvCekKirimDariStok = oci_fetch_array($qobjParseCekKirimDariStok,OCI_BOTH);
																	##echo "<br>STATUS_PERMINTAAN : ".$rvCekKirimDariStok['STATUS_PERMINTAAN'];
																	if($rvCekKirimDariStok['STATUS_PERMINTAAN']=='D')
																	{
																		##echo "<br>STATUS PERMINTAAN DISETUJUI OLEH FSD";
																		$qvCekDataSW = mysql_query("SELECT DISTINCT ticket_id, no_permintaan, request_by, kode_tipebarang, kode_tipebarang_sw, kode_tipebarang_sp,
																		kuantitas, nama_tipebarang, nama_tipebarang_sw, nama_tipebarang_sp
																		FROM ITH_TIPEBARANG_KODE
																		WHERE ticket_id = '$_GET[pid]'");
																		$rvCekDataSW = mysql_fetch_object($qvCekDataSW);			
																		#echo "<br>Nomor Permintaan : ".$rvCekDataSW->no_permintaan;																			
																		$objConnectShowSW = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
																		$qShowSW = "select DISTINCT FSDORDSC.NO_PERMINTAAN, FSDORDSC.TGL_PERMINTAAN, FSDORDSC.TGL_BUAT_FSD, 
																					FSDORDSC.KODE_BARANG, 
																					FSDBRGSP.NAMA_BARANG,
																					FSDORDSC.JUMLAH_PERMINTAAN, FSDORDSC.JUMLAH_ORDER, FSDORDSC.KIRIM_DARI_STOK, FSDORDSC.TGL_DISETUJUI, 
																					FSDORDSC.NOMOR_RO, FSDORDSC.STATUS_PERMINTAAN
																					from FSDORDSC 
																					JOIN FSDBRGSP ON FSDORDSC.KODE_BARANG = FSDBRGSP.KODE_BARANG
																					where FSDORDSC.NO_PERMINTAAN = '$rvCekDataSW->no_permintaan'
																					AND FSDORDSC.JUMLAH_PERMINTAAN IS NOT NULL order by FSDORDSC.TGL_PERMINTAAN DESC";
																		$qobjParseShowSW = oci_parse ($objConnectShowSW, $qShowSW);  
																		oci_execute ($qobjParseShowSW,OCI_DEFAULT);	
																		##echo "<br>1.NOMOR RO KOSONG + STATUS_PERMINTAAN : ".$rvCekKirimDariStok['STATUS_PERMINTAAN'];	
																	}elseif($rvCekKirimDariStok['STATUS_PERMINTAAN']=='R')
																	{	
																		$objConnectShowSW = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
																		$qShowSW = "select DISTINCT FSDORDSC.NO_PERMINTAAN, FSDORDSC.TGL_PERMINTAAN, FSDORDSC.TGL_BUAT_FSD, 
																		FSDORDSC.KODE_BARANG, 
																		FSDBRGSP.NAMA_BARANG,
																		FSDORDSC.JUMLAH_PERMINTAAN, FSDORDSC.JUMLAH_ORDER, FSDORDSC.KIRIM_DARI_STOK, FSDORDSC.TGL_DISETUJUI, 
																		FSDORDSC.NOMOR_RO, FSDORDSC.STATUS_PERMINTAAN
																		from FSDORDSC 
																		JOIN FSDBRGSP ON FSDORDSC.KODE_BARANG = FSDBRGSP.KODE_BARANG
																		where FSDORDSC.NO_PERMINTAAN = '$rvCekDataSW->no_permintaan'
																		AND FSDORDSC.JUMLAH_PERMINTAAN IS NOT NULL order by FSDORDSC.TGL_PERMINTAAN DESC";
																		$qobjParseShowSW = oci_parse ($objConnectShowSW, $qShowSW);  
																		oci_execute ($qobjParseShowSW,OCI_DEFAULT);		
																		echo "<br>2.NOMOR RO KOSONG + STATUS_PERMINTAAN : ".$rvCekKirimDariStok['STATUS_PERMINTAAN'];	
																	}elseif($rvCekKirimDariStok['STATUS_PERMINTAAN']==' ')
																	{	
																		$objConnectShowSW = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
																		$qShowSW = "select DISTINCT FSDORDSC_TEMP.NO_PERMINTAAN, FSDORDSC_TEMP.TGL_PERMINTAAN, FSDORDSC_TEMP.TGL_BUAT_FSD, 
																		FSDORDSC_TEMP.KODE_BARANG, 
																		FSDBRGSP.NAMA_BARANG,
																		FSDORDSC_TEMP.JUMLAH_PERMINTAAN, FSDORDSC_TEMP.JUMLAH_ORDER, FSDORDSC_TEMP.KIRIM_DARI_STOK, FSDORDSC_TEMP.TGL_DISETUJUI, 
																		FSDORDSC_TEMP.NOMOR_RO, FSDORDSC_TEMP.STATUS_PERMINTAAN
																		from FSDORDSC_TEMP 
																		JOIN FSDBRGSP ON FSDORDSC_TEMP.KODE_BARANG = FSDBRGSP.KODE_BARANG
																		where FSDORDSC_TEMP.NO_PERMINTAAN = '$rvCekDataSW->no_permintaan'
																		AND FSDORDSC_TEMP.JUMLAH_PERMINTAAN IS NOT NULL order by FSDORDSC_TEMP.TGL_PERMINTAAN DESC";
																		$qobjParseShowSW = oci_parse ($objConnectShowSW, $qShowSW);  
																		oci_execute ($qobjParseShowSW,OCI_DEFAULT);  #echo "<br>Test 2X";
																		#echo '<br>Nomor permintaan : '.$rvCekDataSW->no_permintaan;
																		#echo '<br>Nomor RO : '.$rvCekNomorROSW['NOMOR_RO'];
																		##echo "<br>3.NOMOR RO KOSONG + STATUS_PERMINTAAN KOSONG";
																	}
															}														
														#}													
													}													
															while($rvSCatShowSW = oci_fetch_array($qobjParseShowSW,OCI_BOTH))  
															{  
															?>  												
															<tr>												
																<td width="7%">
																	<center><?=$rvSCatShowSW["NO_PERMINTAAN"];?></center>
																</td>
																<td width="17%">
																	<center><?=$rvSCatShowSW["TGL_PERMINTAAN"];?></center>
																</td>
																
																<td width="20%">
																<center><?=$rvSCatShowSW["KODE_BARANG"];?></center>
																</td>														
																<td width="20%">
																<center><?=$rvSCatShowSW["NAMA_BARANG"];?></center>
																</td>														
																<td width="15%">
																	<center><?=$rvSCatShowSW["JUMLAH_PERMINTAAN"].' <b>UNIT A2</b>';?>
																	<? if($rvSCatShowSW["NOMOR_RO"]!=''){ ?>
																		<br><?="<b>No.RO : ".$rvSCatShowSW["NOMOR_RO"].'</b>';?>
																	<? }elseif($rvSCatShowSW["NOMOR_RO"]==''){ ?>
																		<br><?="<b>No.RO : Belum Ada Nomor RO</b>";?>
																	<? } ?>																	
																	<? if($rvSCatShowSW["NO_PO"]!=''){ ?>
																		<br><?="<b>No.PO : ".$rvSCatShowSW["NO_PO"].'</b>';?>
																	<? }elseif($rvSCatShowSW["NO_PO"]==''){ ?>
																		<br><?="<b>No.PO : - </b>";?>
																	<? } ?>
																	</center>
																</td>
																<!--<td width="15%">
																<center><!? if($rvSCatShowSW["STATUS_PERMINTAAN"]=='S'){ echo "Barang Kirim Ke Store";
																}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]=='F'){ echo "Barang Masih ada diFSD";																	
																}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]=='X'){ echo "Barang Dalam Proses Procurement";																	
																}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]=='R'){ echo "Barang Sedang Dalam Proses FSD";
																}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]=='B'){ echo "Barang Belum Diterima Oleh Store";
																}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]=='O'){ echo "Barang Sudah Diterima Oleh Store";
																}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]==' '){ echo "Menunggu Persetujuan untuk tiket ".$_GET['pid'];
																}else{
																	echo "Menunggu Persetujuan dari Atasan FSD.";
																}	
																?></center>																		
																</td>-->
															<!--? if(($rvSCatShowSW["NOMOR_RO"]==' ')&&($rvSCatShowSW["STATUS_PERMINTAAN"]==' ')){ ?-->	
															<!--	<td width="15%">
																<center><!? if($rvSCatShowSW["STATUS_PERMINTAAN"]=='S'){ echo "Barang Kirim Ke Store";
																}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]=='F'){ echo "Barang Masih ada diFSD";																	
																}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]=='X'){ echo "Barang Dalam Proses Procurement";																	
																}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]=='R'){ echo "Barang Akan Segera Diproses FSD";
																}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]=='B'){ echo "Barang Belum Diterima Oleh Store";
																}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]=='O'){ echo "Barang Sudah Diterima Oleh Store";
																}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]==' '){ echo "Menunggu Persetujuan untuk tiket ".$_GET['pid'];
																}	
																?></center>																	
																</td>	
															<!--? }elseif(($rvSCatShowSW["NOMOR_RO"]!=' ')&&($rvSCatShowSW["STATUS_PERMINTAAN"]=='R')){ ?-->
																<!--? 
																	$qShowSWStatusRO = "select * from FSDROEQC where NOMOR_RO= '".$rvSCatShowSW["NOMOR_RO"]."'";  
																	$qobjParseShowSWStatusRO = oci_parse ($objConnectShowSW, $qShowSWStatusRO);  
																	oci_execute ($qobjParseShowSWStatusRO,OCI_DEFAULT);	
																	$rvSCatShowSWStatusRO = oci_fetch_array($qobjParseShowSWStatusRO,OCI_BOTH); 																	
																?>	
																	<td width="15%">
																		<center><!--? if($rvSCatShowSW["STATUS_PERMINTAAN"]=='S'){ echo "Barang Kirim Ke Store";
																		}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]=='F'){ echo "Barang Masih ada diFSD";																	
																		}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]=='X'){ echo "Barang Dalam Proses Procurement";																	
																		}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]=='R'){ echo "Barang Akan Segera Diproses FSD";
																		}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]=='B'){ echo "Barang Belum Diterima Oleh Store";
																		}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]=='O'){ echo "Barang Sudah Diterima Oleh Store";
																		}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]==' '){ echo "Menunggu Persetujuan untuk tiket ".$_GET['pid'];
																		}	
																		?-->
																		<!--? if($rvSCatShowSWStatusRO["STATUS"]=='O'){ echo "Barang Kirim Ke Store(Order)";
																		}elseif($rvSCatShowSWStatusRO["STATUS"]!='O'){ echo "Barang Masih Dalam Proses FSD";
																		}	
																		?></center>																	
																	</td> -->	
															<!--? } ?-->
																<td width="15%">
																<center>
																<? #echo "NOMOR RO :".$rvSCatShowSW["NOMOR_RO"];
															#if($rvSCatShowSW["NOMOR_RO"]=='')
															#{	
																#echo "<br>TIDAK ADA NOMOR RO";
															#echo "<br>TEST NOMOR RO : ".$rvSCatShowSW["NOMOR_RO"];
															#	if($rvSCatShowSW["STATUS_PERMINTAAN"]=='R'){ echo "Barang Sedang Diproses FSD untuk Tutup Hari";														
															#	}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]=='D'){ echo "Barang Sudah Disetujui Oleh FSD MGR/SUB MGR";																
															#	}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]==' '){ echo "Menunggu Persetujuan untuk tiket ".$_GET['pid'];
															#	}	
															#}
															#elseif($rvSCatShowSW["NOMOR_RO"]!='')
															#{		
																if($rvSCatShowSW["KIRIM_DARI_STOK"]=='0')
																{
																	#echo "<br>ADA NOMOR RO<br>";
																	if(($rvSCatShowSW["STATUS_PERMINTAAN"]==' ')&&($rvSCatShowSW["STATUS_KIRIM"]==''))
																	{
																		if($rvSCatShowSW["STATUS_PERMINTAAN"]==' '){ 
																			#echo "Tiket ID : ".$_GET[pid];
																			$qcekstoretiketstatus = mysql_query("SELECT ticketstatus_id FROM ITH_TICKET_HEADER WHERE ticket_id = '".$_GET['pid']."' ");
																			$rcekstoretiketstatus = mysql_fetch_object($qcekstoretiketstatus);
																			#echo "<br>SELECT tiketstatus_id FROM ITH_TICKET_HEADER WHERE ticket_id = '".$_GET['pid']."'";
																			#echo 'Tiket Status = '.$rcekstoretiketstatus->ticketstatus_id;
																			if($rcekstoretiketstatus->ticketstatus_id=='1')
																			{
																				echo "<br>MENUNGGU DI ASSIGNMENT OLEH ADMIN";																				
																			}	
																			elseif($rcekstoretiketstatus->ticketstatus_id=='2')
																			{
																				echo "<br>Menunggu di Approval untuk tiket ".$_GET['pid'];																					
																			}	
																			elseif($rcekstoretiketstatus->ticketstatus_id=='3')
																			{
																				echo "<br>Maaf, tiket ini (".$_GET['pid'].') Sudah Di Batalkan. Terimakasih.';																					
																			}	
																		}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]=='D'){ echo "Barang Sudah Disetujui Oleh FSD MGR/SUB MGR";																
																		}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]=='R'){ echo "Barang Sedang Diproses FSD untuk Tutup Hari";}	
																	}elseif(($rvSCatShowSW["STATUS_PERMINTAAN"]=='D')&&($rvSCatShowSW["STATUS_KIRIM"]==''))
																	{
																		if($rvSCatShowSW["STATUS_PERMINTAAN"]==' '){ echo "Menunggu Persetujuan untuk tiket ".$_GET['pid'];												
																		}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]=='D'){ echo "Barang Sudah Disetujui Oleh FSD MGR/SUB MGR";																
																		}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]=='R'){ echo "Barang Sedang Diproses FSD untuk Tutup Hari";}	
																	}elseif(($rvSCatShowSW["STATUS_PERMINTAAN"]=='R')&&($rvSCatShowSW["STATUS"]==' ')&&($rvSCatShowSW["STATUS_KIRIM"]=='')){
																		if($rvSCatShowSW["STATUS"]==' '){ echo "Barang Sedang Diproses FSD untuk Tutup Hari";												
																		}elseif($rvSCatShowSW["STATUS"]=='O'){ echo "Barang Sedang Proses Order";																
																		}elseif($rvSCatShowSW["STATUS"]=='P'){ echo "Barang Sudah Proses DO Balik";}
																	}elseif(($rvSCatShowSW["STATUS_PERMINTAAN"]=='R')&&
																			(($rvSCatShowSW["STATUS"]=='O')||($rvSCatShowSW["STATUS"]=='P')||($rvSCatShowSW["STATUS"]=='C'))&&
																			($rvSCatShowSW["STATUS_KIRIM"]=='')){
																		if($rvSCatShowSW["STATUS"]==' '){ echo "Barang Sedang Diproses FSD untuk Tutup Hari";												
																		}elseif($rvSCatShowSW["STATUS"]=='O'){ echo "X1<br>Barang Sedang Proses Order Ke Procurement";																
																		}elseif($rvSCatShowSW["STATUS"]=='P'){ echo "Barang Sudah Proses DO Balik";
																		}elseif($rvSCatShowSW["STATUS"]=='C'){ echo "Barang Dibatalkan Pemesanannya";}
																	}elseif(($rvSCatShowSW["STATUS_KIRIM"]!='')){
																		if($rvSCatShowSW["STATUS_KIRIM"]=='K'){ echo "Barang Proses Dikirim Ke Store";														
																		}elseif($rvSCatShowSW["STATUS_KIRIM"]=='D'){ echo "Barang Sudah Diterima Oleh Store";																
																		}	
																	}	
																}	
																elseif($rvSCatShowSW["KIRIM_DARI_STOK"]!='0')
																{
																	##echo "<br>ADA NOMOR RO<br>";
																	if(($rvSCatShowSW["STATUS_PERMINTAAN"]==' '))
																	{
																		if($rvSCatShowSW["STATUS_PERMINTAAN"]==' '){ echo "Menunggu Persetujuan untuk tiket ".$_GET['pid'];												
																		}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]=='D'){ echo "Barang Sudah Disetujui Oleh FSD MGR/SUB MGR";																
																		}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]=='R'){ echo "Barang Sedang Diproses FSD untuk Tutup Hari";}	
																	
																	}elseif(($rvSCatShowSW["STATUS_PERMINTAAN"]=='D'))
																	{   #echo "<br>STATUS_PERMINTAAN DISETUJUI<br>";
																		if($rvSCatShowSW["STATUS_PERMINTAAN"]==' '){ echo "Menunggu Persetujuan untuk tiket ".$_GET['pid'];												
																		}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]=='D'){ echo "Barang Sudah Disetujui Oleh FSD MGR/SUB MGR";																
																		}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]=='R'){ echo "Barang Sedang Diproses FSD untuk Tutup Hari";}	
																	
																	}elseif(($rvSCatShowSW["STATUS_PERMINTAAN"]=='R')&&($rvSCatShowSW["STATUS"]==' '))
																	{
																		if($rvSCatShowSW["STATUS"]==' '){ echo "Barang Sedang Diproses FSD untuk Tutup Hari";												
																		}elseif($rvSCatShowSW["STATUS"]=='O'){ echo "X2<br>Barang Sedang Proses Pesan(Order) dari Gudang";																
																		}elseif($rvSCatShowSW["STATUS"]=='P'){ echo "Barang Sudah Proses DO Balik";}
																	
																	##}elseif(($rvSCatShowSW["STATUS_PERMINTAAN"]=='R')&&
																	##		(($rvSCatShowSW["STATUS"]=='O')||($rvSCatShowSW["STATUS"]=='P')||($rvSCatShowSW["STATUS"]=='C'))&&
																	##		($rvSCatShowSW["STATUS_KIRIM"]==''))
																	##{
																		/**
																		if($rvSCatShowSW["STATUS"]==' '){ echo "Barang Sedang Diproses FSD untuk Tutup Hari";												
																		}elseif($rvSCatShowSW["STATUS"]=='O'){ echo "X3<br>Barang Sedang Proses Pesan(Order) dari Gudang";																
																		}elseif($rvSCatShowSW["STATUS"]=='P'){ echo "Barang Sudah Proses DO Balik";
																		}elseif($rvSCatShowSW["STATUS"]=='C'){ echo "Barang Dibatalkan Pemesanannya";}
																		**/
																	#}elseif(($rvSCatShowSW["STATUS_KIRIM"]!='')){
																	}elseif(($rvSCatShowSW["STATUS_PERMINTAAN"]=='R')&&
																			(($rvSCatShowSW["STATUS"]=='O')||($rvSCatShowSW["STATUS"]=='P')||($rvSCatShowSW["STATUS"]=='C'))
																			)
																	{	
																		if($rvSCatShowSW["STATUS"]==' '){ echo "Barang Sedang Diproses FSD untuk Tutup Hari";												
																		}elseif($rvSCatShowSW["STATUS"]=='O'){ /* echo "X3<br>Barang Sedang Proses Pesan(Order) dari Gudang";*/ 
																			$qvCekDataSW2 = mysql_query("SELECT DISTINCT ticket_id, no_permintaan, request_by, kode_tipebarang, kode_tipebarang_sw, kode_tipebarang_sp,
																			kuantitas, nama_tipebarang, nama_tipebarang_sw, nama_tipebarang_sp
																			FROM ITH_TIPEBARANG_KODE
																			WHERE ticket_id = '$_GET[pid]'");
																			$rvCekDataSW2 = mysql_fetch_object($qvCekDataSW2);																			
																			$objConnectShowSW = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
																			$qShowSW2 = "select KIRIM_DARI_STOK
																			from FSDORDSC 
																			where NO_PERMINTAAN = '$rvCekDataSW2->no_permintaan'
																			";
																			$qobjParseShowSW2 = oci_parse ($objConnectShowSW, $qShowSW2);  
																			oci_execute ($qobjParseShowSW2,OCI_DEFAULT);																					
																			$rvSCatShowSW2 = oci_fetch_array($qobjParseShowSW2,OCI_BOTH);
																			if($rvSCatShowSW2["KIRIM_DARI_STOK"]=='0'){
																				echo "Barang Sedang Proses Pesan(Order) Ke Procurement";						
																				$qShowStsBrgFrmProcSW = "select STATUS_BARANG from PROCPOSWC where NO_RO = '".$rvSCatShowSW["NOMOR_RO"]."' AND KODE_BARANG = '".$rvSCatShowSW["KODE_BARANG"]."'";
																				$qobjParseShowStsBrgFrmProcSW = oci_parse ($objConnectShowSW, $qShowStsBrgFrmProcSW);  
																					   oci_execute ($qobjParseShowStsBrgFrmProcSW,OCI_DEFAULT); 	
																				$rvSCatShowStsBrgFrmProcSW = oci_fetch_array($qobjParseShowStsBrgFrmProcSW,OCI_BOTH);  																			
																				if($rvSCatShowStsBrgFrmProcSW['STATUS_BARANG']=='Barang Dalam Pemesanan'){
																					echo "<br>Dan Saat ini Barang masih dalam Pemesanan";
																				}elseif($rvSCatShowStsBrgFrmProcSW['STATUS_BARANG']=='Barang Dikirim Ke FSD'){
																				echo "<br>Dan Saat ini Barang dalam Proses Dikirim Ke FSD";	
																				}																					
																			}elseif($rvSCatShowSW2["KIRIM_DARI_STOK"]!='0'){
																				echo "Barang Sedang Proses Pesan(Order) dari Gudang";		
																			/*	$qShowStsBrgFrmProcSW2 = "select STATUS_BARANG from PROCPOSWC where NO_RO = '".$rvSCatShowSW["NOMOR_RO"]."' AND KODE_BARANG = '".$rvSCatShowSW["KODE_BARANG"]."'";
																				$qobjParseShowStsBrgFrmProcSW2 = oci_parse ($objConnectShowSW, $qShowStsBrgFrmProcSW2);  
																					   oci_execute ($qobjParseShowStsBrgFrmProcSW2,OCI_DEFAULT); 	
																				$rvSCatShowStsBrgFrmProcSW2 = oci_fetch_array($qobjParseShowStsBrgFrmProcSW2,OCI_BOTH);  																			
																				if($rvSCatShowStsBrgFrmProcSW2['STATUS_BARANG']=='Barang Dalam Pemesanan'){
																					echo "<br>Dan Saat ini Barang masih dalam Pemesanan";
																				}elseif($rvSCatShowStsBrgFrmProcSW2['STATUS_BARANG']=='Barang Dikirim Ke FSD'){
																				echo "<br>Dan Saat ini Barang dalam Proses Dikirim Ke FSD";	
																				}																				
																				#echo $rvSCatShowSW2['KIRIM_DARI_STOK'];																
																			*/
																			}
																			
																		}elseif($rvSCatShowSW["STATUS"]=='P'){ 
																			$qcekstoretiketstatus2 = mysql_query("SELECT ticketstatus_id FROM ITH_TICKET_HEADER WHERE ticket_id = '".$_GET['pid']."' ");
																			$rcekstoretiketstatus2 = mysql_fetch_object($qcekstoretiketstatus2);
																			#echo "<br>SELECT tiketstatus_id FROM ITH_TICKET_HEADER WHERE ticket_id = '".$_GET['pid']."'";
																			#echo 'Tiket Status = '.$rcekstoretiketstatus->ticketstatus_id;
																			if($rcekstoretiketstatus2->ticketstatus_id=='5')
																			{																			
																				echo "Barang Sudah Diterima Oleh Store (Proses DO Balik)";
																			}
																		}elseif($rvSCatShowSW["STATUS"]=='C'){ echo "Barang Dibatalkan Pemesanannya";}
																		echo "<br>";
																		#echo "<br>NOMOR RO : <b>".$rvSCatShowSW["NOMOR_RO"].'</b>';
																		#echo "<br>select STATUS_KIRIM from FSDKRMSW where NO_RO = '".$rvSCatShowSW['NOMOR_RO']."'";
																		##$objConnectShowSW = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
																		#$qStatusKirimKeStore = "select STATUS_KIRIM from FSDKRMSW where NO_RO = 'RO030318001'";
																		
																		$qStatusKirimKeStore = "select STATUS_KIRIM from FSDKRMSW where NO_RO = '".$rvSCatShowSW['NOMOR_RO']."'";
																		$qobjParseStatusKirimKeStore = oci_parse ($objConnectShowSW, $qStatusKirimKeStore);  
																	                  oci_execute ($qobjParseStatusKirimKeStore,OCI_DEFAULT);
																		$rvStatusKirimKeStore = oci_fetch_array($qobjParseStatusKirimKeStore,OCI_BOTH);	
																		#echo "<br>STATUS_KIRIM : ".$rvStatusKirimKeStore['STATUS_KIRIM'];
																	#	if(($rvStatusKirimKeStore['STATUS_KIRIM']=='K')||($rvStatusKirimKeStore['STATUS_KIRIM']=='D'))
																			$qcekstoretiketstatus3 = mysql_query("SELECT ticketstatus_id FROM ITH_TICKET_HEADER WHERE ticket_id = '".$_GET['pid']."' ");
																			$rcekstoretiketstatus3 = mysql_fetch_object($qcekstoretiketstatus3);
																			#echo "<br>SELECT tiketstatus_id FROM ITH_TICKET_HEADER WHERE ticket_id = '".$_GET['pid']."'";
																			#echo 'Tiket Status = '.$rcekstoretiketstatus->ticketstatus_id;
																			if($rcekstoretiketstatus3->ticketstatus_id=='0')
																			{																		
																				if(($rvStatusKirimKeStore['STATUS_KIRIM']=='K'))
																				{		
																					if($rvStatusKirimKeStore["STATUS_KIRIM"]=='K'){ echo "Dan Barang Dalam Proses Kirim Ke Store C";														
																					#}elseif($rvStatusKirimKeStore["STATUS_KIRIM"]=='D'){ echo "Dan Barang Sudah Diterima Oleh Store";																
																					}	
																				}	echo "<br>";
																			}
																	}	
																}	
															#}	
																?>
																</center>
																</td>	
															</tr>
														<? } ?>										
										
									<? }elseif($rcektipebrgs->kode_tipebrg=='RQS-03-000114'){ 
										$qCekStatusApprvlufb = mysql_query("SELECT ticketapprovalstatus_id, ticketapprovalstatus_id2, ticketapprovalstatus_id3
										FROM ITH_TICKET_HEADER WHERE ticket_id = '".$_GET['pid']."'");
										$rCekStatusApprvlufb = mysql_fetch_object($qCekStatusApprvlufb);
										
										if($rCekStatusApprvlufb->ticketapprovalstatus_id==1)
										{  // UFB Setelah Di approval			
										echo "<br>Status Approval : ".$rCekStatusApprvlufb->ticketapprovalstatus_id;	
										$qvCekDataSP = mysql_query("SELECT DISTINCT ticket_id, no_permintaan, request_by, kode_tipebarang, kode_tipebarang_sw, kode_tipebarang_sp,
															kuantitas, nama_tipebarang, nama_tipebarang_sw, nama_tipebarang_sp
															FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$_GET['pid']."'");
															$rvCekDataSP = mysql_fetch_object($qvCekDataSP);
															
															$objConnectShowSP = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
															$qShowSP = "select FSDORDSP.NO_PERMINTAAN, FSDORDSP.TGL_PERMINTAAN, FSDORDSP.TGL_BUAT_FSD, FSDORDSP.KODE_BARANG, 
															FSDBRGSP.NAMA_BARANG,
															FSDORDSP.JUMLAH_PERMINTAAN, FSDORDSP.JUMLAH_ORDER, FSDORDSP.TGL_DISETUJUI, 
															FSDORDSP.NOMOR_RO, FSDORDSP.STATUS_PERMINTAAN
															from FSDORDSP 
															JOIN FSDBRGSP ON FSDORDSP.KODE_BARANG = FSDBRGSP.KODE_BARANG
															where FSDORDSP.NO_PERMINTAAN = '".$rvCekDataSP->no_permintaan."'
															AND FSDORDSP.JUMLAH_PERMINTAAN IS NOT NULL order by FSDORDSP.TGL_PERMINTAAN DESC";  
															$qobjParseShowSP = oci_parse ($objConnectShowSP, $qShowSP);  
															oci_execute ($qobjParseShowSP,OCI_DEFAULT);  

															while($rvSCatShowSP = oci_fetch_array($qobjParseShowSP,OCI_BOTH))  
															{  
															?>  												
															<tr>												
																<td width="7%">
																	<center>123</center>
																</td>
																<td width="17%">
																	<center>06/08/2018</center>
																</td>
																
																<td width="20%">
																<center>A123</center>
																</td>														
																<td width="20%">
																<center>M</center>
																</td>														
																<td width="15%">
																	<center><?=$rvSCatShowSP["JUMLAH_PERMINTAAN"].' <b>UNIT A3</b>';?>
																	<? if($rvSCatShowSP["NOMOR_RO"]!=''){ ?>
																		<br><?="<b>No.RO : ".$rvSCatShowSP["NOMOR_RO"].'</b>';?>
																	<? }elseif($rvSCatShowSP["NOMOR_RO"]==''){ ?>
																		<br><?="<b>No.RO : Belum Ada Nomor RO</b>";?>
																	<? } ?>																	
																	<? if($rvSCatShowSP["NO_PO"]!=''){ ?>
																		<br><?="<b>No.PO : ".$rvSCatShowSP["NO_PO"].'</b>';?>
																	<? }elseif($rvSCatShowSP["NO_PO"]==''){ ?>
																		<br><?="<b>No.PO : - </b>";?>
																	<? } ?>
																	</center>
																</td>
																<td width="15%">
																<center><? if($rvSCatShowSP["STATUS_PERMINTAAN"]=='S'){ echo "Barang Kirim Ke Store";
																}elseif($rvSCatShowSP["STATUS_PERMINTAAN"]=='F'){ echo "Barang Masih ada diFSD";																	
																}elseif($rvSCatShowSP["STATUS_PERMINTAAN"]=='X'){ echo "Barang Dalam Proses Procurement";																	
																}elseif($rvSCatShowSP["STATUS_PERMINTAAN"]=='R'){ echo "Barang Sedang Dalam Proses FSD";
																}elseif($rvSCatShowSP["STATUS_PERMINTAAN"]=='B'){ echo "Barang Belum Diterima Oleh Store";
																}elseif($rvSCatShowSP["STATUS_PERMINTAAN"]=='O'){ echo "Barang Sudah Diterima Oleh Store";																
																}elseif($rvSCatShowSP["STATUS_PERMINTAAN"]==' '){ echo "Menunggu Persetujuan untuk tiket ".$_GET['pid'];
																}else{
																	echo "Menunggu Persetujuan dari Atasan FSD.";
																}	
																?></center>																	
																</td>																	
															</tr>
														<? } ?>		
											<? oci_close($objConnectShowSP); ?>			
										<? }elseif($rCekStatusApprvlufb->ticketapprovalstatus_id==2)
										{  // UFB Sebelum Di approval			
											$qvCekDataSPX = mysql_query("SELECT no_permintaan FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$_GET['pid']."'");
															$rvCekDataSPX = mysql_fetch_object($qvCekDataSPX);
										#	echo "<br>Tiket ID = ".$_GET['pid'];
										#	echo "<br>Nomor Permintaan = ".$rvCekDataSPX->no_permintaan;
															$objConnectShowSPX = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
														/****
															$qShowSPX = "select FSDORDSP.NO_PERMINTAAN, FSDORDSP.TGL_PERMINTAAN, FSDORDSP.TGL_BUAT_FSD, FSDORDSP.KODE_BARANG, 
															FSDBRGSP.NAMA_BARANG,
															FSDORDSP.JUMLAH_PERMINTAAN, FSDORDSP.JUMLAH_ORDER, FSDORDSP.TGL_DISETUJUI, 
															FSDORDSP.NOMOR_RO, FSDORDSP.STATUS_PERMINTAAN
															from FSDORDSP 
															JOIN FSDBRGSP ON FSDORDSP.KODE_BARANG = FSDBRGSP.KODE_BARANG
															where FSDORDSP.NO_PERMINTAAN = 'GPB-438A'
															ORDER BY FSDORDSP.TGL_PERMINTAAN DESC";
														****/
															#$qShowSPX = "SELECT NO_PERMINTAAN, TGL_PERMINTAAN, KODE_BARANG FROM FSDORDSP_TEMP";
															
															$qShowSPX = "select FSDORDSP_TEMP.NO_PERMINTAAN, FSDORDSP_TEMP.TGL_PERMINTAAN, 
																		FSDORDSP_TEMP.TGL_BUAT_FSD, FSDORDSP_TEMP.KODE_BARANG,FSDBRGSP.NAMA_BARANG,
																		FSDORDSP_TEMP.JUMLAH_PERMINTAAN, FSDORDSP_TEMP.JUMLAH_ORDER, FSDORDSP_TEMP.TGL_DISETUJUI, 
																		FSDORDSP_TEMP.NOMOR_RO, FSDORDSP_TEMP.STATUS_PERMINTAAN
																		from FSDORDSP_TEMP 
																		JOIN FSDBRGSP ON FSDORDSP_TEMP.KODE_BARANG = FSDBRGSP.KODE_BARANG
																		WHERE FSDORDSP_TEMP.NO_PERMINTAAN = '".$rvCekDataSPX->no_permintaan."'
																		ORDER BY FSDORDSP_TEMP.TGL_PERMINTAAN DESC"; 															
														
														/*
															$qShowSPX = "select FSDORDSP_TEMP.NO_PERMINTAAN, FSDORDSP_TEMP.TGL_PERMINTAAN, 
															FSDORDSP_TEMP.TGL_BUAT_FSD, FSDORDSP_TEMP.KODE_BARANG,FSDBRGSP.NAMA_BARANG,
															FSDORDSP_TEMP.JUMLAH_PERMINTAAN, FSDORDSP_TEMP.JUMLAH_ORDER, FSDORDSP_TEMP.TGL_DISETUJUI, 
															FSDORDSP_TEMP.NOMOR_RO, FSDORDSP_TEMP.STATUS_PERMINTAAN
															from FSDORDSP_TEMP 
															JOIN FSDBRGSP ON FSDORDSP_TEMP.KODE_BARANG = FSDBRGSP.KODE_BARANG
															where FSDORDSP_TEMP.NO_PERMINTAAN = '".$rvCekDataSPX->NO_PERMINTAAN."'
															AND FSDORDSP_TEMP.JUMLAH_PERMINTAAN IS NOT NULL 
															ORDER BY FSDORDSP_TEMP.TGL_PERMINTAAN DESC";  
														*/
														/*	$qShowSPX = "select FSDORDSP_TEMP.NO_PERMINTAAN, FSDORDSP_TEMP.TGL_PERMINTAAN, 
																		FSDORDSP_TEMP.TGL_BUAT_FSD, FSDORDSP_TEMP.KODE_BARANG,FSDBRGSP.NAMA_BARANG,
																		FSDORDSP_TEMP.JUMLAH_PERMINTAAN, FSDORDSP_TEMP.JUMLAH_ORDER, FSDORDSP_TEMP.TGL_DISETUJUI, 
																		FSDORDSP_TEMP.NOMOR_RO, FSDORDSP_TEMP.STATUS_PERMINTAAN
																		from FSDORDSP_TEMP 
																		JOIN FSDBRGSP ON FSDORDSP_TEMP.KODE_BARANG = FSDBRGSP.KODE_BARANG
																		where FSDORDSP_TEMP.NO_PERMINTAAN = '0818/39443'
																		ORDER BY FSDORDSP_TEMP.TGL_PERMINTAAN DESC";  
														*/																
															$qobjParseShowSPX = oci_parse ($objConnectShowSPX, $qShowSPX);  
															oci_execute ($qobjParseShowSPX,OCI_DEFAULT);   
														#	$rvSCatShowSPX2 = oci_fetch_array($qobjParseShowSPX,OCI_BOTH);
														#	echo "<br><b>Nomor Permintaan : ".$rvSCatShowSPX2["NO_PERMINTAAN"]."</b>";
															while($rvSCatShowSPX = oci_fetch_array($qobjParseShowSPX,OCI_BOTH))  
															{  
														#echo "NOMOR PERMINTAAN = ".$rvSCatShowSPX["NO_PERMINTAAN"];
															?>  												
															<tr>												
																<td width="7%">
																	<center><?=$rvSCatShowSPX["NO_PERMINTAAN"];?></center>
																</td>
																<td width="17%">
																	<center><?=$rvSCatShowSPX["TGL_PERMINTAAN"];?></center>
																</td>
																
																<td width="20%">
																<center><?=$rvSCatShowSPX["KODE_BARANG"];?></center>
																</td>														
																<td width="20%">
																<center><?=$rvSCatShowSPX["NAMA_BARANG"];?></center>
																</td>														
																<td width="15%">
																	<center><?=$rvSCatShowSPX["JUMLAH_PERMINTAAN"].' <b>UNIT A4</b>';?>
																	<? if($rvSCatShowSPX["NOMOR_RO"]!=''){ ?>
																		<br><?="<b>No.RO : ".$rvSCatShowSPX["NOMOR_RO"].'</b>';?>
																	<? }elseif(($rvSCatShowSPX["NOMOR_RO"]=='')||($rvSCatShowSPX["NOMOR_RO"]==NULL)){ ?>
																		<br><?="<b>No.RO : Belum Ada Nomor RO</b>";?>
																	<? } ?>																	
																	<? if($rvSCatShowSPX["NO_PO"]!=''){ ?>
																		<br><?="<b>No.PO : ".$rvSCatShowSPX["NO_PO"].'</b>';?>
																	<? }elseif($rvSCatShowSPX["NO_PO"]==''){ ?>
																		<br><?="<b>No.PO : - </b>";?>
																	<? } ?>
																	</center>
																</td>
																<td width="15%">
																<center><? if($rvSCatShowSPX["STATUS_PERMINTAAN"]=='S'){ echo "Barang Kirim Ke Store";
																}elseif($rvSCatShowSPX["STATUS_PERMINTAAN"]=='F'){ echo "Barang Masih ada diFSD";																	
																}elseif($rvSCatShowSPX["STATUS_PERMINTAAN"]=='X'){ echo "Barang Dalam Proses Procurement";																	
																}elseif($rvSCatShowSPX["STATUS_PERMINTAAN"]=='R'){ echo "Barang Sedang Dalam Proses FSD";
																}elseif($rvSCatShowSPX["STATUS_PERMINTAAN"]=='B'){ echo "Barang Belum Diterima Oleh Store";
																}elseif($rvSCatShowSPX["STATUS_PERMINTAAN"]=='O'){ echo "Barang Sudah Diterima Oleh Store";																
																}elseif($rvSCatShowSPX["STATUS_PERMINTAAN"]==' '){ echo "Menunggu Persetujuan untuk tiket ".$_GET['pid'];
																}else{
																	echo "Menunggu Persetujuan dari Atasan FSD.";
																}	
																?></center>																	
																</td>																	
															</tr>
														<? } ?>			
											<? oci_close($objConnectShowSPX); ?>					
										<? } ?>

									<? } ?>	
								<? } /* STATUS OPEN DAN BELUM ADA TIKET REFERENCE ATAU STATUS OPEN DAN SUDAH ADA TIKET REFERENCE */ ?>	
													</tbody>
												</table>	
												</div>	<br>
		<!--? }elseif($dtmyticket->statuslaporan_name=='Problem Teknisi Store'){ ?-->
		<? }elseif($dtmyticket->statuslaporan_name=='Problem'){ ?>
		<b><u>PERMASALAHAN DARI CABANG A2 (
			<?
				$qcektipebrgsx = mysql_query("SELECT kode_tipebrg FROM ITH_TICKET_HEADER where ticket_id = '$_GET[pid]'");
				$rcektipebrgsx = mysql_fetch_object($qcektipebrgsx);
				if($rcektipebrgsx->kode_tipebrg=='RQS-03-000112'){ 
			?>
				<?="EQUIPMENT";?>
			<?	}elseif($rcektipebrgsx->kode_tipebrg=='RQS-03-000113'){  ?>
				<?="SMALLWARE";?>
			<?	}elseif($rcektipebrgsx->kode_tipebrg=='RQS-03-000114'){ ?>
				<?="SPAREPART";?>
			<?	}
			?>
		)</u></b></center><br>		
			<script src="jquery/jquery.min.js"></script>
			<script>
				$(document).ready(function()
				{
					$("#equipmentsrc").on("keyup", function() 
					{
						var value = $(this).val().toLowerCase();
						$("#myCodes tr").filter(function() 
						{
							$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
						});
					});
					$("#smallwaresrc").on("keyup", function() 
					{
						var value = $(this).val().toLowerCase();
						$("#myCodes tr").filter(function() 
						{
							$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
						});
					});
					$("#sparepartsrc").on("keyup", function() 
					{
						var value = $(this).val().toLowerCase();
						$("#myCodes tr").filter(function() 
						{
							$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
						});
					});
				});
			</script>
			<style>
				table.blueTable 
				{
					border: 1px solid #1C6EA4; background-color: #EEEEEE; width: 100%;
					text-align: left; border-collapse: collapse; overflow-x:scroll;height:100px; position:relative;
				}
				table.blueTable td, table.blueTable th 
				{
					border: 1px solid #AAAAAA; padding: 3px 2px;				  
				}
				table.blueTable tbody td { font-size: 13px; }
				table.blueTable tr:nth-child(even) { background: #D0E4F5; }
				table.blueTable thead 
				{ 
					background: #1C6EA4; background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
					background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
					background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
					border-bottom: 2px solid #444444;
				}
				table.blueTable thead th 
				{
					font-size: 12px; text-align:center; font-weight: bold; color: #000; border-left: 2px solid #D0E4F5;
				}
				table.blueTable thead th:first-child { border-left: none; }
				table.blueTable tfoot 
				{ 
					font-size: 14px; font-weight: bold; color: #000; background: #D0E4F5;
					background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
					background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
					background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
					border-top: 2px solid #444444;
				}
				table.blueTable tfoot td { font-size: 14px; }
				table.blueTable tfoot .links { text-align: right; }
				table.blueTable tfoot .links a{ display: inline-block; background: #1C6EA4; color: #000; padding: 2px 8px; border-radius: 5px; }			
				</style>
				<input id="equipmentsrc" type="text" placeholder="Search..">
					<table class="blueTable" border="1"> 
						<thead>
							<tr>
								<?  
									$objConnect = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
								?>														
									<th width="7%">No<br>Permasalahan</th>
									<th width="17%">Tgl<br>Permasalahan</th>
									<th width="20%">Kode<br>Barang</th>
									<th width="20%">Nama<br>Barang</th>
									<!--<th width="15%">Jumlah<br>Permasal</th>-->
									<th width="10%" style="display:none;">STK<br>BARU</th>
									<th width="10%" style="display:none;">STK<br>BAIK</th>
									<th width="10%" style="display:none;">STK<br>LAMA</th>
							</tr>													
						</thead>
					</table>								
					<div style="width:100%; height:100px; overflow:auto;position:relative;">
						<table class="blueTable" border="1">
							<tbody id="myCodes">
								<?  
									$qcektipebrgdetail = mysql_query("SELECT ITH_TICKET_HEADER.ticket_id, ITH_TICKET_HEADER.kode_tipebrg 
															FROM ITH_TICKET_HEADER 
															JOIN ITH_TIPEBRG ON ITH_TICKET_HEADER.kode_tipebrg = ITH_TIPEBRG.kode_tipebrg
															WHERE ITH_TICKET_HEADER.kode_tipebrg != '' AND ITH_TICKET_HEADER.ticket_id = '$_GET[pid]'");
									$rcektipebrgdetail = mysql_fetch_object($qcektipebrgdetail);	
									if($rcektipebrgs->kode_tipebrg=='RQS-03-000112') /* EQUIPMENT INFO DI TIKET DETAIL */
									{
										$qvCekDataEQ = mysql_query("SELECT DISTINCT ITH_TIPEBARANG_KODE.NO_PERMINTAAN, ITH_TIPEBARANG_KODE.KODE_TIPEBARANG, ITH_TIPEBARANG_KODE.KODE_TIPEBARANG_SW, 
														ITH_TIPEBARANG_KODE.NAMA_TIPEBARANG, ITH_TICKET_HEADER.ticket_createdate FROM ITH_TIPEBARANG_KODE 
														JOIN ITH_TICKET_HEADER ON ITH_TIPEBARANG_KODE.ticket_id = ITH_TICKET_HEADER.ticket_id
														WHERE ITH_TIPEBARANG_KODE.ticket_id = '$_GET[pid]' GROUP BY ITH_TIPEBARANG_KODE.KODE_TIPEBARANG ASC");														
										while($rvSCatShowEQ = mysql_fetch_array($qvCekDataEQ)){					
															
															?>  												
															<tr>												
																<td width="7%">
																	<center><?=$rvSCatShowEQ["NO_PERMINTAAN"];?></center>
																</td>
																<td width="17%">
																	<center><?=$rvSCatShowEQ["ticket_createdate"];?></center>
																</td>
																
																<td width="20%">
																<center><?=$rvSCatShowEQ["KODE_TIPEBARANG"];?></center>
																</td>														
																<td width="20%">
																<center><?=$rvSCatShowEQ["NAMA_TIPEBARANG"];?></center>
																</td>		
																<td width="15%">n/a</td>																
																<td width="15%">n/a</td>																	
															</tr>
														<? } ?>	
									<? }elseif($rcektipebrgs->kode_tipebrg=='RQS-03-000113'){ 
										$qvCekDataSW = mysql_query("SELECT DISTINCT ITH_TIPEBARANG_KODE.NO_PERMINTAAN, ITH_TIPEBARANG_KODE.KODE_TIPEBARANG, ITH_TIPEBARANG_KODE.KODE_TIPEBARANG_SW, 
														ITH_TIPEBARANG_KODE.NAMA_TIPEBARANG, ITH_TICKET_HEADER.ticket_createdate FROM ITH_TIPEBARANG_KODE 
														JOIN ITH_TICKET_HEADER ON ITH_TIPEBARANG_KODE.ticket_id = ITH_TICKET_HEADER.ticket_id
														WHERE ITH_TIPEBARANG_KODE.ticket_id = '$_GET[pid]' GROUP BY ITH_TIPEBARANG_KODE.KODE_TIPEBARANG ASC");
															
														
															while($rvSCatShowSW = mysql_fetch_array($qvCekDataSW)){
															?>  												
															<tr>												
																<td width="7%">
																	<center><?=$rvSCatShowSW["NO_PERMINTAAN"];?></center>
																</td>
																<td width="17%">
																	<center><?=$rvSCatShowSW["ticket_createdate"];?></center>
																</td>
																
																<td width="20%">
																<center><?=$rvSCatShowSW["KODE_TIPEBARANG_SW"];?></center>
																</td>														
																<td width="20%">
																<center><?=$rvSCatShowSW["NAMA_TIPEBARANG"];?></center>
																</td>														
															</tr>
														<? } ?>										
										
									<? }elseif($rcektipebrgs->kode_tipebrg=='RQS-03-000114'){ 
										$qvCekDataSP = mysql_query("SELECT DISTINCT ITH_TIPEBARANG_KODE.NO_PERMINTAAN, ITH_TIPEBARANG_KODE.KODE_TIPEBARANG, 
														ITH_TIPEBARANG_KODE.KODE_TIPEBARANG_SW, ITH_TIPEBARANG_KODE.KODE_TIPEBARANG_SP, 
														ITH_TIPEBARANG_KODE.NAMA_TIPEBARANG, ITH_TICKET_HEADER.ticket_createdate FROM ITH_TIPEBARANG_KODE 
														JOIN ITH_TICKET_HEADER ON ITH_TIPEBARANG_KODE.ticket_id = ITH_TICKET_HEADER.ticket_id
														WHERE ITH_TIPEBARANG_KODE.ticket_id = '$_GET[pid]' GROUP BY ITH_TIPEBARANG_KODE.KODE_TIPEBARANG ASC");														
										while($rvSCatShowSP = mysql_fetch_array($qvCekDataSP)){		
															?>  												
															<tr>												
																<td width="7%">
																	<center><?=$rvSCatShowSP["NO_PERMINTAAN"];?></center>
																</td>
																<td width="17%">
																	<center><?=$rvSCatShowSP["ticket_createdate"];?></center>
																</td>
																
																<td width="20%">
																<center><?=$rvSCatShowSP["KODE_TIPEBARANG_SP"];?></center>
																</td>														
																<td width="20%">
																<center><?=$rvSCatShowSP["NAMA_TIPEBARANG"];?></center>
																</td>														
															</tr>
														<? } ?>										
										

									<? } ?>	
													</tbody>
												</table>	
												</div>	<br>
		<? } ?>	

<? } ?>
<? 
	/* ############################################################################################################################################ */
?>		