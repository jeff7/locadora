<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMarcaRequest extends FormRequest
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
            'nome' => 'required|unique:marcas,nome'.$this->id.'|min:3',
            'imagem' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Campo obrigatório',
            'nome.unique' => 'Nome já existente',
            'nome.min' => 'Minimo de 3 chars'
        ];
    }
}
