@extends('backend.master')
@section('title')
    Create Package
@endsection

@section('content')


<div class="container">
  <div class="row">
   
    <div class="col-md-8">
      <h2 class="text-center bg bg-primary text-white">Package Update</h2>
    </div>
    <div class="col-md-4"></div>
    
    <div class="col-md-8">
      <form action="{{ url('package/update')}}" method="post">
        @csrf
        <div class="mb-3">
      <label  class="form-label">Package name</label>
      <input type="hidden"  value="{{ $old_package->id }}"  name="package_id">
      <input type="text" class="form-control" name="package_name" value="{{ $old_package->package_name }}"  placeholder="Enter Package Name">
    </div>

    <div class="mb-3">
      <label  class="form-label">Revenue Percent</label>
      <input type="text" class="form-control" value="{{ $old_package->revenue_percent }}"  name="revenue_percent"  placeholder="Enter Revenue Percent">
    </div>

    <div class="mb-3">
        <label  class="form-label">Invest</label>
        <input type="text" class="form-control" value="{{ $old_package->invest }}"  name="invest">
      </div>

      <div class="mb-3">
        <label  class="form-label">Daily income</label>
        <input type="text" class="form-control" value="{{ $old_package->daily_income }}"  name="daily_income">
      </div>

      <div class="mb-3">
        <label  class="form-label">Validity</label>
        <input type="date" class="form-control" value="{{ $old_package->validity }}"  name="validity">
      </div>

    <div class="mb-3">
      
      <input type="submit" class="form-control bg bg-success text-white"  value="Update pacakage">
    </div>
    
    </form>
    </div>
    <div class="col-md-4"></div>
  </div>
</div>


@endsection
