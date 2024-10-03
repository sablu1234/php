<?php 
$person_info=array(
    'name'=>'hadijamn',
    'cell'=>'01654654',
    'address'=>'mirpur'
); 
// var_dump($person_info);
echo $person_info['cell'];

foreach($person_info as $single){
    echo $single;
}
?>