<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class loginController extends Controller
{
    //
    public function register(Request $request){

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = hash::make($request->password);

        $user->save();

        Auth::login($user);

        return redirect(route('products.index'));
    }


    public function login(Request $request){

        $credentials = [
            "email" => $request->email,
            "password" => $request->password,
            //"active" => true
        ];

        $remember = ($request->has('remember') ? true : false);
        
        if(auth::attempt($credentials, $remember)){
            $request->session()->regenerate();

            return redirect()->intended(route('products.index'));

        }else{
            return redirect('login');
        }

    } 
    


    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
}