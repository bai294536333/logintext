<?php

$user=$_GET["user"];
$pass=$_GET["pass"];

$link=mysqli_connect('sqld.duapp.com','bdbd18ec00934a9a9576fccd56fa9917','913925ab4be841c5aea7b509ccfd2e9c','ZwJnJMYeOOKXLibKPymL',4050);
$sql="insert into user (`username`,`password`) value ('{$user}','{$pass}') ";
$result=mysqli_query($link,$sql);

session_start();
$_SESSION['name']=$user;

if(mysqli_affected_rows($link)==1){
	echo '1';
	return;
}else{
	echo '2';
	return;
}
?>