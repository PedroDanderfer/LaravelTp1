@extends('layouts.main')

@section('comingSoon')

    <div id="comingSoon">
        <h2>Proximamente en Venturi</h2>
        <p><a href="{{ url()->previous() }}">Volver</a></p>
    </div>

@endsection