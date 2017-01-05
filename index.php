<?php 
	//啟動session
	session_start();
	
	//啟用GET取得頁面
	$page = '1';
	$title =" TYPE-MOON首頁 ";
	if(isset($_GET['page']))
	{
		$page = $_GET['page'];
	
		switch ($page) {
			case '1':
				$title ='TYPE-MOON首頁 ';
				break;
			case '2':
				$title ='TYPE-MOON故事系列';
				break;	
			case '3':
				$title ='TYPE-MOON圖片';	
				break;	
			case '4':
				$title ='TYPE-MOON相關影片介紹';
				break;
			case '5':
				$title ='TYPE-MOON相關訊息';
				break;
			case '6':
				$title ='寄信給我';
				break;
			case '7':
				$title ='登入後台';
				break;
			case '8':
				$title ='其他系列';
				break;
		default:
			$title ='MASTER，這個頁面找不到。';
				break;
	}
}
?>

<!DOCTYPE html>
<html lang="zh-TW">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title> <?php echo $title; ?></title>
		<meta name="description" content="welcome welcome !!">
		<meta name="author" content="koriver">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		
		<link rel="shortcut icon" href="images/123.png">
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/layout.css">
		<link rel="stylesheet" href="css/navi.css">
		
			<!-- 如果為ie瀏覽器，且版本小於9，也就是ie6, ie7, ie8 的時候，載入 js/html5shiv.min.js-->		<!--[if lt IE 9]>
		<script src="js/html5shiv.min.js"></script>
		<![endif]-->
       
<style type="text/css">
<!--
.style1 {font-size: 36px}
.style10 {font-size: 16px; }
-->
</style>

</head>
<body id="top">
<div class="wrapper col1">
  <div id="header">
    <div id="topnav">
      <ul>
        <li class="last"><a href="index.php?page=7">登入後台</a><span>Backend</span></li>
        <li><a href='index.php?page=6'>寫信建議</a><span>MESSAGE</span></li>
        <li><a href='index.php?page=5'>相關訊息</a><span>SPECIAL</span></li>
        <li><a href="index.php?page=2">型月系列</a><span>CONTENTS</span>
          <ul>
            <li><a href="index.php?page=3#">相關圖片</a></li>
            <li><a href='index.php?page=4'>相關影片</a></li>
            <li><a href="index.php?page=8">其他系列</a></li>
          </ul>
        </li>
        <li class="active"><a href="index.php">回到首頁</a><span>COME BACK</span></li>
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
	<?php if($page == "1"):?>
	<h1 class="news">
	<span class="style1">主人—歡迎來到型月世界</span>
	</h>
		
		<ul>
   		  <p><img src='images/rin.jpg' width="900" height="500"></p>
   		  <p><b>TYPE-MOON最新消息</b></p>
   		  <table width="500" border="0">
            <tr>
              <td><span class="style10">2015/4/18	INFO</span></td>
              <td><div align="left"><span class="style10">「Fate/Grand Orde」手機遊戲網頁開通!</span></div></td>
            </tr>
            <tr>
              <td><span class="style10">2015/3/26	INFO</span></td>
              <td><div align="left"><span class="style10">Fate/Prototype 蒼銀的碎片 小說 3巻」本日發售。</span></div></td>
            </tr>
            <tr>
              <td><span class="style10">2015/3/25	INFO</span></td>
              <td><div align="left"><span class="style10">「Fate/stay night [Unlimited Blade Works] Blu-ray Disc Box Ⅰ發售囉!」</span></div></td>
            </tr>
            <tr>
              <td><span class="style10">2015/3/25	INFO</span></td>
              <td><div align="left"><span class="style10"><a href='index.php?page=5'>「幻想嘉年華 Complete Edition」BOX發售決定!</span></div></td>
            </tr>
            <tr>
              <td><span class="style10">2015/1/28	INFO</span></td>
              <td><div align="left"><span class="style10">坂本真綾「Fate/Grand Order」主題歌「色彩」本日發售！</span></div></td>
            </tr>
          </table>
   		  <p align="left">&nbsp;</p>
   		  <p>&nbsp;</p>
