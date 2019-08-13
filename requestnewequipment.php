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
							
							.RQS-03-000112{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000113{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000114{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000115{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000116{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000117{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000118{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000119{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000120{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000121{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000122{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000123{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000124{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000125{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000112info{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000113info{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000114info{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000115info{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000116info{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000117info{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000118info{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000119info{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000120info{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000121info{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000122info{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000123info{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000124info{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000125info{ background: (#7fd9fc, #6576aa); }
							</style>							
                            <div class="col-md-8 multi-horizontal" data-for="namefield" style="margin-left:-100px;">
                                <div class="form-group">
                                    <input id="<?='kode_tipebrgRQS-03-000112'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000112'?>"> <?=STRTOUPPER('cold')?>
                                    <input id="<?='kode_tipebrgRQS-03-000113'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000113'?>"> <?=STRTOUPPER('heat')?>
                                    <input id="<?='kode_tipebrgRQS-03-000114'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000114'?>"> <?=STRTOUPPER('food processing')?><!--<br>-->
                                    <input style="display:none;" id="<?='kode_tipebrgRQS-03-000115'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000115'?>"> <!--?=STRTOUPPER('prep and dumb table')?-->
                                    <input style="display:none;" id="<?='kode_tipebrgRQS-03-000116'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000116'?>"> <!--?=STRTOUPPER('container/dispenser and display')?--><br>
                                    <input style="display:none;" id="<?='kode_tipebrgRQS-03-000117'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000117'?>"> <!--?=STRTOUPPER('cabinet and racking')?-->
                                    <input style="display:none;" id="<?='kode_tipebrgRQS-03-000118'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000118'?>"> <!--?=STRTOUPPER('air conditioning')?-->
                                    <input style="display:none;" id="<?='kode_tipebrgRQS-03-000119'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000119'?>"> <!--?=STRTOUPPER('sound system and multimedia')?--><br>
                                    <input style="display:none;" id="<?='kode_tipebrgRQS-03-000120'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000120'?>"> <!--?=STRTOUPPER('playland')?-->
                                    <input style="display:none;" id="<?='kode_tipebrgRQS-03-000121'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000121'?>"> <!--?=STRTOUPPER('coffee and krusher counter')?-->
                                    <input style="display:none;" id="<?='kode_tipebrgRQS-03-000122'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000122'?>"> <!--?=STRTOUPPER('birthday center and drive-thru')?--><br>
                                    <input style="display:none;" id="<?='kode_tipebrgRQS-03-000123'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000123'?>"> <!--?=STRTOUPPER('store facility system')?-->
                                    <input style="display:none;" id="<?='kode_tipebrgRQS-03-000124'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000124'?>"> <!--?=STRTOUPPER('other store equipment')?-->
                                    <input style="display:none;" id="<?='kode_tipebrgRQS-03-000125'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000125'?>"> <!--?=STRTOUPPER('store furniture and fixtures')?-->
								
								<!-- ########################### COLD EQUIPMENT (RQS-03-000112) ################################################ -->
								<div class="<?='kode_tipebrgRQS-03-000112'?>" style="display:none;margin-top:0px;margin-left:0px;">
										<table width="750" border="0" cellspacing="0" style="margin-left:0px;">
										<tr>
											<!--<td></td><!-- FSD WEST -->
											<td><label style="width:auto;"><strong><u>Cold&nbsp;Equipment&nbsp;List&nbsp;:</u></strong></label><br>
										<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
											<script src="jquery/jquery.min.js"></script>
											<script>
											$(document).ready(function(){
											  $("#coldequipmentsrc").on("keyup", function() {
												var value = $(this).val().toLowerCase();
												$("#myCodescoldEQ tr").filter(function() {
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
											

											<input id="coldequipmentsrc" type="text" placeholder="Search.." style="margin-top:20px;">
											
												<table class="blueTable" border="1"> 
													<thead>
													<tr>
													
														<?  
														$objConnect = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
														?>														
														<th width="17%">Group&nbsp;Name</th>
														<th width="14%">Item&nbsp;Code&nbsp;</th>
														<th width="20%">Item&nbsp;Name&nbsp;</th>													
														<th width="22%">Info&nbsp;Detail</th>	
														<th width="17%" style="display:none;">Taging&nbsp;Number&nbsp;</th>
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
													<tbody id="myCodescoldEQ">
														<?  
														#$objConnect2 = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
														/*
														$qvSCat = "SELECT FSDSGROUP.KODE_GROUP, FSDSGROUP.NAMA_GROUP, FSDBRGEQ.KODE_BARANG, 
																	FSDBRGEQ.NAMA_BARANG,
																	FSDSTEQG.BARU_EQ_GD, FSDSTEQG.BAIK_SP_GD, FSDSTEQG.RUSAK_EQ_GD
																	from FSDBRGEQ
																	JOIN FSDSGROUP ON FSDSGROUP.KODE_GROUP = FSDBRGEQ.KODE_GRUP
																	JOIN FSDSTEQG ON FSDSTEQG.KODE_BARANG = FSDBRGEQ.KODE_BARANG
																	
																	WHERE FSDSGROUP.NAMA_GROUP IN('Chiller','Freezer','Pressure Fryer','Trolley','Emergency Lamp','Meja','Kursi','Camera')
																	ORDER BY FSDSGROUP.KODE_GROUP, FSDBRGEQ.KODE_BARANG ASC";  
														*/
														/**
														$qvSCat =  "SELECT DISTINCT FSDSGROUP.NAMA_GROUP, FSDBRGEQ.KODE_BARANG, 
																	FSDBRGEQ.NAMA_BARANG,FSDBRGEQ.MODEL,FSDBRGEQ.MERK_BARANG,
																	FSDHRGER.HARGA_RATA2, FSDHRGER.HARGA_TERAKHIR
																	from FSDBRGEQ
																	JOIN FSDSGROUP ON FSDBRGEQ.KODE_GRUP = FSDSGROUP.KODE_GROUP
																	JOIN FSDHRGER ON FSDBRGEQ.KODE_BARANG = FSDHRGER.KODE_BARANG_EQ
																	WHERE FSDSGROUP.KODE_GROUP IN('027','039','043','050','067','042')
																	GROUP BY FSDSGROUP.NAMA_GROUP, FSDBRGEQ.KODE_BARANG, 
																	FSDBRGEQ.NAMA_BARANG,FSDBRGEQ.MODEL,FSDBRGEQ.MERK_BARANG,
																	FSDHRGER.HARGA_RATA2, FSDHRGER.HARGA_TERAKHIR
																	ORDER BY FSDBRGEQ.KODE_BARANG ASC";	
														**/	
														$qvSCat =  "SELECT FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE AS KODE_BARANG,
																	FSDBRGEQASSET_NEW.ITEM_NAME AS NAMA_BARANG,FSDBRGEQASSET_NEW.ITEM_BRAND AS MERK_BARANG,
																	FSDBRGEQASSET_NEW.ITEM_MODEL AS MODEL,
																	FSDBRGEQASSET_NEW.ITEM_PRICE AS HARGA_TERAKHIR
																	FROM FSDBRGEQ_NEW
																	JOIN FSDSGROUP ON FSDBRGEQ_NEW.GROUP_CODE = FSDSGROUP.KODE_GROUP
																	JOIN FSDBRGEQASSET_NEW ON FSDBRGEQ_NEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
																	JOIN FSDEQTYPE_NEW ON FSDBRGEQ_NEW.EQTYPECODE = FSDEQTYPE_NEW.EQTYPECODE
																	WHERE FSDEQTYPE_NEW.EQTYPECODE = 'EQ0001' 
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
																		$("input<?='#textseqcold'.$rvSCat["KODE_BARANG"];?>").on("keyup blur", function() 
																		{
																			if( this.value != "")
																			{
																				$("<?='#cekseqcold'.$rvSCat["KODE_BARANG"];?>").show();
																				$("input<?='#cekseqcold'.$rvSCat["KODE_BARANG"];?>").prop("checked", this.value != "");						
																			}else{
																				$("<?='#cekseqcold'.$rvSCat["KODE_BARANG"];?>").show();
																				$("input<?='#cekseqcold'.$rvSCat["KODE_BARANG"];?>").prop("checked", this.value != "");						

																			}	
																			/* $("#boxcheck").hide();*/

																		});

																		// don't allow user to manually change the checkbox
																		$("input<?='#cekseqcold'.$rvSCat["KODE_BARANG"];?>").click(function() {
																			$("<?='#cekseqcold'.$rvSCat["KODE_BARANG"];?>").show();
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
																<center><input type="checkbox" name="cekseqcold[]" value="<?=$rvSCat["KODE_BARANG"];?>" id="<?='cekseqcold'.$rvSCat["KODE_BARANG"];?>" style="display:show;" />&nbsp;<?=$rvSCat["KODE_BARANG"];?></center>
																
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
																	<center><input type="text" name="textseqcold[<?=$rvSCat["KODE_BARANG"];?>]" id="<?='textseqcold'.$rvSCat["KODE_BARANG"];?>" style="width:52%;"></center>
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
								<!-- ############################# HEAT EQUIPMENT (RQS-03-000113) ############################################## -->
								<div class="<?='kode_tipebrgRQS-03-000113'?>" style="display:none;margin-top:0px;margin-left:0px;">
										<table width="750" border="0" cellspacing="0" style="margin-left:0px;">
										<tr>
											<!--<td></td><!-- FSD WEST -->
											<td><label style="width:auto;"><strong><u>Heat&nbsp;Equipment&nbsp;List&nbsp;:</u></strong></label><br>
										<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
											<script src="jquery/jquery.min.js"></script>
											<script>
											$(document).ready(function(){
											  $("#heatequipmentsrc").on("keyup", function() {
												var value = $(this).val().toLowerCase();
												$("#myCodesheatEQ tr").filter(function() {
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
											

											<input id="heatequipmentsrc" type="text" placeholder="Search.." style="margin-top:20px;">
											
												<table class="blueTable" border="1"> 
													<thead>
													<tr>
													
														<?  
														$objConnect = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
														?>														
														<th width="17%">Group&nbsp;Name</th>
														<th width="14%">Item&nbsp;Code&nbsp;</th>
														<th width="20%">Item&nbsp;Name&nbsp;</th>													
														<th width="22%">Info&nbsp;Detail</th>	
														<th width="17%" style="display:none;">Taging&nbsp;Number&nbsp;</th>
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
													<tbody id="myCodesheatEQ">
														<?  
														#$objConnect2 = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
														/*
														$qvSCat = "SELECT FSDSGROUP.KODE_GROUP, FSDSGROUP.NAMA_GROUP, FSDBRGEQ.KODE_BARANG, 
																	FSDBRGEQ.NAMA_BARANG,
																	FSDSTEQG.BARU_EQ_GD, FSDSTEQG.BAIK_SP_GD, FSDSTEQG.RUSAK_EQ_GD
																	from FSDBRGEQ
																	JOIN FSDSGROUP ON FSDSGROUP.KODE_GROUP = FSDBRGEQ.KODE_GRUP
																	JOIN FSDSTEQG ON FSDSTEQG.KODE_BARANG = FSDBRGEQ.KODE_BARANG
																	
																	WHERE FSDSGROUP.NAMA_GROUP IN('Chiller','Freezer','Pressure Fryer','Trolley','Emergency Lamp','Meja','Kursi','Camera')
																	ORDER BY FSDSGROUP.KODE_GROUP, FSDBRGEQ.KODE_BARANG ASC";  
														*/
														/*
														$qvSCat =  "SELECT DISTINCT FSDSGROUP.NAMA_GROUP, FSDBRGEQ.KODE_BARANG, 
																	FSDBRGEQ.NAMA_BARANG,FSDBRGEQ.MODEL,FSDBRGEQ.MERK_BARANG,
																	FSDHRGER.HARGA_RATA2, FSDHRGER.HARGA_TERAKHIR
																	from FSDBRGEQ
																	JOIN FSDSGROUP ON FSDBRGEQ.KODE_GRUP = FSDSGROUP.KODE_GROUP
																	JOIN FSDHRGER ON FSDBRGEQ.KODE_BARANG = FSDHRGER.KODE_BARANG_EQ
																	WHERE FSDSGROUP.KODE_GROUP IN('031','032','030','015','017','019','033','041')
																	GROUP BY FSDSGROUP.NAMA_GROUP, FSDBRGEQ.KODE_BARANG, 
																	FSDBRGEQ.NAMA_BARANG,FSDBRGEQ.MODEL,FSDBRGEQ.MERK_BARANG,
																	FSDHRGER.HARGA_RATA2, FSDHRGER.HARGA_TERAKHIR
																	ORDER BY FSDBRGEQ.KODE_BARANG ASC";														
														*/
														$qvSCat =  "SELECT FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE AS KODE_BARANG,
																	FSDBRGEQASSET_NEW.ITEM_NAME AS NAMA_BARANG,FSDBRGEQASSET_NEW.ITEM_BRAND AS MERK_BARANG,
																	FSDBRGEQASSET_NEW.ITEM_MODEL AS MODEL,
																	FSDBRGEQASSET_NEW.ITEM_PRICE AS HARGA_TERAKHIR
																	FROM FSDBRGEQ_NEW
																	JOIN FSDSGROUP ON FSDBRGEQ_NEW.GROUP_CODE = FSDSGROUP.KODE_GROUP
																	JOIN FSDBRGEQASSET_NEW ON FSDBRGEQ_NEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
																	JOIN FSDEQTYPE_NEW ON FSDBRGEQ_NEW.EQTYPECODE = FSDEQTYPE_NEW.EQTYPECODE
																	WHERE FSDEQTYPE_NEW.EQTYPECODE = 'EQ0002' 
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
																		$("input<?='#textseqheat'.$rvSCat["KODE_BARANG"];?>").on("keyup blur", function() 
																		{
																			if( this.value != "")
																			{
																				$("<?='#cekseqheat'.$rvSCat["KODE_BARANG"];?>").show();
																				$("input<?='#cekseqheat'.$rvSCat["KODE_BARANG"];?>").prop("checked", this.value != "");						
																			}else{
																				$("<?='#cekseqheat'.$rvSCat["KODE_BARANG"];?>").show();
																				$("input<?='#cekseqheat'.$rvSCat["KODE_BARANG"];?>").prop("checked", this.value != "");						

																			}	
																			/* $("#boxcheck").hide();*/

																		});

																		// don't allow user to manually change the checkbox
																		$("input<?='#cekseqheat'.$rvSCat["KODE_BARANG"];?>").click(function() {
																			$("<?='#cekseqheat'.$rvSCat["KODE_BARANG"];?>").show();
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
																<center><input type="checkbox" name="cekseqheat[]" value="<?=$rvSCat["KODE_BARANG"];?>" id="<?='cekseqheat'.$rvSCat["KODE_BARANG"];?>" />&nbsp;<?=$rvSCat["KODE_BARANG"];?></center>
																
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
																	<center><input type="text" name="textseqheat[<?=$rvSCat["KODE_BARANG"];?>]" id="<?='textseqheat'.$rvSCat["KODE_BARANG"];?>" style="width:52%;display: show;"></center>
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
															<script>
																$('<?='#ceksheat'.$rvSCat["KODE_BARANG"];?>').change(function() {
																	if(this.checked != true)
																	{
																	  $("<?='#textsheat'.$rvSCat["KODE_BARANG"];?>").hide();
																	}else{
																	  $("<?='#textsheat'.$rvSCat["KODE_BARANG"];?>").show();
																	}
																});
																		  //# sourceURL=pen.js
															</script>	
														<? } ?>		
													</tbody>
												</table>	
												</div>	
											</td>
										</tr>
										</table>								
								</div>	
								<!-- ####################### FOOD PROCESSING EQUIPMENT (RQS-03-000114) ######################################### -->
								<div class="<?='kode_tipebrgRQS-03-000114'?>" style="display:none;margin-top:0px;margin-left:0px;">
										<table width="750" border="0" cellspacing="0" style="margin-left:0px;">
										<tr>
											<!--<td></td><!-- FSD WEST -->
											<td><label style="width:auto;"><strong><u>Food Processing&nbsp;Equipment&nbsp;List&nbsp;:</u></strong></label><br>
										<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
											<script src="jquery/jquery.min.js"></script>
											<script>
											$(document).ready(function(){
											  $("#foodprocessingsrc").on("keyup", function() {
												var value = $(this).val().toLowerCase();
												$("#myCodesfoodprocessing tr").filter(function() {
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
											

											<input id="foodprocessingsrc" type="text" placeholder="Search.." style="margin-top:20px;">
											
												<table class="blueTable" border="1"> 
													<thead>
													<tr>
													
														<?  
														$objConnect = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
														?>														
														<th width="17%">Group&nbsp;Name</th>
														<th width="14%">Item&nbsp;Code&nbsp;</th>
														<th width="20%">Item&nbsp;Name&nbsp;</th>													
														<th width="22%">Info&nbsp;Detail</th>	
														<th width="17%" style="display:none;">Taging&nbsp;Number&nbsp;</th>
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
													<tbody id="myCodesfoodprocessing">
														<?  
														#$objConnect2 = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
														/*
														$qvSCat = "SELECT FSDSGROUP.KODE_GROUP, FSDSGROUP.NAMA_GROUP, FSDBRGEQ.KODE_BARANG, 
																	FSDBRGEQ.NAMA_BARANG,
																	FSDSTEQG.BARU_EQ_GD, FSDSTEQG.BAIK_SP_GD, FSDSTEQG.RUSAK_EQ_GD
																	from FSDBRGEQ
																	JOIN FSDSGROUP ON FSDSGROUP.KODE_GROUP = FSDBRGEQ.KODE_GRUP
																	JOIN FSDSTEQG ON FSDSTEQG.KODE_BARANG = FSDBRGEQ.KODE_BARANG
																	
																	WHERE FSDSGROUP.NAMA_GROUP IN('Chiller','Freezer','Pressure Fryer','Trolley','Emergency Lamp','Meja','Kursi','Camera')
																	ORDER BY FSDSGROUP.KODE_GROUP, FSDBRGEQ.KODE_BARANG ASC";  
														*/
														/**
														$qvSCat =  "SELECT DISTINCT FSDSGROUP.NAMA_GROUP, FSDBRGEQ.KODE_BARANG, 
																	FSDBRGEQ.NAMA_BARANG,FSDBRGEQ.MODEL,FSDBRGEQ.MERK_BARANG,
																	FSDHRGER.HARGA_RATA2, FSDHRGER.HARGA_TERAKHIR
																	from FSDBRGEQ
																	JOIN FSDSGROUP ON FSDBRGEQ.KODE_GRUP = FSDSGROUP.KODE_GROUP
																	JOIN FSDHRGER ON FSDBRGEQ.KODE_BARANG = FSDHRGER.KODE_BARANG_EQ
																	WHERE FSDSGROUP.KODE_GROUP IN('027','039','043','050','067','042')
																	GROUP BY FSDSGROUP.NAMA_GROUP, FSDBRGEQ.KODE_BARANG, 
																	FSDBRGEQ.NAMA_BARANG,FSDBRGEQ.MODEL,FSDBRGEQ.MERK_BARANG,
																	FSDHRGER.HARGA_RATA2, FSDHRGER.HARGA_TERAKHIR
																	ORDER BY FSDBRGEQ.KODE_BARANG ASC";	
														**/	
														$qvSCat =  "SELECT FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE AS KODE_BARANG,
																	FSDBRGEQASSET_NEW.ITEM_NAME AS NAMA_BARANG,FSDBRGEQASSET_NEW.ITEM_BRAND AS MERK_BARANG,
																	FSDBRGEQASSET_NEW.ITEM_MODEL AS MODEL,
																	FSDBRGEQASSET_NEW.ITEM_PRICE AS HARGA_TERAKHIR
																	FROM FSDBRGEQ_NEW
																	JOIN FSDSGROUP ON FSDBRGEQ_NEW.GROUP_CODE = FSDSGROUP.KODE_GROUP
																	JOIN FSDBRGEQASSET_NEW ON FSDBRGEQ_NEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
																	JOIN FSDEQTYPE_NEW ON FSDBRGEQ_NEW.EQTYPECODE = FSDEQTYPE_NEW.EQTYPECODE
																	WHERE FSDEQTYPE_NEW.EQTYPECODE = 'EQ0003' 
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
																		$("input<?='#textseqfoodprocessing'.$rvSCat["KODE_BARANG"];?>").on("keyup blur", function() 
																		{
																			if( this.value != "")
																			{
																				$("<?='#cekseqfoodprocessing'.$rvSCat["KODE_BARANG"];?>").show();
																				$("input<?='#cekseqfoodprocessing'.$rvSCat["KODE_BARANG"];?>").prop("checked", this.value != "");						
																			}else{
																				$("<?='#cekseqfoodprocessing'.$rvSCat["KODE_BARANG"];?>").show();
																				$("input<?='#cekseqfoodprocessing'.$rvSCat["KODE_BARANG"];?>").prop("checked", this.value != "");						

																			}	
																			/* $("#boxcheck").hide();*/

																		});

																		// don't allow user to manually change the checkbox
																		$("input<?='#cekseqfoodprocessing'.$rvSCat["KODE_BARANG"];?>").click(function() {
																			$("<?='#cekseqfoodprocessing'.$rvSCat["KODE_BARANG"];?>").show();
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
																<center><input type="checkbox" name="cekseqfoodprocessing[]" value="<?=$rvSCat["KODE_BARANG"];?>" id="<?='cekseqfoodprocessing'.$rvSCat["KODE_BARANG"];?>" style="display:show;" />&nbsp;<?=$rvSCat["KODE_BARANG"];?></center>
																
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
																	<center><input type="text" name="textseqfoodprocessing[<?=$rvSCat["KODE_BARANG"];?>]" id="<?='textseqfoodprocessing'.$rvSCat["KODE_BARANG"];?>" style="width:52%;"></center>
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
								<!-- ####################### PREP AND DUMB TABLE EQUIPMENT (RQS-03-000115) ######################################### -->								
								<div class="<?='kode_tipebrgRQS-03-000115'?>" style="display:none;margin-top:0px;margin-left:0px;">
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
														<th width="17%">Group&nbsp;Name</th>
														<th width="14%">Item&nbsp;Code&nbsp;</th>
														<th width="20%">Item&nbsp;Name&nbsp;</th>													
														<th width="22%">Info&nbsp;Detail</th>	
														<th width="17%" style="display:none;">Taging&nbsp;Number&nbsp;</th>
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
								<div class="<?='kode_tipebrgRQS-03-000116'?>" style="display:none;margin-top:0px;margin-left:0px;">
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
														<th width="17%">Group&nbsp;Name</th>
														<th width="14%">Item&nbsp;Code&nbsp;</th>
														<th width="20%">Item&nbsp;Name&nbsp;</th>													
														<th width="22%">Info&nbsp;Detail</th>	
														<th width="17%" style="display:none;">Taging&nbsp;Number&nbsp;</th>
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
								<div class="<?='kode_tipebrgRQS-03-000117'?>" style="display:none;margin-top:0px;margin-left:0px;">
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
														<th width="17%">Group&nbsp;Name</th>
														<th width="14%">Item&nbsp;Code&nbsp;</th>
														<th width="20%">Item&nbsp;Name&nbsp;</th>													
														<th width="22%">Info&nbsp;Detail</th>	
														<th width="17%" style="display:none;">Taging&nbsp;Number&nbsp;</th>
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
								<div class="<?='kode_tipebrgRQS-03-000118'?>" style="display:none;margin-top:0px;margin-left:0px;">
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
														<th width="17%">Group&nbsp;Name</th>
														<th width="14%">Item&nbsp;Code&nbsp;</th>
														<th width="20%">Item&nbsp;Name&nbsp;</th>													
														<th width="22%">Info&nbsp;Detail</th>	
														<th width="17%" style="display:none;">Taging&nbsp;Number&nbsp;</th>
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
								<div class="<?='kode_tipebrgRQS-03-000119'?>" style="display:none;margin-top:0px;margin-left:0px;">
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
														<th width="17%">Group&nbsp;Name</th>
														<th width="14%">Item&nbsp;Code&nbsp;</th>
														<th width="20%">Item&nbsp;Name&nbsp;</th>													
														<th width="22%">Info&nbsp;Detail</th>	
														<th width="17%" style="display:none;">Taging&nbsp;Number&nbsp;</th>
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
								<div class="<?='kode_tipebrgRQS-03-000120'?>" style="display:none;margin-top:0px;margin-left:0px;">
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
														<th width="17%">Group&nbsp;Name</th>
														<th width="14%">Item&nbsp;Code&nbsp;</th>
														<th width="20%">Item&nbsp;Name&nbsp;</th>													
														<th width="22%">Info&nbsp;Detail</th>	
														<th width="17%" style="display:none;">Taging&nbsp;Number&nbsp;</th>
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
								<div class="<?='kode_tipebrgRQS-03-000121'?>" style="display:none;margin-top:0px;margin-left:0px;">
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
														<th width="17%">Group&nbsp;Name</th>
														<th width="14%">Item&nbsp;Code&nbsp;</th>
														<th width="20%">Item&nbsp;Name&nbsp;</th>													
														<th width="22%">Info&nbsp;Detail</th>	
														<th width="17%" style="display:none;">Taging&nbsp;Number&nbsp;</th>
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
								<div class="<?='kode_tipebrgRQS-03-000122'?>" style="display:none;margin-top:0px;margin-left:0px;">
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
														<th width="17%">Group&nbsp;Name</th>
														<th width="14%">Item&nbsp;Code&nbsp;</th>
														<th width="20%">Item&nbsp;Name&nbsp;</th>													
														<th width="22%">Info&nbsp;Detail</th>	
														<th width="17%" style="display:none;">Taging&nbsp;Number&nbsp;</th>
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
								<div class="<?='kode_tipebrgRQS-03-000123'?>" style="display:none;margin-top:0px;margin-left:0px;">
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
														<th width="17%">Group&nbsp;Name</th>
														<th width="14%">Item&nbsp;Code&nbsp;</th>
														<th width="20%">Item&nbsp;Name&nbsp;</th>													
														<th width="22%">Info&nbsp;Detail</th>	
														<th width="17%" style="display:none;">Taging&nbsp;Number&nbsp;</th>
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
								<!-- ####################### OTHER STORE EQUIPMENTS (RQS-03-000124) ######################################### -->								
								<div class="<?='kode_tipebrgRQS-03-000124'?>" style="display:none;margin-top:0px;margin-left:0px;">
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
														<th width="17%">Group&nbsp;Name</th>
														<th width="14%">Item&nbsp;Code&nbsp;</th>
														<th width="20%">Item&nbsp;Name&nbsp;</th>													
														<th width="22%">Info&nbsp;Detail</th>	
														<th width="17%" style="display:none;">Taging&nbsp;Number&nbsp;</th>
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
								<div class="<?='kode_tipebrgRQS-03-000125'?>" style="display:none;margin-top:0px;margin-left:0px;">
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
														<th width="17%">Group&nbsp;Name</th>
														<th width="14%">Item&nbsp;Code&nbsp;</th>
														<th width="20%">Item&nbsp;Name&nbsp;</th>													
														<th width="22%">Info&nbsp;Detail</th>	
														<th width="17%" style="display:none;">Taging&nbsp;Number&nbsp;</th>
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