@extends('products.layout')
@section('content')  
 <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Customer Details</h2>
            </div>
			 <div class="pull-right">
                <a class="btn btn-info" href="{{ url('create_customer') }}"> Call Customer</a>
            </div>
            
        </div>
    </div>

  <table class="table table-bordered">
        <tr>
        <th>Name</th>
        <th>Height</th>
        <th>Hair Color</th>
        <th>Skin Color</th>
        <th>Eye Color</th>
		<th>Mass</th>
		<th>Actions</th>
        </tr>
        @foreach ($customer as $customers)
        <tr>
        <td>{{ $customers->name }}</td>
        <td>{{ $customers->height }}</td>
        <td>{{ $customers->hair_color }}</td>
        <td>{{ $customers->skin_color }}</td>
        <td>{{ $customers->eye_color }}</td>
        <td>{{ $customers->mass }}</td>
        <td >  
<form action="{{ route('customers.destroy', $customers->id)}}" method="post">  
                  @csrf  
                  @method('DELETE')  
                  <button class="btn btn-danger" type="submit">Delete</button>  
                </form>  
 </br>
<form action="{{ route('customers.edit', $customers->id)}}" method="get">  
                  @csrf  
                   
                  <button class="btn btn-success" type="submit">Edit</button>  
                </form>  
</td>  
  
        </tr>
        @endforeach
    </table>
    

      

@endsection