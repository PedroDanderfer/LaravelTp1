@extends('layouts.main')

@section('usersAdminPanel')

    <div id="adminDisplay">

        <table>

            <tr>
                <td>Id</td>
                <td>Nombre & apellido</td>
                <td>Correo electronico</td>
                <td>Opciones</td>
                
            </tr>

            @for ($i = 0; $i < count($users); $i++)

                
                <x-panel.user id="{{ $users[$i]['id'] }}" name="{{ $users[$i]['name'] }}" surname="{{ $users[$i]['surname'] }}" email="{{ $users[$i]['email'] }}" admin="{{ $users[$i]['isAdmin'] }}" seller="{{ $users[$i]['isSeller'] }}" />
            @endfor

        </table>
    
    </div>
@endsection