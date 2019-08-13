<link type="text/css" href="css/custom.css" rel="stylesheet" />
<? if($_GET['to']=='welcomepage'){ ?>
        <div class="row justify-content-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title align-center pb-3 mbr-fonts-style display-5"><strong>
                    Welcome On <br>Electronic Operation Support System <br>(e-Operation Support System)</strong></h1>
                <p class="mbr-text align-center display-5 pb-3 mbr-fonts-style">
                   If you want a new item request or a new item replacement request, or if there is an item that you want to repair, then report it to Electronic Operation Support System (e-operation support system) and we will immediately process it. thanks.</p>
                <div class="mbr-section-btn align-center">
                        <a class="btn btn-md btn-primary display-4" href="index.php?m=home&to=fsd&mdl=fsdnone&pid=&uid=<?=$_SESSION['user_nik']?>">FSD <br>DEPARTEMENT</a> 
						<a class="btn btn-md btn-primary display-4" href="index.php?m=home&to=itd&pid=&uid=<?=$_SESSION['user_nik']?>">IT <br>DEPARTEMENT</a>
						<a class="btn btn-md btn-primary display-4" href="index.php?m=home&to=sdd&pid=&uid=<?=$_SESSION['user_nik']?>">SDD<br> DEPARTEMENT</a> 
						<a class="btn btn-md btn-primary display-4" href="index.php?m=home&to=oprd&pid=&uid=<?=$_SESSION['user_nik']?>">OPERATION<br> DEPARTEMENT</a>
						<a class="btn btn-md btn-primary display-4" href="index.php?m=home&to=mktd&pid=&uid=<?=$_SESSION['user_nik']?>">MARKETING<br> DEPARTEMENT</a> 
						<a class="btn btn-md btn-primary display-4" href="index.php?m=home&to=logd&pid=&uid=<?=$_SESSION['user_nik']?>">LOGISTIC<br> DEPARTEMENT</a></div>
            </div>
        </div>
<? }elseif($_GET['to']=='fsd'){ ?>
	<? if($_GET['mdl']=='fsdnone'){ ?>
			<div style="color:white;text-align:right;font-weight:bold;text-decoration:;underline;margin-right:10px;">
				<a href="./index.php?m=home&to=welcomepage&pid=&username=<?=$_SESSION['user_nik']?>" title="Beranda" style="color:#fff;"><!--<image src="./images/myhome.jpg" width="25px" height="auto" title="Beranda">--><span class="mbrib-home mbr-iconfont mbr-iconfont-btn"><?=' Beranda >>';?></span></a>
				<a href="./index.php?m=home&to=fsd&mdl=fsdnone&pid=&uid=<?=$_SESSION['user_nik']?>" title="Fsd" style="pointer-events:none;color:orange;text-decoration:underline;font-weight:bold;"><span class="mbri-setting3 mbr-iconfont mbr-iconfont-btn"><?=' fsd';?></span></a>
			</div><br><br>	
        <div class="row justify-content-center">			
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title align-center pb-3 mbr-fonts-style display-5"><strong>
                    Welcome On <br>Electronic Operation Support System <br>(e-Operation Support System)</strong></h1>
                <p class="mbr-text align-center display-5 pb-3 mbr-fonts-style">
                   If you want a new item request or a new item replacement request, or if there is an item that you want to repair, then report it to Electronic Operation Support System (e-operation support system) and we will immediately process it. thanks.</p>
                <div class="mbr-section-btn align-center">
						<a class="btn btn-md btn-primary display-4" href="index.php?m=home&to=fsd&mdl=request&pid=&uid=<?=$_SESSION['user_nik']?>">PERMINTAAN BARANG <br>(REQUEST ITEM)</a>
                        <a class="btn btn-md btn-primary display-4" href="index.php?m=home&to=fsd&mdl=repair&pid=&uid=<?=$_SESSION['user_nik']?>">PERBAIKKAN BARANG <br>(REPAIR ITEM)</a> 
						<a class="btn btn-md btn-primary display-4" href="index.php?m=home&to=fsd&mdl=movement&pid=&uid=<?=$_SESSION['user_nik']?>">PERPINDAHAN BARANG<br>(MOVEMENT ITEM)</a>
						<a class="btn	 btn-md btn-primary display-4" href="index.php?m=home&to=fsd&mdl=???&pid=&uid=<?=$_SESSION['user_nik']?>">???<br>(???)</a>
				</div>
            </div>
        </div>
	<? }elseif($_GET['mdl']=='request'){ ?>
			<div style="color:white;text-align:right;font-weight:bold;text-decoration:;underline;margin-right:10px;">
				<a href="./index.php?m=home&to=welcomepage&pid=&username=<?=$_SESSION['user_nik']?>" title="Beranda" style="color:#fff;"><!--<image src="./images/myhome.jpg" width="25px" height="auto" title="Beranda">--><span class="mbrib-home mbr-iconfont mbr-iconfont-btn"><?=' Beranda >>';?></span></a>
				<a href="./index.php?m=home&to=fsd&mdl=fsdnone&pid=&uid=<?=$_SESSION['user_nik']?>" title="Fsd" style="color:#fff;"><span class="mbri-setting3 mbr-iconfont mbr-iconfont-btn"><?=' fsd >>';?></span></a>
				<a href="./index.php?m=home&to=fsd&mdl=fsdnone&pid=&uid=<?=$_SESSION['user_nik']?>" title="Permintaan&nbsp;Barang" style="pointer-events:none;color:orange;text-decoration:underline;font-weight:bold;"><span class="mbri-shopping-bag mbr-iconfont mbr-iconfont-btn"><?=' Permintaan&nbsp;Barang';?></span></a>
			</div><br><br>	
			<div class="row justify-content-center">			
				<div class="mbr-white col-md-10">
					<h1 class="mbr-section-title align-center pb-3 mbr-fonts-style display-5"><strong>
						Welcome On <br>Electronic Operation Support System <br>(e-Operation Support System)</strong></h1>
					<p class="mbr-text align-center display-5 pb-3 mbr-fonts-style">
					   If you want a new item request or a new item replacement request, or if there is an item that you want to repair, then report it to Electronic Operation Support System (e-operation support system) and we will immediately process it. thanks.</p>
					<div class="mbr-section-btn align-center">
							<a class="btn btn-md btn-primary display-4" href="index.php?m=home&to=fsd&mdl=requestnew&pid=&uid=<?=$_SESSION['user_nik']?>">PENAMBAHAN BARU <br>(REQUEST NEW ITEM)</a>
							<a class="btn btn-md btn-primary display-4" href="index.php?m=home&to=fsd&mdl=requestreplace&pid=&uid=<?=$_SESSION['user_nik']?>">PENGGANTIAN BARANG <br>(REPLACEMENT ITEM)</a> 
					</div>
				</div>
			</div>		
	<? }elseif($_GET['mdl']=='requestnew'){ ?>
			<div style="color:white;text-align:right;font-weight:bold;text-decoration:;underline;margin-right:10px;">
				<a href="./index.php?m=home&to=welcomepage&pid=&username=<?=$_SESSION['user_nik']?>" title="Beranda" style="color:#fff;"><!--<image src="./images/myhome.jpg" width="25px" height="auto" title="Beranda">--><span class="mbrib-home mbr-iconfont mbr-iconfont-btn"><?=' Beranda >>';?></span></a>
				<a href="./index.php?m=home&to=fsd&mdl=fsdnone&pid=&uid=<?=$_SESSION['user_nik']?>" title="Fsd" style="color:#fff;"><span class="mbri-setting3 mbr-iconfont mbr-iconfont-btn"><?=' fsd >>';?></span></a>
				<a href="./index.php?m=home&to=fsd&mdl=fsdnone&pid=&uid=<?=$_SESSION['user_nik']?>" title="Permintaan&nbsp;Barang" style="color:#fff;"><span class="mbri-shopping-bag mbr-iconfont mbr-iconfont-btn"><?=' Permintaan&nbsp;Barang >>';?></span></a>
				<a href="./index.php?m=home&to=fsd&mdl=fsdnone&pid=&uid=<?=$_SESSION['user_nik']?>" title="Penambahan&nbsp;Baru" style="pointer-events:none;color:orange;text-decoration:underline;font-weight:bold;"><span class="mbri-shopping-basket mbr-iconfont mbr-iconfont-btn"><?=' Penambahan&nbsp;Baru';?></span></a>
			</div><br><br>	
			<div class="row justify-content-center">
				<div class="mbr-white col-md-10">
					<h1 class="mbr-section-title align-center pb-3 mbr-fonts-style display-5"><strong>
						Welcome On <br>Electronic Operation Support System <br>(e-Operation Support System)</strong></h1>
					<p class="mbr-text align-center display-5 pb-3 mbr-fonts-style">
					   If you want a new item request or a new item replacement request, or if there is an item that you want to repair, then report it to Electronic Operation Support System (e-operation support system) and we will immediately process it. thanks.</p>
					<div class="mbr-section-btn align-center">
							<a class="btn btn-md btn-primary display-4" href="index.php?m=home&to=fsd&mdl=requestnewequipment&pid=&uid=<?=$_SESSION['user_nik']?>">PENAMBAHAN EQUIPMENT <br>(EQUIPMENT ADDITIONS)</a>
							<a class="btn btn-md btn-primary display-4" href="index.php?m=home&to=fsd&mdl=requestnewsmallware&pid=&uid=<?=$_SESSION['user_nik']?>">PENAMBAHAN SMALLWARE <br>(SMALLWARE ADDITIONS)</a> 
							<a class="btn btn-md btn-primary display-4" href="index.php?m=home&to=fsd&mdl=requestnewsparepart&pid=&uid=<?=$_SESSION['user_nik']?>">PENAMBAHAN SPAREPART <br>(SPAREPART ADDITIONS)</a> 
							<a class="btn btn-md btn-primary display-4" style="display:none;" href="index.php?m=home&to=fsd&mdl=requestnewxxx&pid=&uid=<?=$_SESSION['user_nik']?>">PENAMBAHAN ??? BARU <br>(NEW ??? ADDITIONS)</a> 
					</div>
				</div>
			</div>		
	<? }elseif($_GET['mdl']=='requestnewequipment'){ ?>
			<div style="color:white;text-align:right;font-weight:bold;text-decoration:;underline;margin-right:10px;">
				<a href="./index.php?m=home&to=welcomepage&pid=&username=<?=$_SESSION['user_nik']?>" title="Beranda" style="color:#fff;"><!--<image src="./images/myhome.jpg" width="25px" height="auto" title="Beranda">--><span class="mbrib-home mbr-iconfont mbr-iconfont-btn"><?=' Beranda >>';?></span></a>
				<a href="./index.php?m=home&to=fsd&mdl=fsdnone&pid=&uid=<?=$_SESSION['user_nik']?>" title="Fsd" style="color:#fff;"><span class="mbri-setting3 mbr-iconfont mbr-iconfont-btn"><?=' fsd >>';?></span></a>
				<a href="./index.php?m=home&to=fsd&mdl=fsdnone&pid=&uid=<?=$_SESSION['user_nik']?>" title="Permintaan&nbsp;Barang" style="color:#fff;"><span class="mbri-shopping-bag mbr-iconfont mbr-iconfont-btn"><?=' Permintaan&nbsp;Barang >>';?></span></a>
				<a href="./index.php?m=home&to=fsd&mdl=fsdnone&pid=&uid=<?=$_SESSION['user_nik']?>" title="Penambahan&nbsp;Baru" style="color:#fff;"><span class="mbri-shopping-basket mbr-iconfont mbr-iconfont-btn"><?=' Penambahan&nbsp;Baru >>';?></span></a>
				<a href="./index.php?m=home&to=fsd&mdl=fsdnone&pid=&uid=<?=$_SESSION['user_nik']?>" title="Penambahan&nbsp;Equipment&nbsp;Baru" style="pointer-events:none;color:orange;text-decoration:underline;font-weight:bold;"><span class="mbri-shopping-cart mbr-iconfont mbr-iconfont-btn"><?=' Penambahan&nbsp;Equipment&nbsp;Baru';?></span></a>
			</div><br><br>		
                    <!--<form class="mbr-form"  method="post" action="<!?=$_SERVER['PHP_SELF'].'?m=login&a=send&pid='.$pid.'&username='.$uid.''?>" data-form-title="Mobirise Form">-->
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
								$('input[type="radio"]').click(function(){
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
							.RQS-03-000112info{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000113info{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000114info{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000115info{ background: (#7fd9fc, #6576aa); }
							</style>							
                            <div class="col-md-4 multi-horizontal" data-for="namefield" style="margin-left:0px;">
                                <div class="form-group">
                                    <input type="radio" name="kode_tipebrg" value="<?='RQS-03-000112'?>"> <?=STRTOUPPER('cold')?>
                                    <input type="radio" name="kode_tipebrg" value="<?='RQS-03-000113'?>"> <?=STRTOUPPER('heat')?>
									<input type="radio" name="kode_tipebrg" value="<?='RQS-03-000114'?>"> <?=STRTOUPPER('food processing')?>
									<input type="radio" name="kode_tipebrg" value="<?='RQS-03-000115'?>"> <?=STRTOUPPER('other')?>									
                                </div>
								<div class="form-group">
								<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@ COLD EQUIPMENT INFO (REQUEST COLD EQUIPMENT) @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->								
								<!--<div class="FSDBRGEQREQINFO fsd">-->
									<div class="RQS-03-000112 fsd" style="margin-top:0px;margin-left:0px;">
										<table width="750" border="0" cellspacing="0" style="margin-left:-20px;">
										<tr>
											<!--<td></td><!-- FSD WEST -->
											<td><label style="width:auto;"><strong><u>Daftar&nbsp;COLD&nbsp;Equipment&nbsp;:</u></strong></label><br>
										<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
											<script src="jquery/jquery.min.js"></script>
											<script>
											$(document).ready(function(){
											  $("#equipmentsrc").on("keyup", function() {
												var value = $(this).val().toLowerCase();
												$("#myCodes tr").filter(function() {
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
												  color: #000000;
												  border-left: 2px solid #D0E4F5;
												}
												table.blueTable thead th:first-child {
												  border-left: none;
												}

												table.blueTable tfoot {
												  font-size: 14px;
												  font-weight: bold;
												  color: #000000;
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
												  color: #000000;
												  padding: 2px 8px;
												  border-radius: 5px;
												}			
											</style>
											

											<input id="equipmentsrc" type="text" placeholder="Search.." style="margin-top:20px;">
											
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
													<tbody id="myCodes">
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
							<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
							<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@ HEAT EQUIPMENT INFO (REQUEST HEAT EQUIPMENT) @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->								
								<!--<div class="FSDBRGEQREQINFO fsd">-->
									<div class="RQS-03-000113 fsd" style="margin-top:-10px;margin-left:-35px;">
										<table width="650" border="0" cellspacing="0" style="margin-left:-20px;">
										<tr>
											<!--<td></td><!-- FSD WEST -->
											<td><label style="width:100px;"><strong><u>Daftar&nbsp;COLD&nbsp;Equipment&nbsp;:</u></strong></label><br>
										<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
											<script src="jquery/jquery.min.js"></script>
											<script>
											$(document).ready(function(){
											  $("#equipmentsrc").on("keyup", function() {
												var value = $(this).val().toLowerCase();
												$("#myCodes tr").filter(function() {
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
												  color: #000000;
												  border-left: 2px solid #D0E4F5;
												}
												table.blueTable thead th:first-child {
												  border-left: none;
												}

												table.blueTable tfoot {
												  font-size: 14px;
												  font-weight: bold;
												  color: #000000;
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
												  color: #000000;
												  padding: 2px 8px;
												  border-radius: 5px;
												}			
											</style>
											

											<input id="equipmentsrc" type="text" placeholder="Search.." style="margin-top:-23px;">
											
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
												<script src="./js/jquery.min.js.download"></script>
												<div style="width:100%; height:350px; overflow:auto;position:relative;">
												<table class="blueTable" border="1">
													<tbody id="myCodes">
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
														$qobjParse = oci_parse ($objConnect, $qvSCat);  
														oci_execute ($qobjParse,OCI_DEFAULT);   
														while($rvSCat = oci_fetch_array($qobjParse,OCI_BOTH))  
														{  
															$jumlah_desimal  = "0";
															$pemisah_desimal = ".";
															$pemisah_ribuan  = ".";		
															
														?>  
																								
													
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
																	<center><input type="text" name="textseqheat[<?=$rvSCat["KODE_BARANG"];?>]" id="<?='textseqheat'.$rvSCat["KODE_BARANG"];?>" style="width:52%;display: none;"></center>
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
							<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
							<!-- @@@@@@@@@@@@@@@@@@@@ FOOD PROCESSING EQUIPMENT INFO (REQUEST FOOD PROCESSING EQUIPMENT) @@@@@@@@@@@@@@@@@@@@@@@@ -->								
								<!--<div class="FSDBRGEQREQINFO fsd">-->
									<div class="RQS-03-000114 fsd" style="margin-top:-10px;margin-left:-35px;">
										<table width="650" border="0" cellspacing="0" style="margin-left:-20px;">
										<tr>
											<!--<td></td><!-- FSD WEST -->
											<td><label style="width:100px;"><strong><u>Daftar&nbsp;COLD&nbsp;EQUIPMENT&nbsp;:</u></strong></label><br>
										<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
											<script src="jquery/jquery.min.js"></script>
											<script>
											$(document).ready(function(){
											  $("#equipmentsrc").on("keyup", function() {
												var value = $(this).val().toLowerCase();
												$("#myCodes tr").filter(function() {
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
												  color: #000000;
												  border-left: 2px solid #D0E4F5;
												}
												table.blueTable thead th:first-child {
												  border-left: none;
												}

												table.blueTable tfoot {
												  font-size: 14px;
												  font-weight: bold;
												  color: #000000;
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
												  color: #000000;
												  padding: 2px 8px;
												  border-radius: 5px;
												}			
											</style>
											<input id="equipmentsrc" type="text" placeholder="Search.." style="margin-top:-23px;">
											
												<table class="blueTable" border="1"> 
													<thead>
													<tr>
													
														<?  
														$objConnect = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
														?>														
														<th width="10%">Kode&nbsp;Grp&nbsp;</th>
														<th width="17%">Nama&nbsp;Grp</th>
														<th width="10%">Kd&nbsp;Barang&nbsp;</th>
														
														<th width="20%">Nama&nbsp;Barang&nbsp;</th>
														<th width="15%">QTY</th>
														<th width="10%" style="display:none;">STK<br>BARU</th>
														<th width="10%" style="display:none;">STK<br>BAIK</th>
														<th width="10%" style="display:none;">STK<br>LAMA</th>
													</tr>													
													</thead>
												</table>							  
												<script type="text/javascript" src="./js/jquery-1.9.1.js.download"></script>	
												<div style="width:100%; height:350px; overflow:auto;position:relative;">
												<table class="blueTable" border="1">
													<tbody id="myCodes">
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
																				$("input<?='#cekseqfoodprocessing'.$rvSCat["KODE_BARANG"];?>").prop("checked", this.value != "");						
																		});

																		// don't allow user to manually change the checkbox
																		$("input<?='#cekseqfoodprocessing'.$rvSCat["KODE_BARANG"];?>").click(function() {
																			return false;
																		});
																	});
																});
															</script>													
														<tr>												
															<td width="10%" style="display:none;">
																<center><?=$rvSCat["KODE_GROUP"];?></center>
															</td>
															<td width="17%">
																<center><?=$rvSCat["NAMA_GROUP"];?></center>
															</td>
															<td width="16%">
																<center><input type="checkbox" class="form-control" name="cekseqfoodprocessing[]" value="<?=$rvSCat["KODE_BARANG"];?>" id="<?='cekseqfoodprocessing'.$rvSCat["KODE_BARANG"];?>" />&nbsp;<?=$rvSCat["KODE_BARANG"];?></center>
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
																<center><input type="checkbox" class="form-control" name="ceksnotag[<?=$rvSCat["NO_TAGING"];?>]" value="<?=$rvSCat["NO_TAGING"];?>" id="ceksnotag" />&nbsp;<?=$rvSCat["NO_TAGING"];?></center>
															</td>														
															<td width="13%">															
																<!--<center><input type="text" name="textseq[<!?=$rvSCat["KODE_BARANG"];?>][<!?=$rvSCat["NO_TAGING"];?>]" id="texts" style="width:52%;"></center>-->
																<center><input type="text" class="form-control" name="textseqfoodprocessing[<?=$rvSCat["KODE_BARANG"];?>]" id="<?='textseqfoodprocessing'.$rvSCat["KODE_BARANG"];?>" style="width:52%;"></center>
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
							<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
							<!-- @@@@@@@@@@@@@@@@@@@@ OTHER EQUIPMENT INFO (REQUEST OTHER EQUIPMENT) @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->								
								<!--<div class="FSDBRGEQREQINFO fsd">-->
									<div class="RQS-03-000115 fsd" style="margin-top:-10px;margin-left:-35px;">
										<table width="650" border="0" cellspacing="0" style="margin-left:-20px;">
										<tr>
											<!--<td></td><!-- FSD WEST -->
											<td><label style="width:100px;"><strong><u>Daftar&nbsp;ALL&nbsp;EQUIPMENT&nbsp;:</u></strong></label><br>
										<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
											<script src="jquery/jquery.min.js"></script>
											<script>
											$(document).ready(function(){
											  $("#equipmentsrc").on("keyup", function() {
												var value = $(this).val().toLowerCase();
												$("#myCodes tr").filter(function() {
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
												  color: #000000;
												  border-left: 2px solid #D0E4F5;
												}
												table.blueTable thead th:first-child {
												  border-left: none;
												}

												table.blueTable tfoot {
												  font-size: 14px;
												  font-weight: bold;
												  color: #000000;
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
												  color: #000000;
												  padding: 2px 8px;
												  border-radius: 5px;
												}			
											</style>
											<input id="equipmentsrc" type="text" placeholder="Search.." style="margin-top:-23px;">
											
												<table class="blueTable" border="1"> 
													<thead>
													<tr>
													
														<?  
														$objConnect = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
														?>														
														<th width="10%">Kode&nbsp;Grp&nbsp;</th>
														<th width="17%">Nama&nbsp;Grp</th>
														<th width="10%">Kd&nbsp;Barang&nbsp;</th>
														
														<th width="20%">Nama&nbsp;Barang&nbsp;</th>
														<th width="15%">QTY</th>
														<th width="10%" style="display:none;">STK<br>BARU</th>
														<th width="10%" style="display:none;">STK<br>BAIK</th>
														<th width="10%" style="display:none;">STK<br>LAMA</th>
													</tr>													
													</thead>
												</table>								
												<div style="width:100%; height:100px; overflow:auto;position:relative;">
												<table class="blueTable" border="1">
													<tbody id="myCodes">
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
														$qvSCat =  "SELECT DISTINCT FSDSGROUP.NAMA_GROUP, FSDBRGEQ.KODE_BARANG, 
																	FSDBRGEQ.NAMA_BARANG,FSDBRGEQ.MODEL,FSDBRGEQ.MERK_BARANG,
																	FSDHRGER.HARGA_RATA2, FSDHRGER.HARGA_TERAKHIR
																	from FSDBRGEQ
																	JOIN FSDSGROUP ON FSDBRGEQ.KODE_GRUP = FSDSGROUP.KODE_GROUP
																	JOIN FSDHRGER ON FSDBRGEQ.KODE_BARANG = FSDHRGER.KODE_BARANG_EQ
																	WHERE FSDSGROUP.KODE_GROUP IN('027','039','043','050','067','042','031','032','030','015','017','019',
																	'033','041')
																	GROUP BY FSDSGROUP.NAMA_GROUP, FSDBRGEQ.KODE_BARANG, 
																	FSDBRGEQ.NAMA_BARANG,FSDBRGEQ.MODEL,FSDBRGEQ.MERK_BARANG,
																	FSDHRGER.HARGA_RATA2, FSDHRGER.HARGA_TERAKHIR
																	ORDER BY FSDBRGEQ.KODE_BARANG ASC";														
														$qobjParse = oci_parse ($objConnect, $qvSCat);  
														oci_execute ($qobjParse,OCI_DEFAULT);   
														while($rvSCat = oci_fetch_array($qobjParse,OCI_BOTH))  
														{  
															$jumlah_desimal  = "0";
															$pemisah_desimal = ".";
															$pemisah_ribuan  = ".";																
														?>  												
														<tr>												
															<td width="10%" style="display:none;">
																<center><?=$rvSCat["KODE_GROUP"];?></center>
															</td>
															<td width="17%">
																<center><?=$rvSCat["NAMA_GROUP"];?></center>
															</td>
															<td width="16%">
																<center><input type="checkbox" name="ceks[]" value="<?=$rvSCat["KODE_BARANG"];?>" id="ceks" />&nbsp;<?=$rvSCat["KODE_BARANG"];?></center>
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
																<center><input type="text" name="textseq[<?=$rvSCat["KODE_BARANG"];?>]" id="texts" style="width:52%;"></center>
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
							<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->							
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
                            <div class="col-md-4 multi-horizontal" data-for="ticket_subject" style="margin-left:0px;">
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
                            <div class="col-md-4 multi-horizontal" data-for="ticket_problem" style="margin-left:0px;">
                                <div class="form-group">
                                    <textarea class="form-control" name="ticket_problem" data-form-field="ticket_problem" required="" id="ticket_problem"></textarea>
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
			

	<? }elseif($_GET['mdl']=='requestreplace'){ ?>
			<div style="color:white;text-align:right;font-weight:bold;text-decoration:;underline;margin-right:10px;">
				<a href="./index.php?m=home&to=welcomepage&pid=&username=<?=$_SESSION['user_nik']?>" title="Beranda" style="color:#fff;"><!--<image src="./images/myhome.jpg" width="25px" height="auto" title="Beranda">--><span class="mbrib-home mbr-iconfont mbr-iconfont-btn"><?=' Beranda >>';?></span></a>
				<a href="./index.php?m=home&to=fsd&mdl=fsdnone&pid=&uid=<?=$_SESSION['user_nik']?>" title="Fsd" style="color:#fff;"><span class="mbri-setting3 mbr-iconfont mbr-iconfont-btn"><?=' fsd >>';?></span></a>
				<a href="./index.php?m=home&to=fsd&mdl=fsdnone&pid=&uid=<?=$_SESSION['user_nik']?>" title="Permintaan&nbsp;Barang" style="color:#fff;"><span class="mbri-shopping-bag mbr-iconfont mbr-iconfont-btn"><?=' Permintaan&nbsp;Barang >>';?></span></a>
				<a href="./index.php?m=home&to=fsd&mdl=fsdnone&pid=&uid=<?=$_SESSION['user_nik']?>" title="Penambahan&nbsp;Baru" style="color:#fff;"><span class="mbri-shopping-basket mbr-iconfont mbr-iconfont-btn"><?=' Penambahan&nbsp;Baru >>';?></span></a>
				<a href="./index.php?m=home&to=fsd&mdl=fsdnone&pid=&uid=<?=$_SESSION['user_nik']?>" title="Penambahan&nbsp;Equipment&nbsp;Baru" style="pointer-events:none;color:orange;text-decoration:underline;font-weight:bold;"><span class="mbri-shopping-cart mbr-iconfont mbr-iconfont-btn"><?=' Penambahan&nbsp;Equipment&nbsp;Baru';?></span></a>
			</div><br><br>		
                    <!--<form class="mbr-form"  method="post" action="<!?=$_SERVER['PHP_SELF'].'?m=login&a=send&pid='.$pid.'&username='.$uid.''?>" data-form-title="Mobirise Form">-->
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
								$('input[type="radio"]').click(function(){
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
							.RQS-03-000112info{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000113info{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000114info{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000115info{ background: (#7fd9fc, #6576aa); }
							</style>							
                            <div class="col-md-4 multi-horizontal" data-for="namefield" style="margin-left:0px;">
                                <div class="form-group">
                                    <input type="radio" name="kode_tipebrg" value="<?='RQS-03-000112'?>"> <?=STRTOUPPER('cold')?>
                                    <input type="radio" name="kode_tipebrg" value="<?='RQS-03-000113'?>"> <?=STRTOUPPER('heat')?>
									<input type="radio" name="kode_tipebrg" value="<?='RQS-03-000114'?>"> <?=STRTOUPPER('food processing')?>
									<input type="radio" name="kode_tipebrg" value="<?='RQS-03-000115'?>"> <?=STRTOUPPER('other')?>									
                                </div>
								<div class="form-group">
								<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@ COLD EQUIPMENT INFO (REQUEST COLD EQUIPMENT) @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->								
								<!--<div class="FSDBRGEQREQINFO fsd">-->
									<div class="RQS-03-000112 fsd" style="margin-top:0px;margin-left:0px;">
										<table width="750" border="0" cellspacing="0" style="margin-left:-20px;">
										<tr>
											<!--<td></td><!-- FSD WEST -->
											<td><label style="width:auto;"><strong><u>Daftar&nbsp;COLD&nbsp;Equipment&nbsp;:</u></strong></label><br>
										<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
											<script src="jquery/jquery.min.js"></script>
											<script>
											$(document).ready(function(){
											  $("#equipmentsrc").on("keyup", function() {
												var value = $(this).val().toLowerCase();
												$("#myCodes tr").filter(function() {
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
												  color: #000000;
												  border-left: 2px solid #D0E4F5;
												}
												table.blueTable thead th:first-child {
												  border-left: none;
												}

												table.blueTable tfoot {
												  font-size: 14px;
												  font-weight: bold;
												  color: #000000;
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
												  color: #000000;
												  padding: 2px 8px;
												  border-radius: 5px;
												}			
											</style>
											

											<input id="equipmentsrc" type="text" placeholder="Search.." style="margin-top:20px;">
											
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
													<tbody id="myCodes">
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
							<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
							<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@ HEAT EQUIPMENT INFO (REQUEST HEAT EQUIPMENT) @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->								
								<!--<div class="FSDBRGEQREQINFO fsd">-->
									<div class="RQS-03-000113 fsd" style="margin-top:-10px;margin-left:-35px;">
										<table width="650" border="0" cellspacing="0" style="margin-left:-20px;">
										<tr>
											<!--<td></td><!-- FSD WEST -->
											<td><label style="width:100px;"><strong><u>Daftar&nbsp;COLD&nbsp;Equipment&nbsp;:</u></strong></label><br>
										<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
											<script src="jquery/jquery.min.js"></script>
											<script>
											$(document).ready(function(){
											  $("#equipmentsrc").on("keyup", function() {
												var value = $(this).val().toLowerCase();
												$("#myCodes tr").filter(function() {
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
												  color: #000000;
												  border-left: 2px solid #D0E4F5;
												}
												table.blueTable thead th:first-child {
												  border-left: none;
												}

												table.blueTable tfoot {
												  font-size: 14px;
												  font-weight: bold;
												  color: #000000;
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
												  color: #000000;
												  padding: 2px 8px;
												  border-radius: 5px;
												}			
											</style>
											

											<input id="equipmentsrc" type="text" placeholder="Search.." style="margin-top:-23px;">
											
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
												<script src="./js/jquery.min.js.download"></script>
												<div style="width:100%; height:350px; overflow:auto;position:relative;">
												<table class="blueTable" border="1">
													<tbody id="myCodes">
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
														$qobjParse = oci_parse ($objConnect, $qvSCat);  
														oci_execute ($qobjParse,OCI_DEFAULT);   
														while($rvSCat = oci_fetch_array($qobjParse,OCI_BOTH))  
														{  
															$jumlah_desimal  = "0";
															$pemisah_desimal = ".";
															$pemisah_ribuan  = ".";		
															
														?>  
																								
													
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
																	<center><input type="text" name="textseqheat[<?=$rvSCat["KODE_BARANG"];?>]" id="<?='textseqheat'.$rvSCat["KODE_BARANG"];?>" style="width:52%;display: none;"></center>
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
							<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
							<!-- @@@@@@@@@@@@@@@@@@@@ FOOD PROCESSING EQUIPMENT INFO (REQUEST FOOD PROCESSING EQUIPMENT) @@@@@@@@@@@@@@@@@@@@@@@@ -->								
								<!--<div class="FSDBRGEQREQINFO fsd">-->
									<div class="RQS-03-000114 fsd" style="margin-top:-10px;margin-left:-35px;">
										<table width="650" border="0" cellspacing="0" style="margin-left:-20px;">
										<tr>
											<!--<td></td><!-- FSD WEST -->
											<td><label style="width:100px;"><strong><u>Daftar&nbsp;COLD&nbsp;EQUIPMENT&nbsp;:</u></strong></label><br>
										<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
											<script src="jquery/jquery.min.js"></script>
											<script>
											$(document).ready(function(){
											  $("#equipmentsrc").on("keyup", function() {
												var value = $(this).val().toLowerCase();
												$("#myCodes tr").filter(function() {
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
												  color: #000000;
												  border-left: 2px solid #D0E4F5;
												}
												table.blueTable thead th:first-child {
												  border-left: none;
												}

												table.blueTable tfoot {
												  font-size: 14px;
												  font-weight: bold;
												  color: #000000;
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
												  color: #000000;
												  padding: 2px 8px;
												  border-radius: 5px;
												}			
											</style>
											<input id="equipmentsrc" type="text" placeholder="Search.." style="margin-top:-23px;">
											
												<table class="blueTable" border="1"> 
													<thead>
													<tr>
													
														<?  
														$objConnect = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
														?>														
														<th width="10%">Kode&nbsp;Grp&nbsp;</th>
														<th width="17%">Nama&nbsp;Grp</th>
														<th width="10%">Kd&nbsp;Barang&nbsp;</th>
														
														<th width="20%">Nama&nbsp;Barang&nbsp;</th>
														<th width="15%">QTY</th>
														<th width="10%" style="display:none;">STK<br>BARU</th>
														<th width="10%" style="display:none;">STK<br>BAIK</th>
														<th width="10%" style="display:none;">STK<br>LAMA</th>
													</tr>													
													</thead>
												</table>							  
												<script type="text/javascript" src="./js/jquery-1.9.1.js.download"></script>	
												<div style="width:100%; height:350px; overflow:auto;position:relative;">
												<table class="blueTable" border="1">
													<tbody id="myCodes">
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
																				$("input<?='#cekseqfoodprocessing'.$rvSCat["KODE_BARANG"];?>").prop("checked", this.value != "");						
																		});

																		// don't allow user to manually change the checkbox
																		$("input<?='#cekseqfoodprocessing'.$rvSCat["KODE_BARANG"];?>").click(function() {
																			return false;
																		});
																	});
																});
															</script>													
														<tr>												
															<td width="10%" style="display:none;">
																<center><?=$rvSCat["KODE_GROUP"];?></center>
															</td>
															<td width="17%">
																<center><?=$rvSCat["NAMA_GROUP"];?></center>
															</td>
															<td width="16%">
																<center><input type="checkbox" class="form-control" name="cekseqfoodprocessing[]" value="<?=$rvSCat["KODE_BARANG"];?>" id="<?='cekseqfoodprocessing'.$rvSCat["KODE_BARANG"];?>" />&nbsp;<?=$rvSCat["KODE_BARANG"];?></center>
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
																<center><input type="checkbox" class="form-control" name="ceksnotag[<?=$rvSCat["NO_TAGING"];?>]" value="<?=$rvSCat["NO_TAGING"];?>" id="ceksnotag" />&nbsp;<?=$rvSCat["NO_TAGING"];?></center>
															</td>														
															<td width="13%">															
																<!--<center><input type="text" name="textseq[<!?=$rvSCat["KODE_BARANG"];?>][<!?=$rvSCat["NO_TAGING"];?>]" id="texts" style="width:52%;"></center>-->
																<center><input type="text" class="form-control" name="textseqfoodprocessing[<?=$rvSCat["KODE_BARANG"];?>]" id="<?='textseqfoodprocessing'.$rvSCat["KODE_BARANG"];?>" style="width:52%;"></center>
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
							<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->
							<!-- @@@@@@@@@@@@@@@@@@@@ OTHER EQUIPMENT INFO (REQUEST OTHER EQUIPMENT) @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->								
								<!--<div class="FSDBRGEQREQINFO fsd">-->
									<div class="RQS-03-000115 fsd" style="margin-top:-10px;margin-left:-35px;">
										<table width="650" border="0" cellspacing="0" style="margin-left:-20px;">
										<tr>
											<!--<td></td><!-- FSD WEST -->
											<td><label style="width:100px;"><strong><u>Daftar&nbsp;ALL&nbsp;EQUIPMENT&nbsp;:</u></strong></label><br>
										<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
											<script src="jquery/jquery.min.js"></script>
											<script>
											$(document).ready(function(){
											  $("#equipmentsrc").on("keyup", function() {
												var value = $(this).val().toLowerCase();
												$("#myCodes tr").filter(function() {
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
												  color: #000000;
												  border-left: 2px solid #D0E4F5;
												}
												table.blueTable thead th:first-child {
												  border-left: none;
												}

												table.blueTable tfoot {
												  font-size: 14px;
												  font-weight: bold;
												  color: #000000;
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
												  color: #000000;
												  padding: 2px 8px;
												  border-radius: 5px;
												}			
											</style>
											<input id="equipmentsrc" type="text" placeholder="Search.." style="margin-top:-23px;">
											
												<table class="blueTable" border="1"> 
													<thead>
													<tr>
													
														<?  
														$objConnect = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
														?>														
														<th width="10%">Kode&nbsp;Grp&nbsp;</th>
														<th width="17%">Nama&nbsp;Grp</th>
														<th width="10%">Kd&nbsp;Barang&nbsp;</th>
														
														<th width="20%">Nama&nbsp;Barang&nbsp;</th>
														<th width="15%">QTY</th>
														<th width="10%" style="display:none;">STK<br>BARU</th>
														<th width="10%" style="display:none;">STK<br>BAIK</th>
														<th width="10%" style="display:none;">STK<br>LAMA</th>
													</tr>													
													</thead>
												</table>								
												<div style="width:100%; height:100px; overflow:auto;position:relative;">
												<table class="blueTable" border="1">
													<tbody id="myCodes">
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
														$qvSCat =  "SELECT DISTINCT FSDSGROUP.NAMA_GROUP, FSDBRGEQ.KODE_BARANG, 
																	FSDBRGEQ.NAMA_BARANG,FSDBRGEQ.MODEL,FSDBRGEQ.MERK_BARANG,
																	FSDHRGER.HARGA_RATA2, FSDHRGER.HARGA_TERAKHIR
																	from FSDBRGEQ
																	JOIN FSDSGROUP ON FSDBRGEQ.KODE_GRUP = FSDSGROUP.KODE_GROUP
																	JOIN FSDHRGER ON FSDBRGEQ.KODE_BARANG = FSDHRGER.KODE_BARANG_EQ
																	WHERE FSDSGROUP.KODE_GROUP IN('027','039','043','050','067','042','031','032','030','015','017','019',
																	'033','041')
																	GROUP BY FSDSGROUP.NAMA_GROUP, FSDBRGEQ.KODE_BARANG, 
																	FSDBRGEQ.NAMA_BARANG,FSDBRGEQ.MODEL,FSDBRGEQ.MERK_BARANG,
																	FSDHRGER.HARGA_RATA2, FSDHRGER.HARGA_TERAKHIR
																	ORDER BY FSDBRGEQ.KODE_BARANG ASC";														
														$qobjParse = oci_parse ($objConnect, $qvSCat);  
														oci_execute ($qobjParse,OCI_DEFAULT);   
														while($rvSCat = oci_fetch_array($qobjParse,OCI_BOTH))  
														{  
															$jumlah_desimal  = "0";
															$pemisah_desimal = ".";
															$pemisah_ribuan  = ".";																
														?>  												
														<tr>												
															<td width="10%" style="display:none;">
																<center><?=$rvSCat["KODE_GROUP"];?></center>
															</td>
															<td width="17%">
																<center><?=$rvSCat["NAMA_GROUP"];?></center>
															</td>
															<td width="16%">
																<center><input type="checkbox" name="ceks[]" value="<?=$rvSCat["KODE_BARANG"];?>" id="ceks" />&nbsp;<?=$rvSCat["KODE_BARANG"];?></center>
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
																<center><input type="text" name="textseq[<?=$rvSCat["KODE_BARANG"];?>]" id="texts" style="width:52%;"></center>
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
							<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->							
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
                            <div class="col-md-4 multi-horizontal" data-for="ticket_subject" style="margin-left:0px;">
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
                            <div class="col-md-4 multi-horizontal" data-for="ticket_problem" style="margin-left:0px;">
                                <div class="form-group">
                                    <textarea class="form-control" name="ticket_problem" data-form-field="ticket_problem" required="" id="ticket_problem"></textarea>
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
			

	<? } ?>
<? }else{ ?>
			<div style="color:white;text-align:right;font-weight:bold;text-decoration:;underline;margin-right:10px;">
				<a href="./index.php?m=home&to=welcomepage&pid=&username=<?=$_SESSION['user_nik']?>" title="Beranda" style="color:#fff;"><!--<image src="./images/myhome.jpg" width="25px" height="auto" title="Beranda">--><span class="mbrib-home mbr-iconfont mbr-iconfont-btn"><?=' Beranda >>';?></span></a>
				<a href="./index.php?m=home&to=fsd&mdl=fsdnone&pid=&uid=<?=$_SESSION['user_nik']?>" title="Fsd" style="pointer-events:none;color:orange;text-decoration:underline;font-weight:bold;"><span class="mbri-setting3 mbr-iconfont mbr-iconfont-btn"><?=' fsd';?></span></a>
			</div><br><br>	
    	<table class="table table-hover" cellpadding="0" cellspacing="0" style="">
			<tbody>
				<tr>
				<? 
					 $query = mysql_query("SELECT * FROM VW_ITH_TICKET_HEADER WHERE ticket_id ='$_GET[pid]'");
					 $dtmyticket = mysql_fetch_object($query);
				?>
				
					<td style="width:100px">
						<table>
							<tr><th style="border:0;color:#ffffff;">Ticket&nbsp;By  </th><th style="border:0;color:#ffffff;">:</th><td style="border:0;">
							<input type="text" value="<?=$dtmyticket->user_realname;?>" style="width:auto;" readonly></td></tr>
							<tr><th style="border:0;color:#ffffff;">Tiket&nbsp;ID  </th><th style="border:0;color:#ffffff;">:</th><td style="border:0;">
							<input type="text" value="<?=$_GET['pid'];?>" style="width:auto;" readonly></td></tr>
							<tr><th style="border:0;color:#ffffff;">Ticket&nbsp;Date  </th><th style="border:0;color:#ffffff;">:</th><td style="border:0;">
							<input type="text" value="<?=$dtmyticket->ticket_createdate;?>" style="width:auto;" readonly></td></tr>					
							<tr><th style="border:0;color:#ffffff;">Ticket&nbsp;Time  </th><th style="border:0;color:#ffffff;">:</th><td style="border:0;">
							<input type="text" value="<?=$dtmyticket->ticket_createtime;?>" style="width:auto;" readonly></td></tr>	
							<tr><th style="border:0;color:#ffffff;">Ticket&nbsp;Via  </th><th style="border:0;color:#ffffff;">:</th><td style="border:0;">
							<?if($dtmyticket->ticket_viaby=='By Phone'){?>
							<input type="text" value="<?=$dtmyticket->ticket_viaby;?>" style="width:auto;color:green;" readonly>
							<?}elseif($dtmyticket->ticket_viaby=='By Email'){?>
							<input type="text" value="<?=$dtmyticket->ticket_viaby;?>" style="width:auto;color:blue;" readonly>
							<?}elseif(($dtmyticket->ticket_viaby=='By Web')||($dtmyticket->ticket_viaby=='Via Web')){?>
							<input type="text" value="<?=$dtmyticket->ticket_viaby;?>" style="width:auto;color:black;" readonly>							
							<? } ?>
							</td></tr>	

							<? 
							$qcektipebrg = mysql_query("SELECT ITH_TICKET_HEADER.ticket_id, ITH_TICKET_HEADER.kode_tipebrg FROM ITH_TICKET_HEADER 
															JOIN ITH_TIPEBRG ON ITH_TICKET_HEADER.kode_tipebrg = ITH_TIPEBRG.kode_tipebrg
															WHERE ITH_TICKET_HEADER.kode_tipebrg != '' AND ITH_TICKET_HEADER.ticket_id = '$_GET[pid]'");
							$rcektipebrg = mysql_fetch_object($qcektipebrg);	
								if($rcektipebrg->kode_tipebrg == 'RQS-03-000112') /* COLD EQUIPMENT INFO DI TIKET DETAIL */
								#if($rcektipebrg->kode_tipebrg == 'FSDBRGEQREQINFO') /* EQUIPMENT INFO DI TIKET DETAIL */
							    {	
							?>
									<tr style="display:none;"><th style="border:0;color:#ffffff;">Item Name  </th><th style="border:0;color:#ffffff;">:</th><td style="border:0;">
									<?  							

									$qvSCat = mysql_query("SELECT DISTINCT ticket_id, no_permintaan, request_by, kode_tipebarang, kode_tipebarang_sw, kode_tipebarang_sp,
									kuantitas, nama_tipebarang, nama_tipebarang_sw, nama_tipebarang_sp
									FROM ITH_TIPEBARANG_KODE
									WHERE ticket_id = '$_GET[pid]'");
									while($rvSCat = mysql_fetch_array($qvSCat)) {
										$namatipebrgx = preg_replace('/[^A-Za-z0-9\  ]/', '', $rvSCat['nama_tipebarang']);

									?>  							
										<? if($rvSCat['kuantitas']!=''){?>
											<input type="text" value="<?=$rvSCat['kode_tipebarang'].'&nbsp;-&nbsp;'.$namatipebrgx.' : '.$rvSCat['kuantitas'].' Unit';?>" style="width:300%;color:blue;" readonly>
										<? } ?>
									<?  } ?>
								
							<?  }elseif($rcektipebrg->kode_tipebrg == 'RQS-03-000113') /* HEAT EQUIPMENT INFO DI TIKET DETAIL */
							    { ?>
									<tr style="display:none;"><th style="border:0;color:#ffffff;">Item Name  </th><th style="border:0;color:#ffffff;">:</th><td style="border:0;">
									<?  							

									$qvSCat = mysql_query("SELECT DISTINCT ticket_id, no_permintaan, request_by, kode_tipebarang, 
									kode_tipebarang_sw, kode_tipebarang_sp,
									kuantitas, nama_tipebarang, nama_tipebarang_sw, nama_tipebarang_sp
									FROM ITH_TIPEBARANG_KODE
									WHERE ticket_id = '$_GET[pid]'");
									while($rvSCat = mysql_fetch_array($qvSCat)) {
										$namatipebrgx = preg_replace('/[^A-Za-z0-9\  ]/', '', $rvSCat['nama_tipebarang']);

									?>  							
										<? if($rvSCat['kuantitas']!=''){?>
											<input type="text" value="<?=$rvSCat['kode_tipebarang_sw'].'&nbsp;-&nbsp;'.$namatipebrgx.' : '.$rvSCat['kuantitas'].' Unit';?>" style="width:300%;color:blue;" readonly>
										<? } ?>
									<?  } #} ?>									
							<?  }elseif($rcektipebrg->kode_tipebrg == 'RQS-03-000114') /* FOOD PROCESSING EQUIPMENT INFO DI TIKET DETAIL */
							    { ?>
									<tr style="display:none;"><th style="border:0;color:#ffffff;">Item Name  </th><th style="border:0;color:#ffffff;">:</th><td style="border:0;">
									<?  							

									$qvSCat = mysql_query("SELECT DISTINCT ticket_id, no_permintaan, request_by, kode_tipebarang, 
									kode_tipebarang_sw, kode_tipebarang_sp,
									kuantitas, nama_tipebarang, nama_tipebarang_sw, nama_tipebarang_sp
									FROM ITH_TIPEBARANG_KODE
									WHERE ticket_id = '$_GET[pid]'");
									while($rvSCat = mysql_fetch_array($qvSCat)) {
										$namatipebrgx = preg_replace('/[^A-Za-z0-9\  ]/', '', $rvSCat['nama_tipebarang']);

									?>  							
										<? if($rvSCat['kuantitas']!=''){?>
											<input type="text" value="<?=$rvSCat['kode_tipebarang_sw'].'&nbsp;-&nbsp;'.$namatipebrgx.' : '.$rvSCat['kuantitas'].' Unit';?>" style="width:300%;color:blue;" readonly>
										<? } ?>
									<?  }  ?>									
							<?  } ?>
								</tr>
						</table>
					</td>
					
					<td style="width:500px">
						<table>
							<tr><th style="border:0;color:#ffffff;">Ticket&nbsp;For X2  </th><th style="border:0;color:#ffffff;">:</th><td style="border:0;">
							<input type="text" value="<?=$dtmyticket->nama_departemen;?>" style="width:auto;" readonly></td></tr>
							<tr><th style="border:0;color:#ffffff;">Ticket&nbsp;Type  </th><th style="border:0;color:#ffffff;">:</th><td style="border:0;">
							<input type="text" value="<?=$dtmyticket->statuslaporan_name;?>" style="width:auto;" readonly></td></tr>
							
							<? if(($_SESSION['user_departemen']=='FSD WEST')||($_SESSION['user_departemen']=='FSD EAST')||($_SESSION['namajabatan']=='STORE')){ ?>
								<tr style="display:none;"><th style="border:0;color:#ffffff;">Category</th><th style="border:0;color:#ffffff;">:</th><td style="border:0;">
								<input type="text" value="<?=$dtmyticket->ticketsubcategory2_name;?>" style="width:155%;" readonly></td></tr>
								<tr><th style="border:0;color:#ffffff;">Category</th><th style="border:0;color:#ffffff;">:</th><td style="border:0;">
									<!--?
										$qcektipebrgs = mysql_query("SELECT kode_tipebrg FROM ITH_TICKET_HEADER where ticket_id = '$_GET[pid]'");
										$rcektipebrgs = mysql_fetch_object($qcektipebrgs);
										if($rcektipebrgs->kode_tipebrg=='RQS-03-000112'){ 
									?>
											<input type="text" value="<!?=ucwords(strtolower("COLD EQUIPMENT"));?>" style="width:auto;color:black;" readonly>
									<!?	}elseif($rcektipebrgs->kode_tipebrg=='RQS-03-000113'){  ?>
											<input type="text" value="<!?=ucwords(strtolower("HEAT EQUIPMENT"));?>" style="width:auto;color:black;" readonly>
									<!?	}elseif($rcektipebrgs->kode_tipebrg=='RQS-03-000114'){ ?>
											<input type="text" value="<!?=ucwords(strtolower("FOOD PROCESSING EQUIPMENT"));?>" style="width:auto;color:black" readonly>
									<!?	}
									?-->
									<? 
										$qcektipebrgs = mysql_query("SELECT kode_tipebrg, keterangan FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$_GET['pid']."'");
										$rcektipebrgs = mysql_fetch_object($qcektipebrgs);
										$keterangan = ucwords(strtolower($rcektipebrgs->keterangan));
									?>
									<? if(($rcektipebrgs->kode_tipebrg = 'RQS-03-000112')||($rcektipebrgs->kode_tipebrg = 'RQS-03-000113')||($rcektipebrgs->kode_tipebrg = 'RQS-03-000114')){?>
										<input type="text" value="<?="Request New Item";?>" style="width:auto;color:black;" readonly>
									<? }elseif(($rcektipebrgs->kode_tipebrg = 'RQS-03-000112replace')||($rcektipebrgs->kode_tipebrg = 'RQS-03-000113replace')||($rcektipebrgs->kode_tipebrg = 'RQS-03-000114replace')){?>
										<input type="text" value="<?="Request Replace Item";?>" style="width:auto;color:blue;" readonly>
									<? } ?></td>									
							<td style="border:0;text-align:right;"><center>
								<b>Report : </b><a href="myreportcetak.php?pid=<?=$ticket_id?>" title="MS.Excell Format File" value="Print">
								<img src="images\xls.png" alt="" width="20%" height="auto" ></img>
								</a>
								<? if(($_SESSION['user_level']=='101')||($_SESSION['user_level']=='102')||($_SESSION['user_level']=='103')){?>
								<a href="pdf/genratepdf.php?ticketID=<?=$ticket_id?>" target="_blank" title="PDF Format File" value="Print">
								<img src="images\pdfnew2.png" alt="" width="18%" height="auto" ></img>
								</a>
								<? } ?>
								<? if(($_SESSION['user_level']=='100')){?>
								<a href="pdf/genratepdfapproval.php?ticketID=<?=$ticket_id?>" target="_blank" title="PDF Format File" value="Print">
								<img src="images\pdfnew2.png" alt="" width="18%" height="auto" ></img>
								</a>
								<? } ?>
								</center>								
							</td>									
								</tr>
							<? }else{ ?>
								<tr><th style="border:0;color:#ffffff;">Category  </th><th style="border:0;color:#ffffff;">:</th><td style="border:0;">
								<!--<input type="text" value="<!?=$dtmyticket->ticketsubcategory2_name;?>" style="width:155%;" readonly></td>-->
									<? 
										$qcektipebrgs = mysql_query("SELECT kode_tipebrg, keterangan FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$_GET['pid']."'");
										$rcektipebrgs = mysql_fetch_object($qcektipebrgs);
										$keterangan = ucwords(strtolower($rcektipebrgs->keterangan));
									?>
									<? if(($rcektipebrgs->kode_tipebrg = 'RQS-03-000112')||($rcektipebrgs->kode_tipebrg = 'RQS-03-000113')||($rcektipebrgs->kode_tipebrg = 'RQS-03-000114')){?>
										<input type="text" value="<?="Request New Item";?>" style="width:auto;color:black;" readonly>
									<? }elseif(($rcektipebrgs->kode_tipebrg = 'RQS-03-000112replace')||($rcektipebrgs->kode_tipebrg = 'RQS-03-000113replace')||($rcektipebrgs->kode_tipebrg = 'RQS-03-000114replace')){?>
										<input type="text" value="<?="Request Replace Item";?>" style="width:auto;color:blue;" readonly>
									<? } ?></td>								
								<td style="border:0;text-align:right;"><center>
								<b>Report : </b><a href="myreportcetak.php?pid=<?=$ticket_id?>" title="MS.Excell Format File" value="Print">
								<img src="images\xls.png" alt="" width="20%" height="auto" ></img>
								</a>
								<? if(($_SESSION['user_level']=='101')||($_SESSION['user_level']=='102')||($_SESSION['user_level']=='103')){?>
								<a href="pdf/genratepdf.php?ticketID=<?=$ticket_id?>" target="_blank" title="PDF Format File" value="Print">
								<img src="images\pdfnew2.png" alt="" width="18%" height="auto" ></img>
								</a>
								<? } ?>
								<? if(($_SESSION['user_level']=='100')){?>
								<a href="pdf/genratepdfapproval.php?ticketID=<?=$ticket_id?>" target="_blank" title="PDF Format File" value="Print">
								<img src="images\pdfnew2.png" alt="" width="18%" height="auto" ></img>
								</a>
								<? } ?>
								</center>								
							</td>
								</tr>
							<? } ?>
							<tr>
							<th style="border:0;color:#ffffff;">Skala Priority  </th><th style="border:0;color:#ffffff;">:</th><td style="border:0;">
							<!--?if($dtmyticket->ticketpriority_id=='1'){?-->
							<? 
								$qCekSLA = mysql_query("SELECT ticketpriority_id,ticket_defaultsla FROM ITH_TICKET_HEADER 
											WHERE ticket_id = '$_GET[pid]'");
								$rCekSLA = mysql_fetch_object($qCekSLA); 
							?>
							<?if($rCekSLA->ticket_defaultsla=='1'){?>
							<input type="text" value="<?='High';?>" style="width:auto;color:red;" readonly>
							<?}elseif($rCekSLA->ticketpriority_id=='2'){?>
							<input type="text" value="<?='Medium';?>" style="width:auto;color:blue;" readonly>
							<?}elseif($rCekSLA->ticketpriority_id=='3'){?>
							<input type="text" value="<?='Low';?>" style="width:auto;color:black;" readonly>							
							<? }else{ ?>
							<input type="text" value="<?='High';?>" style="width:auto;color:red;" readonly>	
							<? } ?>
							</td>
							<!--?if($dtmyticket->ticketpriority_id==''){?>
							<th style="border:0;color:#ffffff;">Time&nbsp;Finish&nbsp;:
							<td style="border:0;">
							<input type="text" value="<!?='-';?>" style="width:150%;color:red;margin-left:-50px;" readonly>
							</td></th>	
							<!?}elseif($dtmyticket->ticketpriority_id!=''){?>							
							<th style="border:0;color:#ffffff;">Time&nbsp;Finish&nbsp;:
							<td style="border:0;"> 
							<!? 
								$qcektd = mysql_query("SELECT * FROM ITH_TICKETPRIORITY WHERE ticketpriority_id = '$dtmyticket->ticketpriority_id'");
								$rcektd = mysql_fetch_object($qcektd); 
								$nextTimeHour = (substr($dtmyticket->ticket_createtime,0,2))+$rcektd->ticketpriority_hour;							
								$timefinished = $dtmyticket->ticket_createtime+$nextTimeHour;
								$nextTimeMinutes = substr($dtmyticket->ticket_createtime,2);
								$totalTimeFinished = $nextTimeHour.$nextTimeMinutes;
								$TimeInterval = $nextTimeHour-(substr($dtmyticket->ticket_createtime,0,2));
							?>
							<input type="text" value="<!?=$totalTimeFinished;?>" style="width:150%;color:red;margin-left:-50px;" readonly>
							</td></th>
							<!? } ?-->
							</tr>			
							<tr>
							<th style="border:0;color:#ffffff;">Ticket&nbsp;Status  </th><th style="border:0;color:#ffffff;">:</th>
							<td style="border:0;">
							<?if($dtmyticket->ticketstatus_id=='1'){?>
							<input type="text" value="<?=$dtmyticket->ticketstatus_name;?>" style="width:auto;color:red;" readonly>
							<?}elseif($dtmyticket->ticketstatus_id=='2'){?>
							<input type="text" value="<?=$dtmyticket->ticketstatus_name;?>" style="width:auto;color:orange;" readonly>
							<?}elseif($dtmyticket->ticketstatus_id=='3'){?>
							<input type="text" value="<?=$dtmyticket->ticketstatus_name;?>" style="width:auto;color:black;" readonly>
							<?}elseif($dtmyticket->ticketstatus_id=='0'){?>
							<input type="text" value="<?=$dtmyticket->ticketstatus_name;?>" style="width:auto;color:blue;" readonly>
							<?}elseif($dtmyticket->ticketstatus_id=='5'){?>
							<input type="text" value="<?=$dtmyticket->ticketstatus_name;?>" style="width:auto;color:black;" readonly>
							<? } ?>
							</td>
								<? 
									$qcekbeforeReffTicket = mysql_query("SELECT ticketreferencestatus_id, ticketreference_id FROM ITH_TICKET_HEADER
									WHERE ticket_id = '".$_GET['pid']."'");
									$rcekbeforeReffTicket = mysql_fetch_object($qcekbeforeReffTicket);
									if($rcekbeforeReffTicket->ticketreference_id!=''){
								?>									
									<th style="border:0;color:#ffffff;">Ref&nbsp;ID</th>
									<td style="border:0;"><input type="text" value="<?=$rcekbeforeReffTicket->ticketreference_id;?>" style="width:160px;color:blue;margin-left:-30px;" readonly></td>
									<? }elseif($rcekbeforeReffTicket->ticketreference_id==''){ ?>		
									<th style="border:0;color:#ffffff;">Ticket&nbsp;Ref&nbsp;ID</th><th style="border:0;color:#ffffff;">:</th>
									<td style="border:0;"><input type="text" value="<?='-';?>" style="width:10px;color:blue;" readonly></td>									
									<? } ?>	
							</tr>			
						</table>  
					</td>
				</tr>
			</tbody>
		</table>
		<table class="table table-condensed table-bordered table-hover" cellpadding="0" cellspacing="0" style="">
		<tbody>
				<tr>
					<td style="width:200px">
						<table style="border:0;">
						
							<tr><th style="font-weight:normal;border:0;"><font color="#ffffff"><b>Ticket&nbsp;Subject : </b></font><br> <?=$dtmyticket->ticket_subject;?></th></tr>
							<tr><th style="border:0;color:#ffffff;">Ticket&nbsp;Description  </th></tr>						
							<tr><td style="border:0;"><?=$dtmyticket->ticket_problem;?></td></tr>											
						</table>  
					</td>				
				</tr>
		</tbody>		
		</table>
		
<? if($_SESSION['user_id']!='001484'){ ?>	
<!-- ################################################ PERMINTAAN BARANG DARI CABANG ############################################################# -->
<? 
	$qCekTipeKodeBarang = mysql_query("SELECT DISTINCT * FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$_GET['pid']."'");
	$rCekTipeKodeBarang = mysql_fetch_object($qCekTipeKodeBarang);
?>
<? if(($rCekTipeKodeBarang->tickettransferto_outletcode=='')||($rCekTipeKodeBarang->tickettransferto_outletcode=='-')){ ?>
	<? if(($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000112move")&&($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000113move")&&
		  ($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000114move")){ ?>
			<? include("reqstore_admin_movement.php");?>
	<? }elseif($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000112move"){ ?>
			<? include("reqstore_admin_movement.php");?>
	<? }elseif($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000113move"){ ?>
			<? include("reqstore_admin_movement.php");?>
	<? }elseif($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000114move"){ ?>
			<? include("reqstore_admin_movement.php");?>
	<? }else{ ?>
			<? include("reqstore_admin.php");?>
	<? } ?>
<? }elseif(($rCekTipeKodeBarang->tickettransferto_outletcode!='')||($rCekTipeKodeBarang->tickettransferto_outletcode!='-')){ ?>
     <? if($rCekTipeKodeBarang->transfer_date!=''){ ?>
		<? include("reqstore_admin_movement_transfered_commentfsd.php");?>
	 <? }elseif($rCekTipeKodeBarang->transfer_date==''){ ?>
		<? include("reqstore_admin_movement.php");?>
		<? include("reqstore_admin_movement_transferfsd.php"); ?>
	 <? } ?>
<? } ?>

<!-- ################################################## APPROVAL TRACKING ###################################################################### -->

		<!--? 
			$qCekTicketReffIDnya = mysql_query("SELECT ticketreferencestatus_id FROM ITH_TICKET_HEADER WHERE ticket_id = '".$_GET['pid']."'");
			$rCekTicketReffIDnya = mysql_fetch_object($qCekTicketReffIDnya);
		?>
		<!--? if($rCekTicketReffIDnya->ticketreferencestatus_id!='1'){ ?>
			<p><!? /* include('approval_activity_tracking.php');*/ include('approval_tracking.php');?></p>
		<!? }elseif($rCekTicketReffIDnya->ticketreferencestatus_id=='1'){ ?>
			<p><!? /* include('approval_activity_tracking.php');*/ include('approval_trackingticketreff.php');?></p>
		<!? } ?-->
<!-- ############################################################################################################################################ -->								
<!-- ################################################## ACTIVITY TRACKING ####################################################################### -->

		<!--? 
			$qCekTicketReffIDnya = mysql_query("SELECT ticketreferencestatus_id FROM ITH_TICKET_HEADER WHERE ticket_id = '".$_GET['pid']."'");
			$rCekTicketReffIDnya = mysql_fetch_object($qCekTicketReffIDnya);
		?>
		<!? if($rCekTicketReffIDnya->ticketreferencestatus_id!='1'){ ?>
			<p><!? /* include('approval_activity_tracking.php');*/ include('activity_tracking.php');?></p>
		<!? }elseif($rCekTicketReffIDnya->ticketreferencestatus_id=='1'){ ?>
			<p><!? /* include('approval_activity_tracking.php');*/ include('activity_trackingticketreff.php');?></p>
		<!? } ?-->	

		<? 
			$qCekTicketReffIDnya = mysql_query("SELECT ticketreferencestatus_id FROM ITH_TICKET_HEADER WHERE ticket_id = '".$_GET['pid']."'");
			$rCekTicketReffIDnya = mysql_fetch_object($qCekTicketReffIDnya);
		?>
		<? if($rCekTicketReffIDnya->ticketreferencestatus_id!='1'){ ?>
			<p><? /* include('approval_activity_tracking.php');*//* include('activity_tracking.php');*/ #include('activity_tracking_magic.php');?>
			<? include('sequenceactivitiesfsd.php');?>
			</p>
		<? }elseif($rCekTicketReffIDnya->ticketreferencestatus_id=='1'){ ?>
			<p><? /* include('approval_activity_tracking.php');*/ include('activity_trackingticketreff.php');?></p>
		<? } ?>			
<!-- ############################################################################################################################################ -->								
<? }elseif(($_SESSION['user_id']=='001484')||($_GET['uid']=='001484')){ ?>	
		<? include("reqstore_admin_movement.php");?>
		<? include('sequenceactivitiesfsd.php');?>
		<? include("reqstore_admin_movement_transferfsd.php"); ?>	TEST	
<? } ?> 
					<br><br><br>		

<br> 
		<?
			$qcekimg = mysql_query("SELECT * FROM ITH_LOGUPLOADIMG where ticket_id = '$_GET[pid]'");
			$rcekimg = mysql_fetch_object($qcekimg);
			if($rcekimg->id_img ==''){
		?>
			<font color="#ffffff"><b><u>Image Uploaded By Store/User</u><br><center>Sorry, No Image Uploaded.</b></center></font>
		<? }else{ ?>
			<b><font color="Red">Image Uploaded By PIC</font></b>
			<link rel="stylesheet" href="css/w3.css">
			<center>	
					<table border="0" style="margin-top:20px;">
					<tr>
					<? 
						$qgetimg = mysql_query("SELECT * FROM ITH_LOGUPLOADIMG where ticket_id = '$_GET[pid]'");
						while($rgetimg = mysql_fetch_object($qgetimg)){
					?>
					<td> 
					<center><img src="<?="http://".$_SERVER['SERVER_NAME']."/".$rgetimg->img_location.$rgetimg->img_name;?>" style="height:120px;width:120px;margin-right:5px;margin-bottom:0px;" onclick="document.getElementById('<?=$rgetimg->id_img?>').style.display='block'"></img></center>
					</td>
					
				
					
					  <div id="<?=$rgetimg->id_img?>" class="w3-modal" onclick="this.style.display='none'">
						<span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
						<div class="w3-modal-content w3-animate-zoom" style="margin-top:-90px;">
						  <img src="<?='http://servicedesk.ffi.co.id/'.$rgetimg->img_location.$rgetimg->img_name?>" style="width:80%;margin-top:30px;margin-left:50px;">
						</div>
					  </div>
					  
					<? } ?>
					</tr>
					</table>
			</center>			
		<? } ?>		
	

		<? 
			$pid = $_GET['pid']; $uid = $_GET['uid'];
		/*	$qcekstsapprvl = mysql_query("SELECT ticketapprovalstatus_id,ticketapprovalstatus_id2,ticketapprovalstatus_id3 FROM ITH_TICKET_HEADER
			WHERE ticket_id = '$pid'"); */
			$qcekstsapprvl = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.user_realname, ITH_TICKETSTATUS.ticketstatus_name, ITH_DEPARTEMEN.nama_departemen, app.ticketstatusapproval_activity, app.statusApproval, act.statusActivity, act.statusActivityID 
				, (case when ITH_TICKET_HEADER.ticketapproval_id1 = '".$_SESSION['user_nik']."' then 1 
					when ITH_TICKET_HEADER.ticketapproval_id2 = '".$_SESSION['user_nik']."' then 1 
					when ITH_TICKET_HEADER.ticketapproval_id3 = '".$_SESSION['user_nik']."' then 1 
					when ITH_TICKET_HEADER.ticketapproval_id4 = '".$_SESSION['user_nik']."' then 1 
					else 0 end
				) as myApproval, 

				(CASE WHEN DT.ticketdetail_pichandleby = '".$_SESSION['user_nik']."' THEN 1 
					WHEN DT.ticketdetail_pichandleby2 = '".$_SESSION['user_nik']."' THEN 1 
					WHEN DT.ticketdetail_pichandleby3 = '".$_SESSION['user_nik']."' THEN 1 
					WHEN DT.ticketdetail_pichandleby4 = '".$_SESSION['user_nik']."' THEN 1 
					ELSE 0 END
				) AS myPIC,	
				ITHUX.user_nik PicNik1,
				ITHUX2.user_nik PicNik2,
				ITHUX3.user_nik PicNik3,
				ITHUX4.user_nik PicNik4,					
				ITH_LOGAPPROVAL.ticketstatusapproval_activity, ITH_TICKETSTATUSAPRVL.ticketstatusapproval_name
				FROM ITH_TICKET_HEADER 
				LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id = ITH_TICKETSTATUS.ticketstatus_id
				LEFT JOIN ITH_TICKET_DETAIL DT ON DT.ticketdetail_id = ITH_TICKET_HEADER.ticket_id
				 LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORYNEW.ticketsubcategory2_code
				 LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik

				 LEFT JOIN ITH_USER ITHUX ON DT.ticketdetail_pichandleby = ITHUX.user_nik
				 LEFT JOIN ITH_USER ITHUX2 ON DT.ticketdetail_pichandleby2 = ITHUX2.user_nik
				 LEFT JOIN ITH_USER ITHUX3 ON DT.ticketdetail_pichandleby3 = ITHUX3.user_nik
				 LEFT JOIN ITH_USER ITHUX4 ON DT.ticketdetail_pichandleby4 = ITHUX4.user_nik				
				 LEFT JOIN ITH_DEPARTEMEN ON ITH_TICKET_HEADER.ticket_udeptid = ITH_DEPARTEMEN.kode_departemen
				 LEFT JOIN ITH_LOGAPPROVAL ON ITH_TICKET_HEADER.ticket_id = ITH_LOGAPPROVAL.ticket_id
				 LEFT JOIN ITH_TICKETSTATUSAPRVL ON ITH_LOGAPPROVAL.ticketstatusapproval_activity = ITH_TICKETSTATUSAPRVL.ticketstatusapproval_id
				LEFT JOIN (
					SELECT il.ticket_id, il.ticketstatusapproval_activity, sts.ticketstatusapproval_name statusApproval 
					, MAX(STR_TO_DATE(CONCAT(il.ticketapproval_createddate, ' ', il.ticketapproval_createdtime), '%d/%m/%Y %h:%i')) 
					FROM ITH_LOGAPPROVAL il
					LEFT JOIN ITH_TICKETSTATUSAPRVL sts ON sts.ticketstatusapproval_id=il.ticketstatusapproval_activity
					WHERE il.ticketapproval_bynik = '".$_SESSION['user_nik']."' 
					GROUP BY il.ticket_id
					ORDER BY STR_TO_DATE(CONCAT(il.ticketapproval_createddate, ' ', il.ticketapproval_createdtime), '%d/%m/%Y %h:%i') DESC
				) app on app.ticket_id= ITH_TICKET_HEADER.ticket_id
				LEFT JOIN (
					SELECT ilr.ticket_id, ilr.ticketstatus_report, stsx.ticketstatus_name statusActivity, stsx.ticketstatusfrompic_id  statusActivityID  
					, MAX(STR_TO_DATE(CONCAT(ilr.ticketreport_createddate, ' ', ilr.ticketreport_createdtime), '%d/%m/%Y %h:%i')) 
					FROM ITH_LOGREPORT ilr
					LEFT JOIN ITH_TICKETSTATUS stsx ON stsx.ticketstatusfrompic_id=ilr.ticketstatus_report
					LEFT JOIN ITH_USER ithu ON ithu.user_realname=ilr.ticketrespond_by
					WHERE ilr.ticketrespond_by = '".$_SESSION['user_realname']."' 
					GROUP BY ilr.ticket_id
					ORDER BY STR_TO_DATE(CONCAT(ilr.ticketreport_createddate, ' ', ilr.ticketreport_createdtime), '%d/%m/%Y %h:%i') DESC
				) act ON act.ticket_id= ITH_TICKET_HEADER.ticket_id				
				WHERE ITH_TICKET_HEADER.ticket_id = '".$_GET['pid']."'");
			$rcekstsapprvl = mysql_fetch_object($qcekstsapprvl);
			#if(($rcekstsapprvl->ticketapprovalstatus_id3=='2')||($rcekstsapprvl->ticketapprovalstatus_id2=='2')||($rcekstsapprvl->ticketapprovalstatus_id=='2')){
			if(($rcekstsapprvl->ticketapproval_by3== $_SESSION['user_realname'])||
			($rcekstsapprvl->ticketapproval_by2==$_SESSION['user_realname'])||
			($rcekstsapprvl->ticketapproval_by1==$_SESSION['user_realname'])
			&&(($rcekstsapprvl->ticketapprovalstatus_id3=='2')||
			($rcekstsapprvl->ticketapprovalstatus_id2=='2')||
			($rcekstsapprvl->ticketapprovalstatus_id=='2'))){
		?>
					<table width="100%">
						<? if($_SESSION['user_level']==3){ ?><br>
							<?
								$qCekStatusApprovelAM = mysql_query("SELECT ticketapprovalstatus_id,ticketapprovalstatus_id2,ticketapprovalstatus_id3 
																FROM ITH_TICKET_HEADER WHERE ticket_id = '".$_GET['pid']."'");
								$rCekStatusApprovelAM = mysql_fetch_object($qCekStatusApprovelAM);
								if($rCekStatusApprovelAM->ticketapprovalstatus_id=='2'){	
							?>						
									<tr><th style="border:0;color:#ffffff;">Please Apporval This Ticket For Area Manager (AM) </th></tr>
									<tr><th style="border:0;color:#ffffff;"></th></tr>						
									<tr><td style="border:0;">
									<? 
									$qCekTipeKodeBarang = mysql_query("SELECT DISTINCT * FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$_GET['pid']."'");
									$rCekTipeKodeBarang = mysql_fetch_object($qCekTipeKodeBarang);
									?>
									<? if(($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000112move")&&($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000113move")&&
										  ($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000114move")){ ?>
											<? include("problem_checkapprovalareamanager_movement.php");?>
									<? }elseif($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000112move"){ ?>
											<? include("problem_checkapprovalareamanager_movement.php");?>
									<? }elseif($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000113move"){ ?>
											<? include("problem_checkapprovalareamanager_movement.php");?>
									<? }elseif($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000114move"){ ?>
											<? include("problem_checkapprovalareamanager_movement.php");?>
									<? }else{ ?> 
											<? include("problem_checkapprovalareamanager.php");?>
									<? } ?>								
									<? /*include("problem_checkapprovalsubmgr.php");
									include("problem_checkapprovalareamanager_mail.php");*/ 
									?>
									</td></tr>		
							<? }elseif($rCekStatusApprovelAM->ticketapprovalstatus_id=='1'){ ?>	
									<center><image src="images/approveds2.png" style="text-align:center;background:(#7fd9fc, #6576aa);"></image><br>
									<font color="#ffffff"><b>Sorry, you have approved this ticket. thank you for your participation</b></center></font>
							<? } ?>								
						<? }elseif($_SESSION['user_level']==8){ ?><br>
							<?
								$qCekStatusApprovelROM = mysql_query("SELECT ticketapprovalstatus_id,ticketapprovalstatus_id2,ticketapprovalstatus_id3 
																FROM ITH_TICKET_HEADER WHERE ticket_id = '".$_GET['pid']."'");
								$rCekStatusApprovelROM = mysql_fetch_object($qCekStatusApprovelROM);
								if($rCekStatusApprovelROM->ticketapprovalstatus_id2=='2'){	
							?>							
							<tr><th style="border:0;color:#ffffff;">Please Apporval This Ticket For Regional Operation Manager (ROM)</th></tr>
							<tr><th style="border:0;color:#ffffff;"></th></tr>						
							<tr><td style="border:0;">
														<!--? include("problem_checkapprovalregionalmanager_mail.php");?-->
									<? 
									$qCekTipeKodeBarang = mysql_query("SELECT DISTINCT * FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$_GET['pid']."'");
									$rCekTipeKodeBarang = mysql_fetch_object($qCekTipeKodeBarang);
									?>
									<? if(($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000112move")&&($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000113move")&&
										  ($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000114move")){ ?>
											<? include("problem_checkapprovalregionalmanager_movement.php");?>
									<? }elseif($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000112move"){ ?>
											<? include("problem_checkapprovalregionalmanager_movement.php");?>
									<? }elseif($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000113move"){ ?>
											<? include("problem_checkapprovalregionalmanager_movement.php");?>
									<? }elseif($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000114move"){ ?>
											<? include("problem_checkapprovalregionalmanager_movement.php");?>
									<? }else{ ?> 
											<? include("problem_checkapprovalregionalmanager.php");?>
									<? } ?>	
							</td></tr>	
							<? }elseif($rCekStatusApprovelROM->ticketapprovalstatus_id2=='1'){ ?>	
									<center><image src="images/approveds2.png" style="text-align:center;background:(#7fd9fc, #6576aa);"></image><br>
									<font color="#ffffff"><b>Sorry, you have approved this ticket. thank you for your participation</b></center></font>
							<? } ?>									
						<? }elseif($_SESSION['user_level']==1000){ ?><br>
							<?
								$qCekStatusApprovelROM = mysql_query("SELECT ticketapprovalstatus_id,ticketapprovalstatus_id2,ticketapprovalstatus_id3 
																FROM ITH_TICKET_HEADER WHERE ticket_id = '".$_GET['pid']."'");
								$rCekStatusApprovelROM = mysql_fetch_object($qCekStatusApprovelROM);
								if($rCekStatusApprovelROM->ticketapprovalstatus_id3=='2'){	
							?>							
							<tr><th style="border:0;color:#ffffff;">Please Apporval This Ticket For GM Operation (GMO)</th></tr>
							<tr><th style="border:0;color:#ffffff;"></th></tr>						
							<tr><td style="border:0;">
									<? if(($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000112move")&&($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000113move")&&
										  ($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000114move")){ ?>
											<? include("problem_checkapprovalgmo_movement.php");?>
									<? }elseif($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000112move"){ ?>
											<? include("problem_checkapprovalgmo_movement.php");?>
									<? }elseif($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000113move"){ ?>
											<? include("problem_checkapprovalgmo_movement.php");?>
									<? }elseif($rCekTipeKodeBarang->kode_tipebrg=="RQS-03-000114move"){ ?>
											<? include("problem_checkapprovalgmo_movement.php");?>
									<? }else{ ?> 
											<? include("problem_checkapprovalgmo.php");?>
									<? } ?>								
							</td></tr>	
							<? }elseif($rCekStatusApprovelROM->ticketapprovalstatus_id3=='1'){ ?>	
									<center><image src="images/approveds2.png" style="text-align:center;background:(#7fd9fc, #6576aa);"></image><br>
									<font color="#ffffff"><b>Sorry, you have approved this ticket. thank you for your participation</b></center></font>
							<? } ?>									
						<? } ?>	
					</table> 
		<!-- SEBELUM ADA TIKET REFERENSI -->			
		<? 
			#}elseif(($rcekstsapprvl->ticketapprovalstatus_id3=='1')||($rcekstsapprvl->ticketapprovalstatus_id2=='2')||($rcekstsapprvl->ticketapprovalstatus_id=='2')){
			}elseif((($rcekstsapprvl->PicNik3 == $uid)||($rcekstsapprvl->PicNik2 == $uid)||($rcekstsapprvl->PicNik1 == $uid))&&($rcekstsapprvl->ticketstatus_id=='2')){
		?>		
					<!--<table>
						<tr><th style="border:0;color:#ffffff;">Please Go To Action For This Request</th></tr>
						<tr><th style="border:0;color:#ffffff;"></th></tr>			
						<tr><td style="border:0;"><!? include("problem_checkapprovalpic.php");?></td></tr>	
					</table>-->
					
		<!-- SETELAH ADA TIKET REFERENSI -->			
		<?
			#}elseif(($rcekstsapprvl->ticketapprovalstatus_id3=='1')||($rcekstsapprvl->ticketapprovalstatus_id2=='2')||($rcekstsapprvl->ticketapprovalstatus_id=='2')){
			}elseif((($rcekstsapprvl->PicNik3 == $uid)||($rcekstsapprvl->PicNik2 == $uid)||($rcekstsapprvl->PicNik1 == $uid))&&($rcekstsapprvl->ticketstatus_id=='2')&&($rcekstsapprvl->ticketreferencestatus_id=='1')){
		?>		
					<!--<table>
						<tr><th style="border:0;color:#ffffff;">Please Go To Action For This Request</th></tr>
						<tr><th style="border:0;color:#ffffff;"></th></tr>			
						<tr><td style="border:0;"><!? include("problem_checkapprovalpic.php");?></td></tr>	
					</table> -->
		<?
			}elseif(($rcekstsapprvl->ticketapprovalstatus_id3=='1')||($rcekstsapprvl->ticketapprovalstatus_id2=='1')||($rcekstsapprvl->ticketapprovalstatus_id=='2')){
		?>		
					<!--<table>
							<tr><th style="border:0;color:#ffffff;">Apporval Ticket3 </th></tr>
							<tr><th style="border:0;color:#ffffff;"></th></tr>						
							<tr><td style="border:0;"><!? include("problem_checkapprovalsubmgr.php");?></td></tr>	
					</table> -->
		<?
			}elseif(($rcekstsapprvl->ticketapprovalstatus_id3=='1')&&($rcekstsapprvl->ticketapprovalstatus_id2=='1')&&($rcekstsapprvl->ticketapprovalstatus_id=='1')){
		?>		
			TEST		
		<?
			}
		?>
<? } ?>