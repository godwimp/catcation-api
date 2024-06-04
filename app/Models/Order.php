<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'orderId';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'orderId', 'ownerId', 'emplId', 'serviceId', 'cartId', 'totalPrice', 'startDate', 'finishDate', 'orderStatus'
    ];

    public function invoice()
    {
        return $this->hasOne(Invoice::class, 'orderId', 'orderId');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'serviceId', 'serviceId');
    }

    public function cart()
    {
        return $this->belongsTo(Cart::class, 'cartId', 'cartId');
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'ownerId', 'userId');
    }

    public function employee()
    {
        return $this->belongsTo(User::class, 'emplId', 'userId');
    }
}
