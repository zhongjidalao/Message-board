<?php
session_start();
include("input.class.php");
include("db.php");
$input = new input();

$act = $input->get('act');

$u = '123';
$p = '123';

if($act !== false) {
    $username = $input->post('username');
    $password = $input->post('password');

    $sql = "SELECT * from adm WHERE username = '{$username}' and password='{$password}'";
    $mysql_result = $mysqli->query($sql);

    if($row = $mysql_result->fetch_array()){
        $_SESSION['username'] = $row['username'];
        header('Location:test.php');
    }else{
        echo "登录失败";
        exit;
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>管理员登录</title>
    </head>
    <body>
        <form action="login.php?act=chk" method="post">
            <input type="text" name="username"/>
            <input type="password" name="password"/>
            <input type="submit" value="登录"/>
        </form>
    </body>
</html>