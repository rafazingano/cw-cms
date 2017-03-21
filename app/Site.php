<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    
    protected $fillable = [
        'title', 'theme_id'
    ];
    
    public function theme()
    {
        return $this->belongsTo('App\Theme');
    }
}
