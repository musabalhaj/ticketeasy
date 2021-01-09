@extends('layouts.app')

@section('content')

<div class="login-page">
    <div class="login-box">
        <div class="login-logo">
          <a href="{{ url('/home') }}"><b>@lang('sentence.TicketEasy')</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
          <div class="card-body login-card-body">
            <p class="login-box-msg">@lang('sentence.Sign in to start your session')</p>
      
            <form method="POST" action="{{ route('login') }}">
                @csrf
              <div class="input-group mb-3">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="@lang('sentence.Email')">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="input-group mb-3">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                name="password" required autocomplete="current-password" placeholder="@lang('sentence.Password')">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="row">
                <div class="col-6">
                  <div class="icheck-primary">
                    <input type="checkbox" id="remember">
                    <label for="remember">
                      @lang('sentence.Remember Me')
                    </label>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <button type="submit" class="btn btn-primary btn-block btn-sm">@lang('sentence.Sign In')</button>
                </div>
                <!-- /.col -->
              </div>
            </form>
      
            <div class="social-auth-links text-center mb-3">
              <p class="or">@lang('sentence.- OR -')</p>
              <a href="#" class="btn btn-block btn-primary">
                <i class="fab fa-facebook mr-2"></i> @lang('sentence.Sign in using Facebook')
              </a>
              <a href="#" class="btn btn-block btn-danger">
                <i class="fab fa-google-plus mr-2"></i> @lang('sentence.Sign in using Google+')
              </a>
            </div>
            <!-- /.social-auth-links -->
            @if (Route::has('password.request'))
            <p class="mb-1">
                <a href="{{ route('password.request') }}">@lang('sentence.Forgot Your Password?')</a>
            </p>
            @endif
            <p class="mb-0">
              <a href="{{ route('register') }}" class="text-center">@lang('sentence.Register a new membership')</a>
            </p>
          </div>
          <!-- /.login-card-body -->
        </div>
      </div>
</div>

@endsection
