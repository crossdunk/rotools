<?php
	if($_SESSION["guild"]!='ch'){
    $_SESSION['url'] = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		echo "<script>alert('Sorry You are not member，Please login ！');";
		echo "location.href='/rotools/login/'";
		echo "</script>";
	}
?>
