<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ArtistSong extends Model
{
    use HasFactory;

    protected $fillable = ['artist_id', 'songs_id'];

    public function artist() {
        return $this->belongsToMany(Artist::class);
    }

    public function songs() {
        return $this->belongsToMany(Song::class);
    }
}
