<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

use App\Models\Estado;

class UpdateEstadoRequest extends FormRequest
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
        $id = $this->route('estado') ? $this->route('estado')->id : '';

        return [
            'nome' => 'required|max:255|unique:estados,nome,'.$id.',id,deleted_at,NULL',
            'sigla' => 'required|max:255',
            'codigo_ibge' => 'nullable|max:255'
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
            'sigla' => 'Sigla',
            'codigo_ibge' => 'Código IBGE'
        ];
    }
}
