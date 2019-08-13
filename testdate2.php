<?php
// menambahkan tahun di php
if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
$date = date_create('20-02-2012 19:30:20');
echo 'Waktu awal: 20-02-2012 19:30:20<br/>';
date_add($date, date_interval_create_from_date_string('1 year'));
echo 'Tambahkan 1 tahun: '.date_format($date, 'd-m-Y H:i:s').'<br/><br/>';

// mengurangi tahun di php
if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
$date = date_create('20-02-2012 19:30:20');
echo 'Waktu awal: 20-02-2012 19:30:20<br/>';
date_add($date, date_interval_create_from_date_string('-1 year'));
echo 'Kurangi 1 tahun: '.date_format($date, 'd-m-Y H:i:s').'<br/><br/>';

// menambahkan bulan di php
if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
$date = date_create('20-02-2012 19:30:20');
echo 'Waktu awal: 20-02-2012 19:30:20<br/>';
date_add($date, date_interval_create_from_date_string('6 months'));
echo 'Tambahkan 6 bulan: '.date_format($date, 'd-m-Y H:i:s').'<br/><br/>';

// mengurangi bulan di php
if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
$date = date_create('20-02-2012 19:30:20');
echo 'Waktu awal: 20-02-2012 19:30:20<br/>';
date_add($date, date_interval_create_from_date_string('-6 months'));
echo 'Kurangi 6 bulan: '.date_format($date, 'd-m-Y H:i:s').'<br/><br/>';

// menambahkan hari di php
if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
$date = date_create('20-02-2012 19:30:20');
echo 'Waktu awal: 20-02-2012 19:30:20<br/>';
date_add($date, date_interval_create_from_date_string('7 days'));
echo 'Tambahkan 7 hari: '.date_format($date, 'd-m-Y H:i:s').'<br/><br/>';

// mengurangi hari di php
if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
$date = date_create('20-02-2012 19:30:20');
echo 'Waktu awal: 20-02-2012 19:30:20<br/>';
date_add($date, date_interval_create_from_date_string('-7 days'));
echo 'Kurangi 7 hari: '.date_format($date, 'd-m-Y H:i:s').'<br/><br/>';

// menambahkan jam di php
if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
$date = date_create('20-02-2012 19:30:20');
echo 'Waktu awal: 20-02-2012 19:30:20<br/>';
date_add($date, date_interval_create_from_date_string('6 hours'));
echo 'Tambahkan 6 jam: '.date_format($date, 'd-m-Y H:i:s').'<br/><br/>';

// mengurangi jam di php
if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
$date = date_create('20-02-2012 19:30:20');
echo 'Waktu awal: 20-02-2012 19:30:20<br/>';
date_add($date, date_interval_create_from_date_string('-6 hours'));
echo 'Kurangi 6 jam: '.date_format($date, 'd-m-Y H:i:s').'<br/><br/>';

// menambahkan menit di php
if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
$date = date_create('20-02-2012 19:30:20');
echo 'Waktu awal: 20-02-2012 19:30:20<br/>';
date_add($date, date_interval_create_from_date_string('30 minutes'));
echo 'Tambahkan 30 menit: '.date_format($date, 'd-m-Y H:i:s').'<br/><br/>';

// mengurangi menit di php
if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
$date = date_create('20-02-2012 19:30:20');
echo 'Waktu awal: 20-02-2012 19:30:20<br/>';
date_add($date, date_interval_create_from_date_string('-30 minutes'));
echo 'Kurangi 30 menit: '.date_format($date, 'd-m-Y H:i:s').'<br/><br/>';

// menambahkan detik di php
if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
$date = date_create('20-02-2012 19:30:20');
echo 'Waktu awal: 20-02-2012 19:30:20<br/>';
date_add($date, date_interval_create_from_date_string('25 seconds'));
echo 'Tambahkan 25 detik: '.date_format($date, 'd-m-Y H:i:s').'<br/><br/>';

// mengurangi detik di php
if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
$date = date_create('20-02-2012 19:30:20');
echo 'Waktu awal: 20-02-2012 19:30:20<br/>';
date_add($date, date_interval_create_from_date_string('-25 seconds'));
echo 'Kurangi 25 detik: '.date_format($date, 'd-m-Y H:i:s').'<br/><br/>';
?>