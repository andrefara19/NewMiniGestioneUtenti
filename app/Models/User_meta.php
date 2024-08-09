<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_meta extends Model
{
    use HasFactory;

    protected $table = 'users_meta';

    protected $fillable = ['user_id', 'name', 'surname', 'address', 'postcode', 'city', 'province', 'nation_id'];

    public function user()
    {
        return $this->belongsto(User::class);
    }
    public function country()
    {
        return $this->belongsto(Country::class, 'nation_id');
    }
}