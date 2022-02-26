<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dentist extends Model
{
    use HasFactory;

    protected $guarded = []; //TODO: remove empty guarded and config fillables


    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function treatments()
    {
        return $this->belongsToMany(Treatment::class);
    }
}
