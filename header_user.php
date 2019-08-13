<? if($userlevel == 1 ){ /* User */?>
<!--
<style>
body{font-family:"Trebuchet MS", Tahoma, Verdana, Arial, Helvetica, sans-serif;font-size:12px;color:#212121;line-height:18px;}
.example {margin-bottom:40px; text-align:center;}
.example ul li {font-size:12px;}
ul li {display:inline;list-style:none outside none;}
li {padding:2px 5px;}
#screenshots a, #screenshots img {border:none;}
#screenshots img {width:150px;height:90px;}
a {color:#3B5998;text-decoration:none;}
* {margin:0;padding:0;}
/* Facebox */
/**	
#facebox .b {background:url(alert/img/r.png); width: 10px;}
#facebox .tl {background:url(alert/img/rtl.png);}
#facebox .tr {background:url(alert/img/rtr.png);}
#facebox .bl {background:url(alert/img/rl.png);}
#facebox .br {background:url(alert/img/rr.png);}
**/
/**
#facebox .b {background-color:red; width: 5x;}
#facebox .tl {background-color:red; width: 5px;}
#facebox .tr {background-color:red; width: 5px;}
#facebox .bl {background-color:red; width: 5px;}
#facebox .br {background-color:red; width: 5px;}
**/
#facebox .b,.tl,.tr,.bl,.br {

	background-color: red	
	background: -webkit-gradient(linear,center top, center bottom,color-stop(0%, #ff6666),color-stop(10%, #ff6666) );
	background: -moz-linear-gradient( top, #ff6666, #ff6666 );
	border: solid 1px #fff;

	color: red;
	text-shadow: 0px 1px 1px #fff;
	font-family:"Calibri", Verdana, Arial;
	font-size: 10pt;
	width: -30px;
}
	
#facebox {position: absolute;top: 0;left: 0;z-index: 99999999;text-align: left;}
#facebox .popup {position: relative; margin-left:350px;margin-top:5px;}
#facebox table {border-collapse: collapse;}
#facebox td {border-bottom: 0;padding: 0;text-align:justify;}
#facebox .body {padding: 10px;background: #fff;width: 500px;}
#facebox .loading {text-align: center;}
#facebox .image {text-align: center;}
#facebox img {border: 0;margin: 0;}
#facebox .footer {border-top: 1px solid #DDDDDD;padding-top: 5px;margin-top: 10px;text-align: right;}
#facebox .tl, #facebox .tr, #facebox .bl, #facebox .br {height: 10px;width: 10px;overflow: hidden;padding: 0;}
#facebox_overlay {position: fixed;top: 0px;left: 0px;height:100%;width:100%;}
.facebox_hide {z-index:-100;}
.facebox_overlayBG {background-color: #000;z-index: 99;}
* html #facebox_overlay { /* ie6 hack */position: absolute;height: expression(document.body.scrollHeight > document.body.offsetHeight ? document.body.scrollHeight : document.body.offsetHeight + 'px');}
</style>
<script src='js/jquery-1.4.2.js' type='text/javascript'></script>
<script src='js/facebox-1.2.js' type='text/javascript'></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
$('a[rel*=facebox]').facebox();
$.facebox('#informasi','facebox',true); 
}); 
</script>
-->
<?php 
/* $message = "<font size=2 color=blue><strong>Untuk permasalahan yang ada didalam Aplikasi INSOSYS, 
yang berkaitan dengan Modifikasi / Penambahan Program INSOSYS, akan memerlukan <u>APPROVAL KaDept dan atau KaDiv </u>.
<br><br><u>Tanpa APPROVAL KaDept dan atau KaDiv</u>, maka permintaan anda tidak dapat diproses lebih lanjut.<br><br>
Terimakasih atas perhatiannya...
</strong></font> */
/*
message = "<font size=2 color=blue><strong>
Salam Inovasi.<br>
Dear All Store,<br>
Untuk permasalahan yang berhubungan dengan 22 kategori dibawah ini, 
maka request atau problem dapat ditujukan ke bagian operation (OPR).<br>
Adapun 22 kategori tersebut yang akan dikerjakan oleh Bagian Operation (OPR) : <br>
1. Pengecatan Dinding Dalam; <br>
2. Pengecatan Pilar;<br>
3. Pengecatan Ceiliing;<br>
4. Pengecatan Lapangan Parkir;<br>
5. Pembenahan Kabel dan Pipa;<br>
6. Penggantuan Mural Tembok;<br>
7. Penggantian atau Penambahan Mural Pilar;<br>
8. Penggantian Material Lapisan Tembok;<br>
9. Penggantian atau Penambahan Lampu Hias;<br>
10. Touch Up Counter;<br>
11. Touch Up Facade;<br>
12. Penggantian Wastafel;<br>
13. Touch Up atau Penggantian Sebagian seating/table;<br>
14. Touch Up Outdoor Facility;<br>
15. Peletakkan POP pada Tembok;<br>
16. Penambahan Mural Pada Janggut Tembok;<br>
17. Penambahan Penerangan;<br>
18. Perubahan Letak Signange;<br>
19. Reparasi Fasilitas Luar;<br>
20. Perbaikkan Kebocoran Atap/DAAG;<br>
21. Perbaikkan Fasilitas Dapur;<br>
22. Re-Layout Seating;
<br><br> Diluar dari 22 Kategori dari bagian operation, maka dapat ditujukan Ke Departemen FSD atau SDD<br>
Untuk Menutup Pesan Popup ini silahkan klik tulisan Close X dibawah ini atau dapat dilakukan dengan cara arahkan Mouse anda diluar area ini.<br>
Terimakasih atas perhatiannya...<br><br>

It's Starts From Me.
</strong></font>";
*/
?>
<div id="informasi" style="display:none;">
<table border="0" width="500px">
<tr><td><font size="3"><b><center>SEKILAS INFO</center></b></font><br>
<?php echo $message; ?>
<!--<br>
<img src="alert/alert2.png">-->
</td></tr>
</table>
</div>
<? } ?>

<!--
<style>
body{font-family:"Trebuchet MS", Tahoma, Verdana, Arial, Helvetica, sans-serif;font-size:12px;color:#212121;line-height:18px;}
.example {margin-bottom:40px; text-align:center;}
.example ul li {font-size:12px;}
ul li {display:inline;list-style:none outside none;}
li {padding:2px 5px;}
#screenshots a, #screenshots img {border:none;}
#screenshots img {width:150px;height:90px;}
a {color:#3B5998;text-decoration:none;}
* {margin:0;padding:0;}
/* Facebox */
/**	
#facebox .b {background:url(alert/img/r.png); width: 10px;}
#facebox .tl {background:url(alert/img/rtl.png);}
#facebox .tr {background:url(alert/img/rtr.png);}
#facebox .bl {background:url(alert/img/rl.png);}
#facebox .br {background:url(alert/img/rr.png);}
**/
/**
#facebox .b {background-color:red; width: 5x;}
#facebox .tl {background-color:red; width: 5px;}
#facebox .tr {background-color:red; width: 5px;}
#facebox .bl {background-color:red; width: 5px;}
#facebox .br {background-color:red; width: 5px;}
**/
#facebox .b,.tl,.tr,.bl,.br {

	background-color: red	
	background: -webkit-gradient(linear,center top, center bottom,color-stop(0%, #ff6666),color-stop(10%, #ff6666) );
	background: -moz-linear-gradient( top, #ff6666, #ff6666 );
	border: solid 1px #fff;

	color: red;
	text-shadow: 0px 1px 1px #fff;
	font-family:"Calibri", Verdana, Arial;
	font-size: 10pt;
	width: -30px;
}
	
#facebox {position: absolute;top: 0;left: 0;z-index: 99999999;text-align: left;}
#facebox .popup {position: relative;}
#facebox table {border-collapse: collapse;}
#facebox td {border-bottom: 0;padding: 0;text-align:justify;}
#facebox .body {padding: 10px;background: #fff;width: 500px;}
#facebox .loading {text-align: center;}
#facebox .image {text-align: center;}
#facebox img {border: 0;margin: 0;}
#facebox .footer {border-top: 1px solid #DDDDDD;padding-top: 5px;margin-top: 10px;text-align: right;}
#facebox .tl, #facebox .tr, #facebox .bl, #facebox .br {height: 10px;width: 10px;overflow: hidden;padding: 0;}
#facebox_overlay {position: fixed;top: 0px;left: 0px;height:100%;width:100%;}
.facebox_hide {z-index:-100;}
.facebox_overlayBG {background-color: #000;z-index: 99;}
* html #facebox_overlay { /* ie6 hack */position: absolute;height: expression(document.body.scrollHeight > document.body.offsetHeight ? document.body.scrollHeight : document.body.offsetHeight + 'px');}
</style> -->

<script src='js/jquery-1.4.2.js' type='text/javascript'></script>
<!--<script src='js/facebox-1.2.js' type='text/javascript'></script>-->

<?php //if (empty($_BASE_PATH)) {header("location:index.php");} 
	if ($userlevel == 1 || $userlevel == 2 || $userlevel == 3 || $userlevel == 8 || $userlevel == 5 || $userlevel == 6 || $userlevel == 1000)
	{
?>    
 	<!--<div class="logo"><img src="images/header.jpg" width="970" height="200" alt="Logo TransTv" /><div class="title"><span class="purple"></div></div>-->
	<div class="logo"><img src="images/header.jpg" width="970" height="200" alt="Logo KFC" /><div class="title"><span class="purple"></div></div>

<? } ?>	
<!--    <div id="myslidemenu" class="jqueryslidemenu">		-->
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
                    <a href="https://mobirise.com">
                         <img src="assets/images/logo2.png" alt="Mobirise" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-5" href="https://localhost/eoss/">E-OPERATION SUPPORT SYSTEM</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-right:250px;">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-7" href="https://mobirise.com"><span class="mbri-edit mbr-iconfont mbr-iconfont-btn" style="font-size: 14px;">New Request</span>
                        </a>
                </li><li class="nav-item"><a class="nav-link link text-white display-7" href="https://mobirise.com"><span class="mbrib-file mbr-iconfont mbr-iconfont-btn" style="font-size: 14px;">List Request</span>
                        </a></li>
                <li class="nav-item dropdown open">
                    <a class="nav-link link text-white dropdown-toggle display-7" href="https://mobirise.com" data-toggle="dropdown-submenu" aria-expanded="true"><span class="mbrib-folder mbr-iconfont mbr-iconfont-btn" style="font-size: 15px;">Report</span>
                        </a><div class="dropdown-menu"><div class="dropdown open"><a class="text-white dropdown-item dropdown-toggle display-7" href="https://mobirise.com" data-toggle="dropdown-submenu" aria-expanded="true">Report Request</a><div class="dropdown-menu dropdown-submenu"><a class="text-white dropdown-item display-7" href="https://mobirise.com">All By Periode</a><a class="text-white dropdown-item display-7" href="https://mobirise.com" aria-expanded="false">Summary</a><div class="dropdown"><a class="text-white dropdown-item dropdown-toggle display-7" href="https://mobirise.com" aria-expanded="false" data-toggle="dropdown-submenu">Categories</a><div class="dropdown-menu dropdown-submenu"><a class="text-white dropdown-item display-7" href="https://mobirise.com" aria-expanded="false">Detail</a><a class="text-white dropdown-item display-7" href="https://mobirise.com" aria-expanded="false">Summary</a></div></div><a class="text-white dropdown-item display-7" href="https://mobirise.com" aria-expanded="false">Supported By</a><a class="text-white dropdown-item display-7" href="https://mobirise.com" aria-expanded="false">Type</a><a class="text-white dropdown-item display-7" href="https://mobirise.com" aria-expanded="false">Priority</a></div></div><div class="dropdown"><a class="text-white dropdown-item dropdown-toggle display-7" href="https://mobirise.com" aria-expanded="false" data-toggle="dropdown-submenu">Grafic Report</a><div class="dropdown-menu dropdown-submenu"><a class="text-white dropdown-item display-7" href="https://mobirise.com" aria-expanded="false">Type Periode</a><a class="text-white dropdown-item display-7" href="https://mobirise.com" aria-expanded="false">Status Periode</a></div></div><div class="dropdown"><a class="text-white dropdown-item dropdown-toggle display-7" href="https://mobirise.com" aria-expanded="false" data-toggle="dropdown-submenu">Others</a><div class="dropdown-menu dropdown-submenu"><a class="text-white dropdown-item display-7" href="https://mobirise.com" aria-expanded="false">Change Password</a></div></div></div>
                </li></ul>
            <!--<div class="navbar-buttons mbr-section-btn">
                <a class="btn btn-sm btn-primary display-4" href="https://mobirise.com">
                    <span class="mbri-save mbr-iconfont mbr-iconfont-btn "></span>
                    Try It Now!
                </a>
            </div>-->
        </div>
    </nav>
</section>
