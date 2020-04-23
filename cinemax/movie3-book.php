<?php
  include_once("includes/db_connection.php");
  $TicketID = time().rand(10*45, 100*98);
  $Titles[] = "";
?>

<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Thu Mar 26 2020 10:11:09 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5e7092bf4210739f37e6094f" data-wf-site="5e7092bf421073025be60948">
<head>
  <meta charset="utf-8">
  <?php
    $movie1_queery = "SELECT * FROM movies WHERE Movie_ID = 3";
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

</head>
<body>
  <div class="section-6">
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
      $movie1_queery = "SELECT * FROM movies WHERE Movie_ID = 3";
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
            <script>
              document.getElementById("date1").addEventListener("click", () => {
                console.log("<?php echo implode(",",$Date1); ?>");
                var list = document.getElementsByClassName('date-selected');
                  for (var n = 0; n < list.length; ++n) {
                    list[n].value="<?php echo implode(",",$Date1); ?>";
                  } 
              });
            </script>   
              <div class="month btn1"><?php echo $Month1; ?></div>
              <div class="day btn1"><?php echo $Day1; ?></div>
              <div class="days btn1"><?php echo $Year1; ?></div>
            </a>
            <a onclick="changeseat(this.id)" id="date2" data-w-tab="Tab 2" class="tablink w-inline-block w-tab-link">
            <script>
              document.getElementById("date2").addEventListener("click", () => {
                console.log("<?php echo implode(",",$Date2); ?>");
                var list = document.getElementsByClassName('date-selected');
                  for (var n = 0; n < list.length; ++n) {
                    list[n].value="<?php echo implode(",",$Date2); ?>";
                  } 
              });
            </script>  
              <div class="month btn2"><?php echo $Month2; ?></div>
              <div class="day btn2"><?php echo $Day2; ?></div>
              <div class="days btn2"><?php echo $Year2; ?></div>
            </a>
            <a onclick="changeseat(this.id)" id="date3" data-w-tab="Tab 3" class="tablink w-inline-block w-tab-link w--current">
            <script>
              document.getElementById("date3").addEventListener("click", () => {
                console.log("<?php echo implode(",",$Date3); ?>");
                var list = document.getElementsByClassName('date-selected');
                  for (var n = 0; n < list.length; ++n) {
                    list[n].value="<?php echo implode(",",$Date3); ?>";
                  }  
              });
            </script>   
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
                  <script>
                    document.getElementById("time1-date1").addEventListener("click", () => {
                      console.log("<?php echo "9:30 AM"; ?>"); 
                      var list = document.getElementsByClassName('time-selected');
                      for (var n = 0; n < list.length; ++n) {
                        list[n].value="9:30 AM";
                      }
                    });
                  </script>    
                  <div class="time">9:30</div>
                    <div class="wtime">AM</div>
                  </a>
                  <a onclick="changeseat(this.id)" id="time2-date1" data-w-tab="Tab 2" class="time-tablink w-inline-block w-tab-link">
                  <script>
                    document.getElementById("time2-date1").addEventListener("click", () => {
                      console.log("<?php echo "12:30 PM"; ?>"); 
                      var list = document.getElementsByClassName('time-selected');
                      for (var n = 0; n < list.length; ++n) {
                        list[n].value="12:30 PM";
                      }
                    });
                  </script>    
                  <div class="time">12:30</div>
                    <div class="wtime">PM</div>
                  </a>
                  <a onclick="changeseat(this.id)" id="time3-date1" data-w-tab="Tab 3" class="time-tablink w-inline-block w-tab-link w--current">
                  <script>
                    document.getElementById("time3-date1").addEventListener("click", () => {
                      console.log("<?php echo "3:30 PM"; ?>"); 
                      var list = document.getElementsByClassName('time-selected');
                      for (var n = 0; n < list.length; ++n) {
                        list[n].value="3:30 PM";
                      }
                    });
                  </script>    
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
                          <h1 class="heading-13">Customer Details</h1>
                          
                          <div class="w-form">
                            <form action="insert3-bookings.php" method="post" id="email-form" name="email-form" data-name="Email Form" class="form-3">
                              <label for="name-9" class="field-label-3">Name</label>
                              <input type="text" class="text-field-3 w-input" maxlength="256" name="fullname" placeholder="Jerico Navarro" id="fullname" required="">
                              <label for="name-10" class="field-label-3">Phone Number</label>
                              <input type="number" class="text-field-3 w-input" maxlength="11" name="number" placeholder="09*********" id="number" required="">
                              <label for="name-10" class="field-label-3">Email</label>
                              <input type="text" class="text-field-3 w-input" maxlength="256" name="email" placeholder="example@gmail.com" id="email" required="">
                              <input hidden type="text" name="date" id="date" class="date-selected">
                              <input hidden type="text" name="time" id="time" class="time-selected">
                              <input hidden type="text" name="seat" id="seat" class="seats-selected">
                              <input hidden type="text" name="ticket" id="ticket" value="<?php echo $TicketID; ?>">
                              <input hidden type="text" name="title" id="title" value="<?php echo implode(",",$Title); ?>">
                              <input type="submit" value="Reserve Now" data-wait="Please wait..." class="submit-button-2 w-button">  
                            </form>
                          </div>
                          <?php
                          $ClientTicket = "";
                          if (strpos($_SERVER['REQUEST_URI'], "Ticket") == false){
                          }else{
                            $ClientTicket = $_GET['Ticket'];
                          ?>
                          <style>
                          #heading-ticket {
                            visibility: visible;
                          }

                          #ticketnumber {
                            visibility: visible;
                          }
                          </style>

                          <?php
                          }
                          ?>
                          <h1 id="heading-ticket" class="heading-13 ticket">Your Ticket Number</h1>
                          <div id="ticketnumber">
                            <h2 id="thenumber">#<?php echo $ClientTicket; ?></h2>
                            <p id="success-messesage">Success fully reserved a seat!<br>Save the Ticket now!</p>
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
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="AA1" alt="" class="perseats A1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="AA2" alt="" class="perseats A2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="AA3" alt="" class="perseats A3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="AA4" alt="" class="perseats A4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="AA5" alt="" class="perseats A5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="AA6" alt="" class="perseats A6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="AA7" alt="" class="perseats A7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="AA8" alt="" class="perseats A8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="AA9" alt="" class="perseats A9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="AA10" alt="" class="perseats A10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="AA11" alt="" class="perseats A11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="AA12" alt="" class="perseats A12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="AA13" alt="" class="perseats A13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="AA14" alt="" class="perseats A14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="AA15" alt="" class="perseats A15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="AA16" alt="" class="perseats A16">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="BB1" width="19" alt="" class="perseats B1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="BB2" width="19" alt="" class="perseats B2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="BB3" width="19" alt="" class="perseats B3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="BB4" width="19" alt="" class="perseats B4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="BB5" width="19" alt="" class="perseats B5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="BB6" width="19" alt="" class="perseats B6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="BB7" width="19" alt="" class="perseats B7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="BB8" width="19" alt="" class="perseats B8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="BB9" width="19" alt="" class="perseats B9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="BB10" width="19" alt="" class="perseats B10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="BB11" width="19" alt="" class="perseats B11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="BB12" width="19" alt="" class="perseats B12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="BB13" width="19" alt="" class="perseats B13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="BB14" width="19" alt="" class="perseats B14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="BB15" width="19" alt="" class="perseats B15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="BB16" width="19" alt="" class="perseats B16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="BB17" width="19" alt="" class="perseats B17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="BB18" width="19" alt="" class="perseats B18">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="CC1" width="19" alt="" class="perseats C1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="CC2" width="19" alt="" class="perseats C2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="CC3" width="19" alt="" class="perseats C3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="CC4" width="19" alt="" class="perseats C4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="CC5" width="19" alt="" class="perseats C5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="CC6" width="19" alt="" class="perseats C6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="CC7" width="19" alt="" class="perseats C7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="CC8" width="19" alt="" class="perseats C8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="CC9" width="19" alt="" class="perseats C9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="CC10" width="19" alt="" class="perseats C10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="CC11" width="19" alt="" class="perseats C11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="CC12" width="19" alt="" class="perseats C12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="CC13" width="19" alt="" class="perseats C13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="CC14" width="19" alt="" class="perseats C14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="CC15" width="19" alt="" class="perseats C15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="CC16" width="19" alt="" class="perseats C16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="CC17" width="19" alt="" class="perseats C17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="CC18" width="19" alt="" class="perseats C18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="CC19" width="19" alt="" class="perseats C19">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="DD1" width="19" alt="" class="perseats D1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="DD2" width="19" alt="" class="perseats D2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="DD3" width="19" alt="" class="perseats D3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="DD4" width="19" alt="" class="perseats D4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="DD5" width="19" alt="" class="perseats D5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="DD6" width="19" alt="" class="perseats D6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="DD7" width="19" alt="" class="perseats D7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="DD8" width="19" alt="" class="perseats D8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="DD9" width="19" alt="" class="perseats D9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="DD10" width="19" alt="" class="perseats D10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="DD11" width="19" alt="" class="perseats D11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="DD12" width="19" alt="" class="perseats D12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="DD13" width="19" alt="" class="perseats D13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="DD14" width="19" alt="" class="perseats D14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="DD15" width="19" alt="" class="perseats D15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="DD16" width="19" alt="" class="perseats D16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="DD17" width="19" alt="" class="perseats D17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="DD18"width="19" alt="" class="perseats D18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="DD19" width="19" alt="" class="perseats D19">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="DD20" width="19" alt="" class="perseats D20">

                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="EE1" width="19" alt="" class="perseats E1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="EE2" width="19" alt="" class="perseats E2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="EE3" width="19" alt="" class="perseats E3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="EE4" width="19" alt="" class="perseats E4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="EE5" width="19" alt="" class="perseats E5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="EE6" width="19" alt="" class="perseats E6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="EE7" width="19" alt="" class="perseats E7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="EE8" width="19" alt="" class="perseats E8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="EE9" width="19" alt="" class="perseats E9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="EE10" width="19" alt="" class="perseats E10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="EE11" width="19" alt="" class="perseats E11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="EE12" width="19" alt="" class="perseats E12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="EE13" width="19" alt="" class="perseats E13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="EE14" width="19" alt="" class="perseats E14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="EE15" width="19" alt="" class="perseats E15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="EE16" width="19" alt="" class="perseats E16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="EE17" width="19" alt="" class="perseats E17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="EE18" width="19" alt="" class="perseats E18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="EE19" width="19" alt="" class="perseats E19">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="EE20" width="19" alt="" class="perseats E20">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="FF1" width="19" alt="" class="perseats F1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="FF2" width="19" alt="" class="perseats F2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="FF3" width="19" alt="" class="perseats F3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="FF4" width="19" alt="" class="perseats F4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="FF5" width="19" alt="" class="perseats F5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="FF6" width="19" alt="" class="perseats F6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="FF7" width="19" alt="" class="perseats F7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="FF8" width="19" alt="" class="perseats F8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="FF9" width="19" alt="" class="perseats F9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="FF10" width="19" alt="" class="perseats F10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="FF11" width="19" alt="" class="perseats F11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="FF12" width="19" alt="" class="perseats F12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="FF13" width="19" alt="" class="perseats F13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="FF14" width="19" alt="" class="perseats F14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="FF15" width="19" alt="" class="perseats F15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="FF16" width="19" alt="" class="perseats F16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="FF17" width="19" alt="" class="perseats F17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="FF18" width="19" alt="" class="perseats F18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="FF19" width="19" alt="" class="perseats F19">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="GG1" width="19" alt="" class="perseats G1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="GG2" width="19" alt="" class="perseats G2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="GG3" width="19" alt="" class="perseats G3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="GG4" width="19" alt="" class="perseats G4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="GG5" width="19" alt="" class="perseats G5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="GG6" width="19" alt="" class="perseats G6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="GG7" width="19" alt="" class="perseats G7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="GG8" width="19" alt="" class="perseats G8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="GG9" width="19" alt="" class="perseats G9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="GG10" width="19" alt="" class="perseats G10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="GG11" width="19" alt="" class="perseats G11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="GG12" width="19" alt="" class="perseats G12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="GG13" width="19" alt="" class="perseats G13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="GG14" width="19" alt="" class="perseats G14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="GG15" width="19" alt="" class="perseats G15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="GG16" width="19" alt="" class="perseats G16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="GG17" width="19" alt="" class="perseats G17">
                            </div>
                          </div>
                        </div>
                        <div class="div-block-32">
                        <h1 class="heading-13">Customer Details</h1>
                          
                          <div class="w-form">
                          <form action="insert3-bookings.php" method="post" id="email-form" name="email-form" data-name="Email Form" class="form-3">
                              <label for="name-9" class="field-label-3">Name</label>
                              <input type="text" class="text-field-3 w-input" maxlength="256" name="fullname" placeholder="Jerico Navarro" id="fullname" required="">
                              <label for="name-10" class="field-label-3">Phone Number</label>
                              <input type="number" class="text-field-3 w-input" maxlength="11" name="number" placeholder="09*********" id="number" required="">
                              <label for="name-10" class="field-label-3">Email</label>
                              <input type="text" class="text-field-3 w-input" maxlength="256" name="email" placeholder="example@gmail.com" id="email" required="">
                              <input hidden type="text" name="date" class="date-selected" id="date">
                              <input hidden type="text" name="time" class="time-selected" id="time">
                              <input hidden type="text" name="seat" id="seat" class="seats-selected">
                              <input hidden type="text" name="ticket" id="ticket" value="<?php echo $TicketID; ?>">
                              <input hidden type="text" name="title" id="title" value="<?php echo implode(",",$Title); ?>">
                              <input type="submit" value="Reserve Now" data-wait="Please wait..." class="submit-button-2 w-button">
                            </form>
                          </div>
                          <?php
                          $ClientTicket = "";
                          if (strpos($_SERVER['REQUEST_URI'], "Ticket") == false){
                          }else{
                            $ClientTicket = $_GET['Ticket'];
                          ?>
                          <style>
                          #heading-ticket {
                            visibility: visible;
                          }

                          #ticketnumber {
                            visibility: visible;
                          }
                          </style>

                          <?php
                          }
                          ?>
                          <h1 id="heading-ticket" class="heading-13 ticket">Your Ticket Number</h1>
                          <div id="ticketnumber">
                            <h2 id="thenumber">#<?php echo $ClientTicket; ?></h2>
                            <p id="success-messesage">Success fully reserved a seat!<br>Save the Ticket now!</p>
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
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="1A1" alt="" class="perseats A1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="1A2" alt="" class="perseats A2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="1A3" alt="" class="perseats A3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="1A4" alt="" class="perseats A4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="1A5" alt="" class="perseats A5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="1A6" alt="" class="perseats A6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="1A7" alt="" class="perseats A7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="1A8" alt="" class="perseats A8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="1A9" alt="" class="perseats A9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="1A10" alt="" class="perseats A10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="1A11" alt="" class="perseats A11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="1A12" alt="" class="perseats A12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="1A13" alt="" class="perseats A13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="1A14" alt="" class="perseats A14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="1A15" alt="" class="perseats A15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="1A16" alt="" class="perseats A16">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1B1" width="19" alt="" class="perseats B1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1B2" width="19" alt="" class="perseats B2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1B3" width="19" alt="" class="perseats B3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1B4" width="19" alt="" class="perseats B4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1B5" width="19" alt="" class="perseats B5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1B6" width="19" alt="" class="perseats B6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1B7" width="19" alt="" class="perseats B7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1B8" width="19" alt="" class="perseats B8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1B9" width="19" alt="" class="perseats B9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1B10" width="19" alt="" class="perseats B10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1B11" width="19" alt="" class="perseats B11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1B12" width="19" alt="" class="perseats B12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1B13" width="19" alt="" class="perseats B13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1B14" width="19" alt="" class="perseats B14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1B15" width="19" alt="" class="perseats B15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1B16" width="19" alt="" class="perseats B16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1B17" width="19" alt="" class="perseats B17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1B18" width="19" alt="" class="perseats B18">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1C1" width="19" alt="" class="perseats C1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1C2" width="19" alt="" class="perseats C2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1C3" width="19" alt="" class="perseats C3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1C4" width="19" alt="" class="perseats C4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1C5" width="19" alt="" class="perseats C5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1C6" width="19" alt="" class="perseats C6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1C7" width="19" alt="" class="perseats C7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1C8" width="19" alt="" class="perseats C8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1C9" width="19" alt="" class="perseats C9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1C10" width="19" alt="" class="perseats C10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1C11" width="19" alt="" class="perseats C11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1C12" width="19" alt="" class="perseats C12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1C13" width="19" alt="" class="perseats C13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1C14" width="19" alt="" class="perseats C14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1C15" width="19" alt="" class="perseats C15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1C16" width="19" alt="" class="perseats C16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1C17" width="19" alt="" class="perseats C17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1C18" width="19" alt="" class="perseats C18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1C19" width="19" alt="" class="perseats C19">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1D1" width="19" alt="" class="perseats D1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1D2" width="19" alt="" class="perseats D2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1D3" width="19" alt="" class="perseats D3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1D4" width="19" alt="" class="perseats D4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1D5" width="19" alt="" class="perseats D5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1D6" width="19" alt="" class="perseats D6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1D7" width="19" alt="" class="perseats D7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1D8" width="19" alt="" class="perseats D8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1D9" width="19" alt="" class="perseats D9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1D10" width="19" alt="" class="perseats D10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1D11" width="19" alt="" class="perseats D11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1D12" width="19" alt="" class="perseats D12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1D13" width="19" alt="" class="perseats D13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1D14" width="19" alt="" class="perseats D14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1D15" width="19" alt="" class="perseats D15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1D16" width="19" alt="" class="perseats D16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1D17" width="19" alt="" class="perseats D17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1D18"width="19" alt="" class="perseats D18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1D19" width="19" alt="" class="perseats D19">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1D20" width="19" alt="" class="perseats D20">

                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1E1" width="19" alt="" class="perseats E1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1E2" width="19" alt="" class="perseats E2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1E3" width="19" alt="" class="perseats E3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1E4" width="19" alt="" class="perseats E4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1E5" width="19" alt="" class="perseats E5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1E6" width="19" alt="" class="perseats E6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1E7" width="19" alt="" class="perseats E7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1E8" width="19" alt="" class="perseats E8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1E9" width="19" alt="" class="perseats E9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1E10" width="19" alt="" class="perseats E10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1E11" width="19" alt="" class="perseats E11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1E12" width="19" alt="" class="perseats E12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1E13" width="19" alt="" class="perseats E13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1E14" width="19" alt="" class="perseats E14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1E15" width="19" alt="" class="perseats E15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1E16" width="19" alt="" class="perseats E16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1E17" width="19" alt="" class="perseats E17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1E18" width="19" alt="" class="perseats E18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1E19" width="19" alt="" class="perseats E19">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1E20" width="19" alt="" class="perseats E20">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1F1" width="19" alt="" class="perseats F1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1F2" width="19" alt="" class="perseats F2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1F3" width="19" alt="" class="perseats F3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1F4" width="19" alt="" class="perseats F4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1F5" width="19" alt="" class="perseats F5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1F6" width="19" alt="" class="perseats F6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1F7" width="19" alt="" class="perseats F7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1F8" width="19" alt="" class="perseats F8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1F9" width="19" alt="" class="perseats F9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1F10" width="19" alt="" class="perseats F10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1F11" width="19" alt="" class="perseats F11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1F12" width="19" alt="" class="perseats F12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1F13" width="19" alt="" class="perseats F13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1F14" width="19" alt="" class="perseats F14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1F15" width="19" alt="" class="perseats F15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1F16" width="19" alt="" class="perseats F16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1F17" width="19" alt="" class="perseats F17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1F18" width="19" alt="" class="perseats F18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1F19" width="19" alt="" class="perseats F19">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1G1" width="19" alt="" class="perseats G1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1G2" width="19" alt="" class="perseats G2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1G3" width="19" alt="" class="perseats G3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1G4" width="19" alt="" class="perseats G4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1G5" width="19" alt="" class="perseats G5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1G6" width="19" alt="" class="perseats G6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1G7" width="19" alt="" class="perseats G7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1G8" width="19" alt="" class="perseats G8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1G9" width="19" alt="" class="perseats G9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1G10" width="19" alt="" class="perseats G10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1G11" width="19" alt="" class="perseats G11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1G12" width="19" alt="" class="perseats G12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1G13" width="19" alt="" class="perseats G13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1G14" width="19" alt="" class="perseats G14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1G15" width="19" alt="" class="perseats G15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1G16" width="19" alt="" class="perseats G16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="1G17" width="19" alt="" class="perseats G17">
                            </div>
                          </div>
                        </div>
                        <div class="div-block-32">
                        <h1 class="heading-13">Customer Details</h1>
                          
                          <div class="w-form">
                          <form action="insert3-bookings.php" method="post" id="email-form" name="email-form" data-name="Email Form" class="form-3">
                              <label for="name-9" class="field-label-3">Name</label>
                              <input type="text" class="text-field-3 w-input" maxlength="256" name="fullname" placeholder="Jerico Navarro" id="fullname" required="">
                              <label for="name-10" class="field-label-3">Phone Number</label>
                              <input type="number" class="text-field-3 w-input" maxlength="11" name="number" placeholder="09*********" id="number" required="">
                              <label for="name-10" class="field-label-3">Email</label>
                              <input type="text" class="text-field-3 w-input" maxlength="256" name="email" placeholder="example@gmail.com" id="email" required="">
                              <input hidden type="text" name="date" class="date-selected" id="date">
                              <input hidden type="text" name="time" class="time-selected" id="time">
                              <input hidden type="text" name="seat" id="seat" class="seats-selected">
                              <input hidden type="text" name="ticket" id="ticket" value="<?php echo $TicketID; ?>">
                              <input hidden type="text" name="title" id="title" value="<?php echo implode(",",$Title); ?>">
                              <input type="submit" value="Reserve Now" data-wait="Please wait..." class="submit-button-2 w-button">
                            </form>
                          </div>
                          <?php
                          $ClientTicket = "";
                          if (strpos($_SERVER['REQUEST_URI'], "Ticket") == false){
                          }else{
                            $ClientTicket = $_GET['Ticket'];
                          ?>
                          <style>
                          #heading-ticket {
                            visibility: visible;
                          }

                          #ticketnumber {
                            visibility: visible;
                          }
                          </style>

                          <?php
                          }
                          ?>
                          <h1 id="heading-ticket" class="heading-13 ticket">Your Ticket Number</h1>
                          <div id="ticketnumber">
                            <h2 id="thenumber">#<?php echo $ClientTicket; ?></h2>
                            <p id="success-messesage">Success fully reserved a seat!<br>Save the Ticket now!</p>
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
                  <script>
                    document.getElementById("time1-date2").addEventListener("click", () => {
                      console.log("<?php echo "9:30 AM"; ?>"); 
                      var list = document.getElementsByClassName('time-selected');
                      for (var n = 0; n < list.length; ++n) {
                        list[n].value="9:30 AM";
                      }
                    });
                  </script>  
                  <div class="time">9:30</div>
                    <div class="wtime">AM</div>
                  </a>
                  <a onclick="changeseat(this.id)" id="time2-date2" data-w-tab="Tab 2" class="time-tablink w-inline-block w-tab-link">
                  <script>
                    document.getElementById("time2-date2").addEventListener("click", () => {
                      console.log("<?php echo "12:30 PM"; ?>"); 
                      var list = document.getElementsByClassName('time-selected');
                      for (var n = 0; n < list.length; ++n) {
                        list[n].value="12:30 PM";
                      }
                    });
                  </script>    
                  <div class="time">12:30</div>
                    <div class="wtime">PM</div>
                  </a>
                  <a onclick="changeseat(this.id)" id="time3-date2" data-w-tab="Tab 3" class="time-tablink w-inline-block w-tab-link">
                  <script>
                    document.getElementById("time3-date2").addEventListener("click", () => {
                      console.log("<?php echo "3:30 PM"; ?>"); 
                      var list = document.getElementsByClassName('time-selected');
                      for (var n = 0; n < list.length; ++n) {
                        list[n].value="3:30 PM";
                      }
                    });
                  </script>  
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
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="2A1" alt="" class="perseats A1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="2A2" alt="" class="perseats A2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="2A3" alt="" class="perseats A3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="2A4" alt="" class="perseats A4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="2A5" alt="" class="perseats A5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="2A6" alt="" class="perseats A6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="2A7" alt="" class="perseats A7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="2A8" alt="" class="perseats A8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="2A9" alt="" class="perseats A9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="2A10" alt="" class="perseats A10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="2A11" alt="" class="perseats A11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="2A12" alt="" class="perseats A12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="2A13" alt="" class="perseats A13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="2A14" alt="" class="perseats A14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="2A15" alt="" class="perseats A15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="2A16" alt="" class="perseats A16">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2B1" width="19" alt="" class="perseats B1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2B2" width="19" alt="" class="perseats B2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2B3" width="19" alt="" class="perseats B3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2B4" width="19" alt="" class="perseats B4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2B5" width="19" alt="" class="perseats B5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2B6" width="19" alt="" class="perseats B6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2B7" width="19" alt="" class="perseats B7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2B8" width="19" alt="" class="perseats B8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2B9" width="19" alt="" class="perseats B9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2B10" width="19" alt="" class="perseats B10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2B11" width="19" alt="" class="perseats B11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2B12" width="19" alt="" class="perseats B12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2B13" width="19" alt="" class="perseats B13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2B14" width="19" alt="" class="perseats B14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2B15" width="19" alt="" class="perseats B15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2B16" width="19" alt="" class="perseats B16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2B17" width="19" alt="" class="perseats B17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2B18" width="19" alt="" class="perseats B18">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2C1" width="19" alt="" class="perseats C1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2C2" width="19" alt="" class="perseats C2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2C3" width="19" alt="" class="perseats C3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2C4" width="19" alt="" class="perseats C4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2C5" width="19" alt="" class="perseats C5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2C6" width="19" alt="" class="perseats C6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2C7" width="19" alt="" class="perseats C7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2C8" width="19" alt="" class="perseats C8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2C9" width="19" alt="" class="perseats C9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2C10" width="19" alt="" class="perseats C10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2C11" width="19" alt="" class="perseats C11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2C12" width="19" alt="" class="perseats C12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2C13" width="19" alt="" class="perseats C13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2C14" width="19" alt="" class="perseats C14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2C15" width="19" alt="" class="perseats C15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2C16" width="19" alt="" class="perseats C16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2C17" width="19" alt="" class="perseats C17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2C18" width="19" alt="" class="perseats C18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2C19" width="19" alt="" class="perseats C19">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2D1" width="19" alt="" class="perseats D1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2D2" width="19" alt="" class="perseats D2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2D3" width="19" alt="" class="perseats D3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2D4" width="19" alt="" class="perseats D4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2D5" width="19" alt="" class="perseats D5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2D6" width="19" alt="" class="perseats D6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2D7" width="19" alt="" class="perseats D7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2D8" width="19" alt="" class="perseats D8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2D9" width="19" alt="" class="perseats D9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2D10" width="19" alt="" class="perseats D10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2D11" width="19" alt="" class="perseats D11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2D12" width="19" alt="" class="perseats D12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2D13" width="19" alt="" class="perseats D13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2D14" width="19" alt="" class="perseats D14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2D15" width="19" alt="" class="perseats D15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2D16" width="19" alt="" class="perseats D16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2D17" width="19" alt="" class="perseats D17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2D18"width="19" alt="" class="perseats D18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2D19" width="19" alt="" class="perseats D19">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2D20" width="19" alt="" class="perseats D20">

                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2E1" width="19" alt="" class="perseats E1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2E2" width="19" alt="" class="perseats E2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2E3" width="19" alt="" class="perseats E3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2E4" width="19" alt="" class="perseats E4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2E5" width="19" alt="" class="perseats E5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2E6" width="19" alt="" class="perseats E6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2E7" width="19" alt="" class="perseats E7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2E8" width="19" alt="" class="perseats E8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2E9" width="19" alt="" class="perseats E9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2E10" width="19" alt="" class="perseats E10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2E11" width="19" alt="" class="perseats E11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2E12" width="19" alt="" class="perseats E12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2E13" width="19" alt="" class="perseats E13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2E14" width="19" alt="" class="perseats E14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2E15" width="19" alt="" class="perseats E15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2E16" width="19" alt="" class="perseats E16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2E17" width="19" alt="" class="perseats E17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2E18" width="19" alt="" class="perseats E18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2E19" width="19" alt="" class="perseats E19">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2E20" width="19" alt="" class="perseats E20">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2F1" width="19" alt="" class="perseats F1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2F2" width="19" alt="" class="perseats F2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2F3" width="19" alt="" class="perseats F3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2F4" width="19" alt="" class="perseats F4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2F5" width="19" alt="" class="perseats F5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2F6" width="19" alt="" class="perseats F6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2F7" width="19" alt="" class="perseats F7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2F8" width="19" alt="" class="perseats F8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2F9" width="19" alt="" class="perseats F9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2F10" width="19" alt="" class="perseats F10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2F11" width="19" alt="" class="perseats F11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2F12" width="19" alt="" class="perseats F12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2F13" width="19" alt="" class="perseats F13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2F14" width="19" alt="" class="perseats F14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2F15" width="19" alt="" class="perseats F15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2F16" width="19" alt="" class="perseats F16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2F17" width="19" alt="" class="perseats F17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2F18" width="19" alt="" class="perseats F18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2F19" width="19" alt="" class="perseats F19">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2G1" width="19" alt="" class="perseats G1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2G2" width="19" alt="" class="perseats G2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2G3" width="19" alt="" class="perseats G3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2G4" width="19" alt="" class="perseats G4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2G5" width="19" alt="" class="perseats G5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2G6" width="19" alt="" class="perseats G6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2G7" width="19" alt="" class="perseats G7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2G8" width="19" alt="" class="perseats G8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2G9" width="19" alt="" class="perseats G9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2G10" width="19" alt="" class="perseats G10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2G11" width="19" alt="" class="perseats G11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2G12" width="19" alt="" class="perseats G12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2G13" width="19" alt="" class="perseats G13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2G14" width="19" alt="" class="perseats G14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2G15" width="19" alt="" class="perseats G15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2G16" width="19" alt="" class="perseats G16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="2G17" width="19" alt="" class="perseats G17">
                            </div>
                          </div>
                        </div>
                        <div class="div-block-32">
                        <h1 class="heading-13">Customer Details</h1>
                          
                          <div class="w-form">
                          <form action="insert3-bookings.php" method="post" id="email-form" name="email-form" data-name="Email Form" class="form-3">
                              <label for="name-9" class="field-label-3">Name</label>
                              <input type="text" class="text-field-3 w-input" maxlength="256" name="fullname" placeholder="Jerico Navarro" id="fullname" required="">
                              <label for="name-10" class="field-label-3">Phone Number</label>
                              <input type="number" class="text-field-3 w-input" maxlength="11" name="number" placeholder="09*********" id="number" required="">
                              <label for="name-10" class="field-label-3">Email</label>
                              <input type="text" class="text-field-3 w-input" maxlength="256" name="email" placeholder="example@gmail.com" id="email" required="">
                              <input hidden type="text" name="date" class="date-selected" id="date">
                              <input hidden type="text" name="time" class="time-selected" id="time">
                              <input hidden type="text" name="seat" id="seat" class="seats-selected">
                              <input hidden type="text" name="ticket" id="ticket" value="<?php echo $TicketID; ?>">
                              <input hidden type="text" name="title" id="title" value="<?php echo implode(",",$Title); ?>">
                              <input type="submit" value="Reserve Now" data-wait="Please wait..." class="submit-button-2 w-button">
                            </form>
                          </div>
                          <?php
                          $ClientTicket = "";
                          if (strpos($_SERVER['REQUEST_URI'], "Ticket") == false){
                          }else{
                            $ClientTicket = $_GET['Ticket'];
                          ?>
                          <style>
                          #heading-ticket {
                            visibility: visible;
                          }

                          #ticketnumber {
                            visibility: visible;
                          }
                          </style>

                          <?php
                          }
                          ?>
                          <h1 id="heading-ticket" class="heading-13 ticket">Your Ticket Number</h1>
                          <div id="ticketnumber">
                            <h2 id="thenumber">#<?php echo $ClientTicket; ?></h2>
                            <p id="success-messesage">Success fully reserved a seat!<br>Save the Ticket now!</p>
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
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="3A1" alt="" class="perseats A1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="3A2" alt="" class="perseats A2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="3A3" alt="" class="perseats A3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="3A4" alt="" class="perseats A4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="3A5" alt="" class="perseats A5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="3A6" alt="" class="perseats A6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="3A7" alt="" class="perseats A7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="3A8" alt="" class="perseats A8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="3A9" alt="" class="perseats A9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="3A10" alt="" class="perseats A10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="3A11" alt="" class="perseats A11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="3A12" alt="" class="perseats A12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="3A13" alt="" class="perseats A13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="3A14" alt="" class="perseats A14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="3A15" alt="" class="perseats A15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="3A16" alt="" class="perseats A16">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3B1" width="19" alt="" class="perseats B1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3B2" width="19" alt="" class="perseats B2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3B3" width="19" alt="" class="perseats B3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3B4" width="19" alt="" class="perseats B4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3B5" width="19" alt="" class="perseats B5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3B6" width="19" alt="" class="perseats B6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3B7" width="19" alt="" class="perseats B7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3B8" width="19" alt="" class="perseats B8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3B9" width="19" alt="" class="perseats B9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3B10" width="19" alt="" class="perseats B10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3B11" width="19" alt="" class="perseats B11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3B12" width="19" alt="" class="perseats B12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3B13" width="19" alt="" class="perseats B13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3B14" width="19" alt="" class="perseats B14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3B15" width="19" alt="" class="perseats B15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3B16" width="19" alt="" class="perseats B16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3B17" width="19" alt="" class="perseats B17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3B18" width="19" alt="" class="perseats B18">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3C1" width="19" alt="" class="perseats C1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3C2" width="19" alt="" class="perseats C2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3C3" width="19" alt="" class="perseats C3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3C4" width="19" alt="" class="perseats C4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3C5" width="19" alt="" class="perseats C5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3C6" width="19" alt="" class="perseats C6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3C7" width="19" alt="" class="perseats C7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3C8" width="19" alt="" class="perseats C8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3C9" width="19" alt="" class="perseats C9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3C10" width="19" alt="" class="perseats C10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3C11" width="19" alt="" class="perseats C11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3C12" width="19" alt="" class="perseats C12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3C13" width="19" alt="" class="perseats C13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3C14" width="19" alt="" class="perseats C14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3C15" width="19" alt="" class="perseats C15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3C16" width="19" alt="" class="perseats C16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3C17" width="19" alt="" class="perseats C17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3C18" width="19" alt="" class="perseats C18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3C19" width="19" alt="" class="perseats C19">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3D1" width="19" alt="" class="perseats D1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3D2" width="19" alt="" class="perseats D2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3D3" width="19" alt="" class="perseats D3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3D4" width="19" alt="" class="perseats D4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3D5" width="19" alt="" class="perseats D5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3D6" width="19" alt="" class="perseats D6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3D7" width="19" alt="" class="perseats D7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3D8" width="19" alt="" class="perseats D8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3D9" width="19" alt="" class="perseats D9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3D10" width="19" alt="" class="perseats D10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3D11" width="19" alt="" class="perseats D11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3D12" width="19" alt="" class="perseats D12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3D13" width="19" alt="" class="perseats D13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3D14" width="19" alt="" class="perseats D14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3D15" width="19" alt="" class="perseats D15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3D16" width="19" alt="" class="perseats D16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3D17" width="19" alt="" class="perseats D17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3D18"width="19" alt="" class="perseats D18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3D19" width="19" alt="" class="perseats D19">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3D20" width="19" alt="" class="perseats D20">

                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3E1" width="19" alt="" class="perseats E1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3E2" width="19" alt="" class="perseats E2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3E3" width="19" alt="" class="perseats E3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3E4" width="19" alt="" class="perseats E4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3E5" width="19" alt="" class="perseats E5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3E6" width="19" alt="" class="perseats E6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3E7" width="19" alt="" class="perseats E7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3E8" width="19" alt="" class="perseats E8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3E9" width="19" alt="" class="perseats E9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3E10" width="19" alt="" class="perseats E10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3E11" width="19" alt="" class="perseats E11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3E12" width="19" alt="" class="perseats E12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3E13" width="19" alt="" class="perseats E13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3E14" width="19" alt="" class="perseats E14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3E15" width="19" alt="" class="perseats E15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3E16" width="19" alt="" class="perseats E16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3E17" width="19" alt="" class="perseats E17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3E18" width="19" alt="" class="perseats E18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3E19" width="19" alt="" class="perseats E19">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3E20" width="19" alt="" class="perseats E20">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3F1" width="19" alt="" class="perseats F1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3F2" width="19" alt="" class="perseats F2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3F3" width="19" alt="" class="perseats F3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3F4" width="19" alt="" class="perseats F4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3F5" width="19" alt="" class="perseats F5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3F6" width="19" alt="" class="perseats F6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3F7" width="19" alt="" class="perseats F7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3F8" width="19" alt="" class="perseats F8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3F9" width="19" alt="" class="perseats F9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3F10" width="19" alt="" class="perseats F10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3F11" width="19" alt="" class="perseats F11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3F12" width="19" alt="" class="perseats F12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3F13" width="19" alt="" class="perseats F13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3F14" width="19" alt="" class="perseats F14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3F15" width="19" alt="" class="perseats F15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3F16" width="19" alt="" class="perseats F16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3F17" width="19" alt="" class="perseats F17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3F18" width="19" alt="" class="perseats F18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3F19" width="19" alt="" class="perseats F19">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3G1" width="19" alt="" class="perseats G1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3G2" width="19" alt="" class="perseats G2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3G3" width="19" alt="" class="perseats G3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3G4" width="19" alt="" class="perseats G4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3G5" width="19" alt="" class="perseats G5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3G6" width="19" alt="" class="perseats G6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3G7" width="19" alt="" class="perseats G7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3G8" width="19" alt="" class="perseats G8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3G9" width="19" alt="" class="perseats G9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3G10" width="19" alt="" class="perseats G10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3G11" width="19" alt="" class="perseats G11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3G12" width="19" alt="" class="perseats G12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3G13" width="19" alt="" class="perseats G13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3G14" width="19" alt="" class="perseats G14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3G15" width="19" alt="" class="perseats G15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3G16" width="19" alt="" class="perseats G16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="3G17" width="19" alt="" class="perseats G17">
                            </div>
                          </div>
                        </div>
                        <div class="div-block-32">
                        <h1 class="heading-13">Customer Details</h1>
                          
                          <div class="w-form">
                          <form action="insert3-bookings.php" method="post" id="email-form" name="email-form" data-name="Email Form" class="form-3">
                              <label for="name-9" class="field-label-3">Name</label>
                              <input type="text" class="text-field-3 w-input" maxlength="256" name="fullname" placeholder="Jerico Navarro" id="fullname" required="">
                              <label for="name-10" class="field-label-3">Phone Number</label>
                              <input type="number" class="text-field-3 w-input" maxlength="11" name="number" placeholder="09*********" id="number" required="">
                              <label for="name-10" class="field-label-3">Email</label>
                              <input type="text" class="text-field-3 w-input" maxlength="256" name="email" placeholder="example@gmail.com" id="email" required="">
                              <input hidden type="text" name="date" class="date-selected" id="date">
                              <input hidden type="text" name="time" class="time-selected" id="time">
                              <input hidden type="text" name="seat" id="seat" class="seats-selected">
                              <input hidden type="text" name="ticket" id="ticket" value="<?php echo $TicketID; ?>">
                              <input hidden type="text" name="title" id="title" value="<?php echo implode(",",$Title); ?>">
                              <input type="submit" value="Reserve Now" data-wait="Please wait..." class="submit-button-2 w-button">
                            </form>
                          </div>
                          <?php
                          $ClientTicket = "";
                          if (strpos($_SERVER['REQUEST_URI'], "Ticket") == false){
                          }else{
                            $ClientTicket = $_GET['Ticket'];
                          ?>
                          <style>
                          #heading-ticket {
                            visibility: visible;
                          }

                          #ticketnumber {
                            visibility: visible;
                          }
                          </style>

                          <?php
                          }
                          ?>
                          <h1 id="heading-ticket" class="heading-13 ticket">Your Ticket Number</h1>
                          <div id="ticketnumber">
                            <h2 id="thenumber">#<?php echo $ClientTicket; ?></h2>
                            <p id="success-messesage">Success fully reserved a seat!<br>Save the Ticket now!</p>
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
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="4A1" alt="" class="perseats A1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="4A2" alt="" class="perseats A2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="4A3" alt="" class="perseats A3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="4A4" alt="" class="perseats A4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="4A5" alt="" class="perseats A5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="4A6" alt="" class="perseats A6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="4A7" alt="" class="perseats A7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="4A8" alt="" class="perseats A8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="4A9" alt="" class="perseats A9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="4A10" alt="" class="perseats A10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="4A11" alt="" class="perseats A11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="4A12" alt="" class="perseats A12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="4A13" alt="" class="perseats A13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="4A14" alt="" class="perseats A14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="4A15" alt="" class="perseats A15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="4A16" alt="" class="perseats A16">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4B1" width="19" alt="" class="perseats B1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4B2" width="19" alt="" class="perseats B2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4B3" width="19" alt="" class="perseats B3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4B4" width="19" alt="" class="perseats B4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4B5" width="19" alt="" class="perseats B5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4B6" width="19" alt="" class="perseats B6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4B7" width="19" alt="" class="perseats B7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4B8" width="19" alt="" class="perseats B8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4B9" width="19" alt="" class="perseats B9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4B10" width="19" alt="" class="perseats B10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4B11" width="19" alt="" class="perseats B11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4B12" width="19" alt="" class="perseats B12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4B13" width="19" alt="" class="perseats B13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4B14" width="19" alt="" class="perseats B14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4B15" width="19" alt="" class="perseats B15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4B16" width="19" alt="" class="perseats B16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4B17" width="19" alt="" class="perseats B17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4B18" width="19" alt="" class="perseats B18">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4C1" width="19" alt="" class="perseats C1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4C2" width="19" alt="" class="perseats C2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4C3" width="19" alt="" class="perseats C3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4C4" width="19" alt="" class="perseats C4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4C5" width="19" alt="" class="perseats C5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4C6" width="19" alt="" class="perseats C6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4C7" width="19" alt="" class="perseats C7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4C8" width="19" alt="" class="perseats C8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4C9" width="19" alt="" class="perseats C9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4C10" width="19" alt="" class="perseats C10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4C11" width="19" alt="" class="perseats C11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4C12" width="19" alt="" class="perseats C12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4C13" width="19" alt="" class="perseats C13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4C14" width="19" alt="" class="perseats C14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4C15" width="19" alt="" class="perseats C15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4C16" width="19" alt="" class="perseats C16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4C17" width="19" alt="" class="perseats C17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4C18" width="19" alt="" class="perseats C18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4C19" width="19" alt="" class="perseats C19">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4D1" width="19" alt="" class="perseats D1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4D2" width="19" alt="" class="perseats D2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4D3" width="19" alt="" class="perseats D3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4D4" width="19" alt="" class="perseats D4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4D5" width="19" alt="" class="perseats D5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4D6" width="19" alt="" class="perseats D6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4D7" width="19" alt="" class="perseats D7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4D8" width="19" alt="" class="perseats D8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4D9" width="19" alt="" class="perseats D9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4D10" width="19" alt="" class="perseats D10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4D11" width="19" alt="" class="perseats D11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4D12" width="19" alt="" class="perseats D12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4D13" width="19" alt="" class="perseats D13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4D14" width="19" alt="" class="perseats D14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4D15" width="19" alt="" class="perseats D15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4D16" width="19" alt="" class="perseats D16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4D17" width="19" alt="" class="perseats D17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4D18"width="19" alt="" class="perseats D18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4D19" width="19" alt="" class="perseats D19">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4D20" width="19" alt="" class="perseats D20">

                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4E1" width="19" alt="" class="perseats E1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4E2" width="19" alt="" class="perseats E2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4E3" width="19" alt="" class="perseats E3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4E4" width="19" alt="" class="perseats E4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4E5" width="19" alt="" class="perseats E5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4E6" width="19" alt="" class="perseats E6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4E7" width="19" alt="" class="perseats E7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4E8" width="19" alt="" class="perseats E8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4E9" width="19" alt="" class="perseats E9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4E10" width="19" alt="" class="perseats E10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4E11" width="19" alt="" class="perseats E11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4E12" width="19" alt="" class="perseats E12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4E13" width="19" alt="" class="perseats E13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4E14" width="19" alt="" class="perseats E14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4E15" width="19" alt="" class="perseats E15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4E16" width="19" alt="" class="perseats E16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4E17" width="19" alt="" class="perseats E17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4E18" width="19" alt="" class="perseats E18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4E19" width="19" alt="" class="perseats E19">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4E20" width="19" alt="" class="perseats E20">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4F1" width="19" alt="" class="perseats F1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4F2" width="19" alt="" class="perseats F2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4F3" width="19" alt="" class="perseats F3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4F4" width="19" alt="" class="perseats F4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4F5" width="19" alt="" class="perseats F5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4F6" width="19" alt="" class="perseats F6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4F7" width="19" alt="" class="perseats F7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4F8" width="19" alt="" class="perseats F8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4F9" width="19" alt="" class="perseats F9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4F10" width="19" alt="" class="perseats F10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4F11" width="19" alt="" class="perseats F11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4F12" width="19" alt="" class="perseats F12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4F13" width="19" alt="" class="perseats F13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4F14" width="19" alt="" class="perseats F14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4F15" width="19" alt="" class="perseats F15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4F16" width="19" alt="" class="perseats F16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4F17" width="19" alt="" class="perseats F17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4F18" width="19" alt="" class="perseats F18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4F19" width="19" alt="" class="perseats F19">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4G1" width="19" alt="" class="perseats G1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4G2" width="19" alt="" class="perseats G2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4G3" width="19" alt="" class="perseats G3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4G4" width="19" alt="" class="perseats G4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4G5" width="19" alt="" class="perseats G5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4G6" width="19" alt="" class="perseats G6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4G7" width="19" alt="" class="perseats G7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4G8" width="19" alt="" class="perseats G8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4G9" width="19" alt="" class="perseats G9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4G10" width="19" alt="" class="perseats G10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4G11" width="19" alt="" class="perseats G11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4G12" width="19" alt="" class="perseats G12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4G13" width="19" alt="" class="perseats G13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4G14" width="19" alt="" class="perseats G14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4G15" width="19" alt="" class="perseats G15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4G16" width="19" alt="" class="perseats G16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="4G17" width="19" alt="" class="perseats G17">
                            </div>
                          </div>
                        </div>
                        <div class="div-block-32">
                        <h1 class="heading-13">Customer Details</h1>
                          
                          <div class="w-form">
                          <form action="insert3-bookings.php" method="post" id="email-form" name="email-form" data-name="Email Form" class="form-3">
                              <label for="name-9" class="field-label-3">Name</label>
                              <input type="text" class="text-field-3 w-input" maxlength="256" name="fullname" placeholder="Jerico Navarro" id="fullname" required="">
                              <label for="name-10" class="field-label-3">Phone Number</label>
                              <input type="number" class="text-field-3 w-input" maxlength="11" name="number" placeholder="09*********" id="number" required="">
                              <label for="name-10" class="field-label-3">Email</label>
                              <input type="text" class="text-field-3 w-input" maxlength="256" name="email" placeholder="example@gmail.com" id="email" required="">
                              <input hidden type="text" name="date" class="date-selected" id="date">
                              <input hidden type="text" name="time" class="time-selected" id="time">
                              <input hidden type="text" name="seat" id="seat" class="seats-selected">
                              <input hidden type="text" name="ticket" id="ticket" value="<?php echo $TicketID; ?>">
                              <input hidden type="text" name="title" id="title" value="<?php echo implode(",",$Title); ?>">
                              <input type="submit" value="Reserve Now" data-wait="Please wait..." class="submit-button-2 w-button">
                            </form>
                          </div>
                          <?php
                          $ClientTicket = "";
                          if (strpos($_SERVER['REQUEST_URI'], "Ticket") == false){
                          }else{
                            $ClientTicket = $_GET['Ticket'];
                          ?>
                          <style>
                          #heading-ticket {
                            visibility: visible;
                          }

                          #ticketnumber {
                            visibility: visible;
                          }
                          </style>

                          <?php
                          }
                          ?>
                          <h1 id="heading-ticket" class="heading-13 ticket">Your Ticket Number</h1>
                          <div id="ticketnumber">
                            <h2 id="thenumber">#<?php echo $ClientTicket; ?></h2>
                            <p id="success-messesage">Success fully reserved a seat!<br>Save the Ticket now!</p>
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
                  <script>
                    document.getElementById("time1-date3").addEventListener("click", () => {
                      console.log("<?php echo "9:30 AM"; ?>"); 
                      var list = document.getElementsByClassName('time-selected');
                      for (var n = 0; n < list.length; ++n) {
                        list[n].value="9:30 AM";
                      }
                    });
                  </script>    
                  <div class="time">9:30</div>
                    <div class="wtime">AM</div>
                  </a>
                  <a onclick="changeseat(this.id);" id="time2-date3" data-w-tab="Tab 2" class="time-tablink w-inline-block w-tab-link">
                  <script>
                    document.getElementById("time2-date3").addEventListener("click", () => {
                      console.log("<?php echo "12:30 PM"; ?>"); 
                      var list = document.getElementsByClassName('time-selected');
                      for (var n = 0; n < list.length; ++n) {
                        list[n].value="12:30 PM";
                      }
                    });
                  </script>    
                  <div class="time">12:30</div>
                    <div class="wtime">PM</div>
                  </a>
                  <a onclick="changeseat(this.id);" id="time3-date3" data-w-tab="Tab 3" class="time-tablink w-inline-block w-tab-link w--current">
                  <script>
                    document.getElementById("time3-date3").addEventListener("click", () => {
                      console.log("<?php echo "3:30 PM"; ?>"); 
                      var list = document.getElementsByClassName('time-selected');
                      for (var n = 0; n < list.length; ++n) {
                        list[n].value="3:30 PM";
                      }
                    });
                  </script>    
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
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="5A1" alt="" class="perseats A1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="5A2" alt="" class="perseats A2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="5A3" alt="" class="perseats A3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="5A4" alt="" class="perseats A4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="5A5" alt="" class="perseats A5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="5A6" alt="" class="perseats A6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="5A7" alt="" class="perseats A7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="5A8" alt="" class="perseats A8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="5A9" alt="" class="perseats A9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="5A10" alt="" class="perseats A10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="5A11" alt="" class="perseats A11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="5A12" alt="" class="perseats A12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="5A13" alt="" class="perseats A13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="5A14" alt="" class="perseats A14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="5A15" alt="" class="perseats A15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="5A16" alt="" class="perseats A16">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5B1" width="19" alt="" class="perseats B1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5B2" width="19" alt="" class="perseats B2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5B3" width="19" alt="" class="perseats B3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5B4" width="19" alt="" class="perseats B4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5B5" width="19" alt="" class="perseats B5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5B6" width="19" alt="" class="perseats B6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5B7" width="19" alt="" class="perseats B7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5B8" width="19" alt="" class="perseats B8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5B9" width="19" alt="" class="perseats B9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5B10" width="19" alt="" class="perseats B10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5B11" width="19" alt="" class="perseats B11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5B12" width="19" alt="" class="perseats B12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5B13" width="19" alt="" class="perseats B13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5B14" width="19" alt="" class="perseats B14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5B15" width="19" alt="" class="perseats B15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5B16" width="19" alt="" class="perseats B16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5B17" width="19" alt="" class="perseats B17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5B18" width="19" alt="" class="perseats B18">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5C1" width="19" alt="" class="perseats C1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5C2" width="19" alt="" class="perseats C2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5C3" width="19" alt="" class="perseats C3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5C4" width="19" alt="" class="perseats C4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5C5" width="19" alt="" class="perseats C5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5C6" width="19" alt="" class="perseats C6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5C7" width="19" alt="" class="perseats C7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5C8" width="19" alt="" class="perseats C8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5C9" width="19" alt="" class="perseats C9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5C10" width="19" alt="" class="perseats C10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5C11" width="19" alt="" class="perseats C11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5C12" width="19" alt="" class="perseats C12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5C13" width="19" alt="" class="perseats C13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5C14" width="19" alt="" class="perseats C14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5C15" width="19" alt="" class="perseats C15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5C16" width="19" alt="" class="perseats C16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5C17" width="19" alt="" class="perseats C17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5C18" width="19" alt="" class="perseats C18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5C19" width="19" alt="" class="perseats C19">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5D1" width="19" alt="" class="perseats D1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5D2" width="19" alt="" class="perseats D2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5D3" width="19" alt="" class="perseats D3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5D4" width="19" alt="" class="perseats D4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5D5" width="19" alt="" class="perseats D5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5D6" width="19" alt="" class="perseats D6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5D7" width="19" alt="" class="perseats D7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5D8" width="19" alt="" class="perseats D8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5D9" width="19" alt="" class="perseats D9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5D10" width="19" alt="" class="perseats D10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5D11" width="19" alt="" class="perseats D11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5D12" width="19" alt="" class="perseats D12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5D13" width="19" alt="" class="perseats D13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5D14" width="19" alt="" class="perseats D14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5D15" width="19" alt="" class="perseats D15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5D16" width="19" alt="" class="perseats D16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5D17" width="19" alt="" class="perseats D17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5D18"width="19" alt="" class="perseats D18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5D19" width="19" alt="" class="perseats D19">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5D20" width="19" alt="" class="perseats D20">

                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5E1" width="19" alt="" class="perseats E1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5E2" width="19" alt="" class="perseats E2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5E3" width="19" alt="" class="perseats E3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5E4" width="19" alt="" class="perseats E4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5E5" width="19" alt="" class="perseats E5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5E6" width="19" alt="" class="perseats E6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5E7" width="19" alt="" class="perseats E7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5E8" width="19" alt="" class="perseats E8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5E9" width="19" alt="" class="perseats E9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5E10" width="19" alt="" class="perseats E10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5E11" width="19" alt="" class="perseats E11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5E12" width="19" alt="" class="perseats E12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5E13" width="19" alt="" class="perseats E13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5E14" width="19" alt="" class="perseats E14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5E15" width="19" alt="" class="perseats E15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5E16" width="19" alt="" class="perseats E16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5E17" width="19" alt="" class="perseats E17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5E18" width="19" alt="" class="perseats E18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5E19" width="19" alt="" class="perseats E19">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5E20" width="19" alt="" class="perseats E20">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5F1" width="19" alt="" class="perseats F1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5F2" width="19" alt="" class="perseats F2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5F3" width="19" alt="" class="perseats F3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5F4" width="19" alt="" class="perseats F4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5F5" width="19" alt="" class="perseats F5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5F6" width="19" alt="" class="perseats F6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5F7" width="19" alt="" class="perseats F7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5F8" width="19" alt="" class="perseats F8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5F9" width="19" alt="" class="perseats F9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5F10" width="19" alt="" class="perseats F10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5F11" width="19" alt="" class="perseats F11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5F12" width="19" alt="" class="perseats F12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5F13" width="19" alt="" class="perseats F13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5F14" width="19" alt="" class="perseats F14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5F15" width="19" alt="" class="perseats F15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5F16" width="19" alt="" class="perseats F16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5F17" width="19" alt="" class="perseats F17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5F18" width="19" alt="" class="perseats F18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5F19" width="19" alt="" class="perseats F19">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5G1" width="19" alt="" class="perseats G1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5G2" width="19" alt="" class="perseats G2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5G3" width="19" alt="" class="perseats G3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5G4" width="19" alt="" class="perseats G4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5G5" width="19" alt="" class="perseats G5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5G6" width="19" alt="" class="perseats G6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5G7" width="19" alt="" class="perseats G7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5G8" width="19" alt="" class="perseats G8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5G9" width="19" alt="" class="perseats G9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5G10" width="19" alt="" class="perseats G10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5G11" width="19" alt="" class="perseats G11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5G12" width="19" alt="" class="perseats G12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5G13" width="19" alt="" class="perseats G13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5G14" width="19" alt="" class="perseats G14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5G15" width="19" alt="" class="perseats G15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5G16" width="19" alt="" class="perseats G16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="5G17" width="19" alt="" class="perseats G17">
                            </div>
                          </div>
                        </div>
                        <div class="div-block-32">
                        <h1 class="heading-13">Customer Details</h1>
                          
                          <div class="w-form">
                          <form action="insert3-bookings.php" method="post" id="email-form" name="email-form" data-name="Email Form" class="form-3">
                              <label for="name-9" class="field-label-3">Name</label>
                              <input type="text" class="text-field-3 w-input" maxlength="256" name="fullname" placeholder="Jerico Navarro" id="fullname" required="">
                              <label for="name-10" class="field-label-3">Phone Number</label>
                              <input type="number" class="text-field-3 w-input" maxlength="11" name="number" placeholder="09*********" id="number" required="">
                              <label for="name-10" class="field-label-3">Email</label>
                              <input type="text" class="text-field-3 w-input" maxlength="256" name="email" placeholder="example@gmail.com" id="email" required="">
                              <input hidden type="text" name="date" class="date-selected" id="date">
                              <input hidden type="text" name="time" class="time-selected" id="time">
                              <input hidden type="text" name="seat" id="seat" class="seats-selected">
                              <input hidden type="text" name="ticket" id="ticket" value="<?php echo $TicketID; ?>">
                              <input hidden type="text" name="title" id="title" value="<?php echo implode(",",$Title); ?>">
                              <input type="submit" value="Reserve Now" data-wait="Please wait..." class="submit-button-2 w-button">
                            </form>
                          </div>
                          <?php
                          $ClientTicket = "";
                          if (strpos($_SERVER['REQUEST_URI'], "Ticket") == false){
                          }else{
                            $ClientTicket = $_GET['Ticket'];
                          ?>
                          <style>
                          #heading-ticket {
                            visibility: visible;
                          }

                          #ticketnumber {
                            visibility: visible;
                          }
                          </style>

                          <?php
                          }
                          ?>
                          <h1 id="heading-ticket" class="heading-13 ticket">Your Ticket Number</h1>
                          <div id="ticketnumber">
                            <h2 id="thenumber">#<?php echo $ClientTicket; ?></h2>
                            <p id="success-messesage">Success fully reserved a seat!<br>Save the Ticket now!</p>
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
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="6A1" alt="" class="perseats A1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="6A2" alt="" class="perseats A2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="6A3" alt="" class="perseats A3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="6A4" alt="" class="perseats A4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="6A5" alt="" class="perseats A5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="6A6" alt="" class="perseats A6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="6A7" alt="" class="perseats A7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="6A8" alt="" class="perseats A8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="6A9" alt="" class="perseats A9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="6A10" alt="" class="perseats A10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="6A11" alt="" class="perseats A11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="6A12" alt="" class="perseats A12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="6A13" alt="" class="perseats A13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="6A14" alt="" class="perseats A14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="6A15" alt="" class="perseats A15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="6A16" alt="" class="perseats A16">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6B1" width="19" alt="" class="perseats B1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6B2" width="19" alt="" class="perseats B2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6B3" width="19" alt="" class="perseats B3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6B4" width="19" alt="" class="perseats B4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6B5" width="19" alt="" class="perseats B5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6B6" width="19" alt="" class="perseats B6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6B7" width="19" alt="" class="perseats B7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6B8" width="19" alt="" class="perseats B8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6B9" width="19" alt="" class="perseats B9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6B10" width="19" alt="" class="perseats B10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6B11" width="19" alt="" class="perseats B11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6B12" width="19" alt="" class="perseats B12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6B13" width="19" alt="" class="perseats B13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6B14" width="19" alt="" class="perseats B14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6B15" width="19" alt="" class="perseats B15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6B16" width="19" alt="" class="perseats B16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6B17" width="19" alt="" class="perseats B17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6B18" width="19" alt="" class="perseats B18">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6C1" width="19" alt="" class="perseats C1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6C2" width="19" alt="" class="perseats C2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6C3" width="19" alt="" class="perseats C3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6C4" width="19" alt="" class="perseats C4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6C5" width="19" alt="" class="perseats C5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6C6" width="19" alt="" class="perseats C6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6C7" width="19" alt="" class="perseats C7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6C8" width="19" alt="" class="perseats C8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6C9" width="19" alt="" class="perseats C9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6C10" width="19" alt="" class="perseats C10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6C11" width="19" alt="" class="perseats C11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6C12" width="19" alt="" class="perseats C12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6C13" width="19" alt="" class="perseats C13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6C14" width="19" alt="" class="perseats C14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6C15" width="19" alt="" class="perseats C15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6C16" width="19" alt="" class="perseats C16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6C17" width="19" alt="" class="perseats C17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6C18" width="19" alt="" class="perseats C18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6C19" width="19" alt="" class="perseats C19">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6D1" width="19" alt="" class="perseats D1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6D2" width="19" alt="" class="perseats D2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6D3" width="19" alt="" class="perseats D3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6D4" width="19" alt="" class="perseats D4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6D5" width="19" alt="" class="perseats D5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6D6" width="19" alt="" class="perseats D6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6D7" width="19" alt="" class="perseats D7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6D8" width="19" alt="" class="perseats D8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6D9" width="19" alt="" class="perseats D9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6D10" width="19" alt="" class="perseats D10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6D11" width="19" alt="" class="perseats D11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6D12" width="19" alt="" class="perseats D12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6D13" width="19" alt="" class="perseats D13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6D14" width="19" alt="" class="perseats D14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6D15" width="19" alt="" class="perseats D15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6D16" width="19" alt="" class="perseats D16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6D17" width="19" alt="" class="perseats D17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6D18"width="19" alt="" class="perseats D18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6D19" width="19" alt="" class="perseats D19">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6D20" width="19" alt="" class="perseats D20">

                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6E1" width="19" alt="" class="perseats E1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6E2" width="19" alt="" class="perseats E2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6E3" width="19" alt="" class="perseats E3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6E4" width="19" alt="" class="perseats E4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6E5" width="19" alt="" class="perseats E5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6E6" width="19" alt="" class="perseats E6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6E7" width="19" alt="" class="perseats E7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6E8" width="19" alt="" class="perseats E8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6E9" width="19" alt="" class="perseats E9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6E10" width="19" alt="" class="perseats E10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6E11" width="19" alt="" class="perseats E11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6E12" width="19" alt="" class="perseats E12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6E13" width="19" alt="" class="perseats E13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6E14" width="19" alt="" class="perseats E14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6E15" width="19" alt="" class="perseats E15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6E16" width="19" alt="" class="perseats E16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6E17" width="19" alt="" class="perseats E17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6E18" width="19" alt="" class="perseats E18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6E19" width="19" alt="" class="perseats E19">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6E20" width="19" alt="" class="perseats E20">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6F1" width="19" alt="" class="perseats F1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6F2" width="19" alt="" class="perseats F2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6F3" width="19" alt="" class="perseats F3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6F4" width="19" alt="" class="perseats F4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6F5" width="19" alt="" class="perseats F5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6F6" width="19" alt="" class="perseats F6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6F7" width="19" alt="" class="perseats F7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6F8" width="19" alt="" class="perseats F8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6F9" width="19" alt="" class="perseats F9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6F10" width="19" alt="" class="perseats F10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6F11" width="19" alt="" class="perseats F11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6F12" width="19" alt="" class="perseats F12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6F13" width="19" alt="" class="perseats F13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6F14" width="19" alt="" class="perseats F14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6F15" width="19" alt="" class="perseats F15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6F16" width="19" alt="" class="perseats F16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6F17" width="19" alt="" class="perseats F17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6F18" width="19" alt="" class="perseats F18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6F19" width="19" alt="" class="perseats F19">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6G1" width="19" alt="" class="perseats G1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6G2" width="19" alt="" class="perseats G2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6G3" width="19" alt="" class="perseats G3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6G4" width="19" alt="" class="perseats G4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6G5" width="19" alt="" class="perseats G5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6G6" width="19" alt="" class="perseats G6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6G7" width="19" alt="" class="perseats G7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6G8" width="19" alt="" class="perseats G8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6G9" width="19" alt="" class="perseats G9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6G10" width="19" alt="" class="perseats G10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6G11" width="19" alt="" class="perseats G11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6G12" width="19" alt="" class="perseats G12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6G13" width="19" alt="" class="perseats G13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6G14" width="19" alt="" class="perseats G14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6G15" width="19" alt="" class="perseats G15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6G16" width="19" alt="" class="perseats G16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="6G17" width="19" alt="" class="perseats G17">
                            </div>
                          </div>
                        </div>
                        <div class="div-block-32">
                        <h1 class="heading-13">Customer Details</h1>
                          
                          <div class="w-form">
                          <form action="insert3-bookings.php" method="post" id="email-form" name="email-form" data-name="Email Form" class="form-3">
                              <label for="name-9" class="field-label-3">Name</label>
                              <input type="text" class="text-field-3 w-input" maxlength="256" name="fullname" placeholder="Jerico Navarro" id="fullname" required="">
                              <label for="name-10" class="field-label-3">Phone Number</label>
                              <input type="number" class="text-field-3 w-input" maxlength="11" name="number" placeholder="09*********" id="number" required="">
                              <label for="name-10" class="field-label-3">Email</label>
                              <input type="text" class="text-field-3 w-input" maxlength="256" name="email" placeholder="example@gmail.com" id="email" required="">
                              <input hidden type="text" name="date" class="date-selected" id="date">
                              <input hidden type="text" name="time" class="time-selected" id="time">
                              <input hidden type="text" name="seat" id="seat" class="seats-selected">
                              <input hidden type="text" name="ticket" id="ticket" value="<?php echo $TicketID; ?>">
                              <input hidden type="text" name="title" id="title" value="<?php echo implode(",",$Title); ?>">
                              <input type="submit" value="Reserve Now" data-wait="Please wait..." class="submit-button-2 w-button">
                            </form>
                          </div>
                          <?php
                          $ClientTicket = "";
                          if (strpos($_SERVER['REQUEST_URI'], "Ticket") == false){
                          }else{
                            $ClientTicket = $_GET['Ticket'];
                          ?>
                          <style>
                          #heading-ticket {
                            visibility: visible;
                          }

                          #ticketnumber {
                            visibility: visible;
                          }
                          </style>

                          <?php
                          }
                          ?>
                          <h1 id="heading-ticket" class="heading-13 ticket">Your Ticket Number</h1>
                          <div id="ticketnumber">
                            <h2 id="thenumber">#<?php echo $ClientTicket; ?></h2>
                            <p id="success-messesage">Success fully reserved a seat!<br>Save the Ticket now!</p>
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
                            <div class="div-block-22"">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="7A1" alt="" class="perseats A1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="7A2" alt="" class="perseats A2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="7A3" alt="" class="perseats A3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="7A4" alt="" class="perseats A4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="7A5" alt="" class="perseats A5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="7A6" alt="" class="perseats A6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="7A7" alt="" class="perseats A7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="7A8" alt="" class="perseats A8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="7A9" alt="" class="perseats A9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="7A10" alt="" class="perseats A10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="7A11" alt="" class="perseats A11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="7A12" alt="" class="perseats A12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="7A13" alt="" class="perseats A13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="7A14" alt="" class="perseats A14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="7A15" alt="" class="perseats A15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" width="19" id="7A16" alt="" class="perseats A16">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7B1" width="19" alt="" class="perseats B1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7B2" width="19" alt="" class="perseats B2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7B3" width="19" alt="" class="perseats B3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7B4" width="19" alt="" class="perseats B4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7B5" width="19" alt="" class="perseats B5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7B6" width="19" alt="" class="perseats B6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7B7" width="19" alt="" class="perseats B7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7B8" width="19" alt="" class="perseats B8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7B9" width="19" alt="" class="perseats B9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7B10" width="19" alt="" class="perseats B10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7B11" width="19" alt="" class="perseats B11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7B12" width="19" alt="" class="perseats B12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7B13" width="19" alt="" class="perseats B13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7B14" width="19" alt="" class="perseats B14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7B15" width="19" alt="" class="perseats B15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7B16" width="19" alt="" class="perseats B16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7B17" width="19" alt="" class="perseats B17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7B18" width="19" alt="" class="perseats B18">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7C1" width="19" alt="" class="perseats C1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7C2" width="19" alt="" class="perseats C2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7C3" width="19" alt="" class="perseats C3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7C4" width="19" alt="" class="perseats C4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7C5" width="19" alt="" class="perseats C5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7C6" width="19" alt="" class="perseats C6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7C7" width="19" alt="" class="perseats C7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7C8" width="19" alt="" class="perseats C8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7C9" width="19" alt="" class="perseats C9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7C10" width="19" alt="" class="perseats C10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7C11" width="19" alt="" class="perseats C11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7C12" width="19" alt="" class="perseats C12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7C13" width="19" alt="" class="perseats C13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7C14" width="19" alt="" class="perseats C14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7C15" width="19" alt="" class="perseats C15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7C16" width="19" alt="" class="perseats C16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7C17" width="19" alt="" class="perseats C17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7C18" width="19" alt="" class="perseats C18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7C19" width="19" alt="" class="perseats C19">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7D1" width="19" alt="" class="perseats D1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7D2" width="19" alt="" class="perseats D2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7D3" width="19" alt="" class="perseats D3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7D4" width="19" alt="" class="perseats D4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7D5" width="19" alt="" class="perseats D5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7D6" width="19" alt="" class="perseats D6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7D7" width="19" alt="" class="perseats D7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7D8" width="19" alt="" class="perseats D8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7D9" width="19" alt="" class="perseats D9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7D10" width="19" alt="" class="perseats D10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7D11" width="19" alt="" class="perseats D11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7D12" width="19" alt="" class="perseats D12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7D13" width="19" alt="" class="perseats D13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7D14" width="19" alt="" class="perseats D14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7D15" width="19" alt="" class="perseats D15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7D16" width="19" alt="" class="perseats D16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7D17" width="19" alt="" class="perseats D17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7D18"width="19" alt="" class="perseats D18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7D19" width="19" alt="" class="perseats D19">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7D20" width="19" alt="" class="perseats D20">

                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7E1" width="19" alt="" class="perseats E1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7E2" width="19" alt="" class="perseats E2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7E3" width="19" alt="" class="perseats E3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7E4" width="19" alt="" class="perseats E4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7E5" width="19" alt="" class="perseats E5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7E6" width="19" alt="" class="perseats E6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7E7" width="19" alt="" class="perseats E7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7E8" width="19" alt="" class="perseats E8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7E9" width="19" alt="" class="perseats E9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7E10" width="19" alt="" class="perseats E10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7E11" width="19" alt="" class="perseats E11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7E12" width="19" alt="" class="perseats E12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7E13" width="19" alt="" class="perseats E13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7E14" width="19" alt="" class="perseats E14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7E15" width="19" alt="" class="perseats E15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7E16" width="19" alt="" class="perseats E16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7E17" width="19" alt="" class="perseats E17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7E18" width="19" alt="" class="perseats E18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7E19" width="19" alt="" class="perseats E19">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7E20" width="19" alt="" class="perseats E20">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7F1" width="19" alt="" class="perseats F1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7F2" width="19" alt="" class="perseats F2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7F3" width="19" alt="" class="perseats F3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7F4" width="19" alt="" class="perseats F4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7F5" width="19" alt="" class="perseats F5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7F6" width="19" alt="" class="perseats F6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7F7" width="19" alt="" class="perseats F7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7F8" width="19" alt="" class="perseats F8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7F9" width="19" alt="" class="perseats F9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7F10" width="19" alt="" class="perseats F10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7F11" width="19" alt="" class="perseats F11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7F12" width="19" alt="" class="perseats F12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7F13" width="19" alt="" class="perseats F13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7F14" width="19" alt="" class="perseats F14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7F15" width="19" alt="" class="perseats F15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7F16" width="19" alt="" class="perseats F16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7F17" width="19" alt="" class="perseats F17">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7F18" width="19" alt="" class="perseats F18">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7F19" width="19" alt="" class="perseats F19">
                            </div>
                            <div class="div-block-22">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7G1" width="19" alt="" class="perseats G1">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7G2" width="19" alt="" class="perseats G2">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7G3" width="19" alt="" class="perseats G3">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7G4" width="19" alt="" class="perseats G4">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7G5" width="19" alt="" class="perseats G5">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7G6" width="19" alt="" class="perseats G6">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7G7" width="19" alt="" class="perseats G7">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7G8" width="19" alt="" class="perseats G8">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7G9" width="19" alt="" class="perseats G9">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7G10" width="19" alt="" class="perseats G10">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7G11" width="19" alt="" class="perseats G11">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7G12" width="19" alt="" class="perseats G12">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7G13" width="19" alt="" class="perseats G13">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7G14" width="19" alt="" class="perseats G14">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7G15" width="19" alt="" class="perseats G15">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7G16" width="19" alt="" class="perseats G16">
                              <img onclick="changeseat(this.id)" src="images/Path-34_1Path-34.png" id="7G17" width="19" alt="" class="perseats G17">
                            </div>
                          </div>
                        </div>
                        <div class="div-block-32">
                        <h1 class="heading-13">Customer Details</h1>
                          
                          <div class="w-form">
                          <form action="insert3-bookings.php" method="post" id="email-form" name="email-form" data-name="Email Form" class="form-3">
                              <label for="name-9" class="field-label-3">Name</label>
                              <input type="text" class="text-field-3 w-input" maxlength="256" name="fullname" placeholder="Jerico Navarro" id="fullname" required="">
                              <label for="name-10" class="field-label-3">Phone Number</label>
                              <input type="number" class="text-field-3 w-input" maxlength="11" name="number" placeholder="09*********" id="number" required="">
                              <label for="name-10" class="field-label-3">Email</label>
                              <input type="text" class="text-field-3 w-input" maxlength="256" name="email" placeholder="example@gmail.com" id="email" required="">
                              <input hidden type="text" name="date" class="date-selected" id="date">
                              <input hidden type="text" name="time" class="time-selected" id="time">
                              <input hidden type="text" name="seat" id="seat" class="seats-selected">
                              <input hidden type="text" name="ticket" id="ticket" value="<?php echo $TicketID; ?>">
                              <input hidden type="text" name="title" id="title" value="<?php echo implode(",",$Title); ?>">
                              <input type="submit" value="Reserve Now" data-wait="Please wait..." class="submit-button-2 w-button">
                            </form>
                          </div>
                          <?php
                          $ClientTicket = "";
                          if (strpos($_SERVER['REQUEST_URI'], "Ticket") == false){
                          }else{
                            $ClientTicket = $_GET['Ticket'];
                          ?>
                          <style>
                          #heading-ticket {
                            visibility: visible;
                          }

                          #ticketnumber {
                            visibility: visible;
                          }
                          </style>

                          <?php
                          }
                          ?>
                          <h1 id="heading-ticket" class="heading-13 ticket">Your Ticket Number</h1>
                          <div id="ticketnumber">
                            <h2 id="thenumber">#<?php echo $ClientTicket; ?></h2>
                            <p id="success-messesage">Success fully reserved a seat!<br>Save the Ticket now!</p>
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
  <script>
    var CSeat = "";  
