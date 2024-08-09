<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_meta extends Model
{
    use HasFactory;

    protected $table = 'users_meta';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsto(User::class);
    }
    public function country()
    {
        return $this->belongsto(Country::class, 'nation_id');
    }
}