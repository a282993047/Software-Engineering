<?php
/**
 * Created by PhpStorm.
 * User: a282993047
 * Date: 2015/10/5
 * Time: 15:19
 */
header('Content-type: text/html; charset=utf-8');
$name=$_POST['user_name'];

$password=$_POST['user_pswd'];

$n=strlen($name);

$p=strlen($password);

if($n == 0){

    echo "请输入用户名";

}elseif(!($n >= 5 && $n <= 16)){

    echo "用户名为5-16位";

}elseif($p == 0){

    echo "请输入密码";

}elseif(!($p >= 5 && $p <= 16)){

    echo "密码为5到16位";

}
else {
    $con = mysql_connect("localhost", "root", "");
    mysql_query("set names utf8");

    mysql_select_db("test", $con);

    mysql_query("set names utf8");
    $sql1="select * from USER1 where name = '{$name}'";
    $result1 = mysql_query($sql1);
    $num = mysql_num_rows($result1);
    if($num){
        echo"<script> alert('用户名已存在')</script>";
        echo"\n";
        echo"<a href=register.html>重新注册</a>";
    }
    else {
        $sql = "INSERT INTO USER1 (name,password) VALUES ('$name','$password')";

        mysql_query($sql, $con);

        $row = mysql_affected_rows($con);

        if ($row > 0) {

            echo "注册成功";
            echo "<a href=login.html>返回登录页面 </a>";

        } else {

            echo "注册失败";
            echo "<a href=register.html>重新注册</a>";
        }
    }
}
