@extends('font_end.master')
@section('title')
User Deposit
@endsection
      
@section('main-contain')
      <!-- Start Breadcrumb Area -->
      <div class="page-area bread-pd">
        <div class="breadcumb-overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="breadcrumb-title">
                <h2>User Deposit</h2>
                <div class="bread-come">
                  <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb purple lighten-4">
                      <li class="breadcrumb-items">
                        <a class="black-text" href="#">Home</a
                        ><i class="ti-angle-right" aria-hidden="true"></i>
                      </li>
                      <li class="breadcrumb-items">
                        <a class="black-text" href="#">User Deposit </a>
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
                  <div
                    class="dashboard-header-right d-flex flex-wrap align-items-center"
                  >
                    <div class="single-left-icon">
                      <div class="search-inner">
                        <form action="#">
                          <div class="search-option">
                            <input type="text" placeholder="Search..." />
                            <button class="button" type="submit">
                              <i class="fa fa-search"></i>
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="single-right-icon">
                      <ul class="dashboard-right-menus">
                        <li>
                          <a href="#0">
                            <i class="ti-bell"></i>
                            <span class="number-1">4</span>
                          </a>
                          <div class="notification-area">
                            <div
                              class="notifacation-header d-flex flex-wrap justify-content-between"
                            >
                              <span>4 New Notifications</span>
                              <a href="#0">Clear</a>
                            </div>
                            <ul class="notification-body">
                              <li>
                                <a href="#0">
                                  <div class="noti-line">
                                    deposite money from Don
                                  </div>
                                  <span class="info-n">2 Sec ago</span>
                                </a>
                              </li>
                              <li>
                                <a href="#0">
                                  <div class="noti-line">
                                    deposite money from Don
                                  </div>
                                  <span class="info-n">2 Sec ago</span>
                                </a>
                              </li>
                              <li>
                                <a href="#0">
                                  <div class="noti-line">
                                    deposite money from Don
                                  </div>
                                  <span class="info-n">2 Sec ago</span>
                                </a>
                              </li>
                            </ul>
                            <div class="notifacation-footer text-center">
                              <a href="#0" class="view-all">View All</a>
                            </div>
                          </div>
                        </li>
                        <li>
                          <a href="#0" class="author">
                            <i class="ti-user"></i>
                          </a>
                          <div class="notification-area">
                            <div class="author-body">
                              <ul>
                                <li>
                                  <a href="#0"
                                    ><i class="ti-user"></i>Profile</a
                                  >
                                </li>
                                <li>
                                  <a href="#0"
                                    ><i class="ti-settings"></i>Settings</a
                                  >
                                </li>
                                <li>
                                  <a href="#0"
                                    ><i class="ti-shift-right"></i>Log Out</a
                                  >
                                </li>
                              </ul>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row dashboard-content">
                <div class="col-xl-4 col-lg-4 col-md-6">
                  <div class="single-dash-head">
                    <div class="dashboard-amount">
                      <div class="amount-content">
                        <span class="pro-name">Deposite</span>
                        <span class="pro-money">$500</span>
                      </div>
                      <div class="invest-tumb">
                        <i class="flaticon-035-savings"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                  <div class="single-dash-head">
                    <div class="dashboard-amount">
                      <div class="amount-content">
                        <span class="pro-name">Withdraw</span>
                        <span class="pro-money">$500</span>
                      </div>
                      <div class="invest-tumb">
                        <i class="flaticon-041-umbrella"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                  <div class="single-dash-head">
                    <div class="dashboard-amount">
                      <div class="amount-content">
                        <span class="pro-name">Invest</span>
                        <span class="pro-money">$500</span>
                      </div>
                      <div class="invest-tumb">
                        <i class="flaticon-004-bar-chart"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                  <div class="single-dash-head">
                    <div class="dashboard-amount">
                      <div class="amount-content">
                        <span class="pro-name">Wallet</span>
                        <span class="pro-money">$1200</span>
                      </div>
                      <div class="invest-tumb">
                        <i class="flaticon-042-wallet"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                  <div class="single-dash-head">
                    <div class="dashboard-amount">
                      <div class="amount-content">
                        <span class="pro-name">Referral</span>
                        <span class="pro-money">$500</span>
                      </div>
                      <div class="invest-tumb">
                        <i class="flaticon-010-cloud"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                  <div class="single-dash-head">
                    <div class="dashboard-amount">
                      <div class="amount-content">
                        <span class="pro-name">Profite</span>
                        <span class="pro-money">$500</span>
                      </div>
                      <div class="invest-tumb">
                        <i class="flaticon-027-money-bag"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                  <div class="send-money-form transection-log">
                    <div class="form-text">
                      <h4 class="form-top">Last Deposit</h4>
                      <div class="form-inner table-inner">
                        <table>
                          <tr>
                            <th>Date</th>
                            <th>Transaction ID</th>
                            <th>Amount</th>
                            <th>Details</th>
                          </tr>
                          <tr>
                            <td>10/03/2021</td>
                            <td>XE2GB4DF5X</td>
                            <td>$600</td>
                            <td>Payment recieve from Don</td>
                          </tr>
                          <tr>
                            <td>10/03/2021</td>
                            <td>XE2GB4DF5X</td>
                            <td>$600</td>
                            <td>Payment recieve from Don</td>
                          </tr>
                          <tr>
                            <td>10/03/2021</td>
                            <td>XE2GB4DF5X</td>
                            <td>$600</td>
                            <td>Payment recieve from Don</td>
                          </tr>
                          <tr>
                            <td>10/03/2021</td>
                            <td>XE2GB4DF5X</td>
                            <td>$600</td>
                            <td>Payment recieve from Don</td>
                          </tr>
                          <tr>
                            <td>10/03/2021</td>
                            <td>XE2GB4DF5X</td>
                            <td>$600</td>
                            <td>Payment recieve from Don</td>
                          </tr>
                          <tr>
                            <td>10/03/2021</td>
                            <td>XE2GB4DF5X</td>
                            <td>$600</td>
                            <td>Payment recieve from Don</td>
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