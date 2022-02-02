<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['id','title','description','year','poster','duration','trailer_url'];

    

    
    public function genres(){
        return $this->belongsToMany(Genre::class, 'movie_genre');
    }
    
}
