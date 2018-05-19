<?php
require('init.php');
$sql="select * from xz_user";
$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_all($result,1);
if($rows==null){
	echo "sql语句错误";
}else{
	$res=json_encode($rows);
	echo $res;
}





?>