<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model
{
    use HasFactory;
    protected $guarded = [];

    // get laboratoire of etablissement
    public function laboratoire()
    {
        return $this->hasMany(Laboratoire::class);
    }

    /**
     * Get all of the professeurs for the etablissement.
     */
    public function professeur()
    {
        return $this->hasManyThrough(Professeur::class, Laboratoire::class);
    }
}
