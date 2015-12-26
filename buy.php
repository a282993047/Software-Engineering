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

<div class="J_Page confirm-order" style="min-height: 600px" id="holyshit9">
    <div class="buy-content">
        <div id="holyshit10" class="stepbar">

            <h1 class="buy-logo">

                <a href="homepage.php" target="_top" title="华师大二手网站"><i></i>华师大二手网站</a>


            </h1>
            <ol class="tb-stepbar">

                <li class="step-4 stepbar-current stepbar-first">
                    <span> 确认订单信息</span>
                </li>

            </ol>
        </div>
        <div id="holyshit11" class="address"><form name="addrForm" id="addrForm" action="#" data-spm="2">
                <h3>确认收货地址
    <span class="manage-address">
    <a href="//member1.taobao.com/member/fresh/deliver_address.htm" target="_blank" title="管理我的收货地址" class="J_MakePoint" data-point-url="//gm.mmstat.com/buy.1.7">管理收货地址</a>
    </span>
                </h3>
                <ul id="address-list" class="address-list">


                    <li class="J_Addr J_MakePoint clearfix J_DefaultAddr selected " data-enforce="false" data-addressid="1289099175" data-point-url="//gm.mmstat.com/buy.1.20">
                        <i class="J_Marker marker iconfont icon-dituzuobiao"></i>
                        <span class="marker-tip">寄送至</span>
                        <div class="address-info">
                            <a href="javascript:void(0);" class="J_Modify modify" data-value="1289099175">修改本地址</a>
                            <input name="address" class="J_MakePoint" type="radio" value="1289099175" id="addrId_1289099175" data-point-url="" ah:params="id=1289099175^^stationId=^^address=东川路500号华东师范大学本科生公寓02-621^^postCode=200000^^addressee=薛淇芳^^phone=^^mobile=15921912370^^areaCode=310112^^townCode=^^town=^^" checked="checked">
                            <label for="addrId_1289099175" class="user-address">
                                <!--上海 上海市 闵行区 吴泾镇
                                东川路500号华东师范大学本科生公寓02-621 (薛淇芳 收) <em>15921912370</em>-->
                                <?php
                                $con = mysql_connect("localhost","root","");
                                mysql_query("set names utf8");
                                mysql_select_db("test", $con);
                                $sql="select * from user1 where name='{$_COOKIE['USER']}'";
                                $result = mysql_query($sql);
                                $row = mysql_fetch_array($result);
                                echo $row['address'];
                                ?>
                            </label>
                            <em class="tip ">默认地址</em>
                            <a class="J_DefaultHandle set-default hidden" href="javascript:void(0);" data-addressid="1289099175">设置为默认收货地址</a>
                            <div class="msg J_Msg hidden"><p class="ok naked">设置成功！</p></div>
                        </div>
                    </li>
                </ul>
                <div class="address-bar">
                    <a id="J_OtherAddressLink" class="edit J_MakePoint otherlink" href="javascript:void(0);" data-point-url="//gm.mmstat.com/jsclick?cache=*&amp;tyxd=syqtdzan">使用其它地址</a>
                    <a href="javascript:void(0);" class="new J_MakePoint hidden" id="J_NewAddressBtn" data-point-url="//gm.mmstat.com/buy.1.19">使用新地址</a>
                </div>
            </form>
        </div>
    </div>
    <div class="buy-footer">
        <div class="order-go clearfix" data-spm="4">
            <div class="address-confirm clearfix">
                <div class="box">
                    <div id="holyshit34" class="realPay" tabindex="0"><em class="t">实付款：</em>
                        <span class="price g_price ">
                            <span>¥</span> <em class="style-large-bold-red " id="J_ActualFee"><?php
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
                                $name1=$row['name1'];
                                echo $row['price'];
                                ?></em>
                        </span>
                    </div>

                    <div id="holyshit35" class="address"><div id="J_AddrBottomConfirm">

                        </div>
                        <p class="buy-footer-address">
                            <span class="buy-line-title buy-line-title-type">寄送至：</span>
                            <span class="buy-footer-address-detail J_BuyFooterAddressDetail">
                                <?php
                                $con = mysql_connect("localhost","root","");
                                mysql_query("set names utf8");
                                mysql_select_db("test", $con);
                                $sql="select * from user1 where name='{$_COOKIE['USER']}'";
                                $result = mysql_query($sql);
                                $row = mysql_fetch_array($result);
                                echo $row['address'];
                                ?>
                             </span>
                        </p>
                        <p class="buy-footer-address">
                            <span class="buy-line-title">收货人：</span>
                            <span class="buy-footer-address-detail J_BuyFooterAddressRec">
                                <?php
                                $con = mysql_connect("localhost","root","");
                                mysql_query("set names utf8");
                                mysql_select_db("test", $con);
                                $sql="select * from user1 where name='{$_COOKIE['USER']}'";
                                $result = mysql_query($sql);
                                $row = mysql_fetch_array($result);
                                echo $row['realname'];
                                ?>
                            </span>
                        </p>
                    </div>
                    <div class="eticket-bottom hidden">电子凭证接收手机：<span class="eticket-bottom-phone"></span></div>
                    <div class="fuelcard-bottom hidden">加油卡号：<span class="fuelcard-bottom-no"></span></div>
                </div>
                <div id="holyshit36" class="submitOrder"><div class="go-btn-wrap">

                        <a id="J_Go" href="insertbuy.php?address=<?php echo $row['address']?>&buyer=<?php echo
                        $_COOKIE['USER']?>&id=<?php echo $id?>&table=<?php echo $table?>&name1=<?php echo $name1?>"
                        class="btn-go
                          "
                           tabindex="0"
                        title="点击此按钮，提交订单"
                           data-point-url="//gm.mmstat.com/buy.1.2" >提交订单</a>
                    </div>

                    <div class="msg hidden" id="J_GlobalErr">
                        <p class="error"></p>
                    </div></div>

            </div>
        </div>
    </div>

</div>
<?php
/**
 * Created by PhpStorm.
 * User: a282993047
 * Date: 2015/12/26
 * Time: 19:44
 */
?>
<script src="http://libs.baidu.com/jquery/2.1.4/jquery.min.js"></script>
<script src="./js/bootstrap.js"></script>
</body>
</html>
