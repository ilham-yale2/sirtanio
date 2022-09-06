<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opimage extends Model
{
    use HasFactory;
    protected $table = 'opimage';
    protected $guarded = ['id'];
}
