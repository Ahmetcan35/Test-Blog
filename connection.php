<?php

$vt_server="localhost";
$vt_user="root";
$vt_password="";
$vt_name="blog";


$connect=mysqli_connect($vt_server,$vt_user,$vt_password,$vt_name);

if(!$connect)
{
   die("Veritabanı bağlantı işlemi başarısız".mysqli_connect_error()); 
}

?>