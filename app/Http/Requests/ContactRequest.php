<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'postcode' => 'required|regex:/^\d{3}\-\d{4}$/',
            'address' => 'required|string|max:255',
            'building_name' => 'nullable|string|max:255',
            'opinion' => 'required|string|max:120',
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'fullname.required' => 'お名前は必須です。',
            'email.required' => 'メールアドレスは必須です。',
            'email.email' => 'メールアドレスの形式が正しくありません。',
            'postcode.required' => '郵便番号は必須です。',
            'postcode.regex' => '郵便番号の形式が正しくありません。',
            'address.required' => '住所は必須です。',
            'opinion.required' => 'ご意見は必須です。',
            'opinion.max' => 'ご意見は:max文字以内で入力してください。',
        ];
    }
}