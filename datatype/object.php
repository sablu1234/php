<?php 
class data{
    public $name;
    public $roll;
    public function __construct($name,$roll){
        $this->name=$name;
        $this->roll=$roll;
    }

    public function message(){
        return $this->name;
    }
}

$my_info=new data('hasan',12);

var_dump($my_info);
?>