<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;

class AuthController extends Controller
{

    public function register(Request $request){

        $validation = $request->validate([
            'name' => 'required|min:4|max:60',
            'surname' => 'required|min:4|max:60',
            'email' => 'required|max:250|email:rfc,dns',
            'password' => 'required|min:8|max:20|confirmed',
            'password_confirmation' => 'required|min:4|max:250'
        ]);

        try{

            $user = new User();
            $user->name = $request->get('name');
            $user->surname = $request->get('surname');
            $user->email = $request->get('email');
            $user->password = Hash::make($request->get('password'));

            $user->save();

            $user->assignRole('buyer');

            return redirect(route('home'))->withSuccessMessage('¡Cuenta creada con éxito!');

        }catch(Exception $e){

            return back()->withErrorMessage('Opss... Ocurrio un problema: '+ $e);

        }
    }

    public function login(Request $request){


        $validation = $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required|min:8|max:20'
        ]);



        $credential = [
            'password' => $request->input('password'),
            'email' => $request->input('email'),
        ];


        if(!auth()->attempt($credential)) {
        
            return redirect()
                ->route('login.view')
                ->with('message', 'Los datos son erroneos.')
                ->with('message_type', 'danger');
        }else{

            return redirect()->route('home');

        }


    }

    public function logout(Request $request){
        Auth::logout();
        return redirect(route('home'));
    }
}
