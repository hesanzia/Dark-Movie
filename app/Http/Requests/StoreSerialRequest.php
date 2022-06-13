<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreSerialRequest extends FormRequest
{

    public function rules()
    {
        return [
            'name'     => [

                'required',
            ],
            'pic' => [
                'string',
            ],
            'background' => [
                'string',
            ],
            'score' => [
                'string',
            ],
            'channel_id' => [

                'required',
            ],
            'genre'    => [

                'required',
            ],
            'description' => [

                'required',
            ],
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'نام وارد نشده است!',
            'pic.string' => 'محل عکس را وارد کنید!',
            'background.string' => 'محل عکس پس زمینه را مشخص کنید!',
            'score.string' => 'امتیاز فیلم را وارد کنید!',
            'channel_id.required' => 'نام کارگردان را انتخاب کنید!',
            'genre.required' => 'ژانر فیلم را انتخاب کنید!',
            'description.required' => 'خلاصه داستان را وارد کنید!',

        ];
    }

    public function authorize()
    {
        return Gate::allows('admin');
    }
}
