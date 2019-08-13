		}elseif(($_POST['username'] != $dtuser->user_nik && $pass != $dtuser->user_password && $_POST['department_code'] != $dtuser->userstoregroup_id)){	
			#$error = "username = $usernamecrop & password = $password tidak sesuai";		
			#$error = "username & password tidak sesuai";	
		$error = 	"<br>Uname A1 = ".$username."=".$_POST['username'].
					"<br>Password = ".$password."=".$_POST['password'].
					"<br>Department Code = ".$deptcode."=".$_POST['department_code'];			
		}elseif($_POST['username'] != $dtuser->user_nik){
			#$error = "username tidak sesuai";
		/*
		$error = 	"<br>Uname A2 = ".$username."!= ".$dtuser->user_nik.")"."!= ".$usernamecrop.")".
					"<br>Uname  = ".$username."=".$_POST['username'].
					"<br>Password = ".$password."=".$_POST['password'].
					"<br>Department Code = ".$deptcode."=".$_POST['department_code'];				
		*/
		$error = "SELECT user_nik,user_password,userstoregroup_id FROM ITH_USER 
		                          WHERE (user_nik = '".$_POST['username']."' OR user_password = '$pass') 
								  AND userstoregroup_id = '".$_POST['department_code']."'";
		}elseif(($pass != $dtuser->user_password)){
			#$error = "password tidak sesuai";		
		$error = 	"<br>Uname A3 = ".$username."=".$_POST['username'].
					"<br>Password = ".$password."=".$_POST['password'].
					"<br>Department Code = ".$deptcode."=".$_POST['department_code'];				
		}