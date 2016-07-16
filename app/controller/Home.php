<?php
/**
 * Created by PhpStorm.
 * User: xm001
 * Date: 2016/7/15
 * Time: 15:14
 */
namespace project\controller;

use project\common\View;

class Home extends Base
{
    public function test()
    {
        $view = new View();
        $view->data = [];
        $view->render('home.phtml');
    }


}