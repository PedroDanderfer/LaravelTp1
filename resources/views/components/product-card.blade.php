<div>
    
    <a href="{{ route('product.getId', ['id' => $id]) }}">
        <div>
            @if ($photo === 'empty_icon')
                <img src="{{ asset('images/empty_icon.png') }}" alt="Imagen faltante"/>
            @else
                <img src="{{ asset('storage/'.$photo) }}" alt="{{ $name }}"/>
            @endif
        </div>
        <div>
            <div>
                <div>
                    <h3>{{ $name }}</h3>
                </div>
                <div>
                    <ul>
                        <li>Marca: {{ $brand }}</li>
                        <li>Modelo: {{ $model }}</li>
                        <li>Genero: {{ $gender }}</li>
                    </ul>
                </div>
            </div>
           
            @if (!empty($discount))
                <div class="discount">
                    <div>
                        <p>${{ $discount }}</p>
                    </div>
                    <div>
                        <p>${{ $price}}</p>
                    </div>
                </div>
            @else
                <div class="notDiscount">
                    <p>${{ $price }}</p>
                </div>
            @endif
        </div>
    </a>
</div>