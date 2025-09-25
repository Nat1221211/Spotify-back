<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Albums extends Model
{
    use HasFactory;

    protected $fillable = ['nom','quantitat','data','logo_img'];
}
