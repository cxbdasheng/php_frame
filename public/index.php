<?php


define('FRAME_BASE_PATH',__DIR__.'/../');
require FRAME_BASE_PATH.'/vendor/autoload.php';

require FRAME_BASE_PATH.'/app.php';

// App::getApp()->get('request')->getMethod();
App::getApp()->get('response')->setContent(
    'hello'
)->withHeader('token','123456')->send();

echo "<pre>";
var_dump(
    App::getApp()->get('route')->getRoutes()
);