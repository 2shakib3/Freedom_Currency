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
                  type="text"
                  class="form-control @error('phone_number') is-invalid @enderror"
                  placeholder="Your phone Number"
                  required
                  name="phone_number"
                  data-error="Please enter your phone_number"
                />
                @error('phone_number')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                 @enderror

                 <input
                  type="text"
                  class="form-control @error('code') is-invalid @enderror"
                  placeholder="Your code Number"
                  required
                  name="code"
                  data-error="Please enter your phone_number"
                />
                @error('code')
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
           
                <div class="clearfix"></div>
                <div class="clear"></div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  @include('font_end.partials.script')
</html>

