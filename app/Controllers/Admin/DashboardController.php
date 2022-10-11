<?php


namespace App\Controllers\Admin;

use App\Models\Admin;
use Phplite\Cookie\Cookie;
use Phplite\Http\Request;
use Phplite\Session\Session;
use Phplite\Validation\Validate;

class DashboardController
{

    public  function index()
    {
        return auth('admins')->user_name;
    }
}