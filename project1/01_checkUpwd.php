<?php
$upwd=$_REQUEST['upwd'];
require('init.php');
$sql="select * from xz_user where upwd='$upwd'";
$result=mysqli_query($conn,$sql);
if($result==false){
	echo '请检查SQL语句';
}else{
	$row=mysqli_fetch_row($result);
	if($row==null||$row==''){
		echo '密码不能为空';
	}

}













?>