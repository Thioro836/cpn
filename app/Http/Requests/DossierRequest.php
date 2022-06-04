<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DossierRequest extends FormRequest
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
            'date_derniere_regle' =>'required',
		'dure_cycle' => 'required',
		'groupe_sanguin' => 'required',
		'taille_patiente' => 'required',
		'dap' => 'required',
        ];
    }
}
