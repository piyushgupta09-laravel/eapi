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

    public function drate()
    {
        return $this->discount;
    }

    public function damt()
    {
        return round($this->price * ($this->discount / 100), 2);
    }

    public function bprice()
    {
        return $this->price;
    }

    public function fprice()
    {
        return round((1 - ($this->discount / 100)) * $this->price, 2);
    }

    public function inventory()
    {
        return $this->stock == 0 ? 'Out of Stock' : $this->stock;
    }

    public function ratings()
    {
        return $this->reviews->count() > 0 ? round($this->reviews->sum('star') / $this->reviews->count(), 2) : 'No rating available';
    }
}
