<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galerie extends Model
{
    protected $table = 'galerie';
    protected $fillable = [
        'photo', 'category_id',
    ];

    public function category(){
        return $this->belongsto('App\Models\Category');
    }
}
