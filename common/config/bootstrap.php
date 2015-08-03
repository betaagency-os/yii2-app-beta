<?php
date_default_timezone_set('Europe/Moscow');

Dotenv::makeMutable();

if(file_exists(__DIR__.'/../../../.env')){
  Dotenv::load(__DIR__.'/../../../', '.env');
}
if(file_exists(__DIR__.'/../../.env')){
  Dotenv::load(__DIR__.'/../../', '.env');
}

foreach(glob(__DIR__.'/../lib/*.php') as $f)
  require_once($f);

Yii::setAlias('common', dirname(__DIR__));
Yii::setAlias('frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('console', dirname(dirname(__DIR__)) . '/console');
