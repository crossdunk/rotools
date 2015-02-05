<?php
session_start(); 
 
  $userstring = trim($_POST['userstring']); 
  //驗證碼
  if(!$userstring==$_SESSION["helloweba_num"]){
    echo "不要亂走人家後門啦！";
    exit;  
  }

  $server = (isset($_POST['server']))?$_POST['server']:'';
  $message = (isset($_POST['message']))?$_POST['message']:'';

  if (!empty($_SERVER['HTTP_CLIENT_IP']))
  {
    $ip=$_SERVER['HTTP_CLIENT_IP'];
  }
  else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
  {
    $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
  }
  else
  {
    $ip=$_SERVER['REMOTE_ADDR'];
  }

  if($ip!=''&& $server!=''){
    include "dbaccount.php";
    try {
        //開始交易
        $db_conn->beginTransaction();
        //查詢IP是否重覆
        $sql = "SELECT s_ip FROM server WHERE s_ip = :ip";
        $stmt = $db_conn->prepare($sql);
        $stmt->bindParam(':ip', $ip);
        $stmt->execute(); 
        $num = $stmt->rowCount();
        if(!$num>0){
          $sql = "INSERT INTO `rotools`.`server` (`s_ip`,s_server ,`s_message`) 
                VALUES (:ip,:server,:message);";
          $stmt = $db_conn->prepare($sql);
          $stmt->execute(array(':ip' => $ip, ':server' => $server, ':message' => $message));
          echo "ok";
        }else{
          echo "ipnook";
        }
        //新增
       
        //交易完成
        $db_conn->commit();
        
    } catch (PDOException $e) {
        //交易失敗，回復初始狀態
        $db_conn->rollBack();
        echo "A database problem has occurred: ". $e->getMessage();
        //echo "error1";
        exit;
    }
    $db_conn = null; //結束與資料庫連線
  }else{
    echo '不要偷偷走後門啦~';
  }

?>