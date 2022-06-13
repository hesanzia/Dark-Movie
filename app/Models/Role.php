<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = "roles";
    protected $fillable = [
        'title'
    ];
    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function users()
    {
        return $this->belongsToMany('App\Models\User','role_user','role_id','user_id');
    }

    public function permissions()
    {
        return $this->belongsToMany('App\Models\Permission','permission_role','permission_id','role_id');
    }
}
