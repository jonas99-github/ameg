<!DOCTYPE html>
<html>
<?php require_once 'auth.php';?>
<head>
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="../logo.ico">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link href="css/bootstrap-responsive.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
  <link href="vendors/uniform.default.css" rel="stylesheet" media="screen">
  <link href="../style.css" media="screen" rel="stylesheet" type="text/css">
  <link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css">
  <style type="text/css">
    body {
      background: #ffffff;
      padding-top: 60px;
      padding-bottom: 40px;
    }
    .sidebar-nav {
      padding: 9px 0px;
    }
  </style>
  <script src="vendors/bootstrap.js"></script>
  <script src="vendors/jquery-1.7.2.min.js"></script>
  <script type="text/javascript" src="lib/jquery.js"></script>
  <script type="text/javascript" src="src/facebox.js"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : "src/loading.gif",
        closeImage   : "src/closelabel.png"
      })
    })
  </script>
</head>
</html>