<?php
  include_once("includes/db_connection.php");
?>

<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Thu Mar 26 2020 10:11:09 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5e7092bf4210739f37e6094f" data-wf-site="5e7092bf421073025be60948">
<head>
  <meta charset="utf-8">
  <?php
    $movie1_queery = "SELECT * FROM movies WHERE Movie_ID = 1";
    $movie1_result = mysqli_query($conn, $movie1_queery);
    while($movie1_rows = mysqli_fetch_assoc($movie1_result)){
      $Titles[] = $movie1_rows['Title'];

  ?>
  <title><?php echo implode(",",$Titles); ?></title>
  <?php
      }
    ?>
  <meta content="Movie1-book" property="og:title">
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
  <script>
    let btn = document.querySelector('#A1');
    btn.addEventListener('click', () => btn.style.backgroundColor='#5ef891');
</script>
</head>
<body>
  <div class="section-6">
    <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar-1 w-nav">
      <div class="container-2 w-container">
        <a href="#" class="brand w-nav-brand">
          <h1 class="heading">CINEMAX</h1>
        </a>
        <div class="div-block-2">
          <nav role="navigation" class="w-nav-menu">
            <a href="index.php" class="navlinks w-nav-link">Home</a>
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
        $Date1[] = $movie1_rows['Date1'];
        $Day1 = substr(implode(",",$Date1), -2);
        $Month1 = substr(implode(",",$Date1), -5, 2);
        $Year1 = substr(implode(",",$Date1), 0, -6);
        if ($Month1 == "01") {
          $Month1 = "Jan";
        }elseif ($Month1 == "02") {
          $Month1 = "Feb";
        }elseif ($Month1 == "03") {
          $Month1 = "Mar";
        }elseif ($Month1 == "04") {
          $Month1 = "Apr";
        }elseif ($Month1 == "05") {
          $Month1 = "May";
        }elseif ($Month1 == "06") {
          $Month1 = "Jun";
        }elseif ($Month1 == "07") {
          $Month1 = "Jul";
        }elseif ($Month1 == "08") {
          $Month1 = "Aug";
        }elseif ($Month1 == "09") {
          $Month1 = "Sep";
        }elseif ($Month1 == "10") {
          $Month1 = "Oct";
        }elseif ($Month1 == "11") {
          $Month1 = "Nov";
        }elseif ($Month1 == "12") {
          $Month1 = "Dec";
        }
        $Date2[] = $movie1_rows['Date2'];
        $Day2 = substr(implode(",",$Date2), -2);
        $Month2 = substr(implode(",",$Date2), -5, 2);
        $Year2 = substr(implode(",",$Date2), 0, -6);
        if ($Month2 == "01") {
          $Month2 = "Jan";
        }elseif ($Month2 == "02") {
          $Month2 = "Feb";
        }elseif ($Month2 == "03") {
          $Month2 = "Mar";
        }elseif ($Month2 == "04") {
          $Month2 = "Apr";
        }elseif ($Month2 == "05") {
          $Month2 = "May";
        }elseif ($Month2 == "06") {
          $Month2 = "Jun";
        }elseif ($Month2 == "07") {
          $Month2 = "Jul";
        }elseif ($Month2 == "08") {
          $Month2 = "Aug";
        }elseif ($Month2 == "09") {
          $Month2 = "Sep";
        }elseif ($Month2 == "10") {
          $Month2 = "Oct";
        }elseif ($Month2 == "11") {
          $Month2 = "Nov";
        }elseif ($Month2 == "12") {
          $Month2 = "Dec";
        }
        $Date3[] = $movie1_rows['Date3'];
        $Day3 = substr(implode(",",$Date3), -2);
        $Month3 = substr(implode(",",$Date3), -5, 2);
        $Year3 = substr(implode(",",$Date3), 0, -6);
        if ($Month3 == "01") {
          $Month3 = "Jan";
        }elseif ($Month3 == "02") {
          $Month3 = "Feb";
        }elseif ($Month3 == "03") {
          $Month3 = "Mar";
        }elseif ($Month3 == "04") {
          $Month3 = "Apr";
        }elseif ($Month3 == "05") {
          $Month3 = "May";
        }elseif ($Month3 == "06") {
          $Month3 = "Jun";
        }elseif ($Month3 == "07") {
          $Month3 = "Jul";
        }elseif ($Month3 == "08") {
          $Month3 = "Aug";
        }elseif ($Month3 == "09") {
          $Month3 = "Sep";
        }elseif ($Month3 == "10") {
          $Month3 = "Oct";
        }elseif ($Month3 == "11") {
          $Month3 = "Nov";
        }elseif ($Month3 == "12") {
          $Month3 = "Dec";
        }
    ?>
    <style type="text/css" media="screen">
      .div-book-mainpic {
        position: absolute;
        left: 0%;
        top: 0%;
        right: 0%;
        bottom: auto;
        height: 80vh;
        background-image: url('<?php echo implode(",",$BG_image); ?>');
        background-position: 50% 0%;
        background-size: cover;
        background-repeat: no-repeat;
      }
    </style>    
    
    <div class="div-block-20">
      <div class="div-book-mainpic">
        <div class="opacity book">
          <div class="div-thumb-book">
            <img src="<?php echo implode(",",$Thumbnail); ?>" 
              sizes="(max-width: 479px) 100vw, (max-width: 991px) 28vw, 250px" alt="" class="movie1pic-book">
          </div>
          <div class="div-content slide1">
            <h1 class="movie-title"><?php echo implode(",",$Title); ?></h1>
            <div class="div-genre">
              <a href="#" class="btn-genre gen-1 w-button"><?php echo implode(",",$Genre1); ?></a>
              <a href="#" class="btn-genre gen-2 w-button"><?php echo implode(",",$Genre2); ?></a>
              <a href="#" class="btn-genre gen-3 w-button"><?php echo implode(",",$Genre3); ?></a>
            </div>
            <div class="div-book"><img src="images/star_48px_1star_48px.png" width="34" alt="">
              <h1 class="rating"><?php echo implode(",",$Ratings); ?></h1>
              <h5 class="imbd-rating-h5">IMDb Ratings</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="div-block-13">
      <div class="div-block-14">
        <div data-duration-in="300" data-duration-out="100" class="tabs w-tabs">
          <div class="tabs-menu-3 w-tab-menu">
            <a onclick="changeseat(this.id)" id="date1" data-w-tab="Tab 1" class="tablink w-inline-block w-tab-link">
              <div class="month btn1"><?php echo $Month1; ?></div>
              <div class="day btn1"><?php echo $Day1; ?></div>
              <div class="days btn1"><?php echo $Year1; ?></div>
            </a>
            <a onclick="changeseat(this.id)" id="date2" data-w-tab="Tab 2" class="tablink w-inline-block w-tab-link">
              <div class="month btn2"><?php echo $Month2; ?></div>
              <div class="day btn2"><?php echo $Day2; ?></div>
              <div class="days btn2"><?php echo $Year2; ?></div>
            </a>
            <a onclick="changeseat(this.id)" id="date3" data-w-tab="Tab 3" class="tablink w-inline-block w-tab-link w--current">
              <div class="month btn3"><?php echo $Month3; ?></div>
              <div class="day btn3"><?php echo $Day3; ?></div>
              <div class="days btn3"><?php echo $Year3; ?></div>
            </a>
          </div>
          <div class="tabs-content w-tab-content">
            <div data-w-tab="Tab 1" class="tab-pane-tab-1 w-tab-pane">
              <div data-duration-in="300" data-duration-out="100" class="tabs-2 w-tabs">
                <div class="tabs-menu-4 w-tab-menu">
                  <a onclick="changeseat(this.id)" id="time1-date1" data-w-tab="Tab 1" class="time-tablink w-inline-block w-tab-link">
                    <div class="time">9:30</div>
                    <div class="wtime">AM</div>
                  </a>
                  <a onclick="changeseat(this.id)" id="time2-date1" data-w-tab="Tab 2" class="time-tablink w-inline-block w-tab-link">
                    <div class="time">12:30</div>
                    <div class="wtime">PM</div>
                  </a>
                  <a onclick="changeseat(this.id)" id="time3-date1" data-w-tab="Tab 3" class="time-tablink w-inline-block w-tab-link w--current">
                    <div class="time">3:30</div>
                    <div class="wtime">PM</div>
                  </a>
                </div>
     <?php
      }
      ?>
                <div class="tabs-content-2 w-tab-content">
                  <div data-w-tab="Tab 1" class="tab-pane-tab-1-2 w-tab-pane">
                    <div class="wrapper-book">
                      <div class="div-block-17">
                        <div class="select-seat">
                          <div class="screan"></div>
                          <div class="div-block-18">
                            <h1 class="heading-6">SCREEN THIS WAY</h1>
                            <div class="div-block-23"><img src="images/Path-34_1Path-34.png" width="20" alt="">
                              <h1 class="heading-6">Available</h1><img src="images/Path-36_1Path-36.png" width="23" alt="" class="image-4">
                              <h1 class="heading-6">Selected</h1><img src="images/Path-35_1Path-35.png" width="22" alt="" class="image-5">
                              <h1 class="heading-6">Sold</h1>
                            </div>
                          </div>
                          <div class="seat-wrap">
                            <h1 id="seat-text" class="heading-7">Select your seat</h1>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A1" alt="" class="perseats A1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A2" alt="" class="perseats A2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A3" alt="" class="perseats A3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A4" alt="" class="perseats A4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A5" alt="" class="perseats A5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A6" alt="" class="perseats A6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A7" alt="" class="perseats A7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A8" alt="" class="perseats A8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A9" alt="" class="perseats A9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A10" alt="" class="perseats A10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A11" alt="" class="perseats A11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A12" alt="" class="perseats A12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A13" alt="" class="perseats A13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A14" alt="" class="perseats A14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A15" alt="" class="perseats A15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A16" alt="" class="perseats A16">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B1" width="19" alt="" class="perseats B1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B2" width="19" alt="" class="perseats B2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B3" width="19" alt="" class="perseats B3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B4" width="19" alt="" class="perseats B4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B5" width="19" alt="" class="perseats B5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B6" width="19" alt="" class="perseats B6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B7" width="19" alt="" class="perseats B7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B8" width="19" alt="" class="perseats B8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B9" width="19" alt="" class="perseats B9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B10" width="19" alt="" class="perseats B10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B11" width="19" alt="" class="perseats B11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B12" width="19" alt="" class="perseats B12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B13" width="19" alt="" class="perseats B13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B14" width="19" alt="" class="perseats B14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B15" width="19" alt="" class="perseats B15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B16" width="19" alt="" class="perseats B16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B17" width="19" alt="" class="perseats B17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B18" width="19" alt="" class="perseats B18">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C1" width="19" alt="" class="perseats C1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C2" width="19" alt="" class="perseats C2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C3" width="19" alt="" class="perseats C3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C4" width="19" alt="" class="perseats C4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C5" width="19" alt="" class="perseats C5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C6" width="19" alt="" class="perseats C6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C7" width="19" alt="" class="perseats C7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C8" width="19" alt="" class="perseats C8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C9" width="19" alt="" class="perseats C9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C10" width="19" alt="" class="perseats C10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C11" width="19" alt="" class="perseats C11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C12" width="19" alt="" class="perseats C12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C13" width="19" alt="" class="perseats C13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C14" width="19" alt="" class="perseats C14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C15" width="19" alt="" class="perseats C15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C16" width="19" alt="" class="perseats C16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C17" width="19" alt="" class="perseats C17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C18" width="19" alt="" class="perseats C18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C19" width="19" alt="" class="perseats C19">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D1" width="19" alt="" class="perseats D1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D2" width="19" alt="" class="perseats D2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D3" width="19" alt="" class="perseats D3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D4" width="19" alt="" class="perseats D4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D5" width="19" alt="" class="perseats D5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D6" width="19" alt="" class="perseats D6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D7" width="19" alt="" class="perseats D7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D8" width="19" alt="" class="perseats D8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D9" width="19" alt="" class="perseats D9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D10" width="19" alt="" class="perseats D10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D11" width="19" alt="" class="perseats D11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D12" width="19" alt="" class="perseats D12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D13" width="19" alt="" class="perseats D13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D14" width="19" alt="" class="perseats D14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D15" width="19" alt="" class="perseats D15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D16" width="19" alt="" class="perseats D16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D17" width="19" alt="" class="perseats D17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D18"width="19" alt="" class="perseats D18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D19" width="19" alt="" class="perseats D19">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D20" width="19" alt="" class="perseats D20">

                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E1" width="19" alt="" class="perseats E1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E2" width="19" alt="" class="perseats E2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E3" width="19" alt="" class="perseats E3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E4" width="19" alt="" class="perseats E4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E5" width="19" alt="" class="perseats E5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E6" width="19" alt="" class="perseats E6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E7" width="19" alt="" class="perseats E7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E8" width="19" alt="" class="perseats E8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E9" width="19" alt="" class="perseats E9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E10" width="19" alt="" class="perseats E10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E11" width="19" alt="" class="perseats E11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E12" width="19" alt="" class="perseats E12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E13" width="19" alt="" class="perseats E13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E14" width="19" alt="" class="perseats E14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E15" width="19" alt="" class="perseats E15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E16" width="19" alt="" class="perseats E16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E17" width="19" alt="" class="perseats E17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E18" width="19" alt="" class="perseats E18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E19" width="19" alt="" class="perseats E19">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E20" width="19" alt="" class="perseats E20">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F1" width="19" alt="" class="perseats F1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F2" width="19" alt="" class="perseats F2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F3" width="19" alt="" class="perseats F3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F4" width="19" alt="" class="perseats F4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F5" width="19" alt="" class="perseats F5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F6" width="19" alt="" class="perseats F6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F7" width="19" alt="" class="perseats F7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F8" width="19" alt="" class="perseats F8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F9" width="19" alt="" class="perseats F9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F10" width="19" alt="" class="perseats F10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F11" width="19" alt="" class="perseats F11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F12" width="19" alt="" class="perseats F12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F13" width="19" alt="" class="perseats F13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F14" width="19" alt="" class="perseats F14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F15" width="19" alt="" class="perseats F15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F16" width="19" alt="" class="perseats F16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F17" width="19" alt="" class="perseats F17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F18" width="19" alt="" class="perseats F18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F19" width="19" alt="" class="perseats F19">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G1" width="19" alt="" class="perseats G1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G2" width="19" alt="" class="perseats G2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G3" width="19" alt="" class="perseats G3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G4" width="19" alt="" class="perseats G4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G5" width="19" alt="" class="perseats G5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G6" width="19" alt="" class="perseats G6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G7" width="19" alt="" class="perseats G7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G8" width="19" alt="" class="perseats G8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G9" width="19" alt="" class="perseats G9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G10" width="19" alt="" class="perseats G10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G11" width="19" alt="" class="perseats G11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G12" width="19" alt="" class="perseats G12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G13" width="19" alt="" class="perseats G13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G14" width="19" alt="" class="perseats G14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G15" width="19" alt="" class="perseats G15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G16" width="19" alt="" class="perseats G16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G17" width="19" alt="" class="perseats G17">
                            </div>
                          </div>
                        </div>
                        <div class="div-block-32">
                          <h1 class="heading-13">Card Details</h1>
                          <div class="div-block-33">
                            <div class="div-block-34"></div>
                            <h1 class="heading-14">**** **** **** 9732</h1>
                            <div class="div-block-35">
                              <h1 class="name">Jerico Navarro</h1>
                              <h1 class="heading-15">23/02</h1>
                            </div>
                          </div>
                          <div class="w-form">
                            <form id="email-form" name="email-form" data-name="Email Form" class="form-3"><label for="name-9" class="field-label-3">Name</label><input type="text" class="text-field-3 w-input" maxlength="256" name="name-9" data-name="Name 9" placeholder="Jerico Navarro" id="name-9" required=""><label for="name-10" class="field-label-3">Card Number</label><input type="text" class="text-field-3 w-input" maxlength="256" name="name-3" data-name="Name 3" placeholder="****  ****  ****  9732" id="name-3" required=""><label for="name-10" class="field-label-3">Expiration Date</label><input type="text" class="text-field-3 w-input" maxlength="256" name="name-2" data-name="Name 2" placeholder="23/03" id="name-2" required=""><input type="submit" value="Check Out" data-wait="Please wait..." class="submit-button-2 w-button"></form>
                            <div class="w-form-done">
                              <div>Thank you! Your submission has been received!</div>
                            </div>
                            <div class="w-form-fail">
                              <div>Oops! Something went wrong while submitting the form.</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div data-w-tab="Tab 2" class="tab-pane-tab-2 w-tab-pane">
                    <div class="wrapper-book">
                      <div class="div-block-17">
                        <div class="select-seat">
                          <div class="screan"></div>
                          <div class="div-block-18">
                            <h1 class="heading-6">SCREEN THIS WAY</h1>
                            <div class="div-block-23"><img src="images/Path-34_1Path-34.png" width="20" alt="">
                              <h1 class="heading-6">Available</h1><img src="images/Path-36_1Path-36.png" width="23" alt="" class="image-4">
                              <h1 class="heading-6">Selected</h1><img src="images/Path-35_1Path-35.png" width="22" alt="" class="image-5">
                              <h1 class="heading-6">Sold</h1>
                            </div>
                          </div>
                          <div class="seat-wrap">
                            <h1 id="seat-text" class="heading-7">Select your seat</h1>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A1" alt="" class="perseats A1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A2" alt="" class="perseats A2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A3" alt="" class="perseats A3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A4" alt="" class="perseats A4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A5" alt="" class="perseats A5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A6" alt="" class="perseats A6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A7" alt="" class="perseats A7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A8" alt="" class="perseats A8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A9" alt="" class="perseats A9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A10" alt="" class="perseats A10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A11" alt="" class="perseats A11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A12" alt="" class="perseats A12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A13" alt="" class="perseats A13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A14" alt="" class="perseats A14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A15" alt="" class="perseats A15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A16" alt="" class="perseats A16">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B1" width="19" alt="" class="perseats B1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B2" width="19" alt="" class="perseats B2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B3" width="19" alt="" class="perseats B3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B4" width="19" alt="" class="perseats B4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B5" width="19" alt="" class="perseats B5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B6" width="19" alt="" class="perseats B6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B7" width="19" alt="" class="perseats B7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B8" width="19" alt="" class="perseats B8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B9" width="19" alt="" class="perseats B9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B10" width="19" alt="" class="perseats B10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B11" width="19" alt="" class="perseats B11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B12" width="19" alt="" class="perseats B12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B13" width="19" alt="" class="perseats B13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B14" width="19" alt="" class="perseats B14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B15" width="19" alt="" class="perseats B15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B16" width="19" alt="" class="perseats B16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B17" width="19" alt="" class="perseats B17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B18" width="19" alt="" class="perseats B18">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C1" width="19" alt="" class="perseats C1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C2" width="19" alt="" class="perseats C2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C3" width="19" alt="" class="perseats C3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C4" width="19" alt="" class="perseats C4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C5" width="19" alt="" class="perseats C5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C6" width="19" alt="" class="perseats C6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C7" width="19" alt="" class="perseats C7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C8" width="19" alt="" class="perseats C8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C9" width="19" alt="" class="perseats C9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C10" width="19" alt="" class="perseats C10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C11" width="19" alt="" class="perseats C11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C12" width="19" alt="" class="perseats C12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C13" width="19" alt="" class="perseats C13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C14" width="19" alt="" class="perseats C14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C15" width="19" alt="" class="perseats C15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C16" width="19" alt="" class="perseats C16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C17" width="19" alt="" class="perseats C17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C18" width="19" alt="" class="perseats C18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C19" width="19" alt="" class="perseats C19">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D1" width="19" alt="" class="perseats D1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D2" width="19" alt="" class="perseats D2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D3" width="19" alt="" class="perseats D3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D4" width="19" alt="" class="perseats D4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D5" width="19" alt="" class="perseats D5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D6" width="19" alt="" class="perseats D6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D7" width="19" alt="" class="perseats D7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D8" width="19" alt="" class="perseats D8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D9" width="19" alt="" class="perseats D9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D10" width="19" alt="" class="perseats D10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D11" width="19" alt="" class="perseats D11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D12" width="19" alt="" class="perseats D12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D13" width="19" alt="" class="perseats D13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D14" width="19" alt="" class="perseats D14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D15" width="19" alt="" class="perseats D15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D16" width="19" alt="" class="perseats D16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D17" width="19" alt="" class="perseats D17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D18"width="19" alt="" class="perseats D18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D19" width="19" alt="" class="perseats D19">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D20" width="19" alt="" class="perseats D20">

                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E1" width="19" alt="" class="perseats E1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E2" width="19" alt="" class="perseats E2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E3" width="19" alt="" class="perseats E3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E4" width="19" alt="" class="perseats E4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E5" width="19" alt="" class="perseats E5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E6" width="19" alt="" class="perseats E6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E7" width="19" alt="" class="perseats E7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E8" width="19" alt="" class="perseats E8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E9" width="19" alt="" class="perseats E9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E10" width="19" alt="" class="perseats E10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E11" width="19" alt="" class="perseats E11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E12" width="19" alt="" class="perseats E12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E13" width="19" alt="" class="perseats E13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E14" width="19" alt="" class="perseats E14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E15" width="19" alt="" class="perseats E15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E16" width="19" alt="" class="perseats E16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E17" width="19" alt="" class="perseats E17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E18" width="19" alt="" class="perseats E18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E19" width="19" alt="" class="perseats E19">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E20" width="19" alt="" class="perseats E20">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F1" width="19" alt="" class="perseats F1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F2" width="19" alt="" class="perseats F2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F3" width="19" alt="" class="perseats F3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F4" width="19" alt="" class="perseats F4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F5" width="19" alt="" class="perseats F5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F6" width="19" alt="" class="perseats F6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F7" width="19" alt="" class="perseats F7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F8" width="19" alt="" class="perseats F8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F9" width="19" alt="" class="perseats F9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F10" width="19" alt="" class="perseats F10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F11" width="19" alt="" class="perseats F11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F12" width="19" alt="" class="perseats F12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F13" width="19" alt="" class="perseats F13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F14" width="19" alt="" class="perseats F14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F15" width="19" alt="" class="perseats F15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F16" width="19" alt="" class="perseats F16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F17" width="19" alt="" class="perseats F17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F18" width="19" alt="" class="perseats F18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F19" width="19" alt="" class="perseats F19">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G1" width="19" alt="" class="perseats G1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G2" width="19" alt="" class="perseats G2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G3" width="19" alt="" class="perseats G3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G4" width="19" alt="" class="perseats G4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G5" width="19" alt="" class="perseats G5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G6" width="19" alt="" class="perseats G6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G7" width="19" alt="" class="perseats G7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G8" width="19" alt="" class="perseats G8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G9" width="19" alt="" class="perseats G9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G10" width="19" alt="" class="perseats G10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G11" width="19" alt="" class="perseats G11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G12" width="19" alt="" class="perseats G12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G13" width="19" alt="" class="perseats G13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G14" width="19" alt="" class="perseats G14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G15" width="19" alt="" class="perseats G15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G16" width="19" alt="" class="perseats G16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G17" width="19" alt="" class="perseats G17">
                            </div>
                          </div>
                        </div>
                        <div class="div-block-32">
                          <h1 class="heading-13">Card Details</h1>
                          <div class="div-block-33">
                            <div class="div-block-34"></div>
                            <h1 class="heading-14">**** **** **** 9732</h1>
                            <div class="div-block-35">
                              <h1 class="name">Jerico Navarro</h1>
                              <h1 class="heading-15">23/02</h1>
                            </div>
                          </div>
                          <div class="w-form">
                            <form id="email-form" name="email-form" data-name="Email Form" class="form-3"><label for="name-10" class="field-label-3">Name</label><input type="text" class="text-field-3 w-input" maxlength="256" name="name-10" data-name="Name 10" placeholder="Jerico Navarro" id="name-10" required=""><label for="name-11" class="field-label-3">Card Number</label><input type="text" class="text-field-3 w-input" maxlength="256" name="name-3" data-name="Name 3" placeholder="****  ****  ****  9732" id="name-3" required=""><label for="name-11" class="field-label-3">Expiration Date</label><input type="text" class="text-field-3 w-input" maxlength="256" name="name-2" data-name="Name 2" placeholder="23/03" id="name-2" required=""><input type="submit" value="Check Out" data-wait="Please wait..." class="submit-button-2 w-button"></form>
                            <div class="w-form-done">
                              <div>Thank you! Your submission has been received!</div>
                            </div>
                            <div class="w-form-fail">
                              <div>Oops! Something went wrong while submitting the form.</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div data-w-tab="Tab 3" class="tab-pane-tab-3 w-tab-pane w--tab-active">
                    <div class="wrapper-book">
                      <div class="div-block-17">
                        <div class="select-seat">
                          <div class="screan"></div>
                          <div class="div-block-18">
                            <h1 class="heading-6">SCREEN THIS WAY</h1>
                            <div class="div-block-23"><img src="images/Path-34_1Path-34.png" width="20" alt="">
                              <h1 class="heading-6">Available</h1><img src="images/Path-36_1Path-36.png" width="23" alt="" class="image-4">
                              <h1 class="heading-6">Selected</h1><img src="images/Path-35_1Path-35.png" width="22" alt="" class="image-5">
                              <h1 class="heading-6">Sold</h1>
                            </div>
                          </div>
                          <div class="seat-wrap">
                            <h1 id="seat-text" class="heading-7">Select your seat</h1>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A1" alt="" class="perseats A1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A2" alt="" class="perseats A2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A3" alt="" class="perseats A3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A4" alt="" class="perseats A4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A5" alt="" class="perseats A5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A6" alt="" class="perseats A6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A7" alt="" class="perseats A7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A8" alt="" class="perseats A8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A9" alt="" class="perseats A9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A10" alt="" class="perseats A10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A11" alt="" class="perseats A11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A12" alt="" class="perseats A12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A13" alt="" class="perseats A13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A14" alt="" class="perseats A14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A15" alt="" class="perseats A15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A16" alt="" class="perseats A16">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B1" width="19" alt="" class="perseats B1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B2" width="19" alt="" class="perseats B2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B3" width="19" alt="" class="perseats B3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B4" width="19" alt="" class="perseats B4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B5" width="19" alt="" class="perseats B5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B6" width="19" alt="" class="perseats B6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B7" width="19" alt="" class="perseats B7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B8" width="19" alt="" class="perseats B8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B9" width="19" alt="" class="perseats B9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B10" width="19" alt="" class="perseats B10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B11" width="19" alt="" class="perseats B11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B12" width="19" alt="" class="perseats B12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B13" width="19" alt="" class="perseats B13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B14" width="19" alt="" class="perseats B14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B15" width="19" alt="" class="perseats B15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B16" width="19" alt="" class="perseats B16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B17" width="19" alt="" class="perseats B17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B18" width="19" alt="" class="perseats B18">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C1" width="19" alt="" class="perseats C1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C2" width="19" alt="" class="perseats C2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C3" width="19" alt="" class="perseats C3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C4" width="19" alt="" class="perseats C4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C5" width="19" alt="" class="perseats C5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C6" width="19" alt="" class="perseats C6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C7" width="19" alt="" class="perseats C7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C8" width="19" alt="" class="perseats C8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C9" width="19" alt="" class="perseats C9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C10" width="19" alt="" class="perseats C10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C11" width="19" alt="" class="perseats C11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C12" width="19" alt="" class="perseats C12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C13" width="19" alt="" class="perseats C13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C14" width="19" alt="" class="perseats C14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C15" width="19" alt="" class="perseats C15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C16" width="19" alt="" class="perseats C16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C17" width="19" alt="" class="perseats C17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C18" width="19" alt="" class="perseats C18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C19" width="19" alt="" class="perseats C19">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D1" width="19" alt="" class="perseats D1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D2" width="19" alt="" class="perseats D2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D3" width="19" alt="" class="perseats D3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D4" width="19" alt="" class="perseats D4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D5" width="19" alt="" class="perseats D5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D6" width="19" alt="" class="perseats D6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D7" width="19" alt="" class="perseats D7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D8" width="19" alt="" class="perseats D8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D9" width="19" alt="" class="perseats D9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D10" width="19" alt="" class="perseats D10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D11" width="19" alt="" class="perseats D11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D12" width="19" alt="" class="perseats D12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D13" width="19" alt="" class="perseats D13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D14" width="19" alt="" class="perseats D14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D15" width="19" alt="" class="perseats D15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D16" width="19" alt="" class="perseats D16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D17" width="19" alt="" class="perseats D17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D18"width="19" alt="" class="perseats D18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D19" width="19" alt="" class="perseats D19">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D20" width="19" alt="" class="perseats D20">

                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E1" width="19" alt="" class="perseats E1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E2" width="19" alt="" class="perseats E2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E3" width="19" alt="" class="perseats E3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E4" width="19" alt="" class="perseats E4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E5" width="19" alt="" class="perseats E5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E6" width="19" alt="" class="perseats E6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E7" width="19" alt="" class="perseats E7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E8" width="19" alt="" class="perseats E8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E9" width="19" alt="" class="perseats E9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E10" width="19" alt="" class="perseats E10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E11" width="19" alt="" class="perseats E11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E12" width="19" alt="" class="perseats E12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E13" width="19" alt="" class="perseats E13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E14" width="19" alt="" class="perseats E14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E15" width="19" alt="" class="perseats E15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E16" width="19" alt="" class="perseats E16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E17" width="19" alt="" class="perseats E17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E18" width="19" alt="" class="perseats E18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E19" width="19" alt="" class="perseats E19">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E20" width="19" alt="" class="perseats E20">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F1" width="19" alt="" class="perseats F1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F2" width="19" alt="" class="perseats F2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F3" width="19" alt="" class="perseats F3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F4" width="19" alt="" class="perseats F4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F5" width="19" alt="" class="perseats F5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F6" width="19" alt="" class="perseats F6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F7" width="19" alt="" class="perseats F7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F8" width="19" alt="" class="perseats F8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F9" width="19" alt="" class="perseats F9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F10" width="19" alt="" class="perseats F10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F11" width="19" alt="" class="perseats F11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F12" width="19" alt="" class="perseats F12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F13" width="19" alt="" class="perseats F13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F14" width="19" alt="" class="perseats F14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F15" width="19" alt="" class="perseats F15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F16" width="19" alt="" class="perseats F16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F17" width="19" alt="" class="perseats F17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F18" width="19" alt="" class="perseats F18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F19" width="19" alt="" class="perseats F19">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G1" width="19" alt="" class="perseats G1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G2" width="19" alt="" class="perseats G2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G3" width="19" alt="" class="perseats G3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G4" width="19" alt="" class="perseats G4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G5" width="19" alt="" class="perseats G5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G6" width="19" alt="" class="perseats G6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G7" width="19" alt="" class="perseats G7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G8" width="19" alt="" class="perseats G8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G9" width="19" alt="" class="perseats G9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G10" width="19" alt="" class="perseats G10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G11" width="19" alt="" class="perseats G11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G12" width="19" alt="" class="perseats G12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G13" width="19" alt="" class="perseats G13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G14" width="19" alt="" class="perseats G14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G15" width="19" alt="" class="perseats G15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G16" width="19" alt="" class="perseats G16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G17" width="19" alt="" class="perseats G17">
                            </div>
                          </div>
                        </div>
                        <div class="div-block-32">
                          <h1 class="heading-13">Card Details</h1>
                          <div class="div-block-33">
                            <div class="div-block-34"></div>
                            <h1 class="heading-14">**** **** **** 9732</h1>
                            <div class="div-block-35">
                              <h1 class="name">Jerico Navarro</h1>
                              <h1 class="heading-15">23/02</h1>
                            </div>
                          </div>
                          <div class="w-form">
                            <form id="email-form" name="email-form" data-name="Email Form" class="form-3"><label for="name-11" class="field-label-3">Name</label><input type="text" class="text-field-3 w-input" maxlength="256" name="name-11" data-name="Name 11" placeholder="Jerico Navarro" id="name-11" required=""><label for="name-12" class="field-label-3">Card Number</label><input type="text" class="text-field-3 w-input" maxlength="256" name="name-3" data-name="Name 3" placeholder="****  ****  ****  9732" id="name-3" required=""><label for="name-12" class="field-label-3">Expiration Date</label><input type="text" class="text-field-3 w-input" maxlength="256" name="name-2" data-name="Name 2" placeholder="23/03" id="name-2" required=""><input type="submit" value="Check Out" data-wait="Please wait..." class="submit-button-2 w-button"></form>
                            <div class="w-form-done">
                              <div>Thank you! Your submission has been received!</div>
                            </div>
                            <div class="w-form-fail">
                              <div>Oops! Something went wrong while submitting the form.</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div data-w-tab="Tab 2" class="w-tab-pane">
              <div data-duration-in="300" data-duration-out="100" class="tabs-2 w-tabs">
                <div class="tabs-menu-4 w-tab-menu">
                  <a onclick="changeseat(this.id)" id="time1-date2" data-w-tab="Tab 1" class="time-tablink w-inline-block w-tab-link w--current">
                    <div class="time">9:30</div>
                    <div class="wtime">AM</div>
                  </a>
                  <a onclick="changeseat(this.id)" id="time2-date2" data-w-tab="Tab 2" class="time-tablink w-inline-block w-tab-link">
                    <div class="time">12:30</div>
                    <div class="wtime">PM</div>
                  </a>
                  <a onclick="changeseat(this.id)" id="time3-date2" data-w-tab="Tab 3" class="time-tablink w-inline-block w-tab-link">
                    <div class="time">3:30</div>
                    <div class="wtime">PM</div>
                  </a>
                </div>
                <div class="tabs-content-2 w-tab-content">
                  <div data-w-tab="Tab 1" class="tab-pane-tab-1-2 w-tab-pane w--tab-active">
                    <div class="wrapper-book">
                      <div class="div-block-17">
                        <div class="select-seat">
                          <div class="screan"></div>
                          <div class="div-block-18">
                            <h1 class="heading-6">SCREEN THIS WAY</h1>
                            <div class="div-block-23"><img src="images/Path-34_1Path-34.png" width="20" alt="">
                              <h1 class="heading-6">Available</h1><img src="images/Path-36_1Path-36.png" width="23" alt="" class="image-4">
                              <h1 class="heading-6">Selected</h1><img src="images/Path-35_1Path-35.png" width="22" alt="" class="image-5">
                              <h1 class="heading-6">Sold</h1>
                            </div>
                          </div>
                          <div class="seat-wrap">
                            <h1 id="seat-text" class="heading-7">Select your seat</h1>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A1" alt="" class="perseats A1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A2" alt="" class="perseats A2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A3" alt="" class="perseats A3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A4" alt="" class="perseats A4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A5" alt="" class="perseats A5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A6" alt="" class="perseats A6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A7" alt="" class="perseats A7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A8" alt="" class="perseats A8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A9" alt="" class="perseats A9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A10" alt="" class="perseats A10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A11" alt="" class="perseats A11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A12" alt="" class="perseats A12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A13" alt="" class="perseats A13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A14" alt="" class="perseats A14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A15" alt="" class="perseats A15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A16" alt="" class="perseats A16">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B1" width="19" alt="" class="perseats B1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B2" width="19" alt="" class="perseats B2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B3" width="19" alt="" class="perseats B3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B4" width="19" alt="" class="perseats B4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B5" width="19" alt="" class="perseats B5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B6" width="19" alt="" class="perseats B6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B7" width="19" alt="" class="perseats B7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B8" width="19" alt="" class="perseats B8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B9" width="19" alt="" class="perseats B9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B10" width="19" alt="" class="perseats B10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B11" width="19" alt="" class="perseats B11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B12" width="19" alt="" class="perseats B12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B13" width="19" alt="" class="perseats B13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B14" width="19" alt="" class="perseats B14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B15" width="19" alt="" class="perseats B15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B16" width="19" alt="" class="perseats B16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B17" width="19" alt="" class="perseats B17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B18" width="19" alt="" class="perseats B18">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C1" width="19" alt="" class="perseats C1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C2" width="19" alt="" class="perseats C2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C3" width="19" alt="" class="perseats C3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C4" width="19" alt="" class="perseats C4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C5" width="19" alt="" class="perseats C5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C6" width="19" alt="" class="perseats C6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C7" width="19" alt="" class="perseats C7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C8" width="19" alt="" class="perseats C8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C9" width="19" alt="" class="perseats C9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C10" width="19" alt="" class="perseats C10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C11" width="19" alt="" class="perseats C11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C12" width="19" alt="" class="perseats C12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C13" width="19" alt="" class="perseats C13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C14" width="19" alt="" class="perseats C14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C15" width="19" alt="" class="perseats C15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C16" width="19" alt="" class="perseats C16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C17" width="19" alt="" class="perseats C17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C18" width="19" alt="" class="perseats C18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C19" width="19" alt="" class="perseats C19">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D1" width="19" alt="" class="perseats D1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D2" width="19" alt="" class="perseats D2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D3" width="19" alt="" class="perseats D3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D4" width="19" alt="" class="perseats D4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D5" width="19" alt="" class="perseats D5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D6" width="19" alt="" class="perseats D6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D7" width="19" alt="" class="perseats D7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D8" width="19" alt="" class="perseats D8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D9" width="19" alt="" class="perseats D9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D10" width="19" alt="" class="perseats D10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D11" width="19" alt="" class="perseats D11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D12" width="19" alt="" class="perseats D12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D13" width="19" alt="" class="perseats D13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D14" width="19" alt="" class="perseats D14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D15" width="19" alt="" class="perseats D15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D16" width="19" alt="" class="perseats D16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D17" width="19" alt="" class="perseats D17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D18"width="19" alt="" class="perseats D18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D19" width="19" alt="" class="perseats D19">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D20" width="19" alt="" class="perseats D20">

                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E1" width="19" alt="" class="perseats E1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E2" width="19" alt="" class="perseats E2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E3" width="19" alt="" class="perseats E3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E4" width="19" alt="" class="perseats E4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E5" width="19" alt="" class="perseats E5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E6" width="19" alt="" class="perseats E6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E7" width="19" alt="" class="perseats E7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E8" width="19" alt="" class="perseats E8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E9" width="19" alt="" class="perseats E9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E10" width="19" alt="" class="perseats E10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E11" width="19" alt="" class="perseats E11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E12" width="19" alt="" class="perseats E12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E13" width="19" alt="" class="perseats E13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E14" width="19" alt="" class="perseats E14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E15" width="19" alt="" class="perseats E15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E16" width="19" alt="" class="perseats E16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E17" width="19" alt="" class="perseats E17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E18" width="19" alt="" class="perseats E18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E19" width="19" alt="" class="perseats E19">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E20" width="19" alt="" class="perseats E20">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F1" width="19" alt="" class="perseats F1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F2" width="19" alt="" class="perseats F2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F3" width="19" alt="" class="perseats F3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F4" width="19" alt="" class="perseats F4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F5" width="19" alt="" class="perseats F5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F6" width="19" alt="" class="perseats F6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F7" width="19" alt="" class="perseats F7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F8" width="19" alt="" class="perseats F8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F9" width="19" alt="" class="perseats F9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F10" width="19" alt="" class="perseats F10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F11" width="19" alt="" class="perseats F11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F12" width="19" alt="" class="perseats F12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F13" width="19" alt="" class="perseats F13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F14" width="19" alt="" class="perseats F14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F15" width="19" alt="" class="perseats F15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F16" width="19" alt="" class="perseats F16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F17" width="19" alt="" class="perseats F17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F18" width="19" alt="" class="perseats F18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F19" width="19" alt="" class="perseats F19">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G1" width="19" alt="" class="perseats G1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G2" width="19" alt="" class="perseats G2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G3" width="19" alt="" class="perseats G3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G4" width="19" alt="" class="perseats G4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G5" width="19" alt="" class="perseats G5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G6" width="19" alt="" class="perseats G6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G7" width="19" alt="" class="perseats G7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G8" width="19" alt="" class="perseats G8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G9" width="19" alt="" class="perseats G9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G10" width="19" alt="" class="perseats G10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G11" width="19" alt="" class="perseats G11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G12" width="19" alt="" class="perseats G12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G13" width="19" alt="" class="perseats G13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G14" width="19" alt="" class="perseats G14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G15" width="19" alt="" class="perseats G15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G16" width="19" alt="" class="perseats G16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G17" width="19" alt="" class="perseats G17">
                            </div>
                          </div>
                        </div>
                        <div class="div-block-32">
                          <h1 class="heading-13">Card Details</h1>
                          <div class="div-block-33">
                            <div class="div-block-34"></div>
                            <h1 class="heading-14">**** **** **** 9732</h1>
                            <div class="div-block-35">
                              <h1 class="name">Jerico Navarro</h1>
                              <h1 class="heading-15">23/02</h1>
                            </div>
                          </div>
                          <div class="w-form">
                            <form id="email-form" name="email-form" data-name="Email Form" class="form-3"><label for="name-6" class="field-label-3">Name</label><input type="text" class="text-field-3 w-input" maxlength="256" name="name-6" data-name="Name 6" placeholder="Jerico Navarro" id="name-6" required=""><label for="name-7" class="field-label-3">Card Number</label><input type="text" class="text-field-3 w-input" maxlength="256" name="name-3" data-name="Name 3" placeholder="****  ****  ****  9732" id="name-3" required=""><label for="name-7" class="field-label-3">Expiration Date</label><input type="text" class="text-field-3 w-input" maxlength="256" name="name-2" data-name="Name 2" placeholder="23/03" id="name-2" required=""><input type="submit" value="Check Out" data-wait="Please wait..." class="submit-button-2 w-button"></form>
                            <div class="w-form-done">
                              <div>Thank you! Your submission has been received!</div>
                            </div>
                            <div class="w-form-fail">
                              <div>Oops! Something went wrong while submitting the form.</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div data-w-tab="Tab 2" class="tab-pane-tab-2 w-tab-pane">
                    <div class="wrapper-book">
                      <div class="div-block-17">
                        <div class="select-seat">
                          <div class="screan"></div>
                          <div class="div-block-18">
                            <h1 class="heading-6">SCREEN THIS WAY</h1>
                            <div class="div-block-23"><img src="images/Path-34_1Path-34.png" width="20" alt="">
                              <h1 class="heading-6">Available</h1><img src="images/Path-36_1Path-36.png" width="23" alt="" class="image-4">
                              <h1 class="heading-6">Selected</h1><img src="images/Path-35_1Path-35.png" width="22" alt="" class="image-5">
                              <h1 class="heading-6">Sold</h1>
                            </div>
                          </div>
                          <div class="seat-wrap">
                            <h1 id="seat-text" class="heading-7">Select your seat</h1>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A1" alt="" class="perseats A1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A2" alt="" class="perseats A2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A3" alt="" class="perseats A3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A4" alt="" class="perseats A4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A5" alt="" class="perseats A5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A6" alt="" class="perseats A6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A7" alt="" class="perseats A7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A8" alt="" class="perseats A8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A9" alt="" class="perseats A9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A10" alt="" class="perseats A10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A11" alt="" class="perseats A11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A12" alt="" class="perseats A12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A13" alt="" class="perseats A13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A14" alt="" class="perseats A14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A15" alt="" class="perseats A15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A16" alt="" class="perseats A16">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B1" width="19" alt="" class="perseats B1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B2" width="19" alt="" class="perseats B2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B3" width="19" alt="" class="perseats B3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B4" width="19" alt="" class="perseats B4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B5" width="19" alt="" class="perseats B5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B6" width="19" alt="" class="perseats B6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B7" width="19" alt="" class="perseats B7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B8" width="19" alt="" class="perseats B8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B9" width="19" alt="" class="perseats B9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B10" width="19" alt="" class="perseats B10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B11" width="19" alt="" class="perseats B11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B12" width="19" alt="" class="perseats B12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B13" width="19" alt="" class="perseats B13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B14" width="19" alt="" class="perseats B14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B15" width="19" alt="" class="perseats B15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B16" width="19" alt="" class="perseats B16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B17" width="19" alt="" class="perseats B17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B18" width="19" alt="" class="perseats B18">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C1" width="19" alt="" class="perseats C1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C2" width="19" alt="" class="perseats C2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C3" width="19" alt="" class="perseats C3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C4" width="19" alt="" class="perseats C4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C5" width="19" alt="" class="perseats C5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C6" width="19" alt="" class="perseats C6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C7" width="19" alt="" class="perseats C7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C8" width="19" alt="" class="perseats C8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C9" width="19" alt="" class="perseats C9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C10" width="19" alt="" class="perseats C10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C11" width="19" alt="" class="perseats C11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C12" width="19" alt="" class="perseats C12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C13" width="19" alt="" class="perseats C13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C14" width="19" alt="" class="perseats C14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C15" width="19" alt="" class="perseats C15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C16" width="19" alt="" class="perseats C16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C17" width="19" alt="" class="perseats C17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C18" width="19" alt="" class="perseats C18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C19" width="19" alt="" class="perseats C19">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D1" width="19" alt="" class="perseats D1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D2" width="19" alt="" class="perseats D2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D3" width="19" alt="" class="perseats D3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D4" width="19" alt="" class="perseats D4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D5" width="19" alt="" class="perseats D5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D6" width="19" alt="" class="perseats D6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D7" width="19" alt="" class="perseats D7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D8" width="19" alt="" class="perseats D8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D9" width="19" alt="" class="perseats D9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D10" width="19" alt="" class="perseats D10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D11" width="19" alt="" class="perseats D11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D12" width="19" alt="" class="perseats D12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D13" width="19" alt="" class="perseats D13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D14" width="19" alt="" class="perseats D14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D15" width="19" alt="" class="perseats D15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D16" width="19" alt="" class="perseats D16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D17" width="19" alt="" class="perseats D17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D18"width="19" alt="" class="perseats D18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D19" width="19" alt="" class="perseats D19">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D20" width="19" alt="" class="perseats D20">

                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E1" width="19" alt="" class="perseats E1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E2" width="19" alt="" class="perseats E2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E3" width="19" alt="" class="perseats E3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E4" width="19" alt="" class="perseats E4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E5" width="19" alt="" class="perseats E5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E6" width="19" alt="" class="perseats E6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E7" width="19" alt="" class="perseats E7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E8" width="19" alt="" class="perseats E8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E9" width="19" alt="" class="perseats E9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E10" width="19" alt="" class="perseats E10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E11" width="19" alt="" class="perseats E11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E12" width="19" alt="" class="perseats E12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E13" width="19" alt="" class="perseats E13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E14" width="19" alt="" class="perseats E14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E15" width="19" alt="" class="perseats E15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E16" width="19" alt="" class="perseats E16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E17" width="19" alt="" class="perseats E17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E18" width="19" alt="" class="perseats E18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E19" width="19" alt="" class="perseats E19">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E20" width="19" alt="" class="perseats E20">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F1" width="19" alt="" class="perseats F1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F2" width="19" alt="" class="perseats F2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F3" width="19" alt="" class="perseats F3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F4" width="19" alt="" class="perseats F4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F5" width="19" alt="" class="perseats F5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F6" width="19" alt="" class="perseats F6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F7" width="19" alt="" class="perseats F7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F8" width="19" alt="" class="perseats F8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F9" width="19" alt="" class="perseats F9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F10" width="19" alt="" class="perseats F10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F11" width="19" alt="" class="perseats F11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F12" width="19" alt="" class="perseats F12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F13" width="19" alt="" class="perseats F13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F14" width="19" alt="" class="perseats F14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F15" width="19" alt="" class="perseats F15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F16" width="19" alt="" class="perseats F16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F17" width="19" alt="" class="perseats F17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F18" width="19" alt="" class="perseats F18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F19" width="19" alt="" class="perseats F19">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G1" width="19" alt="" class="perseats G1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G2" width="19" alt="" class="perseats G2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G3" width="19" alt="" class="perseats G3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G4" width="19" alt="" class="perseats G4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G5" width="19" alt="" class="perseats G5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G6" width="19" alt="" class="perseats G6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G7" width="19" alt="" class="perseats G7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G8" width="19" alt="" class="perseats G8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G9" width="19" alt="" class="perseats G9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G10" width="19" alt="" class="perseats G10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G11" width="19" alt="" class="perseats G11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G12" width="19" alt="" class="perseats G12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G13" width="19" alt="" class="perseats G13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G14" width="19" alt="" class="perseats G14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G15" width="19" alt="" class="perseats G15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G16" width="19" alt="" class="perseats G16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G17" width="19" alt="" class="perseats G17">
                            </div>
                          </div>
                        </div>
                        <div class="div-block-32">
                          <h1 class="heading-13">Card Details</h1>
                          <div class="div-block-33">
                            <div class="div-block-34"></div>
                            <h1 class="heading-14">**** **** **** 9732</h1>
                            <div class="div-block-35">
                              <h1 class="name">Jerico Navarro</h1>
                              <h1 class="heading-15">23/02</h1>
                            </div>
                          </div>
                          <div class="w-form">
                            <form id="email-form" name="email-form" data-name="Email Form" class="form-3"><label for="name-7" class="field-label-3">Name</label><input type="text" class="text-field-3 w-input" maxlength="256" name="name-7" data-name="Name 7" placeholder="Jerico Navarro" id="name-7" required=""><label for="name-8" class="field-label-3">Card Number</label><input type="text" class="text-field-3 w-input" maxlength="256" name="name-3" data-name="Name 3" placeholder="****  ****  ****  9732" id="name-3" required=""><label for="name-8" class="field-label-3">Expiration Date</label><input type="text" class="text-field-3 w-input" maxlength="256" name="name-2" data-name="Name 2" placeholder="23/03" id="name-2" required=""><input type="submit" value="Check Out" data-wait="Please wait..." class="submit-button-2 w-button"></form>
                            <div class="w-form-done">
                              <div>Thank you! Your submission has been received!</div>
                            </div>
                            <div class="w-form-fail">
                              <div>Oops! Something went wrong while submitting the form.</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div data-w-tab="Tab 3" class="tab-pane-tab-3 w-tab-pane">
                    <div class="wrapper-book">
                      <div class="div-block-17">
                        <div class="select-seat">
                          <div class="screan"></div>
                          <div class="div-block-18">
                            <h1 class="heading-6">SCREEN THIS WAY</h1>
                            <div class="div-block-23"><img src="images/Path-34_1Path-34.png" width="20" alt="">
                              <h1 class="heading-6">Available</h1><img src="images/Path-36_1Path-36.png" width="23" alt="" class="image-4">
                              <h1 class="heading-6">Selected</h1><img src="images/Path-35_1Path-35.png" width="22" alt="" class="image-5">
                              <h1 class="heading-6">Sold</h1>
                            </div>
                          </div>
                          <div class="seat-wrap">
                            <h1 id="seat-text" class="heading-7">Select your seat</h1>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A1" alt="" class="perseats A1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A2" alt="" class="perseats A2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A3" alt="" class="perseats A3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A4" alt="" class="perseats A4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A5" alt="" class="perseats A5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A6" alt="" class="perseats A6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A7" alt="" class="perseats A7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A8" alt="" class="perseats A8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A9" alt="" class="perseats A9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A10" alt="" class="perseats A10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A11" alt="" class="perseats A11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A12" alt="" class="perseats A12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A13" alt="" class="perseats A13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A14" alt="" class="perseats A14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A15" alt="" class="perseats A15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A16" alt="" class="perseats A16">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B1" width="19" alt="" class="perseats B1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B2" width="19" alt="" class="perseats B2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B3" width="19" alt="" class="perseats B3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B4" width="19" alt="" class="perseats B4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B5" width="19" alt="" class="perseats B5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B6" width="19" alt="" class="perseats B6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B7" width="19" alt="" class="perseats B7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B8" width="19" alt="" class="perseats B8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B9" width="19" alt="" class="perseats B9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B10" width="19" alt="" class="perseats B10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B11" width="19" alt="" class="perseats B11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B12" width="19" alt="" class="perseats B12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B13" width="19" alt="" class="perseats B13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B14" width="19" alt="" class="perseats B14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B15" width="19" alt="" class="perseats B15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B16" width="19" alt="" class="perseats B16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B17" width="19" alt="" class="perseats B17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B18" width="19" alt="" class="perseats B18">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C1" width="19" alt="" class="perseats C1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C2" width="19" alt="" class="perseats C2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C3" width="19" alt="" class="perseats C3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C4" width="19" alt="" class="perseats C4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C5" width="19" alt="" class="perseats C5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C6" width="19" alt="" class="perseats C6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C7" width="19" alt="" class="perseats C7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C8" width="19" alt="" class="perseats C8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C9" width="19" alt="" class="perseats C9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C10" width="19" alt="" class="perseats C10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C11" width="19" alt="" class="perseats C11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C12" width="19" alt="" class="perseats C12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C13" width="19" alt="" class="perseats C13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C14" width="19" alt="" class="perseats C14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C15" width="19" alt="" class="perseats C15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C16" width="19" alt="" class="perseats C16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C17" width="19" alt="" class="perseats C17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C18" width="19" alt="" class="perseats C18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C19" width="19" alt="" class="perseats C19">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D1" width="19" alt="" class="perseats D1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D2" width="19" alt="" class="perseats D2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D3" width="19" alt="" class="perseats D3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D4" width="19" alt="" class="perseats D4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D5" width="19" alt="" class="perseats D5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D6" width="19" alt="" class="perseats D6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D7" width="19" alt="" class="perseats D7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D8" width="19" alt="" class="perseats D8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D9" width="19" alt="" class="perseats D9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D10" width="19" alt="" class="perseats D10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D11" width="19" alt="" class="perseats D11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D12" width="19" alt="" class="perseats D12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D13" width="19" alt="" class="perseats D13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D14" width="19" alt="" class="perseats D14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D15" width="19" alt="" class="perseats D15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D16" width="19" alt="" class="perseats D16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D17" width="19" alt="" class="perseats D17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D18"width="19" alt="" class="perseats D18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D19" width="19" alt="" class="perseats D19">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D20" width="19" alt="" class="perseats D20">

                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E1" width="19" alt="" class="perseats E1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E2" width="19" alt="" class="perseats E2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E3" width="19" alt="" class="perseats E3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E4" width="19" alt="" class="perseats E4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E5" width="19" alt="" class="perseats E5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E6" width="19" alt="" class="perseats E6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E7" width="19" alt="" class="perseats E7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E8" width="19" alt="" class="perseats E8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E9" width="19" alt="" class="perseats E9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E10" width="19" alt="" class="perseats E10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E11" width="19" alt="" class="perseats E11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E12" width="19" alt="" class="perseats E12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E13" width="19" alt="" class="perseats E13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E14" width="19" alt="" class="perseats E14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E15" width="19" alt="" class="perseats E15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E16" width="19" alt="" class="perseats E16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E17" width="19" alt="" class="perseats E17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E18" width="19" alt="" class="perseats E18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E19" width="19" alt="" class="perseats E19">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E20" width="19" alt="" class="perseats E20">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F1" width="19" alt="" class="perseats F1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F2" width="19" alt="" class="perseats F2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F3" width="19" alt="" class="perseats F3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F4" width="19" alt="" class="perseats F4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F5" width="19" alt="" class="perseats F5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F6" width="19" alt="" class="perseats F6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F7" width="19" alt="" class="perseats F7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F8" width="19" alt="" class="perseats F8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F9" width="19" alt="" class="perseats F9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F10" width="19" alt="" class="perseats F10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F11" width="19" alt="" class="perseats F11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F12" width="19" alt="" class="perseats F12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F13" width="19" alt="" class="perseats F13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F14" width="19" alt="" class="perseats F14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F15" width="19" alt="" class="perseats F15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F16" width="19" alt="" class="perseats F16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F17" width="19" alt="" class="perseats F17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F18" width="19" alt="" class="perseats F18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F19" width="19" alt="" class="perseats F19">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G1" width="19" alt="" class="perseats G1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G2" width="19" alt="" class="perseats G2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G3" width="19" alt="" class="perseats G3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G4" width="19" alt="" class="perseats G4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G5" width="19" alt="" class="perseats G5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G6" width="19" alt="" class="perseats G6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G7" width="19" alt="" class="perseats G7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G8" width="19" alt="" class="perseats G8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G9" width="19" alt="" class="perseats G9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G10" width="19" alt="" class="perseats G10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G11" width="19" alt="" class="perseats G11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G12" width="19" alt="" class="perseats G12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G13" width="19" alt="" class="perseats G13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G14" width="19" alt="" class="perseats G14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G15" width="19" alt="" class="perseats G15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G16" width="19" alt="" class="perseats G16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G17" width="19" alt="" class="perseats G17">
                            </div>
                          </div>
                        </div>
                        <div class="div-block-32">
                          <h1 class="heading-13">Card Details</h1>
                          <div class="div-block-33">
                            <div class="div-block-34"></div>
                            <h1 class="heading-14">**** **** **** 9732</h1>
                            <div class="div-block-35">
                              <h1 class="name">Jerico Navarro</h1>
                              <h1 class="heading-15">23/02</h1>
                            </div>
                          </div>
                          <div class="w-form">
                            <form id="email-form" name="email-form" data-name="Email Form" class="form-3"><label for="name-8" class="field-label-3">Name</label><input type="text" class="text-field-3 w-input" maxlength="256" name="name-8" data-name="Name 8" placeholder="Jerico Navarro" id="name-8" required=""><label for="name-9" class="field-label-3">Card Number</label><input type="text" class="text-field-3 w-input" maxlength="256" name="name-3" data-name="Name 3" placeholder="****  ****  ****  9732" id="name-3" required=""><label for="name-9" class="field-label-3">Expiration Date</label><input type="text" class="text-field-3 w-input" maxlength="256" name="name-2" data-name="Name 2" placeholder="23/03" id="name-2" required=""><input type="submit" value="Check Out" data-wait="Please wait..." class="submit-button-2 w-button"></form>
                            <div class="w-form-done">
                              <div>Thank you! Your submission has been received!</div>
                            </div>
                            <div class="w-form-fail">
                              <div>Oops! Something went wrong while submitting the form.</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div data-w-tab="Tab 3" class="w-tab-pane w--tab-active">
              <div data-duration-in="300" data-duration-out="100" class="tabs-2 w-tabs">
                <div class="tabs-menu-4 w-tab-menu">
                  <a onclick="changeseat(this.id)" id="time1-date3" data-w-tab="Tab 1" class="time-tablink w-inline-block w-tab-link">
                    <div class="time">9:30</div>
                    <div class="wtime">AM</div>
                  </a>
                  <a onclick="changeseat(this.id)" id="time2-date3" data-w-tab="Tab 2" class="time-tablink w-inline-block w-tab-link">
                    <div class="time">12:30</div>
                    <div class="wtime">PM</div>
                  </a>
                  <a onclick="changeseat(this.id)" id="time3-date3" data-w-tab="Tab 3" class="time-tablink w-inline-block w-tab-link w--current">
                    <div class="time">3:30</div>
                    <div class="wtime">PM</div>
                  </a>
                </div>
                <div class="tabs-content-2 w-tab-content">
                  <div data-w-tab="Tab 1" class="tab-pane-tab-1-2 w-tab-pane">
                    <div class="wrapper-book">
                      <div class="div-block-17">
                        <div class="select-seat">
                          <div class="screan"></div>
                          <div class="div-block-18">
                            <h1 class="heading-6">SCREEN THIS WAY</h1>
                            <div class="div-block-23"><img src="images/Path-34_1Path-34.png" width="20" alt="">
                              <h1 class="heading-6">Available</h1><img src="images/Path-36_1Path-36.png" width="23" alt="" class="image-4">
                              <h1 class="heading-6">Selected</h1><img src="images/Path-35_1Path-35.png" width="22" alt="" class="image-5">
                              <h1 class="heading-6">Sold</h1>
                            </div>
                          </div>
                          <div class="seat-wrap">
                            <h1 id="seat-text" class="heading-7">Select your seat</h1>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A1" alt="" class="perseats A1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A2" alt="" class="perseats A2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A3" alt="" class="perseats A3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A4" alt="" class="perseats A4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A5" alt="" class="perseats A5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A6" alt="" class="perseats A6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A7" alt="" class="perseats A7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A8" alt="" class="perseats A8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A9" alt="" class="perseats A9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A10" alt="" class="perseats A10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A11" alt="" class="perseats A11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A12" alt="" class="perseats A12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A13" alt="" class="perseats A13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A14" alt="" class="perseats A14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A15" alt="" class="perseats A15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A16" alt="" class="perseats A16">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B1" width="19" alt="" class="perseats B1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B2" width="19" alt="" class="perseats B2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B3" width="19" alt="" class="perseats B3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B4" width="19" alt="" class="perseats B4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B5" width="19" alt="" class="perseats B5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B6" width="19" alt="" class="perseats B6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B7" width="19" alt="" class="perseats B7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B8" width="19" alt="" class="perseats B8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B9" width="19" alt="" class="perseats B9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B10" width="19" alt="" class="perseats B10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B11" width="19" alt="" class="perseats B11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B12" width="19" alt="" class="perseats B12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B13" width="19" alt="" class="perseats B13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B14" width="19" alt="" class="perseats B14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B15" width="19" alt="" class="perseats B15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B16" width="19" alt="" class="perseats B16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B17" width="19" alt="" class="perseats B17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B18" width="19" alt="" class="perseats B18">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C1" width="19" alt="" class="perseats C1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C2" width="19" alt="" class="perseats C2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C3" width="19" alt="" class="perseats C3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C4" width="19" alt="" class="perseats C4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C5" width="19" alt="" class="perseats C5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C6" width="19" alt="" class="perseats C6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C7" width="19" alt="" class="perseats C7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C8" width="19" alt="" class="perseats C8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C9" width="19" alt="" class="perseats C9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C10" width="19" alt="" class="perseats C10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C11" width="19" alt="" class="perseats C11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C12" width="19" alt="" class="perseats C12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C13" width="19" alt="" class="perseats C13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C14" width="19" alt="" class="perseats C14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C15" width="19" alt="" class="perseats C15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C16" width="19" alt="" class="perseats C16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C17" width="19" alt="" class="perseats C17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C18" width="19" alt="" class="perseats C18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C19" width="19" alt="" class="perseats C19">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D1" width="19" alt="" class="perseats D1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D2" width="19" alt="" class="perseats D2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D3" width="19" alt="" class="perseats D3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D4" width="19" alt="" class="perseats D4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D5" width="19" alt="" class="perseats D5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D6" width="19" alt="" class="perseats D6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D7" width="19" alt="" class="perseats D7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D8" width="19" alt="" class="perseats D8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D9" width="19" alt="" class="perseats D9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D10" width="19" alt="" class="perseats D10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D11" width="19" alt="" class="perseats D11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D12" width="19" alt="" class="perseats D12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D13" width="19" alt="" class="perseats D13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D14" width="19" alt="" class="perseats D14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D15" width="19" alt="" class="perseats D15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D16" width="19" alt="" class="perseats D16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D17" width="19" alt="" class="perseats D17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D18"width="19" alt="" class="perseats D18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D19" width="19" alt="" class="perseats D19">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D20" width="19" alt="" class="perseats D20">

                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E1" width="19" alt="" class="perseats E1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E2" width="19" alt="" class="perseats E2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E3" width="19" alt="" class="perseats E3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E4" width="19" alt="" class="perseats E4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E5" width="19" alt="" class="perseats E5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E6" width="19" alt="" class="perseats E6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E7" width="19" alt="" class="perseats E7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E8" width="19" alt="" class="perseats E8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E9" width="19" alt="" class="perseats E9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E10" width="19" alt="" class="perseats E10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E11" width="19" alt="" class="perseats E11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E12" width="19" alt="" class="perseats E12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E13" width="19" alt="" class="perseats E13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E14" width="19" alt="" class="perseats E14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E15" width="19" alt="" class="perseats E15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E16" width="19" alt="" class="perseats E16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E17" width="19" alt="" class="perseats E17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E18" width="19" alt="" class="perseats E18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E19" width="19" alt="" class="perseats E19">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E20" width="19" alt="" class="perseats E20">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F1" width="19" alt="" class="perseats F1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F2" width="19" alt="" class="perseats F2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F3" width="19" alt="" class="perseats F3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F4" width="19" alt="" class="perseats F4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F5" width="19" alt="" class="perseats F5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F6" width="19" alt="" class="perseats F6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F7" width="19" alt="" class="perseats F7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F8" width="19" alt="" class="perseats F8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F9" width="19" alt="" class="perseats F9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F10" width="19" alt="" class="perseats F10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F11" width="19" alt="" class="perseats F11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F12" width="19" alt="" class="perseats F12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F13" width="19" alt="" class="perseats F13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F14" width="19" alt="" class="perseats F14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F15" width="19" alt="" class="perseats F15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F16" width="19" alt="" class="perseats F16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F17" width="19" alt="" class="perseats F17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F18" width="19" alt="" class="perseats F18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F19" width="19" alt="" class="perseats F19">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G1" width="19" alt="" class="perseats G1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G2" width="19" alt="" class="perseats G2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G3" width="19" alt="" class="perseats G3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G4" width="19" alt="" class="perseats G4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G5" width="19" alt="" class="perseats G5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G6" width="19" alt="" class="perseats G6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G7" width="19" alt="" class="perseats G7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G8" width="19" alt="" class="perseats G8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G9" width="19" alt="" class="perseats G9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G10" width="19" alt="" class="perseats G10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G11" width="19" alt="" class="perseats G11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G12" width="19" alt="" class="perseats G12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G13" width="19" alt="" class="perseats G13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G14" width="19" alt="" class="perseats G14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G15" width="19" alt="" class="perseats G15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G16" width="19" alt="" class="perseats G16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G17" width="19" alt="" class="perseats G17">
                            </div>
                          </div>
                        </div>
                        <div class="div-block-32">
                          <h1 class="heading-13">Card Details</h1>
                          <div class="div-block-33">
                            <div class="div-block-34"></div>
                            <h1 class="heading-14">**** **** **** 9732</h1>
                            <div class="div-block-35">
                              <h1 class="name">Jerico Navarro</h1>
                              <h1 class="heading-15">23/02</h1>
                            </div>
                          </div>
                          <div class="w-form">
                            <form id="email-form" name="email-form" data-name="Email Form" class="form-3"><label for="name-5" class="field-label-3">Name</label><input type="text" class="text-field-3 w-input" maxlength="256" name="name-5" data-name="Name 5" placeholder="Jerico Navarro" id="name-5" required=""><label for="name-6" class="field-label-3">Card Number</label><input type="text" class="text-field-3 w-input" maxlength="256" name="name-3" data-name="Name 3" placeholder="****  ****  ****  9732" id="name-3" required=""><label for="name-6" class="field-label-3">Expiration Date</label><input type="text" class="text-field-3 w-input" maxlength="256" name="name-2" data-name="Name 2" placeholder="23/03" id="name-2" required=""><input type="submit" value="Check Out" data-wait="Please wait..." class="submit-button-2 w-button"></form>
                            <div class="w-form-done">
                              <div>Thank you! Your submission has been received!</div>
                            </div>
                            <div class="w-form-fail">
                              <div>Oops! Something went wrong while submitting the form.</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div data-w-tab="Tab 2" class="tab-pane-tab-2 w-tab-pane">
                    <div class="wrapper-book">
                      <div class="div-block-17">
                        <div class="select-seat">
                          <div class="screan"></div>
                          <div class="div-block-18">
                            <h1 class="heading-6">SCREEN THIS WAY</h1>
                            <div class="div-block-23"><img src="images/Path-34_1Path-34.png" width="20" alt="">
                              <h1 class="heading-6">Available</h1><img src="images/Path-36_1Path-36.png" width="23" alt="" class="image-4">
                              <h1 class="heading-6">Selected</h1><img src="images/Path-35_1Path-35.png" width="22" alt="" class="image-5">
                              <h1 class="heading-6">Sold</h1>
                            </div>
                          </div>
                          <div class="seat-wrap">
                            <h1 id="seat-text" class="heading-7">Select your seat</h1>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A1" alt="" class="perseats A1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A2" alt="" class="perseats A2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A3" alt="" class="perseats A3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A4" alt="" class="perseats A4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A5" alt="" class="perseats A5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A6" alt="" class="perseats A6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A7" alt="" class="perseats A7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A8" alt="" class="perseats A8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A9" alt="" class="perseats A9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A10" alt="" class="perseats A10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A11" alt="" class="perseats A11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A12" alt="" class="perseats A12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A13" alt="" class="perseats A13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A14" alt="" class="perseats A14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A15" alt="" class="perseats A15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A16" alt="" class="perseats A16">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B1" width="19" alt="" class="perseats B1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B2" width="19" alt="" class="perseats B2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B3" width="19" alt="" class="perseats B3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B4" width="19" alt="" class="perseats B4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B5" width="19" alt="" class="perseats B5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B6" width="19" alt="" class="perseats B6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B7" width="19" alt="" class="perseats B7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B8" width="19" alt="" class="perseats B8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B9" width="19" alt="" class="perseats B9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B10" width="19" alt="" class="perseats B10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B11" width="19" alt="" class="perseats B11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B12" width="19" alt="" class="perseats B12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B13" width="19" alt="" class="perseats B13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B14" width="19" alt="" class="perseats B14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B15" width="19" alt="" class="perseats B15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B16" width="19" alt="" class="perseats B16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B17" width="19" alt="" class="perseats B17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B18" width="19" alt="" class="perseats B18">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C1" width="19" alt="" class="perseats C1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C2" width="19" alt="" class="perseats C2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C3" width="19" alt="" class="perseats C3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C4" width="19" alt="" class="perseats C4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C5" width="19" alt="" class="perseats C5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C6" width="19" alt="" class="perseats C6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C7" width="19" alt="" class="perseats C7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C8" width="19" alt="" class="perseats C8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C9" width="19" alt="" class="perseats C9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C10" width="19" alt="" class="perseats C10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C11" width="19" alt="" class="perseats C11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C12" width="19" alt="" class="perseats C12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C13" width="19" alt="" class="perseats C13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C14" width="19" alt="" class="perseats C14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C15" width="19" alt="" class="perseats C15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C16" width="19" alt="" class="perseats C16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C17" width="19" alt="" class="perseats C17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C18" width="19" alt="" class="perseats C18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C19" width="19" alt="" class="perseats C19">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D1" width="19" alt="" class="perseats D1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D2" width="19" alt="" class="perseats D2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D3" width="19" alt="" class="perseats D3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D4" width="19" alt="" class="perseats D4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D5" width="19" alt="" class="perseats D5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D6" width="19" alt="" class="perseats D6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D7" width="19" alt="" class="perseats D7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D8" width="19" alt="" class="perseats D8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D9" width="19" alt="" class="perseats D9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D10" width="19" alt="" class="perseats D10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D11" width="19" alt="" class="perseats D11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D12" width="19" alt="" class="perseats D12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D13" width="19" alt="" class="perseats D13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D14" width="19" alt="" class="perseats D14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D15" width="19" alt="" class="perseats D15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D16" width="19" alt="" class="perseats D16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D17" width="19" alt="" class="perseats D17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D18"width="19" alt="" class="perseats D18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D19" width="19" alt="" class="perseats D19">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D20" width="19" alt="" class="perseats D20">

                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E1" width="19" alt="" class="perseats E1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E2" width="19" alt="" class="perseats E2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E3" width="19" alt="" class="perseats E3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E4" width="19" alt="" class="perseats E4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E5" width="19" alt="" class="perseats E5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E6" width="19" alt="" class="perseats E6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E7" width="19" alt="" class="perseats E7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E8" width="19" alt="" class="perseats E8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E9" width="19" alt="" class="perseats E9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E10" width="19" alt="" class="perseats E10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E11" width="19" alt="" class="perseats E11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E12" width="19" alt="" class="perseats E12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E13" width="19" alt="" class="perseats E13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E14" width="19" alt="" class="perseats E14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E15" width="19" alt="" class="perseats E15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E16" width="19" alt="" class="perseats E16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E17" width="19" alt="" class="perseats E17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E18" width="19" alt="" class="perseats E18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E19" width="19" alt="" class="perseats E19">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E20" width="19" alt="" class="perseats E20">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F1" width="19" alt="" class="perseats F1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F2" width="19" alt="" class="perseats F2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F3" width="19" alt="" class="perseats F3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F4" width="19" alt="" class="perseats F4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F5" width="19" alt="" class="perseats F5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F6" width="19" alt="" class="perseats F6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F7" width="19" alt="" class="perseats F7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F8" width="19" alt="" class="perseats F8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F9" width="19" alt="" class="perseats F9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F10" width="19" alt="" class="perseats F10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F11" width="19" alt="" class="perseats F11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F12" width="19" alt="" class="perseats F12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F13" width="19" alt="" class="perseats F13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F14" width="19" alt="" class="perseats F14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F15" width="19" alt="" class="perseats F15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F16" width="19" alt="" class="perseats F16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F17" width="19" alt="" class="perseats F17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F18" width="19" alt="" class="perseats F18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F19" width="19" alt="" class="perseats F19">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G1" width="19" alt="" class="perseats G1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G2" width="19" alt="" class="perseats G2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G3" width="19" alt="" class="perseats G3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G4" width="19" alt="" class="perseats G4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G5" width="19" alt="" class="perseats G5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G6" width="19" alt="" class="perseats G6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G7" width="19" alt="" class="perseats G7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G8" width="19" alt="" class="perseats G8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G9" width="19" alt="" class="perseats G9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G10" width="19" alt="" class="perseats G10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G11" width="19" alt="" class="perseats G11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G12" width="19" alt="" class="perseats G12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G13" width="19" alt="" class="perseats G13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G14" width="19" alt="" class="perseats G14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G15" width="19" alt="" class="perseats G15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G16" width="19" alt="" class="perseats G16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G17" width="19" alt="" class="perseats G17">
                            </div>
                          </div>
                        </div>
                        <div class="div-block-32">
                          <h1 class="heading-13">Card Details</h1>
                          <div class="div-block-33">
                            <div class="div-block-34"></div>
                            <h1 class="heading-14">**** **** **** 9732</h1>
                            <div class="div-block-35">
                              <h1 class="name">Jerico Navarro</h1>
                              <h1 class="heading-15">23/02</h1>
                            </div>
                          </div>
                          <div class="w-form">
                            <form id="email-form" name="email-form" data-name="Email Form" class="form-3"><label for="name-4" class="field-label-3">Name</label><input type="text" class="text-field-3 w-input" maxlength="256" name="name-4" data-name="Name 4" placeholder="Jerico Navarro" id="name-4" required=""><label for="name-5" class="field-label-3">Card Number</label><input type="text" class="text-field-3 w-input" maxlength="256" name="name-3" data-name="Name 3" placeholder="****  ****  ****  9732" id="name-3" required=""><label for="name-5" class="field-label-3">Expiration Date</label><input type="text" class="text-field-3 w-input" maxlength="256" name="name-2" data-name="Name 2" placeholder="23/03" id="name-2" required=""><input type="submit" value="Check Out" data-wait="Please wait..." class="submit-button-2 w-button"></form>
                            <div class="w-form-done">
                              <div>Thank you! Your submission has been received!</div>
                            </div>
                            <div class="w-form-fail">
                              <div>Oops! Something went wrong while submitting the form.</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div data-w-tab="Tab 3" class="tab-pane-tab-3 w-tab-pane w--tab-active">
                    <div class="wrapper-book">
                      <div class="div-block-17">
                        <div class="select-seat">
                          <div class="screan"></div>
                          <div class="div-block-18">
                            <h1 class="heading-6">SCREEN THIS WAY</h1>
                            <div class="div-block-23"><img src="images/Path-34_1Path-34.png" width="20" alt="">
                              <h1 class="heading-6">Available</h1><img src="images/Path-36_1Path-36.png" width="23" alt="" class="image-4">
                              <h1 class="heading-6">Selected</h1><img src="images/Path-35_1Path-35.png" width="22" alt="" class="image-5">
                              <h1 class="heading-6">Sold</h1>
                            </div>
                          </div>
                          <div class="seat-wrap">
                            <h1 id="seat-text" class="heading-7">Select your seat</h1>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A1" alt="" class="perseats A1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A2" alt="" class="perseats A2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A3" alt="" class="perseats A3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A4" alt="" class="perseats A4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A5" alt="" class="perseats A5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A6" alt="" class="perseats A6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A7" alt="" class="perseats A7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A8" alt="" class="perseats A8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A9" alt="" class="perseats A9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A10" alt="" class="perseats A10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A11" alt="" class="perseats A11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A12" alt="" class="perseats A12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A13" alt="" class="perseats A13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A14" alt="" class="perseats A14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A15" alt="" class="perseats A15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="A16" alt="" class="perseats A16">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B1" width="19" alt="" class="perseats B1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B2" width="19" alt="" class="perseats B2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B3" width="19" alt="" class="perseats B3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B4" width="19" alt="" class="perseats B4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B5" width="19" alt="" class="perseats B5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B6" width="19" alt="" class="perseats B6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B7" width="19" alt="" class="perseats B7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B8" width="19" alt="" class="perseats B8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B9" width="19" alt="" class="perseats B9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B10" width="19" alt="" class="perseats B10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B11" width="19" alt="" class="perseats B11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B12" width="19" alt="" class="perseats B12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B13" width="19" alt="" class="perseats B13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B14" width="19" alt="" class="perseats B14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B15" width="19" alt="" class="perseats B15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B16" width="19" alt="" class="perseats B16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B17" width="19" alt="" class="perseats B17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="B18" width="19" alt="" class="perseats B18">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C1" width="19" alt="" class="perseats C1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C2" width="19" alt="" class="perseats C2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C3" width="19" alt="" class="perseats C3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C4" width="19" alt="" class="perseats C4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C5" width="19" alt="" class="perseats C5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C6" width="19" alt="" class="perseats C6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C7" width="19" alt="" class="perseats C7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C8" width="19" alt="" class="perseats C8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C9" width="19" alt="" class="perseats C9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C10" width="19" alt="" class="perseats C10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C11" width="19" alt="" class="perseats C11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C12" width="19" alt="" class="perseats C12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C13" width="19" alt="" class="perseats C13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C14" width="19" alt="" class="perseats C14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C15" width="19" alt="" class="perseats C15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C16" width="19" alt="" class="perseats C16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C17" width="19" alt="" class="perseats C17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C18" width="19" alt="" class="perseats C18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="C19" width="19" alt="" class="perseats C19">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D1" width="19" alt="" class="perseats D1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D2" width="19" alt="" class="perseats D2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D3" width="19" alt="" class="perseats D3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D4" width="19" alt="" class="perseats D4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D5" width="19" alt="" class="perseats D5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D6" width="19" alt="" class="perseats D6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D7" width="19" alt="" class="perseats D7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D8" width="19" alt="" class="perseats D8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D9" width="19" alt="" class="perseats D9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D10" width="19" alt="" class="perseats D10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D11" width="19" alt="" class="perseats D11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D12" width="19" alt="" class="perseats D12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D13" width="19" alt="" class="perseats D13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D14" width="19" alt="" class="perseats D14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D15" width="19" alt="" class="perseats D15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D16" width="19" alt="" class="perseats D16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D17" width="19" alt="" class="perseats D17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D18"width="19" alt="" class="perseats D18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D19" width="19" alt="" class="perseats D19">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="D20" width="19" alt="" class="perseats D20">

                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E1" width="19" alt="" class="perseats E1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E2" width="19" alt="" class="perseats E2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E3" width="19" alt="" class="perseats E3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E4" width="19" alt="" class="perseats E4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E5" width="19" alt="" class="perseats E5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E6" width="19" alt="" class="perseats E6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E7" width="19" alt="" class="perseats E7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E8" width="19" alt="" class="perseats E8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E9" width="19" alt="" class="perseats E9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E10" width="19" alt="" class="perseats E10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E11" width="19" alt="" class="perseats E11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E12" width="19" alt="" class="perseats E12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E13" width="19" alt="" class="perseats E13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E14" width="19" alt="" class="perseats E14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E15" width="19" alt="" class="perseats E15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E16" width="19" alt="" class="perseats E16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E17" width="19" alt="" class="perseats E17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E18" width="19" alt="" class="perseats E18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E19" width="19" alt="" class="perseats E19">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="E20" width="19" alt="" class="perseats E20">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F1" width="19" alt="" class="perseats F1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F2" width="19" alt="" class="perseats F2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F3" width="19" alt="" class="perseats F3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F4" width="19" alt="" class="perseats F4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F5" width="19" alt="" class="perseats F5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F6" width="19" alt="" class="perseats F6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F7" width="19" alt="" class="perseats F7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F8" width="19" alt="" class="perseats F8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F9" width="19" alt="" class="perseats F9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F10" width="19" alt="" class="perseats F10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F11" width="19" alt="" class="perseats F11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F12" width="19" alt="" class="perseats F12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F13" width="19" alt="" class="perseats F13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F14" width="19" alt="" class="perseats F14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F15" width="19" alt="" class="perseats F15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F16" width="19" alt="" class="perseats F16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F17" width="19" alt="" class="perseats F17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F18" width="19" alt="" class="perseats F18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="F19" width="19" alt="" class="perseats F19">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G1" width="19" alt="" class="perseats G1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G2" width="19" alt="" class="perseats G2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G3" width="19" alt="" class="perseats G3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G4" width="19" alt="" class="perseats G4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G5" width="19" alt="" class="perseats G5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G6" width="19" alt="" class="perseats G6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G7" width="19" alt="" class="perseats G7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G8" width="19" alt="" class="perseats G8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G9" width="19" alt="" class="perseats G9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G10" width="19" alt="" class="perseats G10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G11" width="19" alt="" class="perseats G11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G12" width="19" alt="" class="perseats G12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G13" width="19" alt="" class="perseats G13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G14" width="19" alt="" class="perseats G14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G15" width="19" alt="" class="perseats G15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G16" width="19" alt="" class="perseats G16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="G17" width="19" alt="" class="perseats G17">
                            </div>
                          </div>
                        </div>
                        <div class="div-block-32">
                          <h1 class="heading-13">Card Details</h1>
                          <div class="div-block-33">
                            <div class="div-block-34"></div>
                            <h1 class="heading-14">**** **** **** 9732</h1>
                            <div class="div-block-35">
                              <h1 class="name">Jerico Navarro</h1>
                              <h1 class="heading-15">23/02</h1>
                            </div>
                          </div>
                          <div class="w-form">
                            <form id="email-form" name="email-form" data-name="Email Form" class="form-3"><label for="name" class="field-label-3">Name</label><input type="text" class="text-field-3 w-input" maxlength="256" name="name" data-name="Name" placeholder="Jerico Navarro" id="name" required=""><label for="name-4" class="field-label-3">Card Number</label><input type="text" class="text-field-3 w-input" maxlength="256" name="name-3" data-name="Name 3" placeholder="****  ****  ****  9732" id="name-3" required=""><label for="name-4" class="field-label-3">Expiration Date</label><input type="text" class="text-field-3 w-input" maxlength="256" name="name-2" data-name="Name 2" placeholder="23/03" id="name-2" required="">
                              <div class="div-block-36">
                                <div></div>
                              </div><input type="submit" value="Check Out" data-wait="Please wait..." class="submit-button-2 w-button"></form>
                            <div class="w-form-done">
                              <div>Thank you! Your submission has been received!</div>
                            </div>
                            <div class="w-form-fail">
                              <div>Oops! Something went wrong while submitting the form.</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section-7"></div>
  <script src="js/seats.js" type="text/javascript"></script>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js?site=5e7092bf421073025be60948" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>