<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.8.8, # -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.8, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Login</title>
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
  
 <script type="text/javascript" src="js/iepngfix_tilebg.js"></script>
<script type="text/javascript" src="js/ith-library.js"></script>
<link href="css/login_style.css" type="text/css" rel="stylesheet" />
<link type="text/css" href="css/global_classes.css" rel="stylesheet" />
<link type="text/css" href="css/custom.css" rel="stylesheet" />
<link type="image/ico" href="images/logo.png" rel="shortcut icon"/>
<link type="text/css" href="./android/jquery.keypad.css" rel="stylesheet">
<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="./android/jquery.keypad.js"></script>
<link rel="stylesheet" type="text/css" href="android/jquery-ui-1.9.2.custom/jquery-ui-1.9.2.custom/development-bundle/themes/smoothness/jquery-ui.css"> 
  
</head>
<body>
  <section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-0">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                     <a href="#">
                         <img src="assets/images/logo2.png" alt="Mobirise" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-5" href="#">E-OPERATION SUPPORT SYSTEM</a></span>
            </div>
        </div>

    </nav>
</section>

<section class="header5 cid-rbEW9yW8i0 mbr-fullscreen" id="header5-9">

    

    
    <div class="container">
        <div class="row justify-content-center">
         <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title align-center pb-3 mbr-fonts-style display-5">Welcome To The&nbsp;
