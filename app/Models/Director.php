<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    use HasFactory;

    protected $table = "directors";
    protected $fillable = [
        'id', 'name','age','gender','nationality','pic','profile','about','ddate'
    ];
    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function movies()
    {
        return $this->hasMany('App\Models\Movie', 'director_id', 'id')->get();
    }
}
