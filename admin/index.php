<?php
include_once("includes/login.php");
?>
<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Fri May 01 2020 01:32:25 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5eaa311216b9f038b7204069" data-wf-site="5eaa311216b9f050fa20406b">
<head>
  <meta charset="utf-8">
  <title>Cinemax Admin</title>
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
  <div class="login-section">
    <div class="div-block-3">
      <h1 class="heading">CINEMAX ADMIN</h1>
      <div class="text-block">Log in to Operate</div>
      <div class="w-form">
        <form action="includes/login.php" method="post" id="wf-form-Login-Form" name="wf-form-Login-Form" data-name="Login Form" class="form">
          <input type="text" class="login username w-input" maxlength="256" name="Username" placeholder="UserName" id="Username" required="">
          <input type="password" class="login password w-input" maxlength="256" name="Password" placeholder="Password" id="Password" required="">
          <?php
            if (strpos($_SERVER['REQUEST_URI'], "Status") == false){
            }else{ 
          ?>
          <style>
            .heading-19 {
              display: block;
              margin-top: 0px;
              margin-bottom: 0px;
              background-color: transparent;
              font-family: 'Open Sans Condensed', sans-serif;
              color: #dd777f;
              font-size: 15px;
              line-height: 20px;
              text-align: center;
            }
          </style>
          <?php
            }
          ?>
          <h1 id="wrong" class="heading-19">Something went wrong.<br>Please try again!!</h1>
          <input name="submit" type="submit" value="Login Now" data-wait="Please wait..." class="submit-button w-button">
        </form>
        
      </div>
    </div>
    <div class="div-block-4"></div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js?site=5eaa311216b9f050fa20406b" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>