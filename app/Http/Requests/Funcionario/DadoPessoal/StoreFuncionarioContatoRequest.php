<?php

namespace App\Http\Requests\Funcionario\DadoPessoal;

use Illuminate\Foundation\Http\FormRequest;

class StoreFuncionarioContatoRequest extends FormRequest
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
            'telefone_residencial' => 'nullable|max:14',
            'telefone_celular' => 'nullable|max:15',
            'email_alternativo' => 'nullable|max:255|email',
            'email_principal' => 'nullable|max:255|email',
            'grau_parentesco' => 'nullable|max:255',
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
            'telefone_residencial' => 'Telefone Residencial',
            'telefone_celular' => 'Celular',
            'email_alternativo' => 'E-mail Alternativo',
            'email_principal' => 'E-mail Principal',
            'grau_parentesco' => 'Grau de Parentesco'
        ];
    }
}
