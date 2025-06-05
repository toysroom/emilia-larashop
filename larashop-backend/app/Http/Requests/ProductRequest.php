<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name" => 'required|min:3|unique:products',
            "price" => 'required|numeric|min:0',
            "category_id" => 'required|integer|exists:categories,id',
            "image" => 'mimes:webp,jpg,png|max:3000',
        ];
    }

    public function messages()
    {
        return [
            "name.required" => 'Il campo nome è obbligatorio',
            "name.min" => 'Il campo nome deve essere di almeno :min caratteri',
            "price.required" => 'Il campo prezzo è obbligatorio',
            "price.numeric" => 'Il campo prezzo deve essere numerico',
            "price.min" => 'Il campo prezzo deve eessere positivo',
            "category_id.required" => 'Il campo categoria è obbligatorio',
            "category_id.exists" => 'La categoria selezionata non esiste',
            "image.mimes" => 'formato non consentito',
            "image.max" => 'immagine troppo grande' // controllare
        ];
    }
}
