<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="scripts.js"></script>
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

echo"<form method='get' action='car_test.php'>
    Acceleration:<input name='acceleration' id='acceleration' type='number' step='.01' value='$acceleration' onchange='update_chart()'>
    Maximum Speed:<input name='max_speed' id='max_speed' type='number' step='1' value='$max_speed' onchange='update_chart()'>
    <input type='submit'>
</form>";

echo"
<div id='car_dump'>";
require_once"car_test_output.php";
echo"
</div>
";
