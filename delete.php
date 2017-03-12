<?php
session_start();
if(isset($_SESSION['username']) == false){
    echo "需要管理员权限";
    exit;
}

include('input.class.php');
include('db.php');

$input = new input();

$id = $input->get('id');

$sql = "DELETE from msg WHERE id='{$id}'";
$is = $mysqli->query($sql);
if($is == true){
    header("Location:test.php");
}else{
    echo "删除失败";
}