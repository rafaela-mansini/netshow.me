<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SalvarPessoaRequest extends FormRequest
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
            'nome'      => 'required',
            'telefone'  => 'required|max:15|regex:^\(\d{2}\)\s\d{4,5}\-\d{4}^',
            'email'     => 'required|email',
            'mensagem'  => 'required',
            'arquivo'   => 'required',
        ];
    }
    
    public function messages()
    {
        return [
            'nome.required'      => 'O nome precisa ser informado.',
            'telefone.required'  => 'O telefone precisa ser informado.',
            'telefone.regex'     => 'Formato de telefone válido: (99) 9999-9999.',
            'telefone.max'       => 'Formato de telefone válido: (99) 9999-9999.',
            'email.required'     => 'O e-mail precisa ser informado.',
            'email.email'        => 'O e-mail não possui um formato válido.',
            'mensagem.required'  => 'A mensagem precisa ser preenchida.',
            'arquivo.required'   => 'O anexo precisa ser enviado.',
        ];
    }
}
