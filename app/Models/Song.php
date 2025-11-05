<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Song extends Model
{
    use HasFactory;

    protected $table = 'songs';
    
    protected $fillable = ['nom','durada','album_id','views','data','genre_id','tipus','logo_img','background_img'];

    public function albums() {
        return $this->belongsTo(Album::class);
    }

    public function genres() {
        return $this->belongsTo(Genre::class);
    }

    public function lists_Songs() {
        return $this->belongsToMany(ListSong::class);
    }

    public function artist_Songs() {
        return $this->belongsToMany(ArtistSong::class);
    }
}
