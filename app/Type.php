<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model {

    protected $fillable = [
        'title', 'slug', 'description', 'theme', 'layout', 'view', 'icon', 'status'
    ];

    public function options() {
        return $this->belongsToMany('App\Option')->withPivot('value');
    }
    

    public function posts() {
        return $this->hasMany('App\Post');
    }

}
