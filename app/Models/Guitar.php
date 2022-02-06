<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guitar extends Model
{
    protected $fillable = ['name', 'brand', 'year_made'];

    use HasFactory;
}
