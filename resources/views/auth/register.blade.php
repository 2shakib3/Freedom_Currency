{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
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
    @include('font_end.partials.style')

  </head>

  <body>
    <div id="preloader"></div>
    <div class="login-area area-padding fix">
      <div class="login-overlay"></div>
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-xl-6 col-lg-6 col-md-8">
            <div class="login-form signup-form">
              <h4 class="login-title text-center">REGISTER</h4>
              <form method="POST" action="{{ route('register') }}">
                @csrf
                <input
                  type="text"
                  class="form-control @error('name') is-invalid @enderror"
                  placeholder="Username"
                  required
                  name="name"
                  data-error="Please enter your name"
                />
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                 @enderror
                <input
                  type="email"
                  id="email"
                  class="form-control @error('email') is-invalid @enderror"
                  placeholder="Your Email"
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
                  class="form-control @error('password') is-invalid @enderror"
                  placeholder="Password"
                  required
                  name="password"
                  data-error="Please enter your message subject"
                />
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                 @enderror
                <div class="check-group">
                  <div class="checkbox">
                    <label
                      ><input type="checkbox" value="" />Terms &
                      Conditions</label
                    >
                  </div>
                </div>
                <button type="submit"  class="slide-btn login-btn">
                  Sign up
                </button>
                <div id="msgSubmit" class="h3 text-center hidden"></div>
                <div class="clearfix"></div>
                <div class="clear"></div>
                <div class="separetor text-center">
                  <span>Or with Signup</span>
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
                    have an account? <a href="{{ url('login') }}">Login</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  @include('font_end.partials.script')
</html>

