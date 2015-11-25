<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="./css/homepage.css" type="text/css">
    <title>华师大二手网站</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: a282993047
 * Date: 2015/11/22
 * Time: 15:42
 */
$con = mysql_connect("localhost","root","");
mysql_query("set names utf8");
mysql_select_db("test", $con);
$name = $_POST['query'];
$sql = "select * from BOOK1 where bookname LIKE '%{$name}%' ";
$sql1= "select * from CLOTH1 where clothname LIKE '%{$name}%' ";
$sql2= "select * from LIFETHING1 where lifethingname LIKE '%{$name}%' ";
$result = mysql_query($sql);
$result1 = mysql_query($sql1);
$result2 = mysql_query($sql2);
echo"<table border='1'>";
while($row = mysql_fetch_array($result)){
    echo"<tr>";
    echo"<td>" . $row['bookname'] ."</td>";
    //echo"<td>"  .$row['clothname'] ."</td>";
    //echo"<td>"  .$row['price'] . "</td>";
    echo"</tr>";
}
while($row1 = mysql_fetch_array($result1)) {
    echo "<tr>";
    echo "<td>" . $row1['clothname'] . "</td>";
    //echo"<td>"  .$row['clothname'] ."</td>";
    //echo"<td>"  .$row['price'] . "</td>";
    echo "</tr>";
}
while($row2 = mysql_fetch_array($result2)) {
    echo "<tr>";
    echo "<td>" . $row2['clothname'] . "</td>";
    //echo"<td>"  .$row['clothname'] ."</td>";
    //echo"<td>"  .$row['price'] . "</td>";
    echo "</tr>";
}
echo"</table>";
mysql_close($con);
?>
<script src="./js/bootstrap.js"></script>
<script src="http://libs.baidu.com/jquery/2.1.4/jquery.min.js"></script>
</body>
</html>