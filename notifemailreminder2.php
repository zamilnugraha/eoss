<?php
?>
<html>
<head><title>Servicedesk tools</title>
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
<h5 id="clock"></h5>
<SCRIPT LANGUAGE="JavaScript1.2" type="text/javascript"><!--
function reload(){
var strI=document.stored.Arrayvalue.value;
var str = new Array(4);
//str[1] = "/";
str[1] = "http://localhost/eoss/info.php";
str[2] = "http://localhost/eoss/notifemailreminder.php";
str[3] = "http://localhost/eoss/notifemailreminder.php";
str[4] = "http://localhost/eoss/notifemailreminder.php";
if( strI==4){
strI=1;
}
else{
URL=str[strI];
window.open(URL,'EC');
//window.open(URL,'location=yes');
strI++;
}
document.stored.Arrayvalue.value= strI;
var intNumber=Math.round(Math.random()*5000);
if(intNumber<300){intNumber=intNumber+300;}
setTimeout("reload()",intNumber);
}
//-->
<!--
</script> 

</head><body onload="reload();">
<form name="stored"><input type="Text" name="Arrayvalue" value="1"></form>
</body></html>