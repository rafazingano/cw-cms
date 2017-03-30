<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeadRule extends Model {

    protected $fillable = [
        'title', 'slug', 'description', 'lead_key', 'lead_value'
    ];

    public function users() {
        return $this->belongsToMany(\App\User::class);
    }
    
    public function leads() {
        return $this->belongsToMany(\App\Lead::class);
    }

}
