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

                   <form class="mbr-form"  method="post" action="index.php?m=form&a=ncapsubmgr&pid=<?=$_GET['pid']?>" id="form1" name="form1" data-form-title="Mobirise Form" width="100%">
						<div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" data-for="approvallabel">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="ticket_problem">Request&nbsp;Approved :</label>
                                    <!--<input type="text" class="form-control" name="username" data-form-field="Name" required="" id="name-form1-c">-->
                                </div>
                            </div>		
							<script src="./js/jquery-1.12.4.min.js"></script>
	
						
                            <div class="col-md-8 multi-horizontal" data-for="approvalchecked" style="margin-left:0px;">
                                <div class="form-group">
							<? 
								#if($usrlevel == '1001'){		
								if($ticket_id!='') {
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
									function check() {
										document.getElementById("0").checked = true;
									}
									function uncheck() {
										document.getElementById("0").checked = false;
									}
									</script>	
								<? } ?>							
                                </div>
							</div>
							</div>				
							<div class="row row-sm-offset">					
								<div class="col-md-4 multi-horizontal" data-for="ticket_notestatusapp1">
									<div class="form-group">
										<label class="form-control-label mbr-fonts-style display-7" for="ticket_notestatusapp1">Description :</label>
										<!--<input type="text" class="form-control" name="username" data-form-field="Name" required="" id="name-form1-c">-->
									</div>
								</div>
								<div class="col-md-8 multi-horizontal" data-for="ticket_notestatusapp1" style="margin-left:0px;">
									<div class="form-group">
										<textarea class="form-control" name="ticket_notestatusapp1" data-form-field="ticket_notestatusapp1" required="" id="ticket_notestatusapp1"></textarea>
										<!--<input type="password" class="form-control" name="password" data-form-field="Password" id="password-form1-c">-->
									</div>
								</div>
							</div>
							<div class="row row-sm-offset">
								<div class="col-md-12 multi-horizontal">
								<!--<span class="input-group-btn ">-->
									<button href="" type="submit" class="btn btn-primary btn-form display-4">SAVE</button>
								<!--</span>-->
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
</script>		
<script type="text/javascript" src="jquery/jquery.min.js"></script>
<script type="text/javascript" src="jquery/jquery.validate.min.js"></script>