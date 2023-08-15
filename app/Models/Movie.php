<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    public function CatalogDetail(){
        return $this->hasMany(CatalogDetail::class);
    }

    public function WishlistDetail(){
        return $this->hasMany(WishlistDetail::class);
    }

}
