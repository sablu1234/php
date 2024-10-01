<?php 

$current_date= date('D');
echo $current_date."<br>";

// if($current_date=="mon"){
//     echo "this is sunday. 10% discount";
// }
// elseif($current_date=='Thu'){
//     echo "25% discount";
// }
// elseif($current_date=='Tue'){
//     echo "25% discount";
// }
// else{
//     echo "today 20% discount";
// }



switch($current_date){
    case $current_date=='Sun':
        echo "this sunday 10 dsicount";
        break;
        case $current_date=="Mon":
        echo "50%";
        break;
        default:
        echo "no discount";
}








// $mark=33;
// if($mark>=33){
//     if($mark>= 33 && $mark<=49){
//         echo "good";
//     }
//     elseif($mark>50){
//         echo "better";
//     }
// }
// else{
//     echo "fail";
// }

?>