<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreInviteRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name'     => [
                'string',
                'min:3',
                'max:50',
                'required',
            ],
            'email'    => [
                'required',
                'unique:users',
            ],  
            'password',     
        ];
    }

    public function authorize()
    {
       return true;
    }
}