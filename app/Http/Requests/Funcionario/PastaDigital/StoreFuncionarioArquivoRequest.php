<?php

namespace App\Http\Requests\Funcionario\PastaDigital;

use Illuminate\Foundation\Http\FormRequest;

class StoreFuncionarioArquivoRequest extends FormRequest
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
            'descricao' => 'required|max:500',
            'observacao' => 'nullable|max:500',
            'arquivo' => 'required|max:10240|mimes:doc,docx,jpg,jpeg,png,pdf'
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
            'descricao' => 'Descrição',
            'observacao' => 'Observação',
            'arquivo' => 'Arquivo'
        ];
    }
}
