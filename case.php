<?php
session_start();

// Redirect to login page if not logged in
if (!isset($_SESSION['login_name'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
  
<!-- case21:16  -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WPocean Market is under construction</title>
    <meta name="description" content="digital products created by a WPocean community of designers, developers." />
    <meta name="generator" content="Free UnderConstructionPage plugin for WordPress">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,900">
    <link rel="stylesheet" href="../../../wp-content/plugins/under-construction-page/themes/css/bootstrap.min57a3.css?v=3.15" type="text/css">
<link rel="stylesheet" href="../../../wp-content/plugins/under-construction-page/themes/css/common57a3.css?v=3.15" type="text/css">
<link rel="stylesheet" href="../../../wp-content/plugins/under-construction-page/themes/mad_designer/style57a3.css?v=3.15" type="text/css">
<link rel="stylesheet" href="../../../wp-content/plugins/under-construction-page/themes/css/font-awesome.min57a3.css?v=3.15" type="text/css">
<link rel="shortcut icon" type="image/png" href="../../../wp-content/plugins/under-construction-page/themes/images/favicon.png" />
  </head>

  <body>
    <div id="hero-image">
      <img src="../../../wp-content/plugins/under-construction-page/themes/mad_designer/mad-designer.png" alt="Mad Designer at work" title="Mad Designer at work">
    </div>
    <div class="container">

      <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
          <h1>Sorry, we're doing some work on the site</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2 col-lg-offset-2 col-lg-8">
          <p class="content">Thank you for being patient. We are doing some work on the site and will be back shortly.</p>
        </div>
      </div>

      <div class="row" id="social">
        <div class="col-xs-12 col-md-12 col-lg-12">
          
        </div>
      </div>

    </div>
    <div id="login-button" class="loggedout"><a title="Log in to WordPress admin" href="#"><i class="fa fa-wordpress fa-2x" aria-hidden="true"></i></a></div>
  </body>

<!-- case21:20  -->
</html>