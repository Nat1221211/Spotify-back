<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artist_Songs extends Model
{
    use HasFactory;

    protected $fillable = ['Artist_id', 'Songs_id'];

    public function Artist() {
        return $this->belongsToMany(Artist::class);
    }

    public function Songs() {
        return $this->belongsToMany(Songs::class);
    }
}
