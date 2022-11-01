<?php
session_start(); 
require_once "config.php";
$a1 = $_POST['cardNumber']; 
$a2 = $_POST['tel']; 

$userQuery="SELECT * FROM `user` WHERE cardNumber = '$a1' AND tel = '$a2'";

$query = mysqli_query($connect, $userQuery);
$row = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) > 0)
{

    $_SESSION['cardNumber'] = $a1;
    $_SESSION['tel'] = $a2;
    $_SESSION['user_id'] = $row['user_id'];
    echo $_SESSION['user_id'];

    header("Location: change.php");
}
else
{
    $_SESSION['warning'] = '!!!บัตรประชานชนและเบอร์โทรไม่ตรงกรุณาลองอีกครั้ง!!!';
    header("Location: forget.php");
}
mysqli_close($connect);
?>