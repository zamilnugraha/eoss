<?php //if (empty($_BASE_PATH)) {header("location:index.php");} ?>
<link type="text/css" href="css/custom.css" rel="stylesheet" />
<link href="requestlist/css/bootstrap.min.css" rel="stylesheet" media="screen">

<? 
@session_start();
$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
$ticket_id = $_GET['pid'];
$ticketdetail_id = $_GET['pid'];
$userlevel = $_SESSION['user_level'];
?>
<?if(($userlevel=='99')||($userlevel=='100')||($userlevel=='101')||($userlevel=='102')
	||($userlevel=='103')||($userlevel=='104')||($userlevel=='1')){ /* For Super Admin */ ?>

      <form action="index.php?m=form&a=nappfusr&pid=<?=$_GET['pid']?>" method="post" enctype="multipart/form-data" id="form1" name="form1">
        <table width="100%" border="0">	
		<tr>
            <td valign="top">Kepada : <span class="note" style="color:red;">*</span></td>
            <td valign="top" style="width:600px;">
		<? 					
				if($ticket_id!='') {
					$qvtipelaporanviaby = mysql_query("SELECT ticket_type FROM ITH_TICKET_HEADER WHERE ticket_id = '$_GET[pid]'");	
					$rvtipelaporanviaby = mysql_fetch_object($qvtipelaporanviaby);	
		?>
					<? if($rvtipelaporanviaby->ticket_type=='1'){?>
					<? $statuslaporannameviaby = ucfirst($rvtipelaporanviaby->ticket_type); ?>
								<input type="radio" name="ticket_type" value="<?=$rvtipelaporanviaby->ticket_type?>" checked >&nbsp;<?='IT'?>&nbsp;
								<input type="radio" name="ticket_type" value="<?='2'?>">&nbsp;<?='FSD&nbsp;EAST'?>&nbsp;
								<input type="radio" name="ticket_type" value="<?='3'?>">&nbsp;<?='FSD&nbsp;WEST'?>&nbsp;
								<input type="radio" name="ticket_type" value="<?='4'?>">&nbsp;<?='SDD'?>&nbsp;
								<input type="radio" name="ticket_type" value="<?='5'?>" >&nbsp;<?='OPR&nbsp;EAST'?>&nbsp;
								<input type="radio" name="ticket_type" value="<?='8'?>" >&nbsp;<?='OPR&nbsp;WEST'?>&nbsp;
								<input type="radio" name="ticket_type" value="<?='9'?>" >&nbsp;<?='MKT'?>&nbsp;			
					<? }elseif($rvtipelaporanviaby->ticket_type=='2'){?>
					<? $statuslaporannameviaby = ucfirst($rvtipelaporanviaby->ticket_type); ?>
								<input type="radio" name="ticket_type" value="<?='1'?>">&nbsp;<?='IT'?>&nbsp;
								<input type="radio" name="ticket_type" value="<?=$rvtipelaporanviaby->ticket_type?>" checked >&nbsp;<?='FSD&nbsp;EAST'?>&nbsp;
								<input type="radio" name="ticket_type" value="<?='3'?>">&nbsp;<?='FSD&nbsp;WEST'?>&nbsp;
								<input type="radio" name="ticket_type" value="<?='4'?>">&nbsp;<?='SDD'?>&nbsp;	
								<input type="radio" name="ticket_type" value="<?='5'?>" >&nbsp;<?='OPR&nbsp;EAST'?>&nbsp;
								<input type="radio" name="ticket_type" value="<?='8'?>" >&nbsp;<?='OPR&nbsp;WEST'?>&nbsp;
								<input type="radio" name="ticket_type" value="<?='9'?>" >&nbsp;<?='MKT'?>&nbsp;										
					<? }elseif(($rvtipelaporanviaby->ticket_type=='3')){?>
					<? $statuslaporannameviaby = ucfirst($rvtipelaporanviaby->ticket_type); ?>
								<input type="radio" name="ticket_type" value="<?='1'?>">&nbsp;<?='IT'?>&nbsp;
								<input type="radio" name="ticket_type" value="<?='2'?>">&nbsp;<?='FSD&nbsp;EAST'?>&nbsp;
								<input type="radio" name="ticket_type" value="<?=$rvtipelaporanviaby->ticket_type?>" checked >&nbsp;<?='FSD&nbsp;WEST'?>&nbsp;
								<input type="radio" name="ticket_type" value="<?='4'?>">&nbsp;<?='SDD'?>&nbsp;
								<input type="radio" name="ticket_type" value="<?='5'?>" >&nbsp;<?='OPR&nbsp;EAST'?>&nbsp;
								<input type="radio" name="ticket_type" value="<?='8'?>" >&nbsp;<?='OPR&nbsp;WEST'?>&nbsp;
								<input type="radio" name="ticket_type" value="<?='9'?>" >&nbsp;<?='MKT'?>&nbsp;									
					<? }elseif(($rvtipelaporanviaby->ticket_type=='4')){?>
					<? $statuslaporannameviaby = ucfirst($rvtipelaporanviaby->ticket_type); ?>
								<input type="radio" name="ticket_type" value="<?='1'?>">&nbsp;<?='IT'?>&nbsp;
								<input type="radio" name="ticket_type" value="<?='2'?>">&nbsp;<?='FSD&nbsp;EAST'?>&nbsp;
								<input type="radio" name="ticket_type" value="<?='3'?>">&nbsp;<?='FSD&nbsp;WEST'?>&nbsp;
								<input type="radio" name="ticket_type" value="<?=$rvtipelaporanviaby->ticket_type?>" checked >&nbsp;<?='SDD'?>&nbsp;
								<input type="radio" name="ticket_type" value="<?='5'?>" >&nbsp;<?='OPR&nbsp;EAST'?>&nbsp;
								<input type="radio" name="ticket_type" value="<?='8'?>" checked>&nbsp;<?='OPR&nbsp;WEST'?>&nbsp;
								<input type="radio" name="ticket_type" value="<?='9'?>">&nbsp;<?='MKT'?>&nbsp;								
					<? }elseif(($rvtipelaporanviaby->ticket_type=='5')){?>
					<? $statuslaporannameviaby = ucfirst($rvtipelaporanviaby->ticket_type); ?>
								<input type="radio" name="ticket_type" value="<?='1'?>">&nbsp;<?='IT'?>&nbsp;
								<input type="radio" name="ticket_type" value="<?='2'?>">&nbsp;<?='FSD&nbsp;EAST'?>&nbsp;
								<input type="radio" name="ticket_type" value="<?='3'?>">&nbsp;<?='FSD&nbsp;WEST'?>&nbsp;
								<input type="radio" name="ticket_type" value="<?='4'?>" >&nbsp;<?='SDD'?>&nbsp;
								<input type="radio" name="ticket_type" value="<?=$rvtipelaporanviaby->ticket_type?>" checked>&nbsp;<?='OPR&nbsp;EAST'?>&nbsp;
								<input type="radio" name="ticket_type" value="<?='8'?>">&nbsp;<?='OPR&nbsp;WEST'?>&nbsp;
								<input type="radio" name="ticket_type" value="<?='9'?>">&nbsp;<?='MKT'?>&nbsp;
					<? }elseif(($rvtipelaporanviaby->ticket_type=='8')){?>
					<? $statuslaporannameviaby = ucfirst($rvtipelaporanviaby->ticket_type); ?>
								<input type="radio" name="ticket_type" value="<?='1'?>">&nbsp;<?='IT'?>&nbsp;
								<input type="radio" name="ticket_type" value="<?='2'?>">&nbsp;<?='FSD&nbsp;EAST'?>&nbsp;
								<input type="radio" name="ticket_type" value="<?='3'?>">&nbsp;<?='FSD&nbsp;WEST'?>&nbsp;
								<input type="radio" name="ticket_type" value="<?='4'?>" >&nbsp;<?='SDD'?>&nbsp;
								<input type="radio" name="ticket_type" value="<?='5'?>" >&nbsp;<?='OPR&nbsp;EAST'?>&nbsp;
								<input type="radio" name="ticket_type" value="<?=$rvtipelaporanviaby->ticket_type?>" checked>&nbsp;<?='OPR&nbsp;WEST'?>&nbsp;
								<input type="radio" name="ticket_type" value="<?='9'?>">&nbsp;<?='MKT'?>&nbsp;
					<? }elseif(($rvtipelaporanviaby->ticket_type=='9')){?>
					<? $statuslaporannameviaby = ucfirst($rvtipelaporanviaby->ticket_type); ?>
								<input type="radio" name="ticket_type" value="<?='1'?>">&nbsp;<?='IT'?>&nbsp;
								<input type="radio" name="ticket_type" value="<?='2'?>">&nbsp;<?='FSD&nbsp;EAST'?>&nbsp;
								<input type="radio" name="ticket_type" value="<?='3'?>">&nbsp;<?='FSD&nbsp;WEST'?>&nbsp;
								<input type="radio" name="ticket_type" value="<?='4'?>" >&nbsp;<?='SDD'?>&nbsp;
								<input type="radio" name="ticket_type" value="<?='5'?>" >&nbsp;<?='OPR&nbsp;EAST'?>&nbsp;
								<input type="radio" name="ticket_type" value="<?='8'?>" >&nbsp;<?='OPR&nbsp;WEST'?>&nbsp;
								<input type="radio" name="ticket_type" value="<?=$rvtipelaporanviaby->ticket_type?>" checked>&nbsp;<?='MKT'?>&nbsp;
					<?}elseif($rvtipelaporanviaby->ticket_type=='')	
					$qtilap = mysql_query("SELECT kode_departemen,nama_departemen FROM ith_departemen WHERE kode_departemen NOT IN('6')
					ORDER BY departemen_id ASC'");				
					while($rtilap = mysql_fetch_object($qtilap)) {
						$statuslaporannameviaby = ucfirst($rtilap->ticket_type);
				?>
				 <input type="radio" class="required" name="ticket_type" value="<?=$rtilap->ticket_type?>">&nbsp;<?=$statuslaporannameviaby?>&nbsp;						
		
			    <? } } ?>
			<!--	<script>
				$(document).ready(function () {
				$('input[type = "radio"]').change(function () {
					this.checked = false;
				});
				function myFunction() {
					document.getElementById("cek").disabled = true;
				}
			});
				</script> -->
					<script>
					  var checkboxes = {};
					  function setValue(el) {
						if(!(el.id in checkboxes))
						  checkboxes[el.id] = el.checked;
					  }
					  function retainValue(el) {
						if(!(el.id in checkboxes))
						  checkboxes[el.id] = el.checked;
						el.checked = checkboxes[el.id];
					  }
					</script>				
					<script>
					function check() {
						document.getElementById("1").checked = true;
					}
					function uncheck() {
						document.getElementById("1").checked = false;
					}
					</script>	
			</td>			 
			 <p style="color:red;"><?php echo ($error['ticket_type']) ? $error['ticket_type'] : ''; ?></p>
        </tr>		
		<tr>
		 <td valign="top">Request Via :  <span class="note" style="color:red;">*</span></td>
            <td valign="top">
		<? 					
				if($ticket_id!='') {
					$qvtipelaporanviaby = mysql_query("SELECT ticket_viaby FROM ITH_TICKET_HEADER WHERE ticket_id = '$_GET[pid]'");	
					$rvtipelaporanviaby = mysql_fetch_object($qvtipelaporanviaby);	
		?>
					<? if($rvtipelaporanviaby->ticket_viaby=='By Phone'){?>
					<? $statuslaporannameviaby = ucfirst($rvtipelaporanviaby->ticket_viaby); ?>
								<input type="radio" id="ticket_viaby" name="ticket_viaby" value="<?=$rvtipelaporanviaby->ticket_viaby?>" checked readonly="readonly" disabled>&nbsp;<?=$statuslaporannameviaby?>&nbsp;
								<input type="radio" id="ticket_viaby" name="ticket_viaby" value="<?='By Email'?>" readonly="readonly" disabled>&nbsp;<?='By Email'?>&nbsp;
								<input type="radio" id="ticket_viaby" name="ticket_viaby" value="<?='By Web'?>" readonly="readonly" disabled>&nbsp;<?='By Web'?>&nbsp;
					<script>jQuery("#ticket_viaby").prop('disabled', 'disabled');</script>
					<? }elseif($rvtipelaporanviaby->ticket_viaby=='By Email'){?>
					<? $statuslaporannameviaby = ucfirst($rvtipelaporanviaby->ticket_viaby); ?>
								<input type="radio" id="ticket_viaby" name="ticket_viaby" value="<?='By Phone'?>" readonly="readonly" disabled>&nbsp;<?='By Phone'?>&nbsp;
								<input type="radio" id="ticket_viaby" name="ticket_viaby" value="<?=$rvtipelaporanviaby->ticket_viaby?>" checked readonly="readonly" disabled>&nbsp;<?=$statuslaporannameviaby?>&nbsp;
								<input type="radio" id="ticket_viaby" name="ticket_viaby" value="<?='By Web'?>" readonly="readonly" disabled>&nbsp;<?='By Web'?>&nbsp;
					<script>jQuery("#ticket_viaby").prop('disabled', 'disabled');</script>
					<? }elseif(($rvtipelaporanviaby->ticket_viaby=='Via Web')||($rvtipelaporanviaby->ticket_viaby=='By Web')){?>
					<? $statuslaporannameviaby = ucfirst($rvtipelaporanviaby->ticket_viaby); ?>
								<input type="radio" id="ticket_viaby" name="ticket_viaby" value="<?='By Phone'?>" readonly="readonly" disabled>&nbsp;<?='By Phone'?>&nbsp;
								<input type="radio" id="ticket_viaby" name="ticket_viaby" value="<?='By Email'?>" readonly="readonly" disabled>&nbsp;<?='By Email'?>&nbsp;
								<input type="radio" id="ticket_viaby" name="ticket_viaby" value="<?=$rvtipelaporanviaby->ticket_viaby?>" checked readonly="readonly" disabled>&nbsp;<?=$statuslaporannameviaby?>&nbsp;
					<script>jQuery("#ticket_viaby").prop('disabled', 'disabled');</script>
					<?}elseif($rvtipelaporanviaby->ticket_viaby=='')	
					$qtilap = mysql_query("SELECT ticket_viaby FROM ITH_TICKET_HEADER ORDER BY ticket_viaby ASC");				
					while($rtilap = mysql_fetch_object($qtilap)) {
						$statuslaporannameviaby = ucfirst($rtilap->ticket_viaby);
				?>
				 <input type="radio" class="required" name="ticket_viaby" value="<?=$rtilap->ticket_viaby?>">&nbsp;<?=$statuslaporannameviaby?>&nbsp;						
		
			    <? } } ?>
				
					<script>
					function check() {
						document.getElementById("1").checked = true;
					}
					function uncheck() {
						document.getElementById("1").checked = false;
					}
					</script>	
			</td>		
		</tr>
		<tr>
		 <td valign="top">Skala Prioritas :  <span class="note" style="color:red;">*</span></td>
            <td valign="top">
		<? 					
				if($ticket_id!='') {
					$qvskalapriority = mysql_query("SELECT ITH_TICKET_HEADER.ticketpriority_id, ITH_TICKETPRIORITY.ticketpriority_name
					FROM ITH_TICKET_HEADER 
					LEFT JOIN ITH_TICKETPRIORITY ON  ITH_TICKETPRIORITY.ticketpriority_id = ITH_TICKET_HEADER.ticketpriority_id
					WHERE ITH_TICKET_HEADER.ticket_id = '$_GET[pid]'");	
					$rvskalapriority = mysql_fetch_object($qvskalapriority);	
		?>
					<? if($rvskalapriority->ticketpriority_id=='1'){?>
					<? $skalapriority = ucfirst($rvskalapriority->ticketpriority_name); ?>
								<input type="radio" class="required" name="ticketpriority_id" value="<?=$rvskalapriority->ticketpriority_id?>" checked >&nbsp;<?=$skalapriority?>&nbsp;
								<input type="radio" class="required" name="ticketpriority_id" value="<?='2'?>">&nbsp;<?='Medium'?>&nbsp;
								<input type="radio" class="required" name="ticketpriority_id" value="<?='3'?>">&nbsp;<?='Low'?>&nbsp;
					<? }elseif($rvskalapriority->ticketpriority_id=='2'){?>
					<? $skalapriority = ucfirst($rvskalapriority->ticketpriority_name); ?>
								<input type="radio" class="required" name="ticketpriority_id" value="<?='1'?>">&nbsp;<?='High'?>&nbsp;
								<input type="radio" class="required" name="ticketpriority_id" value="<?=$rvskalapriority->ticketpriority_id?>" checked >&nbsp;<?=$skalapriority?>&nbsp;
								<input type="radio" class="required" name="ticketpriority_id" value="<?='3'?>">&nbsp;<?='Low'?>&nbsp;
					<? }elseif($rvskalapriority->ticketpriority_id=='3'){?>
					<? $skalapriority = ucfirst($rvskalapriority->ticketpriority_name); ?>
								<input type="radio" class="required" name="ticketpriority_id" value="<?='1'?>">&nbsp;<?='High'?>&nbsp;
								<input type="radio" class="required" name="ticketpriority_id" value="<?='2'?>">&nbsp;<?='Medium'?>&nbsp;
								<input type="radio" class="required" name="ticketpriority_id" value="<?=$rvskalapriority->ticketpriority_id?>" checked >&nbsp;<?=$skalapriority?>&nbsp;
					<?}elseif($rvskalapriority->ticketpriority_id=='')	
					$qtilap = mysql_query("SELECT ticketpriority_id,ticketpriority_name FROM ITH_TICKETPRIORITY ORDER BY ticketpriority_id ASC");				
					while($rtilap = mysql_fetch_object($qtilap)) {
						$skalapriority = ucfirst($rtilap->ticketpriority_name);
				?>
				 <input type="radio" class="required" name="ticketpriority_id" value="<?=$rtilap->ticketpriority_id?>">&nbsp;<?=$skalapriority?>&nbsp;						
		
			    <? } } ?>
				
					<script>
					function check() {
						document.getElementById("1").checked = true;
					}
					function uncheck() {
						document.getElementById("1").checked = false;
					}
					</script>	
			</td>		
		</tr>
		<tr>
		 <td valign="top">Tipe Laporan :  <span class="note" style="color:red;">*</span></td>
            <td valign="top">
		<? 
					
				if($ticket_id!='') {
					$qvtipelaporan = mysql_query("SELECT ITHHD.*, ITHSL.* FROM ITH_TICKET_HEADER ITHHD 
					LEFT JOIN ITH_STATUSLAPORAN ITHSL ON ITHHD.statuslaporan_id = ITHSL.statuslaporan_id
					WHERE ITHHD.ticket_id = '$_GET[pid]'");	
					$rvtipelaporan = mysql_fetch_object($qvtipelaporan);	
		?>
					<? if($rvtipelaporan->statuslaporan_id=='SL001'){?>
					<? $statuslaporanname = strtoupper($rvtipelaporan->statuslaporan_name); ?>
								<input type="radio" name="statuslaporan_id" value="<?=$rvtipelaporan->statuslaporan_id?>" checked >&nbsp;<?=$statuslaporanname?>&nbsp;
								<input type="radio" name="statuslaporan_id" value="<?='SL002'?>">&nbsp;<?='PROBLEM'?>&nbsp;
					<? }elseif($rvtipelaporan->statuslaporan_id=='SL002'){?>
					<? $statuslaporanname = strtoupper($rvtipelaporan->statuslaporan_name); ?>
								<input type="radio" name="statuslaporan_id" value="<?='SL001'?>">&nbsp;<?='REQUEST'?>&nbsp;
								<input type="radio" name="statuslaporan_id" value="<?=$rvtipelaporan->statuslaporan_id?>" checked >&nbsp;<?=$statuslaporanname?>&nbsp;
					<?}elseif($rvtipelaporan->statuslaporan_id=='')	
					$qtilap = mysql_query("SELECT statuslaporan_id, statuslaporan_name FROM ITH_STATUSLAPORAN
					ORDER BY statuslaporan_no ASC");				
					while($rtilap = mysql_fetch_object($qtilap)) {
						$statuslaporanname = strtoupper($rtilap->statuslaporan_name);
				?>
				 <input type="radio" class="required" name="statuslaporan_id" value="<?=$rtilap->statuslaporan_id?>">&nbsp;<?=$statuslaporanname?>&nbsp;						
		
			    <? } } ?>
				
					<script>
					function check() {
						document.getElementById("1").checked = true;
					}
					function uncheck() {
						document.getElementById("1").checked = false;
					}
					</script>	
			</td>		
		</tr>
          <tr>
            <td width="25%"><br></td>
            <td width="76%"><br>
			</td>
          </tr>		
          <tr>
            <td width="25%" valign="top">Subject<span class="note" style="color:red;">*</span></td>
			<? 
				$qceksubjet = mysql_query("SELECT ticket_subject FROM ITH_TICKET_HEADER WHERE ticket_id = '$_GET[pid]'");
				$rceksubject = mysql_fetch_object($qceksubjet);
			?>
            <td width="76%" valign="top"><input type="text" class="required" name="ticket_subject" id="ticket_subject" class="required" value="<?=$rceksubject->ticket_subject?>" style="width:100%;">
			<p style="color:red;"><?php echo ($error['ticket_subject']) ? $error['ticket_subject'] : ''; ?></p></td>
          </tr>			
		  <?if($_SESSION['user_level']=='100'){?>
		<tr>
            <td valign="top">Category :  <span class="note" style="color:red;">*</span></td>
            <td valign="top">
				<!--<select class="input-medium" style="width:320px;" name="ticketsubcategory2_code">-->
				<select class="requied" style="width:320px;" name="ticketsubcategory2_code">
				
				<!--?
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
					$qvcatx = mysql_query("SELECT ITH_TICKETCATEGORYNEW.ticketsubcategory2_code, ITH_TICKETCATEGORYNEW.ticketsubcategory2_name,
					ITH_TICKETCATEGORYNEW.ticketsubcategory_code,ITH_TICKETCATEGORYNEW.ticketcategory_code,
					ITH_TICKETCATEGORYNEW_MASTER.ticketcategory_name
					FROM ITH_TICKETCATEGORYNEW 
					LEFT JOIN ITH_TICKETCATEGORYNEW_MASTER ON ITH_TICKETCATEGORYNEW.ticketcategory_code = ITH_TICKETCATEGORYNEW_MASTER.ticketcategory_code
					LEFT JOIN ITH_TICKETSUBCATEGORYNEW_MASTER ON ITH_TICKETCATEGORYNEW.ticketsubcategory_code = ITH_TICKETSUBCATEGORYNEW_MASTER.ticketsubcategory_code
					WHERE ITH_TICKETCATEGORYNEW.ticketcategory_id IN ('1','2','3','4','5')
					ORDER by ticketsubcategory2_code ASC");				
				if($ticket_id!='') {
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con);
					//@session_start();
					$qvcat = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETCATEGORYNEW.ticketsubcategory2_code, 
					ITH_TICKETCATEGORYNEW.ticketsubcategory2_name, ITH_TICKETCATEGORYNEW.ticketcategory_name FROM ITH_TICKET_HEADER 
					LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKETCATEGORYNEW.ticketsubcategory2_code = ITH_TICKET_HEADER.ticketsubcategory_code
					WHERE ITH_TICKET_HEADER.ticket_id= '$_GET[pid]' AND ITH_TICKETCATEGORYNEW.ticketcategory_id IN ('1','2','3','4','5')");
					
					$rvcat = mysql_fetch_object($qvcat);
						echo "<option value= '-'> - </option>";
						echo "<option value= '$rvcat->ticketsubcategory2_code' style=background:red;color:#fff;> $rvcat->ticketsubcategory2_name</option>";
				}				
				echo "<option value= '-'> - </option>";
				while($rvcatx = mysql_fetch_object($qvcatx)) 
				{
					
						echo "<option value= '$rvcatx->ticketsubcategory2_code'> $rvcatx->ticketsubcategory2_name ($rvcatx->ticketcategory_name)</option>";
				}
				?-->
				<?
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
					$qvcatx = mysql_query("SELECT
					ITH_TICKETCATEGORYNEW.ticketcategory_iddepartemen,
					ITH_TICKETCATEGORYNEW.ticketsubcategory2_code, 
					ITH_TICKETCATEGORYNEW.ticketsubcategory2_name,
					ITH_TICKETCATEGORYNEW.ticketsubcategory_code,
					ITH_TICKETCATEGORYNEW.ticketcategory_code,
					ITH_TICKETCATEGORYNEW_MASTER.ticketcategory_name
					FROM ITH_TICKETCATEGORYNEW 
					LEFT JOIN ITH_TICKETCATEGORYNEW_MASTER ON ITH_TICKETCATEGORYNEW.ticketcategory_code = ITH_TICKETCATEGORYNEW_MASTER.ticketcategory_code
					WHERE ITH_TICKETCATEGORYNEW.ticketcategory_iddepartemen = '1' AND ticketsubcategory2_code != ''
					ORDER BY ticketsubcategory2_code ASC");				
				if($ticket_id!='') {
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con);
					//@session_start();
					$qvcat = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETCATEGORYNEW.ticketsubcategory2_code, 
					ITH_TICKETCATEGORYNEW.ticketsubcategory2_name FROM ITH_TICKET_HEADER 
					LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKETCATEGORYNEW.ticketsubcategory2_code = ITH_TICKET_HEADER.ticketsubcategory_code
					WHERE ITH_TICKET_HEADER.ticket_id= '$_GET[pid]' AND ITH_TICKETCATEGORYNEW.ticketcategory_iddepartemen = '1'");
					
					$rvcat = mysql_fetch_object($qvcat);
					if($rvcat->ticketsubcategory_code == NULL)
					{
						#echo "<option value= '-'> - </option>";
						#echo "<option value= '$rvcat->ticketsubcategory2_code' style=background:red;color:#fff;> $rvcat->ticketsubcategory2_name</option>";
					}elseif(($rvcat->ticketsubcategory_code != NULL)||($rvcat->ticketsubcategory_code != '-'))
					{					
						
						echo "<option value= '$rvcat->ticketsubcategory_code' style=background:red;color:#fff;> $rvcat->ticketsubcategory2_name</option>";					
					}				
				}				
				#echo "<option value= '-'> - </option>";
				while($rvcatx = mysql_fetch_object($qvcatx)) 
				{
						#echo "<table><tr><td><option value= '$rvcatx->ticketsubcategory2_code'></option></td></tr></table>":
						echo "<option value= '$rvcatx->ticketsubcategory2_code'> $rvcatx->ticketsubcategory2_name ($rvcatx->ticketcategory_name)</option>";
				}
				?>					
				</select>			
			 </td>
        </tr>
		<tr>
            <td valign="top">Approval 1:  <span class="note" style="color:red;display:none;">*</span></td>
            <td valign="top">
				<select class="input-medium" style="width:320px;" name="ticketcategory_aprvlbynik1">	
				<?
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
				/*	$qvcatx2 = mysql_query("SELECT user_nik, user_realname,userdepartemen_id FROM ITH_USER WHERE udept_id = '$_SESSION[udeptid]' 
					AND userlevel_id IN('1001','1000') ORDER BY user_realname ASC");	
				*/	$qvcatx2 = mysql_query("SELECT user_nik, user_realname,userdepartemen_id, udept_id, nama_jabatan, usergroup_id FROM ITH_USER WHERE 
					(udept_id NOT IN('SDD','FSD') AND userdepartemen_id != 'IT Solution') 
					AND userlevel_id IN('1001','1000','8','4','3') GROUP BY udept_id, user_realname ASC");		
				if($ticketdetail_id!='') 
				{
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con);
					//@session_start();
					$qvaprvl1a = mysql_query("SELECT ticketapproval_id1, ticketapproval_by1 FROM ITH_TICKET_HEADER 
					WHERE ticket_id= '$_GET[pid]'");
					$rvaprvl1a = mysql_fetch_object($qvaprvl1a);
					if($rvaprvl1a->ticketapproval_id1 == NULL)
					{
						echo "<option value= ''> - </option>";
						echo "<option value= '$rvaprvl1a->ticketapproval_id1' style=background:red;color:#fff;> $rvaprvl1a->ticketapproval_by1</option>";
					}elseif($rvaprvl1a->ticketapproval_id1 != NULL){
						echo "<option value= '$rvaprvl1a->ticketapproval_id1' style=background:red;color:#fff;> $rvaprvl1a->ticketapproval_by1</option>";
					}
				}
				echo "<option value= '-'> - </option>";
				while($rvcatx2 = mysql_fetch_object($qvcatx2)) 
				{
						echo "<option value= '$rvcatx2->user_nik'>$rvcatx2->user_realname ($rvcatx2->user_nik - $rvcatx2->nama_jabatan)</option>";
				}
				?>
				</select>					
			 </td>
        </tr>		
		<!--<tr style="display:none;">-->
		<tr>
            <td valign="top">Approval 2:  <span class="note" style="color:red;display:none;">*</span></td>
            <td valign="top">
				<select class="input-medium" style="width:320px;" name="ticketcategory_aprvlbynik2">	
				<?
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
				/*	$qvcatx3 = mysql_query("SELECT user_nik, user_realname,userdepartemen_id FROM ITH_USER WHERE udept_id = '$_SESSION[udeptid]' 
					AND userlevel_id IN('1001','1000') ORDER BY user_realname ASC"); */			
					$qvcatx3 = mysql_query("SELECT user_nik, user_realname,userdepartemen_id, udept_id, nama_jabatan, usergroup_id FROM ITH_USER WHERE 
					(udept_id NOT IN('SDD','FSD') AND userdepartemen_id != 'IT Solution') 
					AND userlevel_id IN('1001','1000','8','4','3') GROUP BY udept_id, user_realname ASC");	
				if($ticketdetail_id!='')
				{
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con);
					//@session_start();
					$qvaprvl1b = mysql_query("SELECT ticketapproval_id2, ticketapproval_by2 FROM ITH_TICKET_HEADER 
					WHERE ticket_id= '$_GET[pid]'");
					$rvaprvl1b = mysql_fetch_object($qvaprvl1b);
					if($rvaprvl1b->ticketapproval_id2 == NULL)
					{
						echo "<option value= ''> - </option>";
						echo "<option value= '$rvaprvl1b->ticketapproval_id2' style=background:red;color:#fff;> $rvaprvl1b->ticketapproval_by1</option>";
					}elseif($rvaprvl1b->ticketapproval_id2 != NULL){
						echo "<option value= '$rvaprvl1b->ticketapproval_id2' style=background:red;color:#fff;> $rvaprvl1b->ticketapproval_by2</option>";
					}				
				}
				echo "<option value= '-'> - </option>";
				while($rvcatx3 = mysql_fetch_object($qvcatx3)) 
				{
						echo "<option value= '$rvcatx3->user_nik'>$rvcatx3->user_realname ($rvcatx3->user_nik - $rvcatx3->nama_jabatan)</option>";
				}
				?>
				</select>				
			 </td>
        </tr>
		<tr>
            <td valign="top">Approval_x1 3:  <span class="note" style="color:red;display:none;">*</span></td>
            <td valign="top">
				<select class="input-medium" style="width:320px;" name="ticketcategory_aprvlbynik3">	
				<?
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
			/*		$qvcatx4 = mysql_query("SELECT user_nik, user_realname,userdepartemen_id FROM ITH_USER WHERE udept_id = '$_SESSION[udeptid]' 
					AND userlevel_id IN('1001','1000') ORDER BY user_realname ASC");		*/	
					$qvcatx4 = mysql_query("SELECT user_nik, user_realname,userdepartemen_id, udept_id, nama_jabatan, usergroup_id FROM ITH_USER WHERE 
					(udept_id NOT IN('SDD','FSD') AND userdepartemen_id != 'IT Solution') 
					AND userlevel_id IN('1001','1000','8','4','3') GROUP BY udept_id, user_realname ASC");		
				if($ticketdetail_id!='') 
				{
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con);
					//@session_start();
					$qvaprvl1c = mysql_query("SELECT ticketapproval_id3, ticketapproval_by3 FROM ITH_TICKET_HEADER 
					WHERE ticket_id= '$_GET[pid]'");
					$rvaprvl1c = mysql_fetch_object($qvaprvl1c);
					if($rvaprvl1c->ticketapproval_id3 == NULL)
					{
						echo "<option value= ''> - </option>";
						echo "<option value= '$rvaprvl1c->ticketapproval_id3' style=background:red;color:#fff;> $rvaprvl1c->ticketapproval_by3</option>";
					}elseif($rvaprvl1c->ticketapproval_id3 != NULL){
						echo "<option value= '$rvaprvl1c->ticketapproval_id3' style=background:red;color:#fff;> $rvaprvl1c->ticketapproval_by3</option>";
					}					
				}
				echo "<option value= '-'> - </option>";
				while($rvcatx4 = mysql_fetch_object($qvcatx4)) 
				{
						echo "<option value= '$rvcatx4->user_nik'>$rvcatx4->user_realname ($rvcatx4->user_nik - $rvcatx4->nama_jabatan)</option>";
				}
				?>
				</select>			
			 </td>
        </tr>		
		  <? }elseif($_SESSION['user_level']=='101'){?>
		<tr>
            <td valign="top">Category:  <span class="note" style="color:red;">*</span></td>
            <td valign="top">
				<!--<select class="input-medium" style="width:320px;" name="ticketsubcategory2_code">-->
				<select class="requied" style="width:320px;" name="ticketsubcategory2_code">
				<?
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
					$qvcatx = mysql_query("SELECT ITH_TICKETCATEGORYNEW.ticketsubcategory2_code, ITH_TICKETCATEGORYNEW.ticketsubcategory2_name,
					ITH_TICKETCATEGORYNEW.ticketsubcategory_code,ITH_TICKETCATEGORYNEW.ticketcategory_code,
					ITH_TICKETCATEGORYNEW_MASTER.ticketcategory_name
					FROM ITH_TICKETCATEGORYNEW 
					LEFT JOIN ITH_TICKETCATEGORYNEW_MASTER ON ITH_TICKETCATEGORYNEW.ticketcategory_code = ITH_TICKETCATEGORYNEW_MASTER.ticketcategory_code
					WHERE ITH_TICKETCATEGORYNEW.ticketcategory_iddepartemen IN ('2','3') AND ITH_TICKETCATEGORYNEW_MASTER.ticketcategory_name !=''
					ORDER by ticketsubcategory2_code ASC");				
				if($ticket_id!='') {
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con);
					//@session_start();
					$qvcat = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETCATEGORYNEW.ticketsubcategory2_code, 
					ITH_TICKETCATEGORYNEW.ticketsubcategory2_name FROM ITH_TICKET_HEADER  
					LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKETCATEGORYNEW.ticketsubcategory2_code = ITH_TICKET_HEADER.ticketsubcategory_code
					WHERE ITH_TICKET_HEADER.ticket_id= '$_GET[pid]' AND ITH_TICKETCATEGORYNEW.ticketcategory_iddepartemen IN ('2','3')");
					
					$rvcat = mysql_fetch_object($qvcat);
					if($rvcat->ticketsubcategory_code == NULL)
					{
						#echo "<option value= '-'> - </option>";
						#echo "<option value= '$rvcat->ticketsubcategory2_code' style=background:red;color:#fff;> $rvcat->ticketsubcategory2_name</option>";
					}elseif(($rvcat->ticketsubcategory_code != NULL)||($rvcat->ticketsubcategory_code != '-'))
					{					
						
						echo "<option value= '$rvcat->ticketsubcategory_code' style=background:red;color:#fff;> $rvcat->ticketsubcategory2_name</option>";					
					}	
				}				
				#echo "<option value= '-'> - </option>";
				while($rvcatx = mysql_fetch_object($qvcatx)) 
				{
					
						echo "<option value= '$rvcatx->ticketsubcategory2_code'> $rvcatx->ticketsubcategory2_name ($rvcatx->ticketcategory_name)</option>";
				}
				?>				
				</select>			
			 </td>
        </tr>
		<tr>
            <td valign="top">Approval 1:  <span class="note" style="color:red;display:none;">*</span></td>
            <td valign="top">
				<select class="input-medium" style="width:320px;" name="ticketcategory_aprvlbynik1">	
				<?
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
				/*	$qvcatx2 = mysql_query("SELECT user_nik, user_realname,userdepartemen_id FROM ITH_USER WHERE udept_id = '$_SESSION[udeptid]' 
					AND userlevel_id IN('1001','1000') ORDER BY user_realname ASC");	
				*/	$qvcatx2 = mysql_query("SELECT user_nik, user_realname,userdepartemen_id, udept_id, nama_jabatan, usergroup_id FROM ITH_USER WHERE 
								(udept_id NOT IN('IT','SDD') AND userdepartemen_id != 'IT Solution') 
								AND userlevel_id IN('1001','1000','8','4','3') GROUP BY udept_id, user_realname ASC");		
				if($ticketdetail_id!='') {
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con);
					//@session_start();
					$qvaprvl1a = mysql_query("SELECT ticketapproval_id1, ticketapproval_by1 FROM ITH_TICKET_HEADER 
					WHERE ticket_id= '$_GET[pid]'");
					$rvaprvl1a = mysql_fetch_object($qvaprvl1a);
					if($rvaprvl1a->ticketapproval_id1 == NULL)
					{
						echo "<option value= '-'> - </option>";
					#	echo "<option value= '$rvaprvl1a->ticketapproval_id1' style=background:red;color:#fff;> $rvaprvl1a->ticketapproval_by1</option>";
					}elseif($rvaprvl1a->ticketapproval_id1 != NULL){
						echo "<option value= '$rvaprvl1a->ticketapproval_id1' style=background:red;color:#fff;> $rvaprvl1a->ticketapproval_by1</option>";
					}				
				}
				echo "<option value= '-'> - </option>";
				while($rvcatx2 = mysql_fetch_object($qvcatx2)) 
				{
						echo "<option value= '$rvcatx2->user_nik'>$rvcatx2->user_realname ($rvcatx2->user_nik - $rvcatx2->nama_jabatan)</option>";
				}
				?>
				</select>					
			 </td>
        </tr>		
		<!--<tr style="display:none;">-->
		<tr>
            <td valign="top">Approval 2:  <span class="note" style="color:red;display:none;">*</span></td>
            <td valign="top">
				<select class="input-medium" style="width:320px;" name="ticketcategory_aprvlbynik2">	
				<?
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
				/*	$qvcatx3 = mysql_query("SELECT user_nik, user_realname,userdepartemen_id FROM ITH_USER WHERE udept_id = '$_SESSION[udeptid]' 
					AND userlevel_id IN('1001','1000') ORDER BY user_realname ASC"); */			
					$qvcatx3 = mysql_query("SELECT user_nik, user_realname,userdepartemen_id, udept_id, nama_jabatan, usergroup_id FROM ITH_USER WHERE 
								(udept_id NOT IN('IT','SDD') AND userdepartemen_id != 'IT Solution') 
								AND userlevel_id IN('1001','1000','8','4','3') GROUP BY udept_id, user_realname ASC");			
				if($ticketdetail_id!='') {
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con);
					//@session_start();
					$qvaprvl1b = mysql_query("SELECT ticketapproval_id2, ticketapproval_by2 FROM ITH_TICKET_HEADER 
					WHERE ticket_id= '$_GET[pid]'");
					$rvaprvl1b = mysql_fetch_object($qvaprvl1b);
					if($rvaprvl1b->ticketapproval_id2 == NULL)
					{
						echo "<option value= '-'> - </option>";
					#	echo "<option value= '$rvaprvl1b->ticketapproval_id2' style=background:red;color:#fff;> $rvaprvl1b->ticketapproval_by1</option>";
					}elseif($rvaprvl1b->ticketapproval_id2 != NULL){
						echo "<option value= '$rvaprvl1b->ticketapproval_id2' style=background:red;color:#fff;> $rvaprvl1b->ticketapproval_by2</option>";
					}				
				}
				echo "<option value= '-'> - </option>";
				while($rvcatx3 = mysql_fetch_object($qvcatx3)) 
				{
						echo "<option value= '$rvcatx3->user_nik'>$rvcatx3->user_realname ($rvcatx3->user_nik - $rvcatx3->nama_jabatan)</option>";
				}
				?>
				</select>				
			 </td>
        </tr>
		<tr>
            <td valign="top">Approval X2 3:  <span class="note" style="color:red;display:none;">*</span></td>
            <td valign="top">
				<select class="input-medium" style="width:320px;" name="ticketcategory_aprvlbynik3">	
				<?
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
			/*		$qvcatx4 = mysql_query("SELECT user_nik, user_realname,userdepartemen_id FROM ITH_USER WHERE udept_id = '$_SESSION[udeptid]' 
					AND userlevel_id IN('1001','1000') ORDER BY user_realname ASC");		*/	
					$qvcatx4 = mysql_query("SELECT user_nik, user_realname,userdepartemen_id, udept_id, nama_jabatan, usergroup_id FROM ITH_USER WHERE 
								(udept_id NOT IN('IT','SDD') AND userdepartemen_id != 'IT Solution') 
								AND userlevel_id IN('1001','1000','8','4','3') GROUP BY udept_id, user_realname ASC");			
				if($ticketdetail_id!='') {
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con);
					//@session_start();
					$qvaprvl1c = mysql_query("SELECT ticketapproval_id3, ticketapproval_by3 FROM ITH_TICKET_HEADER 
					WHERE ticket_id= '$_GET[pid]'");
					$rvaprvl1c = mysql_fetch_object($qvaprvl1c);
					if($rvaprvl1c->ticketapproval_id3 == NULL)
					{
						echo "<option value= '-'> - </option>";
					#	echo "<option value= '$rvaprvl1c->ticketapproval_id3' style=background:red;color:#fff;> $rvaprvl1c->ticketapproval_by3</option>";
					}elseif($rvaprvl1c->ticketapproval_id3 != NULL){
						echo "<option value= '$rvaprvl1c->ticketapproval_id3' style=background:red;color:#fff;> $rvaprvl1c->ticketapproval_by3</option>";
					}
				}
				echo "<option value= '-'> - </option>";
				while($rvcatx4 = mysql_fetch_object($qvcatx4)) 
				{
						echo "<option value= '$rvcatx4->user_nik'>$rvcatx4->user_realname ($rvcatx4->user_nik - $rvcatx4->nama_jabatan)</option>";
				}
				?>
				</select>			
			 </td>
        </tr>	
		  <tr>
            <td valign="top">PIC-I :  <span class="note" style="color:red;">*</span></td>
            <td valign="top">
				<select  class="required" style="width:320px;" name="ticketdetail_pichandleby" id="ticketdetail_pichandleby" >	
				<?
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
					$qvaprvl1cxz1 = mysql_query("SELECT ticketdetail_pichandleby, ticketdetail_pichandleby2,
					ticketdetail_pichandleby3 FROM ITH_TICKET_DETAIL WHERE ticketdetail_id = '$_GET[pid]'");	
					$rvaprvl1cxz1 = mysql_fetch_object($qvaprvl1cxz1);	
				/*	$qvaprvl1ax = mysql_query("SELECT user_nik, user_realname,userdepartemen_id FROM ITH_USER WHERE udept_id = '$_SESSION[udeptid]' AND
					user_nik != '$_SESSION[udeptid]' ORDER BY user_realname ASC");	*/
					$qvaprvl1ax = mysql_query("SELECT user_nik, user_realname,userdepartemen_id FROM ITH_USER WHERE udept_id = '$_SESSION[udeptid]' 
					AND userlevel_id NOT IN('1000','1001','1','2','4','3','8')  OR user_nik IN ('010641') ORDER BY user_realname ASC");			
				/*	$qvaprvl1ax = mysql_query("SELECT user_nik, user_realname,userdepartemen_id FROM ITH_USER WHERE udept_id = '$_SESSION[udeptid]' 
					AND user_nik IN ('003261','073444','010579','010641') ORDER BY user_realname ASC");		*/	
				#if($rvaprvl1cxz1->ticketdetail_pichandleby!='') {
				if($ticketdetail_id!='') {
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con);
					//@session_start();
					$qvaprvl1a = mysql_query("SELECT ITD.*, ITHU.user_realname AS uname1, ITHU2.user_realname AS uname2, ITHU3.user_realname AS uname3 
								FROM ITH_TICKET_DETAIL ITD
								LEFT JOIN ITH_USER ITHU ON ITD.ticketdetail_pichandleby = ITHU.user_nik
								LEFT JOIN ITH_USER ITHU2 ON ITD.ticketdetail_pichandleby2 = ITHU2.user_nik
								LEFT JOIN ITH_USER ITHU3 ON ITD.ticketdetail_pichandleby3 = ITHU3.user_nik
								WHERE ITD.ticketdetail_id = '$_GET[pid]' AND ITD.ticketdetail_pichandleby != '$_SESSION[user_nik]' 							
								");
					$rvaprvl1a = mysql_fetch_object($qvaprvl1a);
					#	echo "<option value= '-'> - </option>";
					#	echo "<option value= '$rvaprvl1a->ticketdetail_pichandleby' style=background:red;color:#fff;> $rvaprvl1a->uname1</option>";
						#echo "<option value= 'test' style=background:red;color:#fff;> test</option>";
					if(($rvaprvl1a->ticketdetail_pichandleby == NULL)||($rvaprvl1a->ticketdetail_pichandleby == '-'))
					{
						echo "<option value= '-'> - </option>";
					#	echo "<option value= '$rvaprvl1a->ticketapproval_id1' style=background:red;color:#fff;> $rvaprvl1a->ticketapproval_by1</option>";
					}elseif(($rvaprvl1a->ticketdetail_pichandleby != NULL)||($rvaprvl1a->ticketdetail_pichandleby != '-')){
						echo "<option value= '$rvaprvl1a->ticketdetail_pichandleby' style=background:red;color:#fff;> $rvaprvl1a->uname1</option>";
					}						
				}
				echo "<option value= ''> - </option>";
				while($rvaprvl1ax = mysql_fetch_object($qvaprvl1ax)) 
				//$uname1x = ucwords(strtolower($rvaprvl1a->user_realname));
				{
						echo "<option value= '$rvaprvl1ax->user_nik'>$rvaprvl1ax->user_realname ($rvaprvl1ax->user_nik - $rvaprvl1ax->userdepartemen_id)</option>";
				}
				?>
				</select>			
			 </td>
          </tr>			
		  <? }elseif($_SESSION['user_level']=='102'){?>
		<tr>
            <td valign="top">Category:  <span class="note" style="color:red;">*</span></td>
            <td valign="top">
				<!--<select class="input-medium" style="width:320px;" name="ticketsubcategory2_code">-->
				<select class="requied" style="width:320px;" name="ticketsubcategory2_code">	
				<?
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
					$qvcatx = mysql_query("SELECT ITH_TICKETCATEGORYNEW.ticketsubcategory2_code, ITH_TICKETCATEGORYNEW.ticketsubcategory2_name,
					ITH_TICKETCATEGORYNEW.ticketsubcategory_code,ITH_TICKETCATEGORYNEW.ticketcategory_code,
					ITH_TICKETCATEGORYNEW_MASTER.ticketcategory_name
					FROM ITH_TICKETCATEGORYNEW 
					LEFT JOIN ITH_TICKETCATEGORYNEW_MASTER ON ITH_TICKETCATEGORYNEW.ticketcategory_code = ITH_TICKETCATEGORYNEW_MASTER.ticketcategory_code
					WHERE ITH_TICKETCATEGORYNEW.ticketcategory_iddepartemen = '4'
					ORDER by ticketsubcategory2_code ASC");				
				if($ticket_id!='') {
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con);
					//@session_start();
					$qvcat = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETCATEGORYNEW.ticketsubcategory2_code, 
					ITH_TICKETCATEGORYNEW.ticketsubcategory2_name FROM ITH_TICKET_HEADER  
					LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKETCATEGORYNEW.ticketsubcategory2_code = ITH_TICKET_HEADER.ticketsubcategory_code
					WHERE ITH_TICKET_HEADER.ticket_id= '$_GET[pid]' AND ITH_TICKETCATEGORYNEW.ticketcategory_iddepartemen = '4'");
					
					$rvcat = mysql_fetch_object($qvcat);
					if($rvcat->ticketsubcategory_code == NULL)
					{
						#echo "<option value= '-'> - </option>";
						#echo "<option value= '$rvcat->ticketsubcategory2_code' style=background:red;color:#fff;> $rvcat->ticketsubcategory2_name</option>";
					}elseif(($rvcat->ticketsubcategory_code != NULL)||($rvcat->ticketsubcategory_code != '-'))
					{					
						
						echo "<option value= '$rvcat->ticketsubcategory_code' style=background:red;color:#fff;> $rvcat->ticketsubcategory2_name</option>";					
					}	
				}				
				#echo "<option value= '-'> - </option>";
				while($rvcatx = mysql_fetch_object($qvcatx)) 
				{
					
						echo "<option value= '$rvcatx->ticketsubcategory2_code'> $rvcatx->ticketsubcategory2_name ($rvcatx->ticketcategory_name)</option>";
				}
				?>				
				</select>			
			 </td>
        </tr>
		<tr>
            <td valign="top">Approval 1:  <span class="note" style="color:red;display:none;">*</span></td>
            <td valign="top">
				<select class="input-medium" style="width:320px;" name="ticketcategory_aprvlbynik1">	
				<?
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
				/*	$qvcatx2 = mysql_query("SELECT user_nik, user_realname,userdepartemen_id FROM ITH_USER WHERE udept_id = '$_SESSION[udeptid]' 
					AND userlevel_id IN('1001','1000') ORDER BY user_realname ASC");	
				*/	$qvcatx2 = mysql_query("SELECT user_nik, user_realname,userdepartemen_id, udept_id, nama_jabatan, usergroup_id FROM ITH_USER WHERE 
								(udept_id NOT IN('IT','FSD') AND userdepartemen_id != 'IT Solution') 
								AND userlevel_id IN('1001','1000','8','4','3') GROUP BY udept_id, user_realname ASC");		
				if($ticketdetail_id!='') {
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con);
					//@session_start();
					$qvaprvl1a = mysql_query("SELECT ticketapproval_id1, ticketapproval_by1 FROM ITH_TICKET_HEADER 
					WHERE ticket_id= '$_GET[pid]'");
					$rvaprvl1a = mysql_fetch_object($qvaprvl1a);
					if($rvaprvl1a->ticketapproval_id1 == NULL)
					{
						echo "<option value= '-'> - </option>";
					#	echo "<option value= '$rvaprvl1a->ticketapproval_id1' style=background:red;color:#fff;> $rvaprvl1a->ticketapproval_by1</option>";
					}elseif($rvaprvl1a->ticketapproval_id1 != NULL){
						echo "<option value= '$rvaprvl1a->ticketapproval_id1' style=background:red;color:#fff;> $rvaprvl1a->ticketapproval_by1</option>";
					}
				}
				echo "<option value= '-'> - </option>";
				while($rvcatx2 = mysql_fetch_object($qvcatx2)) 
				{
						echo "<option value= '$rvcatx2->user_nik'>$rvcatx2->user_realname ($rvcatx2->user_nik - $rvcatx2->nama_jabatan)</option>";
				}
				?>
				</select>					
			 </td>
        </tr>		
		<!--<tr style="display:none;">-->
		<tr>
            <td valign="top">Approval 2:  <span class="note" style="color:red;display:none;">*</span></td>
            <td valign="top">
				<select class="input-medium" style="width:320px;" name="ticketcategory_aprvlbynik2">	
				<?
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
				/*	$qvcatx3 = mysql_query("SELECT user_nik, user_realname,userdepartemen_id FROM ITH_USER WHERE udept_id = '$_SESSION[udeptid]' 
					AND userlevel_id IN('1001','1000') ORDER BY user_realname ASC"); */			
					$qvcatx3 = mysql_query("SELECT user_nik, user_realname,userdepartemen_id, udept_id, nama_jabatan, usergroup_id FROM ITH_USER WHERE 
								(udept_id NOT IN('IT','FSD') AND userdepartemen_id != 'IT Solution') 
								AND userlevel_id IN('1001','1000','8','4','3') GROUP BY udept_id, user_realname ASC");			
				if($ticketdetail_id!='') {
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con);
					//@session_start();
					$qvaprvl1b = mysql_query("SELECT ticketapproval_id2, ticketapproval_by2 FROM ITH_TICKET_HEADER 
					WHERE ticket_id= '$_GET[pid]'");
					$rvaprvl1b = mysql_fetch_object($qvaprvl1b);
					if($rvaprvl1b->ticketapproval_id2 == NULL)
					{
						echo "<option value= '-'> - </option>";
					#	echo "<option value= '$rvaprvl1b->ticketapproval_id2' style=background:red;color:#fff;> $rvaprvl1b->ticketapproval_by1</option>";
					}elseif($rvaprvl1b->ticketapproval_id2 != NULL){
						echo "<option value= '$rvaprvl1b->ticketapproval_id2' style=background:red;color:#fff;> $rvaprvl1b->ticketapproval_by2</option>";
					}
				}
				echo "<option value= '-'> - </option>";
				while($rvcatx3 = mysql_fetch_object($qvcatx3)) 
				{
						echo "<option value= '$rvcatx3->user_nik'>$rvcatx3->user_realname ($rvcatx3->user_nik - $rvcatx3->nama_jabatan)</option>";
				}
				?>
				</select>				
			 </td>
        </tr>
		<tr>
            <td valign="top">Approval X3 3:  <span class="note" style="color:red;display:none;">*</span></td>
            <td valign="top">
				<select class="input-medium" style="width:320px;" name="ticketcategory_aprvlbynik3">	
				<?
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
			/*		$qvcatx4 = mysql_query("SELECT user_nik, user_realname,userdepartemen_id FROM ITH_USER WHERE udept_id = '$_SESSION[udeptid]' 
					AND userlevel_id IN('1001','1000') ORDER BY user_realname ASC");		*/	
					$qvcatx4 = mysql_query("SELECT user_nik, user_realname,userdepartemen_id, udept_id, nama_jabatan, usergroup_id FROM ITH_USER WHERE 
								(udept_id NOT IN('IT','FSD') AND userdepartemen_id != 'IT Solution') 
								AND userlevel_id IN('1001','1000','8','4','3') GROUP BY udept_id, user_realname ASC");			
				if($ticketdetail_id!='') {
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con);
					//@session_start();
					$qvaprvl1c = mysql_query("SELECT ticketapproval_id3, ticketapproval_by3 FROM ITH_TICKET_HEADER 
					WHERE ticket_id= '$_GET[pid]'");
					$rvaprvl1c = mysql_fetch_object($qvaprvl1c);
					if($rvaprvl1c->ticketapproval_id3 == NULL)
					{
						echo "<option value= '-'> - </option>";
					#	echo "<option value= '$rvaprvl1c->ticketapproval_id3' style=background:red;color:#fff;> $rvaprvl1c->ticketapproval_by3</option>";
					}elseif($rvaprvl1c->ticketapproval_id3 != NULL){
						echo "<option value= '$rvaprvl1c->ticketapproval_id3' style=background:red;color:#fff;> $rvaprvl1c->ticketapproval_by3</option>";
					}
				}
				echo "<option value= '-'> - </option>";
				while($rvcatx4 = mysql_fetch_object($qvcatx4)) 
				{
						echo "<option value= '$rvcatx4->user_nik'>$rvcatx4->user_realname ($rvcatx4->user_nik - $rvcatx4->nama_jabatan)</option>";
				}
				?>
				</select>			
			 </td>
        </tr>
		  <tr>
            <td valign="top">PIC-I :  <span class="note" style="color:red;">*</span></td>
            <td valign="top">
				<select  class="required" style="width:320px;" name="ticketdetail_pichandleby" id="ticketdetail_pichandleby" >	
				<?
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
					$qvaprvl1cxz1 = mysql_query("SELECT ticketdetail_pichandleby, ticketdetail_pichandleby2,
					ticketdetail_pichandleby3 FROM ITH_TICKET_DETAIL WHERE ticketdetail_id = '$_GET[pid]'");	
					$rvaprvl1cxz1 = mysql_fetch_object($qvaprvl1cxz1);	
				/*	$qvaprvl1ax = mysql_query("SELECT user_nik, user_realname,userdepartemen_id FROM ITH_USER WHERE udept_id = '$_SESSION[udeptid]' AND
					user_nik != '$_SESSION[udeptid]' ORDER BY user_realname ASC");	*/
					$qvaprvl1ax = mysql_query("SELECT user_nik, user_realname,userdepartemen_id FROM ITH_USER WHERE udept_id = '$_SESSION[udeptid]' 
					AND userlevel_id NOT IN('1000','1001','1','2','4','3','8') ORDER BY user_realname ASC");			
				/*	$qvaprvl1ax = mysql_query("SELECT user_nik, user_realname,userdepartemen_id FROM ITH_USER WHERE udept_id = '$_SESSION[udeptid]' 
					AND user_nik IN ('003261','073444','010579','010641') ORDER BY user_realname ASC");		*/	
				#if($rvaprvl1cxz1->ticketdetail_pichandleby!='') {
				if($ticketdetail_id!='') {
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con);
					//@session_start();
					$qvaprvl1a = mysql_query("SELECT ITD.*, ITHU.user_realname AS uname1, ITHU2.user_realname AS uname2, ITHU3.user_realname AS uname3 
								FROM ITH_TICKET_DETAIL ITD
								LEFT JOIN ITH_USER ITHU ON ITD.ticketdetail_pichandleby = ITHU.user_nik
								LEFT JOIN ITH_USER ITHU2 ON ITD.ticketdetail_pichandleby2 = ITHU2.user_nik
								LEFT JOIN ITH_USER ITHU3 ON ITD.ticketdetail_pichandleby3 = ITHU3.user_nik
								WHERE ITD.ticketdetail_id = '$_GET[pid]' AND ITD.ticketdetail_pichandleby != '$_SESSION[user_nik]' 							
								");
					$rvaprvl1a = mysql_fetch_object($qvaprvl1a);
					#	echo "<option value= '-'> - </option>";
					#	echo "<option value= '$rvaprvl1a->ticketdetail_pichandleby' style=background:red;color:#fff;> $rvaprvl1a->uname1</option>";
						#echo "<option value= 'test' style=background:red;color:#fff;> test</option>";
					if(($rvaprvl1a->ticketdetail_pichandleby == NULL)||($rvaprvl1a->ticketdetail_pichandleby == '-'))
					{
						echo "<option value= '-'> - </option>";
					#	echo "<option value= '$rvaprvl1a->ticketapproval_id1' style=background:red;color:#fff;> $rvaprvl1a->ticketapproval_by1</option>";
					}elseif(($rvaprvl1a->ticketdetail_pichandleby != NULL)||($rvaprvl1a->ticketdetail_pichandleby != '-')){
						echo "<option value= '$rvaprvl1a->ticketdetail_pichandleby' style=background:red;color:#fff;> $rvaprvl1a->uname1</option>";
					}						
				}
				echo "<option value= ''> - </option>";
				while($rvaprvl1ax = mysql_fetch_object($qvaprvl1ax)) 
				//$uname1x = ucwords(strtolower($rvaprvl1a->user_realname));
				{
						echo "<option value= '$rvaprvl1ax->user_nik'>$rvaprvl1ax->user_realname ($rvaprvl1ax->user_nik - $rvaprvl1ax->userdepartemen_id)</option>";
				}
				?>
				</select>			
			 </td>
          </tr>			
		  <? }elseif($_SESSION['user_level']=='103'){ /* For OPR */?>
		<tr>
            <td valign="top">Category:  <span class="note" style="color:red;">*</span></td>
            <td valign="top">
				<!--<select class="input-medium" style="width:320px;" name="ticketsubcategory2_code">-->
				<select class="requied" style="width:320px;" name="ticketsubcategory2_code">	
				<?
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
					$qvcatx = mysql_query("SELECT ITH_TICKETCATEGORYNEW.ticketsubcategory2_code, ITH_TICKETCATEGORYNEW.ticketsubcategory2_name,
					ITH_TICKETCATEGORYNEW.ticketsubcategory_code,ITH_TICKETCATEGORYNEW.ticketcategory_code,
					ITH_TICKETCATEGORYNEW_MASTER.ticketcategory_name
					FROM ITH_TICKETCATEGORYNEW 
					LEFT JOIN ITH_TICKETCATEGORYNEW_MASTER ON ITH_TICKETCATEGORYNEW.ticketcategory_code = ITH_TICKETCATEGORYNEW_MASTER.ticketcategory_code
					WHERE ITH_TICKETCATEGORYNEW.ticketcategory_iddepartemen = '5'
					ORDER by ticketsubcategory2_code ASC");				
				if($ticket_id!='') {
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con);
					//@session_start();
					$qvcat = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETCATEGORYNEW.ticketsubcategory2_code, 
					ITH_TICKETCATEGORYNEW.ticketsubcategory2_name FROM ITH_TICKET_HEADER  
					LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKETCATEGORYNEW.ticketsubcategory2_code = ITH_TICKET_HEADER.ticketsubcategory_code
					WHERE ITH_TICKET_HEADER.ticket_id= '$_GET[pid]' AND ITH_TICKETCATEGORYNEW.ticketcategory_iddepartemen = '5'");
					
					$rvcat = mysql_fetch_object($qvcat);
					if($rvcat->ticketsubcategory_code == NULL)
					{
						#echo "<option value= '-'> - </option>";
						#echo "<option value= '$rvcat->ticketsubcategory2_code' style=background:red;color:#fff;> $rvcat->ticketsubcategory2_name</option>";
					}elseif(($rvcat->ticketsubcategory_code != NULL)||($rvcat->ticketsubcategory_code != '-'))
					{					
						
						echo "<option value= '$rvcat->ticketsubcategory_code' style=background:red;color:#fff;> $rvcat->ticketsubcategory2_name</option>";					
					}	
				}				
				#echo "<option value= '-'> - </option>";
				while($rvcatx = mysql_fetch_object($qvcatx)) 
				{
					
						echo "<option value= '$rvcatx->ticketsubcategory2_code'> $rvcatx->ticketsubcategory2_name ($rvcatx->ticketcategory_name)</option>";
				}
				?>				
				</select>			
			 </td>
        </tr>
		<tr>
            <td valign="top">Approval 1:  <span class="note" style="color:red;display:none;">*</span></td>
            <td valign="top">
				<select class="input-medium" style="width:320px;" name="ticketcategory_aprvlbynik1">	
				<?
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
				/*	$qvcatx2 = mysql_query("SELECT user_nik, user_realname,userdepartemen_id FROM ITH_USER WHERE udept_id = '$_SESSION[udeptid]' 
					AND userlevel_id IN('1001','1000') ORDER BY user_realname ASC");	
				*/	$qvcatx2 = mysql_query("SELECT user_nik, user_realname,userdepartemen_id, udept_id, nama_jabatan, usergroup_id FROM ITH_USER WHERE 
								(udept_id NOT IN('IT','FSD','SDD','MKT') AND userdepartemen_id != 'IT Solution') 
								AND userlevel_id IN('1001','1000','8','4','3') GROUP BY udept_id, user_realname ASC");		
				if($ticketdetail_id!='') {
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con);
					//@session_start();
					$qvaprvl1a = mysql_query("SELECT ticketapproval_id1, ticketapproval_by1 FROM ITH_TICKET_HEADER 
					WHERE ticket_id= '$_GET[pid]'");
					$rvaprvl1a = mysql_fetch_object($qvaprvl1a);
					if($rvaprvl1a->ticketapproval_id1 == NULL)
					{
						echo "<option value= '-'> - </option>";
					#	echo "<option value= '$rvaprvl1a->ticketapproval_id1' style=background:red;color:#fff;> $rvaprvl1a->ticketapproval_by1</option>";
					}elseif($rvaprvl1a->ticketapproval_id1 != NULL){
						echo "<option value= '$rvaprvl1a->ticketapproval_id1' style=background:red;color:#fff;> $rvaprvl1a->ticketapproval_by1</option>";
					}
				}
				echo "<option value= '-'> - </option>";
				while($rvcatx2 = mysql_fetch_object($qvcatx2)) 
				{
						echo "<option value= '$rvcatx2->user_nik'>$rvcatx2->user_realname ($rvcatx2->user_nik - $rvcatx2->nama_jabatan)</option>";
				}
				?>
				</select>					
			 </td>
        </tr>		
		<!--<tr style="display:none;">-->
		<tr>
            <td valign="top">Approval 2:  <span class="note" style="color:red;display:none;">*</span></td>
            <td valign="top">
				<select class="input-medium" style="width:320px;" name="ticketcategory_aprvlbynik2">	
				<?
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
				/*	$qvcatx3 = mysql_query("SELECT user_nik, user_realname,userdepartemen_id FROM ITH_USER WHERE udept_id = '$_SESSION[udeptid]' 
					AND userlevel_id IN('1001','1000') ORDER BY user_realname ASC"); */			
					$qvcatx3 = mysql_query("SELECT user_nik, user_realname,userdepartemen_id, udept_id, nama_jabatan, usergroup_id FROM ITH_USER WHERE 
								(udept_id NOT IN('IT','FSD','SDD','MKT') AND userdepartemen_id != 'IT Solution') 
								AND userlevel_id IN('1001','1000','8','4','3') GROUP BY udept_id, user_realname ASC");			
				if($ticketdetail_id!='') {
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con);
					//@session_start();
					$qvaprvl1b = mysql_query("SELECT ticketapproval_id2, ticketapproval_by2 FROM ITH_TICKET_HEADER 
					WHERE ticket_id= '$_GET[pid]'");
					$rvaprvl1b = mysql_fetch_object($qvaprvl1b);
					if($rvaprvl1b->ticketapproval_id2 == NULL)
					{
						echo "<option value= '-'> - </option>";
					#	echo "<option value= '$rvaprvl1b->ticketapproval_id2' style=background:red;color:#fff;> $rvaprvl1b->ticketapproval_by1</option>";
					}elseif($rvaprvl1b->ticketapproval_id2 != NULL){
						echo "<option value= '$rvaprvl1b->ticketapproval_id2' style=background:red;color:#fff;> $rvaprvl1b->ticketapproval_by2</option>";
					}
				}
				echo "<option value= '-'> - </option>";
				while($rvcatx3 = mysql_fetch_object($qvcatx3)) 
				{
						echo "<option value= '$rvcatx3->user_nik'>$rvcatx3->user_realname ($rvcatx3->user_nik - $rvcatx3->nama_jabatan)</option>";
				}
				?>
				</select>				
			 </td>
        </tr>
		<tr>
            <td valign="top">ApprovalX4 3:  <span class="note" style="color:red;display:none;">*</span></td>
            <td valign="top">
				<select class="input-medium" style="width:320px;" name="ticketcategory_aprvlbynik3">	
				<?
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
			/*		$qvcatx4 = mysql_query("SELECT user_nik, user_realname,userdepartemen_id FROM ITH_USER WHERE udept_id = '$_SESSION[udeptid]' 
					AND userlevel_id IN('1001','1000') ORDER BY user_realname ASC");		*/	
					$qvcatx4 = mysql_query("SELECT user_nik, user_realname,userdepartemen_id, udept_id, nama_jabatan, usergroup_id FROM ITH_USER WHERE 
								(udept_id NOT IN('IT','FSD','SDD','MKT') AND userdepartemen_id != 'IT Solution') 
								AND userlevel_id IN('1001','1000','8','4','3') GROUP BY udept_id, user_realname ASC");			
				if($ticketdetail_id!='') {
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con);
					//@session_start();
					$qvaprvl1c = mysql_query("SELECT ticketapproval_id3, ticketapproval_by3 FROM ITH_TICKET_HEADER 
					WHERE ticket_id= '$_GET[pid]'");
					$rvaprvl1c = mysql_fetch_object($qvaprvl1c);
					if($rvaprvl1c->ticketapproval_id3 == NULL)
					{
						echo "<option value= '-'> - </option>";
					#	echo "<option value= '$rvaprvl1c->ticketapproval_id3' style=background:red;color:#fff;> $rvaprvl1c->ticketapproval_by3</option>";
					}elseif($rvaprvl1c->ticketapproval_id3 != NULL){
						echo "<option value= '$rvaprvl1c->ticketapproval_id3' style=background:red;color:#fff;> $rvaprvl1c->ticketapproval_by3</option>";
					}
				}
				echo "<option value= '-'> - </option>";
				while($rvcatx4 = mysql_fetch_object($qvcatx4)) 
				{
						echo "<option value= '$rvcatx4->user_nik'>$rvcatx4->user_realname ($rvcatx4->user_nik - $rvcatx4->nama_jabatan)</option>";
				}
				?>
				</select>			
			 </td>
        </tr>		
		  <tr>
            <td valign="top">PIC-I :  <span class="note" style="color:red;">*</span></td>
            <td valign="top">
				<select  class="required" style="width:320px;" name="ticketdetail_pichandleby" id="ticketdetail_pichandleby" >	
				<?
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
					$qvaprvl1cxz1 = mysql_query("SELECT ticketdetail_pichandleby, ticketdetail_pichandleby2,
					ticketdetail_pichandleby3 FROM ITH_TICKET_DETAIL WHERE ticketdetail_id = '$_GET[pid]'");	
					$rvaprvl1cxz1 = mysql_fetch_object($qvaprvl1cxz1);	
				/*	$qvaprvl1ax = mysql_query("SELECT user_nik, user_realname,userdepartemen_id FROM ITH_USER WHERE udept_id = '$_SESSION[udeptid]' AND
					user_nik != '$_SESSION[udeptid]' ORDER BY user_realname ASC");	*/
					$qvaprvl1ax = mysql_query("SELECT user_nik, user_realname,userdepartemen_id FROM ITH_USER WHERE udept_id = '$_SESSION[udeptid]' 
					AND userlevel_id NOT IN('1000','1001','1','2','4','3','8') ORDER BY user_realname ASC");			
				/*	$qvaprvl1ax = mysql_query("SELECT user_nik, user_realname,userdepartemen_id FROM ITH_USER WHERE udept_id = '$_SESSION[udeptid]' 
					AND user_nik IN ('003261','073444','010579','010641') ORDER BY user_realname ASC");		*/	
				#if($rvaprvl1cxz1->ticketdetail_pichandleby!='') {
				if($ticketdetail_id!='') {
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con);
					//@session_start();
					$qvaprvl1a = mysql_query("SELECT ITD.*, ITHU.user_realname AS uname1, ITHU2.user_realname AS uname2, ITHU3.user_realname AS uname3 
								FROM ITH_TICKET_DETAIL ITD
								LEFT JOIN ITH_USER ITHU ON ITD.ticketdetail_pichandleby = ITHU.user_nik
								LEFT JOIN ITH_USER ITHU2 ON ITD.ticketdetail_pichandleby2 = ITHU2.user_nik
								LEFT JOIN ITH_USER ITHU3 ON ITD.ticketdetail_pichandleby3 = ITHU3.user_nik
								WHERE ITD.ticketdetail_id = '$_GET[pid]' AND ITD.ticketdetail_pichandleby != '$_SESSION[user_nik]' 							
								");
					$rvaprvl1a = mysql_fetch_object($qvaprvl1a);
					#	echo "<option value= '-'> - </option>";
					#	echo "<option value= '$rvaprvl1a->ticketdetail_pichandleby' style=background:red;color:#fff;> $rvaprvl1a->uname1</option>";
						#echo "<option value= 'test' style=background:red;color:#fff;> test</option>";
					if(($rvaprvl1a->ticketdetail_pichandleby == NULL)||($rvaprvl1a->ticketdetail_pichandleby == '-'))
					{
						echo "<option value= '-'> - </option>";
					#	echo "<option value= '$rvaprvl1a->ticketapproval_id1' style=background:red;color:#fff;> $rvaprvl1a->ticketapproval_by1</option>";
					}elseif(($rvaprvl1a->ticketdetail_pichandleby != NULL)||($rvaprvl1a->ticketdetail_pichandleby != '-')){
						echo "<option value= '$rvaprvl1a->ticketdetail_pichandleby' style=background:red;color:#fff;> $rvaprvl1a->uname1</option>";
					}						
				}
				echo "<option value= ''> - </option>";
				while($rvaprvl1ax = mysql_fetch_object($qvaprvl1ax)) 
				//$uname1x = ucwords(strtolower($rvaprvl1a->user_realname));
				{
						echo "<option value= '$rvaprvl1ax->user_nik'>$rvaprvl1ax->user_realname ($rvaprvl1ax->user_nik - $rvaprvl1ax->userdepartemen_id)</option>";
				}
				?>
				</select>			
			 </td>
          </tr>			
		  <? }elseif($_SESSION['user_level']=='105'){ /* For MKT */?>
		<tr>
            <td valign="top">Category:  <span class="note" style="color:red;">*</span></td>
            <td valign="top">
				<!--<select class="input-medium" style="width:320px;" name="ticketsubcategory2_code">-->
				<select class="requied" style="width:320px;" name="ticketsubcategory2_code">	
				<?
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
					$qvcatx = mysql_query("SELECT ITH_TICKETCATEGORYNEW.ticketsubcategory2_code, ITH_TICKETCATEGORYNEW.ticketsubcategory2_name,
					ITH_TICKETCATEGORYNEW.ticketsubcategory_code,ITH_TICKETCATEGORYNEW.ticketcategory_code,
					ITH_TICKETCATEGORYNEW_MASTER.ticketcategory_name
					FROM ITH_TICKETCATEGORYNEW 
					LEFT JOIN ITH_TICKETCATEGORYNEW_MASTER ON ITH_TICKETCATEGORYNEW.ticketcategory_code = ITH_TICKETCATEGORYNEW_MASTER.ticketcategory_code
					WHERE ITH_TICKETCATEGORYNEW.ticketcategory_iddepartemen = '8'
					ORDER by ticketsubcategory2_code ASC");				
				if($ticket_id!='') {
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con);
					//@session_start();
					$qvcat = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_TICKETCATEGORYNEW.ticketsubcategory2_code, 
					ITH_TICKETCATEGORYNEW.ticketsubcategory2_name FROM ITH_TICKET_HEADER  
					LEFT JOIN ITH_TICKETCATEGORYNEW ON ITH_TICKETCATEGORYNEW.ticketsubcategory2_code = ITH_TICKET_HEADER.ticketsubcategory_code
					WHERE ITH_TICKET_HEADER.ticket_id= '$_GET[pid]' AND ITH_TICKETCATEGORYNEW.ticketcategory_iddepartemen = '8'");
					
					$rvcat = mysql_fetch_object($qvcat);
					if($rvcat->ticketsubcategory_code == NULL)
					{
						#echo "<option value= '-'> - </option>";
						#echo "<option value= '$rvcat->ticketsubcategory2_code' style=background:red;color:#fff;> $rvcat->ticketsubcategory2_name</option>";
					}elseif(($rvcat->ticketsubcategory_code != NULL)||($rvcat->ticketsubcategory_code != '-'))
					{					
						
						echo "<option value= '$rvcat->ticketsubcategory_code' style=background:red;color:#fff;> $rvcat->ticketsubcategory2_name</option>";					
					}	
				}				
				#echo "<option value= '-'> - </option>";
				while($rvcatx = mysql_fetch_object($qvcatx)) 
				{
					
						echo "<option value= '$rvcatx->ticketsubcategory2_code'> $rvcatx->ticketsubcategory2_name ($rvcatx->ticketcategory_name)</option>";
				}
				?>				
				</select>			
			 </td>
        </tr>
		<tr>
            <td valign="top">Approval 1:  <span class="note" style="color:red;display:none;">*</span></td>
            <td valign="top">
				<select class="input-medium" style="width:320px;" name="ticketcategory_aprvlbynik1">	
				<?
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
				/*	$qvcatx2 = mysql_query("SELECT user_nik, user_realname,userdepartemen_id FROM ITH_USER WHERE udept_id = '$_SESSION[udeptid]' 
					AND userlevel_id IN('1001','1000') ORDER BY user_realname ASC");	
				*/	$qvcatx2 = mysql_query("SELECT user_nik, user_realname,userdepartemen_id, udept_id, nama_jabatan, usergroup_id FROM ITH_USER WHERE 
								(udept_id NOT IN('IT','FSD','SDD','OPR') AND userdepartemen_id != 'IT Solution') 
								AND userlevel_id IN('1001','1000','8','4','3') GROUP BY udept_id, user_realname ASC");		
				if($ticketdetail_id!='') {
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con);
					//@session_start();
					$qvaprvl1a = mysql_query("SELECT ticketapproval_id1, ticketapproval_by1 FROM ITH_TICKET_HEADER 
					WHERE ticket_id= '$_GET[pid]'");
					$rvaprvl1a = mysql_fetch_object($qvaprvl1a);
					if($rvaprvl1a->ticketapproval_id1 == NULL)
					{
						echo "<option value= '-'> - </option>";
					#	echo "<option value= '$rvaprvl1a->ticketapproval_id1' style=background:red;color:#fff;> $rvaprvl1a->ticketapproval_by1</option>";
					}elseif($rvaprvl1a->ticketapproval_id1 != NULL){
						echo "<option value= '$rvaprvl1a->ticketapproval_id1' style=background:red;color:#fff;> $rvaprvl1a->ticketapproval_by1</option>";
					}
				}
				echo "<option value= '-'> - </option>";
				while($rvcatx2 = mysql_fetch_object($qvcatx2)) 
				{
						echo "<option value= '$rvcatx2->user_nik'>$rvcatx2->user_realname ($rvcatx2->user_nik - $rvcatx2->nama_jabatan)</option>";
				}
				?>
				</select>					
			 </td>
        </tr>		
		<!--<tr style="display:none;">-->
		<tr>
            <td valign="top">Approval 2:  <span class="note" style="color:red;display:none;">*</span></td>
            <td valign="top">
				<select class="input-medium" style="width:320px;" name="ticketcategory_aprvlbynik2">	
				<?
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
				/*	$qvcatx3 = mysql_query("SELECT user_nik, user_realname,userdepartemen_id FROM ITH_USER WHERE udept_id = '$_SESSION[udeptid]' 
					AND userlevel_id IN('1001','1000') ORDER BY user_realname ASC"); */			
					$qvcatx3 = mysql_query("SELECT user_nik, user_realname,userdepartemen_id, udept_id, nama_jabatan, usergroup_id FROM ITH_USER WHERE 
								(udept_id NOT IN('IT','FSD','SDD','OPR') AND userdepartemen_id != 'IT Solution') 
								AND userlevel_id IN('1001','1000','8','4','3') GROUP BY udept_id, user_realname ASC");			
				if($ticketdetail_id!='') {
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con);
					//@session_start();
					$qvaprvl1b = mysql_query("SELECT ticketapproval_id2, ticketapproval_by2 FROM ITH_TICKET_HEADER 
					WHERE ticket_id= '$_GET[pid]'");
					$rvaprvl1b = mysql_fetch_object($qvaprvl1b);
					if($rvaprvl1b->ticketapproval_id2 == NULL)
					{
						echo "<option value= '-'> - </option>";
					#	echo "<option value= '$rvaprvl1b->ticketapproval_id2' style=background:red;color:#fff;> $rvaprvl1b->ticketapproval_by1</option>";
					}elseif($rvaprvl1b->ticketapproval_id2 != NULL){
						echo "<option value= '$rvaprvl1b->ticketapproval_id2' style=background:red;color:#fff;> $rvaprvl1b->ticketapproval_by2</option>";
					}
				}
				echo "<option value= '-'> - </option>";
				while($rvcatx3 = mysql_fetch_object($qvcatx3)) 
				{
						echo "<option value= '$rvcatx3->user_nik'>$rvcatx3->user_realname ($rvcatx3->user_nik - $rvcatx3->nama_jabatan)</option>";
				}
				?>
				</select>				
			 </td>
        </tr>
		<tr>
            <td valign="top">Approval X5 3:  <span class="note" style="color:red;display:none;">*</span></td>
            <td valign="top">
				<select class="input-medium" style="width:320px;" name="ticketcategory_aprvlbynik3">	
				<?
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
			/*		$qvcatx4 = mysql_query("SELECT user_nik, user_realname,userdepartemen_id FROM ITH_USER WHERE udept_id = '$_SESSION[udeptid]' 
					AND userlevel_id IN('1001','1000') ORDER BY user_realname ASC");		*/	
					$qvcatx4 = mysql_query("SELECT user_nik, user_realname,userdepartemen_id, udept_id, nama_jabatan, usergroup_id FROM ITH_USER WHERE 
								(udept_id NOT IN('IT','FSD','SDD','OPR') AND userdepartemen_id != 'IT Solution') 
								AND userlevel_id IN('1001','1000','8','4','3') GROUP BY udept_id, user_realname ASC");			
				if($ticketdetail_id!='') {
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con);
					//@session_start();
					$qvaprvl1c = mysql_query("SELECT ticketapproval_id3, ticketapproval_by3 FROM ITH_TICKET_HEADER 
					WHERE ticket_id= '$_GET[pid]'");
					$rvaprvl1c = mysql_fetch_object($qvaprvl1c);
					if($rvaprvl1c->ticketapproval_id3 == NULL)
					{
						echo "<option value= '-'> - </option>";
					#	echo "<option value= '$rvaprvl1c->ticketapproval_id3' style=background:red;color:#fff;> $rvaprvl1c->ticketapproval_by3</option>";
					}elseif($rvaprvl1c->ticketapproval_id3 != NULL){
						echo "<option value= '$rvaprvl1c->ticketapproval_id3' style=background:red;color:#fff;> $rvaprvl1c->ticketapproval_by3</option>";
					}
				}
				echo "<option value= '-'> - </option>";
				while($rvcatx4 = mysql_fetch_object($qvcatx4)) 
				{
						echo "<option value= '$rvcatx4->user_nik'>$rvcatx4->user_realname ($rvcatx4->user_nik - $rvcatx4->nama_jabatan)</option>";
				}
				?>
				</select>			
			 </td>
        </tr>		
		  <tr>
            <td valign="top">PIC-I :  <span class="note" style="color:red;">*</span></td>
            <td valign="top">
				<select  class="required" style="width:320px;" name="ticketdetail_pichandleby" id="ticketdetail_pichandleby" >	
				<?
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
					$qvaprvl1cxz1 = mysql_query("SELECT ticketdetail_pichandleby, ticketdetail_pichandleby2,
					ticketdetail_pichandleby3 FROM ITH_TICKET_DETAIL WHERE ticketdetail_id = '$_GET[pid]'");	
					$rvaprvl1cxz1 = mysql_fetch_object($qvaprvl1cxz1);	
				/*	$qvaprvl1ax = mysql_query("SELECT user_nik, user_realname,userdepartemen_id FROM ITH_USER WHERE udept_id = '$_SESSION[udeptid]' AND
					user_nik != '$_SESSION[udeptid]' ORDER BY user_realname ASC");	*/
					$qvaprvl1ax = mysql_query("SELECT user_nik, user_realname,userdepartemen_id FROM ITH_USER WHERE udept_id = '$_SESSION[udeptid]' 
					AND userlevel_id NOT IN('1000','1001','1','2','4','3','8') ORDER BY user_realname ASC");			
				/*	$qvaprvl1ax = mysql_query("SELECT user_nik, user_realname,userdepartemen_id FROM ITH_USER WHERE udept_id = '$_SESSION[udeptid]' 
					AND user_nik IN ('003261','073444','010579','010641') ORDER BY user_realname ASC");		*/	
				#if($rvaprvl1cxz1->ticketdetail_pichandleby!='') {
				if($ticketdetail_id!='') {
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con);
					//@session_start();
					$qvaprvl1a = mysql_query("SELECT ITD.*, ITHU.user_realname AS uname1, ITHU2.user_realname AS uname2, ITHU3.user_realname AS uname3 
								FROM ITH_TICKET_DETAIL ITD
								LEFT JOIN ITH_USER ITHU ON ITD.ticketdetail_pichandleby = ITHU.user_nik
								LEFT JOIN ITH_USER ITHU2 ON ITD.ticketdetail_pichandleby2 = ITHU2.user_nik
								LEFT JOIN ITH_USER ITHU3 ON ITD.ticketdetail_pichandleby3 = ITHU3.user_nik
								WHERE ITD.ticketdetail_id = '$_GET[pid]' AND ITD.ticketdetail_pichandleby != '$_SESSION[user_nik]' 							
								");
					$rvaprvl1a = mysql_fetch_object($qvaprvl1a);
					#	echo "<option value= '-'> - </option>";
					#	echo "<option value= '$rvaprvl1a->ticketdetail_pichandleby' style=background:red;color:#fff;> $rvaprvl1a->uname1</option>";
						#echo "<option value= 'test' style=background:red;color:#fff;> test</option>";
					if(($rvaprvl1a->ticketdetail_pichandleby == NULL)||($rvaprvl1a->ticketdetail_pichandleby == '-'))
					{
						echo "<option value= '-'> - </option>";
					#	echo "<option value= '$rvaprvl1a->ticketapproval_id1' style=background:red;color:#fff;> $rvaprvl1a->ticketapproval_by1</option>";
					}elseif(($rvaprvl1a->ticketdetail_pichandleby != NULL)||($rvaprvl1a->ticketdetail_pichandleby != '-')){
						echo "<option value= '$rvaprvl1a->ticketdetail_pichandleby' style=background:red;color:#fff;> $rvaprvl1a->uname1</option>";
					}						
				}
				echo "<option value= ''> - </option>";
				while($rvaprvl1ax = mysql_fetch_object($qvaprvl1ax)) 
				//$uname1x = ucwords(strtolower($rvaprvl1a->user_realname));
				{
						echo "<option value= '$rvaprvl1ax->user_nik'>$rvaprvl1ax->user_realname ($rvaprvl1ax->user_nik - $rvaprvl1ax->userdepartemen_id)</option>";
				}
				?>
				</select>			
			 </td>
          </tr>		
		 <? } ?>
		<!--<tr style="display:none;">-->


		  <tr>
            <td valign="top">PIC-II :  <span class="note" style="color:red;display:none;">*</span></td>
            <td valign="top">
				<select class="input-medium" style="width:320px;" name="ticketdetail_pichandleby2">	
				<?
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
					$qvaprvl1cxz2 = mysql_query("SELECT ticketdetail_pichandleby, ticketdetail_pichandleby2,
					ticketdetail_pichandleby3 FROM ITH_TICKET_DETAIL
					WHERE ticketdetail_id = '$_GET[pid]'");	
					$rvaprvl1cxz2 = mysql_fetch_object($qvaprvl1cxz2);	
				/*	$qvaprvl1bx = mysql_query("SELECT user_nik, user_realname,userdepartemen_id FROM ITH_USER WHERE udept_id = '$_SESSION[udeptid]' 
					AND user_nik IN ('003261','073444','010579','010641') ORDER BY user_realname ASC");	*/
					$qvaprvl1bx = mysql_query("SELECT user_nik, user_realname,userdepartemen_id FROM ITH_USER WHERE udept_id = '$_SESSION[udeptid]' 
					AND userlevel_id NOT IN('1000','1001','1','2','4','3','8') ORDER BY user_realname ASC");	
				/*	$qvaprvl1bx = mysql_query("SELECT user_nik, user_realname,userdepartemen_id FROM ITH_USER WHERE udept_id = '$_SESSION[udeptid]' 
					ORDER BY user_realname ASC");		*/				
			#	if($rvaprvl1cxz2->ticketdetail_pichandleby2!='') {
				if($ticketdetail_id!='') {
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con);
					//@session_start();
					$qvaprvl1b = mysql_query("SELECT ITD.*, ITHU.user_realname AS uname1, ITHU2.user_realname AS uname2, ITHU3.user_realname AS uname3 
								FROM ITH_TICKET_DETAIL ITD
								LEFT JOIN ITH_USER ITHU ON ITD.ticketdetail_pichandleby = ITHU.user_nik
								LEFT JOIN ITH_USER ITHU2 ON ITD.ticketdetail_pichandleby2 = ITHU2.user_nik
								LEFT JOIN ITH_USER ITHU3 ON ITD.ticketdetail_pichandleby3 = ITHU3.user_nik
								WHERE ITD.ticketdetail_id = '$_GET[pid]' AND ITD.ticketdetail_pichandleby2 != '$_SESSION[user_nik]'								
								");
					$rvaprvl1b= mysql_fetch_object($qvaprvl1b);
					#	echo "<option value= ''> - </option>";
					#	echo "<option value= '$rvaprvl1b->ticketdetail_pichandleby2' style=background:red;color:#fff;> $rvaprvl1b->uname2</option>";
						#echo "<option value= 'test' style=background:red;color:#fff;> test</option>";
					if(($rvaprvl1b->ticketdetail_pichandleby2 == NULL)||($rvaprvl1b->ticketdetail_pichandleby2 == '-'))
					{
						echo "<option value= '-'> - </option>";
					#	echo "<option value= '$rvaprvl1a->ticketapproval_id1' style=background:red;color:#fff;> $rvaprvl1b->ticketapproval_by1</option>";
					}elseif(($rvaprvl1b->ticketdetail_pichandleby2 != NULL)||($rvaprvl1b->ticketdetail_pichandleby2 != '-')){
						echo "<option value= '$rvaprvl1b->ticketdetail_pichandleby2' style=background:red;color:#fff;> $rvaprvl1b->uname2</option>";
					}						
				}
				echo "<option value= '-'> - </option>";
				while($rvaprvl1bx = mysql_fetch_object($qvaprvl1bx)) 
				//$uname1x = ucwords(strtolower($rvaprvl1a->user_realname));
				{
						echo "<option value= '$rvaprvl1bx->user_nik'>$rvaprvl1bx->user_realname ($rvaprvl1bx->user_nik - $rvaprvl1bx->userdepartemen_id)</option>";
				}
				?>
				</select>			
			 </td>
          </tr>	
		  <tr>
            <td valign="top">PIC-III :  <span class="note" style="color:red;display:none;">*</span></td>
            <td valign="top">
				<select class="input-medium" style="width:320px;" name="ticketdetail_pichandleby3">	
				<?
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
					/*		*/
					$qvaprvl1cxz3 = mysql_query("SELECT ticketdetail_pichandleby, ticketdetail_pichandleby2,
					ticketdetail_pichandleby3 FROM ITH_TICKET_DETAIL
					WHERE ticketdetail_id = '$_GET[pid]'");		
					$rvaprvl1cxz3 = mysql_fetch_object($qvaprvl1cxz3);			
				/*	$qvaprvl1cx = mysql_query("SELECT user_nik, user_realname,userdepartemen_id FROM ITH_USER WHERE udept_id = '$_SESSION[udeptid]' 
					AND user_nik IN ('003261','073444','010579','010641') ORDER BY user_realname ASC");		*/
					$qvaprvl1cx = mysql_query("SELECT user_nik, user_realname,userdepartemen_id FROM ITH_USER WHERE udept_id = '$_SESSION[udeptid]' 
					AND userlevel_id NOT IN('1000','1001','1','2','4','3','8') ORDER BY user_realname ASC");		
				/*	$qvaprvl1cx = mysql_query("SELECT user_nik, user_realname,userdepartemen_id FROM ITH_USER WHERE udept_id = '$_SESSION[udeptid]' 
					ORDER BY user_realname ASC");		*/					
				#if($rvaprvl1cxz3->ticketdetail_pichandleby3!='') {
				if($ticketdetail_id!='') {
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con);
					//@session_start();
					$qvaprvl1c = mysql_query("SELECT ITD.*, ITHU.user_realname AS uname1, ITHU2.user_realname AS uname2, ITHU3.user_realname AS uname3 
								FROM ITH_TICKET_DETAIL ITD
								LEFT JOIN ITH_USER ITHU ON ITD.ticketdetail_pichandleby = ITHU.user_nik
								LEFT JOIN ITH_USER ITHU2 ON ITD.ticketdetail_pichandleby2 = ITHU2.user_nik
								LEFT JOIN ITH_USER ITHU3 ON ITD.ticketdetail_pichandleby3 = ITHU3.user_nik
								WHERE ITD.ticketdetail_id = '$_GET[pid]' AND ITD.ticketdetail_pichandleby3 != '$_SESSION[user_nik]' 								
								");
					$rvaprvl1c = mysql_fetch_object($qvaprvl1c);
					#	echo "<option value= '-'> - </option>";
					#	echo "<option value= '$rvaprvlcx2->ticketdetail_pichandleby3' style=background:red;color:#fff;> $rvaprvlcx2->uname3</option>";
						#echo "<option value= 'test' style=background:red;color:#fff;> test</option>";
					if(($rvaprvl1c->ticketdetail_pichandleby3 == NULL)||($rvaprvl1c->ticketdetail_pichandleby3 == '-'))
					{
						echo "<option value= '-'> - </option>";
					#	echo "<option value= '$rvaprvl1c->ticketapproval_id1' style=background:red;color:#fff;> $rvaprvl1c->ticketapproval_by1</option>";
					}elseif(($rvaprvl1c->ticketdetail_pichandleby3 != NULL)||($rvaprvl1c->ticketdetail_pichandleby3 != '-')){
						echo "<option value= '$rvaprvl1c->ticketdetail_pichandleby3' style=background:red;color:#fff;> $rvaprvl1c->uname3</option>";
					}						
						
				}
				echo "<option value= '-'> - </option>";
				while($rvaprvlcx = mysql_fetch_object($qvaprvl1cx)) 
				//$uname1x = ucwords(strtolower($rvaprvl1a->user_realname));
				{
						echo "<option value= '$rvaprvlcx->user_nik'>$rvaprvlcx->user_realname ($rvaprvlcx->user_nik - $rvaprvlcx->userdepartemen_id)</option>";
				}
				?>
				</select>			
			 </td>
          </tr>			
		 <tr>
            <td valign="top">Notes From Admins :  <span class="note" style="color:red;">*</span></td>
            <td valign="top">
			<?if($ticket_id!='') {?>
				<!--<form action="index.php?m=form&a=nfa&pid=<!?=$_GET['pid'];?>" method="post" enctype="multipart/form-data" name="form1">-->
				<? 
					$qvnoteadmin = mysql_query("SELECT ticket_problem FROM ITH_TICKET_HEADER WHERE ticket_id='$_GET[pid]'");
					$rvnoteadmin = mysql_fetch_object($qvnoteadmin);
					#$ticketnote_admin = str_replace('  ', ' ', $teks);
					#$ticketnote_admin = str_replace(' ', '">', $rvnoteadmin->ticketnote_admin);
					$ticketnote_admin = $rvnoteadmin->ticket_problem;
					if($ticketnote_admin!=''){
				?>
				  <textarea name="ticketnote_picto1" id="ticketnote_picto1" rows="15" class="input" ><?=$ticketnote_admin;?></textarea>
				 <? }else{?>
					<textarea name="ticketnote_picto1" id="ticketnote_picto1" rows="15" class="input"></textarea>
			<? } ?>	
			<? } ?>
			<!--</form>	-->
			 </td>
          </tr>
		 <tr>
            <td valign="top">Status Requests :  <span class="note" style="color:red;">*</span></td>
            <td valign="top">
				<select class="required" style="width:320px;" name="ticketstatus_id" >	
				<?
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con); //@session_start();
					$qvcat = mysql_query("SELECT ticketstatus_id, ticketstatus_name FROM ITH_TICKETSTATUS WHERE ticketstatus_id IN ('2','3','0')
					ORDER by ticketstatus_id ASC");				
				if($ticket_id!='') {
					$con = mysql_connect("localhost","usrservicedesk","kfc14022");
					mysql_select_db("servicedesk",$con);
					//@session_start();
					$qvcat2 = mysql_query("SELECT ith_ticket_header.*, ITH_TICKETSTATUS.* FROM ith_ticket_header 
					LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKETSTATUS.ticketstatus_id = ith_ticket_header.ticketstatus_id
					WHERE ith_ticket_header.ticket_id= '$_GET[pid]'");
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
 
<?}elseif($userlevel=='21'||$userlevel=='22'||$userlevel=='23'){ ?> 
PIC Page
 <? } ?>
 <?php
  $genderErr ="";
  $gender="";
  //if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["ticket_priority"])) {
    $genderErr = "Ticket Priority is required";
  } else {
    $gender = test_input($_POST["ticket_priority"]);
  }
  
  //}
 ?>
<script type="text/javascript" src="jquery/jquery.min.js"></script>
<script type="text/javascript" src="jquery/jquery.validate.min.js"></script>
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
						required: "Kolom Status Request Wajib Dipilih"						
					},
					ticket_subject: {
						required: "Subject Harus Diisi"						
					},
					ticket_problem: {
						required: "Desc Harus Diisi"						
					},
					ticketdetail_pichandleby: {
						required: "PIC Harus Diisi"						
					}
					
				}
			});
		});
		
$('#clickme').click(function() {
  $('#book').toggle('slow', function() {
  });
});

function gantiSelect2(val) {
	$.ajax
	({
		url: 'select2.php',
		type: 'POST',
		data: 'select1='+val,
		cache: false,
		success: function(response)
		{
			$('#select2').html(response);	
		}
	})
}

function gantiSelect2b(val) {
	$.ajax
	({
		url: 'select2.php',
		type: 'POST',
		data: 'select1='+val,
		cache: false,
		success: function(response)
		{
			$('#select2b').html(response);
		}
	})
}
function gantiSelect2c(val) {
	$.ajax
	({
		url: 'select2.php',
		type: 'POST',
		data: 'select1='+val,
		cache: false,
		success: function(response)
		{
			$('#select2c').html(response);
		}
	})
}
</script>

<script type="text/javascript">
$(document).ready(function() {	
	$('#user_name').autocomplete("reference.php?fn=g_user", {
		width: 350,
		selectFirst: true,
		mustMatch: true
	});
	$("#user_name").result(function(event, data, formatted) {
		if (data != undefined) {
			$("#userid").val(data[1]);
		}
	});
});
</script>
<script type="text/javascript" src="jquery/jquery.min.js"></script>
<script type="text/javascript" src="jquery/jquery.validate.min.js"></script>

