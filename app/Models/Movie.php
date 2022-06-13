<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;



class Movie extends Model
{
    use HasFactory, Commentable;

    protected $table = "movies";
    protected $fillable = [
        'id', 'name','pic','background','score', 'genre', 'quality', 'year', 'description', 'link', 'director_id'
    ];
    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function director()
    {
        return $this->belongsTo('App\Models\Director','director_id', 'id')->first();
    }

    public function artists()
    {
        return $this->belongsToMany('App\Models\Artist','artist_movie','movie_id','artist_id');
    }

    public function billboard()
    {
        return $this->hasOne(Movie::class);
    }
}
