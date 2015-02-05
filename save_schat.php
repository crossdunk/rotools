<?php
  $s_content=$_POST["s_content"];
  $s_from=$_POST["s_from"];

  $num = mb_strlen( $s_from, "utf-8");

  $s_from = substr($s_from,12,-1);
if($s_content!='' && $s_from!=''){


  include "lib/dbaccount.php";
  try {
    //$db_conn->beginTransaction();
    $sql = "SELECT s_num from schat where s_content = :s_content and s_from = :s_from and s_time = now()";
    $stmt = $db_conn->prepare($sql);
    $stmt->bindParam(':s_from', $s_from);
    $stmt->bindParam(':s_content', $s_content);
    $stmt->execute();
    $count = $stmt->rowCount();  
    if($count==0){
    $sql = "INSERT INTO `schat` (`s_content`,s_from) 
                VALUES (:s_content,:s_from);";
    $stmt = $db_conn->prepare($sql);
    $stmt->execute(array(':s_content' => $s_content, ':s_from' => $s_from));
    }
    
    //$db_conn->commit();
  } catch (PDOException $e) {
    //$db_conn->rollBack();
     echo "A database problem has occurred: ". $e->getMessage();
    echo "錯誤2，請聯絡管理員。";
    exit;
  }
  $db_conn = null; //結束與資料庫連線
}
echo $s_content;
echo $s_from;
?>
