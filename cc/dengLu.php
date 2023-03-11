<?php
session_start();
include "conn.php";
    $user = $_POST['user'];
    $pwd = ($_POST['pwd']);
    $strQuery = "SELECT * FROM teacher WHERE name='$user' and pwd='$pwd' ";
    //echo $strQuery;
    $stmt= $conn->query($strQuery);
    //var_dump($stmt);
    if($stmt->num_rows > 0){
        echo "<script>alert(\"登录成功！\")</script>";
        echo "<script>window.location.href='zhuYe.php'</script>";

    }else{
        echo "<script>alert(\"账号或密码错误，请重新输入！\")</script>";
        echo "<script>window.location.href='index.php'</script>";
    }

