<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomerProductFavorite extends Model
{
    protected $filetable=['product_id', 'customer_id'];
    protected $dates = ['deleted_at'];


    public function product(){
        return $this->belongsTo(Product::class);
    }
}


