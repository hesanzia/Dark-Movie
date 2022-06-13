<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $table = "permissions";
    protected $fillable = [
        'name',
    ];
    protected $hidden = [
        'created_at', 'updated_at'
    ];

    public function roles()
    {
        return $this->belongsToMany('App\Models\Role','permission_role','role_id','permission_id');
    }
}
