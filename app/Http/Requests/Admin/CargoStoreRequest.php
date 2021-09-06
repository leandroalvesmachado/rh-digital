<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CargoStoreRequest extends FormRequest
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
            'nome' => 'required|max:255|unique:cargos,nome,NULL,id,deleted_at,NULL',
            'cargo_simbolo_id' => 'required',
            'carga_horaria' => 'nullable',
            'descricao' => 'required|max:255'
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
            'carga_horaria' => 'Carga Horária',
            'descricao' => 'Descrição',
            'cargo_simbolo_id' => 'Símbolo'
        ];
    }
}
