<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Undangan extends Model
{
    use HasFactory, HasApiTokens, Notifiable;

    protected $fillable=[
        'user_id',
        'name',
        'waktu',
        'awal',
        'selesai',
        'event',
        'penerima',
        'ruangan',

    ];

    protected $table="pengiriman";
}
