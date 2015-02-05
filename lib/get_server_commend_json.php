<?php
include "dbaccount.php";
if(isset($_GET["server"])){
try{
  //$db_conn->beginTransaction();
  if($_GET["server"]) $server = $_GET["server"];
  $sql = "SELECT s_message
          FROM `server`
          WHERE s_server = :server and s_message != ''";
  $stmt=$db_conn->prepare($sql);
  $stmt->bindParam(':server', $server);
  $stmt->execute();
  $row=array();
  while($rows=$stmt->fetch(PDO::FETCH_ASSOC)){
    $row[]=$rows;
  }
  //$db_conn->commit();
}catch(PDOException $e){
  //$db_conn->rollBack();
  echo "錯誤2，請聯絡管理員。";
  echo "A database problem has occurred: ". $e->GETMessage();
  exit;
  
}
$db_conn=null; //結束與資料庫連線
print json_encode($row);
}
?>