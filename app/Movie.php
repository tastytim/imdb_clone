<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['id','title','description','year','poster','duration','trailer_url','pegi_id'];
}
