<?php
// menambahkan hari di php
/***
if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
$date = date_create('20-02-2012');
echo 'Waktu awal: 20-02-2012<br/>';
date_add($date, date_interval_create_from_date_string('7 days'));
echo 'Tambahkan 7 hari: '.date_format($date, 'd-m-Y').'<br/><br/>';

// mengurangi hari di php
if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
$date = date_create('20-02-2012');
echo 'Waktu awal: 20-02-2012<br/>';
date_add($date, date_interval_create_from_date_string('-7 days'));
echo 'Kurangi 7 hari: '.date_format($date, 'd-m-Y').'<br/><br/>';
***/

$dateAwal2 = '21/01/2019';
#$date2 = DateTime::createFromFormat('d/m/Y','21/01/2019')->format('d-m-Y');
$date2 = DateTime::createFromFormat('d/m/Y',$dateAwal2)->format('d-m-Y');
//echo '<hr><br>Date Awal : '.$dateAwal2; //01-07-2014
//echo '<br>'.$date2; //01-07-2014
if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
$date3 = date_create($date2);
date_add($date3, date_interval_create_from_date_string('+7 days'));
#echo '<br>Tambahkan 7 hari: '.date_format($date3, 'd/m/Y').'<br/><br/>';
$date3x = date_format($date3, 'd/m/Y');
//echo '<br>Tambahkan 7 hari: '.$date3x.'<br/><br/>';

echo "<hr><br>".$date2.' + 7 hari = '.$date3x;
echo "<hr><br>".$dateAwal2.' + 7 hari = '.$date3x;

$dateAwal2a = '21/01/2019';
$date2a = DateTime::createFromFormat('d/m/Y',$dateAwal2a)->format('d-m-Y');
if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
$date3a = date_create($date2a);
date_add($date3a, date_interval_create_from_date_string('+7 days'));
$date3xa = date_format($date3a, 'd/m/Y');
echo "<hr><br>".$dateAwal2a.' + 7 hari = '.$date3xa;

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