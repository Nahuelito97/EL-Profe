<?php

namespace App\Http\Requests\Provincia;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class StoreRequest extends FormRequest
{   
    public function authorize()
    {
        return true;
    }

    public function rules()
    {      
        return [
            'name' => 'required|max:30',
            'pais_id' => 'required',                        
        ];
    }

    public function messages()
    {
        return[
            'name.required'=>'Este Nombre es requerido.',
            'name.string'=>'El valor no es correcto.',
            'name.max'=>'Solo se permite 20 caracteres.',
            'pais_id.required' => 'El Pais es requerido.',
        ];
    }
}
