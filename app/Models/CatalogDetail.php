<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatalogDetail extends Model
{
    use HasFactory;
    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Movie(){
        return $this->belongsTo(Movie::class);
    }

}
