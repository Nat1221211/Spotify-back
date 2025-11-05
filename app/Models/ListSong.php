<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ListSong extends Model
{
    use HasFactory;

    protected $fillable = ['playlist_id', 'song_id'];

    public function list() {
        return $this->belongsToMany(PlayList::class);
    }

    public function songs() {
        return $this->belongsToMany(Song::class);
    }
}
