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
            'nPerCodigo' => 'required',
            'cPerApellido' => 'required|max:255',
            'cPerNombre' => 'required|max:255',
            'cPerDireccion' => 'required',
            'cPerAFecNac' => 'required|date',
            'cPerEdad' => 'required|numeric',
            'cPerSexo' => 'required|in:M,F', // Ejemplo de validación de opciones
            'cPerSueldo' => 'required|numeric',
            'cPerRnd' => 'required',
            'cPerEstado' => 'required|in:0,1', // Ejemplo de validación de opciones
            'image' => [ $this->route('persona') ? 'nullable' : 'required', 'mimes:jpeg,png'] //restringe solo a jpeg y png
           
            //
        ];
    }

    public function messages()
    {
        return[
           'required' => 'El campo :attribute es obligatorio.',
            'max' => 'El campo :attribute no debe exceder :max caracteres.',
            'numeric' => 'El campo :attribute debe ser numérico.',
            'in' => 'El campo :attribute debe ser :values.',
            'date' => 'El campo :attribute debe ser una fecha válida.',
            'image' => 'Debes seleccionar una image'

            
        ];
    }
}
