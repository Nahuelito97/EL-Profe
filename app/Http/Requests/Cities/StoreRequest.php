<?php

namespace App\Http\Requests\Cities;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|max:30',
            'cod_post' => 'required|max:4',
            'provincies_id' => 'required',
        ];
    }
    public function messages()
    {
        return[
            'name.required'=>'Este Nombre es requerido.',
            'name.string'=>'El valor no es correcto.',
            'name.max'=>'Solo se permite 20 caracteres.',
            'cod_post.required' => 'Este código postal es requerido.',
            'provincies_id.required' => 'La provincia es requerido.',
        ];
    }
}
