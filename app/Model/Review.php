<?php

namespace App\Model;

use App\Traits\ModelAttributes;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use ModelAttributes;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
