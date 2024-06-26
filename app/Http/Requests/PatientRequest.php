<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nom_patient'=>'required',
            'prenom_patient'=>'required',
            'adresse_patient' => 'required',
            'secteur_patient' => 'required',
            'profession_patient'=> 'required',
            'telephone_patient' => 'required|phone:GN',
            'telephone_mari' => 'nullable|phone:GN'
        ];
    }
}
