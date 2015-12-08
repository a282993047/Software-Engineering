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
						<a href="logout.php" target="_blank">退出登录</a>
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
			<li class="flow-item active"><label class="i-badge">1</label>填写信息</li>
			<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
			<li class="flow-item"><label class="i-badge">2</label>完成发布</li>

		</ul>
		<div class="clearfix">
			<div id="publish" class="publish-detail">
				<div class="separate">基本信息</div>
				<form id="bxForm" action="insertfabu.php" method="post" style class="form"
					  enctype="multipart/form-data">
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

						<div class="p-line input-select-control-ie67">
							<label  class="p-label">
								<span class="required">*</span>
								类目：
							</label>
							<div class="publish-detail-item">
								<select class="input input-6" id="select" name="table" onchange="hi();">
									<option value></option>
									<option value="book1">二手书</option>
									<option value="cloth1">二手衣物</option>
									<option value="lifething1">日用品</option>
									<option value="others">其他</option>
								</select>
								<select class="input" name="selectbox" id="selectbox">
									<option value>请选择</option>
								</select>
							</div>
						</div>
						<div class="p-line">
							<label  class="p-label">
								<span class="required">*</span>
								价格：
							</label>
							<div class="publish-detail-item"><input type="text" name="price" maxlength="6" class="input-6 input">
								<span class="fabuform-unit">元</span>
							</div>
						</div>
						<div class="p-line">
							<label class="p-label">
								<span class="required">*</span>描述：
							</label>
							<div class="publish-detail-item">
								<textarea class="input" name="content" placeholder="写清商品的基本情况、交易方式/时间等" maxlength="5000" size="5" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 115px;"></textarea>
							</div>
						</div>
						<div class="p-line">
							<label class="p-label">
								<span class="required">*</span>
								联系电话：
							</label>
							<div class="publish-detail-item">
								<input type="text" name="contact" maxlength="30" class="input-5 input">
							</div>
						</div>
						<div class="p-line swfu">
							<label class="p-label"><span class="required">*</span>上传照片：</label>
							<div class="publish-detail-item">
								<input type="hidden" name="images[]">
								<ul class="postimg clearfix"></ul>
								<div id="swfupload" class="pull-left">
									<input id="imgfile" name="photo" type="file" accept="image/*" multiple="multiple"
										   onchange="viewmypic(showimg,this.form.photo);">
								</div>
								<ul class="postimg clearfix">
									<li class="postimg-item">
										<img name="showimg" id="showimg" class="postimg-item-img" style="display:none;"
											 alt="预览图片"
											 src="undefined" /><br />
									</li>
								</ul>
							</div>
							<p class="p-submit 0">
								<input type="submit" name="submit" value="免费发布信息" id="fabu-form-submit" class="form-submit
								button button-green">
							</p>


						</div>

					</div>
				</form>

			</div>
		</div>
	</div>
	<script src="http://libs.baidu.com/jquery/2.1.4/jquery.min.js"></script>
	<script src="./js/jquery.qrcode.min.js"></script>
	<script src="./js/bootstrap.js"></script>
	<script>
		function getFileName(o){//提取图片名字
			var pos=o.lastIndexOf("\\");
			return o.substring(pos+1);
		}

		function viewmypic(mypic,imgfile) {//图片预览
			if (imgfile.value){
				//mypic.src=imgfile.value;
				var src1=getFileName(imgfile.value);
				src1="./image/"+src1;
				//mypic.src="./image/
				mypic.src=src1;
				mypic.style.display="";
				mypic.border=1;
				console.log(src1);

			}
		}
	</script>
	<script>
		function clearSelectbox(selectbox){//清除selectbox 每次只清除第一个
			//console.log(selectbox.options.length);
			for(var i= 1,len=selectbox.options.length;i<len;i++){
				selectbox.remove(i);
			}
		}
		function hi(){//动态添加selectbox
			var selectbox1=document.getElementById("selectbox");
			var selectbox=document.getElementById("select");
			console.log(selectbox1.options.length);
			for(var i=0;i<=selectbox1.options.length;i++){//每次现将之前的selectbox清楚完
				clearSelectbox(selectbox1);
			}
			//console.log(selectbox.id);

			var selectedIndex=selectbox.selectedIndex;
			var selectedOption=selectbox.options[selectedIndex];
			console.log(selectedOption.value);
			if(selectedOption.value=="book1"){
				//clearSelectbox(selectbox1);
				var newOption=document.createElement("option");
				newOption.appendChild(document.createTextNode("英语"));
				newOption.setAttribute("value","English");
				selectbox1.appendChild(newOption);
				var newOption=document.createElement("option");
				newOption.appendChild(document.createTextNode("数学"));
				newOption.setAttribute("value","math");
				selectbox1.appendChild(newOption);
				var newOption=document.createElement("option");
				newOption.appendChild(document.createTextNode("计算机"));
				newOption.setAttribute("value","computer");
				selectbox1.appendChild(newOption);
				var newOption=document.createElement("option");
				newOption.appendChild(document.createTextNode("金融"));
				newOption.setAttribute("value","financial");
				selectbox1.appendChild(newOption);
				var newOption=document.createElement("option");
				newOption.appendChild(document.createTextNode("小说"));
				newOption.setAttribute("value","novel");
				selectbox1.appendChild(newOption);
				var newOption=document.createElement("option");
				newOption.appendChild(document.createTextNode("其他"));
				newOption.setAttribute("value","others");
				selectbox1.appendChild(newOption);
			}
			if(selectedOption.value=="cloth1") {
				//clearSelectbox(selectbox1);
				var newOption=document.createElement("option");
				newOption.appendChild(document.createTextNode("毛衣"));
				newOption.setAttribute("value","cloth");
				selectbox1.appendChild(newOption);
				var newOption=document.createElement("option");
				newOption.appendChild(document.createTextNode("裤子"));
				newOption.setAttribute("value","cloth");
				selectbox1.appendChild(newOption);
				var newOption=document.createElement("option");
				newOption.appendChild(document.createTextNode("外套"));
				newOption.setAttribute("value","cloth");
				selectbox1.appendChild(newOption);
				var newOption=document.createElement("option");
				newOption.appendChild(document.createTextNode("鞋子"));
				newOption.setAttribute("value","cloth");
				selectbox1.appendChild(newOption);
				var newOption=document.createElement("option");
				newOption.appendChild(document.createTextNode("包包"));
				newOption.setAttribute("value","cloth");
				selectbox1.appendChild(newOption);
				var newOption=document.createElement("option");
				newOption.appendChild(document.createTextNode("帽子"));
				newOption.setAttribute("value","cloth");
				selectbox1.appendChild(newOption);
				var newOption=document.createElement("option");
				newOption.appendChild(document.createTextNode("其他"));
				newOption.setAttribute("value","others");
				selectbox1.appendChild(newOption);
			}

			if(selectedOption.value=="lifething1") {
				//clearSelectbox(selectbox1);
				var newOption=document.createElement("option");
				newOption.appendChild(document.createTextNode("小家电"));
				newOption.setAttribute("value","cloth");
				selectbox1.appendChild(newOption);
				var newOption=document.createElement("option");
				newOption.appendChild(document.createTextNode("冬天保暖小物"));
				newOption.setAttribute("value","cloth");
				selectbox1.appendChild(newOption);
				var newOption=document.createElement("option");
				newOption.appendChild(document.createTextNode("杯子"));
				newOption.setAttribute("value","cloth");
				selectbox1.appendChild(newOption);
				var newOption=document.createElement("option");
				newOption.appendChild(document.createTextNode("碗筷"));
				newOption.setAttribute("value","cloth");
				selectbox1.appendChild(newOption);
				var newOption=document.createElement("option");
				newOption.appendChild(document.createTextNode("其他"));
				newOption.setAttribute("value","cloth");
				selectbox1.appendChild(newOption);
			}

		}
	</script>
	<script src="http://libs.baidu.com/jquery/2.1.4/jquery.min.js"></script>
	<script src="./js/bootstrap.js"></script>

</body>
</html>
