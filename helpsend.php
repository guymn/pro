<?php
$address = 0;
if(isset($_POST['name'])){
    $address = $_POST['name'];
}

echo $address;
?>