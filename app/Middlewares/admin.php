<?php

namespace App\Middlewares;

class admin
{
    public function handle()
    {
        if (1 !== 1) {
            die('test');
        }
    }
}