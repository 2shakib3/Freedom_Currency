<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <head>
      @include('font_end.partials.style')
  </head>

  <body>
    <!-- preloader  -->
    <div id="preloader"></div>
    <!-- Start header -->
    <header class="header-one">
        <title>
			@yield('title')
		</title>
        @include('font_end.enclude.header')
    </header>
    <main>
        @yield('main-contain')
    </main>
    <!-- Start Footer Area -->
    <footer class="footer1">
        @include('font_end.enclude.footer')
    </footer>




    @include('font_end.partials.script')



</body>
</html>
