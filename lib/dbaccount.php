<?php
  try{
    $db_conn= new PDO('mysql:host=localhost;dbname=rotools;charset=utf8','root','0000');
    $db_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e){
    echo "error1";
    exit;
  }
  $db_conn->query("SET NAMES utf8");
?>