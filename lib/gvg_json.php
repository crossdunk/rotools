<?php
include "dbaccount.php";
try{
  //$db_conn->beginTransaction();
  $sql = "SELECT * FROM  `castle`";
  $stmt = $db_conn->prepare($sql);
  $stmt->execute();
  $row=array();
  while($rows=$stmt->fetch(PDO::FETCH_ASSOC)){
    $row[]=$rows;
  }

  $sql = "SELECT cas_time,cas_ext,cas_owner
          FROM castle
          order by cas_time desc
          limit 3 ";
  $stmt = $db_conn->prepare($sql);
  $stmt->execute();
  while($rows=$stmt->fetch(PDO::FETCH_ASSOC)){
    $row[] = $rows;
  }
  
  //$db_conn->commit();
}catch(PDOException $e){
  //$db_conn->rollBack();
  echo "錯誤2，請聯絡管理員。";
  exit;
  // echo "A database problem has occurred: ". $e->GETMessage();
}
$db_conn=null; //結束與資料庫連線
print json_encode($row);
?>