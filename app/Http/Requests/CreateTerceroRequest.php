<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CreateTerceroRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        if(Auth::user()->perfil_id == 1){
            return true;
        }
        else {
            return false;
        }

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'identificacion' => 'required|unique:terceros,identificacion',
            'empresa' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
            'celular' => 'required',
            'direccion' => 'required',
            'departamento_id' => 'required',
            'municipio_id' => 'required',
            'email' => 'required',
            'tipo_ducumento_id' => 'required'
        ];
    }
}
