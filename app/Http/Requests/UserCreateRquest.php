<?php

namespace cv\Http\Requests;

use cv\Http\Requests\Request;

class UserCreateRquest extends Request
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
            'name'=>'required',
            'email'=>'required',
            'password'=>'required|unique:users',
            'sw_activo'=>'required',
            ];
    }
}
