<html>
<head> 
 <meta charset="UTF-8">
 <title>个人注册</title>
 <style>       body{text-align:center}     </style>
</head>
<body style="background-image:url(2.jpg);background-position:center;">
<form action="" method="POST" name="myform" onsubmit="return check()">
姓  名：
<input type="text" name="Gname"><br/><br/>
性  别：
<input type="text" name="Gsex"><br/><br/>
年  龄：
<input type="text" name="Gyear"><br/><br/>
专  业：
<input type="text" name="Gzhuanye"><br/><br/>
学  历：
<input type="text" name="Gxueli"><br/><br/>
邮  箱：
<input type="text" name="Gemail"><br/><br/>
手机号：
<input type="text" name="Gtel"><br/><br/>
密  码：
<input type="text" name="Gpassword"><br/><br/>

<input class="login" type="submit" value="注册" name="login1">

<input class="login" type="submit" value="返回" name="login2">
</form>
<?php
if(isset($_POST['login1'])){
mysql_connect('localhost', 'root', 'root');
mysql_select_db('rencai');
mysql_query("set names 'utf8'");
$Gname = $_POST['Gname'];
$Gsex = $_POST['Gsex'];
$Gyear = $_POST['Gyear'];
$Gzhuanye = $_POST['Gzhuanye'];
$Gxueli = $_POST['Gxueli'];
$Gemail= $_POST['Gemail'];
$Gtel = $_POST['Gtel'];
$Gpassword = $_POST['Gpassword'];
$sql = "insert into geren(Gname, Gsex, Gyear, Gzhuanye, Gxueli, Gemail,Gtel,Gpassword) values('$Gname', '$Gsex', '$Gyear', '$Gzhuanye', '$Gxueli', '$Gemail','$Gtel','$Gpassword')";

$result=mysql_query($sql);

if($result){
		echo "<script>alert('个人注册成功');</script>";
	}
	else{
		echo "<script>alert('个人注册失败');</script>";
	}
}
if(isset($_POST['login2'])){
		echo "<script>window.open('Goto-signin.php','_self')</script>";
}

?>
</body>
</html>