<?php //if (empty($_BASE_PATH)) {header("location:index.php");} 
$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
$ticket_id = $_GET['pid'];
$ticketdetail_id = $_GET['pid'];
$userlevel=$_SESSION['user_level'];?>
<link href="requestlist/css/bootstrap.min.css" rel="stylesheet" media="screen">
<style>
#nav-content .box2 {
    background-color: #fff;
    background-image: url("images/gradient1.gif");
    background-position: left center;
    background-repeat: repeat-x;
    border-bottom: 1px solid #dfdfdf;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    border-left: 1px solid #dfdfdf;
    border-right: 1px solid #dfdfdf;
    padding: 4px 10px;
}
</style>
<div id="nav-content" style="margin-top:10px; width:5%;">
	<!--<div class="box">--><div>
	<a href="javascript:history.go(-1)" title="back"><img src="images/back.gif" border="0" alt="back" /></a>
	</div>
</div>

<div id="content">
	<div class="header">
	<?if($userlevel=='99'||$userlevel=='99'||$userlevel=='1000'||$userlevel=='21'||$userlevel=='22'||$userlevel=='23'||$userlevel=='24'||
	 $userlevel=='100'||$userlevel=='101'||$userlevel=='102'||$userlevel=='103'){ ?>
	  <h3>Maintenance Details</h3>	
	<?}elseif($userlevel=='1001'||$userlevel=='1002'||$userlevel=='1003'||$userlevel=='1004'){ ?>  
	  <h3>Maintenance Details</h3>
	<?}elseif($userlevel=='1'||$userlevel=='2'||$userlevel=='3'||$userlevel=='4'||$userlevel=='5'||$userlevel=='6'){ ?>  
	  <h3>Request Detail</h3>
	<? } ?>
    </div>
    <div class="body"> 
    	<table class="table table-hover" cellpadding="0" cellspacing="0" style="">
			<tbody>
				<tr>
				<? 
					# $query = mysql_query("SELECT * FROM VW_ITH_TICKET_HEADER WHERE ticket_id ='".$_GET['pid']."'");
					 $query = mysql_query("SELECT VW_ITH_TICKET_HEADER.*, ITH_TICKET_HEADER.kode_tipebrg, ITH_TICKET_HEADER.ticket_type 
					 FROM VW_ITH_TICKET_HEADER 
					 JOIN ITH_TICKET_HEADER ON VW_ITH_TICKET_HEADER.ticket_id = ITH_TICKET_HEADER.ticket_id
					 WHERE ITH_TICKET_HEADER.ticket_id ='".$_GET['pid']."'");
					 $dtmyticket = mysql_fetch_object($query);
				?>
				
					<td style="width:100px">
						<table>
							<tr><th style="border:0;">Request&nbsp;By  </th><th style="border:0;">:</th><td style="border:0;">
							<input type="text" value="<?=$dtmyticket->user_realname;?>" style="width:auto;" readonly></td></tr>
							<tr><th style="border:0;">Ticket ID  </th><th style="border:0;">:</th><td style="border:0;">
							<input type="text" value="<?=$_GET['pid'];?>" style="width:auto;" readonly></td></tr>
							<tr><th style="border:0;">Request&nbsp;Date  </th><th style="border:0;">:</th><td style="border:0;">
							<input type="text" value="<?=$dtmyticket->ticket_createdate;?>" style="width:auto;" readonly></td></tr>					
							<tr><th style="border:0;">Request&nbsp;Time  </th><th style="border:0;">:</th><td style="border:0;">
							<input type="text" value="<?=$dtmyticket->ticket_createtime;?>" style="width:auto;" readonly></td></tr>	
							<tr><th style="border:0;">Request Via  </th><th style="border:0;">:</th><td style="border:0;">
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
								if($rcektipebrg->kode_tipebrg == 'FSDBRGEQ') /* EQUIPMENT INFO DI TIKET DETAIL */
							    {	
							?>
									<tr style="display:none;"><th style="border:0;">Item Name  </th><th style="border:0;">:</th><td style="border:0;">
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
								
							<?  }elseif($rcektipebrg->kode_tipebrg == 'FSDBRGSW') /* SMALLWARE INFO DI TIKET DETAIL */
							    { ?>
									<tr style="display:none;"><th style="border:0;">Item Name  </th><th style="border:0;">:</th><td style="border:0;">
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
							<?  }elseif($rcektipebrg->kode_tipebrg == 'FSDBRGSP') /* SPAREPART INFO DI TIKET DETAIL */
							    { ?>
									<tr style="display:none;"><th style="border:0;">Item Name  </th><th style="border:0;">:</th><td style="border:0;">
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
							<tr><th style="border:0;">Request To  </th><th style="border:0;">:</th><td style="border:0;">
							<input type="text" value="<?=$dtmyticket->nama_departemen;?>" style="width:auto;" readonly></td></tr>
							<tr><th style="border:0;">Tipe Laporan  </th><th style="border:0;">:</th><td style="border:0;">
							<input type="text" value="<?=$dtmyticket->statuslaporan_name;?>" style="width:auto;" readonly></td></tr>
							
							<? if(($_SESSION['user_departemen']=='FSD WEST')||($_SESSION['user_departemen']=='FSD EAST')||($_SESSION['namajabatan']=='STORE')){ ?>
								<tr style="display:none;"><th style="border:0;">Category</th><th style="border:0;">:</th><td style="border:0;">
								<input type="text" value="<?=$dtmyticket->ticketsubcategory2_name;?>" style="width:155%;" readonly></td></tr>
								<tr><th style="border:0;">Category</th><th style="border:0;">:</th><td style="border:0;">
									<?
										$qcektipebrgs = mysql_query("SELECT kode_tipebrg FROM ITH_TICKET_HEADER where ticket_id = '".$_GET['pid']."'");
										$rcektipebrgs = mysql_fetch_object($qcektipebrgs);
										if($rcektipebrgs->kode_tipebrg=='FSDBRGEQ'){ 
									?>
											<input type="text" value="<?=ucfirst(strtolower("EQUIPMENT"));?>" style="width:auto;color:black;" readonly>
									<?	}elseif($rcektipebrgs->kode_tipebrg=='FSDBRGSW'){  ?>
											<input type="text" value="<?=ucfirst(strtolower("SMALLWARE"));?>" style="width:auto;color:black;" readonly>
									<?	}elseif($rcektipebrgs->kode_tipebrg=='FSDBRGSP'){ ?>
											<input type="text" value="<?=ucfirst(strtolower("SPAREPART"));?>" style="width:auto;color:black" readonly>
									<?	}
									?>
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
								<? if($dtmyticket->ticket_type!='3'){ /* Ditujukan Selain FSD */?>
									<tr><th style="border:0;">Category</th><th style="border:0;">:</th><td style="border:0;">
									<input type="text" value="<?=$dtmyticket->ticketsubcategory2_name;?>" style="width:155%;" readonly></td>
								<? }elseif($dtmyticket->ticket_type=='3') /* Ditujukan Ke FSD */ { ?>
									<tr><th style="border:0;">Category</th><th style="border:0;">:</th><td style="border:0;">
									<input type="text" value="<?=$dtmyticket->kode_tipebrg;?>" style="width:155%;" readonly></td>
								<? } ?>
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
								<th style="border:0;">Skala Priority  </th><th style="border:0;">:</th><td style="border:0;">
								<?if($dtmyticket->ticketpriority_id=='1'){?>
								<input type="text" value="<?='High';?>" style="width:auto;color:red;" readonly>
								<?}elseif($dtmyticket->ticketpriority_id=='2'){?>
								<input type="text" value="<?='Medium';?>" style="width:auto;color:blue;" readonly>
								<?}elseif($dtmyticket->ticketpriority_id=='3'){?>
								<input type="text" value="<?='Low';?>" style="width:auto;color:black;" readonly>							
								<? }else{ ?>
								<input type="text" value="<?='High';?>" style="width:auto;color:black;" readonly>	
								<? } ?>
								</td>
							</tr>			
							<tr>
							<th style="border:0;">Status Request  </th><th style="border:0;">:</th>
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
						<table style="border:3;">
						
							<tr><th style="font-weight:normal;"><b>Ticket Subject : </b><br> <?=$dtmyticket->ticket_subject;?></th></tr>
							<tr><th style="border:0;">Description  </th></tr>						
							<tr><td style="border:0;"><?=$dtmyticket->ticket_problem;?></td></tr>											
						</table>  
					</td>				
				</tr>
		</tbody>		
		</table>		
<!-- ################################################ PERMINTAAN BARANG DARI CABANG ############################################################# -->
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal1 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: none; /* Sit on top */
    padding-top: 280px; /* Location of the box */
    left: 0;
    top: 0;
	margin-left:20px;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
.modal2 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: none; /* Sit on top */
    padding-top: 280px; /* Location of the box */
    left: 0;
    top: 0;
	margin-left:20px;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
.modal3 {
    display: none; /* Hidden by default */
    position: absolute; /* Stay in place */
    z-index: none; /* Sit on top */
    padding-top: 280px; /* Location of the box */
    left: 0;
    top: 0;
	margin-left:20px;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content Status Barang */
.modal-content1 {
    background-color: #fefefe;
    margin-left: 100px;
    padding-left: 10px;
    border: 1px solid #888;
    width: 80%; height: 45%; z-index: none;
}

/* Modal Content Apprival Tracking */
.modal-content2 {
    background-color: #fefefe;
    margin-left: 100px;
    padding-left: 10px;
    border: 1px solid #888;
    width: 80%; height: 45%; z-index: none;
}

/* Modal Content Activity Tracking */
.modal-content3 {
    background-color: #fefefe;
    margin-left: 100px;
    padding-left: 10px;
    border: 1px solid #888;
    width: 80%; height: 50%; z-index: none;
}

/* The Close Button */
.close1 {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close1:hover,
.close1:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

/* The Close Button Approval Tracking */
.close2 {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close2:hover,
.close2:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

/* The Close Button Activity Tracking */
.close3 {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close3:hover,
.close3:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
<!--<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal1 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: none; /* Sit on top */
    padding-top: 280px; /* Location of the box */
    left: 0;
    top: 0;
	margin-left:20px;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
.modal2 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: none; /* Sit on top */
    padding-top: 280px; /* Location of the box */
    left: 0;
    top: 0;
	margin-left:20px;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
.modal3 {
    display: none; /* Hidden by default */
    position: absolute; /* Stay in place */
    z-index: none; /* Sit on top */
    padding-top: 280px; /* Location of the box */
    left: 0;
    top: 0;
	margin-left:20px;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content Status Barang */
.modal-content1 {
    background-color: #fefefe;
    margin-left: 100px;
    padding-left: 10px;
    border: 1px solid #888;
    width: 80%; height: auto; z-index: none;
}

/* Modal Content Apprival Tracking */
.modal-content2 {
    background-color: #fefefe;
    margin-left: 100px;
    padding-left: 10px;
    border: 1px solid #888;
    width: 80%; height: 40%; z-index: none;
}

/* Modal Content Activity Tracking */
.modal-content3 {
    background-color: #fefefe;
    margin-left: 100px;
    padding-left: 10px;
    border: 1px solid #888;
    width: 80%; height: 65%; z-index: none;
}

/* The Close Button */
.close1 {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close1:hover,
.close1:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

/* The Close Button Approval Tracking */
.close2 {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close2:hover,
.close2:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

/* The Close Button Activity Tracking */
.close3 {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close3:hover,
.close3:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>-->
<!--<button id="myBtn">Open Modal</button>-->
<!--
<a href="#" id="myBtn1">View Detail Status Item</a>&nbsp;&nbsp;
<a href="#" id="myBtn2">View Detail Approval Tracking</a>&nbsp;&nbsp;
<a href="#" id="myBtn3">View Detail Activity Tracking</a><br><br>
-->
		<? 
			$qCekTicketReffIDnya = mysql_query("SELECT ticketreferencestatus_id FROM ITH_TICKET_HEADER WHERE ticket_id = '".$_GET['pid']."'");
			$rCekTicketReffIDnya = mysql_fetch_object($qCekTicketReffIDnya);
		?>
		<? if($rCekTicketReffIDnya->ticketreferencestatus_id!='1'){ ?>
			<p><a href="#" id="myBtn1">View Status Item</a>
			&nbsp;&nbsp;&nbsp;<a href="#" id="myBtn2">View Approval Tracking</a>
			&nbsp;&nbsp;&nbsp;<a href="#" id="myBtn3">View Activity&nbsp;Tracking</a><br><br></p>
		<? }elseif($rCekTicketReffIDnya->ticketreferencestatus_id=='1'){ ?>
			<p><a href="#" id="myBtn1">View Status Item</a>
			&nbsp;&nbsp;&nbsp;<a href="#" id="myBtn2">View Approval Tracking(Reff.Ticket)</a>
			&nbsp;&nbsp;&nbsp;<a href="#" id="myBtn3">View Activity Tracking (Reff Ticket)</a><br><br></p>
		<? } ?>
<!-- The Modal -->
<div id="myModal1" class="modal1" style="z-index: none;">

  <!-- Modal content -->
	<div class="modal-content1" style="z-index: none;">
		<span class="close1">&times;</span>
			<!--<p><!? include('reqstore_admin.php');?></p>-->
			<p><? include('reqstore_admin.php');?></p>
			
	  </div>

</div>

<script>
// Get the modal
var modal1 = document.getElementById('myModal1');

// Get the button that opens the modal
var btn1 = document.getElementById("myBtn1");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close1")[0];

// When the user clicks the button, open the modal 
btn1.onclick = function() {
    modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
    modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}
</script>		
<!-- ############################################################################################################################################ -->								
		<? if($dtmyticket->ticketnote_admin!=''){?>
		<table class="table table-condensed table-bordered table-hover" cellpadding="0" cellspacing="0" style="">
		<tbody>
				<tr>
					<td style="width:200px">
						<table style="border:3;">						
							<tr><th style="border:0;">Note (From Admin)</th></tr>						
							<tr><td style="border:0;"><?=$dtmyticket->ticketnote_admin;?></td></tr>						
											
						</table>  
					</td>				
				</tr>
		</tbody>		
		</table>
		<? }elseif($dtmyticket->ticketnote_admin==''){?>
		<table class="table table-condensed table-bordered table-hover" cellpadding="0" cellspacing="0" style="display:none;">
		<tbody>
				<tr>
					<td style="width:200px">
						<table style="border:3;">						
							<tr><th style="border:0;">Note (From Admin)</th></tr>						
							<tr><td style="border:0;"><?='Tidak Ada Catatan Dari Admin';?></td></tr>						
											
						</table>  
					</td>				
				</tr>
		</tbody>		
		</table>
		<? } ?>
<!-- ################################################## APPROVAL TRACKING ###################################################################### -->


<!-- The Modal -->
<div id="myModal2" class="modal2" style="z-index: none;">

  <!-- Modal content -->
	<div class="modal-content2" style="z-index: none;">
		<span class="close2">&times;</span>
			<p><? /* include('approval_activity_tracking.php');*/ include('approval_tracking.php');?></p>
			
	  </div>

</div>

<script>
// Get the modal
var modal2 = document.getElementById('myModal2');

// Get the button that opens the modal
var btn2 = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var span2 = document.getElementsByClassName("close2")[0];

// When the user clicks the button, open the modal 
btn2.onclick = function() {
    modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span2.onclick = function() {
    modal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}
</script>		
<!-- ############################################################################################################################################ -->								
<!-- ################################################## ACTIVITY TRACKING ####################################################################### -->


<!-- The Modal -->
<div id="myModal3" class="modal3" style="z-index: none;">

  <!-- Modal content -->
	<div class="modal-content3" style="z-index: none;">
		<span class="close3">&times;</span>
		<? 
			$qCekTicketReffIDnya = mysql_query("SELECT ticketreferencestatus_id FROM ITH_TICKET_HEADER WHERE ticket_id = '".$_GET['pid']."'");
			$rCekTicketReffIDnya = mysql_fetch_object($qCekTicketReffIDnya);
		?>
		<? if($rCekTicketReffIDnya->ticketreferencestatus_id!='1'){ ?>
				<p><? /* include('approval_activity_tracking.php');*/ include('activity_tracking.php');?></p>
		<? }elseif($rCekTicketReffIDnya->ticketreferencestatus_id=='1'){ ?>
				<p><? /* include('approval_activity_tracking.php');*/ include('activity_trackingticketreff.php');?></p>
		<? } ?>			
	  </div>

</div>

<script>
// Get the modal
var modal3 = document.getElementById('myModal3');

// Get the button that opens the modal
var btn3 = document.getElementById("myBtn3");

// Get the <span> element that closes the modal
var span3 = document.getElementsByClassName("close3")[0];

// When the user clicks the button, open the modal 
btn3.onclick = function() {
    modal3.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span3.onclick = function() {
    modal3.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal3) {
        modal3.style.display = "none";
    }
}
</script>		
<!-- ############################################################################################################################################ -->								

					<br>		

<br> 
		<?
			$qcekimg = mysql_query("SELECT * FROM ITH_LOGUPLOADIMG where ticket_id = '$_GET[pid]'");
			$rcekimg = mysql_fetch_object($qcekimg);
			if($rcekimg->id_img ==''){
		?>
			<b><u>User Upload Image</u><br><center>Maaf Tidak Ada Image yang di-upload oleh user.</b></center>
		<? }else{ ?>
			<b><font color="Red">PIC Upload Image</font></b>
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
		<br> 
		<?
			$qcekimg = mysql_query("SELECT * FROM ITH_LOGUPLOADIMGPIC where ticket_id = '$_GET[pid]'");
			$rcekimg = mysql_fetch_object($qcekimg);
			if($rcekimg->id_img ==''){
		?>
			<b><u>PIC Upload Image</u><br><center>Maaf Tidak Ada Image yang di-upload oleh user.</b></center>
		<? }else{ ?>
			<b><font color="Blue">PIC Upload Image</font></b>
			<link rel="stylesheet" href="css/w3.css">
			<div style="overflow-y:auto; width:100%;"> 
			<center>	
					<table border="0" style="margin-top:20px;">
					<tr>
					<? 
						$qgetimg = mysql_query("SELECT * FROM ITH_LOGUPLOADIMGPIC where ticket_id = '$_GET[pid]'");
						while($rgetimg = mysql_fetch_object($qgetimg)){
					?>
					<td>
					<center><img src="<?="http://".$_SERVER['SERVER_NAME']."/".$rgetimg->img_location.$rgetimg->img_name;?>" style="height:120px;width:120px;margin-right:5px;margin-bottom:0px;" onclick="document.getElementById('<?=$rgetimg->id_img?>').style.display='block'"></img></center>
					</td>
					
				
					
					  <div id="<?=$rgetimg->id_img?>" class="w3-modal" onclick="this.style.display='none'">
						<span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
						<div class="w3-modal-content w3-animate-zoom" style="margin-top:-90px;">
						  <img src="<?="http://".$_SERVER['SERVER_NAME']."/".$rgetimg->img_location.$rgetimg->img_name?>" style="width:80%;margin-top:30px;margin-left:50px;">
						</div>
					  </div>
					  
					<? } ?>
					</tr>
					</table>
			</center></div>			
		<? } ?>
		</br>	
		<? 
			$qcekstatusreffidz = mysql_query("SELECT ticket_id, ticketstatus_id, ticketreferencestatus_id, statuslaporan_id FROM ITH_TICKET_HEADER 
			WHERE ticket_id = '$ticket_id'");
			$rcekstatusreddidz = mysql_fetch_object($qcekstatusreffidz);
			$cekstatusreffidz = $rcekstatusreddidz->ticketreferencestatus_id;
			$cekstatusidz = $rcekstatusreddidz->ticketstatus_id;			
			$cekstatuslaporanidz = $rcekstatusreddidz->statuslaporan_id;			
			if(($cekstatusidz=='0'))
			{
		?>
				<? if(($cekstatusreffidz==NULL)||($cekstatusreffidz=='')){?>
					<? if($cekstatuslaporanidz=='SL001'){ ?>
					<table class="table table-condensed table-bordered table-hover" cellpadding="0" cellspacing="0" style="">
					<tbody>
							<tr>
								<td style="width:200px">
									<table>
										<?if(($userlevel=='1')){ 
											if(($pid!='')&&($uid!='')){	$pid = $_GET['pid'];$uid = $_GET['username'];
										?>
												<!--<tr><th style="border:0;">User Respond X1A : </th></tr>-->
												<tr><th style="border:0;">User Respond A(Request) : </th></tr>
												<tr><td style="border:0;"><? include("problem_userrespond.php");?></td></tr>
											<? } ?>													
										<? } ?>		
									</table>  
								</td>				
							</tr>				
					</tbody>		
					</table>
					<? }elseif($cekstatuslaporanidz=='SL002'){ ?>
					<table class="table table-condensed table-bordered table-hover" cellpadding="0" cellspacing="0" style="">
					<tbody>
							<tr>
								<td style="width:200px">
									<table>
										<?if(($userlevel=='1')){ 
											if(($pid!='')&&($uid!='')){	$pid = $_GET['pid'];$uid = $_GET['username'];
										?>
												<!--<tr><th style="border:0;">User Respond X1A : </th></tr>-->
												<tr><th style="border:0;">User Respond A(Problem) : </th></tr>
												<tr><td style="border:0;"><? include("problem_userrespondprob.php");?></td></tr>
											<? } ?>													
										<? } ?>		
									</table>  
								</td>				
							</tr>				
					</tbody>		
					</table>
					<? } ?>
				<? }elseif($cekstatusreffidz=='1'){ ?>
					<table class="table table-condensed table-bordered table-hover" cellpadding="0" cellspacing="0" style="">
					<tbody>
							<tr>
								<td style="width:200px">
									<table>
										<?if(($userlevel=='1')){ 
											if(($pid!='')&&($uid!='')){	$pid = $_GET['pid'];$uid = $_GET['username'];
										?>
											<tr><th style="border:0;">User Respond B : </th></tr>
										<!--	<tr><td style="border:0;"><!? include("problem_userrespond.php");?></td></tr>-->
											<tr><td style="border:0;"><? include("problem_userrespondprob.php");?></td></tr>
											<? }else{ ?>

											<? } ?>					
										
										<? } ?>
								
														
									</table>  
								</td>				
							</tr>				
					</tbody>		
					</table>
				<? } ?>		
			<? }elseif(($cekstatusidz=='1')){?>	
				<? if(($cekstatusreffidz==NULL)||($cekstatusreffidz=='')){?>
					<table class="table table-condensed table-bordered table-hover" cellpadding="0" cellspacing="0" style="">
					<tbody>
							<tr>
								<td style="width:200px">
									<table>
										<?if(($userlevel=='1')){ 
											if(($pid!='')&&($uid!='')){	$pid = $_GET['pid'];$uid = $_GET['username'];
										?>
											<tr><th style="border:0;">User Respond C : </th></tr>
											<tr><td style="border:0;"><? include("problem_userrespond.php");?></td></tr>
											<? }else{ ?>

											<? } ?>			
										
										<? } ?>
								
														
									</table>  
								</td>				
							</tr>				
					</tbody>		
					</table>
				<? }elseif($cekstatusreffidz=='1'){ ?>
					<table class="table table-condensed table-bordered table-hover" cellpadding="0" cellspacing="0" style="">
					<tbody>
							<tr>
								<td style="width:200px">
									<table>
										<?if(($userlevel=='1')){ 
											if(($pid!='')&&($uid!='')){	$pid = $_GET['pid'];$uid = $_GET['username'];
										?>
											<tr><th style="border:0;">User Respond D : </th></tr>
											<tr><td style="border:0;"><? include("problem_userrespond.php");?></td></tr>
											<? }else{ ?>

											<? } ?>					
										
										<? } ?>
								
														
									</table>  
								</td>				
							</tr>				
					</tbody>		
					</table>
				<? } ?>				
			<? } ?>	

		
	</div>
</div>
<!--<script type="text/javascript">
function checkHandle(obj) {
	var sel = obj.val();
	if (sel == 2) {$('#handleby').show();}
	else {$('#handleby').hide();}
}
</script> -->
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
					ticketuserfeedback_id: {
						required: "Feed Back ini Harus Dipilih"
						
					}
					
				}
			});
		});
</script>		