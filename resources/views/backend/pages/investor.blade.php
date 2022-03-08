@extends('backend.master')
@section('title')
List of Investor
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <table class="table">
                <h1 class="text-center">All Investor</h1>
                <thead>
                  <tr>
                    {{-- <th scope="col">Investor Name</th> --}}
                    <th scope="col">User Name</th>
                    <th scope="col">Package Name</th>
                    <th scope="col">Amount</th>
                    
                    <th scope="col">Payment Type</th>
                    <th scope="col">phone Numer</th>
                    <th scope="col">Status</th>
                    <th scope="col">Purchase at</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                   
                @foreach ($investors as $investor)
                <td>
                    @if ($investor->relationTouser->id==1)
                        <p> {{ $investor->relationTouser->name }}</p>
                    @endif
                   </td>
                <td>{{ $investor->package_name  }}</td>
                <td>{{ $investor->amount }}</td>
               
                <td>
                    @if ($investor->pay_method==1)
                    Nagad
                    @elseif ($investor->pay_method==2)
                    Bkash
                   @elseif ($investor->pay_method==3)
                    Rocket
                    @endif
                </td>
                <td>{{ $investor->pay_number }}</td>
                <td>
                    @if ($investor->status==1)
                      <a href="#" >
                          <button  class="bg bg-success text-white">Active</button>
                      </a>
                      @elseif ($investor->status==2)
                      <a href="#" >
                          <button  class="bg bg-danger text-white">DeActive</button>
                      </a>
                    @endif
                    </td>
                    <td>{{ $investor->created_at }}</td>
                <td>
                    <a href="{{ url('approve/investor') }}/{{ $investor->id }}">
                        <button type="button" class="bg bg-info text-white">Approve </button>
                    </a>
                    <a href="{{ url('delete/investor') }}/{{ $investor->id }}">
                        <button type="button" class="bg bg-danger text-white">Delete </button>
                    </a>
                </td>
                <td>
                    @if ($investor->status==1)
                    <p>Expire</p>
                    @endif
                </td>
                
              </tr>
            @endforeach
                  
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection
