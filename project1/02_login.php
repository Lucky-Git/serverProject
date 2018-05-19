<?php
$uname=$_REQUEST['uname'];
$upwd=$_REQUEST['upwd'];
require('init.php');
$sql="select * from xz_user where uname='$uname' and upwd='$upwd'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($result);
if($row==null){
	echo "登陆不成功";
}else{
	echo "登录成功";
}




?>