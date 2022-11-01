<?php
session_start();
require_once "config.php";
$pass = $_POST['nPass'];
$passC = $_POST['nPassC'];

$checkBlank = str_split($_POST['nPass']); //นำรหัสที่ใส่มาแตกเป็น arry
foreach($checkBlank as $value) //loop arry ที่แตกมา
{
    if($value == " ") //ถ้ามีช่องว่างเด็งกลับหน้าสร้าง
    {
        $_SESSION['warning'] = '!!!กรุณากรอกข้อมูลใหม่ห้ามใส่เว้นวรรค!!!';
        header("Location: create.php");
    }
}


if($pass == $passC)
{
    $userQuery = "UPDATE `user` SET pass = '$pass' WHERE user_id = '$_SESSION[user_id]' ";
    $result = mysqli_query($connect, $userQuery);

    if(!$result)
    {
        die ("Could not successfully run the query $userQuery".mysqli_error($connect));
    } 
    else if($result)
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
            <h1>การเปลี่ยนรหัสผ่านเสร็จสิ้น</h1>
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
    $_SESSION['warning'] = '!!!รหัสไม่ตรงกับรหัสผ่านที่ยืนยันกรุณาลองอีกครั้ง!!!';
    header("Location: change.php");
}

?>