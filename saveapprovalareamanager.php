<? ?>
<form id="form1" method="post" action="simpanapproveareamanager.php?&pid=<?=$_GET['pid']?>&itemcode=<?=$_POST["kdtipebrg"]?>" target="_blank">																									
	<!-- heading modal -->
		<div class="modal-header<?=$rvCekDataEQx["KODE_TIPEBARANG"]?>">
			<center><h4 class="modal-title<?=$rvCekDataEQx["KODE_TIPEBARANG"]?>">Please Apporval This Item Code For Area Manager (AM)</h4></center>
		</div>
			<!-- body modal -->
			<div class="modal-body<?=$rvCekDataEQx["KODE_TIPEBARANG"]?>">
				<p>
				<div style="margin-left:20px;" >
					&nbsp;<b>Item Name &nbsp;&nbsp;&nbsp; :</b> 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="hidden" name="kdtipebrg" value="<?=$rvCekDataEQx["KODE_TIPEBARANG"]?>"></input>
					<input type="text" name="nama_tipebarang" value="<?=$rvCekDataEQx["NAMA_TIPEBARANG"]?>"></input><br>
					&nbsp;<b>Status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</b>
					<? 
						#if($usrlevel == '1001'){		
						if($ticket_id!='') 
						{
							$qreqaprvlx = mysql_query("SELECT ticketapprovalstatus_id,ticketapprovalstatus_id2,ticketapprovalstatus_id3 
														FROM ITH_TICKET_HEADER WHERE ticket_id = '".$_GET['pid']."'");	
							$rreqaprvlx = mysql_fetch_object($qreqaprvlx);	
					?>			
							<?if(($rreqaprvlx->ticketapprovalstatus_id=='0')){?>
								<input type="radio" name="ticketapprovalstatus_id" value="<?='0'?>" checked>&nbsp;<?='Un-Approval'?>&nbsp;
								<input type="radio" name="ticketapprovalstatus_id" value="<?='1'?>">&nbsp;<?='Approval 1'?>&nbsp;
							<?}elseif(($rreqaprvlx->ticketapprovalstatus_id=='1')){?>
								<input type="radio" name="ticketapprovalstatus_id" value="<?='0'?>">&nbsp;<?='Un-Approval'?>&nbsp;
								<input type="radio" name="ticketapprovalstatus_id" value="<?='1'?>" checked>&nbsp;<?='Approval 2'?>&nbsp;
							<?}elseif(($rreqaprvlx->ticketapprovalstatus_id=='2')||($rreqaprvlx->ticketapprovalstatus_id=='3')){?>
								&nbsp;&nbsp;<!--?='<b><u>Has not responded X1</u></b>'?-->&nbsp;&nbsp;<!--<br>-->
								<input type="radio" name="ticketapprovalstatus_id" value="<?='0'?>">&nbsp;<?='Un-Approval'?>&nbsp;
								<input type="radio" name="ticketapprovalstatus_id" value="<?='1'?>">&nbsp;<?='Approval 1'?>&nbsp;
							<?}elseif(($rreqaprvlx->ticketapprovalstatus_id2=='0')){?>
								<input type="radio" name="ticketapprovalstatus_id2" value="<?='0'?>" checked>&nbsp;<?='Un-Approval'?>&nbsp;
								<input type="radio" name="ticketapprovalstatus_id2" value="<?='1'?>">&nbsp;<?='Approval 4'?>&nbsp;
							<?}elseif(($rreqaprvlx->ticketapprovalstatus_id2=='1')){?>
								<input type="radio" name="ticketapprovalstatus_id2" value="<?='0'?>">&nbsp;<?='Un-Approval'?>&nbsp;
								<input type="radio" name="ticketapprovalstatus_id2" value="<?='1'?>" checked>&nbsp;<?='Approval 5'?>&nbsp;
							<?}elseif(($rreqaprvlx->ticketapprovalstatus_id2=='2')||($rreqaprvlx->ticketapprovalstatus_id2=='3')){?>
								<input type="radio" name="ticketapprovalstatus_id2" value="<?='0'?>">&nbsp;<?='Un-Approval'?>&nbsp;
								<input type="radio" name="ticketapprovalstatus_id2" value="<?='1'?>">&nbsp;<?='Approval 6'?>&nbsp;
							<?}elseif(($rreqaprvlx->ticketapprovalstatus_id3=='0')){?>
								<input type="radio" name="ticketapprovalstatus_id3" value="<?='0'?>" checked>&nbsp;<?='Un-Approval'?>&nbsp;
								<input type="radio" name="ticketapprovalstatus_id3" value="<?='1'?>">&nbsp;<?='Approval 7'?>&nbsp;
							<?}elseif(($rreqaprvlx->ticketapprovalstatus_id3=='1')){?>
								<input type="radio" name="ticketapprovalstatus_id3" value="<?='0'?>">&nbsp;<?='Un-Approval'?>&nbsp;
								<input type="radio" name="ticketapprovalstatus_id3" value="<?='1'?>" checked>&nbsp;<?='Approval 8'?>&nbsp;
							<?}elseif(($rreqaprvlx->ticketapprovalstatus_id3=='2')||($rreqaprvlx->ticketapprovalstatus_id3=='3')){?>
								<input type="radio" name="ticketapprovalstatus_id3" value="<?='0'?>">&nbsp;<?='Un-Approval'?>&nbsp;
								<input type="radio" name="ticketapprovalstatus_id3" value="<?='1'?>">&nbsp;<?='Approval 9'?>&nbsp;										
							<? } ?>
							<script>
								function check() 
								{
									document.getElementById("0").checked = true;
								}
								function uncheck()
								{
									document.getElementById("0").checked = false;
								}
							</script>	
						<? } ?>	
							<br> &nbsp;<b>Description&nbsp;&nbsp;&nbsp; :</b>
							<textarea class="form-control" name="ticket_notestatusapp1" data-form-field="ticket_notestatusapp1" required="" id="ticket_notestatusapp1" style="width:60%;margin-left:100px;margin-bottom:20px;margin-top:-15px;"></textarea>
							<button type="button" class="btn btn-primary btn-form display-8" style="width:0px;margin-left:235px;margin-top:-15px;">Save</button>
				</div>	
				</p>
			</div>
			<!-- footer modal -->
			<div class="modal-footer<?=$rvCekDataEQx["KODE_TIPEBARANG"]?>">
				<center><h4 class="modal-title<?=$rvCekDataEQx["KODE_TIPEBARANG"]?>">Thankyou For Your Attention</h4></center>
			</div>
</form>