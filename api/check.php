<?php

include_once "db.php";
// 通常程式使用到session要記得寫session_start(), but因為db已寫了session start()這邊不用在寫

if($Admin->count(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']])>0){
	$_SESSION['login']=$_POST['acc']; //如果上述判斷有的話, 因為也沒撈資料 直接post的資料存進session紀錄狀態
	to("../back.php");
}else{
	to("../index.php?error=帳號或密碼錯誤");
}
// 這邊是在判斷進站人數不重複計算

//這邊使用count只是要確認是否有帳密資料 不是要取資料 並這樣可以減少流量

//過濾檢查可用程式
// ex1. pdo::prepare() 预处理待执行的SQL语句 老師示範是在prepare('')(裡面加上單引號)
// 如使用 ' OR 1=1; 使用prepare會將左邊字串最外前後加上''包住 去破壞原字串

// ex.2 trim() 先去除字串首尾空白字符(或其他特殊字符)

// ex.3 htmlspecialchars() 把特殊符號轉為html實體(例如''單引號=>&#39;)

// ex.4 strip_tags()從字串中去除html和php標籤 例如輸入進來是<html> 轉化後只剩html 



?>