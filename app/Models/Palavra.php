<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Palavra extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'palavra',
        'dica',
    ];
}
