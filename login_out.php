<?php
@session_destroy();
$qcusrlogout = $ith->runQuery("UPDATE ITH_USER SET userloginstatus_id = '0' WHERE user_nik = '".$_SESSION['user_nik']."'");
#header("Location: http://servicedesk.ffi.co.id/index.php?m=login");
#header("Location: http://localhost/servicedesk/index.php?m=login");
#header("Location: http://".$_SERVER["HTTP_HOST"]."/eoss/index.php?m=login");
header("Location: http://localhost/eoss/index.php?m=login");
?>