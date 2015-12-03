<!DOCTYPE html>
<html lang="en" class="js">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="./bootstrap/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="./css/fabu.css" type="text/css">
	<title>华师大二手网站发布商品</title>
</head>
<body >
	<header>
		<div>
			<div class="toolbar">
				<ul id="user-tools" class="navbar-nav">
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
				</ul>
			</div>
		</div>
		<div>
			<div class="location">
				<span class="breadcrumb">
					<a href="homepage.php">华师大二手购物网站</a>
					<i class="glyphicon glyphicon-arrow-right"></i>
					<a href="fabu.php">发布商品</a>
				</span>
			</div>
		</div>
	</header>
	<div class="wrapper">
		<div class="slogan middle">简单，快速，搞得定！</div>
		<ul class="flow clearfix sep-big">
			<li class="flow-item active"><label class="i-badge">1</label>选择类目</li>
			<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
			<li class="flow-item"><label class="i-badge">2</label>填写信息</li>
			<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
			<li class="flow-item"><label class="i-badge">3</label>完成发布</li>
		</ul>
		<div class="clearfix">
			<div id="publish" class="publish-detail">
				<div class="separate">基本信息</div>
				<form id="bxForm" action="insert.php" method="post" style class="form">
					<div class="fabuform-tab"></div>
					<div class="fabuform-tab-content">
						<div class="p-line">
							<label  class="p-label">
								<span class="required">*</span>
								标题：
							</label>
							<div class="publish-detail-item">
								<input id="title" type="text" name="title" maxlength="25" class="input-60 input">
							</div>
						</div>

					</div>
				</form>

			</div>
		</div>
	</div>
	<script src="http://libs.baidu.com/jquery/2.1.4/jquery.min.js"></script>
	<script src="./js/jquery.qrcode.min.js"></script>
	<script src="./js/bootstrap.js"></script>

</body>
</html>
