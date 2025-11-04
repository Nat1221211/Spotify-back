<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AlbumArtist extends Model
{
   use HasFactory;

    protected $fillable = ['artist_id', 'album_id'];

    public function artist() {
        return $this->belongsToMany(Artist::class);
    }

    public function albums() {
        return $this->belongsToMany(Albums::class);
    }
}
