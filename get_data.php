<!DOCTYPE html>
<html lang="zh-TW">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>感謝MASTER您的建議，我們會參考放到下次的聖杯之戰</title>
		<meta name="description" content="welcome welcome !!">
		<meta name="author" content="koriver">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		
		<link rel="shortcut icon" href="images/123.ico">
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/layout.css">
		
		<style>
			div.main {
		
  		font-size:34px;
		width:1000px;
		height:100px;
		text-align:center;
		line-height:100px
		
		}
			
		</style>
	
		<!-- 如果為ie瀏覽器，且版本小於9，也就是ie6, ie7, ie8 的時候，載入 js/html5shiv.min.js-->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.min.js"></script>
		<![endif]-->
	</head>
<body id="top">
<div class="wrapper col1">
  <div id="header">
    <div id="topnav">
      <ul>
        <li class="last"><a href="index.php?page=7">登入後台</a><span>Backend</span></li>
        <li><a href='index.php?page=6'>寫信建議</a><span>MESSAGE</span></li>
        <li><a href='index.php?page=5'>相關訊息</a><span>Test Text Here</span></li>
        <li><a href="index.php?page=2">型月系列</a><span>Test Text Here</span>
          <ul>
            <li><a href="index.php?page=3#">人物介紹</a></li>
            <li><a href='index.php?page=4'>相關影片</a></li>
            <li><a href="#">Link 3</a></li>
          </ul>
        </li>
        <li class="active"><a href="index.php">回到首頁</a><span>Test Text Here</span></li>
      </ul>
    </div>
    <div class="fl_left">
      <h1><a href="index.php" class="style1">TYPE-MOON</a></h1>
      <p><b>歡迎來到型月世界</b></p>
    </div>
    <br class="clear" />
  </div>
</div>
<div class='main'>
	<?php 
	
	if(isset($_POST['name']) && $_POST['subject'] && $_POST['contact'])
	{
		echo "訊息已發送，謝謝您，MASTER。我們會參考放到下次的聖杯之戰。";
	}
	else
	{
		echo "有項目空白，請重新輸入，MASTER。";
		
		}
	
	?>
	</div>
</body>
</html>