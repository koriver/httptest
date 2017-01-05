<?php
	session_start();
	
?>
<!DOCTYPE html>
<html lang="zh-TW">
	
	
	<head>
		
		<meta charset="utf-8" />
		<title>型月世界後台管理</title>
		<link rel="shortcut icon" href="images/123.png">
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/backend.css">
	    <style type="text/css">
<!--
.style1 {
	color: #990000;
	font-size: 36px;
	font-family: "華康行楷體W5";
}
-->
        </style>
</head>
	<body>
		
		<div align="center">
		  <h2>
		    <?php 
			//如果有 $_SESSION['is_login'] 這變數，以及 $_SESSION['is_login'] 為 true，就是已經登入了
			if(isset($_SESSION['is_login']) && $_SESSION['is_login']):
		?>
	            </h2>
	</div>
		<h2 align="center" class="style1">&nbsp;</h2>
		<h2 align="center" class="style1">---MASTER，您現在正在操作魔術迴路後台---</h2>
		<div align="center" class="style1">    </div>
		<h2 align="center" class="style1">請問您要新增些甚麼到型月世界呢？</h2>
		<div class="main">
			
			
			
			<form method="POST" action="show_post.php">
			<p>標題：<input type="text" name="title"></p>
			<p>分類：</p>
				<select name="category">
					<option value="最新消息">最新消息</option>
					<option value="遊戲訊息">遊戲訊息</option>
					<option value="遊戲訊息">動漫訊息</option>
					<option value="遊戲訊息">海外</option>
					
				</select>
			</p>
			<p>
				內文：
				<textarea name="content"></textarea></p>
			<p>
				<label><input type="radio" name="publish" value="1">傳送</label>
				<label><input type="radio" name="publish" value="0">不傳送</label>
			</p>
			<p>
				<label><input type="checkbox" name="keyword[]" value="Saber">Saber</label>
				<label><input type="checkbox" name="keyword[]" value="Archer">Archer</label>
				<label><input type="checkbox" name="keyword[]" value="Lancer">Lancer</label>
				<label><input type="checkbox" name="keyword[]" value="Rider">Rider</label>
				<label><input type="checkbox" name="keyword[]" value="Assassin">Assassin</label>
				<label><input type="checkbox" name="keyword[]" value="Berserker">Berserker</label>
			</p>
			<button type="submit">送出</button>
		</form>
			<p>			</p>
			<br />
			<br />
					<p>
				<input type="button" value="登出魔術迴路" onClick="location.href='logout.php'">			</p>
		</div>
		<?php else:?>
			<?php 
			//沒有登入
			//使用php header 來轉址
			header('Location: index.php');
			?>
		<?php endif;?>
	</body>
</html>