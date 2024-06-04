<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $primaryKey = 'msgId';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'msgId', 'senderId', 'recvId', 'msg', 'sentTime', 'recvTime'
    ];

    public function sender()
    {
        return $this->belongsTo(User::class, 'senderId', 'userId');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, 'recvId', 'userId');
    }
}
