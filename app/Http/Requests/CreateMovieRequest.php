<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMovieRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'director' => 'required|string|max:255',
            'release_year' => 'required|unsignedInteger|max:255',
            'zaplet' => 'required|string'
        ];
    }
}
