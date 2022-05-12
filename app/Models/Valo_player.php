<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valo_player extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function team()
    {
        return $this->belongsTo(Valo_team::class, 'team_id');
    }
}
