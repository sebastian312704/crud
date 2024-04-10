<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class añadirEstFormRequest extends FormRequest
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

            'txtcodigo' => 'required',
            'txtnombre' => 'required',
            'txtrol' => 'required',
            'txtusuario' => 'required',
            'txtidentificacion' => 'required',
            'txtprograma' => 'required',
            'txtemail' => 'required',
        ];
    }

    public function messages()
    {
        return [
            
            'txtcodigo' => 'El campo id esta vacio',
            'txtnombre' => 'El campo nombre esta vacio',
            'txtrol' => 'El campo rol esta vacio',
            'txtusuario' => 'El campo usuario esta vacio',
            'txtidentificacion' => 'El campo identificacion esta vacio',
            'txtprograma' => 'El campo programa esta vacio',
            'txtemail' => 'El campo email esta vacio',
        ];
    }
}
