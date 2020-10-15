<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Spatie\Permission\Models\Role;
class UserController extends Controller
{
    function index(){
      $users = User::all();
      return view('backend.users.index',compact('users'));
    }
    function edit($id){
      $user = User::whereId($id)->firstOrFail();
      $roles = Role::all();
     $selectedRole = $user->roles()->pluck('name')->toArray();
    return view('backend.users.edit',compact('user','roles','selectedRole'));
    }
    function update(Request $request,$id){
      $user = User::whereId($id)->firstOrFail();
      $user->syncRoles($request->get('role'));
      return redirect(action('admin\UserController@edit',$id))->with('status','Successfully Updated!');
    }
}
