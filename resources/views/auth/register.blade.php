@extends('layouts.app')

@section('content')
<div class="register-page">
    <div class="register-box">
        <div class="register-logo">
          <a href="{{ url('/home') }}"><b>@lang('sentence.TicketEasy')</b></a>
        </div>
      
        <div class="card">
          <div class="card-body register-card-body">
            <p class="login-box-msg">@lang('sentence.Register a new membership')</p>
      
            <form method="POST" action="{{ route('register') }}">
                @csrf
              <div class="input-group mb-3">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" 
                       name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="@lang('sentence.Full Name')">               
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="input-group mb-3">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                       name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="@lang('sentence.Email')">
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
                       name="password" required autocomplete="new-password" placeholder="@lang('sentence.Password')">
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
              <div class="input-group mb-3">
                <input id="password-confirm" type="password" class="form-control" 
                       name="password_confirmation" required autocomplete="new-password" placeholder="@lang('sentence.Retype password')">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-9">
                  <div class="icheck-primary">
                    <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
                    <label for="agreeTerms">
                        @lang('sentence.I agree to the') <a href="#">@lang('sentence.Terms')</a>
                    </label>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-3">
                  <button type="submit" class="btn btn-primary btn-block btn-sm">@lang('sentence.Register')</button>
                </div>
                <!-- /.col -->
              </div>
            </form>
      
            <div class="social-auth-links text-center">
              <p class="or">@lang('sentence.- OR -')</p>
              <a href="#" class="btn btn-block btn-primary">
                <i class="fab fa-facebook mr-2"></i>
                @lang('sentence.Sign up using Facebook')
              </a>
              <a href="#" class="btn btn-block btn-danger">
                <i class="fab fa-google-plus mr-2"></i>
                @lang('sentence.Sign up using Google+')
              </a>
            </div>
      
            <a href="{{ route('login') }}" class="text-center">@lang('sentence.I already have a membership')</a>
          </div>
          <!-- /.form-box -->
        </div><!-- /.card -->
      </div>
</div>
@endsection
