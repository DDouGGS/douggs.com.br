<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_service extends Model
{
    use HasFactory;

    // tabela
    protected $table = 'users_services';

    // chave primária
    protected $primaryKey = 'user_service_id';

    // preenchivel
    protected $fillable = [
        'user_id',
        'service_id',
        'active'
    ];
}
