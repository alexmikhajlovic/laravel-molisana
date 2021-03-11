@extends ('layouts.app')

@section('title', 'I prodotti | La Molisana')

@section('content')
    
    <div class="products">

        @foreach($contents as $key => $content)
            <div class="product">

            <!-- Cover -->
                <img src="{{$content['src']}}" class="cover" alt="{{$content['titolo']}}" title="{{$content['titolo']}}">

                <!-- Link to product -->
                <div class="overlay">
                    <a href="{{ route('product-page', ['id' => $key]) }}" target="_blank" rel="noopener noreferrer" title="{{$content['titolo']}}">{{$content['titolo']}}</a>
                </div>

            </div>
        @endforeach


    </div>

@endsection