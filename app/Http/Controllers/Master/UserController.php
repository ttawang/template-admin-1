<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
    {
        $data['menu'] = 'Master';
        $data['sub_menu'] = 'User';
        return view('page.master.user.index', $data);
    }
    public function table_user()
    {
        $data['data'] = User::where('role', '!=', 'developer')->orderBy('id', 'desc')->get();
        return View::make('page.master.user.table-user', $data);
    }
    public function simpan(Request $request)
    {
        $id = $request->id;
        if(!$id){
            $rules = [
                'name' => 'required|string|max:255',
                'email' => 'required|email:rfc,dns|unique:users,email',
                'username' => 'required|unique:users,username',
                'password' => 'required|min:8',
                'password_confirmation' => 'required|min:8|same:password'
            ];
        } else {
            $rules = [
                'name' => 'required|string|max:255',
                'email' => [
                    'required',
                    'email:rfc,dns',
                    Rule::unique('users')->ignore($id, 'id'),
                ],
                'username' => [
                    'required',
                    Rule::unique('users')->ignore($id),
                ],
                'password' => 'required|min:8',
                'password_confirmation' => 'required|min:8|same:password'
            ];
        }
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
            return response()->json(['success' => false, 'message' => $validator->messages()]);
        } else {
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'username' => $request->username,
                'password' => bcrypt($request->password)
            ];
            if (!$id) {
                User::create($data);
            } else {
                User::where('id', $id)->update($data);
            }
            return response()->json(['success' => true, 'message' => 'Data berhasil disimpan']);
        }
    }
    public function hapus($id)
    {
        DB::beginTransaction();
        try {
            User::find($id)->delete();
            DB::commit();
            return response()->json(['success' => true, 'message' => 'Data berhasil dihapus']);
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }
    public function get_data($id){
        $data = User::find($id);
        return response()->json($data);
    }
}
