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
/**
 * Created by PhpStorm.
 * User: a282993047
 * Date: 2015/11/25
 * Time: 23:37
 */
$con = mysql_connect("localhost","root","");
mysql_query("set names utf8");
$type=$_GET['y'];
mysql_select_db("test", $con);
$sql = " select * from BOOK1 where dept_name = '{$type}'";
$result = mysql_query($sql);
//mysql_query("DELETE FROM BOOK1 WHERE bookname={$type}");
//mysql_query("DELETE FROM BOOK1 WHERE bookname='{$type}'");
echo"<table border='1'>";
while($row = mysql_fetch_array($result)){
    echo"<tr>";
    echo"<td>" . $row['bookname'] ."</td>";
    echo"<td>";
    echo"<image src='$row[photo]' id='image'>";
    echo"</td>";
    //echo"<td>"  .$row['clothname'] ."</td>";
    //echo"<td>"  .$row['price'] . "</td>";
    echo"</tr>";
}
echo"</table>";
mysql_close($con);
?>
</head>
</body>
</html>
