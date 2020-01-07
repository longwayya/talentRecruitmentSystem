<?php
session_start();
$Gname=$_SESSION['Gname'];
?>
<!DOCTYPE html>  
<html>  
<head>  
    <meta charset="UTF-8">  
    <title>人才中介网</title>  
</head>  
<body>  
<center>

<h3>修改用户信息</h3>

<form action="edit.php" method="post">  

<table>
    <tr>
    <td>用户名：</td>
	<td><?php echo $Gname ?> </td> 
	</tr>
	<tr>
    <td>密码：</td>
	<td><input type="text" Gpassword="Gpassword" > </td> 
	</tr>
	<tr>
    <td>年龄：</td>
	<td><input type="text" Gyear="Gyear" > </td> 
	</tr>
	<tr>
    <td>性别：</td>
	<td><input type="text" Gsex="Gsex" > </td> 
	</tr>
	<tr>
    <td>手机号：</td>
	<td><input type="text" Gtel="Gtel" > </td> 
	</tr>
	<tr>
    <td>学历：</td>
	<td><input type="text" Gxueli="Gxueli" > </td> 
	</tr>
	<tr>
    <td>专业：</td>
	<td><input type="text" Gzhuanye="Gzhuanye" > </td> 
	</tr>
	<tr>
    <td>邮箱：</td>
	<td><input type="text" Gemail="Gemail" > </td> 
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
