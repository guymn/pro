<?php
session_start(); 
require_once "config.php";
$a1 = $_POST['uname']; 
$a2 = $_POST['passAd']; 

$sql="SELECT * FROM `admin` WHERE uname = '$a1' AND passAD = '$a2'";

$query = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) > 0)
{

    $_SESSION['uname'] = $a1;
    $_SESSION['passAd'] = $a2;
    header("Location: index.php");
}
else
{
    $_SESSION['warning'] = '!!!User Name หรือ Password ไม่ถูกต้องกรุณาลองอีกครั้ง!!!';
    header("Location: loginAdmin.php");
}
mysqli_close($connect);
?>