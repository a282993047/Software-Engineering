<?php require 'recommand.php'; ?><!DOCTYPE html>
<html lang="en" class="js">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="./css/newlookup1.css" type="text/css">
    <link rel="stylesheet" href="./css/newhomepage.css" type="text/css">
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
<div id="page">
    <div id="content" class="idle-index">
        <div class="first-glance clearfix">
            <div class="module sh-category-box J_TMSArea" data-spm="1867087" data-tms-id="685576">
                <ul id="J_HeaderCategoryList" class="sh-category-list">
                    <li class="list-item J_HeaderCategoryListItem">
                        <div class="main-area J_HeaderCategoryMainArea digit">
                            <a href="lookuptable.php?y=book1" target="_blank" class="title">二手书</a>
                            <span class="main-link">
                                <a class="type" id="English" href="newlookup1.php?y=English" target="_blank">英语</a>
                                <a href="newlookup1.php?y=math" target="_blank">数学</a>
                                <a href="newlookup1.php?y=computer" target="_blank">计算机</a>
                                <a href="newlookup1.php?y=financial" target="_blank">金融</a>
                                <a href="newlookup1.php?y=novel" target="_blank">小说</a>
                                <a href="newlookup1.php?y=others" target="_blank">其他</a>
                            </span>
                        </div>
                    </li>
                    <li class="list-item J_HeaderCategoryListItem">
                        <div class="main-area J_HeaderCategoryMainArea digit">
                            <a href="lookuptable.php?y=cloth1" target="_blank" class="title">二手衣物</a>
                            <span class="main-link">
                                <a href="" target="_blank">毛衣</a>
                                <a href="" target="_blank">裤子</a>
                                <a href="" target="_blank">外套</a>
                                <a href="" target="_blank">鞋子</a>
                                <a href="" target="_blank">帽子</a>
                                <a href="" target="_blank">其他</a>
                            </span>
                        </div>
                    </li>
                    <li class="list-item J_HeaderCategoryListItem">
                        <div class="main-area J_HeaderCategoryMainArea digit">
                            <a href="lookuptable.php?y=lifething1" target="_blank" class="title">日用品</a>
                            <span class="main-link">
                                <a href="" target="_blank">小家电</a>
                                <a href="" target="_blank">冬日保暖</a>
                                <a href="" target="_blank">杯子</a>
                                <a href="" target="_blank">碗筷</a>
                                <a href="" target="_blank">其他</a>
                            </span>
                        </div>
                    </li>
                    <li class="list-item J_HeaderCategoryListItem">
                        <div class="main-area J_HeaderCategoryMainArea digit">
                            <a href="lookuptable.php?y=lifething1" target="_blank" class="title">学习用品</a>
                            <span class="main-link">
                                <a href="" target="_blank">本子</a>
                                <a href="" target="_blank">笔</a>
                                <a href="" target="_blank">文具盒</a>
                                <a href="" target="_blank">胶带胶布</a>
                                <a href="" target="_blank">其他</a>
                            </span>
                        </div>
                    </li>
                    <li class="list-item J_HeaderCategoryListItem">
                        <div class="main-area J_HeaderCategoryMainArea digit">
                            <a href="lookuptable.php?y=lifething1" target="_blank" class="title">闲置数码</a>
                            <span class="main-link">
                                <a href="" target="_blank">手机</a>
                                <a href="" target="_blank">相机</a>
                                <a href="" target="_blank">笔记本</a>
                                <a href="" target="_blank">MP4</a>
                                <a href="" target="_blank">其他</a>
                            </span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="module" data-spm="638273021">
                <div class="index-slider col loading J_TMSArea">
                    <div id="J_IndexSlider">
                        <ul class="slider-list" style="width: 640px; overflow: hidden;height: 251px;">
                            <div style="position: absolute; overflow: hidden;height: 251px;">
                                <li class="item" style="float: left; overflow: hidden; width: 640px; display: block;">
                                    <div>                            <a href="https://www.taobao.com/market/2/qianren.php">
                                            <img alt="甩前任" src="./image/top4.jpg">
                                        </a>
                                    </div><textarea class="hidden data-lazyload" lazy-data="1" style="display: none;">                            &lt;a href="https://www.taobao.com/market/2/qianren.php"&gt;
                                &lt;img alt="甩前任" src="https://img.alicdn.com/tps/TB1WpazLXXXXXaKXXXXXXXXXXXX-640-247.jpg"&gt;
                            &lt;/a&gt;
                        </textarea>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="idle-start col">
                <div class="extend">
                    <div class="mod left">
                        <a href="fabu.php">
                            <span class="main-title">发布闲置</span>
                        </a>
                    </div>
                </div>
                <div class="app-intro">
                    <div class="mod left">
                        <a href="dingdanbuy.php">
                            <span class="main-title">我的订单</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<div class="container box">
    <h3 style="margin-left:50px; position: relative;top: 30px;">为您推荐：</h3>
    <?php
    if(isset($_COOKIE['rec'])) {
    $results = Recommand::getKeyWordItem($_COOKIE['rec']);
    $result = $results[0];
    $result1 = $results[1];
    $result2 = $results[2];
    ?>
    <div class="tuijian">
        <ul style="border-top: 1px dotted #eee;" class="list-ad-items">
            <?php
            while($row = mysql_fetch_array($result)){
                ?>
                <li class="listing-cpm-ad search-promote item-pinned seen">
                    <a href="shangpinye.php?id=<?php echo $row['id']?>&table=book1" target="_blank" class="media-cap">
                        <img src="<?php echo $row['photo'] ?>">
                    </a>
                    <div class="media-body">
                        <div class="media-body-title">
                            <a href="shangpinye.php?id=<?php echo $row['id']?>&table=book1" target="_blank"
                               class="ad-title"><?php echo $row['name'] ?></a>

                        </div>
                    </div>
                </li>
            <?php } ?>
            <?php
            while($row1 = mysql_fetch_array($result1)) {
                ?>
                <li class="listing-cpm-ad search-promote item-pinned seen">
                    <a href="shangpinye.php?id=<?php echo $row1['id']?>&table=cloth1" target="_blank" class="media-cap">
                        <img src="<?php echo $row1['photo'] ?>">
                    </a>

                    <div class="media-body">
                        <div class="media-body-title">
                            <a href="shangpinye.php?id=<?php echo $row1['id']?>&table=cloth1" target="_blank"
                               class="ad-title"><?php echo $row1['name'] ?></a>

                        </div>
                    </div>
                </li>
            <?php }
            while($row2 = mysql_fetch_array($result2)) {?>
                <li class="listing-cpm-ad search-promote item-pinned seen">
                    <a href="shangpinye.php?id=<?php echo $row2['id']?>&table=lifething1" target="_blank" class="media-cap">
                        <img src="<?php echo $row2['photo'] ?>">
                    </a>

                    <div class="media-body">
                        <div class="media-body-title">
                            <a href="shangpinye.php?id=<?php echo $row2['id']?>&table=lifething1" target="_blank"
                               class="ad-title"><?php echo $row2['name'] ?></a>
                        </div>
                    </div>
                </li>
            <?php } ?>
            <?php } ?>
        </ul>

    </div>
</div>
<script src="http://libs.baidu.com/jquery/2.1.4/jquery.min.js"></script>
<script src="./js/bootstrap.js"></script>
</body>
</html>
