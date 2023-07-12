<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    public function index()
    {
        $data['menu'] = 'Master';
        $data['sub_menu'] = 'User';

        if (request()->ajax()) {
            $temp = User::where('role', '!=', 'developer')->orderBy('id', 'desc');
            return DataTables::of($temp)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $action = '
                        <button class="btn btn-xs btn-primary btn-round" data-toggle="tooltip" data-placement="top" title="Edit Data" data-id="'.$row->id.'" onclick="edit($(this))">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </button>
                        <button class="btn btn-xs btn-danger btn-round" data-toggle="tooltip" data-placement="top" title="Hapus Data" data-id="'.$row->id.'" onclick="hapus($(this))">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    ';
                    return $action;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('page.master.user.index', $data);
    }
    public function simpan(Request $request)
    {
        $id = $request->id;
        if (!$id) {
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
    public function get_data($id)
    {
        $data = User::find($id);
        return response()->json($data);
    }
}
