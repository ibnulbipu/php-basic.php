<?php
$season = array ('january','123','march');
echo"<br>";
//$season='february';
print_r($season);
printf($season[1]);

echo"<br>";

//Associate array
$salary = array('rahim'=>3000, 'karim'=> 4000);
var_dump($salary);
echo $salary ['karim'];


//2d array
$cars=array(
    array('BMW','Red'),
    array('Honda','Blue')
);
echo "<pre>";
print_r($cars);
echo "</pre>";

