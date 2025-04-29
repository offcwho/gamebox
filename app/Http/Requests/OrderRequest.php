<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'form.name' => 'required|string|max:255',
            'form.surname' => 'required|string|max:255',
            'form.lastname' => 'required|string|max:255',
            'form.phone' => 'required|string|max:255',
            'form.index' => 'required|string|max:255',
        ];
    }
    public function messages(): array
    {
        return [
            'form.name.required' => 'Укажите имя',
            'form.name.max' => 'Поле имя не должно превышать 255 симв.',
            'form.surname.required' => 'Укажите имя',
            'form.surname.max' => 'Поле имя не должно превышать 255 симв.',
            'form.lastname.required' => 'Укажите имя',
            'form.lastname.max' => 'Поле имя не должно превышать 255 симв.',
            'form.phone.required' => 'Укажите почту',
            'form.phone.max' => 'Почта должна быть менее 11 симв.',
            'form.index.required' => 'Индекс должен быть 6 симв.'
        ];
    }
}
