

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>人才搜索</title>
</head>
<style>
    .search {
        height: 50px;
        background-color: rgb(238, 135, 135);
        margin-top: 30px;
    }
    
    .show {
        background-color: rgb(224, 219, 219);
        padding-bottom: 20px;
    }
</style>

<body>
    <div class="search">
        <form action="rencaisousuo_c.php" method="post" id="search">
            <select name="leibie" form="search">
                <option value="Gzhuanye">专业</option>
                <option value="Gxueli">学历</option>
                <option value="Gname">姓名</option>
                <option value="Gsex">性别</option>
                <option value="Gyear">出生年份</option>
             </select>
            <input type="text" name="content" />
            <input type="submit" value="search" />
        </form>
    </div>
    <div class="show"></div>
</body>

</html>