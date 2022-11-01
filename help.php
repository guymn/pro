<head>
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>-->
    <link rel="stylesheet" href="pro.css"> <!--link to css-->
    <style>
        input[type=text] {
            margin: 0px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <form method="POST" action="helpsend.php">
        <label>ที่อยู่ตอนนี้<br></label>
        
        <input type="checkbox" name="<?php $address ?>" value="10">
        <label>ที่อยู่ตามโปรไฟล์<br></label><br>
        <?php
        if(isset($address))
        {
            ?>
            <input type="text" name="address" value=""><br>
            <?php
        }
        ?>
        
        
        <input type="submit" value="เข้าสู่ระบบ" />

    </form>
    

</body>
<?php
date_default_timezone_set('asia/bangkok');
echo date("Y-m-d H:i:s");
?>