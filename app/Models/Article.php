<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $primaryKey = 'articleId';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'articleId', 'uploaderId', 'articleTitle', 'content', 'uploadDate'
    ];

    public function uploader()
    {
        return $this->belongsTo(User::class, 'uploaderId', 'userId');
    }
}
