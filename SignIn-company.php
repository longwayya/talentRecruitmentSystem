<html>
<head> 
 <meta charset="UTF-8">
 <title>企业注册</title>
 <style>       body{text-align:center}     </style>
</head>
<body style="background-image:url(E:\phpstudy2014\store\2.jpg);background-position:center;">
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
<input type="text" name="Qpassward"><br/><br/>
<input class="login" type="submit" value="注册" name="login">
</form>
<?php
if(isset($_POST['login'])){
mysql_connect('localhost', 'root', 'root');
mysql_select_db('Login');
mysql_query("set names 'utf8'");
$Qname = $_POST['Qname'];
$Qtel = $_POST['Qtel'];
$Qemail= $_POST['Qemail'];
$Qlocate = $_POST['Qlocate'];
$Qpassward = $_POST['Qpassward'];
$sql = "insert into qiye(Qname,Qtel,Qemail,Qlocate,Qpassward) values('$Qname', '$Qtel', '$Qemail', '$Qlocate', '$Qpassward')";
$result=mysql_query($sql);
if($result){
		echo "<script>alert('企业注册成功');</script>";
	}
	else{
		echo "<script>alert('企业注册失败');</script>";
	}
}
?>
</body>
</html>