<?php
#date_default_timezone_set('Europe/Moscow');

require(__DIR__ . '/vendor/autoload.php');

if(file_exists(__DIR__.'/.env')){
  $de = new Dotenv\Dotenv(__DIR__);
  $de->overload();
}
if(file_exists(__DIR__.'/../.env')){
  $de = new Dotenv\Dotenv(__DIR__.'/../');
  $de->overload();
}
$de->required([
  'YII_ENV',
  'MYSQL_HOST', 'MYSQL_USER', 'MYSQL_PASSWORD', 'MYSQL_DATABASE',
  'COOKIE_KEY'
]);

if($_SERVER['YII_ENV'] == 'dev'){
  define('YII_ENV', 'dev');
  define('YII_DEBUG', true);
}else{
  define('YII_ENV', 'prod');
  define('YII_DEBUG', false);
}
