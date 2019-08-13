								<div class="<?='kode_tipebrgRQS-03-000118'?>" style="display:none;margin-top:0px;margin-left:0px;">
										<table width="750" border="0" cellspacing="0" style="margin-left:0px;">
										<tr>
											<!--<td></td><!-- FSD WEST -->
											<td><label style="width:auto;"><strong><u>Air Conditioning&nbsp;Equipment&nbsp;List&nbsp;:</u></strong></label><br>
										<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
											
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
															<? include_once('js_requestnew_cabinetracking_eq.php');?>													
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
																
													</tbody>
												</table>	
												</div>	
											</td>
										</tr>
										</table>								
								</div>