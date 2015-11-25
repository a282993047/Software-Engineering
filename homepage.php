<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="./css/homepage.css" type="text/css">
    <title>华师大二手网站</title>
</head>
<body class="homepage">
<header>
    <div class="toolbar">
        <ul id="user-tools" class="navbar-nav">
            <?php if(!isset($_COOKIE["USER"])) { ?>
                <li >
                    <a class="login"href="login.html" data-toggle="userAuth" datatype="login">登录</a>
                </li>
                <li>
                    <a class="login"href="register.html" data-toggle="userAuth" datatype="reg">注册</a>
                </li>
            <?php } else { echo $_COOKIE["USER"];?>
                <li>
                    <a href="logout.php"> 注销</a>
                </li>
            <?php } ?>
        </ul>
    </div>
    <div>
        <div class="location">
            <div class="head-search">
                <form action="lookup.php" class="search" method="post">
                    <input onfocus="this.select();return false;" placeholder="请输入关键词或分类名" value="" x-webkit-speech lang="zh-CN"
                    name="query" class="input search-query ui-autocomplete-input" autocomplete="off">
                    <button type="submit" title="搜索"  class="frontpage-search-trigger
                    search-trigger
                    icon-search">提交
                    </button>
                </form>
            </div>
            <div class="pull-right">
                <a href="" class="post">发布信息</a>
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
                    <a href="" target="_blank" class="title"><!--target=_blank表示在新窗口中打开-->
                        <h3>二手书</h3>
                        <i class="icon icon-ershou"></i>
                    </a>
                </header>
                <div class="links">
                    <div class="content">
                        <a href="" target="_blank">英语</a>
                        <a href="" target="_blank">数学</a>
                        <a href="" target="_blank">计算机</a>
                        <a href="" target="_blank">金融</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="category-col category-ershou home-col-1">
            <div class="home-box">
                <header>
                    <a href="" target="_blank" class="title"><!--target=_blank表示在新窗口中打开-->
                        <h3>二手衣物</h3>
                        <i class="icon icon-ershou"></i>
                    </a>
                </header>
                <div class="links">
                    <div class="content">
                        <a href="" target="_blank">毛衣</a>
                        <a href="" target="_blank">裤子</a>
                        <a href="" target="_blank">外套</a>
                        <a href="" target="_blank">鞋子</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="category-col category-ershou home-col-1">
            <div class="home-box">
                <header>
                    <a href="" target="_blank" class="title"><!--target=_blank表示在新窗口中打开-->
                        <h3>日用品</h3>
                        <i class="icon icon-ershou"></i>
                    </a>
                </header>
                <div class="links">
                    <div class="content">
                        <a href="" target="_blank">小家电</a>
                        <a href="" target="_blank">。。</a>
                        <a href="" target="_blank">计算机</a>
                        <a href="" target="_blank">金融</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="category-col category-ershou home-col-1">
            <div class="home-box">
                <header>
                    <a href="" target="_blank" class="title"><!--target=_blank表示在新窗口中打开-->
                        <h3>日用品</h3>
                        <i class="icon icon-ershou"></i>
                    </a>
                </header>
                <div class="links">
                    <div class="content">
                        <a href="" target="_blank">小家电</a>
                        <a href="" target="_blank">。。</a>
                        <a href="" target="_blank">计算机</a>
                        <a href="" target="_blank">金融</a>
                    </div>
                </div>
            </div>
        </section>


    </section>
</div>
<script src="./js/bootstrap.js"></script>
<script src="http://libs.baidu.com/jquery/2.1.4/jquery.min.js"></script>
</body>
</html>