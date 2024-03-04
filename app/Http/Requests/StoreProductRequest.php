<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function attributes(): array
    {
        return [
            'name' => 'nomi',
            'price' => 'narxi',
            'count' => 'soni',
            'unit' => 'birlik',
            'photo' => 'image',
        ];
    }

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
            'name' => 'required|max:255',
            'price' => 'required',
            'count' => 'required',
            'unit' => 'required',
            'photo' => 'image',
        ];
    }
}
