<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="./css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="./css/newlookup1.css" type="text/css">
    <link rel="stylesheet" href="./css/newlookup1.css" type="text/css">
    <link rel="stylesheet" href="./css/shangpinye.css" type="text/css">
    <link rel="stylesheet" href="./css/dingdanbuy.css" type="text/css">
    <title>华师大二手网站</title>
</head>
<body class="w1190">
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
                    <form method="post" action="newlookup.php" name="search" target="_top">
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
/**
 * Created by PhpStorm.
 * User: a282993047
 * Date: 2015/12/26
 * Time: 21:55
 */
$con = mysql_connect("localhost","root","");
mysql_query("set names utf8");
mysql_select_db("test", $con);
$sql="select * from sold where name = '{$_COOKIE['USER']}' ORDER BY TIME DESC ";
$result = mysql_query($sql);
?>
<div class="main">
    <ul style="border-top: 1px dotted #eee;" class="list-ad-items">
        <?php
        while($row = mysql_fetch_array($result)){
            $table2=$row['table1'];
            $id2=$row['id'];
            $sql1="select * from $table2 where id='{$id2}'";
            $result1=mysql_query($sql1);

            ?>
            <?php  while($row1 = mysql_fetch_array($result1)){ ?>
                <span class="time">发布时间:<?php echo $row['time']?> 买家：<?php echo $row['buyer']?> 地址：<?php echo
                    $row['address']
                    ?></span>
                <hr class="fenge" size="50" />
                <li class="listing-cpm-ad search-promote item-pinned seen">
                    <a href="shangpinye.php?id=<?php echo $row1['id']?>&table=<?php echo $row['table1']?>"
                       target="_blank"
                       class="media-cap">
                        <img class="img1" src="<?php echo $row1['photo'] ?>">
                    </a>

                    <div class="media-body">

                        <div class="media-body-title">
                            <a href="shangpinye.php?id=<?php echo $row1['id']?>&table=<?php echo $row['table1'] ?>"
                               target="_blank"
                               class="ad-title"><?php echo $row1['name'] ?></a>
                            <span class="deal">价格:</span>
                            <span class="highlight">￥<?php echo $row1['price'] ?></span>

                        </div>
                    </div>
                </li>
            <?php }?>
        <?php }?>
    </ul>
</div>
</body>
</html>