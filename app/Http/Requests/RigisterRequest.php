<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RigisterRequest extends FormRequest
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
     *REQUEST REGISTER
     * 
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'                      => 'required',
            'email'                     => 'required|unique:admins',
            'password'                  => 'required|min:8',
            'confirm_password'          => 'required|same:password'
        ];
    }
    public function messages()
    {
        return [
            'name.required'              => 'Không được để trống',
            'email.required'             => 'Không được để trống',
            'email.unique'               => 'Tài khoản đã tồn tại',
            'password.required'          => 'Không được để trống',
            'password.min'               => 'Mật khẩu tối thiểu 8 kí tự',
            'confirm_password.required'  => 'Không được để trống',
            'confirm_password.same'      => 'Mật khẩu phải trùng nhau',
        ];
    }
}
