<?php
namespace Alexeev;

use core\LogInterface;
use core\LogAbstract;

class AlexeevLog extends LogAbstract implements LogInterface{

    public function _write()
    {
        foreach($this->log as $mass){
            echo $mass . PHP_EOL;
        }
    }

    public static function log(string $str): void
    {
        self::Instance()->log[] = $str;
    }

    public static function write(): void
    {
        self::Instance()->_write();
    }
}