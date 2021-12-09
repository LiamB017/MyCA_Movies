<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    //This function tells laravel that a role can have many users
    public function users()
    {
        return $this->belongsToMany('App\Models\Users', 'user_role');
    }
}
