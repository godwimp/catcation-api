<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'serviceId';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'serviceId', 'serviceName', 'servicePrice'
    ];
}
