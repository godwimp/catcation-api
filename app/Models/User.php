<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use HasFactory;
    protected $primaryKey = 'userId';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'userId',
        'userName',
        'password',
        'fullName',
        'role'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class, 'ownerId', 'userId');
    }
    public function carts()
    {
        return $this->hasMany(Cart::class, 'ownerId', 'userId');
    }
    public function articles()
    {
        return $this->hasMany(Article::class, 'uploaderId', 'userId');
    }
    public function sentMessages()
    {
        return $this->hasMany(Message::class, 'senderId', 'userId');
    }
    public function receivedMessages()
    {
        return $this->hasMany(Message::class, 'recvId', 'userId');
    }
}
