<?php

include_once("includes/db_connection.php");

?>



<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Thu Mar 26 2020 10:11:09 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5e7092bf4210733051e60949" data-wf-site="5e7092bf421073025be60948">
<head>
  <meta charset="utf-8">
  <title>Cinemax</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/cinemax-f398f6477d2e5f2a9-e2076f5b13f4b.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Oswald:200,300,400,500,600,700","Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Karla:regular,italic","Roboto:regular,italic,500"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
</head>
<body>
  <div class="preloader home">
    <div data-w-id="586cec7c-df93-8190-1fb9-cdda8cbff4a5" data-animation-type="lottie" data-src="https://uploads-ssl.webflow.com/5e7092bf421073025be60948/5e7092bf421073388fe6096d_410-lego-loader.json" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="5.033328213167105" data-duration="0" class="lottie-animation-3"></div>
  </div>
  <div class="section1">
    <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar-1 w-nav">
      <div class="container-2 w-container">
        <a href="#" class="brand w-nav-brand">
          <h1 class="heading">CINEMAX</h1>
        </a>
        <div class="div-block-2">
          <nav role="navigation" class="w-nav-menu">
            <a href="index.php" aria-current="page" class="navlinks w-nav-link w--current">Home</a>
            <a href="movies.php" class="navlinks w-nav-link">Movies</a>
            <a href="upcoming_movies.php" class="navlinks w-nav-link">Upcoming</a>
            <a href="#" class="navlinks w-nav-link">About Us</a>
          </nav>
          <div class="w-nav-button">
            <div class="w-icon-nav-menu"></div>
          </div>
        </div>
      </div>
    </div>
    <div data-delay="3000" data-animation="over" data-autoplay="1" data-hide-arrows="1" data-duration="500" data-infinite="1" class="slider w-slider">
      <div class="w-slider-mask">
    <!-- MOVIE 1 -->
    <?php
      $movie1_queery = "SELECT * FROM movies WHERE Movie_ID = 1";
      $movie1_result = mysqli_query($conn, $movie1_queery);
 
      while($movie1_rows = mysqli_fetch_assoc($movie1_result)){
        $Title[] = $movie1_rows['Title'];
        $Genre1[] = $movie1_rows['Genre1'];
        $Genre2[] = $movie1_rows['Genre2'];
        $Genre3[] = $movie1_rows['Genre3'];
        $Description[] = $movie1_rows['Description'];
        $Ratings[] = $movie1_rows['Ratings'];
        $BG_image[] = $movie1_rows['BG_image'];
        $Thumbnail[] = $movie1_rows['Thumbnail'];
        $Trailer[] = $movie1_rows['Trailer'];
    ?>
    <style type="text/css" media="screen">

      .slide.slide1 {
        background-image: radial-gradient(circle farthest-corner at 100% 50%, #0c0835 31%, hsla(0, 100%, 0%, 0) 46%), url('images/mulan.jpg');
        background-position: left center;
        background-size: auto, contain;
        background-repeat: no-repeat;
        background-attachment: scroll, scroll;
      }

    </style>
        <div class="slide slide1 w-slide" >
          <div class="custom-container">
            <div class="div-content slide1">
              <h1 class="movie-title"><?php echo implode(",",$Title); ?></h1>
              <div class="div-genre">
                <a href="#" class="btn-genre gen-1 w-button"><?php echo implode(",",$Genre1); ?></a>
                <a href="#" class="btn-genre gen-2 w-button"><?php echo implode(",",$Genre2); ?></a>
                <a href="#" class="btn-genre gen-3 w-button"><?php echo implode(",",$Genre3); ?></a>
              </div>
              <p class="movie-des"><?php echo implode(",",$Description); ?></p>
              <div class="div-book">
                <img src="images/star_48px_1star_48px.png" width="34" alt="">
                <h1 class="rating"><?php echo implode(",",$Ratings); ?></h1>
                <h5 class="imbd-rating-h5">IMDb Ratings</h5>
                <a href="movie1-book.html" class="button w-button">Book Now!</a>
              </div>
            </div>
          </div>
        </div>  
    <?php
      }
    ?>
    <!-- MOVIE 1 END -->
      
      <!-- MOVIE 2 -->
      <?php
      $movie2_queery = "SELECT * FROM movies WHERE Movie_ID = 2";
      $movie2_result = mysqli_query($conn, $movie2_queery);
 
      while($movie2_rows = mysqli_fetch_assoc($movie2_result)){
        $Title1[] = $movie2_rows['Title'];
        $Genre11[] = $movie2_rows['Genre1'];
        $Genre21[] = $movie2_rows['Genre2'];
        $Genre31[] = $movie2_rows['Genre3'];
        $Description1[] = $movie2_rows['Description'];
        $Ratings1[] = $movie2_rows['Ratings'];
        $BG_image1[] = $movie2_rows['BG_image'];
    ?>
    <style type="text/css" media="screen">
      .slide.slide2 {
        background-image: radial-gradient(circle farthest-corner at 100% 50%, #0c0835 31%, hsla(0, 100%, 0%, 0) 46%), url('<?php echo implode(",",$BG_image1); ?>');
        background-position: left center;
        background-size: auto, contain;
        background-repeat: no-repeat;
        background-attachment: scroll, scroll;
      }
    </style>
        <div class="slide slide2 w-slide">
          <div class="custom-container">
            <div class="div-content slide2">
              <h1 class="movie-title"><?php echo implode(",",$Title1); ?></h1>
              <div class="div-genre">
                <a href="#" class="btn-genre gen-1 w-button"><?php echo implode(",",$Genre11); ?></a>
                <a href="#" class="btn-genre gen-2 w-button"><?php echo implode(",",$Genre21); ?></a>
                <a href="#" class="btn-genre gen-3 w-button"><?php echo implode(",",$Genre31); ?></a>
              </div>
              <p class="movie-des"><?php echo implode(",",$Description1); ?>.</p>
              <div class="div-book"><img src="images/star_48px_1star_48px.png" width="34" alt="">
                <h1 class="rating"><?php echo implode(",",$Ratings1); ?></h1>
                <h5 class="imbd-rating-h5">IMDb Ratings</h5>
                <a href="#" class="button w-button">Book Now!</a>
              </div>
            </div>
          </div>
        </div>
      <?php
        }
      ?>
      <!-- MOVIE 2 END -->

      <!-- MOVIE 3 -->
      <?php
      $movie3_queery = "SELECT * FROM movies WHERE Movie_ID = 3";
      $movie3_result = mysqli_query($conn, $movie3_queery);
 
      while($movie3_rows = mysqli_fetch_assoc($movie3_result)){
        $Title2[] = $movie3_rows['Title'];
        $Genre12[] = $movie3_rows['Genre1'];
        $Genre22[] = $movie3_rows['Genre2'];
        $Genre32[] = $movie3_rows['Genre3'];
        $Description2[] = $movie3_rows['Description'];
        $Ratings2[] = $movie3_rows['Ratings'];
        $BG_image2[] = $movie3_rows['BG_image'];
    ?>
    <style type="text/css" media="screen">
      .slide.slide3 {
        background-image: radial-gradient(circle farthest-corner at 100% 50%, #0c0835 31%, hsla(0, 100%, 0%, 0) 46%), url('<?php echo implode(",",$BG_image2); ?>');
        background-position: left center;
        background-size: auto, contain;
        background-repeat: no-repeat;
        background-attachment: scroll, scroll;
      }
    </style>
        <div class="slide slide3 w-slide">
          <div class="custom-container">
            <div class="div-content slide1">
              <h1 class="movie-title"><?php echo implode(",",$Title2); ?></h1>
              <div class="div-genre">
                <a href="#" class="btn-genre gen-1 w-button"><?php echo implode(",",$Genre12); ?></a>
                <a href="#" class="btn-genre gen-2 w-button"><?php echo implode(",",$Genre22); ?></a>
                <a href="#" class="btn-genre gen-3 w-button"><?php echo implode(",",$Genre32); ?></a>
              </div>
              <p class="movie-des"><?php echo implode(",",$Description2); ?></p>
              <div class="div-book">
                <img src="images/star_48px_1star_48px.png" width="34" alt="">
                <h1 class="rating"><?php echo implode(",",$Ratings2); ?></h1>
                <h5 class="imbd-rating-h5">IMDb Ratings</h5>
                <a href="#" class="button w-button">Book Now!</a></div>
            </div>
          </div>
        </div>
      </div>
      <?php
        }
      ?>
      <!-- MOVIE 3 END -->
      <div class="w-slider-arrow-left">
        <div class="w-icon-slider-left"></div>
      </div>
      <div class="w-slider-arrow-right">
        <div class="w-icon-slider-right"></div>
      </div>
      <div class="w-slider-nav w-round"></div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js?site=5e7092bf421073025be60948" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>