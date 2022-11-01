<?php
session_start();
require_once "config.php";
?>

<html lang="th">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <div class="header">
        <div class="header2">
            <div class="logo">
                <img  class="left" src="img/Logo.png">
            </div>
           
            <div class="right">
                <a href="main.html">หน้าหลัก</a>
            </div>

            <div class="right">
                <a href="dsfdsfds.com">ข่าวสาร<br></a>
                
            </div>

            <div class="right">
                <a href="dsfdsfds.com">ติดต่อเจ้าหน้าที่<br></a>
                
            </div>
            <div class="right" style="margin-right: 120px;">
                <a href="dsfdsfds.com">ขอความช่วยเหลือ<br></a>
            </div>
            <div class="right" style="
            margin-right: 5%;
            margin-left: auto;
            padding-left: 0px;
            ">
                <div class="dropdown">
                    <span><i class="glyphicon glyphicon-user"></i> <?php if(isset($_SESSION['fName']) &&  isset($_SESSION['lName'])){echo $_SESSION['fName']."  ".$_SESSION['lName'];} ?></span></a>
                    <div class="dropdown-content">
                        <a href="home.html">ข้อมูลส่วนตัว</p></a>
                        <a href="login.php">ลงชื่อออก</p></a>
                    </div>
                  </div>
            </div>
        </div>
    </div>


    <div class="main-content">
       
    </div>
    <div class="footer">
        <div><img style="margin-top: 32px;" src="logo.png"><br>
            <img src="logo-cmu.png" style="margin-top: 10px;">
        </div>
        <div class="no">
            <p style="margin-left: 40px;margin-top: 26px;"><b>มหาวิทยาลัยเชียงใหม่</b><br>
                239 ถนนห้วยแก้ว ต.สุเทพ อ.เมือง จ.เชียงใหม่ 50200</p>
            <div class="contact">
                <img src="phone.png">
                <p>+66 5394 1000, +66 5394 1300</p>
            </div>
            <div class="contact">
                <img src="fax.png">
                <p>+66 5321 7143</p>
            </div>
            <div class="email">
                <img src="email.png">
                <a href="mail_outline.svg"> ccarc@cmu.ac.th</a>
            </div>
        </div>
        <div class="f">
            <label class="name"><b>ช่องทางสื่อสาร</b></label><br>
            <iframe
                src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcmuofficial&tabs=timeline&width=340&height=331&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                width="340" height="150" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"">
                </iframe>
            </div>
            </div>
</body>
</html>