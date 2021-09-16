
<!DOCTYPE html>
<html>
<head>
	<title>Product</title>
</head>
<body>
	<center>
		<form method="POST" action="">
			DISPLAY
			<input id ="name" type="text" name="search" onclick="search()">
		</form>
	</center>
</body>
</html>
<?php 
   $conn = mysqli_connect('localhost', 'root', '', 'mydb');
	$sql = 'select * from products';
	$result = mysqli_query($conn, $sql);
		echo 'invalid data';
		$name=$_POST['search'];
		$conn = mysqli_connect('localhost', 'root', '', 'mydb');
	$sql = "select * from products where name like '$name%'";             
	$result = mysqli_query($conn, $sql);
	echo "<table border=1> 
			<tr>
				<td>NAME</td>
			</tr>";
?>
