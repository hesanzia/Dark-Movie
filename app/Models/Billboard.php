<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billboard extends Model
{
    use HasFactory;
    protected $table = "billboards";

    protected $fillable = [
        'id','movie_id'
    ];
    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

}
