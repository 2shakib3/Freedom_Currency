<div class="col-xl-3 col-lg-3 col-md-4">
    <aside class="sidebar">
      <div class="dashboard-side">
        <div class="dashboard-head">
          <div class="dashboard-profile">
            <img src="{{ asset('fontend/img/about/profile.png') }}" alt="" />
            <div class="profile-content">
              <span class="pro-name">
                @if (Auth::User()->user_type==1)
                  <p>{{  Auth::User()->name }}</p>
                @endif
              </span>
              <span class="pro-number">
                @if (Auth::User()->user_type==1)
               <p> {{ Auth::User()->email }}</p>
                @endif
              </span>
            </div>
          </div>
        </div>
        <div class="dashboard-menu">
          <ul>
            <li class="active">
              <a href="{{ url('user/dashboard') }}"
                ><i class="ti-dashboard"></i>Dashboard</a
              >
            </li>
            <li>
              <a href="{{ url('/work') }}"
                ><i class="ti-wallet"></i>My Work</a
              >
            </li>
            <li>
              <a href="{{ url('user/withdraw') }}"
                ><i class="ti-import"></i>Withdraw Request</a
              >
            </li>
            <li>
              <a href="{{ url('user/payment') }}"
                ><i class="ti-import"></i>Payment</a
              >
            </li>
            

            <li>
              <a href="{{ url('user/transection') }}"
                ><i class="ti-layout-list-thumb"></i>Transection</a
              >
            </li>
            <li>
              <a href="{{ url('user/notification') }}"
                ><i class="ti-bell"></i>Notifecations</a
              >
            </li>
            <li>
              <a href="{{ url('user/setting') }}"
                ><i class="ti-settings"></i>Settings</a
              >
            </li>
            <li>
              <a href="#"><i class="ti-shift-right"></i>Log out</a>
            </li>
          </ul>
        </div>
      </div>
    </aside>
  </div>