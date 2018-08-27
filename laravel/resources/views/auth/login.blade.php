@extends('layouts.login')

@section('content')
<div class="login-content">
    <!-- Login -->
    <div class="lc-block toggled" id="l-login">
        <div class="lcb-form">
            <form method="POST" action="{{ route('authen_post') }}">
                {{ csrf_field() }}
                <div class="input-group m-b-20">
                    <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                    <div class="fg-line">
                        <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                    </div>
                </div>

                <div class="input-group m-b-20">
                    <span class="input-group-addon"><i class="zmdi zmdi-male"></i></span>
                    <div class="fg-line">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                </div>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="">
                        <i class="input-helper"></i>
                        Keep me signed in
                    </label>
                </div>

                <button type="submit" class="btn btn-login btn-success btn-float"><i class="zmdi zmdi-arrow-forward"></i></button>
            </form>
        </div>
    </div>
</div>
@endsection
