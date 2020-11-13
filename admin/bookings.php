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
<html data-wf-page="5eaa311216b9f07154204070" data-wf-site="5eaa311216b9f050fa20406b">
<head>
  <meta charset="utf-8">
  <title>Bookings</title>
  <meta content="Bookings" property="og:title">
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
  <div class="section-3">
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
              <a href="movies.php" class="nav-link movies w-nav-link">Movies</a>
              <a href="bookings.php" aria-current="page" class="nav-link booking w-nav-link w--current">Booking</a>
            </nav>
            <div class="w-nav-button">
              <div class="w-icon-nav-menu"></div>
            </div><a href="index.php" class="nav-link logout w-nav-link">Log out</a></div>
        </div>
      </div>
    </div>
    <div class="content-wrapper">
      <div class="div-block-23">
        <div data-duration-in="300" data-duration-out="100" class="tabs w-tabs">
          <div class="tabs-menu w-tab-menu">
            <a data-w-tab="Tab 1" class="tablink w-inline-block w-tab-link w--current">
              <div class="text-block-5">Approve Bookings</div>
            </a>
            <a data-w-tab="Tab 2" class="tablink w-inline-block w-tab-link">
              <div class="text-block-5">Find Booking</div>
            </a>
          </div>
          <div class="tabs-content w-tab-content">
            <div data-w-tab="Tab 1" class="tab-pane-tab-1 w-tab-pane w--tab-active">
              <div class="div-block-25">
                <div class="table-for-find">
                  <div class="fresh-table toolbar-color-blue">
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
      <th data-field="date">Booked Date</th>
      <th data-field="time">Booked Time</th>
      <th data-field="bdate">Booking Date</th>
      <th data-field="approve">Approve Bookings</th>


    </thead>

    <tbody>
    <?php
      $movie1table = mysqli_query($conn, "SELECT * FROM bookings WHERE booking_status = '' ORDER BY id DESC;");
      while($rows=mysqli_fetch_assoc($movie1table))
      {
    ?>
      <tr>
        <td class="ticketnumbertb"><?php echo $rows['ticket_number']; ?></td>
        <td><?php echo $rows['title']; ?></td>
        <td><?php echo $rows['name']; ?></td>
        <td class="seattb"><?php echo $rows['seat']; ?></td>
        <td><?php echo $rows['date']; ?></td>
        <td><?php echo $rows['time']; ?></td>
        <td><?php echo $rows['date_book']; ?></td>
        <td>
        <button onclick="accept(this.id)"  type="button" class="btn btn-success" id="<?php echo $rows['ticket_number']; ?>">Accept</button>
        <button onclick="decline(this.id)"  type="button" class="btn btn-danger" id="<?php echo $rows['ticket_number']; ?>">Decline</button>
        </td>
      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
                </div>
              </div>
            </div>
            <div data-w-tab="Tab 2" class="tab-pane-tab-1 w-tab-pane">
              <div class="div-block-25">
                <div class="table-for-find">
                <div class="fresh-table toolbar-color-blue">
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
      <th data-field="date">Booked Date</th>
      <th data-field="time">Booked Time</th>
      <th data-field="bdate">Booking Date</th>
      <th data-field="number">Number</th>
      <th data-field="status">Status</th>


    </thead>

    <tbody>
    <?php
      $movie1table = mysqli_query($conn, "SELECT * FROM bookings  WHERE booking_status = 'Approved' OR booking_status = 'Declined' ORDER BY id DESC;");
      while($rows=mysqli_fetch_assoc($movie1table))
      {
    ?>
      <tr>
        <td class="ticketnumbertb"><?php echo $rows['ticket_number']; ?></td>
        <td class="titletb"><?php echo $rows['title']; ?></td>
        <td class="nametb"><?php echo $rows['name']; ?></td>
        <td class="seattb"><?php echo $rows['seat']; ?></td>
        <td class="datetb"><?php echo $rows['date']; ?></td>
        <td class="timetb"><?php echo $rows['time']; ?></td>
        <td class="booktb"><?php echo $rows['date_book']; ?></td>
        <td class="numbertb"><?php echo $rows['number']; ?></td>
        <td id="<?php echo $rows['booking_status']; ?>"><?php echo $rows['booking_status']; ?></td>
      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js?site=5eaa311216b9f050fa20406b" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/bootstrap-table/dist/bootstrap-table.min.js"></script>
<script>
  function accept(clicked_id){
    var accept = clicked_id;
    window.location.href='approve.php?accept=' + accept;
  }

  function decline(clicked_id){
    var decline = clicked_id;
    window.location.href='decline.php?decline=' + decline;
  }
</script>
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
      pageSize: 8,
      pageList: [8],

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