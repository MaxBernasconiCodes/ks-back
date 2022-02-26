<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    use HasFactory;

    protected $guarded = []; //TODO: remove empty guarded and config fillables


    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function dentists()
    {
        return $this->belongsToMany(Dentist::class);
    }

}
