<?php
include 'connect.php';
$content=$_POST['content'];
$leibie=$_POST['leibie'];
$exec="select Gname,Gtel,Gsex,Gyear,Gxueli,Gemail,Gzhuanye from geren where $leibie ='$content'";
$result = mysql_query($exec);
if($result){
    echo " <script>alert('查找成功！'); </script>";
}
    else echo "<script>alert('出现故障！'); </script>";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>人才搜索</title>
</head>
<style>
    .search {
        height: 50px;
        background-color: rgb(238, 135, 135);
        margin-top: 30px;
    }
    
    .show {
        background-color: rgb(224, 219, 219);
        padding-bottom: 20px;
    }
    table,div{
        text-align:center;
        margin:auto;
    }

    .returnbtn{
        float:right;
    }
</style>

<body>
    <div class="search">
        <form action="rencaisousuo_c.php" method="post" id="search">
        <select name="leibie" form="search">
                <option value="Gzhuanye">专业</option>
                <option value="Gxueli">学历</option>
                <option value="Gname">姓名</option>
                <option value="Gsex">性别</option>
                <option value="Gyear">年龄</option>
             </select>
            <input type="text" name="content" />
            <input type="submit" value="search" />
        </form>
        <input type=button class="returnbtn" onclick="window.location.href = 'qiye.php'" value="返回" > 
    </div>
    <div class="show">
    <table border="1">


    <?php
        $tabname=array("姓名","联系电话","性别","年龄","学历","email","专业");
        $arrlength=count($tabname);
        echo '<tr>';
        for ($i=0; $i < $arrlength; $i++) { 
            echo '<td>'.$tabname[$i].'</td>';
        }
        echo '</tr>';

        while ($row = mysql_fetch_array($result)) {
            echo '<tr>';
            for ($i=0; $i < count($row)/2; $i++) { 
                echo '<td>'.$row[$i].'</td>';
            }
            echo '</tr>';
        }
    ?>
</table>
    </div>
</body>

</html>