<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:products,title|string|max:100',
            'description' => 'required|string|min:100',
            'bprice' => 'required|max:10',
            'drate' => 'sometimes|max:2',
            'stock' => 'required|max:6',
        ];
    }
}
