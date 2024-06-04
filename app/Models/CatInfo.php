<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatInfo extends Model
{
    use HasFactory;

    protected $primaryKey = 'catId';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'catId', 'ownerId', 'catName', 'catBreed', 'birthDate', 'catAllergies', 'catPhoto'
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'ownerId', 'userId');
    }
}
