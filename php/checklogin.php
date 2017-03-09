<?php
    // 前台获取数据
    $user=$_GET["name"];
    $pass=$_GET["password"];
    // 连接数据库

    define('HOST','sqld.duapp.com');
    define('USER','bdbd18ec00934a9a9576fccd56fa9917');
    define('PASSWORD','913925ab4be841c5aea7b509ccfd2e9c');
    define('DBNAME','ZwJnJMYeOOKXLibKPymL');
    $con = new mysqli(HOST,USER,PASSWORD,DBNAME,4050);
    if($con->connect_error){
        exit('连接失败'.$con->connect_error);
    }
    $con->set_charset('utf8');
    $link=mysqli_connect('localhost','root','','wowapp',3306);
    // 查询语句
    $sql = "select * from user where username='{$user}'";
    $result=mysqli_query($link,$sql);
    $arr=mysqli_fetch_all($result,MYSQL_ASSOC);
    $len=count($arr);
    if($len==0){
        echo "3";
        exit();
    }
    for($i=0;$i<$len;$i++){
        if($pass==$arr[$i]['password']){
            echo "1";
            exit();
        };
    };
    echo "2";
?>