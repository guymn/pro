<?php
session_start(); 
require_once "config.php";    echo $_SESSION['user_id'];

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
        <form class="right" action="login.php">
            <input id="smallBotton none" type="submit" value="">
        </form>
        <h1>เปลี่ยนรหัสผ่าน</h1>
        <form action="checkchange.php" method="post">
        <div class="row">
                <div class="colL">
                    <h2>รหัสผ่าน</h2>
                </div>
                <div class="colR">
                    <input type="text" name="nPass" value=""/>
                </div>
            </div>
            <div class="row">
                <div class="colL">
                    <h2>ยืนยันรหัสผ่าน</h2>
                </div>
                <div class="colR">
                    <input type="text" name="nPassC" value=""/>
                </div>
            </div>
            
            <p class="forget"> </p>
            <?php
            if (isset($_SESSION['warning'])) //หากมีค่าในตัวแปร warning คือรหัสไม่ถูก
            {
                echo "<p align='center'><font color='FF0000'><B>".$_SESSION['warning']."</B></font></p>";
                unset($_SESSION['warning']); //ล้างค่าใน warning
                
            }
            ?>
            <input id="bigBotton" type="submit" value="ยืนยัน" />
            <p class="create"> </p>
    
        </form>
        </div>
    </body>
    </html>
    
<?php   

mysqli_close($connect);
?>