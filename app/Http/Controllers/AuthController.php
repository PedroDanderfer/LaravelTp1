<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;

class AuthController extends Controller
{

    public function registerView(){
        return view('register');
    }

    public function changeAdmin(Request $request){

        try {
            $user = User::findOrFail(intval($request->get('user_id')));

            try{

                if($request->get('change') === 'assign'){
                    $user->assignRole('admin');
                }else{
                    $user->removeRole('admin');
                }

                return redirect(route('admin.users'))->withSuccessMessage('Usuario actualizado con éxito.');

            }catch(Exception $e){
                return redirect(route('admin.users'))->withErrorMessage("El usuario solicitado (id: $id) no pudo ser actualizado.");
            }
    
        } catch (ModelNotFoundException $e) {
            return redirect(route('admin.users'))->withErrorMessage("El usuario solicitado (id: $id) no pudo ser encontrado.");
        }


    }

    public function changeSeller(Request $request){

        try {
            $user = User::findOrFail(intval($request->get('user_id')));

            try{

                if($request->get('change') === 'assign'){
                    $user->assignRole('seller');
                }else{
                    $user->removeRole('seller');
                }

                return redirect(route('admin.users'))->withSuccessMessage('Usuario actualizado con éxito.');

            }catch(Exception $e){
                return redirect(route('admin.users'))->withErrorMessage("El usuario solicitado (id: $id) no pudo ser actualizado.");
            }
    
        } catch (ModelNotFoundException $e) {
            return redirect(route('admin.users'))->withErrorMessage("El usuario solicitado (id: $id) no pudo ser encontrado");
        }


    }

    public function delete(string $id){

        if(Auth::id() == $id){
            
            return redirect(route('admin.users'))->withErrorMessage('No podes eliminarte a ti mismo');

        }

        try {
            $user = User::findOrFail(intval($id));

            try{

                $user->delete();

                return redirect(route('admin.users'))->withSuccessMessage('Usuario eliminado');

            }catch(Exception $e){
                return redirect(route('admin.users'))->withErrorMessage("El usuario solicitado (id: $id) no pudo ser eliminado.");
            }
    
        } catch (ModelNotFoundException $e) {
            return redirect(route('admin.users'))->withErrorMessage("El usuario solicitado (id: $id) no pudo ser encontrado.");
        }
        
    }

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

            return redirect(route('product.getAll'))->withSuccessMessage('¡Cuenta creada con éxito!');

        }catch(Exception $e){

            return redirect(route('register.view'))->withErrorMessage('Opss... Ocurrio un problema: '+ $e);

        }
    }

    public function loginView(){
        return view('login');
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
        
            return redirect(route('login.view'))->withErrorMessage('Los datos son erroneos');
        }else{

            return redirect()->route('product.getAll');

        }


    }

    public function logout(Request $request){
        Auth::logout();
        return redirect(route('product.getAll'));
    }
}
