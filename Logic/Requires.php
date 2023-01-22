<?php

namespace Logic;

class Requires{

    protected static $temp;

    public static function Templete($temp,$type)
    {
        self::$temp = $temp;
        if($type == 'require')
        {
            require_once 'templete/'.self::$temp.'.php';
        }else{
            include 'templete/'.self::$temp.'.php';
        }
        
    }

    public static function API()
    {
        require_once 'API/API.php';
    }
}