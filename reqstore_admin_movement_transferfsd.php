TESTX(update new 31mei19)
<? /* FROM FILE welcome.php */
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
										ITH_TIPEBARANG_KODE.tickettransferto_outletcode, ITH_TIPEBARANG_KODE.request_by,
										ITH_USER.userstoregroup_id
										FROM ITH_TIPEBARANG_KODE 
										JOIN ITH_USER ON ITH_TIPEBARANG_KODE.request_by = ITH_USER.user_nik
										WHERE ITH_TIPEBARANG_KODE.ticket_id = '".$_GET['pid']."'");
			$detailmyticketKeteranganData = mysql_fetch_object($qCekStatusKeteranganData);
			$qCekStoreNamex2 = mysql_query("SELECT * FROM ITH_USER WHERE user_nik = '".$detailmyticketKeteranganData->userstoregroup_id."'");
			$rCekStoreNamex2 = mysql_fetch_object($qCekStoreNamex2);
		?><br>
		<? if($detailmyticketKeteranganData->keterangan=='ADDING REQUEST'){ ?>
			<font color="#ffffff"><b><u>REQUEST NEW EQUIPMENT FROM STORE </u></b></font>
		<? }elseif($detailmyticketKeteranganData->keterangan=='REPLACEMENT REQUEST'){ ?>
			<font color="#ffffff"><b><u>REQUEST EQUIPMENT REPLACEMENT FROM STORE </u></b></font>
		<? }elseif(($detailmyticketKeteranganData->keterangan=='MOVE TO WAREHOUSE')){ ?>
			<font color="#ffffff"><b><u>REQUEST EQUIPMENT MOVEMENT FROM STORE ZZZ </u></b></font>
		<? }elseif($detailmyticketKeteranganData->keterangan=='MOVE TO OTHER STORE'){ ?>
			<font color="#ffffff"><b><u>TRANFER MOVEMENT ITEM FROM <?=$detailmyticketKeteranganData->user_realname.' (STORE&nbsp;'.$rCekStoreNamex2->user_realname.')'?> </u></b></font>
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
					<form name="myForm" id="myForm" target="_myFrame" action="index.php?m=form&a=strfsd&pid=<?=$_GET['pid']?>&uid=<?=$_GET['uid']?>" method="POST" height="auto">
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
					<div style="width:100%; height:auto; overflow:auto;position:relative;color:#000000;">
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
									$qcektipebrgdetail = mysql_query("SELECT DISTINCT ITH_TICKET_HEADER.TICKET_ID, ITH_TICKET_HEADER.KODE_TIPEBRG 
															FROM ITH_TICKET_HEADER 
															JOIN ITH_TIPEBRG ON ITH_TICKET_HEADER.KODE_TIPEBRG = ITH_TIPEBRG.KODE_TIPEBRG
															WHERE ITH_TICKET_HEADER.KODE_TIPEBRG != ''
															AND ITH_TIPEBARANG_KODE.TICKET_ID = '".$_GET['pid']."'");
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
																						WHERE ITH_TIPEBARANG_KODE.TICKET_ID = '".$_GET['pid']."'
																						AND(ticketapprovalstatusid_am='1' AND ticketapprovalstatusid_rom='1' AND ticketapprovalstatusid_gmo='1')
																						AND ITH_TIPEBARANG_KODE.ticket_needassist = 'YES'");
														
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
																				$qCekReqByNiks3 = mysql_query("SELECT ITH_TICKET_HEADER.ticket_id,ITH_TICKET_HEADER.ticket_createby,
																											  ITUSRX2.user_nik AS storeNik
																											 FROM ITH_TICKET_HEADER
																											 JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
																											 JOIN ITH_USER ITUSRX2 ON ITH_USER.userstoregroup_id = ITUSRX2.user_nik
																											 WHERE ITH_TICKET_HEADER.ticket_id = '".$_GET['pid']."'");
																				$rCekReqByNiks3 = mysql_fetch_object($qCekReqByNiks3);							 
																			?>																	  
																  <? 
																	$objConnectReplaceCekItem = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
																   $qvSCatReplaceCekItem = "SELECT FSDBRGEQASSET_NEW.ITEM_NAME
																			 FROM FSDMSTTRX_STORENEW 
																			 JOIN FSDBRGEQASSET_NEW ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE																			 
																			 WHERE 
																			 ((FSDMSTTRX_STORENEW.OUTLET_CODE = '".$rvCekDataEQx['TICKET_CREATEBY']."')OR(FSDMSTTRX_STORENEW.OUTLET_CODE = '".$rCekReqByNiks3->storeNik."')) 
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
																			 ((FSDMSTTRX_STORENEW.OUTLET_CODE = '".$rvCekDataEQx['TICKET_CREATEBY']."')OR(FSDMSTTRX_STORENEW.OUTLET_CODE = '".$rCekReqByNiks3->storeNik."'))  
																			 AND 
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
																			<li><b> Book Value : <font color="brown"><?='<strong>Rp.&nbsp;'.number_format($rvSCatReplaceOldItem->NILAIBUKUOLDITEM, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?></font></b></li>
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
																			<?
																				$qCekReqByNiks2 = mysql_query("SELECT ITH_TICKET_HEADER.ticket_id,ITH_TICKET_HEADER.ticket_createby,
																											  ITUSRX2.user_nik as storeNik
																											 FROM ITH_TICKET_HEADER
																											 JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
																											 JOIN ITH_USER ITUSRX2 ON ITH_USER.userstoregroup_id = ITUSRX2.user_nik
																											 WHERE ITH_TICKET_HEADER.ticket_id = '".$_GET['pid']."'");
																				$rCekReqByNiks2 = mysql_fetch_object($qCekReqByNiks2);							 
																			?>																	
																   <? 	$objConnectReplaceOldItem = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
																		$qvSCatReplaceOldItem = "SELECT DISTINCT 																			
																			 FSDMSTTRX_STORENEW.UMUR_BUKU AS UMURBUKUOLDITEM,
																			 FSDMSTTRX_STORENEW.NILAI_BUKU AS NILAIBUKUOLDITEM,
																			 FSDMSTTRX_STORENEW.ITEM_PRICE AS ITEMPRICEOLDITEM,
																			 FSDBRGEQASSET_NEW.NOMOR_TAGING AS NOTAGINGITEM
																			 FROM FSDMSTTRX_STORENEW 
																			 JOIN FSDBRGEQASSET_NEW ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE																			 
																			 WHERE 
																			 ((FSDMSTTRX_STORENEW.OUTLET_CODE = '".$rvCekDataEQx['TICKET_CREATEBY']."')OR(FSDMSTTRX_STORENEW.OUTLET_CODE = '".$rCekReqByNiks->storeNik."'))  
																			 AND 
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
																		<li><b> Book Value : <font color="brown"><?='<strong>Rp.&nbsp;'.number_format($rvSCatReplaceOldItem->NILAIBUKUOLDITEM, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?></font></b></li>
																		<!--<li><b> New Price Z : <font color="orange"><!?='<strong>Rp.&nbsp;'.number_format($rvSCatReplaceOldItem->ITEMPRICEOLDITEM, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?></font></b></li>-->
																		<li><b> Tagging Number : <font color="brown"><?=$rvSCatReplaceOldItem->NOTAGINGITEM?></font></b></li>
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
																				$qCekReqByNiks = mysql_query("SELECT ITH_TICKET_HEADER.ticket_id,ITH_TICKET_HEADER.ticket_createby,
																											 ITUSRX2.user_nik AS storeNik
																											 FROM ITH_TICKET_HEADER
																											 JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
																											 JOIN ITH_USER ITUSRX2 ON ITH_USER.userstoregroup_id = ITUSRX2.user_nik
																											 WHERE ITH_TICKET_HEADER.ticket_id = '".$_GET['pid']."'");
																				$rCekReqByNiks = mysql_fetch_object($qCekReqByNiks);							 
																			?>																
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
																			 WHERE 
																			 ((FSDMSTTRX_STORENEW.OUTLET_CODE = '".$rvCekDataEQx['TICKET_CREATEBY']."')OR(FSDMSTTRX_STORENEW.OUTLET_CODE = '".$rCekReqByNiks->storeNik."')) 
																			 AND 
																			 FSDMSTTRX_STORENEW.ITEM_CODE = '".$rvCekDataEQx["KODE_TIPEBARANG"]."' AND FSDBRGEQASSET_NEW.ITEM_NAME LIKE '%OLD'";
																	$qobjParseReplace2 = oci_parse ($objConnectReplace, $qvSCatReplace2);  
																						 oci_execute ($qobjParseReplace2,OCI_DEFAULT); 	
																	while($rvSCatReplace2 = oci_fetch_object($qobjParseReplace2,OCI_BOTH))
																	{	
																	$jumlah_desimal  = "0";
																	$pemisah_desimal = ".";
																	$pemisah_ribuan  = ".";	
																	#echo "TEST = ".$rvCekDataEQx['KETERANGAN'];
																?>		
																		<? if(($rvCekDataEQx['KETERANGAN']=='ADDING REQUEST')||($rvCekDataEQx['KETERANGAN']=='REPLACEMENT REQUEST')){ ?>
																			<div style="margin-top:-35px;"><b><u>REPLACEMENT ITEM : </u></b></div>
																			<ul style="margin-bottom:-5px;">
																			<li><b> <font color="brown"><?=$rvSCatReplace2->ITEMCODEREPLACE;?> - <?=$rvSCatReplace2->ITEMNAMEREPLACE;?></font></b></li>
																			<!--<li><b> Age		  : <font color="orange"><!?=$rvSCatReplace2->UMURBUKUREPLACE;?></font></b></li>
																			<li><b> Book Value: <font color="orange"><!?='<strong>Rp.&nbsp;'.number_format($rvSCatReplace2->NILAIBUKUREPLACE, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?></font></b></li>-->
																			<!--<li><b> New Price X : <font color="orange"><!?='<strong>Rp.&nbsp;'.number_format($rvSCatReplace2->ITEMPRICEREPLACE, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?></font></b></li>-->
																			<li><b> Tagging Number : <font color="brown"><?=$rvSCatReplace2->NOTAGREPLACE;?></font></b></li>
																			</ul>
																		<? }elseif(($rvCekDataEQx['KETERANGAN']=='MOVE TO OTHER STORE')||($rvCekDataEQx['KETERANGAN']=='MOVE TO WAREHOUSE')){ ?>
																			<ul style="margin-top:-35px;">																			
																			<li><b> Tagging Number : <font color="brown"><?=$rvSCatReplace2->NOTAGREPLACE;?></font></b></li>
																			</ul>																		
																		<? } ?>
																	<? } ?>
																</td>																
																<td width="7%">
																	<center><b><?=$rvCekDataEQx["TICKET_CREATEDATE"];?></b></center>
																</td>

																<td width="25%">								
																	<? if($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='2'){ ?>																		
																		<?='&nbsp;&nbsp;<b>Approval Status :</b>&nbsp;&nbsp;Not Yet Responded.';?><br>
																	<? }elseif($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='1'){ ?>																		
																		<font color="#000"><?='&nbsp;&nbsp;<b>Approval Status : </font><font color="blue">&nbsp;&nbsp;Approved.</b>';?></font><br>
																	<? }elseif($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='-'){ ?>																		
																		<font color="#000"><?='&nbsp;&nbsp;<b>Approval Status : </font><font color="brown">&nbsp;&nbsp;Not Needed.</b>';?></font><br>
																	<? }elseif($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='0'){ ?>																		
																		<font color="#000"><?='&nbsp;&nbsp;<b>Approval Status : </font><font color="red">&nbsp;&nbsp;Disapproved.</b>';?></font><br>
																	<? } ?>																
																	<?='&nbsp;&nbsp;<b>Approval By : <font color="brown"> '.$rvCekDataEQx["TICKETAPPROVALBYNAME_AM"];?></font><br>																	
																	<?='&nbsp;&nbsp;<b>Approval Date : <font color="brown"> '.$rvCekDataEQx["TICKETAPPROVALDATE_AM"];?></font><br>																	
																	<?='&nbsp;&nbsp;<b>Approval Time : <font color="brown"> '.$rvCekDataEQx["TICKETAPPROVALTIME_AM"];?></font><hr>															
																<!--</td>
																<td width="20%">-->																	
																	<? if(($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='1')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='2')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]=='-')){ ?>																		
																		<font color="#000"><?='&nbsp;&nbsp;<b>Approval Status :</b>&nbsp;&nbsp;Not Yet Responded.';?></font><br>																
																	<? }elseif(($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='0')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='2')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]=='-')){ ?>																		
																		<font color="brown"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp;Not Needed.</b>';?></font><br>																
																	<? }elseif(($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='0')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='-')){ ?>																		
																		<font color="brown"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp;Not Needed.</b>';?></font><br>
																	<? }elseif(($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='2')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='-')){ ?>																		
																		<font color="black"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp;-</b>';?></font><br>
																	<? }elseif($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='1'){ ?>																		
																		<font color="#000"><?='&nbsp;&nbsp;<b>Approval Status : </font><font color="blue">&nbsp;&nbsp;Approved.</b>';?></font><br>
																	<? }elseif((($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='1')||($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='-'))&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='1')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]=='1')){ ?>																		
																		<font color="#000"><?='&nbsp;&nbsp;<b>Approval Status : </font><font color="blue">&nbsp;&nbsp;Approved.</b>';?></font><br>	
																	<? }elseif($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='0'){ ?>																		
																		<font color="#000"><?='&nbsp;&nbsp;<b>Approval Status : </font><font color="red">&nbsp;&nbsp;Disapproved.</b>';?></font><br>
																	<? }else{ ?> <font color="brown"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp;Not Needed.</b>';?></font><br>	
																	<? } ?>																		
																	<?='&nbsp;&nbsp;<b>Approval By : <font color="brown"> '.$rvCekDataEQx["TICKETAPPROVALBYNAME_ROM"];?></font><br>																	
																	<?='&nbsp;&nbsp;<b>Approval Date : <font color="brown"> '.$rvCekDataEQx["TICKETAPPROVALDATE_ROM"];?></font><br>																	
																	<?='&nbsp;&nbsp;<b>Approval Time : <font color="brown"> '.$rvCekDataEQx["TICKETAPPROVALTIME_ROM"];?></font><hr>
																	
																<!--</td>
																<td width="20%">-->																	
																	<? if(($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]=='2')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='1')){ ?>																		
																		<font color="#000"><?='&nbsp;&nbsp;<b>Approval Status : </font><font color="brown"></b>&nbsp;&nbsp;Not Yet Responded.';?></font><br>																
																	<? }elseif(($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]=='2')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='0')){ ?>																		
																		<font color="#000"><?='&nbsp;&nbsp;<b>Approval Status : </font><font color="brown">&nbsp;&nbsp;Not Needed.</b>';?></font><br>																
																	<? }elseif(($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='0')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='0')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]=='-')){ ?>																		
																		<font color="#000"><?='&nbsp;&nbsp;<b>Approval Status : </font><font color="brown">&nbsp;&nbsp;Not Needed.</b>';?></font><br>
																	<? }elseif(($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='0')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='2')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]=='-')){ ?>																		
																		<font color="#000"><?='&nbsp;&nbsp;<b>Approval Status : </font><font color="brown">&nbsp;&nbsp;Not Needed</b>';?></font><br>
																	<? }elseif($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]=='1'){ ?>																		
																		<font color="#000"><?='&nbsp;&nbsp;<b>Approval Status : </font><font color="blue">&nbsp;&nbsp;Approved.</b>';?></font><br>
																	<? }elseif((($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='1')||($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='-'))&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='1')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]=='1')){ ?>																		
																		<font color="#000"><?='&nbsp;&nbsp;<b>Approval Status : </font><font color="blue">&nbsp;&nbsp;Approved.</b>';?></font><br>																	
																	<? }elseif($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]=='0'){ ?>																		
																		<font color="#000"><?='&nbsp;&nbsp;<b>Approval Status : </font><font color="red">&nbsp;&nbsp;Disapproved.</b>';?></font><br>
																	<? }elseif(($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]!='2')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]!='2')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]!='2')){ ?>
																		<font color="#000"><?='&nbsp;&nbsp;<b>Approval Status : </font><font color="brown">&nbsp;&nbsp; Not Needed</b>';?></font><br>																			
																	<? }elseif(($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='2')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='-')&&($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]=='-')){ ?> 
																		 <font color="#000"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp; -</b>';?></font><br>																			
																	<? }elseif(($rvCekDataEQx["TICKETAPPROVALSTATUSID_AM"]=='0')&&(($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='-')||($rvCekDataEQx["TICKETAPPROVALSTATUSID_ROM"]=='2'))&&
																	   (($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]=='2')||($rvCekDataEQx["TICKETAPPROVALSTATUSID_GMO"]=='-'))){ ?> 
																		 <font color="#000"><?='&nbsp;&nbsp;<b>Approval Status : </font><font color="brown">&nbsp;&nbsp; Not Needed</b>';?></font><br>																			
																	<? }else{ ?> <font color="#000"><?='&nbsp;&nbsp;<b>Approval Status :&nbsp;&nbsp; -</b>';?></font><br>																			
																	<? } ?>																			
																	<?='&nbsp;&nbsp;<b>Approval By : <font color="brown"> '.$rvCekDataEQx["TICKETAPPROVALBYNAME_GMO"];?></font><br>																	
																	<?='&nbsp;&nbsp;<b>Approval Date : <font color="brown"> '.$rvCekDataEQx["TICKETAPPROVALDATE_GMO"];?></font><br>																	
																	<?='&nbsp;&nbsp;<b>Approval Time : <font color="brown"> '.$rvCekDataEQx["TICKETAPPROVALTIME_GMO"];?></font>
																</td>																
																<td width="6%">																
																	<? 																			
																		$cekItemName = ucwords(strtolower(substr($rvCekDataEQx["KETERANGAN"],8))); 
																	?>	
																	<? if($cekItemName=='Warehouse'){ ?>
																			<center><font color="brown"><b><?=$cekItemName;?></b></font></center><br>																	
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
																									WHERE ITH_TIPEBARANG_KODE.ticket_id ='".$_GET['pid']."'");
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
																		<!-- FSD MGR ASSIGNMENT (FSD ASSIGNMENT)-->	
																		<input type="hidden" name="kdtipebrg[]" id="<?='kdtipebrg'.$rvCekDataEQx["KODE_TIPEBARANG"];?>" value="<?=$rvCekDataEQx["KODE_TIPEBARANG"]?>"></input>
																		<b>Assignment&nbsp;By :</b>
																		<?
																			$qCekUsrCode = mysql_query("SELECT user_nik,user_realname FROM ITH_USER WHERE user_nik = '".$_GET['uid']."'");
																			$rCekUsrCode = mysql_fetch_object($qCekUsrCode);
																		?>
																			<p style="font-size:10pt;margin-left:85px;margin-top:-17px;">
																				&nbsp;&nbsp; &nbsp;<input type="text" class="date start" style="margin-left:15px;width:80%;" value="<?=$rCekUsrCode->user_realname?>" readonly='readonly' />  							
																			</p><br>																		
																		<b>Transferred&nbsp;Date:</b>
																		<p name="dttransfer_sc[<?=$rvCekDataEQx["KODE_TIPEBARANG"];?>]" id="<?='dttransfer_sc'.$rvCekDataEQx["KODE_TIPEBARANG"];?>" style="font-size:10pt;margin-left:85px;margin-top:-17px;">
																				&nbsp;&nbsp; &nbsp;<input type="text" name="dttransfer_sc[<?=$rvCekDataEQx["KODE_TIPEBARANG"];?>]" id="<?='dttransfer_sc'.$rvCekDataEQx["KODE_TIPEBARANG"];?>" class="date start" style="margin-left:15px;width:60%;" value="<?=$datenow?>"/>  							
																		</p>
																		<b>Transferred&nbsp;By:</b>
																		<p name="dttransfer_by[<?=$rvCekDataEQx["KODE_TIPEBARANG"];?>]" id="<?='dttransfer_by'.$rvCekDataEQx["KODE_TIPEBARANG"];?>" style="font-size:10pt;margin-left:85px;margin-top:-17px;">
																				&nbsp;&nbsp; &nbsp;
																				<!--<input type="text" name="dttransfer_by[<!?=$rvCekDataEQx["KODE_TIPEBARANG"];?>]" id="<!?='dttransfer_by'.$rvCekDataEQx["KODE_TIPEBARANG"];?>" style="margin-left:15px;width:60%;" value=""/>-->
																		<select class="form-control selcls" name="dttransfer_by[<?=$	["KODE_TIPEBARANG"];?>]" id="<?='dttransfer_by'.$rvCekDataEQx["KODE_TIPEBARANG"];?>" style="font-size:10pt;margin-left:30px;margin-top:-17px;width:50%;">
																					<? 
																						$conestoreselect =  mysql_connect('localhost','usrservicedesk','kfc14022');
																									 mysql_select_db('servicedesk',$conestoreselect);
																						
																					/**	$qCekStoreSelect = mysql_query("SELECT user_nik,user_realname FROM ITH_USER 
																														WHERE ((user_nik NOT IN('130273','".$_SESSION['user_nik']."') OR user_nik = '".$_SESSION['userstoregroup_id']."' ))
																														AND userdepartemen_id = '".$_SESSION['user_departemen']."'
																														AND udept_id = '".$_SESSION['udeptid']."' AND usergroup_id = '".$_SESSION['ugroupid']."' 
																														AND usersubgroup_id = '".$_SESSION['usubgroupid']."'"); **/
																						$qCekStoreSelect = mysql_query("SELECT * FROM ITH_USER WHERE udept_id = 'FSD' 
																														AND userdepartemen_id = 'fSD WEST' AND userlevel_id = '22' AND nama_jabatan = 'teknisi'");
																						while($rCekStoreSelect = mysql_fetch_object($qCekStoreSelect))
																						{																			
																					?>
																					 <!-- <option>Male</option>
																					  <option>Female</option> -->
																					  <option value="<?=$rCekStoreSelect->user_realname;?>"><?=ucwords(strtolower($rCekStoreSelect->user_realname));?></option>
																					<? } ?>  
																		</select> 			
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

<? } ?>
<? 
	/* ############################################################################################################################################ */
?>		