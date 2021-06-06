@extends('layouts.main')

@section('register')

    <div id="registerDisplay">
        <div>
            <h2>Registrate</h2>

            <form action="{{ route('auth.register') }}" method="POST">
                @csrf

                <div>
                    @if($errors->has('name'))

                        <span class="errorMsj">{{ $errors->first('name') }}</span>

                    @endif

                    <input type="text" name="name" placeholder="Nombre"/>
                </div>

                <div>
                    @if($errors->has('surname'))

                        <span class="errorMsj">{{ $errors->first('surname') }}</span>

                    @endif

                    <input type="text" name="surname" placeholder="Apellido"/>
                </div>

                <div>
                    @if($errors->has('email'))

                        <span class="errorMsj">{{ $errors->first('email') }}</span>

                    @endif

                    <input type="email" name="email" placeholder="Correo electronico"/>
                </div>

                <div>
                    @if($errors->has('password'))

                        <span class="errorMsj">{{ $errors->first('password') }}</span>

                    @endif

                    <input type="password" name="password" placeholder="Contraseña"/>
                </div>

                <div>
                    @if($errors->has('password_confirmation'))

                        <span class="errorMsj">{{ $errors->first('password_confirmation') }}</span>

                    @endif

                    <input type="password" name="password_confirmation" placeholder="Confirmar contraseña"/>
                </div>

                <input type="submit" value="Registrarme"/>
            </form>

            <a href="{{ route('login.view') }}">Ya tengo cuenta</a>
        </div>
    </div>

@endsection