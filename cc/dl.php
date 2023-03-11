<?php

?>
<html>
<head>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
<!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"-->
<!--          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"-->
<!--          crossorigin="anonymous">-->
<!--     最新的 Bootstrap 核心 JavaScript 文件 -->
<!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"-->
<!--            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"-->
<!--            crossorigin="anonymous"></script>-->

    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
        }
        body {
            background: url(img/100.jpg) no-repeat;
        }
        .Login {
            width: 600px;
            height: 350px;
            background: rgba(0,0,0,0.3);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 5px rgba(0,0,0,0.4);
        }
        label {
            display: block;
        }
        form {
            margin: 25px 140px;
        }
        h2 {
            margin-top: 35px;
            text-align: center;
            font-size: 25px;
            color: white;
        }
        input {
            width: 220px;
            height: 30px;
            background: transparent;
            margin-top: 30px;
            border: none;
            border-bottom: 1px wheat solid;
            outline: none;
            color: white;
            font-size: 17px;
        }
        input::-webkit-input-placeholder {
            color: #2aabd2;
        }
        button {
            width: 98px;
            height: 30px;
            border: none;
            margin-top: 40px;
            margin-left: 40px;
            color: white;
            text-align: center;line-height: 15px;
            background-image: linear-gradient(to right, #c979d4,#fa719d);
            border-radius: 15px;
        }
        button:hover {
            box-shadow: 0 0 5px rgba(0,0,0,0.4) inset;
        }
        span {
            font-size: 15px;
        }
    </style>
</head>
<body>
<div class="Login">
    <h2>用户管理系统</h2>
    <form action="dengLu.php" method="post">
        <label>
            <span>用户名&nbsp;&nbsp;</span>
            <input type="text" name="user" placeholder="UserName">
        </label>
        <label>
            <span>密&nbsp;&nbsp;&nbsp;码&nbsp;&nbsp;</span>
            <input type="password" name="pwd" placeholder="PassWord">
        </label>
        <button type="submit" name="dengLu" value="登录">登录</button>
        <button type="button" id="btn" value="注册">注册</button>
    </form>
</div>
<script>
   var b = document.getElementById("btn");
   b.onclick = function () {
       window.location.href="xueSheng/zhuCe.php"
   }
</script>
</body>
</html>
