<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="./css/lookup1.css" type="text/css">
    <title>华师大二手网站</title>
</head>
<body>
<?php
$con = mysql_connect("localhost","root","");
mysql_query("set names utf8");
mysql_select_db("test", $con);
$name = $_POST['query'];
$sql = "select * from BOOK1 where bookname LIKE '%{$name}%' ";
$sql1= "select * from CLOTH1 where clothname LIKE '%{$name}%' ";
$sql2= "select * from LIFETHING1 where lifethingname LIKE '%{$name}%' ";
$result = mysql_query($sql);
$result1 = mysql_query($sql1);
$result2 = mysql_query($sql2);
?>
<div class="main">
    <ul style="border-top: 1px dotted #eee;" class="list-ad-items">
        <?php
        while($row = mysql_fetch_array($result)){
            ?>
            <li class="listing-cpm-ad search-promote item-pinned seen">
                <a href="homepage.php" target="_blank" class="media-cap">
                    <img src="<?php echo $row['photo'] ?>">
                </a>
                <div class="media-body">
                    <div class="media-body-title">
                        <a href="homepage.php" target="_blank" class="ad-title"><?php echo $row['message'] ?></a>
                        <span class="highlight">￥<?php echo $row['bookprice'] ?></span>
                    </div>
                </div>
            </li>
        <?php } ?>
        <?php
        while($row1 = mysql_fetch_array($result1)) {
            ?>
            <li class="listing-cpm-ad search-promote item-pinned seen">
                <a href="homepage.php" target="_blank" class="media-cap">
                    <img src="<?php echo $row['photo'] ?>">
                </a>

                <div class="media-body">
                    <div class="media-body-title">
                        <a href="homepage.php" target="_blank" class="ad-title"><?php echo $row['message'] ?></a>
                        <span class="highlight">￥<?php echo $row['clothprice'] ?></span>
                    </div>
                </div>
            </li>
        <?php }
        while($row2 = mysql_fetch_array($result2)) {?>
        <li class="listing-cpm-ad search-promote item-pinned seen">
            <a href="homepage.php" target="_blank" class="media-cap">
                <img src="<?php echo $row['photo'] ?>">
            </a>

            <div class="media-body">
                <div class="media-body-title">
                    <a href="homepage.php" target="_blank" class="ad-title"><?php echo $row['message'] ?></a>
                    <span class="highlight">￥<?php echo $row['lifethingprice'] ?></span>
                </div>
            </div>
        </li>
        <?php }
        mysql_close($con);
        ?>
    </ul>

</div>
<script src="./js/bootstrap.js"></script>
<script src="http://libs.baidu.com/jquery/2.1.4/jquery.min.js"></script>
</body>
</html>