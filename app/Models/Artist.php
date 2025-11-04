<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = ['nom_artistic','nacionalitat','Languages_id','data_naixement','seguidors','logo_img'];
    
    public function languages() {
        return $this->belongsTo(Languages::class);
    }

    public function album_artist() {
        return $this->hasOne(Album_Artist::class);
    }

    public function artist_Songs() {
        return $this->hasOne(Artist_Songs::class);
    }
}
