<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'type_id',
        'user_id',
        'title', 
        'slug', 
        'content',
        'order',
        'status'
    ];
    
    public function type()
    {
        return $this->belongsTo('App\Type');
    }
    
    public function options() {
        return $this->belongsToMany('App\Option')->withPivot('value');
    }

}
