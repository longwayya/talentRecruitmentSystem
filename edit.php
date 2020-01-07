<?php
header("Content-type: text/html; charset=utf-8");
	$con = mysql_connect('localhost','root','root') or die('can not connect server!'); 
	mysql_select_db('rencai');
    mysql_query("set names 'utf8'");
    echo '已连接';    

$Gpassword = $_POST['Gpassword']; 
$Gsex = $_POST['Gsex'];
$Gyear = $_POST['Gyear']; 
$Gtel = $_POST['Gtel']; 
$Gxueli = $_POST['Gxueli']; 
$Gzhuanye = $_POST['Gzhuanye']; 
$Gemail = $_POST['Gemail']; 
session_start();
$Gname=$_SESSION['Gname'];

$exec="update geren set Gpassword = '$Gpassword',Gsex='$Gsex',Gyear='$Gyear',Gtel='$Gtel',Gemail='$Gemail',Gxueli='$Gxueli',Gzhuanye='$Gzhuanye' where Gname='$Gname'";
echo $exec;
$result=mysql_query($exec);
if($result) 
    echo " <script>alert('修改成功！请重新登陆！');location.href='Connect.php'; </script>";
else echo "<script>alert('出现故障！请重新修改！');location.href='update.php'; </script>";

?>

