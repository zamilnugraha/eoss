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
					<font color="#ffffff"><b><u>SEQUENCE OF ACTIVITIES</u></b>
				<? } ?></font>
					<table class="blueTable" border="1"> 
						<thead>
							<tr>
								<?  
									#$objConnect = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
								?>														
									<th width="7%" style="display:none;">No.</th>
									<th width="10%" style="color:#fff;font-weight:bold;">Request Number.</th>
									<th width="10%" style="color:#fff;font-weight:bold;">Item Name</th>
									<!--<th width="10%">Tagging Code</th>-->
									<!--<th width="10%">Item Status</th>-->
									<th width="10%" style="color:#fff;font-weight:bold;">Origin</th>
									<!--<th width="10%">Approved By</th>-->
									<th width="10%" style="color:#fff;font-weight:bold;">Transferred By<br>And Date</th>
									<th width="10%" style="color:#fff;font-weight:bold;">Assigned<br>Technician</th>
									<th width="10%" style="color:#fff;font-weight:bold;">Destination</th>
									<!--<th width="10%">PO Number</th>-->
									<th width="10%" style="color:#fff;font-weight:bold;">Received By<br>And Date</th>
									<!--<th width="10%">PO Number</th>-->
							</tr>													
						</thead>
					</table>					
					<? 
						$qCekStatusTicketzz = mysql_query("SELECT ticket_id, ticketstatus_id, ticketapprovalstatus_id,ticketapprovalstatus_id2,
														   ticketapprovalstatus_id3 
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
					<? }elseif(($rCekStatusTicketzz->ticketstatus_id == "2")&&
					(($rCekStatusTicketzz->ticketapprovalstatus_id == "1")&&($rCekStatusTicketzz->ticketapprovalstatus_id2 == "1")&&($rCekStatusTicketzz->ticketapprovalstatus_id3 == "1"))
					){ ?>	
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
										$qCekSeQAct = mysql_query("SELECT ticket_id, request_by, kode_tipebrg, kode_tipebarang, 
																   nama_tipebarang, ticket_notaging, ticketapprovalstatusid_am,
																   ticketapprovalstatusid_rom, ticketapprovalstatusid_gmo, keterangan,
																   ticket_needassist, tickettransferto_outletcode, tickettransferto_outletname,
																   received_date, received_by, storereceived_createddate, storereceived_createdby			
																   FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$_GET['pid']."'");
										$rCekSeQAct = mysql_fetch_object($qCekSeQAct);				   
									?>
									<!-- JIKA UID SAMA DENGAN STORE PENGIRIM -->
										<? 										
										/*	$qCekSeQAct2b = mysql_query("SELECT ITH_TIPEBARANG_KODE.ticket_id, ITH_TIPEBARANG_KODE.request_by,
																	   ITH_TIPEBARANG_KODE.transfer_date, ITH_TIPEBARANG_KODE.transfer_by,
																	   ITH_TIPEBARANG_KODE.kode_tipebrg, ITH_TIPEBARANG_KODE.kode_tipebarang, 
																	   ITH_TIPEBARANG_KODE.nama_tipebarang, ITH_TIPEBARANG_KODE.ticket_notaging, ITH_TIPEBARANG_KODE.ticketapprovalstatusid_am,
																	   ITH_TIPEBARANG_KODE.ticketapprovalstatusid_rom, ITH_TIPEBARANG_KODE.ticketapprovalstatusid_gmo, ITH_TIPEBARANG_KODE.keterangan,
																	   ITH_TIPEBARANG_KODE.ticket_needassist, ITH_TIPEBARANG_KODE.tickettransferto_outletcode, ITH_TIPEBARANG_KODE.tickettransferto_outletname,
																	   ITH_TIPEBARANG_KODE.received_date, ITH_TIPEBARANG_KODE.received_by, ITH_TIPEBARANG_KODE.storereceived_createddate, ITH_TIPEBARANG_KODE.storereceived_createdby,
																	   ITH_USER.user_realname, ITH_TICKET_HEADER.ticket_createdate,ITUSRX2.user_realname AS storeName,
																	   ITH_TIPEBARANG_KODE.storetransfer_createdby,	ITH_TIPEBARANG_KODE.storetransfer_createddate
																	   FROM ITH_TIPEBARANG_KODE 
																	   JOIN ITH_TICKET_HEADER ON ITH_TIPEBARANG_KODE.ticket_id = ITH_TICKET_HEADER.ticket_id
																	   JOIN ITH_USER ON ITH_TIPEBARANG_KODE.request_by = ITH_USER.user_nik
																	   JOIN ITH_USER ITUSRX2 ON ITH_USER.userstoregroup_id = ITUSRX2.user_nik
																	   WHERE ITH_TIPEBARANG_KODE.ticket_id = '".$_GET['pid']."'
																	   AND (ITH_TIPEBARANG_KODE.ticketapprovalstatusid_am = '1' AND
																	   ITH_TIPEBARANG_KODE.ticketapprovalstatusid_rom = '1' AND 
																	   ITH_TIPEBARANG_KODE.ticketapprovalstatusid_gmo = '1')");
										*/	$qCekSeQAct2b = mysql_query("SELECT ITH_TIPEBARANG_KODE.ticket_id, ITH_TIPEBARANG_KODE.request_by,
																		ITH_TIPEBARANG_KODE.transfer_date, ITH_TIPEBARANG_KODE.transfer_by,
																		ITH_TIPEBARANG_KODE.kode_tipebrg, ITH_TIPEBARANG_KODE.kode_tipebarang, 
																		ITH_TIPEBARANG_KODE.nama_tipebarang, ITH_TIPEBARANG_KODE.ticket_notaging, ITH_TIPEBARANG_KODE.ticketapprovalstatusid_am,
																		ITH_TIPEBARANG_KODE.ticketapprovalstatusid_rom, ITH_TIPEBARANG_KODE.ticketapprovalstatusid_gmo, ITH_TIPEBARANG_KODE.keterangan,
																		ITH_TIPEBARANG_KODE.ticket_needassist, ITH_TIPEBARANG_KODE.tickettransferto_outletcode, ITH_TIPEBARANG_KODE.tickettransferto_outletname,
																		ITH_USER.user_realname, ITH_TICKET_HEADER.ticket_createdate,ITUSRX2.user_realname AS storeName,
																		ITH_TIPEBARANG_KODE.pic_name,ITH_TIPEBARANG_KODE.pic_createddate,ITH_TIPEBARANG_KODE.pic_createdby,
																		ITH_TIPEBARANG_KODE.pictakein_date, ITH_TIPEBARANG_KODE.pictakein_by,
																		ITH_TIPEBARANG_KODE.storetransfer_createdby,ITH_TIPEBARANG_KODE.storetransfer_createddate,
																		ITH_TIPEBARANG_KODE.received_date, ITH_TIPEBARANG_KODE.received_by, ITH_TIPEBARANG_KODE.storereceived_createddate, ITH_TIPEBARANG_KODE.storereceived_createdby
																		FROM ITH_TIPEBARANG_KODE 
																		JOIN ITH_TICKET_HEADER ON ITH_TIPEBARANG_KODE.ticket_id = ITH_TICKET_HEADER.ticket_id
																		JOIN ITH_USER ON ITH_TIPEBARANG_KODE.request_by = ITH_USER.user_nik
																		JOIN ITH_USER ITUSRX2 ON ITH_USER.userstoregroup_id = ITUSRX2.user_nik
																	    WHERE ITH_TIPEBARANG_KODE.ticket_id = '".$_GET['pid']."'
																	    AND (ITH_TIPEBARANG_KODE.ticketapprovalstatusid_am = '1' AND
																	    ITH_TIPEBARANG_KODE.ticketapprovalstatusid_rom = '1' AND 
																	    ITH_TIPEBARANG_KODE.ticketapprovalstatusid_gmo = '1')");
											while($rCekSeQAct2b = mysql_fetch_object($qCekSeQAct2b)){						   
										?>
										
											<tr>
												<td width="10%" style="color:brown;font-weight:bold;"><center><?=$rCekSeQAct2b->ticket_id;?></center></td>
												<td width="10%" style="color:brown;font-weight:bold;"><center><?=$rCekSeQAct2b->kode_tipebarang.'-'.$rCekSeQAct2b->nama_tipebarang;?></center></td>
												<td width="10%" style="display:none;color:brown;font-weight:bold;"><center><?=$rCekSeQAct2b->ticket_notaging;?></center></td>

												<td width="10%" style="display:none;"><font color="blue"><b><center><?=$rCekSeQAct2b->user_realname.'<br>(KFC '.$rCekSeQAct2b->storeName.')';?></center></b></font></td>									
												<td width="10%"><font color="blue"><b><center><?='KFC '.$rCekSeQAct2b->storeName;?></center></b></font></td>									
												<td width="10%"><center>
												<? 
													$qCekNIKFSD = mysql_query("SELECT ITH_TIPEBARANG_KODE.pictakein_date, ITH_TIPEBARANG_KODE.pictakein_by,ITH_TIPEBARANG_KODE.transfer_date,
																			   ITH_TIPEBARANG_KODE.transfer_by,ITH_USER.nama_jabatan FROM ITH_TIPEBARANG_KODE 
																			   JOIN ITH_USER ON ITH_TIPEBARANG_KODE.transfer_by = ITH_USER.user_realname
																			   WHERE ITH_TIPEBARANG_KODE.ticket_id = '".$_GET['pid']."'");
													$rCekNIKFSD = mysql_fetch_object($qCekNIKFSD);
												?>
												<!--<td width="10%"><center><!--?=$rvSCatShowEQ->KIRIM_DARI_STOK;?--><!--</center></td>	-->
												<!-- TRANSFER FROM ONDUTY MANAGER STORE SOURCE GIVING TO TECHNICIAN FSD/ TECHNICIAN OPR -->											
												<? if(($rCekSeQAct2b->pic_createddate!='')&&($rCekSeQAct2b->transfer_date!='')){ ?>	
													<? 
														if($rCekSeQAct2b->ticket_needassist == 'YES'){
															echo "<b><font color='brown'>".strtoupper($rCekNIKFSD->transfer_by)."</font><br><font color='#000'>(".ucwords(strtolower($rCekNIKFSD->nama_jabatan)).")</font></b>";
										?>					<div style="text-align:right;margin-top:5px;">
										<?					echo "<b><font color='brown'>".$rCekSeQAct2b->transfer_date."</font><b></div>";
														}elseif($rCekSeQAct2b->ticket_needassist == 'NO'){
															echo "<b><font color='brown'>".strtoupper($rCekNIKFSD->transfer_by)."</font><br><font color='#000'>(".ucwords(strtolower($rCekNIKFSD->nama_jabatan)).")</font></b>";
										?>					<div style="text-align:right;margin-top:5px;">
										<?					echo "<b><font color='brown'>".$rCekSeQAct2b->transfer_date."</font><b></div>";
														}
													?>
												<? }elseif(($rCekSeQAct2b->pic_createddate!='')&&($rCekSeQAct2b->transfer_date=='')){ ?> 
													<? 
														if($rCekSeQAct2b->ticket_needassist == 'YES'){
															echo "<center><b>-</b></font>";
										?>					<div style="text-align:right;margin-top:5px;">
										<?					#echo "A2<b><font color='brown'>".$rCekSeQAct2b->storetransfer_createddate."</font><b></div>";
														}elseif($rCekSeQAct2b->ticket_needassist == 'NO'){
															echo "<center><b>-</b></font>";
										?>					<div style="text-align:right;margin-top:5px;">
										<?					#echo "A4<b><font color='brown'>".$rCekSeQAct2b->storetransfer_createddate."</font><b></div>";
														}
													?>
												<? }elseif(($rCekSeQAct2b->pic_createddate=='')&&($rCekSeQAct2b->transfer_date=='')){ ?> 
													<? 
														if($rCekSeQAct2b->ticket_needassist == 'YES'){
															echo "<center><b>-</b></font>";
										?>					<div style="text-align:right;margin-top:5px;">
										<?					#echo "A2<b><font color='brown'>".$rCekSeQAct2b->storetransfer_createddate."</font><b></div>";
														}elseif($rCekSeQAct2b->ticket_needassist == 'NO'){
															echo "<center><b>-</b></font>";
										?>					<div style="text-align:right;margin-top:5px;">
										<?					#echo "A4<b><font color='brown'>".$rCekSeQAct2b->storetransfer_createddate."</font><b></div>";
														}
													?>
												
												<? } ?>		
												</center></td>

												<!--<td width="10%"><center><!--?=$rvSCatShowEQ->KIRIM_DARI_STOK;?--><!--</center></td>	-->
												<td width="10%" style="color:brown;font-weight:bold;">
												<center><? if($rCekSeQAct2b->pic_createddate!=''){ ?>	
												<!-- ASSIGNED TECHNICIAN FROM FSD MGR / OPR MGR -->	
													<? 
														if($rCekSeQAct2b->ticket_needassist == 'YES'){
															echo "<b><font color='brown'>".strtoupper($rCekSeQAct2b->pictakein_by)."</font><br><font color='#000'>(FSD Technician)</font></b>";
										?>					<div style="text-align:right;margin-top:5px;">
										<?					#echo "<b><font color='brown'>".$rCekSeQAct2b->pictakein_date."</font><b></div>";
															echo "<b><font color='brown'>".$rCekSeQAct2b->pic_createddate."</font><b></div>";
														}elseif($rCekSeQAct2b->ticket_needassist == 'NO'){
															echo "<b><font color='brown'>".strtoupper($rCekSeQAct2b->pictakein_by)."</font><br><font color='#000'>(OPR Technician)</font></b>";
										?>					<div style="text-align:right;margin-top:5px;">
										<?				#	echo "<b><font color='brown'>".$rCekSeQAct2b->pictakein_date."</font><b></div>";
															echo "<b><font color='brown'>".$rCekSeQAct2b->pic_createddate."</font><b></div>";
														}
													?>
												<? }elseif($rCekSeQAct2b->pic_createddate==''){ ?> -														
												<? } ?>		
												</center></td>
												
													<td width="10%"><center>
													<? 
														if($rCekSeQAct2b->keterangan == 'MOVE TO WAREHOUSE'){
															echo "<b>FSD WAREHOUSE</b>";
														}elseif($rCekSeQAct2b->keterangan == 'MOVE TO OTHER STORE'){
															echo "<b>KFC&nbsp;".$rCekSeQAct2b->tickettransferto_outletname."</b>";
														}
													?>											
													</center></td>		
													<!--<td width="10%"><center>A3 <!?=$rCekSeQAct2b->received_by;?></center></td>-->
													<td width="10%"><center>
													<!-- RECEIVED ITEM FROM FSD TECHNICIAN / OPR TECHNICIAN TO ONDUTY MANAGER IN OTHER STORE DESTINATION -->	
													<? if($rCekSeQAct2b->received_date!=''){ ?>
														<? 
															$qCekNIKFSD = mysql_query("SELECT ITH_TIPEBARANG_KODE.pictakein_date, ITH_TIPEBARANG_KODE.pictakein_by,ITH_TIPEBARANG_KODE.transfer_date,
																					   ITH_TIPEBARANG_KODE.received_by,ITH_USER.nama_jabatan FROM ITH_TIPEBARANG_KODE 
																					   JOIN ITH_USER ON ITH_TIPEBARANG_KODE.received_by = ITH_USER.user_realname
																					   WHERE ITH_TIPEBARANG_KODE.ticket_id = '".$_GET['pid']."'");
															$rCekNIKFSD = mysql_fetch_object($qCekNIKFSD);
														?>													
														<? if($_SESSION['departemen_id']==3){ ?>
														<?="<font color='brown'><b>".strtoupper($rCekSeQAct2b->received_by)."</font><br><font color='#000'>(".ucwords(strtolower($rCekNIKFSD->nama_jabatan)).")</font></b>";?>
														<div style="text-align:right;margin-top:5px;"><?="<font color='brown'><b>".$rCekSeQAct2b->received_date."</b></font></div>"; ?>
														<? }elseif($_SESSION['departemen_id']==5){ ?>
														<?="<font color='brown'><b>".strtoupper($rCekSeQAct2b->received_by)."</font><br><font color='#000'>(".ucwords(strtolower($rCekNIKFSD->nama_jabatan)).")</font></b>";?>
														<div style="text-align:right;margin-top:5px;"><?="<font color='brown'><b>".$rCekSeQAct2b->received_date."</b></font></div>"; ?>	
														<? } ?>
													<? }elseif($rCekSeQAct2b->received_date==''){ ?>
														<?='-'?>
													<? } ?>	
													</center></td>												
												</tr>
											<? } ?>										
								<? } ?>
								
							<tr>
							<? }elseif($rcektrackingx->ticket_id==''){ ?> 																			
									<td style="color:grey;"><center>No data available in table</center></td>
							<? }  ?>
							</tr>	
							</tbody>
						</table>					
					</div>				

					<? }elseif(($rCekStatusTicketzz->ticketstatus_id == "2")&&(($rCekStatusTicketzz->ticketapprovalstatus_id2 == "2")&&($rCekStatusTicketzz->ticketapprovalstatus_id == "1")))
					{ ?>		
						<!--<table class="blueTable" border="1">
							<tbody id="myCodes">							
							<tr><td style='font-weight:bold;color:grey;'><center>No data avalaible in table</center></td></tr>
							</tbody>
						</table>-->					
					<!--? }elseif(($rCekStatusTicketzz->ticketstatus_id == "2")&&(($rCekStatusTicketzz->ticketapprovalstatus_id2 == "1")&&($rCekStatusTicketzz->ticketapprovalstatus_id == "1")))
					{ ?-->						
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
										$qCekSeQAct = mysql_query("SELECT ticket_id, request_by, kode_tipebrg, kode_tipebarang, 
																   nama_tipebarang, ticket_notaging, ticketapprovalstatusid_am,
																   ticketapprovalstatusid_rom, ticketapprovalstatusid_gmo, keterangan,
																   ticket_needassist, tickettransferto_outletcode, tickettransferto_outletname,
																   received_date, received_by, storereceived_createddate, storereceived_createdby			
																   FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$_GET['pid']."'");
										$rCekSeQAct = mysql_fetch_object($qCekSeQAct);				   
									?>
									<!-- JIKA UID SAMA DENGAN STORE PENGIRIM -->
									<? if($_GET['uid']== $rCekSeQAct->request_by){ ?>
										<? 										
										/*	$qCekSeQAct2 = mysql_query("SELECT ticket_id, request_by, kode_tipebrg, kode_tipebarang, 
																	   nama_tipebarang, ticket_notaging, ticketapprovalstatusid_am,
																	   ticketapprovalstatusid_rom, ticketapprovalstatusid_gmo, keterangan,
																	   ticket_needassist, tickettransferto_outletcode, tickettransferto_outletname,
																	   received_date, received_by, storereceived_createddate, storereceived_createdby			
																	   FROM ITH_TIPEBARANG_KODE 
																	   WHERE ticket_id = '".$_GET['pid']."'");
										*/
										/**	$qCekSeQAct2 = mysql_query("SELECT ITH_TIPEBARANG_KODE.ticket_id, ITH_TIPEBARANG_KODE.request_by, 
																	   ITH_TIPEBARANG_KODE.kode_tipebrg, ITH_TIPEBARANG_KODE.kode_tipebarang, 
																	   ITH_TIPEBARANG_KODE.nama_tipebarang, ITH_TIPEBARANG_KODE.ticket_notaging, ITH_TIPEBARANG_KODE.ticketapprovalstatusid_am,
																	   ITH_TIPEBARANG_KODE.ticketapprovalstatusid_rom, ITH_TIPEBARANG_KODE.ticketapprovalstatusid_gmo, ITH_TIPEBARANG_KODE.keterangan,
																	   ITH_TIPEBARANG_KODE.ticket_needassist, ITH_TIPEBARANG_KODE.tickettransferto_outletcode, ITH_TIPEBARANG_KODE.tickettransferto_outletname,
																	   ITH_TIPEBARANG_KODE.transfer_date, ITH_TIPEBARANG_KODE.transfer_by, ITH_TIPEBARANG_KODE.storetransfer_createddate, ITH_TIPEBARANG_KODE.storetransfer_createdby,
																	   ITH_TIPEBARANG_KODE.received_date, ITH_TIPEBARANG_KODE.received_by, ITH_TIPEBARANG_KODE.storereceived_createddate, ITH_TIPEBARANG_KODE.storereceived_createdby,
																	   ITH_USER.user_realname, ITH_TICKET_HEADER.ticket_createdate,
																	   ITH_TIPEBARANG_KODE.storetransfer_createddate,ITH_TIPEBARANG_KODE.storetransfer_createdby																	   
																	   FROM ITH_TIPEBARANG_KODE 
																	   JOIN ITH_TICKET_HEADER ON ITH_TIPEBARANG_KODE.ticket_id = ITH_TICKET_HEADER.ticket_id
																	   JOIN ITH_USER ON ITH_TIPEBARANG_KODE.request_by = ITH_USER.user_nik
																	   WHERE ITH_TIPEBARANG_KODE.ticket_id = '".$_GET['pid']."'
																	   AND ITH_TIPEBARANG_KODE.request_by = '".$_GET['uid']."'"); **/
											$qCekSeQAct2 = mysql_query("SELECT ITH_TIPEBARANG_KODE.ticket_id, ITH_TIPEBARANG_KODE.request_by,
																	   ITH_TIPEBARANG_KODE.transfer_date, ITH_TIPEBARANG_KODE.transfer_by,
																	   ITH_TIPEBARANG_KODE.kode_tipebrg, ITH_TIPEBARANG_KODE.kode_tipebarang, 
																	   ITH_TIPEBARANG_KODE.nama_tipebarang, ITH_TIPEBARANG_KODE.ticket_notaging, ITH_TIPEBARANG_KODE.ticketapprovalstatusid_am,
																	   ITH_TIPEBARANG_KODE.ticketapprovalstatusid_rom, ITH_TIPEBARANG_KODE.ticketapprovalstatusid_gmo, ITH_TIPEBARANG_KODE.keterangan,
																	   ITH_TIPEBARANG_KODE.ticket_needassist, ITH_TIPEBARANG_KODE.tickettransferto_outletcode, ITH_TIPEBARANG_KODE.tickettransferto_outletname,
																	   ITH_TIPEBARANG_KODE.received_date, ITH_TIPEBARANG_KODE.received_by, ITH_TIPEBARANG_KODE.storereceived_createddate, ITH_TIPEBARANG_KODE.storereceived_createdby,
																	   ITH_USER.user_realname, ITH_TICKET_HEADER.ticket_createdate,ITUSRX2.user_realname AS storeName,
																	   ITH_TIPEBARANG_KODE.storetransfer_createdby,	ITH_TIPEBARANG_KODE.storetransfer_createddate
																	   FROM ITH_TIPEBARANG_KODE 
																	   JOIN ITH_TICKET_HEADER ON ITH_TIPEBARANG_KODE.ticket_id = ITH_TICKET_HEADER.ticket_id
																	   JOIN ITH_USER ON ITH_TIPEBARANG_KODE.request_by = ITH_USER.user_nik
																	   JOIN ITH_USER ITUSRX2 ON ITH_USER.userstoregroup_id = ITUSRX2.user_nik
																	   WHERE ITH_TIPEBARANG_KODE.ticket_id = '".$_GET['pid']."'
																	   AND ITH_TIPEBARANG_KODE.request_by = '".$_GET['uid']."'");
											while($rCekSeQAct2 = mysql_fetch_object($qCekSeQAct2)){						   
										?>
										
											<tr>
												<td width="10%" style="color:#000;font-weight:bold;"><center><?=$rCekSeQAct2->ticket_id;?></center></td>
												<td width="10%" style="color:#000;font-weight:bold;"><center><?=$rCekSeQAct2->nama_tipebarang;?></center></td>
												<td width="10%" style="display:none;color:#000;font-weight:bold;"><center><?=$rCekSeQAct2->ticket_notaging;?></center></td>

												<td width="10%" style="display:none;"><font color="blue"><b><center><?=$rCekSeQAct2->user_realname.'<br>(KFC '.$rCekSeQAct2->storeName.')';?></center></b></font></td>									
												<td width="10%"><font color="blue"><b><center><?='KFC '.$rCekSeQAct2->storeName;?></center></b></font></td>
												<td width="10%"><center>
												<? if($rCekSeQAct2->storetransfer_createddate!=''){ ?>	
												<!-- ASSIGNED TECHNICIAN FROM FSD MGR / OPR MGR -->	
													<? 
														if($rCekSeQAct2->ticket_needassist == 'YES'){
															echo "<b><font color='brown'>".strtoupper($rCekSeQAct2->pictakein_by)."</font><br><font color='#000'>(FSD Technician)</font></b>";
										?>					<div style="text-align:right;margin-top:5px;">
										<?					#echo "<b><font color='brown'>".$rCekSeQAct2b->pictakein_date."</font><b></div>";
															echo "<b><font color='brown'>".$rCekSeQAct2->pic_createddate."</font><b></div>";
														}elseif($rCekSeQAct2->ticket_needassist == 'NO'){
															echo "<b><font color='brown'>".strtoupper($rCekSeQAct2->pictakein_by)."</font><br><font color='#000'>(OPR Technician)</font></b>";
										?>					<div style="text-align:right;margin-top:5px;">
										<?				#	echo "<b><font color='brown'>".$rCekSeQAct2b->pictakein_date."</font><b></div>";
															echo "<b><font color='brown'>".$rCekSeQAct2->pic_createddate."</font><b></div>";
														}
													?>

												<? }elseif($rCekSeQAct2->storetransfer_createddate==''){ ?> -														
												<? } ?>		
												</center></td>

												<!--<td width="10%"><center><!--?=$rvSCatShowEQ->KIRIM_DARI_STOK;?--><!--</center></td>	-->
												<td width="10%"><center>
												<? if($rCekSeQAct2->transfer_date!=''){ ?>	
													<? 
														if($rCekSeQAct2->ticket_needassist == 'YES'){
															echo "<b>".strtoupper($rCekSeQAct2->transfer_by)."<br><font color='green'>(FSD Technician)</font></b>";
										?>					<div style="text-align:right;margin-top:5px;">
										<?					echo "<b>".$rCekSeQAct2->transfer_date."<b></div>";
														}elseif($rCekSeQAct2->ticket_needassist == 'NO'){
															echo "<b>".strtoupper($rCekSeQAct2->transfer_by)."<br><font color='orange'>(OPR Technician)</font></b>";
										?>					<div style="text-align:right;margin-top:5px;">
										<?					echo "<b>".$rCekSeQAct2->transfer_date."<b></div>";
														}
													?>
												<? }elseif($rCekSeQAct2->transfer_date==''){ ?> -														
												<? } ?>		
												</center></td>													
												<td width="10%"><center>
													<? 
														if($rCekSeQAct2->keterangan == 'MOVE TO WAREHOUSE'){
															echo "<b>FSD WAREHOUSE</b>";
														}elseif($rCekSeQAct2->keterangan == 'MOVE TO OTHER STORE'){
															echo "<b>KFC&nbsp;".$rCekSeQAct2->tickettransferto_outletname."</b>";
														}
													?>											
													</center></td>		
													<!--<td width="10%"><center>A2 <!?=$rCekSeQAct2->received_by;?></center>-->
													<td width="10%"><center>
													<? if($rCekSeQAct2->received_date!=''){ ?>
														<?="<b>".strtoupper($rCekSeQAct2->received_by)."<br><font color='Orange'>(Store Crew)</font></b>";?>
														<div style="text-align:right;margin-top:5px;"><?="<b>".$rCekSeQAct2->received_date."<b></div>"; ?>	
													<? }elseif($rCekSeQAct2->received_date==''){ ?>
														<?='-'?>
													<? } ?>	
													</center></td>													
													</td>	
												</tr>
											<? } ?>
											
									<!-- JIKA UID SAMA DENGAN STORE YG DITUJU -->		
									<? }elseif($_GET['uid']== $rCekSeQAct->tickettransferto_outletcode){ ?>
										<? 										
										/**	$qCekSeQAct2b = mysql_query("SELECT ITH_TIPEBARANG_KODE.ticket_id, ITH_TIPEBARANG_KODE.request_by, 
																	   ITH_TIPEBARANG_KODE.kode_tipebrg, ITH_TIPEBARANG_KODE.kode_tipebarang, 
																	   ITH_TIPEBARANG_KODE.nama_tipebarang, ITH_TIPEBARANG_KODE.ticket_notaging, ITH_TIPEBARANG_KODE.ticketapprovalstatusid_am,
																	   ITH_TIPEBARANG_KODE.ticketapprovalstatusid_rom, ITH_TIPEBARANG_KODE.ticketapprovalstatusid_gmo, ITH_TIPEBARANG_KODE.keterangan,
																	   ITH_TIPEBARANG_KODE.ticket_needassist, ITH_TIPEBARANG_KODE.tickettransferto_outletcode, ITH_TIPEBARANG_KODE.tickettransferto_outletname,
																	   ITH_TIPEBARANG_KODE.received_date, ITH_TIPEBARANG_KODE.received_by, ITH_TIPEBARANG_KODE.storereceived_createddate, ITH_TIPEBARANG_KODE.storereceived_createdby,
																	   ITH_USER.user_realname, ITH_TICKET_HEADER.ticket_createdate																
																	   FROM ITH_TIPEBARANG_KODE 
																	   JOIN ITH_TICKET_HEADER ON ITH_TIPEBARANG_KODE.ticket_id = ITH_TICKET_HEADER.ticket_id
																	   JOIN ITH_USER ON ITH_TIPEBARANG_KODE.request_by = ITH_USER.user_nik
																	   WHERE ITH_TIPEBARANG_KODE.ticket_id = '".$_GET['pid']."'
																	   AND ITH_TIPEBARANG_KODE.tickettransferto_outletcode = '".$_GET['uid']."'"); **/
											$qCekSeQAct2b = mysql_query("SELECT ITH_TIPEBARANG_KODE.ticket_id, ITH_TIPEBARANG_KODE.request_by,
																	   ITH_TIPEBARANG_KODE.transfer_date, ITH_TIPEBARANG_KODE.transfer_by,
																	   ITH_TIPEBARANG_KODE.kode_tipebrg, ITH_TIPEBARANG_KODE.kode_tipebarang, 
																	   ITH_TIPEBARANG_KODE.nama_tipebarang, ITH_TIPEBARANG_KODE.ticket_notaging, ITH_TIPEBARANG_KODE.ticketapprovalstatusid_am,
																	   ITH_TIPEBARANG_KODE.ticketapprovalstatusid_rom, ITH_TIPEBARANG_KODE.ticketapprovalstatusid_gmo, ITH_TIPEBARANG_KODE.keterangan,
																	   ITH_TIPEBARANG_KODE.ticket_needassist, ITH_TIPEBARANG_KODE.tickettransferto_outletcode, ITH_TIPEBARANG_KODE.tickettransferto_outletname,
																	   ITH_TIPEBARANG_KODE.received_date, ITH_TIPEBARANG_KODE.received_by, ITH_TIPEBARANG_KODE.storereceived_createddate, ITH_TIPEBARANG_KODE.storereceived_createdby,
																	   ITH_USER.user_realname, ITH_TICKET_HEADER.ticket_createdate,ITUSRX2.user_realname AS storeName,
																	   ITH_TIPEBARANG_KODE.storetransfer_createdby,	ITH_TIPEBARANG_KODE.storetransfer_createddate
																	   FROM ITH_TIPEBARANG_KODE 
																	   JOIN ITH_TICKET_HEADER ON ITH_TIPEBARANG_KODE.ticket_id = ITH_TICKET_HEADER.ticket_id
																	   JOIN ITH_USER ON ITH_TIPEBARANG_KODE.request_by = ITH_USER.user_nik
																	   JOIN ITH_USER ITUSRX2 ON ITH_USER.userstoregroup_id = ITUSRX2.user_nik
																	   WHERE ITH_TIPEBARANG_KODE.ticket_id = '".$_GET['pid']."'
																	   AND ITH_TIPEBARANG_KODE.tickettransferto_outletcode = '".$_GET['uid']."'");
											while($rCekSeQAct2b = mysql_fetch_object($qCekSeQAct2b)){						   
										?>
										
											<tr>
												<td width="10%" style="color:#000;font-weight:bold;"><center><?=$rCekSeQAct2b->ticket_id;?></center></td>
												<td width="10%" style="color:#000;font-weight:bold;"><center><?=$rCekSeQAct2b->kode_tipebarang.'-'.$rCekSeQAct2b->nama_tipebarang;?></center></td>
												<td width="10%" style="display:none;color:#000;font-weight:bold;"><center><?=$rCekSeQAct2b->ticket_notaging;?></center></td>

												<td width="10%" style="display:none;"><font color="blue"><b><center><?=$rCekSeQAct2b->user_realname.'<br>(KFC '.$rCekSeQAct2b->storeName.')';?></center></b></font></td>									
												<td width="10%"><font color="blue"><b><center><?='KFC '.$rCekSeQAct2b->storeName;?></center></b></font></td>
												<td width="10%" style="color:brown;font-weight:bold;"><center>
													<? 
														if($rCekSeQAct2b->ticket_needassist == 'YES'){
															echo "<b>FSD Technician</b>";
										?>					<div style="text-align:right;margin-top:5px;">
										<?					echo "<b>".$rCekSeQAct2b->ticket_createdate."<b></div>";
														}elseif($rCekSeQAct2b->ticket_needassist == 'NO'){
															echo "<b>OPR Technician</b>";
										?>					<div style="text-align:right;margin-top:5px;">
										<?					echo "<b>".$rCekSeQAct2b->ticket_createdate."<b></div>";
														}
													?>											
												</center></td>

												<!--<td width="10%"><center><!--?=$rvSCatShowEQ->KIRIM_DARI_STOK;?--><!--</center></td>	-->
												<td width="10%" style="color:#000;font-weight:bold;"><center><?=$rCekSeQAct2b->transfer_by;?></center></td>
													<td width="10%"><center>
													<? 
														if($rCekSeQAct2b->keterangan == 'MOVE TO WAREHOUSE'){
															echo "<b>FSD WAREHOUSE</b>";
														}elseif($rCekSeQAct2b->keterangan == 'MOVE TO OTHER STORE'){
															echo "<b>KFC&nbsp;".$rCekSeQAct2b->tickettransferto_outletname."</b>";
														}
													?>											
													</center></td>		
													<!--<td width="10%"><center>A1 <!?=$rCekSeQAct2b->received_by;?></center>
													</td>-->
													<td width="10%"><center>
													<? if($rCekSeQAct2b->received_date!=''){ ?>
														<?="<b>".strtoupper($rCekSeQAct2b->received_by)."<br><font color='Orange'>(Store Crew)</font></b>";?>
														<div style="text-align:right;margin-top:5px;"><?="<b>".$rCekSeQAct2b->received_date."<b></div>"; ?>	
													<? }elseif($rCekSeQAct2b->received_date==''){ ?>
														<?='-'?>
													<? } ?>	
													</center></td>													
												</tr>
											<? } ?>									
									<? }else{ ?>
										<? 										
										/**	$qCekSeQAct2b = mysql_query("SELECT ITH_TIPEBARANG_KODE.ticket_id, ITH_TIPEBARANG_KODE.request_by, 
																	   ITH_TIPEBARANG_KODE.kode_tipebrg, ITH_TIPEBARANG_KODE.kode_tipebarang, 
																	   ITH_TIPEBARANG_KODE.nama_tipebarang, ITH_TIPEBARANG_KODE.ticket_notaging, ITH_TIPEBARANG_KODE.ticketapprovalstatusid_am,
																	   ITH_TIPEBARANG_KODE.ticketapprovalstatusid_rom, ITH_TIPEBARANG_KODE.ticketapprovalstatusid_gmo, ITH_TIPEBARANG_KODE.keterangan,
																	   ITH_TIPEBARANG_KODE.ticket_needassist, ITH_TIPEBARANG_KODE.tickettransferto_outletcode, ITH_TIPEBARANG_KODE.tickettransferto_outletname,
																	   ITH_TIPEBARANG_KODE.received_date, ITH_TIPEBARANG_KODE.received_by, ITH_TIPEBARANG_KODE.storereceived_createddate, ITH_TIPEBARANG_KODE.storereceived_createdby,
																	   ITH_USER.user_realname, ITH_TICKET_HEADER.ticket_createdate																
																	   FROM ITH_TIPEBARANG_KODE 
																	   JOIN ITH_TICKET_HEADER ON ITH_TIPEBARANG_KODE.ticket_id = ITH_TICKET_HEADER.ticket_id
																	   JOIN ITH_USER ON ITH_TIPEBARANG_KODE.request_by = ITH_USER.user_nik
																	   WHERE ITH_TIPEBARANG_KODE.ticket_id = '".$_GET['pid']."'"); **/
											$qCekSeQAct2b = mysql_query("SELECT ITH_TIPEBARANG_KODE.ticket_id, ITH_TIPEBARANG_KODE.request_by,
																	   ITH_TIPEBARANG_KODE.transfer_date, ITH_TIPEBARANG_KODE.transfer_by,
																	   ITH_TIPEBARANG_KODE.kode_tipebrg, ITH_TIPEBARANG_KODE.kode_tipebarang, 
																	   ITH_TIPEBARANG_KODE.nama_tipebarang, ITH_TIPEBARANG_KODE.ticket_notaging, ITH_TIPEBARANG_KODE.ticketapprovalstatusid_am,
																	   ITH_TIPEBARANG_KODE.ticketapprovalstatusid_rom, ITH_TIPEBARANG_KODE.ticketapprovalstatusid_gmo, ITH_TIPEBARANG_KODE.keterangan,
																	   ITH_TIPEBARANG_KODE.ticket_needassist, ITH_TIPEBARANG_KODE.tickettransferto_outletcode, ITH_TIPEBARANG_KODE.tickettransferto_outletname,
																	   ITH_TIPEBARANG_KODE.received_date, ITH_TIPEBARANG_KODE.received_by, ITH_TIPEBARANG_KODE.storereceived_createddate, ITH_TIPEBARANG_KODE.storereceived_createdby,
																	   ITH_USER.user_realname, ITH_TICKET_HEADER.ticket_createdate,ITUSRX2.user_realname AS storeName,
																	   ITH_TIPEBARANG_KODE.storetransfer_createdby,	ITH_TIPEBARANG_KODE.storetransfer_createddate
																	   FROM ITH_TIPEBARANG_KODE 
																	   JOIN ITH_TICKET_HEADER ON ITH_TIPEBARANG_KODE.ticket_id = ITH_TICKET_HEADER.ticket_id
																	   JOIN ITH_USER ON ITH_TIPEBARANG_KODE.request_by = ITH_USER.user_nik
																	   JOIN ITH_USER ITUSRX2 ON ITH_USER.userstoregroup_id = ITUSRX2.user_nik
																	   WHERE ITH_TIPEBARANG_KODE.ticket_id = '".$_GET['pid']."'");
											while($rCekSeQAct2b = mysql_fetch_object($qCekSeQAct2b)){						   
										?>
										
											<tr>
												<td width="10%" style="color:brown;font-weight:bold;"><center><?=$rCekSeQAct2b->ticket_id;?></center></td>
												<td width="10%" style="color:brown;font-weight:bold;"><center><?=$rCekSeQAct2b->kode_tipebarang.'-'.$rCekSeQAct2b->nama_tipebarang;?></center></td>
												<td width="10%" style="display:none;color:brown;font-weight:bold;"><center><?=$rCekSeQAct2b->ticket_notaging;?></center></td>

												<td width="10%" style="display:none;"><font color="blue"><b><center><?=$rCekSeQAct2b->user_realname.'<br>(KFC '.$rCekSeQAct2b->storeName.')';?></center></b></font></td>									
												<td width="10%"><font color="blue"><b><center><?='KFC '.$rCekSeQAct2b->storeName;?></center></b></font></td>
												<td width="10%" style="color:brown;font-weight:bold;"><center>
													<? 
														if($rCekSeQAct2b->ticket_needassist == 'YES'){
															echo "<b>FSD Technician</b>";
										?>					<div style="text-align:right;margin-top:5px;">
										<?					echo "<b>".$rCekSeQAct2b->ticket_createdate."<b></div>";
														}elseif($rCekSeQAct2b->ticket_needassist == 'NO'){
															echo "<b>OPR Technician</b>";
										?>					<div style="text-align:right;margin-top:5px;">
										<?					echo "<b>".$rCekSeQAct2b->ticket_createdate."<b></div>";
														}
													?>											
												</center></td>

												<!--<td width="10%"><center><!--?=$rvSCatShowEQ->KIRIM_DARI_STOK;?--><!--</center></td>	-->
												<? if($rCekSeQAct2b->transfer_by==''){ ?>
												<td width="10%" style="color:#000;font-weight:bold;"><center>-</center></td>
												<? }elseif($rCekSeQAct2b->transfer_by!=''){ ?>
												<td width="10%" style="color:#000;font-weight:bold;"><center><?=$rCekSeQAct2b->transfer_by;?></center></td>
												<? } ?>
													
													<td width="10%" style="color:brown;font-weight:bold;"><center>
													<? 
														if($rCekSeQAct2b->keterangan == 'MOVE TO WAREHOUSE'){
															echo "<b>FSD WAREHOUSE</b>";
														}elseif($rCekSeQAct2b->keterangan == 'MOVE TO OTHER STORE'){
															echo "<b>KFC&nbsp;".$rCekSeQAct2b->tickettransferto_outletname."</b>";
														}
													?>											
													</center></td>		
													<!--<td width="10%"><center>A1 <!?=$rCekSeQAct2b->received_by;?></center>
													</td>-->
													<td width="10%" style="color:brown;font-weight:bold;"><center>
													<? if($rCekSeQAct2b->received_date!=''){ ?>
														<?="<b>".strtoupper($rCekSeQAct2b->received_by)."<br><font color='Orange'>(Store Crew)</font></b>";?>
														<div style="text-align:right;margin-top:5px;"><?="<b>".$rCekSeQAct2b->received_date."<b></div>"; ?>	
													<? }elseif($rCekSeQAct2b->received_date==''){ ?>
														<?='-'?>
													<? } ?>	
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
					<? }elseif(($rCekStatusTicketzz->ticketstatus_id == "2")&&(($rCekStatusTicketzz->ticketapprovalstatus_id3 == "2")&&($rCekStatusTicketzz->ticketapprovalstatus_id2 == "1")&&($rCekStatusTicketzz->ticketapprovalstatus_id == "1")))
					{ ?>		
						<!--<table class="blueTable" border="1">
							<tbody id="myCodes">							
							<tr><td style='font-weight:bold;color:grey;'><center>No data avalaible in table</center></td></tr>
							</tbody>
						</table>-->					
					<!--? }elseif(($rCekStatusTicketzz->ticketstatus_id == "2")&&(($rCekStatusTicketzz->ticketapprovalstatus_id2 == "1")&&($rCekStatusTicketzz->ticketapprovalstatus_id == "1")))
					{ ?-->						
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
										$qCekSeQAct = mysql_query("SELECT ticket_id, request_by, kode_tipebrg, kode_tipebarang, 
																   nama_tipebarang, ticket_notaging, ticketapprovalstatusid_am,
																   ticketapprovalstatusid_rom, ticketapprovalstatusid_gmo, keterangan,
																   ticket_needassist, tickettransferto_outletcode, tickettransferto_outletname,
																   received_date, received_by, storereceived_createddate, storereceived_createdby			
																   FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$_GET['pid']."'");
										$rCekSeQAct = mysql_fetch_object($qCekSeQAct);				   
									?>
									<!-- JIKA UID SAMA DENGAN STORE PENGIRIM -->
									<? if($_GET['uid']== $rCekSeQAct->request_by){ ?>
										<? 										
										/*	$qCekSeQAct2 = mysql_query("SELECT ticket_id, request_by, kode_tipebrg, kode_tipebarang, 
																	   nama_tipebarang, ticket_notaging, ticketapprovalstatusid_am,
																	   ticketapprovalstatusid_rom, ticketapprovalstatusid_gmo, keterangan,
																	   ticket_needassist, tickettransferto_outletcode, tickettransferto_outletname,
																	   received_date, received_by, storereceived_createddate, storereceived_createdby			
																	   FROM ITH_TIPEBARANG_KODE 
																	   WHERE ticket_id = '".$_GET['pid']."'");
										*/
										/**	$qCekSeQAct2 = mysql_query("SELECT ITH_TIPEBARANG_KODE.ticket_id, ITH_TIPEBARANG_KODE.request_by, 
																	   ITH_TIPEBARANG_KODE.kode_tipebrg, ITH_TIPEBARANG_KODE.kode_tipebarang, 
																	   ITH_TIPEBARANG_KODE.nama_tipebarang, ITH_TIPEBARANG_KODE.ticket_notaging, ITH_TIPEBARANG_KODE.ticketapprovalstatusid_am,
																	   ITH_TIPEBARANG_KODE.ticketapprovalstatusid_rom, ITH_TIPEBARANG_KODE.ticketapprovalstatusid_gmo, ITH_TIPEBARANG_KODE.keterangan,
																	   ITH_TIPEBARANG_KODE.ticket_needassist, ITH_TIPEBARANG_KODE.tickettransferto_outletcode, ITH_TIPEBARANG_KODE.tickettransferto_outletname,
																	   ITH_TIPEBARANG_KODE.transfer_date, ITH_TIPEBARANG_KODE.transfer_by, ITH_TIPEBARANG_KODE.storetransfer_createddate, ITH_TIPEBARANG_KODE.storetransfer_createdby,
																	   ITH_TIPEBARANG_KODE.received_date, ITH_TIPEBARANG_KODE.received_by, ITH_TIPEBARANG_KODE.storereceived_createddate, ITH_TIPEBARANG_KODE.storereceived_createdby,
																	   ITH_USER.user_realname, ITH_TICKET_HEADER.ticket_createdate																
																	   FROM ITH_TIPEBARANG_KODE 
																	   JOIN ITH_TICKET_HEADER ON ITH_TIPEBARANG_KODE.ticket_id = ITH_TICKET_HEADER.ticket_id
																	   JOIN ITH_USER ON ITH_TIPEBARANG_KODE.request_by = ITH_USER.user_nik
																	   WHERE ITH_TIPEBARANG_KODE.ticket_id = '".$_GET['pid']."'
																	   AND ITH_TIPEBARANG_KODE.request_by = '".$_GET['uid']."'"); **/
											$qCekSeQAct2 = mysql_query("SELECT ITH_TIPEBARANG_KODE.ticket_id, ITH_TIPEBARANG_KODE.request_by,
																	   ITH_TIPEBARANG_KODE.transfer_date, ITH_TIPEBARANG_KODE.transfer_by,
																	   ITH_TIPEBARANG_KODE.kode_tipebrg, ITH_TIPEBARANG_KODE.kode_tipebarang, 
																	   ITH_TIPEBARANG_KODE.nama_tipebarang, ITH_TIPEBARANG_KODE.ticket_notaging, ITH_TIPEBARANG_KODE.ticketapprovalstatusid_am,
																	   ITH_TIPEBARANG_KODE.ticketapprovalstatusid_rom, ITH_TIPEBARANG_KODE.ticketapprovalstatusid_gmo, ITH_TIPEBARANG_KODE.keterangan,
																	   ITH_TIPEBARANG_KODE.ticket_needassist, ITH_TIPEBARANG_KODE.tickettransferto_outletcode, ITH_TIPEBARANG_KODE.tickettransferto_outletname,
																	   ITH_TIPEBARANG_KODE.received_date, ITH_TIPEBARANG_KODE.received_by, ITH_TIPEBARANG_KODE.storereceived_createddate, ITH_TIPEBARANG_KODE.storereceived_createdby,
																	   ITH_USER.user_realname, ITH_TICKET_HEADER.ticket_createdate,ITUSRX2.user_realname AS storeName,
																	   ITH_TIPEBARANG_KODE.storetransfer_createdby,	ITH_TIPEBARANG_KODE.storetransfer_createddate
																	   FROM ITH_TIPEBARANG_KODE 
																	   JOIN ITH_TICKET_HEADER ON ITH_TIPEBARANG_KODE.ticket_id = ITH_TICKET_HEADER.ticket_id
																	   JOIN ITH_USER ON ITH_TIPEBARANG_KODE.request_by = ITH_USER.user_nik
																	   JOIN ITH_USER ITUSRX2 ON ITH_USER.userstoregroup_id = ITUSRX2.user_nik
																	   WHERE ITH_TIPEBARANG_KODE.ticket_id = '".$_GET['pid']."'
																	   AND ITH_TIPEBARANG_KODE.request_by = '".$_GET['uid']."'");
											while($rCekSeQAct2 = mysql_fetch_object($qCekSeQAct2)){						   
										?>
										
											<tr>
												<td width="10%" style="color:#000;font-weight:bold;"><center><?=$rCekSeQAct2->ticket_id;?></center></td>
												<td width="10%" style="color:#000;font-weight:bold;"><center><?=$rCekSeQAct2->nama_tipebarang;?></center></td>
												<td width="10%" style="display:none;color:#000;font-weight:bold;"><center><?=$rCekSeQAct2->ticket_notaging;?></center></td>

												<td width="10%" style="display:none;"><font color="blue"><b><center><?=$rCekSeQAct2->user_realname.'<br>(KFC '.$rCekSeQAct2->storeName.')';?></center></b></font></td>									
												<td width="10%"><font color="blue"><b><center><?='KFC '.$rCekSeQAct2->storeName;?></center></b></font></td>
												<td width="10%"><center>
												<? if($rCekSeQAct2->transfer_date!=''){ ?>	
												<!-- ASSIGNED TECHNICIAN FROM FSD MGR / OPR MGR -->	
													<? 
														if($rCekSeQAct2->ticket_needassist == 'YES'){
															echo "<b><font color='brown'>".strtoupper($rCekSeQAct2->pictakein_by)."</font><br><font color='#000'>(FSD Technician)</font></b>";
										?>					<div style="text-align:right;margin-top:5px;">
										<?					#echo "<b><font color='brown'>".$rCekSeQAct2b->pictakein_date."</font><b></div>";
															echo "<b><font color='brown'>".$rCekSeQAct2->pic_createddate."</font><b></div>";
														}elseif($rCekSeQAct2->ticket_needassist == 'NO'){
															echo "<b><font color='brown'>".strtoupper($rCekSeQAct2->pictakein_by)."</font><br><font color='#000'>(OPR Technician)</font></b>";
										?>					<div style="text-align:right;margin-top:5px;">
										<?				#	echo "<b><font color='brown'>".$rCekSeQAct2b->pictakein_date."</font><b></div>";
															echo "<b><font color='brown'>".$rCekSeQAct2->pic_createddate."</font><b></div>";
														}
													?>

												<? }elseif($rCekSeQAct2->transfer_date==''){ ?> -														
												<? } ?>		
												</center></td>

												<!--<td width="10%"><center><!--?=$rvSCatShowEQ->KIRIM_DARI_STOK;?--><!--</center></td>	-->
												<td width="10%" style="color:#000;font-weight:bold;"><center><?=$rCekSeQAct2->transfer_by;?></center></td>
													<td width="10%"><center>
													<? 
														if($rCekSeQAct2->keterangan == 'MOVE TO WAREHOUSE'){
															echo "<b>FSD WAREHOUSE</b>";
														}elseif($rCekSeQAct2->keterangan == 'MOVE TO OTHER STORE'){
															echo "<b>KFC&nbsp;".$rCekSeQAct2->tickettransferto_outletname."</b>";
														}
													?>											
													</center></td>		
													<!--<td width="10%"><center>A2 <!?=$rCekSeQAct2->received_by;?></center>-->
													<td width="10%"><center>
													<? if($rCekSeQAct2->received_date!=''){ ?>
														<?="<b>".strtoupper($rCekSeQAct2->received_by)."<br><font color='Orange'>(Store Crew)</font></b>";?>
														<div style="text-align:right;margin-top:5px;"><?="<b>".$rCekSeQAct2->received_date."<b></div>"; ?>	
													<? }elseif($rCekSeQAct2->received_date==''){ ?>
														<?='-'?>
													<? } ?>	
													</center></td>													
													</td>	
												</tr>
											<? } ?>
											
									<!-- JIKA UID SAMA DENGAN STORE YG DITUJU -->		
									<? }elseif($_GET['uid']== $rCekSeQAct->tickettransferto_outletcode){ ?>
										<? 										
										/**	$qCekSeQAct2b = mysql_query("SELECT ITH_TIPEBARANG_KODE.ticket_id, ITH_TIPEBARANG_KODE.request_by, 
																	   ITH_TIPEBARANG_KODE.kode_tipebrg, ITH_TIPEBARANG_KODE.kode_tipebarang, 
																	   ITH_TIPEBARANG_KODE.nama_tipebarang, ITH_TIPEBARANG_KODE.ticket_notaging, ITH_TIPEBARANG_KODE.ticketapprovalstatusid_am,
																	   ITH_TIPEBARANG_KODE.ticketapprovalstatusid_rom, ITH_TIPEBARANG_KODE.ticketapprovalstatusid_gmo, ITH_TIPEBARANG_KODE.keterangan,
																	   ITH_TIPEBARANG_KODE.ticket_needassist, ITH_TIPEBARANG_KODE.tickettransferto_outletcode, ITH_TIPEBARANG_KODE.tickettransferto_outletname,
																	   ITH_TIPEBARANG_KODE.received_date, ITH_TIPEBARANG_KODE.received_by, ITH_TIPEBARANG_KODE.storereceived_createddate, ITH_TIPEBARANG_KODE.storereceived_createdby,
																	   ITH_USER.user_realname, ITH_TICKET_HEADER.ticket_createdate																
																	   FROM ITH_TIPEBARANG_KODE 
																	   JOIN ITH_TICKET_HEADER ON ITH_TIPEBARANG_KODE.ticket_id = ITH_TICKET_HEADER.ticket_id
																	   JOIN ITH_USER ON ITH_TIPEBARANG_KODE.request_by = ITH_USER.user_nik
																	   WHERE ITH_TIPEBARANG_KODE.ticket_id = '".$_GET['pid']."'
																	   AND ITH_TIPEBARANG_KODE.tickettransferto_outletcode = '".$_GET['uid']."'"); **/
											$qCekSeQAct2b = mysql_query("SELECT ITH_TIPEBARANG_KODE.ticket_id, ITH_TIPEBARANG_KODE.request_by,
																	   ITH_TIPEBARANG_KODE.transfer_date, ITH_TIPEBARANG_KODE.transfer_by,
																	   ITH_TIPEBARANG_KODE.kode_tipebrg, ITH_TIPEBARANG_KODE.kode_tipebarang, 
																	   ITH_TIPEBARANG_KODE.nama_tipebarang, ITH_TIPEBARANG_KODE.ticket_notaging, ITH_TIPEBARANG_KODE.ticketapprovalstatusid_am,
																	   ITH_TIPEBARANG_KODE.ticketapprovalstatusid_rom, ITH_TIPEBARANG_KODE.ticketapprovalstatusid_gmo, ITH_TIPEBARANG_KODE.keterangan,
																	   ITH_TIPEBARANG_KODE.ticket_needassist, ITH_TIPEBARANG_KODE.tickettransferto_outletcode, ITH_TIPEBARANG_KODE.tickettransferto_outletname,
																	   ITH_TIPEBARANG_KODE.received_date, ITH_TIPEBARANG_KODE.received_by, ITH_TIPEBARANG_KODE.storereceived_createddate, ITH_TIPEBARANG_KODE.storereceived_createdby,
																	   ITH_USER.user_realname, ITH_TICKET_HEADER.ticket_createdate,ITUSRX2.user_realname AS storeName,
																	   ITH_TIPEBARANG_KODE.storetransfer_createdby,	ITH_TIPEBARANG_KODE.storetransfer_createddate
																	   FROM ITH_TIPEBARANG_KODE 
																	   JOIN ITH_TICKET_HEADER ON ITH_TIPEBARANG_KODE.ticket_id = ITH_TICKET_HEADER.ticket_id
																	   JOIN ITH_USER ON ITH_TIPEBARANG_KODE.request_by = ITH_USER.user_nik
																	   JOIN ITH_USER ITUSRX2 ON ITH_USER.userstoregroup_id = ITUSRX2.user_nik
																	   WHERE ITH_TIPEBARANG_KODE.ticket_id = '".$_GET['pid']."'
																	   AND ITH_TIPEBARANG_KODE.tickettransferto_outletcode = '".$_GET['uid']."'");
											while($rCekSeQAct2b = mysql_fetch_object($qCekSeQAct2b)){						   
										?>
										
											<tr>
												<td width="10%" style="color:#000;font-weight:bold;"><center><?=$rCekSeQAct2b->ticket_id;?></center></td>
												<td width="10%" style="color:#000;font-weight:bold;"><center><?=$rCekSeQAct2b->kode_tipebarang.'-'.$rCekSeQAct2b->nama_tipebarang;?></center></td>
												<td width="10%" style="display:none;color:#000;font-weight:bold;"><center><?=$rCekSeQAct2b->ticket_notaging;?></center></td>

												<td width="10%" style="display:none;"><font color="blue"><b><center><?=$rCekSeQAct2b->user_realname.'<br>(KFC '.$rCekSeQAct2b->storeName.')';?></center></b></font></td>									
												<td width="10%"><font color="blue"><b><center><?='KFC '.$rCekSeQAct2b->storeName;?></center></b></font></td>
												<td width="10%" style="color:brown;font-weight:bold;"><center>
													<? 
														if($rCekSeQAct2b->ticket_needassist == 'YES'){
															echo "<b>FSD Technician</b>";
										?>					<div style="text-align:right;margin-top:5px;">
										<?					echo "<b>".$rCekSeQAct2b->ticket_createdate."<b></div>";
														}elseif($rCekSeQAct2b->ticket_needassist == 'NO'){
															echo "<b>OPR Technician</b>";
										?>					<div style="text-align:right;margin-top:5px;">
										<?					echo "<b>".$rCekSeQAct2b->ticket_createdate."<b></div>";
														}
													?>											
												</center></td>

												<!--<td width="10%"><center><!--?=$rvSCatShowEQ->KIRIM_DARI_STOK;?--><!--</center></td>	-->
												<td width="10%" style="color:#000;font-weight:bold;"><center><?=$rCekSeQAct2b->transfer_by;?></center></td>
													<td width="10%"><center>
													<? 
														if($rCekSeQAct2b->keterangan == 'MOVE TO WAREHOUSE'){
															echo "<b>FSD WAREHOUSE</b>";
														}elseif($rCekSeQAct2b->keterangan == 'MOVE TO OTHER STORE'){
															echo "<b>KFC&nbsp;".$rCekSeQAct2b->tickettransferto_outletname."</b>";
														}
													?>											
													</center></td>		
													<!--<td width="10%"><center>A1 <!?=$rCekSeQAct2b->received_by;?></center>
													</td>-->
													<td width="10%"><center>
													<? if($rCekSeQAct2b->received_date!=''){ ?>
														<?="<b>".strtoupper($rCekSeQAct2b->received_by)."<br><font color='Orange'>(Store Crew)</font></b>";?>
														<div style="text-align:right;margin-top:5px;"><?="<b>".$rCekSeQAct2b->received_date."<b></div>"; ?>	
													<? }elseif($rCekSeQAct2b->received_date==''){ ?>
														<?='-'?>
													<? } ?>	
													</center></td>													
												</tr>
											<? } ?>									
									<? }else{ ?>
										<? 										
										/**	$qCekSeQAct2b = mysql_query("SELECT ITH_TIPEBARANG_KODE.ticket_id, ITH_TIPEBARANG_KODE.request_by, 
																	   ITH_TIPEBARANG_KODE.kode_tipebrg, ITH_TIPEBARANG_KODE.kode_tipebarang, 
																	   ITH_TIPEBARANG_KODE.nama_tipebarang, ITH_TIPEBARANG_KODE.ticket_notaging, ITH_TIPEBARANG_KODE.ticketapprovalstatusid_am,
																	   ITH_TIPEBARANG_KODE.ticketapprovalstatusid_rom, ITH_TIPEBARANG_KODE.ticketapprovalstatusid_gmo, ITH_TIPEBARANG_KODE.keterangan,
																	   ITH_TIPEBARANG_KODE.ticket_needassist, ITH_TIPEBARANG_KODE.tickettransferto_outletcode, ITH_TIPEBARANG_KODE.tickettransferto_outletname,
																	   ITH_TIPEBARANG_KODE.received_date, ITH_TIPEBARANG_KODE.received_by, ITH_TIPEBARANG_KODE.storereceived_createddate, ITH_TIPEBARANG_KODE.storereceived_createdby,
																	   ITH_USER.user_realname, ITH_TICKET_HEADER.ticket_createdate																
																	   FROM ITH_TIPEBARANG_KODE 
																	   JOIN ITH_TICKET_HEADER ON ITH_TIPEBARANG_KODE.ticket_id = ITH_TICKET_HEADER.ticket_id
																	   JOIN ITH_USER ON ITH_TIPEBARANG_KODE.request_by = ITH_USER.user_nik
																	   WHERE ITH_TIPEBARANG_KODE.ticket_id = '".$_GET['pid']."'"); **/
											$qCekSeQAct2b = mysql_query("SELECT ITH_TIPEBARANG_KODE.ticket_id, ITH_TIPEBARANG_KODE.request_by,
																	   ITH_TIPEBARANG_KODE.transfer_date, ITH_TIPEBARANG_KODE.transfer_by,
																	   ITH_TIPEBARANG_KODE.kode_tipebrg, ITH_TIPEBARANG_KODE.kode_tipebarang, 
																	   ITH_TIPEBARANG_KODE.nama_tipebarang, ITH_TIPEBARANG_KODE.ticket_notaging, ITH_TIPEBARANG_KODE.ticketapprovalstatusid_am,
																	   ITH_TIPEBARANG_KODE.ticketapprovalstatusid_rom, ITH_TIPEBARANG_KODE.ticketapprovalstatusid_gmo, ITH_TIPEBARANG_KODE.keterangan,
																	   ITH_TIPEBARANG_KODE.ticket_needassist, ITH_TIPEBARANG_KODE.tickettransferto_outletcode, ITH_TIPEBARANG_KODE.tickettransferto_outletname,
																	   ITH_TIPEBARANG_KODE.received_date, ITH_TIPEBARANG_KODE.received_by, ITH_TIPEBARANG_KODE.storereceived_createddate, ITH_TIPEBARANG_KODE.storereceived_createdby,
																	   ITH_USER.user_realname, ITH_TICKET_HEADER.ticket_createdate,ITUSRX2.user_realname AS storeName,
																	   ITH_TIPEBARANG_KODE.storetransfer_createdby,	ITH_TIPEBARANG_KODE.storetransfer_createddate
																	   FROM ITH_TIPEBARANG_KODE 
																	   JOIN ITH_TICKET_HEADER ON ITH_TIPEBARANG_KODE.ticket_id = ITH_TICKET_HEADER.ticket_id
																	   JOIN ITH_USER ON ITH_TIPEBARANG_KODE.request_by = ITH_USER.user_nik
																	   JOIN ITH_USER ITUSRX2 ON ITH_USER.userstoregroup_id = ITUSRX2.user_nik
																	   WHERE ITH_TIPEBARANG_KODE.ticket_id = '".$_GET['pid']."'");
											while($rCekSeQAct2b = mysql_fetch_object($qCekSeQAct2b)){						   
										?>
										
											<tr>
												<td width="10%" style="color:brown;font-weight:bold;"><center><?=$rCekSeQAct2b->ticket_id;?></center></td>
												<td width="10%" style="color:brown;font-weight:bold;"><center><?=$rCekSeQAct2b->kode_tipebarang.'-'.$rCekSeQAct2b->nama_tipebarang;?></center></td>
												<td width="10%" style="display:none;color:brown;font-weight:bold;"><center><?=$rCekSeQAct2b->ticket_notaging;?></center></td>

												<td width="10%" style="display:none;"><font color="blue"><b><center><?=$rCekSeQAct2b->user_realname.'<br>(KFC '.$rCekSeQAct2b->storeName.')';?></center></b></font></td>									
												<td width="10%"><font color="blue"><b><center><?='KFC '.$rCekSeQAct2b->storeName;?></center></b></font></td>
												<td width="10%" style="color:brown;font-weight:bold;"><center>
													<? 
														if($rCekSeQAct2b->ticket_needassist == 'YES'){
															echo "<b>FSD Technician</b>";
										?>					<div style="text-align:right;margin-top:5px;">
										<?					echo "<b>".$rCekSeQAct2b->ticket_createdate."<b></div>";
														}elseif($rCekSeQAct2b->ticket_needassist == 'NO'){
															echo "<b>OPR Technician</b>";
										?>					<div style="text-align:right;margin-top:5px;">
										<?					echo "<b>".$rCekSeQAct2b->ticket_createdate."<b></div>";
														}
													?>											
												</center></td>

												<!--<td width="10%"><center><!--?=$rvSCatShowEQ->KIRIM_DARI_STOK;?--><!--</center></td>	-->
												<? if($rCekSeQAct2b->transfer_by==''){ ?>
												<td width="10%" style="color:#000;font-weight:bold;"><center>-</center></td>
												<? }elseif($rCekSeQAct2b->transfer_by!=''){ ?>
												<td width="10%" style="color:#000;font-weight:bold;"><center><?=$rCekSeQAct2b->transfer_by;?></center></td>
												<? } ?>
													
													<td width="10%" style="color:brown;font-weight:bold;"><center>
													<? 
														if($rCekSeQAct2b->keterangan == 'MOVE TO WAREHOUSE'){
															echo "<b>FSD WAREHOUSE</b>";
														}elseif($rCekSeQAct2b->keterangan == 'MOVE TO OTHER STORE'){
															echo "<b>KFC&nbsp;".$rCekSeQAct2b->tickettransferto_outletname."</b>";
														}
													?>											
													</center></td>		
													<!--<td width="10%"><center>A1 <!?=$rCekSeQAct2b->received_by;?></center>
													</td>-->
													<td width="10%" style="color:brown;font-weight:bold;"><center>
													<? if($rCekSeQAct2b->received_date!=''){ ?>
														<?="<b>".strtoupper($rCekSeQAct2b->received_by)."<br><font color='Orange'>(Store Crew)</font></b>";?>
														<div style="text-align:right;margin-top:5px;"><?="<b>".$rCekSeQAct2b->received_date."<b></div>"; ?>	
													<? }elseif($rCekSeQAct2b->received_date==''){ ?>
														<?='-'?>
													<? } ?>	
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
					<? }else{ ?>
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
										$qCekSeQAct = mysql_query("SELECT ticket_id, request_by, kode_tipebrg, kode_tipebarang, 
																   nama_tipebarang, ticket_notaging, ticketapprovalstatusid_am,
																   ticketapprovalstatusid_rom, ticketapprovalstatusid_gmo, keterangan,
																   ticket_needassist, tickettransferto_outletcode, tickettransferto_outletname,
																   received_date, received_by, storereceived_createddate, storereceived_createdby			
																   FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$_GET['pid']."'");
										$rCekSeQAct = mysql_fetch_object($qCekSeQAct);				   
									?>
									<!-- JIKA UID SAMA DENGAN STORE PENGIRIM -->
										<? 										
										/**	$qCekSeQAct2b = mysql_query("SELECT ITH_TIPEBARANG_KODE.ticket_id, ITH_TIPEBARANG_KODE.request_by,
																	   ITH_TIPEBARANG_KODE.transfer_date, ITH_TIPEBARANG_KODE.transfer_by,
																	   ITH_TIPEBARANG_KODE.kode_tipebrg, ITH_TIPEBARANG_KODE.kode_tipebarang, 
																	   ITH_TIPEBARANG_KODE.nama_tipebarang, ITH_TIPEBARANG_KODE.ticket_notaging, ITH_TIPEBARANG_KODE.ticketapprovalstatusid_am,
																	   ITH_TIPEBARANG_KODE.ticketapprovalstatusid_rom, ITH_TIPEBARANG_KODE.ticketapprovalstatusid_gmo, ITH_TIPEBARANG_KODE.keterangan,
																	   ITH_TIPEBARANG_KODE.ticket_needassist, ITH_TIPEBARANG_KODE.tickettransferto_outletcode, ITH_TIPEBARANG_KODE.tickettransferto_outletname,
																	   ITH_TIPEBARANG_KODE.received_date, ITH_TIPEBARANG_KODE.received_by, ITH_TIPEBARANG_KODE.storereceived_createddate, ITH_TIPEBARANG_KODE.storereceived_createdby,
																	   ITH_USER.user_realname, ITH_TICKET_HEADER.ticket_createdate																
																	   FROM ITH_TIPEBARANG_KODE 
																	   JOIN ITH_TICKET_HEADER ON ITH_TIPEBARANG_KODE.ticket_id = ITH_TICKET_HEADER.ticket_id
																	   JOIN ITH_USER ON ITH_TIPEBARANG_KODE.request_by = ITH_USER.user_nik
																	   WHERE ITH_TIPEBARANG_KODE.ticket_id = '".$_GET['pid']."'
																	   AND (ITH_TIPEBARANG_KODE.ticketapprovalstatusid_am = '1' AND
																	   ITH_TIPEBARANG_KODE.ticketapprovalstatusid_rom = '1' AND 
																	   ITH_TIPEBARANG_KODE.ticketapprovalstatusid_gmo = '1')"); **/
											$qCekSeQAct2b = mysql_query("SELECT ITH_TIPEBARANG_KODE.ticket_id, ITH_TIPEBARANG_KODE.request_by,
																	   ITH_TIPEBARANG_KODE.transfer_date, ITH_TIPEBARANG_KODE.transfer_by,
																	   ITH_TIPEBARANG_KODE.kode_tipebrg, ITH_TIPEBARANG_KODE.kode_tipebarang, 
																	   ITH_TIPEBARANG_KODE.nama_tipebarang, ITH_TIPEBARANG_KODE.ticket_notaging, ITH_TIPEBARANG_KODE.ticketapprovalstatusid_am,
																	   ITH_TIPEBARANG_KODE.ticketapprovalstatusid_rom, ITH_TIPEBARANG_KODE.ticketapprovalstatusid_gmo, ITH_TIPEBARANG_KODE.keterangan,
																	   ITH_TIPEBARANG_KODE.ticket_needassist, ITH_TIPEBARANG_KODE.tickettransferto_outletcode, ITH_TIPEBARANG_KODE.tickettransferto_outletname,
																	   ITH_TIPEBARANG_KODE.received_date, ITH_TIPEBARANG_KODE.received_by, ITH_TIPEBARANG_KODE.storereceived_createddate, ITH_TIPEBARANG_KODE.storereceived_createdby,
																	   ITH_USER.user_realname, ITH_TICKET_HEADER.ticket_createdate,ITUSRX2.user_realname AS storeName,
																	   ITH_TIPEBARANG_KODE.storetransfer_createdby,	ITH_TIPEBARANG_KODE.storetransfer_createddate
																	   FROM ITH_TIPEBARANG_KODE 
																	   JOIN ITH_TICKET_HEADER ON ITH_TIPEBARANG_KODE.ticket_id = ITH_TICKET_HEADER.ticket_id
																	   JOIN ITH_USER ON ITH_TIPEBARANG_KODE.request_by = ITH_USER.user_nik
																	   JOIN ITH_USER ITUSRX2 ON ITH_USER.userstoregroup_id = ITUSRX2.user_nik
																	   WHERE ITH_TIPEBARANG_KODE.ticket_id = '".$_GET['pid']."'
																	   AND (ITH_TIPEBARANG_KODE.ticketapprovalstatusid_am = '1' AND
																	   ITH_TIPEBARANG_KODE.ticketapprovalstatusid_rom = '1' AND 
																	   ITH_TIPEBARANG_KODE.ticketapprovalstatusid_gmo = '1')");
											while($rCekSeQAct2b = mysql_fetch_object($qCekSeQAct2b)){						   
										?>
										
											<tr>
												<td width="10%" style="color:#000;font-weight:bold;"><center><?=$rCekSeQAct2b->ticket_id;?></center></td>
												<td width="10%" style="color:#000;font-weight:bold;"><center><?=$rCekSeQAct2b->kode_tipebarang.'-'.$rCekSeQAct2b->nama_tipebarang;?></center></td>
												<td width="10%" style="color:#000;font-weight:bold;"><center><?=$rCekSeQAct2b->ticket_notaging;?></center></td>

												<td width="10%" style="display:none;"><font color="blue"><b><center><?=$rCekSeQAct2b->user_realname.'<br>(KFC '.$rCekSeQAct2b->storeName.')';?></center></b></font></td>									
												<td width="10%"><font color="blue"><b><center><?='KFC '.$rCekSeQAct2b->storeName;?></center></b></font></td>
												<td width="10%"><center>
												<? if($rCekSeQAct2b->transfer_date!=''){ ?>	
													<? 
														if($rCekSeQAct2b->ticket_needassist == 'YES'){
															echo "<b>".strtoupper($rCekSeQAct2b->transfer_by)."<br><font color='green'>(FSD Technician)</font></b>";
										?>					<div style="text-align:right;margin-top:5px;">
										<?					echo "<b>".$rCekSeQAct2b->transfer_date."<b></div>";
														}elseif($rCekSeQAct2b->ticket_needassist == 'NO'){
															echo "<b>".strtoupper($rCekSeQAct2b->transfer_by)."<br><font color='orange'>(OPR Technician)</font></b>";
										?>					<div style="text-align:right;margin-top:5px;">
										<?					echo "<b>".$rCekSeQAct2b->transfer_date."<b></div>";
														}
													?>
												<? }elseif($rCekSeQAct2b->transfer_date==''){ ?> -														
												<? } ?>		
												</center></td>

												<!--<td width="10%"><center><!--?=$rvSCatShowEQ->KIRIM_DARI_STOK;?--><!--</center></td>	-->
												
													<td width="10%"><center>
													<? 
														if($rCekSeQAct2b->keterangan == 'MOVE TO WAREHOUSE'){
															echo "<b>FSD WAREHOUSE</b>";
														}elseif($rCekSeQAct2b->keterangan == 'MOVE TO OTHER STORE'){
															echo "<b>KFC&nbsp;".$rCekSeQAct2b->tickettransferto_outletname."</b>";
														}
													?>											
													</center></td>		
													<!--<td width="10%"><center>A3 <!?=$rCekSeQAct2b->received_by;?></center></td>-->
													<td width="10%"><center>
													<? if($rCekSeQAct2b->received_date!=''){ ?>
														<?="<b>".strtoupper($rCekSeQAct2b->received_by)."<br><font color='Orange'>(Store Crew)</font></b>";?>
														<div style="text-align:right;margin-top:5px;"><?="<b>".$rCekSeQAct2b->received_date."<b></div>"; ?>	
													<? }elseif($rCekSeQAct2b->received_date==''){ ?>
														<?='-'?>
													<? } ?>	
													</center></td>												
												</tr>
											<? } ?>										
								<? } ?>
								
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