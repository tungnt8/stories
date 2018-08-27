<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Gate;
use Validator;

class UserController extends Controller
{
    public function login(Request $request) {
        $email = $request->input('email');
        $password = $request->input('password');
        if( Auth::attempt(['email' => $email, 'password' => $password])) {
             return redirect()->intended('/admin/users');
        } else {
            $errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không đúng']);
            return redirect()->back()->withInput()->withErrors($errors);
        }
    }

    public function admin_user_list(Request $request) {
        $users = User::get_list_users('', 15);
        return view('users.admin_list', ['users' => $users]);
    }

    public function admin_create() {
        if (Gate::allows('create-user')) {
            return view('users.admin_create');
        }
        return redirect('admin/users')->withErrors(['You do not have permission to create an user']);
    }

    public function admin_store(Request $request) {
        if (!Gate::allows('create-user')) {
            return redirect('admin/users')->withErrors(['You do not have permission to create an user']);
        }
        $validator = Validator::make($request->all(), [
            'email' => 'email',
            'password' => 'required|confirmed|min:6',
            'full_name' => 'required',
            'user_name' => 'required',
            'avatar' => 'required',
            'role' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('admin/users/create')->withErrors($validator)->withInput();
        }

        $check = User::where('email', $request->input('email'))->first();
        if ($check) {
            return redirect('admin/users/create')->withErrors(['Email was created by another account']);
        }

        $user = new User();
        $user->user_name = $request->input('user_name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->avatar = $request->input('avatar');
        $user->full_name = $request->input('full_name');
        $user->role = intval($request->input('role'));
        $user->save();

        return redirect('admin/users')->with('success', 'User has been created successfully !!!');
    }
}
