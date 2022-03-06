@extends('backend.master')
@section('title')
  View Ads
@endsection

@section('content')
 
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center text-white bg bg-success">List of Ads</h1>
            <table class="table table-bordered border-primary text-center">
                <tr>
                    <th>Serial</th>
                    <th>Title</th>
                    <th>SubTitle</th>
                    <th>Description</th>
                    <th>Video</th>
                    <th>Image</th>
                    <th>Link</th>
                    <th>Point Per click</th>
                    <th>Validity</th>
                    <th>Action</th>
                </tr>
       
                @foreach ($ads as $ad)
                <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $ad->title }}</td>
                <td>{{ $ad->sub_title }}</td>
                <td>{{ $ad->description }}</td>
               <td>
                <iframe src="{{ $ad->video}}" frameborder="0" height="100px" width="100px"></iframe>
               </td>
               <td> 
                   <img src="{{ asset($ad->ads_image) }}" alt="" height="100px" width="100px">
               </td>
                <td>
                 <iframe src="{{ $ad->link}}" frameborder="0" height="100px" width="100px"></iframe>
                </td>
                <td>{{ $ad->per_click}}</td>
                <td>{{ $ad->validity}}</td>

                <td>
                    <a href="{{ url('edit/ads') }}/{{ $ad->id }}">
                    <button class="bg bg-info">Edit</button></a>
                    <a href="{{ url('delete/ads') }}/{{ $ad->id }}">
                        <button class="bg bg-danger">Delete</button></a>
                </td>
                    
                
             
                @endforeach
            </tr> 
            
              </table>
        </div>
        
    </div>
</div>
       
@endsection