                   <form class="mbr-form"  method="post" action="index.php?m=form&a=npfsd" id="form1" name="form1" data-form-title="Mobirise Form">
						<!--
						<input type="hidden" name="email" data-form-email="true" value="XsSBhQeLOjXrIVGs7O4a1WJlEYdL4Tk7XUDBb10trIdhswm5K3bF+pd8h9b6sUYR4XOt+XXr0QsL+GAs11tziMiJSAUu07nsSjZM0VVZ+7p/l/aycAO+Gf0iGxaLy4BW">
                        -->
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
							<script src="./js/jquery-1.12.4.min.js"></script>
							<script type="text/javascript">
							$(document).ready(function(){
								$('input[type="checkbox"]').click(function(){
									var inputValue = $(this).attr("value");
									var targetFsd = $("." + inputValue);
									$(".fsd").not(targetFsd).hide();
									$(targetFsd).show();
								});
							});
							</script>
							<style type="text/css">
								.fsd{
									color: #000;
									padding: 20px;
									display: none;
									margin-top: 20px;
								}
							
							.RQS-03-000112replace{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000113replace{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000114replace{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000115replace{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000116replace{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000117replace{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000118replace{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000119replace{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000120replace{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000121replace{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000122replace{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000123replace{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000124replace{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000125replace{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000112inforeplace{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000113inforeplace{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000114inforeplace{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000115inforeplace{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000116inforeplace{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000117inforeplace{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000118inforeplace{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000119inforeplace{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000120inforeplace{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000121inforeplace{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000122inforeplace{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000123inforeplace{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000124inforeplace{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000125inforeplace{ background: (#7fd9fc, #6576aa); }
							</style>							
                            <div class="col-md-8 multi-horizontal" data-for="namefield" style="margin-left:-100px;">
                                <div class="form-group">
                                    <input id="<?='kode_tipebrgRQS-03-000112replace'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000112replace'?>"> <?=STRTOUPPER('cold')?>
                                    <input id="<?='kode_tipebrgRQS-03-000113replace'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000113replace'?>"> <?=STRTOUPPER('heat')?>
                                    <input id="<?='kode_tipebrgRQS-03-000114replace'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000114replace'?>"> <?=STRTOUPPER('food processing')?><!--<br>-->
                                    <input style="display:none;" id="<?='kode_tipebrgRQS-03-000115replace'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000115replace'?>"> <!--?=STRTOUPPER('prep and dumb table')?-->
                                    <input style="display:none;" id="<?='kode_tipebrgRQS-03-000116replace'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000116replace'?>"> <!--?=STRTOUPPER('container/dispenser and display')?--><br>
                                    <input style="display:none;" id="<?='kode_tipebrgRQS-03-000117replace'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000117replace'?>"> <!--?=STRTOUPPER('cabinet and racking')?-->
                                    <input style="display:none;" id="<?='kode_tipebrgRQS-03-000118replace'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000118replace'?>"> <!--?=STRTOUPPER('air conditioning')?-->
                                    <input style="display:none;" id="<?='kode_tipebrgRQS-03-000119replace'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000119replace'?>"> <!--?=STRTOUPPER('sound system and multimedia')?--><br>
                                    <input style="display:none;" id="<?='kode_tipebrgRQS-03-000120replace'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000120replace'?>"> <!--?=STRTOUPPER('playland')?-->
                                    <input style="display:none;" id="<?='kode_tipebrgRQS-03-000121replace'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000121replace'?>"> <!--?=STRTOUPPER('coffee and krusher counter')?-->
                                    <input style="display:none;" id="<?='kode_tipebrgRQS-03-000122replace'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000122replace'?>"> <!--?=STRTOUPPER('birthday center and drive-thru')?--><br>
                                    <input style="display:none;" id="<?='kode_tipebrgRQS-03-000123replace'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000123replace'?>"> <!--?=STRTOUPPER('store facility system')?-->
                                    <input style="display:none;" id="<?='kode_tipebrgRQS-03-000124replace'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000124replace'?>"> <!--?=STRTOUPPER('other store equipment')?-->
                                    <input style="display:none;" id="<?='kode_tipebrgRQS-03-000125replace'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000125replace'?>"> <!--?=STRTOUPPER('store furniture and fixtures')?-->
								
								<!-- ########################### COLD EQUIPMENT REPLACEMENT (RQS-03-000112replace) ################################################ -->
								<div class="<?='kode_tipebrgRQS-03-000112replace'?>" style="display:none;margin-top:0px;margin-left:0px;">
										<table width="750" border="0" cellspacing="0" style="margin-left:0px;">
										<tr>
											<!--<td></td><!-- FSD WEST -->
											<td><label style="width:auto;"><strong><u>Cold&nbsp;Equipment(Replacement)&nbsp;List&nbsp;:</u></strong></label><br>
										<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
											<script src="jquery/jquery.min.js"></script>
											<script>
											$(document).ready(function(){
											  $("#coldequipmentreplacesrc").on("keyup", function() {
												var value = $(this).val().toLowerCase();
												$("#myCodescoldEQreplace tr").filter(function() {
												  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
												});
											  });
											});
											</script>
											<style>
												table.blueTable {
												  border: 1px solid #1C6EA4;
												  background-color: #EEEEEE;
												  width: 100%;
												  text-align: left;
												  border-collapse: collapse;
												  overflow-x:scroll;height:20px;
												  position:relative;
												}
												table.blueTable td, table.blueTable th {
												  border: 1px solid #AAAAAA;
												  padding: 3px 2px;	
												}
												table.blueTable tbody td {
												  font-size: 13px;
												}
												table.blueTable tr:nth-child(even) {
												  background: #D0E4F5;
												}
												table.blueTable thead {
												  background: #1C6EA4;
												  background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  border-bottom: 2px solid #444444;
												}
												table.blueTable thead th {
												  font-size: 12px;
												  text-align:center;
												  font-weight: bold;
												  color: #FFFFFF;
												  border-left: 2px solid #D0E4F5;
												}
												table.blueTable thead th:first-child {
												  border-left: none;
												}

												table.blueTable tfoot {
												  font-size: 14px;
												  font-weight: bold;
												  color: #FFFFFF;
												  background: #D0E4F5;
												  background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  border-top: 2px solid #444444;
												}
												table.blueTable tfoot td {
												  font-size: 14px;
												}
												table.blueTable tfoot .links {
												  text-align: right;
												}
												table.blueTable tfoot .links a{
												  display: inline-block;
												  background: #1C6EA4;
												  color: #FFFFFF;
												  padding: 2px 8px;
												  border-radius: 5px;
												}			
											</style>
											

											<input id="coldequipmentreplacesrc" type="text" placeholder="Search.." style="margin-top:20px;">
											
												<table class="blueTable" border="1"> 
													<thead>
													<tr>
													
														<?  
														$objConnect = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
														?>									
														<th width="17%">Item&nbsp;Code&nbsp;</th>
														<th width="20%">Item&nbsp;Name&nbsp;</th>	
														<th width="17%">Taging&nbsp;Number</th>														
														<th width="22%">Info&nbsp;Detail</th>	
														<th width="15%">Action</th>
													</tr>													
													</thead>
												</table>								
												<script src="./js/jquery-1.9.1.js.download"></script>
												<div style="width:100%; height:350px; overflow:auto;position:relative;">
												<table class="blueTable" border="1">
													<tbody id="myCodescoldEQreplace">
														<?  
														$objConnectReplace = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
													/*	
														$qvSCatReplace = "SELECT FSDMSTTRX_STORENEW.ITEM_CODE,
																	FSDBRGEQASSET_NEW.ITEM_NAME,
																	FSDMSTTRX_STORENEW.ITEM_BRAND, FSDMSTTRX_STORENEW.ITEM_MODEL, 
																	FSDBRTAG.NO_TAGING,
																	FSDMSTTRX_STORENEW.NILAI_BUKU, 
																	FSDMSTTRX_STORENEW.UMUR_BUKU,FSDMSTTRX_STORENEW.OUTLET_CODE
																	FROM FSDMSTTRX_STORENEW 
																	JOIN FSDBRGEQASSET_NEW ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE	
																	JOIN FSDBRTAG ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRTAG.KODE_BARANG		
																	WHERE FSDMSTTRX_STORENEW.OUTLET_CODE = '".$_SESSION['user_nik']."' AND FSDMSTTRX_STORENEW.EQTYPECODE = 'EQ0001'";	
													*/	
														$qvSCatReplace = "SELECT DISTINCT FSDMSTTRX_STORENEW.EQTYPECODE, FSDMSTTRX_STORENEW.GROUP_CODE,FSDMSTTRX_STORENEW.OUTLET_CODE, FSDMSTTRX_STORENEW.ITEM_CODE, FSDBRGEQASSET_NEW.ITEM_NAME,
																		FSDBRGEQASSET_NEW.NOMOR_TAGING, FSDMSTTRX_STORENEW.ITEM_BRAND, FSDMSTTRX_STORENEW.ITEM_MODEL, FSDMSTTRX_STORENEW.DIMENSI, 
																		FSDMSTTRX_STORENEW.ITEM_PRICE, FSDMSTTRX_STORENEW.UMUR_BUKU, FSDMSTTRX_STORENEW.UMUR_BUKU_MAX, FSDMSTTRX_STORENEW.NILAI_BUKU
																		FROM FSDMSTTRX_STORENEW 
																		JOIN FSDBRGEQASSET_NEW ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
																		WHERE  FSDMSTTRX_STORENEW.OUTLET_CODE = '".$_SESSION['user_nik']."' AND 
																		FSDMSTTRX_STORENEW.EQTYPECODE IN('EQ0001')";	
														$qobjParseReplace = oci_parse ($objConnectReplace, $qvSCatReplace);  
																		    oci_execute ($qobjParseReplace,OCI_DEFAULT);   
														while($rvSCatReplace = oci_fetch_array($qobjParseReplace,OCI_BOTH))  
														{  
															$jumlah_desimal  = "0";
															$pemisah_desimal = ".";
															$pemisah_ribuan  = ".";		
															
														?> 																					
													
														<tr>
															<td width="16%">
																<center><?=$rvSCatReplace["ITEM_CODE"];?></center>
															</td>																
															<td width="20%">
																<?=$rvSCatReplace["ITEM_NAME"];?>
															</td>
															<td width="17%">
																<center><?=$rvSCatReplace["NOMOR_TAGING"];?></center>
															</td>															
															<td width="20%">
																<?='Model Name : <strong>'.$rvSCatReplace["ITEM_MODEL"].'</strong><br>';?>
																<?='Brand Name  : <strong>'.$rvSCatReplace["ITEM_BRAND"].'</strong><br>';?>
																<?='Book Age  : <strong>'.$rvSCatReplace["UMUR_BUKU"].' </strong><br>';?>
																<?='Book Value : <strong>Rp.&nbsp;'.number_format($rvSCatReplace["NILAI_BUKU"], $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?>
															</td>													
															<td width="13%">
																<center><input type="checkbox" name="cekseqcoldreplace[]" value="<?=$rvSCatReplace["NOMOR_TAGING"];?>" id="<?='cekseqcoldreplace'.$rvSCatReplace["NOMOR_TAGING"];?>" style="display:show;" /></center>
															</td>	
														</tr>
														<? } ?>
														<script src="./js/jquery.min.js.download"></script>														
													</tbody>
												</table>	
												</div>	
											</td>
										</tr>
										</table>								
								</div>	
								<!-- ############################# HEAT EQUIPMENT  REPLACEMENT (RQS-03-000113replace) ################################# -->
								<div class="<?='kode_tipebrgRQS-03-000113replace'?>" style="display:none;margin-top:0px;margin-left:0px;">
										<table width="750" border="0" cellspacing="0" style="margin-left:0px;">
										<tr>
											<!--<td></td><!-- FSD WEST -->
											<td><label style="width:auto;"><strong><u>Heat&nbsp;Equipment(Replacement)&nbsp;List&nbsp;:</u></strong></label><br>
										<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
											<script src="jquery/jquery.min.js"></script>
											<script>
											$(document).ready(function(){
											  $("#heatequipmentreplacesrc").on("keyup", function() {
												var value = $(this).val().toLowerCase();
												$("#myCodesheatEQreplace tr").filter(function() {
												  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
												});
											  });
											});
											</script>
											<style>
												table.blueTable {
												  border: 1px solid #1C6EA4;
												  background-color: #EEEEEE;
												  width: 100%;
												  text-align: left;
												  border-collapse: collapse;
												  overflow-x:scroll;height:20px;
												  position:relative;
												}
												table.blueTable td, table.blueTable th {
												  border: 1px solid #AAAAAA;
												  padding: 3px 2px;	
												}
												table.blueTable tbody td {
												  font-size: 13px;
												}
												table.blueTable tr:nth-child(even) {
												  background: #D0E4F5;
												}
												table.blueTable thead {
												  background: #1C6EA4;
												  background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  border-bottom: 2px solid #444444;
												}
												table.blueTable thead th {
												  font-size: 12px;
												  text-align:center;
												  font-weight: bold;
												  color: #FFFFFF;
												  border-left: 2px solid #D0E4F5;
												}
												table.blueTable thead th:first-child {
												  border-left: none;
												}

												table.blueTable tfoot {
												  font-size: 14px;
												  font-weight: bold;
												  color: #FFFFFF;
												  background: #D0E4F5;
												  background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  border-top: 2px solid #444444;
												}
												table.blueTable tfoot td {
												  font-size: 14px;
												}
												table.blueTable tfoot .links {
												  text-align: right;
												}
												table.blueTable tfoot .links a{
												  display: inline-block;
												  background: #1C6EA4;
												  color: #FFFFFF;
												  padding: 2px 8px;
												  border-radius: 5px;
												}			
											</style>
											

											<input id="heatequipmentreplacesrc" type="text" placeholder="Search.." style="margin-top:20px;">
											
												<table class="blueTable" border="1"> 
													<thead>
													<tr>
													
														<?  
														$objConnect = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
														?>														
														<th width="17%">Item&nbsp;Code&nbsp;</th>
														<th width="20%">Item&nbsp;Name&nbsp;</th>	
														<th width="17%">Taging&nbsp;Number</th>														
														<th width="22%">Info&nbsp;Detail</th>	
														<th width="15%">Action</th>
													</tr>													
													</thead>
												</table>								
												<script src="./js/jquery-1.9.1.js.download"></script>
												<div style="width:100%; height:350px; overflow:auto;position:relative;">
												<table class="blueTable" border="1">
													<tbody id="myCodesheatEQreplace">
														<?  
														$objConnectReplace = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
													/*	
														$qvSCatReplace = "SELECT FSDMSTTRX_STORENEW.ITEM_CODE,
																	FSDBRGEQASSET_NEW.ITEM_NAME,
																	FSDMSTTRX_STORENEW.ITEM_BRAND, FSDMSTTRX_STORENEW.ITEM_MODEL, 
																	FSDBRTAG.NO_TAGING,
																	FSDMSTTRX_STORENEW.NILAI_BUKU, 
																	FSDMSTTRX_STORENEW.UMUR_BUKU,FSDMSTTRX_STORENEW.OUTLET_CODE
																	FROM FSDMSTTRX_STORENEW 
																	JOIN FSDBRGEQASSET_NEW ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE	
																	JOIN FSDBRTAG ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRTAG.KODE_BARANG		
																	WHERE FSDMSTTRX_STORENEW.OUTLET_CODE = '".$_SESSION['user_nik']."' 
																	AND FSDMSTTRX_STORENEW.EQTYPECODE = 'EQ0002'";	
													*/
														$qvSCatReplace = "SELECT DISTINCT FSDMSTTRX_STORENEW.EQTYPECODE, FSDMSTTRX_STORENEW.GROUP_CODE,FSDMSTTRX_STORENEW.OUTLET_CODE, FSDMSTTRX_STORENEW.ITEM_CODE, FSDBRGEQASSET_NEW.ITEM_NAME,
																		FSDBRGEQASSET_NEW.NOMOR_TAGING, FSDMSTTRX_STORENEW.ITEM_BRAND, FSDMSTTRX_STORENEW.ITEM_MODEL, FSDMSTTRX_STORENEW.DIMENSI, 
																		FSDMSTTRX_STORENEW.ITEM_PRICE, FSDMSTTRX_STORENEW.UMUR_BUKU, FSDMSTTRX_STORENEW.UMUR_BUKU_MAX, FSDMSTTRX_STORENEW.NILAI_BUKU
																		FROM FSDMSTTRX_STORENEW 
																		JOIN FSDBRGEQASSET_NEW ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
																		WHERE  FSDMSTTRX_STORENEW.OUTLET_CODE = '".$_SESSION['user_nik']."' AND 
																		FSDMSTTRX_STORENEW.EQTYPECODE IN('EQ0002')";	
													$qobjParseReplace = oci_parse ($objConnectReplace, $qvSCatReplace);  
																		    oci_execute ($qobjParseReplace,OCI_DEFAULT);   
														while($rvSCatReplace = oci_fetch_array($qobjParseReplace,OCI_BOTH))  
														{  
															$jumlah_desimal  = "0";
															$pemisah_desimal = ".";
															$pemisah_ribuan  = ".";		
															
														?> 																					
													
														<tr>
															<td width="16%">
																<center><?=$rvSCatReplace["ITEM_CODE"];?></center>
															</td>																
															<td width="20%">
																<?=$rvSCatReplace["ITEM_NAME"];?>
															</td>
															<td width="17%">
																<center><?=$rvSCatReplace["NOMOR_TAGING"];?></center>
															</td>															
															<td width="20%">
																<?='Model Name : <strong>'.$rvSCatReplace["ITEM_MODEL"].'</strong><br>';?>
																<?='Brand Name  : <strong>'.$rvSCatReplace["ITEM_BRAND"].'</strong><br>';?>
																<?='Book Age  : <strong>'.$rvSCatReplace["UMUR_BUKU"].' </strong><br>';?>
																<?='Book Value : <strong>Rp.&nbsp;'.number_format($rvSCatReplace["NILAI_BUKU"], $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?>
															</td>													
															<td width="13%">
																<center><input type="checkbox" name="cekseqheatreplace[]" value="<?=$rvSCatReplace["NOMOR_TAGING"];?>" id="<?='cekseqheatreplace'.$rvSCatReplace["NOMOR_TAGING"];?>" style="display:show;" /></center>
															</td>	
														</tr>
														<? } ?>	
													</tbody>
												</table>	
												</div>	
											</td>
										</tr>
										</table>								
								</div>	
								<!-- ####################### FOOD PROCESSING EQUIPMENT  REPLACEMENT  (RQS-03-000114) ########################### -->
								<div class="<?='kode_tipebrgRQS-03-000114replace'?>" style="display:none;margin-top:0px;margin-left:0px;">
										<table width="750" border="0" cellspacing="0" style="margin-left:0px;">
										<tr>
											<!--<td></td><!-- FSD WEST -->
											<td><label style="width:auto;"><strong><u>Food Processing&nbsp;Equipment&nbsp;List&nbsp;:</u></strong></label><br>
										<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
											<script src="jquery/jquery.min.js"></script>
											<script>
											$(document).ready(function(){
											  $("#foodprocessingreplacesrc").on("keyup", function() {
												var value = $(this).val().toLowerCase();
												$("#myCodesfoodprocessingreplace tr").filter(function() {
												  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
												});
											  });
											});
											</script>
											<style>
												table.blueTable {
												  border: 1px solid #1C6EA4;
												  background-color: #EEEEEE;
												  width: 100%;
												  text-align: left;
												  border-collapse: collapse;
												  overflow-x:scroll;height:20px;
												  position:relative;
												}
												table.blueTable td, table.blueTable th {
												  border: 1px solid #AAAAAA;
												  padding: 3px 2px;	
												}
												table.blueTable tbody td {
												  font-size: 13px;
												}
												table.blueTable tr:nth-child(even) {
												  background: #D0E4F5;
												}
												table.blueTable thead {
												  background: #1C6EA4;
												  background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  border-bottom: 2px solid #444444;
												}
												table.blueTable thead th {
												  font-size: 12px;
												  text-align:center;
												  font-weight: bold;
												  color: #FFFFFF;
												  border-left: 2px solid #D0E4F5;
												}
												table.blueTable thead th:first-child {
												  border-left: none;
												}

												table.blueTable tfoot {
												  font-size: 14px;
												  font-weight: bold;
												  color: #FFFFFF;
												  background: #D0E4F5;
												  background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  border-top: 2px solid #444444;
												}
												table.blueTable tfoot td {
												  font-size: 14px;
												}
												table.blueTable tfoot .links {
												  text-align: right;
												}
												table.blueTable tfoot .links a{
												  display: inline-block;
												  background: #1C6EA4;
												  color: #FFFFFF;
												  padding: 2px 8px;
												  border-radius: 5px;
												}			
											</style>
											

											<input id="foodprocessingreplacesrc" type="text" placeholder="Search.." style="margin-top:20px;">
											
												<table class="blueTable" border="1"> 
													<thead>
													<tr>
													
														<?  
														$objConnect = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
														?>														
														<th width="17%">Item&nbsp;Code&nbsp;</th>
														<th width="20%">Item&nbsp;Name&nbsp;</th>	
														<th width="17%">Taging&nbsp;Number</th>														
														<th width="22%">Info&nbsp;Detail</th>	
														<th width="15%">Action</th>
													</tr>													
													</thead>
												</table>								
												<script src="./js/jquery-1.9.1.js.download"></script>
												<div style="width:100%; height:350px; overflow:auto;position:relative;">
												<table class="blueTable" border="1">
													<tbody id="myCodesfoodprocessingreplace">
														<?  
														$objConnectReplace = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
													/*	
														$qvSCatReplace = "SELECT FSDMSTTRX_STORENEW.ITEM_CODE,
																	FSDBRGEQASSET_NEW.ITEM_NAME,
																	FSDMSTTRX_STORENEW.ITEM_BRAND, FSDMSTTRX_STORENEW.ITEM_MODEL, 
																	FSDBRTAG.NO_TAGING,
																	FSDMSTTRX_STORENEW.NILAI_BUKU, 
																	FSDMSTTRX_STORENEW.UMUR_BUKU,FSDMSTTRX_STORENEW.OUTLET_CODE
																	FROM FSDMSTTRX_STORENEW 
																	JOIN FSDBRGEQASSET_NEW ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE	
																	JOIN FSDBRTAG ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRTAG.KODE_BARANG		
																	WHERE FSDMSTTRX_STORENEW.OUTLET_CODE = '".$_SESSION['user_nik']."' 
																	AND FSDMSTTRX_STORENEW.EQTYPECODE = 'EQ0003'";	
													*/
														$qvSCatReplace = "SELECT DISTINCT FSDMSTTRX_STORENEW.EQTYPECODE, FSDMSTTRX_STORENEW.GROUP_CODE,FSDMSTTRX_STORENEW.OUTLET_CODE, FSDMSTTRX_STORENEW.ITEM_CODE, FSDBRGEQASSET_NEW.ITEM_NAME,
																		FSDBRGEQASSET_NEW.NOMOR_TAGING, FSDMSTTRX_STORENEW.ITEM_BRAND, FSDMSTTRX_STORENEW.ITEM_MODEL, FSDMSTTRX_STORENEW.DIMENSI, 
																		FSDMSTTRX_STORENEW.ITEM_PRICE, FSDMSTTRX_STORENEW.UMUR_BUKU, FSDMSTTRX_STORENEW.UMUR_BUKU_MAX, FSDMSTTRX_STORENEW.NILAI_BUKU
																		FROM FSDMSTTRX_STORENEW 
																		JOIN FSDBRGEQASSET_NEW ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
																		WHERE  FSDMSTTRX_STORENEW.OUTLET_CODE = '".$_SESSION['user_nik']."' AND 
																		FSDMSTTRX_STORENEW.EQTYPECODE IN('EQ0003')";	
													$qobjParseReplace = oci_parse ($objConnectReplace, $qvSCatReplace);  
																		    oci_execute ($qobjParseReplace,OCI_DEFAULT);   
														while($rvSCatReplace = oci_fetch_array($qobjParseReplace,OCI_BOTH))  
														{  
															$jumlah_desimal  = "0";
															$pemisah_desimal = ".";
															$pemisah_ribuan  = ".";		
															
														?> 																					
													
														<tr>
															<td width="16%">
																<center><?=$rvSCatReplace["ITEM_CODE"];?></center>
															</td>																
															<td width="20%">
																<?=$rvSCatReplace["ITEM_NAME"];?>
															</td>
															<td width="17%">
																<center><?=$rvSCatReplace["NOMOR_TAGING"];?></center>
															</td>															
															<td width="20%">
																<?='Model Name : <strong>'.$rvSCatReplace["ITEM_MODEL"].'</strong><br>';?>
																<?='Brand Name  : <strong>'.$rvSCatReplace["ITEM_BRAND"].'</strong><br>';?>
																<?='Book Age  : <strong>'.$rvSCatReplace["UMUR_BUKU"].' </strong><br>';?>
																<?='Book Value : <strong>Rp.&nbsp;'.number_format($rvSCatReplace["NILAI_BUKU"], $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?>
															</td>													
															<td width="13%">
																<center><input type="checkbox" name="cekseqfoodprocessingreplace[]" value="<?=$rvSCatReplace["NOMOR_TAGING"];?>" id="<?='cekseqfoodprocessingreplace'.$rvSCatReplace["NOMOR_TAGING"];?>" style="display:show;" /></center>
															</td>	
														</tr>
														<? } ?>	
														<script src="./js/jquery.min.js.download"></script>														
													</tbody>
												</table>	
												</div>	
											</td>
										</tr>
										</table>								
								</div>
								<!-- ####################### PREP AND DUMB TABLE EQUIPMENT (RQS-03-000115) ######################################### -->								
								<div class="<?='kode_tipebrgRQS-03-000115replace'?>" style="display:none;margin-top:0px;margin-left:0px;">
										<table width="750" border="0" cellspacing="0" style="margin-left:0px;">
										<tr>
											<!--<td></td><!-- FSD WEST -->
											<td><label style="width:auto;"><strong><u>Prep And Dumb Table&nbsp;Equipment&nbsp;List&nbsp;:</u></strong></label><br>
										<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
											<script src="jquery/jquery.min.js"></script>
											<script>
											$(document).ready(function(){
											  $("#prepdumbtblsrc").on("keyup", function() {
												var value = $(this).val().toLowerCase();
												$("#myCodesprepdumbtbl tr").filter(function() {
												  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
												});
											  });
											});
											</script>
											<style>
												table.blueTable {
												  border: 1px solid #1C6EA4;
												  background-color: #EEEEEE;
												  width: 100%;
												  text-align: left;
												  border-collapse: collapse;
												  overflow-x:scroll;height:20px;
												  position:relative;
												}
												table.blueTable td, table.blueTable th {
												  border: 1px solid #AAAAAA;
												  padding: 3px 2px;	
												}
												table.blueTable tbody td {
												  font-size: 13px;
												}
												table.blueTable tr:nth-child(even) {
												  background: #D0E4F5;
												}
												table.blueTable thead {
												  background: #1C6EA4;
												  background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  border-bottom: 2px solid #444444;
												}
												table.blueTable thead th {
												  font-size: 12px;
												  text-align:center;
												  font-weight: bold;
												  color: #FFFFFF;
												  border-left: 2px solid #D0E4F5;
												}
												table.blueTable thead th:first-child {
												  border-left: none;
												}

												table.blueTable tfoot {
												  font-size: 14px;
												  font-weight: bold;
												  color: #FFFFFF;
												  background: #D0E4F5;
												  background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  border-top: 2px solid #444444;
												}
												table.blueTable tfoot td {
												  font-size: 14px;
												}
												table.blueTable tfoot .links {
												  text-align: right;
												}
												table.blueTable tfoot .links a{
												  display: inline-block;
												  background: #1C6EA4;
												  color: #FFFFFF;
												  padding: 2px 8px;
												  border-radius: 5px;
												}			
											</style>
											

											<input id="prepdumbtblsrc" type="text" placeholder="Search.." style="margin-top:20px;">
											
												<table class="blueTable" border="1"> 
													<thead>
													<tr>
													
														<?  
														$objConnect = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
														?>														
														<th width="17%">Nama&nbsp;Grp</th>
														<th width="14%">Kode&nbsp;Barang&nbsp;</th>
														<th width="20%">Nama&nbsp;Barang&nbsp;</th>													
														<th width="22%">Info&nbsp;Detail</th>	
														<th width="17%" style="display:none;">No&nbsp;Taging&nbsp;</th>
														<th width="15%">QTY</th>
														<th width="10%" style="display:none;">STK<br>BARU</th>
														<th width="10%" style="display:none;">STK<br>BAIK</th>
														<th width="10%" style="display:none;">STK<br>LAMA</th>
													</tr>													
													</thead>
												</table>								
												<script src="./js/jquery-1.9.1.js.download"></script>
												<div style="width:100%; height:350px; overflow:auto;position:relative;">
												<table class="blueTable" border="1">
													<tbody id="myCodesprepdumbtbl">
														<?  
														$qvSCat =  "SELECT FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE AS KODE_BARANG,
																	FSDBRGEQASSET_NEW.ITEM_NAME AS NAMA_BARANG,FSDBRGEQASSET_NEW.ITEM_BRAND AS MERK_BARANG,
																	FSDBRGEQASSET_NEW.ITEM_MODEL AS MODEL,
																	FSDBRGEQASSET_NEW.ITEM_PRICE AS HARGA_TERAKHIR
																	FROM FSDBRGEQ_NEW
																	JOIN FSDSGROUP ON FSDBRGEQ_NEW.GROUP_CODE = FSDSGROUP.KODE_GROUP
																	JOIN FSDBRGEQASSET_NEW ON FSDBRGEQ_NEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
																	JOIN FSDEQTYPE_NEW ON FSDBRGEQ_NEW.EQTYPECODE = FSDEQTYPE_NEW.EQTYPECODE
																	WHERE FSDEQTYPE_NEW.EQTYPECODE = 'EQ0004' 
																	GROUP BY FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE,
																	FSDBRGEQASSET_NEW.ITEM_NAME,FSDBRGEQASSET_NEW.ITEM_BRAND,
																	FSDBRGEQASSET_NEW.ITEM_MODEL,FSDBRGEQASSET_NEW.ITEM_PRICE
																	ORDER BY FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE,
																	FSDBRGEQASSET_NEW.ITEM_NAME,FSDBRGEQASSET_NEW.ITEM_BRAND,
																	FSDBRGEQASSET_NEW.ITEM_MODEL,FSDBRGEQASSET_NEW.ITEM_PRICE ASC";	
														$qobjParse = oci_parse ($objConnect, $qvSCat);  
														oci_execute ($qobjParse,OCI_DEFAULT);   
														while($rvSCat = oci_fetch_array($qobjParse,OCI_BOTH))  
														{  
															$jumlah_desimal  = "0";
															$pemisah_desimal = ".";
															$pemisah_ribuan  = ".";		
															
														?>  
														  
															<script type="text/javascript">
																$(window).load(function()
																{      
																	$(document).ready(function() 
																	{
																		$("input<?='#textseqprepdumb'.$rvSCat["KODE_BARANG"];?>").on("keyup blur", function() 
																		{
																			if( this.value != "")
																			{
																				$("<?='#cekseqprepdumb'.$rvSCat["KODE_BARANG"];?>").show();
																				$("input<?='#cekseqprepdumb'.$rvSCat["KODE_BARANG"];?>").prop("checked", this.value != "");						
																			}else{
																				$("<?='#cekseqprepdumb'.$rvSCat["KODE_BARANG"];?>").show();
																				$("input<?='#cekseqprepdumb'.$rvSCat["KODE_BARANG"];?>").prop("checked", this.value != "");						

																			}	
																			/* $("#boxcheck").hide();*/

																		});

																		// don't allow user to manually change the checkbox
																		$("input<?='#cekseqprepdumb'.$rvSCat["KODE_BARANG"];?>").click(function() {
																			$("<?='#cekseqprepdumb'.$rvSCat["KODE_BARANG"];?>").show();
																			return false;
																		});
																	});
																});
															</script>																								
													
														<tr>												
															<td width="10%" class="elnt_container" style="display:none;">
																<center><?=$rvSCat["KODE_GROUP"];?></center>
															</td>
															<td width="17%">
																<center><?=$rvSCat["NAMA_GROUP"];?></center>
															</td>
															<td width="16%">
																<center><input type="checkbox" name="cekseqprepdumb[]" value="<?=$rvSCat["KODE_BARANG"];?>" id="<?='cekseqprepdumb'.$rvSCat["KODE_BARANG"];?>" style="display:show;" />&nbsp;<?=$rvSCat["KODE_BARANG"];?></center>
																
															</td>																
															<td width="20%">
																<?=$rvSCat["NAMA_BARANG"];?>
															</td>															
															<td width="20%">
																<?='Model : <strong>'.$rvSCat["MODEL"].'</strong><br>';?>
																<?='Merk  : <strong>'.$rvSCat["MERK_BARANG"].'</strong><br>';?>
																<?='Harga : <strong>Rp.&nbsp;'.number_format($rvSCat["HARGA_TERAKHIR"], $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?>

															</td>																			
															<td width="14%" style="display:none;">
																<center><input type="checkbox" name="ceksnotag[<?=$rvSCat["NO_TAGING"];?>]" value="<?=$rvSCat["NO_TAGING"];?>" id="ceksnotag" />&nbsp;<?=$rvSCat["NO_TAGING"];?></center>
															</td>														
															<td width="13%">															
																<!--<center><input type="text" name="textseq[<!?=$rvSCat["KODE_BARANG"];?>][<!?=$rvSCat["NO_TAGING"];?>]" id="texts" style="width:52%;"></center>-->
																<!--<div id="texts">-->
																	<center><input type="text" name="textseqprepdumb[<?=$rvSCat["KODE_BARANG"];?>]" id="<?='textseqprepdumb'.$rvSCat["KODE_BARANG"];?>" style="width:52%;"></center>
																<!--</div>-->
															</td>																
															<td width="10%" style="display:none;">
																<?=$rvSCat["BARU_EQ_GD"];?>
															</td>
															<td width="11%" style="display:none;">
																<?=$rvSCat["BAIK_SP_GD"];?>
															</td>
															<td width="8%" style="display:none;">
																<?=$rvSCat["RUSAK_EQ_GD"];?>
															</td>
														</tr>
														<? } ?>
														<script src="./js/jquery.min.js.download"></script>														
													</tbody>
												</table>	
												</div>	
											</td>
										</tr>
										</table>								
								</div>
								<!-- ####################### CONTAINER/DISPENSER AND DISPLAY EQUIPMENT (RQS-03-000116) ######################################### -->								
								<div class="<?='kode_tipebrgRQS-03-000116replace'?>" style="display:none;margin-top:0px;margin-left:0px;">
										<table width="750" border="0" cellspacing="0" style="margin-left:0px;">
										<tr>
											<!--<td></td><!-- FSD WEST -->
											<td><label style="width:auto;"><strong><u>Container/Dispenser And Display&nbsp;Equipment&nbsp;List&nbsp;:</u></strong></label><br>
										<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
											<script src="jquery/jquery.min.js"></script>
											<script>
											$(document).ready(function(){
											  $("#containerdispensersrc").on("keyup", function() {
												var value = $(this).val().toLowerCase();
												$("#myCodescontainerdispenser tr").filter(function() {
												  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
												});
											  });
											});
											</script>
											<style>
												table.blueTable {
												  border: 1px solid #1C6EA4;
												  background-color: #EEEEEE;
												  width: 100%;
												  text-align: left;
												  border-collapse: collapse;
												  overflow-x:scroll;height:20px;
												  position:relative;
												}
												table.blueTable td, table.blueTable th {
												  border: 1px solid #AAAAAA;
												  padding: 3px 2px;	
												}
												table.blueTable tbody td {
												  font-size: 13px;
												}
												table.blueTable tr:nth-child(even) {
												  background: #D0E4F5;
												}
												table.blueTable thead {
												  background: #1C6EA4;
												  background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  border-bottom: 2px solid #444444;
												}
												table.blueTable thead th {
												  font-size: 12px;
												  text-align:center;
												  font-weight: bold;
												  color: #FFFFFF;
												  border-left: 2px solid #D0E4F5;
												}
												table.blueTable thead th:first-child {
												  border-left: none;
												}

												table.blueTable tfoot {
												  font-size: 14px;
												  font-weight: bold;
												  color: #FFFFFF;
												  background: #D0E4F5;
												  background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  border-top: 2px solid #444444;
												}
												table.blueTable tfoot td {
												  font-size: 14px;
												}
												table.blueTable tfoot .links {
												  text-align: right;
												}
												table.blueTable tfoot .links a{
												  display: inline-block;
												  background: #1C6EA4;
												  color: #FFFFFF;
												  padding: 2px 8px;
												  border-radius: 5px;
												}			
											</style>
											

											<input id="containerdispensersrc" type="text" placeholder="Search.." style="margin-top:20px;">
											
												<table class="blueTable" border="1"> 
													<thead>
													<tr>
													
														<?  
														$objConnect = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
														?>														
														<th width="17%">Nama&nbsp;Grp</th>
														<th width="14%">Kode&nbsp;Barang&nbsp;</th>
														<th width="20%">Nama&nbsp;Barang&nbsp;</th>													
														<th width="22%">Info&nbsp;Detail</th>	
														<th width="17%" style="display:none;">No&nbsp;Taging&nbsp;</th>
														<th width="15%">QTY</th>
														<th width="10%" style="display:none;">STK<br>BARU</th>
														<th width="10%" style="display:none;">STK<br>BAIK</th>
														<th width="10%" style="display:none;">STK<br>LAMA</th>
													</tr>													
													</thead>
												</table>								
												<script src="./js/jquery-1.9.1.js.download"></script>
												<div style="width:100%; height:350px; overflow:auto;position:relative;">
												<table class="blueTable" border="1">
													<tbody id="myCodescontainerdispenser">
														<?  
														$qvSCat =  "SELECT FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE AS KODE_BARANG,
																	FSDBRGEQASSET_NEW.ITEM_NAME AS NAMA_BARANG,FSDBRGEQASSET_NEW.ITEM_BRAND AS MERK_BARANG,
																	FSDBRGEQASSET_NEW.ITEM_MODEL AS MODEL,
																	FSDBRGEQASSET_NEW.ITEM_PRICE AS HARGA_TERAKHIR
																	FROM FSDBRGEQ_NEW
																	JOIN FSDSGROUP ON FSDBRGEQ_NEW.GROUP_CODE = FSDSGROUP.KODE_GROUP
																	JOIN FSDBRGEQASSET_NEW ON FSDBRGEQ_NEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
																	JOIN FSDEQTYPE_NEW ON FSDBRGEQ_NEW.EQTYPECODE = FSDEQTYPE_NEW.EQTYPECODE
																	WHERE FSDEQTYPE_NEW.EQTYPECODE = 'EQ0005' 
																	GROUP BY FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE,
																	FSDBRGEQASSET_NEW.ITEM_NAME,FSDBRGEQASSET_NEW.ITEM_BRAND,
																	FSDBRGEQASSET_NEW.ITEM_MODEL,FSDBRGEQASSET_NEW.ITEM_PRICE
																	ORDER BY FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE,
																	FSDBRGEQASSET_NEW.ITEM_NAME,FSDBRGEQASSET_NEW.ITEM_BRAND,
																	FSDBRGEQASSET_NEW.ITEM_MODEL,FSDBRGEQASSET_NEW.ITEM_PRICE ASC";	
														$qobjParse = oci_parse ($objConnect, $qvSCat);  
														oci_execute ($qobjParse,OCI_DEFAULT);   
														while($rvSCat = oci_fetch_array($qobjParse,OCI_BOTH))  
														{  
															$jumlah_desimal  = "0";
															$pemisah_desimal = ".";
															$pemisah_ribuan  = ".";		
															
														?>  
														  
															<script type="text/javascript">
																$(window).load(function()
																{      
																	$(document).ready(function() 
																	{
																		$("input<?='#textseqcontainerdispenser'.$rvSCat["KODE_BARANG"];?>").on("keyup blur", function() 
																		{
																			if( this.value != "")
																			{
																				$("<?='#cekseqcontainerdispenser'.$rvSCat["KODE_BARANG"];?>").show();
																				$("input<?='#cekseqcontainerdispenser'.$rvSCat["KODE_BARANG"];?>").prop("checked", this.value != "");						
																			}else{
																				$("<?='#cekseqcontainerdispenser'.$rvSCat["KODE_BARANG"];?>").show();
																				$("input<?='#cekseqcontainerdispenser'.$rvSCat["KODE_BARANG"];?>").prop("checked", this.value != "");						

																			}	
																			/* $("#boxcheck").hide();*/

																		});

																		// don't allow user to manually change the checkbox
																		$("input<?='#cekseqcontainerdispenser'.$rvSCat["KODE_BARANG"];?>").click(function() {
																			$("<?='#cekseqcontainerdispenser'.$rvSCat["KODE_BARANG"];?>").show();
																			return false;
																		});
																	});
																});
															</script>																								
													
														<tr>												
															<td width="10%" class="elnt_container" style="display:none;">
																<center><?=$rvSCat["KODE_GROUP"];?></center>
															</td>
															<td width="17%">
																<center><?=$rvSCat["NAMA_GROUP"];?></center>
															</td>
															<td width="16%">
																<center><input type="checkbox" name="cekseqcontainerdispenser[]" value="<?=$rvSCat["KODE_BARANG"];?>" id="<?='cekseqcontainerdispenser'.$rvSCat["KODE_BARANG"];?>" style="display:show;" />&nbsp;<?=$rvSCat["KODE_BARANG"];?></center>
																
															</td>																
															<td width="20%">
																<?=$rvSCat["NAMA_BARANG"];?>
															</td>															
															<td width="20%">
																<?='Model : <strong>'.$rvSCat["MODEL"].'</strong><br>';?>
																<?='Merk  : <strong>'.$rvSCat["MERK_BARANG"].'</strong><br>';?>
																<?='Harga : <strong>Rp.&nbsp;'.number_format($rvSCat["HARGA_TERAKHIR"], $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?>

															</td>																			
															<td width="14%" style="display:none;">
																<center><input type="checkbox" name="ceksnotag[<?=$rvSCat["NO_TAGING"];?>]" value="<?=$rvSCat["NO_TAGING"];?>" id="ceksnotag" />&nbsp;<?=$rvSCat["NO_TAGING"];?></center>
															</td>														
															<td width="13%">															
																<!--<center><input type="text" name="textseq[<!?=$rvSCat["KODE_BARANG"];?>][<!?=$rvSCat["NO_TAGING"];?>]" id="texts" style="width:52%;"></center>-->
																<!--<div id="texts">-->
																	<center><input type="text" name="textseqcontainerdispenser[<?=$rvSCat["KODE_BARANG"];?>]" id="<?='textseqcontainerdispenser'.$rvSCat["KODE_BARANG"];?>" style="width:52%;"></center>
																<!--</div>-->
															</td>																
															<td width="10%" style="display:none;">
																<?=$rvSCat["BARU_EQ_GD"];?>
															</td>
															<td width="11%" style="display:none;">
																<?=$rvSCat["BAIK_SP_GD"];?>
															</td>
															<td width="8%" style="display:none;">
																<?=$rvSCat["RUSAK_EQ_GD"];?>
															</td>
														</tr>
														<? } ?>
														<script src="./js/jquery.min.js.download"></script>														
													</tbody>
												</table>	
												</div>	
											</td>
										</tr>
										</table>								
								</div>
								<!-- ####################### CABINET AND RACKING EQUIPMENT (RQS-03-000117) ######################################### -->								
								<div class="<?='kode_tipebrgRQS-03-000117replace'?>" style="display:none;margin-top:0px;margin-left:0px;">
										<table width="750" border="0" cellspacing="0" style="margin-left:0px;">
										<tr>
											<!--<td></td><!-- FSD WEST -->
											<td><label style="width:auto;"><strong><u>Cabinet And Racking&nbsp;List&nbsp;:</u></strong></label><br>
										<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
											<script src="jquery/jquery.min.js"></script>
											<script>
											$(document).ready(function(){
											  $("#cabinetrackingsrc").on("keyup", function() {
												var value = $(this).val().toLowerCase();
												$("#myCodescabinetracking tr").filter(function() {
												  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
												});
											  });
											});
											</script>
											<style>
												table.blueTable {
												  border: 1px solid #1C6EA4;
												  background-color: #EEEEEE;
												  width: 100%;
												  text-align: left;
												  border-collapse: collapse;
												  overflow-x:scroll;height:20px;
												  position:relative;
												}
												table.blueTable td, table.blueTable th {
												  border: 1px solid #AAAAAA;
												  padding: 3px 2px;	
												}
												table.blueTable tbody td {
												  font-size: 13px;
												}
												table.blueTable tr:nth-child(even) {
												  background: #D0E4F5;
												}
												table.blueTable thead {
												  background: #1C6EA4;
												  background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  border-bottom: 2px solid #444444;
												}
												table.blueTable thead th {
												  font-size: 12px;
												  text-align:center;
												  font-weight: bold;
												  color: #FFFFFF;
												  border-left: 2px solid #D0E4F5;
												}
												table.blueTable thead th:first-child {
												  border-left: none;
												}

												table.blueTable tfoot {
												  font-size: 14px;
												  font-weight: bold;
												  color: #FFFFFF;
												  background: #D0E4F5;
												  background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  border-top: 2px solid #444444;
												}
												table.blueTable tfoot td {
												  font-size: 14px;
												}
												table.blueTable tfoot .links {
												  text-align: right;
												}
												table.blueTable tfoot .links a{
												  display: inline-block;
												  background: #1C6EA4;
												  color: #FFFFFF;
												  padding: 2px 8px;
												  border-radius: 5px;
												}			
											</style>
											

											<input id="cabinetrackingsrc" type="text" placeholder="Search.." style="margin-top:20px;">
											
												<table class="blueTable" border="1"> 
													<thead>
													<tr>
													
														<?  
														$objConnect = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
														?>														
														<th width="17%">Nama&nbsp;Grp</th>
														<th width="14%">Kode&nbsp;Barang&nbsp;</th>
														<th width="20%">Nama&nbsp;Barang&nbsp;</th>													
														<th width="22%">Info&nbsp;Detail</th>	
														<th width="17%" style="display:none;">No&nbsp;Taging&nbsp;</th>
														<th width="15%">QTY</th>
														<th width="10%" style="display:none;">STK<br>BARU</th>
														<th width="10%" style="display:none;">STK<br>BAIK</th>
														<th width="10%" style="display:none;">STK<br>LAMA</th>
													</tr>													
													</thead>
												</table>								
												<script src="./js/jquery-1.9.1.js.download"></script>
												<div style="width:100%; height:350px; overflow:auto;position:relative;">
												<table class="blueTable" border="1">
													<tbody id="myCodescabinetracking">
														<?  
														$qvSCat =  "SELECT FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE AS KODE_BARANG,
																	FSDBRGEQASSET_NEW.ITEM_NAME AS NAMA_BARANG,FSDBRGEQASSET_NEW.ITEM_BRAND AS MERK_BARANG,
																	FSDBRGEQASSET_NEW.ITEM_MODEL AS MODEL,
																	FSDBRGEQASSET_NEW.ITEM_PRICE AS HARGA_TERAKHIR
																	FROM FSDBRGEQ_NEW
																	JOIN FSDSGROUP ON FSDBRGEQ_NEW.GROUP_CODE = FSDSGROUP.KODE_GROUP
																	JOIN FSDBRGEQASSET_NEW ON FSDBRGEQ_NEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
																	JOIN FSDEQTYPE_NEW ON FSDBRGEQ_NEW.EQTYPECODE = FSDEQTYPE_NEW.EQTYPECODE
																	WHERE FSDEQTYPE_NEW.EQTYPECODE = 'EQ0006' 
																	GROUP BY FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE,
																	FSDBRGEQASSET_NEW.ITEM_NAME,FSDBRGEQASSET_NEW.ITEM_BRAND,
																	FSDBRGEQASSET_NEW.ITEM_MODEL,FSDBRGEQASSET_NEW.ITEM_PRICE
																	ORDER BY FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE,
																	FSDBRGEQASSET_NEW.ITEM_NAME,FSDBRGEQASSET_NEW.ITEM_BRAND,
																	FSDBRGEQASSET_NEW.ITEM_MODEL,FSDBRGEQASSET_NEW.ITEM_PRICE ASC";	
														$qobjParse = oci_parse ($objConnect, $qvSCat);  
														oci_execute ($qobjParse,OCI_DEFAULT);   
														while($rvSCat = oci_fetch_array($qobjParse,OCI_BOTH))  
														{  
															$jumlah_desimal  = "0";
															$pemisah_desimal = ".";
															$pemisah_ribuan  = ".";		
															
														?>  
														  
															<script type="text/javascript">
																$(window).load(function()
																{      
																	$(document).ready(function() 
																	{
																		$("input<?='#textseqcabinetracking'.$rvSCat["KODE_BARANG"];?>").on("keyup blur", function() 
																		{
																			if( this.value != "")
																			{
																				$("<?='#cekseqcabinetracking'.$rvSCat["KODE_BARANG"];?>").show();
																				$("input<?='#cekseqcabinetracking'.$rvSCat["KODE_BARANG"];?>").prop("checked", this.value != "");						
																			}else{
																				$("<?='#cekseqcabinetracking'.$rvSCat["KODE_BARANG"];?>").show();
																				$("input<?='#cekseqcabinetracking'.$rvSCat["KODE_BARANG"];?>").prop("checked", this.value != "");						

																			}	
																			/* $("#boxcheck").hide();*/

																		});

																		// don't allow user to manually change the checkbox
																		$("input<?='#cekseqcabinetracking'.$rvSCat["KODE_BARANG"];?>").click(function() {
																			$("<?='#cekseqcabinetracking'.$rvSCat["KODE_BARANG"];?>").show();
																			return false;
																		});
																	});
																});
															</script>																								
													
														<tr>												
															<td width="10%" class="elnt_container" style="display:none;">
																<center><?=$rvSCat["KODE_GROUP"];?></center>
															</td>
															<td width="17%">
																<center><?=$rvSCat["NAMA_GROUP"];?></center>
															</td>
															<td width="16%">
																<center><input type="checkbox" name="cekseqcabinetracking[]" value="<?=$rvSCat["KODE_BARANG"];?>" id="<?='cekseqcabinetracking'.$rvSCat["KODE_BARANG"];?>" style="display:show;" />&nbsp;<?=$rvSCat["KODE_BARANG"];?></center>
																
															</td>																
															<td width="20%">
																<?=$rvSCat["NAMA_BARANG"];?>
															</td>															
															<td width="20%">
																<?='Model : <strong>'.$rvSCat["MODEL"].'</strong><br>';?>
																<?='Merk  : <strong>'.$rvSCat["MERK_BARANG"].'</strong><br>';?>
																<?='Harga : <strong>Rp.&nbsp;'.number_format($rvSCat["HARGA_TERAKHIR"], $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?>

															</td>																			
															<td width="14%" style="display:none;">
																<center><input type="checkbox" name="ceksnotag[<?=$rvSCat["NO_TAGING"];?>]" value="<?=$rvSCat["NO_TAGING"];?>" id="ceksnotag" />&nbsp;<?=$rvSCat["NO_TAGING"];?></center>
															</td>														
															<td width="13%">															
																<!--<center><input type="text" name="textseq[<!?=$rvSCat["KODE_BARANG"];?>][<!?=$rvSCat["NO_TAGING"];?>]" id="texts" style="width:52%;"></center>-->
																<!--<div id="texts">-->
																	<center><input type="text" name="textseqcabinetracking[<?=$rvSCat["KODE_BARANG"];?>]" id="<?='textseqcabinetracking'.$rvSCat["KODE_BARANG"];?>" style="width:52%;"></center>
																<!--</div>-->
															</td>																
															<td width="10%" style="display:none;">
																<?=$rvSCat["BARU_EQ_GD"];?>
															</td>
															<td width="11%" style="display:none;">
																<?=$rvSCat["BAIK_SP_GD"];?>
															</td>
															<td width="8%" style="display:none;">
																<?=$rvSCat["RUSAK_EQ_GD"];?>
															</td>
														</tr>
														<? } ?>
														<script src="./js/jquery.min.js.download"></script>														
													</tbody>
												</table>	
												</div>	
											</td>
										</tr>
										</table>								
								</div>

								<!-- ####################### AIR CONDITIONING EQUIPMENT (RQS-03-000118) ######################################### -->								
								<div class="<?='kode_tipebrgRQS-03-000118replace'?>" style="display:none;margin-top:0px;margin-left:0px;">
										<table width="750" border="0" cellspacing="0" style="margin-left:0px;">
										<tr>
											<!--<td></td><!-- FSD WEST -->
											<td><label style="width:auto;"><strong><u>Air Conditioning&nbsp;Equipment&nbsp;List&nbsp;:</u></strong></label><br>
										<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
											<script src="jquery/jquery.min.js"></script>
											<script>
											$(document).ready(function(){
											  $("#airconditioningsrc").on("keyup", function() {
												var value = $(this).val().toLowerCase();
												$("#myCodesairconditioning tr").filter(function() {
												  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
												});
											  });
											});
											</script>
											<style>
												table.blueTable {
												  border: 1px solid #1C6EA4;
												  background-color: #EEEEEE;
												  width: 100%;
												  text-align: left;
												  border-collapse: collapse;
												  overflow-x:scroll;height:20px;
												  position:relative;
												}
												table.blueTable td, table.blueTable th {
												  border: 1px solid #AAAAAA;
												  padding: 3px 2px;	
												}
												table.blueTable tbody td {
												  font-size: 13px;
												}
												table.blueTable tr:nth-child(even) {
												  background: #D0E4F5;
												}
												table.blueTable thead {
												  background: #1C6EA4;
												  background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  border-bottom: 2px solid #444444;
												}
												table.blueTable thead th {
												  font-size: 12px;
												  text-align:center;
												  font-weight: bold;
												  color: #FFFFFF;
												  border-left: 2px solid #D0E4F5;
												}
												table.blueTable thead th:first-child {
												  border-left: none;
												}

												table.blueTable tfoot {
												  font-size: 14px;
												  font-weight: bold;
												  color: #FFFFFF;
												  background: #D0E4F5;
												  background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  border-top: 2px solid #444444;
												}
												table.blueTable tfoot td {
												  font-size: 14px;
												}
												table.blueTable tfoot .links {
												  text-align: right;
												}
												table.blueTable tfoot .links a{
												  display: inline-block;
												  background: #1C6EA4;
												  color: #FFFFFF;
												  padding: 2px 8px;
												  border-radius: 5px;
												}			
											</style>
											

											<input id="airconditioningsrc" type="text" placeholder="Search.." style="margin-top:20px;">
											
												<table class="blueTable" border="1"> 
													<thead>
													<tr>
													
														<?  
														$objConnect = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
														?>														
														<th width="17%">Nama&nbsp;Grp</th>
														<th width="14%">Kode&nbsp;Barang&nbsp;</th>
														<th width="20%">Nama&nbsp;Barang&nbsp;</th>													
														<th width="22%">Info&nbsp;Detail</th>	
														<th width="17%" style="display:none;">No&nbsp;Taging&nbsp;</th>
														<th width="15%">QTY</th>
														<th width="10%" style="display:none;">STK<br>BARU</th>
														<th width="10%" style="display:none;">STK<br>BAIK</th>
														<th width="10%" style="display:none;">STK<br>LAMA</th>
													</tr>													
													</thead>
												</table>								
												<script src="./js/jquery-1.9.1.js.download"></script>
												<div style="width:100%; height:350px; overflow:auto;position:relative;">
												<table class="blueTable" border="1">
													<tbody id="myCodesairconditioning">
														<?  
														$qvSCat =  "SELECT FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE AS KODE_BARANG,
																	FSDBRGEQASSET_NEW.ITEM_NAME AS NAMA_BARANG,FSDBRGEQASSET_NEW.ITEM_BRAND AS MERK_BARANG,
																	FSDBRGEQASSET_NEW.ITEM_MODEL AS MODEL,
																	FSDBRGEQASSET_NEW.ITEM_PRICE AS HARGA_TERAKHIR
																	FROM FSDBRGEQ_NEW
																	JOIN FSDSGROUP ON FSDBRGEQ_NEW.GROUP_CODE = FSDSGROUP.KODE_GROUP
																	JOIN FSDBRGEQASSET_NEW ON FSDBRGEQ_NEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
																	JOIN FSDEQTYPE_NEW ON FSDBRGEQ_NEW.EQTYPECODE = FSDEQTYPE_NEW.EQTYPECODE
																	WHERE FSDEQTYPE_NEW.EQTYPECODE = 'EQ0007' 
																	GROUP BY FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE,
																	FSDBRGEQASSET_NEW.ITEM_NAME,FSDBRGEQASSET_NEW.ITEM_BRAND,
																	FSDBRGEQASSET_NEW.ITEM_MODEL,FSDBRGEQASSET_NEW.ITEM_PRICE
																	ORDER BY FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE,
																	FSDBRGEQASSET_NEW.ITEM_NAME,FSDBRGEQASSET_NEW.ITEM_BRAND,
																	FSDBRGEQASSET_NEW.ITEM_MODEL,FSDBRGEQASSET_NEW.ITEM_PRICE ASC";	
														$qobjParse = oci_parse ($objConnect, $qvSCat);  
														oci_execute ($qobjParse,OCI_DEFAULT);   
														while($rvSCat = oci_fetch_array($qobjParse,OCI_BOTH))  
														{  
															$jumlah_desimal  = "0";
															$pemisah_desimal = ".";
															$pemisah_ribuan  = ".";		
															
														?>  
														  
															<script type="text/javascript">
																$(window).load(function()
																{      
																	$(document).ready(function() 
																	{
																		$("input<?='#textseqairconditioning'.$rvSCat["KODE_BARANG"];?>").on("keyup blur", function() 
																		{
																			if( this.value != "")
																			{
																				$("<?='#cekseqairconditioning'.$rvSCat["KODE_BARANG"];?>").show();
																				$("input<?='#cekseqairconditioning'.$rvSCat["KODE_BARANG"];?>").prop("checked", this.value != "");						
																			}else{
																				$("<?='#cekseqairconditioning'.$rvSCat["KODE_BARANG"];?>").show();
																				$("input<?='#cekseqairconditioning'.$rvSCat["KODE_BARANG"];?>").prop("checked", this.value != "");						

																			}	
																			/* $("#boxcheck").hide();*/

																		});

																		// don't allow user to manually change the checkbox
																		$("input<?='#cekseqairconditioning'.$rvSCat["KODE_BARANG"];?>").click(function() {
																			$("<?='#cekseqairconditioning'.$rvSCat["KODE_BARANG"];?>").show();
																			return false;
																		});
																	});
																});
															</script>																								
													
														<tr>												
															<td width="10%" class="elnt_container" style="display:none;">
																<center><?=$rvSCat["KODE_GROUP"];?></center>
															</td>
															<td width="17%">
																<center><?=$rvSCat["NAMA_GROUP"];?></center>
															</td>
															<td width="16%">
																<center><input type="checkbox" name="cekseqairconditioning[]" value="<?=$rvSCat["KODE_BARANG"];?>" id="<?='cekseqairconditioning'.$rvSCat["KODE_BARANG"];?>" style="display:show;" />&nbsp;<?=$rvSCat["KODE_BARANG"];?></center>
																
															</td>																
															<td width="20%">
																<?=$rvSCat["NAMA_BARANG"];?>
															</td>															
															<td width="20%">
																<?='Model : <strong>'.$rvSCat["MODEL"].'</strong><br>';?>
																<?='Merk  : <strong>'.$rvSCat["MERK_BARANG"].'</strong><br>';?>
																<?='Harga : <strong>Rp.&nbsp;'.number_format($rvSCat["HARGA_TERAKHIR"], $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?>

															</td>																			
															<td width="14%" style="display:none;">
																<center><input type="checkbox" name="ceksnotag[<?=$rvSCat["NO_TAGING"];?>]" value="<?=$rvSCat["NO_TAGING"];?>" id="ceksnotag" />&nbsp;<?=$rvSCat["NO_TAGING"];?></center>
															</td>														
															<td width="13%">															
																<!--<center><input type="text" name="textseq[<!?=$rvSCat["KODE_BARANG"];?>][<!?=$rvSCat["NO_TAGING"];?>]" id="texts" style="width:52%;"></center>-->
																<!--<div id="texts">-->
																	<center><input type="text" name="textseqairconditioning[<?=$rvSCat["KODE_BARANG"];?>]" id="<?='textseqairconditioning'.$rvSCat["KODE_BARANG"];?>" style="width:52%;"></center>
																<!--</div>-->
															</td>																
															<td width="10%" style="display:none;">
																<?=$rvSCat["BARU_EQ_GD"];?>
															</td>
															<td width="11%" style="display:none;">
																<?=$rvSCat["BAIK_SP_GD"];?>
															</td>
															<td width="8%" style="display:none;">
																<?=$rvSCat["RUSAK_EQ_GD"];?>
															</td>
														</tr>
														<? } ?>
														<script src="./js/jquery.min.js.download"></script>														
													</tbody>
												</table>	
												</div>	
											</td>
										</tr>
										</table>								
								</div>
								<!-- ####################### SOUND SYSTEM AND MULTIMEDIA (RQS-03-000119) ######################################### -->								
								<div class="<?='kode_tipebrgRQS-03-000119replace'?>" style="display:none;margin-top:0px;margin-left:0px;">
										<table width="750" border="0" cellspacing="0" style="margin-left:0px;">
										<tr>
											<!--<td></td><!-- FSD WEST -->
											<td><label style="width:auto;"><strong><u>Sound System And Multimedia&nbsp;List&nbsp;:</u></strong></label><br>
										<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
											<script src="jquery/jquery.min.js"></script>
											<script>
											$(document).ready(function(){
											  $("#soundsystemmmsrc").on("keyup", function() {
												var value = $(this).val().toLowerCase();
												$("#myCodessoundsystemmm tr").filter(function() {
												  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
												});
											  });
											});
											</script>
											<style>
												table.blueTable {
												  border: 1px solid #1C6EA4;
												  background-color: #EEEEEE;
												  width: 100%;
												  text-align: left;
												  border-collapse: collapse;
												  overflow-x:scroll;height:20px;
												  position:relative;
												}
												table.blueTable td, table.blueTable th {
												  border: 1px solid #AAAAAA;
												  padding: 3px 2px;	
												}
												table.blueTable tbody td {
												  font-size: 13px;
												}
												table.blueTable tr:nth-child(even) {
												  background: #D0E4F5;
												}
												table.blueTable thead {
												  background: #1C6EA4;
												  background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  border-bottom: 2px solid #444444;
												}
												table.blueTable thead th {
												  font-size: 12px;
												  text-align:center;
												  font-weight: bold;
												  color: #FFFFFF;
												  border-left: 2px solid #D0E4F5;
												}
												table.blueTable thead th:first-child {
												  border-left: none;
												}

												table.blueTable tfoot {
												  font-size: 14px;
												  font-weight: bold;
												  color: #FFFFFF;
												  background: #D0E4F5;
												  background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  border-top: 2px solid #444444;
												}
												table.blueTable tfoot td {
												  font-size: 14px;
												}
												table.blueTable tfoot .links {
												  text-align: right;
												}
												table.blueTable tfoot .links a{
												  display: inline-block;
												  background: #1C6EA4;
												  color: #FFFFFF;
												  padding: 2px 8px;
												  border-radius: 5px;
												}			
											</style>
											

											<input id="soundsystemmmsrc" type="text" placeholder="Search.." style="margin-top:20px;">
											
												<table class="blueTable" border="1"> 
													<thead>
													<tr>
													
														<?  
														$objConnect = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
														?>														
														<th width="17%">Nama&nbsp;Grp</th>
														<th width="14%">Kode&nbsp;Barang&nbsp;</th>
														<th width="20%">Nama&nbsp;Barang&nbsp;</th>													
														<th width="22%">Info&nbsp;Detail</th>	
														<th width="17%" style="display:none;">No&nbsp;Taging&nbsp;</th>
														<th width="15%">QTY</th>
														<th width="10%" style="display:none;">STK<br>BARU</th>
														<th width="10%" style="display:none;">STK<br>BAIK</th>
														<th width="10%" style="display:none;">STK<br>LAMA</th>
													</tr>													
													</thead>
												</table>								
												<script src="./js/jquery-1.9.1.js.download"></script>
												<div style="width:100%; height:350px; overflow:auto;position:relative;">
												<table class="blueTable" border="1">
													<tbody id="myCodessoundsystemmm">
														<?  
														$qvSCat =  "SELECT FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE AS KODE_BARANG,
																	FSDBRGEQASSET_NEW.ITEM_NAME AS NAMA_BARANG,FSDBRGEQASSET_NEW.ITEM_BRAND AS MERK_BARANG,
																	FSDBRGEQASSET_NEW.ITEM_MODEL AS MODEL,
																	FSDBRGEQASSET_NEW.ITEM_PRICE AS HARGA_TERAKHIR
																	FROM FSDBRGEQ_NEW
																	JOIN FSDSGROUP ON FSDBRGEQ_NEW.GROUP_CODE = FSDSGROUP.KODE_GROUP
																	JOIN FSDBRGEQASSET_NEW ON FSDBRGEQ_NEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
																	JOIN FSDEQTYPE_NEW ON FSDBRGEQ_NEW.EQTYPECODE = FSDEQTYPE_NEW.EQTYPECODE
																	WHERE FSDEQTYPE_NEW.EQTYPECODE = 'EQ0008' 
																	GROUP BY FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE,
																	FSDBRGEQASSET_NEW.ITEM_NAME,FSDBRGEQASSET_NEW.ITEM_BRAND,
																	FSDBRGEQASSET_NEW.ITEM_MODEL,FSDBRGEQASSET_NEW.ITEM_PRICE
																	ORDER BY FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE,
																	FSDBRGEQASSET_NEW.ITEM_NAME,FSDBRGEQASSET_NEW.ITEM_BRAND,
																	FSDBRGEQASSET_NEW.ITEM_MODEL,FSDBRGEQASSET_NEW.ITEM_PRICE ASC";	
														$qobjParse = oci_parse ($objConnect, $qvSCat);  
														oci_execute ($qobjParse,OCI_DEFAULT);   
														while($rvSCat = oci_fetch_array($qobjParse,OCI_BOTH))  
														{  
															$jumlah_desimal  = "0";
															$pemisah_desimal = ".";
															$pemisah_ribuan  = ".";		
															
														?>  
														  
															<script type="text/javascript">
																$(window).load(function()
																{      
																	$(document).ready(function() 
																	{
																		$("input<?='#textseqsoundsystemmultim'.$rvSCat["KODE_BARANG"];?>").on("keyup blur", function() 
																		{
																			if( this.value != "")
																			{
																				$("<?='#cekseqsoundsystemmultim'.$rvSCat["KODE_BARANG"];?>").show();
																				$("input<?='#cekseqsoundsystemmultim'.$rvSCat["KODE_BARANG"];?>").prop("checked", this.value != "");						
																			}else{
																				$("<?='#cekseqsoundsystemmultim'.$rvSCat["KODE_BARANG"];?>").show();
																				$("input<?='#cekseqsoundsystemmultim'.$rvSCat["KODE_BARANG"];?>").prop("checked", this.value != "");						

																			}	
																			/* $("#boxcheck").hide();*/

																		});

																		// don't allow user to manually change the checkbox
																		$("input<?='#cekseqsoundsystemmultim'.$rvSCat["KODE_BARANG"];?>").click(function() {
																			$("<?='#cekseqsoundsystemmultim'.$rvSCat["KODE_BARANG"];?>").show();
																			return false;
																		});
																	});
																});
															</script>																								
													
														<tr>												
															<td width="10%" class="elnt_container" style="display:none;">
																<center><?=$rvSCat["KODE_GROUP"];?></center>
															</td>
															<td width="17%">
																<center><?=$rvSCat["NAMA_GROUP"];?></center>
															</td>
															<td width="16%">
																<center><input type="checkbox" name="cekseqsoundsystemmultim[]" value="<?=$rvSCat["KODE_BARANG"];?>" id="<?='cekseqsoundsystemmultim'.$rvSCat["KODE_BARANG"];?>" style="display:show;" />&nbsp;<?=$rvSCat["KODE_BARANG"];?></center>
																
															</td>																
															<td width="20%">
																<?=$rvSCat["NAMA_BARANG"];?>
															</td>															
															<td width="20%">
																<?='Model : <strong>'.$rvSCat["MODEL"].'</strong><br>';?>
																<?='Merk  : <strong>'.$rvSCat["MERK_BARANG"].'</strong><br>';?>
																<?='Harga : <strong>Rp.&nbsp;'.number_format($rvSCat["HARGA_TERAKHIR"], $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?>

															</td>																			
															<td width="14%" style="display:none;">
																<center><input type="checkbox" name="ceksnotag[<?=$rvSCat["NO_TAGING"];?>]" value="<?=$rvSCat["NO_TAGING"];?>" id="ceksnotag" />&nbsp;<?=$rvSCat["NO_TAGING"];?></center>
															</td>														
															<td width="13%">															
																<!--<center><input type="text" name="textseq[<!?=$rvSCat["KODE_BARANG"];?>][<!?=$rvSCat["NO_TAGING"];?>]" id="texts" style="width:52%;"></center>-->
																<!--<div id="texts">-->
																	<center><input type="text" name="textseqsoundsystemmultim[<?=$rvSCat["KODE_BARANG"];?>]" id="<?='textseqsoundsystemmultim'.$rvSCat["KODE_BARANG"];?>" style="width:52%;"></center>
																<!--</div>-->
															</td>																
															<td width="10%" style="display:none;">
																<?=$rvSCat["BARU_EQ_GD"];?>
															</td>
															<td width="11%" style="display:none;">
																<?=$rvSCat["BAIK_SP_GD"];?>
															</td>
															<td width="8%" style="display:none;">
																<?=$rvSCat["RUSAK_EQ_GD"];?>
															</td>
														</tr>
														<? } ?>
														<script src="./js/jquery.min.js.download"></script>														
													</tbody>
												</table>	
												</div>	
											</td>
										</tr>
										</table>								
								</div>
								<!-- ####################### PLAYLAND EQUIPMENT (RQS-03-000120) ######################################### -->								
								<div class="<?='kode_tipebrgRQS-03-000120replace'?>" style="display:none;margin-top:0px;margin-left:0px;">
										<table width="750" border="0" cellspacing="0" style="margin-left:0px;">
										<tr>
											<!--<td></td><!-- FSD WEST -->
											<td><label style="width:auto;"><strong><u>Play Land&nbsp;List&nbsp;:</u></strong></label><br>
										<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
											<script src="jquery/jquery.min.js"></script>
											<script>
											$(document).ready(function(){
											  $("#playlandsrc").on("keyup", function() {
												var value = $(this).val().toLowerCase();
												$("#myCodesplayland tr").filter(function() {
												  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
												});
											  });
											});
											</script>
											<style>
												table.blueTable {
												  border: 1px solid #1C6EA4;
												  background-color: #EEEEEE;
												  width: 100%;
												  text-align: left;
												  border-collapse: collapse;
												  overflow-x:scroll;height:20px;
												  position:relative;
												}
												table.blueTable td, table.blueTable th {
												  border: 1px solid #AAAAAA;
												  padding: 3px 2px;	
												}
												table.blueTable tbody td {
												  font-size: 13px;
												}
												table.blueTable tr:nth-child(even) {
												  background: #D0E4F5;
												}
												table.blueTable thead {
												  background: #1C6EA4;
												  background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  border-bottom: 2px solid #444444;
												}
												table.blueTable thead th {
												  font-size: 12px;
												  text-align:center;
												  font-weight: bold;
												  color: #FFFFFF;
												  border-left: 2px solid #D0E4F5;
												}
												table.blueTable thead th:first-child {
												  border-left: none;
												}

												table.blueTable tfoot {
												  font-size: 14px;
												  font-weight: bold;
												  color: #FFFFFF;
												  background: #D0E4F5;
												  background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  border-top: 2px solid #444444;
												}
												table.blueTable tfoot td {
												  font-size: 14px;
												}
												table.blueTable tfoot .links {
												  text-align: right;
												}
												table.blueTable tfoot .links a{
												  display: inline-block;
												  background: #1C6EA4;
												  color: #FFFFFF;
												  padding: 2px 8px;
												  border-radius: 5px;
												}			
											</style>
											

											<input id="playlandsrc" type="text" placeholder="Search.." style="margin-top:20px;">
											
												<table class="blueTable" border="1"> 
													<thead>
													<tr>
													
														<?  
														$objConnect = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
														?>														
														<th width="17%">Nama&nbsp;Grp</th>
														<th width="14%">Kode&nbsp;Barang&nbsp;</th>
														<th width="20%">Nama&nbsp;Barang&nbsp;</th>													
														<th width="22%">Info&nbsp;Detail</th>	
														<th width="17%" style="display:none;">No&nbsp;Taging&nbsp;</th>
														<th width="15%">QTY</th>
														<th width="10%" style="display:none;">STK<br>BARU</th>
														<th width="10%" style="display:none;">STK<br>BAIK</th>
														<th width="10%" style="display:none;">STK<br>LAMA</th>
													</tr>													
													</thead>
												</table>								
												<script src="./js/jquery-1.9.1.js.download"></script>
												<div style="width:100%; height:350px; overflow:auto;position:relative;">
												<table class="blueTable" border="1">
													<tbody id="myCodesplayland">
														<?  
														$qvSCat =  "SELECT FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE AS KODE_BARANG,
																	FSDBRGEQASSET_NEW.ITEM_NAME AS NAMA_BARANG,FSDBRGEQASSET_NEW.ITEM_BRAND AS MERK_BARANG,
																	FSDBRGEQASSET_NEW.ITEM_MODEL AS MODEL,
																	FSDBRGEQASSET_NEW.ITEM_PRICE AS HARGA_TERAKHIR
																	FROM FSDBRGEQ_NEW
																	JOIN FSDSGROUP ON FSDBRGEQ_NEW.GROUP_CODE = FSDSGROUP.KODE_GROUP
																	JOIN FSDBRGEQASSET_NEW ON FSDBRGEQ_NEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
																	JOIN FSDEQTYPE_NEW ON FSDBRGEQ_NEW.EQTYPECODE = FSDEQTYPE_NEW.EQTYPECODE
																	WHERE FSDEQTYPE_NEW.EQTYPECODE = 'EQ0009' 
																	GROUP BY FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE,
																	FSDBRGEQASSET_NEW.ITEM_NAME,FSDBRGEQASSET_NEW.ITEM_BRAND,
																	FSDBRGEQASSET_NEW.ITEM_MODEL,FSDBRGEQASSET_NEW.ITEM_PRICE
																	ORDER BY FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE,
																	FSDBRGEQASSET_NEW.ITEM_NAME,FSDBRGEQASSET_NEW.ITEM_BRAND,
																	FSDBRGEQASSET_NEW.ITEM_MODEL,FSDBRGEQASSET_NEW.ITEM_PRICE ASC";	
														$qobjParse = oci_parse ($objConnect, $qvSCat);  
														oci_execute ($qobjParse,OCI_DEFAULT);   
														while($rvSCat = oci_fetch_array($qobjParse,OCI_BOTH))  
														{  
															$jumlah_desimal  = "0";
															$pemisah_desimal = ".";
															$pemisah_ribuan  = ".";		
															
														?>  
														  
															<script type="text/javascript">
																$(window).load(function()
																{      
																	$(document).ready(function() 
																	{
																		$("input<?='#textseqplayland'.$rvSCat["KODE_BARANG"];?>").on("keyup blur", function() 
																		{
																			if( this.value != "")
																			{
																				$("<?='#cekseqplayland'.$rvSCat["KODE_BARANG"];?>").show();
																				$("input<?='#cekseqplayland'.$rvSCat["KODE_BARANG"];?>").prop("checked", this.value != "");						
																			}else{
																				$("<?='#cekseqplayland'.$rvSCat["KODE_BARANG"];?>").show();
																				$("input<?='#cekseqplayland'.$rvSCat["KODE_BARANG"];?>").prop("checked", this.value != "");						

																			}	
																			/* $("#boxcheck").hide();*/

																		});

																		// don't allow user to manually change the checkbox
																		$("input<?='#cekseqplayland'.$rvSCat["KODE_BARANG"];?>").click(function() {
																			$("<?='#cekseqplayland'.$rvSCat["KODE_BARANG"];?>").show();
																			return false;
																		});
																	});
																});
															</script>																								
													
														<tr>												
															<td width="10%" class="elnt_container" style="display:none;">
																<center><?=$rvSCat["KODE_GROUP"];?></center>
															</td>
															<td width="17%">
																<center><?=$rvSCat["NAMA_GROUP"];?></center>
															</td>
															<td width="16%">
																<center><input type="checkbox" name="cekseqplayland[]" value="<?=$rvSCat["KODE_BARANG"];?>" id="<?='cekseqplayland'.$rvSCat["KODE_BARANG"];?>" style="display:show;" />&nbsp;<?=$rvSCat["KODE_BARANG"];?></center>
																
															</td>																
															<td width="20%">
																<?=$rvSCat["NAMA_BARANG"];?>
															</td>															
															<td width="20%">
																<?='Model : <strong>'.$rvSCat["MODEL"].'</strong><br>';?>
																<?='Merk  : <strong>'.$rvSCat["MERK_BARANG"].'</strong><br>';?>
																<?='Harga : <strong>Rp.&nbsp;'.number_format($rvSCat["HARGA_TERAKHIR"], $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?>

															</td>																			
															<td width="14%" style="display:none;">
																<center><input type="checkbox" name="ceksnotag[<?=$rvSCat["NO_TAGING"];?>]" value="<?=$rvSCat["NO_TAGING"];?>" id="ceksnotag" />&nbsp;<?=$rvSCat["NO_TAGING"];?></center>
															</td>														
															<td width="13%">															
																<!--<center><input type="text" name="textseq[<!?=$rvSCat["KODE_BARANG"];?>][<!?=$rvSCat["NO_TAGING"];?>]" id="texts" style="width:52%;"></center>-->
																<!--<div id="texts">-->
																	<center><input type="text" name="textseqplayland[<?=$rvSCat["KODE_BARANG"];?>]" id="<?='textseqplayland'.$rvSCat["KODE_BARANG"];?>" style="width:52%;"></center>
																<!--</div>-->
															</td>																
															<td width="10%" style="display:none;">
																<?=$rvSCat["BARU_EQ_GD"];?>
															</td>
															<td width="11%" style="display:none;">
																<?=$rvSCat["BAIK_SP_GD"];?>
															</td>
															<td width="8%" style="display:none;">
																<?=$rvSCat["RUSAK_EQ_GD"];?>
															</td>
														</tr>
														<? } ?>
														<script src="./js/jquery.min.js.download"></script>														
													</tbody>
												</table>	
												</div>	
											</td>
										</tr>
										</table>								
								</div>
								<!-- ####################### COFFEE AND KRUSHER EQUIPMENT (RQS-03-000121) ######################################### -->								
								<div class="<?='kode_tipebrgRQS-03-000121replace'?>" style="display:none;margin-top:0px;margin-left:0px;">
										<table width="750" border="0" cellspacing="0" style="margin-left:0px;">
										<tr>
											<!--<td></td><!-- FSD WEST -->
											<td><label style="width:auto;"><strong><u>Coffee And Krusher&nbsp;Equipment&nbsp;List&nbsp;:</u></strong></label><br>
										<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
											<script src="jquery/jquery.min.js"></script>
											<script>
											$(document).ready(function(){
											  $("#coffeekrushersrc").on("keyup", function() {
												var value = $(this).val().toLowerCase();
												$("#myCodescoffeekrusher tr").filter(function() {
												  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
												});
											  });
											});
											</script>
											<style>
												table.blueTable {
												  border: 1px solid #1C6EA4;
												  background-color: #EEEEEE;
												  width: 100%;
												  text-align: left;
												  border-collapse: collapse;
												  overflow-x:scroll;height:20px;
												  position:relative;
												}
												table.blueTable td, table.blueTable th {
												  border: 1px solid #AAAAAA;
												  padding: 3px 2px;	
												}
												table.blueTable tbody td {
												  font-size: 13px;
												}
												table.blueTable tr:nth-child(even) {
												  background: #D0E4F5;
												}
												table.blueTable thead {
												  background: #1C6EA4;
												  background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  border-bottom: 2px solid #444444;
												}
												table.blueTable thead th {
												  font-size: 12px;
												  text-align:center;
												  font-weight: bold;
												  color: #FFFFFF;
												  border-left: 2px solid #D0E4F5;
												}
												table.blueTable thead th:first-child {
												  border-left: none;
												}

												table.blueTable tfoot {
												  font-size: 14px;
												  font-weight: bold;
												  color: #FFFFFF;
												  background: #D0E4F5;
												  background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  border-top: 2px solid #444444;
												}
												table.blueTable tfoot td {
												  font-size: 14px;
												}
												table.blueTable tfoot .links {
												  text-align: right;
												}
												table.blueTable tfoot .links a{
												  display: inline-block;
												  background: #1C6EA4;
												  color: #FFFFFF;
												  padding: 2px 8px;
												  border-radius: 5px;
												}			
											</style>
											

											<input id="coffeekrushersrc" type="text" placeholder="Search.." style="margin-top:20px;">
											
												<table class="blueTable" border="1"> 
													<thead>
													<tr>
													
														<?  
														$objConnect = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
														?>														
														<th width="17%">Nama&nbsp;Grp</th>
														<th width="14%">Kode&nbsp;Barang&nbsp;</th>
														<th width="20%">Nama&nbsp;Barang&nbsp;</th>													
														<th width="22%">Info&nbsp;Detail</th>	
														<th width="17%" style="display:none;">No&nbsp;Taging&nbsp;</th>
														<th width="15%">QTY</th>
														<th width="10%" style="display:none;">STK<br>BARU</th>
														<th width="10%" style="display:none;">STK<br>BAIK</th>
														<th width="10%" style="display:none;">STK<br>LAMA</th>
													</tr>													
													</thead>
												</table>								
												<script src="./js/jquery-1.9.1.js.download"></script>
												<div style="width:100%; height:350px; overflow:auto;position:relative;">
												<table class="blueTable" border="1">
													<tbody id="myCodescoffeekrusher">
														<?  
														$qvSCat =  "SELECT FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE AS KODE_BARANG,
																	FSDBRGEQASSET_NEW.ITEM_NAME AS NAMA_BARANG,FSDBRGEQASSET_NEW.ITEM_BRAND AS MERK_BARANG,
																	FSDBRGEQASSET_NEW.ITEM_MODEL AS MODEL,
																	FSDBRGEQASSET_NEW.ITEM_PRICE AS HARGA_TERAKHIR
																	FROM FSDBRGEQ_NEW
																	JOIN FSDSGROUP ON FSDBRGEQ_NEW.GROUP_CODE = FSDSGROUP.KODE_GROUP
																	JOIN FSDBRGEQASSET_NEW ON FSDBRGEQ_NEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
																	JOIN FSDEQTYPE_NEW ON FSDBRGEQ_NEW.EQTYPECODE = FSDEQTYPE_NEW.EQTYPECODE
																	WHERE FSDEQTYPE_NEW.EQTYPECODE = 'EQ0010' 
																	GROUP BY FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE,
																	FSDBRGEQASSET_NEW.ITEM_NAME,FSDBRGEQASSET_NEW.ITEM_BRAND,
																	FSDBRGEQASSET_NEW.ITEM_MODEL,FSDBRGEQASSET_NEW.ITEM_PRICE
																	ORDER BY FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE,
																	FSDBRGEQASSET_NEW.ITEM_NAME,FSDBRGEQASSET_NEW.ITEM_BRAND,
																	FSDBRGEQASSET_NEW.ITEM_MODEL,FSDBRGEQASSET_NEW.ITEM_PRICE ASC";	
														$qobjParse = oci_parse ($objConnect, $qvSCat);  
														oci_execute ($qobjParse,OCI_DEFAULT);   
														while($rvSCat = oci_fetch_array($qobjParse,OCI_BOTH))  
														{  
															$jumlah_desimal  = "0";
															$pemisah_desimal = ".";
															$pemisah_ribuan  = ".";		
															
														?>  
														  
															<script type="text/javascript">
																$(window).load(function()
																{      
																	$(document).ready(function() 
																	{
																		$("input<?='#textseqcoffeekrusher'.$rvSCat["KODE_BARANG"];?>").on("keyup blur", function() 
																		{
																			if( this.value != "")
																			{
																				$("<?='#cekseqcoffeekrusher'.$rvSCat["KODE_BARANG"];?>").show();
																				$("input<?='#cekseqcoffeekrusher'.$rvSCat["KODE_BARANG"];?>").prop("checked", this.value != "");						
																			}else{
																				$("<?='#cekseqcoffeekrusher'.$rvSCat["KODE_BARANG"];?>").show();
																				$("input<?='#cekseqcoffeekrusher'.$rvSCat["KODE_BARANG"];?>").prop("checked", this.value != "");						

																			}	
																			/* $("#boxcheck").hide();*/

																		});

																		// don't allow user to manually change the checkbox
																		$("input<?='#cekseqcoffeekrusher'.$rvSCat["KODE_BARANG"];?>").click(function() {
																			$("<?='#cekseqcoffeekrusher'.$rvSCat["KODE_BARANG"];?>").show();
																			return false;
																		});
																	});
																});
															</script>																								
													
														<tr>												
															<td width="10%" class="elnt_container" style="display:none;">
																<center><?=$rvSCat["KODE_GROUP"];?></center>
															</td>
															<td width="17%">
																<center><?=$rvSCat["NAMA_GROUP"];?></center>
															</td>
															<td width="16%">
																<center><input type="checkbox" name="cekseqcoffeekrusher[]" value="<?=$rvSCat["KODE_BARANG"];?>" id="<?='cekseqcoffeekrusher'.$rvSCat["KODE_BARANG"];?>" style="display:show;" />&nbsp;<?=$rvSCat["KODE_BARANG"];?></center>
																
															</td>																
															<td width="20%">
																<?=$rvSCat["NAMA_BARANG"];?>
															</td>															
															<td width="20%">
																<?='Model : <strong>'.$rvSCat["MODEL"].'</strong><br>';?>
																<?='Merk  : <strong>'.$rvSCat["MERK_BARANG"].'</strong><br>';?>
																<?='Harga : <strong>Rp.&nbsp;'.number_format($rvSCat["HARGA_TERAKHIR"], $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?>

															</td>																			
															<td width="14%" style="display:none;">
																<center><input type="checkbox" name="ceksnotag[<?=$rvSCat["NO_TAGING"];?>]" value="<?=$rvSCat["NO_TAGING"];?>" id="ceksnotag" />&nbsp;<?=$rvSCat["NO_TAGING"];?></center>
															</td>														
															<td width="13%">															
																<!--<center><input type="text" name="textseq[<!?=$rvSCat["KODE_BARANG"];?>][<!?=$rvSCat["NO_TAGING"];?>]" id="texts" style="width:52%;"></center>-->
																<!--<div id="texts">-->
																	<center><input type="text" name="textseqcoffeekrusher[<?=$rvSCat["KODE_BARANG"];?>]" id="<?='textseqcoffeekrusher'.$rvSCat["KODE_BARANG"];?>" style="width:52%;"></center>
																<!--</div>-->
															</td>																
															<td width="10%" style="display:none;">
																<?=$rvSCat["BARU_EQ_GD"];?>
															</td>
															<td width="11%" style="display:none;">
																<?=$rvSCat["BAIK_SP_GD"];?>
															</td>
															<td width="8%" style="display:none;">
																<?=$rvSCat["RUSAK_EQ_GD"];?>
															</td>
														</tr>
														<? } ?>
														<script src="./js/jquery.min.js.download"></script>														
													</tbody>
												</table>	
												</div>	
											</td>
										</tr>
										</table>								
								</div>
								<!-- ####################### BIRTHDAY CENTER AND DRIVE-THRU (RQS-03-000122) ######################################### -->								
								<div class="<?='kode_tipebrgRQS-03-000122replace'?>" style="display:none;margin-top:0px;margin-left:0px;">
										<table width="750" border="0" cellspacing="0" style="margin-left:0px;">
										<tr>
											<!--<td></td><!-- FSD WEST -->
											<td><label style="width:auto;"><strong><u>Birthday Center And Drive-Thru&nbsp;Equipment&nbsp;List&nbsp;:</u></strong></label><br>
										<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
											<script src="jquery/jquery.min.js"></script>
											<script>
											$(document).ready(function(){
											  $("#birthdaydrivethrusrc").on("keyup", function() {
												var value = $(this).val().toLowerCase();
												$("#myCodesbirthdaydrivethru tr").filter(function() {
												  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
												});
											  });
											});
											</script>
											<style>
												table.blueTable {
												  border: 1px solid #1C6EA4;
												  background-color: #EEEEEE;
												  width: 100%;
												  text-align: left;
												  border-collapse: collapse;
												  overflow-x:scroll;height:20px;
												  position:relative;
												}
												table.blueTable td, table.blueTable th {
												  border: 1px solid #AAAAAA;
												  padding: 3px 2px;	
												}
												table.blueTable tbody td {
												  font-size: 13px;
												}
												table.blueTable tr:nth-child(even) {
												  background: #D0E4F5;
												}
												table.blueTable thead {
												  background: #1C6EA4;
												  background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  border-bottom: 2px solid #444444;
												}
												table.blueTable thead th {
												  font-size: 12px;
												  text-align:center;
												  font-weight: bold;
												  color: #FFFFFF;
												  border-left: 2px solid #D0E4F5;
												}
												table.blueTable thead th:first-child {
												  border-left: none;
												}

												table.blueTable tfoot {
												  font-size: 14px;
												  font-weight: bold;
												  color: #FFFFFF;
												  background: #D0E4F5;
												  background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  border-top: 2px solid #444444;
												}
												table.blueTable tfoot td {
												  font-size: 14px;
												}
												table.blueTable tfoot .links {
												  text-align: right;
												}
												table.blueTable tfoot .links a{
												  display: inline-block;
												  background: #1C6EA4;
												  color: #FFFFFF;
												  padding: 2px 8px;
												  border-radius: 5px;
												}			
											</style>
											

											<input id="birthdaydrivethrusrc" type="text" placeholder="Search.." style="margin-top:20px;">
											
												<table class="blueTable" border="1"> 
													<thead>
													<tr>
													
														<?  
														$objConnect = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
														?>														
														<th width="17%">Nama&nbsp;Grp</th>
														<th width="14%">Kode&nbsp;Barang&nbsp;</th>
														<th width="20%">Nama&nbsp;Barang&nbsp;</th>													
														<th width="22%">Info&nbsp;Detail</th>	
														<th width="17%" style="display:none;">No&nbsp;Taging&nbsp;</th>
														<th width="15%">QTY</th>
														<th width="10%" style="display:none;">STK<br>BARU</th>
														<th width="10%" style="display:none;">STK<br>BAIK</th>
														<th width="10%" style="display:none;">STK<br>LAMA</th>
													</tr>													
													</thead>
												</table>								
												<script src="./js/jquery-1.9.1.js.download"></script>
												<div style="width:100%; height:350px; overflow:auto;position:relative;">
												<table class="blueTable" border="1">
													<tbody id="myCodesbirthdaydrivethru">
														<?  
														$qvSCat =  "SELECT FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE AS KODE_BARANG,
																	FSDBRGEQASSET_NEW.ITEM_NAME AS NAMA_BARANG,FSDBRGEQASSET_NEW.ITEM_BRAND AS MERK_BARANG,
																	FSDBRGEQASSET_NEW.ITEM_MODEL AS MODEL,
																	FSDBRGEQASSET_NEW.ITEM_PRICE AS HARGA_TERAKHIR
																	FROM FSDBRGEQ_NEW
																	JOIN FSDSGROUP ON FSDBRGEQ_NEW.GROUP_CODE = FSDSGROUP.KODE_GROUP
																	JOIN FSDBRGEQASSET_NEW ON FSDBRGEQ_NEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
																	JOIN FSDEQTYPE_NEW ON FSDBRGEQ_NEW.EQTYPECODE = FSDEQTYPE_NEW.EQTYPECODE
																	WHERE FSDEQTYPE_NEW.EQTYPECODE = 'EQ0011' 
																	GROUP BY FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE,
																	FSDBRGEQASSET_NEW.ITEM_NAME,FSDBRGEQASSET_NEW.ITEM_BRAND,
																	FSDBRGEQASSET_NEW.ITEM_MODEL,FSDBRGEQASSET_NEW.ITEM_PRICE
																	ORDER BY FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE,
																	FSDBRGEQASSET_NEW.ITEM_NAME,FSDBRGEQASSET_NEW.ITEM_BRAND,
																	FSDBRGEQASSET_NEW.ITEM_MODEL,FSDBRGEQASSET_NEW.ITEM_PRICE ASC";	
														$qobjParse = oci_parse ($objConnect, $qvSCat);  
														oci_execute ($qobjParse,OCI_DEFAULT);   
														while($rvSCat = oci_fetch_array($qobjParse,OCI_BOTH))  
														{  
															$jumlah_desimal  = "0";
															$pemisah_desimal = ".";
															$pemisah_ribuan  = ".";		
															
														?>  
														  
															<script type="text/javascript">
																$(window).load(function()
																{      
																	$(document).ready(function() 
																	{
																		$("input<?='#textseqbirthdaydrivethru'.$rvSCat["KODE_BARANG"];?>").on("keyup blur", function() 
																		{
																			if( this.value != "")
																			{
																				$("<?='#cekseqbirthdaydrivethru'.$rvSCat["KODE_BARANG"];?>").show();
																				$("input<?='#cekseqbirthdaydrivethru'.$rvSCat["KODE_BARANG"];?>").prop("checked", this.value != "");						
																			}else{
																				$("<?='#cekseqbirthdaydrivethru'.$rvSCat["KODE_BARANG"];?>").show();
																				$("input<?='#cekseqbirthdaydrivethru'.$rvSCat["KODE_BARANG"];?>").prop("checked", this.value != "");						

																			}	
																			/* $("#boxcheck").hide();*/

																		});

																		// don't allow user to manually change the checkbox
																		$("input<?='#cekseqbirthdaydrivethru'.$rvSCat["KODE_BARANG"];?>").click(function() {
																			$("<?='#cekseqbirthdaydrivethru'.$rvSCat["KODE_BARANG"];?>").show();
																			return false;
																		});
																	});
																});
															</script>																								
													
														<tr>												
															<td width="10%" class="elnt_container" style="display:none;">
																<center><?=$rvSCat["KODE_GROUP"];?></center>
															</td>
															<td width="17%">
																<center><?=$rvSCat["NAMA_GROUP"];?></center>
															</td>
															<td width="16%">
																<center><input type="checkbox" name="cekseqbirthdaydrivethru[]" value="<?=$rvSCat["KODE_BARANG"];?>" id="<?='cekseqbirthdaydrivethru'.$rvSCat["KODE_BARANG"];?>" style="display:show;" />&nbsp;<?=$rvSCat["KODE_BARANG"];?></center>
																
															</td>																
															<td width="20%">
																<?=$rvSCat["NAMA_BARANG"];?>
															</td>															
															<td width="20%">
																<?='Model : <strong>'.$rvSCat["MODEL"].'</strong><br>';?>
																<?='Merk  : <strong>'.$rvSCat["MERK_BARANG"].'</strong><br>';?>
																<?='Harga : <strong>Rp.&nbsp;'.number_format($rvSCat["HARGA_TERAKHIR"], $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?>

															</td>																			
															<td width="14%" style="display:none;">
																<center><input type="checkbox" name="ceksnotag[<?=$rvSCat["NO_TAGING"];?>]" value="<?=$rvSCat["NO_TAGING"];?>" id="ceksnotag" />&nbsp;<?=$rvSCat["NO_TAGING"];?></center>
															</td>														
															<td width="13%">															
																<!--<center><input type="text" name="textseq[<!?=$rvSCat["KODE_BARANG"];?>][<!?=$rvSCat["NO_TAGING"];?>]" id="texts" style="width:52%;"></center>-->
																<!--<div id="texts">-->
																	<center><input type="text" name="textseqbirthdaydrivethru[<?=$rvSCat["KODE_BARANG"];?>]" id="<?='textseqbirthdaydrivethru'.$rvSCat["KODE_BARANG"];?>" style="width:52%;"></center>
																<!--</div>-->
															</td>																
															<td width="10%" style="display:none;">
																<?=$rvSCat["BARU_EQ_GD"];?>
															</td>
															<td width="11%" style="display:none;">
																<?=$rvSCat["BAIK_SP_GD"];?>
															</td>
															<td width="8%" style="display:none;">
																<?=$rvSCat["RUSAK_EQ_GD"];?>
															</td>
														</tr>
														<? } ?>
														<script src="./js/jquery.min.js.download"></script>														
													</tbody>
												</table>	
												</div>	
											</td>
										</tr>
										</table>								
								</div>
								<!-- ####################### STORE FACILITY SYSTEM (RQS-03-000123) ######################################### -->								
								<div class="<?='kode_tipebrgRQS-03-000123replace'?>" style="display:none;margin-top:0px;margin-left:0px;">
										<table width="750" border="0" cellspacing="0" style="margin-left:0px;">
										<tr>
											<!--<td></td><!-- FSD WEST -->
											<td><label style="width:auto;"><strong><u>Store Facility System&nbsp;List&nbsp;:</u></strong></label><br>
										<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
											<script src="jquery/jquery.min.js"></script>
											<script>
											$(document).ready(function(){
											  $("#storefacilitysrc").on("keyup", function() {
												var value = $(this).val().toLowerCase();
												$("#myCodesstorefacility tr").filter(function() {
												  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
												});
											  });
											});
											</script>
											<style>
												table.blueTable {
												  border: 1px solid #1C6EA4;
												  background-color: #EEEEEE;
												  width: 100%;
												  text-align: left;
												  border-collapse: collapse;
												  overflow-x:scroll;height:20px;
												  position:relative;
												}
												table.blueTable td, table.blueTable th {
												  border: 1px solid #AAAAAA;
												  padding: 3px 2px;	
												}
												table.blueTable tbody td {
												  font-size: 13px;
												}
												table.blueTable tr:nth-child(even) {
												  background: #D0E4F5;
												}
												table.blueTable thead {
												  background: #1C6EA4;
												  background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  border-bottom: 2px solid #444444;
												}
												table.blueTable thead th {
												  font-size: 12px;
												  text-align:center;
												  font-weight: bold;
												  color: #FFFFFF;
												  border-left: 2px solid #D0E4F5;
												}
												table.blueTable thead th:first-child {
												  border-left: none;
												}

												table.blueTable tfoot {
												  font-size: 14px;
												  font-weight: bold;
												  color: #FFFFFF;
												  background: #D0E4F5;
												  background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  border-top: 2px solid #444444;
												}
												table.blueTable tfoot td {
												  font-size: 14px;
												}
												table.blueTable tfoot .links {
												  text-align: right;
												}
												table.blueTable tfoot .links a{
												  display: inline-block;
												  background: #1C6EA4;
												  color: #FFFFFF;
												  padding: 2px 8px;
												  border-radius: 5px;
												}			
											</style>
											

											<input id="storefacilitysrc" type="text" placeholder="Search.." style="margin-top:20px;">
											
												<table class="blueTable" border="1"> 
													<thead>
													<tr>
													
														<?  
														$objConnect = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
														?>														
														<th width="17%">Nama&nbsp;Grp</th>
														<th width="14%">Kode&nbsp;Barang&nbsp;</th>
														<th width="20%">Nama&nbsp;Barang&nbsp;</th>													
														<th width="22%">Info&nbsp;Detail</th>	
														<th width="17%" style="display:none;">No&nbsp;Taging&nbsp;</th>
														<th width="15%">QTY</th>
														<th width="10%" style="display:none;">STK<br>BARU</th>
														<th width="10%" style="display:none;">STK<br>BAIK</th>
														<th width="10%" style="display:none;">STK<br>LAMA</th>
													</tr>													
													</thead>
												</table>								
												<script src="./js/jquery-1.9.1.js.download"></script>
												<div style="width:100%; height:350px; overflow:auto;position:relative;">
												<table class="blueTable" border="1">
													<tbody id="myCodesstorefacility">
														<?  
														$qvSCat =  "SELECT FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE AS KODE_BARANG,
																	FSDBRGEQASSET_NEW.ITEM_NAME AS NAMA_BARANG,FSDBRGEQASSET_NEW.ITEM_BRAND AS MERK_BARANG,
																	FSDBRGEQASSET_NEW.ITEM_MODEL AS MODEL,
																	FSDBRGEQASSET_NEW.ITEM_PRICE AS HARGA_TERAKHIR
																	FROM FSDBRGEQ_NEW
																	JOIN FSDSGROUP ON FSDBRGEQ_NEW.GROUP_CODE = FSDSGROUP.KODE_GROUP
																	JOIN FSDBRGEQASSET_NEW ON FSDBRGEQ_NEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
																	JOIN FSDEQTYPE_NEW ON FSDBRGEQ_NEW.EQTYPECODE = FSDEQTYPE_NEW.EQTYPECODE
																	WHERE FSDEQTYPE_NEW.EQTYPECODE = 'EQ0012' 
																	GROUP BY FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE,
																	FSDBRGEQASSET_NEW.ITEM_NAME,FSDBRGEQASSET_NEW.ITEM_BRAND,
																	FSDBRGEQASSET_NEW.ITEM_MODEL,FSDBRGEQASSET_NEW.ITEM_PRICE
																	ORDER BY FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE,
																	FSDBRGEQASSET_NEW.ITEM_NAME,FSDBRGEQASSET_NEW.ITEM_BRAND,
																	FSDBRGEQASSET_NEW.ITEM_MODEL,FSDBRGEQASSET_NEW.ITEM_PRICE ASC";	
														$qobjParse = oci_parse ($objConnect, $qvSCat);  
														oci_execute ($qobjParse,OCI_DEFAULT);   
														while($rvSCat = oci_fetch_array($qobjParse,OCI_BOTH))  
														{  
															$jumlah_desimal  = "0";
															$pemisah_desimal = ".";
															$pemisah_ribuan  = ".";		
															
														?>  
														  
															<script type="text/javascript">
																$(window).load(function()
																{      
																	$(document).ready(function() 
																	{
																		$("input<?='#textseqstorefacility'.$rvSCat["KODE_BARANG"];?>").on("keyup blur", function() 
																		{
																			if( this.value != "")
																			{
																				$("<?='#cekseqstorefacility'.$rvSCat["KODE_BARANG"];?>").show();
																				$("input<?='#cekseqstorefacility'.$rvSCat["KODE_BARANG"];?>").prop("checked", this.value != "");						
																			}else{
																				$("<?='#cekseqstorefacility'.$rvSCat["KODE_BARANG"];?>").show();
																				$("input<?='#cekseqstorefacility'.$rvSCat["KODE_BARANG"];?>").prop("checked", this.value != "");						

																			}	
																			/* $("#boxcheck").hide();*/

																		});

																		// don't allow user to manually change the checkbox
																		$("input<?='#cekseqstorefacility'.$rvSCat["KODE_BARANG"];?>").click(function() {
																			$("<?='#cekseqstorefacility'.$rvSCat["KODE_BARANG"];?>").show();
																			return false;
																		});
																	});
																});
															</script>																								
													
														<tr>												
															<td width="10%" class="elnt_container" style="display:none;">
																<center><?=$rvSCat["KODE_GROUP"];?></center>
															</td>
															<td width="17%">
																<center><?=$rvSCat["NAMA_GROUP"];?></center>
															</td>
															<td width="16%">
																<center><input type="checkbox" name="cekseqstorefacility[]" value="<?=$rvSCat["KODE_BARANG"];?>" id="<?='cekseqstorefacility'.$rvSCat["KODE_BARANG"];?>" style="display:show;" />&nbsp;<?=$rvSCat["KODE_BARANG"];?></center>
																
															</td>																
															<td width="20%">
																<?=$rvSCat["NAMA_BARANG"];?>
															</td>															
															<td width="20%">
																<?='Model : <strong>'.$rvSCat["MODEL"].'</strong><br>';?>
																<?='Merk  : <strong>'.$rvSCat["MERK_BARANG"].'</strong><br>';?>
																<?='Harga : <strong>Rp.&nbsp;'.number_format($rvSCat["HARGA_TERAKHIR"], $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?>

															</td>																			
															<td width="14%" style="display:none;">
																<center><input type="checkbox" name="ceksnotag[<?=$rvSCat["NO_TAGING"];?>]" value="<?=$rvSCat["NO_TAGING"];?>" id="ceksnotag" />&nbsp;<?=$rvSCat["NO_TAGING"];?></center>
															</td>														
															<td width="13%">															
																<!--<center><input type="text" name="textseq[<!?=$rvSCat["KODE_BARANG"];?>][<!?=$rvSCat["NO_TAGING"];?>]" id="texts" style="width:52%;"></center>-->
																<!--<div id="texts">-->
																	<center><input type="text" name="textseqstorefacility[<?=$rvSCat["KODE_BARANG"];?>]" id="<?='textseqstorefacility'.$rvSCat["KODE_BARANG"];?>" style="width:52%;"></center>
																<!--</div>-->
															</td>																
															<td width="10%" style="display:none;">
																<?=$rvSCat["BARU_EQ_GD"];?>
															</td>
															<td width="11%" style="display:none;">
																<?=$rvSCat["BAIK_SP_GD"];?>
															</td>
															<td width="8%" style="display:none;">
																<?=$rvSCat["RUSAK_EQ_GD"];?>
															</td>
														</tr>
														<? } ?>
														<script src="./js/jquery.min.js.download"></script>														
													</tbody>
												</table>	
												</div>	
											</td>
										</tr>
										</table>								
								</div>
								<!-- ####################### OTHER STORE EQUIPMENTS REPLACEMENT (RQS-03-000124) ################################ -->								
								<div class="<?='kode_tipebrgRQS-03-000124replace'?>" style="display:none;margin-top:0px;margin-left:0px;">
										<table width="750" border="0" cellspacing="0" style="margin-left:0px;">
										<tr>
											<!--<td></td><!-- FSD WEST -->
											<td><label style="width:auto;"><strong><u>Other Store&nbsp;Equipment&nbsp;List&nbsp;:</u></strong></label><br>
										<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
											<script src="jquery/jquery.min.js"></script>
											<script>
											$(document).ready(function(){
											  $("#otherstoresrc").on("keyup", function() {
												var value = $(this).val().toLowerCase();
												$("#myCodesotherstore tr").filter(function() {
												  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
												});
											  });
											});
											</script>
											<style>
												table.blueTable {
												  border: 1px solid #1C6EA4;
												  background-color: #EEEEEE;
												  width: 100%;
												  text-align: left;
												  border-collapse: collapse;
												  overflow-x:scroll;height:20px;
												  position:relative;
												}
												table.blueTable td, table.blueTable th {
												  border: 1px solid #AAAAAA;
												  padding: 3px 2px;	
												}
												table.blueTable tbody td {
												  font-size: 13px;
												}
												table.blueTable tr:nth-child(even) {
												  background: #D0E4F5;
												}
												table.blueTable thead {
												  background: #1C6EA4;
												  background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  border-bottom: 2px solid #444444;
												}
												table.blueTable thead th {
												  font-size: 12px;
												  text-align:center;
												  font-weight: bold;
												  color: #FFFFFF;
												  border-left: 2px solid #D0E4F5;
												}
												table.blueTable thead th:first-child {
												  border-left: none;
												}

												table.blueTable tfoot {
												  font-size: 14px;
												  font-weight: bold;
												  color: #FFFFFF;
												  background: #D0E4F5;
												  background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  border-top: 2px solid #444444;
												}
												table.blueTable tfoot td {
												  font-size: 14px;
												}
												table.blueTable tfoot .links {
												  text-align: right;
												}
												table.blueTable tfoot .links a{
												  display: inline-block;
												  background: #1C6EA4;
												  color: #FFFFFF;
												  padding: 2px 8px;
												  border-radius: 5px;
												}			
											</style>
											

											<input id="otherstoresrc" type="text" placeholder="Search.." style="margin-top:20px;">
											
												<table class="blueTable" border="1"> 
													<thead>
													<tr>
													
														<?  
														$objConnect = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
														?>														
														<th width="17%">Nama&nbsp;Grp</th>
														<th width="14%">Kode&nbsp;Barang&nbsp;</th>
														<th width="20%">Nama&nbsp;Barang&nbsp;</th>													
														<th width="22%">Info&nbsp;Detail</th>	
														<th width="17%" style="display:none;">No&nbsp;Taging&nbsp;</th>
														<th width="15%">QTY</th>
														<th width="10%" style="display:none;">STK<br>BARU</th>
														<th width="10%" style="display:none;">STK<br>BAIK</th>
														<th width="10%" style="display:none;">STK<br>LAMA</th>
													</tr>													
													</thead>
												</table>								
												<script src="./js/jquery-1.9.1.js.download"></script>
												<div style="width:100%; height:350px; overflow:auto;position:relative;">
												<table class="blueTable" border="1">
													<tbody id="myCodesotherstore">
														<?  
														$qvSCat =  "SELECT FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE AS KODE_BARANG,
																	FSDBRGEQASSET_NEW.ITEM_NAME AS NAMA_BARANG,FSDBRGEQASSET_NEW.ITEM_BRAND AS MERK_BARANG,
																	FSDBRGEQASSET_NEW.ITEM_MODEL AS MODEL,
																	FSDBRGEQASSET_NEW.ITEM_PRICE AS HARGA_TERAKHIR
																	FROM FSDBRGEQ_NEW
																	JOIN FSDSGROUP ON FSDBRGEQ_NEW.GROUP_CODE = FSDSGROUP.KODE_GROUP
																	JOIN FSDBRGEQASSET_NEW ON FSDBRGEQ_NEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
																	JOIN FSDEQTYPE_NEW ON FSDBRGEQ_NEW.EQTYPECODE = FSDEQTYPE_NEW.EQTYPECODE
																	WHERE FSDEQTYPE_NEW.EQTYPECODE = 'EQ0013' 
																	GROUP BY FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE,
																	FSDBRGEQASSET_NEW.ITEM_NAME,FSDBRGEQASSET_NEW.ITEM_BRAND,
																	FSDBRGEQASSET_NEW.ITEM_MODEL,FSDBRGEQASSET_NEW.ITEM_PRICE
																	ORDER BY FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE,
																	FSDBRGEQASSET_NEW.ITEM_NAME,FSDBRGEQASSET_NEW.ITEM_BRAND,
																	FSDBRGEQASSET_NEW.ITEM_MODEL,FSDBRGEQASSET_NEW.ITEM_PRICE ASC";	
														$qobjParse = oci_parse ($objConnect, $qvSCat);  
														oci_execute ($qobjParse,OCI_DEFAULT);   
														while($rvSCat = oci_fetch_array($qobjParse,OCI_BOTH))  
														{  
															$jumlah_desimal  = "0";
															$pemisah_desimal = ".";
															$pemisah_ribuan  = ".";		
															
														?>  
														  
															<script type="text/javascript">
																$(window).load(function()
																{      
																	$(document).ready(function() 
																	{
																		$("input<?='#textseqotherstore'.$rvSCat["KODE_BARANG"];?>").on("keyup blur", function() 
																		{
																			if( this.value != "")
																			{
																				$("<?='#cekseqotherstore'.$rvSCat["KODE_BARANG"];?>").show();
																				$("input<?='#cekseqotherstore'.$rvSCat["KODE_BARANG"];?>").prop("checked", this.value != "");						
																			}else{
																				$("<?='#cekseqotherstore'.$rvSCat["KODE_BARANG"];?>").show();
																				$("input<?='#cekseqotherstore'.$rvSCat["KODE_BARANG"];?>").prop("checked", this.value != "");						

																			}	
																			/* $("#boxcheck").hide();*/

																		});

																		// don't allow user to manually change the checkbox
																		$("input<?='#cekseqotherstore'.$rvSCat["KODE_BARANG"];?>").click(function() {
																			$("<?='#cekseqotherstore'.$rvSCat["KODE_BARANG"];?>").show();
																			return false;
																		});
																	});
																});
															</script>																								
													
														<tr>												
															<td width="10%" class="elnt_container" style="display:none;">
																<center><?=$rvSCat["KODE_GROUP"];?></center>
															</td>
															<td width="17%">
																<center><?=$rvSCat["NAMA_GROUP"];?></center>
															</td>
															<td width="16%">
																<center><input type="checkbox" name="cekseqotherstore[]" value="<?=$rvSCat["KODE_BARANG"];?>" id="<?='cekseqotherstore'.$rvSCat["KODE_BARANG"];?>" style="display:show;" />&nbsp;<?=$rvSCat["KODE_BARANG"];?></center>
																
															</td>																
															<td width="20%">
																<?=$rvSCat["NAMA_BARANG"];?>
															</td>															
															<td width="20%">
																<?='Model : <strong>'.$rvSCat["MODEL"].'</strong><br>';?>
																<?='Merk  : <strong>'.$rvSCat["MERK_BARANG"].'</strong><br>';?>
																<?='Harga : <strong>Rp.&nbsp;'.number_format($rvSCat["HARGA_TERAKHIR"], $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?>

															</td>																			
															<td width="14%" style="display:none;">
																<center><input type="checkbox" name="ceksnotag[<?=$rvSCat["NO_TAGING"];?>]" value="<?=$rvSCat["NO_TAGING"];?>" id="ceksnotag" />&nbsp;<?=$rvSCat["NO_TAGING"];?></center>
															</td>														
															<td width="13%">															
																<!--<center><input type="text" name="textseq[<!?=$rvSCat["KODE_BARANG"];?>][<!?=$rvSCat["NO_TAGING"];?>]" id="texts" style="width:52%;"></center>-->
																<!--<div id="texts">-->
																	<center><input type="text" name="textseqotherstore[<?=$rvSCat["KODE_BARANG"];?>]" id="<?='textseqotherstore'.$rvSCat["KODE_BARANG"];?>" style="width:52%;"></center>
																<!--</div>-->
															</td>																
															<td width="10%" style="display:none;">
																<?=$rvSCat["BARU_EQ_GD"];?>
															</td>
															<td width="11%" style="display:none;">
																<?=$rvSCat["BAIK_SP_GD"];?>
															</td>
															<td width="8%" style="display:none;">
																<?=$rvSCat["RUSAK_EQ_GD"];?>
															</td>
														</tr>
														<? } ?>
														<script src="./js/jquery.min.js.download"></script>														
													</tbody>
												</table>	
												</div>	
											</td>
										</tr>
										</table>								
								</div>
								<!-- ####################### STORE FURNITURE AND FIXTURES  (RQS-03-000125) ######################################### -->								
								<div class="<?='kode_tipebrgRQS-03-000125replace'?>" style="display:none;margin-top:0px;margin-left:0px;">
										<table width="750" border="0" cellspacing="0" style="margin-left:0px;">
										<tr>
											<!--<td></td><!-- FSD WEST -->
											<td><label style="width:auto;"><strong><u>Store Furniture And Fixtures&nbsp;List&nbsp;:</u></strong></label><br>
										<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
											<script src="jquery/jquery.min.js"></script>
											<script>
											$(document).ready(function(){
											  $("#storefurniturefixturesrc").on("keyup", function() {
												var value = $(this).val().toLowerCase();
												$("#myCodesstorefurniturefixture tr").filter(function() {
												  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
												});
											  });
											});
											</script>
											<style>
												table.blueTable {
												  border: 1px solid #1C6EA4;
												  background-color: #EEEEEE;
												  width: 100%;
												  text-align: left;
												  border-collapse: collapse;
												  overflow-x:scroll;height:20px;
												  position:relative;
												}
												table.blueTable td, table.blueTable th {
												  border: 1px solid #AAAAAA;
												  padding: 3px 2px;	
												}
												table.blueTable tbody td {
												  font-size: 13px;
												}
												table.blueTable tr:nth-child(even) {
												  background: #D0E4F5;
												}
												table.blueTable thead {
												  background: #1C6EA4;
												  background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
												  border-bottom: 2px solid #444444;
												}
												table.blueTable thead th {
												  font-size: 12px;
												  text-align:center;
												  font-weight: bold;
												  color: #FFFFFF;
												  border-left: 2px solid #D0E4F5;
												}
												table.blueTable thead th:first-child {
												  border-left: none;
												}

												table.blueTable tfoot {
												  font-size: 14px;
												  font-weight: bold;
												  color: #FFFFFF;
												  background: #D0E4F5;
												  background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
												  border-top: 2px solid #444444;
												}
												table.blueTable tfoot td {
												  font-size: 14px;
												}
												table.blueTable tfoot .links {
												  text-align: right;
												}
												table.blueTable tfoot .links a{
												  display: inline-block;
												  background: #1C6EA4;
												  color: #FFFFFF;
												  padding: 2px 8px;
												  border-radius: 5px;
												}			
											</style>
											

											<input id="storefurniturefixturesrc" type="text" placeholder="Search.." style="margin-top:20px;">
											
												<table class="blueTable" border="1"> 
													<thead>
													<tr>
													
														<?  
														$objConnect = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
														?>														
														<th width="17%">Nama&nbsp;Grp</th>
														<th width="14%">Kode&nbsp;Barang&nbsp;</th>
														<th width="20%">Nama&nbsp;Barang&nbsp;</th>													
														<th width="22%">Info&nbsp;Detail</th>	
														<th width="17%" style="display:none;">No&nbsp;Taging&nbsp;</th>
														<th width="15%">QTY</th>
														<th width="10%" style="display:none;">STK<br>BARU</th>
														<th width="10%" style="display:none;">STK<br>BAIK</th>
														<th width="10%" style="display:none;">STK<br>LAMA</th>
													</tr>													
													</thead>
												</table>								
												<script src="./js/jquery-1.9.1.js.download"></script>
												<div style="width:100%; height:350px; overflow:auto;position:relative;">
												<table class="blueTable" border="1">
													<tbody id="myCodesstorefurniturefixture">
														<?  
														$qvSCat =  "SELECT FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE AS KODE_BARANG,
																	FSDBRGEQASSET_NEW.ITEM_NAME AS NAMA_BARANG,FSDBRGEQASSET_NEW.ITEM_BRAND AS MERK_BARANG,
																	FSDBRGEQASSET_NEW.ITEM_MODEL AS MODEL,
																	FSDBRGEQASSET_NEW.ITEM_PRICE AS HARGA_TERAKHIR
																	FROM FSDBRGEQ_NEW
																	JOIN FSDSGROUP ON FSDBRGEQ_NEW.GROUP_CODE = FSDSGROUP.KODE_GROUP
																	JOIN FSDBRGEQASSET_NEW ON FSDBRGEQ_NEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
																	JOIN FSDEQTYPE_NEW ON FSDBRGEQ_NEW.EQTYPECODE = FSDEQTYPE_NEW.EQTYPECODE
																	WHERE FSDEQTYPE_NEW.EQTYPECODE = 'EQ0014' 
																	GROUP BY FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE,
																	FSDBRGEQASSET_NEW.ITEM_NAME,FSDBRGEQASSET_NEW.ITEM_BRAND,
																	FSDBRGEQASSET_NEW.ITEM_MODEL,FSDBRGEQASSET_NEW.ITEM_PRICE
																	ORDER BY FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE,
																	FSDBRGEQASSET_NEW.ITEM_NAME,FSDBRGEQASSET_NEW.ITEM_BRAND,
																	FSDBRGEQASSET_NEW.ITEM_MODEL,FSDBRGEQASSET_NEW.ITEM_PRICE ASC";	
														$qobjParse = oci_parse ($objConnect, $qvSCat);  
														oci_execute ($qobjParse,OCI_DEFAULT);   
														while($rvSCat = oci_fetch_array($qobjParse,OCI_BOTH))  
														{  
															$jumlah_desimal  = "0";
															$pemisah_desimal = ".";
															$pemisah_ribuan  = ".";		
															
														?>  
														  
															<script type="text/javascript">
																$(window).load(function()
																{      
																	$(document).ready(function() 
																	{
																		$("input<?='#textseqstorefurniturefixtures'.$rvSCat["KODE_BARANG"];?>").on("keyup blur", function() 
																		{
																			if( this.value != "")
																			{
																				$("<?='#cekseqstorefurniturefixtures'.$rvSCat["KODE_BARANG"];?>").show();
																				$("input<?='#cekseqstorefurniturefixtures'.$rvSCat["KODE_BARANG"];?>").prop("checked", this.value != "");						
																			}else{
																				$("<?='#cekseqstorefurniturefixtures'.$rvSCat["KODE_BARANG"];?>").show();
																				$("input<?='#cekseqstorefurniturefixtures'.$rvSCat["KODE_BARANG"];?>").prop("checked", this.value != "");						

																			}	
																			/* $("#boxcheck").hide();*/

																		});

																		// don't allow user to manually change the checkbox
																		$("input<?='#cekseqstorefurniturefixtures'.$rvSCat["KODE_BARANG"];?>").click(function() {
																			$("<?='#cekseqstorefurniturefixtures'.$rvSCat["KODE_BARANG"];?>").show();
																			return false;
																		});
																	});
																});
															</script>																								
													
														<tr>												
															<td width="10%" class="elnt_container" style="display:none;">
																<center><?=$rvSCat["KODE_GROUP"];?></center>
															</td>
															<td width="17%">
																<center><?=$rvSCat["NAMA_GROUP"];?></center>
															</td>
															<td width="16%">
																<center><input type="checkbox" name="cekseqstorefurniturefixtures[]" value="<?=$rvSCat["KODE_BARANG"];?>" id="<?='cekseqstorefurniturefixtures'.$rvSCat["KODE_BARANG"];?>" style="display:show;" />&nbsp;<?=$rvSCat["KODE_BARANG"];?></center>
																
															</td>																
															<td width="20%">
																<?=$rvSCat["NAMA_BARANG"];?>
															</td>															
															<td width="20%">
																<?='Model : <strong>'.$rvSCat["MODEL"].'</strong><br>';?>
																<?='Merk  : <strong>'.$rvSCat["MERK_BARANG"].'</strong><br>';?>
																<?='Harga : <strong>Rp.&nbsp;'.number_format($rvSCat["HARGA_TERAKHIR"], $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?>

															</td>																			
															<td width="14%" style="display:none;">
																<center><input type="checkbox" name="ceksnotag[<?=$rvSCat["NO_TAGING"];?>]" value="<?=$rvSCat["NO_TAGING"];?>" id="ceksnotag" />&nbsp;<?=$rvSCat["NO_TAGING"];?></center>
															</td>														
															<td width="13%">															
																<!--<center><input type="text" name="textseq[<!?=$rvSCat["KODE_BARANG"];?>][<!?=$rvSCat["NO_TAGING"];?>]" id="texts" style="width:52%;"></center>-->
																<!--<div id="texts">-->
																	<center><input type="text" name="textseqstorefurniturefixtures[<?=$rvSCat["KODE_BARANG"];?>]" id="<?='textseqstorefurniturefixtures'.$rvSCat["KODE_BARANG"];?>" style="width:52%;"></center>
																<!--</div>-->
															</td>																
															<td width="10%" style="display:none;">
																<?=$rvSCat["BARU_EQ_GD"];?>
															</td>
															<td width="11%" style="display:none;">
																<?=$rvSCat["BAIK_SP_GD"];?>
															</td>
															<td width="8%" style="display:none;">
																<?=$rvSCat["RUSAK_EQ_GD"];?>
															</td>
														</tr>
														<? } ?>
														<script src="./js/jquery.min.js.download"></script>														
													</tbody>
												</table>	
												</div>	
											</td>
										</tr>
										</table>								
								</div>
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
						<!--<div class="row row-sm-offset">
							<div class="col-md-12 multi-horizontal">
							
								<button href="" type="submit" class="btn btn-primary btn-form display-4">SAVE</button>

							</div>
						</div>		-->				
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
					//add by aryn
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
							

						$('#kode_tipebrgRQS-03-000112replace').click(function() 
						{
						  $('.kode_tipebrgRQS-03-000112replace').toggle('slow', function() {
						  }); 	  
							if (display === true ) {
							  $( ".kode_tipebrgRQS-03-000112replace" ).show();
							} else if (display === false ) {
							  $( ".kode_tipebrgRQS-03-000112replace" ).hide();
							};	   
						});
						
						$('#kode_tipebrgRQS-03-000113replace').click(function() 
						{
						  $('.kode_tipebrgRQS-03-000113replace').toggle('slow', function() {
						  }); 	  
							if (display === true ) {
							  $( ".kode_tipebrgRQS-03-000113replace" ).show();
							} else if (display === false ) {
							  $( ".kode_tipebrgRQS-03-000113replace" ).hide();
							};	   
						});
						
						$('#kode_tipebrgRQS-03-000114replace').click(function() 
						{
						  $('.kode_tipebrgRQS-03-000114replace').toggle('slow', function() {
						  }); 	  
							if (display === true ) {
							  $( ".kode_tipebrgRQS-03-000114replace" ).show();
							} else if (display === false ) {
							  $( ".kode_tipebrgRQS-03-000114replace" ).hide();
							};	   
						});
						$('#kode_tipebrgRQS-03-000115replace').click(function() 
						{
						  $('.kode_tipebrgRQS-03-000115replace').toggle('slow', function() {
						  }); 	  
							if (display === true ) {
							  $( ".kode_tipebrgRQS-03-000115replace" ).show();
							} else if (display === false ) {
							  $( ".kode_tipebrgRQS-03-000115replace" ).hide();
							};	   
						});
						$('#kode_tipebrgRQS-03-000116replace').click(function() 
						{
						  $('.kode_tipebrgRQS-03-000116replace').toggle('slow', function() {
						  }); 	  
							if (display === true ) {
							  $( ".kode_tipebrgRQS-03-000116replace" ).show();
							} else if (display === false ) {
							  $( ".kode_tipebrgRQS-03-000116replace" ).hide();
							};	   
						});
						$('#kode_tipebrgRQS-03-000117replace').click(function() 
						{
						  $('.kode_tipebrgRQS-03-000117replace').toggle('slow', function() {
						  }); 	  
							if (display === true ) {
							  $( ".kode_tipebrgRQS-03-000117replace" ).show();
							} else if (display === false ) {
							  $( ".kode_tipebrgRQS-03-000117replace" ).hide();
							};	   
						});
						$('#kode_tipebrgRQS-03-000118replace').click(function() 
						{
						  $('.kode_tipebrgRQS-03-000118replace').toggle('slow', function() {
						  }); 	  
							if (display === true ) {
							  $( ".kode_tipebrgRQS-03-000118replace" ).show();
							} else if (display === false ) {
							  $( ".kode_tipebrgRQS-03-000118replace" ).hide();
							};	   
						});
						$('#kode_tipebrgRQS-03-000119replace').click(function() 
						{
						  $('.kode_tipebrgRQS-03-000119replace').toggle('slow', function() {
						  }); 	  
							if (display === true ) {
							  $( ".kode_tipebrgRQS-03-000119replace" ).show();
							} else if (display === false ) {
							  $( ".kode_tipebrgRQS-03-000119replace" ).hide();
							};	   
						});
						$('#kode_tipebrgRQS-03-000120replace').click(function() 
						{
						  $('.kode_tipebrgRQS-03-000120replace').toggle('slow', function() {
						  }); 	  
							if (display === true ) {
							  $( ".kode_tipebrgRQS-03-000120replace" ).show();
							} else if (display === false ) {
							  $( ".kode_tipebrgRQS-03-000120replace" ).hide();
							};	   
						});
						$('#kode_tipebrgRQS-03-000121replace').click(function() 
						{
						  $('.kode_tipebrgRQS-03-000121replace').toggle('slow', function() {
						  }); 	  
							if (display === true ) {
							  $( ".kode_tipebrgRQS-03-000121replace" ).show();
							} else if (display === false ) {
							  $( ".kode_tipebrgRQS-03-000121replace" ).hide();
							};	   
						});
						$('#kode_tipebrgRQS-03-000122replace').click(function() 
						{
						  $('.kode_tipebrgRQS-03-000122replace').toggle('slow', function() {
						  }); 	  
							if (display === true ) {
							  $( ".kode_tipebrgRQS-03-000122replace" ).show();
							} else if (display === false ) {
							  $( ".kode_tipebrgRQS-03-000122replace" ).hide();
							};	   
						});
						$('#kode_tipebrgRQS-03-000123replace').click(function() 
						{
						  $('.kode_tipebrgRQS-03-000123replace').toggle('slow', function() {
						  }); 	  
							if (display === true ) {
							  $( ".kode_tipebrgRQS-03-000123replace" ).show();
							} else if (display === false ) {
							  $( ".kode_tipebrgRQS-03-000123replace" ).hide();
							};	   
						});
						$('#kode_tipebrgRQS-03-000124replace').click(function() 
						{
						  $('.kode_tipebrgRQS-03-000124replace').toggle('slow', function() {
						  }); 	  
							if (display === true ) {
							  $( ".kode_tipebrgRQS-03-000124replace" ).show();
							} else if (display === false ) {
							  $( ".kode_tipebrgRQS-03-000124replace" ).hide();
							};	   
						});
						$('#kode_tipebrgRQS-03-000125replace').click(function() 
						{
						  $('.kode_tipebrgRQS-03-000125replace').toggle('slow', function() {
						  }); 	  
							if (display === true ) {
							  $( ".kode_tipebrgRQS-03-000125replace" ).show();
							} else if (display === false ) {
							  $( ".kode_tipebrgRQS-03-000125replace" ).hide();
							};	   
						});
					</script>					