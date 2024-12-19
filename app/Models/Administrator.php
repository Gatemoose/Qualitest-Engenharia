<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Administrator extends Model
{
    use HasFactory;
    
    protected $table = 'administrators';
    protected $fillable = [
        'username',
        'password',
    ];
}
