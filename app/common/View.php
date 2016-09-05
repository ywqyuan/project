<?php
/**
 * Created by PhpStorm.
 * User: xm001
 * Date: 2016/7/16
 * Time: 18:42
 */
namespace project\common;
use Smarty;
class View
{
    private $templatesBaseUrl = __DIR__."/../view";//html 文件
    private $data = []; //模板数据
    private $_view;
    private $cache = false;

    public function __construct()
    {
        if(!isset($this->_view)){
            $this->_view = new Smarty();
        }
        $this->_view->caching = $this->cache;
    }

    public function render($html)
    {
        $this->_view->assign('data',$this->data);
        $this->_view->display($this->templatesBaseUrl."/$html");
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }


}