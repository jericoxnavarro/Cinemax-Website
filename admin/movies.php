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
<html data-wf-page="5eaa311216b9f08fbe20406d" data-wf-site="5eaa311216b9f050fa20406b">
<head>
  <meta charset="utf-8">
  <title>Movies</title>
  <meta content="movies" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/try-6b7020-b8b88554ecad43-10045637b9369.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Open Sans Condensed:300,300italic,700:greek-ext,vietnamese,latin-ext,cyrillic-ext,greek,latin,cyrillic"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <script>
    var change = "";
    var selectedtable = "";
  </script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
</head>
<body>

  <div class="section-2">
    <div class="div-nav">
      <div class="div-logo">
        <h1 class="heading-7">CINEMAX</h1>
        <h1 class="heading-8">ADMIN</h1>
      </div>
      <div class="nav-div">
        <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
          <div class="container w-container">
            <nav role="navigation" class="nav-menu w-nav-menu">
              <a href="dashboard.php" class="nav-link dashboard w-nav-link">Dashboard</a>
              <a href="status.php" class="nav-link status w-nav-link">Status</a>
              <a href="movies.php" aria-current="page" class="nav-link movies w-nav-link w--current">Movies</a>
              <a href="bookings.php" class="nav-link booking w-nav-link">Booking</a>
            </nav>
            <div class="w-nav-button">
              <div class="w-icon-nav-menu"></div>
            </div><a href="index.php" class="nav-link logout w-nav-link">Log out</a></div>
        </div>
      </div>
    </div>
    <div class="content-wrapper">
      <div class="div-block-11">
        <h1 class="heading-14">SHOWING MOVIES</h1>
        <div class="div-block-12 _1">
          <div class="div-con _1">
          <?php 
            $date_today = date("Y/m/d");
            $movie1 = mysqli_query($conn, "SELECT Title,Thumbnail FROM movies WHERE Movie_ID = 1");
            $movies1 = mysqli_fetch_assoc($movie1);
          ?>
            <h1 class="heading-15 _1"><?php echo $movies1['Title']; ?></h1>
            <img src="<?php echo $movies1['Thumbnail']; ?>" width="100" height="150" sizes="100px" alt="" class="thumbnail-pic _1">
            <div class="div-block-13">
              <a id="changemovie1" data-w-id="560a0f2b-b029-8461-b18d-e231368fd4ac" href="#" class="change-btn _1 w-button">Change</a>
              <script>
                document.getElementById("changemovie1").addEventListener("click", () => {
                  document.getElementById("change").value = "1";
                  document.getElementById("selectedtable").value = "movies";
                  change = "1";
                  selectedtable = "movies";
                  console.log(selectedtable, change); 
                  });
              </script>  
            </div>
          </div>
          <div class="div-con _2">
          <?php 
            $movie2 = mysqli_query($conn, "SELECT Title,Thumbnail FROM movies WHERE Movie_ID = 2");
            $movies2 = mysqli_fetch_assoc($movie2);
          ?>
            <h1 class="heading-15 _2"><?php echo $movies2['Title']; ?></h1>
            <img src="<?php echo $movies2['Thumbnail']; ?>" width="100" height="150" alt="" class="thumbnail-pic _2">
            <div class="div-block-13">
              <a id="changemovie2" data-w-id="8d1b5aa6-188c-d5bd-0d6b-167d85978661" href="#" class="change-btn _2 w-button">Change</a>
              <script>
                document.getElementById("changemovie2").addEventListener("click", () => {
                  document.getElementById("change").value = "2";
                  document.getElementById("selectedtable").value = "movies";
                  change = "2";
                  selectedtable = "movies";
                  console.log(change, selectedtable); 
                  });
              </script>  
            </div>
          </div>
          <div class="div-con _3">
          <?php 
            $movie3 = mysqli_query($conn, "SELECT Title,Thumbnail FROM movies WHERE Movie_ID = 3");
            $movies3 = mysqli_fetch_assoc($movie3);
          ?>
            <h1 class="heading-15 _3"><?php echo $movies3['Title']; ?></h1>
            <img src="<?php echo $movies3['Thumbnail']; ?>" width="100" sizes="100px" alt="" class="thumbnail-pic _3">
            <div class="div-block-13">
              <a id="changemovie3" data-w-id="bc990b82-a18f-c517-dd51-14cdf04d2a2a" href="#" class="change-btn _3 w-button">Change</a>
              <script>
                document.getElementById("changemovie3").addEventListener("click", () => {
                  document.getElementById("change").value = "3";
                  document.getElementById("selectedtable").value = "movies";
                  change = "3";
                  selectedtable = "movies";
                  console.log(change, selectedtable); 
                  });
              </script> 
            </div>
          </div>
        </div>
      </div>
      <div class="div-block-11">
        <h1 class="heading-14">UPCOMING MOVIES</h1>
        <div class="div-block-12 _1">
          <div class="div-con _1">
          <?php 
            $upcoming1 = mysqli_query($conn, "SELECT title,thumbnail FROM upcoming_movies WHERE Movie_ID = 1");
            $upcomings1 = mysqli_fetch_assoc($upcoming1);
          ?>
            <h1 class="heading-15 _1 up"><?php echo $upcomings1['title']; ?></h1>
            <img src="<?php echo $upcomings1['thumbnail']; ?>" width="100" height="150" sizes="100px" alt="" class="thumbnail-pic _1 up">
            <div class="div-block-13">
              <a id="upcoming1" data-w-id="44178800-a8c8-d694-1a74-cf3c7c187acb" href="#" class="change-btn _1 up w-button">Change</a>
              <script>
                document.getElementById("upcoming1").addEventListener("click", () => {
                  document.getElementById("change").value = "1";
                  document.getElementById("selectedtable").value = "upcoming_movies";
                  change = "1";
                  selectedtable = "upcoming_movies";
                  console.log(change, selectedtable); 
                  });
              </script> 
            </div>
          </div>
          <?php 
            $upcoming2 = mysqli_query($conn, "SELECT title,thumbnail FROM upcoming_movies WHERE Movie_ID = 2");
            $upcomings2 = mysqli_fetch_assoc($upcoming2);
          ?>
          <div class="div-con _2">
            <h1 class="heading-15 _2 up"><?php echo $upcomings2['title']; ?></h1>
            <img src="<?php echo $upcomings2['thumbnail']; ?>" width="100" height="150" alt="" class="thumbnail-pic _2 up">
            <div class="div-block-13">
              <a id="upcoming2" data-w-id="e8db5d36-5210-0045-e31b-c8745e14aa11" href="#" class="change-btn _2 up w-button">Change</a>
              <script>
                document.getElementById("upcoming2").addEventListener("click", () => {
                  document.getElementById("change").value = "2";
                  document.getElementById("selectedtable").value = "upcoming_movies";
                  change = "2";
                  selectedtable = "upcoming_movies";
                  console.log(change, selectedtable); 
                  });
              </script> 
            </div>
          </div>
          <div class="div-con _3">
          <?php 
            $upcoming3 = mysqli_query($conn, "SELECT title,thumbnail FROM upcoming_movies WHERE Movie_ID = 3");
            $upcomings3 = mysqli_fetch_assoc($upcoming3);
          ?>
            <h1 class="heading-15 _3 up"><?php echo $upcomings3['title']; ?></h1>
            <img src="<?php echo $upcomings3['thumbnail']; ?>" width="100" height="150" sizes="100px" alt="" class="thumbnail-pic _3 up">
            <div class="div-block-13">
              <a id="upcoming3" data-w-id="4527ded9-476b-217f-ccaf-571deb147362" href="#" class="change-btn _3 up w-button">Change</a>
              <script>
                document.getElementById("upcoming3").addEventListener("click", () => {
                  document.getElementById("change").value = "3";
                  document.getElementById("selectedtable").value = "upcoming_movies";
                  change = "3";
                  selectedtable = "upcoming_movies";
                  console.log(change, selectedtable); 
                  });
              </script> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <div style="display:none" class="change">
      <div class="movie-1-div">
        <div class="div-block-17">
          <h1 class="heading-20">Change Movies</h1>
          <div class="w-form">
            <form action="insert_movies.php" method="post" id="email-form" name="email-form" data-name="Email Form" class="form-4">
              <label for="title" class="field-label-2">Title</label>
              <input type="text" class="text-field-2 w-input" maxlength="256" name="title" placeholder="Title" id="title" required="">
              <label for="name-3" class="field-label-2">Genres</label>
              <div class="div-block-29">
                <select id="Genre1" name="Genre1" required="" class="select-field-2 w-select">
                  <option value="">Genre</option>
                  <option value="Comedy">Comedy</option>
                  <option value="Sci-fi">Sci-fi</option>
                  <option value="Horror">Horror</option>
                  <option value="Romance">Romance</option>
                  <option value="Action">Action</option>
                  <option value="Thriller">Thriller</option>
                  <option value="Drama">Drama</option>
                  <option value="Mystery">Mystery</option>
                  <option value="Crime">Crime</option>
                  <option value="Animation">Animation</option>
                  <option value="Adventure">Adventure</option>
                  <option value="Fantasy">Fantasy</option>
                  <option value="Comedy-Romance">Comedy-Romance</option>
                  <option value="Action-Comedy">Action-Comedy</option>
                  <option value="Superhero">Superhero</option>
                </select>
                <select id="Genre2" name="Genre2" required="" class="select-field-2 w-select">
                  <option value="">Genre</option>
                  <option value="Comedy">Comedy</option>
                  <option value="Sci-fi">Sci-fi</option>
                  <option value="Horror">Horror</option>
                  <option value="Romance">Romance</option>
                  <option value="Action">Action</option>
                  <option value="Thriller">Thriller</option>
                  <option value="Drama">Drama</option>
                  <option value="Mystery">Mystery</option>
                  <option value="Crime">Crime</option>
                  <option value="Animation">Animation</option>
                  <option value="Adventure">Adventure</option>
                  <option value="Fantasy">Fantasy</option>
                  <option value="Comedy-Romance">Comedy-Romance</option>
                  <option value="Action-Comedy">Action-Comedy</option>
                  <option value="Superhero">Superhero</option>
                </select>
                <select id="Genre3" name="Genre3" required="" class="select-field-2 w-select">
                  <option value="">Genre</option>
                  <option value="Comedy">Comedy</option>
                  <option value="Sci-fi">Sci-fi</option>
                  <option value="Horror">Horror</option>
                  <option value="Romance">Romance</option>
                  <option value="Action">Action</option>
                  <option value="Thriller">Thriller</option>
                  <option value="Drama">Drama</option>
                  <option value="Mystery">Mystery</option>
                  <option value="Crime">Crime</option>
                  <option value="Animation">Animation</option>
                  <option value="Adventure">Adventure</option>
                  <option value="Fantasy">Fantasy</option>
                  <option value="Comedy-Romance">Comedy-Romance</option>
                  <option value="Action-Comedy">Action-Comedy</option>
                  <option value="Superhero">Superhero</option>
                </select>
              </div>
              <label for="description" class="field-label-2">Description</label>
              <input type="text" class="text-field-2 w-input" maxlength="256" name="description" placeholder="Imdb Description" id="description" required="">
              <div class="div-block-31">
                <div class="div-block-30">
                  <label for="ratings" class="field-label-2">Ratings</label>
                  <input type=text" class="text-field-2 w-input" maxlength="256" name="ratings" placeholder="E.g: 9.5" id="ratings" required="">
                </div>
                <div class="div-block-30">
                  <label for="trailer" class="field-label-2">Trailer</label>
                  <input type="text" class="text-field-2 w-input" maxlength="256" name="trailer" placeholder="YT video id: e.g: KK8FHdFluOQ" id="trailer" required="">
                </div>
              </div>
              <label for="thumbnail" class="field-label-2">Thumbnail</label>
              <input type="text" class="text-field-2 w-input" maxlength="256" name="thumbnail" placeholder="Imdb thumbnail image link" id="thumbnail" required="">
              <label for="bg-image" class="field-label-2">Background Image</label>
              <input type="text" class="text-field-2 w-input" maxlength="256" name="bgimage" placeholder="Image link" id="bgimage" required="">
              <label for="name-3" class="field-label-2">Dates</label>
              <div class="div-block-29">
                <input type="text" class="text-field-2 w-input" maxlength="256" name="date1" placeholder="E.g: 2020-04-01" id="date1" required="">
                <input type="text" class="text-field-2 w-input" maxlength="256" name="date2" placeholder="E.g: 2020-04-01" id="date2" required="">
                <input type="text" class="text-field-2 w-input" maxlength="256" name="date3" placeholder="E.g: 2020-04-01" id="date3" required="">
                <input hidden type="text" name="change" id="change" value="">
                <input hidden type="text" name="selectedtable" id="selectedtable" value="">
              </div>
              <div class="div-block-32">
                <input type="submit" value="Change" data-wait="Please wait..." class="submit-button-4 w-button">
                <a data-w-id="0eb2d30f-f793-2e90-80ac-af20c01ca5ca" href="#" class="cancel w-button">Cancel</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js?site=5eaa311216b9f050fa20406b" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>