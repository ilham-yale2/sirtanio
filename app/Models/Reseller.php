<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reseller extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = ['full_name', 'phone_number', 'shipping_address'];
}
