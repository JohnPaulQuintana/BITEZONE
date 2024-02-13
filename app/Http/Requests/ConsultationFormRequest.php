<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConsultationFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'reciever_id' => ['required'],
            'firstname' => ['required'],
            'middlename' => ['nullable'],
            'animal_bite_comments' => ['nullable'],
            'lastname' => ['required'],
            'age' => ['required'],
            'sex' => ['required'],
            'date' => ['required'],
            'dateofbirth' => ['required'],
            'contact' => ['required'],
            'address' => ['required'],
        ];
    }
}
