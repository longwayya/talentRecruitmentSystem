<html>
<head> 
 <meta charset="UTF-8">
 <title>企业注册</title>
 <style>       body{text-align:center}     </style>
</head>
<body style="background-image:url(2.jpg);background-position:center;">
<form action="" method="POST" name="myform" onsubmit="return check()">
名  称：
<input type="text" name="Qname"><br/><br/>
电  话：
<input type="text" name="Qtel"><br/><br/>
邮  箱：
<input type="text" name="Qemail"><br/><br/>
地  址：
<input type="text" name="Qlocate"><br/><br/>
密  码：
<input type="text" name="Qpassword"><br/><br/>

<input class="login" type="submit" value="注册" name="login1">

<input class="login" type="submit" value="返回" name="login2">
</form>
<?php
if(isset($_POST['login1'])){
mysql_connect('localhost', 'root', 'root');
mysql_select_db('rencai');
mysql_query("set names 'utf8'");
$Qname = $_POST['Qname'];
$Qtel = $_POST['Qtel'];
$Qemail= $_POST['Qemail'];
$Qlocate = $_POST['Qlocate'];
$Qpassword = $_POST['Qpassword'];
$sql = "insert into qiye(Qname,Qtel,Qemail,Qlocate,Qpassword) values('$Qname', '$Qtel', '$Qemail', '$Qlocate', '$Qpassword')";
$result=mysql_query($sql);
if($result){
		echo "<script>alert('企业注册成功');window.open('index.php','_self')</script>";
	}
	else{
		echo "<script>alert('企业注册失败');</script>";
	}
}
if(isset($_POST['login2'])){
		echo "<script>window.open('Goto-signin.php','_self')</script>";
}
?>
</body>
</html>