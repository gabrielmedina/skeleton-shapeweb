<?php
  $site        = 'boilerplate/';
  $titulo      = 'Boilerplate';
  $description = '';
  $keywords    = '';

  define('_BASE_',$endereco);

  $url = end(explode("/",$_SERVER['REQUEST_URI']));
?>

<!doctype html>
<html lang="pt-BR">
<head>
  <base href="<?php echo _BASE_;?>">

  <link rel="icon" href="public/img/icon.png">

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php echo $titulo; ?></title>

  <meta name="description" content="">

  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="public/css/application.css">
</head>

<body>
  <?php include '_header.php' ?>

  <div class="main">
    <?php include (!empty($url) && file_exists($url.'.php') && is_file($url.'.php')) ? $url.'.php' : 'home.php'; ?>
  </div>

  <?php include '_footer.php' ?>

  <!--build:js public/vendor/application.js-->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <!--endbuild-->

  <script src="public/js/application.js"></script>
</body>
</html>
