<?php
$host = "localhost";
$user = "root";
$pass = "n00bz1995";
$database = "es_medicine";
$connect_db = mysqli_connect($host, $user, $pass, $database) or die("ไม่สามารถเชื่อมต่อฐานข้อมูลได้");
mysqli_set_charset($connect_db, 'utf8');
?>