<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lists_Songs extends Model
{
    use HasFactory;

    protected $fillable = ['Lists_id', 'Songs_id'];

    public function Lists() {
        return $this->belongsToMany(Lists::class);
    }

    public function Songs() {
        return $this->belongsToMany(Songs::class);
    }
}
