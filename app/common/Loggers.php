<?php
/**
 * Created by PhpStorm.
 * User: xm001
 * Date: 2016/7/15
 * Time: 18:46
 */
namespace project\common;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

trait Loggers
{
    private $_logger;

    private function getLogger()
    {
        if(!$this->_logger){
            $this->_logger = new Logger(self::class);
        }
        return $this->_logger;
    }

    public function info($msg)
    {
        $this->getLogger()->pushHandler(new StreamHandler("../log/".date('Y-m-d').".log", Logger::INFO))->info($msg);
    }
    public function error($msg)
    {
        $this->getLogger()->pushHandler(new StreamHandler("../log/".date('Y-m-d').".log", Logger::ERROR))->error($msg);
    }

    public function warning($msg)
    {
        $this->getLogger()->pushHandler(new StreamHandler("../log/".date('Y-m-d').".log", Logger::WARNING))->warning($msg);
    }


}