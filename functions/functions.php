<?php

  function get_uri($uri){
    return end(explode("/", $uri['REQUEST_URI']));
  }

  function include_page(){
    $url = get_uri($_SERVER);
    file_exists('pages/'.$url.'.php') ? include('pages/'.$url.'.php') : include('pages/home.php');
  }
