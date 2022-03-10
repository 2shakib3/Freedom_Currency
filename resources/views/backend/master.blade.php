<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>@yield('title')</title>
    @include('backend.partials.style')
      @yield('style-lib')
      @stack('custom-css')
  </head>
  <body>
    <div id="ebazar-layout" class="theme-blue">
      <!-- sidebar -->
        @include('backend.enclude.sidebar')
      <!-- main body area -->
      <div class="main px-lg-4 px-md-4">
        <!-- Body: Header -->
        @include('backend.enclude.header')
        <!-- Body: Body -->
        <div class="body d-flex py-3">
          <div class="container-xxl">
                @yield('content')
          </div>
        </div>
      </div>
    </div>
    @include('backend.partials.script')
    @yield('script-lib')
    @stack('custom-js')
  </body>
</html>
