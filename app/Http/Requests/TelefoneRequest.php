<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TelefoneRequest extends FormRequest
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
            'titulo.required' => 'Preencha um valor para o Titulo do Telefone',
            'titulo.max' => 'Ninguem tem um titulo tão grande',
            
            'telefone.required' => 'Preencha um valor para o telefone',
            
        ];
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
            'titulo'=>'required|max:200',
            'telefone' => 'required',
            
        ];
    }
}
