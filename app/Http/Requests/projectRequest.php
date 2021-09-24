<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class projectRequest extends FormRequest
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
            'name'=>'required|max:255',
            'image_uil'=>'required|max:1024',
            'video_uil'=>'required|max:1024',
            'data'=>'required|max:255',
            'hot'=>'required|max:2',
            'cycle'=>'required|max:255',
            'company'=>'required|max:255',
            'money'=>'required|max:255',
            'particulars'=>'required',
            'show'=>'required',
            'categories_id'=>'required|max:10'
        ];
    }
}
