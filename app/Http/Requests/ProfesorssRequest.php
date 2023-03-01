<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfesorssRequest extends FormRequest
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

    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'dni' => 'required|unique:students|min:8|max:8',
            'date_of_birth' => 'required|date|before_or_equal:today',
            'phone' => 'bail|required|unique:students|min:13|max:13',
            'email' => 'required||unique:students,email',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Este campo es requerido.',
            'name.string' => 'El valor no es correcto.',
            'name.max' => 'Solo se permite 255 caracteres.',

            'surname.required' => 'Este campo es requerido.',
            'surname.string' => 'El valor no es correcto.',
            'surname.max' => 'Solo se permite 255 caracteres.',

            'dni.string' => 'El valor no es correcto.',
            'dni.required' => 'Este campo es requerido.',
            'dni.unique' => 'Este DNI ya se encuentra registrado.',
            'dni.min' => 'Se requiere de 8 caracteres.',
            'dni.max' => 'Solo se permite 8 caracteres.',


            'phone.string' => 'El valor no es correcto.',
            'phone.unique' => 'El número de celular ya se encuentra registrado.',
            'phone.min' => 'Se requiere de 9 caracteres.',
            'phone.max' => 'Solo se permite 9 caracteres.',

            'email.string' => 'El valor no es correcto.',
            'email.unique' => 'La dirección de correo electrónico ya se encuentra registrada.',
            'email.max' => 'Solo se permite 255 caracteres.',
            'email.email' => 'No es un correo electrónico.',
        ];
    }
}
