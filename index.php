<?php 
include('common.php');
include('form.php');
$price= $_POST['price'];
$qty= $_POST['qty'];
// echo $price;
// echo $qty;

echo product_price($price,$qty);
?>