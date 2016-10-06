<?php
  require_once 'functions/functions.php';

  $site        = 'boilerplate/';
  $titulo      = 'Boilerplate';
  $description = '';
  $keywords    = '';
?>

<!doctype html>
<html lang="pt-BR">
<head>
  <base href="/">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo $titulo; ?></title>

  <meta name="description" content="">

  <link rel="icon" href="public/img/icon.png">

  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="public/css/application.css">

  <script src="public/js/modernizr.js"></script>
</head>

<body>
  <?php include('pages/_header.php') ?>

  <div class="main">
    <?php include_page(); ?>
  </div>

  <?php include('pages/_footer.php') ?>

  <script src="public/js/application.js"></script>
  <script src="//localhost:1337/livereload.js"></script>
</body>
</html>
