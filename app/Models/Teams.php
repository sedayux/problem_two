<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    protected $table = 'teams';
    public $timestamps = TRUE;

    public function players(){
        return $this->hasMany('App\Models\Players','teams_id','id');
    }
}
