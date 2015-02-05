<?php
  $owner=strtoupper($_POST["owner"]);
  $ext=$_POST["ext"];
  include "lib/dbaccount.php";
  try {
    //$db_conn->beginTransaction();
    $sql = "UPDATE  `castle` SET  `cas_status` =  :owner WHERE `cas_ext` =:ext";
    $stmt = $db_conn->prepare($sql);
    $stmt->bindParam(':ext', $ext);
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
