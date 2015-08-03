<?php
if(YII_ENV == 'dev'){
  return [
      'bootstrap' => ['gii'],
      'modules' => [
          'gii' => 'yii\gii\Module',
      ],
  ];
};
return [];
