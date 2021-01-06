<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable=['title','slug','description','date','title_color','description_color','photo','status'];
}
