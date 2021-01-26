<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserAuthController extends Controller
{
    function login()
    {
        return view('users.userLogin');
    }

    function register()
    {
        return view('users.userRegister');
    }

    function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:12'
        ]);

        $query = DB::table('users')
                   ->insert([
                       'name' => $request->name,
                       'lastName' => $request->lastName,
                       'email' => $request->email,
                       'password' => Hash::make($request->password)
                   ]);
        if ($query){
            return back()->with('success', 'Usuário registrado com sucesso');
        }else{
            return back()->with('fail', 'Algo deu errado');
        }
    }

    function check(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12'
        ]);
        $user = DB::table('users')
                 ->where('email', $request->email)
                 ->first();

        if ($user){
            if (Hash::check($request->password, $user->password)){
                $request->session()->put('LoggedUser', $user->id);
                return redirect('home');
            }else{
                return back()->with('fail', 'Senha Inválida');
            }
        }else{
            return back()->with('fail', 'não existe conta com o e-mail informado');
        }
    }

    function home()
    {
        if (session()->has('LoggedUser')){
            $user = DB::table('users')
                     ->where('id', session('LoggedUser'))
                     ->first();
            $data = [
                'LoggedUserInfo' => $user
            ];
        }
        return view('home', $data);
    }

    function logout()
    {
        if (session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('login');
        }
    }
}
