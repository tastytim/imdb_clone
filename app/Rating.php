<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = ['average'];

    public function movies(){
        return $this->belongsToMany(Movie::class);
    }
}
