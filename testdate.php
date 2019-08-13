<?
/***
$date = "Jan 21, 2019";
$date = date('d/m/Y',strtotime($date));
echo $date.'<br>';
$dates = strtotime("+7 day", $date);
echo '<br>'.date('d/m/Y', $dates);
***/

#$dateNow = date('d/m/Y');
$dateNow = date('m/d/Y', '01/05/2019');
$dateNowx = date('m/d/Y', strtotime($dateNow.'+7 days'));
echo '<hr><br>'.$dateNow.' >> '.$dateNowx;

$backdate = date('m/d/Y', '05/05/2019');
$date1 = strtotime($backdate);
$date = strtotime("-7 day", $date1);
$prevdate = date('m/d/Y', $date);
echo '<br>Prev Date = '.$prevdate;

/* 
21/01/2019
22/02/2019
28/02/2019
21/02/2019
19/02/2019
17/02/2019
14/02/2019
15/02/2019
16/04/2019
25/04/2019
14/04/2019
27/02/2019
24/04/2019
26/04/2019
05/04/2019
15/04/2019
11/04/2019
10/04/2019
27/03/2019
03/04/2019
08/04/2019
04/04/2019
03/03/2019
26/02/2019
11/03/2019
18/02/2019
22/01/2019
06/04/2019
22/03/2019
25/03/2019
31/03/2019
13/04/2019
*/

?>	