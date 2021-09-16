<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
    <div id="page_title">
		<h1>Edit Product </h1>		
	</div>
	<div id="main_content">
		<form method="post" action="../controller/edit.php">
			<fieldset>
				<legend>Edit Product</legend>
				<table>
					<tr>
						<td>Name</td>
						<td><input type="text" name="Name" ></td>
					</tr>
					
					<tr>
						<td>Buying_Price</td>
						<td><input type="text" name="Buying_Price" ></td>
					</tr>
					<tr>
						<td>Selling_Price</td>
						<td><input type="text" name="Selling_Price" ></td>
					</tr>
                    <tr>
                        <td>
                            <br><hr>
        <input type="checkbox" name="display" id="display">Display
        <br><hr>
                        </td>
                    </tr>
					<tr>
                        <td>
							<input type="submit" name="submit" value="Save">
						</td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>

</body>
</html>
	