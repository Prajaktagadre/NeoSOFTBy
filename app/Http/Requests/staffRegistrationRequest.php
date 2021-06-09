<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class staffRegistrationRequest extends FormRequest
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
                "name"         => 'required',
                "user_name"    => 'required',
                "email"        => 'required|email',
                "contact_no"   => 'required|numeric|digits:10',
                "department_id"=> 'required',
                "password"     => 'required',
                "image"        =>'image|mimes:jpeg,png,jpg,gif,svg'
            ];
        
    }
}
