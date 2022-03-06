@extends('backend.master')
@section('title')
Manage page Edit
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center p-2">Update Manage Ads</h2>
@if($message)
<div class="alert alert-success message">
    <strong>{{ $message}}</strong>
    </div>

@endif
   
            <form action="{{url('manage/ads/edit')}}"  method="post">
              @csrf
              <div class="mb-3">
                <label  class="form-label">Update Package Name</label>
                <input type="hidden" name="manage_id" value="{{ $old_manages->id }}">
                <select  name="package_id" id=" " class="form-control">
                    @foreach ($packages as $package )
                 
                    <option value="{{ $package->id }}">{{ $package->package_name }} </option>
                    @endforeach
                </select>

              <div class="mb-3">
                <label  class="form-label">Update Ads  Amount</label>
                <input type="number" class="form-control"   name="ads_amount"  value="{{ $old_manages->ads_amount }}">
              </div>

              <div class="mb-3">
                <label  class="form-label">UpDate Status</label>
             
                    <select class="form" name="status">
                        @if( $old_manages->status == 0)
                            <option value="0">Active</option>
                        @else
                            <option value="1">Deactivate</option>
                        @endif
                        <option value="0">Active</option>
                        <option value="1">Deactivate</option>
                    </select>
      
              </div>


              <div class="mb-3">
               
                <input type="submit" class="form-control"  value="Submit"  class="form-control">
              </div>


            </form>


        </div>
</div>

@endsection