<?php

namespace Logic;

class Request{
    
    public static function requestGET()
    {
        if($_SERVER["REQUEST_METHOD"] == 'GET')
        {
            return $_REQUEST;
        }
        return;
    }

}