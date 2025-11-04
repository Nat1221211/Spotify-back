<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Songs extends Model
{
    use HasFactory;

    protected $fillable = ['nom','durada','Albums_id','views','data','Genres_id','tipus','logo_img','background_img'];

    public function Albums() {
        return $this->belongsTo(Albums::class);
    }

    public function Genres() {
        return $this->belongsTo(Genres::class);
    }

    public function lists_Songs() {
        return $this->hasOne(Lists_Songs::class);
    }
}
