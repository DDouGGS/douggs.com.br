<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registry extends Model
{
    use HasFactory;

    // tabela
    protected $table = 'registers';

    // chave primária
    protected $primaryKey = 'registry_id';

    // preenchivel
    protected $fillable = [
        'content',
        'paragraph',
        'chapter',
        'book',
        'user_id',
        'active'
    ];
}
