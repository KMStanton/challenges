<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="scripts.js"></script>

<?php
if (isset($_GET['input_string']) && $_GET['input_string']!=''){
    $string=$_GET['input_string'];
} else {
    $string='';
}

echo"
    <form method='get'>
        <textarea onkeyup='update_string()' id='input_string' name='input_string' placeholder='Please enter string here to see what characters you entered.'>$string</textarea>
        <br>
        <input type='submit'>
    </form>
    <div id='char_count'>";
        require_once'processor.php';
    echo"</div>";
