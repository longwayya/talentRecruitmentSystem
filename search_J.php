

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>职位搜索</title>
</head>
<center>
<style>
    .search {
        height: 100px;
        background-color: rgb(238, 135, 135);
        margin-top: 100px;
    }
    
    .show {
        background-color: rgb(224, 219, 219);
        padding-bottom: 20px;
    }
</style>
</center>


<body>

<center>
<tr>
    <div class="search">
        <form action="search.php" method="post" id="search">
            <select name="leibie" form="search">
                <option value="Qname" style= "width:1000px;height:100px">企业名称</option>
				<option value="Qlocate" style= "width:1000px;height:100px">企业地址</option>
			    <option value="Zemail" style= "width:1000px;height:100px">职位名称</option>
                <option value="Znumber" style= "width:1000px;height:100px">要求人数</option>
				<option value="Zmoney" style= "width:1000px;height:100px">工资</option>

				
             </select>
            <input type="text" name="content" />
            <input type="submit" value="搜索" />
        </form>
    </div>
    <div class="show"></div>
	
</tr>
</center>
</body>

</html>