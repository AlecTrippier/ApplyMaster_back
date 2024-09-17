<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    // マスアサインメント可能なカラムを定義
    protected $fillable = ['name', 'description'];
}
