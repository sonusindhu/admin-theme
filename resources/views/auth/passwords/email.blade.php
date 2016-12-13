@extends('layouts.app')

@section('content')
<!-- Login form -->
<form class="sign-in form-horizontal shadow rounded no-overflow" action="{{ url('/password/email') }}" method="post">
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
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif



                @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
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

    </div><!-- /.sign-body -->
    <div class="sign-footer">
        <div class="form-group">
            <div class="row">
                
                <div class="col-xs-6 text-left">
                    <a href="{{ url('/login') }}" title="Login here">Click to login</a>
                </div>
            </div>
        </div><!-- /.form-group -->
        <div class="form-group">
            <button type="submit" class="btn btn-theme btn-lg btn-block no-margin rounded" id="login-btn">Reset Password</button>
        </div><!-- /.form-group -->
    </div><!-- /.sign-footer -->
</form>

@endsection

