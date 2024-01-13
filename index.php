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

  <!-- Template Main CSS File -->
  <link href="./css/styleF.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MeFamily
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/family-multipurpose-html-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
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
          <li><a class="active" href="index.html">Home</a></li>
          <li><a href="our-story.html">Our Story</a></li>
          <li><a href="events.html">Events</a></li>
          <li><a href="gallery.html">Gallery</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
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
          </li>
          <!-- <li><a href="contact.html">Contact</a></li> -->
          <?php
					if(isset($_SESSION['login'])){
          ?>
          <li>
            <button class="btn btn-success rounded-pill px-3" onclick="location.href='back.php'">返回管理</button>
            <?php
					  }else{
	          ?>
            <button class="btn btn-success rounded-pill px-3" onclick="location.href='login.php'">管理登入</button>
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
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>歡迎來到<?=$slogan['text'];?></h2>
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
          <div class="col-lg-6 pt-4 pt-lg-0">
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
				      echo "<a href='./front/news.php' class='btn-learn-more'>Learn More</a>";
		        	}
			      ?>
            <!-- <a href="our-story.html" class="btn-learn-more">Learn More</a> -->
		        <div id="altt" style="position: absolute; width: 350px; min-height: 100px; background-color: rgb(255, 255, 204); top: 50px; left: 130px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;"></div>
            
          </div>
        </div>

      </div>
    </section><!-- End My & Family Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-laptop"></i></div>
            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-bar-chart"></i></div>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-bounding-box"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-broadcast"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-camera"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-diagram-3"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Recent Photos Section ======= -->
    <section id="recent-photos" class="recent-photos">
      <div class="container">

        <div class="section-title">
          <h2>Recent Photos</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="recent-photos-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a href="./img/recent-photos-1.jpg" class="glightbox"><img src="./img/recent-photos-1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="./img/recent-photos-2.jpg" class="glightbox"><img src="./img/recent-photos-2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="./img/recent-photos-3.jpg" class="glightbox"><img src="./img/recent-photos-3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="./img/recent-photos-4.jpg" class="glightbox"><img src="./img/recent-photos-4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="./img/recent-photos-5.jpg" class="glightbox"><img src="./img/recent-photos-5.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="./img/recent-photos-6.jpg" class="glightbox"><img src="./img/recent-photos-6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="./img/recent-photos-7.jpg" class="glightbox"><img src="./img/recent-photos-7.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="./img/recent-photos-8.jpg" class="glightbox"><img src="./img/recent-photos-8.jpg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Recent Photos Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>MeFamily</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>MeFamily</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/family-multipurpose-html-bootstrap-template-free/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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