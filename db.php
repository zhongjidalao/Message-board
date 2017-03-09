<?php
//链接数据库的代码
$mysqli = new mysqli('127.0.0.1','root','','php105');
if($mysqli->connect_errno > 0){
    echo "链接错误";
    echo $mysqli->connect_error;
    exit;
}
$mysqli->query("SET NAMES UTF8");