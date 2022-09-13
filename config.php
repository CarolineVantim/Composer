<?php

require __DIR__ . '/vendor/autoload.php';


use Carolvan\CursoSON\Hello;
use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('app.log', Level::Warning));

// add records to the log
$log->warning((new Hello)->say('Carol'));
$log->error('Bar');