<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = [
        'label', 'name', 'field_id', 'description'
    ];
     public function field()
    {
        return $this->belongsTo('App\Field');
    }
    
}
