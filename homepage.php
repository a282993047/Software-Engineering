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
                <form action="/root/" class="search">
                    <input onfocus="this.select();return false;" placeholder="请输入关键词或分类名" value="" x-webkit-speech="" name="query" class="input search-query ui-autocomplete-input" autocomplete="off">
                    <button type="submit" title="搜索"  class="frontpage-search-trigger
                    search-trigger
                    icon-search">提交
                    </button>
                </form>
            </div>
        </div>
    </div>
</header>
<script src="./js/bootstrap.js"></script>
</body>
</html>