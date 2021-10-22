<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function candidatures()
    {
        return $this->hasMany(Candidature::class, 'formation_id', 'id');
    }

    // get laboratoire of etablissement
    public function laboratoires()
    {
        return $this->hasMany(Laboratoire::class);
    }

    /**
     * Get all of the professeurs for the etablissement.
     */
    public function professeurs()
    {
        return $this->hasManyThrough(Professeur::class, Laboratoire::class);
    }
}
