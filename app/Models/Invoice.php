<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $primaryKey = 'invoiceNum';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'invoiceNum', 'orderId', 'invoiceDate', 'paymentDate', 'paymentMethod'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'orderId', 'orderId');
    }
}
