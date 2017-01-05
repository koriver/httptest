<?php
	//啟動session
	session_start();
	
	//假設的有效會員帳號
	$type_user = "MASTER";
	$type_password = 'MASTER1234';
	
	//取得傳過來的帳號密碼
    $username = $_POST['username'];
	$password = $_POST['password'];
	
	//使用 isset 判別有沒有此變數可以使用
	if(isset($_POST['username']) && isset($_POST['password']))
	{
		//直接對傳過來的帳號密碼做比對
		
		if($_POST['username'] == $type_user && $_POST['password'] == $type_password)
		{
			//如果密碼一樣，以及帳號一樣，那就代表正確，所以顯示登入成功
			$_SESSION['is_login'] = TRUE;
			//使用php header 來轉址 前往後台
			header('Location: backend.php');
		}
		else 
		{
			//要不然就是登入失敗
			$_SESSION['is_login'] = FALSE;
			
			//在session存一個 msg 變數
			$_SESSION['msg'] = '登入失敗，MASTER請確認帳號密碼';
			
			//使用php header 來轉址 返回登入頁
			header('Location: member.php');
		}
	}
	else
	{
		//使用php header 來轉址 返回登入頁
		header('Location: member.php');
	}
?>