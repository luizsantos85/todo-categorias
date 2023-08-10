<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Request;

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

        $isLoginPage = Request::is('login');

        $rules = [
            'email' => "required|email",
            'password' => 'required'
        ];

        if(!$isLoginPage){
            // $rules['email'] = "required|email|unique:users,email,{$id},id";
            $rules['email'] = "required|email|unique:users";
            $rules['name'] = 'required';
            $rules['password'] = 'required|min:5|confirmed';
        }

        return $rules;

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
