<?php
  include_once("includes/db_connection.php");
?>

<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Thu Mar 26 2020 10:11:09 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5e7092bf421073de2fe6094d" data-wf-site="5e7092bf421073025be60948">
<head>
  <meta charset="utf-8">
  <?php
    $movie1_queery = "SELECT * FROM upcoming_movies WHERE movie_id = 3";
    $movie1_result = mysqli_query($conn, $movie1_queery);
    while($movie1_rows = mysqli_fetch_assoc($movie1_result)){
      $Titles[] = $movie1_rows['title'];

  ?>
  <title><?php echo implode(",",$Titles); ?></title>
  <?php
      }
    ?>
  <meta content="movie1" property="og:title">
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
  <div class="section-4">
    <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar-1 w-nav">
      <div class="container-2 w-container">
        <a href="index.php" class="brand w-nav-brand">
          <h1 class="heading">CINEMAX</h1>
        </a>
        <div class="div-block-2">
          <nav role="navigation" class="w-nav-menu">
            <a href="index.php" class="navlinks w-nav-link">Home</a>
            <a href="movies.php" class="navlinks w-nav-link">Movies</a>
            <a href="upcoming_movies.php" class="navlinks w-nav-link">Upcoming</a>
          </nav>
          <div class="w-nav-button">
            <div class="w-icon-nav-menu"></div>
          </div>
        </div>
      </div>
    </div>

    <?php
      $movie1_queery = "SELECT * FROM upcoming_movies WHERE movie_id = 3";
      $movie1_result = mysqli_query($conn, $movie1_queery);
 
      while($movie1_rows = mysqli_fetch_assoc($movie1_result)){
        $Title[] = $movie1_rows['title'];
        $Genre1[] = $movie1_rows['genre1'];
        $Genre2[] = $movie1_rows['genre2'];
        $Genre3[] = $movie1_rows['genre3'];
        $Description[] = $movie1_rows['description'];
        $Ratings[] = $movie1_rows['ratings'];
        $BG_image[] = $movie1_rows['bg_image'];
        $Thumbnail[] = $movie1_rows['thumbnail'];
        $Trailer[] = $movie1_rows['trailer'];
    ?>
    <style type="text/css" media="screen">
      .main-block.movie1 {
        background-image: url('<?php echo implode(",",$BG_image); ?>');
        background-position: left;
      }
    </style>
    <div class="main-block movie1">
      <div class="div-block-11">
        <div class="container-6 w-container">
          <div class="thumb-div">
            <img src="<?php echo implode(",",$Thumbnail); ?>" 
               sizes="300px" alt="" class="image-2">
            </div>
          <div class="div-block-12">
            <div class="div-lightbox">
              <a href="#" class="w-inline-block w-lightbox">
                <img src="images/play_button_circled_60px_1play_button_circled_60px.png" width="70" alt="" class="image-3">
                <script type="application/json" class="w-json">{
                  "items": [
                      {
                        "type": "video",
                        "originalUrl": "https://www.youtube.com/watch?v=<?php echo implode(",",$Trailer); ?>",
                        "url": "https://www.youtube.com/watch?v=szby7ZHLnkA",
                        "html": "<iframe class=\"embedly-embed\" src=\"//cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Fwww.youtube.com%2Fembed%2F<?php echo implode(",",$Trailer); ?>%3Ffeature%3Doembed&display_name=YouTube&url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3D<?php echo implode(",",$Trailer); ?>&image=https%3A%2F%2Fi.ytimg.com%2Fvi%2F<?php echo implode(",",$Trailer); ?>%2Fhqdefault.jpg&key=c4e54deccf4d4ec997a64902e9a30300&type=text%2Fhtml&schema=youtube\" width=\"940\" height=\"528\" scrolling=\"no\" title=\"YouTube embed\" frameborder=\"0\" allow=\"autoplay; fullscreen\" allowfullscreen=\"true\"></iframe>",
                        "thumbnailUrl": "https://i.ytimg.com/vi/<?php echo implode(",",$Trailer); ?>/hqdefault.jpg",
                        "width": 940,
                        "height": 528
                      }
                            ]
                }</script></a>
            </div>
            <div class="wrapper">
              <div class="div-content slide1">
                <h1 class="movie-title"><?php echo implode(",",$Title); ?></h1>
                <div class="div-genre">
                  <a href="#" class="btn-genre gen-1 w-button"><?php echo implode(",",$Genre1); ?></a>
                  <a href="#" class="btn-genre gen-2 w-button"><?php echo implode(",",$Genre2); ?></a>
                  <a href="#" class="btn-genre gen-3 w-button"><?php echo implode(",",$Genre3); ?></a>
                </div>
                <p class="movie-des"><?php echo implode(",",$Description); ?></p>
                <div class="div-book">
                  <h1 class="rating"><?php echo implode(",",$Ratings); ?></h1><img src="images/star_48px_1star_48px.png" width="34" alt="">
                  <h5 class="imbd-rating-h5">IMDb Ratings</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
      }
    ?>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js?site=5e7092bf421073025be60948" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>