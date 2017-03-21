<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    public function leads() {
        return $this->belongsToMany(\App\Lead::class);
    }
}
