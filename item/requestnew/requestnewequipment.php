                    <form class="mbr-form"  method="post" action="index.php?m=form&a=npfsd" id="form1" name="form1" data-form-title="Mobirise Form">

						<div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" data-for="name">
                                <div class="form-group">						
							<? if(
								($_SESSION['ugroupid']=='0001')||($_SESSION['ugroupid']=='0002')||($_SESSION['ugroupid']=='0003a')||($_SESSION['ugroupid']=='0003b')||
								($_SESSION['ugroupid']=='0006')||($_SESSION['ugroupid']=='0007')||($_SESSION['ugroupid']=='0008')||($_SESSION['ugroupid']=='0009')	
								){ ?>
							 <!--<input type="radio" name="ticket_type" class="required" value="<!?=$rto->kode_departemen?>" checked>&nbsp;<!?=$rto->nama_departemen?>&nbsp;-->
							 <input type="hidden" name="ticket_type" class="required" value="<?='3'?>" checked readonly="readonly">&nbsp;<!--?='FSD WEST'?-->&nbsp;
								<? }elseif(($_SESSION['ugroupid']=='0004')||($_SESSION['ugroupid']=='0005')){ ?>
							 <!--<input type="radio" name="ticket_type" class="required" value="<!?=$rto->kode_departemen?>" checked>&nbsp;<!?=$rto->nama_departemen?>&nbsp;-->
							 <input type="hidden" name="ticket_type" class="required" value="<?='2'?>" checked readonly="readonly">&nbsp;<!--?='FSD EAST'?-->&nbsp;
							<? } ?>	
							<script>
								function check() {
									document.getElementById("1").checked = true;
								}
								function uncheck() {
									document.getElementById("1").checked = false;
								}
							</script>	
                                </div>
								<input type="hidden" class="required" name="statuslaporan_id" value="SL001" style="pointer-events:none;" checked readonly="readonly">&nbsp;<!--?='REQUEST STORE'?-->&nbsp;						
								<input type="hidden" class="required" name="kode_tipebrg" value="FSDBRGEQ" style="pointer-events:none;" checked readonly="readonly">&nbsp;<!--?='REQUEST STORE'?-->&nbsp;														
                            </div>	
						</div>

						<div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" data-for="name">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="name-form1-c">Equipment :</label>
                                    <!--<input type="text" class="form-control" name="username" data-form-field="Name" required="" id="name-form1-c">-->
                                </div>
                            </div>			
							<? include_once('jsequipment.php');?>
							
                            <div class="col-md-8 multi-horizontal" data-for="namefield" style="margin-left:-100px;">
                                <div class="form-group">
                                    <input id="<?='kode_tipebrgRQS-03-000112'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000112'?>"> <?=STRTOUPPER('cold')?>
                                    <input id="<?='kode_tipebrgRQS-03-000113'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000113'?>"> <?=STRTOUPPER('heat')?>
                                    <input id="<?='kode_tipebrgRQS-03-000114'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000114'?>"> <?=STRTOUPPER('food processing')?><!--<br>-->
                                    <input style="display:none;" id="<?='kode_tipebrgRQS-03-000115'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000115'?>"> <!--?=STRTOUPPER('prep and dumb table')?-->
                                    <input style="display:none;" id="<?='kode_tipebrgRQS-03-000116'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000116'?>"> <!--?=STRTOUPPER('container/dispenser and display')?--><!--<br>-->
                                    <input style="display:none;" id="<?='kode_tipebrgRQS-03-000117'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000117'?>"> <!--?=STRTOUPPER('cabinet and racking')?-->
                                    <input style="display:none;" id="<?='kode_tipebrgRQS-03-000118'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000118'?>"> <!--?=STRTOUPPER('air conditioning')?-->
                                    <input style="display:none;" id="<?='kode_tipebrgRQS-03-000119'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000119'?>"> <!--?=STRTOUPPER('sound system and multimedia')?--><!--<br>-->
                                    <input style="display:none;" id="<?='kode_tipebrgRQS-03-000120'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000120'?>"> <!--?=STRTOUPPER('playland')?-->
                                    <input style="display:none;" id="<?='kode_tipebrgRQS-03-000121'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000121'?>"> <!--?=STRTOUPPER('coffee and krusher counter')?-->
                                    <input style="display:none;" id="<?='kode_tipebrgRQS-03-000122'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000122'?>"> <!--?=STRTOUPPER('birthday center and drive-thru')?--><!--<br>-->
                                    <input style="display:none;" id="<?='kode_tipebrgRQS-03-000123'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000123'?>"> <!--?=STRTOUPPER('store facility system')?-->
                                    <input style="display:none;" id="<?='kode_tipebrgRQS-03-000124'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000124'?>"> <!--?=STRTOUPPER('other store equipment')?-->
                                    <input style="display:none;" id="<?='kode_tipebrgRQS-03-000125'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000125'?>"> <!--?=STRTOUPPER('store furniture and fixtures')?-->
								
								<!-- ########################### COLD EQUIPMENT (RQS-03-000112) ################################################ -->
									<? /* include_once('js_cold_eq.php');*/ include_once('req_cold_eq.php');?>
								<!-- ############################# HEAT EQUIPMENT (RQS-03-000113) ############################################## -->
									<? /*include_once('js_heat_eq.php');*/ include_once('req_heat_eq.php');?>	
								<!-- ####################### FOOD PROCESSING EQUIPMENT (RQS-03-000114) ######################################### -->
									<? include_once('req_foodprocessing_eq.php');?>
								<!-- ####################### PREP AND DUMB TABLE EQUIPMENT (RQS-03-000115) ######################################### -->								
									<? include_once('req_prepdumbtable_eq.php');?>
								<!-- ####################### CONTAINER/DISPENSER AND DISPLAY EQUIPMENT (RQS-03-000116) ######################################### -->								
									<? include_once('req_containerdisplay_eq.php');?>	
								<!-- ####################### CABINET AND RACKING EQUIPMENT (RQS-03-000117) ######################################### -->								
									<? include_once('req_cabinettracking_eq.php');?>	
								<!-- ####################### AIR CONDITIONING EQUIPMENT (RQS-03-000118) ######################################### -->								
									<? include_once('req_airconditioning_eq.php');?>	
								<!-- ####################### SOUND SYSTEM AND MULTIMEDIA (RQS-03-000119) ######################################### -->								
									<? include_once('req_soundsystemmultimedia_eq.php');?>
								<!-- ####################### PLAYLAND EQUIPMENT (RQS-03-000120) ######################################### -->								
									<? include_once('req_playland_eq.php');?>
								<!-- ####################### COFFEE AND KRUSHER EQUIPMENT (RQS-03-000121) ######################################### -->								
									<? include_once('req_coffeekrusher_eq.php');?>
								<!-- ####################### BIRTHDAY CENTER AND DRIVE-THRU (RQS-03-000122) ######################################### -->								
									<? include_once('req_birthdaycenterdrivethru_eq.php');?>
								<!-- ####################### STORE FACILITY SYSTEM (RQS-03-000123) ######################################### -->								
									<? include_once('req_storefacilitysystem_eq.php')?>
								<!-- ####################### OTHER STORE EQUIPMENTS (RQS-03-000124) ######################################### -->								
									<? include_once('req_otherstore_eq.php');?>
								<!-- ####################### STORE FURNITURE AND FIXTURES  (RQS-03-000125) ######################################### -->								
									<? include_once('req_storefurniturefixture_eq.php');?>
								</div>
							</div>
						</div>					
						
						<div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" data-for="ticket_subject">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="ticket_subject">Subject :</label>
                                    <!--<input type="text" class="form-control" name="username" data-form-field="Name" required="" id="name-form1-c">-->
                                </div>
                            </div>					
                            <div class="col-md-4 multi-horizontal" data-for="ticket_subject" style="margin-left:-100px;">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="ticket_subject" id="ticket_subject" data-form-field="ticket_subject" required="">
                                    <!--<input type="password" class="form-control" name="password" data-form-field="Password" id="password-form1-c">-->
                                </div>
                            </div>   
						</div>
						<div class="row row-sm-offset">					
                            <div class="col-md-4 multi-horizontal" data-for="ticket_problem">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="ticket_problem">Reason :</label>
                                    <!--<input type="text" class="form-control" name="username" data-form-field="Name" required="" id="name-form1-c">-->
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="ticket_problem" style="margin-left:-100px;">
                                <div class="form-group">
                                    <textarea class="form-control" name="ticket_problem" data-form-field="ticket_problem" required="" id="ticket_problem"></textarea>
                                    <!--<input type="password" class="form-control" name="password" data-form-field="Password" id="password-form1-c">-->
                                </div>
                            </div>
                        </div>
						<div class="row row-sm-offset">					
                            <div class="col-md-4 multi-horizontal" data-for="ticket_problem">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="ticket_problem">&nbsp;</label>
                                    <!--<input type="text" class="form-control" name="username" data-form-field="Name" required="" id="name-form1-c">-->
                                </div>
                            </div>
                            <div class="col-md-8 multi-horizontal" data-for="ticket_problem" style="margin-left:-100px;">
                                <div class="form-group">
                                   <button href="" type="submit" class="btn btn-primary btn-form display-4">SUBMIT</button>
                                    <!--<input type="password" class="form-control" name="password" data-form-field="Password" id="password-form1-c">-->
									&nbsp;&nbsp;&nbsp;&nbsp;	
                                   <button href="" type="reset" class="btn btn-primary btn-form display-4">CANCEL</button>
                                    <!--<input type="password" class="form-control" name="password" data-form-field="Password" id="password-form1-c">-->
                                </div>
                            </div>
                        </div>
                    </form>	
					

