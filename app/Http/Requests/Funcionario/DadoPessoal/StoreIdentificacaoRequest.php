<?php

namespace App\Http\Requests\Funcionario\DadoPessoal;

use Illuminate\Foundation\Http\FormRequest;

class StoreIdentificacaoRequest extends FormRequest
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
            'pais_nascimento_id' => 'required',
            'estado_nascimento_id' => 'required',
            'naturalidade_id' => 'required',
            'nacionalidade_id' => 'required',
            'sexo_id' => 'required',
            'estado_civil_id' => 'required',
            'nome' => 'required|max:255',
            'nome_mae' => 'required|max:255',
            'nome_pai' => 'nullable|max:255',
            'telefone_residencial' => 'nullable',
            'telefone_celular' => 'nullable',
            'email_institucional' => 'required|email|unique:funcionarios,email_institucional,NULL,id,deleted_at,NULL',
            'email_particular' => 'nullable|email',
            'pcd' => 'required',
            'pcd_observacao' => 'nullable|max:500',
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
            'pais_nascimento_id' => 'País de Nascimento',
            'estado_nascimento_id' => 'Estado de Nascimento',
            'naturalidade_id' => 'Naturalidade',
            'nacionalidade_id' => 'Nacionalidade',
            'sexo_id' => 'Sexo',
            'estado_civil_id' => 'Estado Civil',
            'nome' => 'Nome',
            'nome_mae' => 'Nome da Mãe',
            'nome_pai' => 'Nome do Pai',
            'pcd' => 'PCD',
            'telefone_residencial' => 'Telefone Residencial',
            'telefone_celular' => 'Celular',
            'email_institucional' => 'E-mail Institucional',
            'email_particular' => 'E-mail Particular',
        ];
    }
}
