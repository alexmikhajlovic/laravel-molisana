@extends ('layouts.app')

@section('title', $product['titolo'].' | La Molisana')

@section('content')

<div class="product-details">
    
    <!-- Title -->
    <h2>{{$product['titolo']}}</h2>

    <!-- Covers -->
    <img src="{{$product['src-h']}}" alt="">
    <img src="{{$product['src-p']}}" alt="">

    <!-- Overview -->
    <p>{!!$product['descrizione']!!}</p>

    <!-- Other details -->
    <div class="other-details">

        <!-- Width -->
        <div>
            <span><i class="fas fa-info-circle"></i></span>
            <small>{{$product['tipo']}}</small>
        </div>

        <!-- Cooking time -->
        <div>
            <span><i class="fas fa-clock"></i></span>
            <small>{{$product['cottura']}}</small>
        </div>

        <!-- Weight -->
        <div>
            <span><i class="fas fa-weight"></i></span>
            <small>{{$product['peso']}}</small>
        </div>

    </div>
    
</div>

@endsection