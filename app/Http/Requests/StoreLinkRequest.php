<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreLinkRequest extends FormRequest
{

    public function rules()
    {
        return [
            'name'      => [
                'required',
            ],
            'link'      => [
                'required',
            ],
            'serial_id'      => [
                'required',
            ],

        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'نام وارد نشده است!',
            'link.string' => 'لینک وارد نشده است!',
            'serial_id.string' => 'سریال را انتخاب کنید!',
        ];
    }

    public function authorize()
    {
        return Gate::allows('admin');
    }
}
