<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{

    protected $table = 'team';

    public function rosters(){
        return $this->hasMany(Roster::class, 'team_code', 'code')->get();
    }
}
