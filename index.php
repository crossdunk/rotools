<?php session_start(); ob_start(); ?>
<!doctype html>
<html lang="zh-TW">
    <head>
        <meta charset="utf-8">
        <title>Ro Tools</title>
        <meta name="keywords" content="RO,仙境傳說,175配點,TRO,TWRO,175配點,ASPD,攻速計算,傷害計算,素值,遊戲配點">
        <meta name="description" content="這是一個RO台灣版素值模擬計算的網站，提供175等配點模擬及計算。">
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="Content-Language" content="zh-tw">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">     
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="/rotools/css/custom.css">
        <!-- Latest compiled and minified JavaScript -->      
        <link rel="shortcut icon" href="favicon.ico">
        <!--[if lt IE 9]>
            <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
        <![endif]-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <style>
        ::selection {
            text-shadow: 1px 2px 3px rgba(0,0,0,0.4);
        }
        ::-moz-selection {
            text-shadow: 1px 2px 3px rgba(0,0,0,0.4);
        }
        </style>
    </head>
    <body>
    <?php require_once "header.php"; ?>
    <div class="container-fluid">
        
      <?php
        $url = ($_GET['pages']!='')?$_GET["pages"] . ".php":'home.php';
        if ($url!='') {
                        if($_GET["pages"]=='logout'){
                            $_SESSION["guild"] = '';
                            $_SESSION["url"] = '';
                            header('Location:/rotools/home/');
                        }else{
                       
                        if (is_file($url)) {
                            require_once 'menu.php';
                            require_once $url;
                        } else {
                            require_once 'nopage.php';
                        }
                        }
                    }
      ?>
      <?php require_once "footer.php"; ?>
    </div>
    </body>
</html>
