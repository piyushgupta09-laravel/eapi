<?php

namespace App\Model;

use App\Traits\ModelAttributes;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use ModelAttributes;

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
