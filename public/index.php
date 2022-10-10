<?php


//Register autoloader
require __DIR__ . '/../vendor/autoload.php';



//BOOTstarp application and take action
require __DIR__ . '/../bootstrap/Application.php';

//run application - handle the request and send response
Application::run();

