<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{

    protected $table = 'player_totals';

    public function roster() {
        return $this->belongsTo(Roster::class, 'player_id')->get();
    }

    public function team() {
        return $this->roster()->team();
    }
}
