<?php
spl_autoload_register('LoadClass');

function LoadClass($className)
{
  $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if(strpos($url, 'includes') !== false)
    {
      $path = "../classes/";
    }
    else
    {
      $path = 'classes/';
    }
  $extension = ".class.php";
  require_once $path . $className . $extension;
}

?>


<!-- IN CASE OF CHANGING, NOW WORKING, GET BACK TO this

spl_autoload_register('LoadClass');

function LoadClass($className)
{
  $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if(strpos($url, 'includes') !== false)
    {
      $path = "../classes/";
    }
    else
    {
      $path = 'classes/';
    }
  $extension = ".class.php";
  require_once $path . $className . $extension;
} -->
