<?php
/**
 * Created by PhpStorm.
 * User: a282993047
 * Date: 2015/10/5
 * Time: 15:05
 */
header("content-type:text/html;charset=utf-8");
$con = mysql_connect("localhost","root","");
mysql_query("set names utf8");
mysql_select_db("test", $con);
$name = $_POST['user_name'];
$password = $_POST['user_pswd'];
$sql = "select * from USER1 where name = '{$name}'";
$result = mysql_query($sql);
$num = mysql_num_rows($result);
if($num)
{
    $row=mysql_fetch_array($result);
    if($password == $row['password'])
    {
        setcookie("USER",$name,time()+3600*24);
        echo "登录成功";
        header("location:homepage.php");
    }
    else
    {
        setcookie("USER",'',time()-1);
        echo"密码错误";
        echo"<a href=login.html>重新登录 </a>";
    }
}
else
{
    echo"用户名不存在";
    echo"</br>";
    echo"<a href=login.html>重新登录</a>";

}