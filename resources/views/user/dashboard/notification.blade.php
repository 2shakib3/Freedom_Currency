@extends('font_end.master')
@section('title')
User Noticication
@endsection

@section('main-contain')
 
 <!-- Start Breadcrumb Area -->
 <div class="page-area bread-pd">
    <div class="breadcumb-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="breadcrumb-title">
            <h2>Notifecations</h2>
            <div class="bread-come">
              <nav aria-label="breadcrumb ">
                <ol class="breadcrumb purple lighten-4">
                  <li class="breadcrumb-items">
                    <a class="black-text" href="#">Home</a
                    ><i class="ti-angle-right" aria-hidden="true"></i>
                  </li>
                  <li class="breadcrumb-items">
                    <a class="black-text" href="#">Notifecations</a>
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
  <div class="notify-overlay"></div>
  <div class="dsahboard-area bg-color area-padding">
    <div class="container">
      <div class="row">
        @include('user.dashboard.page_link.sidebar')
        <div class="col-xl-9 col-lg-9 col-md-8">
         
          <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
              <div class="send-money-form transection-log">
                <div class="form-text">
                  <h4 class="form-top">Notifications</h4>
                  <div class="form-inner table-inner">
                    <table>
                      <tr>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Remove</th>
                      </tr>
                      <tr>
                        <td>Receive coin your account</td>
                        <td>Jan 04, 2021</td>
                        <td>Read</td>
                        <td><i class="ti-close"></i></td>
                      </tr>
                     
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection 