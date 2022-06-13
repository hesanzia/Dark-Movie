<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreDirectorRequest extends FormRequest
{

    public function rules()
    {
        return [
            'name'     => [
                'required',
            ],
            'age' => [
                'string',
            ],
            'gender' => [
                'string',
            ],
            'nationality' => [
                'string',
            ],
            'pic' => [
                'string',
            ],
            'profile' => [
                'string',
            ],
            'about' =>[
                'string',
                'required',
            ],
            'ddate' =>[
                'string',
                'required',
            ],
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'نام وارد نشده است!',
            'age.string' => 'سن وارد نشده است!',
            'gender.string' => 'جنسیت را انتخاب کنید!',
            'nationality.string' => 'ملیت را انتخاب کنید!',
            'pic.string' => 'محل عکس را وارد کنید!',
            'profile.string' => 'محل عکس پروفایل را وارد کنید!',
            'about.string' => 'متنی درباره کارگردان وارد کنید!',
            'ddate.string' => 'متنی درباره کارگردان وارد کنید!',
        ];
    }
    public function authorize()
    {
        return Gate::allows('admin');
    }


}
