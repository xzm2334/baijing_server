<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class linkmanRequest extends FormRequest
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
           'name'=>'required|string|max:225',
           'qr_image'=>'required|string|max:1024',
           'skill'=>'required|string|max:225',
           'position'=>'required|string|max:225',
           'company'=>'required|string|max:225',
           'phone'=>'required',
        ];
    }
}
