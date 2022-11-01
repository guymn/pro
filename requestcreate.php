<?php
session_start();
require_once "config.php";
$count = 1;

    $userQuery = "SELECT * FROM `requestcreate`";
    $result = mysqli_query($connect, $userQuery);
    if (!$result)
    {
        die ("Could not successfully run the query $userQuery".mysqli_error($connect));
    }
    else
    {
?>   
        <head>
            <style>
                table {
                    margin-left:20%;
                    margin-right:20%;
                }
                table, th, td {
                    border:1px solid black;
                }
                table {
                    width: 60%;
                    text-align: center;
                }
                .all {
                    text-align: right;
                    margin-right: 20%;
                }
                
            </style>
        </head>
        <body>
            <table>
            <?php
            echo "<tr><th>#</th><th>หมายเลขบัตรประชาชน</th><th>เบอร์โทรศัพท์</th></tr>";
            while ($row = mysqli_fetch_assoc($result))
            {
                echo "<tr><td>".$count."</td><td>".$row['cardNumberR']."</td><td>".$row['telR']."</td>";
                //for update and delete
                echo "<td><a href=\"insert.php?id=".$row['ID']."&cardNumberR=".$row['cardNumberR']."&telR=".$row['telR']."&passR=".$row['passR']."\">";
                echo "ยืนยัน</a> ";
                echo " <a href=\"delete_data.php?id=" .$row['ID'] . "\">";
                echo "ลบ</a></td></tr>";
                $count++;
            }
            
            ?>
            </table>
        </body>
<?php
                $count = 0;
    }
    mysqli_close($connect);



?>
 