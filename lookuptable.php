<!DOCTYPE html>
<html lang="en" class="js">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="./css/lookup1.css" type="text/css">
    <title>华师大二手网站</title>
</head>
<body class="category-root view-item">
<?php
$con = mysql_connect("localhost","root","");
mysql_query("set names utf8");
$type=$_GET['y'];
mysql_select_db("test", $con);
$sql = "select * from $type ";
$result = mysql_query($sql);
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
                        <a href="homepage.php" target="_blank" class="name"><?php echo $row['name']?></a>
                        <a href="homepage.php" target="_blank" class="ad-title"><?php echo $row['message'] ?></a>
                        <span class="highlight">￥<?php echo $row['price'] ?></span>
                    </div>
                </div>
            </li>
        <?php }
        mysql_close($con);
        ?>
    </ul>
</div>

</body>
</html>