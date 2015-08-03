<?php
#date_default_timezone_set('Europe/Moscow');

require(__DIR__ . '/vendor/autoload.php');

Dotenv::makeMutable();

if(file_exists(__DIR__.'/.env')){
  Dotenv::load(__DIR__.'/', '.env');
}
if(file_exists(__DIR__.'/../.env')){
  Dotenv::load(__DIR__.'/../', '.env');
}

if(!defined('YII_ENV')){
  echo "Переменная YII_ENV не установлена";
  exit(1);
}

if(YII_ENV == 'dev'){
  define('YII_DEBUG', true);
}else{
  define('YII_DEBUG', false);
}
