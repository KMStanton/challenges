<?php
if (isset($_GET['input_string']) && $_GET['input_string']!=''){
    $string=$_GET['input_string'];

    echo "for the string ".$string." there are the following characters:<p>";

    $string = strtolower($string);
    $alpha=range('a', 'z');//character checked for

    //character count run through
    foreach ($alpha as &$value) {
echo        "<div style='float: left'>$value: ".substr_count($string, $value)."&nbsp</div>";
    }


} else{
    echo "No string sent";
}
