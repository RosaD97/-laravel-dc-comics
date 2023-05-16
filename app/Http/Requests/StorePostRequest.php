<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

            'title' => 'nullable|max:255',
            'description' => 'required',
            'thumb' => 'required|url',
            'price' => 'required',
            'series' => 'required',
            'sale_date' => 'required|date',
            'type' => 'required',
            'artists' => 'required',
            'writers' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'required' => 'il campo è obbligatorio',
            'title.max' => 'il titolo supera la lunghezza massima',
            'date' => 'Campo data non valido',
            'url' => 'Campo URL non valido'
        ];
    }
}

