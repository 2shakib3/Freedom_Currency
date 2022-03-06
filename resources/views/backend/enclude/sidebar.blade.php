<div class="sidebar px-4 py-4 py-md-4 me-0">
        <div class="d-flex flex-column h-100">
          <a href="index.html" class="mb-0 brand-icon">
            <span class="logo-icon">
              <i class="fa fa-book fs-4"></i>
            </span>
            <span class="logo-text">Freedom Currency</span>
          </a>
          <!-- Menu: main ul -->
         @if (Auth::User()->user_type==2)
         <ul class="menu-list flex-grow-1 mt-3">
          <li>
            <a class="m-link active" href="index.html"
              ><i class="icofont-home fs-5"></i> <span>Dashboard</span></a
            >
          </li>
          <li class="collapsed">
            <a
              class="m-link"
              data-bs-toggle="collapse"
              data-bs-target="#menu-product"
              href="#"
            >
              <i class="icofont-users-alt-2 fs-5"></i>
              <span>Create Package</span>
              <span
                class="arrow icofont-rounded-down ms-auto text-end fs-5"
              ></span
            ></a>
            <!-- Menu: Sub menu ul -->
            <ul class="sub-menu collapse" id="menu-product">
              <li>
                <a class="ms-link" href="{{ url('admin/createpackage')}}">Create Package</a>
              </li>
              <li>
                <a class="ms-link" href="{{ url('/admin/listpackage') }}">List Of package</a>
              </li>
            </ul>
          </li>

          <li class="collapsed">
            <a
              class="m-link"
              data-bs-toggle="collapse"
              data-bs-target="#categories"
              href="#"
            >
              <i class="icofont-chart-flow fs-5"></i>
              <span>Ads Management</span>
              <span
                class="arrow icofont-rounded-down ms-auto text-end fs-5"
              ></span
            ></a>
            <!-- Menu: Sub menu ul -->
            <ul class="sub-menu collapse" id="categories">
              <li>
                <a class="ms-link" href="{{ url('/create/ads')}}"
                  >Create Ads</a
                >
              </li>
              <li>
                <a class="ms-link" href="{{ url('/view/ads') }}"
                  >View Ads</a
                >
              </li>
              <li>
                <a class="ms-link" href="{{ url('/manage/ads') }}"
                  >Manage Ads with Subscription</a
                >
              </li>
            </ul>
          </li>

          <li class="collapsed">
            <a
              class="m-link"
              data-bs-toggle="collapse"
              data-bs-target="#menu-order"
              href="#"
            >
              <i class="icofont-notepad fs-5"></i>
              <span>Investor</span>
              <span
                class="arrow icofont-rounded-down ms-auto text-end fs-5"
              ></span
            ></a>
            <!-- Menu: Sub menu ul -->
            <ul class="sub-menu collapse" id="menu-order">
              <li>
                <a class="ms-link" href="{{ url('/investor/list') }}">List of Investor</a>
              </li>
              <li>
                <a class="ms-link" href="{{ url('/panding/list') }}">Panding Investor</a>
              </li>
            </ul>
          </li>

          <li class="collapsed">
            <a
              class="m-link"
              data-bs-toggle="collapse"
              data-bs-target="#customers-info"
              href="#"
            >
              <i class="icofont-funky-man fs-5"></i> <span>Transection</span>
              <span
                class="arrow icofont-rounded-down ms-auto text-end fs-5"
              ></span
            ></a>
            <!-- Menu: Sub menu ul -->
            <ul class="sub-menu collapse" id="customers-info">
              <li>
                <a class="ms-link" href="{{ url('/withdraw') }}">Withdrawal Request</a>
              </li>
              <li>
                <a class="ms-link" href="{{  url('/deposit')}}"
                  >Deposit List</a
                >
              </li>
            </ul>
          </li>

          <li class="collapsed">
            <a
              class="m-link"
              data-bs-toggle="collapse"
              data-bs-target="#menu-sale"
              href="#"
            >
              <i class="icofont-sale-discount fs-5"></i>
              <span>User</span>
              <span
                class="arrow icofont-rounded-down ms-auto text-end fs-5"
              ></span
            ></a>
            <!-- Menu: Sub menu ul -->
            <ul class="sub-menu collapse" id="menu-sale">
              <li>
                <a class="ms-link" href="{{ url('/create/user')}}">Create User</a>
              </li>
              <li>
                <a class="ms-link" href="{{ url('/manage/user')}}">Manage User</a>
              </li>
              <li>
                <a class="ms-link" href="{{ url('/block/user')}}">Block User</a>
              </li>
            </ul>
          </li>
          
        </ul>
           
         @endif
          <!-- Menu: menu collepce btn -->
          <button
            type="button"
            class="btn btn-link sidebar-mini-btn text-light"
          >
            <span class="ms-2"><i class="icofont-bubble-right"></i></span>
          </button>
        </div>
      </div>