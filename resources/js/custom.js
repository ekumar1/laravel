function saveproduct()
	  {   
	  
	  var product_name = 
	  var qty =
	  var price =
	  
	   $.ajax({

           type:'POST',

           url:'{{url('/manage_prdoucts')}}',

           data:{  product_name: product_name, price:price, qty: qty,"_token": "{{ csrf_token() }}"},

           success:function(data){

               $('#results'+value).html(data);

           }

        });
		