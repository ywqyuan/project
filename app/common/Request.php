<?php
/**
 * Created by PhpStorm.
 * User: xm001
 * Date: 2016/7/16
 * Time: 11:36
 */
namespace project\common;
trait Request{

    use Loggers;
    use Common;

    public function getParam($param , $default = null)
    {
        if(isset($_REQUEST[$param]))
            return $_REQUEST[($param)];
        else
            return $default;
    }

    public function getPostParam($param , $default = null)
    {
        if(isset($_POST[$param]))
            return $_REQUEST[($param)];
        else
            return $default;

    }

    public function echoJsonString($content , $default = []){
        header('Content-Type: application/json; charset=utf-8');
        if(!is_array($content)) {
            echo json_encode($default);
            $this->error(__FUNCTION__." this content param must be array");
        }else{
            echo json_encode($content);
        }
        exit;
    }

    public function getSessionValue($key , $default = null)
    {
        if(isset($_SESSION[$key])){
            return $_SESSION[$key];
        }else{
            return null;
            $this->error(__FUNCTION__." session undefined variable $key");
            exit;
        }
    }

}