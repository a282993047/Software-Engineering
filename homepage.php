<!DOCTYPE html>
<html lang="en" class="js">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="./css/homepage.css" type="text/css">
    <title>华师大二手网站发布商品</title>

</head>
<body>
    <header>
        <div>
            <div class="toolbar">
                <ul id="user-tools" class="">
                    <?php if(isset($_COOKIE["USER"])){?>
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
                            <a href="">我的订单（卖）</a>
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
                    </li><?PHP } else{?>
                    <li>
                        <a href="login.html">登录</a>
                    </li>
                    <li>
                        <a href="register.html">注册</a>
                    </li><?php } ?>
                </ul>
            </div>
        </div>
        <div>
            <div class="location">
                <div class="head-search">
                    <form action="newlookup.php" class="search" method="post">
                        <input onfocus="this.select();return false;" placeholder="请输入关键词或分类名" value="" x-webkit-speech lang="zh-CN"
                               name="query" class="input search-query ui-autocomplete-input" autocomplete="off">
                        <button type="submit" title="搜索"  class="frontpage-search-trigger search-trigger icon-search">提交
                        </button>
                    </form>

                </div>
                <div class="pull-right">
                    <a href="fabu.php" class="post">发布信息</a>
                    <a id="manage" href="http://www.baixing.com/w/posts?src=topbar-modify-delete" data-toggle="userAuth" data-type="user">修改/删除信息</a>

                </div>
            </div>
        </div>

    </header>
    <div class="container box">
        <section class="home-row">
            <section class="category-col category-ershou home-col-1">
                <div class="home-box">
                    <header>
                        <a href="lookuptable.php?y=book1" target="_blank" class="title"><!--target=_blank表示在新窗口中打开-->
                            <h3>二手书</h3>
                            <i class="icon icon-ershou"></i>
                        </a>
                    </header>
                    <div class="links">
                        <div class="content">
                            <a class="type" id="English" href="newlookup1.php?y=English" target="_blank">英语</a>
                            <a href="newlookup1.php?y=math" target="_blank">数学</a>
                            <a href="newlookup1.php?y=computer" target="_blank">计算机</a>
                            <a href="newlookup1.php?y=financial" target="_blank">金融</a>
                            <a href="newlookup1.php?y=novel" target="_blank">小说</a>
                            <a href="newlookup1.php?y=others" target="_blank">其他</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="category-col category-gongzuo home-col-1">
                <div class="home-box">
                    <header>
                        <a href="lookuptable.php?y=cloth1" target="_blank" class="title"><!--target=_blank表示在新窗口中打开-->
                            <h3>二手衣物</h3>
                            <i class=""></i>
                        </a>
                    </header>
                    <div class="links">
                        <div class="content">
                            <a href="" target="_blank">毛衣</a>
                            <a href="" target="_blank">裤子</a>
                            <a href="" target="_blank">外套</a>
                            <a href="" target="_blank">鞋子</a>
                            <a href="" target="_blank">包包</a>
                            <a href="" target="_blank">帽子</a>
                            <a href="" target="_blank">其他</a>

                        </div>
                    </div>
                </div>
            </section>
            <section class="category-col category-cheliang home-col-1">
                <div class="home-box">
                    <header>
                        <a href="lookuptable.php?y=lifething" target="_blank" class="title"><!--target=_blank表示在新窗口中打开-->
                            <h3>日用品</h3>
                            <i class="icon icon-ershou"></i>
                        </a>
                    </header>
                    <div class="links">
                        <div class="content">
                            <a href="" target="_blank">小家电</a>
                            <a href="" target="_blank">冬天保暖小物</a>
                            <a href="" target="_blank">杯子</a>
                            <a href="" target="_blank">碗筷</a>
                            <a href="" target="_blank">其他</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="category-col category-ershou home-col-1">
                <div class="home-box">
                    <header>
                        <a href="" target="_blank" class="title"><!--target=_blank表示在新窗口中打开-->
                            <h3>学习用品</h3>
                            <i class="icon icon-ershou"></i>
                        </a>
                    </header>
                    <div class="links">
                        <div class="content">
                            <a href="" target="_blank">本子</a>
                            <a href="" target="_blank">笔</a>
                            <a href="" target="_blank">文具盒</a>
                            <a href="" target="_blank">胶带胶布</a>
                            <a href="" target="_blank">其他</a>
                        </div>
                    </div>
                </div>
            </section>


        </section>
    </div>
    <script src="http://libs.baidu.com/jquery/2.1.4/jquery.min.js"></script>
    <script src="./js/bootstrap.js"></script>


</body>
</html>
