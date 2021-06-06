@extends('layouts.main')

@section('login')

    <div id="loginDisplay">
        <div>

            @if(Session::has('message'))
                <p>{{ Session::get('message') }}</p>
            @endif

            <h2>Inicia sesión</h2>

            <form method="POST"  action="{{ route('auth.login') }}">
                @csrf

                <div>
                    @if($errors->has('email'))

                        <span>{{ $errors->first('email') }}</span>

                    @endif

                    <input type="email" name="email" placeholder="Correo electronico"/>
                </div>

                <div>
                    @if($errors->has('password'))

                        <span>{{ $errors->first('password') }}</span>

                    @endif

                    <input type="password" name="password" placeholder="Contraseña"/>
                </div>

                <input type="submit" value="Inciar sesión"/>
            </form>

            <a href="{{ route('register.view') }}">Crear cuenta nueva</a>
        </div>
    </div>

@endsection