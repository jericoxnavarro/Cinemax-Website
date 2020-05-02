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
<html data-wf-page="5eaac59efbbd830b4ac686be" data-wf-site="5eaa311216b9f050fa20406b">
<head>
  <meta charset="utf-8">
  <title>Status</title>
  <meta content="Status" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/try-6b7020-b8b88554ecad43-10045637b9369.webflow.css" rel="stylesheet" type="text/css">
    <!-- Style -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/fresh-bootstrap-table.css" rel="stylesheet" />

  <!-- Fonts and icons -->
  <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">

  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Open Sans Condensed:300,300italic,700:greek-ext,vietnamese,latin-ext,cyrillic-ext,greek,latin,cyrillic"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">

</head>
<body>
  <div class="content-wrapper">
    <div class="div-block-23">
      <div data-duration-in="300" data-duration-out="100" class="tabs w-tabs">
        <div class="tabs-menu w-tab-menu">
          <a data-w-tab="Tab 1" class="tablink w-inline-block w-tab-link w--current">
          <?php 
            $date_today = date("Y/m/d");
            $movie1 = mysqli_query($conn, "SELECT Title,Date1,Date2,Date3 FROM movies WHERE Movie_ID = 1");
            $movies1 = mysqli_fetch_assoc($movie1);
          ?>
            <div class="text-block-5"><?php echo $movies1['Title']; ?></div>
          </a>
          <a data-w-tab="Tab 2" class="tablink w-inline-block w-tab-link">
          <?php 
            $movie2 = mysqli_query($conn, "SELECT Title,Date1,Date2,Date3 FROM movies WHERE Movie_ID = 2");
            $movies2 = mysqli_fetch_assoc($movie2);
          ?>
            <div class="text-block-5"><?php echo $movies2['Title']; ?></div>
          </a>
          <a data-w-tab="Tab 3" class="tablink w-inline-block w-tab-link">
          <?php 
            $movie3 = mysqli_query($conn, "SELECT Title,Date1,Date2,Date3 FROM movies WHERE Movie_ID = 3");
            $movies3 = mysqli_fetch_assoc($movie3);
          ?>
            <div class="text-block-7"><?php echo $movies3['Title']; ?></div>
          </a>
        </div>
        <div class="tabs-content w-tab-content">
          <div data-w-tab="Tab 1" class="tab-pane-tab-1 w-tab-pane w--tab-active">
            <div class="div-block-35">
              <div class="div-table-movie1">
                <h1 class="heading-23"><?php echo $movies1['Title']; ?> Bookings</h1>
                <div class="div-block-39">
                <div class="fresh-table toolbar-color-azure">
  <!--
    Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange
    Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange
  -->

  <table id="fresh-table1" class="table">
    <thead>
      <th data-field="ticket">Ticket no.</th>
      <th data-field="title">Movie</th>
      <th data-field="name">Name</th>
      <th data-field="seat">Seat</th>
      <th data-field="date">Date</th>
  
    </thead>
    
    <tbody>
    <?php 
      $movie1table = mysqli_query($conn, "SELECT title,ticket_number,name,seat,date FROM bookings WHERE title = ".'"'.$movies1['Title'].'"');
      while($rows=mysqli_fetch_assoc($movie1table))
      {
    ?>
      <tr>
        <td><?php echo $rows['ticket_number']; ?></td>
        <td><?php echo $rows['title']; ?></td>
        <td><?php echo $rows['name']; ?></td>
        <td><?php echo $rows['seat']; ?></td>
        <td><?php echo $rows['date']; ?></td>
      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>

                </div>
              </div>
              <div class="div-block-37">
                <h1 class="heading-22">Bookings Status</h1>
                <?php 
                  $movie1date1 = mysqli_query($conn, "SELECT COUNT(date) as total FROM bookings WHERE date = ".'"'.$movies1['Date1'].'"');
                  $m1d1 = mysqli_fetch_assoc($movie1date1);
                ?>
                <div class="div _1"><img src="images/new_ticket_52px_1new_ticket_52px.png" alt="">
                  <h2 class="movies"><?php echo $movies1['Date1']; ?></h2>
                  <h1 class="totalmovie"><?php echo $m1d1['total']; ?> Bookings</h1>
                </div>
                <?php 
                  $movie1date2 = mysqli_query($conn, "SELECT COUNT(date) as total FROM bookings WHERE date = ".'"'.$movies1['Date2'].'"');
                  $m1d2 = mysqli_fetch_assoc($movie1date2);
                ?>
                <div class="div _2"><img src="images/new_ticket_52px_1new_ticket_52px.png" width="55" alt="">
                  <h2 class="heading-11 bookings"><?php echo $movies1['Date2']; ?></h2>
                  <h1 class="heading-13"><?php echo $m1d2['total']; ?> Bookings</h1>
                </div>
                <?php 
                  $movie1date3 = mysqli_query($conn, "SELECT COUNT(date) as total FROM bookings WHERE date = ".'"'.$movies1['Date3'].'"');
                  $m1d3 = mysqli_fetch_assoc($movie1date3);
                ?>
                <div class="div _4 div-block-38"><img src="images/new_ticket_52px_1new_ticket_52px.png" width="60" alt="">
                  <h2 class="heading-11 users"><?php echo $movies1['Date3']; ?></h2>
                  <h1 class="heading-13 users"><?php echo $m1d3['total']; ?> Bookings</h1>
                </div>
              </div>
            </div>
          </div>
          <div data-w-tab="Tab 2" class="tab-pane-tab-1 w-tab-pane">
            <div class="div-block-35">
              <div class="div-table-movie1">
                <h1 class="heading-23"><?php echo $movies2['Title']; ?> Bookings</h1>
                <div class="div-block-39">
                <div class="fresh-table toolbar-color-azure">
  <!--
    Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange
    Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange
  -->

  <table id="fresh-table" class="table">
    <thead>
      <th data-field="ticket">Ticket no.</th>
      <th data-field="title">Movie</th>
      <th data-field="name">Name</th>
      <th data-field="seat">Seat</th>
      <th data-field="date">Date</th>
  
    </thead>
    
    <tbody>
    <?php 
      $movie1table = mysqli_query($conn, "SELECT title,ticket_number,name,seat,date FROM bookings WHERE title = ".'"'.$movies2['Title'].'"');
      while($rows=mysqli_fetch_assoc($movie1table))
      {
    ?>
      <tr>
        <td><?php echo $rows['ticket_number']; ?></td>
        <td><?php echo $rows['title']; ?></td>
        <td><?php echo $rows['name']; ?></td>
        <td><?php echo $rows['seat']; ?></td>
        <td><?php echo $rows['date']; ?></td>
      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>

                </div>
              </div>
              <div class="div-block-37">
                <h1 class="heading-22">Bookings Status</h1>
                <?php 
                  $movie2date1 = mysqli_query($conn, "SELECT COUNT(date) as total FROM bookings WHERE date = ".'"'.$movies2['Date1'].'"');
                  $m2d1 = mysqli_fetch_assoc($movie2date1);
                ?>
                <div class="div _1"><img src="images/new_ticket_52px_1new_ticket_52px.png" alt="">
                  <h2 class="movies"><?php echo $movies2['Date1']; ?></h2>
                  <h1 class="totalmovie"><?php echo $m2d1['total']; ?> Bookings</h1>
                </div>
                <?php 
                  $movie2date2 = mysqli_query($conn, "SELECT COUNT(date) as total FROM bookings WHERE date = ".'"'.$movies2['Date2'].'"');
                  $m2d2 = mysqli_fetch_assoc($movie2date2);
                ?>
                <div class="div _2"><img src="images/new_ticket_52px_1new_ticket_52px.png" width="55" alt="">
                  <h2 class="heading-11 bookings"><?php echo $movies2['Date2']; ?></h2>
                  <h1 class="heading-13"><?php echo $m2d2['total']; ?> Bookings</h1>
                </div>
                <?php 
                  $movie2date3 = mysqli_query($conn, "SELECT COUNT(date) as total FROM bookings WHERE date = ".'"'.$movies2['Date3'].'"');
                  $m2d3 = mysqli_fetch_assoc($movie2date3);
                ?>
                <div class="div _4 div-block-38"><img src="images/new_ticket_52px_1new_ticket_52px.png" width="60" alt="">
                  <h2 class="heading-11 users"><?php echo $movies2['Date3']; ?></h2>
                  <h1 class="heading-13 users"><?php echo $m2d3['total']; ?> Bookings</h1>
                </div>
              </div>
            </div>
          </div>
          <div data-w-tab="Tab 3" class="tab-pane-tab-3 w-tab-pane">
            <div class="div-block-35">
              <div class="div-table-movie1">
                <h1 class="heading-23"><?php echo $movies3['Title']; ?> Bookings</h1>
                <div class="div-block-39">
                <div class="fresh-table toolbar-color-azure">
  <!--
    Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange
    Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange
  -->

  <table id="fresh-table" class="table">
    <thead>
      <th data-field="ticket">Ticket no.</th>
      <th data-field="title">Movie</th>
      <th data-field="name">Name</th>
      <th data-field="seat">Seat</th>
      <th data-field="date">Date</th>
  
    </thead>
    
    <tbody>
    <?php 
      $movie1table = mysqli_query($conn, "SELECT title,ticket_number,name,seat,date FROM bookings WHERE title = ".'"'.$movies3['Title'].'"');
      while($rows=mysqli_fetch_assoc($movie1table))
      {
    ?>
      <tr>
        <td><?php echo $rows['ticket_number']; ?></td>
        <td><?php echo $rows['title']; ?></td>
        <td><?php echo $rows['name']; ?></td>
        <td><?php echo $rows['seat']; ?></td>
        <td><?php echo $rows['date']; ?></td>
      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>


                </div>
              </div>
              <div class="div-block-37">
              <h1 class="heading-22">Bookings Status</h1>
                <?php 
                  $movie3date1 = mysqli_query($conn, "SELECT COUNT(date) as total FROM bookings WHERE date = ".'"'.$movies3['Date1'].'"');
                  $m3d1 = mysqli_fetch_assoc($movie3date1);
                ?>
                <div class="div _1"><img src="images/new_ticket_52px_1new_ticket_52px.png" alt="">
                  <h2 class="movies"><?php echo $movies3['Date1']; ?></h2>
                  <h1 class="totalmovie"><?php echo $m3d1['total']; ?> Bookings</h1>
                </div>
                <?php 
                  $movie3date2 = mysqli_query($conn, "SELECT COUNT(date) as total FROM bookings WHERE date = ".'"'.$movies3['Date2'].'"');
                  $m3d2 = mysqli_fetch_assoc($movie3date2);
                ?>
                <div class="div _2"><img src="images/new_ticket_52px_1new_ticket_52px.png" width="55" alt="">
                  <h2 class="heading-11 bookings"><?php echo $movies3['Date2']; ?></h2>
                  <h1 class="heading-13"><?php echo $m3d2['total']; ?> Bookings</h1>
                </div>
                <?php 
                  $movie3date3 = mysqli_query($conn, "SELECT COUNT(date) as total FROM bookings WHERE date = ".'"'.$movies3['Date3'].'"');
                  $m3d3 = mysqli_fetch_assoc($movie3date3);
                ?>
                <div class="div _4 div-block-38"><img src="images/new_ticket_52px_1new_ticket_52px.png" width="60" alt="">
                  <h2 class="heading-11 users"><?php echo $movies3['Date3']; ?></h2>
                  <h1 class="heading-13 users"><?php echo $m3d3['total']; ?> Bookings</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="div-nav">
    <div class="div-logo">
      <h1 class="heading-7">CINEMAX</h1>
      <h1 class="heading-8">ADMIN</h1>
    </div>
    <div class="nav-div">
      <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
        <div class="container w-container">
          <nav role="navigation" class="nav-menu w-nav-menu">
            <a href="dashboard.php" class="nav-link dashboard w-nav-link" style="max-width: 1500px;">Dashboard</a>
            <a href="status.php" aria-current="page" class="nav-link status w-nav-link w--current">Status</a>
            <a href="movies.php" class="nav-link movies w-nav-link">Movies</a>
            <a href="bookings.php" class="nav-link booking w-nav-link">Booking</a>
          </nav>
          <div class="w-nav-button">
            <div class="w-icon-nav-menu"></div>
          </div><a href="#" class="nav-link logout w-nav-link">Log out</a></div>
      </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js?site=5eaa311216b9f050fa20406b" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
    <!-- Javascript -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/bootstrap-table/dist/bootstrap-table.min.js"></script>

<script type="text/javascript">
  var $table = $('.table')
  var $alertBtn = $('#alertBtn')

  window.operateEvents = {
    'click .like': function (e, value, row, index) {
      alert('You click like icon, row: ' + JSON.stringify(row))
      console.log(value, row, index)
    },
    'click .edit': function (e, value, row, index) {
      alert('You click edit icon, row: ' + JSON.stringify(row))
      console.log(value, row, index)
    },
    'click .remove': function (e, value, row, index) {
      $table.bootstrapTable('remove', {
        field: 'id',
        values: [row.id]
      })
    }
  }

  function operateFormatter(value, row, index) {
    return [
      '<a rel="tooltip" title="Like" class="table-action like" href="javascript:void(0)" title="Like">',
        '<i class="fa fa-heart"></i>',
      '</a>',
      '<a rel="tooltip" title="Edit" class="table-action edit" href="javascript:void(0)" title="Edit">',
        '<i class="fa fa-edit"></i>',
      '</a>',
      '<a rel="tooltip" title="Remove" class="table-action remove" href="javascript:void(0)" title="Remove">',
        '<i class="fa fa-remove"></i>',
      '</a>'
    ].join('')
  }

  $(function () {
    $table.bootstrapTable({
      classes: 'table table-hover table-striped',
      toolbar: '.toolbar',

      search: true,
      showRefresh: true,
      showToggle: true,
      showColumns: true,
      pagination: true,
      striped: true,
      sortable: true,
      pageSize: 6,
      pageList: [6, 10, 25, 50, 100],

      formatShowingRows: function (pageFrom, pageTo, totalRows) {
        return ''
      },
      formatRecordsPerPage: function (pageNumber) {
        return pageNumber + ' rows visible'
      }
    })

    $alertBtn.click(function () {
      alert('You pressed on Alert')
    })
  })

</script>
</body>
</html>