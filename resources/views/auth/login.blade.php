
@extends('layouts.app')

@section('content')
<!-- Login form -->
<form class="sign-in form-horizontal shadow rounded no-overflow" action="{{ url('/login') }}" method="post">
    {{ csrf_field() }}
    <div class="sign-header">
        <div class="form-group">
            <div class="sign-text">
                <span>Member Area</span>
            </div>
        </div><!-- /.form-group -->
    </div><!-- /.sign-header -->
    <div class="sign-body">

        <div class="form-group">
            <div class="input-group input-group-lg rounded no-overflow">
                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif

                @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif

            </div>
        </div>

        <div class="form-group">
            <div class="input-group input-group-lg rounded no-overflow">
                <input type="text" class="form-control input-sm" placeholder="enter email " name="email" value="{{ old('email') }}">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>

            </div>
        </div><!-- /.form-group -->
        <div class="form-group">
            <div class="input-group input-group-lg rounded no-overflow">
                <input type="password" class="form-control input-sm" placeholder="Password" name="password">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>

            </div>
        </div><!-- /.form-group -->
    </div><!-- /.sign-body -->
    <div class="sign-footer">
        <div class="form-group">
            <div class="row">
                <div class="col-xs-6">
                    <div class="ckbox ckbox-theme">
                        <input id="rememberme" type="checkbox" name="remember">
                        <label for="rememberme" class="rounded">Remember me</label>
                    </div>
                </div>
                <div class="col-xs-6 text-right">
                    <a href="{{ url('/password/reset') }}" title="lost password">Lost password?</a>
                </div>
            </div>
        </div><!-- /.form-group -->
        <div class="form-group">
            <button type="submit" class="btn btn-theme btn-lg btn-block no-margin rounded" id="login-btn">Sign In</button>
        </div><!-- /.form-group -->
    </div><!-- /.sign-footer -->
</form>





<!-- /.form-horizontal -->
<!--/ Login form -->

<!-- Content text -->
<!--<p class="text-muted text-center sign-link">Need an account? <a href="{{ url('/password/register') }}"> Sign up free</a></p>-->
<!--/ Content text -->
@endsection