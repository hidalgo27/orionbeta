<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;
    public function producto(){
        return $this->belongsTo(Product::class,'product_id');
    }

    public function order(){
        return $this->belongsTo(Order::class,'order_id');
    }
}
