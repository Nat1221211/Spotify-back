<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ListSong extends Model
{
    use HasFactory;

    protected $fillable = ['lists_id', 'songs_id'];

    public function list() {
        return $this->belongsToMany(List::class);
    }

    public function songs() {
        return $this->belongsToMany(Song::class);
    }
}
