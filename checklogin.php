<?php
session_start(); 
require_once "config.php";
$a1 = $_POST['cardNumber']; 
$a2 = $_POST['pass']; 

$sql="SELECT * FROM `user` WHERE cardNumber = '$a1' AND pass = '$a2'";

$query = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) > 0)
{

    $_SESSION['cardNumber'] = $a1;
    $_SESSION['pass'] = $a2;

    $_SESSION['fName'] = $row['fName'];
    $_SESSION['lName'] = $row['lName'];

    $_SESSION['houseNumber'] = $row['houseNumber'];
    $_SESSION['villageNumber'] = $row['villageNumber'];
    $_SESSION['locality'] = $row['locality'];
    $_SESSION['prefecture'] = $row['prefecture'];
    $_SESSION['county'] = $row['county'];
    $_SESSION['more'] = $row['more'];

    header("Location: home.php");
}
else
{

    $_SESSION['warning'] = '!!!บัตรประชานชนหรือรหัสไม่ถูกต้องกรุณาลองอีกครั้ง!!!';
    header("Location: login.php");
}
mysqli_close($connect);

?>