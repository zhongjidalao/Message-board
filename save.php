<?php

include("input.class.php");
include('db.php');

$input = new input();

$msg = $input->post('msg');
$user = $input->post('user');

if($msg == ''){
    echo '留言内容不能为空';
    exit;
}
if($user == ''){
    echo '用户名不能为空';
    exit;
}

$t = time();

$sql = "INSERT INTO msg(`username`,`content`,`intime`) values('$user','$msg','$t')";
$is = $mysqli->query($sql);
if($is == true){
    header("Location:test.php");
}else{
    echo "失败";
}