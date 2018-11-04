<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
	protected $table= "Products";
	protected $primaryKey = 'id';
	
    protected $fillable = [
        'product_name', 'quantity', 'price'  ];
	
	
	public function Products()
	{
    return $this->hasMany('App\User');
	}
	
	
}
