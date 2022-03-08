@extends('backend.master')
@section('title')
    Package
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1 class="text-center text-white bg bg-success">List of Package</h1>
            <table class="table table-bordered border-primary text-center">
                <tr>
                    <th>Serial</th>
                    <th>Packge name</th>
                    <th>Revenue Percent</th>
                    <th>Invest</th>
                    <th>Daily Income</th>
                    <th>Validity</th>
                    <th>Action</th>
                </tr>
              

                
                @foreach ($packages as $package)
                <tr>
                    <td>{{ $loop->index+1 }}</td>
                <td>{{ $package->package_name }}</td>
                <td>{{ $package->revenue_percent }}</td>
                <td>{{ $package->invest }}</td>
                <td>{{ $package->daily_income }}</td>
                <td>{{ $package->validity }}</td>

                <td>
                    <a href="{{ url('package/edit') }}/{{ $package->id }}">
                    <button class="bg bg-info">Edit</button></a>
                    <a href="{{ url('package/delete') }}/{{ $package->id }}">
                        <button class="bg bg-danger">Delete</button></a>
                </td>
                    
                
             
                @endforeach
            </tr> 
            
              </table>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
@endsection