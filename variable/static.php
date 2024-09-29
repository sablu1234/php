<?php 
function mynumber(){
    static $qty=4;
    echo $qty.'<br>';
    $qty+=2;
}

mynumber();
mynumber();
mynumber();

?>