</ul>
</div>
<?php endif;?>
	
	<?php if($page == "2"):?>
	<div class='story'>
		
	<p><h1>型月</h1>（英語：TYPE-MOON；日語：タイプムーン），是日本遊戲發行商Notes有限公司在發行商品時所使用的品牌名稱。Notes的負責人為畫家武內崇，</p>
	而社名則來自作家奈須蘑菇的作品《Notes.》。在一般認知上，其實「Notes＝TYPE-MOON」。</p>
	<p><img src='images/story.png' width="900" height="500"></p>
	
	<p>TYPE-MOON原本是一個同人社團，由武內崇及奈須蘑菇兩人主宰。他們第一個比較有知名度的作品是《空之境界》，
	是1998年10月至1999年5月期間，奈須在他和武內崇的個人網站「竹箒」上的定期連載。
	而奈須個人的小說作品還有收錄於設定本《青本》的短篇小說《NOTES.》，
	現於日本新文學雜誌《浮士德》上連載的DDD系列。未發表作品有《冰之花》等。<p>
	但說到真正的成名之作，卻是在2000年的冬Comic Market上發行的《月姬》。月姬憑著TYPE-MOON獨有的世界觀以及對於生死的感觸而吸引了無數的玩家。<p>
	而之後不但被動畫化成《真月譚月姬》，TYPE-MOON更以同人身份出品了《月姬PLUS》、《歌月十夜》、《月箱》。而他們還與著名同人格鬥遊戲製作社團「渡邊製作所」一起製作了同人格鬥遊戲《MELTY BLOOD》，<p>
	<p>
	<p>2003年，武內與奈須設立了Notes有限公司。同年4月，以同人名義發行了收錄過去到現在所發表作品（除了《Melty Blood》）的《月箱》之後，解散了同人社團TYPE-MOON，將其定位為Notes有限公司之下的一個商業品牌。
	<p>2004年1月30日，有限會社Notes發行了他們在商業公司化後的第一個遊戲《Fate/stay night》。而《Fate/stay night》也在2006年1月被動畫化，<p>其女主角之一的Saber人氣極高（在TYPE-MOON兩次舉辦的人氣投票上，都是Saber第一、遠坂凜第二、Archer第三）。
	而在2005年秋末，發售《Fate/stay night》的FAN DISC《Fate/hollow ataraxia》。
	<p>2006年12月29日由TYPE-MOON與Nitro+合作發售的小說。為《Fate/stay night》的前傳。
	
	<p></p>TYPE-MOON於2010年12月21日公布Fate/Zero動畫化的消息，製作公司為ufotable，<p>電視版動畫於2011年10月1日開始播出。動畫分成前半部及後半部；前半部共13集，播映時間為2011年10月－2011年12月；後半部共12集，播映時間為2012年04月－2012年06月；共25集。
	2012年4月12日，《魔法使之夜》在Windows平台登陸，本作是與《月姬》、《Fate/stay night》和《空之境界》相關聯的奈須世界的原型。其片尾曲由supercell創作，名為《星が瞬くこんな夜に》。

	<p>他們的成功在日本其實也有著相當的影響力，這也讓更多的人致力於同人創作。<p></p>
	
	</div>
	<?php endif;?>
	
	<?php if($page == "3"):?>
	<div class='charapic'>
		 <div id="gallery">
    <ul>
      <li class="placeholder" style="background-image:url('/images/4.gif');">Image Holder</li>
      <li><a class="swap" href="#"><img src="images/gallery/1_s.gif" alt="" /><span><img src="images/gallery/1.gif" width="950" height="370" alt="" /></span></a></li>
      <li><a class="swap" href="#"><img src="images/gallery/2_s.gif" alt="" /><span><img src="images/gallery/2.gif" width="950" height="370" alt="" /></span></a></li>
      <li><a class="swap" href="#"><img src="images/gallery/3_s.gif" alt="" /><span><img src="images/gallery/3.gif" width="950" height="370" alt="" /></span></a></li>
      <li><a class="swap" href="#"><img src="images/gallery/4_s.gif" alt="" /><span><img src="images/gallery/4.gif" width="950" height="370" alt="" /></span></a></li>
      <li class="last"><a class="swap" href="#"><img src="images/gallery/5_s.gif" alt="" /><span><img src="images/gallery/5.gif" width="950" height="370" alt="" /></span></a></li>
      </ul>
  	</div>

	</div>
	<?php endif;?>
	
	
	<?php if($page == "4"):?>
	<div class='video'>
		<li>FATE/ZERO OP1</li>
		<iframe marginwidth='0' marginheight='0' src='http://vlog.xuite.net/embed/M245eUVZLTYxNzIwMzMuZmx2?ar=0&as=0' width='640' height='360' scrolling='no' frameborder='0'></iframe>
	</div>
	<p>Fate/stay night [Unlimited Blade Works] ／ 2ndSeason PV第１弾</p>
	<div class='video'>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/1X8ZBVgairo" frameborder="0" allowfullscreen></iframe>
	</div>
	
	<p>Tomoya 製作的神MAD  Bring Me To Life 【Fate/Zero】</p>
	<div class='video'>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/JdXgWSNDkhY" frameborder="0" allowfullscreen></iframe>
	</div>
	
	
	
	<div class='video'>
		
	<p></p>Fate/Zero Arch(英雄王)VS Berserker(蘭斯洛特)
	<iframe width="640" height="360" src="https://www.youtube.com/embed/nwClSBuTXrQ" frameborder="0" allowfullscreen></iframe>
	
	</div>
	<?php endif;?>
	
	<?php if($page == "5"):?>
	<div class='something'>
		<p><h2>熱鬧非凡的Type-Moon祭典，OVA動畫《幻想嘉年華》將在今年4月份推出BD-BOX！</h1></p>
		2015/02/06
		
		<p>熱鬧非凡的Type-Moon祭典，OVA動畫《幻想嘉年華》將在今年4月份推出BD-BOX！</p>
		以《月姬》、《Fate/stay night》等作品聞名的遊戲公司「Type-Moon」，曾在2011年間以漫畫家「武梨繪里」
		筆下二創作品《TAKE MOON》為基礎，推出全12話+α的十周年紀念OVA動畫《幻想嘉年華（Carnival Phantasm）》，成功在粉絲間引發一陣話題。</p>
		
	 <p><img src='images/phantasm.jpg' width="900" height="500"></p>
	 
	<p><b>而在系列完結3年多之後，官方即將把當初推出的3卷Blu-ray及收錄在《TAKE MOON 特別版》中的EX Season結集，在今年
		4月30日推出名為《幻想嘉年華 Complete Edition》的Blu-ray- BOX，售價為8,000日圓（不含稅），目前已經在各大通路開放預約。</b></p>
	
	 <b>幻想嘉年華 Carnival Phantasm OP</b>
		<iframe width="860" height="620" src="https://www.youtube.com/embed/uvbaM-URygs" frameborder="0" allowfullscreen></iframe>
	</div>
	<p><br /><P>
	<b>角色介紹PV</b>
	<div class='video'>
		<iframe width="860" height="620" src="https://www.youtube.com/embed/rIjRh9uwtD0" frameborder="0" allowfullscreen></iframe>
	
			<p>另外，這次的BD-BOX除了收錄當初所有正篇內容之外，以女性御主「沙條綾香」為主角的短篇動畫《Fate/Prototype》、以2頭身Q版「琥珀」為主角的《琥珀ACE》、
			以衍生小遊戲合集為主題的《音声付 風雲イリヤ城》等眾多附錄動畫也都收錄其中，絕對是當初沒有購買的Type-Moon粉絲們，一次收齊的絕佳機會喔！</p>
			<p>【商品資訊】</p>
			<p>名        稱：カーニバル・ファンタズム Complete Edition</p>
			<p>發售日期：2015年4月30日</p>
			<p>售        價：8,000日圓（不含稅）</p>
			<p>收錄內容：1st、2nd、3rd、EX Season、Special Season、Fate/Prototype等等</p>
			<p>特典影像：・『音声付 風雲イリヤ城』</p>
			<p>・『第5話コメンタリー「バーサーカーのせいたい」』</p>
			<p>・『オープニング（ノンテロップver.）』</p>
			<p>・『エンディング（ノンテロップver.）』</p>
			<p>・『PV集』</p>
			<p>・『TVCM集』</p>
			<p>《幻想嘉年華》官方網站：<a href="http://www.typemoon.com/products/cp/index.html">http://www.typemoon.com/products/cp/index.html</a></p>
			<b>資料:Animen動漫平台</b>
		</div>
	</div>
	<?php endif;?>
	
	<?php if($page == "6"):?>
	<div class='contact_form'>
		<form method="post" action="get_data.php">
			<p>
				<label for="name">名字：</label><input type="text" id="name" name="name" title="大名"/>
			</p>
			<p>
				<label for="subject">主題：</label><input type="text" id="subject" name="subject" title="主題"/>
			</p>
			<p>
				<label for="contact">內文：</label><textarea id="contact" name='contact'></textarea>
			</p>
			<p>
				<button type="submit">傳送</button>
				<button type="reset">清除</button>
			</p>
		
		</form>
	</div>
	<?php endif;?>
	
	<?php if($page == "7"):?>
	<div class='login'>
		<form method="post" action="do_login.php">
			<div>
			帳號：<input type="text" name="username">
			</div>
			<div>
			密碼：<input type="password" name="password">
			</div>
			<button type="submit">登入</button>
			<button type="reset">重來</button>
		</form>
	</div>
	
	<?php endif;?>
	
	<?php if($page == "8"):?>
		
	<div class='speciel'>
		
		其他系列大集合
		
		<p><img src='images/all6.jpg' width="1000" height="500"></p>
		
		<p><img src='images/zero.jpg' width="1000" height="500"></p>
		
		<p><img src='images/all0.jpg' width="1000" height="500"></p>
		
		<p><img src='images/all.jpg' width="800" height="500"></p>
		
		<p><img src='images/all2.jpg' width="900" height="700"></p>
		
		<p><img src='images/all3.jpg' width="900" height="500"></p>
		
		<p><img src='images/zero1.jpg' width="900" height="700"></p>
		
		<p><img src='images/all5.jpg' width="900" height="500"></p>
		
		
		UBW
		
		<p><img src='images/ubw.png' width="900" height="500"></p>
		
		<p><img src='images/ubw2.jpg' width="900" height="500"></p>
		
		<p><img src='images/ubw3.jpg' width="900" height="1000"></p>
		
		<p><img src='images/ubw4.jpg' width="900" height="1000"></p>
		
		SABER
		
		<p><img src='images/saber1.jpg' width="900" height="500"></p>
		
		<p><img src='images/saber1 (3).jpg' width="900" height="500"></p>
		
	</div>
	
	<?php endif;?>
	
	<?php if($page != ("1" &&"2"&&"3"&&"4"&&"5"&&"6"&&"7")):?>
		<div class='default'>
	</div>
		<form>
		<h1>ＭＡＳＴＥＲ，請見諒，這個頁面找不到。</h1> 
		<form>
	</div>
	
	
	<?php endif;?>
	
</div>
	</body>
</html>
