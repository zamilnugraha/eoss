<?php
	function getProblemStatusColor($id) {
		switch($id) {
			case 1: $color = '#FF0000';break; //open
			case 2: $color = '#0D8800';break; //solved
			case 3: $color = '#0013A6';break; //cancelled
			case 4: $color = '#A63F00';break; //pending
		}
		
		return $color;
	}
	
	
?>