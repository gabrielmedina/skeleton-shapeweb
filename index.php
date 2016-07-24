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
  <?php include '_header.php' ?>

  <div class="main">
    <?php include (!empty($url) && file_exists($url.'.php') && is_file($url.'.php')) ? $url.'.php' : 'home.php'; ?>
  </div>

  <?php include '_footer.php' ?>

  <script src="public/js/application.js"></script>
  <script src="//localhost:1337/livereload.js"></script>
</body>
</html>
