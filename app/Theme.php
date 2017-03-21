<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    protected $fillable = [
        'title', 'slug', 'status'
    ];
    
    public function sites()
    {
        return $this->hasMany('App\Site');
    }
}
