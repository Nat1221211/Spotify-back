<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Album_Artist extends Model
{
   use HasFactory;

    protected $fillable = ['Artist_id', 'Albums_id'];

    public function Artist() {
        return $this->belongsToMany(Artist::class);
    }

    public function Albums() {
        return $this->belongsToMany(Albums::class);
    }
}
