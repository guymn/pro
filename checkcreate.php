<?php
session_start();
require_once "config.php";

$cardNumber = $_POST['cardNumber'];
$tel = $_POST['tel'];
$pass = $_POST['pass'];
$passC = $_POST['passC'];


$index = array($_POST['cardNumber'], $_POST['tel'], $_POST['pass'], $_POST['passC']); //create arry to get all value

foreach($index as $value) //loop arry
{
    $checkBlank = str_split($value); //นำ arry แต่ละ index มาแตกเป็น arry
    foreach($checkBlank as $value) //loop arry ที่แตกมา
    {
        if($value == " ") //ถ้ามีช่องว่างเด็งกลับหน้าสร้าง
        {
            $_SESSION['warning'] = '!!!กรุณากรอกข้อมูลใหม่ห้ามใส่เว้นวรรค!!!';
            header("Location: create.php");
        }
    }
}

if ($pass != $passC)
{
    $_SESSION['warning'] = '!!!รหัสไม่ตรงกับรหัสผ่านที่ยืนยันกรุณาลองอีกครั้ง!!!';
    header("Location: create.php");
}
else if($cardNumber !="" and $tel !="" and $pass !="" and $passC !="" )
{
    $userQuery = "INSERT INTO `requestcreate` (`passR`, `cardNumberR`, `telR`) VALUES ('$pass','$cardNumber','$tel')";
    $result = mysqli_query($connect, $userQuery);
    if(!$result)
    {
        die ("Could not successfully run the query $userQuery".mysqli_error($connect));
    } 
    else 
    {
        ?>
        <!DOCTYPE html>
        <html lang="th">
        <head>
        <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>-->
        <link rel="stylesheet" href="pro.css"> <!--link to css-->
        <style>
            p {
                margin-bottom: 15px;
            }
            button {
                color: #fff;
                background-color: #000fff;
                border-width:0px ;
                border-radius: 50px;
                width: 30%;
                height: 96px;
                font-size: 36px;
                text-align: center;
            }
            button:hover {
                background-color:#005fff;
            }
            button:active {
                background-color:#005eff60;
            }
        </style>
        </head>
        <body>
        <div class="body">
            <h1>คุณได้ทำการยื่นคำขอสร้างบัญชีเสร็จสิ้น<br>โปรดรอรับ SMS เพื่อยืนยันการอนุมัติสร้างบัญชี</h1>
            <a href="login.php">
                <button>ยืนยัน</button>
            </a>
            <p class="create"> </p>
        </form>
        </div>
        </body>
        </html>
        <?php
    }
}
else
{
    $_SESSION['warning'] = '!!!กรุณากรอกข้อมูลให้ครบทุกชอง!!!';
    header("Location: create.php");
}

?>
