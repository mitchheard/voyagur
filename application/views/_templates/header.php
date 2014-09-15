<?php
require_once "/var/www/html/application/backend/voyage.inc";
require_once "/var/www/html/application/krumo/class.krumo.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Voyagur: It's not where e are, it's where u are.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Plan a trip with friends, families, loved ones, anyone.">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo URL; ?>public/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 40px;
      }

      /* Custom container 
      .container-narrow {
        margin: 0 auto;
        max-width: 700px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }

      */
      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 60px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 72px;
        line-height: 1;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }
    </style>
    <link href="<?php echo URL; ?>public/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="<?php echo URL; ?>public/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo URL; ?>public/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo URL; ?>public/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo URL; ?>public/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="<?php echo URL; ?>public/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="<?php echo URL; ?>public/ico/favicon.png">
  <!-- css -->
  <link href="<?php echo URL; ?>public/css/style.css" rel="stylesheet">
  <!-- jQuery -->
  <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
  <!-- our JavaScript -->
  <script src="<?php echo URL; ?>public/js/application.js"></script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header-container">
      <div class="header-left">
          <div class="header-logo"></div>
          <div class="header-title"><h1 class="muted">Voyagur</h1></div>
      </div>
      <div class="header-center">
        <div class="header-navi">
            <ul class="nav nav-pills pull-right">
              <li><a href="<?php echo URL; ?>">Home</a></li>
              <li><a href="<?php echo URL; ?>home/about">About</a></li>
              <li><a href-"<?php echo URL; ?>home/news">News</a></li>
              <li><a href="<?php echo URL; ?>home/contact">Contact</a></li>
            </ul>
          </div>
      </div>
      <div class="header-right">
        <div class="header-login">
          <p>Login/Logout</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="container-content">
