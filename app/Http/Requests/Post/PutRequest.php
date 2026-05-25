<?php

namespace App\Http\Requests\Post;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class PutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Aquí se puede verificar si el usuario tiene permisos
        return true; //Para que acepte la petición
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:5|max:500',
            // 'slug' => 'required|min:3|max:500|unique:posts', // Se puede no pasar esta columna
            'slug' => 'required|min:3|max:500|unique:posts,slug,'.$this->route('post')->id, // Para poder editar y que la propiedad "unique" no choque consigo mismo
            'content' => 'required|min:10',
            'category_id' => 'required|integer',
            'description' => 'required|min:10',
            'posted' => 'required',
            'image' => 'mimes:jpeg,jpg,png|max:1024',
        ];
    }
}
