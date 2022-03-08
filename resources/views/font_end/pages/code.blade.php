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
              <h4 class="login-title text-center">Code </h4>
              <form method="POST" action="{{ url('code/post') }}">
                @csrf
        
                @if (session('msg'))
               <ul>
                   <li class="bg bg-success"> {{ session('msg')}}  </li>
               </ul>
                @endif

                <input
                  type="text"
                  class="form-control @error('code') is-invalid @enderror"
                  placeholder="Submit Your Code"
                  required
                  name="code"
                  data-error="Please enter your name"
                />
                @error('code')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                 @enderror
                <button type="submit"  class="slide-btn login-btn">
                  Submit
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

