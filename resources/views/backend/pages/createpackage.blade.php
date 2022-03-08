@extends('backend.master')
@section('title')
    Create Package
@endsection

@section('content')


<div class="container">
  <div class="row">
   
    <div class="col-md-8">
      <h2 class="text-center bg bg-primary text-white">Package Create</h2>
    </div>
    <div class="col-md-4"></div>
    
    <div class="col-md-8">

      @if ($errors->all())
      <div class="bg bg-info">
           @foreach ( $errors->all() as $error )
             <ul>
               <li>{{   $error       }}</li>
             </ul>
           @endforeach
      </div>
        
      @endif

      <form action="{{ url('create/package')}}" method="post">
        @csrf
        <div class="mb-3">
      <label  class="form-label">Package name</label>
      <input type="text" class="form-control" name="package_name"  placeholder="Enter Package Name" value="{{ old('package_name') }}">
    </div>

    <div class="mb-3">
      <label  class="form-label">Revenue Percent</label>
      <input type="text" class="form-control"  name="revenue_percent"  placeholder="Enter Revenue Percent" value="{{ old('revenue_percent') }}">
    </div>

    <div class="mb-3">
      <label  class="form-label">Invest</label>
      <input type="text" class="form-control" name="invest"  placeholder="Enter Investment" value="{{ old('invest') }}">
    </div>

    <div class="mb-3">
      <label  class="form-label">Daily Income</label>
      <input type="text" class="form-control" name="daily_income" placeholder="Daily Income" value="{{ old('daily_income') }}" >
    </div>

    <div class="mb-3">
      <label  class="form-label">Validity</label>
      <input type="date" class="form-control" name="validity"  value="{{ old('validity') }}" >
    </div>

    <div class="mb-3">
      
      <input type="submit" class="form-control bg bg-success"  value="Add pacakage">
    </div>
    
    </form>
    </div>
    <div class="col-md-4"></div>
  </div>
</div>


@endsection
