<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait ModelAttributes
{
    // This method will be called every time title attribute of model is being set,
    // and slug will be created and accordingly.
    public function setTitleAttribute($title)
    {
        $this->attributes['title'] = $title;
        $this->attributes['slug'] = Str::slug($title);
    }
}
