@extends ('layouts.app')

@section('title', 'I prodotti | La Molisana')

@section('content')
    
@foreach($contents as $key => $content)

    <div class="products-container">

        <h2>{{$key}}</h2>

        <div class="products">
    
                @foreach($content as $key => $pasta)
                    <div class="product">
    
                        <!-- Cover -->
                        <img src="{{$pasta['src']}}" class="cover" alt="{{$pasta['titolo']}}" title="{{$pasta['titolo']}}">
        
                        <!-- Link to product -->
                        <div class="overlay">
                            <a href="{{ route('product-page', ['id' => $key]) }}" target="_blank" rel="noopener noreferrer" title="{{$pasta['titolo']}}">{{$pasta['titolo']}}</a>
                        </div>
                        
                    </div>
                @endforeach
    
        </div>

    </div>

@endforeach
        
@endsection