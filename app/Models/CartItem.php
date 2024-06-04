<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $primaryKey = 'cartItemId';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'cartItemId', 'productId', 'productQuantity'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'productId', 'productId');
    }

    public function cart()
    {
        return $this->belongsTo(Cart::class, 'cartId', 'cartId');
    }
}
