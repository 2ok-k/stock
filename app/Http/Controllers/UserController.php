<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\ChangePasswordRequest;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users.index',compact('users'));
    }

    public function create(){
        $roles = Role::get();//clée étrangère
        return view('users.create',compact('roles'));
    }

    public function store(UserCreateRequest $request){
        $data = $request->validated();
        $data['password'] = bcrypt($data['password']);
        User::create($data);
        return redirect('/users');
    }

    public function edit($id){
        $user = User::find($id);
        $roles = Role::get();//clée étrangère

        return view('users.edit',compact('user','roles'));
    }

    public function update(UpdateUserRequest $request,$id){
        $user = User::find($id);

        $user->name = $request->name;
        $user->role_id = $request->role_id;

        $user->save();

        return redirect('/users');
    }

    public function destroy($id){
        $user = User::find($id);

        $user->delete();
        return redirect('/users');
    }

    public function password_edit($id){
        $user = User::find($id);
        return view('users.password_edit',compact('user'));
    }

    public function password_update(ChangePasswordRequest $request,$id){
        $user = User::find($id);

        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/users');
    }
}
