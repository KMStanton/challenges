<?php
if (isset ($_GET['acceleration']) && filter_var($_GET['acceleration'], FILTER_SANITIZE_NUMBER_FLOAT) && $_GET['acceleration']>.01){
    $acceleration=$_GET['acceleration'];
} else{
    $acceleration=1;
}
if (isset ($_GET['max_speed']) && filter_var($_GET['max_speed'], FILTER_SANITIZE_NUMBER_FLOAT) && $_GET['max_speed']>.01){
    $max_speed=$_GET['max_speed'];
} else{
    $max_speed=200;
}

echo "For a Chevy Camaro accelerating to $max_speed at the rate of $acceleration at a constant ratr the blow if the acceleration chart:

<table>
<tr>
    <td>Time</td>
    <td>Speed</td>
</tr>
";
echo $max_speed;
$current_speed=0;
$time=0;
while ($current_speed<$max_speed){
    $time++;
    $current_speed=$time*$acceleration;
    if ($current_speed<$max_speed) {
        echo "
        <tr>
            <td>$time</td>
            <td>$current_speed</td>
        </tr>
    ";
    } else {
        echo "
        <tr>
            <td>$time</td>
            <td>$max_speed</td>
        </tr>
    ";
    }
}
