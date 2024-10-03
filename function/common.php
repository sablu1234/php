<?php 

function price_calculate($price=0,$qty=0){
    $product_price=$price;
    $producti_qty=$qty;
    $total_price=$product_price*$producti_qty;
    return $total_price;

}
echo price_calculate(22,33);

?>