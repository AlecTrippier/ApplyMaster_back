<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientProject extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_name',
        'project_name',
        'status',
        'start_date',
        'end_date',
        'budget',
    ];
}
