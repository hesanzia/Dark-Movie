<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreBillboardRequest extends FormRequest
{



    public function rules()
    {
        return [
            'movie_id' => [
                'required',
            ],
        ];
    }
    public function messages()
    {
        return [
            'movie_id.required' => 'فیلمی را انتخاب کنید!',
        ];
    }

    public function authorize()
    {
        return Gate::allows('admin');
    }
}
