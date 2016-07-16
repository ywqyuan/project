<?php
/**
 * Created by PhpStorm.
 * User: xm001
 * Date: 2016/7/15
 * Time: 14:43
 */
namespace project;

use project\common\Loggers;
use project\controller\Home;

class app
{

    public function routeTable()
    {
        //var_dump(explode('/',$_SERVER['REQUEST_URI']));

        $home = new Home();
        $home->test();

    }

    public function __construct()
    {
        \ActiveRecord\Config::initialize(function ($cfg) {
            $cfg->set_connections($this->getConfig());
            $cfg->set_default_connection('default');
            \ActiveRecord\Connection::$datetime_format = 'Y-m-d H:i:s';
        });
    }

    public function getConfig(){
        return [
            'default' => 'mysql://root:@localhost/wykjt?charset=utf8mb4'
        ];
    }


}