<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class añadirasigproFormRequest extends FormRequest
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
            'txtidentificacion' => 'required',
            'txtnombre' => 'required',
            'txtasigcur' => 'required',
            'txtasiggrup' => 'required',
            
        ];
    }

    public function messages()
    {
        return [
            
            'txtcodigo' => 'El campo id esta vacio',
            'txtidentificacion' => 'El campo identificacion esta vacio',
            'txtnombre' => 'El campo rnombre esta vacio',
            'txtasigcur' => 'El campo asignacion curso esta vacio',
            'txtasiggrup' => 'El campo asignacion grupo esta vacio',
        ];
    }
}
