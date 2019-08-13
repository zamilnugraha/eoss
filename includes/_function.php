<?php
	function checkEmail($email) {
		if(eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)) { 
		  return true; 
		} 
		else { 
		  return false; 
		}
	}
	
	function strleft($s1, $s2) {
		return substr($s1, 0, strpos($s1, $s2));
	}
	
	function selfURL() {
		$s = empty($_SERVER["HTTPS"]) ? ''
			: ($_SERVER["HTTPS"] == "on") ? "s"
			: "";
		$protocol = strleft(strtolower($_SERVER["SERVER_PROTOCOL"]), "/").$s;
		$port = ($_SERVER["SERVER_PORT"] == "80") ? ""
			: (":".$_SERVER["SERVER_PORT"]);
			
		$dir = ereg_replace("[^/]*\.php.*$","",$_SERVER['PHP_SELF']);
		return $protocol."://".$_SERVER['SERVER_NAME'].$port.$dir;
	}
	
	function fullURL($encode=1) {
		$s = empty($_SERVER["HTTPS"]) ? ''
			: ($_SERVER["HTTPS"] == "on") ? "s"
			: "";
		$protocol = strleft(strtolower($_SERVER["SERVER_PROTOCOL"]), "/").$s;
		$port = ($_SERVER["SERVER_PORT"] == "80") ? ""
			: (":".$_SERVER["SERVER_PORT"]);
		
		$qs = ($_SERVER['QUERY_STRING'])?'?'.$_SERVER['QUERY_STRING']:'';
		
		if ($encode == 1) return urlencode($protocol."://".$_SERVER['SERVER_NAME'].$port.$_SERVER['PHP_SELF'].$qs);
		else return $protocol."://".$_SERVER['SERVER_NAME'].$port.$_SERVER['PHP_SELF'].$qs;
	}
	
	#function mssqlSmartQuote($value) {
	function mysqlSmartQuote($value) {
		if (get_magic_quotes_gpc()) {
			$value = stripslashes($value);
		}
		$value = ereg_replace('\'','\'\'',$value);
		
		return $value;
	}
	
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}	
	
	function pre($str) {
		$pattern = array('/\n/','/\t/');
		$replace = array('<br/>','&nbsp;&nbsp;&nbsp;');
		
		$result = preg_replace($pattern,$replace,$str);
		return $result;
	}

	function zeroInt($val) {
		if ($val==NULL) return 0;
		else return $val;
	}
	
	function nullValue($val) {
		if($val==NULL) return 'NULL';
		else return (int) $val;
	}
	
	function ucString($string) {
		$string =ucwords(strtolower($string));
	
		foreach (array('-', '\'') as $delimiter) {
		  if (strpos($string, $delimiter)!==false) {
			$string =implode($delimiter, array_map('ucfirst', explode($delimiter, $string)));
		  }
		}
		return $string;
	}

	function getip() {
		if (isset($_SERVER)) {
			if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {
				$realip = $_SERVER["HTTP_X_FORWARDED_FOR"];
			} 
			else if (isset($_SERVER["HTTP_CLIENT_IP"])) {
				$realip = $_SERVER["HTTP_CLIENT_IP"];
			} 
			else {
				$realip = $_SERVER["REMOTE_ADDR"];
			}
	
		} 
		else {
			if ( getenv( 'HTTP_X_FORWARDED_FOR' ) ) {
				$realip = getenv( 'HTTP_X_FORWARDED_FOR' );
			} 
			else if ( getenv( 'HTTP_CLIENT_IP' ) ) {
				$realip = getenv( 'HTTP_CLIENT_IP' );
			} 
			else {
				$realip = getenv( 'REMOTE_ADDR' );
			}
		}
	return $realip; 
	}
	
	function convertKalender($stampDate,$withTime=0) {
		$m = array ("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
		
		$result = date('d ',$stampDate).$m[(date('n',$stampDate)-1)].date(' Y',$stampDate);
		
		if ($withTime==1) {
			$result .= date(' H:i',$stampDate);
		}
		
		return $result;
	}
	
	function getMonthName($num, $lang='id') {
		$bulan = array('id'=>array('','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'),
					   'en'=>array('','January','February','March','April','May','June','July','August','September','October','November','December'));
		
		return $bulan[$lang][$num];						  
	}
	
	function getDayName($num, $lang) {
		$hari = array('id'=>array('Minggu','Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu'),
					  'en'=>array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'));
		
		return $hari[$lang][$num];
	}
	
	function cutString ($string, $num_words, $postfix='') {
		$temp = explode(" ",$string);
		$temps = array();
		
		for ($i=0;$i<$num_words;$i++) {
			$temps[] = $temp[$i];
		}
		
		if (count($temp) <= $num_words) $postfix = '';
		$result = implode(" ",$temps)." ".$postfix;
		
		return $result;
	}
	
	function searchingQuote($td, $ts) { //td=text destination(keyword), ts=text source
		$result = ($td)?eregi_replace($td,"<font color=\"#FF0000\">$td</font>",$ts):$ts;
		return $result;
	}
	
	function ConvertAnd ($datatext)
	{
	$dataPecah = explode(" ",$datatext);
	$jumData = count($dataPecah); //untuk menghitung jumlah elemen array

	for($i=0;$i<$jumData;$i++)
	{
	if ($dataPecah[$i]=="&")
	 {
		 $dataPecah[$i]="DAN";
	 }
	}

	$c = implode($dataPecah," ");
	echo $c;
	}
?>