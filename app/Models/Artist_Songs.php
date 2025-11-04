<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artist_Songs extends Model
{
    use HasFactory;

    protected $fillable = ['artist_id', 'Songs_id'];

    public function artist() {
        return $this->belongsToMany(Artist::class);
    }

    public function songs() {
        return $this->belongsToMany(Songs::class);
    }
}
