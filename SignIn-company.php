<html>
<head> 
 <meta charset="UTF-8">
 <title>企业注册</title>
 <style>       body{text-align:center}  
img{border:0px;vertical-align:middle;padding:0;margin:0} 
input, button{font-family:"Arial", "Tahoma", "微软雅黑", "雅黑";border:0;
vertical-align:middle;margin:8px;line-height:18px;font-size:18px} 
.btn{width:140px;height:36px;background:url("1.1.jpg") no-repeat left top;color:#FFF;padding-bottom:4px} 
 </style>
</head>
<body style="background-image:url(2.jpg);background-position:center;">
<form action="" method="POST" name="myform" onsubmit="return check()">
<h1 style="font-size:x-large">填写信息</h1>
名  称：<font color="red">*</font>
<input type="text" name="Qname"><br/><br/>
电  话：
<input type="text" name="Qtel"><br/><br/>
邮  箱：
<input type="text" name="Qemail"><br/><br/>
地  址：
<input type="text" name="Qlocate"><br/><br/>
密  码：<font color="red">*</font>
<input type="text" name="Qpassword">
<h1 style="font-size:small; color:red">带*为必填项</h1>

<input class="btn" type="submit" value="注册" name="login1">

<input class="btn" type="submit" value="返回" name="login2">
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
if($result&&('Qname'==NULL||'Qpassword'==NULL)){
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