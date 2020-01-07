
<!DOCTYPE html>  
<html>  
<head>  
    <meta charset="UTF-8">  
    <title>人才中介网</title>  
</head>  
<body>  
<center>

<h3>修改用户信息</h3>

<form action="edituser_server.php" method="post">  
<input type="hidden" Gname="name" value="<?php echo $stu['name'];?>">
<table>
    <tr>
    <td>用户名：</td>
	<td><input type="text" Gname="name" value="<?php echo $stu['name']?>"> </td> 
	</tr>
	<tr>
    <td>密码：</td>
	<td><input type="text" Gpassword="password" value="<?php echo $stu['password']?>"> </td> 
	</tr>
	<tr>
    <td>年龄：</td>
	<td><input type="text" Gyear="age" value="<?php echo $stu['age']?>"> </td> 
	</tr>
	<tr>
    <td>性别：</td>
	<td><input type="text" Gsex="sex" value="<?php echo $stu['sex']?>"> </td> 
	</tr>
	<tr>
    <td>手机号：</td>
	<td><input type="text" Gtel="tel" value="<?php echo $stu['tel']?>"> </td> 
	</tr>
	<tr>
    <td>学历：</td>
	<td><input type="text" Gxueli="education" value="<?php echo $stu['education']?>"> </td> 
	</tr>
	<tr>
    <td>专业：</td>
	<td><input type="text" Gzhuanye="major" value="<?php echo $stu['major']?>"> </td> 
	</tr>
	<tr>
    <td>邮箱：</td>
	<td><input type="text" Gemail="email" value="<?php echo $stu['email']?>"> </td> 
	</tr>
	<tr>
	<td></td>
    <td><input type="submit" value="提交修改"> </td>
	</tr>
   </table>
   </form>
   </center>
    
 <body style="background-image:url(2.jpg);background-position:center;background_size:100% 100%；">

 ?>
</body>  
</html>
