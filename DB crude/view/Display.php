<?php
	
	$title = "Display";
	require_once('../model/productModel.php');
	$product = getAllproduct();
?>

	<div id="page_title">
		<h1>Display</h1>		
	</div>
	<div id="main_content">
	
		<table border="1">
			<tr>
				<td>NAME</td>
				<td>PROFIT</td>
			</tr>
			
			<?php for($i=0; $i < count($users); $i++){ ?>
			<tr>
				<td><?=$product[$i]['Name']?></td>
				<td><?=$product[$i]['Buying Price']?></td>
				<td><?=$product[$i]['Selling Price']?></td>
				<td>
					<a href="edit.php?id=<?= $users[$i]['id']?>&username=<?= $users[$i]['username']?>&email=<?= $users[$i]['email']?>&password=<?= $users[$i]['password']?>"> EDIT </a> |
					<a href="deleteConfirmation.php?id=<?= $users[$i]['id']?>"> DELETE </a> 
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>