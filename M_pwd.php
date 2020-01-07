<?php
session_start();
?>
<html>
<body style="background-image:url(D:\数据库\Connect.jpg);background-position:center;">
 <meta charset="UTF-8">
 <title>修改密码</title>
 <style>       body{text-align:center}     </style>
 <form action="" method="POST" name="myform" onsubmit="return check()">
输入新密码：
<input type="password" name="password1"><br/><br/>
确认密码：
<input type="password" name="password2"><br/><br/>
<input class="login" type="submit" value="修改" name="modify">
<input value="重置" type="reset"><br/><br/>
<a href="Manager.php"> 返回</a>
</form>
<?php
if(isset($_POST['modify'])){
    if($_POST['password1']==$_POST['password2']){
        mysql_connect('localhost', 'root', 'root');
        mysql_select_db('Login');
        mysql_query("set names 'utf8'");  
        $mno=$_SESSION['user'];
        $mpwd=$_POST['password1'];	
        $sql = "update Manager set Mpwd = '$mpwd' where Mno='$mno'";
        $result = mysql_query($sql);
        if(mysql_affected_rows()>0){
		    echo "<script>alert('修改成功');alert('请重新登录');window.open('../Connect.php','_self')</script>";
	    }
	    else{
		    echo "<script>alert('修改失败');</script>";
	    }
    }
	else{
		    echo "<script>alert('修改失败');</script>";
	    }
	
}
?>
</body>
</html>