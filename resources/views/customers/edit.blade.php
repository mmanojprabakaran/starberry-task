@extends('products.layout')
@section('content')
 <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Customer</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('customers.index') }}"> Back</a>
            </div>
        </div>
    </div>
   <form method="POST" action="{{route('customers.update',$customer->id)}}">     
 @csrf
          @method('PATCH') 
		  <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{$customer->name}}" class="form-control" placeholder="Name">
                </div>
            </div>
  
 
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Height:</strong>
                    <input type="text" name="height" value="{{$customer->height}}" class="form-control" placeholder="Name">
                </div>
            </div>
 
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Hair Color:</strong>
                    <input type="text" name="hair_color" value="{{$customer->hair_color}}" class="form-control" placeholder="Name">
                </div>
            </div>
			
           <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Skin Color:</strong>
                    <input type="text" name="skin_color" value="{{$customer->skin_color}}" class="form-control" placeholder="Name">
                </div>
            </div>
			
			<div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Skin Color:</strong>
                    <input type="text" name="eye_color" value="{{$customer->eye_color}}" class="form-control" placeholder="Name">
                </div>
            </div>
			<div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Mass:</strong>
                    <input type="text" name="mass" value="{{$customer->mass}}" class="form-control" placeholder="Name">
                </div>
            </div>
<br/>  
  
<button type="submit" class="btn-btn" >Update</button>  
</div>
</form>  

@endsection