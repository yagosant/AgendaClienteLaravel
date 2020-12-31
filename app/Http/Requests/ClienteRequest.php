<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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

    public function messages()
    {
        return [
            'nome.required' => 'Preencha um valor para o nome',
            'nome.max' => 'Ninguem tem um nome tão grande',
            
            'email.required' => 'Preencha um valor para o email',
            'email.max' => 'Ninguem tem um email tão grande',
            'email.email' => 'Informe um e-mail válido',

            'endereco.required' => 'Preencha um valor para o endereço',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        
    }
}
