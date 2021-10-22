<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Providers\RouteServiceProvider;



class AdminController extends Controller
{
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
   public function index(){
      $data = DB::table('users')->join('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')->get();
      return view('admin.index',['data' => $data]);
   }

   public function show(){
       return view('admin.create');
   }

   protected function create(request $data)
   {
       $data->validate([
           'name' => ['required', 'string', 'max:255'],
           'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
           'password' => ['required', 'string', 'min:8'],
       ]);

       $user = User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
       ]);

       $user->assignRole('admin')->get();
       return redirect()->route('admin')->with('success', "Akun Admin sudah berhasil ditambahkan");
   }

   public function edit($id)
   {
        return view('tahun.edit', compact('tahun'));
   }

   public function update(request $request,$id){
        $aksi = $request->aksi;
        DB::table('model_has_roles')->where('model_id',$id)->update(['role_id' => $request->role]);
        return redirect()->route('admin');
   }

   public function destroy($id){
        DB::table('model_has_roles')->where('model_id',$id)->delete();
        DB::table('users')->where('id',$id)->delete();
        return redirect()->route('admin')->with('success', 'Akun Admin berhasil di hapus');
   }
}