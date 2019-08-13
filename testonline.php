<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>CEK INTERNET</title>
<script type="text/javascript" src="./jquery/jquery.min.js"></script>
<!--<link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300" rel="stylesheet" type="text/css">-->
<link href="style.css" rel="stylesheet" type="text/css">
<body>
<div class="top"> 
  		
</div>
<section id="wrapper">
    <header>
      <h1>CEK KONEKSI INTERNET</h1>
    </header>
<section>
  <h3>Kondisi Internet Anda: <span id="kondisi">checking...</span></h3>
  <p>Cek dengan cara mematikan fitur online, jika di Mozilla Firefox (klik File -> Work Offline)</p>
  <p>Atau dengan mematikan koneksi internet di Komputer Anda</p>
</section>
<script>
var status = document.getElementById('kondisi')
setInterval(function () {
  status.className = navigator.onLine ? 'online' : 'offline';
  status.innerHTML = navigator.onLine ? 'online' : 'offline';
}, 100);
</script>
</body>
</html>