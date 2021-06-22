<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function usersView(){
        try{

            $roles = \Spatie\Permission\Models\Role::all();
            $user = \App\Models\User::with('roles')->get();

            $users = [];

            for ($i=0; $i < count($user); $i++) { 

                $admin = 0;
                $seller = 0;

                for ($j=0; $j < count($user[$i]->roles); $j++) { 

                    if($user[$i]->roles[$j]->name === 'admin'){
                        $admin = 1;
                    }

                    if($user[$i]->roles[$j]->name === 'seller'){
                        $seller = 1;   
                    }
                }

                array_push($users,[
                    "id" => $user[$i]->id,
                    "name" => $user[$i]->name,
                    "surname" => $user[$i]->surname,
                    "email" => $user[$i]->email,
                    "isAdmin" => $admin,
                    "isSeller" => $seller
                ]);
            }

            return view('usersAdminPanel')->with([
                'users' => $users
            ]);

        }catch(Exception $e){
            return redirect(route('admin.users'))->withErrorMessage("Ocurrio un problema");
        }
    }
    public function comingSoon(){
        return view('comingSoon');
    }
}
