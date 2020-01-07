<?php
	header("Content-type: text/html; charset=utf-8");
	$con = mysql_connect('localhost','root','root') or die('can not connect server!'); 
	mysql_select_db('rencai');
    mysql_query("set names 'utf8'");
    echo '已连接';

    
$qtel = $_POST['qtel']; 
$qemail = $_POST['qemail']; 
$qlocate = $_POST['qlocal'];  

session_start();
$user=$_SESSION['user'];

$exec="update qiye set Qtel = '$qtel',Qemail='$qemail',Qlocate='$qlocate' where Qname='$user'";
echo $exec;
$result=mysql_query($exec);
if($result) 
    echo " <script>alert('修改成功！');location.href='qiye.php'; </script>";
else echo "<script>alert('出现故障！');location.href='qiye.php'; </script>";

?>

