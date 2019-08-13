<?php //if (empty($_BASE_PATH)) {header("location:index.php");}
@session_start();
require_once('_includes.php');
$userlevel=$_SESSION['user_level'];
 ?>
<link type="text/css" href="css/custom.css" rel="stylesheet" />
<!--<link href="requestlist/css/bootstrap.min.css" rel="stylesheet" media="screen">-->

<? if(($userlevel == 1)){ /* SEND MAIL TO AREA MANAGER FROM STORE REQUEST */?>	

	<!-- KETIKA STATUS KIRIM EMAIL HASILNYA GAGAL KIRIM -->
	<? if($_GET['status']=='sendfailed'){ ?>
		<div id="content" style="height:560px;margin-top:100px;">
			<div class="header">
			</div>
			<div class="body" style="height:500px;">				
				<div style="text-align:center;margin-top:200px;font-size:14pt;color:#fff;">	
				<? 
					error_reporting(E_STRICT);
					date_default_timezone_set('America/Toronto');
					require_once('email/class.phpmailer.php');
					$mail             = new PHPMailer();

					$mail->IsSMTP();
					$mail->SMTPDebug  = 1;           
					$mail->SMTPKeepAlive = false;                                     
					$mail->SMTPAuth   	 = true;       
					$mail->Mailer 		 = 'smtp';   
					$mail->SMTPSecure    = 'ssl';
					$mail->Host       	 = 'mail.ffi.co.id';     
					#$mail->Host       	 = '117.54.9.179';     
					#$mail->Host       	 = '192.168.10.10';     
					$mail->Port       	 = 465;                  
					$mail->Username   	 = 'system.servicedesk@ffi.co.id';  
					$mail->Password   	 = 'Kfc_System';      
	
					$newid = $_GET['pid'];
					$usrid = $_SESSION['user_id'];
					$usrname = $_SESSION['user_realname'];	
					$usrnik = $_SESSION['user_nik'];
					$usrmail = $_SESSION['user_email'];
					$usrdept = $_SESSION['user_departemen'];
					$usrlvl = $_SESSION['user_level'];
					$ugroupid = $_SESSION['ugroupid'];
					$usubgroupid = $_SESSION['usubgroupid'];
					$usrnikatasan = $_SESSION['nik_atasan'];
					#$cdate = date('j F Y');
					#$cdate = date('d F Y');
					
					$cdate3a = date('j')+1;
					$cdate3b = date('F');
					$cdate3c = date('Y');			
					$cdate = $cdate3a.'&nbsp;'.$cdate3b.'&nbsp;'.$cdate3c;

					$cone =  mysql_connect('localhost','usrservicedesk','kfc14022');
								 mysql_select_db('servicedesk',$cone);
					
					$qCekDataX = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.* FROM ITH_TICKET_HEADER 
											  JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
											  WHERE ITH_TICKET_HEADER.ticket_id = '".$newid."'");
					$rCekDataX = mysql_fetch_object($qCekDataX);


					$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
					$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDU ANGGA'); 
					$mail->AddCC('mantechno2020@gmail.com', 'MANTECHNO');			
					$mail->AddCCProg1('wilujeng.lestari@ffi.co.id','ARYN');
								#	$mail->AddCCProg2('uu.budhi@ffi.co.id','UU BUDHI');
					$mail->AddCCProg1('wilujeng.lestari@ffi.co.id','ARYN');	

					$qCekDataBarangRequest = mysql_query("SELECT kode_tipebarang, nama_tipebarang, kode_tipebrg 
														  FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$newid."'");
					while($rCekDataBarangRequest = mysql_fetch_object($qCekDataBarangRequest))
					{
						if($rCekDataBarangRequest->kode_tipebrg=='RQS-03-000112')
						{	
							$myServer = $_SERVER["SERVER_NAME"].'/eoss';
							$objConnectx = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
							$qceknamabrg1 = "SELECT FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE AS KODE_BARANG,
									FSDBRGEQASSET_NEW.ITEM_NAME AS NAMA_BARANG,FSDBRGEQASSET_NEW.ITEM_BRAND AS MERK_BARANG,
									FSDBRGEQASSET_NEW.ITEM_MODEL AS MODEL,
									FSDBRGEQASSET_NEW.ITEM_PRICE AS HARGA_TERAKHIR
									FROM FSDBRGEQ_NEW
									JOIN FSDSGROUP ON FSDBRGEQ_NEW.GROUP_CODE = FSDSGROUP.KODE_GROUP
									JOIN FSDBRGEQASSET_NEW ON FSDBRGEQ_NEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
									JOIN FSDEQTYPE_NEW ON FSDBRGEQ_NEW.EQTYPECODE = FSDEQTYPE_NEW.EQTYPECODE
									WHERE FSDEQTYPE_NEW.EQTYPECODE = 'EQ0001' AND FSDBRGEQ_NEW.ITEM_CODE = '".$rCekDataBarangRequest->kode_tipebarang."'";  
							$objParsenamabrg1 = oci_parse ($objConnectx, $qceknamabrg1);  
									   oci_execute ($objParsenamabrg1,OCI_DEFAULT);
							while($objResultnamabrg1 = oci_fetch_array($objParsenamabrg1,OCI_BOTH))
							{
								$namabarangs1a = preg_replace('/[^A-Za-z0-9\  ]/', '', $objResultnamabrg1['NAMA_BARANG']);
							}	
						}elseif($rCekDataBarangRequest->kode_tipebrg=='RQS-03-000113')
						{		
							$qceknamabrg2 = "SELECT FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE AS KODE_BARANG,
											FSDBRGEQASSET_NEW.ITEM_NAME AS NAMA_BARANG,FSDBRGEQASSET_NEW.ITEM_BRAND AS MERK_BARANG,
											FSDBRGEQASSET_NEW.ITEM_MODEL AS MODEL,
											FSDBRGEQASSET_NEW.ITEM_PRICE AS HARGA_TERAKHIR
											FROM FSDBRGEQ_NEW
											JOIN FSDSGROUP ON FSDBRGEQ_NEW.GROUP_CODE = FSDSGROUP.KODE_GROUP
											JOIN FSDBRGEQASSET_NEW ON FSDBRGEQ_NEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
											JOIN FSDEQTYPE_NEW ON FSDBRGEQ_NEW.EQTYPECODE = FSDEQTYPE_NEW.EQTYPECODE
											WHERE FSDEQTYPE_NEW.EQTYPECODE = 'EQ0002' AND FSDBRGEQ_NEW.ITEM_CODE = '".$rCekDataBarangRequest->kode_tipebarang."'";  					
							$objParsenamabrg2 = oci_parse ($objConnectx, $qceknamabrg2);  
											   oci_execute ($objParsenamabrg2,OCI_DEFAULT);
							while($objResultnamabrg2 = oci_fetch_array($objParsenamabrg2,OCI_BOTH))
							{
								$namabarangs2a = preg_replace('/[^A-Za-z0-9\  ]/', '', $objResultnamabrg2['NAMA_BARANG']);
							}
						}elseif($rCekDataBarangRequest->kode_tipebrg=='RQS-03-000114')
						{					
							$qceknamabrg3 = "SELECT FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE AS KODE_BARANG,
											FSDBRGEQASSET_NEW.ITEM_NAME AS NAMA_BARANG,FSDBRGEQASSET_NEW.ITEM_BRAND AS MERK_BARANG,
											FSDBRGEQASSET_NEW.ITEM_MODEL AS MODEL,
											FSDBRGEQASSET_NEW.ITEM_PRICE AS HARGA_TERAKHIR
											FROM FSDBRGEQ_NEW
											JOIN FSDSGROUP ON FSDBRGEQ_NEW.GROUP_CODE = FSDSGROUP.KODE_GROUP
											JOIN FSDBRGEQASSET_NEW ON FSDBRGEQ_NEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
											JOIN FSDEQTYPE_NEW ON FSDBRGEQ_NEW.EQTYPECODE = FSDEQTYPE_NEW.EQTYPECODE
											WHERE FSDEQTYPE_NEW.EQTYPECODE = 'EQ0003' AND FSDBRGEQ_NEW.ITEM_CODE = '".$rCekDataBarangRequest->kode_tipebarang."'"; 					
							$objParsenamabrg3 = oci_parse ($objConnectx, $qceknamabrg3);  
											   oci_execute ($objParsenamabrg3,OCI_DEFAULT);
							while($objResultnamabrg3 = oci_fetch_array($objParsenamabrg3,OCI_BOTH))
							{
								$namabarangs3a = preg_replace('/[^A-Za-z0-9\  ]/', '', $objResultnamabrg3['NAMA_BARANG']);
							}
						}
						$qtycold = $_POST['textseqcold'][$value_cek1a];
						$qtyheat = $_POST['textseqheat'][$value_cek2a];
						$qtyfoodprocessing = $_POST['textseqfoodprocessing'][$value_cek3a];
					}
					$mail->Subject    = "[E-OPERATION SUPPORT PROGRAM].APPROVAL-FOR-AREA-MANAGER : $rCekDataX->ticket_subject";
					$mail->AltBody    = "$rCekDataX->ticket_subject"; 
					
					$mail->Body .= "	
					This is a request by : $rCekDataX->user_realname For Your Approval with details as follows :<br>
						<ul>
							<li>Request ID : $newid X1</li>
							<li>Category : Equipment</li>
							<li>Subject : $rCekDataX->ticket_subject</li>
							<li>Status : Open</li>
							<li>Ticket Create date : $cdate</li>
							<li>Item Name 1 : $namabarangs1a</li>
							<li>Quantity Requested 1 : $qtycold</li>
							<li>Item Name 2 : $namabarangs2a</li>
							<li>Quantity Requested 2 : $qtyheat</li>
							<li>Item Name 3 : $namabarangs3a</li>
							<li>Quantity Requested 3 : $qtyfoodprocessing</li>
						</ul>
					<hr>
					Reason / Justification :	<br>$rCekDataX->ticket_problem<br><br>
					<hr>
					For Approval, Please Click in here (<a href='http://$myServer/?m=notifmail&a=sendauth&pid=$newid&uid=$usrnikatasan'>Click In Here</a>)	
					<br><br>
					Regards,<br><br>
					$rCekDataX->user_realname";
				if(!$mail->Send()) 
				{
					/* OFFLINE */			
				?>
					<?="<br>A1".$mail->ErrorInfo; #exit;?><br><br>
					<b>SORRY,MESSAGE NOT SEND !!!</b><br>
					<b>PLEASE RESEND YOUR REQUEST, UNTIL SUCCESFULLY SUBMITED !!!</b><br>					
					<br>
					<button onclick="location.href = '?view=sendmailtoarea&status=resendprocess&pid=<?=$_GET['pid'];?>&uid=<?=$_SESSION['user_nik'];?>';" id="myButton" class="submit-btn">RESEND</button>&nbsp;
				</div>				
				<div><br></div>
				<div><br></div>	
				<? 
				} else {
					/* ONLINE */					
				##	header ("Location: index.php?view=storemessage");
					header ("Location: index.php?view=sendmailtoarea&status=resendsuccess&pid=$newid");
							
				?>
				<? } ?>	
			</div>
		</div>

	<!-- KETIKA STATUS KIRIM EMAIL HASILNYA SUKSES KIRIM -->		
	<? }elseif($_GET['status']=='sendsuccess'){ ?>
		<?php
		/*if(($category=='1')||($category=='2')||($category=='5')||($category=='6')||($category=='7')||($category=='8')
									||($category=='35')||($category=='36')||($category=='37'))
		{ */
					error_reporting(E_STRICT);
					date_default_timezone_set('America/Toronto');
					require_once('email/class.phpmailer.php');
					$mail             = new PHPMailer();

					$mail->IsSMTP();
					$mail->SMTPDebug  = 1;           
					$mail->SMTPKeepAlive = false;                                     
					$mail->SMTPAuth   	 = true;       
					$mail->Mailer 		 = 'smtp';   
					$mail->SMTPSecure    = 'ssl';
					$mail->Host       	 = 'mail.ffi.co.id';     
					#$mail->Host       	 = '117.54.9.179';     
					#$mail->Host       	 = '192.168.10.10';     
					$mail->Port       	 = 465;                  
					$mail->Username   	 = 'system.servicedesk@ffi.co.id';  
					$mail->Password   	 = 'Kfc_System';      
	
					$newid = $_GET['pid'];
					$usrid = $_SESSION['user_id'];
					$usrname = $_SESSION['user_realname'];	
					$usrnik = $_SESSION['user_nik'];
					$usrmail = $_SESSION['user_email'];
					$usrdept = $_SESSION['user_departemen'];
					$usrlvl = $_SESSION['user_level'];
					$ugroupid = $_SESSION['ugroupid'];
					$usubgroupid = $_SESSION['usubgroupid'];
					$usrnikatasan = $_SESSION['nik_atasan'];
					#$cdate = date('j F Y');
					#$cdate = date('d F Y');
					
					$cdate3a = date('j')+1;
					$cdate3b = date('F');
					$cdate3c = date('Y');			
					$cdate = $cdate3a.'&nbsp;'.$cdate3b.'&nbsp;'.$cdate3c;

					$cone =  mysql_connect('localhost','usrservicedesk','kfc14022');
								 mysql_select_db('servicedesk',$cone);
					
					$qCekDataX = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.* FROM ITH_TICKET_HEADER 
											  JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
											  WHERE ITH_TICKET_HEADER.ticket_id = '".$newid."'");
					$rCekDataX = mysql_fetch_object($qCekDataX);


					$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
					$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDU ANGGA'); 
					$mail->AddCC('mantechno2020@gmail.com', 'MANTECHNO');			
					$mail->AddCCProg1('wilujeng.lestari@ffi.co.id','ARYN');
								#	$mail->AddCCProg2('uu.budhi@ffi.co.id','UU BUDHI');
					
					$qCekDataBarangRequest = mysql_query("SELECT kode_tipebarang, nama_tipebarang, kode_tipebrg 
														  FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$newid."'");
					while($rCekDataBarangRequest = mysql_fetch_object($qCekDataBarangRequest))
					{
						if(($rCekDataBarangRequest->kode_tipebrg=='RQS-03-000112')||($rCekDataBarangRequest->kode_tipebrg=='RQS-03-000112replace')||
						($rCekDataBarangRequest->kode_tipebrg=='RQS-03-000112move'))
						{	
							$myServer = $_SERVER["SERVER_NAME"].'/eoss';
							$objConnectx = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
							$qceknamabrg1 = "SELECT FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE AS KODE_BARANG,
									FSDBRGEQASSET_NEW.ITEM_NAME AS NAMA_BARANG,FSDBRGEQASSET_NEW.ITEM_BRAND AS MERK_BARANG,
									FSDBRGEQASSET_NEW.ITEM_MODEL AS MODEL,
									FSDBRGEQASSET_NEW.ITEM_PRICE AS HARGA_TERAKHIR
									FROM FSDBRGEQ_NEW
									JOIN FSDSGROUP ON FSDBRGEQ_NEW.GROUP_CODE = FSDSGROUP.KODE_GROUP
									JOIN FSDBRGEQASSET_NEW ON FSDBRGEQ_NEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
									JOIN FSDEQTYPE_NEW ON FSDBRGEQ_NEW.EQTYPECODE = FSDEQTYPE_NEW.EQTYPECODE
									WHERE FSDEQTYPE_NEW.EQTYPECODE = 'EQ0001' AND FSDBRGEQ_NEW.ITEM_CODE = '".$rCekDataBarangRequest->kode_tipebarang."'";  
							$objParsenamabrg1 = oci_parse ($objConnectx, $qceknamabrg1);  
									   oci_execute ($objParsenamabrg1,OCI_DEFAULT);
							while($objResultnamabrg1 = oci_fetch_array($objParsenamabrg1,OCI_BOTH))
							{
								$namabarangs1a = preg_replace('/[^A-Za-z0-9\  ]/', '', $objResultnamabrg1['NAMA_BARANG']);
							}	
						}elseif(($rCekDataBarangRequest->kode_tipebrg=='RQS-03-000113')||($rCekDataBarangRequest->kode_tipebrg=='RQS-03-000113replace')||
						($rCekDataBarangRequest->kode_tipebrg=='RQS-03-000113move'))
						{		
							$qceknamabrg2 = "SELECT FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE AS KODE_BARANG,
											FSDBRGEQASSET_NEW.ITEM_NAME AS NAMA_BARANG,FSDBRGEQASSET_NEW.ITEM_BRAND AS MERK_BARANG,
											FSDBRGEQASSET_NEW.ITEM_MODEL AS MODEL,
											FSDBRGEQASSET_NEW.ITEM_PRICE AS HARGA_TERAKHIR
											FROM FSDBRGEQ_NEW
											JOIN FSDSGROUP ON FSDBRGEQ_NEW.GROUP_CODE = FSDSGROUP.KODE_GROUP
											JOIN FSDBRGEQASSET_NEW ON FSDBRGEQ_NEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
											JOIN FSDEQTYPE_NEW ON FSDBRGEQ_NEW.EQTYPECODE = FSDEQTYPE_NEW.EQTYPECODE
											WHERE FSDEQTYPE_NEW.EQTYPECODE = 'EQ0002' AND FSDBRGEQ_NEW.ITEM_CODE = '".$rCekDataBarangRequest->kode_tipebarang."'";  					
							$objParsenamabrg2 = oci_parse ($objConnectx, $qceknamabrg2);  
											   oci_execute ($objParsenamabrg2,OCI_DEFAULT);
							while($objResultnamabrg2 = oci_fetch_array($objParsenamabrg2,OCI_BOTH))
							{
								$namabarangs2a = preg_replace('/[^A-Za-z0-9\  ]/', '', $objResultnamabrg2['NAMA_BARANG']);
							}
						}elseif(($rCekDataBarangRequest->kode_tipebrg=='RQS-03-000114')||($rCekDataBarangRequest->kode_tipebrg=='RQS-03-000114replace')||
						($rCekDataBarangRequest->kode_tipebrg=='RQS-03-000114move'))
						{					
							$qceknamabrg3 = "SELECT FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE AS KODE_BARANG,
											FSDBRGEQASSET_NEW.ITEM_NAME AS NAMA_BARANG,FSDBRGEQASSET_NEW.ITEM_BRAND AS MERK_BARANG,
											FSDBRGEQASSET_NEW.ITEM_MODEL AS MODEL,
											FSDBRGEQASSET_NEW.ITEM_PRICE AS HARGA_TERAKHIR
											FROM FSDBRGEQ_NEW
											JOIN FSDSGROUP ON FSDBRGEQ_NEW.GROUP_CODE = FSDSGROUP.KODE_GROUP
											JOIN FSDBRGEQASSET_NEW ON FSDBRGEQ_NEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
											JOIN FSDEQTYPE_NEW ON FSDBRGEQ_NEW.EQTYPECODE = FSDEQTYPE_NEW.EQTYPECODE
											WHERE FSDEQTYPE_NEW.EQTYPECODE = 'EQ0003' AND FSDBRGEQ_NEW.ITEM_CODE = '".$rCekDataBarangRequest->kode_tipebarang."'"; 					
							$objParsenamabrg3 = oci_parse ($objConnectx, $qceknamabrg3);  
											   oci_execute ($objParsenamabrg3,OCI_DEFAULT);
							while($objResultnamabrg3 = oci_fetch_array($objParsenamabrg3,OCI_BOTH))
							{
								$namabarangs3a = preg_replace('/[^A-Za-z0-9\  ]/', '', $objResultnamabrg3['NAMA_BARANG']);
							}
						}
						$qtycold = $_POST['textseqcold'][$value_cek1a];
						$qtyheat = $_POST['textseqheat'][$value_cek2a];
						$qtyfoodprocessing = $_POST['textseqfoodprocessing'][$value_cek3a];
					}
					$mail->Subject    = "[E-OPERATION SUPPORT PROGRAM].APPROVAL-FOR-AREA-MANAGER-ERPLACE : $rCekDataX->ticket_subject";
					$mail->AltBody    = "$rCekDataX->ticket_subject"; 
					
				/*	$mail->Body .= "	
					This is a request by : $rCekDataX->user_realname For Your Approval with details as follows :<br>
						<ul>
							<li>Request ID : $newid X2</li>
							<li>Category : Equipment</li>
							<li>Subject : $rCekDataX->ticket_subject</li>
							<li>Status : Open</li>
							<li>Ticket Create date : $cdate</li>
							<li>Item Name 1 : $namabarangs1a</li>
							<li>Item Name 2 : $namabarangs2a</li>
							<li>Item Name 3 : $namabarangs3a</li>
						</ul>
					<hr>
					Reason / Justification :	<br>$rCekDataX->ticket_problem<br><br>
					<hr>
					For Approval, Please Click in here (<a href='http://$myServer/?m=notifmail&a=sendauth&pid=$newid&uid=$usrnikatasan'>Click In Here</a>)	
					<br><br>
					Regards,<br><br>
					$rCekDataX->user_realname"; */
				#$mail->Body .= "									
				$bodymail1 .= "									
				<br>This is a request by : $rCekDataX->user_realname For Your Approval with details as follows :<br>
				<ul>
					<li>Request ID : $newid</li>
					<li>Category : Equipment</li>
					<li>Subject : $rCekDataX->ticket_subject</li>
					<li>Status : Open</li>
					<li>Ticket Create date : $cdate</li>";
				$qCekDataYangDiApprovedTest = mysql_query("SELECT * FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$newid."'
															AND ticketapprovalstatusid_am ='2'");
				while($rCekDataYangDiApprovedTest = mysql_fetch_object($qCekDataYangDiApprovedTest))
				{
				/**
					$allItemName = preg_replace('/[^A-Za-z0-9\  ]/', '', $rCekDataYangDiApprovedTest->nama_tipebarang);
					$qtyItemXY = $rCekDataYangDiApprovedTest->kuantitas;			
					$bodymail2 .= "																		
									<li>Item Name  : $allItemName</li> 
									<li>The amount of goods  : $qtyItemXY Unit</li>";
				**/
					$allItemName = preg_replace('/[^A-Za-z0-9\  ]/', '', $rCekDataYangDiApprovedTest->nama_tipebarang);
					$transferToOutletName = preg_replace('/[^A-Za-z0-9\  ]/', '', $rCekDataYangDiApprovedTest->tickettransferto_outletname);
					$transferToOutletNames = ucwords(strtolower($transferToOutletName));
					$qtyItemXY = $rCekDataYangDiApprovedTest->kuantitas.' Unit';			
					if($rCekDataYangDiApprovedTest->keterangan == 'MOVE TO OTHER STORE')
					{
						$bodymail2 .= "																		
									<li>Item Name   : $allItemName</li>
									<li>Transfer To : $transferToOutletNames</li>";
					}elseif($rCekDataYangDiApprovedTest->keterangan == 'MOVE TO WAREHOUSE')
					{
						$bodymail2 .= "																		
									<li>Item Name   : $allItemName</li>
									<li>Transfer To : Warehouse</li>";
					}elseif($rCekDataYangDiApprovedTest->keterangan == 'REPLACEMENT REQUEST'){
						$bodymail2 .= "																		
									<li>Item Name  : $allItemName</li>";
					}elseif($rCekDataYangDiApprovedTest->keterangan == 'ADDING REQUEST'){
						$bodymail2 .= "																		
									<li>Item Name  : $allItemName</li> 
									<li>The amount of goods  : $qtyItemXY </li>";
					}						
				}				
					$bodymail3 .= "
																		
							</ul>
							<hr>
							Reason / Justification :	<br>$rCekDataX->ticket_problem<br><br>
							<hr>
							For Approval, Please Click In Here (<a href='http://$myServer/?m=notifmail&a=sendauth&pid=$newid&uid=$usrnikatasan'>Click Here</a>)
							<br><br>Regards,<br><br>
							$rCekDataX->user_realname";
						#	$allbodymail = $bodymail1.$bodymail2.$bodymail3.$bodymail3;
							$allbodymail = $bodymail1.$bodymail2.$bodymail3;
							$mail->Body .= $allbodymail;						
				if(!$mail->Send()) 
				{
		?>	
					<?="<br>A2".$mail->ErrorInfo; #exit;?><br><br>
					<b>SORRY,MESSAGE NOT SEND !!!</b><br>
					<b>PLEASE RESEND YOUR REQUEST, UNTIL SUCCESFULLY SUBMITED !!!</b><br>					
					<br>
					<button onclick="location.href = '?view=sendmailtoarea&status=resendprocess&pid=<?=$_GET['pid'];?>&uid=<?=$_SESSION['user_nik'];?>';" id="myButton" class="submit-btn">RESEND</button>&nbsp;
				</div>				
				<div><br></div>
				<div><br></div>			
				<? }else{ ?>
			<div id="content" style="height:560px;margin-top:100px;">
				<div class="header">
				</div>
				<div class="body" style="height:500px;">					
					<div style="text-align:center;margin-top:300px;font-size:14pt;color:#fff;"> 
					<? 
						$cone =  mysql_connect('localhost','usrservicedesk','kfc14022');
								 mysql_select_db('servicedesk',$cone);
															
						$qCekDataX = mysql_query("SELECT ticketstatus_id FROM ITH_TICKET_HEADER WHERE ticket_id = '".$_GET['pid']."'");
						$rCekDataX = mysql_fetch_object($qCekDataX);	
						if($rCekDataX->ticketstatus_id=='2')
						{	
					?>	
						<div style="text-align:center;margin-top:300px;font-size:14pt;color:#fff;"> 
							<b>REQUEST SUCCESFULLY SUBMITTED !!!</b><br>
							<br>
							<button onclick="location.href = '?m=info&pid=<?=$_GET['pid'];?>&uid=<?=$_SESSION['user_nik'];?>';" id="myButton" class="submit-btn">OK</button>&nbsp;
						</div>
					<? 
						}elseif($rCekDataX->ticketstatus_id=='5'){
					?>		
						<div style="text-align:center;margin-top:300px;font-size:14pt;color:#fff;"> 
							<b>REQUEST SUCCESFULLY CLOSED !!!</b><br>
							<br>
							<button onclick="location.href = '?m=info&pid=<?=$_GET['pid'];?>&uid=<?=$_SESSION['user_nik'];?>';" id="myButton" class="submit-btn">OK</button>&nbsp;
						</div>
					<? } ?>			
					</div>					
					<div><br></div>
					<div><br></div>		
				</div>
			</div>
			   <? } //if(!$mail->Send())   ?>	
			   
	<!-- KETIKA STATUS KIRIM EMAIL HASILNYA MENCOBA UNTUK PROSES KIRIM ULANG KEMBALI -->	
	<? }elseif($_GET['status']=='resendprocess'){ ?>
		<div id="content" style="height:160px;margin-top:20px;">
			<div class="header">
			</div>
			<div class="body" style="height:100px;">				
				<div style="text-align:center;margin-top:10px;font-size:14pt;color:#fff;">		
		<?php
		
					error_reporting(E_STRICT);
					date_default_timezone_set('America/Toronto');
					require_once('email/class.phpmailer.php');
					$mail             = new PHPMailer();

					$mail->IsSMTP();
					$mail->SMTPDebug  = 1;           
					$mail->SMTPKeepAlive = false;                                     
					$mail->SMTPAuth   	 = true;       
					$mail->Mailer 		 = 'smtp';   
					$mail->SMTPSecure    = 'ssl';
					$mail->Host       	 = 'mail.ffi.co.id';     
					#$mail->Host       	 = '117.54.9.179';     
					#$mail->Host       	 = '192.168.10.10';     
					$mail->Port       	 = 465;                  
					$mail->Username   	 = 'system.servicedesk@ffi.co.id';  
					$mail->Password   	 = 'Kfc_System';      
	
					$newid = $_GET['pid'];
					$usrid = $_SESSION['user_id'];
					$usrname = $_SESSION['user_realname'];	
					$usrnik = $_SESSION['user_nik'];
					$usrmail = $_SESSION['user_email'];
					$usrdept = $_SESSION['user_departemen'];
					$usrlvl = $_SESSION['user_level'];
					$ugroupid = $_SESSION['ugroupid'];
					$usubgroupid = $_SESSION['usubgroupid'];
					$usrnikatasan = $_SESSION['nik_atasan'];
					#$cdate = date('j F Y');
					#$cdate = date('d F Y');
					
					$cdate3a = date('j')+1;
					$cdate3b = date('F');
					$cdate3c = date('Y');			
					$cdate = $cdate3a.'&nbsp;'.$cdate3b.'&nbsp;'.$cdate3c;

					$cone =  mysql_connect('localhost','usrservicedesk','kfc14022');
								 mysql_select_db('servicedesk',$cone);
					
					$qCekDataX = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.* FROM ITH_TICKET_HEADER 
											  JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
											  WHERE ITH_TICKET_HEADER.ticket_id = '".$newid."'");
					$rCekDataX = mysql_fetch_object($qCekDataX);


					$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
					$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDU ANGGA'); 
					$mail->AddCC('mantechno2020@gmail.com', 'MANTECHNO');			
					$mail->AddCCProg1('wilujeng.lestari@ffi.co.id','ARYN');
								#	$mail->AddCCProg2('uu.budhi@ffi.co.id','UU BUDHI');
					
					$qCekDataBarangRequest = mysql_query("SELECT kode_tipebarang, nama_tipebarang, kode_tipebrg, kuantitas 
														  FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$newid."'");
					while($rCekDataBarangRequest = mysql_fetch_object($qCekDataBarangRequest))
					{
						if($rCekDataBarangRequest->kode_tipebrg=='RQS-03-000112')
						{	
							$myServer = $_SERVER["SERVER_NAME"].'/eoss';
							$objConnectx = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
							$qtycold = $rCekDataBarangRequest->kuantitas;
							$qceknamabrg1 = "SELECT FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE AS KODE_BARANG,
									FSDBRGEQASSET_NEW.ITEM_NAME AS NAMA_BARANG,FSDBRGEQASSET_NEW.ITEM_BRAND AS MERK_BARANG,
									FSDBRGEQASSET_NEW.ITEM_MODEL AS MODEL,
									FSDBRGEQASSET_NEW.ITEM_PRICE AS HARGA_TERAKHIR
									FROM FSDBRGEQ_NEW
									JOIN FSDSGROUP ON FSDBRGEQ_NEW.GROUP_CODE = FSDSGROUP.KODE_GROUP
									JOIN FSDBRGEQASSET_NEW ON FSDBRGEQ_NEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
									JOIN FSDEQTYPE_NEW ON FSDBRGEQ_NEW.EQTYPECODE = FSDEQTYPE_NEW.EQTYPECODE
									WHERE FSDEQTYPE_NEW.EQTYPECODE = 'EQ0001' AND FSDBRGEQ_NEW.ITEM_CODE = '".$rCekDataBarangRequest->kode_tipebarang."'";  
							$objParsenamabrg1 = oci_parse ($objConnectx, $qceknamabrg1);  
									   oci_execute ($objParsenamabrg1,OCI_DEFAULT);
							while($objResultnamabrg1 = oci_fetch_array($objParsenamabrg1,OCI_BOTH))
							{
								$namabarangs1a = preg_replace('/[^A-Za-z0-9\  ]/', '', $objResultnamabrg1['NAMA_BARANG']);
							}	
							
						}elseif($rCekDataBarangRequest->kode_tipebrg=='RQS-03-000113')
						{		
							$qtyheat = $rCekDataBarangRequest->kuantitas;
							$qceknamabrg2 = "SELECT FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE AS KODE_BARANG,
											FSDBRGEQASSET_NEW.ITEM_NAME AS NAMA_BARANG,FSDBRGEQASSET_NEW.ITEM_BRAND AS MERK_BARANG,
											FSDBRGEQASSET_NEW.ITEM_MODEL AS MODEL,
											FSDBRGEQASSET_NEW.ITEM_PRICE AS HARGA_TERAKHIR
											FROM FSDBRGEQ_NEW
											JOIN FSDSGROUP ON FSDBRGEQ_NEW.GROUP_CODE = FSDSGROUP.KODE_GROUP
											JOIN FSDBRGEQASSET_NEW ON FSDBRGEQ_NEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
											JOIN FSDEQTYPE_NEW ON FSDBRGEQ_NEW.EQTYPECODE = FSDEQTYPE_NEW.EQTYPECODE
											WHERE FSDEQTYPE_NEW.EQTYPECODE = 'EQ0002' AND FSDBRGEQ_NEW.ITEM_CODE = '".$rCekDataBarangRequest->kode_tipebarang."'";  					
							$objParsenamabrg2 = oci_parse ($objConnectx, $qceknamabrg2);  
											   oci_execute ($objParsenamabrg2,OCI_DEFAULT);
							while($objResultnamabrg2 = oci_fetch_array($objParsenamabrg2,OCI_BOTH))
							{
								$namabarangs2a = preg_replace('/[^A-Za-z0-9\  ]/', '', $objResultnamabrg2['NAMA_BARANG']);
							}
						}elseif($rCekDataBarangRequest->kode_tipebrg=='RQS-03-000114')
						{					
							$qtyfoodprocessing = $rCekDataBarangRequest->kuantitas;
							$qceknamabrg3 = "SELECT FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE AS KODE_BARANG,
											FSDBRGEQASSET_NEW.ITEM_NAME AS NAMA_BARANG,FSDBRGEQASSET_NEW.ITEM_BRAND AS MERK_BARANG,
											FSDBRGEQASSET_NEW.ITEM_MODEL AS MODEL,
											FSDBRGEQASSET_NEW.ITEM_PRICE AS HARGA_TERAKHIR
											FROM FSDBRGEQ_NEW
											JOIN FSDSGROUP ON FSDBRGEQ_NEW.GROUP_CODE = FSDSGROUP.KODE_GROUP
											JOIN FSDBRGEQASSET_NEW ON FSDBRGEQ_NEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
											JOIN FSDEQTYPE_NEW ON FSDBRGEQ_NEW.EQTYPECODE = FSDEQTYPE_NEW.EQTYPECODE
											WHERE FSDEQTYPE_NEW.EQTYPECODE = 'EQ0003' AND FSDBRGEQ_NEW.ITEM_CODE = '".$rCekDataBarangRequest->kode_tipebarang."'"; 					
							$objParsenamabrg3 = oci_parse ($objConnectx, $qceknamabrg3);  
											   oci_execute ($objParsenamabrg3,OCI_DEFAULT);
							while($objResultnamabrg3 = oci_fetch_array($objParsenamabrg3,OCI_BOTH))
							{
								$namabarangs3a = preg_replace('/[^A-Za-z0-9\  ]/', '', $objResultnamabrg3['NAMA_BARANG']);
							}
						}
						#$qtycold = $_POST['textseqcold'][$value_cek1a];
						#$qtyheat = $_POST['textseqheat'][$value_cek2a];
						#$qtyfoodprocessing = $_POST['textseqfoodprocessing'][$value_cek3a];
					}
					$mail->Subject    = "[E-OPERATION SUPPORT PROGRAM].APPROVAL-FOR-AREA-MANAGER : $rCekDataX->ticket_subject";
					$mail->AltBody    = "$rCekDataX->ticket_subject"; 
					
					$mail->Body .= "	
					This is a request by : $rCekDataX->user_realname For Your Approval with details as follows :<br>
						<ul>
							<li>Request ID : $newid RESEND MAIL 1</li>
							<li>Category : Equipment</li>
							<li>Subject : $rCekDataX->ticket_subject</li>
							<li>Status : Open</li>
							<li>Ticket Create date : $cdate</li>
							<li>Item Name 1 : $namabarangs1a</li>
							<li>Quantity Requested 1 : $qtycold</li>
							<li>Item Name 2 : $namabarangs2a</li>
							<li>Quantity Requested 2 : $qtyheat</li>
							<li>Item Name 3 : $namabarangs3a</li>
							<li>Quantity Requested 3 : $qtyfoodprocessing</li>
						</ul>
					<hr>
					Reason / Justification :	<br>$rCekDataX->ticket_problem<br><br>
					<hr>
					For Approval, Please Click in here (<a href='http://$myServer/?m=notifmail&a=sendauth&pid=$newid&uid=$usrnikatasan'>Click In Here</a>)	
					<br><br>
					Regards,<br><br>
					$rCekDataX->user_realname";
				if(!$mail->Send()) 
				{
		?>	
					<?="<br>A3".$mail->ErrorInfo; #exit;?><br><br>
					<b>SORRY,MESSAGE NOT SEND !!!</b><br>
					<b>PLEASE RESEND YOUR REQUEST, UNTIL SUCCESFULLY SUBMITED !!!</b><br>					
					<br>
					<button onclick="location.href = '?view=sendmailtoarea&status=resendprocess&pid=<?=$_GET['pid'];?>&uid=<?=$_SESSION['user_nik'];?>';" id="myButton" class="submit-btn">RESEND</button>&nbsp;
				</div>				
				<div><br></div>
				<div><br></div>	
				<!--? 
				} else {
					/* ONLINE */					
				##	header ("Location: index.php?view=storemessage");
					header ("Location: index.php?view=sendmailtoarea&status=resendsuccess&pid=$newid");
							
				?>
				<!--? } ?-->
				<? }else{ ?>	

						<b>REQUEST SUCCESFULLY SUBMITTED !!!</b><br>
						<br>
						<button onclick="location.href = '?m=info&pid=<?=$_GET['pid'];?>&uid=<?=$_SESSION['user_nik'];?>';" id="myButton" class="submit-btn">OK</button>&nbsp;
				</div>				
				<div><br></div>
				<div><br></div>	

			</div>
		</div>	
			   <? } //if(!$mail->Send())   ?>	
			   
			</div>
		</div>			   
	<? }elseif($_GET['status']=='resendfailed'){ ?>
		<div id="content" style="height:560px;margin-top:100px;">
			<div class="header">
			</div>
			<div class="body" style="height:500px;">				
				<div style="text-align:center;margin-top:300px;font-size:14pt;color:#fff;">					
					<b>SORRY,MESSAGE NOT SEND !!!</b><br>
					<b>PLEASE RESEND YOUR REQUEST, UNTIL SUCCESFULLY SUBMITED !!!</b><br>					
					<br>
					<button onclick="location.href = '?view=sendmailtoarea&status=resendprocess&pid=<?=$_GET['pid'];?>&uid=<?=$_SESSION['user_nik'];?>';" id="myButton" class="submit-btn">RESEND</button>&nbsp;
				</div>				
				<div><br></div>
				<div><br></div>				
			</div>
		</div>

	<!-- KETIKA STATUS KIRIM EMAIL HASILNYA SUKSES KIRIM -->		
	<? }elseif($_GET['status']=='resendsuccess'){ ?>
		<div id="content" style="height:160px;margin-top:20px;">
			<div class="header">
			</div>
			<div class="body" style="height:100px;">				
				<div style="text-align:center;margin-top:10px;font-size:14pt;color:#fff;">		
		<?php
		
					error_reporting(E_STRICT);
					date_default_timezone_set('America/Toronto');
					require_once('email/class.phpmailer.php');
					$mail             = new PHPMailer();

					$mail->IsSMTP();
					$mail->SMTPDebug  = 1;           
					$mail->SMTPKeepAlive = false;                                     
					$mail->SMTPAuth   	 = true;       
					$mail->Mailer 		 = 'smtp';   
					$mail->SMTPSecure    = 'ssl';
					$mail->Host       	 = 'mail.ffi.co.id';     
					#$mail->Host       	 = '117.54.9.179';     
					#$mail->Host       	 = '192.168.10.10';     
					$mail->Port       	 = 465;                  
					$mail->Username   	 = 'system.servicedesk@ffi.co.id';  
					$mail->Password   	 = 'Kfc_System';      
	
					$newid = $_GET['pid'];
					$usrid = $_SESSION['user_id'];
					$usrname = $_SESSION['user_realname'];	
					$usrnik = $_SESSION['user_nik'];
					$usrmail = $_SESSION['user_email'];
					$usrdept = $_SESSION['user_departemen'];
					$usrlvl = $_SESSION['user_level'];
					$ugroupid = $_SESSION['ugroupid'];
					$usubgroupid = $_SESSION['usubgroupid'];
					$usrnikatasan = $_SESSION['nik_atasan'];
					#$cdate = date('j F Y');
					#$cdate = date('d F Y');
					
					$cdate3a = date('j')+1;
					$cdate3b = date('F');
					$cdate3c = date('Y');			
					$cdate = $cdate3a.'&nbsp;'.$cdate3b.'&nbsp;'.$cdate3c;

					$cone =  mysql_connect('localhost','usrservicedesk','kfc14022');
								 mysql_select_db('servicedesk',$cone);
					
					$qCekDataX = mysql_query("SELECT ITH_TICKET_HEADER.*, ITH_USER.* FROM ITH_TICKET_HEADER 
											  JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_nik
											  WHERE ITH_TICKET_HEADER.ticket_id = '".$newid."'");
					$rCekDataX = mysql_fetch_object($qCekDataX);


					$mail->SetFrom('system.servicedesk@ffi.co.id', '[Admin ServiceDesk]'); 
					$mail->AddAddress('pandu.angga@ffi.co.id', 'PANDU ANGGA'); 
					$mail->AddCC('mantechno2020@gmail.com', 'MANTECHNO');			
					$mail->AddCCProg1('wilujeng.lestari@ffi.co.id','ARYN');
								#	$mail->AddCCProg2('uu.budhi@ffi.co.id','UU BUDHI');
					
					$qCekDataBarangRequest = mysql_query("SELECT kode_tipebarang, nama_tipebarang, kode_tipebrg, kuantitas 
														  FROM ITH_TIPEBARANG_KODE WHERE ticket_id = '".$newid."'");
					while($rCekDataBarangRequest = mysql_fetch_object($qCekDataBarangRequest))
					{
						if($rCekDataBarangRequest->kode_tipebrg=='RQS-03-000112')
						{	
							$myServer = $_SERVER["SERVER_NAME"].'/eoss';
							$objConnectx = oci_connect('fsd', 'fsd', 'localhost:1521/XE'); 
							$qtycold = $rCekDataBarangRequest->kuantitas;
							$qceknamabrg1 = "SELECT FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE AS KODE_BARANG,
									FSDBRGEQASSET_NEW.ITEM_NAME AS NAMA_BARANG,FSDBRGEQASSET_NEW.ITEM_BRAND AS MERK_BARANG,
									FSDBRGEQASSET_NEW.ITEM_MODEL AS MODEL,
									FSDBRGEQASSET_NEW.ITEM_PRICE AS HARGA_TERAKHIR
									FROM FSDBRGEQ_NEW
									JOIN FSDSGROUP ON FSDBRGEQ_NEW.GROUP_CODE = FSDSGROUP.KODE_GROUP
									JOIN FSDBRGEQASSET_NEW ON FSDBRGEQ_NEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
									JOIN FSDEQTYPE_NEW ON FSDBRGEQ_NEW.EQTYPECODE = FSDEQTYPE_NEW.EQTYPECODE
									WHERE FSDEQTYPE_NEW.EQTYPECODE = 'EQ0001' AND FSDBRGEQ_NEW.ITEM_CODE = '".$rCekDataBarangRequest->kode_tipebarang."'";  
							$objParsenamabrg1 = oci_parse ($objConnectx, $qceknamabrg1);  
									   oci_execute ($objParsenamabrg1,OCI_DEFAULT);
							while($objResultnamabrg1 = oci_fetch_array($objParsenamabrg1,OCI_BOTH))
							{
								$namabarangs1a = preg_replace('/[^A-Za-z0-9\  ]/', '', $objResultnamabrg1['NAMA_BARANG']);
							}	
							
						}elseif($rCekDataBarangRequest->kode_tipebrg=='RQS-03-000113')
						{		
							$qtyheat = $rCekDataBarangRequest->kuantitas;
							$qceknamabrg2 = "SELECT FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE AS KODE_BARANG,
											FSDBRGEQASSET_NEW.ITEM_NAME AS NAMA_BARANG,FSDBRGEQASSET_NEW.ITEM_BRAND AS MERK_BARANG,
											FSDBRGEQASSET_NEW.ITEM_MODEL AS MODEL,
											FSDBRGEQASSET_NEW.ITEM_PRICE AS HARGA_TERAKHIR
											FROM FSDBRGEQ_NEW
											JOIN FSDSGROUP ON FSDBRGEQ_NEW.GROUP_CODE = FSDSGROUP.KODE_GROUP
											JOIN FSDBRGEQASSET_NEW ON FSDBRGEQ_NEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
											JOIN FSDEQTYPE_NEW ON FSDBRGEQ_NEW.EQTYPECODE = FSDEQTYPE_NEW.EQTYPECODE
											WHERE FSDEQTYPE_NEW.EQTYPECODE = 'EQ0002' AND FSDBRGEQ_NEW.ITEM_CODE = '".$rCekDataBarangRequest->kode_tipebarang."'";  					
							$objParsenamabrg2 = oci_parse ($objConnectx, $qceknamabrg2);  
											   oci_execute ($objParsenamabrg2,OCI_DEFAULT);
							while($objResultnamabrg2 = oci_fetch_array($objParsenamabrg2,OCI_BOTH))
							{
								$namabarangs2a = preg_replace('/[^A-Za-z0-9\  ]/', '', $objResultnamabrg2['NAMA_BARANG']);
							}
						}elseif($rCekDataBarangRequest->kode_tipebrg=='RQS-03-000114')
						{					
							$qtyfoodprocessing = $rCekDataBarangRequest->kuantitas;
							$qceknamabrg3 = "SELECT FSDSGROUP.NAMA_GROUP, FSDBRGEQASSET_NEW.ITEM_CODE AS KODE_BARANG,
											FSDBRGEQASSET_NEW.ITEM_NAME AS NAMA_BARANG,FSDBRGEQASSET_NEW.ITEM_BRAND AS MERK_BARANG,
											FSDBRGEQASSET_NEW.ITEM_MODEL AS MODEL,
											FSDBRGEQASSET_NEW.ITEM_PRICE AS HARGA_TERAKHIR
											FROM FSDBRGEQ_NEW
											JOIN FSDSGROUP ON FSDBRGEQ_NEW.GROUP_CODE = FSDSGROUP.KODE_GROUP
											JOIN FSDBRGEQASSET_NEW ON FSDBRGEQ_NEW.ITEM_CODE = FSDBRGEQASSET_NEW.ITEM_CODE
											JOIN FSDEQTYPE_NEW ON FSDBRGEQ_NEW.EQTYPECODE = FSDEQTYPE_NEW.EQTYPECODE
											WHERE FSDEQTYPE_NEW.EQTYPECODE = 'EQ0003' AND FSDBRGEQ_NEW.ITEM_CODE = '".$rCekDataBarangRequest->kode_tipebarang."'"; 					
							$objParsenamabrg3 = oci_parse ($objConnectx, $qceknamabrg3);  
											   oci_execute ($objParsenamabrg3,OCI_DEFAULT);
							while($objResultnamabrg3 = oci_fetch_array($objParsenamabrg3,OCI_BOTH))
							{
								$namabarangs3a = preg_replace('/[^A-Za-z0-9\  ]/', '', $objResultnamabrg3['NAMA_BARANG']);
							}
						}
						#$qtycold = $_POST['textseqcold'][$value_cek1a];
						#$qtyheat = $_POST['textseqheat'][$value_cek2a];
						#$qtyfoodprocessing = $_POST['textseqfoodprocessing'][$value_cek3a];
					}
					$mail->Subject    = "[E-OPERATION SUPPORT PROGRAM].APPROVAL-FOR-AREA-MANAGER : $rCekDataX->ticket_subject";
					$mail->AltBody    = "$rCekDataX->ticket_subject"; 
					
					$mail->Body .= "	
					This is a request by : $rCekDataX->user_realname For Your Approval with details as follows :<br>
						<ul>
							<li>Request ID : $newid RESEND MAIL 2</li>
							<li>Category : Equipment</li>
							<li>Subject : $rCekDataX->ticket_subject</li>
							<li>Status : Open</li>
							<li>Ticket Create date : $cdate</li>
							<li>Item Name 1 : $namabarangs1a</li>
							<li>Quantity Requested 1 : $qtycold</li>
							<li>Item Name 2 : $namabarangs2a</li>
							<li>Quantity Requested 2 : $qtyheat</li>
							<li>Item Name 3 : $namabarangs3a</li>
							<li>Quantity Requested 3 : $qtyfoodprocessing</li>
						</ul>
					<hr>
					Reason / Justification :	<br>$rCekDataX->ticket_problem<br><br>
					<hr>
					For Approval, Please Click in here (<a href='http://$myServer/?m=notifmail&a=sendauth&pid=$newid&uid=$usrnikatasan'>Click In Here</a>)	
					<br><br>
					Regards,<br><br>
					$rCekDataX->user_realname
					";
				if(!$mail->Send()) 
				{
		?>	
					<b>SORRY,MESSAGE NOT SEND !!!</b><br>
					<b>PLEASE RESEND YOUR REQUEST, UNTIL SUCCESFULLY SUBMITED !!!</b><br>					
					<br>
					<button onclick="location.href = '?view=sendmailtoarea&status=resendprocess&pid=<?=$_GET['pid'];?>&uid=<?=$_SESSION['user_nik'];?>';" id="myButton" class="submit-btn">RESEND</button>&nbsp;
				<? }else{ ?>	

						<b>REQUEST SUCCESFULLY SUBMITTED !!!</b><br>
						<br>
						<button onclick="location.href = '?m=info&pid=<?=$_GET['pid'];?>&uid=<?=$_SESSION['user_nik'];?>';" id="myButton" class="submit-btn">OK</button>&nbsp;
				</div>				
				<div><br></div>
				<div><br></div>	

			</div>
		</div>	
			   <? } //if(!$mail->Send())   ?>	
		
	<? } ?>
<? } ?>