@extends('font_end.master')
@section('title')
Contact
@endsection
@section('main-contain')
 
 <!-- Start Breadcrumb Area -->
 <div class="page-area bread-pd">
        <div class="breadcumb-overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="breadcrumb-title text-center">
                <h2>Contact us</h2>
                <div class="bread-come">
                  <nav aria-label="breadcrumb ">
                    <ol
                      class="breadcrumb purple lighten-4 justify-content-center"
                    >
                      <li class="breadcrumb-items">
                        <a class="black-text" href="#">Home</a
                        ><i class="ti-angle-right" aria-hidden="true"></i>
                      </li>
                      <li class="breadcrumb-items">
                        <a class="black-text" href="#">Contact us</a>
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
      <!-- Start contact Area -->
      <div class="contact-page bg-color area-padding">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="contact-left">
                <div class="contact-image">
                  <img src="img/about/ab.jpg" alt="" />
                </div>
              </div>
            </div>
            <!-- End contact icon -->
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="contact-form">
                <form
                  id="contactForm"
                  method="POST"
                  action="http://rockstheme.com/rocks/live-FreedomCurrency/contact.php"
                  class="contact-form"
                >
                  <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input
                        type="text"
                        id="name"
                        class="form-control"
                        placeholder="Name"
                        required
                        data-error="Please enter your name"
                      />
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input
                        type="email"
                        class="email form-control"
                        id="email"
                        placeholder="Email"
                        required
                        data-error="Please enter your email"
                      />
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <input
                        type="text"
                        id="msg_subject"
                        class="form-control"
                        placeholder="Subject"
                        required
                        data-error="Please enter your message subject"
                      />
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <textarea
                        id="message"
                        rows="7"
                        placeholder="Massage"
                        class="form-control"
                        required
                        data-error="Write your message"
                      ></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                      <button type="submit" id="submit" class="contact-btn">
                        Submit
                      </button>
                      <div id="msgSubmit" class="h3 text-center hidden"></div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- End contact Form -->
          </div>
          <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="contact-single">
                <h3>Community club</h3>
                <p>
                  When replacing a selection of text within a single line, the
                  amount of words is roughly being maintained.multi-lined
                  selection of text
                </p>
                <a class="club-btn" href="#">Join us</a>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="contact-single">
                <h3>Members club</h3>
                <p>
                  When replacing a selection of text within a single line, the
                  amount of words is roughly being maintained.multi-lined
                  selection of text
                </p>
                <a class="club-btn" href="#">Join us</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Contact Area -->
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
                      action="http://rockstheme.com/rocks/live-FreedomCurrency/contact.php"
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
                      <div class="single-brand-item">
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
                      </div>
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