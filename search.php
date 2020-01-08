<?php
include 'connect.php';
$content=$_POST['content'];
$leibie=$_POST['leibie'];
$exec="select a.Qname,a.Qtel,a.Qemail,a.Qlocate,b.Zname,b.Znumber,b.Zmoney from  qiye as a left join zhiwei as b on a.Qname=b.Zqiye where $leibie ='$content'";
$result = mysql_query($exec);
if($result){
    echo " <script>alert('查找成功！'); </script>";
}
    else echo "<script>alert('查找失败！'); </script>";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>职位搜索</title>
</head>
<center>
<style>
    .search {
        height: 100px;
        background-color: rgb(238, 135, 135);
        margin-top: 100px;
    }
    
    .show {
        background-color: rgb(224, 219, 219);
        padding-bottom: 20px;
    }
</style>
</center>

<body>
<center>
    <div class="search">
        <form action="search.php" method="post" id="search">
        <select name="leibie" form="search">
               <option value="Qname" style= "width:1000px;height:100px">企业名称</option>
				<option value="Qlocate" style= "width:1000px;height:100px">企业地址</option>
			    <option value="Zemail" style= "width:1000px;height:100px">职位名称</option>
                <option value="Znumber" style= "width:1000px;height:100px">要求人数</option>
				<option value="Zmoney" style= "width:1000px;height:100px">工资</option>

             </select>
            <input type="text" name="content" />
            <input type="submit" value="search" />
        </form>
        <input type=button class="returnbtn" onclick="window.location.href = 'geren.php'" value="返回" > 
    </div>
    <div class="show">
    <table border="1">
</center>


    <?php
        $tabname=array("企业名称","联系电话","企业邮箱","企业地址","职位名称","要求人数","工资");
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