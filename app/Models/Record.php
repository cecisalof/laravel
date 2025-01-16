<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    //use HasFactory;

    protected $fillable = [
        'title', 'artist', 'release_year', 'status', 'price', 'cover_image'
    ];

    public function genres()
    {
        /* define relación muchos a muchos entre dos modelos. 
        * En este caso, un Record (disco de vinilo) puede pertenecer a varios Genre (géneros musicales) y viceversa.
        */
        return $this->belongsToMany(Genre::class, 'genre_record')->withTimestamps();
    }
}
