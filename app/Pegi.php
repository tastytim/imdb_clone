<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pegi extends Model
{
    protected $fillable = ['name'];

    public function movies(){
        return $this->belongsTo(Movie::class);
    }
}
