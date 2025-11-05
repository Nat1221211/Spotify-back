<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artist extends Model
{
    use HasFactory;

    protected $table = 'artists';

    protected $fillable = ['nom_artistic','nacionalitat','language_id','data_naixement','seguidors','logo_img'];
    
    public function languages() {
        return $this->belongsTo(Language::class);
    }

    public function albums() {
        return $this->belongsToMany(Artist::class, 'album_artists', 'album_id', 'artist_id');

    }

    public function language() {
        return $this->belongsToMany(Artist::class, 'language_id');

    }

}
