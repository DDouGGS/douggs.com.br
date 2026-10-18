<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    // table
    protected $table = 'users';

    // chave primária
    protected $primaryKey = 'user_id';

    // preenchivel
    protected $fillable = [
        'name',
        'document',
        'email',
        'password',
        'ddd',
        'phone',
        'active'
    ];
}
