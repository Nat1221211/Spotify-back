<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Songs extends Model
{
    use HasFactory;

    protected $fillable = ['nom','durada','id_album','views','data','id_genere','tipus','logo_img','background_img'];
}