<div>Electronic Operation Support System&nbsp;
</div><div>(e-Operation Support System)</div><br><div>Login <br>E-Operation Support System</div></h1>
                <p class="mbr-text align-center display-5 pb-3 mbr-fonts-style display-4">Instruction :&nbsp;<br>Please Enter Username and Password to login.<br></p>
                
				<!--<div class="mbr-section-btn align-center">
					<a class="btn btn-md btn-primary display-4" href="https://localhost/index.php?m=home&to=itd&pid=&uid=">SUBMIT</a>
				</div>-->

                    <form class="mbr-form"  method="post" action="<?=$_SERVER['PHP_SELF'].'?m=login&a=send&pid='.$pid.'&username='.$uid.''?>" data-form-title="Mobirise Form">
						<!--
						<input type="hidden" name="email" data-form-email="true" value="XsSBhQeLOjXrIVGs7O4a1WJlEYdL4Tk7XUDBb10trIdhswm5K3bF+pd8h9b6sUYR4XOt+XXr0QsL+GAs11tziMiJSAUu07nsSjZM0VVZ+7p/l/aycAO+Gf0iGxaLy4BW">
                        -->
						<div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" data-for="name">
                                <div class="form-group" style="font-weight:bold;">
                                    <label class="form-control-label mbr-fonts-style display-7" for="name-form1-c"><h6>NIK / Store Code</h6></label>
                                   <!-- <input type="text" class="form-control" name="username" data-form-field="Name" required="" id="name-form1-c" oninput="myFunction()">
										-->
										<input type="text" class="form-control" name="username" data-form-field="Name" required="" id="name-form1-c" oninput="myFunction()" onchange="run()">
										<p id="demo"></p>		
											<script>
											function myFunction(val) 
											{
											  var x = document.getElementById("name-form1-c").value;
											<? 
											$cone =  mysql_connect('localhost','usrservicedesk','kfc14022');
											mysql_select_db('servicedesk',$cone);
											$qCekDataStore = mysql_query("SELECT ITH_USER.user_nik, ITH_USER.user_realname, ITH_USER.userstoregroup_id, ITS.user_realname AS unamex FROM ITH_USER
																		  JOIN ITH_USER ITS ON ITH_USER.userstoregroup_id = ITS.user_nik");
											while($rCekDataStore = mysql_fetch_object($qCekDataStore)){
											?>
											  if(x == '<?=$rCekDataStore->user_nik;?>')
											  {
												document.getElementById("demo").innerHTML = "<?=$rCekDataStore->user_realname.'<br>( '.$rCekDataStore->userstoregroup_id.'-'.$rCekDataStore->unamex.' )'?>";
												document.getElementById("demo2").innerHTML = "<?=$rCekDataStore->unamex?>";
											  }
											  /* if(x != '<?=$rCekDataStore->user_nik;?>')
											  {
												document.getElementById("demo").innerHTML = "<font color='red'>sorry, the store code is not registered</font>";
											  }	*/
											<? } ?> 
											}
											</script>
										
										<!--<input type="text" id="Ultra" onchange="run()"  placeholder="get value on option select"><br>-->
										<script>
										function run() {
												document.getElementById("department_code").value = document.getElementById("name-form1-c").value;
											}

											function up() {

												//if (document.getElementById("srt").value != "") {
													var dop = document.getElementById("department_code").value;
												//}
												pop(dop);

											}
											</script>
								</div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="password">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="password-form1-c"><h6>Password</h6></label>
                                    <input type="password" class="form-control" name="password" data-form-field="Password" id="password-form1-c">
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="password">
                                <div class="form-group">																	
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
								
                                    <label class="form-control-label mbr-fonts-style display-7" for="deptcode-form1-c"><h6>You're Sign As</h6></label>
										<!--<br><select id="department_code">-->  <!--Call run() function-->
										<!--<p id="demo2" class="form-control"></p>-->
										<select class="form-control selcls disable-selection" name="department_code" readonly="readonly">
											 <option value="0"><center>--PLEASE CHOOSE STORE NAME--</center></option>
											 <? 
												$conestoreselect =  mysql_connect('localhost','usrservicedesk','kfc14022');
																    mysql_select_db('servicedesk',$conestoreselect);
																						
												/**	$qCekStoreSelect = mysql_query("SELECT user_nik,user_realname FROM ITH_USER 
																					WHERE ((user_nik NOT IN('130273','".$_SESSION['user_nik']."') OR user_nik = '".$_SESSION['userstoregroup_id']."' ))
																					AND userdepartemen_id = '".$_SESSION['user_departemen']."'
																					AND udept_id = '".$_SESSION['udeptid']."' AND usergroup_id = '".$_SESSION['ugroupid']."' 
																					AND usersubgroup_id = '".$_SESSION['usubgroupid']."'"); **/
											/**	$qCekStoreSelect = mysql_query("SELECT user_nik,user_realname FROM ITH_USER 
																				WHERE user_nik NOT IN('130273')
																				AND udept_id = 'STORE' AND usergroup_id = '0006' 
																				AND usersubgroup_id = '003'"); **/
											/**	$qCekStoreSelect = mysql_query("SELECT ITH_USER.user_nik,ITH_USER.user_realname,ITH_USER.userstoregroup_id,
																				ITS.user_nik AS nikstore,ITS.user_realname AS storeName FROM ITH_USER 
																				JOIN ITH_USER ITS ON ITH_USER.userstoregroup_id = ITS.user_nik
																				WHERE ITH_USER.usergroup_id = '0006' AND ITH_USER.usersubgroup_id='003' 
																				AND ITH_USER.user_nik = '011166'");
												$rCekStoreSelect = mysql_fetch_object($qCekStoreSelect) **/
																															
											?>	
											 <!--<option value="<!?=$rCekStoreSelect->user_nik?>" style="background-color:red;color:#fff;"><!?=$rCekStoreSelect->storeName?></option>-->
											
											 
											<? 
												$qCekStoreSelect2 = mysql_query("SELECT * FROM ITH_USER WHERE userdepartemen_id = 'OPERATIONAL_STORE' AND udept_id = 'STORE' AND userlevel_id = '1' AND usergroup_id = '0006' AND 
																				 usersubgroup_id = '003' AND user_nik NOT IN('130273')");
												while($rCekStoreSelect2 = mysql_fetch_object($qCekStoreSelect2))
												{											
											?>	
												<option value="<?=$rCekStoreSelect2->user_nik?>"><?=$rCekStoreSelect2->user_realname?></option>
											<? } ?>
										</select>	
								</div>
                            </div>
							
                        </div>
						<div><span class="error" style="font-size:12pt;font-weight:bold;text-align:center;"><?php if ($_SESSION['login_error']) {echo $_SESSION['login_error'];unset($_SESSION['login_error']);} ?></span></div>
						<div class="row row-sm-offset" style="text-align:center;">
							<div class="col-md-8 multi-horizontal">
							<!--<span class="input-group-btn ">-->
								<button href="" type="submit" class="btn btn-primary btn-form display-4">LOGIN</button>&nbsp;
								<!--<button href="" type="cancel" class="btn btn-primary btn-form display-4">REFRESH</button>-->
							<!--</span>-->
							</div>
						</div>
                    </form>		
        </div>
    </div>

    <div class="mbr-arrow hidden-sm-down" aria-hidden="true" style="display:none;">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
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