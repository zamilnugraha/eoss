<?phprequire 'koneksi.php';koneksi_buka();$id_mediarelation = $_POST['id'];$data = mysql_fetch_array(mysql_query("SELECT * FROM tblmediarelation WHERE id_mediarelation =".$id_mediarelation.""));if($id_mediarelation > 0) { 	$title_mediarelation = $data['title_mediarelation'];		$descr_mediarelation = $data['descr_mediarelation'];	$mpr_cat = $data['mpr_cat'];	$media_name = $data['media_name'];		$date_print = $data['date_print'];	$page_article = $data['page_article'];	$url = $data['url'];	$grafik_month = $data['grafik_month'];	$grafik_year = $data['grafik_year'];	$telephone = $data['telephone'];	$fax = $data['fax'];	$email = $data['email'];	$email_others = $data['email_others'];} else {	$title_mediarelation = '';	$kebutuhan_descr = '';		$mpr_cat = '';		$media_name = '';		$date_print = '';		$page_article = '';			$url = '';			$grafik_month = '';		$grafik_year = '';	$telephone = '';	$fax = '';	$email = '';	$email_others = '';}?><script type="text/javascript" src="scripts/jquery.min.js"></script><script type="text/javascript" src="scripts/jquery.form.js"></script><style>body{	font-family:arial;}.preview{	width:200px;	border:solid 1px #dedede;	padding:10px;}#preview{	color:#cc0000;	font-size:12px}</style><script type="text/javascript" src="./js/flowplayer-3.2.6.min.js"></script>	<script type="text/javascript" src="./js/jquery.js"></script><? 	$qcat = mysql_query("SELECT mpr_cat,descr_mediarelation FROM tblmediarelation WHERE id_mediarelation ='".$id_mediarelation."' ORDER BY id_mediarelation DESC");	$rcat = mysql_fetch_object($qcat);	if(($rcat->mpr_cat=='9')) {?>		<table class="table table-condensed table-bordered table-hover" style="margin-left:5px;width: 95%;height:50%;overflow:auto;" cellpadding="0" cellspacing="0">		<thead>			<tr>				<!--<th style="width:5px">No</th>-->				<th style="width:100px">Description Detail</th>			</tr>		</thead>		<tbody>		<tr>				<td>				<table>				<tr>				<?php 					echo '<td>'.$rcat->descr_mediarelation.'</td>';				?>								</tr></table>				</td>						</tr>				</tbody>		</table><? 	}elseif(($rcat->mpr_cat=='4')||($rcat->mpr_cat=='5')||($rcat->mpr_cat=='6')||($rcat->mpr_cat=='7')||($rcat->mpr_cat=='8')||($rcat->mpr_cat=='10')){	?><style>	#table-a{ 	font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;	font-size: 12px;	width: 855px;	text-align: center;	border-collapse: collapse;	border-left: 2px solid #fff;	border-right: 2px solid #fff;	}	/**	#table-a th{ 	font-size: 13px;	font-weight: normal;	padding: 8px;	background: #b9c9fe;	border-top: 4px solid #aabcfe;	border-bottom: 1px solid #fff;	border-left: 2px solid #fff;	border-right: 2px solid #fff;	color: #039;	border-collapse: collapse;	}	**/	#table-a th	{	background: none repeat scroll 0 0 #0c5986;	border-bottom: 1px solid #fff;	border-top: 4px solid #aabcfe;	border-left: 1px solid #fff;	border-right: 1px solid #fff;	color: #fff;	font-size: 13px;	font-weight: normal;	padding: 8px;	}	#table-a td{ 	padding: 8px;	background: #e8edff;	border-bottom: 1px solid #fff;	/*color: #669;*/color: #000;	border-top: 1px solid transparent;	border-collapse: collapse;	border-left: 1px solid #fff;	border-right: 1px solid #fff;	font-familiy:Exo2-Medium;	font-size:10pt;	}	#table-a tr:hover td{ 	/*background: #d0dafd;*/background: #ccd1d9;	/*color: #339;*/color: #fff;	}</style>								<table id="table-a" border="1" style="margin-left:10px;">	<thead><tr>		<th>No.</th><th>Deskripsi</th>		<!--		<th>TgL Publish</th><th>TgL Surat</th><th>No.Surat</th>		<th>Status</th><th>URL</th><th>Pasal Terkait</th><th>Jenis Pelanggaran</th><th>Deskripsi Pasal</th>		-->	 </tr></thead>		<?				$i=1;		$qvkeluhan = mysql_query("SELECT * FROM tblmediarelation WHERE id_mediarelation ='".$id_mediarelation."' AND (mpr_cat!='9') ORDER BY id_mediarelation ASC");		while($rvkeluhan = mysql_fetch_object($qvkeluhan)){		?>		<tbody>			<tr>				<td><center><?=$id_mediarelation;?></td>				<td style="text-align:justify;">				<b><u><?=$rvkeluhan->nama_medianontv;?></u></b><br>				<!--?=$rvkeluhan->mpr_bagianname;?> >> <!?=$rvkeluhan->mpr_catname;?-->				<!--<br><br>-->				<b><u><?=$rvkeluhan->title_mediarelation;?></u></b><br>				<?=$rvkeluhan->descr_mediarelation;?>				</td>															</tr>		</tbody>		<?php } ?>	</table><? } ?><?php	koneksi_tutup();?>