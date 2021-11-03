<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roster extends Model
{

    protected $table = 'roster';

    public function players() {
        return $this->hasMany(Player::class, 'player_id')->get();
    }

    public function team() {
        return $this->belongsTo(Team::class, 'team_code', 'code')->get();
    }
}
