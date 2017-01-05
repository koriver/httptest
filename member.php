<?php 
	session_start(); //啟動 session
?>
<!DOCTYPE html>
<html lang="zh-TW">
	
	<link rel="shortcut icon" href="images/123.png">
	<link rel="stylesheet" href="css/style.css">
	<head>
		<meta charset="utf-8" />
		<title>MASTER登入頁面</title>
	</head>
	
	<style>
		form {
			border:#aaa solid 1px;
			margin:300px auto;
			padding:30px;
			width:300px;
			text-align:center;
			font: 30pt "微軟正黑體", "Microsoft JhengHei", 'Lucida Grande', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif;
			background:rgba(0%,20%,50%,0.6); 
			color:#fff;
		}
		p.danger{
			color:red;
			text-align:center;
		}
	</style>
	<body>
		
		<?php
			//使用 isset()方法，判別有沒有此變數可以使用，以及為已經登入
			if(isset($_SESSION['is_login']) && $_SESSION['is_login'] == TRUE):
		
			//使用php header 來轉址到後台
			header('Location: backend.php');
		?>
		<?php else:?>
		<form method="post" action="check_login.php">
			<?php
				//有訊息
				if(isset($_SESSION['msg']))
				{
					//就印出
					echo "<p class='danger'>{$_SESSION['msg']}</p>";
				}
			?>
			<div>
			帳號：<input type="text" name="username">
			</div>
			<div>
			密碼：<input type="password" name="password">
			</div>
			<button type="submit">登入</button>
			<button type="reset">清除</button>
			<input type="button" value="回到型月世界首頁" onclick="location.href='index.php'">
		</form>
		<?php endif;?>
	</body>
</html>