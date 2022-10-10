<?php

use Phplite\bootstrap\App;


class Application
{
    public static function run()
    {
        //root path-PROJECT PATH
        define('ROOT', realpath(__DIR__ . '/..'));

        define('DS', DIRECTORY_SEPARATOR);
        App::run();
    }
}