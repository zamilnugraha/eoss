<?php //login_check.php
ob_start();
	$username = $_GET['username'];
	#$password = $_POST['password'];
	$password = $_GET['username'];
	$uid = $_GET['uid'];
	$furl = $_POST['forward'];
	$error = "";

	if($username[0] == 0)
	{
		#$usernamecrop = substr($username,1,10);
		$usernamecrop = substr($username,0,10);
	}else{
		$usernamecrop = $username;
	}
	
	if ($username == NULL || $password == NULL) {
		$error = "username / password tidak boleh kosong";
	}else {
		
		$nik = $usernamecrop;
		$pass = md5($password);
	#	$rsuser = $ith->runQuery("SELECT * FROM ITH_USER WHERE user_id = '$usernamecrop'");
		$rsuser = $ith->runQuery("SELECT user_nik,user_password FROM ITH_USER WHERE (user_nik = '$usernamecrop' OR user_password = '$pass')");
		$dtuser = $ith->getDataObject($rsuser);
		$qcusrlogin = $ith->runQuery("UPDATE ITH_USER SET userloginstatus_id = '1' WHERE user_nik = '".$usernamecrop."'");
		
				
	#	if ($dtuser->user_id == NULL) {			
	#	if (($_POST['username'] != $dtuser->user_nik && $pass != $dtuser->user_password)) {			
	/*		if ($dtuser->user_password == $pass) {		
				$rsuser = $ith->runQuery("SELECT * FROM ITH_USER WHERE user_nik = '$usernamecrop' OR user_password = '$pass' AND userloginstatus_id ='0'");
				$dtuser = $ith->getDataObject($rsuser);
			}			
			#$error = "username = $usernamecrop & password = $password tidak sesuai";		
	*/
		if(($_POST['username'] == $dtuser->user_nik && $pass == $dtuser->user_password)){
			##	$rsuserx = $ith->runQuery("SELECT * FROM ITH_USER WHERE user_nik = '$usernamecrop' OR user_password = '$pass' AND userloginstatus_id ='0'");
				$rsuserx = $ith->runQuery("SELECT * FROM ITH_USER WHERE user_nik = '$usernamecrop' OR user_password = '$pass'");
				$dtuserx = $ith->getDataObject($rsuserx);			
		}elseif(($_POST['username'] != $dtuser->user_nik && $pass != $dtuser->user_password)){	
			#$error = "username = $usernamecrop & password = $password tidak sesuai";		
			$error = "username & password tidak sesuai";		
		}elseif($_POST['username'] != $dtuser->user_nik){
			$error = "username tidak sesuai";
		}elseif(($pass != $dtuser->user_password)){
			$error = "password tidak sesuai";		
		}

	}
	
	if ($error != "") {
		$_SESSION['login_error'] = $error;
		if ($furl) $vurl = '&furl='.$furl;
		###header("Location: index.php?m=login$vurl");
		###header("Location: http://viva.co.id");
		#header("Location: index.php?view=home&pid=003370119-038787&uid=002509");
		$newid = $_GET['pid'];
		
		#header("Location: index.php?view=home&pid=$newid&username=$uid");
		#header("Location: index.php?view=home&pid=$newid&uid=002509");
		$usernamemail = $_GET['uid'];
		$passworduname = $_GET['uid'];	
		if($usernamemail[0] == 0)
		{
			#$usernamecrop = substr($usernamemail,1,10);
			$usernamecropmail = substr($usernamemail,0,10);
		}else{
			$usernamecropmail = $usernamemail;
		}		
		$nik = $usernamecropmail;
		$pass = md5($passworduname);
	#	$rsuser = $ith->runQuery("SELECT * FROM ITH_USER WHERE user_id = '$usernamecropmail'");
		$rsusermail = $ith->runQuery("SELECT user_nik,user_password FROM ITH_USER WHERE (user_nik = '$usernamecropmail' OR user_password = '$pass')");
		$dtusermail = $ith->getDataObject($rsuser);
		$qcusrloginmail = $ith->runQuery("UPDATE ITH_USER SET userloginstatus_id = '1' WHERE user_nik = '".$usernamecropmail."'");
		
		if(($_GET['uid'] == $dtusermail->user_nik && $pass == $dtusermail->user_password)){
			$rsuserxmail = $ith->runQuery("SELECT * FROM ITH_USER WHERE user_nik = '$usernamecropmail' OR user_password = '$pass'");
			$dtuserxmail = $ith->getDataObject($rsuserx);			
		}elseif(($_GET['uid'] != $dtusermail->user_nik && $pass != $dtusermail->user_password)){	
			#$error = "username = $usernamecropmail & password = $password tidak sesuai";		
			$error = "username & password tidak sesuai";		
		}elseif($_GET['uid'] != $dtusermail->user_nik){
			$error = "username tidak sesuai";
		}elseif(($pass != $dtusermail->user_password)){
			$error = "password tidak sesuai";		
		}
		
		$_SESSION['user_id'] = $dtuserxmail->user_id;
		$_SESSION['user_realname'] = $dtuserxmail->user_realname;
		$_SESSION['user_nik'] = $dtuserxmail->user_nik;
		$_SESSION['user_email'] = $dtuserxmail->user_email;
		#$_SESSION['user_departemen'] = $dtuser->user_departemen;
		$_SESSION['user_departemen'] = $dtuserxmail->userdepartemen_id;
		$_SESSION['departemen_id'] = $dtuserxmail->departemen_id;
		$_SESSION['user_level'] = $dtuserxmail->userlevel_id;
		##$_SESSION['user_login'] = $dtuserx->userloginstatus_id;
		$_SESSION['udeptid'] = $dtuserxmail->udept_id;
		$_SESSION['namajabatan'] = $dtuserxmail->nama_jabatan;
		$_SESSION['ugroupid'] = $dtuserxmail->usergroup_id;
		$_SESSION['usubgroupid'] = $dtuserxmail->usersubgroup_id;
		$_SESSION['nik_atasan'] = $dtuserxmail->nik_atasan;
		$_SESSION['nama_atasan'] = $dtuserxmail->nama_atasan;
		$_SESSION['email_atasan'] = $dtuserxmail->email_atasan;		
		header("Location: index.php?m=info&pid=$_GET[pid]&uid=$_GET[uid]");
	/*	if(($_GET['uid']=='002509')||($_GET['uid']=='001764')||($_GET['uid']=='027873')||($_GET['uid']=='001484')||($_GET['uid']=='0337')){
			header("Location: index.php?m=info&pid=$_GET[pid]&uid=$_GET[uid]");
		}elseif(($_GET['uid']!='002509')||($_GET['uid']!='001764')||($_GET['uid']!='027873')||($_GET['uid']!='001484')||($_GET['uid']!='0337')){
			echo "TEST"; echo $_GET['uid']; header("Location: index.php?view=updateuserrespondreceive&pid=$_GET[pid]&uid=$_GET[uid]");
		} */
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
		
		if(($_SESSION['user_level']==3)||($_SESSION['user_level']==4)||($_SESSION['user_level']==8)){
		#	header("Location: index.php?m=home");
			if(($pid!='')&&($uid!='')){
			#header("Location: index.php?m=home&pid=$pid&uid=$_SESSION[user_id]");
			#header("Location: index.php?m=home&to=nofsd&pid=$pid&uid=$_SESSION[user_id]");
			##header("Location: index.php?m=home&to=welcomepage&pid=$pid&uid=$_SESSION[user_id]");
			###header("Location: index.php?view=home&pid=$newid&uid=$uid");
			header("Location: http://www.detik.com/");
			}elseif(($pid=='')&&($uid=='')){
			#header("Location: index.php?m=home&pid=$pid&username=$_SESSION[user_id]");
			#header("Location: index.php?m=home&to=nofsd&pid=$pid&username=$_SESSION[user_id]");
			##header("Location: index.php?m=home&to=welcomepage&pid=$pid&username=$_SESSION[user_id]");
			#index.php?view=home&pid=003370119-038787&uid=002509
			###header("Location: index.php?view=home&pid=$newid&uid=$uid");
			header("Location: http://webapps.ffi.co.id");
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
	ob_clean();
?>