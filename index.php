<?php include_once "./api/db.php"; 

if(isset($_GET['error'])){
	echo "<script>alert('{$_GET['error']}')</script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>前台-泰山訓練場</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="./img/favicon.png" rel="icon">
  <link href="./img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <link href="./css/bootstrap-icons.css" rel="stylesheet">
  <link href="./css/boxicons.min.css" rel="stylesheet">
  <link href="./css/glightbox.min.css" rel="stylesheet">
  <link href="./css/remixicon.css" rel="stylesheet">
  <link href="./css/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Template Main CSS File -->
  <link href="./css/styleF.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MeFamily
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/family-multipurpose-html-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    .btn-success{
      background-color: #24325d!important;
    }
    #footer p{
      /* margin:0 0 2px 0; */
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
    <?php
			$title = $Title->find(['sh' => 1]);
      $slogan = $Slogan->find(['sh' => 1]);
						?>

      <a href="index.php" class="logo"><img src="./img/<?=$title['img'];?>" alt="" class="img-fluid"></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <h1 class="logo"><a href="index.php"><?=$slogan['text'];?></a></h1>
      <?php
      
						?>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="index.php">Home</a></li>
          <li><a href="#p-1">小道消息</a></li>
          <li><a href="#p-2">實用小工具</a></li>
          <li><a href="#p-3">我的這一班</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <!-- <li><a href="contact.html">Contact</a></li> -->
          <?php
					if(isset($_SESSION['login'])){
          ?>
          <li>
            <button class="btn btn-success rounded-pill px-3 ms-5" onclick="location.href='back.php'">返回管理</button>
            <?php
					  }else{
	          ?>
            <button class="btn btn-success rounded-pill px-3 ms-5" onclick="location.href='login.php'">管理登入</button>
          </li>
            <?php
				    }
	          ?>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(./img/slide-1.jpg)">
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(./img/slide-2.jpg)">
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(./img/slide-3.jpg)">
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= My & Family Section ======= -->
    <div id="p-1"></div>
    <section id="about" class="about">
      <div class="container">


        <div class="section-title">
          <h2>歡迎來到<span style="color:#24325d"><?=$slogan['text'];?></span></h2>
          <marquee scrolldelay="" direction="" style="width:100%; height:30px; color:blue;font-size:larger">
            <?php
            $ads = $Ad->all(['sh' => 1]);
            foreach ($ads as $ad) {
              echo $ad['text'];
              echo '&nbsp;&nbsp;/&nbsp;&nbsp;';
            }
            ?>
            </marquee>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <div class="row content">
          <div class="col-lg-6" id="mwww" loop="true"> <!--這邊是魔幻動圖-->
            <img src="./img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" style="position:relative">
            <!-- <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p> -->
            <ul class="ssaa"> <!--這邊是消息區-->
            <?php
			        $news = $News->all(['sh' => 1], ' limit 5');
			        foreach ($news as $n) {
              echo "<li><i class='ri-check-double-line'></i>";
              echo mb_substr($n['text'], 0, 20);
              echo "<div class='all' style='display:none'>";
              echo $n['text'];
              echo "</div>";
              echo "...</li>";
               }
            ?>
              <!-- <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li> -->
              <!-- <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li> -->
              <!-- <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li> -->
            </ul>
            <!-- <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum.
            </p> -->
            <?php
			        if ($News->count(['sh' => 1]) > 5) {
				      echo "<a href='#' class='btn-learn-more'>Learn More</a>";
		        	}
			      ?>
            <!-- <a href="our-story.html" class="btn-learn-more">Learn More</a> -->
		        <div id="altt" style="position: absolute; width: 380px; min-height: 100px; background-color:#333333; color:white; top: 50px; left: 130px; z-index: 99; display: none; padding: 5px; border: 3px double blue; background-position: initial initial; background-repeat: initial initial;"></div>
            
          </div>
        </div>

      </div>
    </section><!-- End My & Family Section -->

    <!-- ======= Features Section ======= -->
    <div id="p-2"></div>
    <section id="features" class="features">
      <div class="container">


      <div class="section-title">
          <h2>實用小工具</h2>
        </div>


        <div class="row">
        <?php
	
        $tools=$Tool->all(['sh' => 1]," limit 6");
        foreach ($tools as $tool) {
        ?>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="fa-solid <?=$tool['fontawesome'];?>"></i></div>
            <h4 class="title"><a href="<?=$tool['href'];?>"><?=$tool['title'];?></a></h4>
            <p class="description"><?=$tool['text'];?></p>
          </div>
          <?php
            }
            ?>
          <!-- <div class="row">
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="fa-solid fa-utensils"></i></div>
            <h4 class="title"><a href="http://dinbendon.kento520.tw/">你餓了嗎？</a></h4>
            <p class="description">要訂便當的同學，請在10:00前將錢交給值日生，最好是都給我零錢，謝謝</p>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="fa-solid fa-school"></i></div>
            <h4 class="title"><a href="https://stustkyhkm.wda.gov.tw/">上課遲到了嗎？</a></h4>
            <p class="description">走過路過，不要錯過！看到異色的寶可夢立馬停下來抓，遲到了別忘了請假~還是請大家上下課注意路上安全喔！</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="fa-solid fa-calendar-days"></i></div>
            <h4 class="title"><a href="https://wda.mackliu.com/schedule/149632">什麼？下週有3堂PHP的課？</a></h4>
            <p class="description">隨時掌握何時會看到劉老師(誤?)乙級題組你練習了沒？</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="fa-solid fa-person-chalkboard"></i></div>
            <h4 class="title"><a href="https://mackliu.github.io/php-book/">月光林地還是月光仙子？</a></h4>
            <p class="description">文藝青年嘔心瀝血之作，管他是不是要變身金星仙子，取字串要用什麼函式？我上課都講過了喔！</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="fa-solid fa-person-digging"></i></div>
            <h4 class="title"><a href="">under construction</a></h4>
            <p class="description">To be contined...</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
            <h4 class="title"><a href="">under maintenance</a></h4>
            <p class="description">Coming soon...</p>
          </div> -->
        </div>
        <!-- <i class="fa-solid fa-triangle-exclamation"></i> --> <!--注意sign-->
        <!-- <i class="fa-solid fa-person-digging"></i> --> <!--施工-->
        <!-- <i class="fa-solid fa-screwdriver-wrench"></i> --> <!--維修-->


      </div>
    </section><!-- End Features Section -->

    <!-- ======= Recent Photos Section ======= -->
    <div id="p-3"></div>
    <section id="recent-photos" class="recent-photos">
      <div class="container">


        <div class="section-title">
          <h2>我們這一班</h2>
          <p>目標是把班上22人都拍大頭照</p>
        </div>

        <div class="recent-photos-slider swiper">
          <div class="swiper-wrapper align-items-center">
          <?php
						$imgs = $Image->all(['sh' => 1]," limit 8");
						
	
						foreach ($imgs as $idx => $img) {
							// echo $idx;
						?>
            <div class="swiper-slide"><a href="./img/<?=$img['img'];?>" class="glightbox"><img src="./img/<?=$img['img'];?>" class="img-fluid" alt=""></a></div>
            <?php
						}
						?>
            <!-- <div class="swiper-slide"><a href="./img/recent-photos-2.jpg" class="glightbox"><img src="./img/recent-photos-2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="./img/recent-photos-3.jpg" class="glightbox"><img src="./img/recent-photos-3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="./img/recent-photos-4.jpg" class="glightbox"><img src="./img/recent-photos-4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="./img/recent-photos-5.jpg" class="glightbox"><img src="./img/recent-photos-5.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="./img/recent-photos-6.jpg" class="glightbox"><img src="./img/recent-photos-6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="./img/recent-photos-7.jpg" class="glightbox"><img src="./img/recent-photos-7.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="./img/recent-photos-8.jpg" class="glightbox"><img src="./img/recent-photos-8.jpg" class="img-fluid" alt=""></a></div> -->
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Recent Photos Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3><?=$slogan['text'];?></h3>
      <p>是製造人才的搖籃還是變身社畜前的蛹？</p>
      <!-- <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div> -->
      <div class="copyright">
        &copy; Copyright <strong><span>JCMF</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/family-multipurpose-html-bootstrap-template-free/ -->
            Designed by <a href="https://wda.mackliu.com/s1120406/campus-hw_c2">Julie Chen. Yeah, it's moi</a>
            <p><i class="fa-solid fa-arrow-up"></i>You may link FileZilla as above<i class="fa-solid fa-arrow-up"></i></p>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="./js/bootstrap.bundle.min.js"></script>
  <script src="./js/glightbox.min.js"></script>
  <script src="./js/isotope.pkgd.min.js"></script>
  <script src="./js/swiper-bundle.min.js"></script>
  <script src="./js/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="./js/mainF.js"></script>
  <script src="./js/jquery-1.9.1.min.js"></script>
	<script src="./js/js.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->

  <script>
    		var lin = new Array();
		<?php
		$lins = $Mvim->all(['sh' => 1]);
		foreach ($lins as $lin) {
			echo "lin.push('{$lin['img']}');";
		}
		?>
		var now = 0;
		ww();

		if (lin.length > 1) {
			setInterval("ww()", 3000);
			now = 1;
		}

		function ww() {
			$("#mwww").html("<embed loop=true src='./img/" + lin[now] + "' style='width:99%; height:90%;'></embed>")
			now++;
			if (now >= lin.length)
				now = 0;
		}

    $(".ssaa li").hover(
				function() {
					$("#altt").html("<pre>" + $(this).children(".all").html() + "</pre>")
					// .html 是在做把後面pre(整段字串)放到id=altt(容器)裡面
					// $(this)=>是指hover過去該<li>的元素以下的容器.children (.all=>設定class=all)
					// 最後一個.html() 就像sql all() 抓取整個資料
					$("#altt").show()
				}
			)
			$(".ssaa li").mouseout(
				function() {
					$("#altt").hide()
				}
			)

  </script>

</body>

</html>