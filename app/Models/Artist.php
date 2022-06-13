<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;
    protected $table = "artists";
    protected $fillable = [
        'id', 'name','age','gender','nationality','pic','profile','about'
    ];

    public function movies()
    {
        return $this->belongsToMany('App\Models\Movie', 'artist_movie','artist_id','movie_id');
    }

    public function serials()
    {
        return $this->belongsToMany('App\Models\Serial', 'artist_serial','artist_id','serial_id');
    }

}
