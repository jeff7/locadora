<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateModeloRequest extends FormRequest
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
            'nome' => 'required|min:3',
            'imagem' => 'required|min:3',
            'numero_portas' => 'required|integer|min:2',
            'lugares' => 'required|integer|min:2',
            'air_bag' => 'required|boolean',
            'abs' => 'required|boolean',
            'marca_id' => 'required|min:0|integer',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Campo obrigatório',
            'min' => 'Minimo de 2'
        ];
    }
}
