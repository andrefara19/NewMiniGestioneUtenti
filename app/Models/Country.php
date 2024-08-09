<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $table = 'countries';

    protected $fillable = ['name'];

    public function user_meta()
    {
        return $this->hasMany(User_meta::class, 'user_id');
    }
}