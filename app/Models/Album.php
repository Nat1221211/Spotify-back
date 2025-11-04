<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Album extends Model
{
    use HasFactory;

    protected $table = 'albums';

    protected $fillable = ['nom','quantitat','data','logo_img'];

    public function artists() {
        return $this->belongsToMany(Artist::class);
    }

    public function songs() {
        return $this->hasOne(Song::class);
    }
}
