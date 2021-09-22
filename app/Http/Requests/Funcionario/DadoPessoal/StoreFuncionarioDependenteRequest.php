<?php

namespace App\Http\Requests\Funcionario\DadoPessoal;

use Illuminate\Foundation\Http\FormRequest;

class StoreFuncionarioDependenteRequest extends FormRequest
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
            'cpf' => 'required|max:14|cpf|unique:funcionarios,cpf,NULL,id,deleted_at,NULL',
            'data_nascimento' => 'required|date_format:d/m/Y',
            'nome' => 'required|max:255',
            'nome_mae' => 'required|max:255'
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
            'cpf' => 'CPF',
            'data_nascimento' => 'Data de Nascimento',
            'nome' => 'Nome',
            'nome_mae' => 'Nome da Mãe'
        ];
    }
}
