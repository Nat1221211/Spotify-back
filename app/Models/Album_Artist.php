<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Album_Artist extends Model
{
   use HasFactory;

    protected $fillable = ['id_artista', 'id_album'];
}
