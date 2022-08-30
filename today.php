<?php
date_default_timezone_set('Asia/Dhaka');
$today= date("D");
echo $today;
echo "<br>";
switch ($today){
    case "Sat":
    echo "Today is Saterday";
    break;
    case "Sun":
    echo "Todayis Sunday";
    break;
    case "Mon":
    echo "Today is Monday";
    break;
    case "Tue": 
    echo "Today is Tuesday";
    break;
    case "Thr":
    echo "$Today is Thrusday";
    break;
    case "Fri":
    echo "Today is Friday";
    break;
    default:
    echo "Today is not Friday";
}


