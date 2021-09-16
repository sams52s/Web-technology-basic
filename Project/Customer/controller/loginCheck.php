<?php
	session_start();

	if(isset($_POST['submit'])){

		$username= $_POST['username'];
		$password= $_POST['password'];
		$log=$data="";

		if($username != '' && $password != ''){
			if($_SESSION['user']['username'] == $username && $_SESSION['user']['password'] == $password){
				$file= fopen('reginfo.txt','r');
				/*$data= fread($file, filesize('reginfo.txt'));
				$user = explode('|',$data);*/
				while(feof($file)!=true){
					$data = fgets($file);
					$log= explode('|',$data);
				}
				$_SESSION['flag'] = 'true';
					header('location: ../view/home.php');
				
				if(trim($log[0])==$username &&trim($log[1])==$password){
					
					setcookie('flag','true',time()+3000,'/');	

			}
		}
			else{
				echo 'invlaid username/password';
			}

		}else{
			echo "null value found...";
		}
	}else{
		echo "invalid request...";
	}

?>