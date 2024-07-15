<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLocacaoRequest extends FormRequest
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
            'cliente_id' => 'required|integer|min:0|exists:clientes,id',
            'carro_id' => 'required|integer|min:0|exists:carros,id',
            'data_inicio_periodo' => 'required',
            'data_final_previsto_periodo' => 'required',
            'valor_diaria' => 'required|min:0',
            'km_inicial' => 'required',
            'km_final' => 'integer',
        ];
    }

    public function messages() 
    {
        return [
            'required' => 'Campo obrigatorio',
            'min:0' => 'Valor deve ser maior que 0',
        ];
    }

}
