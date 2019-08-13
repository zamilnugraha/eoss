<? 
$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
@session_start();
$ticket_id = $_GET['pid'];
$userid = $_GET['uid'];
$ticketdetail_id = $_GET['pid'];
$username = $_GET['username'];
$usrlevel = $_SESSION['user_level'];
?>
<link type="text/css" href="css/custom.css" rel="stylesheet" />
<link href="requestlist/css/bootstrap.min.css" rel="stylesheet" media="screen">
<style>
/* @import url(http://fonts.googleapis.com/css?family=Droid+Sans); */
form{
    background-color:white;
}
#maindiv{
    width:960px; 
    margin:10px auto; 
    padding:10px;
    font-family: 'Droid Sans', sans-serif;
}
#formdiv{
    width:500px; 
    float:left; 
    text-align: center;
}
form{
    padding: 40px 20px;
    border-radius: 2px;
}
h2{
    margin-left: 30px;
}
.upload{
    background-color:#ff0000;
    border:1px solid #ff0000;
    color:#fff;
    border-radius:5px;
    padding:10px;
    text-shadow:1px 1px 0px green;
    margin-left:270px;
	margin-top:-40px;
	position:relative;
}
.upload:hover{
    cursor:pointer;
    background:#c20b0b;
    border:1px solid #c20b0b;
}
#file{
    color:green;
    padding:5px; border:1px dashed #123456;
    background-color: #f9ffe5;
}
#upload{
    margin-left: 45px;
}

#noerror{
    color:green;
    text-align: left;
}
#error{
    color:red;
    text-align: left;
}
#img{ 
    width: 17px;
    border: none; 
    height:17px;
    margin-left: 0px;
	margin-top:10px;
    margin-bottom: 91px;
}

.abcd{
    text-align: left;
	margin-left:0;
}

