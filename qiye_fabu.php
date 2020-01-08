<?php
	header("Content-type: text/html; charset=utf-8");
	$con = mysql_connect('localhost','root','root') or die('can not connect server!'); 
	mysql_select_db('rencai');
    mysql_query("set names 'utf8'");

    
$Zname = $_POST['Zname']; 
$Znumber = $_POST['Znumber']; 
$Zmoney = $_POST['Zmoney'];  

session_start();
$user=$_SESSION['user'];

$exec="insert into zhiwei (Zname,Zqiye,Znumber,Zmoney) values"." ('$Zname','$user','$Znumber','$Zmoney')";
$result=mysql_query($exec);
if($result) 
    echo " <script>alert('修改成功！');location.href='qiye.php'; </script>";
else echo "<script>alert('出现故障！'); location.href='qiye.php';</script>";

?>