<script type="text/javascript">
						$(document).ready(function() {
								$('#form1').validate({
									rules: {
									 /*ticket_problem: { 
											required: true 
								} */
									
									},
									messages: {
										ticket_type: {
											required: "Kolom Kepada Harus Dipilih"						
										},
										ticket_viaby: {
											required: "Kolom Request By Harus Dipilih"						
										},
										ticket_priority: {
											required: "Kolom Skala Prioritas Harus Dipilih"						
										},
										statuslaporan_id: {
											required: "Kolom Tipe Laporan Harus Dipilih"						
										},
										ticket_createby: {
											required: "Kolom User Harus Dipilih"						
										},
										ticketsubcategory2_code: {
											required: "Kolom Kategori Harus Dipilih"						
										},
										ticketstatus_id: {
											required: "Kolom Status Request Harus Dipilih"						
										},
										ticket_subject: {
											required: "Subject Harus Diisi"						
										},
										ticket_problem: {
											required: "Deskripsi Harus Diisi"						
										}
										
									}
								});
							});
</script>
<script type="text/javascript">
						$('#kode_tipebrgRQS-03-000112').click(function() 
						{
						  $('.kode_tipebrgRQS-03-000112').toggle('slow', function() {
						  }); 	  
							if (display === true ) {
							  $( ".kode_tipebrgRQS-03-000112" ).show();
							} else if (display === false ) {
							  $( ".kode_tipebrgRQS-03-000112" ).hide();
							};	   
						});
						$('#kode_tipebrgRQS-03-000113').click(function() 
						{
						  $('.kode_tipebrgRQS-03-000113').toggle('slow', function() {
						  }); 	  
							if (display === true ) {
							  $( ".kode_tipebrgRQS-03-000113" ).show();
							} else if (display === false ) {
							  $( ".kode_tipebrgRQS-03-000113" ).hide();
							};	   
						});
						$('#kode_tipebrgRQS-03-000114').click(function() 
						{
						  $('.kode_tipebrgRQS-03-000114').toggle('slow', function() {
						  }); 	  
							if (display === true ) {
							  $( ".kode_tipebrgRQS-03-000114" ).show();
							} else if (display === false ) {
							  $( ".kode_tipebrgRQS-03-000114" ).hide();
							};	   
						});
						$('#kode_tipebrgRQS-03-000115').click(function() 
						{
						  $('.kode_tipebrgRQS-03-000115').toggle('slow', function() {
						  }); 	  
							if (display === true ) {
							  $( ".kode_tipebrgRQS-03-000115" ).show();
							} else if (display === false ) {
							  $( ".kode_tipebrgRQS-03-000115" ).hide();
							};	   
						});
						$('#kode_tipebrgRQS-03-000116').click(function() 
						{
						  $('.kode_tipebrgRQS-03-000116').toggle('slow', function() {
						  }); 	  
							if (display === true ) {
							  $( ".kode_tipebrgRQS-03-000116" ).show();
							} else if (display === false ) {
							  $( ".kode_tipebrgRQS-03-000116" ).hide();
							};	   
						});
						$('#kode_tipebrgRQS-03-000117').click(function() 
						{
						  $('.kode_tipebrgRQS-03-000117').toggle('slow', function() {
						  }); 	  
							if (display === true ) {
							  $( ".kode_tipebrgRQS-03-000117" ).show();
							} else if (display === false ) {
							  $( ".kode_tipebrgRQS-03-000117" ).hide();
							};	   
						});
						$('#kode_tipebrgRQS-03-000118').click(function() 
						{
						  $('.kode_tipebrgRQS-03-000118').toggle('slow', function() {
						  }); 	  
							if (display === true ) {
							  $( ".kode_tipebrgRQS-03-000118" ).show();
							} else if (display === false ) {
							  $( ".kode_tipebrgRQS-03-000118" ).hide();
							};	   
						});
						$('#kode_tipebrgRQS-03-000119').click(function() 
						{
						  $('.kode_tipebrgRQS-03-000119').toggle('slow', function() {
						  }); 	  
							if (display === true ) {
							  $( ".kode_tipebrgRQS-03-000119" ).show();
							} else if (display === false ) {
							  $( ".kode_tipebrgRQS-03-000119" ).hide();
							};	   
						});
						$('#kode_tipebrgRQS-03-000120').click(function() 
						{
						  $('.kode_tipebrgRQS-03-000120').toggle('slow', function() {
						  }); 	  
							if (display === true ) {
							  $( ".kode_tipebrgRQS-03-000120" ).show();
							} else if (display === false ) {
							  $( ".kode_tipebrgRQS-03-000120" ).hide();
							};	   
						});
						$('#kode_tipebrgRQS-03-000121').click(function() 
						{
						  $('.kode_tipebrgRQS-03-000121').toggle('slow', function() {
						  }); 	  
							if (display === true ) {
							  $( ".kode_tipebrgRQS-03-000121" ).show();
							} else if (display === false ) {
							  $( ".kode_tipebrgRQS-03-000121" ).hide();
							};	   
						});
						$('#kode_tipebrgRQS-03-000122').click(function() 
						{
						  $('.kode_tipebrgRQS-03-000122').toggle('slow', function() {
						  }); 	  
							if (display === true ) {
							  $( ".kode_tipebrgRQS-03-000122" ).show();
							} else if (display === false ) {
							  $( ".kode_tipebrgRQS-03-000122" ).hide();
							};	   
						});
						$('#kode_tipebrgRQS-03-000123').click(function() 
						{
						  $('.kode_tipebrgRQS-03-000123').toggle('slow', function() {
						  }); 	  
							if (display === true ) {
							  $( ".kode_tipebrgRQS-03-000123" ).show();
							} else if (display === false ) {
							  $( ".kode_tipebrgRQS-03-000123" ).hide();
							};	   
						});
						$('#kode_tipebrgRQS-03-000124').click(function() 
						{
						  $('.kode_tipebrgRQS-03-000124').toggle('slow', function() {
						  }); 	  
							if (display === true ) {
							  $( ".kode_tipebrgRQS-03-000124" ).show();
							} else if (display === false ) {
							  $( ".kode_tipebrgRQS-03-000124" ).hide();
							};	   
						});
						$('#kode_tipebrgRQS-03-000125').click(function() 
						{
						  $('.kode_tipebrgRQS-03-000125').toggle('slow', function() {
						  }); 	  
							if (display === true ) {
							  $( ".kode_tipebrgRQS-03-000125" ).show();
							} else if (display === false ) {
							  $( ".kode_tipebrgRQS-03-000125" ).hide();
							};	   
						});
</script>	
