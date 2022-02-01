<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['id','title','description','year','poster','duration','trailer_url','pegi_id'];

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function movies(){
        return $this->belongsToMany(Pegi::class);
    }

    public function ratings(){
        return $this->belongsTo(Rating::class);
    }
    public function genres(){
        return $this->belongsTo(Genre::class);
    }
    
}
