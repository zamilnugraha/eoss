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
														$qvSCatReplace = "SELECT FSDMSTTRX_STORENEW.*, FSDBRGEQASSET_NEW.* FROM FSDMSTTRX_STORENEW
																		 JOIN FSDBRGEQASSET_NEW ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
																		 WHERE  
																		FSDMSTTRX_STORENEW.EQTYPECODE IN('EQ0001')";	
																		 
														$qobjParseReplace = oci_parse ($objConnectReplace, $qvSCatReplace);  
																		    oci_execute ($qobjParseReplace,OCI_DEFAULT);   
														while($rvSCatReplace = oci_fetch_object($qobjParseReplace,OCI_BOTH))  
														{  
															$jumlah_desimal  = "0";
															$pemisah_desimal = ".";
															$pemisah_ribuan  = ".";		
															
														?> 																					
													
														<tr>
															<td width="16%">
																<center><?=$rvSCatReplace->ITEM_CODE;?></center>
															</td>																
															<td width="20%">
																<?=$rvSCatReplace->ITEM_NAME;?>
															</td>
															<td width="17%">
																<center><?=$rvSCatReplace->NOMOR_TAGING;?></center>
															</td>															
															<td width="20%">
																<?='Model Name : <strong>'.$rvSCatReplace->ITEM_MODEL.'</strong><br>';?>
																<?='Brand Name  : <strong>'.$rvSCatReplace->ITEM_BRAND.'</strong><br>';?>
																<?='Book Age  : <strong>'.$rvSCatReplace->UMUR_BUKU.' </strong><br>';?>
																<?='Book Value : <strong>Rp.&nbsp;'.number_format($rvSCatReplace->NILAI_BUKU, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?>
															</td>													
															<td width="13%">
																
																<script>
																function <?='myFunction'.$rvSCatReplace->ITEM_CODE;?>() {
																  var checkBox = document.getElementById("<?=$rvSCatReplace->ITEM_CODE;?>");
																  var text = document.getElementById("<?='text'.$rvSCatReplace->ITEM_CODE;?>");
																  if (checkBox.checked == true){
																	text.style.display = "block";
																  } else {
																	 text.style.display = "none";
																  }
																}
																</script>		
															   <?	$thisId = 'cekseqcoldreplace'.$rvSCatReplace->NOMOR_TAGING;
															   ?>
																<center><input type="checkBox" id="<?=$rvSCatReplace->ITEM_CODE;?>" onclick="<?='myFunction'.$rvSCatReplace->ITEM_CODE;?>()" name="cekseqcoldreplace[]" value="<?=$rvSCatReplace->NOMOR_TAGING;?>" style="display:show;" /></center>
																<!--<center><input type="checkbox" id="<!?='cekseqcoldreplaceA00337A120320192';?>"  onclick="myFunction()"></center>-->
																<!-- cekseqcoldreplaceA00337A120320192 -->
																<!--<p id="text" style="display:none"><!?='cekseqcoldreplace'.$rvSCatReplace["NOMOR_TAGING"];?></p>-->
																<p id="<?='text'.$rvSCatReplace->ITEM_CODE?>" style="display:none"><?=$rvSCatReplace->ITEM_CODE;?></p>

																													
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