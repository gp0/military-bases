<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Military Bases</title>

    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

  <link rel="stylesheet" type="text/css" href="css/map.css">

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/parsley.js/2.0.2/parsley.min.js"></script>
  <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
  
<script type="text/javascript" src="js/lib/timemap/lib/mxn/mxn.js?(googlev3)"></script>
<script type="text/javascript" src="js/lib/timemap/lib/timeline-2.3.0.js"></script>
<script src="js/lib/timemap/src/timemap.js"></script>
<script src="js/lib/timemap/src/loaders/json.js" type="text/javascript"></script>
<script src="js/map.js"></script>
<script src="js/menu.js"></script>

<script src="js/contribute.js"></script>
  </head>

  <body>
  
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img id="logo" src="images/logo.png"></a>
        </div>
       <? require_once('templates/menu.tpl'); ?>
      </div>
    </div>
 

    	<? require_once("inc/".$content.".inc.php"); ?>
  </body>
</html>
