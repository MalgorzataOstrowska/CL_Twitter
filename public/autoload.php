<?php

    function __autoload($className)
    {
        include_once __DIR__.'/../src/'.$className.'.php';
    }

