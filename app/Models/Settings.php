<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $fillable=['short_des','description','photo','address','phone','email','facebook','instagram','linkedin','logo','facebook2','instagram2'];
}
