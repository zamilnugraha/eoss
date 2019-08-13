<?php
@session_start();
require_once('_includes.php');
//ob_start;

/*define ("_BASE_PATH","/helpdesk/");
define ("_DOMAIN","http://intranet/");
define ("_FOLDER","helpdesk/");*/

$module = isset($_GET['m'])?$_GET['m']:'HOME'; //module
$action = $_GET['a']; //action
$furl = $_GET['furl']; //forward url

$pid = $_GET['pid'];
$newid = $_GET['pid'];
$uid = $_GET['uid'];
$userlogin = $_SESSION['user_login'];

switch(strtoupper($module)) 
	{

	#case 'APPROVAL' : if (($userlevel == 1000)||($userlevel == 1001)||($userlevel == 3)||($userlevel == 8)){ $content_header = 'header_admin.php';$content_left = 'message.php';break;}
	#case 'APPROVAL' : $content_header = 'header_admin.php';$content_left = 'message.php';break;
	case 'HOME'		:
		if ($_SESSION['user_id'] == NULL || isset($_SESSION['user_id']) == FALSE)
		{
			if(($_SESSION['user_id'] != NULL)&&($pid != NULL)){
				$url = fullURL(); header("Location: index.php?m=login&pid=$pid&username=$uid");
				###$url = fullURL(); header("Location: http://localhost/eoss/?m=login&a=sendauth&pid=003370119-038792&username=002509");
				#$url = fullURL(); header("Location: index.php?m=approval");
				#$url = "home";
			#header("Location: index.php?m=login&furl=$url");
				
			}elseif((($_SESSION['user_id'] == NULL))&&($pid == NULL)){
		//	$url = fullURL(); header("Location: index.php?m=login");	
			$url = fullURL(); header("Location:?m=login");	
			###$url = fullURL(); header("Location:http://localhost/eoss/?m=login&a=sendauth&pid=003370119-038792&username=002509");	
			###$url = fullURL(); header("Location:?m=login&a=sendauth&pid=$newid&username=$uid");	
			//http://localhost/eoss/?m=login&a=sendauth&pid=003370119-038792&username=002509
			###$url = fullURL(); header("Location:?view=home&pid=003370119-038792&uid=002509");	
			###$url = fullURL(); header("Location:http://www.detik.com");	
			
			}elseif((($_GET['uid'] == NULL))&&($pid != NULL)){
		//	$url = fullURL(); header("Location: index.php?m=login");	
			#$url = fullURL(); header("Location:http://www.viva.co.id");	
			header("Location: index.php?view=home&pid=003370119-038787&uid=002509");	
			}
		}
		else
		{
			$userlevel = $_SESSION['user_level'];
			$useremail = $_SESSION['user_email'];
			$view = strtoupper($_GET['view']);
			
			if (($userlevel == 1)||($userlevel == 2)||($userlevel == 3)||($userlevel == 8)) {$content_header = 'header_admin.php'; $view;
			}elseif(($userlevel == 99)||($userlevel == 1000)||($userlevel == 1001)||($userlevel == 1002)||($userlevel == 1003)){
			$content_header = 'header_admin.php';$view = 'ADM/'.$view;
			}elseif(($userlevel == 100)||($userlevel == 101)||($userlevel == 102)||($userlevel == 103)||($userlevel == 104)){
			$content_header = 'header_admin.php';$view = 'ADM/'.$view;
			}elseif(($userlevel == 21)||($userlevel == 22)||($userlevel == 23)||($userlevel == 24)||($userlevel == 25)){
			$content_header = 'header_admin.php';$view = 'ADM/'.$view;}	
			
			switch ($view) 
			{ 	
			
				case 'MY_REPORT' : if (($userlevel == 1)||($userlevel == 2)||($userlevel == 3)||($userlevel == 8)){ $content_header = 'header_user.php'; $content_left = 'laporan_pertanggal.php';break;}
				case 'MY_REPORTX' : if (($userlevel == 1)||($userlevel == 2)||($userlevel == 3)||($userlevel == 8)){ $content_header = 'header_user.php'; $content_left = 'laporan_pertanggalx.php';break;}
				case 'MY_REPORT1' :if (($userlevel == 1)||($userlevel == 2)||($userlevel == 3)||($userlevel == 8)){ $content_header = 'header_user.php'; $content_left = 'laporan_perstatusnew.php';break;}
				case 'MY_REPORT2' : if (($userlevel == 1)||($userlevel == 2)||($userlevel == 3)||($userlevel == 8)){ $content_header = 'header_user.php'; $content_left = 'laporan_percatnew.php';break;}
				case 'MY_REPORT3' : if (($userlevel == 1)||($userlevel == 2)||($userlevel == 3)||($userlevel == 8)){ $content_header = 'header_user.php'; $content_left = 'laporan_perprioritynew.php';break;}
				case 'MY_REPORT4' : if (($userlevel == 1)||($userlevel == 2)||($userlevel == 3)||($userlevel == 8)){ $content_header = 'header_user.php'; $content_left = 'laporan_pertypenew.php';break;}
				case 'MY_GRAFIK' : if (($userlevel == 1)||($userlevel == 2)||($userlevel == 3)||($userlevel == 8)){ $content_header = 'header_user.php'; $content_left = 'graphith.php';break;}
				case 'MY_GRAFIKTICKET' : if (($userlevel == 1)||($userlevel == 2)||($userlevel == 3)||($userlevel == 8)){ $content_header = 'header_user.php'; $content_left = 'graphstatuslap.php';break;}
				case 'STATISTICMONTH' : if (($userlevel == 1)||($userlevel == 2)||($userlevel == 3)||($userlevel == 8)){ $content_header = 'header_user.php'; $content_left = 'statisticsmonth.php';break;}
				case 'STATISTICTYPE' : if (($userlevel == 1)||($userlevel == 2)||($userlevel == 3)||($userlevel == 8)){ $content_header = 'header_user.php'; $content_left = 'statisticstype.php';break;}
				case 'STATISTICCATEGORY' : if (($userlevel == 1)||($userlevel == 2)||($userlevel == 3)||($userlevel == 8)){ $content_header = 'header_user.php'; $content_left = 'statisticscategory.php';break;}
				case 'MY_REPORTSUM' : if (($userlevel == 1)||($userlevel == 2)||($userlevel == 3)||($userlevel == 8)){ $content_header = 'header_user.php'; $content_left = 'laporan_summary.php';break;}
				case 'MY_REPORTCAT' : if (($userlevel == 1)||($userlevel == 2)||($userlevel == 3)||($userlevel == 8)){ $content_header = 'header_user.php'; $content_left = 'laporan_category.php';break;}	
				case 'MY_REPORTCATLASTSTATUS' : if (($userlevel == 1)||($userlevel == 2)||($userlevel == 3)||($userlevel == 8)){ $content_header = 'header_user.php'; $content_left = 'laporan_categorylaststatus.php';break;}
				case 'MY_REPORTAPRVLCATLASTSTATUS' : if (($userlevel == 1)||($userlevel == 2)||($userlevel == 3)||($userlevel == 8)){ $content_header = 'header_user.php'; $content_left = 'laporan_categoryaprvllaststatus.php';break;}
				case 'MY_REPORTCATPIC' : if (($userlevel == 1)||($userlevel == 2)||($userlevel == 3)||($userlevel == 8)){ $content_header = 'header_user.php'; $content_left = 'laporan_category_pic.php';break;}	
				case 'MY_REPORTCATAPPRVL' : if (($userlevel == 1)||($userlevel == 2)||($userlevel == 3)||($userlevel == 8)){ $content_header = 'header_user.php'; $content_left = 'laporan_category_approval.php';break;}	
				case 'MY_REPORTCATSUM' : if (($userlevel == 1)||($userlevel == 2)||($userlevel == 3)||($userlevel == 8)){ $content_header = 'header_user.php'; $content_left = 'laporan_categorysum.php';break;}							
				case 'MY_REPORTDEPT' : if (($userlevel == 1)||($userlevel == 2)||($userlevel == 3)||($userlevel == 8)){ $content_header = 'header_user.php'; $content_left = 'laporan_categorydept.php';break;}	
				case 'MY_REPORTPRIORITY' : if (($userlevel == 1)||($userlevel == 2)||($userlevel == 3)||($userlevel == 8)){ $content_header = 'header_user.php'; $content_left = 'laporan_priority.php';break;}											
				case 'MY_REPORTTRACKING' : if (($userlevel == 1)||($userlevel == 2)||($userlevel == 3)||($userlevel == 8)){ $content_header = 'header_user.php'; $content_left = 'laporan_tracking.php';break;}
				case 'MY_REPORTROM' : if (($userlevel == 1)||($userlevel == 2)||($userlevel == 3)||($userlevel == 8)){ $content_header = 'header_user.php'; $content_left = 'laporan_rom.php';break;}	
				case 'MY_REPORTSTORE' : if (($userlevel == 1)||($userlevel == 2)||($userlevel == 3)||($userlevel == 8)){ $content_header = 'header_user.php'; $content_left = 'laporan_store.php';break;}	
				case 'MY_REPORTTYPE' : if (($userlevel == 1)||($userlevel == 2)||($userlevel == 3)||($userlevel == 8)){ $content_header = 'header_user.php'; $content_left = 'laporan_type.php';break;}					
				
				case 'MESSAGE' : if (($userlevel == 3)||($userlevel == 8)){ $content_header = 'header_user.php'; $content_left = 'message.php';break;}					
				#case 'FAILEDMESSAGE' : if (($userlevel == 3)||($userlevel == 8)||($userlevel == 1000)){ $content_header = 'header_user.php'; $content_left = 'messagefailed.php';break;}					
				#case 'MESSAGEGMO' : if (($userlevel == 1000)||($userlevel == 1001)){ $content_header = 'header_user.php'; $content_left = 'messagegmo.php';break;}					
				case 'STOREMESSAGE' : if (($userlevel == 1)){ $content_header = 'header_user.php'; $content_left = 'messagestore.php';break;}			
				case 'STOREMESSAGEFAILED' : if (($userlevel == 1)){ $content_header = 'header_user.php'; $content_left = 'messagestore_failed.php';break;}		

				case 'SENDMAILTOAREA' : if (($userlevel == 1)){ $content_header = 'header_user.php'; $content_left = 'mailsendtoarea.php';break;}					
				case 'SENDMAILTOROM' : if (($userlevel == 3)){ $content_header = 'header_user.php'; $content_left = 'mailsendtorom.php';break;}					
				case 'SENDMAILTOGMO' : if (($userlevel == 8)){ $content_header = 'header_user.php'; $content_left = 'mailsendtogmo.php';break;}					
				#case 'SENDMAILTOAREAMOVEMENT' : if (($userlevel == 1)){ $content_header = 'header_user.php'; $content_left = 'mailsendtoarea.php';break;}					
				case 'SENDMAILTOROMMOVEMENT' : if (($userlevel == 3)){ $content_header = 'header_user.php'; $content_left = 'mailsendtorommovement.php';break;}					
				case 'SENDMAILTOGMOMOVEMENT' : if (($userlevel == 8)){ $content_header = 'header_user.php'; $content_left = 'mailsendtogmomovement.php';break;}					
				#case 'SENDMAILTOAREAREPLACE' : if (($userlevel == 3)){ $content_header = 'header_user.php'; $content_left = 'mailsendtoromreplace.php';break;}					
				case 'SENDMAILTOROMREPLACE' : if (($userlevel == 3)){ $content_header = 'header_user.php'; $content_left = 'mailsendtoromreplace.php';break;}					
				case 'SENDMAILTOGMOREPLACE' : if (($userlevel == 8)){ $content_header = 'header_user.php'; $content_left = 'mailsendtogmoreplace.php';break;}					
			
				case 'MAILRESENDSTORE' : if (($userlevel == 1)){ $content_header = 'header_user.php'; $content_left = 'resendmailstore.php';break;}	
				case 'RESENDMAILSUKSES' : if (($userlevel == 1)){ $content_header = 'header_user.php'; $content_left = 'suksesresendmail.php';break;}	
				case 'MAILRESEND' : if (($userlevel == 3)||($userlevel == 8)||($userlevel == 1000)){ /*$content_header = 'header_user.php';*/ $content_left = 'mailer_areamanager_do_the_approval.php';break;}	
				
				case 'FSDMESSAGE' : if (($userlevel == 1000)){ $content_header = 'header_user.php'; $content_left = 'messagefsd.php';break;}
				
				case 'UPDATEUSERRESPOND' : 
				
				if (($userlevel == 1)||($userlevel == 2)||($userlevel == 3)||($userlevel == 8)){ 
				###$content_header = 'header_user.php'; $content_left = 'updateuser_respond.php';break;
				$content_header = 'header_user.php'; $content_left = 'updateuser_respond.php';break;
				}
				case 'UPDATEUSERRESPONDCANCEL' : 
				
				//if (($userlevel == 1)||($userlevel == 2)||($userlevel == 3)||($userlevel == 8)){ 
				if (($userlevel == 1)||($userlevel == 2)||($userlevel == 3)||($userlevel == 8)){ 
				###$content_header = 'header_user.php'; $content_left = 'updateuser_respondcancel.php';break;
				$content_header = 'header_admin.php'; $content_left = 'updateuser_respondcancel.php';break;
				}
				case 'UPDATEUSERRESPONDRECEIVE' : 
				
				//if (($userlevel == 1)||($userlevel == 2)||($userlevel == 3)||($userlevel == 8)){ 
				if (($userlevel == 1)){ 
				###$content_header = 'header_user.php'; $content_left = 'updateuser_respondcancel.php';break;
				$content_header = 'header_admin.php'; $content_left = 'updateuser_respondereceive.php';break;
				}
				case 'UPDATEUSERRESPONDTRANSFER' : 
				
				//if (($userlevel == 1)||($userlevel == 2)||($userlevel == 3)||($userlevel == 8)){ 
				#if (($userlevel == 1)){ 
				if (($userlevel == 3)||($userlevel == 1)){ 
				###$content_header = 'header_user.php'; $content_left = 'updateuser_respondcancel.php';break;
				$content_header = 'header_admin.php'; $content_left = 'updateuser_respondetransfer.php';break;
				}
				case 'UPDATEUSERRESPONDTRANSFERFSD' : 
				/* 
					welcome.php
					-> reqstore_admin_movement.php
					-> sequenceactivitiesfsd.php
					-> reqstore_admin_movement_transferfsd.php
				*/
				
				//if (($userlevel == 1)||($userlevel == 2)||($userlevel == 3)||($userlevel == 8)){ 
				if (($userlevel == 1000)||($userlevel == 1001)){ 
				###$content_header = 'header_user.php'; $content_left = 'updateuser_respondcancel.php';break;
			#	$content_header = 'header_admin.php'; $content_left = 'updateuser_respondetransferfsd.php';break;
				$content_header = 'header_admin.php'; $content_left = 'info.php';break;
				}
				case 'ADM/UPDATEUSERRESPOND' : $content_left = 'updateadmin_respond.php';break;
				//halaman list all ticket pada admin
				case 'ADM/LIST_TICKET' 	: $content_left = 'ticket_list.php';break;
				
				//halaman for approval from email manager
				case 'ADM/FORMAPPRVL_FROMEMAIL' 	: $content_left = 'formapprvl_fromemail.php';break;
	
				//halaman detail statistic (graphic category detail)
				case 'ADM/STAT_DETIL'	:
				case 'STAT_DETIL'		: $content_left = 'stat_detil2.php';break;
				//halaman detail statistic (graphic type detail >> Problem / Request)
				case 'ADM/STAT_TYPE_DETIL'	:
				case 'STAT_TYPE_DETIL'		: $content_left = 'stat_type_detil2.php';break;
				
				//form report FOR ADMIN VIEW
				case 'ADM/MY_REPORT' : $content_left = 'laporan_pertanggal.php';break;
				case 'ADM/MY_REPORTX' : $content_left = 'laporan_pertanggalx.php';break;
				case 'ADM/MY_REPORT1' : $content_left = 'laporan_perstatusnew.php';break;
				case 'ADM/MY_REPORT2' : $content_left = 'laporan_percatnew.php';break;
				case 'ADM/MY_REPORT3' : $content_left = 'laporan_perprioritynew.php';break;
				case 'ADM/MY_REPORT4' : $content_left = 'laporan_pertypenew.php';break;
				case 'ADM/MY_REPORTSUM' : $content_left = 'laporan_summary.php';break;
				case 'ADM/MY_REPORTCAT' : $content_left = 'laporan_category.php';break;
				case 'ADM/MY_REPORTCATLASTSTATUS' : $content_left = 'laporan_categorylaststatus.php';break;		
				case 'ADM/MY_REPORTAPRVLCATLASTSTATUS' : $content_left = 'laporan_categoryaprvllaststatus.php';break;
				case 'ADM/MY_REPORTCATPIC' : $content_left = 'laporan_category_pic.php';break;
				case 'ADM/MY_REPORTCATAPPRVL' : $content_left = 'laporan_category_approval.php';break;
				case 'ADM/MY_REPORTCATSUM' : $content_left = 'laporan_categorysum.php';break;
				case 'ADM/MY_REPORTDEPT' : $content_left = 'laporan_categorydept.php';break;
				case 'ADM/MY_REPORTPRIORITY' : $content_left = 'laporan_priority.php';break;
				case 'ADM/MY_REPORTTRACKING' : $content_left = 'laporan_tracking.php';break;
				case 'ADM/MY_REPORTROM' : $content_left = 'laporan_rom.php';break;
				case 'ADM/MY_REPORTSTORE' : $content_left = 'laporan_store.php';break;
				case 'ADM/MY_REPORTTYPE' : $content_left = 'laporan_type.php';break;
				case 'ADM/MY_GRAFIK' : $content_left = 'graphith.php';break;
				case 'ADM/MY_GRAFIKTICKET' : $content_left = 'graphstatuslap.php';break;
				//case 'ADM/MY_REPORT2' : $content_left = 'exword.php';break;	
				case 'ADM/STATISTICMONTH' : $content_left = 'statisticsmonth.php';break;	
				case 'ADM/STATISTICTYPE' : $content_left = 'statisticstype.php';break;	
				#case 'ADM/STATISTICCATEGORY' : $content_left = 'statisticscategory.php';break;	
				case 'ADM/MESSAGE' : $content_left = 'message.php';break;
				case 'ADM/MESSAGEPIC' : $content_left = 'messagepic.php';break;
				case 'MESSAGEPIC' : $content_header = 'header_pic.php'; $content_left = 'messagepic.php';break;
				//form report FOR User VIEW
				##if ($userlevel== 1){

				##}
				
				case 'ADM/CATEGORY' 	: if ($userlevel== 99||$userlevel== 100||$userlevel== 101||$userlevel== 102||$userlevel== 103||$userlevel== 104) {$content_left = 'category_manage.php';break;}
				case 'SENDMAILTOFSD' : if (($userlevel == 1000)){ $content_header = 'header_admin.php'; $content_left = 'mailsendtofsd.php';break;}					

				//halaman user management pada admin
				case 'ADM/FORM_NEW_USER'	: 
				if ($userlevel== 99||$userlevel== 100||$userlevel== 101||$userlevel== 102||$userlevel== 103||$userlevel== 104) {
						$content_left = 'user_new.php';break;
					}	
				case 'ADM/FORM_NEW_CAT'	: 
				if ($userlevel== 99||$userlevel== 100||$userlevel== 101||$userlevel== 102||$userlevel== 103||$userlevel== 104) {
						$content_left = 'cat_new.php';break;
					}	
				case 'ADM/USER'	:
					if ($userlevel == 21 || $userlevel== 22 || $userlevel== 99 || $userlevel== 98  || $userlevel==100 || $userlevel==101 || 
					$userlevel==102 ||$userlevel== 103||$userlevel== 104 || $userlevel == 1000 || $userlevel == 1001 || $userlevel == 1002|| $userlevel == 1003) {
					$content_left = 'user_manage.php';
					}else { $content_left = ''; }
					break;
													
				// Add by ARYN 
				case 'ADM/CATEGORY' 	: if ($userlevel== 99) {$content_left = 'category_manage.php';break;}
				case 'ADM/FORM_NEW_CAT'	: 
				if ($userlevel== 99) {
						$content_left = 'cat_new.php';break;
					}	
					//form pembuatan departemen baru
				case 'ADM/DEPARTEMEN' : $content_left = 'departemen_manage.php';break;
				case 'ADM/FORM_NEW_DEP'	: 
				if ($userlevel== 100) {
						$content_left = 'dep_new.php';break;
					}
				// Add by aryn 10-Jan-2017
				case 'ADM/USERTOP' 	: if ($userlevel== 99) {$content_left = 'usertop_manage.php';break;}
				case 'ADM/USERMNG' 	: if ($userlevel== 99) {$content_left = 'usersubmng_manage.php';break;}
				case 'ADM/USERADMIT': if ($userlevel== 99) {$content_left = 'useradmit_manage.php';break;}
				case 'ADM/USERADMFSD': if ($userlevel== 99) {$content_left = 'useradmfsd_manage.php';break;}
				case 'ADM/USERADMSDD': if ($userlevel== 99) {$content_left = 'useradmsdd_manage.php';break;}
				case 'ADM/USERPICIT': if ($userlevel== 99) {$content_left = 'userpicit_manage.php';break;}
				case 'ADM/USERPICFSD': if ($userlevel== 99) {$content_left = 'userpicfsd_manage.php';break;}
				case 'ADM/USERPICSDD': if ($userlevel== 99) {$content_left = 'userpicsdd_manage.php';break;}
				case 'ADM/USERROM': if ($userlevel== 99) {$content_left = 'userrom_manage.php';break;}
				case 'ADM/USERRAM': if ($userlevel== 99) {$content_left = 'userram_manage.php';break;}
				//form pembuatan ticket untuk user
				case 'FORM_NEW_PROBLEM'	: $content_left = 'problem_new.php';break;
				case 'CHANGE_PASS'	: $content_left = 'change_pass.php';break;
				case 'LIST_REQUEST'	: $content_left = 'list_request.php';break;
				case 'LIST_GROUPREQUEST'	: $content_left = 'list_grouprequest.php';break;
				
				//form pembuatan departemen baru
				case 'ADM/NEW_DEPARTEMEN' : $content_left = 'departemen_new.php';break;			
				
				/*case 'LIST_USER'		: 
				//$content_header = 'header_admin.php';
				$content_left = 'user_list.php';break; */
				
				//form pembuatan ticket untuk admin
				case 'ADM/NEW_PROBLEM' : $content_left = 'problem_new.php';break;				
				case 'ADM/ADMINNEW_PROBLEM' : $content_left = 'problem_adminnew.php';break;
				case 'ADM/LIST_REQUEST'	: $content_left = 'list_request.php';break;
				case 'ADM/LIST_MYREQUEST'	: $content_left = 'list_myrequest.php';break;
				case 'ADM/LIST_STORE'	: $content_left = 'list_store.php';break; /* List Store */
				case 'ADM/LIST_ROMUSER'	: $content_left = 'list_romuser.php';break; /* List User Regional Operational Manager */
				case 'ADM/LIST_AMUSER'	: $content_left = 'list_amuser.php';break; /* List User Area Manager */
				case 'ADM/LIST_USER'	: $content_left = 'list_user.php';break; /* List User RSC */
				case 'ADM/LIST_MCAT'	: $content_left = 'list_mcat.php';break; /* List Master Category */
				case 'ADM/LIST_SCAT'	: $content_left = 'list_scat.php';break; /* List Sub Category */			
				case 'ADM/NEW_STORE' : $content_left = 'store_new.php';break;	/* Add/Update Store */
				case 'ADM/NEW_ROMUSER' : $content_left = 'romuser_new.php';break; /* Add/Update User Regional Operational Manager */	
				case 'ADM/NEW_AMUSER' : $content_left = 'amuser_new.php';break;	 /* Add/Update User Area Manager */
				case 'ADM/NEW_USER' : $content_left = 'user_new.php';break;	/* Add/Update User RSC */
				case 'ADM/NEW_MCAT' : $content_left = 'mcat_new.php';break;	/* Add/Update Master Category */
				case 'ADM/NEW_SCAT' : $content_left = 'scat_new.php';break;	/* Add/Update Sub Category */
				case 'ADM/CHANGE_PASS'	: $content_left = 'change_pass.php';break;
				case 'ADM/LIST_ADMINREQUEST'	: $content_left = 'list_adminrequest.php';break;
				case 'ADM/LIST_GROUPREQUEST'	: $content_left = 'list_grouprequest.php';break;
				
				case 'ADM/LIST_PARAMETER'	: $content_left = 'list_parameter.php';break; /* List Parameter Setting */
				case 'ADM/NEW_PARAMETER' : $content_left = 'parameter_new.php';break;	/* Add/Update Parameter Setting */
				
				//form edit ticket
				case 'ADM/EDIT_PROBLEM' : $content_left = 'ticket_edit.php';break;
		
				//form approved ticket
				case 'ADM/APPROVED_PROBLEM' : $content_left = 'ticket_edit_approved.php';break;				
				
				//form approved kadiv ticket
				case 'ADM/APPROVED_PROBLEM_DIVHEAD' : $content_left = 'ticket_edit_approved_kdv.php';break;

/** ======================================================================================================================================================== **/				

				//form approved ticket By Kadep Front (index.php?view=statistic) 
				case 'ADM/APPROVED_KADEP_PROBLEM_STATISTIC' : $content_left = 'ticket_approved_kadep_statistic.php';break;
				
				//form edit ticket
				case 'ADM/DELETE_PROBLEM' : 
					$pid=$_GET['pid'];
					$ith->runQuery("DELETE FROM ITH_TICKETATTACH WHERE ticket_id = '$pid'");
					$actionKB=$ith->runQuery("DELETE FROM ITH_TICKET WHERE ticket_id = '$pid'");
					if ($actionKB) header("Location: index.php?view=list_ticket");	
				break;
				
				//halaman my problem pada user
				case 'MY_PROBLEM'		: 
				$content_header = 'header_admin.php';
				$content_left = 'problem_my.php';break;
				
				//halaman my problem pada user
				case 'MY_PERIOD'		: $content_left = 'period.php';break;
				
				case 'ADM/MY_PERIOD'		: $content_left = 'period.php';break;
				
				
				//halaman list problem user pada
				case 'ADM/LPS'		: $content_left = 'list_solver.php';break;
				
				//halaman list problem user pada
				case 'ADM/LPD'		: $content_left = 'list_problemdepartemen.php';break;
				
				//halaman list problem user pada

				case 'ADM/LPM'		: $content_left = 'statistics_from_grafik.php';break;
			
				//case 'ADM/LPM'		: $content_left = 'list_problemallmonths.php';break;
				
				
				//halaman statistic

					case 'ADM/STATISTIC'	: $content_header = 'header_admin.php';	$content_left = 'statistics.php';break;
					case 'STATISTIC'		: $content_header = 'header_user.php';	$content_left = 'statistics.php';break;
					case 'ADM/STATISTICCATEGORY'	: $content_header = 'header_admin.php';	$content_left = 'statisticscategory.php';break;
					case 'STATISTICCATEGORY'		: $content_header = 'header_user.php';	$content_left = 'statisticscategory.php';break;
					case 'ADM/STATISTICSTORE'	: $content_header = 'header_admin.php';	$content_left = 'statisticsstore.php';break;
					case 'STATISTICSTORE'		: $content_header = 'header_user.php';	$content_left = 'statisticsstore.php';break;
					case 'ADM/STATISTICPIC'	: $content_header = 'header_admin.php';	$content_left = 'statisticspic.php';break;
					case 'STATISTICPIC'		: $content_header = 'header_user.php';	$content_left = 'statisticspic.php';break;
				
					//halaman detail problemperyear
				case 'ADM/DETPROBLEMYEAR'	:
				case 'DETPROBLEMYEAR'		: $content_header = 'header_admin.php';
												$content_left = 'detproblemyear.php';break;
				
				//halaman detail problemstatus
				case 'ADM/DETPROBLEMSTATUS'	:
				case 'DETPROBLEMSTATUS'		: $content_header = 'header_admin.php';
												$content_left = 'detproblemstatus.php';break;
				
								//halaman detail problemcategory
				case 'ADM/DETPROBLEMCATEGORY'	:
				case 'DETPROBLEMCATEGORY'		: $content_header = 'header_admin.php';$content_left = 'detproblemcategory.php';break;
				
								//halaman detail problemalldepartemen
				case 'ADM/DETPROBLEMALLDEPARTEMENT'	:
				case 'DETPROBLEMALLDEPARTEMENT'		: $content_header = 'header_admin.php';$content_left = 'detproblemdepartemen.php';break;
				
								//halaman detail problemby it solver
				case 'ADM/DETPROBLEMITSOLVER'	:
				case 'DETPROBLEMITSOLVER'		: $content_header = 'header_admin.php';$content_left = 'detproblemitsolver.php';break;
				
												
				//halaman response & detail
				case 'ADM/COMMENT'		: 
				/**
				case 'COMMENT'			: #$content_header = 'header_admin.php';
				
				if (($userlevel == 1)||($userlevel == 2)||($userlevel == 3)||($userlevel == 8)){ 
				$content_header = 'header_admin.php'; $content_left = 'comment.php'; break;
				}
				**/
				
				case 'COMMENT'			: #$content_header = 'header_admin.php';
				$content_right = 'default_right.php';	
				$pid = zeroInt($_GET['pid']);
	
					$rsticket = $ith->runQuery
					("SELECT *, 
											   		(SELECT user_realname FROM ITH_USER WHERE user_id = ticket_handleby) as handleby
													FROM ITH_TICKET_HEADER 
											   		LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id  = ITH_TICKETSTATUS.ticketstatus_id
											   		LEFT JOIN ITH_TICKETCATEGORY ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORY.ticketsubcategory_code
													LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_id 
											   		WHERE ticket_id='$pid'");
					$dtticket = $ith->getDataObject($rsticket);
					
					if (!$dtticket) { header("Location: index.php?m=error");
					}else { $content_left = 'comment.php';  /* $content_header = 'header_admin.php'; */
					break;}
				
				case 'ADM/UPDATE'		:
				case 'UPDATE'			: 
				$content_right = 'default_right.php';	$pid = zeroInt($_GET['pid']);
	
					$rsticket = $ith->runQuery
					("SELECT *, 
											   		(SELECT user_realname FROM ITH_USER WHERE user_id = ticket_handleby) as handleby
													FROM ITH_TICKET_HEADER 
											   		LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id  = ITH_TICKETSTATUS.ticketstatus_id
											   		LEFT JOIN ITH_TICKETCATEGORY ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORY.ticketsubcategory_code
													LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_id 
											   		WHERE ticket_id='$pid'");
					$dtticket = $ith->getDataObject($rsticket);
					
					if (!$dtticket) { header("Location: index.php?m=error");}
					else { $content_left = 'update.php'; 
					break;
				}
				
				case 'ADM/UPDATEFORUSER'		:
				case 'UPDATEFORUSER'			: 
				$content_right = 'default_right.php';	$pid = zeroInt($_GET['pid']);
	
					$rsticket = $ith->runQuery
					("SELECT *, 
											   		(SELECT user_realname FROM ITH_USER WHERE user_id = ticket_handleby) as handleby
													FROM ITH_TICKET_HEADER 
											   		LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id  = ITH_TICKETSTATUS.ticketstatus_id
											   		LEFT JOIN ITH_TICKETCATEGORY ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORY.ticketsubcategory_code
													LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_id 
											   		WHERE ticket_id='$pid'");
					$dtticket = $ith->getDataObject($rsticket);
					
					if (!$dtticket) { header("Location: index.php?m=error");}
					else { $content_left = 'updateforuser.php'; 
					break;
				}
				
				//halaman request approval
				case 'ADM/COMMENTAPRVL'		:
				case 'COMMENTAPRVL'			: 
				$content_right = 'default_right.php';	$pid = zeroInt($_GET['pid']);
	
					$rsticket = $ith->runQuery
					("SELECT *, 
											   		(SELECT user_realname FROM ITH_USER WHERE user_id = ticket_handleby) as handleby
													FROM ITH_TICKET_HEADER 
											   		LEFT JOIN ITH_TICKETSTATUS ON ITH_TICKET_HEADER.ticketstatus_id  = ITH_TICKETSTATUS.ticketstatus_id
											   		LEFT JOIN ITH_TICKETCATEGORY ON ITH_TICKET_HEADER.ticketsubcategory_code = ITH_TICKETCATEGORY.ticketsubcategory_code
													LEFT JOIN ITH_USER ON ITH_TICKET_HEADER.ticket_createby = ITH_USER.user_id 
											   		WHERE ticket_id='$pid'");
					$dtticket = $ith->getDataObject($rsticket);
					
					if (!$dtticket) { header("Location: index.php?m=error");}
					else { $content_left = 'commentaprvl.php'; 
					break;
				}
				default					:
					
					$content_left = 'home.php';
					if($userlevel == 3 || $userlevel == 4 || $userlevel == 8 || $userlevel == 1000 || $userlevel == 1001 || $userlevel == 1002 || $userlevel == 1003)
					{ /*$content_left = 'ticket_list.php';*/ $content_left = 'welcome.php'; 
					}elseif($userlevel == 99||$userlevel == 100||$userlevel == 101||$userlevel == 102||$userlevel== 103||$userlevel== 104){$content_left = 'welcome_admin.php';
					}elseif($userlevel == 21||$userlevel == 22||$userlevel == 23||$userlevel == 24||$userlevel == 25){$content_left = 'welcome_pic.php';
					}
					#}elseif ($userlevel == 21){$content_left = 'welcome_admin.php';}
					break;
			}
			
			#$content_right = 'default_right.php';
			
			
			include ('main.php'); #$default_footer= 'footer.php';
			
		} // ber-akhistnya case 'HOME'
		break;
		
	
		
		case 'MESSAGE'		: include ('message.php');
		
		
	case 'FORM'			:
	
		if ($action == NULL) {header ("Location: index.php?m=error");exit();}
		else include ('forms.php');
		break;
	case 'LOGIN'		:
		if (strtoupper($action) == 'SEND') { include ('login_check.php');
		}elseif (strtoupper($action) == 'SENDAUTH') { ###include ('login_checkmail.php');
		}else{ include ('login.php');
		}break;
		
	
	case 'NOTIFMAIL'		:
		if (strtoupper($action) == 'SENDAUTH') { include ('login_checkmail.php');
		#}
		#else{ include ('login.php');
		}break;
	case 'NOTIFMAILFSD'		:
		if (strtoupper($action) == 'SENDAUTHFSD') { include ('login_checkmailfsd.php');
		#}
		#else{ include ('login.php');
		}break;
	
	case 'INFO' : $content_left = include('halaman_approval_from_mail.php');	break;
	
	/*
	//Registration and activation Disabled
	case 'REGISTRATION'	:
		if (strtoupper($action) == 'SEND') include ('registration_check.php');
		else if (strtoupper($action) == 'SUCCESS') include ('registration_success.php');
		else include ('registration.php');
		break;
	case 'ACTIVATION'	: include ('user_activation.php');break;
	case 'REGC'			: include ('registration_check.php');break;
	*/
	
	case 'LOGOUT'		: include ('login_out.php');break;
	case 'REPORT'		: include ('form/form_penanganan_masalah.php');break;
	#case 'REPORTIT'		: include ('form/form_request_my_problem2.php');break;
	case 'REPORTUSER'		: include ('form/form_request_my_problem.php');break;
	
	case 'REPORTEDIT'		: include ('form_penanganan_masalah_edit.php');break;
	case 'PRINTSTAT'	: include ('printstat.php');break;
	
	case 'PRINTSTATB'	: include ('printstatb.php');break;
	
	case 'EXPORT'		: include ('export.php');break;
	case 'DBUSER'		: include ('user_db.php');break;
	case 'ERROR'		:
	default				: include ('error.php');break;
	
	session_destroy();
	//ob_flush;
}
?>