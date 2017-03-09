<?php
//链接数据库
include('db.php');

$sql = "SELECT * FROM msg ORDER BY id  DESC";
$mysqli_result = $mysqli->query($sql);

$rows = array();
while($row = $mysqli_result->fetch_array(MYSQLI_ASSOC)){
    $rows[] = $row;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>留言板</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div class="add">
        <form action="save.php" method="post">
        <textarea name="msg"></textarea>
        <input class="user" name="user" type="text"/>
        <input class="btn" type="submit" value="提交"/>
        </form>
    </div>
        <div class="msg">
            <?php
                foreach ($rows as $row){
                    $t = date("Y-m-d H:i:s",$row['intime']);
            ?>
            <div class="item">
                <span class="user">用户名：<?php echo $row['username']; ?></span>
                <span class="time">留言时间：<?php echo $t; ?></span>
                <div style="clear:both;"></div>
                <p>
                    留言内容：<?php echo $row['content']; ?>
                </p>
            </div>
                <?php
            }
            ?>
        </div>
</body>
</html>