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
        <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span>Delete</button> </td>
    </tr>
    @endforeach
  
   
    
   
    
    </tbody>
        
</table>