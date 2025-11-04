<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artist extends Model
{
    use HasFactory;

    protected $table = 'artists';

    protected $fillable = ['nom_artistic','nacionalitat','Languages_id','data_naixement','seguidors','logo_img'];
    
    public function languages() {
        return $this->belongsTo(Languages::class);
    }

    public function albums() {
        return $this->belongsToMany(Artist::class, 'album_artists', 'album_id', 'artist_id');

    }

    public function artist_Songs() {
        return $this->belongsToMany(Artist_Songs::class);
    }
}
