<?php
/**
 *
 * this is index.php for only one way to the web server
 *
 * Created by PhpStorm.
 * User: xm001
 * Date: 2016/7/15
 * Time: 14:35
 */
require_once '../vendor/autoload.php';
require_once  '../config/config.php';
date_default_timezone_set('Asia/Chongqing');//设置默认时区
$app = new \project\app();
$app->routeTable();