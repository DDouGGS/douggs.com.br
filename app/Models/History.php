<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    // tabela
    protected $table = 'histories';

    // chave primária
    protected $primaryKey = 'history_id';

    // preenchivel
    protected $fillable = [
        'user_id',
        'content',
        'paragraph',
        'chapter',
        'book',
        'active'
    ];
}
