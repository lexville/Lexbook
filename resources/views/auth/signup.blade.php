@extends('layouts.default')

@section('content')
<div class="row">
<div class="col-lg-6 col-lg-offset-3">
    <h3>Create an account</h3>
    <form class="form-vertical" role="form" method="post" action="{{ route('signup') }}">
        <div class="form-group {{ $errors->has('username') ? ' has-error' : ''}}">
             <label for="username" class="control-label">Username</label>
             <input type="text" name="username" class="form-control" id="username" value="{{ Request::old('username') ? : '' }}">
             @if ($errors->has('username'))
                 <span class="help-block">{{ $errors->first('username') }}</span>
             @endif
         </div>
         <div class="form-group {{ $errors->has('email') ? ' has-error' : ''}}">
             <label for="email" class="control-label">Email address</label>
             <input type="text" name="email" class="form-control" id="email" value="{{ Request::old('email') ? : '' }}">
             @if ($errors->has('email'))
                 <span class="help-block">{{ $errors->first('email') }}</span>
             @endif
         </div>
         <div class="form-group {{ $errors->has('password') ? ' has-error' : ''}}">
             <label for="password" class="control-label">Password</label>
             <input type="password" name="password" class="form-control" id="password">
             @if ($errors->has('password'))
                 <span class="help-block">{{ $errors->first('password') }}</span>
             @endif
         </div>
         <div class="form-group {{ $errors->has('password') ? ' has-error' : ''}}">
             <label for="password-confirmation" class="control-label">Confirm Password</label>
             <input type="password" name="password-confirmation" class="form-control" id="password-confirmation">
             @if ($errors->has('password_confirmation'))
                 <span class="help-block">{{ $errors->first('password-confirmation') }}</span>
             @endif
         </div>
        <div class="form-group">
            <button type="submit" class="btn btn-raised btn-primary">Sign up</button>
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
    <h4 class="text-center">Already have an account? <a href="#">Login</a></h4>
</div>
</div>
@stop
