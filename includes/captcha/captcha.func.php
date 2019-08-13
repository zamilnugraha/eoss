<?php
function captcha_show_image() {
	//create image container and size
	$wd=180;$hg=35;
	$captcha_image = imagecreate($wd, $hg);
	//$captcha_image = imagecreate($wd, $hg+20);
	
	$R=50;$G=76;$B=33; 
	$captcha_image_bgcolor = imagecolorallocate($captcha_image, $R, $G, $B);
	
	//set dark and light color
	$captcha_image_lcolor[] = imagecolorallocate($captcha_image, 230, mt_rand(221, 230), mt_rand(179, 192));
	$captcha_image_lcolor[] = imagecolorallocate($captcha_image, 230, mt_rand(221, 230), mt_rand(179, 192));
	$captcha_image_lcolor[] = imagecolorallocate($captcha_image, 230, mt_rand(221, 230), mt_rand(179, 192));
	$captcha_image_dcolor[] = imagecolorallocate($captcha_image, $R+mt_rand(0,40),  $G+mt_rand(0,40), $B+mt_rand(0,40));
	$captcha_image_dcolor[] = imagecolorallocate($captcha_image, $R+mt_rand(0,40),  $G+mt_rand(0,40), $B+mt_rand(0,40));
	$captcha_image_dcolor[] = imagecolorallocate($captcha_image, $R+mt_rand(0,40),  $G+mt_rand(0,40), $B+mt_rand(0,40));
	
	//$white = imagecolorallocate($captcha_image, 255, 255, 255);
	
	// Rectangles
	for ($i = 0; $i <= 5; $i++) {
		imagefilledrectangle($captcha_image, $i*30+mt_rand(4, 15), mt_rand(0, $hg-1), $i*30-mt_rand(4, 15), mt_rand(0, $hg-1), $captcha_image_dcolor[mt_rand(0, 2)]);
	}
	// Grid
	for ($i = 0; $i <= 2; $i++) {
		imageline($captcha_image, $i*60+mt_rand(4, 30), 0, $i*60-mt_rand(4, 30), $hg-1, $captcha_image_lcolor[mt_rand(0, 2)]);
	}
	for ($i = 0; $i <= 2; $i++) {
		imageline($captcha_image, $i*60+mt_rand(4, 30), $hg-1, $i*60-mt_rand(4, 30), 0, $captcha_image_lcolor[mt_rand(0, 2)]);
	}
	
	$symbols = array('2', '3', '4', '5', '6', '7', '8', '9', 'A', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
	$captcha_word = '';
	for ($i = 0; $i <= 4; $i++) {
		$captcha_word .= $symbols[mt_rand(0, count($symbols)-1)];
	}
	
	for($i = 0; $i <= 4; $i++) {
		@imagettftext($captcha_image, mt_rand(24, 28), mt_rand(-15, 15), $i*mt_rand(28, 32)+mt_rand(2,4), mt_rand(25, 32), $captcha_image_lcolor[mt_rand(0, 1)], mt_rand(1, 3).'.ttf', $captcha_word[$i]);
	}
	
	//@imagettftext($captcha_image, 8, 0, 1, $hg+15, $white, '1.ttf','ohmangga captcha art');
		
	// Noise over the word
	imagesetstyle($captcha_image, array($captcha_image_dcolor[mt_rand(0, 2)], $captcha_image_dcolor[mt_rand(0, 2)], $captcha_image_dcolor[mt_rand(0, 2)], $captcha_image_dcolor[mt_rand(0, 2)], $captcha_image_dcolor[mt_rand(0, 2)], $captcha_image_dcolor[mt_rand(0, 2)], $captcha_image_dcolor[mt_rand(0, 2)]));
	for ($i = 0; $i <= 2; $i++) {
		imageline($captcha_image, 0, mt_rand(0, $hg-1), 180, mt_rand(0, $hg-1), IMG_COLOR_STYLED);
	}
	$captcha_image_lineys = array(mt_rand(0, $hg-1), mt_rand(0, $hg-1), mt_rand(0, $hg-1), mt_rand(0, $hg-1), mt_rand(0, $hg-1), mt_rand(0, $hg-1), mt_rand(0, $hg-1), mt_rand(0, $hg-1), mt_rand(0, $hg-1), mt_rand(0, $hg-1));
	$captcha_image_lineye = array(mt_rand(0, $hg-1), mt_rand(0, $hg-1), mt_rand(0, $hg-1), mt_rand(0, $hg-1), mt_rand(0, $hg-1), mt_rand(0, $hg-1), mt_rand(0, $hg-1), mt_rand(0, $hg-1), mt_rand(0, $hg-1), mt_rand(0, $hg-1));
	for ($i = 0; $i <= 4; $i++) {
		//imageline($captcha_image, $i*10+mt_rand(1, 6), $captcha_image_lineys[$i], $i*30+mt_rand(1, 6), $captcha_image_lineye[$i], $captcha_image_lcolor[mt_rand(0, 1)]);
		//imageline($captcha_image, $i*10+mt_rand(1, 6), $captcha_image_lineys[$i], $i*30+mt_rand(1, 6), $captcha_image_lineye[$i], $captcha_image_lcolor[mt_rand(0, 1)]);
	}
	
	session_start();
	$_SESSION['captchakey'] = md5($captcha_word);
	
	// Output the image to browser
	header('Content-type: image/png');
	header('Expires: Sun, 1 Jan 2000 12:00:00 GMT');
	header('Last-Modified: '.gmdate("D, d M Y H:i:s").'GMT');
	header('Cache-Control: no-store, no-cache, must-revalidate');
	header('Cache-Control: post-check=0, pre-check=0', false);
	header('Pragma: no-cache');
	imagepng($captcha_image);
	imagedestroy($captcha_image);
}

?>