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

 