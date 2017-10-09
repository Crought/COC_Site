<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scenario extends Model
{
    protected $fillable = ['title', 'description', 'player_number', 'playing_time',
        'keeper_technique', 'player_technique', 'scenario_tag_id', 'scenario', 'contributor',
        'created_at', 'updated_at'];
}
