<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'name_person' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'pasport' => 'required',
            'login' => 'required',
            'password' => 'required',
        ];
    }
     /**
     * Получить сообщения об ошибках для определенных правил валидации.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name_person.required' => 'Поле ФИО обязательна для заполнения',
            'email.required' => 'Поле email обязательна для заполнения',
            'phone.required' => 'Поле телефон обязательна для заполнения',
            'pasport.required' => 'Поле паспорт обязательна для заполнения',
            'login.required' => 'Поле login обязательна для заполнения',
            'password.required' => 'Поле пароль обязательна для заполнения',
        ];
    }
}
