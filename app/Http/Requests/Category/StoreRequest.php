<?php

namespace App\Http\Requests\Category;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        // Aquí se puede verificar si el usuario tiene permisos
        return true; //Para que acepte la petición
    }

    public function rules(): array
    {
        return [
            'title' => 'required|min:5|max:500',
            'slug' => 'required|min:3|max:500|unique:categories', //valida que no se repitan valaros
        ];
    }
}
