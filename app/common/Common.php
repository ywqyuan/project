<?php
/**
 * this class is common function such as get system Config value
 *
 * Created by PhpStorm.
 * User: xm001
 * Date: 2016/7/16
 * Time: 21:15
 */
namespace project\common;
trait Common
{
    
    /**
     * the config value from dir config/config.php
     * @param $key
     * @return null
     */
    public function getConfig($key)
    {
        global $config;
        if(isset($config[$key])){
            return $config[$key];
        }else{
            $this->warning(__FUNCTION__."== this key=>value is null will return null");
            return null;
        }
    }




}