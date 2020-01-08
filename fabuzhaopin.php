<?php
session_start();
$user=$_SESSION['user'];
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>企业发布招聘信息</title>
        <style>
            body {
                background-color: #cfd3d1;
            }
        </style>
    </head>

    <body>
        <div>
            <form action="qiye_fabu.php" method="post">
                <p>企业名称：
                    <?php echo $user ?> </p>
                <p>职位名称： <input type="text" name="Zname" /></p>
                <p>招聘人数： <input type="text" name="Znumber" /></p>
                <p>薪资(元)： <input type="text" name="Zmoney" /></p>
                <input type="submit" value="发布" />
            </form>
        </div>

    </body>

    </html>