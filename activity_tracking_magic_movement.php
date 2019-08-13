<? 
	/* #################################### ACTIVITY TRACKING (ITEM) BASED ON MAGIC) ################################################################### */
?>

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
					font-size: 12px; text-align:center; font-weight: bold; color: #FFFFFF; border-left: 2px solid #D0E4F5;
				}
				table.blueTable thead th:first-child { border-left: none; }
				table.blueTable tfoot 
				{ 
					font-size: 14px; font-weight: bold; color: #FFFFFF; background: #D0E4F5;
					background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
					background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
					background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
					border-top: 2px solid #444444;
				}
				table.blueTable tfoot td { font-size: 14px; }
				table.blueTable tfoot .links { text-align: right; }
				table.blueTable tfoot .links a{ display: inline-block; background: #1C6EA4; color: #FFFFFF; padding: 2px 8px; border-radius: 5px; }			
				</style>
				<!--<input id="equipmentsrc" type="text" placeholder="Search..">-->
				<? 
					$qCekStatusTicketReffx = mysql_query("SELECT ticket_id, ticketreference_id, ticketreferencestatus_id 
														 FROM ITH_TICKET_HEADER WHERE ticket_id = '".$_GET['pid']."'");
					$rCekStatusTicketReffx = mysql_fetch_object($qCekStatusTicketReffx);
					if($rCekStatusTicketReffx->ticketreferencestatus_id=='1'){
				?>				
					<font color="#ffffff"><b><u>SUB SEQUENCE OF ACTIVITIES [REFERENCE TICKET : (</font><?='<font color="blue"><b>'.$rCekStatusTicketReffx->ticketreference_id.'</b></font>';?>)]</u></b>
				<? }elseif($rCekStatusTicketReffx->ticketreferencestatus_id!='1'){ ?>
				<!--<b><u>ACTIVITY TRACKING</u></b>-->
					<font color="#ffffff"><b><u>SEQUENCE ACTIVITIES</u></b>
				<? } ?></font>
					<table class="blueTable" border="1"> 
						<thead>
							<tr>
								<?  
									#$objConnect = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
								?>														
									<th width="7%" style="display:none;">No.</th>
									<th width="10%">Request Number.</th>
									<th width="10%">Item Name</th>
									<th width="10%">Quantity</th>
									<!--<th width="10%">Item Status</th>-->
									<th width="10%">Stock Available</th>
									<!--<th width="10%">Approved By</th>-->
									<th width="10%">D.O</th>
									<th width="10%">RO Number</th>
									<!--<th width="10%">PO Number</th>-->
									<th width="10%">Capex Number</th>
									<th width="10%">PO Number</th>
							</tr>													
						</thead>
					</table>					
					<? 
						$qCekStatusTicketzz = mysql_query("SELECT ticket_id, ticketstatus_id, ticketapprovalstatus_id,ticketapprovalstatus_id2 
														   FROM ITH_TICKET_HEADER WHERE ticket_id = '".$_GET['pid']."'");
						$rCekStatusTicketzz = mysql_fetch_object($qCekStatusTicketzz);
						if(($rCekStatusTicketzz->ticketstatus_id == "1")&&($rCekStatusTicketzz->ticketapprovalstatus_id == "2")){
					?>							
					<div style="width:100%; height:auto; overflow:auto;position:relative;color:#000000;">
						<table class="blueTable" border="1">
							<tbody id="myCodes">							
							<tr><td style='font-weight:bold;color:grey;'><center>No data avalaible in table</center></td></tr>
							</tbody>
						</table>
					</div>
					<? }elseif(($rCekStatusTicketzz->ticketstatus_id == "2")&&(($rCekStatusTicketzz->ticketapprovalstatus_id2 == "2")&&($rCekStatusTicketzz->ticketapprovalstatus_id == "1")))
					{ ?>		
						<table class="blueTable" border="1">
							<tbody id="myCodes">							
							<tr><td style='font-weight:bold;color:grey;'><center>No data avalaible in table</center></td></tr>
							</tbody>
						</table>					
					<? }elseif(($rCekStatusTicketzz->ticketstatus_id == "2")&&(($rCekStatusTicketzz->ticketapprovalstatus_id2 == "1")&&($rCekStatusTicketzz->ticketapprovalstatus_id == "1")))
					{ ?>						
					<div style="width:100%; height:auto; overflow:auto;position:relative;color:#000000;">
						<table class="blueTable" border="1">
							<tbody id="myCodes">
							<? 
							 $qcektrackingx = mysql_query("SELECT * FROM VW_DETAIL_TRACKING WHERE ticket_id ='".$_GET['pid']."'");					
							 $rcektrackingx = mysql_fetch_object($qcektrackingx);
							 if($rcektrackingx->ticket_id!='')
							 {
							?>			
							<tr>	
							<?
								$qcekoldticket = mysql_query("SELECT ticket_id, ticketreference_id,ticketreferencestatus_id, ticketstatus_id,
								ticketapprovalstatus_id,ticketapprovalstatus_id2	
								FROM ITH_TICKET_HEADER WHERE ticket_id = '".$_GET['pid']."'");
								$rcekoldticket = mysql_fetch_object($qcekoldticket);
								$ticketreferenceid = $rcekoldticket->ticketreference_id;
								$ticketid = $rcekoldticket->ticket_id;
								$ticketreferencestatusid = $rcekoldticket->ticketreferencestatus_id;
							#	echo 'ticket reference >> '.$ticketreferenceid;
							#	echo '<br>ticket Status reference >> '.$ticketreferencestatusid;
							#	echo '<br>ticket Id >> '.$ticketid;
							#	echo '<br>ticket Id >> '.$ticketid;
								
								#if(($ticketreferencestatusid==NULL)&&($ticketreferencestatusid=='0')){
								if(($ticketreferencestatusid==NULL))
								{
							?>

									<?
									$i=1;
								#	if(($rcekoldticket->ticketstatus_id=='2')||($rcekoldticket->ticketstatus_id!=2))
									if(($rcekoldticket->ticketstatus_id=='2')&&(($rcekoldticket->ticketapprovalstatus_id2 == "1")&&($rcekoldticket->ticketapprovalstatus_id == "1")))
									{
										###echo "ON PROCESS";										
										$qCekNomorPermintaan5 = mysql_query("SELECT TICKET_ID, NO_PERMINTAAN, KODE_TIPEBARANG 
																			 FROM ITH_TIPEBARANG_KODE 
																			 WHERE TICKET_ID = '".$_GET['pid']."' AND 
																			 TICKETAPPROVALSTATUSID_AM != '0' AND TICKETAPPROVALSTATUSID_ROM != '0'
																			 AND TICKETAPPROVALSTATUSID_GMO != '0'");
										$rCekNomorPermintaan5 = mysql_fetch_object($qCekNomorPermintaan5);										
											
											###echo "W1 ADA NOMOR PERMINTAAN";	
											$objConnect = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
										/*	$qCekShowEQ = "SELECT DISTINCT FSDORDEC_TEMP.NO_PERMINTAAN, FSDORDEC_TEMP.TGL_PERMINTAAN,FSDORDEC_TEMP.NOMOR_RO, 
														FSDORDEC_TEMP.STATUS_PERMINTAAN, FSDBRGEQ.MIN_STOK, FSDBRGEQ.MAX_STOK, FSDBRGEQ.SATUAN_STOK,
														FSDORDEC_TEMP.KODE_BARANG, FSDBRGEQ.NAMA_BARANG,
														FSDORDEC_TEMP.JUMLAH_PERMINTAAN, FSDORDEC_TEMP.JUMLAH_ORDER, FSDORDEC_TEMP.KIRIM_DARI_STOK, 
														FSDORDEC_TEMP.TGL_DISETUJUI, FSDORDEC_TEMP.DISETUJUI_OLEH 
														FROM FSDORDEC_TEMP 
														JOIN FSDBRGEQ ON FSDORDEC_TEMP.KODE_BARANG = FSDBRGEQ.KODE_BARANG
														WHERE FSDORDEC_TEMP.NO_PERMINTAAN = '".$rCekNomorPermintaan5->NO_PERMINTAAN."'
														"; */
											$qCekShowEQ = "SELECT DISTINCT FSDORDEC_TEMP.NO_PERMINTAAN, FSDORDEC_TEMP.TGL_PERMINTAAN,FSDORDEC_TEMP.NOMOR_RO, 
														FSDORDEC_TEMP.STATUS_PERMINTAAN, 
														FSDORDEC_TEMP.KODE_BARANG, FSDBRGEQASSET_NEW.ITEM_NAME,
														FSDORDEC_TEMP.JUMLAH_PERMINTAAN, FSDORDEC_TEMP.JUMLAH_ORDER, FSDORDEC_TEMP.KIRIM_DARI_STOK, 
														FSDORDEC_TEMP.TGL_DISETUJUI, FSDORDEC_TEMP.DISETUJUI_OLEH 
														FROM FSDORDEC_TEMP 
														JOIN FSDBRGEQASSET_NEW ON FSDORDEC_TEMP.KODE_BARANG = FSDBRGEQASSET_NEW.ITEM_CODE
														WHERE FSDORDEC_TEMP.NO_PERMINTAAN = '".$_GET['pid']."' AND 
														FSDORDEC_TEMP.KODE_BARANG = '".$rCekNomorPermintaan5->KODE_TIPEBARANG."'";
														
											$qobjParseCekShowEQ = oci_parse ($objConnect, $qCekShowEQ);  
															   oci_execute ($qobjParseCekShowEQ,OCI_DEFAULT);	
											$rvSCatCekShowEQ = oci_fetch_object($qobjParseCekShowEQ,OCI_BOTH);
											# echo "<br>CEK NOMOR RO : ".$rvSCatCekShowEQ->NOMOR_RO;
											if(($rvSCatCekShowEQ->NOMOR_RO==' ')||($rvSCatCekShowEQ->NOMOR_RO==NULL))
											{
												$objConnectz = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
												###echo "<br>NOMOR RO KOSONG";
												$qCekStatusApprovalAreaManager = mysql_query("SELECT ticket_id,ticketapprovalstatus_id,ticketapprovalstatus_id2,
																							  ticketapprovalstatus_id3	
																							  FROM ITH_TICKET_HEADER WHERE ticket_id = '".$_GET['pid']."'");
												$rCekStatusApprovalAreaManager = mysql_fetch_object($qCekStatusApprovalAreaManager);
												if($rCekStatusApprovalAreaManager->ticketapprovalstatus_id3 == '1')/* Sesudah diapproval oleh GMO */
												{	
													##echo "<hr><br>Z1 Sesudah diapproval oleh ROM";
													$qCekNomorPermintaan4 = mysql_query("SELECT TICKET_ID, NO_PERMINTAAN FROM ITH_TIPEBARANG_KODE 
																				WHERE TICKET_ID = '".$_GET['pid']."'");
													$rCekNomorPermintaan4 = mysql_fetch_object($qCekNomorPermintaan4);
													
												/*	$qShowEQ = "SELECT DISTINCT FSDORDEC_TEMP.NO_PERMINTAAN, FSDORDEC_TEMP.TGL_PERMINTAAN,
															FSDORDEC_TEMP.NOMOR_RO, FSDBRGEQ.MIN_STOK, FSDBRGEQ.MAX_STOK, FSDBRGEQ.SATUAN_STOK,
															FSDORDEC_TEMP.STATUS_PERMINTAAN, 
															FSDORDEC_TEMP.KODE_BARANG, FSDBRGEQ.NAMA_BARANG,
															FSDORDEC_TEMP.JUMLAH_PERMINTAAN, FSDORDEC_TEMP.JUMLAH_ORDER, FSDORDEC_TEMP.KIRIM_DARI_STOK, 
															FSDORDEC_TEMP.TGL_DISETUJUI, FSDORDEC_TEMP.DISETUJUI_OLEH 
															FROM FSDORDEC_TEMP 
															JOIN FSDBRGEQ ON FSDORDEC_TEMP.KODE_BARANG = FSDBRGEQ.KODE_BARANG
															WHERE FSDORDEC_TEMP.NO_PERMINTAAN = '".$rCekNomorPermintaan5->NO_PERMINTAAN."'
															"; */
													
														
													$qShowEQ = "SELECT DISTINCT FSDORDEC_TEMP.NO_PERMINTAAN, FSDORDEC_TEMP.TGL_PERMINTAAN,FSDORDEC_TEMP.NOMOR_RO, 
														FSDORDEC_TEMP.STATUS_PERMINTAAN, 
														FSDORDEC_TEMP.KODE_BARANG, FSDBRGEQASSET_NEW.ITEM_NAME,
														FSDORDEC_TEMP.JUMLAH_PERMINTAAN, FSDORDEC_TEMP.JUMLAH_ORDER, FSDORDEC_TEMP.KIRIM_DARI_STOK, 
														FSDORDEC_TEMP.TGL_DISETUJUI, FSDORDEC_TEMP.DISETUJUI_OLEH 
														FROM FSDORDEC_TEMP 
														JOIN FSDBRGEQASSET_NEW ON FSDORDEC_TEMP.KODE_BARANG = FSDBRGEQASSET_NEW.ITEM_CODE
														WHERE FSDORDEC_TEMP.NO_PERMINTAAN = '".$_GET['pid']."' AND 
														FSDORDEC_TEMP.KODE_BARANG = '".$rCekNomorPermintaan5->KODE_TIPEBARANG."'";
													$qobjParseShowEQ = oci_parse ($objConnectz, $qShowEQ);  
																       oci_execute ($qobjParseShowEQ,OCI_DEFAULT);
												}elseif($rCekStatusApprovalAreaManager->ticketapprovalstatus_id2 == '1')/* Sesudah diapproval oleh ROM */
												{	
													#echo "<hr><br>Z2 Sesudah diapproval oleh ROM";
													/*
													$qCekNomorPermintaan1 = mysql_query("SELECT TICKET_ID, NO_PERMINTAAN FROM ITH_TIPEBARANG_KODE 
																				WHERE TICKET_ID = '".$_GET['pid']."'");
													$rCekNomorPermintaan1 = mysql_fetch_object($qCekNomorPermintaan1);
													*/
												/*	$qShowEQ = "SELECT DISTINCT FSDORDEC_TEMP.NO_PERMINTAAN, FSDORDEC_TEMP.TGL_PERMINTAAN,
															FSDORDEC_TEMP.NOMOR_RO, FSDBRGEQ.MIN_STOK, FSDBRGEQ.MAX_STOK, FSDBRGEQ.SATUAN_STOK,
															FSDORDEC_TEMP.STATUS_PERMINTAAN, 
															FSDORDEC_TEMP.KODE_BARANG, FSDBRGEQ.NAMA_BARANG,
															FSDORDEC_TEMP.JUMLAH_PERMINTAAN, FSDORDEC_TEMP.JUMLAH_ORDER, FSDORDEC_TEMP.KIRIM_DARI_STOK, 
															FSDORDEC_TEMP.TGL_DISETUJUI, FSDORDEC_TEMP.DISETUJUI_OLEH 
															FROM FSDORDEC_TEMP 
															JOIN FSDBRGEQ ON FSDORDEC_TEMP.KODE_BARANG = FSDBRGEQ.KODE_BARANG
															WHERE FSDORDEC_TEMP.NO_PERMINTAAN = '".$rCekNomorPermintaan5->NO_PERMINTAAN."'
															"; */
													
													$qShowEQ = "SELECT DISTINCT FSDORDEC_TEMP.NO_PERMINTAAN, FSDBRGEQASSET_NEW.ITEM_NAME,
														FSDORDEC_TEMP.JUMLAH_PERMINTAAN, FSDORDEC_TEMP.JUMLAH_ORDER, FSDORDEC_TEMP.KIRIM_DARI_STOK, 
														FSDORDEC_TEMP.TGL_PERMINTAAN,FSDORDEC_TEMP.NOMOR_RO, 
														FSDORDEC_TEMP.STATUS_PERMINTAAN, 
														FSDORDEC_TEMP.KODE_BARANG, 
														FSDORDEC_TEMP.TGL_DISETUJUI, FSDORDEC_TEMP.DISETUJUI_OLEH
														FROM FSDORDEC_TEMP 
														JOIN FSDBRGEQASSET_NEW ON FSDORDEC_TEMP.KODE_BARANG = FSDBRGEQASSET_NEW.ITEM_CODE
														WHERE FSDORDEC_TEMP.NO_PERMINTAAN = '".$_GET['pid']."' AND 
														FSDORDEC_TEMP.KODE_BARANG = '".$rCekNomorPermintaan5->KODE_TIPEBARANG."'";
													
													/*
													$qShowEQ = "SELECT DISTINCT FSDORDEC_TEMP.NO_PERMINTAAN, FSDORDEC_TEMP.TGL_PERMINTAAN,FSDORDEC_TEMP.NOMOR_RO, 
														FSDORDEC_TEMP.STATUS_PERMINTAAN, 
														FSDORDEC_TEMP.KODE_BARANG, FSDBRGEQASSET_NEW.ITEM_NAME,
														FSDORDEC_TEMP.JUMLAH_PERMINTAAN, FSDORDEC_TEMP.JUMLAH_ORDER, FSDORDEC_TEMP.KIRIM_DARI_STOK, 
														FSDORDEC_TEMP.TGL_DISETUJUI, FSDORDEC_TEMP.DISETUJUI_OLEH 
														FROM FSDORDEC_TEMP 
														JOIN FSDBRGEQASSET_NEW ON FSDORDEC_TEMP.KODE_BARANG = FSDBRGEQASSET_NEW.ITEM_CODE
														WHERE FSDORDEC_TEMP.NO_PERMINTAAN = '003370219-039574' 
														AND FSDORDEC_TEMP.KODE_CABANG = '0337'";
													*/	
													$qobjParseShowEQ = oci_parse ($objConnectz, $qShowEQ);  
																       oci_execute ($qobjParseShowEQ,OCI_DEFAULT);
												}elseif($rCekStatusApprovalAreaManager->ticketapprovalstatus_id == '1')/* Sesudah diapproval oleh Area Manager*/
												{
													#echo "<hr><br>Sesudah diapproval oleh Area Manager";
													$qCekNomorPermintaan2 = mysql_query("SELECT TICKET_ID, NO_PERMINTAAN FROM ITH_TIPEBARANG_KODE 
																				WHERE TICKET_ID = '".$_GET['pid']."'");
													$rCekNomorPermintaan2 = mysql_fetch_object($qCekNomorPermintaan2);
													
												/*	$qShowEQ = "SELECT DISTINCT FSDORDEC_TEMP.NO_PERMINTAAN, FSDORDEC_TEMP.TGL_PERMINTAAN,
															FSDORDEC_TEMP.NOMOR_RO, FSDBRGEQ.MIN_STOK, FSDBRGEQ.MAX_STOK, FSDBRGEQ.SATUAN_STOK,
															FSDORDEC_TEMP.STATUS_PERMINTAAN, 
															FSDORDEC_TEMP.KODE_BARANG, FSDBRGEQ.NAMA_BARANG,
															FSDORDEC_TEMP.JUMLAH_PERMINTAAN, FSDORDEC_TEMP.JUMLAH_ORDER, FSDORDEC_TEMP.KIRIM_DARI_STOK, 
															FSDORDEC_TEMP.TGL_DISETUJUI, FSDORDEC_TEMP.DISETUJUI_OLEH 
															FROM FSDORDEC_TEMP 
															JOIN FSDBRGEQ ON FSDORDEC_TEMP.KODE_BARANG = FSDBRGEQ.KODE_BARANG
															WHERE FSDORDEC_TEMP.NO_PERMINTAAN = '".$rCekNomorPermintaan5->NO_PERMINTAAN."'
															"; */
													$qShowEQ = "SELECT DISTINCT FSDORDEC_TEMP.NO_PERMINTAAN, FSDORDEC_TEMP.TGL_PERMINTAAN,FSDORDEC_TEMP.NOMOR_RO, 
														FSDORDEC_TEMP.STATUS_PERMINTAAN, 
														FSDORDEC_TEMP.KODE_BARANG, FSDBRGEQASSET_NEW.ITEM_NAME,
														FSDORDEC_TEMP.JUMLAH_PERMINTAAN, FSDORDEC_TEMP.JUMLAH_ORDER, FSDORDEC_TEMP.KIRIM_DARI_STOK, 
														FSDORDEC_TEMP.TGL_DISETUJUI, FSDORDEC_TEMP.DISETUJUI_OLEH 
														FROM FSDORDEC_TEMP 
														JOIN FSDBRGEQASSET_NEW ON FSDORDEC_TEMP.KODE_BARANG = FSDBRGEQASSET_NEW.ITEM_CODE
														WHERE FSDORDEC_TEMP.NO_PERMINTAAN = '".$_GET['pid']."' AND 
														FSDORDEC_TEMP.KODE_BARANG = '".$rCekNomorPermintaan5->KODE_TIPEBARANG."'";
													$qobjParseShowEQ = oci_parse ($objConnectz, $qShowEQ);  
																       oci_execute ($qobjParseShowEQ,OCI_DEFAULT);
												}				
											}elseif($rvSCatCekShowEQ->NOMOR_RO!=''){
											#echo "NOMOR RO TIDAK KOSONG";	
												$qCekNomorPermintaan3 = mysql_query("SELECT TICKET_ID, NO_PERMINTAAN FROM ITH_TIPEBARANG_KODE 
																			WHERE TICKET_ID = '".$_GET['pid']."'");
												$rCekNomorPermintaan3 = mysql_fetch_object($qCekNomorPermintaan3);
												
											/*	$qShowEQ = "SELECT DISTINCT FSDORDEC.NO_PERMINTAAN, FSDORDEC.TGL_PERMINTAAN,FSDORDEC.NOMOR_RO, 
														FSDORDEC.STATUS_PERMINTAAN, FSDBRGEQ.MIN_STOK, FSDBRGEQ.MAX_STOK, FSDBRGEQ.SATUAN_STOK,
														FSDPOEQC.NO_PO,
														FSDORDEC.KODE_BARANG, FSDBRGEQ.NAMA_BARANG,
														FSDORDEC.JUMLAH_PERMINTAAN, FSDORDEC.JUMLAH_ORDER, FSDORDEC.KIRIM_DARI_STOK, 
														FSDORDEC.TGL_DISETUJUI, FSDORDEC.DISETUJUI_OLEH 
														FROM FSDORDEC 
														JOIN FSDBRGEQ ON FSDORDEC.KODE_BARANG = FSDBRGEQ.KODE_BARANG
														JOIN MSTDEPART ON FSDORDEC.DEPARTEMEN = MSTDEPART.KODE_DEPARTEMENT
														JOIN FSDPOEQC ON FSDORDEC.NOMOR_RO = FSDPOEQC.NO_RO
														WHERE FSDORDEC.NO_PERMINTAAN = '".$rCekNomorPermintaan5->NO_PERMINTAAN."'
														AND FSDORDEC.NOMOR_RO IS NULL"; */
												$qShowEQ = "SELECT DISTINCT FSDORDEC.NO_PERMINTAAN, FSDORDEC.TGL_PERMINTAAN,FSDORDEC.NOMOR_RO, 
														FSDORDEC.STATUS_PERMINTAAN, FSDBRGEQ.MIN_STOK, FSDBRGEQ.MAX_STOK, FSDBRGEQ.SATUAN_STOK,
														FSDPOEQC.NO_PO,
														FSDORDEC.KODE_BARANG, FSDBRGEQ.NAMA_BARANG,
														FSDORDEC.JUMLAH_PERMINTAAN, FSDORDEC.JUMLAH_ORDER, FSDORDEC.KIRIM_DARI_STOK, 
														FSDORDEC.TGL_DISETUJUI, FSDORDEC.DISETUJUI_OLEH 
														FROM FSDORDEC 
														JOIN FSDBRGEQ ON FSDORDEC.KODE_BARANG = FSDBRGEQ.KODE_BARANG
														JOIN MSTDEPART ON FSDORDEC.DEPARTEMEN = MSTDEPART.KODE_DEPARTEMENT
														JOIN FSDPOEQC ON FSDORDEC.NOMOR_RO = FSDPOEQC.NO_RO
														WHERE FSDORDEC.NO_PERMINTAAN = '".$_GET['pid']."' AND FSDORDEC.NOMOR_RO IS NULL";
												$qobjParseShowEQ = oci_parse ($objConnectz, $qShowEQ);  
															   oci_execute ($qobjParseShowEQ,OCI_DEFAULT);	
																								
											}	

										while($rvSCatShowEQ = oci_fetch_object($qobjParseShowEQ,OCI_BOTH))
										{
											
									?>	
										<tr>
											<td width="10%"><center><?=$rvSCatShowEQ->NO_PERMINTAAN;?></center></td>
											<td width="10%"><center><?=$rvSCatShowEQ->ITEM_NAME;?></center></td>
											<td width="10%"><center><?=$rvSCatShowEQ->JUMLAH_PERMINTAAN.'<br><b>Unit</b>';?></center></td>

											<td width="10%"><center><?=$rvSCatShowEQ->KIRIM_DARI_STOK;?></center></td>									
											<td width="10%"><center>
												<? 
													if($rvSCatShowEQ->NOMOR_RO == ''){
														echo "<b>No info has been displayed, End Of Day Please !!!</b>";
													}elseif($rvSCatShowEQ->NOMOR_RO != ''){
														echo "<b>".$rvSCatShowEQ->NOMOR_RO."</b>";
													}
												?>											
											</center></td>

											<td width="10%"><center><!--?=$rvSCatShowEQ->KIRIM_DARI_STOK;?--></center></td>	
											<td width="10%"><center><?=$rvSCatShowEQ->NO_RO;?></center></td>
												<td width="10%"><center>
												<? 
													if($rvSCatShowEQ->NO_PO == ''){
														echo "<b>No info has been displayed, Field PO Number Please !!!</b>";
													}elseif($rvSCatShowEQ->NO_PO != ''){
														echo "<b>".$rvSCatShowEQ->NO_PO."</b>";
													}
												?>											
											</center></td>											
										</tr>	
									 <? } ?>
								 <? } ?> 
							 <? }elseif(($ticketreferencestatusid=='1')){?>		
								
									<?
										$qcekdtl = mysql_query("SELECT * FROM VW_DETAIL_TRACKING WHERE ticket_id ='$_GET[pid]' OR ticket_id = '$ticketreferenceid' 
										GROUP BY STR_TO_DATE(ticketreport_createddate,'%d/%m/%Y'), DATE_FORMAT(CAST(ticketreport_createdtime AS TIME), '%H %i') ASC");
										/* echo "<br>SELECT * FROM VW_DETAIL_TRACKING WHERE ticket_id ='$_GET[pid]' 
										AND ticket_id = '$ticketreferenceid' ORDER BY logreport_id ASC"; */
										while($rcekdtl = mysql_fetch_object($qcekdtl))
										{
											$ticketrespondby = $rcekdtl->ticketrespond_by;
									?>								
										<tr>
											<td style="display:none;"><center><?=$rcekdtl->logreport_id;?></center></td>
											<td width="17%"><center><?=$rcekdtl->ticket_id;?></center></td>
											<td width="10%"><center><?=$rcekdtl->ticketreport_createddate;?></center></td>
											<td width="10%"><center><?=$rcekdtl->ticketreport_createdtime;?></center></td>
											<? 
												$qcekstatustracking = mysql_query("SELECT user_nik, user_realname, userlevel_id FROM ITH_USER
																					WHERE user_realname = '$ticketrespondby'");
												$rcekstatustracking = mysql_fetch_object($qcekstatustracking);
												if(($rcekstatustracking->userlevel_id == '1000')||($rcekstatustracking->userlevel_id == '1001')||
												($rcekstatustracking->userlevel_id == '3')||($rcekstatustracking->userlevel_id == '8')){
											?>
												<td><center><?=$rcekdtl->ticketstatusapproval_name;?></center></td>
												<td><center><?=$rcekdtl->ticketrespond_by;?></center></td>
												<td><center><?='Approved By';?></center></td>
												<? }elseif(($rcekstatustracking->userlevel_id == '100')||($rcekstatustracking->userlevel_id == '101')||
													($rcekstatustracking->userlevel_id == '102')||($rcekstatustracking->userlevel_id == '103')){ ?>	
												<td><center><?=$rcekdtl->ticketstatusapproval_name;?></center></td>
												<td><center><?=$rcekdtl->ticketrespond_by;?></center></td>
												<td><center>3<?='Admin Assignment';?></center></td>												
												<? }elseif(($rcekstatustracking->userlevel_id == '21')||($rcekstatustracking->userlevel_id == '22')||
													($rcekstatustracking->userlevel_id == '23')){ ?>	
												<td><center>5<?=$rcekdtl->ticketstatus_name;?></center></td>
												<td><center><?=$rcekdtl->ticketrespond_by;?></center></td>
												<td><center><?='PIC';?></center></td>
												<!--? }elseif(($rcekstatustracking->userlevel_id == '1')||($rcekstatustracking->userlevel_id == '2')||
													($rcekstatustracking->userlevel_id == '3')||($rcekstatustracking->userlevel_id == '4')){ ?-->	
												<? }elseif(($rcekstatustracking->userlevel_id == '1')||($rcekstatustracking->userlevel_id == '2')||($rcekstatustracking->userlevel_id == '4')){ ?>	
												<td><center>6<?=$rcekdtl->ticketstatus_name;?></center></td>
												<td><center><?=$rcekdtl->ticketrespond_by;?></center></td>
												<td><center><?='User Complaint';?></center></td>
											<? } ?> 										
											<td><?=$rcekdtl->ticketreport_subject;?></td>										
										</tr>							
									 <? } ?>
								<?}?>
								
							<tr>
							<? }elseif($rcektrackingx->ticket_id==''){ ?> 																			
									<td style="color:grey;"><center>No data available in table</center></td>
							<? }  ?>
							</tr>	
							</tbody>
						</table>						
				
					</div>	
					<? } ?>	
<?
	/* ############################################################################################################################################# */
?>					