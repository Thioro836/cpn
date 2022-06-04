<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgentSanteRequest extends FormRequest
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
            'nom' =>'required',
            'prenom' =>'required',
            'adresse' =>'required',
            'email' => 'required|email|unique:agent_sante',
            'telephone' =>'required|unique:agent_sante|phone:GN',
            'qualification' =>'required',
        

        ];
    }
}
