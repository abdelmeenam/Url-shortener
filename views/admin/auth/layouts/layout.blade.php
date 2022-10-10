@include('admin.auth.layouts.head')

<div class="login-box">
    <div class="login-logo">
        <a href="{{ url('/') }}">Shorten</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            @yield('content')
        </div>
    </div>
</div>
<!-- /.login-box -->

@include ('admin.auth.layouts.foot')