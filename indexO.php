<?php include_once "./api/db.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0040)http://127.0.0.1/test/exercise/collage/? -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>前台-泰山訓練場</title>
	<link href="./css/css.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<script src="./js/jquery-1.9.1.min.js"></script>
	<script src="./js/js.js"></script>
	<script src="./js/bootstrap.min.js"></script>
</head>

<body>
	<div id="cover" style="display:none; ">
		<div id="coverr">
			<a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl(&#39;#cover&#39;)">X</a>
			<div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
		</div>
	</div>
	<!-- <iframe style="display:none;" name="back" id="back"></iframe> -->
	<div class="container-fluid" id="main">
		<div class="row">
			<?php
			$title = $Title->find(['sh' => 1]);
			?>
			<a title="<?= $title['text']; ?>" href="index.php">
				<div class="ti" style="background:url(&#39;./img/<?= $title['img']; ?>&#39;); background-size:cover;"></div>
				<!--標題-->
			</a>
			<div id="ms">
				<div id="lf" style="float:left;">
					<div id="menuput" class="dbor">
						<!--主選單放此-->
						<span class="t botli">主選單區</span>
						<?php
	
						$mainmu = $Menu->all(['sh' => 1, 'menu_id' => 0]);
						//這邊注意 資料庫要找有顯示(在前台)及menu_id=0因為這才是主選單~
						foreach ($mainmu as $main) {
						?>
						<div class="mainmu"> <!-- 主選單class & css & jq 並要把div提上層包a tag-->
						<!-- 這邊觀察 如果是div(格式)包a 則超連結部分只有文字區塊 格式就無法觸及 -->
						<!-- 下面次選單是a包div(格式) 則超連結部分整個格式都套用 -->
							<a href="<?=$main['href'];?>" style="color:#000; font-size:13px; text-decoration:none;"><?=$main['text'];?></a>
							<?php
	
							if ($Menu->count(['menu_id' => $main['id']]) > 0) { //先判斷有沒有次選單 先用count
								echo "<div class='mw'>"; // class=mw 用在jq程式 次選單show/hide & css格式(也有喔)  並把下階次選單包起來 保證下面次選單都可以hover到
								$subs = $Menu->all(['menu_id' => $main['id']]);
								foreach ($subs as $sub) {
									echo "<a href='{$sub['href']}'>";
									echo "<div class='mainmu2'>"; //加div(class=mainmu2 for 次選單css)
									echo $sub['text'];
									echo "</div>";
									echo "</a>";
								}
								echo "</div>";
							}
							?>
	
						</div>
	
						<?php
	
						}
						?>
					</div>
					<div class="dbor" style="margin:3px; width:95%; height:20%; line-height:100px;">
						<span class="t">進站總人數 :<?= $Total->find(1)['total']; ?>
						</span>
					</div>
				</div>
	
				<?php
				$do = $_GET['do'] ?? 'main'; //三元運算式 只有在isset判斷下可以這樣短寫=>這邊是判斷是否有收到$_GET do值
				// $do=(isset($_GET['do']))?$_GET['do']:'main'; //原先三元運算寫法 上面是簡寫
				$file = "./front/{$do}.php";
				if (file_exists($file)) {
					// 會使用file_exists()是因為亂打會出現warning訊息 找不到路徑、檔案
					include $file;
				} else {
					include "./front/main.php";
				}
				// 透過判斷檔案是否存在決定引入的頁面
				// 終於自己想通 因為是“手動”在index頁面後加上?do= 所以可以用$_GET後面帶參數do去判斷輸入是否與檔案裡面相同
				// 而且 為什麼??後面加main是判斷除?do後收到的參數(與檔案名一致) 當你隨便亂打 
				// 你最後還是會被引導到main.php頁面去
	
				// if(isset($_GET['do'])){
				// 	switch($_GET['do']){
				// 		case "login":
				// 			include "./front/login.php";
				// 		break;
				// 		case "main":
				// 			include "./front/main.php";
				// 		break;
				// 		case "news":
				// 			include "./front/news.php";
				// 		break;
				// 	}
				// }else{
				// 	include "./front/news.php";
				// }
	
				// switch($_GET['do']){
				// 	case "login":
				// 		include "./front/login.php";
				// 	break;
				// 		include "./front/main.php";
				// 	case "news":
				// 		include "./front/news.php";
				// 	break;
				// 	default: //什麼都不做, 直接回首頁
				// 		include "./front/main.php";							
				// }
	
				// 邏輯發想 透過$_GET['do']取得網址上的值用switchcase切換
				// 但如果?do=後面亂打 則index首頁版面會亂(不知選什麼)
				// 但若是沒有打do, 由於switchcase是基於do判斷 則會出現warning訊息
	
				?>
	
				<!-- 以下這整塊搬去front/news.php使用 -->
				<!-- <div id="alt" style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 50px; left: 400px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;"></div>
				<script>
					$(".sswww").hover(
						function() {
							$("#alt").html("" + $(this).children(".all").html() + "").css({
								"top": $(this).offset().top - 50
							})
							$("#alt").show()
						}
					)
					$(".sswww").mouseout(
						function() {
							$("#alt").hide()
						}
					)
				</script> -->
				<div class="di di ad" style="height:540px; width:23%; padding:0px; margin-left:22px; float:left; ">
					<!--右邊-->
					<?php
					if(isset($_SESSION['login'])){
	
						?>
					<button style="width:100%; margin-left:auto; margin-right:auto; margin-top:2px; height:50px;" onclick="lo(&#39;back.php&#39;)">返回管理</button>
					<?php
					}else{
	?>
					<button style="width:100%; margin-left:auto; margin-right:auto; margin-top:2px; height:50px;" onclick="lo(&#39;?do=login&#39;)">管理登入</button>
					<?php
				}
	
	?>
					<!-- 把do=admin -> do=login 只是切換到loginin頁面(管理者登入頁面) 因為改名字了-->
					<div style="width:89%; height:480px;" class="dbor">
						<span class="t botli">校園映象區</span>
						<div class="cent" onclick="pp(1)"><img src="./icon/up.jpg" alt=""></div>
						<!-- 要放up圖示 -->
						<?php
						$imgs = $Image->all(['sh' => 1]);
						
	
						foreach ($imgs as $idx => $img) {
							// echo $idx;
						?>
							<div id="ssaa<?= $idx; ?>" class='im cent'>
							<!-- 圖片至中 可以用class=cent -->
							<!-- 使用id=ssaa show圖片, 使用class=im hide圖片 -->
								<img src="./img/<?= $img['img']; ?>" style="width:150px;height:103px;border:3px solid orange;margin:3px">
								<!-- 這邊有加style編框 -->
							</div>
						<?php
						}
						?>
						<div class="cent" onclick="pp(2)"><img src="./icon/dn.jpg" alt=""></div>
						<!-- 要放dn圖示 -->
						<script>
							var nowpage = 1,
								num = <?= $Image->count(['sh' => 1]); ?>;
								// 宣告變數 js用,分開即可
								//調整nowpage = 0=>1
								//調整總圖片數num = 0=>9;=>總圖片頁數跟著資料庫可被顯示的數量走
	
							function pp(x) {
								var s, t;
								if (x == 1 && nowpage - 1 >= 0) {
									// 在php, 運算元最好隔開; js還好
									// x=1點擊上一頁
									nowpage--;
								}
								if (x == 2 && (nowpage + 1) <= num * 1 - 3) {
									 // x=2點擊下一頁
									//每翻頁一次放三張圖片
									//以總圖片張數控制下一頁顯示(不要超過9張)
								// if (x==2 && (nowpage+1)*3<= num*1+3) {
									// 原程式寫法如上 但用倒推的 總頁數共9張可以按幾次是9-3=6次 所以有進行修改
									nowpage++;
								}
	
								$(".im").hide()
								//class=im的物件都會隱藏
								for (s = 0; s <= 2; s++) {
									 //迴圈跑三次
									t = s * 1 + nowpage * 1;
									$("#ssaa" + t).show()
									  //id=ssaa+1or2or3...的物件會顯示
	
								}
							}
	
	
							pp(2)
						</script>
					</div>
				</div>
			</div>
			<div style="clear:both;"></div>
			<div style="width:1024px; left:0px; position:relative; background:#FC3; margin-top:4px; height:123px; display:block;">
				<span class="t" style="line-height:123px;"><?= $Bottom->find(1)['bottom']; ?></span>
			</div>
		</div>
	</div>

</body>

</html>