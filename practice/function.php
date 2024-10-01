<?php 
$roll=$_POST['roll'];
// echo $roll;
if($roll>=1 && $roll<=10){
    header('location: home.php?msg=YOu can be our Team member');
}
else{
    header('location: home.php?msg=you can not be our team member');
}


?>