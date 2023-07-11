<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|min:8|same:password'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Nama harus diisi',
            'name.max' => 'Nama maksimal 255 karakter',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email tidak sesuai',
            'email.unique' => 'Email sudah digunakan',
            'username.required' => 'Username harus diisi',
            'username.unique' => 'Username sudah digunakan',
            'username.max' => 'Username maksimal 255 karaker',
            'password.required' => 'Password harus diisi',
            'password.min' => 'Password minimal 8 karaker',
            'password_confirmation.required' => 'Password konfirmasi harus diisi',
            'password_confirmation.min' => 'Password Konfirmasi minimal 8 karaker',
            'password_confirmation.same' => 'Password konfirmasi tidak sesuai'
        ];
    }
}
