<?php
  include_once("includes/db_connection.php");
?>

<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Thu Mar 26 2020 10:11:09 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5e7092bf4210735ed2e6094a" data-wf-site="5e7092bf421073025be60948">
<head>
  <meta charset="utf-8">
  <title>Upcoming Movies</title>
  <meta content="Movies" property="og:title">
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
  <div data-w-id="d1d313bb-cc3d-a7c0-d122-4bce963c7e2b" style="display:flex" class="preloader">
    <div data-w-id="fc8c84de-b58b-b49f-85c5-ee19f8aa7498" data-animation-type="lottie" data-src="https://uploads-ssl.webflow.com/5e7092bf421073025be60948/5e7092bf421073388fe6096d_410-lego-loader.json" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="5.033328213167105" data-duration="0" class="lottie-animation-2 load-animation"></div>
  </div>
  <div class="section1">
    <div class="opacity">
      <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar-1 w-nav">
        <div class="container-2 w-container">
          <a href="#" class="brand w-nav-brand">
            <h1 class="heading">CINEMAX</h1>
          </a>
          <div class="div-block-2">
            <nav role="navigation" class="w-nav-menu">
              <a href="index.php" class="navlinks w-nav-link">Home</a>
              <a href="movies.php" aria-current="page" class="navlinks w-nav-link w--current">Movies</a>
              <a href="upcoming_movies.php" class="navlinks w-nav-link">Upcoming</a>
              <a href="#" class="navlinks w-nav-link">About Us</a>
            </nav>
            <div class="w-nav-button">
              <div class="w-icon-nav-menu"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-5 w-container">
        <div class="div-block-8">
          <h1 class="heading-3">UPCOMING MOVIES</h1>
          <div class="columns-2 w-row">
          <?php
            $movie1_queery = "SELECT * FROM upcoming_movies WHERE movie_id = 1";
            $movie1_result = mysqli_query($conn, $movie1_queery);
 
            while($movie1_rows = mysqli_fetch_assoc($movie1_result)){
            $Thumbnail[] = $movie1_rows['thumbnail'];
          ?>
            <div class="column w-col w-col-4">
              <div class="movie-image mov mov1">
                <img src="<?php echo implode(",",$Thumbnail); ?>" 
                 sizes="283.328125px" alt="" class="movie1-showing-pic">
                <a href="upcoming_movie1.php" class="link-block mov1 w-inline-block"></a>
              </div>
            </div>
          <?php
            }
          ?>
          <?php
            $movie2_queery = "SELECT * FROM upcoming_movies WHERE movie_id = 2";
            $movie2_result = mysqli_query($conn, $movie2_queery);
 
            while($movie2_rows = mysqli_fetch_assoc($movie2_result)){
            $Thumbnail1[] = $movie2_rows['thumbnail'];
          ?>
            <div class="column w-col w-col-4">
              <div class="movie-image mov mov2">
                <img src="<?php echo implode(",",$Thumbnail1); ?>" 
                 sizes="283.328125px" alt="" class="movie2-showing-pic">
                <a href="upcoming_movie2.php" class="link-block mov2 w-inline-block"></a>
              </div>
            </div>
          <?php
            }
          ?>
          <?php
            $movie3_queery = "SELECT * FROM upcoming_movies WHERE movie_id = 3";
            $movie3_result = mysqli_query($conn, $movie3_queery);
 
            while($movie3_rows = mysqli_fetch_assoc($movie3_result)){
            $Thumbnail2[] = $movie3_rows['thumbnail'];
          ?>
            <div class="column w-col w-col-4">
              <div class="movie-image mov mov3">
                <img src="<?php echo implode(",",$Thumbnail2); ?>" alt="" class="movie3-showing-pic">
                <a href="upcoming_movie3.php" class="link-block mov3 w-inline-block"></a>
              </div>
          <?php
            }
          ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js?site=5e7092bf421073025be60948" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>