function changeseat(clicked_id) {
  var hh = clicked_id;
  CSeat = hh+"";
  console.log(CSeat);
  console.log("<?php echo "kajshdg".implode(",",$Title); ?>");
  var list = document.getElementsByClassName('seats-selected');
  var n;
  for (n = 0; n < list.length; ++n) {
    list[n].value=CSeat;
  }
  var elems1 = document.getElementsByClassName("heading-7");
    for (var x = 0; x < elems1.length; x+= 1) {
      var selected = hh + " Seat is selected";
      var clear = "Select your seat";
      if (hh=="date1"||hh=="date2"||hh=="date3"||hh=="time1-date3"||hh=="time2-date3"||hh=="time3-date3"||hh=="time1-date2"||hh=="time2-date2"||hh=="time3-date2"||hh=="time1-date1"||hh=="time2-date1"||hh=="time3-date1") {
        elems1[x].innerHTML = clear;
      }else{
        elems1[x].innerHTML = selected;
      }
    }
    var seat = "perseats";
    var elems = document.getElementsByClassName(seat);
    for (var x = 0; x < elems.length; x+= 1) {
      elems[x].src = "images/Path-34_1Path-34.png";
    }
    document.getElementById(clicked_id).src = "images/Path-36_1Path-36.png";
    <?php
    $Movie_Title = implode(",",$Title);
    $seat_queery = "SELECT seat FROM bookings WHERE title =";
    $seat_queery1 = $seat_queery. ' "' .$Movie_Title. '"';
    $seat_result = mysqli_query($conn, $seat_queery1);
    while($seat_rows = mysqli_fetch_array($seat_result)){
      $SeatsSold[] = $seat_rows['seat'];
      foreach($SeatsSold as $seatsold) {?>
        document.getElementById("<?php echo $seatsold; ?>").src = "images/Path-35_1Path-35.png";
        document.getElementById('<?php echo $seatsold; ?>').style.pointerEvents = 'none';<?php
      }
    }
    ?>
  console.log("<?php echo $seat_queery. ' ' .$Movie_Title; ?>");
}
  </script>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js?site=5e7092bf421073025be60948" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>