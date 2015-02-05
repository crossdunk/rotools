<?php
  $item=$_POST["item"];
  $from1=$_POST["from"];
  $who=$_POST["who"];
  include "lib/dbaccount.php";
  try {
    //$db_conn->beginTransaction();
    $sql = "INSERT INTO `bet` (`b_item`,`b_from`,`b_who`) 
            VALUES (:item,:from1,:who);";
    $stmt = $db_conn->prepare($sql);
    $stmt->execute(array(':item' => $item, ':from1' => $from1, ':who' => $who));
    //$db_conn->commit();
  } catch (PDOException $e) {
    //$db_conn->rollBack();
     echo "A database problem has occurred: ". $e->getMessage();
    echo "錯誤2，請聯絡管理員。";
    exit;
  }
  $db_conn = null; //結束與資料庫連線
?>
