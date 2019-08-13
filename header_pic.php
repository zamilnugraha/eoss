	<div class="logo"><img src="images/header.jpg" width="970" height="200" alt="Logo KFC" /><div class="title"><span class="purple"></div></div>
 	
	<div id="myslidemenu" class="jqueryslidemenu" style="z-index: 100; position:relative">
	  <? if(($userlevel == 21)||($userlevel == 22)||($userlevel == 23)){ /* PIC */?>
			<? if(($pid!='')&&($uid!='')){?>
				<li><a href="index.php?view=new_problem&pid=<?=$pid?>&uid=<?=$_SESSION['user_nik']?>" title="Home" <?=($content_left=="new_problem")?'class="select"':''?>>New Request</a></li>
				<li><a href="index.php?view=list_request&pid=<?=$pid?>&uid=<?=$_SESSION['user_nik']?>" title="List Request" <?=($view=="LIST_REQUEST")?'class="select"':''?>>List Request</a></li>
						<li><a href="index.php?view=change_pass&pid=&uid=<?=$_SESSION['user_nik']?>" title="Change Password" <?=($content_left=="change_pass")?'class="select"':''?>>Change Password</a></li>

				<li><a href="index.php?view=my_report&pid=<?=$pid?>&uid=<?=$uid?>" title="Laporan Bentuk Excel">Report Data</a></li>				
				<li><a href="index.php?view=statistic&pid=<?=$pid?>&uid=<?=$uid?>" title="Statistic" <?=($view=="STATISTIC")?'class="select"':''?>>Graph Statistic</a></li>
			<? }elseif(($pid=='')&&($uid=='')){?>
				<li><a href="index.php?view=new_problem&pid=&uid=" title="Home" <?=($content_left=="new_problem")?'class="select"':''?>>New Request</a></li>
				<li><a href="index.php?view=list_request&pid=&uid=" title="List Request" <?=($view=="LIST_REQUEST")?'class="select"':''?>>List Request</a></li>
				<li><a href="index.php?view=change_pass&pid=&uid=<?=$_SESSION['user_nik']?>" title="Change Password" <?=($content_left=="change_pass")?'class="select"':''?>>Change Password</a></li>			
				<li><a href="index.php?view=my_report&pid=&uid=" title="Laporan Bentuk Excel">Report Data</a></li>
			<? }elseif(($pid!='')&&($uid=='')){?>	
				<li><a href="index.php?view=statistic&pid=&uid=" title="Statistic" <?=($view=="STATISTIC")?'class="select"':''?>>Graph Statistic</a></li>
			<? } ?>	
	  <? } ?>	
	  </div>
	  
	<script type="text/javascript">
    var detik = <?=date('s'); ?>;
    var menit = <?=date('i'); ?>;
    var jam   = <?=date('H'); ?>;
     
    function clock()
    {
        if (detik!=0 && detik%60==0) {
            menit++;
            detik=0;
        }
        second = detik;
         
        if (menit!=0 && menit%60==0) {
            jam++;
            menit=0;
        }
        minute = menit;
         
        if (jam!=0 && jam%24==0) {
            jam=0;
        }
        hour = jam;
         
        if (detik<10){
            second='0'+detik;
        }
        if (menit<10){
            minute='0'+menit;
        }
         
        if (jam<10){
            hour='0'+jam;
        }
        waktu = hour+':'+minute+':'+second;
         
        document.getElementById("clock").innerHTML = waktu;
        detik++;
    }
 
    setInterval(clock,1000);
</script>
 <br>
<!-- This Show Time now -->

 <div style="text-align:left;margin-left:820px;">    
   <h3 id="clock"></h3>
</div>

    </div>