<?php 
function getfullname($fristname,$lastname){

$fullname=$fristname.$lastname;

return $fullname;

}



function pricecalculate($price=0,$qty=0){

    $total=$price*$qty;
    return $total;
}

?>