<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index(){
        $users = User::paginate(20);
        session()->flash('activeness', 'users');

        return view('admin.users.index',['users'=>$users]);
    }
    public function create(){
        session()->flash('activeness', 'users');
        return view('admin.users.create');

    }
    public function store(){
        session()->flash('activeness', 'users');
        session()->flash('create_user', 'Успешно создано!');
        if(request('role')==1){
            return back();
        }
        $inputs = request()->validate([
            'name'=>['required','max:255'],
            'email'=>['required','max:255'],
            'password'=>['required','max:255','min:8','confirmed'],
        ]);
        $user = new User();
        $user->name = $inputs['name'];
        $user->email = $inputs['email'];
        $user->is_active = request()->has('checkbox')?1:0;
        $user->role_id = request('role');
        $user->password = $inputs['password'];
        $user->save();
        return redirect()->route('users');
    }
    public function update(User $user){
        if(request('role')==1){
            return back();
        }
        session()->flash('activeness', 'users');
        session()->flash('update_user', 'Успешно редактировано!');

        $inputs = request()->validate([
            'name'=>['required','max:255'],
            'email'=>['required','max:255'],
            'password'=>['required','max:255','min:8','confirmed'],
        ]);
        $user->name = $inputs['name'];
        $user->email = $inputs['email'];
        $user->is_active = request()->has('checkbox')?1:0;
        $user->role_id = request('role');
        $user->password = $inputs['password'];
        $user->save();
        return redirect()->route('users');
    }
    public function edit(User $user){
        return view('admin.users.edit', ['user'=>$user]);

    }
    public function destroy(User $user){
        session()->flash('activeness', 'users');
        session()->flash('deleted_user', 'Успешно удалёно!');
        $user->delete();
        return back();
    }
}
