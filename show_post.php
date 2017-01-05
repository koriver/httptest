<?php
	session_start();
	
	//取得標題
    $title = $_POST['title'];
	
	//取得分類
    $category = $_POST['category'];
	
	//取得內容
    $content = $_POST['content'];
	
	//取得發布狀況
    $publish = $_POST['publish'];
	
	//取得複選的關鍵字
    $keyword = $_POST['keyword'];
	
?>

<!DOCTYPE html>
<html lang="zh-TW">
	
	
	<head>
		
		<meta charset="utf-8" />
		<title>型月世界傳送的資料</title>
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
		
		 </h2>
	</div>
		<h2 align="center" class="style1">&nbsp;</h2>
		<h2 align="center" class="style1">---MASTER，以下型月世界傳過來的資料---</h2>
		<div align="center" class="style1">    </div>
		
		<div class="main">
			
			
		<h2>以下為型月世界傳過來的資料</h2>

		<p>標題：<?php echo $title;?></p>
		<p>分類：<?php echo $category;?></p>
		<p>內容：<?php echo $content;?></p>
		<p>發布狀況：<?php echo $publish;?></p>
		<p>關鍵字：<?php echo join(", ",$keyword);?></p>
		
		<img src='images/saber.gif'>";

			
				<input type="button" value="回到後台" onClick="location.href='backend.php'"></p>
		</div>
	</body>
</html>

