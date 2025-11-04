<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lists extends Model
{
    //use HasFactory;

    protected $fillable = ['nom','User_id','logo_img'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function lists_Songs() {
        return $this->hasOne(Lists_Songs::class);
    }
}


