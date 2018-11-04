@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Manage Products <button class="btn btn-primary btn-xs" data-title="add" data-toggle="modal" data-target="#add" ><span class="glyphicon glyphicon-pencil"></span> + Add Products</button></div>
				

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                      <div class="container">
					 
						<div class="row">
							
							<div class="col-md-12">
							 
							<div class="table-responsive">
          <div id="results">
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
                   
                   <th>Product name</th>
                    <th>Quantity in stock</th>
                     <th>Price per item</th>
                     <th>Datetime submitted</th>
                     <th>Total value number</th>
                                          
                       <th>Action</th>
                   </thead>
    <tbody>
    @foreach($products as $product)
    <tr>
     
    <td>{{$product->product_name }}</td>
    <td>{{$product->quantity }}</td>
    <td>{{$product->price}}</td>
    <td>{{$product->created_at }}</td>
	<td> {{$product->quantity*$product->price }}</td>
    <td><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span> Edit</button> | 
        <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal"   onclick="delete_product({{$product->id}});" ><span class="glyphicon glyphicon-trash"></span>Delete</button> </td>
    </tr>
    @endforeach
  
   
    
   
    
    </tbody>
        
</table>
</div>
 
 
  <!-- /Add Products .modal-content --> 
 
 <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Add Product Details</h4>
      </div>
          <div class="modal-body">
          <div class="form-group">
        <input class="form-control " type="text" id="product_name" placeholder="Product Name">
        </div>
        <div class="form-group">
        
        <input class="form-control " type="text" id="qty" placeholder="Product Qty">
        </div>
        <div class="form-group">
        <textarea rows="2" class="form-control" id="price" placeholder="Product Price"></textarea>
    
        
        </div>
      </div>
          <div class="modal-footer ">
        <button type="button" onclick="save();" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
	
	
 <!-- /Edit Products .modal-content --> 
   
	<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
      </div>
          <div class="modal-body">
          <div class="form-group">
        <input class="form-control " type="text" placeholder="Mohsin">
        </div>
        <div class="form-group">
        
        <input class="form-control " type="text" placeholder="Irshad">
        </div>
        <div class="form-group">
        <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>
    
        
        </div>
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
	
 
	
					 </div>
				   
                </div>
            </div>
        </div>
    </div>
</div>


 <script>
 function save() 
{
	    var name=$("#product_name").val();;
		var qty = $("#qty").val();
		var price = $("#price").val();
	   
	   $.ajax({

           type:'POST',

           url:'{{url('/manage_products')}}',

           data:{  product_name: name, qty: qty, price: price,"_token": "{{ csrf_token() }}"},

           success:function(data){
           	  
               $('#results').load("{{url('/products')}}/");

           }

        });
}
 
 function delete(val) 
{
	    var name=$("#product_name").val();;
		var qty = $("#qty").val();
		var price = $("#price").val();
	   
	   $.ajax({

           type:'POST',

           url:'{{url('/manage_products')}}',

           data:{  product_name: name, qty: qty, price: price,"_token": "{{ csrf_token() }}"},

           success:function(data){
           	  
               $('#results').load("{{url('/products')}}/");

           }

        });
}


</script>

  
@endsection
