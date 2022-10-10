<?php
 namespace App\Controllers\Admin;

 use App\Models\Admin;
 use Phplite\Http\Request;
 use Phplite\Session\Session;
 use Phplite\Validation\Validate;

 class AuthController{
      /**
       * Admin login page
       *
       * @returnview
       */
        public  function index()
        {
            $title = "Admin Login";
            return view('admin.auth.login' , ['title' => $title]);
        }

        public  function submit(){
            Validate::validate([
                'user_name' => 'required|min:6|max:191' ,
                'password' => 'required|min:6|max:191' ,
                'remember' => 'in:on'
            ] ,  false);

            $admin = Admin::where('user_name' , '=' , Request::post('user_name'))->first();
            if (!$admin){
                Session::set('message' , 'the user isn\'t found');
                Session::set('old' , Request::all());
               return redirect(previous());
            }
            return "hello admin";

        }

 }