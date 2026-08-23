<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    // tabela
    protected $table = 'services';

    // chave primária
    protected $primaryKey = 'service_id';

    // preenchivel
    protected $fillable = [
        'service_code',
        'group',
        'description',
        'active'
    ];
}
