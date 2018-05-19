<?php
$uname=$_REQUEST['uname'];
$upwd=$_REQUEST['upwd'];
$cpwd=$_REQUEST['cpwd'];
$email=$_REQUEST['email'];
$tel=$_REQUEST['tel'];
$un=$_REQUEST['user_name'];
$sex=$_REQUEST['gender'];
#require('init.php');
$conn=mysqli_connect('127.0.0.1','root','','xz',3306);
mysqli_query($conn,'SET NAMES UTF8');
$sql="insert into xz_user(uname,upwd,email,phone,user_name,gender) values('$uname','$upwd','$email','$tel','$un','$sex')";
$result=mysqli_query($conn,$sql);
if($result==false){
	echo "注册失败";
}else{
	echo "注册成功";
}













?>