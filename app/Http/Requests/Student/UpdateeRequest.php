<?php

namespace App\Http\Requests\Student;

use Illuminate\Foundation\Http\FormRequest;

class UpdateeRequest extends FormRequest
{
    public function rules()
    {
        return [

            'phone'=>'string|nullable|unique:students,phone,'.$this->route('studentss')->id.'|min:13|max:13',
            'email'=>'string|required|email',
        ];
    }

    public function messages()
    {
        return[
            'phone.string'=>'El valor no es correcto.',
            'phone.unique'=>'El número de celular ya se encuentra registrado.',
            'phone.min'=>'Se requiere de 13 caracteres.',
            'phone.max'=>'Solo se permite 13 caracteres.',

            'email.string'=>'El valor no es correcto.',
            'email.unique'=>'La dirección de correo electrónico ya se encuentra registrada.',
            'email.max'=>'Solo se permite 255 caracteres.',
            'email.email'=>'No es un correo electrónico.',
        ];
    }
}
