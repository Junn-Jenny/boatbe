<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Boat extends Model
{
    use HasFactory;

    public function features(): HasMany 
    {
        return $this->hasMany(BoatFeature::class, "boat_id", "id");

    }
}
