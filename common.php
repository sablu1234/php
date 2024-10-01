<?php 
function product_price( $qty=0,$price=0){

    return "total price is ".$qty*$price;
}

// if(condition==true){
//     //true stratement
// }


$age=$_POST['age'];
if($age>=18){
    echo '';
    header("location: agecheck.php?msg=now go to bisti home");
}
else{

    header("location: agecheck.php?msg=sorry go to home you are baby");
}



?>