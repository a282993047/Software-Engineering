<?php
/**
 * Created by PhpStorm.
 * User: a282993047
 * Date: 2015/12/5
 * Time: 19:59
 */
header('Content-type: text/html; charset=utf-8');
$table=$_POST['table'];
$type=$_POST['selectbox'];
$name=$_POST['title'];
$price=$_POST['price'];
$phone=$_POST['contact'];
$message=$_POST['content'];
$name_len=strlen($name);
$message_len=strlen($message);
$phone_len=strlen($phone);
$name1=$_COOKIE['USER'];
if($name_len==0){
    echo"标题不能为空！";
    echo "<a href='fabu.php'>返回</a>";

}else if($phone_len==0){
    echo "电话不能为空！";
    echo "<a href='fabu.php'>返回</a>";
}
else{
    $con = mysql_connect("localhost", "root", "");
    mysql_query("set names utf8");

    mysql_select_db("test", $con);
    if(isset($_POST["submit"])){
        $filename = './image/'.time().substr($_FILES['photo']['name'], strrpos($_FILES['photo']['name'],'.'));
        if(move_uploaded_file($_FILES['photo']['tmp_name'], $filename)){
            $sql="INSERT INTO $table (name,type,price,phone,message,name1,photo) VALUES ('$name','$type','$price',
'$phone','$message','$name1','$filename')";
            $result=mysql_query($sql,$con);
            $row = mysql_affected_rows($con);
            $id=mysql_insert_id();
            $sql1="INSERT INTO SOLD (name,table1,id,time) VALUES ('$name1','$table',$id,now())";
            $result1=mysql_query($sql1,$con);
            $row1 = mysql_affected_rows($con);
            echo $row1;
            if($row>0)

            {

                echo "发布成功";
                echo"<a href=homepage.php>返回主页 </a>";

            }else{

                echo "发布失败";
                echo"<a href=fabu.php>返回</a>";
            }
        }

    }
}