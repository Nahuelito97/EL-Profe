<?php

namespace App\Http\Requests\Student;

use Illuminate\Foundation\Http\FormRequest;

class UpdateeRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name'=>'string|required|max:255',
            'surnamed'=>'string|required|max:255',
            'dni'=>'string|required|unique:students,dni,'.$this->route('student')->id.'|min:8|max:8',

            'date_of_birth'=>'required|date|date_format:d/m/Y',
            'phone'=>'string|nullable|unique:students,phone,'.$this->route('student')->id.'|min:9|max:9',
            'email'=>'string|nullable|unique:students,email,'.$this->route('student')->id.'|max:255|email:rfc,dns',
            'date_of_address'=>'required|date|date_format:d/m/Y',
        ];
    }

    public function messages()
    {
        return[
            'name.required'=>'Este campo es requerido.',
            'name.string'=>'El valor no es correcto.',
            'name.max'=>'Solo se permite 255 caracteres.',

            'surname.required'=>'Este campo es requerido.',
            'surname.string'=>'El valor no es correcto.',
            'surname.max'=>'Solo se permite 255 caracteres.',


            'dni.string'=>'El valor no es correcto.',
            'dni.required'=>'Este campo es requerido.',
            'dni.unique'=>'Este DNI ya se encuentra registrado.',
            'dni.min'=>'Se requiere de 8 caracteres.',
            'dni.max'=>'Solo se permite 8 caracteres.',

            'date_of_birth.required'=>'La fecha de nacimiento debe de tener el siguiente formato dd/mm/yyyy',

            'phone.string'=>'El valor no es correcto.',
            'phone.unique'=>'El número de celular ya se encuentra registrado.',
            'phone.min'=>'Se requiere de 9 caracteres.',
            'phone.max'=>'Solo se permite 9 caracteres.',

            'email.string'=>'El valor no es correcto.',
            'email.unique'=>'La dirección de correo electrónico ya se encuentra registrada.',
            'email.max'=>'Solo se permite 255 caracteres.',
            'email.email'=>'No es un correo electrónico.',

            'date_of_address.required'=>'La fecha de ingreso debe de tener el siguiente formato dd/mm/yyyy',
        ];
    }
}
