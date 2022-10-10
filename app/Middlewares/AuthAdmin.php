<?php

namespace App\Middlewares;

use Phplite\Cookie\Cookie;
use Phplite\Session\Session;

class AuthAdmin
{
    public function handle()
    {
        $auth = Session::get('admins') ? : Cookie::get('admin');
        if (!$auth){
                return redirect( url('admin-panel/') );
        }

        $admin = \App\Models\Admin::where('id' , '=' , $auth)->first();
        if (!$admin){
            return redirect( url('admin-panel/') );

        }
    }
}