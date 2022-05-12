<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = ['team_id', 'name'];
    public $timestamps = false;

    public function team()
    {
        return $this->belongsTo('App\Models\Team');
    }
}
