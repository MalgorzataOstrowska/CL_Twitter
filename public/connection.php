<?php

require_once 'autoload.php';
$config = require_once  __DIR__ . '/../conf/configuration.php'; 
// Creation of a new connection:
$connection = new Connection($config);