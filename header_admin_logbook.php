<!-- header_admin.php -->
  <section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-0">

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm" style="background-img:url('./images/bgcolor.jpg');">
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
                         <img src="assets/images/logo2.png" alt="logo_header" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-5" href="index.php?m=home&to=welcomepage&pid=&username=<?=$_SESSION['user_nik']?>">E-LOGBOOK SYSTEM</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-right:150px;">
		<? if($_GET['to']=='fsd'){ ?>
			<? if(($_GET['mdl']=='fsdnone')||($_GET['mdl']=='request')||($_GET['mdl']=='requestnew')||($_GET['mdl']=='requestnewequipment'))
			{ ?>
		
				<ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
					<li class="nav-item" style="display:show;color:#ffffff;font-weight:bold;text-decoration:underline;">
						WELCOME, <?=$_SESSION['user_realname'];?>
					</li>
					<li class="nav-item" style="display:none;">
						<a class="nav-link link text-white display-7" href="index.php?m=home&to=welcomepage&pid=&username=<?=$_SESSION['user_nik']?>"><span class="mbri-edit mbr-iconfont mbr-iconfont-btn" style="font-size: 14px;">New Request</span></a>
					</li>
					<? if(($userlevel=='1')){ ?>	
					<li class="nav-item">
						<a class="nav-link link text-white display-7" href="index.php?view=list_request&pid=&uid="><span class="mbrib-file mbr-iconfont mbr-iconfont-btn" style="font-size: 14px;">List Request</span></a>
					</li>
					<? }elseif(($userlevel=='3')||($userlevel=='8')){ ?>	
					<li class="nav-item">
						<a class="nav-link link text-white display-7" href="index.php?view=list_grouprequest&pid=&uid="><span class="mbrib-file mbr-iconfont mbr-iconfont-btn" style="font-size: 14px;">List Group Request</span></a>
					</li>
					<li class="nav-item dropdown open">
						<a class="nav-link link text-white dropdown-toggle display-7" href="#" data-toggle="dropdown-submenu" aria-expanded="true"><span class="mbrib-folder mbr-iconfont mbr-iconfont-btn" style="font-size: 15px;">Report</span></a>
							<div class="dropdown-menu">
								<div class="dropdown open">
								<a class="text-white dropdown-item dropdown-toggle display-7" href="#" data-toggle="dropdown-submenu" aria-expanded="true">Report Request</a>
									<div class="dropdown-menu dropdown-submenu">
									<a class="text-white dropdown-item display-7" href="#">All By Periode</a>
									<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Summary</a>
										<!--
										<div class="dropdown">
										<a class="text-white dropdown-item dropdown-toggle display-7" href="#" aria-expanded="false" data-toggle="dropdown-submenu">Categories</a>
											<div class="dropdown-menu dropdown-submenu">
											<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Detail</a>
											<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Summary</a>
											</div>
										</div>
										-->
									<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Category Summary</a>
									<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Category Detail</a>
									<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Supported By</a>
									<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Supported By</a>
									<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Type</a>
									<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Priority</a>
									</div>
								</div>
								<div class="dropdown">
								<a class="text-white dropdown-item dropdown-toggle display-7" href="#" aria-expanded="false" data-toggle="dropdown-submenu">Grafic Report</a>
									<div class="dropdown-menu dropdown-submenu">
									<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Type Periode</a>
									<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Status Periode</a>
									</div>
								</div>
								<div class="dropdown">
								<a class="text-white dropdown-item dropdown-toggle display-7" href="#" aria-expanded="false" data-toggle="dropdown-submenu">Others</a>
									<div class="dropdown-menu dropdown-submenu">
									<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Change Password</a>
									</div>
								</div>
							</div>
					</li>					
					<? }elseif(($userlevel=='1000')){ ?>	
					<li class="nav-item">
						<a class="nav-link link text-white display-7" href="index.php?view=list_grouprequest&pid=&uid="><span class="mbrib-file mbr-iconfont mbr-iconfont-btn" style="font-size: 14px;">List Group Request</span></a>
					</li>	
					<li class="nav-item dropdown open">
						<a class="nav-link link text-white dropdown-toggle display-7" href="#" data-toggle="dropdown-submenu" aria-expanded="true"><span class="mbrib-folder mbr-iconfont mbr-iconfont-btn" style="font-size: 15px;">Report</span></a>
							<div class="dropdown-menu">
								<div class="dropdown open">
								<a class="text-white dropdown-item dropdown-toggle display-7" href="#" data-toggle="dropdown-submenu" aria-expanded="true">Report Request</a>
									<div class="dropdown-menu dropdown-submenu">
									<a class="text-white dropdown-item display-7" href="#">All By Periode</a>
									<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Summary</a>
										<!--
										<div class="dropdown">
										<a class="text-white dropdown-item dropdown-toggle display-7" href="#" aria-expanded="false" data-toggle="dropdown-submenu">Categories</a>
											<div class="dropdown-menu dropdown-submenu">
											<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Detail</a>
											<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Summary</a>
											</div>
										</div>
										-->
									<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Category Summary</a>
									<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Category Detail</a>
									<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Supported By</a>
									<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Supported By</a>
									<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Type</a>
									<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Priority</a>
									</div>
								</div>
								<div class="dropdown">
								<a class="text-white dropdown-item dropdown-toggle display-7" href="#" aria-expanded="false" data-toggle="dropdown-submenu">Grafic Report</a>
									<div class="dropdown-menu dropdown-submenu">
									<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Type Periode</a>
									<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Status Periode</a>
									</div>
								</div>
								<div class="dropdown">
								<a class="text-white dropdown-item dropdown-toggle display-7" href="#" aria-expanded="false" data-toggle="dropdown-submenu">Others</a>
									<div class="dropdown-menu dropdown-submenu">
									<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Change Password</a>
									</div>
								</div>
							</div>
					</li>					
					<? } ?>

					<li class="nav-item">
						<a class="nav-link link text-white display-7" href="./index.php?m=logout">
							<span class="mbrib-logout mbr-iconfont mbr-iconfont-btn" style="font-size: 14px;">Logout</span>
						</a>
					</li>				
				</ul>
			<? } ?>
		<? }elseif(($_GET['view']=='list_request')||($_GET['view']=='list_grouprequest')||($_GET['view']=='updateuserrespondcancel')||
				   ($_GET['view']=='comment')){ ?>
				<ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
					<li class="nav-item" style="display:none;">
						<a class="nav-link link text-white display-7" href="index.php?m=home&to=welcomepage&pid=&username=<?=$_SESSION['user_nik']?>"><span class="mbri-edit mbr-iconfont mbr-iconfont-btn" style="font-size: 14px;">New Request</span></a>
					</li>
					<? if(($userlevel=='1')){ ?>	
					<li class="nav-item" style="display:show;color:#ffffff;font-weight:bold;text-decoration:underline;">
						WELCOME, <?=$_SESSION['user_realname'];?>
					</li>
					<li class="nav-item">
						<a class="nav-link link text-white display-7" href="index.php?view=list_request&pid=&uid="><span class="mbrib-file mbr-iconfont mbr-iconfont-btn" style="font-size: 14px;">List Request</span></a>
					</li>
					<? }elseif(($userlevel=='3')||($userlevel=='8')){ ?>	
					<li class="nav-item">
						<a class="nav-link link text-white display-7" href="index.php?view=list_grouprequest&pid=&uid="><span class="mbrib-file mbr-iconfont mbr-iconfont-btn" style="font-size: 14px;">List Group Request</span></a>
					</li>
					<li class="nav-item dropdown open">
						<a class="nav-link link text-white dropdown-toggle display-7" href="#" data-toggle="dropdown-submenu" aria-expanded="true"><span class="mbrib-folder mbr-iconfont mbr-iconfont-btn" style="font-size: 15px;">Report</span></a>
							<div class="dropdown-menu">
								<div class="dropdown open">
								<a class="text-white dropdown-item dropdown-toggle display-7" href="#" data-toggle="dropdown-submenu" aria-expanded="true">Report Request</a>
									<div class="dropdown-menu dropdown-submenu">
									<a class="text-white dropdown-item display-7" href="#">All By Periode</a>
									<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Summary</a>
										<!--
										<div class="dropdown">
										<a class="text-white dropdown-item dropdown-toggle display-7" href="#" aria-expanded="false" data-toggle="dropdown-submenu">Categories</a>
											<div class="dropdown-menu dropdown-submenu">
											<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Detail</a>
											<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Summary</a>
											</div>
										</div>
										-->
									<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Category Summary</a>
									<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Category Detail</a>
									<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Supported By</a>
									<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Supported By</a>
									<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Type</a>
									<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Priority</a>
									</div>
								</div>
								<div class="dropdown">
								<a class="text-white dropdown-item dropdown-toggle display-7" href="#" aria-expanded="false" data-toggle="dropdown-submenu">Grafic Report</a>
									<div class="dropdown-menu dropdown-submenu">
									<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Type Periode</a>
									<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Status Periode</a>
									</div>
								</div>
								<div class="dropdown">
								<a class="text-white dropdown-item dropdown-toggle display-7" href="#" aria-expanded="false" data-toggle="dropdown-submenu">Others</a>
									<div class="dropdown-menu dropdown-submenu">
									<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Change Password</a>
									</div>
								</div>
							</div>
					</li>					
					<? }elseif(($userlevel=='1000')){ ?>	
					<li class="nav-item" style="display:show;color:#ffffff;font-weight:bold;text-decoration:underline;">
						WELCOME, <?=$_SESSION['user_realname'];?>
					</li>					
					<li class="nav-item">
						<a class="nav-link link text-white display-7" href="index.php?view=list_grouprequest&pid=&uid="><span class="mbrib-file mbr-iconfont mbr-iconfont-btn" style="font-size: 14px;">List Group Request</span></a>
					</li>
					<li class="nav-item dropdown open">
						<a class="nav-link link text-white dropdown-toggle display-7" href="#" data-toggle="dropdown-submenu" aria-expanded="true"><span class="mbrib-folder mbr-iconfont mbr-iconfont-btn" style="font-size: 15px;">Report</span></a>
							<div class="dropdown-menu">
								<div class="dropdown open">
								<a class="text-white dropdown-item dropdown-toggle display-7" href="#" data-toggle="dropdown-submenu" aria-expanded="true">Report Request</a>
									<div class="dropdown-menu dropdown-submenu">
									<a class="text-white dropdown-item display-7" href="#">All By Periode</a>
									<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Summary</a>
										<!--
										<div class="dropdown">
										<a class="text-white dropdown-item dropdown-toggle display-7" href="#" aria-expanded="false" data-toggle="dropdown-submenu">Categories</a>
											<div class="dropdown-menu dropdown-submenu">
											<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Detail</a>
											<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Summary</a>
											</div>
										</div>
										-->
									<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Category Summary</a>
									<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Category Detail</a>
									<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Supported By</a>
									<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Supported By</a>
									<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Type</a>
									<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Priority</a>
									</div>
								</div>
								<div class="dropdown">
								<a class="text-white dropdown-item dropdown-toggle display-7" href="#" aria-expanded="false" data-toggle="dropdown-submenu">Grafic Report</a>
									<div class="dropdown-menu dropdown-submenu">
									<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Type Periode</a>
									<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Status Periode</a>
									</div>
								</div>
								<div class="dropdown">
								<a class="text-white dropdown-item dropdown-toggle display-7" href="#" aria-expanded="false" data-toggle="dropdown-submenu">Others</a>
									<div class="dropdown-menu dropdown-submenu">
									<a class="text-white dropdown-item display-7" href="#" aria-expanded="false">Change Password</a>
									</div>
								</div>
							</div>
					</li>					
					<? } ?>

					<li class="nav-item">
						<a class="nav-link link text-white display-7" href="./index.php?m=logout">
							<span class="mbrib-logout mbr-iconfont mbr-iconfont-btn" style="font-size: 14px;">Logout</span>
						</a>
					</li>				
				</ul>		
		<? } ?>	
            <!--<div class="navbar-buttons mbr-section-btn">
                <a class="btn btn-sm btn-primary display-4" href="#">
                    <span class="mbri-save mbr-iconfont mbr-iconfont-btn "></span>
                    Try It Now!
                </a>
            </div>-->
        </div>
    </nav>
