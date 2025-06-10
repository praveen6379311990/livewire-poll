<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    protected $fillable = ['title'];
    public function options(){
        return $this->hasMany(Option::class);
    }

}
