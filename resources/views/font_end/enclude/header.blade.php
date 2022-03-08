
   <div class="topbar-area">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="topbar-left">
            <ul>
              <li>
                <a href="#"
                  ><i class="fa fa-envelope"></i>
                  info@freedomcurrency.com</a
                >
              </li>
              <li>
                <a href="#"><i class="fa fa-clock-o"></i> Live support</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="topbar-right">
            <ul>
              <li>
                <a href="{{ url('login') }}"
                  >Login</a
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End top bar -->
  <!-- Start Header Menu -->
  <div id="sticker" class="header-menu-area header-area">
    <div class="container">
      <div class="row">
        <div class="col-xl-2 col-lg-2 col-md-3 d-flex align-items-center">
          <div class="logo">
            <a href="{{url('/')}}"><img src="{{ asset('fontend/img/logo/logo2.png') }}" alt=""/></a>r\
          </div>
        </div>
        <div class="col-xl-10 col-lg-10 col-md-9" style="padding-top: 3%">
          <div class="header-right">
            <a href="{{ url('register') }}" class="hd-btn">Signup</a>
          </div>
          <div class="header_menu f-right">
            <nav id="mobile-menu">
              <ul class="main-menu">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="menu-item-has-children">
                  <a href="#">About us</a>
                  <ul class="submenu">
                    <li><a href="{{ url('/about') }}">About us</a></li>
                    <li><a href="{{ url('/review')}}">Reviews</a></li>
                    <li><a href="{{ url('/terms') }}">Terms & Conditions</a></li>
                  </ul>
                </li>
                <li><a href="{{ url('/work')}}">My Work</a></li>
                <li><a href="{{ url('/invest') }}">Investment</a></li>
                <li><a href="{{ url('/faq')}}">FAQ</a></li>
                <li>
                  <a href="#">Blog</a>
                  <ul class="submenu">
                    <li><a href="{{ url('/blog')}}">Blog Grid</a></li>
                    <li><a href="{{ url('/blog-details')}}">Blog Details</a></li>
                  </ul>
                </li>
                <li class="contact"><a href="{{url('/contact') }}">Contacts</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="col-12">
          <div class="mobile-menu"></div>
        </div>
      </div>
    </div>
  </div>
