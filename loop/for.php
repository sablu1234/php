<?php 


$info=array('hasan','sablu',01364646,'4646');



$count_array_value= count($info);
echo $count_array_value;


$post=$count_array_value;




echo $info['2']."<br>";
echo $info['3']."<br>";

for($init=0;$init<$post;$init++){
    // echo $init."<br>";
    
echo $info[$init]."<br>";
}


?>