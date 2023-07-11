<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class RegisterController extends Controller
{
    public function show()
    {
        // return view('auth.register');
        return View::make('auth.register');
    }
    /* public function register(RegisterRequest $request)
    {
        $user = User::create($request->validated());
        dd('berhasil daftar');
    } */
    public function register(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|min:8|same:password'
        ];
        $messages = [
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
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'data' => $validator->messages()]);
        } else {
            $user = User::create($request->all());
            if ($user->wasRecentlyCreated) {
                return response()->json(['success' => true]);
            } else {
                return response()->json(['success' => false]);
            }
        }
    }
}
