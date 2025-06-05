<?php

namespace App\Http\Requests;

class StoreProductRequest extends ProductRequest
{

    public function rules(): array
    {
        $rules = parent::rules();
        $rules['name'] = 'required|min:5|unique:products';
        return $rules;
    }

}
