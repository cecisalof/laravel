<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = ['name'];

    public function records()
    {
        // indica que un Genre puede estar asociado con muchos Records y, viceversa, un Record puede tener muchos Genres.
        return $this->belongsToMany(Record::class);
    }
}
