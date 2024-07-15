<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarroRequest extends FormRequest
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
            //
            'modelo_id' => 'integer|required|min:1|exists:modelos,id',
            'placa' => 'required|min:7',
            'disponivel' => 'required|boolean',
            'km' => 'required|integer|min:0
            '
        ];
    }

    public function messages(){
        return [
            'required' => 'Campo obrigatorio é obrigatorio',
            'modelo_id.min' => 'Id do modelo deve ser maior que 1',
            'modelo_id.integer' => 'Id do modelo deve ser um numero inteiro',
            'placa.min' => 'A placa deve ter pelo menos 7 chars',
            'disponivel.boolean' => 'Disponibilidade deve ser um booleano',
            'km.min' => 'Km deve ser maior que 0',
            'km.integer' => 'Km deve ser um numero',
        ];
    }
}
