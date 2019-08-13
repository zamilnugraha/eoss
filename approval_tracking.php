<? 
	/* ############################################## APPROVAL TRACKING ########################################################################## */
?>
		<!--<table class="table table-condensed table-bordered table-hover" cellpadding="0" cellspacing="0" style="">
			<tbody>
					<tr>
						<td style="width:200px">
													
								<tr><th style="background-color:#F0E68C;color:#000;display:none;"><center>STATUS APPROVAL</center></th></tr>	-->					
						
			<script src="jquery/jquery.min.js"></script>
		<!--	<script>
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
					<font color="#ffffff"><b><u>SEQUENCE OF APPROVAL LIST [REFERENCE TICKET : (<<?='<font color="#ffffff"><b>'.$rCekStatusTicketReffx->ticketreference_id.'</b></font>';?>)]</u></b>
				<? }elseif($rCekStatusTicketReffx->ticketreferencestatus_id!='1'){ ?>
					<!--<b><u>APPROVAL TRACKING</u></b>-->
					<font color="#ffffff"><b><u>SEQUENCE OF APPROVAL LIST</u></b>
				<? } ?></font>
				
					<table class="blueTable" border="1"> 
						<thead>
							<tr>
								<?  
									#$objConnect = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
								?>														
									<!--<th width="7%">No.</th>-->
									<th width="17%">Nomor Tiket</th>
									<th width="20%">Disetujui<br>Oleh</th>
									<th width="20%">Status PeLaporan</th>
									<th width="10%">Tanggal PeLaporan</th>
									<th width="10%">Waktu PeLaporan</th>
									<th width="20%">Catatan</th>
									<th width="10%" style="display:none;">STK<br>BARU</th>
									<th width="10%" style="display:none;">STK<br>BAIK</th>
									<th width="10%" style="display:none;">STK<br>LAMA</th>
							</tr>													
						</thead>
					</table>								
					<!--<div style="width:100%; height:100px; overflow:auto;position:relative;">-->
					<div style="width:100%; height:100px; overflow:auto;position:relative;color:#000000;">
						<table class="blueTable" border="1">
							<tbody id="myCodes">

						<? 
						#$qcekstatustiket = mysql_query("SELECT ticketstatus_id FROM ITH_TICKET_HEADER where ticket_id = '".$_GET['pid']."'");	
						#$rcekstatusticket = mysql_fetch_object($qcekstatustiket);
						#if($rcekstatusticket->ticketstatus_id == '1')
						#{							
						?>
							<!--<tr>
								<td><center>No data available in table</center></td>
							</tr>-->		
						<?	
						#}elseif($rcekstatusticket->ticketstatus_id != '1'){
						#if($rcekstatusticket->ticketstatus_id == '1'){
						$qCekStatusTicketReff = mysql_query("SELECT ticket_id, ticketreference_id, ticketreferencestatus_id 
															 FROM ITH_TICKET_HEADER WHERE ticket_id = '".$_GET['pid']."'");
						$rCekStatusTicketReff = mysql_fetch_object($qCekStatusTicketReff);
						if($rCekStatusTicketReff->ticketreferencestatus_id=='1'){
							#echo "Ada Ticket Reference";
							$qcekapprvlreff = mysql_query("SELECT ticket_id,ticketapproval_by,ticketstatusapproval_name,
							ticketapproval_createddate,ticketapproval_createdtime,ticketapproval_subject							
							FROM VW_STATUS_APPROVAL WHERE ticket_id ='".$rCekStatusTicketReff->ticketreference_id."'");					
							# $rcekapprvlx = mysql_fetch_object($qcekapprvl);
							#if($rcekapprvlx->ticket_id!='')
							# {							
							while($rcekapprvlreff = mysql_fetch_object($qcekapprvlreff))
							{							
						?>
								<tr>										
									<!--<td width="7%">
										<center><!?=$i++;?></center>
									</td>-->
									<td width="17%">
										<center><?=$rcekapprvlreff->ticket_id;?></center>
									</td>
									<td width="20%">
										<center><?=$rcekapprvlreff->ticketapproval_by;?></center>
									</td>														
									<td width="20%">
										<center><?=$rcekapprvlreff->ticketstatusapproval_name;?></center>
									</td>														
									<td width="10%">
										<center><?=$rcekapprvlreff->ticketapproval_createddate;?></center>
									</td>														
									<td width="10%">
										<center><?=$rcekapprvlreff->ticketapproval_createdtime;?></center>
									</td>														
									<td width="20%">
										<center><?=$rcekapprvlreff->ticketapproval_subject;?></center>
									</td>														
								</tr>						
						<?	
							}
						}elseif($rCekStatusTicketReff->ticketreferencestatus_id!='1'){
							#echo "Bukan Ticket Reference";
						}	
							$qcekapprvl = mysql_query("SELECT VW_STATUS_APPROVAL.ticket_id,VW_STATUS_APPROVAL.ticketapproval_by,ITH_USER.userlevel_id,
							ITH_USER.nama_jabatan,
							VW_STATUS_APPROVAL.ticketstatusapproval_name,
							VW_STATUS_APPROVAL.ticketapproval_createddate,VW_STATUS_APPROVAL.ticketapproval_createdtime,VW_STATUS_APPROVAL.ticketapproval_subject							
							FROM VW_STATUS_APPROVAL 
							JOIN ITH_USER ON VW_STATUS_APPROVAL.ticketapproval_by = ITH_USER.user_realname
							JOIN ITH_USERLEVEL ON ITH_USER.userlevel_id = ITH_USERLEVEL.userlevel_id
							WHERE VW_STATUS_APPROVAL.ticket_id ='".$_GET['pid']."' AND ITH_USER.userlevel_id IN('3','8','1000')
							GROUP BY ITH_USERLEVEL.userlevel_id
							ORDER BY ITH_USERLEVEL.userlevel_id ASC");					
							# $rcekapprvlx = mysql_fetch_object($qcekapprvl);
							#if($rcekapprvlx->ticket_id!='')
							# {
							while($rcekapprvl = mysql_fetch_object($qcekapprvl))
							{
							#if($rcekapprvl->ticket_id!=''){		
								$i = 1;
									
							?>
								<tr>										
									<!--<td width="7%">
										<center><!?=$i++;?></center>
									</td>-->
									<td width="17%">
										<center><?=$rcekapprvl->ticket_id;?></center>
									</td>
									<td width="20%">
										<center><?=$rcekapprvl->ticketapproval_by;?></center>
									</td>														
									<td width="20%">
										<center><?=$rcekapprvl->ticketstatusapproval_name;?></center>
									</td>														
									<td width="10%">
										<center><?=$rcekapprvl->ticketapproval_createddate;?></center>
									</td>														
									<td width="10%">
										<center><?=$rcekapprvl->ticketapproval_createdtime;?></center>
									</td>														
									<td width="20%">
										<center><?=$rcekapprvl->ticketapproval_subject;?></center>
									</td>														
								</tr>	
								
							<?  } ?>
						<? # } ?>
							
						
							</tbody>
						</table>							
				
					</div>
													
						
		<!--			</td>				
					</tr>
			</tbody>		
		</table>--><br>		


<?
	/* ############################################################################################################################################# */
?>					