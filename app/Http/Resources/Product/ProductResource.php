<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'description' => $this->detail,
            'bprice' => $this->bprice(),
            'drate' => $this->drate(),
            'damt' => $this->damt(),
            'stock' => $this->inventory(),
            'fprice' => $this->fprice(),
            'rating' => $this->ratings(),
            'href' => [
                'reviews' => route('reviews.index', $this->id)
            ]
        ];
    }
}
