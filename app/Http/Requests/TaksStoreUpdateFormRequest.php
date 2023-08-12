<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaksStoreUpdateFormRequest extends FormRequest
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
        $rules = [
            'title' => 'required|max:255',
            'due_date' => 'required|date_format:Y-m-d\TH:i',
            'description' => 'required',
            'category_id' => 'required',
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            'title.required' => 'O campo título é obrigatório.',
            'title.max' => 'O campo título deve ter no máximo 255 caracteres.',
            'due_date.required' => 'O campo data de realização é obrigatório.',
            'due_date.date_format' => 'O campo data de realização deve estar no formato Y-m-d\TH:i.',
            'description.required' => 'O campo descrição é obrigatório.',
            'category_id.required' => 'O campo categoria é obrigatório.',
        ];
    }
}
