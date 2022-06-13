<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;

class Serial extends Model
{
    use HasFactory, Commentable;

    protected $table = "serials";
    protected $fillable = [
        'id', 'name','pic','background','score', 'genre', 'description', 'channel_id'
    ];
    protected $hidden = [
        'created_at', 'updated_at'
    ];
    public function channel()
    {
        return $this->belongsTo('App\Models\Channel','channel_id', 'id')->first();
    }

    public function links()
    {
        return $this->hasMany('App\Models\Link', 'serial_id', 'id')->get();
    }


    public function artists()
    {
        return $this->belongsToMany('App\Models\Artist','artist_serial','serial_id','artist_id');
    }

}
