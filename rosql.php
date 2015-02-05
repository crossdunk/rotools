<?php
  $owner=trim(strtoupper($_POST["owner"]));
  $name=trim($_POST["name"]);
  include "lib/dbaccount.php";
  try {
    //$db_conn->beginTransaction();
    $sql = "UPDATE  `castle` SET  `cas_owner` =  :owner WHERE `cas_name` =:name";
    $stmt = $db_conn->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':owner', $owner);
    $stmt->execute(); 
    //$db_conn->commit();
  } catch (PDOException $e) {
    //$db_conn->rollBack();
    // echo "A database problem has occurred: ". $e->getMessage();
    echo "錯誤2，請聯絡管理員。";
    exit;
  }
  $db_conn = null; //結束與資料庫連線
?>
