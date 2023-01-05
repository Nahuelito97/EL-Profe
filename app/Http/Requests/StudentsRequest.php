<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'=>'required|max:255',
            'surname'=>'required|max:255',
            'dni'=>'required|unique:students|min:8|max:8',
            'date_of_birth'=>'required|date|before_or_equal:today',
            'phone'=>'bail|required|unique:students|min:13|max:13',
            'email'=>'required||unique:students,email',
            'date_of_address'=>'required|date',
            'pais_id' => 'required',
            'provincies_id' => 'required',
            'loclities_id' => 'required',
            'directions_id' => 'required'

        ];
    }

    public function messages()
    {
        return[
            'name.required'=>'This field is required',
            'name.string'=>'the value is not correct',
            'name.max'=>'only 255 characters allowed',

            'surname.required'=>'This field is required',
            'surname.string'=>'the value is not correct',
            'surname.max'=>'only 255 characters allowed',

            'dni.string'=>'the value is not correct',
            'dni.required'=>'This field is required',
            'dni.unique'=>'this ID is already registered.',
            'dni.min'=>'8 characters are required',
            'dni.max'=>'only 8 characters are required',


            'phone.string'=>'the value is not correct',
            'phone.unique'=>'the phone number is already registered',
            'phone.min'=>'13 characters are required',
            'phone.max'=>'only 13 characters are required',


            'email.string'=>'the value is not correct',
            'email.unique'=>'the email address is already registered',
            'email.max'=>'only 255 characters allowed',
            'email.email'=>'not an email',


            'pais_id.required'=>'This field is required.',
            'provincies_id.required'=>'This field is required.',
            'loclities_id.required'=>'This field is required.',
            'directions_id.required'=>'This field is required.',
        ];
    }
}
