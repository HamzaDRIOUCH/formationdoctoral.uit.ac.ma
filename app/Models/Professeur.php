<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professeur extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function laboratoire()
    {
        return $this->belongsTo(Laboratoire::class)->withDefault();
    }
    public function formation()
    {
        return $this->belongsTo(Formation::class)->withDefault();
    }
}
