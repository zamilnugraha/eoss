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
                    <form class="mbr-form"  method="post" action="index.php?m=form&a=npfsd" id="form1" name="form1" data-form-title="EOSS Form">
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
															$cekItemName = substr($rvSCat['NAMA_BARANG'],-3);
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

																<?if($cekItemName=='OLD'){?>
																	<?='<br>Note : <font color="red"><strong>Item Not Avalaible</strong></font>';?>
																<? } ?>
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
<!-- ##########################################  REPLACEMENT  ################################################################################## -->
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
										<table width="900" border="0" cellspacing="0" style="margin-left:0px;">
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
														<th width="10%">Item&nbsp;Code&nbsp;</th>
														<th width="20%">Item&nbsp;Name&nbsp;</th>	
														<th width="17%">Taging&nbsp;Number</th>														
														<th width="22%">Info&nbsp;Detail</th>	
														<th width="15%">Replacement Item</th>
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
													/*	$qvSCatReplace = "SELECT FSDMSTTRX_STORENEW.*, FSDBRGEQASSET_NEW.* FROM FSDMSTTRX_STORENEW
																		 JOIN FSDBRGEQASSET_NEW ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
																		 WHERE FSDMSTTRX_STORENEW.OUTLET_CODE = '".$_SESSION['user_nik']."' 
																		 AND FSDMSTTRX_STORENEW.ITEM_CODE_REPLACE IS NOT NULL AND FSDMSTTRX_STORENEW.EQTYPECODE IN('EQ0001')";	
													*/	
													$qvSCatReplace = "SELECT FSDMSTTRX_STORENEW.*, FSDBRGEQASSET_NEW.*, 
																		 FSDMSTTRX_STORENEW.ITEM_CODE_REPLACE 
																		 FROM FSDMSTTRX_STORENEW
																		 JOIN FSDBRGEQASSET_NEW ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
																		 WHERE FSDMSTTRX_STORENEW.OUTLET_CODE = '".$_SESSION['user_nik']."' 
																		 AND FSDMSTTRX_STORENEW.ITEM_CODE NOT LIKE 'N%'
																		 AND FSDMSTTRX_STORENEW.EQTYPECODE IN('EQ0001')";	
													
													/*
													$qvSCatReplace = "SELECT DISTINCT FSDMSTTRX_STORENEW.EQTYPECODE, FSDMSTTRX_STORENEW.GROUP_CODE,FSDMSTTRX_STORENEW.OUTLET_CODE, 
																		FSDMSTTRX_STORENEW.ITEM_CODE, FSDBRGEQASSET_NEW.ITEM_NAME,
																		FSDBRGEQASSET_NEW.NOMOR_TAGING, FSDMSTTRX_STORENEW.ITEM_BRAND, FSDMSTTRX_STORENEW.ITEM_MODEL, 
																		FSDMSTTRX_STORENEW.DIMENSI, 
																		FSDMSTTRX_STORENEW.ITEM_PRICE, FSDMSTTRX_STORENEW.UMUR_BUKU, FSDMSTTRX_STORENEW.UMUR_BUKU_MAX, 
																		FSDMSTTRX_STORENEW.NILAI_BUKU,
																		FSDMSTTRX_STORENEW.ITEM_CODE_REPLACE, FSDBRGEQASSET_NEW2.ITEM_NAME AS ITEMNAMEREPLACE
																		FROM FSDMSTTRX_STORENEW 
																		JOIN FSDBRGEQASSET_NEW ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
																		JOIN FSDBRGEQASSET_NEW FSDBRGEQASSET_NEW2 ON  FSDMSTTRX_STORENEW.ITEM_CODE_REPLACE = FSDBRGEQASSET_NEW2.ITEM_CODE
																		WHERE  FSDMSTTRX_STORENEW.OUTLET_CODE = '".$_SESSION['user_nik']."' AND 
																		FSDMSTTRX_STORENEW.EQTYPECODE IN('EQ0001')";	
													*/					 
														$qobjParseReplace = oci_parse ($objConnectReplace, $qvSCatReplace);  
																		    oci_execute ($qobjParseReplace,OCI_DEFAULT);   
														while($rvSCatReplace = oci_fetch_object($qobjParseReplace,OCI_BOTH))  
														{  
															$jumlah_desimal  = "0";
															$pemisah_desimal = ".";
															$pemisah_ribuan  = ".";		
															$cekItemName = substr($rvSCatReplace->ITEM_NAME,-3);
														?> 																					
														<? 
																$qvSCatReplace2 = "SELECT DISTINCT 
																		 FSDMSTTRX_STORENEW.ITEM_CODE_REPLACE AS ITEMCODEREPLACE, FSDBRGEQASSET_NEW2.ITEM_NAME AS ITEMNAMEREPLACE,
																		 FSDBRGEQASSET_NEW.NOMOR_TAGING AS NOTAGREPLACE
																	 	 FROM FSDMSTTRX_STORENEW 
																		 JOIN FSDBRGEQASSET_NEW ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
																	 	 JOIN FSDBRGEQASSET_NEW FSDBRGEQASSET_NEW2 ON  FSDMSTTRX_STORENEW.ITEM_CODE_REPLACE = FSDBRGEQASSET_NEW2.ITEM_CODE
 																		 WHERE FSDMSTTRX_STORENEW.OUTLET_CODE = '".$_SESSION['user_nik']."' AND 
																		 FSDMSTTRX_STORENEW.ITEM_CODE = '".$rvSCatReplace->ITEM_CODE."' AND FSDBRGEQASSET_NEW.ITEM_NAME LIKE '%OLD' AND
																		 FSDMSTTRX_STORENEW.EQTYPECODE IN('EQ0001')";
																$qobjParseReplace2 = oci_parse ($objConnectReplace, $qvSCatReplace2);  
																					 oci_execute ($qobjParseReplace2,OCI_DEFAULT); 	
																$rvSCatReplace2 = oci_fetch_object($qobjParseReplace2,OCI_BOTH);						
															?>
														<tr>
															<td width="10%">
																<center><?=$rvSCatReplace->ITEM_CODE;?>																
																</center>
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
																<?='Age  : <strong>'.$rvSCatReplace->UMUR_BUKU.' </strong><br>';?>
																<?='Book Value : <strong>Rp.&nbsp;'.number_format($rvSCatReplace->NILAI_BUKU, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?>
																<?if($cekItemName=='NEW'){?>
																	<?='<br>New Price : <strong>Rp.&nbsp;'.number_format($rvSCatReplace->ITEM_PRICE, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?>
																<? } ?>
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
																<? if($rvSCatReplace->ITEM_CODE_REPLACE !=''){ ?>
																	<center><input type="checkBox" id="<?=$rvSCatReplace->ITEM_CODE;?>" onclick="<?='myFunction'.$rvSCatReplace->ITEM_CODE;?>()" name="cekseqcoldreplace[]" value="<?=$rvSCatReplace->NOMOR_TAGING;?>" style="display:show;" /></center>
															    <? }elseif($rvSCatReplace->ITEM_CODE_REPLACE ==''){ ?>
																	<center><input type="checkbox" id="<?=$rvSCatReplace->ITEM_CODE;?>" name="cekseqcoldreplace[]" value="<?=$rvSCatReplace->NOMOR_TAGING;?>" style="display:show;position:relative;" /></center>
															    <? } ?>																	   
																<!--<center><input type="checkBox" id="<!?=$rvSCatReplace->ITEM_CODE;?>" onclick="<!?='myFunction'.$rvSCatReplace->ITEM_CODE;?>()" name="cekseqcoldreplace[]" value="<!?=$rvSCatReplace->NOMOR_TAGING;?>" style="display:show;" /></center>-->
																<!--<center><input type="checkbox" id="<!?='cekseqcoldreplaceA00337A120320192';?>"  onclick="myFunction()"></center>-->
																<!-- cekseqcoldreplaceA00337A120320192 -->
																<!--<p id="text" style="display:none"><!?='cekseqcoldreplace'.$rvSCatReplace["NOMOR_TAGING"];?></p>-->
																<p id="<?='text'.$rvSCatReplace->ITEM_CODE?>" style="display:none">
																<? 
																	$qvSCatReplace2 = "SELECT DISTINCT 
																			 FSDMSTTRX_STORENEW.ITEM_CODE_REPLACE AS ITEMCODEREPLACE, 
																			 FSDBRGEQASSET_NEW2.ITEM_NAME AS ITEMNAMEREPLACE,
																			 FSDBRGEQASSET_NEW.NOMOR_TAGING AS NOTAGREPLACE, 
																			 FSDMSTTRX_STORENEW.ITEM_MODEL AS ITEMMODELREPLACE,
																			 FSDMSTTRX_STORENEW.ITEM_BRAND AS ITEMBRANDREPLACE,
																			 FSDMSTTRX_STORENEW.UMUR_BUKU AS UMURBUKUREPLACE,
																			 FSDMSTTRX_STORENEW.NILAI_BUKU AS NILAIBUKUREPLACE,
																			 FSDMSTTRX_STORENEW.ITEM_PRICE AS ITEMPRICEREPLACE
																			 FROM FSDMSTTRX_STORENEW 
																			 JOIN FSDBRGEQASSET_NEW ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
																			 JOIN FSDBRGEQASSET_NEW FSDBRGEQASSET_NEW2 ON  FSDMSTTRX_STORENEW.ITEM_CODE_REPLACE = FSDBRGEQASSET_NEW2.ITEM_CODE
																			 WHERE FSDMSTTRX_STORENEW.OUTLET_CODE = '".$_SESSION['user_nik']."' AND 
																			 FSDMSTTRX_STORENEW.ITEM_CODE = '".$rvSCatReplace->ITEM_CODE."' AND FSDBRGEQASSET_NEW.ITEM_NAME LIKE '%OLD' AND
																			 FSDMSTTRX_STORENEW.EQTYPECODE IN('EQ0001')";
																	$qobjParseReplace2 = oci_parse ($objConnectReplace, $qvSCatReplace2);  
																						 oci_execute ($qobjParseReplace2,OCI_DEFAULT); 	
																	$rvSCatReplace2 = oci_fetch_object($qobjParseReplace2,OCI_BOTH);						
																?>		
																<? if($rvSCatReplace2->ITEMCODEREPLACE!=''){ ?>
																	<b><u>Replace Item : </u></b><br>
																	<b>Item Code : </b><?=$rvSCatReplace2->ITEMCODEREPLACE;?><br>
																	<b>Item Name : </b><?=$rvSCatReplace2->ITEMNAMEREPLACE;?><br>
																	<!--<b>No.Taging : </b><!--?=$rvSCatReplace2->NOTAGREPLACE;?-->
																	<b><u>Info Detail : </u></b><br>
																	<b>Model Name : </b><?=$rvSCatReplace2->ITEMMODELREPLACE;?><br>
																	<b>Brand Name : </b><?=$rvSCatReplace2->ITEMBRANDREPLACE;?><br>
																	<!--<b>Age : </b><!?=$rvSCatReplace2->UMURBUKUREPLACE;?><br>
																	<b>Book Value : </b><!?=$rvSCatReplace2->NILAIBUKUREPLACE;?><br>-->
																	<?='New Price : <strong>Rp.&nbsp;'.number_format($rvSCatReplace2->ITEMPRICEREPLACE, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?><br>
																<? } ?>	
																</p>
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
										<table width="900" border="0" cellspacing="0" style="margin-left:0px;">
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
														<th width="10%">Item&nbsp;Code&nbsp;</th>
														<th width="20%">Item&nbsp;Name&nbsp;</th>	
														<th width="17%">Taging&nbsp;Number</th>														
														<th width="22%">Info&nbsp;Detail</th>	
														<th width="15%">Replacement Item</th>
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
													/*	$qvSCatReplace = "SELECT DISTINCT FSDMSTTRX_STORENEW.EQTYPECODE, FSDMSTTRX_STORENEW.GROUP_CODE,FSDMSTTRX_STORENEW.OUTLET_CODE, FSDMSTTRX_STORENEW.ITEM_CODE, FSDBRGEQASSET_NEW.ITEM_NAME,
																		FSDBRGEQASSET_NEW.NOMOR_TAGING, FSDMSTTRX_STORENEW.ITEM_BRAND, FSDMSTTRX_STORENEW.ITEM_MODEL, FSDMSTTRX_STORENEW.DIMENSI, 
																		FSDMSTTRX_STORENEW.ITEM_PRICE, FSDMSTTRX_STORENEW.UMUR_BUKU, FSDMSTTRX_STORENEW.UMUR_BUKU_MAX, FSDMSTTRX_STORENEW.NILAI_BUKU
																		FROM FSDMSTTRX_STORENEW 
																		JOIN FSDBRGEQASSET_NEW ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
																		WHERE  FSDMSTTRX_STORENEW.OUTLET_CODE = '".$_SESSION['user_nik']."' AND 
																		FSDMSTTRX_STORENEW.EQTYPECODE IN('EQ0002')";	
													*/
														$qvSCatReplace = "SELECT FSDMSTTRX_STORENEW.*, FSDBRGEQASSET_NEW.*, FSDMSTTRX_STORENEW.ITEM_CODE_REPLACE 
																		 FROM FSDMSTTRX_STORENEW
																		 JOIN FSDBRGEQASSET_NEW ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
																		 WHERE FSDMSTTRX_STORENEW.OUTLET_CODE = '".$_SESSION['user_nik']."' 
																		 AND FSDMSTTRX_STORENEW.ITEM_CODE NOT LIKE 'N%'
																		 AND FSDMSTTRX_STORENEW.EQTYPECODE IN('EQ0002')";	
													$qobjParseReplace = oci_parse ($objConnectReplace, $qvSCatReplace);  
																		    oci_execute ($qobjParseReplace,OCI_DEFAULT);   
														while($rvSCatReplace = oci_fetch_object($qobjParseReplace,OCI_BOTH))  
														{  
															$jumlah_desimal  = "0";
															$pemisah_desimal = ".";
															$pemisah_ribuan  = ".";		
															$cekItemName = substr($rvSCatReplace->ITEM_NAME,-3);
														?> 																					
													
														<tr>
															<td width="10%">
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
																<?if($cekItemName=='NEW'){?>
																	<?='<br>New Price : <strong>Rp.&nbsp;'.number_format($rvSCatReplace->ITEM_PRICE, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?>
																<? } ?>															
															</td>													
														<!--<td width="13%">
																<center><input type="checkbox" name="cekseqheatreplace[]" value="<!?=$rvSCatReplace->NOMOR_TAGING;?>" id="<!?='cekseqheatreplace'.$rvSCatReplace->NOMOR_TAGING;?>" style="display:show;" /></center>
															</td>-->
															<td width="13%">																
																<script>
																function <?='myFunctionHeat'.$rvSCatReplace->ITEM_CODE;?>() {
																  var checkBox = document.getElementById("<?=$rvSCatReplace->ITEM_CODE;?>");
																  var text = document.getElementById("<?='text'.$rvSCatReplace->ITEM_CODE;?>");
																  if (checkBox.checked == true){
																	text.style.display = "block";
																  } else {
																	 text.style.display = "none";
																  }
																}
																</script>		
																<? if($rvSCatReplace->ITEM_CODE_REPLACE !=''){ ?>
																	<center><input type="checkBox" id="<?=$rvSCatReplace->ITEM_CODE;?>" onclick="<?='myFunctionHeat'.$rvSCatReplace->ITEM_CODE;?>()" name="cekseqheatreplace[]" value="<?=$rvSCatReplace->NOMOR_TAGING;?>" style="display:show;" /></center>
															    <? }elseif($rvSCatReplace->ITEM_CODE_REPLACE ==''){ ?>
																	<center><input type="checkbox" id="<?=$rvSCatReplace->ITEM_CODE;?>" name="cekseqheatreplace[]" value="<?=$rvSCatReplace->NOMOR_TAGING;?>" style="display:show;position:relative;" /></center>
															    <? } ?>																  
																
																<!--<center><input type="checkbox" id="<!?='cekseqcoldreplaceA00337A120320192';?>"  onclick="myFunction()"></center>-->
																<!-- cekseqcoldreplaceA00337A120320192 -->
																<!--<p id="text" style="display:none"><!?='cekseqcoldreplace'.$rvSCatReplace["NOMOR_TAGING"];?></p>-->
																<p id="<?='text'.$rvSCatReplace->ITEM_CODE?>" style="display:none">
																<? 
																	$qvSCatReplaceHeat = "SELECT DISTINCT 
																			 FSDMSTTRX_STORENEW.ITEM_CODE_REPLACE AS ITEMCODEREPLACE, 
																			 FSDBRGEQASSET_NEW2.ITEM_NAME AS ITEMNAMEREPLACE,
																			 FSDBRGEQASSET_NEW.NOMOR_TAGING AS NOTAGREPLACE, 
																			 FSDMSTTRX_STORENEW.ITEM_MODEL AS ITEMMODELREPLACE,
																			 FSDMSTTRX_STORENEW.ITEM_BRAND AS ITEMBRANDREPLACE,
																			 FSDMSTTRX_STORENEW.UMUR_BUKU AS UMURBUKUREPLACE,
																			 FSDMSTTRX_STORENEW.NILAI_BUKU AS NILAIBUKUREPLACE,
																			 FSDMSTTRX_STORENEW.ITEM_PRICE AS ITEMPRICEREPLACE
																			 FROM FSDMSTTRX_STORENEW 
																			 JOIN FSDBRGEQASSET_NEW ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
																			 JOIN FSDBRGEQASSET_NEW FSDBRGEQASSET_NEW2 ON  FSDMSTTRX_STORENEW.ITEM_CODE_REPLACE = FSDBRGEQASSET_NEW2.ITEM_CODE
																			 WHERE FSDMSTTRX_STORENEW.OUTLET_CODE = '".$_SESSION['user_nik']."' AND 
																			 FSDMSTTRX_STORENEW.ITEM_CODE = '".$rvSCatReplace->ITEM_CODE."' AND FSDBRGEQASSET_NEW.ITEM_NAME LIKE '%OLD' AND
																			 FSDMSTTRX_STORENEW.EQTYPECODE IN('EQ0002') 
																			 AND FSDMSTTRX_STORENEW.ITEM_CODE = '".$rvSCatReplace->ITEM_CODE."'";
																	$qobjParseReplaceHeat = oci_parse ($objConnectReplace, $qvSCatReplaceHeat);  
																						 oci_execute ($qobjParseReplaceHeat,OCI_DEFAULT); 	
																	$rvSCatReplaceHeat = oci_fetch_object($qobjParseReplaceHeat,OCI_BOTH);						
																?>		
																<? if($rvSCatReplaceHeat->ITEMCODEREPLACE!=''){ ?>
																	<b><u>Replace Item : </u></b><br>
																	<b>Item Code : </b><?=$rvSCatReplaceHeat->ITEMCODEREPLACE;?><br>
																	<b>Item Name : </b><?=$rvSCatReplaceHeat->ITEMNAMEREPLACE;?><br>
																	<!--<b>No.Taging : </b><!--?=$rvSCatReplaceHeat->NOTAGREPLACE;?-->
																	<b><u>Info Detail : </u></b><br>
																	<b>Model Name : </b><?=$rvSCatReplaceHeat->ITEMMODELREPLACE;?><br>
																	<b>Brand Name : </b><?=$rvSCatReplaceHeat->ITEMBRANDREPLACE;?><br>
																	<!--<b>Age : </b><!?=$rvSCatReplaceHeat->UMURBUKUREPLACE;?><br>
																	<b>Book Value : </b><!?=$rvSCatReplaceHeat->NILAIBUKUREPLACE;?><br>-->
																	<?='New Price : <strong>Rp.&nbsp;'.number_format($rvSCatReplaceHeat->ITEMPRICEREPLACE, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?><br>
																<? } ?>	
																</p>
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
										<table width="900" border="0" cellspacing="0" style="margin-left:0px;">
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
														<th width="10%">Item&nbsp;Code&nbsp;</th>
														<th width="20%">Item&nbsp;Name&nbsp;</th>	
														<th width="17%">Taging&nbsp;Number</th>														
														<th width="22%">Info&nbsp;Detail</th>	
														<th width="15%">Replacement Item</th>
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
													/*	$qvSCatReplace = "SELECT DISTINCT FSDMSTTRX_STORENEW.EQTYPECODE, FSDMSTTRX_STORENEW.GROUP_CODE,FSDMSTTRX_STORENEW.OUTLET_CODE, FSDMSTTRX_STORENEW.ITEM_CODE, FSDBRGEQASSET_NEW.ITEM_NAME,
																		FSDBRGEQASSET_NEW.NOMOR_TAGING, FSDMSTTRX_STORENEW.ITEM_BRAND, FSDMSTTRX_STORENEW.ITEM_MODEL, FSDMSTTRX_STORENEW.DIMENSI, 
																		FSDMSTTRX_STORENEW.ITEM_PRICE, FSDMSTTRX_STORENEW.UMUR_BUKU, FSDMSTTRX_STORENEW.UMUR_BUKU_MAX, FSDMSTTRX_STORENEW.NILAI_BUKU,
																		FROM FSDMSTTRX_STORENEW 
																		JOIN FSDBRGEQASSET_NEW ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
																		WHERE  FSDMSTTRX_STORENEW.OUTLET_CODE = '".$_SESSION['user_nik']."' AND 
																		FSDMSTTRX_STORENEW.EQTYPECODE IN('EQ0003')";	
													*/
														$qvSCatReplace = "SELECT FSDMSTTRX_STORENEW.*, FSDBRGEQASSET_NEW.*, FSDMSTTRX_STORENEW.ITEM_CODE_REPLACE 
																		 FROM FSDMSTTRX_STORENEW
																		 JOIN FSDBRGEQASSET_NEW ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
																		 WHERE FSDMSTTRX_STORENEW.OUTLET_CODE = '".$_SESSION['user_nik']."' 
																		 AND FSDMSTTRX_STORENEW.ITEM_CODE NOT LIKE 'N%'
																		 AND FSDMSTTRX_STORENEW.EQTYPECODE IN('EQ0003')";	
													$qobjParseReplace = oci_parse ($objConnectReplace, $qvSCatReplace);  
																		    oci_execute ($qobjParseReplace,OCI_DEFAULT);   
														while($rvSCatReplace = oci_fetch_object($qobjParseReplace,OCI_BOTH))  
														{  
															$jumlah_desimal  = "0";
															$pemisah_desimal = ".";
															$pemisah_ribuan  = ".";		
															$cekItemName = substr($rvSCatReplace->ITEM_NAME,-3);
														?> 																					
													
														<tr>
															<td width="10%">
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
																<?if($cekItemName=='NEW'){?>
																	<?='<br>New Price : <strong>Rp.&nbsp;'.number_format($rvSCatReplace->ITEM_PRICE, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?>
																<? } ?>																	
															</td>													
															<!--<td width="13%">
																<center><input type="checkbox" name="cekseqfoodprocessingreplace[]" value="<!?=$rvSCatReplace["NOMOR_TAGING"];?>" id="<!?='cekseqfoodprocessingreplace'.$rvSCatReplace["NOMOR_TAGING"];?>" style="display:show;" /></center>
															</td>-->	
															<td width="13%">																
																<script>
																function <?='myFunctionFoodProcessing'.$rvSCatReplace->ITEM_CODE;?>() {
																  var checkBox = document.getElementById("<?=$rvSCatReplace->ITEM_CODE;?>");
																  var text = document.getElementById("<?='text'.$rvSCatReplace->ITEM_CODE;?>");
																  if (checkBox.checked == true){
																	text.style.display = "block";
																  } else {
																	 text.style.display = "none";
																  }
																}
																</script>		
																<? if($rvSCatReplace->ITEM_CODE_REPLACE !=''){ ?>
																	<center><input type="checkBox" id="<?=$rvSCatReplace->ITEM_CODE;?>" onclick="<?='myFunctionFoodProcessing'.$rvSCatReplace->ITEM_CODE;?>()" name="cekseqfoodprocessingreplace[]" value="<?=$rvSCatReplace->NOMOR_TAGING;?>" style="display:show;" /></center>
															    <? }elseif($rvSCatReplace->ITEM_CODE_REPLACE ==''){ ?>
																	<center><input type="checkbox" id="<?=$rvSCatReplace->ITEM_CODE;?>" name="cekseqfoodprocessingreplace[]" value="<?=$rvSCatReplace->NOMOR_TAGING;?>" style="display:show;position:relative;" /></center>
															    <? } ?>																	  
																
																<!--<center><input type="checkbox" id="<!?='cekseqcoldreplaceA00337A120320192';?>"  onclick="myFunction()"></center>-->
																<!-- cekseqcoldreplaceA00337A120320192 -->
																<!--<p id="text" style="display:none"><!?='cekseqcoldreplace'.$rvSCatReplace["NOMOR_TAGING"];?></p>-->
																<p id="<?='text'.$rvSCatReplace->ITEM_CODE?>" style="display:none">
																<? 
																	$qvSCatReplaceFoodProcessing = "SELECT DISTINCT 
																			 FSDMSTTRX_STORENEW.ITEM_CODE_REPLACE AS ITEMCODEREPLACE, 
																			 FSDBRGEQASSET_NEW2.ITEM_NAME AS ITEMNAMEREPLACE,
																			 FSDBRGEQASSET_NEW.NOMOR_TAGING AS NOTAGREPLACE, 
																			 FSDMSTTRX_STORENEW.ITEM_MODEL AS ITEMMODELREPLACE,
																			 FSDMSTTRX_STORENEW.ITEM_BRAND AS ITEMBRANDREPLACE,
																			 FSDMSTTRX_STORENEW.UMUR_BUKU AS UMURBUKUREPLACE,
																			 FSDMSTTRX_STORENEW.NILAI_BUKU AS NILAIBUKUREPLACE,
																			 FSDMSTTRX_STORENEW.ITEM_PRICE AS ITEMPRICEREPLACE
																			 FROM FSDMSTTRX_STORENEW 
																			 JOIN FSDBRGEQASSET_NEW ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
																			 JOIN FSDBRGEQASSET_NEW FSDBRGEQASSET_NEW2 ON  FSDMSTTRX_STORENEW.ITEM_CODE_REPLACE = FSDBRGEQASSET_NEW2.ITEM_CODE
																			 WHERE FSDMSTTRX_STORENEW.OUTLET_CODE = '".$_SESSION['user_nik']."' AND 
																			 FSDMSTTRX_STORENEW.ITEM_CODE = '".$rvSCatReplace->ITEM_CODE."' AND FSDBRGEQASSET_NEW.ITEM_NAME LIKE '%OLD' AND
																			 FSDMSTTRX_STORENEW.EQTYPECODE IN('EQ0003') 
																			 AND FSDMSTTRX_STORENEW.ITEM_CODE = '".$rvSCatReplace->ITEM_CODE."'";
																	$qobjParseReplaceFoodProcessing = oci_parse ($objConnectReplace, $qvSCatReplaceFoodProcessing);  
																						 oci_execute ($qobjParseReplaceFoodProcessing,OCI_DEFAULT); 	
																	$rvSCatReplaceFoodProcessing = oci_fetch_object($qobjParseReplaceFoodProcessing,OCI_BOTH);						
																?>		
																<? if($rvSCatReplaceFoodProcessing->ITEMCODEREPLACE!=''){ ?>
																	<b><u>Replace Item : </u></b><br>
																	<b>Item Code : </b><?=$rvSCatReplaceFoodProcessing->ITEMCODEREPLACE;?><br>
																	<b>Item Name : </b><?=$rvSCatReplaceFoodProcessing->ITEMNAMEREPLACE;?><br>
																	<!--<b>No.Taging : </b><!--?=$rvSCatReplaceFoodProcessing->NOTAGREPLACE;?-->
																	<b><u>Info Detail : </u></b><br>
																	<b>Model Name : </b><?=$rvSCatReplaceFoodProcessing->ITEMMODELREPLACE;?><br>
																	<b>Brand Name : </b><?=$rvSCatReplaceFoodProcessing->ITEMBRANDREPLACE;?><br>
																	<!--<b>Age : </b><!?=$rvSCatReplaceFoodProcessing->UMURBUKUREPLACE;?><br>
																	<b>Book Value : </b><!?=$rvSCatReplaceFoodProcessing->NILAIBUKUREPLACE;?><br>-->
																	<?='New Price : <strong>Rp.&nbsp;'.number_format($rvSCatReplaceFoodProcessing->ITEMPRICEREPLACE, $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?><br>
																<? } ?>																	</p>
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
	<!-- @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ MOVEMENT / PERPINDAHAN / MUTASI ITEM @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ -->				
	<? }elseif($_GET['mdl']=='movement'){ ?>
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
					   If you want a new item request or a new item replacement request, or a movement From One Store To Another Store or if there is an item that you want to repair, then report it to Electronic Operation Support System (e-operation support system) and we will immediately process it. thanks.</p>
					<div class="mbr-section-btn align-center">
							<a class="btn btn-md btn-primary display-4" href="index.php?m=home&to=fsd&mdl=equipmentmovement&pid=&uid=<?=$_SESSION['user_nik']?>">PERPINDAHAN EQUIPMENT <br>(EQUIPMENT MOVEMENT)</a>
							<a class="btn btn-md btn-primary display-4" href="index.php?m=home&to=fsd&mdl=smallwaremovement&pid=&uid=<?=$_SESSION['user_nik']?>">PERPINDAHAN SMALLWARE <br>(SMALLWARE MOVEMENT)</a> 
					</div>
				</div>
			</div>	
<!-- ##########################################  MOVEMENT EQUIPMENT/SMALLWARE  ################################################################### -->
	<? }elseif($_GET['mdl']=='equipmentmovement'){ ?>	
		<!--<font color="#fff"><center><b>EQUIPMENT MOVEMENT STILL UNDERCONSTRUCTION....</b></center></font>-->
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
							
							.RQS-03-000112move{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000113move{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000114move{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000115move{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000116move{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000117move{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000118move{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000119move{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000120move{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000121move{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000122move{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000123move{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000124move{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000125move{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000112infomove{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000113infomove{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000114infomove{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000115infomove{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000116infomove{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000117infomove{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000118infomove{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000119infomove{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000120infomove{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000121infomove{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000122infomove{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000123infomove{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000124infomove{ background: (#7fd9fc, #6576aa); }
							.RQS-03-000125infomove{ background: (#7fd9fc, #6576aa); }
							</style>		
	
                            <div class="col-md-8 multi-horizontal" data-for="namefield" style="margin-left:-100px;">
                                <div class="form-group">
                                    <input id="<?='kode_tipebrgRQS-03-000112move'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000112move'?>"> <?=STRTOUPPER('cold')?>
                                    <input id="<?='kode_tipebrgRQS-03-000113move'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000113move'?>"> <?=STRTOUPPER('heat')?>
                                    <input id="<?='kode_tipebrgRQS-03-000114move'?>" type="checkbox" name="kode_tipebrg[]" value="<?='RQS-03-000114move'?>"> <?=STRTOUPPER('food processing')?><!--<br>-->
								
								<!-- ########################### COLD EQUIPMENT MOVEMENT (RQS-03-000112move) ################################################ -->
								<div class="<?='kode_tipebrgRQS-03-000112move'?>" style="display:none;margin-top:0px;margin-left:0px;">
										<table width="900" border="0" cellspacing="0" style="margin-left:0px;">
										<tr>
											<!--<td></td><!-- FSD WEST -->
											<td><label style="width:auto;"><strong><u>Cold&nbsp;Equipment(Movement)&nbsp;List&nbsp;:</u></strong></label><br>
										<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
											<script src="jquery/jquery.min.js"></script>
											<script>
											$(document).ready(function(){
											  $("#coldequipmentmovesrc").on("keyup", function() {
												var value = $(this).val().toLowerCase();
												$("#myCodescoldEQmove tr").filter(function() {
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
											
											<input id="coldequipmentmovesrc" type="text" placeholder="Search.." style="margin-top:20px;">
											
												<table class="blueTable" border="1"> 
													<thead>
													<tr>
													
														<?  
														$objConnect = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
														?>									
														<th width="10%">Item&nbsp;Code&nbsp;</th>
														<th width="20%">Item&nbsp;Name&nbsp;</th>	
														<th width="17%">Taging&nbsp;Number</th>														
														<th width="22%">Info&nbsp;Detail</th>	
														<th width="15%">Movement Item</th>
													</tr>													
													</thead>
												</table>								
												<script src="./js/jquery-1.9.1.js.download"></script>
												<div style="width:100%; height:350px; overflow:auto;position:relative;">
												<table class="blueTable" border="1">
													<tbody id="myCodescoldEQmove">
														<?  
														$objConnectMove = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
														$qvSCatMove = "SELECT FSDMSTTRX_STORENEW.*, FSDBRGEQASSET_NEW.*, 
																		 FSDMSTTRX_STORENEW.ITEM_CODE_REPLACE 
																		 FROM FSDMSTTRX_STORENEW
																		 JOIN FSDBRGEQASSET_NEW ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
																		 WHERE 
																		((FSDMSTTRX_STORENEW.OUTLET_CODE = '".$_SESSION['user_nik']."')OR(FSDMSTTRX_STORENEW.OUTLET_CODE = '".$_SESSION['userstoregroup_id']."')) 
																		 AND FSDMSTTRX_STORENEW.ITEM_CODE NOT LIKE 'N%' 
																		 AND FSDBRGEQASSET_NEW.ITEM_PRICE NOT IN('60000000')
																		 AND FSDBRGEQASSET_NEW.ITEM_CODE NOT IN('A448','AB89')
																		 AND FSDMSTTRX_STORENEW.EQTYPECODE IN('EQ0001')";	
														$qobjParseMove = oci_parse ($objConnectMove, $qvSCatMove);  
																		    oci_execute ($qobjParseMove,OCI_DEFAULT);   
														while($rvSCatMove = oci_fetch_array($qobjParseMove,OCI_BOTH))  
														{  
															$jumlah_desimal  = "0";
															$pemisah_desimal = ".";
															$pemisah_ribuan  = ".";		
															$cekItemName = substr($rvSCatMove['ITEM_NAME'],-3);
														?> 																					
														<? 
																$qvSCatMove2 = "SELECT DISTINCT 
																		 FSDMSTTRX_STORENEW.ITEM_CODE_REPLACE AS ITEMCODEREPLACE, FSDBRGEQASSET_NEW2.ITEM_NAME AS ITEMNAMEREPLACE,
																		 FSDBRGEQASSET_NEW.NOMOR_TAGING AS NOTAGREPLACE
																	 	 FROM FSDMSTTRX_STORENEW 
																		 JOIN FSDBRGEQASSET_NEW ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
																	 	 JOIN FSDBRGEQASSET_NEW FSDBRGEQASSET_NEW2 ON  FSDMSTTRX_STORENEW.ITEM_CODE_REPLACE = FSDBRGEQASSET_NEW2.ITEM_CODE
 																		 WHERE ((FSDMSTTRX_STORENEW.OUTLET_CODE = '".$_SESSION['user_nik']."')OR(FSDMSTTRX_STORENEW.OUTLET_CODE = '".$_SESSION['userstoregroup_id']."')) 
																		 AND FSDMSTTRX_STORENEW.ITEM_CODE = '".$rvSCatMove['ITEM_CODE']."' 
																		 AND FSDBRGEQASSET_NEW.ITEM_NAME LIKE '%OLD' AND
																		 FSDMSTTRX_STORENEW.EQTYPECODE IN('EQ0001')";
																$qobjParseMove2 = oci_parse ($objConnectMove, $qvSCatMove2);  
																					 oci_execute ($qobjParseMove2,OCI_DEFAULT); 	
																$rvSCatMove2 = oci_fetch_object($qobjParseMove2,OCI_BOTH);						
															?>
														<tr>
															<td width="10%">
																<center><?=$rvSCatMove['ITEM_CODE'];?>																
																</center>
															</td>																
															<td width="20%">
																<?=$rvSCatMove['ITEM_NAME'];?>															
															</td>
															<td width="17%">
																<center><?=$rvSCatMove['NOMOR_TAGING'];?></center>
															</td>															
															<td width="20%">
																<?='Model Name : <strong>'.$rvSCatMove['ITEM_MODEL'].'</strong><br>';?>
																<?='Brand Name  : <strong>'.$rvSCatMove['ITEM_BRAND'].'</strong><br>';?>
																<?='Age  : <strong>'.$rvSCatMove['UMUR_BUKU'].' </strong><br>';?>
																<?='Book Value : <strong>Rp.&nbsp;'.number_format($rvSCatMove['NILAI_BUKU'], $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?>
																<?if($cekItemName=='NEW'){?>
																	<?='<br>New Price : <strong>Rp.&nbsp;'.number_format($rvSCatMove['ITEM_PRICE'], $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?>
																<? } ?>
															</td>													
															<td width="13%">																
																 <!-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_display_checkbox_text -->
																<!-- https://www.w3schools.com/jsref/tryit.asp?filename=tryjsref_checkbox_checked2 -->
																<!-- http://jsfiddle.net/Jp2F7/1/ 
																http://jsfiddle.net/5uUjj/
																https://output.jsbin.com/ijoqep/3
																https://jsbin.com/ijoqep/3/edit?html,js,output -->
																<script>
																function <?='myFunctionMove'.$rvSCatMove['NOMOR_TAGING'];?>() {
																  var checkBox = document.getElementById("<?=$rvSCatMove['NOMOR_TAGING'];?>");
																  var text = document.getElementById("<?='text'.$rvSCatMove['NOMOR_TAGING'];?>");
																  if (checkBox.checked == true){
																	text.style.display = "block";
																  } else {
																	 text.style.display = "none";
																  }
																}
																</script>		
															   <?	$thisId = 'cekseqcoldmove'.$rvSCatMove['NOMOR_TAGING'];
															   ?>
															   <!-- OLD ITEM COLD EQ cek1seqcoldmovement -->
																<? if($rvSCatMove['ITEM_CODE_REPLACE'] !=''){ ?>
																	<center><input type="checkBox" name="cekseqcoldmove[]"  id="<?=$rvSCatMove['ITEM_CODE'];?>" onclick="<?='myFunctionMove'.$rvSCatMove['NOMOR_TAGING'];?>()" value="<?=$rvSCatMove['NOMOR_TAGING'];?>" style="display:show;" /></center>
																	<div id="asstcoldeq1a<?=$rvSCatMove['ITEM_CODE'];?>" style="display:none">
																	<b><u>Movement To :</u></b>
																	<br><label><b>Warehouse A1</b></label>
																	<input type="checkbox" name="cek1seqcoldmovement[<?=$rvSCatMove['NOMOR_TAGING'];?>]" id="<?='cek1seqcoldmovement'.$rvSCatMove['NOMOR_TAGING'];?>" value="move to warehouse" style="display:show;position:relative;" />
																	<div id="transfertocoldeq1a<?=$rvSCatMove['ITEM_CODE'];?>" style="display:none">
																	<label><b>Need Assistance From FSD 1A ?</b></label>
																			 <input type="radio" name="asstcoldeq1a[<?=$rvSCatMove['NOMOR_TAGING'];?>]" value="Yes"><font color="blue"><b>Yes</b></font></input>
																	   &nbsp;<input type="radio" name="asstcoldeq1a[<?=$rvSCatMove['NOMOR_TAGING'];?>]" value="No"><font color="red"><b>No</b></font></input>					   
																	</div>
																	
																	<br><label><b>Other Store : </b></label>
																		<input type="checkbox" name="myCheckStore[<?=$rvSCatMove['NOMOR_TAGING'];?>]" id="<?='myCheckStore'.$rvSCatMove['NOMOR_TAGING'];?>"  value="move to other store" onclick="<?='myFunctionsx'.$rvSCatMove['NOMOR_TAGING'];?>()">

																	<!--<p id="<!?='text'.$rvSCatMove['NOMOR_TAGING'];?>" style="display:none">Checkbox is CHECKED!</p>-->

																	<script>
																	if(document.getElementById('<?=$rvSCatMove['ITEM_CODE'];?>').checked) 
																	{
																		$('#asstcoldeq1a<?=$rvSCatMove['ITEM_CODE'];?>').show();           
																	} else {
																		$('#asstcoldeq1a<?=$rvSCatMove['ITEM_CODE'];?>').hide();           
																	}   
																	$('#<?=$rvSCatMove['ITEM_CODE'];?>').click(function() 
																	{
																		if(document.getElementById('<?=$rvSCatMove['ITEM_CODE'];?>').checked) 
																		{
																			$('#asstcoldeq1a<?=$rvSCatMove['ITEM_CODE'];?>').show();
																		} else {
																			 $('#asstcoldeq1a<?=$rvSCatMove['ITEM_CODE'];?>').hide();
																		}
																	}); 																																				
																																																	
																	if(document.getElementById('<?='cek1seqcoldmovement'.$rvSCatMove['NOMOR_TAGING'];?>').checked) 
																	{
																		$('#transfertocoldeq1a<?=$rvSCatMove['ITEM_CODE'];?>').show();           
																	} else {
																		$('#transfertocoldeq1a<?=$rvSCatMove['ITEM_CODE'];?>').hide();           
																	}   
																	$('#<?='cek1seqcoldmovement'.$rvSCatMove['NOMOR_TAGING'];?>').click(function() 
																	{
																		if(document.getElementById('<?='cek1seqcoldmovement'.$rvSCatMove['NOMOR_TAGING'];?>').checked) 
																		{
																			$('#<?='myCheckStore'.$rvSCatMove['NOMOR_TAGING'];?>').not(this).prop('checked', false);
																		   $('#transfertocoldeq1a<?=$rvSCatMove['ITEM_CODE'];?>').show();
																		   $('#transfertocoldeq1b<?=$rvSCatMove['ITEM_CODE'];?>').hide();
																		   $('#<?='selectseqcoldmovement'.$rvSCatMove['NOMOR_TAGING'];?>').hide();
																		}else{
																			$('#transfertocoldeq1a<?=$rvSCatMove['ITEM_CODE'];?>').hide();
																		}
																	}); 
																	if(document.getElementById('<?='myCheckStore'.$rvSCatMove['NOMOR_TAGING'];?>').checked) 
																	{
																		$('#transfertocoldeq1b<?=$rvSCatMove['ITEM_CODE'];?>').show();           
																	} else {
																		$('#transfertocoldeq1b<?=$rvSCatMove['ITEM_CODE'];?>').hide();           
																	}   
																	$('#<?='myCheckStore'.$rvSCatMove['NOMOR_TAGING'];?>').click(function() 
																	{
																		if(document.getElementById('<?='myCheckStore'.$rvSCatMove['NOMOR_TAGING'];?>').checked) 
																		{
																		   $('#<?='cek1seqcoldmovement'.$rvSCatMove['NOMOR_TAGING'];?>').not(this).prop('checked', false);
																		   $('#transfertocoldeq1b<?=$rvSCatMove['ITEM_CODE'];?>').show();
																		   $('#transfertocoldeq1a<?=$rvSCatMove['ITEM_CODE'];?>').hide();
																		}else{
																			('#transfertocoldeq1b<?=$rvSCatMove['ITEM_CODE'];?>').hide();
																		}
																	});
																	
																	function <?='myFunctionsx'.$rvSCatMove['NOMOR_TAGING'];?>() {
																	  var checkbox = document.getElementById("<?='myCheckStore'.$rvSCatMove['NOMOR_TAGING'];?>");
																	  var text = document.getElementById("<?='selectseqcoldmovement'.$rvSCatMove['NOMOR_TAGING'];?>");
																	  if (checkbox.checked == true){
																		text.style.display = "block";
																	  } else {
																		 text.style.display = "none";
																	  }
																	}
																	
																	if(document.getElementById('<?=$rvSCatMove['ITEM_CODE'];?>').checked) 
																	{
																		$('#asstcoldeq1b<?=$rvSCatMove['ITEM_CODE'];?>').show();           
																	} else {
																		$('#asstcoldeq1b<?=$rvSCatMove['ITEM_CODE'];?>').hide();           
																	}   
																	$('#<?=$rvSCatMove['ITEM_CODE'];?>').click(function() 
																	{
																		if(document.getElementById('<?=$rvSCatMove['ITEM_CODE'];?>').checked) 
																		{
																			$('#asstcoldeq1b<?=$rvSCatMove['ITEM_CODE'];?>').show();
																		} else {
																			 $('#asstcoldeq1b<?=$rvSCatMove['ITEM_CODE'];?>').hide();
																		}
																	}); 																	
																	</script>
																	<style>
																	.selcls { 
																	padding: 3px; 
																	border: solid 1px #517B97; 
																	outline: 0; 
																	background: -webkit-gradient(linear, left top, left 25, from(#FFFFFF), color-stop(4%, #CAD9E3), to(#FFFFFF)); 
																	background: -moz-linear-gradient(top, #FFFFFF, #CAD9E3 1px, #FFFFFF 25px); 
																	box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
																	-moz-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
																	-webkit-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
																	} 															   
																	</style>  
																	</div>
																	<div class="container">
																	<!--<b>Other Store ? </b>-->																 
																		<div class="form-group" style="margin-left:-30px;">
																				<!--<label for="selectseqcoldmovement" class="col-sm-12 control-label"><b>Other Store :</b>-->
																				
																				</label>
																				<div class="col-sm-12">																				
																					<select class="form-control selcls" id="<?='selectseqcoldmovement'.$rvSCatMove['NOMOR_TAGING'];?>" name="selectseqcoldmovement[<?=$rvSCatMove['NOMOR_TAGING'];?>]" style="display:none">
																					<? 
																						$conestoreselect =  mysql_connect('localhost','usrservicedesk','kfc14022');
																									 mysql_select_db('servicedesk',$conestoreselect);
																						
																					/**	$qCekStoreSelect = mysql_query("SELECT user_nik,user_realname FROM ITH_USER 
																														WHERE ((user_nik NOT IN('130273','".$_SESSION['user_nik']."') OR user_nik = '".$_SESSION['userstoregroup_id']."' ))
																														AND userdepartemen_id = '".$_SESSION['user_departemen']."'
																														AND udept_id = '".$_SESSION['udeptid']."' AND usergroup_id = '".$_SESSION['ugroupid']."' 
																														AND usersubgroup_id = '".$_SESSION['usubgroupid']."'"); **/
																						$qCekStoreSelect = mysql_query("SELECT user_nik,user_realname FROM ITH_USER 
																														WHERE user_nik NOT IN('130273','".$_SESSION['user_nik']."','".$_SESSION['userstoregroup_id']."')
																														AND userdepartemen_id = '".$_SESSION['user_departemen']."'
																														AND udept_id = 'STORE' AND usergroup_id = '".$_SESSION['ugroupid']."' 
																														AND usersubgroup_id = '".$_SESSION['usubgroupid']."'");
																						while($rCekStoreSelect = mysql_fetch_object($qCekStoreSelect))
																						{																			
																					?>
																					 <!-- <option>Male</option>
																					  <option>Female</option> -->
																					  <option value="<?=$rCekStoreSelect->user_nik;?>"><?=ucwords(strtolower($rCekStoreSelect->user_realname));?></option>
																					<? } ?>  
																					</select> 
																					<div id="transfertocoldeq1b<?=$rvSCatMove['ITEM_CODE'];?>" style="display:none;margin-left:5px;">
																					<label><b>Need Assistance From FSD 1B ?</b></label>
																					<br><input type="radio" name="asstcoldeq1b[<?=$rvSCatMove['NOMOR_TAGING'];?>]" value="Yes"><font color="blue"><b>Yes</b></font></input>
																					&nbsp;<input type="radio" name="asstcoldeq1b[<?=$rvSCatMove['NOMOR_TAGING'];?>]" value="No"><font color="red"><b>No</b></font></input>					   
																					</div>																				
																				</div>
																		</div>
																	</div> 
																																		
																 <!-- NEW ITEM COLD EQ cek1seqcoldmovementnew -->	
																<? }elseif($rvSCatMove['ITEM_CODE_REPLACE'] ==''){ ?>
																	<center><input type="checkBox" name="cekseqcoldmove[]"  id="<?=$rvSCatMove['ITEM_CODE'];?>" onclick="<?='myFunctionMove'.$rvSCatMove['NOMOR_TAGING'];?>()" value="<?=$rvSCatMove['NOMOR_TAGING'];?>" style="display:show;" /></center>
																	<div id="asstcoldeqnew1a<?=$rvSCatMove['ITEM_CODE'];?>" style="display:none">
																	<b><u>Movement To :</u></b>
																	<br><label><b>Warehouse A2</b></label>
																	<input type="checkbox" name="cek1seqcoldmovementnew[<?=$rvSCatMove['NOMOR_TAGING'];?>]" id="<?='cek1seqcoldmovementnew'.$rvSCatMove['NOMOR_TAGING'];?>" value="move to warehouse" style="display:show;position:relative;" />
																	<div id="transfertocoldeqnew1a<?=$rvSCatMove['ITEM_CODE'];?>" style="display:none">
																	<label><b>Need Assistance From FSD 2A1 ?</b></label>
																			 <input type="radio" name="asstcoldeqnew1a[<?=$rvSCatMove['NOMOR_TAGING'];?>]" value="Yes"><font color="blue"><b>Yes</b></font></input>
																	   &nbsp;<input type="radio" name="asstcoldeqnew1a[<?=$rvSCatMove['NOMOR_TAGING'];?>]" value="No"><font color="red"><b>No</b></font></input>					   
																	</div>
																	
																	<br><label><b>Other Store : </b></label>
																		<input type="checkbox" name="myCheckStorenew[<?=$rvSCatMove['NOMOR_TAGING'];?>]" id="<?='myCheckStorenew'.$rvSCatMove['NOMOR_TAGING'];?>"  value="move to other store" onclick="<?='myFunctionsnewx'.$rvSCatMove['NOMOR_TAGING'];?>()">

																	<!--<p id="<!?='text'.$rvSCatMove['NOMOR_TAGING'];?>" style="display:none">Checkbox is CHECKED!</p>-->

																	<script>
																	if(document.getElementById('<?=$rvSCatMove['ITEM_CODE'];?>').checked) 
																	{
																		$('#asstcoldeqnew1a<?=$rvSCatMove['ITEM_CODE'];?>').show();           
																	} else {
																		$('#asstcoldeqnew1a<?=$rvSCatMove['ITEM_CODE'];?>').hide();           
																	}   
																	$('#<?=$rvSCatMove['ITEM_CODE'];?>').click(function() 
																	{
																		if(document.getElementById('<?=$rvSCatMove['ITEM_CODE'];?>').checked) 
																		{
																			$('#asstcoldeqnew1a<?=$rvSCatMove['ITEM_CODE'];?>').show();
																		} else {
																			 $('#asstcoldeqnew1a<?=$rvSCatMove['ITEM_CODE'];?>').hide();
																		}
																	}); 																																				
																																																	
																	if(document.getElementById('<?='cek1seqcoldmovementnew'.$rvSCatMove['NOMOR_TAGING'];?>').checked) 
																	{
																		$('#transfertocoldeqnew1a<?=$rvSCatMove['ITEM_CODE'];?>').show();           
																	} else {
																		$('#transfertocoldeqnew1a<?=$rvSCatMove['ITEM_CODE'];?>').hide();           
																	}   
																	$('#<?='cek1seqcoldmovementnew'.$rvSCatMove['NOMOR_TAGING'];?>').click(function() 
																	{
																		if(document.getElementById('<?='cek1seqcoldmovementnew'.$rvSCatMove['NOMOR_TAGING'];?>').checked) 
																		{
																			$('#<?='myCheckStorenew'.$rvSCatMove['NOMOR_TAGING'];?>').not(this).prop('checked', false);
																			$('#transfertocoldeqnew1a<?=$rvSCatMove['ITEM_CODE'];?>').show();
																			$('#transfertocoldeqnew1b<?=$rvSCatMove['ITEM_CODE'];?>').hide();
																			$('#<?='selectseqcoldmovementnew'.$rvSCatMove['NOMOR_TAGING'];?>').hide();
																		} else {
																		   $('#transfertocoldeqnew1a<?=$rvSCatMove['ITEM_CODE'];?>').hide();
																		}
																	}); 
																	if(document.getElementById('<?='myCheckStorenew'.$rvSCatMove['NOMOR_TAGING'];?>').checked) 
																	{
																		$('#transfertocoldeqnew1b<?=$rvSCatMove['ITEM_CODE'];?>').show();           
																	} else {
																		$('#transfertocoldeqnew1b<?=$rvSCatMove['ITEM_CODE'];?>').hide();           
																	}   
																	$('#<?='myCheckStorenew'.$rvSCatMove['NOMOR_TAGING'];?>').click(function() 
																	{
																		if(document.getElementById('<?='myCheckStorenew'.$rvSCatMove['NOMOR_TAGING'];?>').checked) 
																		{
																			$('#<?='cek1seqcoldmovementnew'.$rvSCatMove['NOMOR_TAGING'];?>').not(this).prop('checked', false);
																			$('#transfertocoldeqnew1b<?=$rvSCatMove['ITEM_CODE'];?>').show();
																			$('#transfertocoldeqnew1a<?=$rvSCatMove['ITEM_CODE'];?>').hide();
																		} else {
																			$('#transfertocoldeqnew1b<?=$rvSCatMove['ITEM_CODE'];?>').hide();
																		}
																	});
																	
																	function <?='myFunctionsnewx'.$rvSCatMove['NOMOR_TAGING'];?>() {
																	  var checkbox = document.getElementById("<?='myCheckStorenew'.$rvSCatMove['NOMOR_TAGING'];?>");
																	  var text = document.getElementById("<?='selectseqcoldmovementnew'.$rvSCatMove['NOMOR_TAGING'];?>");
																	  if (checkbox.checked == true){
																		text.style.display = "block";
																	  } else {
																		 text.style.display = "none";
																	  }
																	}
																	
																	if(document.getElementById('<?=$rvSCatMove['ITEM_CODE'];?>').checked) 
																	{
																		$('#asstcoldeqnew1b<?=$rvSCatMove['ITEM_CODE'];?>').show();           
																	} else {
																		$('#asstcoldeqnew1b<?=$rvSCatMove['ITEM_CODE'];?>').hide();           
																	}   
																	$('#<?=$rvSCatMove['ITEM_CODE'];?>').click(function() 
																	{
																		if(document.getElementById('<?=$rvSCatMove['ITEM_CODE'];?>').checked) 
																		{
																			$('#asstcoldeqnew1b<?=$rvSCatMove['ITEM_CODE'];?>').show();
																		} else {
																			 $('#asstcoldeqnew1b<?=$rvSCatMove['ITEM_CODE'];?>').hide();
																		}
																	}); 																		
																	</script>
																	<style>
																	.selcls { 
																	padding: 3px; 
																	border: solid 1px #517B97; 
																	outline: 0; 
																	background: -webkit-gradient(linear, left top, left 25, from(#FFFFFF), color-stop(4%, #CAD9E3), to(#FFFFFF)); 
																	background: -moz-linear-gradient(top, #FFFFFF, #CAD9E3 1px, #FFFFFF 25px); 
																	box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
																	-moz-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
																	-webkit-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
																	} 															   
																	</style>  
																	</div>
																	<div class="container">
																	<!--<b>Other Store ? </b>-->																 
																		<div class="form-group" style="margin-left:-30px;">
																				<!--<label for="selectseqcoldmovement" class="col-sm-12 control-label"><b>Other Store :</b>-->
																				
																				</label>
																				<div class="col-sm-12">																				
																					<select class="form-control selcls" id="<?='selectseqcoldmovementnew'.$rvSCatMove['NOMOR_TAGING'];?>" name="selectseqcoldmovementnew[<?=$rvSCatMove['NOMOR_TAGING'];?>]" style="display:none">
																					<? 
																						$conestoreselect =  mysql_connect('localhost','usrservicedesk','kfc14022');
																									 mysql_select_db('servicedesk',$conestoreselect);
																						
																					/**	$qCekStoreSelect = mysql_query("SELECT user_nik,user_realname FROM ITH_USER 
																														WHERE user_nik NOT IN('130273','".$_SESSION['user_nik']."') AND userdepartemen_id = '".$_SESSION['user_departemen']."'
																														AND udept_id = '".$_SESSION['udeptid']."' AND usergroup_id = '".$_SESSION['ugroupid']."' 
																														AND usersubgroup_id = '".$_SESSION['usubgroupid']."'"); **/
																						$qCekStoreSelect = mysql_query("SELECT user_nik,user_realname FROM ITH_USER 
																														WHERE user_nik NOT IN('130273','".$_SESSION['user_nik']."','".$_SESSION['userstoregroup_id']."') 
																														AND userdepartemen_id = '".$_SESSION['user_departemen']."'
																														AND udept_id = 'STORE' AND usergroup_id = '".$_SESSION['ugroupid']."' 
																														AND usersubgroup_id = '".$_SESSION['usubgroupid']."'");
																						while($rCekStoreSelect = mysql_fetch_object($qCekStoreSelect))
																						{																			
																					?>
																					 <!-- <option>Male</option>
																					  <option>Female</option> -->
																					  <option value="<?=$rCekStoreSelect->user_nik;?>"><?=ucwords(strtolower($rCekStoreSelect->user_realname));?></option>
																					<? } ?>  
																					</select> 
																					<div id="transfertocoldeqnew1b<?=$rvSCatMove['ITEM_CODE'];?>" style="display:none;margin-left:5px;">
																					<label><b>Need Assistance From FSD 2A2 ?</b></label>
																					<br><input type="radio" name="asstcoldeqnew1b[<?=$rvSCatMove['NOMOR_TAGING'];?>]" value="Yes"><font color="blue"><b>Yes</b></font></input>
																					&nbsp;<input type="radio" name="asstcoldeqnew1b[<?=$rvSCatMove['NOMOR_TAGING'];?>]" value="No"><font color="red"><b>No</b></font></input>					   
																					</div>																				
																				</div>
																		</div>
																	</div> 
																	
															   <? } ?>																	   
																<!--<center><input type="checkBox" id="<!?=$rvSCatReplace->ITEM_CODE;?>" onclick="<!?='myFunctionMove'.$rvSCatReplace->ITEM_CODE;?>()" name="cekseqcoldreplace[]" value="<!?=$rvSCatReplace->NOMOR_TAGING;?>" style="display:show;" /></center>-->
																<!--<center><input type="checkbox" id="<!?='cekseqcoldreplaceA00337A120320192';?>"  onclick="myFunctionMove()"></center>-->
																<!-- cekseqcoldreplaceA00337A120320192 -->
																<!--<p id="text" style="display:none"><!?='cekseqcoldreplace'.$rvSCatReplace["NOMOR_TAGING"];?></p>-->

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
								<!-- ############################# HEAT EQUIPMENT  MOVEMENT (RQS-03-000113replace) ################################# -->
								<div class="<?='kode_tipebrgRQS-03-000113move'?>" style="display:none;margin-top:0px;margin-left:0px;">
										<table width="900" border="0" cellspacing="0" style="margin-left:0px;">
										<tr>
											<!--<td></td><!-- FSD WEST -->
											<td><label style="width:auto;"><strong><u>Heat&nbsp;Equipment(Movement)&nbsp;List&nbsp;:</u></strong></label><br>
										<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
											<script src="jquery/jquery.min.js"></script>
											<script>
											$(document).ready(function(){
											  $("#heatequipmentmovesrc").on("keyup", function() {
												var value = $(this).val().toLowerCase();
												$("#myCodesheatEQmove tr").filter(function() {
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
											
											<input id="heatequipmentmovesrc" type="text" placeholder="Search.." style="margin-top:20px;">
											
												<table class="blueTable" border="1"> 
													<thead>
													<tr>
													
														<?  
														$objConnect = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
														?>									
														<th width="10%">Item&nbsp;Code&nbsp;</th>
														<th width="20%">Item&nbsp;Name&nbsp;</th>	
														<th width="17%">Taging&nbsp;Number</th>														
														<th width="22%">Info&nbsp;Detail</th>	
														<th width="15%">Movement Item</th>
													</tr>													
													</thead>
												</table>								
												<script src="./js/jquery-1.9.1.js.download"></script>
												<div style="width:100%; height:350px; overflow:auto;position:relative;">
												<table class="blueTable" border="1">
													<tbody id="myCodesheatEQmove">
														<?  
														$objConnectMove = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
														$qvSCatMove = "SELECT FSDMSTTRX_STORENEW.*, FSDBRGEQASSET_NEW.*, 
																		 FSDMSTTRX_STORENEW.ITEM_CODE_REPLACE 
																		 FROM FSDMSTTRX_STORENEW
																		 JOIN FSDBRGEQASSET_NEW ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
																		 WHERE 
																		 ((FSDMSTTRX_STORENEW.OUTLET_CODE = '".$_SESSION['user_nik']."')OR(FSDMSTTRX_STORENEW.OUTLET_CODE = '".$_SESSION['userstoregroup_id']."')) 
																		 AND FSDMSTTRX_STORENEW.ITEM_CODE NOT LIKE 'N%'
																		 AND FSDMSTTRX_STORENEW.EQTYPECODE IN('EQ0002')";	
													
																 
														$qobjParseMove = oci_parse ($objConnectMove, $qvSCatMove);  
																		    oci_execute ($qobjParseMove,OCI_DEFAULT);   
														while($rvSCatMove = oci_fetch_array($qobjParseMove,OCI_BOTH))  
														{  
															$jumlah_desimal  = "0";
															$pemisah_desimal = ".";
															$pemisah_ribuan  = ".";		
															$cekItemName = substr($rvSCatMove['ITEM_NAME'],-3);
														?> 																					
														<? 
																$qvSCatMove2 = "SELECT DISTINCT 
																		 FSDMSTTRX_STORENEW.ITEM_CODE_REPLACE AS ITEMCODEREPLACE, FSDBRGEQASSET_NEW2.ITEM_NAME AS ITEMNAMEREPLACE,
																		 FSDBRGEQASSET_NEW.NOMOR_TAGING AS NOTAGREPLACE
																	 	 FROM FSDMSTTRX_STORENEW 
																		 JOIN FSDBRGEQASSET_NEW ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
																	 	 JOIN FSDBRGEQASSET_NEW FSDBRGEQASSET_NEW2 ON  FSDMSTTRX_STORENEW.ITEM_CODE_REPLACE = FSDBRGEQASSET_NEW2.ITEM_CODE
 																		 WHERE 
																		 ((FSDMSTTRX_STORENEW.OUTLET_CODE = '".$_SESSION['user_nik']."')OR(FSDMSTTRX_STORENEW.OUTLET_CODE = '".$_SESSION['userstoregroup_id']."'))
																		 AND FSDMSTTRX_STORENEW.ITEM_CODE = '".$rvSCatMove['ITEM_CODE']."' 
																		 AND FSDBRGEQASSET_NEW.ITEM_NAME LIKE '%OLD' AND
																		 FSDMSTTRX_STORENEW.EQTYPECODE IN('EQ0002')";
																$qobjParseMove2 = oci_parse ($objConnectMove, $qvSCatMove2);  
																					 oci_execute ($qobjParseMove2,OCI_DEFAULT); 	
																$rvSCatMove2 = oci_fetch_object($qobjParseMove2,OCI_BOTH);						
															?>
														<tr>
															<td width="10%">
																<center><?=$rvSCatMove['ITEM_CODE'];?>																
																</center>
															</td>																
															<td width="20%">
																<?=$rvSCatMove['ITEM_NAME'];?>															
															</td>
															<td width="17%">
																<center><?=$rvSCatMove['NOMOR_TAGING'];?></center>
															</td>															
															<td width="20%">
																<?='Model Name : <strong>'.$rvSCatMove['ITEM_MODEL'].'</strong><br>';?>
																<?='Brand Name  : <strong>'.$rvSCatMove['ITEM_BRAND'].'</strong><br>';?>
																<?='Age  : <strong>'.$rvSCatMove['UMUR_BUKU'].' </strong><br>';?>
																<?='Book Value : <strong>Rp.&nbsp;'.number_format($rvSCatMove['NILAI_BUKU'], $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?>
																<?if($cekItemName=='NEW'){?>
																	<?='<br>New Price : <strong>Rp.&nbsp;'.number_format($rvSCatMove['ITEM_PRICE'], $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?>
																<? } ?>
															</td>													
															<td width="13%">																
																 <!--  myCheckStore myCheckStoreHeat  https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_display_checkbox_text -->
																<!-- https://www.w3schools.com/jsref/tryit.asp?filename=tryjsref_checkbox_checked2 -->
																<!-- http://jsfiddle.net/Jp2F7/1/ 
																http://jsfiddle.net/5uUjj/
																https://output.jsbin.com/ijoqep/3
																https://jsbin.com/ijoqep/3/edit?html,js,output -->
																<script>
																function <?='myFunctionMoveHeat'.$rvSCatMove['NOMOR_TAGING'];?>() {
																  var checkBox = document.getElementById("<?=$rvSCatMove['NOMOR_TAGING'];?>");
																  var text = document.getElementById("<?='text'.$rvSCatMove['NOMOR_TAGING'];?>");
																  if (checkBox.checked == true){
																	text.style.display = "block";
																  } else {
																	 text.style.display = "none";
																  }
																}
																</script>		
															   <?	$thisId = 'cekseqheatmove'.$rvSCatMove['NOMOR_TAGING'];
															   ?>
															   <!-- OLD ITEM HEAT EQ cek1seqheatmovement -->
																<? if($rvSCatMove['ITEM_CODE_REPLACE'] !=''){ ?>
																	<center><input type="checkBox" name="cekseqheatmove[]"  id="<?=$rvSCatMove['ITEM_CODE'];?>" onclick="<?='myFunctionMoveHeat'.$rvSCatMove['NOMOR_TAGING'];?>()" value="<?=$rvSCatMove['NOMOR_TAGING'];?>" style="display:show;" /></center>
																	<div id="asstheateq1a<?=$rvSCatMove['ITEM_CODE'];?>" style="display:none">
																	<b><u>Movement To :</u></b>
																	<br><label><b>Warehouse B1</b></label>
																	<input type="checkbox" name="cek1seqheatmovement[<?=$rvSCatMove['NOMOR_TAGING'];?>]" id="<?='cek1seqheatmovement'.$rvSCatMove['NOMOR_TAGING'];?>" value="move to warehouse" style="display:show;position:relative;" />
																	<div id="transfertoheateq1a<?=$rvSCatMove['ITEM_CODE'];?>" style="display:none">
																	<label><b>Need Assistance From FSD 1B1 ?</b></label>
																			 <input type="radio" name="asstheateq1a[<?=$rvSCatMove['NOMOR_TAGING'];?>]" value="Yes"><font color="blue"><b>Yes</b></font></input>
																	   &nbsp;<input type="radio" name="asstheateq1a[<?=$rvSCatMove['NOMOR_TAGING'];?>]" value="No"><font color="red"><b>No</b></font></input>					   
																	</div>
																	
																	<br><label><b>Other Store : </b></label>
																		<input type="checkbox" name="myCheckStoreHeat[<?=$rvSCatMove['NOMOR_TAGING'];?>]" id="<?='myCheckStoreHeat'.$rvSCatMove['NOMOR_TAGING'];?>"  value="move to other store" onclick="<?='myFunctionsxheat'.$rvSCatMove['NOMOR_TAGING'];?>()">

																	<!--<p id="<!?='text'.$rvSCatMove['NOMOR_TAGING'];?>" style="display:none">Checkbox is CHECKED!</p>-->

																	<script>
																	if(document.getElementById('<?=$rvSCatMove['ITEM_CODE'];?>').checked) 
																	{
																		$('#asstheateq1a<?=$rvSCatMove['ITEM_CODE'];?>').show();           
																	} else {
																		$('#asstheateq1a<?=$rvSCatMove['ITEM_CODE'];?>').hide();           
																	}   
																	$('#<?=$rvSCatMove['ITEM_CODE'];?>').click(function() 
																	{
																		if(document.getElementById('<?=$rvSCatMove['ITEM_CODE'];?>').checked) 
																		{
																			$('#asstheateq1a<?=$rvSCatMove['ITEM_CODE'];?>').show();
																		} else {
																			 $('#asstheateq1a<?=$rvSCatMove['ITEM_CODE'];?>').hide();
																		}
																	}); 																																				
																																																	
																	if(document.getElementById('<?='cek1seqheatmovement'.$rvSCatMove['NOMOR_TAGING'];?>').checked) 
																	{
																		$('#transfertoheateq1a<?=$rvSCatMove['ITEM_CODE'];?>').show();           
																	} else {
																		$('#transfertoheateq1a<?=$rvSCatMove['ITEM_CODE'];?>').hide();           
																	}   
																	$('#<?='cek1seqheatmovement'.$rvSCatMove['NOMOR_TAGING'];?>').click(function() 
																	{
																		if(document.getElementById('<?='cek1seqheatmovement'.$rvSCatMove['NOMOR_TAGING'];?>').checked) 
																		{
																			$('#<?='myCheckStoreHeat'.$rvSCatMove['NOMOR_TAGING'];?>').not(this).prop('checked', false);
																			$('#transfertoheateq1a<?=$rvSCatMove['ITEM_CODE'];?>').show();
																			$('#transfertoheateq1b<?=$rvSCatMove['ITEM_CODE'];?>').hide();
																			$('#<?='selectseqheatmovement'.$rvSCatMove['NOMOR_TAGING'];?>').hide();
																		} else {
																			$('#transfertoheateq1a<?=$rvSCatMove['ITEM_CODE'];?>').hide();
																		}
																	}); 
																	if(document.getElementById('<?='myCheckStoreHeat'.$rvSCatMove['NOMOR_TAGING'];?>').checked) 
																	{
																		$('#transfertoheateq1b<?=$rvSCatMove['ITEM_CODE'];?>').show();           
																	} else {
																		$('#transfertoheateq1b<?=$rvSCatMove['ITEM_CODE'];?>').hide();           
																	}   
																	$('#<?='myCheckStoreHeat'.$rvSCatMove['NOMOR_TAGING'];?>').click(function() 
																	{
																		if(document.getElementById('<?='myCheckStoreHeat'.$rvSCatMove['NOMOR_TAGING'];?>').checked) 
																		{
																			$('#<?='cek1seqheatmovement'.$rvSCatMove['NOMOR_TAGING'];?>').not(this).prop('checked', false);
																			$('#transfertoheateq1b<?=$rvSCatMove['ITEM_CODE'];?>').show();
																			$('#transfertoheateq1a<?=$rvSCatMove['ITEM_CODE'];?>').hide();
																		} else {
																			$('#transfertoheateq1b<?=$rvSCatMove['ITEM_CODE'];?>').hide();
																		}
																	});
																	
																	function <?='myFunctionsxheat'.$rvSCatMove['NOMOR_TAGING'];?>() {
																	  var checkbox = document.getElementById("<?='myCheckStoreHeat'.$rvSCatMove['NOMOR_TAGING'];?>");
																	  var text = document.getElementById("<?='selectseqheatmovement'.$rvSCatMove['NOMOR_TAGING'];?>");
																	  if (checkbox.checked == true){
																		text.style.display = "block";
																	  } else {
																		 text.style.display = "none";
																	  }
																	}
																	
																	if(document.getElementById('<?=$rvSCatMove['ITEM_CODE'];?>').checked) 
																	{
																		$('#asstheateq1b<?=$rvSCatMove['ITEM_CODE'];?>').show();           
																	} else {
																		$('#asstheateq1b<?=$rvSCatMove['ITEM_CODE'];?>').hide();           
																	}   
																	$('#<?=$rvSCatMove['ITEM_CODE'];?>').click(function() 
																	{
																		if(document.getElementById('<?=$rvSCatMove['ITEM_CODE'];?>').checked) 
																		{
																			$('#asstheateq1b<?=$rvSCatMove['ITEM_CODE'];?>').show();
																		} else {
																			 $('#asstheateq1b<?=$rvSCatMove['ITEM_CODE'];?>').hide();
																		}
																	}); 																	
																	</script>
																	<style>
																	.selcls { 
																	padding: 3px; 
																	border: solid 1px #517B97; 
																	outline: 0; 
																	background: -webkit-gradient(linear, left top, left 25, from(#FFFFFF), color-stop(4%, #CAD9E3), to(#FFFFFF)); 
																	background: -moz-linear-gradient(top, #FFFFFF, #CAD9E3 1px, #FFFFFF 25px); 
																	box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
																	-moz-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
																	-webkit-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
																	} 															   
																	</style>  
																	</div>
																	<div class="container">
																	<!--<b>Other Store ? </b>-->																 
																		<div class="form-group" style="margin-left:-30px;">
																				<!--<label for="selectseqheatmovement" class="col-sm-12 control-label"><b>Other Store :</b>-->
																				
																				</label>
																				<div class="col-sm-12">																				
																					<select class="form-control selcls" id="<?='selectseqheatmovement'.$rvSCatMove['NOMOR_TAGING'];?>" name="selectseqheatmovement[<?=$rvSCatMove['NOMOR_TAGING'];?>]" style="display:none">
																					<? 
																						$conestoreselect =  mysql_connect('localhost','usrservicedesk','kfc14022');
																									 mysql_select_db('servicedesk',$conestoreselect);
																						
																					/**	$qCekStoreSelect = mysql_query("SELECT user_nik,user_realname FROM ITH_USER 
																														WHERE user_nik NOT IN('130273','".$_SESSION['user_nik']."') AND userdepartemen_id = '".$_SESSION['user_departemen']."'
																														AND udept_id = '".$_SESSION['udeptid']."' AND usergroup_id = '".$_SESSION['ugroupid']."' 
																														AND usersubgroup_id = '".$_SESSION['usubgroupid']."'"); **/
																						$qCekStoreSelect = mysql_query("SELECT user_nik,user_realname FROM ITH_USER 
																														WHERE user_nik NOT IN('130273','".$_SESSION['user_nik']."','".$_SESSION['userstoregroup_id']."') 
																														AND userdepartemen_id = '".$_SESSION['user_departemen']."'
																														AND udept_id = 'STORE' AND usergroup_id = '".$_SESSION['ugroupid']."' 
																														AND usersubgroup_id = '".$_SESSION['usubgroupid']."'");
																						while($rCekStoreSelect = mysql_fetch_object($qCekStoreSelect))
																						{																			
																					?>
																					 <!-- <option>Male</option>
																					  <option>Female</option> -->
																					  <option value="<?=$rCekStoreSelect->user_nik;?>"><?=ucwords(strtolower($rCekStoreSelect->user_realname));?></option>
																					<? } ?>  
																					</select> 
																					<div id="transfertoheateq1b<?=$rvSCatMove['ITEM_CODE'];?>" style="display:none;margin-left:5px;">
																					<label><b>Need Assistance From FSD 1B2 ?</b></label>
																					<br><input type="radio" name="asstheateq1b[<?=$rvSCatMove['NOMOR_TAGING'];?>]" value="Yes"><font color="blue"><b>Yes</b></font></input>
																					&nbsp;<input type="radio" name="asstheateq1b[<?=$rvSCatMove['NOMOR_TAGING'];?>]" value="No"><font color="red"><b>No</b></font></input>					   
																					</div>																				
																				</div>
																		</div>
																	</div> 
																																		
																 <!-- NEW ITEM HEAT EQ cek1seqheatmovementnew -->	
																<? }elseif($rvSCatMove['ITEM_CODE_REPLACE'] ==''){ ?>
																	<center><input type="checkBox" name="cekseqheatmove[]"  id="<?=$rvSCatMove['ITEM_CODE'];?>" onclick="<?='myFunctionMoveHeat'.$rvSCatMove['NOMOR_TAGING'];?>()" value="<?=$rvSCatMove['NOMOR_TAGING'];?>" style="display:show;" /></center>
																	<div id="asstheateqnew1a<?=$rvSCatMove['ITEM_CODE'];?>" style="display:none">
																	<b><u>Movement To :</u></b>
																	<br><label><b>Warehouse B2</b></label>
																	<input type="checkbox" name="cek1seqheatmovementnew[<?=$rvSCatMove['NOMOR_TAGING'];?>]" id="<?='cek1seqheatmovementnew'.$rvSCatMove['NOMOR_TAGING'];?>" value="move to warehouse" style="display:show;position:relative;" />
																	<div id="transfertoheateqnew1a<?=$rvSCatMove['ITEM_CODE'];?>" style="display:none">
																	<label><b>Need Assistance From FSD 2B1 ?</b></label>
																			 <input type="radio" name="asstheateqnew1a[<?=$rvSCatMove['NOMOR_TAGING'];?>]" value="Yes"><font color="blue"><b>Yes</b></font></input>
																	   &nbsp;<input type="radio" name="asstheateqnew1a[<?=$rvSCatMove['NOMOR_TAGING'];?>]" value="No"><font color="red"><b>No</b></font></input>					   
																	</div>
																	
																	<br><label><b>Other Store : </b></label>
																		<input type="checkbox" name="myCheckStorenewheat[<?=$rvSCatMove['NOMOR_TAGING'];?>]" id="<?='myCheckStorenewheat'.$rvSCatMove['NOMOR_TAGING'];?>"  value="move to other store" onclick="<?='myFunctionsnewheatx'.$rvSCatMove['NOMOR_TAGING'];?>()">

																	<!--<p id="<!?='text'.$rvSCatMove['NOMOR_TAGING'];?>" style="display:none">Checkbox is CHECKED!</p>-->

																	<script>
																	if(document.getElementById('<?=$rvSCatMove['ITEM_CODE'];?>').checked) 
																	{
																		$('#asstheateqnew1a<?=$rvSCatMove['ITEM_CODE'];?>').show();           
																	} else {
																		$('#asstheateqnew1a<?=$rvSCatMove['ITEM_CODE'];?>').hide();           
																	}   
																	$('#<?=$rvSCatMove['ITEM_CODE'];?>').click(function() 
																	{
																		if(document.getElementById('<?=$rvSCatMove['ITEM_CODE'];?>').checked) 
																		{
																			$('#asstheateqnew1a<?=$rvSCatMove['ITEM_CODE'];?>').show();
																		} else {
																			 $('#asstheateqnew1a<?=$rvSCatMove['ITEM_CODE'];?>').hide();
																		}
																	}); 																																				
																																																	
																	if(document.getElementById('<?='cek1seqheatmovementnew'.$rvSCatMove['NOMOR_TAGING'];?>').checked) 
																	{
																		$('#transfertoheateqnew1a<?=$rvSCatMove['ITEM_CODE'];?>').show();           
																	} else {
																		$('#transfertoheateqnew1a<?=$rvSCatMove['ITEM_CODE'];?>').hide();           
																	}   
																	$('#<?='cek1seqheatmovementnew'.$rvSCatMove['NOMOR_TAGING'];?>').click(function() 
																	{
																		if(document.getElementById('<?='cek1seqheatmovementnew'.$rvSCatMove['NOMOR_TAGING'];?>').checked) 
																		{
																			$('#<?='myCheckStorenewheat'.$rvSCatMove['NOMOR_TAGING'];?>').not(this).prop('checked', false);
																			$('#transfertoheateqnew1a<?=$rvSCatMove['ITEM_CODE'];?>').show();
																			$('#transfertoheateqnew1b<?=$rvSCatMove['ITEM_CODE'];?>').hide();
																			$('#<?='selectseqheatmovementnew'.$rvSCatMove['NOMOR_TAGING'];?>').hide();
																		} else {
																			$('#transfertoheateqnew1a<?=$rvSCatMove['ITEM_CODE'];?>').hide();
																		}
																	}); 
																	if(document.getElementById('<?='myCheckStorenewheat'.$rvSCatMove['NOMOR_TAGING'];?>').checked) 
																	{
																		$('#transfertoheateqnew1b<?=$rvSCatMove['ITEM_CODE'];?>').show();           
																	} else {
																		$('#transfertoheateqnew1b<?=$rvSCatMove['ITEM_CODE'];?>').hide();           
																	}   
																	$('#<?='myCheckStorenewheat'.$rvSCatMove['NOMOR_TAGING'];?>').click(function() 
																	{
																		if(document.getElementById('<?='myCheckStorenewheat'.$rvSCatMove['NOMOR_TAGING'];?>').checked) 
																		{
																			$('#<?='cek1seqheatmovementnew'.$rvSCatMove['NOMOR_TAGING'];?>').not(this).prop('checked', false);
																			$('#transfertoheateqnew1b<?=$rvSCatMove['ITEM_CODE'];?>').show();
																			$('#transfertoheateqnew1a<?=$rvSCatMove['ITEM_CODE'];?>').hide();
																		} else {
																			$('#transfertoheateqnew1b<?=$rvSCatMove['ITEM_CODE'];?>').hide();
																		}
																	});
																	
																	function <?='myFunctionsnewheatx'.$rvSCatMove['NOMOR_TAGING'];?>() {
																	  var checkbox = document.getElementById("<?='myCheckStorenewheat'.$rvSCatMove['NOMOR_TAGING'];?>");
																	  var text = document.getElementById("<?='selectseqheatmovementnew'.$rvSCatMove['NOMOR_TAGING'];?>");
																	  if (checkbox.checked == true){
																		text.style.display = "block";
																	  } else {
																		 text.style.display = "none";
																	  }
																	}
																	
																	if(document.getElementById('<?=$rvSCatMove['ITEM_CODE'];?>').checked) 
																	{
																		$('#asstheateqnew1b<?=$rvSCatMove['ITEM_CODE'];?>').show();           
																	} else {
																		$('#asstheateqnew1b<?=$rvSCatMove['ITEM_CODE'];?>').hide();           
																	}   
																	$('#<?=$rvSCatMove['ITEM_CODE'];?>').click(function() 
																	{
																		if(document.getElementById('<?=$rvSCatMove['ITEM_CODE'];?>').checked) 
																		{
																			$('#asstheateqnew1b<?=$rvSCatMove['ITEM_CODE'];?>').show();
																		} else {
																			 $('#asstheateqnew1b<?=$rvSCatMove['ITEM_CODE'];?>').hide();
																		}
																	}); 																		
																	</script>
																	<style>
																	.selcls { 
																	padding: 3px; 
																	border: solid 1px #517B97; 
																	outline: 0; 
																	background: -webkit-gradient(linear, left top, left 25, from(#FFFFFF), color-stop(4%, #CAD9E3), to(#FFFFFF)); 
																	background: -moz-linear-gradient(top, #FFFFFF, #CAD9E3 1px, #FFFFFF 25px); 
																	box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
																	-moz-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
																	-webkit-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
																	} 															   
																	</style>  
																	</div>
																	<div class="container">
																	<!--<b>Other Store ? </b>-->																 
																		<div class="form-group" style="margin-left:-30px;">
																				<!--<label for="selectseqheatmovement" class="col-sm-12 control-label"><b>Other Store :</b>-->
																				
																				</label>
																				<div class="col-sm-12">																				
																					<select class="form-control selcls" id="<?='selectseqheatmovementnew'.$rvSCatMove['NOMOR_TAGING'];?>" name="selectseqheatmovementnew[<?=$rvSCatMove['NOMOR_TAGING'];?>]" style="display:none">
																					<? 
																						$conestoreselect =  mysql_connect('localhost','usrservicedesk','kfc14022');
																									 mysql_select_db('servicedesk',$conestoreselect);
																						
																					/**	$qCekStoreSelect = mysql_query("SELECT user_nik,user_realname FROM ITH_USER 
																														WHERE user_nik NOT IN('130273','".$_SESSION['user_nik']."') AND userdepartemen_id = '".$_SESSION['user_departemen']."'
																														AND udept_id = '".$_SESSION['udeptid']."' AND usergroup_id = '".$_SESSION['ugroupid']."' 
																														AND usersubgroup_id = '".$_SESSION['usubgroupid']."'"); **/
																						$qCekStoreSelect = mysql_query("SELECT user_nik,user_realname FROM ITH_USER 
																														WHERE user_nik NOT IN('130273','".$_SESSION['user_nik']."','".$_SESSION['userstoregroup_id']."') 
																														AND userdepartemen_id = '".$_SESSION['user_departemen']."'
																														AND udept_id = 'STORE' AND usergroup_id = '".$_SESSION['ugroupid']."' 
																														AND usersubgroup_id = '".$_SESSION['usubgroupid']."'");
																						while($rCekStoreSelect = mysql_fetch_object($qCekStoreSelect))
																						{																			
																					?>
																					 <!-- <option>Male</option>
																					  <option>Female</option> -->
																					  <option value="<?=$rCekStoreSelect->user_nik;?>"><?=ucwords(strtolower($rCekStoreSelect->user_realname));?></option>
																					<? } ?>  
																					</select> 
																					<div id="transfertoheateqnew1b<?=$rvSCatMove['ITEM_CODE'];?>" style="display:none;margin-left:5px;">
																					<label><b>Need Assistance From FSD 2B2 ?</b></label>
																					<br><input type="radio" name="asstheateqnew1b[<?=$rvSCatMove['NOMOR_TAGING'];?>]" value="Yes"><font color="blue"><b>Yes</b></font></input>
																					&nbsp;<input type="radio" name="asstheateqnew1b[<?=$rvSCatMove['NOMOR_TAGING'];?>]" value="No"><font color="red"><b>No</b></font></input>					   
																					</div>																				
																				</div>
																		</div>
																	</div> 
																	
															   <? } ?>																	   
																<!--<center><input type="checkBox" id="<!?=$rvSCatReplace->ITEM_CODE;?>" onclick="<!?='myFunctionMove'.$rvSCatReplace->ITEM_CODE;?>()" name="cekseqheatreplace[]" value="<!?=$rvSCatReplace->NOMOR_TAGING;?>" style="display:show;" /></center>-->
																<!--<center><input type="checkbox" id="<!?='cekseqheatreplaceA00337A120320192';?>"  onclick="myFunctionMove()"></center>-->
																<!-- cekseqheatreplaceA00337A120320192 -->
																<!--<p id="text" style="display:none"><!?='cekseqheatreplace'.$rvSCatReplace["NOMOR_TAGING"];?></p>-->

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
								<!-- ####################### FOOD PROCESSING EQUIPMENT MOVEMENT (RQS-03-000114move) ########################### -->
								<div class="<?='kode_tipebrgRQS-03-000114move'?>" style="display:none;margin-top:0px;margin-left:0px;">
										<table width="900" border="0" cellspacing="0" style="margin-left:0px;">
										<tr>
											<!--<td></td><!-- FSD WEST -->
											<td><label style="width:auto;"><strong><u>Food Processing&nbsp;Equipment(Movement)&nbsp;List&nbsp;:</u></strong></label><br>
										<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
											<script src="jquery/jquery.min.js"></script>
											<script>
											$(document).ready(function(){
											  $("#foodprocessingequipmentmovesrc").on("keyup", function() {
												var value = $(this).val().toLowerCase();
												$("#myCodesfoodprocessingEQmove tr").filter(function() {
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
											
											<input id="foodprocessingequipmentmovesrc" type="text" placeholder="Search.." style="margin-top:20px;">
											
												<table class="blueTable" border="1"> 
													<thead>
													<tr>
													
														<?  
														$objConnect = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
														?>									
														<th width="10%">Item&nbsp;Code&nbsp;</th>
														<th width="20%">Item&nbsp;Name&nbsp;</th>	
														<th width="17%">Taging&nbsp;Number</th>														
														<th width="22%">Info&nbsp;Detail</th>	
														<th width="15%">Movement Item</th>
													</tr>													
													</thead>
												</table>								
												<script src="./js/jquery-1.9.1.js.download"></script>
												<div style="width:100%; height:350px; overflow:auto;position:relative;">
												<table class="blueTable" border="1">
													<tbody id="myCodesfoodprocessingEQmove">
														<?  
														$objConnectMove = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
														$qvSCatMove = "SELECT FSDMSTTRX_STORENEW.*, FSDBRGEQASSET_NEW.*, 
																		 FSDMSTTRX_STORENEW.ITEM_CODE_REPLACE 
																		 FROM FSDMSTTRX_STORENEW
																		 JOIN FSDBRGEQASSET_NEW ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
																		 WHERE 
																		 ((FSDMSTTRX_STORENEW.OUTLET_CODE = '".$_SESSION['user_nik']."')OR(FSDMSTTRX_STORENEW.OUTLET_CODE = '".$_SESSION['userstoregroup_id']."')) 
																		 AND FSDMSTTRX_STORENEW.ITEM_CODE NOT LIKE 'N%'
																		 AND FSDMSTTRX_STORENEW.EQTYPECODE IN('EQ0003')";	
													
																 
														$qobjParseMove = oci_parse ($objConnectMove, $qvSCatMove);  
																		    oci_execute ($qobjParseMove,OCI_DEFAULT);   
														while($rvSCatMove = oci_fetch_array($qobjParseMove,OCI_BOTH))  
														{  
															$jumlah_desimal  = "0";
															$pemisah_desimal = ".";
															$pemisah_ribuan  = ".";		
															$cekItemName = substr($rvSCatMove['ITEM_NAME'],-3);
														?> 																					
														<? 
																$qvSCatMove2 = "SELECT DISTINCT 
																		 FSDMSTTRX_STORENEW.ITEM_CODE_REPLACE AS ITEMCODEREPLACE, FSDBRGEQASSET_NEW2.ITEM_NAME AS ITEMNAMEREPLACE,
																		 FSDBRGEQASSET_NEW.NOMOR_TAGING AS NOTAGREPLACE
																	 	 FROM FSDMSTTRX_STORENEW 
																		 JOIN FSDBRGEQASSET_NEW ON FSDMSTTRX_STORENEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
																	 	 JOIN FSDBRGEQASSET_NEW FSDBRGEQASSET_NEW2 ON  FSDMSTTRX_STORENEW.ITEM_CODE_REPLACE = FSDBRGEQASSET_NEW2.ITEM_CODE
 																		 WHERE ((FSDMSTTRX_STORENEW.OUTLET_CODE = '".$_SESSION['user_nik']."')OR(FSDMSTTRX_STORENEW.OUTLET_CODE = '".$_SESSION['userstoregroup_id']."'))
																		 AND FSDMSTTRX_STORENEW.ITEM_CODE = '".$rvSCatMove['ITEM_CODE']."' 
																		 AND FSDBRGEQASSET_NEW.ITEM_NAME LIKE '%OLD' AND
																		 FSDMSTTRX_STORENEW.EQTYPECODE IN('EQ0003')";
																$qobjParseMove2 = oci_parse ($objConnectMove, $qvSCatMove2);  
																					 oci_execute ($qobjParseMove2,OCI_DEFAULT); 	
																$rvSCatMove2 = oci_fetch_object($qobjParseMove2,OCI_BOTH);						
															?>
														<tr>
															<td width="10%">
																<center><?=$rvSCatMove['ITEM_CODE'];?>																
																</center>
															</td>																
															<td width="20%">
																<?=$rvSCatMove['ITEM_NAME'];?>															
															</td>
															<td width="17%">
																<center><?=$rvSCatMove['NOMOR_TAGING'];?></center>
															</td>															
															<td width="20%">
																<?='Model Name : <strong>'.$rvSCatMove['ITEM_MODEL'].'</strong><br>';?>
																<?='Brand Name  : <strong>'.$rvSCatMove['ITEM_BRAND'].'</strong><br>';?>
																<?='Age  : <strong>'.$rvSCatMove['UMUR_BUKU'].' </strong><br>';?>
																<?='Book Value : <strong>Rp.&nbsp;'.number_format($rvSCatMove['NILAI_BUKU'], $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?>
																<?if($cekItemName=='NEW'){?>
																	<?='<br>New Price : <strong>Rp.&nbsp;'.number_format($rvSCatMove['ITEM_PRICE'], $jumlah_desimal, $pemisah_desimal, $pemisah_ribuan)."-".'</strong>';?>
																<? } ?>
															</td>													
															<td width="13%">																
																 <!--  myCheckStore myCheckStoreHeat  https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_display_checkbox_text -->
																<!-- https://www.w3schools.com/jsref/tryit.asp?filename=tryjsref_checkbox_checked2 -->
																<!-- http://jsfiddle.net/Jp2F7/1/ 
																http://jsfiddle.net/5uUjj/
																https://output.jsbin.com/ijoqep/3
																https://jsbin.com/ijoqep/3/edit?html,js,output -->
																<script>
																function <?='myFunctionMoveFoodProcessing'.$rvSCatMove['NOMOR_TAGING'];?>() {
																  var checkBox = document.getElementById("<?=$rvSCatMove['NOMOR_TAGING'];?>");
																  var text = document.getElementById("<?='text'.$rvSCatMove['NOMOR_TAGING'];?>");
																  if (checkBox.checked == true){
																	text.style.display = "block";
																  } else {
																	 text.style.display = "none";
																  }
																}
																</script>		
															   <?	$thisId = 'cekseqfoodprocessingmove'.$rvSCatMove['NOMOR_TAGING'];
															   ?>
															   <!-- OLD ITEM FOOD PROCESSING EQ cek1seqheatmovement -->
																<? if($rvSCatMove['ITEM_CODE_REPLACE'] !=''){ ?>
																	<center><input type="checkBox" name="cekseqfoodprocessingmove[]"  id="<?=$rvSCatMove['ITEM_CODE'];?>" onclick="<?='myFunctionMoveFoodProcessing'.$rvSCatMove['NOMOR_TAGING'];?>()" value="<?=$rvSCatMove['NOMOR_TAGING'];?>" style="display:show;" /></center>
																	<div id="asstfoodprocessingeq1a<?=$rvSCatMove['ITEM_CODE'];?>" style="display:none">
																	<b><u>Movement To :</u></b>
																	<br><label><b>Warehouse C1</b></label>
																	<input type="checkbox" name="cek1seqfoodprocessingmovement[<?=$rvSCatMove['NOMOR_TAGING'];?>]" id="<?='cek1seqfoodprocessingmovement'.$rvSCatMove['NOMOR_TAGING'];?>" value="move to warehouse" style="display:show;position:relative;" />
																	<div id="transfertofoodprocessingeq1a<?=$rvSCatMove['ITEM_CODE'];?>" style="display:none">
																	<label><b>Need Assistance From FSD 1C1 ?</b></label>
																			 <input type="radio" name="asstfoodprocessingeq1a[<?=$rvSCatMove['NOMOR_TAGING'];?>]" value="Yes"><font color="blue"><b>Yes</b></font></input>
																	   &nbsp;<input type="radio" name="asstfoodprocessingeq1a[<?=$rvSCatMove['NOMOR_TAGING'];?>]" value="No"><font color="red"><b>No</b></font></input>					   
																	</div>
																	
																	<br><label><b>Other Store : </b></label>
																		<input type="checkbox" name="myCheckStoreFoodProcessing[<?=$rvSCatMove['NOMOR_TAGING'];?>]" id="<?='myCheckStoreFoodProcessing'.$rvSCatMove['NOMOR_TAGING'];?>"  value="move to other store" onclick="<?='myFunctionsxfoodprocessing'.$rvSCatMove['NOMOR_TAGING'];?>()">

																	<!--<p id="<!?='text'.$rvSCatMove['NOMOR_TAGING'];?>" style="display:none">Checkbox is CHECKED!</p>-->

																	<script>
																	if(document.getElementById('<?=$rvSCatMove['ITEM_CODE'];?>').checked) 
																	{
																		$('#asstfoodprocessingeq1a<?=$rvSCatMove['ITEM_CODE'];?>').show();           
																	} else {
																		$('#asstfoodprocessingeq1a<?=$rvSCatMove['ITEM_CODE'];?>').hide();           
																	}   
																	$('#<?=$rvSCatMove['ITEM_CODE'];?>').click(function() 
																	{
																		if(document.getElementById('<?=$rvSCatMove['ITEM_CODE'];?>').checked) 
																		{
																			$('#asstfoodprocessingeq1a<?=$rvSCatMove['ITEM_CODE'];?>').show();
																		} else {
																			 $('#asstfoodprocessingeq1a<?=$rvSCatMove['ITEM_CODE'];?>').hide();
																		}
																	}); 																																				
																																																	
																	if(document.getElementById('<?='cek1seqfoodprocessingmovement'.$rvSCatMove['NOMOR_TAGING'];?>').checked) 
																	{
																		$('#transfertofoodprocessingeq1a<?=$rvSCatMove['ITEM_CODE'];?>').show();           
																	} else {
																		$('#transfertofoodprocessingeq1a<?=$rvSCatMove['ITEM_CODE'];?>').hide();           
																	}   
																	$('#<?='cek1seqfoodprocessingmovement'.$rvSCatMove['NOMOR_TAGING'];?>').click(function() 
																	{
																		if(document.getElementById('<?='cek1seqfoodprocessingmovement'.$rvSCatMove['NOMOR_TAGING'];?>').checked) 
																		{
																			$('#<?='myCheckStoreFoodProcessing'.$rvSCatMove['NOMOR_TAGING'];?>').not(this).prop('checked', false);
																			$('#transfertofoodprocessingeq1a<?=$rvSCatMove['ITEM_CODE'];?>').show();
																			$('#transfertofoodprocessingeq1b<?=$rvSCatMove['ITEM_CODE'];?>').hide();
																			$('#<?='selectseqfoodprocessingmovement'.$rvSCatMove['NOMOR_TAGING'];?>').hide();
																		} else {
																			$('#transfertofoodprocessingeq1a<?=$rvSCatMove['ITEM_CODE'];?>').hide();
																		}
																	}); 
																	if(document.getElementById('<?='myCheckStoreFoodProcessing'.$rvSCatMove['NOMOR_TAGING'];?>').checked) 
																	{
																		$('#transfertofoodprocessingeq1b<?=$rvSCatMove['ITEM_CODE'];?>').show();           
																	} else {
																		$('#transfertofoodprocessingeq1b<?=$rvSCatMove['ITEM_CODE'];?>').hide();           
																	}   
																	$('#<?='myCheckStoreFoodProcessing'.$rvSCatMove['NOMOR_TAGING'];?>').click(function() 
																	{
																		if(document.getElementById('<?='myCheckStoreFoodProcessing'.$rvSCatMove['NOMOR_TAGING'];?>').checked) 
																		{
																			$('#<?='cek1seqfoodprocessingmovement'.$rvSCatMove['NOMOR_TAGING'];?>').not(this).prop('checked', false);
																			$('#transfertofoodprocessingeq1b<?=$rvSCatMove['ITEM_CODE'];?>').show();
																			$('#transfertofoodprocessingeq1a<?=$rvSCatMove['ITEM_CODE'];?>').hide();
																		} else {
																			$('#transfertofoodprocessingeq1b<?=$rvSCatMove['ITEM_CODE'];?>').hide();
																		}
																	});
																	
																	function <?='myFunctionsxfoodprocessing'.$rvSCatMove['NOMOR_TAGING'];?>() {
																	  var checkbox = document.getElementById("<?='myCheckStoreFoodProcessing'.$rvSCatMove['NOMOR_TAGING'];?>");
																	  var text = document.getElementById("<?='selectseqfoodprocessingmovement'.$rvSCatMove['NOMOR_TAGING'];?>");
																	  if (checkbox.checked == true){
																		text.style.display = "block";
																	  } else {
																		 text.style.display = "none";
																	  }
																	}
																	
																	if(document.getElementById('<?=$rvSCatMove['ITEM_CODE'];?>').checked) 
																	{
																		$('#asstfoodprocessingeq1b<?=$rvSCatMove['ITEM_CODE'];?>').show();           
																	} else {
																		$('#asstfoodprocessingeq1b<?=$rvSCatMove['ITEM_CODE'];?>').hide();           
																	}   
																	$('#<?=$rvSCatMove['ITEM_CODE'];?>').click(function() 
																	{
																		if(document.getElementById('<?=$rvSCatMove['ITEM_CODE'];?>').checked) 
																		{
																			$('#asstfoodprocessingeq1b<?=$rvSCatMove['ITEM_CODE'];?>').show();
																		} else {
																			 $('#asstfoodprocessingeq1b<?=$rvSCatMove['ITEM_CODE'];?>').hide();
																		}
																	}); 																	
																	</script>
																	<style>
																	.selcls { 
																	padding: 3px; 
																	border: solid 1px #517B97; 
																	outline: 0; 
																	background: -webkit-gradient(linear, left top, left 25, from(#FFFFFF), color-stop(4%, #CAD9E3), to(#FFFFFF)); 
																	background: -moz-linear-gradient(top, #FFFFFF, #CAD9E3 1px, #FFFFFF 25px); 
																	box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
																	-moz-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
																	-webkit-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
																	} 															   
																	</style>  
																	</div>
																	<div class="container">
																	<!--<b>Other Store ? </b>-->																 
																		<div class="form-group" style="margin-left:-30px;">
																				<!--<label for="selectseqfoodprocessingmovement" class="col-sm-12 control-label"><b>Other Store :</b>-->
																				
																				</label>
																				<div class="col-sm-12">																				
																					<select class="form-control selcls" id="<?='selectseqfoodprocessingmovement'.$rvSCatMove['NOMOR_TAGING'];?>" name="selectseqfoodprocessingmovement[<?=$rvSCatMove['NOMOR_TAGING'];?>]" style="display:none">
																					<? 
																						$conestoreselect =  mysql_connect('localhost','usrservicedesk','kfc14022');
																									 mysql_select_db('servicedesk',$conestoreselect);
																						
																					/**	$qCekStoreSelect = mysql_query("SELECT user_nik,user_realname FROM ITH_USER 
																														WHERE user_nik NOT IN('130273','".$_SESSION['user_nik']."') AND userdepartemen_id = '".$_SESSION['user_departemen']."'
																														AND udept_id = '".$_SESSION['udeptid']."' AND usergroup_id = '".$_SESSION['ugroupid']."' 
																														AND usersubgroup_id = '".$_SESSION['usubgroupid']."'"); **/
																						$qCekStoreSelect = mysql_query("SELECT user_nik,user_realname FROM ITH_USER 
																														WHERE user_nik NOT IN('130273','".$_SESSION['user_nik']."','".$_SESSION['userstoregroup_id']."') 
																														AND userdepartemen_id = '".$_SESSION['user_departemen']."'
																														AND udept_id = 'STORE' AND usergroup_id = '".$_SESSION['ugroupid']."' 
																														AND usersubgroup_id = '".$_SESSION['usubgroupid']."'");
																						while($rCekStoreSelect = mysql_fetch_object($qCekStoreSelect))
																						{																			
																					?>
																					 <!-- <option>Male</option>
																					  <option>Female</option> -->
																					  <option value="<?=$rCekStoreSelect->user_nik;?>"><?=ucwords(strtolower($rCekStoreSelect->user_realname));?></option>
																					<? } ?>  
																					</select> 
																					<div id="transfertofoodprocessingeq1b<?=$rvSCatMove['ITEM_CODE'];?>" style="display:none;margin-left:5px;">
																					<label><b>Need Assistance From FSD 1C2 ?</b></label>
																					<br><input type="radio" name="asstfoodprocessingeq1b[<?=$rvSCatMove['NOMOR_TAGING'];?>]" value="Yes"><font color="blue"><b>Yes</b></font></input>
																					&nbsp;<input type="radio" name="asstfoodprocessingeq1b[<?=$rvSCatMove['NOMOR_TAGING'];?>]" value="No"><font color="red"><b>No</b></font></input>					   
																					</div>																				
																				</div>
																		</div>
																	</div> 
																																		
																 <!-- NEW ITEM FOOD PROCESSING EQ cek1seqfoodprocessingmovementnew -->	
																<? }elseif($rvSCatMove['ITEM_CODE_REPLACE'] ==''){ ?>
																	<center><input type="checkBox" name="cekseqfoodprocessingmove[]"  id="<?=$rvSCatMove['ITEM_CODE'];?>" onclick="<?='myFunctionMoveFoodProcessing'.$rvSCatMove['NOMOR_TAGING'];?>()" value="<?=$rvSCatMove['NOMOR_TAGING'];?>" style="display:show;" /></center>
																	<div id="asstfoodprocessingeqnew1a<?=$rvSCatMove['ITEM_CODE'];?>" style="display:none">
																	<b><u>Movement To :</u></b>
																	<br><label><b>Warehouse C2</b></label>
																	<input type="checkbox" name="cek1seqfoodprocessingmovementnew[<?=$rvSCatMove['NOMOR_TAGING'];?>]" id="<?='cek1seqfoodprocessingmovementnew'.$rvSCatMove['NOMOR_TAGING'];?>" value="move to warehouse" style="display:show;position:relative;" />
																	<div id="transfertofoodprocessingeqnew1a<?=$rvSCatMove['ITEM_CODE'];?>" style="display:none">
																	<label><b>Need Assistance From FSD 2C ?</b></label>
																			 <input type="radio" name="asstfoodprocessingeqnew1a[<?=$rvSCatMove['NOMOR_TAGING'];?>]" value="Yes"><font color="blue"><b>Yes</b></font></input>
																	   &nbsp;<input type="radio" name="asstfoodprocessingeqnew1a[<?=$rvSCatMove['NOMOR_TAGING'];?>]" value="No"><font color="red"><b>No</b></font></input>					   
																	</div>
																	
																	<br><label><b>Other Store : </b></label>
																		<input type="checkbox" name="myCheckStorenewfoodprocessing[<?=$rvSCatMove['NOMOR_TAGING'];?>]" id="<?='myCheckStorenewfoodprocessing'.$rvSCatMove['NOMOR_TAGING'];?>"  value="move to other store" onclick="<?='myFunctionsnewfoodprocessingx'.$rvSCatMove['NOMOR_TAGING'];?>()">

																	<!--<p id="<!?='text'.$rvSCatMove['NOMOR_TAGING'];?>" style="display:none">Checkbox is CHECKED!</p>-->

																	<script>
																	if(document.getElementById('<?=$rvSCatMove['ITEM_CODE'];?>').checked) 
																	{
																		$('#asstfoodprocessingeqnew1a<?=$rvSCatMove['ITEM_CODE'];?>').show();           
																	} else {
																		$('#asstfoodprocessingeqnew1a<?=$rvSCatMove['ITEM_CODE'];?>').hide();           
																	}   
																	$('#<?=$rvSCatMove['ITEM_CODE'];?>').click(function() 
																	{
																		if(document.getElementById('<?=$rvSCatMove['ITEM_CODE'];?>').checked) 
																		{
																			$('#asstfoodprocessingeqnew1a<?=$rvSCatMove['ITEM_CODE'];?>').show();
																		} else {
																			 $('#asstfoodprocessingeqnew1a<?=$rvSCatMove['ITEM_CODE'];?>').hide();
																		}
																	}); 																																				
																																																	
																	if(document.getElementById('<?='cek1seqfoodprocessingmovementnew'.$rvSCatMove['NOMOR_TAGING'];?>').checked) 
																	{
																		$('#transfertofoodprocessingeqnew1a<?=$rvSCatMove['ITEM_CODE'];?>').show();           
																	} else {
																		$('#transfertofoodprocessingeqnew1a<?=$rvSCatMove['ITEM_CODE'];?>').hide();           
																	}   
																	$('#<?='cek1seqfoodprocessingmovementnew'.$rvSCatMove['NOMOR_TAGING'];?>').click(function() 
																	{
																		if(document.getElementById('<?='cek1seqfoodprocessingmovementnew'.$rvSCatMove['NOMOR_TAGING'];?>').checked) 
																		{
																			$('#<?='myCheckStorenewfoodprocessing'.$rvSCatMove['NOMOR_TAGING'];?>').not(this).prop('checked', false);
																			$('#transfertofoodprocessingeqnew1a<?=$rvSCatMove['ITEM_CODE'];?>').show();
																			$('#transfertofoodprocessingeqnew1b<?=$rvSCatMove['ITEM_CODE'];?>').hide();
																			$('#<?='selectseqfoodprocessingmovementnew'.$rvSCatMove['NOMOR_TAGING'];?>').hide();
																		} else {
																			$('#transfertofoodprocessingeqnew1a<?=$rvSCatMove['ITEM_CODE'];?>').hide();
																		}
																	}); 
																	if(document.getElementById('<?='myCheckStorenewfoodprocessing'.$rvSCatMove['NOMOR_TAGING'];?>').checked) 
																	{
																		$('#transfertofoodprocessingeqnew1b<?=$rvSCatMove['ITEM_CODE'];?>').show();           
																	} else {
																		$('#transfertofoodprocessingeqnew1b<?=$rvSCatMove['ITEM_CODE'];?>').hide();           
																	}   
																	$('#<?='myCheckStorenewfoodprocessing'.$rvSCatMove['NOMOR_TAGING'];?>').click(function() 
																	{
																		if(document.getElementById('<?='myCheckStorenewfoodprocessing'.$rvSCatMove['NOMOR_TAGING'];?>').checked) 
																		{
																			$('#<?='cek1seqfoodprocessingmovementnew'.$rvSCatMove['NOMOR_TAGING'];?>').not(this).prop('checked', false);
																			$('#transfertofoodprocessingeqnew1b<?=$rvSCatMove['ITEM_CODE'];?>').show();
																			$('#transfertofoodprocessingeqnew1a<?=$rvSCatMove['ITEM_CODE'];?>').hide();
																		} else {
																			$('#transfertofoodprocessingeqnew1b<?=$rvSCatMove['ITEM_CODE'];?>').hide();
																		}
																	});
																	
																	function <?='myFunctionsnewfoodprocessingx'.$rvSCatMove['NOMOR_TAGING'];?>() {
																	  var checkbox = document.getElementById("<?='myCheckStorenewfoodprocessing'.$rvSCatMove['NOMOR_TAGING'];?>");
																	  var text = document.getElementById("<?='selectseqfoodprocessingmovementnew'.$rvSCatMove['NOMOR_TAGING'];?>");
																	  if (checkbox.checked == true){
																		text.style.display = "block";
																	  } else {
																		 text.style.display = "none";
																	  }
																	}
																	
																	if(document.getElementById('<?=$rvSCatMove['ITEM_CODE'];?>').checked) 
																	{
																		$('#asstfoodprocessingeqnew1b<?=$rvSCatMove['ITEM_CODE'];?>').show();           
																	} else {
																		$('#asstfoodprocessingeqnew1b<?=$rvSCatMove['ITEM_CODE'];?>').hide();           
																	}   
																	$('#<?=$rvSCatMove['ITEM_CODE'];?>').click(function() 
																	{
																		if(document.getElementById('<?=$rvSCatMove['ITEM_CODE'];?>').checked) 
																		{
																			$('#asstfoodprocessingeqnew1b<?=$rvSCatMove['ITEM_CODE'];?>').show();
																		} else {
																			 $('#asstfoodprocessingeqnew1b<?=$rvSCatMove['ITEM_CODE'];?>').hide();
																		}
																	}); 																		
																	</script>
																	<style>
																	.selcls { 
																	padding: 3px; 
																	border: solid 1px #517B97; 
																	outline: 0; 
																	background: -webkit-gradient(linear, left top, left 25, from(#FFFFFF), color-stop(4%, #CAD9E3), to(#FFFFFF)); 
																	background: -moz-linear-gradient(top, #FFFFFF, #CAD9E3 1px, #FFFFFF 25px); 
																	box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
																	-moz-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
																	-webkit-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; 
																	} 															   
																	</style>  
																	</div>
																	<div class="container">
																	<!--<b>Other Store ? </b>-->																 
																		<div class="form-group" style="margin-left:-30px;">
																				<!--<label for="selectseqfoodprocessingmovement" class="col-sm-12 control-label"><b>Other Store :</b>-->
																				
																				</label>
																				<div class="col-sm-12">																				
																					<select class="form-control selcls" id="<?='selectseqfoodprocessingmovementnew'.$rvSCatMove['NOMOR_TAGING'];?>" name="selectseqfoodprocessingmovementnew[<?=$rvSCatMove['NOMOR_TAGING'];?>]" style="display:none">
																					<? 
																						$conestoreselect =  mysql_connect('localhost','usrservicedesk','kfc14022');
																									 mysql_select_db('servicedesk',$conestoreselect);
																						
																					/**	$qCekStoreSelect = mysql_query("SELECT user_nik,user_realname FROM ITH_USER 
																														WHERE user_nik NOT IN('130273','".$_SESSION['user_nik']."') AND userdepartemen_id = '".$_SESSION['user_departemen']."'
																														AND udept_id = '".$_SESSION['udeptid']."' AND usergroup_id = '".$_SESSION['ugroupid']."' 
																														AND usersubgroup_id = '".$_SESSION['usubgroupid']."'"); **/
																						$qCekStoreSelect = mysql_query("SELECT user_nik,user_realname FROM ITH_USER 
																														WHERE user_nik NOT IN('130273','".$_SESSION['user_nik']."','".$_SESSION['userstoregroup_id']."') 
																														AND userdepartemen_id = '".$_SESSION['user_departemen']."'
																														AND udept_id = 'STORE' AND usergroup_id = '".$_SESSION['ugroupid']."' 
																														AND usersubgroup_id = '".$_SESSION['usubgroupid']."'");
																						while($rCekStoreSelect = mysql_fetch_object($qCekStoreSelect))
																						{																			
																					?>
																					 <!-- <option>Male</option>
																					  <option>Female</option> -->
																					  <option value="<?=$rCekStoreSelect->user_nik;?>"><?=ucwords(strtolower($rCekStoreSelect->user_realname));?></option>
																					<? } ?>  
																					</select> 
																					<div id="transfertofoodprocessingeqnew1b<?=$rvSCatMove['ITEM_CODE'];?>" style="display:none;margin-left:5px;">
																					<label><b>Need Assistance From FSD 2C ?</b></label>
																					<br><input type="radio" name="asstfoodprocessingeqnew1b[<?=$rvSCatMove['NOMOR_TAGING'];?>]" value="Yes"><font color="blue"><b>Yes</b></font></input>
																					&nbsp;<input type="radio" name="asstfoodprocessingeqnew1b[<?=$rvSCatMove['NOMOR_TAGING'];?>]" value="No"><font color="red"><b>No</b></font></input>					   
																					</div>																				
																				</div>
																		</div>
																	</div> 
																	
															   <? } ?>																	   
																<!--<center><input type="checkBox" id="<!?=$rvSCatReplace->ITEM_CODE;?>" onclick="<!?='myFunctionMove'.$rvSCatReplace->ITEM_CODE;?>()" name="cekseqfoodprocessingreplace[]" value="<!?=$rvSCatReplace->NOMOR_TAGING;?>" style="display:show;" /></center>-->
																<!--<center><input type="checkbox" id="<!?='cekseqfoodprocessingreplaceA00337A120320192';?>"  onclick="myFunctionMove()"></center>-->
																<!-- cekseqfoodprocessingreplaceA00337A120320192 -->
																<!--<p id="text" style="display:none"><!?='cekseqfoodprocessingreplace'.$rvSCatReplace["NOMOR_TAGING"];?></p>-->

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
							

						$('#kode_tipebrgRQS-03-000112move').click(function() 
						{
						  $('.kode_tipebrgRQS-03-000112move').toggle('slow', function() {
						  }); 	  
							if (display === true ) {
							  $( ".kode_tipebrgRQS-03-000112move" ).show();
							} else if (display === false ) {
							  $( ".kode_tipebrgRQS-03-000112move" ).hide();
							};	   
						});
						
						$('#kode_tipebrgRQS-03-000113move').click(function() 
						{
						  $('.kode_tipebrgRQS-03-000113move').toggle('slow', function() {
						  }); 	  
							if (display === true ) {
							  $( ".kode_tipebrgRQS-03-000113move" ).show();
							} else if (display === false ) {
							  $( ".kode_tipebrgRQS-03-000113move" ).hide();
							};	   
						});
						
						$('#kode_tipebrgRQS-03-000114move').click(function() 
						{
						  $('.kode_tipebrgRQS-03-000114move').toggle('slow', function() {
						  }); 	  
							if (display === true ) {
							  $( ".kode_tipebrgRQS-03-000114move" ).show();
							} else if (display === false ) {
							  $( ".kode_tipebrgRQS-03-000114move" ).hide();
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
	<? } ?>
<? } ?>