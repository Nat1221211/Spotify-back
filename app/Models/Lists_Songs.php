<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lists_Songs extends Model
{
    use HasFactory;

    protected $fillable = ['nom'];
}
