<?php
    $Name=$_POST['Name'];
    $Buying_Price=$_POST['Buying_Price'];
    $Selling_Price=$_POST['Selling_Price'];
    require('../model/productModel.php');
editproduct($Name,$Buying_Price,$Selling_Price);
?>