<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<center>
	<h1>Welcome To our Bank! <?=$_SESSION['user']['username']?> </h1>
	<a href="../controller/logout.php">logout</a> <br>
	<a href="viewProfile.php">view Profile</a>
	</center>
	<div class="container">
        <table>
            <tr>
                <td>About us</td>
            </tr>
            <tr>
                <td>
                    <p>G4 is proud to serve our clients in our home country of the United States via G4's Retail Bank, Institutional Clients Group, The G4 Private Bank, G4Mortgage, G4 Cards and other brands. Our global headquarters is located in New York
                        City, and G4's tens-of-thousands of employees proudly serve their local communities and our valued customers every day. For more information, please visit one of the links below or the About G4 section of this website. </p>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Contuc us: </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <p>Address: G4 388 Bashundhara Dhaka, BD 10013 Bangladesh. <br> The G4 Private Bank G4group Center 153 East 53rd Street 16/ F, Zone 19 Dhaka,<br> BD 10022 Bangladesh. <br>
                    </p>
                </td>
            </tr>
            <tr>
                <th>Bank scheme:</th>
            </tr>
            <tr>
                <td>The Institutional Clients Group strives to be the best banking partner for our clients by offering a broad spectrum of wholesale banking products and services, driven by our unique global footprint. Working together, we provide innovative
                    solutions to corporations, financial institutions, public sector entities, investment managers and ultra-high net worth clients.</td>
            </tr>
            <tr>
                <td>
                    <ol>
                        <li><a href="./controller/show.php">BANKING, CAPITAL MARKETS AND ADVISORY</a></li>
                        <li><a href="./controller/show.php">COMMERCIAL BANKING</a> </li>
                        <li><a href="./controller/show.php">MARKETS AND SECURITIES SERVICES</a></li>
                        <li><a href="./controller/show.php">PRIVATE BANK</a></li>
                        <li><a href="./controller/show.php">TREASURY AND TRADE SOLUTIONS</a></li>
                    </ol>
                </td>
            </tr>
            <tr>
                <td>Copyright c 2021 G4group, Inc.</td>
            </tr>
        </table>
</body>
</html>

<?php
	
	}else{
		header('location: login.php');
	}
?>