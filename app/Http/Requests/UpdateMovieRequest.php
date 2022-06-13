<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdateMovieRequest extends FormRequest
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
            'director_id' => [

                'required',
            ],
            'genre'    => [

                'required',
            ],
            'quality' => [

                'required',
            ],
            'year' => [

                'required',
            ],
            'description' => [

                'required',
            ],
            'link' => [

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
            'director_id.required' => 'نام کارگردان را انتخاب کنید!',
            'genre.required' => 'ژانر فیلم را انتخاب کنید!',
            'quality.required' => 'کیفیت فیلم را انتخاب کنید!',
            'year.required' => 'سال انتشار فیلم را وارد کنید!',
            'description.required' => 'خلاصه داستان را وارد کنید!',
            'link.required' => 'لینک فیلم را وارد کنید!',
        ];
    }
    public function authorize()
    {
        return Gate::allows('admin');
    }
}
