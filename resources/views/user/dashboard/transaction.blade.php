@extends('font_end.master')
@section('title')
User Transection
@endsection
@section('main-contain')
<!-- Start Breadcrumb Area -->
<div class="page-area bread-pd">
    <div class="breadcumb-overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="breadcrumb-title">
            <h2>Transection</h2>
            <div class="bread-come">
              <nav aria-label="breadcrumb ">
                <ol class="breadcrumb purple lighten-4">
                  <li class="breadcrumb-items">
                    <a class="black-text" href="#">Home</a
                    ><i class="ti-angle-right" aria-hidden="true"></i>
                  </li>
                  <li class="breadcrumb-items">
                    <a class="black-text" href="#">Transection</a>
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
          <div class="dashboard-top">
            <div class="userboard">
             
            </div>
          </div>
          <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
              <div class="send-money-form transection-log">
                <div class="form-text">
                  <h4 class="form-top">Transection Log</h4>
                  <div class="form-inner table-inner">
                    <table>
                      <tr>
                        <th>Date</th>
                        <th>Transaction ID</th>
                        <th>Amount</th>
                        <th>Details</th>
                        <th>Reason</th>
                      </tr>
                      <tr>
                        <td>10/03/2021</td>
                        <td>XE2GB4DF5X</td>
                        <td>$600</td>
                        <td>Payment recieve from Don</td>
                        <td>In</td>
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