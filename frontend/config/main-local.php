<?php

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => $_SERVER['COOKIE_KEY'],
        ],
    ],
];

if (!YII_ENV_TEST) {
    if(YII_ENV == 'dev'){
      $config['bootstrap'][] = 'debug';
      $config['modules']['debug'] = 'yii\debug\Module';

      $config['bootstrap'][] = 'gii';
      $config['modules']['gii'] = 'yii\gii\Module';
    }
}

return $config;
