<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $fillable = [
        'name','min_value','max_value'
    ];

    protected $with = ['media'];
    
    public function media(){
        return $this->belongsTo('App\Media');
    }
}
