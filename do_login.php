<?php

	session_start();
	//假設的有效會員帳號
	$type_user = "MASTER";
	$type_password = 'MASTER1234';

	//取得傳過來的帳號密碼
    $username = $_POST['username'];
	$password = $_POST['password'];
	
	
?>
<!DOCTYPE html>
<html lang="zh-TW">
		
	<link rel="stylesheet" href="css/style.css">
	<head>
		<meta charset="utf-8" />
		<title>MASTER登入</title>
	</head>
	<style>
		
		div.result {
		text-align:center;
		font: 36pt "微軟正黑體", "Microsoft JhengHei", 'Lucida Grande', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif;
		background:#333 url(../images/saber.jpg) no-repeat;
		color:#fff;
		 
		
		}
	</style>
	<body>
		<div class="result">
			
		<?php
		if(isset($_POST['username']) && isset($_POST['password']))
		{
		//直接對傳過來的帳號密碼做比對
		
		if($_POST['username'] == $type_user && $_POST['password'] == $type_password)
		{
			//如果密碼一樣，以及帳號一樣，那就代表正確，所以顯示登入成功
			$_SESSION['is_login'] = TRUE;
			echo "<h2>ＭＡＳＴＥＲ，登入成功，歡迎回來。</h2>";
			echo "<img src='images/ok.gif'>";
			
			header("Refresh: 3; url=backend.php");
		}
		else 
		{
			//登入失敗
			$_SESSION['is_login'] = FALSE;
			
			//在session存一個 變數
			$_SESSION['error'] = 'MASTER登入失敗，請確認您的帳號密碼';
			
			echo "<h2>登入失敗，ＭＡＳＴＥＲ，請重新登入";
			echo "<img src='images/rin.gif'></h2>";
			
			//等待三秒，轉至另一個使用者登入頁面（３秒看動圖（誤
			header("Refresh: 3; url=member.php");
			}
		}
	else
	{
		//使用php header 來轉址 返回登入頁
		header('Location: member.php');
		}
		?>
		</div>
	</body>
</html>