<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valo_team extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function player()
    {
        return $this->hasMany(Valo_player::class, 'team_id');
    }
}
