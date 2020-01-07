<?php
session_start();
?>
<?php
$conn=@mysql_connect("localhost","root","root")
or die ("连接失败");
if($conn)
{
    @mysql_select_db("rencai",$conn) 
    or die ("未连接到数据表");
}
mysql_query("set names utf8");
?>
<html>
<head>
<meta charset="UTF-8"> 
<title>人才中介网</title>
<br/><br/><br/><br/><br/><br/>
<h2>登录</h2>
 <style>       body{text-align:center}     </style>
</head>
<body style="background-image:url(1.jpg);background-position:center;background-size:100% 100%;">        
<form action="" method="POST" name="myform" onsubmit="return check()">
账号：
<input type="text" name="username"><br/><br/>
密码：
<input type="password" name="password"><br/><br/>
<input class="login" type="submit" value="企业登录" name="login1">
<input class="login" type="submit" value="个人登录" name="login2">
<input class="login" type="submit" value="管理员登录" name="login3"><br/><br/>
<input class="login" type="submit" value="注册新用户" name="login4">
</form>
<?php
if(isset($_POST['login1'])){
	$user=$_POST['username'];
	$password=$_POST['password'];
	$sql="select Qname,Qpassword from qiye where Qname='$user' and Qpassword='$password'";
	$result=mysql_query($sql);
	$sum=mysql_num_rows($result);
	if($sum){
		echo "<script>alert('登录成功');window.open('qiye.php','_self')</script>";
		$_SESSION['user']=$user;
	}
	else{
		echo "<script>alert('账号或密码错误');window.open('#','_self')</script>";
	}
}
if(isset($_POST['login2'])){
	$user=$_POST['username'];
	$password=$_POST['password'];
	$sql="select Gname,Gpassword from geren where Gname='$user' and Gpassword='$password'";
	$result=mysql_query($sql);
	$sum=mysql_num_rows($result);
	if($sum){
		echo "<script>alert('登录成功');window.open('geren.php','_self')</script>";
		$_SESSION['user']=$user;
	}
	else{
		echo "<script>alert('账号或密码错误');window.open('#','_self')</script>";
	}
}
if(isset($_POST['login3'])){
	$user=$_POST['username'];
	$password=$_POST['password'];
	$sql="select Mname,Mpassword from manager where Mname='$user' and Mpassword='$password'";
	$result=mysql_query($sql);
	$sum=mysql_num_rows($result);
	if($sum){
		echo "<script>alert('登录成功');window.open('manager.php','_self')</script>";
		$_SESSION['user']=$user;
	}
	else{
		echo "<script>alert('账号或密码错误');window.open('#','_self')</script>";
	}
}
if(isset($_POST['login4'])){
		echo "<script>window.open('Goto-signin.php','_self')</script>";
}
?>
</body>
</html>