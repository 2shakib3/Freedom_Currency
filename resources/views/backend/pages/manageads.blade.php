@extends('backend.master')
@section('title')
Manage Ads
@endsection

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center p-2">Manage Ads</h2>
   
            <form action="{{ url('manage/ads')}}"  method="post">
              @csrf

              <div class="mb-3">
                <label  class="form-label">Enter Package Name</label>
                <select  name="package_id" id=" " class="form-control">
                    @foreach ($packages as $package )
                    <option value="{{ $package->id }}">{{ $package->package_name }} </option>
                    @endforeach
                </select>
               </div>

              <div class="mb-3">
                <label  class="form-label">Enter Ads  Amount</label>
                <input type="number" class="form-control"  placeholder="Enter Ads Amount"  name="ads_amount" required>
              </div>

              <div class="mb-3">
                <label  class="form-label">Status</label>
               <select name="status" id=""  class="form-control">
                   <option>Select</option>
                   <option value="0">Active</option>
                   <option value="1">Inactive</option>
               </select>
              </div>


              <div class="mb-3">
               
                <input type="submit" class="form-control"  value="Submit"  class="form-control">
              </div>


            </form>


        </div>
    </div>

    <div class="row">
    <div class="col-md-12">
        <h2 class="text-center p-2">View Manage Ads</h2>
        <table class="table table-success table-striped">
            <tr>
                <td>Package Name</td>
                <td>Ads Amount</td>
                <td>Status</td>
                <td>Action</td>

            </tr>
          
                @foreach ($manages as $manage )
                <tr>
                <td>{{ $manage->relationToPackage->package_name }}</td>
                <td>{{   $manage->ads_amount}}</td>
                <td>
                    @if ($manage->status==0)
                     Active
                    @elseif ($manage->status==1)
                    InActive
                    @endif
                </td>
                <td>
                    <a href="{{ url('manage/edit') }}/{{ $manage->id}}">
                        <button type="button" class="bg bg-info">edit</button>
                    </a>
                    <a href="{{ url('manage/delete') }}/{{ $manage->id}}">
                        <button type="button" class="bg bg-danger">Delete</button>
                    </a>
                </td>
                @endforeach
             
            </tr>
          </table>
    </div>

    </div>
</div>

@endsection