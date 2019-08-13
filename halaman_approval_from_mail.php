
<link type="text/css" href="css/custom.css" rel="stylesheet" />

		<? 
		$pid = $_GET['pid']; $uid = $_GET['uid'];
			
		$usernamemail = $_GET['uid'];
		$passworduname = $_GET['uid'];	
		
		#echo '<hr><br>Uname = '.$usernamemail;
		#echo '<br>passName = '.$passworduname;
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
		$dtusermail = $ith->getDataObject($rsusermail);
		$qcusrloginmail = $ith->runQuery("UPDATE ITH_USER SET userloginstatus_id = '1' WHERE user_nik = '".$usernamecropmail."'");
		
		if(($_GET['uid'] == $dtusermail->user_nik && $pass == $dtusermail->user_password))
		{
			$rsuserxmail = $ith->runQuery("SELECT * FROM ITH_USER WHERE user_nik = '$usernamecropmail' OR user_password = '$pass'");
			$dtuserxmail = $ith->getDataObject($rsuserxmail);			
		}elseif(($_GET['uid'] != $dtusermail->user_nik && $pass != $dtusermail->user_password))
		{	
			#$error = "username = $usernamecropmail & password = $password tidak sesuai";		
			$error = "username & password tidak sesuai";		
		}elseif($_GET['uid'] != $dtusermail->user_nik)
		{
			$error = "username tidak sesuai";
		}elseif(($pass != $dtusermail->user_password))
		{
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
		
		###echo '<br>Cetak Session Uname = '.$_SESSION['user_realname'];
		?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<head>
  <!-- Site made with Mobirise Website Builder v4.8.8, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.8, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Home</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
<?include("header_admin.php");?>

<!--<section class="engine"><a href="https://mobirise.info/e">how to make your own site</a></section>-->
<section class="header5 cid-rbEDytvzdg mbr-fullscreen" id="header5-6">

    
	<? if($_SESSION['user_id']=='0316'){?>
	<? 
		#header ("Location: index.php?view=comment&pid=$newid&uid=001484"); 
		echo 'TEST X'; header ("Location: index.php?view=updateuserrespondreceive&pid=$_GET[pid]&uid=0316"); 
	?>
	<? }elseif($_SESSION['user_id']=='001484'){?>
	<? 
		#header ("Location: index.php?view=comment&pid=$newid&uid=001484"); 
		###header ("Location: index.php?view=updateuserrespondtransferfsd&pid=$newid&uid=001484"); 
		
	?>
		<div class="container">
		<? include('approval_from_mail.php');?>
		</div>		
    <? }elseif(($_SESSION['user_id']!='001484')||($_SESSION['user_id']!='0316')){?>
		<div class="container">
		<? include('approval_from_mail.php');?>
		</div>	
	<? } ?>

    <!--<div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>-->
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>		