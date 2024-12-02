<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'shop_name' => ['required'],
            'city' => ['required'],
            'genre' => ['required'],
            'shop_overview' => ['required']
        ];
    }

    public function messages()
    {
        return [
            'shop_name.required' => '店舗名を入力してください',
            'city.required' => '都道府県を選択してください',
            'genre.required' => '飲食店種類を選択してください',
            'shop_overview.required' => '店舗概要を入力してください',
        ];
    }
}
