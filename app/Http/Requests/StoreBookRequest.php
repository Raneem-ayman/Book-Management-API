<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'isbn' => 'required|string|unique:books|max:13',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'A title is required',
            'author.required' => 'An author is required',
            'isbn.required' => 'An ISBN is required',
            'isbn.unique' => 'The ISBN must be unique',
        ];
    }

}
