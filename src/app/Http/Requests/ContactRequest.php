<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            // 必須項目のバリデーションルール
            'surname' => 'required|string|max:255', // 姓
            'name' => 'required|string|max:255',    // 名
            'gender' => 'required|in:1,2,3',        // 性別（1:男性, 2:女性, 3:その他）
            'email' => 'required|email|max:255',    // メールアドレス
            'phone' => 'required|digits_between:10,11|numeric', // 電話番号（10〜11桁の数字）
            'address' => 'required|string|max:255', // 住所
            'inquiry_type' => 'required|string|max:255', // お問い合わせの種類
            'inquiry_content' => 'required|string|max:120', // お問い合わせ内容（120文字以内）
        ];
    }

    public function messages()
    {
        return [
            'surname.required' => '姓を入力してください',
            'name.required' => '名を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'phone.required' => '電話番号を入力してください',
            'phone.digits_between' => '電話番号は10桁または11桁の数字で入力してください',
            'phone.numeric' => '電話番号は数字で入力してください（ハイフンなし）',
            'address.required' => '住所を入力してください',
            'inquiry_type.required' => 'お問い合わせの種類を選択してください',
            'inquiry_content.required' => 'お問い合わせ内容を入力してください',
            'inquiry_content.max' => 'お問合せ内容は120文字以内で入力してください',
        ];
    }
}



