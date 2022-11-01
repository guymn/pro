<?php
session_start();
require_once "config.php";
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
    </style>
</head>
<body>
    <div class="body">
    <h1>เข้าสู่ระบบ</h1>
    <form action="checkcreate.php" method="post">
        <div class="row">
            <div  class="colL">
                <h2>เลขบัตรประชาชน</h2>
            </div>
            <div class="colR">
                <input type="text" name="cardNumber" value=""/>
            </div>
        </div>
        <div class="row">
            <div  class="colL">
                <h2>เบอร์โทรศัพท์</h2>
            </div>
            <div class="colR">
                <input type="text" name="tel" value=""/>
            </div>
        </div>
        <div class="row">
            <div class="colL">
                <h2>รหัสผ่าน</h2>
            </div>
            <div class="colR">
                <input type="text" name="pass" value=""/>
            </div>
        </div>
        <div class="row">
            <div class="colL">
                <h2>ยืนยันรหัสผ่าน</h2>
            </div>
            <div class="colR">
                <input type="text" name="passC" value=""/>
            </div>
        </div>
        <p class="forget"></p>
        <?php
        if (isset($_SESSION['warning'])) //หากมีค่าในตัวแปร warning คือรหัสไม่ถูก
        {
            echo "<p align='center'><font color='FF0000'><B>".$_SESSION['warning']."</B></font></p>";
            unset($_SESSION['warning']); //ล้างค่าใน warning
            
        }
        ?>
        <input id="bigBotton" type="submit" value="สร้างบัญชี" />
    </form>
    </div>
</body>
</html>
