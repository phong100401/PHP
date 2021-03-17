<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductComment extends Model
{
    use HasFactory;

    protected $table = 'product_comments';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public  function  products(){
        return $this->hasMany(Product::class,'product_id','id');
    }
}


