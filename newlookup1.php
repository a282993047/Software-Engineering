<!DOCTYPE html>
<html lang="en" class="js">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="./css/newlookup1.css" type="text/css">
    <title>华师大二手网站</title>
</head>
<body class="category-root view-item">
<header>
    <div>
        <div class="toolbar">
            <ul id="user-tools" class="username1">
                <li class="dropdown topbar-user-info">
                    <a href=""  target="_blank" class="username">
                        <img src="./image/touxiang.png" width="36">
                        <?php
                        echo $_COOKIE["USER"];
                        ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="" target="_blank">我发布的信息</a>
                        </li>
                        <li>
                            <a href="logout.php" id="logout">退出登录</a>
                        </li>
                    </ul>

                </li>
                <li>
                    <a href="dingdanbuy.php">我的订单（买）</a>
                </li>
                <li>
                    <a href="dingdansold.php">我的订单（卖）</a>
                </li>
                <li>
                    <i class="glyphicon glyphicon-star" aria-hidden="true"></i>
                    <a href="">收藏夹</a>
                </li>
                <li>
                    <a href="" >联系客服</a>
                </li>
                <li>
                    <a href="logout.php" target="_blank">退出登录</a>
                </li>
            </ul>
        </div>
    </div>
    <div>
        <div class="location">
            <div class="idle-header">
                <div class="idle-nav">
                    <div class="idle-menu">
                        <ul>
                            <li class="m-home">
                                <a href="homepage.php">首页</a>
                            </li>
                            <li class="m-guang">
                                <a href="">逛逛逛</a>
                            </li>
                            <li class="m-auction">
                                <a href="">降降降</a>
                            </li>
                            <li class="fabu">
                                <a href="fabu.php">发布闲置</a>
                            </li>
                            <li class="my-idle-li">
                                <a class="my-idle-link" href="">我的闲置
                                    <i class="glyphicon glyphicon-chevron-down" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="idle-search">
                    <form method="post" action="newlookup.php" name="search" target="_blank">
                        <input class="input-search" name="query" type="text" value placeholder="搜闲置" autocomplete="off">
                        <button class="btn-search" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</header>
<?php
$con = mysql_connect("localhost","root","");
mysql_query("set names utf8");
$type=$_GET['y'];
mysql_select_db("test", $con);
$sql = "select * from BOOK1 where type = '{$type}'";
$result = mysql_query($sql);
?>
<div class="main">
    <ul style="border-top: 1px dotted #eee;" class="list-ad-items">
        <?php
        while($row = mysql_fetch_array($result)){
        ?>
        <li class="listing-cpm-ad search-promote item-pinned seen">
            <a href="shangpinye.php?table=book1&id=<?php echo $row['id']?>" target="_blank" class="media-cap">
                <img src="<?php echo $row['photo'] ?>">
            </a>
            <div class="media-body">
                <div class="media-body-title">
                    <a href="shangpinye.php?table=book1&id=<?php echo $row['id']?>" target="_blank" class="name"><?php
                        echo
                    $row['name']?></a>
                    <a href="shangpinye.php?table=book1&id=<?php echo $row['id']?>" target="_blank" class="ad-title"><?php echo $row['message'] ?></a>
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
