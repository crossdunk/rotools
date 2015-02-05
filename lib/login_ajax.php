<?php
session_start();
$password = isset($_POST["password"]) ? $_POST["password"]:"";
if($password==''){
  echo "<meta charset='utf-8'>";
  echo "繞後門就賞你阿修羅霸凰拳!!";
  exit;
}else{
    if('westdog' == $password){
     $_SESSION["guild"] = 'ch';
     echo 'ok';
    }else if('19890321' == $password){
     $_SESSION["guild"] = 'ch';
     echo 'ok';
    }else{
      echo 'nook';
    }
}

?>
