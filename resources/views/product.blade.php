@extends('layouts.main')

@section('product')

    <div id="productDisplay">
        <!--
        <img src="{$photos[0] asset('/storage/app/'.$photos[0]->photo) }" />
        -->

        <div>

            <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    @for ($i = 1; $i < count($photos); $i++)
                        <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="{{ $i }}" aria-label="Slide {{ $i }}"></button>
                    @endfor
                </div>
                <div class="carousel-inner">
                    @for ($i = 0; $i < count($photos); $i++)
                        <div class="{{ ($i === 0 ? "carousel-item active" : "carousel-item") }}">
                            <img src="{{ asset('storage/'.$photos[$i]->photo) }}" class="d-block w-100" alt="{{ 'Foto del producto '.$product->name }}">
                        </div>
                    @endfor
                  
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
    
            <div>
                @auth        
                    @if (Auth::user()->hasRole('seller') || Auth::user()->hasRole('admin'))
                        <div class="deleteNav">
                            <form action="{{ route('product.delete', $product->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Eliminar producto"/>
                            </form>
                        </div>
                    @endif
                @endauth
                <div class="productContent">
    
                    <div>
                        <h2>{{ $product->name }}</h2>
                        <p>{{ $product->description }}</p>
                    </div>
    
                    @if($product->discount == NULL)
                        <div class="productNoDiscount">
                            <p>${{ $product->price }}</p>
                        </div>
                    @else
                        <div class="productDiscount">
                            <p>${{ $product->price }}</p>
                            <p>${{ $product->discount }}</p>
                        </div>
                    @endif
    
                    <div>
                        <ul>
                            <li>Marca: <span>{{ $product->brand }}</span></li>
                            <li>Modelo: <span>{{ $product->model }}</span></li>
                            <li>Genero: <span>{{ $product->gender }}</span></li>
                        </ul>
                    </div>
    
                    <div>
                        <form method="POST" action="{{ route('purchases.create') }}">
                            @csrf
                            <input type="hidden" name="user_id">
                            <input type="hidden" name="product_id">
                            <input type="submit" value="Comprar ahora"/>
                        </form>
                    </div>
    
                </div>
            </div>
        </div>
       
    </div>

@endsection