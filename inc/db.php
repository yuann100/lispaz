<?php
$servername='localhost';
$username='root';
$password='';
$dbname='lispaz';

$pdo = new PDO("mysql:host=$servername; dbname=$dbname" , $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
