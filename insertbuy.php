<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="./css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="./css/newlookup1.css" type="text/css">
    <link rel="stylesheet" href="./css/shangpinye.css" type="text/css">
    <link rel="stylesheet" href="./css/buy.css" type="text/css">
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
 * Time: 21:11
 */
$con = mysql_connect("localhost","root","");
mysql_query("set names utf8");
mysql_select_db("test", $con);
$name=$_GET['buyer'];
$address=$_GET['address'];
$table=$_GET['table'];
$id=$_GET['id'];
$owner=$_GET['name1'];
$sql = "INSERT INTO BUY (name,table1,id,owner,time) VALUES ('$name','$table','$id','$owner',now())";
$buyer=$_COOKIE['USER'];
mysql_query($sql, $con);

$row = mysql_affected_rows($con);
echo $buyer;
echo $address;
/*$sql1="INSERT INTO SOLD(buyer,address) where table1= '{$table}'and id='{$id}' VALUES ('$buyer','$address')";*/
mysql_query("UPDATE sold Set buyer='$buyer'
WHERE table1='$table' AND id='$id'");
mysql_query("UPDATE sold Set address='$address'
WHERE table1='$table' AND id='$id'");
/*mysql_query($sql1, $con);*/

$row1 = mysql_affected_rows($con);
echo $row1;
if ($row > 0) {

    echo "提交成功";
    echo "<a href=homepage.php>返回主页 </a>";

} else {

    echo "购买失败";
    echo "<a href=buy.php>重新购买</a>";
}
?>
<script src="http://libs.baidu.com/jquery/2.1.4/jquery.min.js"></script>
<script src="./js/bootstrap.js"></script>
</body>
</html>
