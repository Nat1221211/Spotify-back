<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = ['nom_artistic','nacionalitat','Languages_id','data_naixement','seguidors','logo_img'];
    
    public function Languages() {
        return $this->belongsTo(Languages::class);
    }
}
