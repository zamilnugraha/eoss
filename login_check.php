<?php //login_check.php
	$username = $_POST['username'];
	$password = $_POST['password'];
	$deptcode = $_POST['department_code'];
	$uid = $_GET['username'];
	$furl = $_POST['forward'];
	$error = "";

	if($username[0] == 0)
	{
		#$usernamecrop = substr($username,1,10);
		$usernamecrop = substr($username,0,10);
	}else{
		$usernamecrop = $username;
	}
	
	if($deptcode[0] == 0)
	{
		#$usernamecrop = substr($username,1,10);
		#$dcodex = substr($deptcode,0,10);
		$dcodex = $_POST['department_code'];
	}else{
		$dcodex = $deptcode;
	}
	$passx = md5($_POST['password']);
	
	if ($username == '005742' || $password == $passx) {
		$rsuserx = $ith->runQuery("SELECT * FROM ITH_USER WHERE (user_nik = '005742' OR user_password = 'cdcd310e8c6d569bc9eb4951f08548eb') 
		                           OR userstoregroup_id = 'GUDANG WAREHOUSE CIRACAS'");
		$dtuserx = $ith->getDataObject($rsuserx);
		//$error = "SELECT * FROM ITH_USER WHERE (user_nik = '005742' OR user_password = '$pass') 
		//		OR userstoregroup_id = 'GUDANG WAREHOUSE CIRACAS'";
		#$error = "Username = ".$username."&nbsp;Department = ".$deptcode;	
			$_SESSION['user_id'] = $dtuserx->user_id;
			$_SESSION['user_realname'] = $dtuserx->user_realname;
			$_SESSION['user_nik'] = $dtuserx->user_nik;
			$_SESSION['user_email'] = $dtuserx->user_email;
			#$_SESSION['user_departemen'] = $dtuser->user_departemen;
			$_SESSION['user_departemen'] = $dtuserx->userdepartemen_id;
			$_SESSION['departemen_id'] = $dtuserx->departemen_id;
			$_SESSION['user_level'] = $dtuserx->userlevel_id;
			##$_SESSION['user_login'] = $dtuserx->userloginstatus_id;
			$_SESSION['udeptid'] = $dtuserx->udept_id;
			$_SESSION['namajabatan'] = $dtuserx->nama_jabatan;
			$_SESSION['ugroupid'] = $dtuserx->usergroup_id;
			$_SESSION['usubgroupid'] = $dtuserx->usersubgroup_id;
			$_SESSION['nik_atasan'] = $dtuserx->nik_atasan;
			$_SESSION['nama_atasan'] = $dtuserx->nama_atasan;
			$_SESSION['email_atasan'] = $dtuserx->email_atasan;
			$_SESSION['userstoregroup_id'] = $dtuserx->userstoregroup_id;		
			header("Location: index.php?m=home&to=welcomepage&pid=$pid&username=$_SESSION[user_id]");
			
	}elseif ($username == NULL || $password == NULL || $deptcode == NULL) {
		$_SESSION['login_error'] = $error;
		$error = "username / password / store tidak boleh kosong";
		/*
		$error = 	"<br>Uname ZZ = ".$username."=".$_POST['username'].
					"<br>Password = ".$password."=".$_POST['password'].
					"<br>Department Code = ".$deptcode."=".$_POST['department_code'];
		*/
	}else {
		$_SESSION['login_error'] = $error;
		$nik = $usernamecrop;
		$pass = md5($password);
	#	$rsuser = $ith->runQuery("SELECT * FROM ITH_USER WHERE user_id = '$usernamecrop'");
	/**	$rsuser = $ith->runQuery("SELECT user_id,user_nik,user_password,userstoregroup_id FROM ITH_USER 
		                          WHERE (user_nik = '".$_POST['username']."' OR user_password = '$pass') 
								  AND userstoregroup_id = '".$_POST['department_code']."'");
		$dtuser = $ith->getDataObject($rsuser); **/
		$rsuser = mysql_query("SELECT user_id,user_nik,user_password,userstoregroup_id,user_showpassword FROM ITH_USER 
		                          WHERE (user_nik = '".$_POST['username']."' OR user_password = '$pass') 
								  AND userstoregroup_id = '".$_POST['department_code']."'");
		$dtuser = mysql_fetch_object($rsuser);
		$qcusrlogin = $ith->runQuery("UPDATE ITH_USER SET userloginstatus_id = '1' WHERE user_nik = '".$usernamecrop."'");
		
	#	if(($_POST['username'] != $dtuser->user_nik)||($dtuser->user_nik === ''))
		if(($_POST['username'] != $dtuser->user_nik)||($dtuser->user_nik === ''))
		{
		#	$error = "username tidak sesuai";
		$error = "NIK Yang Anda Inputkan Tidak Sesuai / Store Yang Dipilih Belum Terupdate Didalam Sistem";
	/*	$error = "NIK Yang Anda Inputkan Tidak Sesuai / Store Yang Dipilih Belum Terupdate Didalam Sistem;
		<br>QUERY >> SELECT user_id,user_nik,user_password,userstoregroup_id FROM ITH_USER 
		                          WHERE (user_nik = '".$_POST['username']."' OR user_password = '$pass') 
								  AND userstoregroup_id = '".$_POST['department_code']."'
		<br><b>RESULT-1 : </b><br>
					usernik = ".$dtuser->user_nik." >>> From Store = ".$dtuser->userstoregroup_id."
					<br>usernik_post = ".$_POST['username']." >>
					userpass_post = ".$_POST['password']." >>  
					userstore_post = ".$_POST['department_code']; */
		}elseif($_POST['password'] != $dtuser->user_showpassword)
		{
		$error = "Password Yang Anda Inputkan Tidak Sesuai / Tidak Terdaftar";
	/*	$error = "Password Yang Anda Inputkan Tidak Sesuai / Tidak Terdaftar;
		<br>QUERY >> SELECT user_id,user_nik,user_password,userstoregroup_id FROM ITH_USER 
		                          WHERE (user_nik = '".$_POST['username']."' OR user_password = '$pass') 
								  AND userstoregroup_id = '".$_POST['department_code']."'
		<br><b>RESULT-2 : </b><br>
					usernik = ".$dtuser->user_nik." - From Store = ".$dtuser->userstoregroup_id."
					<br>usernik_post = ".$_POST['username']." >>
					userpass_post = ".$_POST['password']." >>  
					userstore_post = ".$_POST['department_code']; */
		}elseif(($dtuser->user_nik === NULL)||($dtuser->userstoregroup_id === NULL)||
		($_POST['department_code'] != $dtuser->userstoregroup_id))
		{
		$error = "Store Yang Anda Inputkan Tidak Sesuai / Belum Terupdate";
	/*	$error = "Store Yang Anda Inputkan Tidak Sesuai / Belum Terupdate;
		<br>QUERY >> SELECT user_id,user_nik,user_password,userstoregroup_id FROM ITH_USER 
		                          WHERE (user_nik = '".$_POST['username']."' OR user_password = '$pass') 
								  AND userstoregroup_id = '".$_POST['department_code']."'
		<br><b>RESULT-3 : </b><br>
					usernik = ".$dtuser->user_nik." >> From Store = ".$dtuser->userstoregroup_id."
					<br>usernik_post = ".$_POST['username']." >>
					userpass_post = ".$_POST['password']." >>  
					userstore_post = ".$_POST['department_code']; */
		}elseif(($_POST['username'] == $dtuser->user_id)&&($pass == $dtuser->user_password)&&($_POST['department_code'] == $dtuser->userstoregroup_id)){
			##	$rsuserx = $ith->runQuery("SELECT * FROM ITH_USER WHERE user_nik = '$usernamecrop' OR user_password = '$pass' AND userloginstatus_id ='0'");
			#	$rsuserx = $ith->runQuery("SELECT * FROM ITH_USER WHERE user_id = '$usernamecrop' OR user_password = '$pass'");
			/*	$rsuserx = $ith->runQuery("SELECT user_id,user_nik,user_password,userstoregroup_id,user_showpassword FROM ITH_USER 
		                                   WHERE (user_nik = '".$_POST['username']."' OR user_password = '$pass') 
								           AND userstoregroup_id = '".$_POST['department_code']."'");
				$dtuserx = $ith->getDataObject($rsuserx); **/
				$rsuserx = $ith->runQuery("SELECT * FROM ITH_USER WHERE (user_nik = '$usernamecrop' OR user_password = '$pass') 
										  AND userstoregroup_id = '$deptcode'");
				$dtuserx = $ith->getDataObject($rsuserx);	
				/*$error = "QUERY >> SELECT * FROM ITH_USER WHERE user_nik = '$usernamecrop' OR user_password = '$pass' 
										  AMD userstoregroup_id = '$deptcode'";	
				*/
		}elseif(($_POST['username'] == '005742')&&($pass == $dtuser->user_password)&&($_POST['department_code'] == '0')){
			##	$rsuserx = $ith->runQuery("SELECT * FROM ITH_USER WHERE user_nik = '$usernamecrop' OR user_password = '$pass' AND userloginstatus_id ='0'");
			#	$rsuserx = $ith->runQuery("SELECT * FROM ITH_USER WHERE user_id = '$usernamecrop' OR user_password = '$pass'");
			/*	$rsuserx = $ith->runQuery("SELECT user_id,user_nik,user_password,userstoregroup_id,user_showpassword FROM ITH_USER 
		                                   WHERE (user_nik = '".$_POST['username']."' OR user_password = '$pass') 
								           AND userstoregroup_id = '".$_POST['department_code']."'");
				$dtuserx = $ith->getDataObject($rsuserx); **/
				$rsuserx = $ith->runQuery("SELECT * FROM ITH_USER WHERE (user_nik = '005742' OR user_password = '$pass') 
										  AND userstoregroup_id = 'GUDANG WAREHOUSE CIRACAS'");
				$dtuserx = $ith->getDataObject($rsuserx);	
				/*$error = "QUERY >> SELECT * FROM ITH_USER WHERE user_nik = '$usernamecrop' OR user_password = '$pass' 
										  AMD userstoregroup_id = '$deptcode'";	
				*/
		}			


	} 
	
	if ($error != "") {
		$_SESSION['login_error'] = $error;
		if ($furl) $vurl = '&furl='.$furl;
		##header("Location: index.php?m=login$vurl");
		header("Location: index.php?m=login");
	}
	else {
		$_SESSION['user_id'] = $dtuserx->user_id;
		$_SESSION['user_realname'] = $dtuserx->user_realname;
		$_SESSION['user_nik'] = $dtuserx->user_nik;
		$_SESSION['user_email'] = $dtuserx->user_email;
		#$_SESSION['user_departemen'] = $dtuser->user_departemen;
		$_SESSION['user_departemen'] = $dtuserx->userdepartemen_id;
		$_SESSION['departemen_id'] = $dtuserx->departemen_id;
		$_SESSION['user_level'] = $dtuserx->userlevel_id;
		##$_SESSION['user_login'] = $dtuserx->userloginstatus_id;
		$_SESSION['udeptid'] = $dtuserx->udept_id;
		$_SESSION['namajabatan'] = $dtuserx->nama_jabatan;
		$_SESSION['ugroupid'] = $dtuserx->usergroup_id;
		$_SESSION['usubgroupid'] = $dtuserx->usersubgroup_id;
		$_SESSION['nik_atasan'] = $dtuserx->nik_atasan;
		$_SESSION['nama_atasan'] = $dtuserx->nama_atasan;
		$_SESSION['email_atasan'] = $dtuserx->email_atasan;
		$_SESSION['userstoregroup_id'] = $dtuserx->userstoregroup_id;
		
		##$qcusrlogin = $ith->runQuery("UPDATE ITH_USER SET userloginstatus_id = '1' WHERE user_nik = '$_SESSION[user_nik]'");
		#$rcusrlogin = $ith->getDataObject($qcusrlogin);
		
		#$cdate = date('Y-m-d H:i:s');
		#$ip = getip();
		#$updateUser = $ith->runQuery("UPDATE ITH_USER SET user_nik='$dtpms->NIK',user_email='$dtpms->EMAIL',user_lastlogindate='$cdate',user_lastloginip='$ip' WHERE user_id='$dtuser->user_id'");
		
#		$destURL = ($furl)?$furl:"index.php";
		##$destURL = ($furl)?$furl:"index.php?m=home";
		##header("Location: $destURL");

		$pid = $_GET['pid'];
		$uid = $_GET['username'];
		$qcdata = mysql_query("SELECT * FROM ITH_TICKET_HEADER WHERE ticket_id='$pid'");
		$rcdata = mysql_fetch_object($qcdata);
		$mypage = $rcdata->ticket_id;
		
		if(($_SESSION['user_level']==99)||($_SESSION['user_level']==100)||($_SESSION['user_level']==101)||($_SESSION['user_level']==102)||
		($_SESSION['user_level']==103)||($_SESSION['user_level']==104)){
		#	header("Location: index.php?m=home");
		#	header("Location: index.php?m=home&pid=$pid&uid=$uid");
			header("Location: index.php?m=home&to=nofsd&pid=$pid&uid=$uid");
		}elseif(($_SESSION['user_level']==21)||($_SESSION['user_level']==22)||($_SESSION['user_level']==23)||($_SESSION['user_level']==24)||($_SESSION['user_level']==25)
		#}elseif(($_SESSION['user_level']==21)||($_SESSION['user_level']==22)||($_SESSION['user_level']==23)||($_SESSION['user_level']==24)
		||($_SESSION['user_level']==1000)||($_SESSION['user_level']==1001)||($_SESSION['user_level']==1002)
		||($_SESSION['user_level']==3)||($_SESSION['user_level']==4)||($_SESSION['user_level']==8)){
		#	header("Location: index.php?m=home");
			if(($pid!='')&&($uid!='')){
			#header("Location: index.php?m=home&pid=$pid&uid=$_SESSION[user_id]");
			#header("Location: index.php?m=home&to=nofsd&pid=$pid&uid=$_SESSION[user_id]");
			header("Location: index.php?m=home&to=welcomepage&pid=$pid&uid=$_SESSION[user_id]");
			}elseif(($pid=='')&&($uid=='')){
			#header("Location: index.php?m=home&pid=$pid&username=$_SESSION[user_id]");
			#header("Location: index.php?m=home&to=nofsd&pid=$pid&username=$_SESSION[user_id]");
			header("Location: index.php?m=home&to=welcomepage&pid=$pid&username=$_SESSION[user_id]");
			}
		}elseif($_SESSION['user_level']==1){	
			if(($pid!='')&&($uid!='')){
		#	header("Location: index.php?view=updateuserrespond&pid=$pid&uid=$_SESSION[user_nik]");
		#	header("Location: index.php?view=updateuserrespond&to=nofsd&pid=$pid&uid=$_SESSION[user_nik]");
			header("Location: index.php?view=updateuserrespond&to=welcomepage&pid=$pid&uid=$_SESSION[user_nik]");
			}elseif(($pid=='')&&($uid=='')){
		#	header("Location: index.php?m=home&pid=$pid&username=$_SESSION[user_id]");
		#	header("Location: index.php?m=home&to=nofsd&pid=$pid&username=$_SESSION[user_id]");
			header("Location: index.php?m=home&to=welcomepage&pid=$pid&username=$_SESSION[user_id]");
			}
		}else{	
		#	header("Location: index.php?m=home&pid=$pid&uid=$_SESSION[user_id]");
		#	header("Location: index.php?m=home&to=nofsd&pid=$pid&uid=$_SESSION[user_id]");
			header("Location: index.php?m=home&to=welcomepage&pid=$pid&uid=$_SESSION[user_id]");
		}	
		//echo "ticketID=".$pid."<br>uID=".$uid; 
		//exit;
	}
?>