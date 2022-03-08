@extends('font_end.master')
@section('title')
User withdraw
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
  <div class="notify-overlay"></div>
  <div class="dsahboard-area bg-color area-padding">
    <div class="container">
      <div class="row">
        @include('user.dashboard.page_link.sidebar')
        <div class="col-xl-9 col-lg-9 col-md-8">
          <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                {{-- <h4> <a href=""  type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"></a></h4> --}}
                <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Create Withdraw Request  <i class="fa fa-plus" aria-hidden="true"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enter Withraw Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @if (session('msg'))
        <ul>
          <li>{{ session('msg') }}</li>
        </ul>
          
        @endif
        <form action="{{ url('withdraw/request') }}"  method="post">

          @csrf 
          <div class="form-group">
            <label for="exampleInputEmail1">Enter Payment Amount</label>
            <input type="number" class="form-control"  placeholder="Enter Payment Amount"  name="amount">
          </div>

          <div class="form-group">
            <label >Enter Payment Number</label>
            <input type="number" class="form-control"  placeholder="Enter Payment Number"   name="pay_number">
          </div>

          <div class="form-group">
            <label >Enter Payment Method</label>
            <select name="pay_method" id=""  class="form-control">
                <option value="1">Nagad</option>
                <option value="2">Bkash</option>
                <option value="3">Rocket</option>
            </select>
          </div>    
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
     
    </div>
  </div>
</div>

                <div class="send-money-form transection-log">
                <div class="form-text">
                  <h4 class="form-top">Last Withdraw</h4>
                  <div class="form-inner table-inner">
                    <table>
                      <tr>
                        <th>Amount</th>
                        <th>Pay Number</th>
                        <th>Pay Method</th>
                        <th>Status</th>
                      </tr>
                      <tr>
                        @foreach ($draws as $draw)
                        <td>{{  $draw->amount }}</td>
                        <td>{{  $draw->pay_number }}</td>
                        <td>
                          @if ($draw->pay_method==1)
                         <p>Nagad</p>
                          @elseif ($draw->pay_method==2)
                          <p> Bkash</p>
                            @elseif ($draw->pay_method==3)
                            <p>Rocket</p>
                          @endif
                        </td>
                        <td>{{  $draw->status}}</td>
                       
                        @endforeach
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
  </div>
@endsection