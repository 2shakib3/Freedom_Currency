{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <head>

    <title>Login - Freedom Currency</title>
    @include('font_end.partials.style')
  </head>

  <body>
    <!-- preloader  -->
    <div id="preloader"></div>
    <!-- Start Slider Area -->
    <div class="login-area area-padding fix">
      <div class="login-overlay"></div>
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-xl-6 col-lg-6 col-md-8">
            <div class="login-form">
              <h4 class="login-title text-center">Login</h4>
              <form method="POST" action="{{ route('login') }}">
                @csrf

                <input
                  type="email"
                  class="form-control @error('email') is-invalid @enderror" name="email"
                  placeholder="email"
                  required
                  name="email"
                  data-error="Please enter your name"
                />
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                 @enderror

                <input
                  type="password"
                  id="msg_subject"
                  class="form-control @error('password') is-invalid @enderror" name="password"
                  placeholder="Password"
                  required
                  data-error="Please enter your message subject"
                />

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div class="check-group">
                  <div class="checkbox">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                  </div>
                  <a class="text-muted" href="#">Forgot password?</a>
                </div>
                <button type="submit" id="submit" class="slide-btn login-btn">
                  Login
                </button>
                <div id="msgSubmit" class="h3 text-center hidden"></div>
                <div class="clearfix"></div>
                <div class="clear"></div>
                <div class="separetor text-center">
                  <span>Or with Login</span>
                </div>
                <div class="sign-icon">
                  <ul>
                    <li>
                      <a class="facebook" href="#"
                        ><i class="ti-facebook"></i
                      ></a>
                    </li>
                    <li>
                      <a class="twitter" href="#"><i class="ti-twitter"></i></a>
                    </li>
                    <li>
                      <a class="instagram" href="#"
                        ><i class="ti-instagram"></i
                      ></a>
                    </li>
                    <li>
                      <a class="google" href="#"><i class="ti-google"></i></a>
                    </li>
                  </ul>
                  <div class="acc-not">
                    have an account? <a href="{{ url('register') }}">Signup</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Slider Area -->

    <!-- All JS here -->

    <!-- modernizr JS -->
    @include('font_end.partials.script')
  </body>
</html>
