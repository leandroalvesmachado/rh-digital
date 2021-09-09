<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Admin\CargoDestroy;

class DestroyCargoRequest extends FormRequest
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
        $cargo = $this->route('cargo') ? $this->route('cargo') : '';

        return [
            'id' => ['required', new CargoDestroy]
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
