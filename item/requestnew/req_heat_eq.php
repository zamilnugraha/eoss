								<!-- ############################# HEAT EQUIPMENT (RQS-03-000113) ############################################## -->
								<div class="<?='kode_tipebrgRQS-03-000113'?>" style="display:none;margin-top:0px;margin-left:0px;">
										<table width="750" border="0" cellspacing="0" style="margin-left:0px;">
										<tr>
											<!--<td></td><!-- FSD WEST -->
											<td><label style="width:auto;"><strong><u>Heat&nbsp;Equipment&nbsp;List&nbsp;:</u></strong></label><br>
										<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

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
															<? include_once('js_requestnew_heat_eq.php');?>													
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
														<? } ?>		
													</tbody>
												</table>	
												</div>	
											</td>
										</tr>
										</table>								
								</div>	