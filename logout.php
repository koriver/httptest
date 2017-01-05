<?php
	//啟動session
	session_start();
	
	//清除session
	session_unset();
	
	

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
		
		}
	</style>
	<body>
		<div class="result">
			
		<?php
			echo "<h2>您已成功登出，ＭＡＳＴＥＲ<p>";
			echo "<p><img src='images/rin.gif'></h2>";
			
			//等待3秒，轉至另一個使用者登入頁面（３秒看動圖（誤
			header("Refresh: 3; url=member.php");
		
		?>
		</div>
	</body>
</html>
	