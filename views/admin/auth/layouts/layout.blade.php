@include('admin.auth.layouts.head')

<div class="login-box">
    <div class="login-logo">
        <a href="{{ url('/') }}">Shorten</a>
    </div>

    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        @yield('content')
    </div>
    
</div>

@include('admin.auth.layouts.foot')