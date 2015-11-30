<?php
	function makeSql($names){//多关键字查询
		$sql = 'where bookname ';

		if(!$names || empty($names)) return '';

		foreach ($names as $name) {
			$sql.="like '%$name%'";
		}

		return $sql;
	}

	// 这段数据库连接可以抽出来写进一个函数然后每次调用一下，去看一下include和require怎么用吧
	$con = mysql_connect("localhost","root","");
	mysql_query("set names utf8");
	mysql_select_db("test", $con);

	$name = $_POST['query'];
	$name1 = split(' ',$name);

	// 参数是一个array
	$name2 = makeSql($name1);

	// 这段有点蠢啊，你数据库貌似设计的有点问题。。
	$sql = "select * from BOOK1 $name2";
	$sql1 = "select * from CLOTH1 $name2";
	$sql2 = "select * from LIFETHING1 $name2";
	$result = mysql_query($sql);
	$result1 = mysql_query($sql1);
	$result2 = mysql_query($sql2);
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="./css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="./css/lookup1.css" type="text/css">
	<title>华师大二手网站</title>
</head>
<body>
	<div class="main">
		<ul style="border-top: 1px dotted #eee;" class="list-ad-items">
			<?php
			while($row = mysql_fetch_array($result)){
				?>
				<li class="listing-cpm-ad search-promote item-pinned seen">
					<a href="homepage.php" target="_blank" class="media-cap">
						<img src="<?php echo $row['photo'] ?>">
					</a>
					<div class="media-body">
						<div class="media-body-title">
							<a href="homepage.php" target="_blank" class="ad-title"><?php echo $row['message'] ?></a>
							<span class="highlight">￥<?php echo $row['bookprice'] ?></span>
						</div>
					</div>
				</li>
			<?php } ?>
			<?php
			while($row1 = mysql_fetch_array($result1)) {
				?>
				<li class="listing-cpm-ad search-promote item-pinned seen">
					<a href="homepage.php" target="_blank" class="media-cap">
						<img src="<?php echo $row['photo'] ?>">
					</a>

					<div class="media-body">
						<div class="media-body-title">
							<a href="homepage.php" target="_blank" class="ad-title"><?php echo $row['message'] ?></a>
							<span class="highlight">￥<?php echo $row['clothprice'] ?></span>
						</div>
					</div>
				</li>
			<?php }
			while($row2 = mysql_fetch_array($result2)) {?>
			<li class="listing-cpm-ad search-promote item-pinned seen">
				<a href="homepage.php" target="_blank" class="media-cap">
					<img src="<?php echo $row['photo'] ?>">
				</a>

				<div class="media-body">
					<div class="media-body-title">
						<a href="homepage.php" target="_blank" class="ad-title"><?php echo $row['message'] ?></a>
						<span class="highlight">￥<?php echo $row['lifethingprice'] ?></span>
					</div>
				</div>
			</li>
			<?php }
			mysql_close($con);
			?>
		</ul>
	</div>
	<script src="./js/bootstrap.js"></script>
	<script src="http://libs.baidu.com/jquery/2.1.4/jquery.min.js"></script>
</body>
</html>