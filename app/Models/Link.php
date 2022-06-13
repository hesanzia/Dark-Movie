<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;
    protected $table = "links";
    protected $fillable = [
        'id','name', 'link', 'serial_id'
    ];
    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function serial()
    {
        return $this->belongsTo('App\Models\Serial','serial_id', 'id')->first();
    }
}
