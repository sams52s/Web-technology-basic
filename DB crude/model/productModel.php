<?php
	
	require_once('dbcon.php');
    
	function addProduct($Name,$Buying_Price,$Selling_Price){
		$conn = getConnection();
		$sql = "INSERT INTO product (Name, Buying Price, Selling Price)VALUES ($Name, $Buying_Price, $Selling_Price)";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getproduct($Name){
		$conn = getConnection();
		$sql = "select * from product where Name='{$Name}";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		return $row;
	}

	function getAllproduct(){
		$conn = getConnection();
		$sql = "select * from product";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while ($row = mysqli_fetch_assoc($result)) {
			array_push($users, $row);
		}

		return $users;
	}

	function editproduct($product){
		$conn = getConnection();
		$sql = "update product set product='{$product['Name']}', Buying Price='{$product['Buying Price']}', Selling Price='{$product['Selling Price']}'where name={$product['Name']}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteproduct($name){
		$conn = getConnection();
		$sql = "delete from product where name={$name}";
		
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>