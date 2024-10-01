<?php 
include('common.php');
include('form.php');
$price= $_POST['price'];
$qty= $_POST['qty'];


echo product_price($price,$qty);
?>