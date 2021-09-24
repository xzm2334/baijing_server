<?php

namespace App\Http\Requests\Server;

use Illuminate\Foundation\Http\FormRequest;

class
AuthRequest extends FormRequest
{
    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'user' => 'required|string',
            'password' => 'required|string'
        ];
    }
}
