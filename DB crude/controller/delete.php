<?php
	require_once('../model/userModel.php');
	$name = $_POST['name'];		
				$status = deleteproduct($name);
				if($status){
					header('location: ../view/Display.php');
				}else{
					echo "Db error";
				}
?>