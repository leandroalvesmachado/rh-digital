<?php

namespace App\Http\Requests\Funcionario\DadoPessoal;

use Illuminate\Foundation\Http\FormRequest;

class StoreEnderecoRequest extends FormRequest
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
            'nome' => 'required|max:255',
            'cep' => 'required|max:9',
            'pais_id' => 'required',
            'estado_id' => 'required',
            'municipio_id' => 'required',
            'bairro' => 'required|max:255',
            'logradouro' => 'required|max:255',
            'numero' => 'required|max:255',
            'complemento' => 'nullable|max:255',
            'ponto_referencia' => 'nullable|max:255',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'nome' => 'Nome',
            'cep' => 'CEP',
            'pais_id' => 'País',
            'estado_id' => 'Estado',
            'municipio_id' => 'Município',
            'bairro' => 'Bairro',
            'logradouro' => 'Logradouro',
            'numero' => 'Número',
            'complemento' => 'Complemento',
            'ponto_referencia' => 'Ponto de Referência',
        ];
    }
}
