<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\ProductSku;

class CartItem extends Model
{
    protected $fillable = ['amount'];
    public $timestamps = false;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function productSku(){
       return $this->belongsTo(ProductSku::class);
    }
}
