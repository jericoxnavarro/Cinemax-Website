<?php 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db_name = "cinemax";
  $conn = mysqli_connect($servername,$username,$password);
  mysqli_select_db($conn, $db_name);
?>
<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Fri May 01 2020 01:32:25 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5eaa311216b9f090b420406c" data-wf-site="5eaa311216b9f050fa20406b">
<head>
  <meta charset="utf-8">
  <title>Dashboard</title>
  <meta content="Dashboard" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/try-6b7020-b8b88554ecad43-10045637b9369.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Open Sans Condensed:300,300italic,700:greek-ext,vietnamese,latin-ext,cyrillic-ext,greek,latin,cyrillic"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
</head>
<body>
  <div class="dashboard-section">
    <div class="div-nav">
      <div class="div-logo">
        <h1 class="heading-7">CINEMAX</h1>
        <h1 class="heading-8">ADMIN</h1>
      </div>
      <div class="nav-div">
        <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
          <div class="container w-container">
            <nav role="navigation" class="nav-menu w-nav-menu">
              <a href="dashboard.php" aria-current="page" class="nav-link dashboard w-nav-link w--current">Dashboard</a>
              <a href="status.php" class="nav-link status w-nav-link">Status</a>
              <a href="movies.php" class="nav-link movies w-nav-link">Movies</a>
              <a href="bookings.php" class="nav-link booking w-nav-link">Booking</a>
            </nav>
            <div class="w-nav-button">
              <div class="w-icon-nav-menu"></div>
            </div><a href="#" class="nav-link logout w-nav-link">Log out</a></div>
        </div>
      </div>
    </div>
    <div class="content-wrapper">
      <div class="div-block-7">
        <h1 class="heading-6">Welcome to CINEMAX ADMIN Panel</h1>
        <div class="text-block-4">Manage customers and movies!!</div>
      </div>
      <div class="div-block-8">
        <div class="div _1"><img src="images/cinema_60px_1cinema_60px.png" alt="">
          <?php 
            $date_today = date("Y/m/d");
            $movietoday = mysqli_query($conn, "SELECT Title FROM movies WHERE Date1 = ".'"'.$date_today.'" '."OR Date2 = ".'"'.$date_today.'"'."OR Date3 = ".'"'.$date_today.'"');
            $moviet = mysqli_fetch_assoc($movietoday);
          ?>
          <h2 class="movies">Movie Today</h2>
          <h1 class="totalmovie"><?php echo $moviet['Title']; ?></h1>
        </div>
        <div class="div _2"><img src="images/new_ticket_52px_1new_ticket_52px.png" width="55" alt="">
          <h2 class="heading-11 bookings">Total Bookings</h2>
          <?php 
            $totalbookings = mysqli_query($conn, "SELECT count(*) as total from bookings");
            $tbookings = mysqli_fetch_assoc($totalbookings);
          ?>
          <h1 class="heading-13"> <?php echo $tbookings['total']; ?> Bookings</h1>
        </div>
        <div class="div _3"><img src="images/money_bag_52px_1money_bag_52px.png" width="60" alt="">
          <h2 class="heading-11 income">Total Income</h2>
          <h1 class="heading-13 income">PHP <?php echo $tbookings['total']*250; ?></h1>
        </div>
        <div class="div _4"><img src="images/team_60px_1team_60px.png" width="60" alt="">
          <?php 
            $totaluser = mysqli_query($conn, "SELECT COUNT(DISTINCT email) as total FROM bookings");
            $tuser = mysqli_fetch_assoc($totaluser);
          ?>
          <h2 class="heading-11 users">Total Users</h2>
          <h1 class="heading-13 users"><?php echo $tuser['total']; ?> users</h1>
        </div>
      </div>
      <div class="div-block-8">
        <div class="div _1"><img src="images/recliner_60px.png" width="65" alt="">
          <?php 
            
            $querys1 = "SELECT COUNT(date_book) as total FROM bookings WHERE date_book= ";
            $bookingstodays = mysqli_query($conn, $querys1.'"'.$date_today.'"'.' AND date = '.'"'.$date_today.'"');
            $bookingsts = mysqli_fetch_assoc($bookingstodays);
          ?>
          <h2 class="movies">Available Seats</h2>
          <h1 class="totalmovie"><?php echo 3870-$bookingsts['total']; ?> Seats</h1>
        </div>
        <div class="div _2"><img src="images/new_ticket_52px_1new_ticket_52px.png" width="55" alt="">
          <?php 
            
            $query1 = "SELECT COUNT(date_book) as total FROM bookings WHERE date_book= ";
            $bookingstoday = mysqli_query($conn, $query1.'"'.$date_today.'"');
            $bookingst = mysqli_fetch_assoc($bookingstoday);
          ?>
          <h2 class="heading-11 bookings">Bookings Today</h2>
          <h1 class="heading-13"><?php echo $bookingst['total']; ?> Bookings</h1>
        </div>
        <div class="div _3"><img src="images/money_bag_52px_1money_bag_52px.png" width="60" alt="">
          <h2 class="heading-11 income">Income Today</h2>
          <h1 class="heading-13 income">PHP <?php echo $bookingst['total']*250; ?></h1>
        </div>
        <div class="div _4"><img src="images/team_60px_1team_60px.png" width="60" alt="">
          <?php
            $query2 = "SELECT COUNT(DISTINCT email) as total FROM bookings WHERE date_book= ";
            $usertoday = mysqli_query($conn, $query2.'"'.$date_today.'"');
            $usert = mysqli_fetch_assoc($usertoday);
          ?>
          <h2 class="heading-11 users">Users Today</h2>
          <h1 class="heading-13 users"><?php echo $usert['total']; ?> users</h1>
        </div>
      </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js?site=5eaa311216b9f050fa20406b" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>