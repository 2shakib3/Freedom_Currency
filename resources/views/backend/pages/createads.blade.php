@extends('backend.master')
@section('title')
   Ads
@endsection

@section('content')
<div class="container">
   <div class="row">
    
         <div class="col-md-8">
            <h2 class="text-center bg bg-primary text-white">Create Ads</h2>
          </div>
          <div class="col-md-4"></div>
          
          <div class="col-md-8">

            @if ($errors->all())
            <div class="bg bg-info">
             
                @foreach ($errors->all() as $error )
                <ul>
                  <li>{{  $error}}</li>
                </ul>
                @endforeach
            

            </div>
              
            @endif

            <form action="{{ url('create/ads')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
            <label  class="form-label">Title</label>
            <input type="text" class="form-control" name="title"  placeholder="Enter ads title" value="{{ old('title') }}">
          </div>
      
          <div class="mb-3">
            <label  class="form-label">Subtitle</label>
            <input type="text" class="form-control"  name="subtitle"  placeholder="Enter subtitle" value="{{ old('subtitle') }}">
          </div>
      
          <div class="mb-3">
            <label  class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="10" placeholder="Enter Description">{{ old('description')}}</textarea>
          </div>
      
          <div class="mb-3">
            <label  class="form-label">Upload Video Link</label>
            
               <input  type="text" class="form-control" name="video">
            
          </div>
      
          <div class="mb-3">
            <label  class="form-label">Upload Image</label>
            <input type="file" class="form-control" name="ads_image">
          </div>

          <div class="mb-3">
            <label  class="form-label">Link</label>
            <input type="text" class="form-control" name="link" placeholder="Enter Link" value="{{  old('link') }}" >
          </div>

          <div class="mb-3">
            <label  class="form-label">Point Perclick</label>
            <input type="text" class="form-control" name="per_click"  placeholder="Enter Point Perclick" value="{{ old('per_click') }}">
          </div>

          <div class="mb-3">
            <label  class="form-label">Validity</label>
            <input type="date" class="form-control" name="validity" value="{{ old ('validity')}}">
          </div>
      
          <div class="mb-3">
            
            <input type="submit" class="form-control bg bg-success"  value="create">
          </div>
          
          </form>
          </div>
      
   </div>
</div>
@endsection

