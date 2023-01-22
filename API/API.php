<?php


namespace API;


class API{

    protected static $api,$result;

    public static function configAPI($keyUrl)
    { 
        
        self::$api = file_get_contents($keyUrl);
        return self::$api;
    }

    public static function getData()
    {
        self::$result = json_decode(self::$api,true);
        return self::$result;
    }




}

