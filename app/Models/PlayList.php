<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PlayList extends Model
{
    //use HasFactory;
    
    protected $table = 'playlists';
    
    protected $fillable = ['nom','user_id','logo_img'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function listSong() {
        return $this->hasOne(ListSong::class);
    }
}


