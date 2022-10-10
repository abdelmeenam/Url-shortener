<?php

namespace App\Middlewares;

use Phplite\Cookie\Cookie;
use Phplite\Session\Session;

class GuestAdmin
{
    public function handle()
    {
        $auth = Session::get('admins') ? : Cookie::get('admin');
        if ($auth){
            $admin =\App\Models\Admin::where('id' ,'=' , $auth)->first();
            if($admin ){
                return redirect( url('admin-panel/dashboard') );
            }
        }
    }
}