@extends('layouts.main')

@section('products')

    <div id="productsDisplay">
       
        @foreach ($products as $item)
            
            @if (isset($item->images[0]))
                <x-product-card photo="{{ $item->images[0]->photo }}" id="{{ $item->id }}" name="{{ $item->name }}" price="{{ $item->price }}" discount="{{ $item->discount }}" brand="{{ $item->brand }}" model="{{ $item->model }}" gender="{{ $item->gender }}"/>
            @else
                <x-product-card photo="empty_icon" id="{{ $item->id }}" name="{{ $item->name }}" price="{{ $item->price }}" discount="{{ $item->discount }}" brand="{{ $item->brand }}" model="{{ $item->model }}" gender="{{ $item->gender }}"/>
            @endif
        @endforeach
    </div>

@endsection