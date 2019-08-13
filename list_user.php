<?php //if (empty($_BASE_PATH)) {header("location:index.php");} ?>
<div id="content" style="height:1560px;">
	<div class="header">
<? if(($_SESSION['user_level']==100)||($_SESSION['user_level']==101)||($_SESSION['user_level']==102)){?>
	<h3>List User</h3>

<? } ?>
    </div>
    <div class="body" style="height:1250px;">
        <div class="problem-lightbox" style="display:none;">
           <div class="statistic">
            <table border="0" cellpadding="0">
            <?php
				$userid = $_SESSION['user_id'];
				$usernik = $_SESSION['user_nik'];
				$username = $_SESSION['user_realname'];
				$udept_id = $_SESSION['user_realname'];
                $hpbc = array_filter(explode("_",$_COOKIE['hpbc_list']));
                $rsproblemclass = $ith->runQuery("SELECT ITH_TICKETSTATUS.ticketstatus_id, ticketstatus_name, 
				COUNT(ticket_id) AS jumlahkasus FROM ITH_TICKETSTATUS 
				LEFT JOIN ITH_TICKET_HEADER ON ITH_TICKETSTATUS.ticketstatus_id = ITH_TICKET_HEADER.ticketstatus_id AND ticket_createby = '$usernik' 
				GROUP BY ITH_TICKETSTATUS.ticketstatus_id, ticketstatus_name");
                while ($dtproblemclass = $ith->getDataObject($rsproblemclass)) {
            ?>
              <tr>
                <td><img src="images/icons/bullet1.gif" width="10" height="10" alt="-" />&nbsp;</td>
                <td><span style="color:<?=getProblemStatusColor($dtproblemclass->ticketstatus_id)?>"><?=$dtproblemclass->ticketstatus_name?></span></td>
                <td width="20" align="center">:</td>
                <td><?=$dtproblemclass->jumlahkasus?></td>
                <td>&nbsp;</td>
                <td><?=(in_array($dtproblemclass->ticketstatus_id,$hpbc)?'<a href="index.php?m=form&a=hpbc&cid='.$dtproblemclass->ticketstatus_id.'&cproc=2" title="show">Show</a>':'<a href="index.php?m=form&a=hpbc&cid='.$dtproblemclass->ticketstatus_id.'&cproc=1" title="hide">Hide</a>')?></td>
              </tr>
            <?php
                }
            ?>
            </table>
           </div>
          <div class="announce">
           	<div class="highlight"><img src="images/icons/info.gif" width="16" height="16" align="top" /> Klik <a href="index.php?view=form_new_problem">disini</a> melaporkan permasalahan yang sedang terjadi</div>
          </div>
           <div class="clear"></div>
        </div>
		<div><br></div>
		<div><br></div>
		<div style="margin-top:-10px;">
			<iframe src="userlist/index.php" frameborder="0" width="100%" scrolling="no" height="1500px"></iframe>
		</div>
    </div>
</div>
<script type="text/javascript">
function cancelProblem(obj) {
	var oke = window.confirm('Jika di-cancel maka tidak dapat dibuka kembali (harus buat ulang), teruskan?');
	if (oke) {return true;}else {return false;}}
</script>