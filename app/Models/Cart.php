<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $primaryKey = 'cartId';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'cartId', 'ownerId'
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'ownerId', 'userId');
    }

    public function items()
    {
        return $this->hasMany(CartItem::class, 'cartItemId', 'cartId');
    }
}
