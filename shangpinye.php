<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="./css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="./css/newlookup1.css" type="text/css">
    <link rel="stylesheet" href="./css/shangpinye.css" type="text/css">
    <link rel="stylesheet" href="./css/tuijian.css" type="text/css">
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
 * Date: 2015/12/14
 * Time: 17:37
 */
$con = mysql_connect("localhost","root","");
mysql_query("set names utf8");
mysql_select_db("test", $con);
$id=$_GET['id'];
$table=$_GET['table'];
$sql="select * from $table where id = $id";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
?>
    <div class="content">
        <div id="page">
            <div class="idle-detail">
                <div class="layout grid-s730m0">
                    <div class="col-main">
                        <div class="main-wrap">
                            <div class="property" id="J_Property">
                                <h1 class="title"><?php echo $row['name'] ?></h1>
                                <ul class="price-info">
                                    <li class="price-block">
                                        <span class="para">转&nbsp;&nbsp;卖&nbsp;&nbsp;价：</span>
                                        <span class="price big">
                                            <b>¥</b>
                                            <em><?php echo $row['price'] ?></em>
                                        </span>
                                    </li>
                                </ul>
                                <ul class="idle-info" >
                                    <li>
                                        <span class="para">成　　色： &nbsp全新</span>

                                    </li>
                                    <li class="contact">
                                        <span class="para">联系方式：</span>
                                        <span class="contact-phone">
                                            <span class="contact-phone-elli"><?php echo $row['phone'] ?></span>
                                        </span>
                                    </li>
                                    <li class="trade-terms" id="J_TradeWrap">
                                        <span class="para">交易方式</span>
                                        <a href="#" class="selected">
                                            <span class="J_Term term">在线交易</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="buy-now" data-spm="2007.1000338.4">
                                    <a id="J_BuyNow" data-url="" class="btn active" href="buy.php?id=<?php echo
                                    $id; ?>&table=<?php echo $table?>"
                                       role="button">立即购买</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sub">
                        <div id="J_Slider" class="slider">
                            <ul class="album" style="">
                                <li class="item sh-pic ks-switchable-panel-internal197" style="display: block;
                                float:left;">
                                    <a href="homepage.php" >
                                        <img src="<?php echo $row['photo']?>" class="photo">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div id="J_IdleDesc" class="idle-desc">
                            <div class="hidden" id="J_TabbarPlaceHolder" style="height: 44px;width:1px;padding: 0;"></div>
                            <div id="J_ItemTab" class="">
                                <div class="list-tabs" data-spm="2007.1000338.8">
                                    <ul>
                                        <li class="J_TabTrigger tabnavfirst actived ks-switchable-trigger-internal214"><a href="#desc-intro">宝贝介绍</a></li>

                                        <li class="J_TabTrigger ks-switchable-trigger-internal214" id="J_MSCount" data-key="101_525014745953" data-url="//comment.jianghu.taobao.com/json/commentCount.htm?keys=101_525014745953">
                                            <a href="#message" id="messages" name="messages">留言（<span>1</span>）</a>
                                        </li>
                                        <li class="J_TabTrigger ks-switchable-trigger-internal214"><a href="#guarantee">安全保障</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="desc-intro" class="J_Panel desc-intro ks-switchable-panel-internal1215"
                                 style="display:
                            block;">
                                <h2><b>宝贝介绍</b></h2>
                                <div class="describe" id="J_DescContent">
                                    <?php echo $row['message']?>
                                </div>
                            </div>
                            <div class="message" class="J_Panel message ks-switchable-panel-internal1215"
                                 style="display: block;">
                                <h2><b>留言</b></h2>
                                <div id="J_Message" data-targetkey="525469642361" data-recuserid="2756424656" data-title="诺基亚1520国行联通版"><div class="cmt-edit-wrap">
                                        <div class="cmt-edit">
                                            <div class="cmt-edit-top clearfix">
                                                <div class="cmt-user">
                                                    <img src="//wwc.alicdn.com/avatar/getAvatar.do?userId=0&amp;width=60&amp;height=60&amp;type=sns" alt="">
                                                </div>
                                                <div class="cmt-add">
                                                    <textarea id="message1" placeholder="我也插句话..."></textarea>
                                                </div>
                                            </div>
                                            <div class="cmt-edit-btm clearfix">
                                                 <span class="cmt-send-el">
                                                     <em class="cmt-send-textnum">0/140</em>
                                                     <button id="buttoncom" class="cmt-send-btn">评论</button>
                                                 </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cmt-list-wrap"><div class="cmt-list">

                                        </div>
                                        <div class="cmt-pager" id="cmt-pager-container"><span class="pagination-start"><span>上一页</span></span><span class="pagination-curr">1</span><span class="pagination-end"><span>下一页</span></span></div></div></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<script>
    var text=$("#message1").val();

</script>
<script src="http://libs.baidu.com/jquery/2.1.4/jquery.min.js"></script>
<script src="./js/bootstrap.js"></script>
</body>
</html>
