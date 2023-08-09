<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreUpdateFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        // $id = $this->segment(3);
        // $id = Request::get('id');

        return [
            'name' => 'required',
            // 'email' => "required|email|unique:users,email,{$id},id",
            'email' => "required|email|unique:users",
            'password' => 'required|min:5|confirmed'
        ];

    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome é obrigatório.',
            'email.required' => 'O campo email é obrigatório.',
            'email.unique' => 'O e-mail já está em uso.',
            'password.required' => 'O campo senha é obrigatório.',
            'password.min' => 'O senha deve conter pelo menos 5 caracteres.',
            'password.confirmed' => 'A confirmação de senha não corresponde.',
        ];
    }
}