</section>

		<? if($userlevel=='99'){ ?>	
			<div class="menu1" style="position:relative;"><div style="text-align:right;margin-top:-5px;width:110%;margin-left:-70px;"><font color="#fff">Selamat Datang, [ <?=$_SESSION['user_realname']?> - <font color="#fff"><?='Super Admin Servicedesk'?></font> ] </div>
			<div style="margin-top:-20px;margin-left:300px;"><a href="index.php?m=logout" title="Logout"><img style="margin-left:10px;" src="images/logout_icon.png" width="30" height="auto" /></a></div></div>			
		<? }elseif(($userlevel=='100')||($userlevel=='101')||($userlevel=='102')||($userlevel=='103')||($userlevel=='104')){ /* ADMIN >> IT/FSD/SDD/OPR/MKT */ ?>	
			<div class="menu1" style="position:relative;"><div style="text-align:right;margin-top:-5px;width:110%;margin-left:-70px;"><font color="#fff">Selamat Datang, [ <?=$_SESSION['user_realname']?> - <font color="#fff"><?=$_SESSION['udeptid']?> Admin</font> ] </div>
			<div style="margin-top:-20px;margin-left:300px;"><a href="index.php?m=logout" title="Logout"><img style="margin-left:10px;" src="images/logout_icon.png" width="30" height="auto" /></a></div></div>		
		<? }elseif(($userlevel=='1000')||($userlevel=='1001')||($userlevel=='1002')){ ?>	
			<? if($_SESSION['user_id']=='002869'){?>
			<div class="menu1" style="position:relative;"><div style="text-align:right;margin-top:-5px;width:110%;margin-left:-70px;"><font color="#fff">Selamat Datang, [ <?=$_SESSION['user_realname']?> - <font color="#fff"><?=$_SESSION['udeptid']?></font> ] </div>
			<div style="margin-top:-20px;margin-left:300px;"><a href="index.php?m=logout" title="Logout"><img style="margin-left:10px;" src="images/logout_icon.png" width="30" height="auto" /></a></div></div>		
			<? }elseif($_SESSION['user_id']=='000994'){ ?>
			<div class="menu1" style="position:relative;"><div style="text-align:right;margin-top:-5px;width:110%;margin-left:-70px;"><font color="#fff">Selamat Datang, [ <?=$_SESSION['user_realname']?> - <font color="#fff"><?='Super Admin'?></font> ] </div>
			<div style="margin-top:-20px;margin-left:300px;"><a href="index.php?m=logout" title="Logout"><img style="margin-left:10px;" src="images/logout_icon.png" width="30" height="auto" /></a></div></div>		
			<? }elseif($_SESSION['user_id']=='010641'){ ?>
			<div class="menu1" style="position:relative;"><div style="text-align:right;margin-top:-5px;width:110%;margin-left:-70px;"><font color="#fff">Selamat Datang, [ <?=$_SESSION['user_realname']?> - <font color="#fff"><?=$_SESSION['namajabatan']?></font> ] </div>
			<div style="margin-top:-20px;margin-left:300px;"><a href="index.php?m=logout" title="Logout"><img style="margin-left:105px;" src="images/logout_icon.png" width="30" height="auto" /></a></div></div>		
			<? }else{ ?>
			<div class="menu1" style="position:relative;"><div style="text-align:right;margin-top:-5px;width:110%;margin-left:-70px;"><font color="#fff">Selamat Datang, [ <?=$_SESSION['user_realname']?> - <font color="#fff"><?=$_SESSION['namajabatan']?></font> ] </div>
			<div style="margin-top:-20px;margin-left:300px;"><a href="index.php?m=logout" title="Logout"><img style="margin-left:10px;" src="images/logout_icon.png" width="30" height="auto" /></a></div></div>		
			<? } ?>
		<? }elseif(($userlevel=='21')||($userlevel=='22')||($userlevel=='23')||($userlevel=='24')||($userlevel=='25')){ /* PIC >> IT/FSD/SDD/OPR/MKT */?>		
			<div class="menu1" style="position:relative;"><div style="text-align:right;margin-top:-5px;width:110%;margin-left:-70px;"><font color="#fff">Selamat Datang, [ <?=$_SESSION['user_realname']?> - <font color="#fff"><?=$_SESSION['udeptid']?></font> ] </div>
			<div style="margin-top:-20px;margin-left:300px;"><a href="index.php?m=logout" title="Logout"><img style="margin-left:10px;" src="images/logout_icon.png" width="30" height="auto" /></a></div></div>		
		<? } ?>	
		
    </div>
