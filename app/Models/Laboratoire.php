<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratoire extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function etablissement()
    {
        return $this->belongsTo(Etablissement::class, 'etablissement_id');
    }
    public function formation()
    {
        return $this->belongsTo(Formation::class, 'formation_id');
    }

    public function professeur()
    {
        return $this->hasOne(Professeur::class);
    }
}
