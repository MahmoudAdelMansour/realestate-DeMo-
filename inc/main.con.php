<?php
$dsn    = 'mysql:host=localhost;dbname=realestate';
$user   = 'root';
$pass   = '';
$option = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
  );
  try {
    $conp = new PDO($dsn,$user,$pass,$option);
    $conp->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  }
  catch(PDOException $a){
    echo "failed to connect". $a->getMessage();
    die();
  }
