<?php 
$person_info=array(
    "name"=>"hadijama",
    "address"=>array(
        "house_no"=>'10',
        'road_no'=>'2',
        'area'=>array(
            'word'=>'one',
        )
    ),
);

// var_dump($person_info);

echo $person_info['address']['area']['word'];
?>