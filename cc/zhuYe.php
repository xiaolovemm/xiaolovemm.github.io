<?php
include_once("conn.php");
?>

<html>
<head>
<title>主页</title>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
        }
        body {

        }
        .nav {
            width: 1000px;
            height: 60px;
            border: #606266 1px solid;
            border-radius: 10px;
            background-color: rgba(125, 126, 127, 0.03);
            margin: 50px auto 0 auto;
        }
        .nav ul li {
            list-style: none;
            width: 90px;
            height: 60px;
            float: left;
            text-align: center;
            line-height: 60px;
        }
        .left {
            float: left;
        }
        .juzhong {
            line-height: 60px;
            margin-left: 8px;
            color: #788080;
        }
        .nav-yong {
            width: 230px;
            height: 60px;
            line-height: 60px;
            margin-left: 250px;
        }
        .nav-yong a button {
            width: 70px;
            height: 30px;
            border: none;
            margin-left: 40px;
            color: white;
            text-align: center;
            background-image: linear-gradient(to right, #c979d4,#fa719d);
            border-radius: 5px;
        }
        table.gridtable {
            font-family: verdana,arial,sans-serif;
            font-size:11px;
            color:#333333;
            border-width: 1px;
            border-color: #666666;
            border-collapse: collapse;
        }
        table.gridtable th {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: #666666;
            background-color: #dedede;
        }
        table.gridtable td {
            border-width: 1px;
            width: 100px;
            padding: 8px;
            text-align: center;
            border-style: solid;
            border-color: #666666;
            background-color: #ffffff;
        }
        a{
            text-decoration: none;
            color: #606266;
        }
        a:hover {
            color: red;
        }
    </style>
</head>
<body>
<nav class="nav">
    <h2 class="left juzhong">个人管理系统</h2>
    <ul>
        <li><a href=""><span>用户信息</span></a></li>
        <li><a href="xiugai.php"><span>修改用户</span></a></li>
        <li><a href="cha.php"><span>查询用户</span></a></li>
        <li><a href="zeng.php"><span>添加用户</span></a></li>
    </ul>
    <div class="nav-yong left">
        <span>用户名：何文杰</span>
        <a href="index.php"><button type="button">退出</button></a>
    </div>
</nav>

<table class="gridtable" style="margin-left: 390px;margin-top: 60px;">
    <caption style="font-size: 20px;color: #606266">用户信息展示</caption>
    <tr>
        <th>姓名</th>
        <th>编号</th>
        <th>性别</th>
        <th>电话</th>
        <th>QQ</th>
        <th>操作</th>
    </tr>
    <?php
    $sql = "select * from stu";
    foreach ($conn->query($sql) as $stu){
        echo "<tr>";
        echo "<td>{$stu['user']}</td>";
        echo "<td>{$stu['pwd']}</td>";
        echo "<td>{$stu['xingBie']}</td>";
        echo "<td>{$stu['dianHua']}</td>";
        echo "<td>{$stu['banJi']}</td>";
        echo "<td><a href='shanchu.php?name={$stu['user']}'>删除</a></td>";
        echo "</tr>";
    }
    ?>

</table>
</body>
</html>



















