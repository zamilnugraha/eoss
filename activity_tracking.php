<? 
	/* ############################################## ACTIVITY TRACKING ########################################################################## */
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
					<font color="#ffffff"><b><u>SEQUENCE OF ACTIVITIES [REFERENCE TICKET : (</font><?='<font color="blue"><b>'.$rCekStatusTicketReffx->ticketreference_id.'</b></font>';?>)]</u></b>
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
									<th width="7%">No.</th>
									<th width="17%">Nomor Tiket.</th>
									<th width="10%">Tanggal PeLaporan</th>
									<th width="10%">Waktu PeLaporan</th>
									<th width="15%">Status PeLaporan</th>
									<th width="15%">DiTanggapi Oleh</th>
									<th width="15%">Jabatan</th>
									<th width="20%">Catatan</th>
									<th width="10%" style="display:none;">STK<br>BARU</th>
									<th width="10%" style="display:none;">STK<br>BAIK</th>
									<th width="10%" style="display:none;">STK<br>LAMA</th>
							</tr>													
						</thead>
					</table>								
					<div style="width:100%; height:auto; overflow:auto;position:relative;color:#000000;">
						<table class="blueTable" border="1">
							<tbody id="myCodes">
							<? 
							 $qcektrackingx = mysql_query("SELECT * FROM VW_DETAIL_TRACKING WHERE ticket_id ='$_GET[pid]'");					
							 $rcektrackingx = mysql_fetch_object($qcektrackingx);
							 if($rcektrackingx->ticket_id!='')
							 {
							?>			
							<tr>	
							<?
								$qcekoldticket = mysql_query("SELECT ticket_id, ticketreference_id,ticketreferencestatus_id, ticketstatus_id 
								FROM ITH_TICKET_HEADER WHERE ticket_id = '$_GET[pid]'");
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
									if(($rcekoldticket->ticketstatus_id=='2')||($rcekoldticket->ticketstatus_id!=2))
									{
										#$qcekdtl = mysql_query("SELECT * FROM VW_DETAIL_TRACKING WHERE ticket_id ='$_GET[pid]' GROUP BY STR_TO_DATE(ticketreport_createddate,'%d/%m/%Y'), DATE_FORMAT(CAST(ticketreport_createdtime AS TIME), '%H %i') ASC");
										/***
										$qcekdtl = mysql_query("SELECT ticket_id, ticketstatus_name, ticketstatusapproval_name, ticketreport_subject, ticketreport_createddate, ticketreport_createdtime, ticketrespond_by FROM VW_DETAIL_TRACKING WHERE ticket_id ='$_GET[pid]' 
													AND ticketrespond_by != ''
													GROUP BY STR_TO_DATE(ticketreport_createddate,'%d/%m/%Y'), DATE_FORMAT(CAST(ticketreport_createdtime AS TIME), '%H %i'), ticketrespond_by 
													ORDER BY STR_TO_DATE(ticketreport_createddate,'%d/%m/%Y'), DATE_FORMAT(CAST(ticketreport_createdtime AS TIME), '%H %i'), ticketrespond_by 
													ASC;");
										***/
										/***
										$qcekdtl = mysql_query("SELECT VW_DETAIL_TRACKING.ticket_id, VW_DETAIL_TRACKING.ticketstatus_name, VW_DETAIL_TRACKING.ticketstatusapproval_name, 
																VW_DETAIL_TRACKING.ticketreport_subject, VW_DETAIL_TRACKING.ticketreport_createddate, 
																VW_DETAIL_TRACKING.ticketreport_createdtime, VW_DETAIL_TRACKING.ticketrespond_by, ITH_USER.userlevel_id 
																FROM VW_DETAIL_TRACKING 
																JOIN ITH_USER ON VW_DETAIL_TRACKING.ticketrespond_by = ITH_USER.user_realname
																WHERE VW_DETAIL_TRACKING.ticket_id ='".$_GET['pid']."'
																GROUP BY VW_DETAIL_TRACKING.ticket_id, VW_DETAIL_TRACKING.ticketstatus_name, VW_DETAIL_TRACKING.ticketstatusapproval_name, 
																VW_DETAIL_TRACKING.ticketreport_subject, VW_DETAIL_TRACKING.ticketreport_createddate, 
																VW_DETAIL_TRACKING.ticketreport_createdtime, VW_DETAIL_TRACKING.ticketrespond_by, ITH_USER.userlevel_id 
																ORDER BY STR_TO_DATE(VW_DETAIL_TRACKING.ticketreport_createddate,'%d/%m/%Y'), 
																DATE_FORMAT(CAST(VW_DETAIL_TRACKING.ticketreport_createdtime AS TIME), '%H %i'),ITH_USER.userlevel_id
																ASC");
										***/
										$qcekdtl = mysql_query("SELECT VW_DETAIL_TRACKING.ticket_id, VW_DETAIL_TRACKING.ticketstatus_name, VW_DETAIL_TRACKING.ticketstatusapproval_name, 
																VW_DETAIL_TRACKING.ticketstatusapproval_id,
																VW_DETAIL_TRACKING.ticketreport_subject, VW_DETAIL_TRACKING.ticketreport_createddate, 
																VW_DETAIL_TRACKING.ticketreport_createdtime, VW_DETAIL_TRACKING.ticketrespond_by, ITH_USER.userlevel_id 
																FROM VW_DETAIL_TRACKING 
																JOIN ITH_USER ON VW_DETAIL_TRACKING.ticketrespond_by = ITH_USER.user_realname
																WHERE VW_DETAIL_TRACKING.ticket_id ='".$_GET['pid']."'
																GROUP BY VW_DETAIL_TRACKING.ticket_id, VW_DETAIL_TRACKING.ticketstatus_name, VW_DETAIL_TRACKING.ticketstatusapproval_name, 
																VW_DETAIL_TRACKING.ticketreport_subject, VW_DETAIL_TRACKING.ticketreport_createddate, 
																VW_DETAIL_TRACKING.ticketreport_createdtime, VW_DETAIL_TRACKING.ticketrespond_by, ITH_USER.userlevel_id 
																ORDER BY ITH_USER.userlevel_id, VW_DETAIL_TRACKING.ticketstatusapproval_id
																DESC");
																
										#$qcekdtl = mysql_query("SELECT * FROM VW_DETAIL_TRACKING WHERE ticket_id ='$_GET[pid]' ORDER BY STR_TO_DATE(ticketreport_createddate,'%d/%m/%Y') ASC");
										while($rcekdtl = mysql_fetch_object($qcekdtl))
										{
											$ticketrespondby = $rcekdtl->ticketrespond_by;
									?>								
										<tr>
											<td style="display:none;"><center><?=$rcekdtl->logreport_id;?></center></td>
											<td width="7%"><center><?=$i++;?></center></td>
											<td width="17%"><center><?=$rcekdtl->ticket_id;?></center></td>
											<td width="10%"><center><?=$rcekdtl->ticketreport_createddate;?></center></td>
											<td width="10%"><center><?=$rcekdtl->ticketreport_createdtime.'';?></center></td>
											<?
											/* FOR PIC */
											$qcekstatustracking = mysql_query("SELECT user_nik, user_realname, userlevel_id, nama_jabatan, udept_id 
																				FROM ITH_USER
																				WHERE user_realname = '$ticketrespondby'");
											$rcekstatustracking = mysql_fetch_object($qcekstatustracking);
											if(($rcekstatustracking->userlevel_id == '100')||($rcekstatustracking->userlevel_id == '101')||
													($rcekstatustracking->userlevel_id == '102')||($rcekstatustracking->userlevel_id == '103'))
											{ ?>	
											   
													<? if($rcekdtl->ticketstatusapproval_id=='2'){?>
															<td width="15%"><center><?='Admin Has Been Respond';?></center></td>
													<? }elseif($rcekdtl->ticketstatusapproval_id!='2'){?>
															<td width="15%"><center><?='Assignment By Admin';?></center></td>
													<? } ?>
												<td width="15%"><center><?=$rcekdtl->ticketrespond_by;?></center></td>
												<td width="15%"><center>1<?='Admin Assignment';?></center></td>
											<? 

											}elseif(($rcekstatustracking->userlevel_id == '1000')||($rcekstatustracking->userlevel_id == '1001')||
											($rcekstatustracking->userlevel_id == '3')||($rcekstatustracking->userlevel_id == '8'))
											{
											?>
													<?
														$qcekpic = mysql_query("SELECT DISTINCT
														VDTLTRACK.ticketrespond_by AS PIC1, 
														VDTLTRACK2.ticketrespond_by AS PIC2, 
														VDTLTRACK3.ticketrespond_by AS PIC3, 
														VDTLTRACK4.ticketrespond_by AS PIC4, 
														VDTLTRACK5.ticketrespond_by AS PIC5, 
														VDTLTRACK6.ticketrespond_by AS PIC6, 
														FROM ITH_TICKET_DETAIL TDETAIL
														LEFT JOIN ITH_USER TUSER ON TDETAIL.ticketdetail_pichandleby = TUSER.user_niik
														LEFT JOIN ITH_USER TUSER2 ON TDETAIL.ticketdetail_pichandleby = TUSER2.user_niik
														LEFT JOIN ITH_USER TUSER3 ON TDETAIL.ticketdetail_pichandleby = TUSER3.user_niik
														LEFT JOIN ITH_USER TUSER4 ON TDETAIL.ticketdetail_pichandleby = TUSER4.user_niik
														LEFT JOIN ITH_USER TUSER5 ON TDETAIL.ticketdetail_pichandleby = TUSER5.user_niik
														LEFT JOIN ITH_USER TUSER6 ON TDETAIL.ticketdetail_pichandleby = TUSER6.user_niik
														LEFT JOIN VW_DETAIL_TRACKING VDTLTRACK ON TUSER.user_realname = VDTLTRACK.ticketrespond_by
														LEFT JOIN VW_DETAIL_TRACKING VDTLTRACK2 ON TUSER2.user_realname = VDTLTRACK2.ticketrespond_by
														LEFT JOIN VW_DETAIL_TRACKING VDTLTRACK3 ON TUSER3.user_realname = VDTLTRACK3.ticketrespond_by
														LEFT JOIN VW_DETAIL_TRACKING VDTLTRACK4 ON TUSER4.user_realname = VDTLTRACK4.ticketrespond_by
														LEFT JOIN VW_DETAIL_TRACKING VDTLTRACK5 ON TUSER5.user_realname = VDTLTRACK5.ticketrespond_by
														LEFT JOIN VW_DETAIL_TRACKING VDTLTRACK6 ON TUSER6.user_realname = VDTLTRACK6.ticketrespond_by
														WHERE TDETAIL.ticketdetail_id = '$_GET[pid]'
														AND ((TUSER.user_realname='$ticketrespondby') OR(TUSER2.user_realname='$ticketrespondby')
															OR(TUSER3.user_realname='$ticketrespondby') OR(TUSER4.user_realname='$ticketrespondby')
															OR(TUSER5.user_realname='$ticketrespondby') OR(TUSER6.user_realname='$ticketrespondby')
														)");
														$rcekpic = mysql_fetch_object($qcekpic);		
													?>
													<?if($rcekpic->PIC1 = $ticketrespondby){?>
														<?if(($rcekstatustracking->userlevel_id == '3')){ /*STATUS TIKET RESPOND PIC*/ ?>
														<!--	<td width="15%"><center><!--?=$rcekdtl->ticketstatus_name;?></center></td>-->
															<td width="15%"><center><?=$rcekdtl->ticketstatusapproval_name;?></center></td>
														<?}elseif(($rcekstatustracking->userlevel_id != '3')){ /*STATUS TICKET RESPOND APPROVAL*/ ?>
															<td width="15%"><center><?=$rcekdtl->ticketstatusapproval_name;?></center></td>
														<? } ?>
													<? }else{ ?>
														<td width="15%"><center><?=$rcekdtl->ticketstatusapproval_name;?></center></td>
													<? } ?>	
													<td width="15%"><center><?=$rcekdtl->ticketrespond_by;?></center></td>
													<?if($rcekpic->PIC1 = $ticketrespondby){?>
													<?if(($rcekstatustracking->userlevel_id == '3')){ /*STATUS TIKET RESPOND PIC*/ ?>
															<!--<td width="15%"><center><!-?='PIC';?></center></td>-->
															<td width="15%"><center><?=$rcekstatustracking->nama_jabatan;?></center></td>
														<?}elseif(($rcekstatustracking->userlevel_id != '3')){ /*STATUS TICKET RESPOND APPROVAL*/ ?>
															<td width="15%"><center><?=$rcekstatustracking->nama_jabatan;?></center></td>
														<? } ?>														
													<? }else{ ?>
													<td width="15%"><center><?=$rcekdtl->ticketstatusapproval_name;?></center></td>
													<? } ?>														

											<? }elseif(($rcekstatustracking->userlevel_id == '21')||($rcekstatustracking->userlevel_id == '22')||
													($rcekstatustracking->userlevel_id == '23')){ ?>	
												<?
													$qcekpichandleby = mysql_query("SELECT ticketrespond_by FROM VW_DETAIL_TRACKING WHERE ticket_id ='$_GET[pid]' 
													AND ticketrespond_by != '' 
													GROUP BY STR_TO_DATE(ticketreport_createddate,'%d/%m/%Y'), DATE_FORMAT(CAST(ticketreport_createdtime AS TIME), '%H %i'), ticketrespond_by 
													ORDER BY STR_TO_DATE(ticketreport_createddate,'%d/%m/%Y'), DATE_FORMAT(CAST(ticketreport_createdtime AS TIME), '%H %i'), ticketrespond_by 
													DESC");
													$rcekpichandleby = mysql_fetch_object($qcekpichandleby);
												?>	
												<? if($rcekpichandleby->ticketrespond_by!=''){ ?>
												<td width="15%"><center>1<?=$rcekdtl->ticketstatus_name;?></center></td>
												<td width="15%"><center><?=$rcekdtl->ticketrespond_by;?></center></td>
												<!--? }elseif($rcekpichandleby->ticketrespond_by==NULL){ ?-->
												<? } ?>
												
												<td><center><?='PIC';?></center></td>
											<!--? }elseif(($rcekstatustracking->userlevel_id == '1')||($rcekstatustracking->userlevel_id == '2')||
													($rcekstatustracking->userlevel_id == '3')||($rcekstatustracking->userlevel_id == '4')){ ?-->	
											<? }elseif(($rcekstatustracking->userlevel_id == '1')||($rcekstatustracking->userlevel_id == '2')||
													($rcekstatustracking->userlevel_id == '4')){ ?>	
												<? 
													$qCekStatusTicketID1 = mysql_query("SELECT ticketstatus_id FROM ITH_TICKET_HEADER WHERE ticket_id = '".$_GET['pid']."'");
													$rCekStatusTicketID1 = mysql_fetch_object($qCekStatusTicketID1);
													if($rCekStatusTicketID1->ticketstatus_id=='1'){
												?>	
													<td width="15%"><center>Open</center></td>
												<? }elseif($rCekStatusTicketID1->ticketstatus_id=='2'){ ?>	
													<td width="15%"><center>On Process</center></td>
												<? }elseif($rCekStatusTicketID1->ticketstatus_id=='0'){ ?>	
													<td width="15%"><center>Solved</center></td>
												<? }elseif($rCekStatusTicketID1->ticketstatus_id=='5'){ ?>	
													<td width="15%"><center>Closed</center></td>
												<? }elseif($rCekStatusTicketID1->ticketstatus_id=='3'){ ?>	
													<td width="15%"><center>Cancel</center></td>
												<? } ?>	
												<td width="15%"><center><?=$rcekdtl->ticketrespond_by;?></center></td>
												<? if(($rCekStatusTicketID1->ticketstatus_id=='1')||($rCekStatusTicketID1->ticketstatus_id=='2')||
												($rCekStatusTicketID1->ticketstatus_id=='0')){ ?>
													<td width="15%"><center><?='User Request';?></center></td>
												<? }elseif(($rCekStatusTicketID1->ticketstatus_id=='5')){ ?>
													<td width="15%"><center><?='User Closed Ticket';?></center></td>
												<? }elseif(($rCekStatusTicketID1->ticketstatus_id=='3')){ ?>
													<td width="15%"><center><?='User Cancel Ticket';?></center></td>
												<? }else{ ?>	
													<td width="15%"><center><?='User Complaint';?></center></td>
												<? } ?>	
													
													
											<? } ?> 										
											<td><?=$rcekdtl->ticketreport_subject;?></td>										
										</tr>							
										<?}?>
									<?
									}elseif(($rcekoldticket->ticketstatus_id=='0')||($rcekoldticket->ticketstatus_id==0)||
									($rcekoldticket->ticketstatus_id=='5')||($rcekoldticket->ticketstatus_id==5))
									{
									#	$qcekdtl = mysql_query("SELECT * FROM VW_DETAIL_TRACKING WHERE ticket_id ='$_GET[pid]' GROUP BY STR_TO_DATE(ticketreport_createddate,'%d/%m/%Y'), DATE_FORMAT(CAST(ticketreport_createdtime AS TIME), '%H %i') ASC");
									/*	$qcekdtl = mysql_query("SELECT * FROM VW_DETAIL_TRACKING WHERE ticket_id ='$_GET[pid]' 
										GROUP BY STR_TO_DATE(ticketreport_createddate,'%d/%m/%Y'), DATE_FORMAT(CAST(ticketreport_createdtime AS TIME), '%H %i'), ticketrespond_by 
										ORDER BY STR_TO_DATE(ticketreport_createddate,'%d/%m/%Y'), DATE_FORMAT(CAST(ticketreport_createdtime AS TIME), '%H %i')
										ASC");			*/						
										#$qcekdtl = mysql_query("SELECT * FROM ITH_LOGREPORT WHERE ticket_id ='003360418-039219'
										$qcekdtl = mysql_query("SELECT * FROM ITH_LOGREPORT WHERE ticket_id ='$_GET[pid]'
										ORDER BY STR_TO_DATE(ticketreport_createddate,'%d/%m/%Y'), DATE_FORMAT(CAST(ticketreport_createdtime AS TIME), '%H %i')
										ASC");
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
												$qcekstatustracking = mysql_query("SELECT user_nik, user_realname, userlevel_id, nama_jabatan, udept_id 
																				   FROM ITH_USER
																				   WHERE user_realname = '$ticketrespondby'");
												$rcekstatustracking = mysql_fetch_object($qcekstatustracking);
												if(($rcekstatustracking->userlevel_id == '1000')||($rcekstatustracking->userlevel_id == '1001')||($rcekstatustracking->userlevel_id == '3')||($rcekstatustracking->userlevel_id == '8'))
												{
											?>
												<td width="15%"><center><?=$rcekdtl->ticketstatusapproval_name;?></center></td>
												<td width="15%"><center><?=$rcekdtl->ticketrespond_by;?></center></td>
												<td width="15%"><center><?=$rcekstatustracking->nama_jabatan;?></center></td>
											<? }elseif(($rcekstatustracking->userlevel_id == '100')||($rcekstatustracking->userlevel_id == '101')||
													($rcekstatustracking->userlevel_id == '102'))
											   { ?>	
													<? if($rcekdtl->ticketstatusapproval_id=='2'){?>
														<td width="15%"><center><?='Admin Has Been Respond';?></center></td>
													<? }elseif($rcekdtl->ticketstatusapproval_id!='2'){?>
														<td width="15%"><center><?=$rcekdtl->ticketstatusapproval_name;?></center></td>
													<? } ?>
												<td width="15%"><center><?=$rcekdtl->ticketrespond_by;?></center></td>
												<td width="15%"><center>2<?='Admin Assignment';?></center></td>
											<? }elseif(($rcekstatustracking->userlevel_id == '21')||($rcekstatustracking->userlevel_id == '22')||
													($rcekstatustracking->userlevel_id == '23')){ ?>	
												<?
													$qcekpichandleby = mysql_query("SELECT ticketrespond_by FROM VW_DETAIL_TRACKING WHERE ticket_id ='$_GET[pid]' 
													GROUP BY STR_TO_DATE(ticketreport_createddate,'%d/%m/%Y'), DATE_FORMAT(CAST(ticketreport_createdtime AS TIME), '%H %i') ASC");
													$rcekpichandleby = mysql_fetch_object($qcekpichandleby);
												?>	
												<? if($rcekpichandleby->ticketrespond_by!=''){ ?>
												<td width="15%"><center>3<?=$rcekdtl->ticketstatus_name;?></center></td>
												<td width="15%"><center><?=$rcekdtl->ticketrespond_by;?></center></td>
												<!--? }elseif($rcekpichandleby->ticketrespond_by==NULL){ ?-->
												<? } ?>
												
												<td><center><?='PIC';?></center></td>
											<!--? }elseif(($rcekstatustracking->userlevel_id == '1')||($rcekstatustracking->userlevel_id == '2')||
													($rcekstatustracking->userlevel_id == '3')||($rcekstatustracking->userlevel_id == '4')){ ?-->	
											<? }elseif(($rcekstatustracking->userlevel_id == '1')||($rcekstatustracking->userlevel_id == '2')||($rcekstatustracking->userlevel_id == '4')){ ?>	
												<td width="15%"><center>4<?=$rcekdtl->ticketstatus_name;?></center></td>
												<td width="15%"><center><?=$rcekdtl->ticketrespond_by;?></center></td>
												<td width="15%"><center><?='User Complaint';?></center></td>
											<? } ?> 										
											<td width="20%"><?=$rcekdtl->ticketreport_subject;?></td>										
										</tr>							
										<?}?>
									<?}?>
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
									<?}?>
								<?}?>
							</tr>	
							<tr>
							<? }elseif($rcektrackingx->ticket_id==''){ ?>																			
									<td><center>No data available in table</center></td>
							<? }  ?>
							</tr>	
							</tbody>
						</table>						
				
					</div>	
					
<?
	/* ############################################################################################################################################# */
?>					