<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePersonaRequest extends FormRequest
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
            'cPerCodigo' => 'required',
            'cPerApellido'=>'required',
            'cPerNombre'=>'required',
            'cPerDireccion'=>'required',
            'cPerAFecNac'=>'required',
            'cPerEdad'=>'required',
            'cPerSexo'=>'required',
            'cPerSueldo'=>'required',
            'cPerEstado'=>'required',
            'cPerRnd'=>'required',
           
            //
        ];
    }

    public function messages()
    {
        return[
           
            
        ];
    }
}
