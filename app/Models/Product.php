<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';


    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
