<?php
$fisdap=1;
while($fisdap++ && $fisdap<100){
    echo $fisdap;
    echo is_int($fisdap/3) ? 'fis' : '';
    echo is_int($fisdap/5) ? 'dap' : '';
    echo"<br>";
}