.abcd img{
    height:100px;
    width:100px;
    padding: 5px;
    border: 1px solid rgb(232, 222, 189);
}
b{
    color:red;
}
#formget{
    float:right; 

}
</style>


      <form action="index.php?m=form&a=ncappic&pid=<?=$_GET['pid']?>&uid=<?=$_GET['uid']?>" method="post" enctype="multipart/form-data" id="form1" name="form1" onSubmit="return">
        <table width="100%" border="0">
		  <? 
			$qcekappby = mysql_query("SELECT ticketdetail_pichandleby, ticketdetail_pichandleby2, ticketdetail_pichandleby3 
			FROM ITH_TICKET_DETAIL WHERE ticketdetail_id = '$ticket_id'");
			$rcekappby = mysql_fetch_object($qcekappby);
			if($rcekappby->ticketdetail_pichandleby== $_SESSION['user_id']){
		  ?>	  
				  <tr>
					<td valign="top">Description<span class="note">*</span></td>
					<td valign="top"><textarea name="ticket_solution" id="ticket_solution" rows="15" class="input"></textarea></td>
				  </tr>	
		  <?
		  	$qCekTipeLaporan = mysql_query("SELECT statuslaporan_name FROM VW_ITH_TICKET_HEADER WHERE ticket_id ='$_GET[pid]'");
			$rCekTipeLaporan = mysql_fetch_object($qCekTipeLaporan);
			#if($rCekTipeLaporan->statuslaporan_name == 'Request Store'){ 
		  ?>
		<tr>
				<td valign="top" style="display:none;">Status Barang :  <span class="note" style="color:red;">*</span></td>
				<td valign="top">
			<? if($dtmyticket->statuslaporan_name=='Request Store'){ ?>
			<b><u>PERMINTAAN BARANG DARI CABANG (
				<?
					$qcektipebrgsx = mysql_query("SELECT kode_tipebrg FROM ITH_TICKET_HEADER where ticket_id = '$_GET[pid]'");
					$rcektipebrgsx = mysql_fetch_object($qcektipebrgsx);
					if($rcektipebrgsx->kode_tipebrg=='FSDBRGEQ'){ 
				?>
					<?="EQUIPMENT";?>
				<?	}elseif($rcektipebrgsx->kode_tipebrg=='FSDBRGSW'){  ?>
					<?="SMALLWARE";?>
				<?	}elseif($rcektipebrgsx->kode_tipebrg=='FSDBRGSP'){ ?>
					<?="SPAREPART";?>
				<?	}
				?>
			)</u></b></center><br>		
				<script src="jquery/jquery.min.js"></script>
				<script>
					$(document).ready(function()
					{
						$("#equipmentsrc").on("keyup", function() 
						{
							var value = $(this).val().toLowerCase();
							$("#myCodes tr").filter(function() 
							{
								$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
							});
						});
						$("#smallwaresrc").on("keyup", function() 
						{
							var value = $(this).val().toLowerCase();
							$("#myCodes tr").filter(function() 
							{
								$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
							});
						});
						$("#sparepartsrc").on("keyup", function() 
						{
							var value = $(this).val().toLowerCase();
							$("#myCodes tr").filter(function() 
							{
								$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
							});
						});
					});
				</script>
				<style>
					table.blueTable 
					{
						border: 1px solid #1C6EA4; background-color: #EEEEEE; width: 100%;
						text-align: left; border-collapse: collapse; overflow-x:scroll;height:100px; position:relative;
					}
					table.blueTable td, table.blueTable th 
					{
						border: 1px solid #AAAAAA; padding: 3px 2px;				  
					}
					table.blueTable tbody td { font-size: 13px; }
					table.blueTable tr:nth-child(even) { background: #D0E4F5; }
					table.blueTable thead 
					{ 
						background: #1C6EA4; background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
						background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
						background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
						border-bottom: 2px solid #444444;
					}
					table.blueTable thead th 
					{
						font-size: 12px; text-align:center; font-weight: bold; color: #FFFFFF; border-left: 2px solid #D0E4F5;
					}
					table.blueTable thead th:first-child { border-left: none; }
					table.blueTable tfoot 
					{ 
						font-size: 14px; font-weight: bold; color: #FFFFFF; background: #D0E4F5;
						background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
						background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
						background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
						border-top: 2px solid #444444;
					}
					table.blueTable tfoot td { font-size: 14px; }
					table.blueTable tfoot .links { text-align: right; }
					table.blueTable tfoot .links a{ display: inline-block; background: #1C6EA4; color: #FFFFFF; padding: 2px 8px; border-radius: 5px; }			
					</style>
					<!--<input id="equipmentsrc" type="text" placeholder="Search..">-->
						<table class="blueTable" border="1"> 
							<? 
								$qcektipebrgdetailx = mysql_query("SELECT ITH_TICKET_HEADER.kode_tipebrg 
																FROM ITH_TICKET_HEADER 																
																WHERE ITH_TICKET_HEADER.kode_tipebrg != '' AND ITH_TICKET_HEADER.ticket_id = '".$_GET['pid']."'");
								$rcektipebrgdetailx = mysql_fetch_object($qcektipebrgdetailx);	
								if($rcektipebrgdetailx->kode_tipebrg == 'FSDBRGEQ') /* EQUIPMENT INFO DI TIKET DETAIL */
								{
							?>						
							<thead>
								<tr>
									<?  
										$objConnect = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
									?>														
										<th width="15%">No<br>RO<br>XXX</th>
										<!--<th width="17%">No<br>Req</th>-->
										<th width="15%">Tgl<br>Req</th>
										<th width="15%">Kode<br>Brg</th>
										<!--<th width="15%">Kode<br>Brg SW</th>-->
										<th width="25%">Nama<br>Brg</th>
										<th width="15%">Jml<br>Req.</th>
										<th width="15%">Status<br>Brg</th>
										<th width="15%">Action</th>
										<th width="10%" style="display:none;">STK<br>BARU</th>
										<th width="10%" style="display:none;">STK<br>BAIK</th>
										<th width="10%" style="display:none;">STK<br>LAMA</th>
								</tr>													
							</thead>
							<? 
							}elseif($rcektipebrgdetailx->kode_tipebrg == 'FSDBRGSW') /* SMAFFWARE INFO DI TIKET DETAIL */
							{
							?>
							<thead>
								<tr>
									<?  
										$objConnect = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
									?>														
										<th width="15%">No<br>RO<br>X2</th>
										<!--<th width="17%">No<br>Req</th>-->
										<th width="15%">Tgl<br>Req</th>
										<th width="15%">Kode<br>Brg</th>
										<!--<th width="15%">Kode<br>Brg SW</th>-->
										<th width="25%">Nama<br>Brg</th>
										<th width="15%">Jml<br>Req.</th>
										<th width="15%">Status<br>Brg</th>
										<th width="15%">Action</th>
										<th width="10%" style="display:none;">STK<br>BARU</th>
										<th width="10%" style="display:none;">STK<br>BAIK</th>
										<th width="10%" style="display:none;">STK<br>LAMA</th>
								</tr>													
							</thead>
							<? 
							}
							?>							
						</table>								
						<div style="width:100%; height:150px; overflow:auto;position:relative;">
							<table class="blueTable" border="1">
								<tbody id="myCodes">
									<?  
										$qcektipebrgdetail = mysql_query("SELECT ITH_TICKET_HEADER.ticket_id, ITH_TICKET_HEADER.kode_tipebrg 
																FROM ITH_TICKET_HEADER 
																JOIN ITH_TIPEBRG ON ITH_TICKET_HEADER.kode_tipebrg = ITH_TIPEBRG.kode_tipebrg
																WHERE ITH_TICKET_HEADER.kode_tipebrg != '' AND ITH_TICKET_HEADER.ticket_id = '$_GET[pid]'");
										$rcektipebrg = mysql_fetch_object($qcektipebrgdetail);	
										if($rcektipebrg->kode_tipebrg == 'FSDBRGEQ') /* EQUIPMENT INFO DI TIKET DETAIL */
										{
											$qvCekDataEQ = mysql_query("SELECT DISTINCT ticket_id, no_permintaan, request_by, kode_tipebarang, kode_tipebarang_sw, kode_tipebarang_sp,
																kuantitas, nama_tipebarang, nama_tipebarang_sw, nama_tipebarang_sp
																FROM ITH_TIPEBARANG_KODE
																WHERE ticket_id = '$_GET[pid]'");
																$rvCekDataEQ = mysql_fetch_object($qvCekDataEQ);
														$qCekStatusTiketStore = mysql_query("SELECT ticket_id, ticketstatus_id, ticketapprovalstatus_id, 
																					ticketapprovalstatus_id2, ticketapprovalstatus_id3 
																					FROM ITH_TICKET_HEADER WHERE ticket_id = '$_GET[pid]'");
												$rCekStatusTiketStore = mysql_fetch_object($qCekStatusTiketStore);
												if(($rCekStatusTiketStore->ticketapprovalstatus_id!='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id2!='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id3!='1'))
												{	
													$qvCekDataEQ = mysql_query("SELECT DISTINCT ticket_id, no_permintaan, request_by, kode_tipebarang, kode_tipebarang_sw, kode_tipebarang_sp,
															kuantitas, nama_tipebarang, nama_tipebarang_sw, nama_tipebarang_sp
															FROM ITH_TIPEBARANG_KODE
															WHERE ticket_id = '$_GET[pid]'");
													$rvCekDataEQ = mysql_fetch_object($qvCekDataEQ);													
													
													$objConnectShowEQ = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
													$qShowEQ = "select FSDORDEC.NO_PERMINTAAN, FSDORDEC.TGL_PERMINTAAN, FSDORDEC.TGL_BUAT_FSD, FSDORDEC.KODE_BARANG, 
																FSDBRGEQ.NAMA_BARANG,
																FSDORDEC.JUMLAH_PERMINTAAN, FSDORDEC.JUMLAH_ORDER, FSDORDEC.KIRIM_DARI_STOK, FSDORDEC.TGL_DISETUJUI, 
																FSDORDEC.NOMOR_RO, FSDORDEC.STATUS_PERMINTAAN
																from FSDORDEC 
																JOIN FSDBRGEQ ON FSDORDEC.KODE_BARANG = FSDBRGEQ.KODE_BARANG
																where NO_PERMINTAAN = '$rvCekDataEQ->no_permintaan'
																AND JUMLAH_PERMINTAAN IS NOT NULL order by FSDORDEC.TGL_PERMINTAAN DESC";  
													$qobjParseShowEQ = oci_parse ($objConnectShowEQ, $qShowEQ);  
																       oci_execute ($qobjParseShowEQ,OCI_DEFAULT); 											
												echo "TEST1";
												}elseif
													((($rCekStatusTiketStore->ticketapprovalstatus_id=='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id2=='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id3=='1'))||
													(($rCekStatusTiketStore->ticketapprovalstatus_id=='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id2=='2')&&($rCekStatusTiketStore->ticketapprovalstatus_id3=='2'))||
													(($rCekStatusTiketStore->ticketapprovalstatus_id=='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id2=='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id3=='2'))||
													(($rCekStatusTiketStore->ticketapprovalstatus_id=='2')&&($rCekStatusTiketStore->ticketapprovalstatus_id2=='2')&&($rCekStatusTiketStore->ticketapprovalstatus_id3=='1'))||
													(($rCekStatusTiketStore->ticketapprovalstatus_id=='2')&&($rCekStatusTiketStore->ticketapprovalstatus_id2=='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id3=='1'))||
													(($rCekStatusTiketStore->ticketapprovalstatus_id=='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id2=='2')&&($rCekStatusTiketStore->ticketapprovalstatus_id3=='1')))
												{			
															$con = mysql_connect("localhost","usrservicedesk","kfc14022");
																   mysql_select_db("servicedesk",$con); //@session_start();
															$qvCekDataEQ = mysql_query("SELECT DISTINCT no_permintaan
															FROM ITH_TIPEBARANG_KODE
															WHERE ticket_id = '$_GET[pid]'");
															$rvCekDataEQ = mysql_fetch_object($qvCekDataEQ);
															
															$objConnectShowEQ = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
															$qCekNomorROEQ = "select DISTINCT 
																NOMOR_RO
																from FSDORDEC 																
																where NO_PERMINTAAN = '$rvCekDataEQ->no_permintaan'
																 order by TGL_PERMINTAAN DESC";
															$qobjParseCekNomorROEQ = oci_parse ($objConnectShowEQ, $qCekNomorROEQ);  
																				oci_execute ($qobjParseCekNomorROEQ,OCI_DEFAULT); 
															$rvCekNomorROEQ = oci_fetch_array($qobjParseCekNomorROEQ,OCI_BOTH);																
													if($rvCekNomorROEQ['NOMOR_RO']!='')
													{			
																$objConnectShowEQ = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
																$qShowEQ = "select FSDORDEC.KODE_CABANG, MSTCBGDT.NAMA_CABANG, FSDORDEC.NO_PERMINTAAN,
																FSDORDEC.NOMOR_RO,FSDORDEC.TGL_PERMINTAAN, FSDORDEC.KODE_BARANG, 
																FSDBRGEQ.NAMA_BARANG, FSDORDEC.JUMLAH_PERMINTAAN, 
																FSDORDEC.STATUS_PERMINTAAN, FSDROEQC.STATUS, FSDORDEC.KIRIM_DARI_STOK
																from FSDORDEC
																JOIN MSTCBGDT ON FSDORDEC.KODE_CABANG = MSTCBGDT.CABANG_HEADER
																JOIN FSDBRGEQ ON FSDORDEC.KODE_BARANG = FSDBRGEQ.KODE_BARANG
																JOIN FSDROEQC ON FSDORDEC.NOMOR_RO = FSDROEQC.NOMOR_RO
																WHERE FSDORDEC.NO_PERMINTAAN ='$rvCekDataEQ->no_permintaan'";
																$qobjParseShowEQ = oci_parse ($objConnectShowEQ, $qShowEQ);  
																oci_execute ($qobjParseShowEQ,OCI_DEFAULT);  
													}elseif($rvCekNomorROEQ['NOMOR_RO']=='')
													{
														/*	$qCekNomorROEQ = "select FSDORDEC.KODE_CABANG, MSTCBGDT.NAMA_CABANG, FSDORDEC.NO_PERMINTAAN,
															FSDORDEC.NOMOR_RO,FSDORDEC.TGL_PERMINTAAN, FSDORDEC.KODE_BARANG, 
															FSDBRGEQ.NAMA_BARANG, FSDORDEC.JUMLAH_PERMINTAAN, 
															FSDORDEC.STATUS_PERMINTAAN, FSDROEQC.STATUS, FSDORDEC.KIRIM_DARI_STOK
															from FSDORDEC
															JOIN MSTCBGDT ON FSDORDEC.KODE_CABANG = MSTCBGDT.CABANG_HEADER
															JOIN FSDBRGEQ ON FSDORDEC.KODE_BARANG = FSDBRGEQ.KODE_BARANG
															JOIN FSDROEQC ON FSDORDEC.NOMOR_RO = FSDROEQC.NOMOR_RO
															WHERE FSDORDEC.NO_PERMINTAAN ='$rvCekDataEQ->no_permintaan'";
															$qobjParseCekNomorROEQ = oci_parse ($objConnectShowEQ, $qCekNomorROEQ);  
																				oci_execute ($qobjParseCekNomorROEQ,OCI_DEFAULT); 
															$rvCekNomorROEQ = oci_fetch_array($qobjParseCekNomorROEQ,OCI_BOTH);														
														*/
																$objConnectShowEQ = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 	
																$qShowEQ = "select FSDORDEC.NO_PERMINTAAN, FSDORDEC.TGL_PERMINTAAN, FSDORDEC.TGL_BUAT_FSD, FSDORDEC.KODE_BARANG, 
																FSDBRGEQ.NAMA_BARANG,
																FSDORDEC.JUMLAH_PERMINTAAN, FSDORDEC.JUMLAH_ORDER, FSDORDEC.KIRIM_DARI_STOK, FSDORDEC.TGL_DISETUJUI, 
																FSDORDEC.NOMOR_RO, FSDORDEC.STATUS_PERMINTAAN
																from FSDORDEC 
																JOIN FSDBRGEQ ON FSDORDEC.KODE_BARANG = FSDBRGEQ.KODE_BARANG
																where NO_PERMINTAAN = '$rvCekDataEQ->no_permintaan'
																AND JUMLAH_PERMINTAAN IS NOT NULL order by FSDORDEC.TGL_PERMINTAAN DESC";  
																$qobjParseShowEQ = oci_parse ($objConnectShowEQ, $qShowEQ);  
																oci_execute ($qobjParseShowEQ,OCI_DEFAULT);  
																
													}			
												}			
																while($rvSCatShowEQ = oci_fetch_array($qobjParseShowEQ,OCI_BOTH))  
																{  
																	$_SESSION['NOMORRO'] = $rvSCatShowEQ["NOMOR_RO"];
																	$_SESSION['NOREQ'] = $rvSCatShowEQ["NO_PERMINTAAN"];
																	$_SESSION['KDBRG'] = $rvSCatShowEQ["KODE_BARANG"];
																?>  												
																<tr>												
																	<td width="27%">
																		<center><?=$rvSCatShowEQ["NOMOR_RO"];?></center>
																	</td>
																	<!--<td width="7%">
																		<center><!?=$rvSCatShowEQ["NO_PERMINTAAN"];?>																	
																		</center>
																	</td>-->
																	<td width="23%">
																		<center><?=$rvSCatShowEQ["TGL_PERMINTAAN"];?></center>
																	</td>
																	
																	<td width="23%">
																	<center><!--?=$rvSCatShowEQ["KODE_BARANG"];?-->
																	<input type="checkbox" name="cekKdBrg[]" value="<?=$rvSCatShowEQ["KODE_BARANG"];?>" style="pointer-events:none;" id="cekKdBrg"  checked readonly />&nbsp;<?=$rvSCatShowEQ["KODE_BARANG"];?>
																	</center>
																	</td>	
																	<!--<td width="20%">-</td>-->															
																	<td width="30%">
																	<center><?=$rvSCatShowEQ["NAMA_BARANG"];?></center>
																	</td>														
																	<td width="15%">
																		<center><?=$rvSCatShowEQ["JUMLAH_PERMINTAAN"].' <b>UNIT</b>';?></center>
																	</td>																
																	<td width="15%">
																	<center>																<? 
															$con = mysql_connect("localhost","usrservicedesk","kfc14022");		
															$qCekStatusTiketX = mysql_query("SELECT ticketstatus_id FROM ITH_TICKET_HEADER
																										WHERE ticket_id = '$_GET[pid]'");	
															$rCekStatusTiketX = mysql_fetch_object($qCekStatusTiketX);
															if($rCekStatusTiketX->ticketstatus_id=='2')
															{	### echo "ON PROCESS<br>";																	
																if($rvSCatShowEQ["KIRIM_DARI_STOK"]=='0')
																{
																	#echo "<br>ADA NOMOR RO<br>";
																	$objConnectShowEQ = oci_connect('fsd', 'fsd', 'localhost:1521/XE');
																	if(($rvSCatShowEQ["STATUS_PERMINTAAN"]==' ')&&($rvSCatShowEQ["STATUS_KIRIM"]==''))
																	{
																		if($rvSCatShowEQ["STATUS_PERMINTAAN"]==' '){ echo "Menunggu diApproval untuk tiket ".$_GET['pid'];												
																		}elseif($rvSCatShowEQ["STATUS_PERMINTAAN"]=='D'){ echo "Barang Sudah Disetujui Oleh FSD MGR/SUB MGR";																
																		}elseif($rvSCatShowEQ["STATUS_PERMINTAAN"]=='R'){ echo "Barang Sedang Diproses FSD untuk Tutup Hari";}	
																	}elseif(($rvSCatShowEQ["STATUS_PERMINTAAN"]=='D')&&($rvSCatShowEQ["STATUS_KIRIM"]==''))
																	{
																		if($rvSCatShowEQ["STATUS_PERMINTAAN"]==' '){ echo "Menunggu diApproval untuk tiket ".$_GET['pid'];												
																		}elseif($rvSCatShowEQ["STATUS_PERMINTAAN"]=='D'){ echo "Barang Sudah Disetujui Oleh FSD MGR/SUB MGR";																
																		}elseif($rvSCatShowEQ["STATUS_PERMINTAAN"]=='R'){ echo "Barang Sedang Diproses FSD untuk Tutup Hari";}	
																	}elseif(($rvSCatShowEQ["STATUS_PERMINTAAN"]=='R')&&($rvSCatShowEQ["STATUS"]==' ')&&($rvSCatShowEQ["STATUS_KIRIM"]=='')){
																		if($rvSCatShowEQ["STATUS"]==' '){ echo "Barang Sedang Diproses FSD untuk Tutup Hari";												
																		}elseif($rvSCatShowEQ["STATUS"]=='O'){ echo "Barang Sedang Proses Order";																
																		}elseif($rvSCatShowEQ["STATUS"]=='P'){ echo "Barang Sudah Proses DO Balik";}
																		}elseif(($rvSCatShowEQ["STATUS_PERMINTAAN"]=='R')&&
																				(($rvSCatShowEQ["STATUS"]=='O')||($rvSCatShowEQ["STATUS"]=='P')||($rvSCatShowEQ["STATUS"]=='C'))
																				)
																		{	
																			if($rvSCatShowEQ["STATUS"]==' '){ echo "Barang Sedang Diproses FSD untuk Tutup Hari";												
																			}elseif($rvSCatShowEQ["STATUS"]=='O'){ echo "X3<br>Barang Sedang Proses Pesan(Order) dari Gudang";																
																			}elseif($rvSCatShowEQ["STATUS"]=='P'){ echo "Barang Sudah Diterima Oleh Store (Proses DO Balik)";
																			}elseif($rvSCatShowEQ["STATUS"]=='C'){ echo "Barang Dibatalkan Pemesanannya";}
																			echo "<br>";
																										
																			$qStatusKirimKeStore = "select STATUS_KIRIM from FSDKRMEQ where NO_RO = '".$rvSCatShowEQ['NOMOR_RO']."'";
																			$qobjParseStatusKirimKeStore = oci_parse ($objConnectShowEQ, $qStatusKirimKeStore);  
																						  oci_execute ($qobjParseStatusKirimKeStore,OCI_DEFAULT);
																			$rvStatusKirimKeStore = oci_fetch_array($qobjParseStatusKirimKeStore,OCI_BOTH);	
																			#echo "<br>STATUS_KIRIM : ".$rvStatusKirimKeStore['STATUS_KIRIM'];
																		#	if(($rvStatusKirimKeStore['STATUS_KIRIM']=='K')||($rvStatusKirimKeStore['STATUS_KIRIM']=='D'))
																			if(($rvStatusKirimKeStore['STATUS_KIRIM']=='K'))
																			{		
																				if($rvStatusKirimKeStore["STATUS_KIRIM"]=='K'){ echo "Dan Barang Dalam Proses Kirim Ke Store";														
																				#}elseif($rvStatusKirimKeStore["STATUS_KIRIM"]=='D'){ echo "Dan Barang Sudah Diterima Oleh Store";																
																				}	
																			}	echo "<br>";
																			
																		}	
																}	
																elseif($rvSCatShowEQ["KIRIM_DARI_STOK"]!='0')
																{
																	##echo "<br>ADA NOMOR RO<br>";
																	 
								
																		$objConnectShowEQ = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
																		if(($rvSCatShowEQ["STATUS_PERMINTAAN"]==' '))
																		{
																			if($rvSCatShowEQ["STATUS_PERMINTAAN"]==' '){ echo "Menunggu diApproval untuk tiket ".$_GET['pid'];												
																			}elseif($rvSCatShowEQ["STATUS_PERMINTAAN"]=='D'){ echo "Barang Sudah Disetujui Oleh FSD MGR/SUB MGR";																
																			}elseif($rvSCatShowEQ["STATUS_PERMINTAAN"]=='R'){ echo "Barang Sedang Diproses FSD untuk Tutup Hari";}	
																		
																		}elseif(($rvSCatShowEQ["STATUS_PERMINTAAN"]=='D'))
																		{   #echo "<br>STATUS_PERMINTAAN DISETUJUI<br>";
																			if($rvSCatShowEQ["STATUS_PERMINTAAN"]==' '){ echo "Menunggu diApproval untuk tiket ".$_GET['pid'];												
																			}elseif($rvSCatShowEQ["STATUS_PERMINTAAN"]=='D'){ echo "Barang Sudah Disetujui Oleh FSD MGR/SUB MGR";																
																			}elseif($rvSCatShowEQ["STATUS_PERMINTAAN"]=='R'){ echo "Barang Sedang Diproses FSD untuk Tutup Hari";}	
																		
																		}elseif(($rvSCatShowEQ["STATUS_PERMINTAAN"]=='R')&&($rvSCatShowEQ["STATUS"]==' '))
																		{
																			if($rvSCatShowEQ["STATUS"]==' '){ echo "Barang Sedang Diproses FSD untuk Tutup Hari";												
																			}elseif($rvSCatShowEQ["STATUS"]=='O'){ echo "X2<br>Barang Sedang Proses Pesan(Order) dari Gudang";																
																			}elseif($rvSCatShowEQ["STATUS"]=='P'){ echo "Barang Sudah Proses DO Balik";}
																		
																		##}elseif(($rvSCatShowSW["STATUS_PERMINTAAN"]=='R')&&
																		##		(($rvSCatShowSW["STATUS"]=='O')||($rvSCatShowSW["STATUS"]=='P')||($rvSCatShowSW["STATUS"]=='C'))&&
																		##		($rvSCatShowSW["STATUS_KIRIM"]==''))
																		##{
																			/**
																			if($rvSCatShowSW["STATUS"]==' '){ echo "Barang Sedang Diproses FSD untuk Tutup Hari";												
																			}elseif($rvSCatShowSW["STATUS"]=='O'){ echo "X3<br>Barang Sedang Proses Pesan(Order) dari Gudang";																
																			}elseif($rvSCatShowSW["STATUS"]=='P'){ echo "Barang Sudah Proses DO Balik";
																			}elseif($rvSCatShowSW["STATUS"]=='C'){ echo "Barang Dibatalkan Pemesanannya";}
																			**/
																		#}elseif(($rvSCatShowSW["STATUS_KIRIM"]!='')){
																		}elseif(($rvSCatShowEQ["STATUS_PERMINTAAN"]=='R')&&
																				(($rvSCatShowEQ["STATUS"]=='O')||($rvSCatShowEQ["STATUS"]=='P')||($rvSCatShowEQ["STATUS"]=='C'))
																				)
																		{	
																			if($rvSCatShowEQ["STATUS"]==' '){ echo "Barang Sedang Diproses FSD untuk Tutup Hari";												
																			}elseif($rvSCatShowEQ["STATUS"]=='O'){ echo "X3<br>Barang Sedang Proses Pesan(Order) dari Gudang";																
																			}elseif($rvSCatShowEQ["STATUS"]=='P'){ echo "Barang Sudah Diterima Oleh Store (Proses DO Balik)";
																			}elseif($rvSCatShowEQ["STATUS"]=='C'){ echo "Barang Dibatalkan Pemesanannya";}
																			echo "<br>";
																			#echo "<br>NOMOR RO : <b>".$rvSCatShowSW["NOMOR_RO"].'</b>';
																			#echo "<br>select STATUS_KIRIM from FSDKRMSW where NO_RO = '".$rvSCatShowSW['NOMOR_RO']."'";
																			##$objConnectShowSW = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
																			#$qStatusKirimKeStore = "select STATUS_KIRIM from FSDKRMSW where NO_RO = 'RO030318001'";
																			
																			$qStatusKirimKeStore = "select STATUS_KIRIM from FSDKRMEQ where NO_RO = '".$rvSCatShowEQ['NOMOR_RO']."'";
																			$qobjParseStatusKirimKeStore = oci_parse ($objConnectShowEQ, $qStatusKirimKeStore);  
																						  oci_execute ($qobjParseStatusKirimKeStore,OCI_DEFAULT);
																			$rvStatusKirimKeStore = oci_fetch_array($qobjParseStatusKirimKeStore,OCI_BOTH);	
																			#echo "<br>STATUS_KIRIM : ".$rvStatusKirimKeStore['STATUS_KIRIM'];
																		#	if(($rvStatusKirimKeStore['STATUS_KIRIM']=='K')||($rvStatusKirimKeStore['STATUS_KIRIM']=='D'))
																			if(($rvStatusKirimKeStore['STATUS_KIRIM']=='K'))
																			{		
																				if($rvStatusKirimKeStore["STATUS_KIRIM"]=='K'){ echo "Dan Barang Dalam Proses Kirim Ke Store";														
																				#}elseif($rvStatusKirimKeStore["STATUS_KIRIM"]=='D'){ echo "Dan Barang Sudah Diterima Oleh Store";																
																				}	
																			}	echo "<br>";
																			
																		}	
																	

																}	
															#}	
															#}elseif(($rCekStatusTiketX->ticketstatus_id=='0')||($rCekStatusTiketX->ticketstatus_id=='5'))
															}elseif($rCekStatusTiketX->ticketstatus_id=='0')
															{
																#echo "SOLVED ZZZ<br>";
																#if($rvSCatShowEQ["STATUS_KIRIM"]=='K'){ echo "BBB1....<br>Barang Proses Dikirim Ke Store";														
																#}elseif($rvSCatShowEQ["STATUS_KIRIM"]=='D'){ echo "Barang Sudah Diterima Oleh Store";																
																#}																	
																if($rvSCatShowEQ["KIRIM_DARI_STOK"]=='0') /* ORDER KE PROCUREMENT */
																{
																	echo "<br>STOK TIDAK TERSEDIA DI GUDANG<br>";
																	
																/*	if(($rvSCatShowEQ["STATUS_PERMINTAAN"]=='R')&&
																			(($rvSCatShowEQ["STATUS"]=='O')||($rvSCatShowEQ["STATUS"]=='P')||($rvSCatShowEQ["STATUS"]=='C'))&&
																			($rvSCatShowEQ["STATUS_KIRIM"]=='D'))
																	{
																		if($rvSCatShowEQ["STATUS_KIRIM"]=='K'){ echo "Barang Proses Dikirim Ke Store";														
																		}elseif($rvSCatShowEQ["STATUS_KIRIM"]=='D'){ echo "Barang Sudah Diterima Oleh Store";																
																		}	
																	#}elseif(($rvSCatShowEQ["STATUS_KIRIM"]!='')){
																	}elseif(($rvSCatShowEQ["STATUS_PERMINTAAN"]=='R')&&
																			(($rvSCatShowEQ["STATUS"]=='O')||($rvSCatShowEQ["STATUS"]=='P')||($rvSCatShowEQ["STATUS"]=='C'))&&
																			($rvSCatShowEQ["STATUS_KIRIM"]=='K'))
																	{
																		if($rvSCatShowEQ["STATUS_KIRIM"]=='K'){ echo "Barang Proses Dikirim Ke Store";														
																		}elseif($rvSCatShowEQ["STATUS_KIRIM"]=='D'){ echo "Barang Sudah Diterima Oleh Store";																
																		}	
																	}	
																*/	
																		if($rvSCatShowEQ["STATUS_KIRIM"]=='K'){ echo "ZZ1....<br>Barang Proses Dikirim Ke Store";														
																		}elseif($rvSCatShowEQ["STATUS_KIRIM"]=='D'){ echo "Barang Sudah Diterima Oleh Store";																
																		}																	
																}	
																elseif($rvSCatShowEQ["KIRIM_DARI_STOK"]!='0') /* ORDER KE GUDANG */
																{
																	#echo "<br>ADA NOMOR RO<br>";
																	 ##echo "<br>STOK TERSEDIA DI GUDANG<br>";
								
																		$objConnectShowEQ = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
																	if(($rvSCatShowEQ["STATUS_PERMINTAAN"]=='R')&&
																			(($rvSCatShowEQ["STATUS"]=='O')||($rvSCatShowEQ["STATUS"]=='P')||($rvSCatShowEQ["STATUS"]=='C'))&&
																			($rvSCatShowEQ["STATUS_KIRIM"]=='D'))
																	{
																		if($rvSCatShowEQ["STATUS_KIRIM"]=='K'){ echo "ZZ5....<br>Barang Proses Dikirim Ke Store";														
																		}elseif($rvSCatShowEQ["STATUS_KIRIM"]=='D'){ echo "Barang Sudah Diterima Oleh Store";																
																		}	
																	#}elseif(($rvSCatShowEQ["STATUS_KIRIM"]!='')){
																	}elseif(($rvSCatShowEQ["STATUS_PERMINTAAN"]=='R')&&
																			(($rvSCatShowEQ["STATUS"]=='O')||($rvSCatShowEQ["STATUS"]=='P')||($rvSCatShowEQ["STATUS"]=='C'))&&
																			($rvSCatShowEQ["STATUS_KIRIM"]=='K'))
																	{
																		if($rvSCatShowEQ["STATUS_KIRIM"]=='K'){ echo "ZZ4....<br>Barang Proses Dikirim Ke Store";														
																		}elseif($rvSCatShowEQ["STATUS_KIRIM"]=='D'){ echo "Barang Sudah Diterima Oleh Store";																
																		}	
																	}	
																}															
															}elseif($rCekStatusTiketX->ticketstatus_id=='5')
															{
																echo "CLOSED<br>";
																if($rvSCatShowEQ["KIRIM_DARI_STOK"]=='0') /* ORDER KE PROCUREMENT */
																{
																	echo "<br>STOK TIDAK TERSEDIA DI GUDANG<br>";
																	#echo "<br>ADA NOMOR RO<br>";
																	if(($rvSCatShowEQ["STATUS_PERMINTAAN"]=='R')&&
																			(($rvSCatShowEQ["STATUS"]=='O')||($rvSCatShowEQ["STATUS"]=='P')||($rvSCatShowEQ["STATUS"]=='C'))&&
																			($rvSCatShowEQ["STATUS_KIRIM"]=='D'))
																	{
																		if($rvSCatShowEQ["STATUS_KIRIM"]=='K'){ echo "ZZ3....<br>Barang Proses Dikirim Ke Store";														
																		}elseif($rvSCatShowEQ["STATUS_KIRIM"]=='D'){ echo "Barang Sudah Diterima Oleh Store";																
																		}	
																	#}elseif(($rvSCatShowEQ["STATUS_KIRIM"]!='')){
																	}elseif(($rvSCatShowEQ["STATUS_PERMINTAAN"]=='R')&&
																			(($rvSCatShowEQ["STATUS"]=='O')||($rvSCatShowEQ["STATUS"]=='P')||($rvSCatShowEQ["STATUS"]=='C'))&&
																			($rvSCatShowEQ["STATUS_KIRIM"]=='K'))
																	{
																		if($rvSCatShowEQ["STATUS_KIRIM"]=='K'){ echo "ZZ2....<br>Barang Proses Dikirim Ke Store";														
																		}elseif($rvSCatShowEQ["STATUS_KIRIM"]=='D'){ echo "Barang Sudah Diterima Oleh Store";																
																		}	
																	}	
																}	
																elseif($rvSCatShowEQ["KIRIM_DARI_STOK"]!='0') /* ORDER KE GUDANG */
																{
																	#echo "<br>ADA NOMOR RO<br>";
																	 ##echo "<br>STOK TERSEDIA DI GUDANG<br>";
								
																		$objConnectShowEQ = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
																	if(($rvSCatShowEQ["STATUS_PERMINTAAN"]=='R')&&
																			(($rvSCatShowEQ["STATUS"]=='O')||($rvSCatShowEQ["STATUS"]=='P')||($rvSCatShowEQ["STATUS"]=='C'))&&
																			($rvSCatShowEQ["STATUS_KIRIM"]==''))
																	{
																		if($rvSCatShowEQ["STATUS"]==' '){ echo "Barang Sedang Diproses FSD untuk Tutup Hari";												
																		}elseif($rvSCatShowEQ["STATUS"]=='O'){ echo "X1...Z<br>Barang Sedang Proses Order Ke Procurement";																
																		#}elseif($rvSCatShowEQ["STATUS"]=='O'){ echo "Barang Sedang Proses Order Ke Procurement";																
																		}elseif($rvSCatShowEQ["STATUS"]=='P'){ echo "Barang Sudah Proses DO Balik";
																		}elseif($rvSCatShowEQ["STATUS"]=='C'){ echo "Barang Dibatalkan Pemesanannya";}
																	#}elseif(($rvSCatShowEQ["STATUS_KIRIM"]!='')){
																	}elseif(($rvSCatShowEQ["STATUS_PERMINTAAN"]=='R')&&
																			(($rvSCatShowEQ["STATUS"]=='O')||($rvSCatShowEQ["STATUS"]=='P')||($rvSCatShowEQ["STATUS"]=='C'))&&
																			($rvSCatShowEQ["STATUS_KIRIM"]!=''))
																	{
																		if($rvSCatShowEQ["STATUS_KIRIM"]=='K'){ echo "ZZ1....<br>Barang Proses Dikirim Ke Store";														
																		}elseif($rvSCatShowEQ["STATUS_KIRIM"]=='D'){ echo "Barang Sudah Diterima Oleh Store";																
																		}	
																	}	
																}																
															} 															
																?>
																</center>
																</td>															
																	<td width="15%">
																		<center>
																			<select class="input-medium" style="width:120px;" name="statusBarang[<?=$rvSCatShowEQ["KODE_BARANG"]?>]" id="statusBarang">
																			<?
																			$qCekNomorRequestX2 = mysql_query("SELECT ticket_id, no_permintaan FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '$pid'");	
																			$rCekNomorRequestX2 = mysql_fetch_object($qCekNomorRequestX2);
																			$nomorPermintaanStoreX2 = $rCekNomorRequestX2->no_permintaan;
																			$connCekStatusPermintaanStoreEQ = oci_connect('fsd', 'fsd', 'localhost:1521/XE');
																			$sqlCekStatusPermintaanStoreEQ = "SELECT FSDORDEC.KODE_CABANG,FSDORDEC.DEPARTEMEN,FSDORDEC.NO_PERMINTAAN,FSDORDEC.TGL_PERMINTAAN,FSDORDEC.TGL_TERIMA_FSD,
																					FSDORDEC.TGL_BUAT_FSD,FSDORDEC.KODE_BARANG,FSDORDEC.JUMLAH_PERMINTAAN,
																					FSDORDEC.JUMLAH_ORDER,FSDORDEC.KETERANGAN,FSDORDEC.STATUS_PERMINTAAN,FSDORDEC.TGL_DISETUJUI,FSDORDEC.DISETUJUI_OLEH, 
																					FSDORDEC.USER_SETUJU,FSDORDEC.NOMOR_RO,FSDORDEC.USER_BUAT,FSDORDEC.USER_RUBAH,FSDORDEC.TGL_RUBAH, 
																					FSDORDEC.KIRIM_DARI_STOK FROM FSDORDEC 
																					JOIN FSDBRGEQ ON FSDORDEC.KODE_BARANG = FSDBRGEQ.KODE_BARANG
																					WHERE FSDORDEC.no_permintaan = '$nomorPermintaanStoreX1'";				
																			$compiledCekStatusPermintaanStoreEQ = oci_parse ($connCekStatusPermintaanStoreEQ, $sqlCekStatusPermintaanStoreEQ);  
																			oci_execute ($compiledCekStatusPermintaanStoreEQ,OCI_DEFAULT);  

																			$objResultCekStatusPermintaanStoreEQ = oci_fetch_array($compiledCekStatusPermintaanStoreEQ,OCI_BOTH);
																				if($objResultCekStatusPermintaanStoreEQ['NOMOR_RO'] == '') 
																				{		
																					#	$qcekQtyBrg = "SELECT NO_PO, QTY_PO FROM FSDPOEQC WHERE NOMOR_RO = '".$nomorRo."'";
																					#	$objParseQtyBrg = oci_parse ($conn, $qcekQtyBrg);  
																					#	oci_execute ($objParseQtyBrg,OCI_DEFAULT);  
																					#	$objResultQtyBrg = oci_fetch_array($objParseQtyBrg,OCI_BOTH);
																					#$rvcat2 = mysql_fetch_object($qvcat2);
																					#echo "<option value= ' ' style='background: red; color:#fff;' selected>Barang Akan Segera Diproses FSD</option>";					
																				}	
																				?>
																				<!--<option value='' style='color: grey;'>Status Barang : </option>
																							<option value='R' style='color: grey;'>Barang Akan Segera Diproses FSD</option>	
																							<option value='X' style='color: grey;'>Barang Dalam Proses Procurement</option>	
																							<option value='F' style='color: grey;'>Barang Masih ada diFSD</option>
																							<option value='S' style='color: grey;'>Barang Kirim Ke Store</option>		-->
																				<? 
																					if($rvSCatShowEQ["NOMOR_RO"]!='')
																					{	
																					#	if(($rvSCatShowSW["STATUS_KIRIM"]=='')&&($rvSCatShowSW["STATUS_PERMINTAAN"]==' ')){
																						if(($rvSCatShowEQ["STATUS_PERMINTAAN"]==' ')&&($rvSCatShowEQ["STATUS_KIRIM"]=='')){
																							if($rvSCatShowEQ["STATUS_PERMINTAAN"]==' '){ echo "<option value= ' ' style='background: red; color:#fff;' selected>Menunggu diApproval untuk tiket ".$_GET['pid'].'</option>';												
																							}elseif($rvSCatShowEQ["STATUS_PERMINTAAN"]=='D'){ echo "<option value= 'D' style='background: red; color:#fff;' selected>Barang Sudah Disetujui Oleh FSD MGR/SUB MGR</option>";																
																							}elseif($rvSCatShowEQ["STATUS_PERMINTAAN"]=='R'){ echo "<option value= 'R' style='background: red; color:#fff;' selected>Barang Sedang Diproses FSD untuk Tutup Hari</option>";}	
																						}elseif(($rvSCatShowEQ["STATUS_PERMINTAAN"]=='R')&&($rvSCatShowEQ["STATUS"]==' ')&&($rvSCatShowEQ["STATUS_KIRIM"]=='')){
																							if($rvSCatShowEQ["STATUS"]==' '){ echo "<option value= ' ' style='background: red; color:#fff;' selected>Barang Sedang Diproses FSD untuk Tutup Hari</option>";												
																							}elseif($rvSCatShowEQ["STATUS"]=='O'){ echo "<option value= 'O' style='background: red; color:#fff;' selected>Barang Sedang Proses Order</option>";																
																							}elseif($rvSCatShowEQ["STATUS"]=='P'){ echo "<option value= 'P' style='background: red; color:#fff;' selected>X6-Barang Sudah Proses DO Balik</option>";}
																						}elseif(($rvSCatShowEQ["STATUS_PERMINTAAN"]=='R')&&
																								(($rvSCatShowEQ["STATUS"]=='O')||($rvSCatShowEQ["STATUS"]=='P')||($rvSCatShowEQ["STATUS"]=='C'))&&
																								($rvSCatShowEQ["STATUS_KIRIM"]=='')){
																							if($rvSCatShowEQ["STATUS"]==' '){ echo "<option value= ' ' style='background: red; color:#fff;' selected>Barang Sedang Diproses FSD untuk Tutup Hari</option>";												
																							}elseif($rvSCatShowEQ["STATUS"]=='O'){ echo "<option value= 'O' style='background: red; color:#fff;' selected>Barang Sedang Proses Order</option>";																
																							}elseif($rvSCatShowEQ["STATUS"]=='P'){ echo "<option value= 'P' style='background: red; color:#fff;' selected>Barang Sudah Diterima Oleh Store (Proses DO Balik)</option>";
																							}elseif($rvSCatShowEQ["STATUS"]=='C'){ echo "<option value= 'C' style='background: red; color:#fff;' selected>Barang Dibatalkan Pemesanannya</option>";}
																						}elseif(($rvSCatShowEQ["STATUS_KIRIM"]!='')){
																							if($rvSCatShowEQ["STATUS_KIRIM"]=='K'){ echo "<option value= 'K' style='background: red; color:#fff;' selected>Barang Proses Dikirim Ke Store</option>";														
																							}elseif($rvSCatShowEQ["STATUS_KIRIM"]=='D'){ echo "<option value= 'D' style='background: red; color:#fff;' selected>Barang Sudah Diterima Oleh Store</option>";																
																							}	
																						}	
																					}elseif($rvSCatShowEQ["NOMOR_RO"]=='')
																					{
																						if($rvSCatShowEQ["STATUS_PERMINTAAN"]=='R'){ echo "Barang Sedang Diproses FSD untuk Tutup Hari";														
																						}elseif($rvSCatShowEQ["STATUS_PERMINTAAN"]=='D'){ echo "Barang Sudah Disetujui Oleh FSD MGR/SUB MGR";																
																						}elseif($rvSCatShowEQ["STATUS_PERMINTAAN"]==' '){ echo "Menunggu diApproval untuk tiket ".$_GET['pid'];
																						}																
																					}	
																				?>																							
																							
																			</select>
																		</center>
																	</td>
																</tr>
															<? } /* oci_close($objConnectShowEQ);*/ oci_close($connCekStatusPermintaanStoreEQ);  ?>	
										
										<? }elseif($rcektipebrg->kode_tipebrg == 'FSDBRGSW')
										   { 
											/* $qvCekDataSW = mysql_query("SELECT DISTINCT ticket_id, no_permintaan, request_by, kode_tipebarang, kode_tipebarang_sw, kode_tipebarang_sp,
																kuantitas, nama_tipebarang, nama_tipebarang_sw, nama_tipebarang_sp
																FROM ITH_TIPEBARANG_KODE
																WHERE ticket_id = '$_GET[pid]'");
																$rvCekDataSW = mysql_fetch_object($qvCekDataSW);
																
																$objConnectShowSW = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
																$qShowSW = "select FSDORDSC.NO_PERMINTAAN, FSDORDSC.TGL_PERMINTAAN, FSDORDSC.TGL_BUAT_FSD, FSDORDSC.KODE_BARANG, 
																FSDBRGSP.NAMA_BARANG,
																FSDORDSC.JUMLAH_PERMINTAAN, FSDORDSC.JUMLAH_ORDER, FSDORDSC.KIRIM_DARI_STOK, FSDORDSC.TGL_DISETUJUI, 
																FSDORDSC.NOMOR_RO, FSDORDSC.STATUS_PERMINTAAN
																from FSDORDSC 
																JOIN FSDBRGSP ON FSDORDSC.KODE_BARANG = FSDBRGSP.KODE_BARANG
																where NO_PERMINTAAN = '$rvCekDataSW->no_permintaan'
																AND JUMLAH_PERMINTAAN IS NOT NULL order by FSDORDSC.TGL_PERMINTAAN DESC";  
																$qobjParseShowSW = oci_parse ($objConnectShowSW, $qShowSW);  
																oci_execute ($qobjParseShowSW,OCI_DEFAULT);   
															
																while($rvSCatShowSW = oci_fetch_array($qobjParseShowSW,OCI_BOTH))  
																{  
												*/
											#echo "KODE TIPE BARANG : ".$rcektipebrg->kode_tipebrg;
												/* $qvCekDataSW = mysql_query("SELECT DISTINCT ITH_TIPEBARANG_KODE.NO_PERMINTAAN, ITH_TIPEBARANG_KODE.KODE_TIPEBARANG, ITH_TIPEBARANG_KODE.KODE_TIPEBARANG_SW, 
															ITH_TIPEBARANG_KODE.NAMA_TIPEBARANG, ITH_TICKET_HEADER.ticket_createdate FROM ITH_TIPEBARANG_KODE 
															JOIN ITH_TICKET_HEADER ON ITH_TIPEBARANG_KODE.ticket_id = ITH_TICKET_HEADER.ticket_id
															WHERE ITH_TIPEBARANG_KODE.ticket_id = '$_GET[pid]' GROUP BY ITH_TIPEBARANG_KODE.KODE_TIPEBARANG ASC");
												*/
													$qCekStatusTiketStore = mysql_query("SELECT ticket_id, ticketstatus_id, ticketapprovalstatus_id, ticketapprovalstatus_id2, ticketapprovalstatus_id3 
																						FROM ITH_TICKET_HEADER WHERE ticket_id = '$_GET[pid]'");
													$rCekStatusTiketStore = mysql_fetch_object($qCekStatusTiketStore);
												/*	if((($rCekStatusTiketStore->ticketstatus_id == '1'))&&
														(($rCekStatusTiketStore->ticketapprovalstatus_id!='1')||($rCekStatusTiketStore->ticketapprovalstatus_id2!='1')||($rCekStatusTiketStore->ticketapprovalstatus_id3!='1')))
												*/
												/*	if((($rCekStatusTiketStore->ticketstatus_id == '1')&&(($rCekStatusTiketStore->ticketapprovalstatus_id!='1')||($rCekStatusTiketStore->ticketapprovalstatus_id2!='1')||($rCekStatusTiketStore->ticketapprovalstatus_id3!='1')))
														||(($rCekStatusTiketStore->ticketstatus_id == '2')&&(($rCekStatusTiketStore->ticketapprovalstatus_id!='1')||($rCekStatusTiketStore->ticketapprovalstatus_id2!='1')||($rCekStatusTiketStore->ticketapprovalstatus_id3!='1'))))											
													{
															$objConnectShowSW = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
															$qShowSW = "select FSDORDSC_TEMP.NO_PERMINTAAN, FSDORDSC_TEMP.TGL_PERMINTAAN, FSDORDSC_TEMP.TGL_BUAT_FSD, 
																	FSDORDSC_TEMP.KODE_BARANG, 
																	FSDBRGSP.NAMA_BARANG,
																	FSDORDSC_TEMP.JUMLAH_PERMINTAAN, FSDORDSC_TEMP.JUMLAH_ORDER, FSDORDSC_TEMP.KIRIM_DARI_STOK, FSDORDSC_TEMP.TGL_DISETUJUI, 
																	FSDORDSC_TEMP.NOMOR_RO, FSDORDSC_TEMP.STATUS_PERMINTAAN
																	from FSDORDSC_TEMP 
																	JOIN FSDBRGSP ON FSDORDSC_TEMP.KODE_BARANG = FSDBRGSP.KODE_BARANG
																	where NO_PERMINTAAN = '$rvCekDataSW->no_permintaan'
																	AND JUMLAH_PERMINTAAN IS NOT NULL order by FSDORDSC_TEMP.TGL_PERMINTAAN DESC";  
															$qobjParseShowSW = oci_parse ($objConnectShowSW, $qShowSW);  
																	oci_execute ($qobjParseShowSW,OCI_DEFAULT);   
												*/												
													if(($rCekStatusTiketStore->ticketapprovalstatus_id!='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id2!='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id3!='1'))
													{												
													/*	$objConnectShowSW = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
														$qShowSW = "select FSDORDSC_TEMP.KODE_CABANG, MSTCBGDT.NAMA_CABANG, FSDORDSC_TEMP.NO_PERMINTAAN, FSDPOSWC.NO_PO, FSDORDSC_TEMP.NOMOR_RO, FSDORDSC_TEMP.TGL_PERMINTAAN, FSDORDSC_TEMP.KODE_BARANG, 
																	FSDBRGSP.NAMA_BARANG, FSDORDSC_TEMP.JUMLAH_PERMINTAAN, 
																	FSDPRSWC.NO_DO, FSDPRSWC.QTY, FSDPRSWC.HARGA_BELI, FSDPRSWC.MATA_UANG, FSDPRSWC.TOTAL_BELI, FSDPRSWC.TGL_RECEIVE, FSDPRSWC.TGL_DO,
																	FSDKRMSW.TGL_TRANSAKSI, FSDKRMSW.QTY_KIRIM, FSDKRMSW.JUMLAH_DITERIMA,
																	FSDORDSC_TEMP.STATUS_PERMINTAAN, FSDKRMSW.STATUS_KIRIM, 
																	FSDKRMSW.NAMA_PENGIRIM, FSDKRMSW.TANGGAL_KIRIM, FSDKRMSW.NAMA_PENERIMA, FSDKRMSW.TANGGAL_DITERIMA,
																	FSDKRMSW.QTY_KIRIM_BARU, FSDKRMSW.QTY_KIRIM_BAIK, FSDKRMSW.HARGA_BARU, FSDKRMSW.HARGA_BAIK
																	from FSDORDSC_TEMP
																	JOIN MSTCBGDT ON FSDORDSC_TEMP.KODE_CABANG = MSTCBGDT.CABANG_HEADER
																	JOIN FSDBRGSP ON FSDORDSC_TEMP.KODE_BARANG = FSDBRGSP.KODE_BARANG
																	JOIN FSDROSWC ON FSDORDSC_TEMP.NOMOR_RO = FSDROSWC.NO_RO
																	JOIN FSDPOSWC ON FSDORDSC_TEMP.NOMOR_RO = FSDPOSWC.NO_RO
																	JOIN FSDPRSWC ON FSDPOSWC.NO_PO = FSDPRSWC.NO_PO
																	JOIN FSDKRMSW ON FSDORDSC_TEMP.NOMOR_RO = FSDKRMSW.NO_RO
																	WHERE FSDORDSC_TEMP.NO_PERMINTAAN = '$rvCekDataSW->no_permintaan'";
														$qobjParseShowSW = oci_parse ($objConnectShowSW, $qShowSW);  
																	oci_execute ($qobjParseShowSW,OCI_DEFAULT);   
													*/
															$qvCekDataSW = mysql_query("SELECT DISTINCT ticket_id, no_permintaan, request_by, kode_tipebarang, kode_tipebarang_sw, kode_tipebarang_sp,
															kuantitas, nama_tipebarang, nama_tipebarang_sw, nama_tipebarang_sp
															FROM ITH_TIPEBARANG_KODE
															WHERE ticket_id = '$_GET[pid]'");
															$rvCekDataSW = mysql_fetch_object($qvCekDataSW);													
													
															$objConnectShowSW = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
															$qShowSW = "select FSDORDSC_TEMP.NO_PERMINTAAN, FSDORDSC_TEMP.TGL_PERMINTAAN, FSDORDSC_TEMP.TGL_BUAT_FSD, 
																	FSDORDSC_TEMP.KODE_BARANG, 
																	FSDBRGSP.NAMA_BARANG,
																	FSDORDSC_TEMP.JUMLAH_PERMINTAAN, FSDORDSC_TEMP.JUMLAH_ORDER, FSDORDSC_TEMP.KIRIM_DARI_STOK, FSDORDSC_TEMP.TGL_DISETUJUI, 
																	FSDORDSC_TEMP.NOMOR_RO, FSDORDSC_TEMP.STATUS_PERMINTAAN
																	from FSDORDSC_TEMP 
																	JOIN FSDBRGSP ON FSDORDSC_TEMP.KODE_BARANG = FSDBRGSP.KODE_BARANG
																	where NO_PERMINTAAN = '$rvCekDataSW->no_permintaan'
																	AND JUMLAH_PERMINTAAN IS NOT NULL order by FSDORDSC_TEMP.TGL_PERMINTAAN DESC";  
															$qobjParseShowSW = oci_parse ($objConnectShowSW, $qShowSW);  
																	oci_execute ($qobjParseShowSW,OCI_DEFAULT);  													
												/*	}elseif((($rCekStatusTiketStore->ticketstatus_id == '2')||($rCekStatusTiketStore->ticketstatus_id == '0')||($rCekStatusTiketStore->ticketstatus_id == '3')||($rCekStatusTiketStore->ticketstatus_id == '5'))&&
														(($rCekStatusTiketStore->ticketapprovalstatus_id=='1')||($rCekStatusTiketStore->ticketapprovalstatus_id2=='1')||($rCekStatusTiketStore->ticketapprovalstatus_id3=='1')))
												*/
												/*	}elseif(
														  (($rCekStatusTiketStore->ticketstatus_id == '0')&&(($rCekStatusTiketStore->ticketapprovalstatus_id=='1')||($rCekStatusTiketStore->ticketapprovalstatus_id2=='1')||($rCekStatusTiketStore->ticketapprovalstatus_id3=='1')))
														||(($rCekStatusTiketStore->ticketstatus_id == '2')&&(($rCekStatusTiketStore->ticketapprovalstatus_id=='1')||($rCekStatusTiketStore->ticketapprovalstatus_id2=='1')||($rCekStatusTiketStore->ticketapprovalstatus_id3=='1')))
														||(($rCekStatusTiketStore->ticketstatus_id == '3')&&(($rCekStatusTiketStore->ticketapprovalstatus_id=='1')||($rCekStatusTiketStore->ticketapprovalstatus_id2=='1')||($rCekStatusTiketStore->ticketapprovalstatus_id3=='1')))
														||(($rCekStatusTiketStore->ticketstatus_id == '5')&&(($rCekStatusTiketStore->ticketapprovalstatus_id=='1')||($rCekStatusTiketStore->ticketapprovalstatus_id2=='1')||($rCekStatusTiketStore->ticketapprovalstatus_id3=='1')))
														)
													{
																	$qShowSW = "select FSDORDSC.NO_PERMINTAAN, FSDORDSC.TGL_PERMINTAAN, FSDORDSC.TGL_BUAT_FSD, FSDORDSC.KODE_BARANG, 
																	FSDBRGSP.NAMA_BARANG,
																	FSDORDSC.JUMLAH_PERMINTAAN, FSDORDSC.JUMLAH_ORDER, FSDORDSC.KIRIM_DARI_STOK, FSDORDSC.TGL_DISETUJUI, 
																	FSDORDSC.NOMOR_RO, FSDORDSC.STATUS_PERMINTAAN
																	from FSDORDSC 
																	JOIN FSDBRGSP ON FSDORDSC.KODE_BARANG = FSDBRGSP.KODE_BARANG
																	where NO_PERMINTAAN = '$rvCekDataSW->no_permintaan'
																	AND JUMLAH_PERMINTAAN IS NOT NULL order by FSDORDSC.TGL_PERMINTAAN DESC";  
																	$qobjParseShowSW = oci_parse ($objConnectShowSW, $qShowSW);  
																	oci_execute ($qobjParseShowSW,OCI_DEFAULT);  
												*/   #echo "Test 1";
													}elseif
													((($rCekStatusTiketStore->ticketapprovalstatus_id=='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id2=='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id3=='1'))||
													(($rCekStatusTiketStore->ticketapprovalstatus_id=='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id2=='2')&&($rCekStatusTiketStore->ticketapprovalstatus_id3=='2'))||
													(($rCekStatusTiketStore->ticketapprovalstatus_id=='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id2=='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id3=='2'))||
													(($rCekStatusTiketStore->ticketapprovalstatus_id=='2')&&($rCekStatusTiketStore->ticketapprovalstatus_id2=='2')&&($rCekStatusTiketStore->ticketapprovalstatus_id3=='1'))||
													(($rCekStatusTiketStore->ticketapprovalstatus_id=='2')&&($rCekStatusTiketStore->ticketapprovalstatus_id2=='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id3=='1'))||
													(($rCekStatusTiketStore->ticketapprovalstatus_id=='1')&&($rCekStatusTiketStore->ticketapprovalstatus_id2=='2')&&($rCekStatusTiketStore->ticketapprovalstatus_id3=='1')))
													{
														#echo "Test 2";
															$qvCekDataSW = mysql_query("SELECT DISTINCT ticket_id, no_permintaan, request_by, kode_tipebarang, kode_tipebarang_sw, kode_tipebarang_sp,
															kuantitas, nama_tipebarang, nama_tipebarang_sw, nama_tipebarang_sp
															FROM ITH_TIPEBARANG_KODE
															WHERE ticket_id = '$_GET[pid]'");
															$rvCekDataSW = mysql_fetch_object($qvCekDataSW);													
														$objConnectShowSW = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
															#$qCekNomorROSW = "SELECT NOMOR_RO FROM FSDORDSC WHERE no_permintaan = '$rvCekDataSW->no_permintaan'";
															$qCekNomorROSW = "select FSDORDSC.KODE_CABANG, MSTCBGDT.NAMA_CABANG, FSDORDSC.NO_PERMINTAAN,
															FSDORDSC.NOMOR_RO,FSDORDSC.TGL_PERMINTAAN, FSDORDSC.KODE_BARANG, 
															FSDBRGSP.NAMA_BARANG, FSDORDSC.JUMLAH_PERMINTAAN, 
															FSDORDSC.STATUS_PERMINTAAN, FSDROSWC.STATUS, FSDORDSC.KIRIM_DARI_STOK
															from FSDORDSC
															JOIN MSTCBGDT ON FSDORDSC.KODE_CABANG = MSTCBGDT.CABANG_HEADER
															JOIN FSDBRGSP ON FSDORDSC.KODE_BARANG = FSDBRGSP.KODE_BARANG
															JOIN FSDROSWC ON FSDORDSC.NOMOR_RO = FSDROSWC.NO_RO
															WHERE FSDORDSC.NO_PERMINTAAN ='$rvCekDataSW->no_permintaan'";
															$qobjParseCekNomorROSW = oci_parse ($objConnectShowSW, $qCekNomorROSW);  
																				oci_execute ($qobjParseCekNomorROSW,OCI_DEFAULT); 
															$rvCekNomorROSW = oci_fetch_array($qobjParseCekNomorROSW,OCI_BOTH);
															#echo '<br>Nomor RO : '.$rvCekNomorROSW['NOMOR_RO'];
														#if($rvCekNomorROSW['KIRIM_DARI_STOK']=='0')
														#{	
															#echo "KIRIM_DARI_STOK(Ke Procurement) : ".$rvCekNomorROSW['KIRIM_DARI_STOK'];
														#}elseif($rvCekNomorROSW['KIRIM_DARI_STOK']!='0')
														#{
															#echo "KIRIM_DARI_STOK(Stok dari Gudang) : ".$rvCekNomorROSW['KIRIM_DARI_STOK'];	
															if($rvCekNomorROSW['NOMOR_RO']!='')
															{	
																##echo "<br>STATUS PERMINTAAN : ".$rvCekNomorROSW['STATUS_PERMINTAAN'].'<br>STATUS : '.$rvCekNomorROSW['STATUS'];
																##echo "<br>Nomor Permintaan : ".$rvCekDataSW->no_permintaan;
																$qvCekDataSW = mysql_query("SELECT DISTINCT ticket_id, no_permintaan, request_by, kode_tipebarang, kode_tipebarang_sw, kode_tipebarang_sp,
																kuantitas, nama_tipebarang, nama_tipebarang_sw, nama_tipebarang_sp
																FROM ITH_TIPEBARANG_KODE
																WHERE ticket_id = '$_GET[pid]'");
																$rvCekDataSW = mysql_fetch_object($qvCekDataSW);															
																$qCekNomorROSW2 = "select DISTINCT FSDORDSC.KODE_CABANG, MSTCBGDT.NAMA_CABANG, FSDORDSC.NO_PERMINTAAN,
																FSDORDSC.NOMOR_RO,FSDORDSC.TGL_PERMINTAAN, FSDORDSC.KODE_BARANG, 
																FSDBRGSP.NAMA_BARANG, FSDORDSC.JUMLAH_PERMINTAAN, 
																FSDORDSC.STATUS_PERMINTAAN, FSDROSWC.STATUS
																from FSDORDSC
																JOIN MSTCBGDT ON FSDORDSC.KODE_CABANG = MSTCBGDT.CABANG_HEADER
																JOIN FSDBRGSP ON FSDORDSC.KODE_BARANG = FSDBRGSP.KODE_BARANG
																JOIN FSDROSWC ON FSDORDSC.NOMOR_RO = FSDROSWC.NO_RO
																WHERE FSDORDSC.NO_PERMINTAAN ='$rvCekDataSW->no_permintaan'";
																$qobjParseCekNomorROSW2 = oci_parse ($objConnectShowSW, $qCekNomorROSW2);  
																					      oci_execute ($qobjParseCekNomorROSW2,OCI_DEFAULT); 
																$rvCekNomorROSW2 = oci_fetch_array($qobjParseCekNomorROSW2,OCI_BOTH);		
																##echo "<br>STATUS_PERMINTAAN : ".$rvCekNomorROSW2['STATUS_PERMINTAAN'];
																##echo "<br>STATUS RO : ".$rvCekNomorROSW2['STATUS'];	
																if(($rvCekNomorROSW2['STATUS_PERMINTAAN']=='R')&&($rvCekNomorROSW2['STATUS']==' '))	
																{
																	#echo "<br>TEST R dan Blank";
																	$qvCekDataSW = mysql_query("SELECT DISTINCT ticket_id, no_permintaan, request_by, kode_tipebarang, kode_tipebarang_sw, kode_tipebarang_sp,
																	kuantitas, nama_tipebarang, nama_tipebarang_sw, nama_tipebarang_sp
																	FROM ITH_TIPEBARANG_KODE
																	WHERE ticket_id = '$_GET[pid]'");
																	$rvCekDataSW = mysql_fetch_object($qvCekDataSW);																		
																	$qShowSW = "select DISTINCT FSDORDSC_TEMP.NO_PERMINTAAN, FSDORDSC_TEMP.TGL_PERMINTAAN, FSDORDSC_TEMP.TGL_BUAT_FSD, 
																	FSDORDSC_TEMP.KODE_BARANG, 
																	FSDBRGSP.NAMA_BARANG,
																	FSDORDSC_TEMP.JUMLAH_PERMINTAAN, FSDORDSC_TEMP.JUMLAH_ORDER, FSDORDSC_TEMP.KIRIM_DARI_STOK, FSDORDSC_TEMP.TGL_DISETUJUI, 
																	FSDORDSC_TEMP.NOMOR_RO, FSDORDSC_TEMP.STATUS_PERMINTAAN
																	from FSDORDSC_TEMP 
																	JOIN FSDBRGSP ON FSDORDSC_TEMP.KODE_BARANG = FSDBRGSP.KODE_BARANG
																	where FSDORDSC_TEMP.NO_PERMINTAAN = '$rvCekDataSW->no_permintaan'
																	AND FSDORDSC_TEMP.JUMLAH_PERMINTAAN IS NOT NULL order by FSDORDSC_TEMP.TGL_PERMINTAAN DESC";
																	$qobjParseShowSW = oci_parse ($objConnectShowSW, $qShowSW);  
																	                   oci_execute ($qobjParseShowSW,OCI_DEFAULT);
																	#echo "TEST R DAN BLANK";
																}elseif(($rvCekNomorROSW2['STATUS_PERMINTAAN']=='R')&&($rvCekNomorROSW2['STATUS']=='O'))
																{
																	$qvCekDataSW = mysql_query("SELECT DISTINCT ticket_id, no_permintaan, request_by, kode_tipebarang, kode_tipebarang_sw, kode_tipebarang_sp,
																	kuantitas, nama_tipebarang, nama_tipebarang_sw, nama_tipebarang_sp
																	FROM ITH_TIPEBARANG_KODE
																	WHERE ticket_id = '$_GET[pid]'");
																	$rvCekDataSW = mysql_fetch_object($qvCekDataSW);																	
																	###echo "<br>TEST STATUS PERMINTAAN : R DAN Status RO : O";
																	$qShowSW = "SELECT DISTINCT FSDORDSC.KODE_CABANG, MSTCBGDT.NAMA_CABANG, FSDORDSC.NO_PERMINTAAN,
																	FSDORDSC.NOMOR_RO,FSDORDSC.TGL_PERMINTAAN, FSDORDSC.KODE_BARANG, 
																	FSDBRGSP.NAMA_BARANG, FSDORDSC.JUMLAH_PERMINTAAN, 
																	FSDORDSC.STATUS_PERMINTAAN, FSDROSWC.STATUS
																	from FSDORDSC
																	JOIN MSTCBGDT ON FSDORDSC.KODE_CABANG = MSTCBGDT.CABANG_HEADER
																	JOIN FSDBRGSP ON FSDORDSC.KODE_BARANG = FSDBRGSP.KODE_BARANG
																	JOIN FSDROSWC ON FSDORDSC.NOMOR_RO = FSDROSWC.NO_RO
																	WHERE FSDORDSC.NO_PERMINTAAN = '$rvCekDataSW->no_permintaan'";														
																	$qobjParseShowSW = oci_parse ($objConnectShowSW, $qShowSW);  
																					   oci_execute ($qobjParseShowSW,OCI_DEFAULT); #echo "<br>Test 1";
																	#echo '<br>Nomor permintaan : '.$rvCekDataSW->no_permintaan;
																	#echo '<br>Nomor RO : '.$rvCekNomorROSW['NOMOR_RO'];
																}elseif(($rvCekNomorROSW2['STATUS_PERMINTAAN']=='R')&&($rvCekNomorROSW2['STATUS']=='P'))
																{
																	##echo "<br>TEST R DAN P";	
																	$qvCekDataSW = mysql_query("SELECT DISTINCT ticket_id, no_permintaan, request_by, kode_tipebarang, kode_tipebarang_sw, kode_tipebarang_sp,
																	kuantitas, nama_tipebarang, nama_tipebarang_sw, nama_tipebarang_sp
																	FROM ITH_TIPEBARANG_KODE
																	WHERE ticket_id = '$_GET[pid]'");
																	$rvCekDataSW = mysql_fetch_object($qvCekDataSW);															
																	/*
																	$qShowSW = "SELECT FSDORDSC.KODE_CABANG, MSTCBGDT.NAMA_CABANG, FSDORDSC.NO_PERMINTAAN, FSDPOSWC.NO_PO,
																	FSDORDSC.NOMOR_RO,FSDORDSC.TGL_PERMINTAAN, FSDORDSC.KODE_BARANG, 
																	FSDBRGSP.NAMA_BARANG, FSDORDSC.JUMLAH_PERMINTAAN, 
																	FSDPRSWC.NO_DO, FSDPRSWC.QTY, FSDPRSWC.HARGA_BELI, FSDPRSWC.MATA_UANG, FSDPRSWC.TOTAL_BELI, FSDPRSWC.TGL_RECEIVE, FSDPRSWC.TGL_DO,
																	FSDKRMSW.TGL_TRANSAKSI, FSDKRMSW.QTY_KIRIM, FSDKRMSW.JUMLAH_DITERIMA, 
																	FSDKRMSW.NAMA_PENGIRIM, FSDKRMSW.TANGGAL_KIRIM, FSDKRMSW.NAMA_PENERIMA, FSDKRMSW.TANGGAL_DITERIMA,
																	FSDKRMSW.QTY_KIRIM_BARU, FSDKRMSW.QTY_KIRIM_BAIK, FSDKRMSW.HARGA_BARU, FSDKRMSW.HARGA_BAIK,
																	FSDORDSC.STATUS_PERMINTAAN, FSDROSWC.STATUS, FSDKRMSW.STATUS_KIRIM
																	FROM FSDORDSC
																	JOIN MSTCBGDT ON FSDORDSC.KODE_CABANG = MSTCBGDT.CABANG_HEADER
																	JOIN FSDBRGSP ON FSDORDSC.KODE_BARANG = FSDBRGSP.KODE_BARANG
																	JOIN FSDROSWC ON FSDORDSC.NOMOR_RO = FSDROSWC.NO_RO
																	JOIN FSDPOSWC ON FSDORDSC.NOMOR_RO = FSDPOSWC.NO_RO
																	JOIN FSDPRSWC ON FSDPOSWC.NO_PO = FSDPRSWC.NO_PO
																	JOIN FSDKRMSW ON FSDORDSC.NOMOR_RO = FSDKRMSW.NO_RO
																	WHERE FSDORDSC.NO_PERMINTAAN = '$rvCekDataSW->no_permintaan'";														
																	*/
																	$qShowSW = "SELECT DISTINCT FSDORDSC.KODE_CABANG, MSTCBGDT.NAMA_CABANG, FSDORDSC.NO_PERMINTAAN,
																	FSDORDSC.NOMOR_RO,FSDORDSC.TGL_PERMINTAAN, FSDORDSC.KODE_BARANG, 
																	FSDBRGSP.NAMA_BARANG, FSDORDSC.JUMLAH_PERMINTAAN, 
																	FSDORDSC.STATUS_PERMINTAAN, FSDROSWC.STATUS
																	from FSDORDSC
																	JOIN MSTCBGDT ON FSDORDSC.KODE_CABANG = MSTCBGDT.CABANG_HEADER
																	JOIN FSDBRGSP ON FSDORDSC.KODE_BARANG = FSDBRGSP.KODE_BARANG
																	JOIN FSDROSWC ON FSDORDSC.NOMOR_RO = FSDROSWC.NO_RO
																	WHERE FSDORDSC.NO_PERMINTAAN = '$rvCekDataSW->no_permintaan'";
																	$qobjParseShowSW = oci_parse ($objConnectShowSW, $qShowSW);
																					   oci_execute ($qobjParseShowSW,OCI_DEFAULT);	
																}
															#echo "<br>Test 1X";	
															}elseif($rvCekNomorROSW['NOMOR_RO']=='')
															{		
																	$qvCekDataSW = mysql_query("SELECT DISTINCT ticket_id, no_permintaan, request_by, kode_tipebarang, kode_tipebarang_sw, kode_tipebarang_sp,
																	kuantitas, nama_tipebarang, nama_tipebarang_sw, nama_tipebarang_sp
																	FROM ITH_TIPEBARANG_KODE
																	WHERE ticket_id = '$_GET[pid]'");
																	$rvCekDataSW = mysql_fetch_object($qvCekDataSW);			
																	##echo "<br>XXX Nomor Permintaan : ".$rvCekDataSW->no_permintaan;	
																	$objConnectShowSW = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
																	#$qCekNomorROSW = "SELECT NOMOR_RO FROM FSDORDSC WHERE no_permintaan = '$rvCekDataSW->no_permintaan'";
																	/* $qCekKirimDariStok = "select FSDORDSC.KODE_CABANG, MSTCBGDT.NAMA_CABANG, FSDORDSC.NO_PERMINTAAN,
																	FSDORDSC.NOMOR_RO,FSDORDSC.TGL_PERMINTAAN, FSDORDSC.KODE_BARANG, 
																	FSDBRGSP.NAMA_BARANG, FSDORDSC.JUMLAH_PERMINTAAN, 
																	FSDORDSC.STATUS_PERMINTAAN, FSDROSWC.STATUS, FSDORDSC.KIRIM_DARI_STOK
																	from FSDORDSC
																	JOIN MSTCBGDT ON FSDORDSC.KODE_CABANG = MSTCBGDT.CABANG_HEADER
																	JOIN FSDBRGSP ON FSDORDSC.KODE_BARANG = FSDBRGSP.KODE_BARANG
																	JOIN FSDROSWC ON FSDORDSC.NOMOR_RO = FSDROSWC.NO_RO
																	WHERE FSDORDSC.NO_PERMINTAAN ='$rvCekDataSW->no_permintaan'";	*/																
																	$qCekKirimDariStok = "select DISTINCT FSDORDSC.NO_PERMINTAAN, FSDORDSC.TGL_PERMINTAAN, FSDORDSC.TGL_BUAT_FSD, 
																							FSDORDSC.KODE_BARANG, 
																							FSDBRGSP.NAMA_BARANG,
																							FSDORDSC.JUMLAH_PERMINTAAN, FSDORDSC.JUMLAH_ORDER, FSDORDSC.KIRIM_DARI_STOK, FSDORDSC.TGL_DISETUJUI, 
																							FSDORDSC.NOMOR_RO, FSDORDSC.STATUS_PERMINTAAN
																							from FSDORDSC 
																							JOIN FSDBRGSP ON FSDORDSC.KODE_BARANG = FSDBRGSP.KODE_BARANG
																							where FSDORDSC.NO_PERMINTAAN = '$rvCekDataSW->no_permintaan'
																							AND FSDORDSC.JUMLAH_PERMINTAAN IS NOT NULL order by FSDORDSC.TGL_PERMINTAAN DESC";
																	$qobjParseCekKirimDariStok = oci_parse ($objConnectShowSW, $qCekKirimDariStok);  
																						oci_execute ($qobjParseCekKirimDariStok,OCI_DEFAULT); 
																	$rvCekKirimDariStok = oci_fetch_array($qobjParseCekKirimDariStok,OCI_BOTH);
																	##echo "<br>STATUS_PERMINTAAN : ".$rvCekKirimDariStok['STATUS_PERMINTAAN'];
																	if($rvCekKirimDariStok['STATUS_PERMINTAAN']=='D')
																	{
																		##echo "<br>STATUS PERMINTAAN DISETUJUI OLEH FSD";
																		$qvCekDataSW = mysql_query("SELECT DISTINCT ticket_id, no_permintaan, request_by, kode_tipebarang, kode_tipebarang_sw, kode_tipebarang_sp,
																		kuantitas, nama_tipebarang, nama_tipebarang_sw, nama_tipebarang_sp
																		FROM ITH_TIPEBARANG_KODE
																		WHERE ticket_id = '$_GET[pid]'");
																		$rvCekDataSW = mysql_fetch_object($qvCekDataSW);			
																		#echo "<br>Nomor Permintaan : ".$rvCekDataSW->no_permintaan;																			
																		$objConnectShowSW = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
																		$qShowSW = "select DISTINCT FSDORDSC.NO_PERMINTAAN, FSDORDSC.TGL_PERMINTAAN, FSDORDSC.TGL_BUAT_FSD, 
																					FSDORDSC.KODE_BARANG, 
																					FSDBRGSP.NAMA_BARANG,
																					FSDORDSC.JUMLAH_PERMINTAAN, FSDORDSC.JUMLAH_ORDER, FSDORDSC.KIRIM_DARI_STOK, FSDORDSC.TGL_DISETUJUI, 
																					FSDORDSC.NOMOR_RO, FSDORDSC.STATUS_PERMINTAAN
																					from FSDORDSC 
																					JOIN FSDBRGSP ON FSDORDSC.KODE_BARANG = FSDBRGSP.KODE_BARANG
																					where FSDORDSC.NO_PERMINTAAN = '$rvCekDataSW->no_permintaan'
																					AND FSDORDSC.JUMLAH_PERMINTAAN IS NOT NULL order by FSDORDSC.TGL_PERMINTAAN DESC";
																		$qobjParseShowSW = oci_parse ($objConnectShowSW, $qShowSW);  
																		oci_execute ($qobjParseShowSW,OCI_DEFAULT);	
																		##echo "<br>1.NOMOR RO KOSONG + STATUS_PERMINTAAN : ".$rvCekKirimDariStok['STATUS_PERMINTAAN'];	
																	}elseif($rvCekKirimDariStok['STATUS_PERMINTAAN']=='R')
																	{	
																		$objConnectShowSW = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
																		$qShowSW = "select DISTINCT FSDORDSC.NO_PERMINTAAN, FSDORDSC.TGL_PERMINTAAN, FSDORDSC.TGL_BUAT_FSD, 
																		FSDORDSC.KODE_BARANG, 
																		FSDBRGSP.NAMA_BARANG,
																		FSDORDSC.JUMLAH_PERMINTAAN, FSDORDSC.JUMLAH_ORDER, FSDORDSC.KIRIM_DARI_STOK, FSDORDSC.TGL_DISETUJUI, 
																		FSDORDSC.NOMOR_RO, FSDORDSC.STATUS_PERMINTAAN
																		from FSDORDSC 
																		JOIN FSDBRGSP ON FSDORDSC.KODE_BARANG = FSDBRGSP.KODE_BARANG
																		where FSDORDSC.NO_PERMINTAAN = '$rvCekDataSW->no_permintaan'
																		AND FSDORDSC.JUMLAH_PERMINTAAN IS NOT NULL order by FSDORDSC.TGL_PERMINTAAN DESC";
																		$qobjParseShowSW = oci_parse ($objConnectShowSW, $qShowSW);  
																		oci_execute ($qobjParseShowSW,OCI_DEFAULT);		
																		echo "<br>2.NOMOR RO KOSONG + STATUS_PERMINTAAN : ".$rvCekKirimDariStok['STATUS_PERMINTAAN'];	
																	}elseif($rvCekKirimDariStok['STATUS_PERMINTAAN']==' ')
																	{	
																		$objConnectShowSW = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
																		$qShowSW = "select DISTINCT FSDORDSC_TEMP.NO_PERMINTAAN, FSDORDSC_TEMP.TGL_PERMINTAAN, FSDORDSC_TEMP.TGL_BUAT_FSD, 
																		FSDORDSC_TEMP.KODE_BARANG, 
																		FSDBRGSP.NAMA_BARANG,
																		FSDORDSC_TEMP.JUMLAH_PERMINTAAN, FSDORDSC_TEMP.JUMLAH_ORDER, FSDORDSC_TEMP.KIRIM_DARI_STOK, FSDORDSC_TEMP.TGL_DISETUJUI, 
																		FSDORDSC_TEMP.NOMOR_RO, FSDORDSC_TEMP.STATUS_PERMINTAAN
																		from FSDORDSC_TEMP 
																		JOIN FSDBRGSP ON FSDORDSC_TEMP.KODE_BARANG = FSDBRGSP.KODE_BARANG
																		where FSDORDSC_TEMP.NO_PERMINTAAN = '$rvCekDataSW->no_permintaan'
																		AND FSDORDSC_TEMP.JUMLAH_PERMINTAAN IS NOT NULL order by FSDORDSC_TEMP.TGL_PERMINTAAN DESC";
																		$qobjParseShowSW = oci_parse ($objConnectShowSW, $qShowSW);  
																		oci_execute ($qobjParseShowSW,OCI_DEFAULT);  #echo "<br>Test 2X";
																		#echo '<br>Nomor permintaan : '.$rvCekDataSW->no_permintaan;
																		#echo '<br>Nomor RO : '.$rvCekNomorROSW['NOMOR_RO'];
																		##echo "<br>3.SW NOMOR RO KOSONG + STATUS_PERMINTAAN KOSONG";
																	}
															}														
													}												
															
															#	while($rvSCatShowSW = mysql_fetch_array($qobjParseShowSW)){
																while($rvSCatShowSW = oci_fetch_array($qobjParseShowSW,OCI_BOTH)){												
																?>  												
																<tr>												
																	<td width="15%">
																		<center><?=$rvSCatShowSW["NOMOR_RO"];?></center>
																	</td>																
																	<!--<td width="7%">
																		<center><!?=$rvSCatShowSW["NO_PERMINTAAN"];?></center>
																	</td>-->
																	<td width="17%">
																		<center><?=$rvSCatShowSW["TGL_PERMINTAAN"];?></center>
																	</td>
																	
																<td width="20%">
																	<center><!--?=$rvSCatShowSW["KODE_BARANG"];?-->
																		<input type="checkbox" name="cekKdBrg[]" value="<?=$rvSCatShowSW["KODE_BARANG"];?>" style="pointer-events:none;" id="cekKdBrg"  checked readonly />&nbsp;<?=$rvSCatShowSW["KODE_BARANG"];?>
																	</center>
																	</td>		
																																			
																	<td width="30%">
																	<center><?=$rvSCatShowSW["NAMA_BARANG"];?></center>
																	</td>														
																	<td width="15%">
																		<center><?=$rvSCatShowSW["JUMLAH_PERMINTAAN"].' <b>UNIT</b>';?></center>
																	</td>														
																	<td width="15%">
																	<center>																<? 
																if($rvSCatShowSW["KIRIM_DARI_STOK"]=='0')
																{
																	#echo "<br>ADA NOMOR RO<br>";
																	if(($rvSCatShowSW["STATUS_PERMINTAAN"]==' ')&&($rvSCatShowSW["STATUS_KIRIM"]==''))
																	{
																		if($rvSCatShowSW["STATUS_PERMINTAAN"]==' '){ echo "Menunggu diApproval untuk tiket ".$_GET['pid'];												
																		}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]=='D'){ echo "Barang Sudah Disetujui Oleh FSD MGR/SUB MGR";																
																		}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]=='R'){ echo "Barang Sedang Diproses FSD untuk Tutup Hari";}	
																	}elseif(($rvSCatShowSW["STATUS_PERMINTAAN"]=='D')&&($rvSCatShowSW["STATUS_KIRIM"]==''))
																	{
																		if($rvSCatShowSW["STATUS_PERMINTAAN"]==' '){ echo "Menunggu diApproval untuk tiket ".$_GET['pid'];												
																		}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]=='D'){ echo "Barang Sudah Disetujui Oleh FSD MGR/SUB MGR";																
																		}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]=='R'){ echo "Barang Sedang Diproses FSD untuk Tutup Hari";}	
																	}elseif(($rvSCatShowSW["STATUS_PERMINTAAN"]=='R')&&($rvSCatShowSW["STATUS"]==' ')&&($rvSCatShowSW["STATUS_KIRIM"]=='')){
																		if($rvSCatShowSW["STATUS"]==' '){ echo "Barang Sedang Diproses FSD untuk Tutup Hari";												
																		}elseif($rvSCatShowSW["STATUS"]=='O'){ echo "Barang Sedang Proses Order";																
																		}elseif($rvSCatShowSW["STATUS"]=='P'){ echo "Barang Sudah Proses DO Balik";}
																	}elseif(($rvSCatShowSW["STATUS_PERMINTAAN"]=='R')&&
																			(($rvSCatShowSW["STATUS"]=='O')||($rvSCatShowSW["STATUS"]=='P')||($rvSCatShowSW["STATUS"]=='C'))&&
																			($rvSCatShowSW["STATUS_KIRIM"]=='')){
																		if($rvSCatShowSW["STATUS"]==' '){ echo "Barang Sedang Diproses FSD untuk Tutup Hari";												
																		}elseif($rvSCatShowSW["STATUS"]=='O'){ echo "X1<br>Barang Sedang Proses Order Ke Procurement";																
																		}elseif($rvSCatShowSW["STATUS"]=='P'){ echo "Barang Sudah Proses DO Balik";
																		}elseif($rvSCatShowSW["STATUS"]=='C'){ echo "Barang Dibatalkan Pemesanannya";}
																	}elseif(($rvSCatShowSW["STATUS_KIRIM"]!='')){
																		if($rvSCatShowSW["STATUS_KIRIM"]=='K'){ echo "Barang Proses Dikirim Ke Store";														
																		}elseif($rvSCatShowSW["STATUS_KIRIM"]=='D'){ echo "Barang Sudah Diterima Oleh Store";																
																		}	
																	}	
																}	
																elseif($rvSCatShowSW["KIRIM_DARI_STOK"]!='0')
																{
																	##echo "<br>ADA NOMOR RO<br>";
																	if(($rvSCatShowSW["STATUS_PERMINTAAN"]==' '))
																	{
																		if($rvSCatShowSW["STATUS_PERMINTAAN"]==' '){ echo "Menunggu diApproval untuk tiket ".$_GET['pid'];												
																		}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]=='D'){ echo "Barang Sudah Disetujui Oleh FSD MGR/SUB MGR";																
																		}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]=='R'){ echo "Barang Sedang Diproses FSD untuk Tutup Hari";}	
																	
																	}elseif(($rvSCatShowSW["STATUS_PERMINTAAN"]=='D'))
																	{   #echo "<br>STATUS_PERMINTAAN DISETUJUI<br>";
																		if($rvSCatShowSW["STATUS_PERMINTAAN"]==' '){ echo "Menunggu diApproval untuk tiket ".$_GET['pid'];												
																		}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]=='D'){ echo "Barang Sudah Disetujui Oleh FSD MGR/SUB MGR";																
																		}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]=='R'){ echo "Barang Sedang Diproses FSD untuk Tutup Hari";}	
																	
																	}elseif(($rvSCatShowSW["STATUS_PERMINTAAN"]=='R')&&($rvSCatShowSW["STATUS"]==' '))
																	{
																		if($rvSCatShowSW["STATUS"]==' '){ echo "Barang Sedang Diproses FSD untuk Tutup Hari";												
																		}elseif($rvSCatShowSW["STATUS"]=='O'){ echo "X2<br>Barang Sedang Proses Pesan(Order) dari Gudang";																
																		}elseif($rvSCatShowSW["STATUS"]=='P'){ echo "Barang Sudah Proses DO Balik";}

																	}elseif(($rvSCatShowSW["STATUS_PERMINTAAN"]=='R')&&
																			(($rvSCatShowSW["STATUS"]=='O')||($rvSCatShowSW["STATUS"]=='P')||($rvSCatShowSW["STATUS"]=='C'))
																			)
																	{	
																		if($rvSCatShowSW["STATUS"]==' '){ echo "Barang Sedang Diproses FSD untuk Tutup Hari";												
																		}elseif($rvSCatShowSW["STATUS"]=='O'){ echo "QQQX3<br>Barang Sedang Proses Pesan(Order) dari Gudang";																
																		}elseif($rvSCatShowSW["STATUS"]=='P'){ /* echo "Barang Sudah Proses DO Balik";*/ echo "Barang Sudah Diterima Oleh Store (Proses DO Balik)";
																		}elseif($rvSCatShowSW["STATUS"]=='C'){ echo "Barang Dibatalkan Pemesanannya";}
																		echo "<br>";
																		#echo "<br>NOMOR RO : <b>".$rvSCatShowSW["NOMOR_RO"].'</b>';
																		#echo "<br>select STATUS_KIRIM from FSDKRMSW where NO_RO = '".$rvSCatShowSW['NOMOR_RO']."'";
																		##$objConnectShowSW = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
																		#$qStatusKirimKeStore = "select STATUS_KIRIM from FSDKRMSW where NO_RO = 'RO030318001'";
																		
																		$qStatusKirimKeStore = "select STATUS_KIRIM from FSDKRMSW where NO_RO = '".$rvSCatShowSW['NOMOR_RO']."'";
																		$qobjParseStatusKirimKeStore = oci_parse ($objConnectShowSW, $qStatusKirimKeStore);  
																	                  oci_execute ($qobjParseStatusKirimKeStore,OCI_DEFAULT);
																		$rvStatusKirimKeStore = oci_fetch_array($qobjParseStatusKirimKeStore,OCI_BOTH);	
																		#echo "<br>STATUS_KIRIM : ".$rvStatusKirimKeStore['STATUS_KIRIM'];
																	#	if(($rvStatusKirimKeStore['STATUS_KIRIM']=='K')||($rvStatusKirimKeStore['STATUS_KIRIM']=='D'))
																		if(($rvStatusKirimKeStore['STATUS_KIRIM']=='K'))
																		{		
																			if($rvStatusKirimKeStore["STATUS_KIRIM"]=='K'){ echo "Dan Barang Dalam Proses Kirim Ke Store";														
																			#}elseif($rvStatusKirimKeStore["STATUS_KIRIM"]=='D'){ echo "Dan Barang Sudah Diterima Oleh Store";																
																			}	
																		}	echo "<br>";																		

																		
																	}	
																}	
																?></center>
																	</td>	
																	<td width="15%">
																		<center>
																			<select class="input-medium" style="width:120px;" name="statusBarang[<?=$rvSCatShowEQ["KODE_BARANG"]?>]" id="statusBarang">
																			<?
																			$qCekNomorRequestX2 = mysql_query("SELECT ticket_id, no_permintaan FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '$pid'");	
																			$rCekNomorRequestX2 = mysql_fetch_object($qCekNomorRequestX2);
																			$nomorPermintaanStoreX2 = $rCekNomorRequestX2->no_permintaan;
																			$connCekStatusPermintaanStoreSW = oci_connect('fsd', 'fsd', 'localhost:1521/XE');
																			$sqlCekStatusPermintaanStoreSW = "SELECT FSDORDEC.KODE_CABANG,FSDORDEC.DEPARTEMEN,FSDORDEC.NO_PERMINTAAN,FSDORDEC.TGL_PERMINTAAN,FSDORDEC.TGL_TERIMA_FSD,
																					FSDORDEC.TGL_BUAT_FSD,FSDORDEC.KODE_BARANG,FSDORDEC.JUMLAH_PERMINTAAN,
																					FSDORDEC.JUMLAH_ORDER,FSDORDEC.KETERANGAN,FSDORDEC.STATUS_PERMINTAAN,FSDORDEC.TGL_DISETUJUI,FSDORDEC.DISETUJUI_OLEH, 
																					FSDORDEC.USER_SETUJU,FSDORDEC.NOMOR_RO,FSDORDEC.USER_BUAT,FSDORDEC.USER_RUBAH,FSDORDEC.TGL_RUBAH, 
																					FSDORDEC.KIRIM_DARI_STOK FROM FSDORDEC 
																					JOIN FSDBRGEQ ON FSDORDEC.KODE_BARANG = FSDBRGEQ.KODE_BARANG
																					WHERE FSDORDEC.no_permintaan = '$nomorPermintaanStoreX1'";				
																			$compiledCekStatusPermintaanStoreSW = oci_parse ($connCekStatusPermintaanStoreSW, $sqlCekStatusPermintaanStoreSW);  
																			oci_execute ($compiledCekStatusPermintaanStoreSW,OCI_DEFAULT);  

																			$objResultCekStatusPermintaanStoreSW = oci_fetch_array($compiledCekStatusPermintaanStoreSW,OCI_BOTH);
																				if($objResultCekStatusPermintaanStoreSW['NOMOR_RO'] == '') 
																				{		
																					#	$qcekQtyBrg = "SELECT NO_PO, QTY_PO FROM FSDPOEQC WHERE NOMOR_RO = '".$nomorRo."'";
																					#	$objParseQtyBrg = oci_parse ($conn, $qcekQtyBrg);  
																					#	oci_execute ($objParseQtyBrg,OCI_DEFAULT);  
																					#	$objResultQtyBrg = oci_fetch_array($objParseQtyBrg,OCI_BOTH);
																					#$rvcat2 = mysql_fetch_object($qvcat2);
																					#echo "<option value= ' ' style='background: red; color:#fff;' selected>Barang Akan Segera Diproses FSD</option>";					
																				}	
																				?>
																				<!--<option value='' style='color: grey;'>Status Barang : </option>
																							<option value='R' style='color: grey;'>Barang Akan Segera Diproses FSD</option>	
																							<option value='X' style='color: grey;'>Barang Dalam Proses Procurement</option>	
																							<option value='F' style='color: grey;'>Barang Masih ada diFSD</option>
																							<option value='S' style='color: grey;'>Barang Kirim Ke Store</option>		-->
																				<? 
																					if($rvSCatShowSW["NOMOR_RO"]!='')
																					{	
																					#	if(($rvSCatShowSW["STATUS_KIRIM"]=='')&&($rvSCatShowSW["STATUS_PERMINTAAN"]==' ')){
																						if(($rvSCatShowSW["STATUS_PERMINTAAN"]==' ')&&($rvSCatShowSW["STATUS_KIRIM"]=='')){
																							if($rvSCatShowSW["STATUS_PERMINTAAN"]==' '){ echo "<option value= ' ' style='background: red; color:#fff;' selected>Menunggu diApproval untuk tiket ".$_GET['pid'].'</option>';												
																							}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]=='D'){ echo "<option value= 'D' style='background: red; color:#fff;' selected>Barang Sudah Disetujui Oleh FSD MGR/SUB MGR</option>";																
																							}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]=='R'){ echo "<option value= 'R' style='background: red; color:#fff;' selected>Barang Sedang Diproses FSD untuk Tutup Hari</option>";}	
																						}elseif(($rvSCatShowSW["STATUS_PERMINTAAN"]=='R')&&($rvSCatShowSW["STATUS"]==' ')&&($rvSCatShowSW["STATUS_KIRIM"]=='')){
																							if($rvSCatShowSW["STATUS"]==' '){ echo "<option value= ' ' style='background: red; color:#fff;' selected>Barang Sedang Diproses FSD untuk Tutup Hari</option>";												
																							}elseif($rvSCatShowSW["STATUS"]=='O'){ echo "<option value= 'O' style='background: red; color:#fff;' selected>Barang Sedang Proses Order</option>";																
																							}elseif($rvSCatShowSW["STATUS"]=='P'){ echo "<option value= 'P' style='background: red; color:#fff;' selected>X6-Barang Sudah Proses DO Balik</option>";}
																						}elseif(($rvSCatShowSW["STATUS_PERMINTAAN"]=='R')&&
																								(($rvSCatShowSW["STATUS"]=='O')||($rvSCatShowSW["STATUS"]=='P')||($rvSCatShowSW["STATUS"]=='C'))&&
																								($rvSCatShowSW["STATUS_KIRIM"]=='')){
																							if($rvSCatShowSW["STATUS"]==' '){ echo "<option value= ' ' style='background: red; color:#fff;' selected>Barang Sedang Diproses FSD untuk Tutup Hari</option>";												
																							}elseif($rvSCatShowSW["STATUS"]=='O'){ echo "<option value= 'O' style='background: red; color:#fff;' selected>Barang Sedang Proses Order</option>";																
																							}elseif($rvSCatShowSW["STATUS"]=='P'){ echo "<option value= 'P' style='background: red; color:#fff;' selected>Barang Sudah Diterima Oleh Store (Proses DO Balik)</option>";
																							}elseif($rvSCatShowSW["STATUS"]=='C'){ echo "<option value= 'C' style='background: red; color:#fff;' selected>Barang Dibatalkan Pemesanannya</option>";}
																						}elseif(($rvSCatShowSW["STATUS_KIRIM"]!='')){
																							if($rvSCatShowSW["STATUS_KIRIM"]=='K'){ echo "<option value= 'K' style='background: red; color:#fff;' selected>Barang Proses Dikirim Ke Store</option>";														
																							}elseif($rvSCatShowSW["STATUS_KIRIM"]=='D'){ echo "<option value= 'D' style='background: red; color:#fff;' selected>Barang Sudah Diterima Oleh Store</option>";																
																							}	
																						}	
																					}elseif($rvSCatShowSW["NOMOR_RO"]=='')
																					{
																						if($rvSCatShowSW["STATUS_PERMINTAAN"]=='R'){ echo "Barang Sedang Diproses FSD untuk Tutup Hari";														
																						}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]=='D'){ echo "Barang Sudah Disetujui Oleh FSD MGR/SUB MGR";																
																						}elseif($rvSCatShowSW["STATUS_PERMINTAAN"]==' '){ echo "Menunggu diApproval untuk tiket ".$_GET['pid'];
																						}																
																					}	
																				?>																							
																							
																			</select>
																		</center>
																	</td>																
																</tr>
															<? } /* oci_close($objConnectShowSW);*/ oci_close($connCekStatusPermintaanStoreSW); ?>										
											
										<? }elseif($rcektipebrg->kode_tipebrg == 'FSDBRGSP'){ 
											$qvCekDataSP = mysql_query("SELECT DISTINCT ticket_id, no_permintaan, request_by, kode_tipebarang, kode_tipebarang_sw, kode_tipebarang_sp,
																kuantitas, nama_tipebarang, nama_tipebarang_sw, nama_tipebarang_sp
																FROM ITH_TIPEBARANG_KODE
																WHERE ticket_id = '$_GET[pid]'");
																$rvCekDataSP = mysql_fetch_object($qvCekDataSP);
																
																$objConnectShowSP = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
																$qShowSP = "select FSDORDSP.NO_PERMINTAAN, FSDORDSP.TGL_PERMINTAAN, FSDORDSP.TGL_BUAT_FSD, FSDORDSP.KODE_BARANG, 
																FSDBRGSP.NAMA_BARANG,
																FSDORDSP.JUMLAH_PERMINTAAN, FSDORDSP.JUMLAH_ORDER, FSDORDSP.TGL_DISETUJUI, 
																FSDORDSP.NOMOR_RO, FSDORDSP.STATUS_PERMINTAAN
																from FSDORDSP 
																JOIN FSDBRGSP ON FSDORDSP.KODE_BARANG = FSDBRGSP.KODE_BARANG
																where NO_PERMINTAAN = '$rvCekDataSP->no_permintaan'
																AND JUMLAH_PERMINTAAN IS NOT NULL order by FSDORDSP.TGL_PERMINTAAN DESC";  
																$qobjParseShowSP = oci_parse ($objConnectShowSP, $qShowSP);  
																oci_execute ($qobjParseShowSP,OCI_DEFAULT);   
															
																while($rvSCatShowSP = oci_fetch_array($qobjParseShowSP,OCI_BOTH))  
																{  
																?>  												
																<tr>												
																	<td width="7%">
																		<center><?=$rvSCatShowSP["NO_PERMINTAAN"];?></center>
																	</td>
																	<td width="17%">
																		<center><?=$rvSCatShowSP["TGL_PERMINTAAN"];?></center>
																	</td>
																	
																	<td width="20%">
																	<center><?=$rvSCatShowSP["KODE_BARANG"];?></center>
																	</td>														
																	<td width="20%">
																	<center><?=$rvSCatShowSP["NAMA_BARANG"];?></center>
																	</td>														
																	<td width="15%">
																		<center><?=$rvSCatShowSP["JUMLAH_PERMINTAAN"].' <b>UNIT</b>';?></center>
																	</td>
																	<td width="15%">
																		<center>
																			<select class="input-medium" style="width:120px;" name="statusBarang[<?=$rvSCatShowEQ["KODE_BARANG"]?>]" id="statusBarang">
																			<?
																			$qCekNomorRequestX3 = mysql_query("SELECT ticket_id, no_permintaan FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '$pid'");	
																			$rCekNomorRequestX3 = mysql_fetch_object($qCekNomorRequestX3);
																			$nomorPermintaanStoreX3 = $rCekNomorRequestX3->no_permintaan;
																			$connCekStatusPermintaanStoreSP = oci_connect('fsd', 'fsd', 'localhost:1521/XE');
																			$sqlCekStatusPermintaanStoreSP = "SELECT FSDORDEC.KODE_CABANG,FSDORDEC.DEPARTEMEN,FSDORDEC.NO_PERMINTAAN,FSDORDEC.TGL_PERMINTAAN,FSDORDEC.TGL_TERIMA_FSD,
																					FSDORDEC.TGL_BUAT_FSD,FSDORDEC.KODE_BARANG,FSDORDEC.JUMLAH_PERMINTAAN,
																					FSDORDEC.JUMLAH_ORDER,FSDORDEC.KETERANGAN,FSDORDEC.STATUS_PERMINTAAN,FSDORDEC.TGL_DISETUJUI,FSDORDEC.DISETUJUI_OLEH, 
																					FSDORDEC.USER_SETUJU,FSDORDEC.NOMOR_RO,FSDORDEC.USER_BUAT,FSDORDEC.USER_RUBAH,FSDORDEC.TGL_RUBAH, 
																					FSDORDEC.KIRIM_DARI_STOK FROM FSDORDEC 
																					JOIN FSDBRGEQ ON FSDORDEC.KODE_BARANG = FSDBRGEQ.KODE_BARANG
																					WHERE FSDORDEC.no_permintaan = '$nomorPermintaanStoreX1'";				
																			$compiledCekStatusPermintaanStoreSP= oci_parse ($connCekStatusPermintaanStoreSP, $sqlCekStatusPermintaanStoreSP);  
																			oci_execute ($compiledCekStatusPermintaanStoreSP,OCI_DEFAULT);  

																			$objResultCekStatusPermintaanStoreSP = oci_fetch_array($compiledCekStatusPermintaanStoreSP,OCI_BOTH);
																				if($objResultCekStatusPermintaanStoreSP['NOMOR_RO'] != '') 
																				{		
																					#	$qcekQtyBrg = "SELECT NO_PO, QTY_PO FROM FSDPOEQC WHERE NOMOR_RO = '".$nomorRo."'";
																					#	$objParseQtyBrg = oci_parse ($conn, $qcekQtyBrg);  
																					#	oci_execute ($objParseQtyBrg,OCI_DEFAULT);  
																					#	$objResultQtyBrg = oci_fetch_array($objParseQtyBrg,OCI_BOTH);
																					#$rvcat2 = mysql_fetch_object($qvcat2);
																					echo "<option value= '".$objResultCekStatusPermintaanStoreSP['KODE_BARANG']."' style='background: red; color:#fff;' selected>".$objResultCekStatusPermintaanStoreSP['NAMA_BARANG']."</option>";					
																				}	
																				?>
																				<option value='' style='color: grey;'>Status Barang</option>
																							
																							<option value='R' style='color: grey;'>Barang Akan Segera Diproses FSD</option>	
																							<option value='X' style='color: grey;'>Barang Dalam Proses Procurement</option>	
																							<option value='F' style='color: grey;'>Barang Masih ada diFSD</option>
																							<option value='S' style='color: grey;'>Barang Kirim Ke Store</option>																							
																			</select>
																		</center>
																	</td>															
																</tr>
															<? } oci_close($objConnectShowSP); ?>										
											

										<? } ?>	
														</tbody>
													</table>	
													</div>	<br>
			<? }elseif($dtmyticket->statuslaporan_name=='Problem Teknisi Store'){ ?>
			<b><u>PERMASALAHAN DARI CABANG (
				<?
					$qcektipebrgsx = mysql_query("SELECT kode_tipebrg FROM ITH_TICKET_HEADER where ticket_id = '$_GET[pid]'");
					$rcektipebrgsx = mysql_fetch_object($qcektipebrgsx);
					if($rcektipebrgsx->kode_tipebrg=='FSDBRGEQ'){ 
				?>
					<?="EQUIPMENT";?>
				<?	}elseif($rcektipebrgsx->kode_tipebrg=='FSDBRGSW'){  ?>
					<?="SMALLWARE";?>
				<?	}elseif($rcektipebrgsx->kode_tipebrg=='FSDBRGSP'){ ?>
					<?="SPAREPART";?>
				<?	}
				?>
			)</u></b></center><br>		
				<script src="jquery/jquery.min.js"></script>
				<script>
					$(document).ready(function()
					{
						$("#equipmentsrc").on("keyup", function() 
						{
							var value = $(this).val().toLowerCase();
							$("#myCodes tr").filter(function() 
							{
								$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
							});
						});
						$("#smallwaresrc").on("keyup", function() 
						{
							var value = $(this).val().toLowerCase();
							$("#myCodes tr").filter(function() 
							{
								$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
							});
						});
						$("#sparepartsrc").on("keyup", function() 
						{
							var value = $(this).val().toLowerCase();
							$("#myCodes tr").filter(function() 
							{
								$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
							});
						});
					});
				</script>
				<style>
					table.blueTable 
					{
						border: 1px solid #1C6EA4; background-color: #EEEEEE; width: 100%;
						text-align: left; border-collapse: collapse; overflow-x:scroll;height:100px; position:relative;
					}
					table.blueTable td, table.blueTable th 
					{
						border: 1px solid #AAAAAA; padding: 3px 2px;				  
					}
					table.blueTable tbody td { font-size: 13px; }
					table.blueTable tr:nth-child(even) { background: #D0E4F5; }
					table.blueTable thead 
					{ 
						background: #1C6EA4; background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
						background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
						background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
						border-bottom: 2px solid #444444;
					}
					table.blueTable thead th 
					{
						font-size: 12px; text-align:center; font-weight: bold; color: #FFFFFF; border-left: 2px solid #D0E4F5;
					}
					table.blueTable thead th:first-child { border-left: none; }
					table.blueTable tfoot 
					{ 
						font-size: 14px; font-weight: bold; color: #FFFFFF; background: #D0E4F5;
						background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
						background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
						background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
						border-top: 2px solid #444444;
					}
					table.blueTable tfoot td { font-size: 14px; }
					table.blueTable tfoot .links { text-align: right; }
					table.blueTable tfoot .links a{ display: inline-block; background: #1C6EA4; color: #FFFFFF; padding: 2px 8px; border-radius: 5px; }			
					</style>
					<!--<input id="equipmentsrc" type="text" placeholder="Search..">-->
						<table class="blueTable" border="1"> 
							<thead>
								<tr>
									<?  
									#	$objConnect = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
									?>														
										<th width="7%">No<br>Permasalahan</th>
										<th width="17%">Tgl<br>Permasalahan</th>
										<th width="20%">Kode<br>Barang</th>
										<th width="20%">Nama<br>Barang</th>
										<!--<th width="15%">Jumlah<br>Permasal</th>-->
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
										$qcektipebrgdetail = mysql_query("SELECT ITH_TICKET_HEADER.ticket_id, ITH_TICKET_HEADER.kode_tipebrg 
																FROM ITH_TICKET_HEADER 
																JOIN ITH_TIPEBRG ON ITH_TICKET_HEADER.kode_tipebrg = ITH_TIPEBRG.kode_tipebrg
																WHERE ITH_TICKET_HEADER.kode_tipebrg != '' AND ITH_TICKET_HEADER.ticket_id = '$_GET[pid]'");
										$rcektipebrgdetail = mysql_fetch_object($qcektipebrgdetail);	
										if($rcektipebrg->kode_tipebrg == 'FSDBRGEQ') /* EQUIPMENT INFO DI TIKET DETAIL */
										{
											$qvCekDataEQ = mysql_query("SELECT DISTINCT ITH_TIPEBARANG_KODE.NO_PERMINTAAN, ITH_TIPEBARANG_KODE.KODE_TIPEBARANG, ITH_TIPEBARANG_KODE.KODE_TIPEBARANG_SW, 
															ITH_TIPEBARANG_KODE.NAMA_TIPEBARANG, ITH_TICKET_HEADER.ticket_createdate FROM ITH_TIPEBARANG_KODE 
															JOIN ITH_TICKET_HEADER ON ITH_TIPEBARANG_KODE.ticket_id = ITH_TICKET_HEADER.ticket_id
															WHERE ITH_TIPEBARANG_KODE.ticket_id = '$_GET[pid]' GROUP BY ITH_TIPEBARANG_KODE.KODE_TIPEBARANG ASC");														
											while($rvSCatShowEQ = mysql_fetch_array($qvCekDataEQ)){					
																
																?>  												
																<tr>												
																	<td width="7%">
																		<center><?=$rvSCatShowEQ["NO_PERMINTAAN"];?></center>
																	</td>
																	<td width="17%">
																		<center><?=$rvSCatShowEQ["ticket_createdate"];?></center>
																	</td>
																	
																	<td width="20%">
																	<center><?=$rvSCatShowEQ["KODE_TIPEBARANG"];?></center>
																	</td>														
																	<td width="20%">
																	<center><?=$rvSCatShowEQ["NAMA_TIPEBARANG"];?></center>
																	</td>														
																</tr>
															<? } ?>	
										<? }elseif($rcektipebrg->kode_tipebrg == 'FSDBRGSW'){ 
															$qvCekDataSW = mysql_query("SELECT DISTINCT ITH_TIPEBARANG_KODE.NO_PERMINTAAN, ITH_TIPEBARANG_KODE.KODE_TIPEBARANG, ITH_TIPEBARANG_KODE.KODE_TIPEBARANG_SW, 
															ITH_TIPEBARANG_KODE.NAMA_TIPEBARANG, ITH_TICKET_HEADER.ticket_createdate FROM ITH_TIPEBARANG_KODE 
															JOIN ITH_TICKET_HEADER ON ITH_TIPEBARANG_KODE.ticket_id = ITH_TICKET_HEADER.ticket_id
															WHERE ITH_TIPEBARANG_KODE.ticket_id = '$_GET[pid]' GROUP BY ITH_TIPEBARANG_KODE.KODE_TIPEBARANG ASC");
																
															
																while($rvSCatShowSW = mysql_fetch_array($qvCekDataSW)){
																?>  												
																<tr>												
																	<td width="7%">
																		<center><?=$rvSCatShowSW["NO_PERMINTAAN"];?></center>
																	</td>
																	<td width="17%">
																		<center><?=$rvSCatShowSW["ticket_createdate"];?></center>
																	</td>
																	
																	<td width="20%">
																	<center><?=$rvSCatShowSW["KODE_TIPEBARANG_SW"];?></center>
																	</td>														
																	<td width="20%">
																	<center><?=$rvSCatShowSW["NAMA_TIPEBARANG"];?></center>
																	</td>														
																</tr>
															<? } ?>										
											
										<? }elseif($rcektipebrg->kode_tipebrg == 'FSDBRGSP'){ 
											$qvCekDataSP = mysql_query("SELECT DISTINCT ITH_TIPEBARANG_KODE.NO_PERMINTAAN, ITH_TIPEBARANG_KODE.KODE_TIPEBARANG, 
															ITH_TIPEBARANG_KODE.KODE_TIPEBARANG_SW, ITH_TIPEBARANG_KODE.KODE_TIPEBARANG_SP, 
															ITH_TIPEBARANG_KODE.NAMA_TIPEBARANG, ITH_TICKET_HEADER.ticket_createdate FROM ITH_TIPEBARANG_KODE 
															JOIN ITH_TICKET_HEADER ON ITH_TIPEBARANG_KODE.ticket_id = ITH_TICKET_HEADER.ticket_id
															WHERE ITH_TIPEBARANG_KODE.ticket_id = '$_GET[pid]' GROUP BY ITH_TIPEBARANG_KODE.KODE_TIPEBARANG ASC");														
											while($rvSCatShowSP = mysql_fetch_array($qvCekDataSP)){		
																?>  												
																<tr>												
																	<td width="7%">
																		<center><?=$rvSCatShowSP["NO_PERMINTAAN"];?></center>
																	</td>
																	<td width="17%">
																		<center><?=$rvSCatShowSP["ticket_createdate"];?></center>
																	</td>
																	
																	<td width="20%">
																	<center><?=$rvSCatShowSP["KODE_TIPEBARANG_SP"];?></center>
																	</td>														
																	<td width="20%">
																	<center><?=$rvSCatShowSP["NAMA_TIPEBARANG"];?></center>
																	</td>														
																</tr>
															<? } ?>										
											

										<? } ?>	
														</tbody>
													</table>	
													</div>	<br>
			<? } ?>	
				</td>
		</tr>
		<!-- <tr>
            <td valign="top">Status Barang :  <span class="note" style="color:red;">*</span></td>
            <td valign="top">
				<select class="required" style="width:320px;" name="ticketstatusbarang_id" >	
				<!?
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); 
					$qvsbarang = mysql_query("SELECT ticketstatusbarang_id, ticketstatusbarang_name FROM ITH_TICKETSTATUSBARANG 
					WHERE ticketstatusbarang_id IN ('1','2','3','4')
					ORDER by ticketstatusbarang_id ASC");				
				if($ticket_id!='') {
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con);
					//@session_start();
					$qvsbarang2 = mysql_query("SELECT ith_ticket_header.*, ITH_TICKETSTATUSBARANG.* FROM ith_ticket_header 
					LEFT JOIN ITH_TICKETSTATUSBARANG ON ITH_TICKETSTATUSBARANG.ticketstatusbarang_id = ith_ticket_header.ticketstatusbarang_id
					WHERE ith_ticket_header.ticket_id= '$_GET[pid]'");
					$rvsbarang2 = mysql_fetch_object($qvsbarang2);
						echo "<option value= '$rvsbarang2->ticketstatusbarang_id' style=background:red;color:#fff;> $rvsbarang2->ticketstatusbarang_name</option>";
				}
				echo "<option value='Silahkan Pilih Status Barang'>Silahkan Pilih Status Barang :</option>";
				while($rvsbarang = mysql_fetch_object($qvsbarang)) 
				{
						echo "<option value= '$rvsbarang->ticketstatusbarang_id'> $rvsbarang->ticketstatusbarang_name</option>";
				}
				?>
				</select>			
			 </td>
          </tr>		  
			<!? } ?-->
			
				 <tr>
					<td valign="top">Status Request From PIC I :  <span class="note" style="color:red;">*</span></td>
					<td valign="top">
						<select class="input-medium" style="width:320px;" name="ticketstatusfrompic_id" >	
						<?
							$con = mysql_connect("localhost","usrservicedesk","kfc14022");
							mysql_select_db("servicedesk",$con); //@session_start();
							$qvcat = mysql_query("SELECT ticketstatus_id, ticketstatus_name	FROM ITH_TICKETSTATUS
							WHERE ticketstatus_id NOT IN('1','3','4','5') ORDER by ticketstatus_id ASC");	
						if($ticket_id!='') {
							$con = mysql_connect("localhost","usrservicedesk","kfc14022");
							mysql_select_db("servicedesk",$con);
							//@session_start();
							$qvcat2 = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.* FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKETSTATUS.ticketstatus_id = ITH_TICKET_HEADER.ticketstatus_id
							WHERE ITH_TICKET_HEADER.ticket_id= '$_GET[pid]'");
							$rvcat2 = mysql_fetch_object($qvcat2);
								echo "<option value= '$rvcat2->ticketstatus_id' style=background:red;color:#fff;> $rvcat2->ticketstatus_name</option>";
								#echo "<option value= 'test' style=background:red;color:#fff;> test</option>";
						}
						
						while($rvcat = mysql_fetch_object($qvcat)) 
						{
								echo "<option value= '$rvcat->ticketstatus_id'> $rvcat->ticketstatus_name</option>";
						}
						?>
						</select>			
					 </td>
				  </tr>			  
			<? }elseif($rcekappby->ticketdetail_pichandleby2== $_SESSION['user_id']){ ?>
				  <tr>
					<td valign="top">Description<span class="note">*</span></td>
					<td valign="top"><textarea name="ticket_solution2" id="ticket_solution2" rows="15" class="input"></textarea></td>
				  </tr>	
			
				 <tr>
					<td valign="top">Status Request From PIC II :  <span class="note" style="color:red;">*</span></td>
					<td valign="top">
						<select class="input-medium" style="width:320px;" name="ticketstatusfrompic2_id" >	
						<?
							$con = mysql_connect("localhost","usrservicedesk","kfc14022");
							mysql_select_db("servicedesk",$con); //@session_start();
							$qvcat = mysql_query("SELECT ticketstatus_id, ticketstatus_name	FROM ITH_TICKETSTATUS
							WHERE ticketstatus_id NOT IN('1','3','4','5') ORDER by ticketstatus_id ASC");	
						if($ticket_id!='') {
							$con = mysql_connect("localhost","usrservicedesk","kfc14022");
							mysql_select_db("servicedesk",$con);
							//@session_start();
							$qvcat2b = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.* FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKETSTATUS.ticketstatus_id = ITH_TICKET_HEADER.ticketstatus_id
							WHERE ITH_TICKET_HEADER.ticket_id= '$_GET[pid]'");
							$rvcat2b = mysql_fetch_object($qvcat2b);
								echo "<option value= '$rvcat2b->ticketstatus_id' style=background:red;color:#fff;> $rvcat2b->ticketstatus_name</option>";
								#echo "<option value= 'test' style=background:red;color:#fff;> test</option>";
						}
						
						while($rvcat = mysql_fetch_object($qvcat)) 
						{
								echo "<option value= '$rvcat->ticketstatus_id'> $rvcat->ticketstatus_name</option>";
						}
						?>
						</select>			
					 </td>
				  </tr>				
			<? }elseif($rcekappby->ticketdetail_pichandleby3== $_SESSION['user_id']){ ?>
				  <tr>
					<td valign="top">Description<span class="note">*</span></td>
					<td valign="top"><textarea name="ticket_solution3" id="ticket_solution3" rows="15" class="input"></textarea></td>
				  </tr>	
			
				 <tr>
					<td valign="top">Status Request From PIC III  :  <span class="note" style="color:red;">*</span></td>
					<td valign="top">
						<select class="input-medium" style="width:320px;" name="ticketstatusfrompic3_id" >	
						<?
							$con = mysql_connect("localhost","usrservicedesk","kfc14022");
							mysql_select_db("servicedesk",$con); //@session_start();
							$qvcat = mysql_query("SELECT ticketstatus_id, ticketstatus_name	FROM ITH_TICKETSTATUS
							WHERE ticketstatus_id NOT IN ('1','3','4','5') ORDER by ticketstatus_id ASC");				
						if($ticket_id!='') {
							$con = mysql_connect("localhost","usrservicedesk","kfc14022");
							mysql_select_db("servicedesk",$con);
							//@session_start();
							$qvcat2c = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETSTATUS.* FROM ITH_TICKET_HEADER 
							LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKETSTATUS.ticketstatus_id = ITH_TICKET_HEADER.ticketstatus_id
							WHERE ITH_TICKET_HEADER.ticket_id= '$_GET[pid]'");
							$rvcat2c = mysql_fetch_object($qvcat2c);
								echo "<option value= '$rvcat2c->ticketstatus_id' style=background:red;color:#fff;> $rvcat2c->ticketstatus_name</option>";
								#echo "<option value= 'test' style=background:red;color:#fff;> test</option>";
						}
						
						while($rvcat = mysql_fetch_object($qvcat)) 
						{
								echo "<option value= '$rvcat->ticketstatus_id'> $rvcat->ticketstatus_name</option>";
						}
						?>
						</select>			
					 </td>
				  </tr>	

			  
			<? } ?>
		 
		  <tr style="display:none;">
            <td valign="top">PIC :  <span class="note" style="color:red;">*</span></td>
            <td valign="top">
				<select class="input-medium" style="width:320px;" name="ticketdetail_pichandleby3">	
				<?
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
					$qvaprvl1a = mysql_query("SELECT user_id, user_realname FROM ITH_USER WHERE userlevel_id = '$_SESSION[user_level]' AND udept_id = '$_SESSION[udeptid]' ORDER BY user_realname ASC");				
				if($ticketdetail_id!='') {
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con);
					//@session_start();
					$qvaprvl1b = mysql_query("SELECT ITD.*, ITHU.user_realname AS uname1, ITHU2.user_realname AS uname2, ITHU3.user_realname AS uname3 
								FROM ITH_TICKET_DETAIL ITD
								LEFT JOIN ITH_USER ITHU ON ITD.ticketdetail_pichandleby = ITHU.user_nik
								LEFT JOIN ITH_USER ITHU2 ON ITD.ticketdetail_pichandleby2 = ITHU2.user_nik
								LEFT JOIN ITH_USER ITHU3 ON ITD.ticketdetail_pichandleby3 = ITHU3.user_nik
								WHERE ITD.ticketdetail_id = '$_GET[pid]'								
								");
					$rvaprvl1b = mysql_fetch_object($qvaprvl1b);
						echo "<option value= '$rvaprvl1b->ticketdetail_pichandleby2' style=background:red;color:#fff;> $rvaprvl1b->uname2</option>";
						#echo "<option value= 'test' style=background:red;color:#fff;> test</option>";
				}
				
				while($rvaprvl1a = mysql_fetch_object($qvaprvl1a)) 
				//$uname1x = ucwords(strtolower($rvaprvl1a->user_realname));
				{
						echo "<option value= '$rvaprvl1a->user_id'>$rvaprvl1a->user_realname</option>";
				}
				?>
				</select>			
			 </td>
          </tr>	
			<tr>
				<td valign="top">Upload Image</td>
				<td valign="top" >					
                    <div id="filediv" style="width:20%;"><input name="file[]" type="file" id="file"/></div>  
					<div style="color:red;font-weight:bold;">Ekstensi Upload Gambar yang<br> diperbolehkan yaitu JPEG,PNG,JPG<br>dan Ukuran File Gambar harus kurang <br>dari sama dengan 900KB.</div>					
                    <input type="button" id="add_more" class="upload" value="Add More Files"/>
				</td>				
			</tr>				
			<? #} ?>		  
          <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="button" id="button" value="Submit" class="submit-btn">&nbsp;
            <input type="reset" name="button2" id="button2" value="Clear" class="submit-btn"></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><span class="note" style="color:red;">*wajib diisi</span></td>
          </tr>
          <tr>
            <td colspan="2">
			<?php
            	if ($_SESSION['msgerror']) {
					$error = implode("<br/>",$_SESSION['msgerror']);
					echo '<div class="error">'.$error.'</div>';
					unset($_SESSION['msgerror']);
				}
			?>
			</td>
          </tr>		  
		</table>
	  </form>	  
<?  ?>

<div class="modal" id="load-wait">Mohon Sabar Yaaa :) :)</div>
<style>
.modal {
    display:    none;
    position:   fixed;
    z-index:    1000;
    top:        0;
    left:       0;
    height:     100%;
    width:      100%;
    background: rgba( 255, 255, 255, .8 ) 
                url('images/ajax-loader.gif') 
                50% 50% 
                no-repeat;
}

/* When the body has the loading class, we turn
   the scrollbar off with overflow:hidden */
body.loading {
    overflow: hidden;   
}

/* Anytime the body has the loading class, our
   modal element will be visible */
body.loading .modal {
    display: block;
}
</style>
<script type="text/javascript" src="jquery/jquery.min.js"></script>
<script type="text/javascript" src="jquery/jquery.validate.min.js"></script>
<script type="text/javascript">
var abc = 0; //Declaring and defining global increement variable

$(document).ready(function() {

//To add new input file field dynamically, on click of "Add More Files" button below function will be executed
    $('#add_more').click(function() {
        $(this).before($("<div/>", {id: 'filediv'}).fadeIn('slow').append(
                $("<input/>", {name: 'file[]', type: 'file', id: 'file'}),        
                $("<br/><br/>")
                ));
    });

//following function will executes on change event of file input to select different file	
$('body').on('change', '#file', function(){
            if (this.files && this.files[0]) {
                 abc += 1; //increementing global variable by 1
				
				var z = abc - 1;
                var x = $(this).parent().find('#previewimg' + z).remove();
                $(this).before("<div id='abcd"+ abc +"' class='abcd'><img id='previewimg" + abc + "' src=''/></div>");
               
			    var reader = new FileReader();
                reader.onload = imageIsLoaded;
                reader.readAsDataURL(this.files[0]);
               
			    $(this).hide();
                $("#abcd"+ abc).append($("<img/>", {id: 'img', src: 'x.png', alt: 'delete'}).click(function() {
                $(this).parent().parent().remove();
                }));
            }
        });

//To preview image     
    function imageIsLoaded(e) {
        $('#previewimg' + abc).attr('src', e.target.result);
    };

   /*  $('#upload').click(function(e) { */
    $('#submit').click(function(e) {
        var name = $(":file").val();
        //if (!name)
        //{
          //  alert("First Image Must Be Selected");
          //  e.preventDefault();
       // }
    });
});
</script>
<script type="text/javascript">
//add by aryn
	$(document).ready(function() {
			$('#form1').validate({
				rules: {
				 ticket_problem: { 
						required: true 
	        } 
				
				},
				messages: {
					ticket_type: {
						required: "Type Harus Dipilih"
						
					},
					ticket_subject: {
						required: "Subject Harus Diisi"
						
					},
					ticket_problem: {
						required: "Desc Harus Diisi"
						
					}
					
				}
			});
		});
</script>