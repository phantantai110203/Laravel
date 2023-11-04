<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        return [
            'name'=>['required','unique:products', 'max:100'],
            'price'=>['required','numeric', 'integer','min:0'],
            'category'=>['required','exists:categories,id'],
            'desc'=>['required'],
            'image'=>['required','mimes:jpg,png,bmp'],
            //
        ];
    }

    //Sửa câu thông báo

    public function messages()
    {
        return [
            'name.required' => 'Tên sản phẩm không được bỏ trống',
            'name.unique' => 'Tên sản phẩm đã tôn tại',
            'name.max' => 'Teen sản phẩm không quá 100 ký tự'
            
        ];
    }
}