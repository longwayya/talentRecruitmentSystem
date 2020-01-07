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
    <title>企业信息修改</title>
    <style>
        body {
            background-color: #cfd3d1;
        }
    </style>
</head>

<body>
    <div>
        <form action="qiye_submit.php" method="post">
            <p>企业名称： <?php echo $user ?>   </p>
            <p>联系方式： <input type="text" name="qtel" /></p>
            <p>电子邮箱： <input type="text" name="qemail" /></p>
            <p>企业地址： <input type="text" name="qlocal" /></p>
            <input type="submit" value="Submit" />
        </form>
    </div>

</body>

</html>