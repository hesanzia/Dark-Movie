<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    use HasFactory;
    protected $table = "channels";
    protected $fillable = [
        'id', 'name'
    ];
    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function series()
    {
        return $this->hasMany('App\Models\Serial', 'channel_id', 'id')->get();
    }
}
