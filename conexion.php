<?php
$host='localhost';
$user='root';
$password='';
$db='thislogin';

$conection=@mysqli_connect($host,$user,$password,$db);
if(!$conection){
    echo('error');
}else {
    echo ("positivo");
}
?>