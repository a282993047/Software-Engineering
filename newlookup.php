<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="./css/lookup1.css" type="text/css">
    <title>华师大二手网站</title>
</head>
<body>
<?php
/*function makeSql($key1='',$key2='',$key3='',$key4=''){//多关键字查询
    $sql    =    'where name ';
    if ($key1!=''){
        $title1    =    "like '%$key1%'";
        $sql.=$title1;
    }
    if ($key2!=''){
        $title2    =    "like '%$key2%'";
        $sql.='or name '.$title2;
    }
    if ($key3!=''){
        $title3    =    "like '%$key3%'";
        $sql.='or name '.$title3;
    }
    if ($key4!=''){
        $title4    =    "like '%$key4%'";
        $sql.='or name '.$title4;
    }
    if ($sql=='where name '){
        return '';
    }
    return $sql;
}*/
function makeSql($names){//多关键字查询
    $sql = 'where name ';
    if(!$names || empty($names)) return '';
    for($i=0;$i<count($names);$i++) {
        if($i==0) $sql.= "like '%$names[$i]%'";
        else $sql.= "or name like '%$names[$i]%'";
    }
    return $sql;
}
$con = mysql_connect("localhost","root","");
mysql_query("set names utf8");
mysql_select_db("test", $con);
$name = $_POST['query'];
$name1=split(' ',$name);
//if(!isset($name1[1])) $name1[1]=' ';
//if(!isset($name1[2])) $name1[2]=' ';
//if(!isset($name1[3])) $name1[3]=' ';
//var_dump($name1);//输出$name1
//$sql = "select * from BOOK1 where bookname LIKE '%{$name}%' ";
//var_dump(makeSql($name1));
//echo makeSql($name1[0],$name1[1],$name1[2],$name1[3]);
//$name2=makeSql($name1[0],$name1[1],$name1[2],$name1[3]);
$name2 = makeSql($name1);
$sql = "select * from BOOK1 $name2 ";
$sql1= "select * from CLOTH1 $name2 ";
$sql2= "select * from LIFETHING1 $name2 ";
$result = mysql_query($sql);
$result1 = mysql_query($sql1);
$result2 = mysql_query($sql2);
?>
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
                        <a href="homepage.php" target="_blank" class="ad-title"><?php echo $row['name'] ?></a>
                        <span class="highlight">￥<?php echo $row['price'] ?></span>
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
                        <a href="homepage.php" target="_blank" class="ad-title"><?php echo $row['name'] ?></a>
                        <span class="highlight">￥<?php echo $row['price'] ?></span>
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
                    <a href="homepage.php" target="_blank" class="ad-title"><?php echo $row['name'] ?></a>
                    <span class="highlight">￥<?php echo $row['price'] ?></span>
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