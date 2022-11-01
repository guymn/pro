<?php
session_start(); 
require_once "config.php";

$position_id = $_GET['id']; //get $id from an update link
$cardNumber = $_GET['cardNumberR'];
$tel = $_GET['telR'];
$pass = $_GET['passR'];

$userQuery = "INSERT INTO `user` (`pass`, `cardNumber`, `tel`) VALUES ('$pass','$cardNumber','$tel')";
$result = mysqli_query($connect, $userQuery);

$userQuery = "DELETE FROM `requestcreate` WHERE ID ='$position_id'";
$result = mysqli_query($connect, $userQuery);

if (!$result)
{
    die ("Could not successfully run the query $userQuery".mysqli_error($connect));
}
else
{
    header("Location: requestcreate.php"); 
}
?>