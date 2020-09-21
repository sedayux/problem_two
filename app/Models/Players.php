<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    protected $table = 'players';
    public $timestamps = TRUE;

    public function teams(){
        return $this->belongsTo('App\Models\Teams', 'teams_id');
    }
}
