<?php
$user=$_GET["aa"];
$link=mysqli_connect('sqld.duapp.com','bdbd18ec00934a9a9576fccd56fa9917','913925ab4be841c5aea7b509ccfd2e9c','ZwJnJMYeOOKXLibKPymL',4050);
$sql="select username from user";
$result=mysqli_query($link,$sql);
$arr=mysqli_fetch_all($result,MYSQL_ASSOC);
// 结果集转换成数组(关联/索引数组)
$len=count($arr);
for($i=0;$i<$len;$i++){
	if($user==$arr[$i]['username']){
		echo "false";
		return;
	};
};
echo "true";
?>