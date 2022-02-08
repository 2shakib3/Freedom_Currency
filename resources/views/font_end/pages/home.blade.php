@extends('font_end.master')
@section('title')
Welcome
@endsection

@section('main-contain')
      <!-- Start intro area -->
      <div class="intro-area intro-home">
        <div class="bg-wrapper">
          <img src="{{ asset('fontend/img/background/bg4.jpg') }}" alt="" />
        </div>
        <div class="intro-content">
          <div class="slider-content">
            <div class="container">
              <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                  <div class="slide-all-text">
                    <!-- layer 1 -->
                    <div class="layer-1 wow fadeInUp" data-wow-delay="0.3s">
                      <h4 class="title-1">
                        Welcome to Our platform Freedom Currency.
                      </h4>
                    </div>
                    <!-- layer 2 -->
                    <div class="layer-2 wow fadeInUp" data-wow-delay="0.3s">
                      <h1 class="title-2">
                        Let's get some basic information about our platform.
                      </h1>
                    </div>
                    <!-- layer 3 -->
                    <div class="layer-3 wow fadeInUp" data-wow-delay="0.7s">
                      <a href="services.html" class="ready-btn">Get Started</a>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                  <div
                    class="slide-images-inner wow fadeInUp"
                    data-wow-delay="0.5s"
                  >
                    <div class="slide-images">
                      <img src="{{ asset('fontend/img/slider/s1.png') }}" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End intro Area -->
      <!-- Start Counter area -->
      <div class="counter-area fix bg-color area-padding-3">
        <div class="container">
          <!-- Start counter Area -->
          <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4">
              <div class="single-fun">
                <span class="counter-icon"
                  ><i class="flaticon-034-reward"></i
                ></span>
                <div class="counter-text">
                  <h2><span class="count">22609</span>+</h2>
                  <h4>All Members</h4>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4">
              <div class="single-fun">
                <span class="counter-icon"
                  ><i class="flaticon-016-graph"></i
                ></span>
                <div class="counter-text">
                  <h2>$<span class="count">500</span>k</h2>
                  <h4>Total Deposit</h4>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4">
              <div class="single-fun">
                <span class="counter-icon"
                  ><i class="flaticon-043-world"></i
                ></span>
                <div class="counter-text">
                  <h2><span class="count">80</span>+</h2>
                  <h4>World Country</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Counter area -->
      <!-- Start About Area -->
      <div class="about-area bg-color fix area-padding-2">
        <div class="container">
          <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
              <div class="section-headline text-center">
                <h2>About Freedom Currency</h2>
                <p>
                  Assalamualaikum. Welcome to Our platform Freedom Currency. Let's get some basic information about our platform.
                </p>
              </div>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-xl-7 col-lg-7 col-md-12">
              <div class="about-video">
                <img src="{{asset('fontend/img/about/ab.jpg')}}" alt="" />
                <div class="video-content">
                  <a
                    href="https://www.youtube.com/watch?v=O33uuBh6nXA"
                    class="video-play video-zone"
                  >
                    <i class="fa fa-play"></i>
                  </a>
                </div>
              </div>
            </div>
            <!-- Start services -->
            <div class="col-xl-5 col-lg-5 col-md-12">
              <div class="support-wraper">
                <div class="support-carousel owl-carousel item-indicator">
                  <div class="single-support">
                    <div class="support-services">
                      <img
                        class="support-images"
                        src="{{ asset('fontend/img/about/ab-icon1.png') }}"
                        alt=""
                      />
                      <div class="support-content">
                        <h4>Instant Cashout</h4>
                        <p>
                          Your withdrawal will be credited to your fund within 24 to 72 hours, ensuring the security of your funds.  Thank you for staying with Freedom Carrency.
                        </p>
                      </div>
                    </div>
                    <div class="support-services">
                      <img
                        class="support-images"
                        src="{{ asset('fontend/img/about/ab-icon2.png') }}"
                        alt=""
                      />
                      <div class="support-content">
                        <h4>Refferral bonus</h4>
                        <p>
                          For the investment of your invited friend you will get:
                          1st level member 5%
                          2nd level members 3%
                          3rd level members 2%

                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="single-support">
                    <div class="support-services">
                      <img
                        class="support-images"
                        src="{{asset('fontend/img/about/ab-icon3.png')}}"
                        alt=""
                      />
                      <div class="support-content">
                        <h4>Customer Care: </h4>
                        <p>
                          If you have any questions please leave a message here. Our customer care manager will reply soon.
                        </p>
                      </div>
                    </div>
                    <div class="support-services">
                      <img
                        class="support-images"
                        src="{{ asset('fontend/img/about/ab-icon4.png') }}"
                        alt=""
                      />
                      <div class="support-content">
                        <h4>Super security</h4>
                        <p>
                          Hello Sir/ Madam, don't worry. Your account is 100% secure.The company will keep safe all your data. If someone wants to try to withdraw from your account by loggin to another phone, withdraw will be automatically canceled from our system. If it does not match your own IP system. Thank you. 
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Start services -->
          </div>
        </div>
      </div>
      <!-- End About Area -->
      <!-- Start Investment area -->
      <div class="invest-area bg-color-2 area-padding-2">
        <div class="container">
          <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
              <div class="section-headline text-center">
                <h2>Investment plan</h2>
                {{-- <p>
                  Dummy text is also used to demonstrate the appearance of
                  different typefaces and layouts
                </p> --}}
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-4">
              <div class="pri_table_list text-center">
                <div class="top-price-inner">
                  <h3>Play Package </h3>
                  <div class="rates">
                    <span class="prices">3%</span>
                  </div>
                </div>
                <ol class="pricing-text">
                  <li class="check">investment :100 TRX</li>
                  <li class="check">Daily income : 3 TRX</li>
                  <li class="check">Validity :( 90 days) </li>
                </ol>
                <div class="price-btn">
                  <a class="blue" href="#">Invest Now</a>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4">
              <div class="pri_table_list text-center">
                <div class="top-price-inner">
                  <h3>Silver Package</h3>
                  <div class="rates">
                    <span class="prices">3% </span>
                  </div>
                </div>
                <ol class="pricing-text">
                  <li class="check">Minimam Invest : 200 TRX</li>
                  <li class="check">Maximam Invest : 6 TRX</li>
                  <li class="check">Validity: (90 days)</li>
                </ol>
                <div class="price-btn">
                  <a class="blue" href="#">Invest Now</a>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4">
              <div class="pri_table_list text-center">
                <div class="top-price-inner">
                  <h3>Gold Package</h3>
                  <div class="rates">
                    <span class="prices">3%</span
                    >
                  </div>
                </div>
                <ol class="pricing-text">
                  <li class="check">investment: 600 TRX</li>
                  <li class="check">Daily income: 18 TRX
                  </li>
                  <li class="check">Validity: (90 days)
                  </li>
                </ol>
                <div class="price-btn">
                  <a class="blue" href="#">Invest Now</a>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4">
              <div class="pri_table_list text-center">
                <div class="top-price-inner">
                  <h3>Master Package</h3>
                  <div class="rates">
                    <span class="prices">3.5%</span
                    >
                  </div>
                </div>
                <ol class="pricing-text">
                  <li class="check">investment: 1000 TRX</li>
                  <li class="check">Daily income: 35 TRX</li>
                  <li class="check">Validity: ( 90 days)
                  </li>
                </ol>
                <div class="price-btn">
                  <a class="blue" href="#">Invest Now</a>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
              <div class="pri_table_list text-center">
                <div class="top-price-inner">
                  <h3>Platinum Package
                  </h3>
                  <div class="rates">
                    <span class="prices">3.5%</span
                    >
                  </div>
                </div>
                <ol class="pricing-text">
                  <li class="check">investment: 2000 TRX</li>
                  <li class="check">Daily income: 70 TRX</li>
                  <li class="check">Validity: ( 180 days)
                  </li>
                </ol>
                <div class="price-btn">
                  <a class="blue" href="#">Invest Now</a>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
              <div class="pri_table_list text-center">
                <div class="top-price-inner">
                  <h3>Diamond Package
                  </h3>
                  <div class="rates">
                    <span class="prices">4%
                      </span
                    >
                  </div>
                </div>
                <ol class="pricing-text">
                  <li class="check">investment: 3000 TRX
                  </li>
                  <li class="check">Daily income: 120 TRX
                  </li>
                  <li class="check">Validity: (180 days)
                  </li>
                </ol>
                <div class="price-btn">
                  <a class="blue" href="#">Invest Now</a>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
              <div class="pri_table_list text-center">
                <div class="top-price-inner">
                  <h3>Premium Package
                  </h3>
                  <div class="rates">
                    <span class="prices">4%
                      </span
                    >
                  </div>
                </div>
                <ol class="pricing-text">
                  <li class="check">investment: 5000 TRX
                  </li>
                  <li class="check">Daily income: 200 TRX
                  </li>
                  <li class="check">Validity: (180 days)
                  </li>
                </ol>
                <div class="price-btn">
                  <a class="blue" href="#">Invest Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Investment area -->
      <!-- Start Choose Area -->
      <div class="choose-service-area bg-color area-padding-2">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Why choose us</h2>
                {{-- <p>
                  Help agencies to define their new business objectives and then
                  create professional software.
                </p> --}}
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start About -->
            <div class="col-xl-4 col-lg-4 col-md-6">
              <div class="choose-services">
                <div class="choose-top align-items-center">
                  <a class="choose-images" href="#"
                    ><i class="flaticon-023-management"></i
                  ></a>
                  <h4>Referral program</h4>
                </div>
                <div class="choose-content">
                  <p>
                    For the investment of your invited friend you will get:<br>
                    1st level member 5%<br>
                    2nd level members 3%<br>
                    3rd level members 2%
                    
                  </p>
                </div>
              </div>
            </div>
            <!-- Start About -->
            <div class="col-xl-4 col-lg-4 col-md-6">
              <div class="choose-services">
                <div class="choose-top align-items-center">
                  <a class="choose-images" href="#"
                    ><i class="flaticon-036-security"></i
                  ></a>
                  <h4>Secure investment</h4>
                </div>
                <div class="choose-content">
                  <p>
                    We are promised your account is 100% secured. 

                  </p>
                </div>
              </div>
            </div>
            <!-- Start services -->
            <div class="col-xl-4 col-lg-4 col-md-6">
              <div class="choose-services">
                <div class="choose-top align-items-center">
                  <a class="choose-images" href="#"
                    ><i class="flaticon-003-approve"></i
                  ></a>
                  <h4>Registered company</h4>
                </div>
                <div class="choose-content">
                  <p>
                    1.Google<br>
                    2.YouTube<br>
                    3.Facebook<br>
                    4.Play Store<br>
                    5.Apple Store<br>
                    
                  </p>
                </div>
              </div>
            </div>
            <!-- Start services -->
            <div class="col-xl-4 col-lg-4 col-md-6">
              <div class="choose-services">
                <div class="choose-top align-items-center">
                  <a class="choose-images" href="#"
                    ><i class="flaticon-042-wallet"></i
                  ></a>
                  <h4> Deposit credited time</h4>
                </div>
                <div class="choose-content">
                  <p>
                    Your deposit amount will be automatically credited to your account within 30 minutes to 2 hours. Be patient with time. Thank you.
                  </p>
                </div>
              </div>
            </div>
            <!-- Start services -->
            <div class="col-xl-4 col-lg-4 col-md-6">
              <div class="choose-services">
                <div class="choose-top align-items-center">
                  <a class="choose-images" href="#"
                    ><i class="flaticon-032-report"></i
                  ></a>
                  <h4>SSL Secured</h4>
                </div>
                <div class="choose-content">
                  <p>
                    Replacing a maintains the amount of lines. When replacing a
                    selection. help agencies to define their new business
                    objectives and then create
                  </p>
                </div>
              </div>
            </div>
            <!-- Start services -->
            <div class="col-xl-4 col-lg-4 col-md-6">
              <div class="choose-services">
                <div class="choose-top align-items-center">
                  <a class="choose-images" href="#"
                    ><i class="flaticon-024-megaphone"></i
                  ></a>
                  <h4>Customer Service:</h4>
                </div>
                <div class="choose-content">
                  <p>
                    (10.00 am to 11.59 pm)
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Choose area -->
      <!-- Start How to area -->
      <div class="how-to-area bg-color-2 area-padding">
        <div class="container">
          <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
              <div class="section-headline text-center">
                <h2>How to start</h2>
                <p>
                  Help agencies to define their new business objectives and then
                  create professional software.
                </p>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- single-well end-->
            <div class="col-xl-3 col-lg-3 col-md-3">
              <div class="single-how first-item">
                <div class="how-img">
                  <span class="h-number">01</span>
                  <a class="big-icon" href="#"
                    ><img src="img/about/h1.png" alt=""
                  /></a>
                </div>
                <div class="how-wel">
                  <div class="how-content">
                    <h4>Get access</h4>
                    <p>
                      Normally, after clicking on the link, the interpage will come up and after fill-up  everything as per demand valid number and valid e-mail. A verification code will be required to register the account. 
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- single-well end-->
            <div class="col-xl-3 col-lg-3 col-md-3">
              <div class="single-how">
                <div class="how-img">
                  <span class="h-number">02</span>
                  <a class="big-icon" href="#"
                    ><img src="img/about/h2.png" alt=""
                  /></a>
                </div>
                <div class="how-wel">
                  <div class="how-content">
                    <h4>Deposit:</h4>
                    <p>
                      bKash<br>
                      Nagod<br>
                      Torn (TRC20) TRX
                      <br>
                      <br>
                      
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- single-well end-->
            <div class="col-xl-3 col-lg-3 col-md-3">
              <div class="single-how">
                <div class="how-img">
                  <span class="h-number">03</span>
                  <a class="big-icon" href="#"
                    ><img src="img/about/h2.png" alt=""
                  /></a>
                </div>
                <div class="how-wel">
                  <div class="how-content">
                    <h4>Package Activation:</h4>
                    <p>
                      Your package will be activated automatically after you have paid the specified price for the specific package
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- single-well end-->
            <div class="col-xl-3 col-lg-3 col-md-3">
              <div class="single-how thired-item">
                <div class="how-img">
                  <span class="h-number">04</span>
                  <a class="big-icon" href="#"
                    ><img src="img/about/h3.png" alt=""
                  /></a>
                </div>
                <div class="how-wel">
                  <div class="how-content">
                    <h4>Get Profit</h4>
                    <p>
                      Finish your Daily job and get earning
                      <br>
                      <br>
                      <br>
                      <br>
                      <br>
                      <br>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End How to area -->
      <!--Start payment-history area -->
      <div class="payment-history-area fix area-padding">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline left-headline">
                <h2>Payments update</h2>
                <p>
                  Help agencies to define their new business objectives and then
                  create professional software.
                </p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12">
              <!-- Start Nav tabs -->
              <ul class="nav payment-tab" role="tablist">
                <li class="nav-item">
                  <a
                    class="nav-link active show"
                    href="#tab-1"
                    role="tab"
                    data-toggle="tab"
                  >
                    <span class="cha-title">Last Deposite</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    href="#tab-2"
                    role="tab"
                    data-toggle="tab"
                  >
                    <span class="cha-title">Last Withdraw</span>
                  </a>
                </li>
              </ul>
              <!-- End Nav tabs -->
            </div>
          </div>
          <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12">
              <div class="tab-content">
                <!--Start Tab Content -->
                <div
                  role="tabpanel"
                  class="tab-pane fade in active show"
                  id="tab-1"
                >
                  <div class="deposite-content">
                    <div class="diposite-box">
                      <div class="deposite-table">
                        <table>
                          <tr>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Amount</th>
                            <th>Currency</th>
                          </tr>
                          <tr>
                            <td>
                              <img src="img/icon/m.png" alt="" />Admond sayhel
                            </td>
                            <td>Jan 02, 2020</td>
                            <td>$1000</td>
                            <td>Torn </td>
                          </tr>
                          <tr>
                            <td><img src="img/icon/m1.png" alt="" />Jonshon</td>
                            <td>Dec 12, 2019</td>
                            <td>$5000</td>
                            <td>Torn </td>
                          </tr>
                          <tr>
                            <td><img src="img/icon/m2.png" alt="" />Hopper</td>
                            <td>Dec 22, 2019</td>
                            <td>$4000</td>
                            <td>Torn </td>
                          </tr>
                          <tr>
                            <td>
                              <img src="img/icon/m3.png" alt="" />Admond sayhel
                            </td>
                            <td>Jan 02, 2020</td>
                            <td>$3000</td>
                            <td>Torn </td>
                          </tr>
                          <tr>
                            <td>
                              <img src="img/icon/m4.png" alt="" />Anjel july
                            </td>
                            <td>Jan 05, 2020</td>
                            <td>$500</td>
                            <td>Torn </td>
                          </tr>
                          <tr>
                            <td><img src="img/icon/m5.png" alt="" />Lagisha</td>
                            <td>Jan 12, 2020</td>
                            <td>$5000</td>
                            <td>Torn </td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab-2">
                  <div class="deposite-content">
                    <div class="diposite-box">
                      <div class="deposite-table">
                        <table>
                          <tr>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Amount</th>
                            <th>Currency</th>
                          </tr>
                          <tr>
                            <td>
                              <img src="img/icon/m.png" alt="" />Admond sayhel
                            </td>
                            <td>Jan 02, 2020</td>
                            <td>$1000</td>
                            <td>Torn </td>
                          </tr>
                          <tr>
                            <td><img src="img/icon/m1.png" alt="" />Jonshon</td>
                            <td>Dec 12, 2019</td>
                            <td>$5000</td>
                            <td>Torn </td>
                          </tr>
                          <tr>
                            <td><img src="img/icon/m2.png" alt="" />Hopper</td>
                            <td>Dec 22, 2019</td>
                            <td>$4000</td>
                            <td>Torn </td>
                          </tr>
                          <tr>
                            <td>
                              <img src="img/icon/m3.png" alt="" />Admond sayhel
                            </td>
                            <td>Jan 02, 2020</td>
                            <td>$3000</td>
                            <td>Torn </td>
                          </tr>
                          <tr>
                            <td>
                              <img src="img/icon/m4.png" alt="" />Anjel july
                            </td>
                            <td>Jan 05, 2020</td>
                            <td>$500</td>
                            <td>Torn </td>
                          </tr>
                          <tr>
                            <td><img src="img/icon/m5.png" alt="" />Lagisha</td>
                            <td>Jan 12, 2020</td>
                            <td>$5000</td>
                            <td>Torn</td>
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
      <!-- End payment-history area -->
      <!-- Start payment-history area -->
      <div class="profit-calculater-area bg-color-2 fix area-padding">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Profit Calculater</h2>
                <p>
                  Help agencies to define their new business objectives and then
                  create professional software.
                </p>
              </div>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="about-profit-inner">
                <div class="about-calculater">
                  <h3>Fixed Deposit / Share:</h3> 
                  <p>
                    If you make a 1000 to 5000 trx fixed deposit for 30 days, you will get 2% on the 16th day.
                  </p>
                  <p>
                    If you make a fixed deposit of 5001 trx to 10000 trx for 30 days, you get 2%.
                  </p>
                  <p>
                    If you make a fixed deposit of 2000 to 5000 trx for 60 days, you will get it on the 61st day with 2.5%.
                  </p>
                  <p>
                    If you make a fixed deposit of 5001 to 10000 trx for 60 days, you will get it on the 61st day with 3%. 
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="profit-calculater-inner">
                <form class="profit-calculator">
                  <div class="row">
                    <div class="col-lg-6 mb-30">
                      <label>Choose Plan</label>
                      <select class="calculater-select-bg">
                        <option>Play Package</option>
                        <option>Silver Package</option>
                        <option>Master Package
                        </option>
                        <option>Platinum Package</option>
                        <option>Diamond Package
                        </option>
                        <option value="">Premium Package
                        </option>
                      </select>
                    </div>
                    <div class="col-lg-6 mb-30">
                      <label>Invest Amount</label>
                      <input
                        type="text"
                        name="invest_amount"
                        id="invest_amount"
                        placeholder="0.00"
                        class="form-control base--bg"
                      />
                    </div>
                    <div class="col-lg-12">
                      <label>Profit Amount</label>
                      <input
                        type="text"
                        name="profit_amount"
                        id="profit_amount"
                        placeholder="0.00"
                        class="form-control base--bg"
                        disabled=""
                      />
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End payment-history area -->
      <!-- Start Reviews Area -->
      <div class="reviews-area bg-color area-padding">
        <div class="container">
          <div class="row">
            <div class="col-xl-5 col-lg-5 col-md-6">
              <div class="testimonial-inner">
                <div class="review-head">
                  <h2>What people says about our company projects</h2>
                  {{-- <p>
                    The phrasal sequence of the Lorem Ipsum text is now so
                    widespread and commonplace that many DTP programmes can
                    generate dummy. The phrasal sequence of the Lorem Ipsum text
                    is now so widespread and commonplace that many DTP
                    programmes can generate dummy
                  </p> --}}
                  <a class="reviews-btn anti-btn" href="review.html"
                    >More reviews</a
                  >
                </div>
              </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-6">
              <div class="Reviews-content">
                <!-- start testimonial carousel -->
                <div class="testimonial-carousel owl-carousel">
                  <div class="single-testi">
                    <div class="testi-text">
                      <div class="clients-text">
                        <div class="testi-img">
                          <img src="img/review/1.jpg" alt="" />
                          <div class="guest-details">
                            <h4>Edward</h4>
                            <span class="guest-rev"
                              >Genarel Freedom Currencyer</span
                            >
                          </div>
                        </div>
                        <div class="client-rating">
                          <a href="#"><i class="ti-star"></i></a>
                          <a href="#"><i class="ti-star"></i></a>
                          <a href="#"><i class="ti-star"></i></a>
                          <a href="#"><i class="ti-star"></i></a>
                          <a href="#"><i class="ti-star"></i></a>
                        </div>
                        <p>
                          When replacing a multi-lined selection of text, the
                          generated dummy text maintains the amount of lines.
                          When replacing a selection. help agencies.
                        </p>
                      </div>
                    </div>
                  </div>
                  <!-- End single item -->
                  <div class="single-testi">
                    <div class="testi-text">
                      <div class="clients-text">
                        <div class="testi-img">
                          <img src="img/review/2.jpg" alt="" />
                          <div class="guest-details">
                            <h4>Charlotte</h4>
                            <span class="guest-rev"
                              >Genarel Freedom Currencyer</span
                            >
                          </div>
                        </div>
                        <div class="client-rating">
                          <a href="#"><i class="ti-star"></i></a>
                          <a href="#"><i class="ti-star"></i></a>
                          <a href="#"><i class="ti-star"></i></a>
                          <a href="#"><i class="ti-star"></i></a>
                          <a href="#"><i class="ti-star"></i></a>
                        </div>
                        <p>
                          When replacing a multi-lined selection of text, the
                          generated dummy text maintains the amount of lines.
                          When replacing a selection. help agencies.
                        </p>
                      </div>
                    </div>
                  </div>
                  <!-- End single item -->
                  <div class="single-testi">
                    <div class="testi-text">
                      <div class="clients-text">
                        <div class="testi-img">
                          <img src="img/review/3.jpg" alt="" />
                          <div class="guest-details">
                            <h4>Daniel</h4>
                            <span class="guest-rev"
                              >Genarel Freedom Currencyer</span
                            >
                          </div>
                        </div>
                        <div class="client-rating">
                          <a href="#"><i class="ti-star"></i></a>
                          <a href="#"><i class="ti-star"></i></a>
                          <a href="#"><i class="ti-star"></i></a>
                          <a href="#"><i class="ti-star"></i></a>
                          <a href="#"><i class="ti-star"></i></a>
                        </div>
                        <p>
                          When replacing a multi-lined selection of text, the
                          generated dummy text maintains the amount of lines.
                          When replacing a selection. help agencies.
                        </p>
                      </div>
                    </div>
                  </div>
                  <!-- End single item -->
                  <div class="single-testi">
                    <div class="testi-text">
                      <div class="clients-text">
                        <div class="testi-img">
                          <img src="img/review/4.jpg" alt="" />
                          <div class="guest-details">
                            <h4>Graham</h4>
                            <span class="guest-rev"
                              >Genarel Freedom Currencyer</span
                            >
                          </div>
                        </div>
                        <div class="client-rating">
                          <a href="#"><i class="ti-star"></i></a>
                          <a href="#"><i class="ti-star"></i></a>
                          <a href="#"><i class="ti-star"></i></a>
                          <a href="#"><i class="ti-star"></i></a>
                          <a href="#"><i class="ti-star"></i></a>
                        </div>
                        <p>
                          When replacing a multi-lined selection of text, the
                          generated dummy text maintains the amount of lines.
                          When replacing a selection. help agencies.
                        </p>
                      </div>
                    </div>
                  </div>
                  <!-- End single item -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Reviews area -->
      <!-- Start Feature Area -->
      <!-- <div class="feature-area bg-color-2 fix area-padding">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="feature-inner">
                <div class="left-headline">
                  <h2>Our apps of your mobile for any update</h2>
                  <p>
                    The phrasal sequence of the Lorem Ipsum text is now so and
                    that many the phrase when found, an alarm can be raised.
                    phrasal sequence of the Lorem Ipsum text is now so and that
                    many the phrase when found, an alarm can be raised
                  </p>
                </div>
                <div class="down-btn">
                  <a href="#" class="app-btn left-btn">Play store</a>
                  <a href="#" class="app-btn right-btn">App store</a>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="feature-content">
                <div class="feature-images">
                  <img src="img/feature/f2.png" alt="" class="first-img" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
      <!-- End Feature Area -->
      <!-- Start Blog area -->
      <div class="blog-area bg-color area-padding-2">
        <div class="container">
          <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
              <div class="section-headline text-center">
                <h2>Latest Blog</h2>
                <p>
                  Dummy text is also used to demonstrate the appearance of
                  different typefaces and layouts
                </p>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start single blog -->
            <div class="col-xl-4 col-lg-4 col-md-6">
              <div class="single-blog">
                <div class="blog-image">
                  <a class="image-scale" href="#">
                    <img src="img/blog/b1.jpg" alt="" />
                  </a>
                </div>
                <div class="blog-content">
                  <div class="blog-category">
                    <span>Investor</span>
                  </div>
                  <div class="blog-meta">
                    <span class="admin-type">
                      <i class="fa fa-user"></i>
                      Admin
                    </span>
                    <span class="date-type">
                      <i class="fa fa-calendar"></i>
                      28 mar, 2021
                    </span>
                    <span class="comments-type">
                      <i class="fa fa-comment-o"></i>
                      32
                    </span>
                  </div>
                  <div class="blog-title">
                    <a href="#">
                      <h4>The phrasal sequence of the Lorem Ipsum text.</h4>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End single blog -->
            <div class="col-xl-4 col-lg-4 col-md-6">
              <div class="single-blog">
                <div class="blog-image">
                  <a class="image-scale" href="#">
                    <img src="img/blog/b2.jpg" alt="" />
                  </a>
                </div>
                <div class="blog-content">
                  <div class="blog-category">
                    <span>Community</span>
                  </div>
                  <div class="blog-meta">
                    <span class="admin-type">
                      <i class="fa fa-user"></i>
                      Admin
                    </span>
                    <span class="date-type">
                      <i class="fa fa-calendar"></i>
                      21 mar, 2021
                    </span>
                    <span class="comments-type">
                      <i class="fa fa-comment-o"></i>
                      32
                    </span>
                  </div>
                  <div class="blog-title">
                    <a href="#">
                      <h4>Make sure the prototype looks finished by.</h4>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End single blog -->
            <div class="col-xl-4 col-lg-4 col-md-6">
              <div class="single-blog">
                <div class="blog-image">
                  <a class="image-scale" href="#">
                    <img src="img/blog/b3.jpg" alt="" />
                  </a>
                </div>
                <div class="blog-content">
                  <div class="blog-category">
                    <span>Media</span>
                  </div>
                  <div class="blog-meta">
                    <span class="admin-type">
                      <i class="fa fa-user"></i>
                      Admin
                    </span>
                    <span class="date-type">
                      <i class="fa fa-calendar"></i>
                      14 Mar, 2021
                    </span>
                    <span class="comments-type">
                      <i class="fa fa-comment-o"></i>
                      32
                    </span>
                  </div>
                  <div class="blog-title">
                    <a href="#">
                      <h4>Designer have to make sure the prototype looks.</h4>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End single blog -->
            <div class="d-lg-none d-xl-none col-md-6">
              <div class="single-blog">
                <div class="blog-image">
                  <a class="image-scale" href="#">
                    <img src="img/blog/b4.jpg" alt="" />
                  </a>
                </div>
                <div class="blog-content">
                  <div class="blog-category">
                    <span>Profit</span>
                  </div>
                  <div class="blog-meta">
                    <span class="admin-type">
                      <i class="fa fa-user"></i>
                      Admin
                    </span>
                    <span class="date-type">
                      <i class="fa fa-calendar"></i>
                      28 Feb, 2021
                    </span>
                    <span class="comments-type">
                      <i class="fa fa-comment-o"></i>
                      32
                    </span>
                  </div>
                  <div class="blog-title">
                    <a href="#">
                      <h4>Designer have to make sure the prototype looks.</h4>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End single blog -->
          </div>
          <!-- End row -->
        </div>
      </div>
      <!-- End Blog area -->
      <!-- Start Subscribe area -->
      <div class="subscribe-area bg-color">
        <div class="container">
          <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
              <div class="subscribe-inner">
                <div class="subdcribe-content">
                  <div class="section-headline text-center">
                    <h2>Payment methods</h2>
                    <p>
                      Help agencies to define their new business objectives and
                      then create professional software.
                    </p>
                  </div>
                  <div class="subs-form">
                    <form
                      id="contactForm"
                      method="POST"
                      action="http://rockstheme.com/rocks/live-Freedom Currency/contact.php"
                      class="contact-form"
                    >
                      <input
                        type="email"
                        class="email form-control"
                        id="email"
                        placeholder="Email"
                        required
                        data-error="Please enter your email"
                      />
                      <button type="submit" id="submit" class="add-btn">
                        Subscribe
                      </button>
                    </form>
                  </div>
                  <div class="brand-content">
                    <div class="brand-carousel owl-carousel">
                      <div class="single-brand-item">
                        <a href="#"><img src="img/brand/1.png" alt="" /></a>
                      </div>
                      <div class="single-brand-item">
                        <a href="#"><img src="img/brand/2.png" alt="" /></a>
                      </div>
                      {{-- <div class="single-brand-item">
                        <a href="#"><img src="img/brand/3.png" alt="" /></a>
                      </div>
                      <div class="single-brand-item">
                        <a href="#"><img src="img/brand/4.png" alt="" /></a>
                      </div>
                      <div class="single-brand-item">
                        <a href="#"><img src="img/brand/5.png" alt="" /></a>
                      </div>
                      <div class="single-brand-item">
                        <a href="#"><img src="img/brand/6.png" alt="" /></a>
                      </div>
                      <div class="single-brand-item">
                        <a href="#"><img src="img/brand/7.png" alt="" /></a>
                      </div>
                      <div class="single-brand-item">
                        <a href="#"><img src="img/brand/8.png" alt="" /></a>
                      </div> --}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Subscribe area -->
@endsection
