@extends('font_end.master')
@section('title')
Welcome
@endsection

@section('main-contain')

      <!-- Start Breadcrumb Area -->
      <div class="page-area bread-pd">
        <div class="breadcumb-overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="breadcrumb-title">
                <h2>User Withdraw</h2>
                <div class="bread-come">
                  <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb purple lighten-4">
                      <li class="breadcrumb-items">
                        <a class="black-text" href="#">Home</a
                        ><i class="ti-angle-right" aria-hidden="true"></i>
                      </li>
                      <li class="breadcrumb-items">
                        <a class="black-text" href="#">User Withdraw </a>
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Breadcrumb Area -->
  
      
      <div class="dsahboard-area bg-color area-padding">
        <div class="container">
          <div class="row">
            @include('user.dashboard.page_link.sidebar')
            <div class="col-xl-9 col-lg-9 col-md-8">
              @include('user.dashboard.page_link.user_details')
              
              
            </div>
          </div>
        </div>
      </div>
      @endsection