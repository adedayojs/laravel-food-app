<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealRequest extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'price', 'user', 'location', 'number', 'phone'];
}
